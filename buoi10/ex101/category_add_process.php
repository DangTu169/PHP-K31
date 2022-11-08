<?php
    require_once('connect.php');
    $data = $_POST;
    $sql = "INSERT INTO categories(category_name,parent_id,category_description) VALUES('".$data['name']."','".$data['parentId']."','".$data['description']."')";
    $status = $conn->query($sql);
    if($status){
        header('location: categories.php');
    }else{
        header('location: category_add.php');
    }
?>