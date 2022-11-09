<?php
    require_once('connect.php');
    $id =(isset($_GET['id'])?$_GET['id']:0);
    $sql =  "SELECT * from posts WHERE id = ". $id;
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
    <h2>Title: <?=$category['title']?></h2>
    <h2>Description: <?=$category['description']?></h2>
    <h2>Thumbail: <img src="<?= $category['thumbnail']?>" width="200px" height="200px"></h2>
    <h2>Content: <?=$category['content']?></h2>
    <h2>Slug: <?=$category['slug']?></h2>
    <h2>View Count: <?=$category['view_count']?></h2>
    <h2>User ID: <?=$category['user_id']?></h2>
    <h2>Category ID: <?=$category['category_id']?></h2>
    <h2>Created_at: <?=$category['created_at']?></h2>
</body>
</html>