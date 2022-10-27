<?php
    session_start();
    $product = $_POST;
    $_SESSION['product'][] = $product;
    
    header('location:index.php');
?>