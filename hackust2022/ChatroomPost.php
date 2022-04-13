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
        .comment-session {
            min-width: 1000px;
            min-height: 200px;
            padding: 15px;
            background-color: #d0e2bc;
            font-size: 20px;
            color: #104723;
            border-radius: 15px;
            align-items: center;
            height: auto; 
            width: auto; 
        }

        .post-session{
            min-width:1000px;
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
        }

        .credit{
            text-align:right;
        }

        #button{
            border-radius:4px;
            font-weight: bold;
            border:none;
            float: right;
        }

        #comment-box{
            width:1000px;
            height:250px; 

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
    
                <span><a href="home.php"> Home Page </a> >> <a href="ChatRoom.php">Chat Room</a></span>
    
            </div>  

            <br><br>

            <div class = "post-session">
                <div class = "post-head"> My essay</div>

<div class = "post-content " style="white-space: pre-wrap"> 
    This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing 
    This is some random text for testing This is some random text for testing    This is some random text for testing This is some random text for testing   This is some random text for testing This is some random text for testing 
    This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing 
    This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing 
    This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing  This is some random text for testing This is some random text for testing   
</div>

                <br>
                <div class = credit>
                    <div class = "post-stat">20 bookmarked</div>
                    <div class = "post-stat"> Written by admin</div>
                    <div class = "post-stat"> at 12/4/2022</div>
                </div>

            </div>

            <br>
            
            <div class = "post-session">
                <div class = "post-head"> My essay</div>

<div class = "post-content " style="white-space: pre-wrap"> 
    Wow this essay is boring  
    Lmao what am I even reading.
    Well tbf this is just for testing soooo lol
</div>

                <br>
                <div class = credit>
                    <div class = "post-stat"> Written by test</div>
                    <div class = "post-stat"> at 12/4/2022</div>
                </div>
                
            </div>


            <br>
            
            <div class ="comment-session center">
                <form method = "post">
                    Comment⠀⠀: <br>
                    <textarea class ="comment" id = "comment-box" placeholder="Type your comments here" ></textarea><br><br>
                    <input type = "submit" id = "button" value = "Submit"><br><br>
                </form>
            </div>

        </header>

    </body>

</html>