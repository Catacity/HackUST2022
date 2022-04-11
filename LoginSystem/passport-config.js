const LocalStrategy = require("passport-local").Strategy
const bcrypt = require("bcrypt")

function initialize(passport, getUserFromEmail, getUserById) {
    const authenticateUser = async (email, password, done) => {
        const user = await getUserFromEmail(email)
        if (user == null) {
            return done(null, false, { message: "No user with that email" })
        }
        try {
            if (await bcrypt.compare(password, user.password)) {
                return done(null, user)
            }
            else {
                return done(null, false, { message: "Password is incorrect" })
            }
        }
        catch (e) {
            return done(e)
        }
    }
    passport.use(new LocalStrategy({ usernameField: "email" }, authenticateUser))
    passport.serializeUser(function (user, done) {
        done(null, user.user_id)
    })
    passport.deserializeUser(async function (id, done) {
        done(null, await getUserById(id))
    })
}

module.exports = initialize