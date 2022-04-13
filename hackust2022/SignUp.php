<?php
    include("classes/connect.php");
    include("classes/register.php");

    $username = "";
    $gender = "";
    $email = "";
    $qualifications = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    # Before clicking submit, the request method was "GET"
        $register= new register();   
        $result = $register->validate($_POST); 
        if ($result != ""){  
            echo "<div style = 'text-align:center;font-size:12px;color:white;background-color:grey;border-radius: 15px;'>";
            echo "The following error(s) have occured: <br><br>";
            echo $result;
            echo "</div>";
        }

        else{
            header("Location: Login.php");
            die;
        }

        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $qualifications = $_POST['qualifications'];

    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>香港人嘅英文圖書館</title>

    <link rel="stylesheet" href="style.css">
    <!--- for font awesome icons ---> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Gloria Hallelujah' rel='stylesheet'>

</head>
<style>
    #button{
        width:300px;
        height:35px;
        border-radius:4px;
        font-weight: bold;
        border:none;
        background-color: rgb(216,153,98); 
    }

</style>
<body>
    <header>
        <div class="navbar">
            <div class="icon">
                <a href= "home.php"><img src="icon.jpeg" width="250" height="100"></a>
            </div>

            <div class = "Account">
                <b><a href="Login.php">Login</a></b>
            </div>

        </div>   


    </header>

    <div class ="in-out-box">
        <div class = "signup-text">Sign Up</div><br>
            <form method="post" action = "signup.php">

                Username⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀: <input value="<?php echo $username ?>" name = "username" type = "text" id = "text" placeholder="Your username on BiblioHK"><br><br>
                Gender⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀: <select id ="text" name = "gender">
                    <option><?php echo $gender ?></option><option>M</option><option>F</option></select><br><br>
                Email⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀: <input value="<?php echo $email ?>" name = "email" type = "text" id = "text" placeholder="Your email"><br><br>
                Password⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀: <input name = "password" type = "password" id = "text" placeholder="Password"><br>
                Retype password⠀⠀⠀⠀⠀⠀⠀⠀⠀: <input name = "password2" type = "password" id = "text" placeholder="Password"><br><br>
                Education/Qualitifcations⠀: <input value="<?php echo $qualifications ?>" name = "qualifications" type = "text" id = "text" placeholder="e.g:Primary 1, Secondary 2"><br><br>
                
                <input type = "submit" id = "button" value = "Sign up"><br><br>
                
            </form>
    </div>
   

    <script src="main.js"></script>
</body>
</html>