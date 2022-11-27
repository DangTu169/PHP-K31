<?php
    // if(!isset($_GET['mod'])){
    //     echo"Tham số mod không tồn tại";
    //     exit();
    // }
    // if(!isset($_GET['act'])){
    //     echo"Tham số act không tồn tại";
    //     exit();
    // }
    $mod = $_GET['mod']??'category';
    $act = $_GET['act']??'index';

    $controller_name = ucfirst($mod)."Controller";
    // var_dump($mod,$controller_name);
    // die();

    $path = "./Controllers/".$controller_name.".php";

    if(!file_exists($path)){
        echo"file $path không tồn tại";
        exit();
    }

    require_once("./Controllers/".$controller_name.".php");

    $controller = new $controller_name();

    // if(!method_exists($controller_obj, $act)){
    //     echo"$act không tồn tại";
    //     exit();
    // }

    $controller->$act();
