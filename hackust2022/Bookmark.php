<?php
    session_start();
    include_once("classes/utils.php");

    try {
        $url_components = parse_url(Utils::getCurrentUrl());
        parse_str($url_components['query'], $params);

        $postid = $_SESSION['BiblioHK_postid'];
        $userid = $_SESSION['BiblioHK_userid'];
        $originalurl = $_SESSION['BiblioHK_url'];

        $utils->bookmark($postid, $userid);

        header("Location: " . $originalurl);
        die;
    }
    catch (\Exception $e) {
        header("Location: home.php");
        die;
    }
?>