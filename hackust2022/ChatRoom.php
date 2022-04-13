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
    .Create-a-post{
        width:200px;
        height:60px;
        padding:10px;
        margin-right:35px;
        float:right;
        background-color: plum;
        border-radius: 5px;
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

            <div class = "search_bar">
                Search: <input type="text" id="search_box" placeholder="Search for a Chat Room">⠀<i class="fa fa-search"></i>
            </div>
            <div class = "Create-a-post">
                <b><a href="CreatePostChatRoom.php">Create a post</a></b>
            </form>

        </div>   


    </header>

    <div class ="container">
        <div class = "subforum">
            <div class = "subforum-head">
                <div class = "subforum-title">
                    <h1>Chat Room</h1>    
                </div>   

                <div class = "subforum-author">
                    <h1>Author</h1> 
                </div>     

                <div class = "subforum-status">
                    <h1>Status</h1> 
                </div>  

                <div class = "subforum-info">
                    <h1>Last reply</h1> 
                </div>  
            </div>

            <div class="post-row ">
                <!--- item 1 in the row --->
                <div class = "post-title subforum-column center">
                    <a href="ChatroomPost.php">Test post title hello I'm a decently long title for testing </a>   
                </div>
                <!--- item 2 in the row --->
                <div class= "post-author post-column">
                    <h1><a href="Profile.php">Admin</a></h1>                      
                </div> 
                <!--- item 3 in the row --->
                <div class = "post-stats post-column center">
                    <span>20 bookmarked</span>
                </div>
                <!--- item 4 in the row --->
                <div class= "post-info post-column">
                    <b><a href="">Last reply</a></b> by <a href="Profile.php">Admin</a> 
                    <!--- The <br> tag inserts a single line break.--->
                    <br> on <small> 6/4/2022 </small>
                </div>
            
            </div>           
            
        </div>

    <script src="main.js"></script>
</body>
</html>