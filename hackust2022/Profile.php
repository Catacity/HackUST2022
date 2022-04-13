<?php
    session_start();
    include_once("classes/connect.php");
    include_once("classes/users.php");
    include_once("classes/utils.php");
    // print_r($_SESSION);

    // echo Utils::getCurrentUrl();
    $url_components = parse_url(Utils::getCurrentUrl());
    if (array_key_exists('query', $url_components)) {
        parse_str($url_components['query'], $params);
        $userid = $params['userid'];
    }
    else {
        $userid = $_SESSION['BiblioHK_userid'];
    }
    // echo $userid;

    // if (!isset($_SESSION['BiblioHK_pageuserid'])){
    //     header("Location: home.php");
    //     die;
    // }

    $users = new User();
    
    $result = $users->get_data($_SESSION['BiblioHK_pageuserid']);

    $username = "";
    $gender = "";
    $qualifications = "";

    if ($result){
        # User exist
        $username = $result['username'];
        $gender = $result['gender'];
        $qualifications = $result['qualifications'];
    }

    else{
        // Cannot find the specified user in the database!
        header("Location: home.php");
        die;
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
<body>
    <header>
        <div class="navbar">
            <div class="icon">
                <a href= "home.php"><img src="icon.jpeg" width="250" height="100"></a>
            </div>

        </div>   


    </header>

    <div class ="User_Description_Box">
        <div class = "about_user">About <?php echo $result['username'];?></div><br>
        Username : <?php echo $result['username'];?><br><br>
        Gender : <?php echo $result['gender'];?><br><br>
        Education/Qualitifcations⠀: <?php echo $result['qualifications'];?><br><br>
    </div>

    <script src="main.js"></script>
</body>
</html>