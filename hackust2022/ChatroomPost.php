<?php
    session_start();
    
    #print_r($_SESSION);
    include_once("classes/connect.php");
    include_once("classes/login.php");
    include_once("classes/post.php");
    include_once("classes/users.php");
    include_once("classes/utils.php");
    #print_r($_SESSION);

    if (!isset($_SESSION['BiblioHK_postid'])){
        header("Location: home.php");
        die;
    }
    
    $url_components = parse_url(Utils::getCurrentUrl());
    if (array_key_exists('query', $url_components)) {
        // Url parameters exist
        parse_str($url_components['query'], $params);
        $_SESSION['BiblioHK_postid']= $params['postid'];
    }

    $_SESSION['BiblioHK_url'] = "ChatroomPost.php";
    $post = new post($database);
    
    $result = $post->get_data($_SESSION['BiblioHK_postid']);

    $title = "";
    $content = "";
    $userid = "";
    $date = "";

    if ($result){
        # post exist
        $title = $result['title'];
        $content = $result['content'];
        $userid = $result['userid'];
        $date = $result['date'];

        $user = new User($database);
        $findname = $user->get_data($userid);

        $username = "";
    
        if ($findname){
            # User exist
            $username = $findname['username'];
        }
    
        else{
            # Cannot find the specified user in the database!
            header("Location: home.php");
            die;
        }
        
        $comments = $utils->getComments($_SESSION['BiblioHK_postid']);
        $i = 0;
        $comment_count = 0;

        if($comments){
            $comment_count = count($comments);       
        }
    }

    else{
        # Cannot find the specified user in the database!
        header("Location: home.php");
        die;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        # Before clicking submit, the request method was "GET" 
        #print_r($_POST); 
        $commentresult = $post->validate_comment($_POST); 
        #echo $result;

        if ($commentresult != ""){  
            echo "<div style = 'text-align:center;font-size:12px;color:white;background-color:grey;border-radius: 15px;'>";
            echo "The following error(s) have occured: <br><br>";
            echo $commentresult;
            echo "</div>";
        }

        else{
            #print_r ($_SESSION);
            header("Location: ChatroomPost.php");
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
    <title>???????????????????????????</title>

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
        <title>???????????????????????????</title>
    
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
                    <b>?????????</b>
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
                <div class = "post-head"> <?php echo $result['title'];?> </div>

<div class = "post-content " style="white-space: pre-wrap"> 
    <?php echo $result['content'];?>
</div>

                <br>
                <div class = credit>
                    <div class = "post-stat">20 <a href="Bookmark.php">bookmarked</a></div>
                    <div class = "post-stat"> Written by <?php echo $findname['username'];?></div>
                    <div class = "post-stat"> at <?php echo $result['date'];?></div>
                </div>

            </div>

            <br>
            
            <?php while ($i < $comment_count): ?>
            <div class = "post-session">
                <?php   
                    $finduser = new User($database);
                    $namefound = $finduser->get_data($comments[$i]['userid']);
                    $name = $namefound['username']
                ?>

                <div class = "post-head"><?php echo $name;?></div>

<div class = "post-content " style="white-space: pre-wrap"> 
    <?php echo $comments[$i]['content']?>
</div>

                <br>
                <div class = credit>
                    <div class = "post-stat"> Written by <?php echo $name?></div>
                    <div class = "post-stat"> at <?php echo $comments[$i]['date']?></div>
                </div>
                
            </div>

            <br>
            <?php $i = $i + 1?>
            <?php endwhile; ?>

            <div class ="comment-session center">
                <form method = "post">
                    Comment??????: <br>
                    <textarea name = "comment" class ="comment" id = "comment-box" placeholder="Type your comments here" ></textarea><br><br>
                    <input type = "submit" id = "button" value = "Submit"><br><br>
                </form>
            </div>

        </header>

    </body>

</html>