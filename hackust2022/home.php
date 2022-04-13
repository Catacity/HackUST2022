<?php
    session_start();
    
    include("classes/connect.php");
    include("classes/login.php");
    include("classes/utils.php");
    #print_r(Utils::guidv4());
     print_r($_SESSION);
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

    <div class ="container">
        <div class = "subforum">
            <div class = "subforum-title">
                <h1>About this forum</h1>    
            </div>   
            <div class="about-row ">
                <!--- item 1 in the row --->
                <div class = "subforum-icon subforum-column center">
                    <i class="fa fa-commenting-o"></i>
                </div>
                <!--- item 2 in the row --->
                <div class= "subforum-description subforum-column">
                    <h1><a href="BiblioHK.php">BiblioHK</a></h1>                        
                    <p>This is an English forum that allows fellow Hong Kongers to share the things they have written. Every type of writing are all welcomed here!</p>
                </div> 

            </div>
        </div>
    </div>
        
    <div class ="container">
        <div class = "subforum">
            <div class = "subforum-title">
                <h1>The Bibliotheca</h1>    
            </div>   

            <div class="subforum-row ">
                <!--- item 1 in the row --->
                <div class = "subforum-icon subforum-column center">
                    <i class = "fa fa-book"> </i>
                </div>
                <!--- item 2 in the row --->
                <div class= "subforum-description subforum-column">
                    <h1><a href="Bibliotheca.php">Share your masterpiece and read other's work here!</a></h1>                        
                    <p>The more the merrier! Please don't forget to comment on other people's work to let them know how they can improve! :)</p>
                </div> 
                <!--- item 3 in the row --->
                <div class = "subforum-stats subforum-column center">
                    <span>10 posts</span>
                </div>
                <!--- item 4 in the row --->
                <div class= "subforum-info subforum-column">
                    <b><a href="">Last Post</a></b> by <a href="Profile.php">Admin</a> 
                    <!--- The <br> tag inserts a single line break.--->
                    <br> on <small> 6/4/2022 </small>
                </div>
            
            </div>
            
            <hr class="subforum-divider">

            <div class="subforum-row ">
                <!--- item 1 in the row --->
                <div class = "subforum-icon subforum-column center">
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </div>
                <!--- item 2 in the row --->
                <div class= "subforum-description subforum-column">
                    <h1><a href="Recommendations.php">Recommended reading of the week</a></h1>                        
                    <p>Here are the top few posts being bookmarked the most this week!</p>
                </div> 
                <!--- item 3 in the row --->
                <div class = "subforum-stats subforum-column center">
                    <span>10 posts</span>
                </div>
                <!--- item 4 in the row --->
                <div class= "subforum-info subforum-column">
                    <b><a href="">Last Post</a></b> by <a href="Profile.php">Admin</a> 
                    <!--- The <br> tag inserts a single line break.--->
                    <br> on <small> 6/4/2022 </small>
                </div>
            
            </div>

        </div>
    </div>  

        <div class ="container">
            <div class = "subforum">
                <div class = "subforum-title">
                    <h1>The Chatroom</h1>    
                </div>   

                <div class="subforum-row ">
                    <!--- item 1 in the row --->
                    <div class = "subforum-icon subforum-column center">
                        <i class="fa fa-question-circle"></i>
                    </div>
                    <!--- item 2 in the row --->
                    <div class= "subforum-description subforum-column">
                        <h1><a href="ChatRoom.php">Feel free to ask your questions related to English here!</a></h1>                        
                        <p>You are welcome to ask any questions here! (可以喺呢度用中文問問題~)</p>
                    </div> 
                    <!--- item 3 in the row --->
                    <div class = "subforum-stats subforum-column center">
                        <span>10 posts</span>
                    </div>
                    <!--- item 4 in the row --->
                    <div class= "subforum-info subforum-column">
                        <b><a href="">Last Post</a></b> by <a href="Profile.php">TestUser</a> 
                        <!--- The <br> tag inserts a single line break.--->
                        <br> on <small> 6/4/2022 </small>
                    </div>

                </div>

            </div>
        </div>

    <script src="main.js"></script>
</body>
</html>