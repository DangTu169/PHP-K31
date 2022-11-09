<?php
    require_once('connect.php');
    $data = $_POST;
    $id = (isset($_GET['id'])?$_GET['id']:0);
    $sql = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',content='".$data['content']."',slug='".$data['slug']."',view_count='".$data['view_count']."',user_id='".$data['user_id']."',category_id='".$data['category_id']."' WHERE id=".$id;
    $status = $conn->query($sql);
    if($status){
        header('location:categories.php');
    }else{
        print_r('sai');
    }
?>