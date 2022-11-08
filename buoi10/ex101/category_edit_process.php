<?php
    require_once('connect.php');
    $data = $_POST;
    $id = (isset($_GET['id'])?$_GET['id']:0);
    $sql = "UPDATE categories SET category_name='".$data['name']."',category_description='".$data['description']."' WHERE id=".$id;
    $status = $conn->query($sql);
    if($status){
        header('location:categories.php');
    }else{
        print_r('category_edit.php');
    }
?>