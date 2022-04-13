<?php
    session_start();
    include_once("classes/login.php");

    $email = "";
    $password = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    # Before clicking submit, the request method was "GET"  
        $result = $login->validate($_POST); 
        #echo $result;

        if ($result != ""){  
            echo "<div style = 'text-align:center;font-size:12px;color:white;background-color:grey;border-radius: 15px;'>";
            echo "The following error(s) have occured: <br><br>";
            echo $result;
            echo "</div>";
        }

        else{
            #print_r ($_SESSION);
            header("Location: Profile.php");
            die;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

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
        height:40px;
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
                <b><a href="SignUp.php">Sign Up</a></b>
            </div>

        </div>   


    </header>

    <div class ="in-out-box">
        <div class = "signup-text">Log in</div><br><br>
        <form method = "post">
            Email⠀⠀⠀: <input value = "<?php echo $email ?>" name = "email" type = "text" id = "text" placeholder="Your email"><br><br>
            Password: <input value = "<?php echo $password ?>" name = "password" type = "password" id = "text" placeholder="Password"><br><br>
            <input type = "submit" id = "button" value = "Log in"><br><br>
        </form>
    </div>
   

    <script src="main.js"></script>
</body>
</html>