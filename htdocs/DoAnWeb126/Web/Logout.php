<?php 
    session_start();
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_avatar']);
    unset($_SESSION['cart']);
    header("location: Home.php");
?>

