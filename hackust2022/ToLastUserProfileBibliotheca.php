<?php
    // Logging out
    session_start();
    include_once("classes/connect.php");
    include_once("classes/utils.php");
    include_once("classes/post.php");

    $category = "bibliotheca";
    $last_post_n_user = $utils->getLastPostIdAndAuthorId($category);
    $_SESSION['BiblioHK_pageuserid'] = $last_post_n_user["userid"];
    $_SESSION['BiblioHK_postid'] = $last_post_n_user["postid"];

    // Redirect To profile
    header("Location: Profile.php");
    die;
?>