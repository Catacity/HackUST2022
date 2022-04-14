<?php
    session_start();
    
    include_once("classes/connect.php");
    include_once("classes/login.php");
    include_once("classes/category.php");
    include_once("classes/users.php");
    include_once("classes/utils.php");
    #print_r($_SESSION);

    $result = $utils->getTopTenBookmarkedPosts();
    #echo $result;
    #print_r($result);
    $users = new User($database);
    $username = "";
    #print_r($result);
    $no_of_posts = count($result);

    $i = 0;
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

            <div class = "Account">
                <b><a href="Login.html">Login</a></b>
                <b>⠀⠀⠀</b>
                <b><a href="SignUp.html">Sign Up</a></b>
            </div>

            <span><a href="home.php"> Home Page </a> >> <a href="Recommendations.php">Recommended reading of the week</a></span>

        </div>   


    </header>

    <div class ="container">
        <div class = "subforum">
            <div class = "subforum-head">
                <div class = "subforum-title">
                    <h1>Here are the posts that have been bookmarked the most!</h1>    
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

            <?php while ($i < $no_of_posts): ?>
                <div class="post-row ">
                <!--- item 1 in the row --->
                <div class = "post-title subforum-column center">
                    <?php 
                        $urlpost = "BibliothecaPost.php?postid=" . $result[$i]["postid"];
                    ?>
                    <a href=<?php echo $urlpost;?>><?php echo $result[$i]['title'];?></a>   
                </div>
                <!--- item 2 in the row --->
                <div class= "post-author post-column">

                    <?php 
                        $tempid = $result[$i]['userid'];
                        $username = $users->get_data($tempid);
                        $urluser = "Profile.php?userid=" . $result[$i]["userid"];
                    ?>

                    <h1><a href=<?php echo $urluser;?>><?php echo $username['username'] ?></a></h1>                      
                </div> 
                <!--- item 3 in the row --->
                <div class = "post-stats post-column center">
                    <span>20 bookmarked</span>
                </div>
                <!--- item 4 in the row --->
                <div class= "post-info post-column">
                    <b><a href="">Last reply</a></b> by <a href="Profile.php">Someone</a> 
                    <!--- The <br> tag inserts a single line break.--->
                    <br> on <small> 6/4/2022 </small>
                </div>
            </div> 

            <?php $i = $i + 1 ?>          
            <?php endwhile; ?>

        </div>

    <script src="main.js"></script>
</body>
</html>