<?php

    $mod = $_GET['mod'];
    $act = $_GET['act'];

    $controller_name = ucfirst($mod)."Controller";

    // echo"$controller_name";
    // die();

    require_once("./Controllers/".$controller_name.".php");

    $controller = new $controller_name();

    $controller->$act();
