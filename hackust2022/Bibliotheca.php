<?php
    session_start();
    
    include_once("classes/connect.php");
    include_once("classes/login.php");
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

            <span><a href="home.php"> Home Page </a> >> <a href="Bibliotheca.php">The Bibliotheca</a></span>

        </div>   


    </header>

    <div class="container">
        <div class = "middleforum-head">
            <div class = "subforum-title">
                <h1>The Bibliotheca -- ordered by word count</h1> 
            </div>     

            <div class = "subforum-status">
                <h1>Status</h1> 
            </div>  

            <div class = "subforum-info">
                <h1>Last reply</h1> 
            </div>  

        </div> 

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="lessthan100.php">Less than 100 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="ToLastUserProfilelt100.php">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>
            
        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 200 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 300 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 400 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 500 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 600 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 700 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 800 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 900 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 1000 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 1200 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 1500 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">Less than 2000 words</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

        <div class="subforum-row ">
            <!--- item 1 in the row --->
            <div class = "subforum-icon subforum-column center">
                <i class = "fa fa-book"> </i>
            </div>
            <!--- item 2 in the row --->
            <div class= "subforum-description subforum-column">
                <h1><a href="">2000 words or above</a></h1>                        
            </div> 
            <!--- item 3 in the row --->
            <div class = "subforum-stats subforum-column center">
                <span>10 posts</span>
            </div>
            <!--- item 4 in the row --->
            <div class= "subforum-info subforum-column">
                <b><a href="">Last Post</a></b> by <a href="Profile.html">Admin</a> 
                <!--- The <br> tag inserts a single line break.--->
                <br> on <small> 6/4/2022 </small>
            </div>
        </div>

    </div>

    <script src="main.js"></script>
</body>
</html>