<?php
     require_once('connect.php');
     $id =(isset($_GET['id'])?$_GET['id']:0);
     $sql =  "DELETE FROM posts WHERE id = ". $id;
     $status = $conn -> query($sql);
     if($status==true){
        setcookie('delete_msg','Xóa thành công',time()+10);
     }else{
        setcookie('delete_msg','Xóa thất bại',time()+10);
     }
     header('location: categories.php');
?>