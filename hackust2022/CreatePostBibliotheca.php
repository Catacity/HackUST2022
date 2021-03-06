<?php
    session_start();
    
    include_once("classes/connect.php");
    include_once("classes/login.php");
    include_once("classes/post.php");
    include_once("classes/utils.php");

    if(!isset($_SESSION['BiblioHK_userid'])){
        // User is not logged in, so redirecting user to log in page
        header("Location: Login.php");
        die;
    } 

    $_POST['userid'] = $_SESSION['BiblioHK_userid'];
    $_POST['category'] = "<100";
    $_SESSION['BiblioHK_postid'] = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        # Before clicking submit, the request method was "GET"
        $post= new post($database);   
        $result = $post->validate($_POST); 
        if ($result != ""){  
            echo "<div style = 'text-align:center;font-size:12px;color:white;background-color:grey;border-radius: 15px;'>";
            echo "The following error(s) have occured: <br><br>";
            echo $result;
            echo "</div>";
        }

        #print_r($result);
        #print_r($_POST);
        else{
            header("Location: BibliothecaPost.php");
            die;
        }

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

    .question{
        text-align: left;
        margin-left:170px;
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
            <form method="post"> <!--- action = "BibliothecaPost.php"> destination when submit --->

                Title:<br>
                <textarea name ="title" class ="title" id = "title-box" placeholder="Title of your forum post" ></textarea><br><br>
                
                Content:<br>
                    <textarea name ="content" class ="content" id = "content-box" placeholder="Write here!" ></textarea><br><br>

                <br><br>

                MC Questions you set for the readers (use this to collect information regarding how the user thinks about certain things of your writing): <br>
                <div class = "question"> Q1:<br> </div>
                <textarea name ="Q1question" class ="title" id = "title-box" placeholder="Question 1" ></textarea><br><br>

                <div class = "question"> Choice 1:<br> </div>
                <textarea name = "Q1Option1" class ="title" id = "title-box" placeholder="Choice 1" ></textarea><br><br>
                <div class = "question"> Choice 2:<br> </div>
                <textarea name = "Q1Option2" class ="title" id = "title-box" placeholder="Choice 2" ></textarea><br><br>
                <div class = "question"> Choice 3:<br> </div>
                <textarea name = "Q1Option3" class ="title" id = "title-box" placeholder="Choice 3" ></textarea><br><br>
                <div class = "question"> Choice 4:<br> </div>
                <textarea name = "Q1Option4" class ="title" id = "title-box" placeholder="Choice 4" ></textarea><br><br>

                <br><br>

                <div class = "question"> Q2:<br> </div>
                <textarea name ="Q2question" class ="title" id = "title-box" placeholder="Question 1" ></textarea><br><br>

                <div class = "question"> Choice 1:<br> </div>
                <textarea name = "Q2Option1" class ="title" id = "title-box" placeholder="Choice 1" ></textarea><br><br>
                <div class = "question"> Choice 2:<br> </div>
                <textarea name = "Q2Option2"class ="title" id = "title-box" placeholder="Choice 2" ></textarea><br><br>
                <div class = "question"> Choice 3:<br> </div>
                <textarea name = "Q2Option3" class ="title" id = "title-box" placeholder="Choice 3" ></textarea><br><br>
                <div class = "question"> Choice 4:<br> </div>
                <textarea name = "Q2Option4" class ="title" id = "title-box" placeholder="Choice 4" ></textarea><br><br>

                    <br><br>

                <div class = "question"> Q3:<br> </div>
                <textarea name ="Q3question" class ="title" id = "title-box" placeholder="Question 1" ></textarea><br><br>

                <div class = "question"> Choice 1:<br> </div>
                <textarea name = "Q3Option1" class ="title" id = "title-box" placeholder="Choice 1" ></textarea><br><br>
                <div class = "question"> Choice 2:<br> </div>
                <textarea name = "Q3Option2" class ="title" id = "title-box" placeholder="Choice 2" ></textarea><br><br>
                <div class = "question"> Choice 3:<br> </div>
                <textarea name = "Q3Option3" class ="title" id = "title-box" placeholder="Choice 3" ></textarea><br><br>
                <div class = "question"> Choice 4:<br> </div>
                <textarea name = "Q3Option4" class ="title" id = "title-box" placeholder="Choice 4" ></textarea><br><br>

                <br><br>

                <div class = "question"> Q4:<br> </div>
                <textarea name ="Q4question" class ="title" id = "title-box" placeholder="Question 1" ></textarea><br><br>

                <div class = "question"> Choice 1:<br> </div>
                <textarea name = "Q4Option1" class ="title" id = "title-box" placeholder="Choice 1" ></textarea><br><br>
                <div class = "question"> Choice 2:<br> </div>
                <textarea name = "Q4Option2" class ="title" id = "title-box" placeholder="Choice 2" ></textarea><br><br>
                <div class = "question"> Choice 3:<br> </div>
                <textarea name = "Q4Option3" class ="title" id = "title-box" placeholder="Choice 3" ></textarea><br><br>
                <div class = "question"> Choice 4:<br> </div>
                <textarea name = "Q4Option4" class ="title" id = "title-box" placeholder="Choice 4" ></textarea><br><br>

                <br><br>

                <input type = "submit" id = "button" value = "Create forum post"><br><br>
                
            </form>
    </div>
   

    <script src="main.js"></script>
</body>
</html>