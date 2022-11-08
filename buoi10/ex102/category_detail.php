<?php
    require_once('connect.php');
    $id =(isset($_GET['id'])?$_GET['id']:0);
    $sql =  "SELECT * from categories WHERE id = ". $id;
    $category = $conn -> query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ID: <?=$category['id']?></h2>
    <h2>Name: <?=$category['category_name']?></h2>
    <h2>Parent id: <?=$category['parent_id']?></h2>
    <h2>Thumbail: <img src="<?= $category['category_thumbnail']?>" width="200px" height="200px"></h2>
    <h2>id: <?=$category['id']?></h2>
    <h2>id: <?=$category['id']?></h2>
    <h2>id: <?=$category['id']?></h2>
</body>
</html>