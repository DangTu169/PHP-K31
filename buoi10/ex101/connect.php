<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_bai10";
    $conn = new mysqli($severname, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();

//        return false;
    }

    return $conn;
?>