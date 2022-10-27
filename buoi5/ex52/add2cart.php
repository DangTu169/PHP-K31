<?php
    session_start();
    $product = array();
   if(isset($_SERVER['product'])){
        $product = $_SESSION['$product'];
   }
   $key = $_GET['id'];
   $product = $product[$key];
   $product['product_amount'] = 1;

   $_SESSION['cart'][] = $product;

   header('location: cart.php');
?>