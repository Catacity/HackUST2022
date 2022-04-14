<?php
    // Logging out
    session_start();
    unset($_SESSION['BiblioHK_userid']);

    // Return to homepage
    header("Location: home.php");
    die;
?>