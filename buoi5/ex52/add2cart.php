<?php
require_once('data.php');
session_start();

if (isset($_GET['id'])) {
    $msp = $_GET['id'];
    $checkProductInSession = false;
    $productsInSession = isset($_SESSION['products']) ? $_SESSION['products'] : [];
    foreach ($productsInSession as $key => $product) {
        if ($product['id'] == $msp) {
            if (isset($_GET['quantity'])) {
                $_SESSION['products'][$key]['amount'] = $_GET['quantity'];
            } else {
                $_SESSION['products'][$key]['amount']++;
            }
            $checkProductInSession = true;
            break;
        }
    }
    if ($checkProductInSession === false) {
        foreach ($products as $key => $product) {
            if ($product['msp'] == $id) {
                $products[$key]['amount'] = 1;
                $_SESSION['products'][] = $products[$key];
                break;
            }
        }
    }
}
header('Location: cart.php');