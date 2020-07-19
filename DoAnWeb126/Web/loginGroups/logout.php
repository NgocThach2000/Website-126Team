<?php 
    session_start();
    unset($_SESSION['groups_name']);
    unset($_SESSION['groups_id']);
    header("location: /../DoAnWeb126/Web/Home.php");
?>

