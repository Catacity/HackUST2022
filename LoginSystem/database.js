const mysql = require('mysql')
const util = require('util')

const con = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: process.env.MYSQL_ROOT_PASSWORD,
    database: 'bibliohk'
})

con.connect((err) => {
    if (err) {
        console.log("Connection error")
    }
    else {
        console.log("Successfully Connected to MySQL database")
    }
})

const query = util.promisify(con.query).bind(con)

function addUserLoginInfo(name, email, password) {
    con.query("INSERT INTO bibliohk.users (name, email, password) VALUES (\"" + name + "\", \"" + email + "\", \"" + password + "\");", 
    (err, result) => {
        if (err) {
            console.log("Add Error: " + err)
        }
        else {
            console.log("Successfully Added")
        }
    })
}

async function getUserFromEmail(email) {
    result = await query("SELECT * FROM bibliohk.users WHERE email = \"" + email + "\";")
    return result[0]
}

async function getUserById(id) {
    result = await query("SELECT * FROM bibliohk.users WHERE user_id = " + id + ";")
    return result[0]
}

module.exports = {
    connection: con,    
    addUserLoginInfo,
    getUserFromEmail,
    getUserById
}