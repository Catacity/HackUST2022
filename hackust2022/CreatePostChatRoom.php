<?php
    session_start();
    
    include("classes/connect.php");
    include("classes/login.php");
    #print_r($_SESSION);
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
        background-color: rgb(30,144,255); 
    }

    #content-box{
        width:1000px;
        min-height:900px; 
        height:auto;
    }

    #title-box{
        width:1000px;
        height:50px; 

    }

</style>
<body>
    <header>
        <div class="navbar">
            <div class="icon">
                <a href= "home.php"><img src="icon.jpeg" width="250" height="100"></a>
            </div>

            <?php if (!isset($_SESSION['BiblioHK_userid'])): ?>
                <div class = "Account">
                    <b><a href="Login.php">Login</a></b>
                    <b>⠀⠀⠀</b>
                    <b><a href="SignUp.php">Sign Up</a></b>
                </div>
    
                <?php else: ?>
                    <div class = "Account">
                        <b><a href="Logout.php">Log out</a></b>
                    </div>    
            <?php endif; ?>

        </div>   


    </header>

    <div class ="post-creation-box">
        <div class = "signup-text">Create a forum post</div><br>
            <form method="post" action = "ChatroomPost.html">

                Title:<br>
                <textarea class ="title" id = "title-box" placeholder="Title of your forum post" ></textarea><br><br>
                
                Content:<br>
                    <textarea class ="content" id = "content-box" placeholder="Write here!" ></textarea><br><br>

                <input type = "submit" id = "button" value = "Create forum post"><br><br>
                

            </form>
    </div>
   

    <script src="main.js"></script>
</body>
</html>