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
<body>
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
        .post-session{
            min-width: 1000px;
            min-height: 250px;
            padding: 15px;
            background-color: #d0e2bc;
            font-size: 20px;
            color: #104723;
            border-radius: 15px;  
            height: auto;  
            width: auto;
        }

        .post-head{
            font-size: 25px;
            float:top;
        }

        .post-content{
            color: #000000; 
            tab-size: 2px;   
        }

        .credit{
            text-align:right;
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
    
                <span><a href="home.php"> Home Page </a> >> <a href="BiblioHK.php">About this forum</a></span>
    
            </div>  

            <br><br>

            <div class = "post-session">
                <div class = "post-head"> About BiblioHK </div>

<div class = "post-content" style="white-space: pre-wrap"> 
    Welcome to BiblioHK! This forum is created in order to provide an organized platform for Hong Kongers to share their written work.In the Bibliotheca session, people's work are classified based on their word count, so that users that are less fluent in English can choose to read posts with less number of words in total if they want.

    Users are highly recommended to communicate others in English, especially in the Bibliotheca session. However, such language rule / recommendation is not strictly applied in the chat room session. 

    If you have any questions or you want to seek advices from others, feel free to ask a question in the chat room session! 
</div>

                <br>
                <div class = credit>
                    <div class = "post-stat"> Written by admin</div>
                    <div class = "post-stat"> on 12/4/2022</div>
                </div>

            </div>

            <br>

        </header>

    </body>

</html>