<?php
    session_start();
    $user = $_POST;
    $_SESSION['user'][] = $user;
    
    header('location:info_list.php');
?>