<?php
    session_start();
    include_once("classes/utils.php");

    $postid = $_SESSION['BiblioHK_postid'];
    $userid = $_SESSION['BiblioHK_userid'];
    $originalurl = $_SESSION['BiblioHK_url'];

    $utils->bookmark($postid, $userid);

    header("Location: " . $originalurl);
    die;
?>