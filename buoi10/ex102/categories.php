<?php
    require_once('connect.php');

    $sql = "SELECT * FROM categories";

    $results = $conn -> query($sql);

    $categories = array();

    while($row = $results -> fetch_assoc()){
        $categories[] = $row;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="categories_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Parent ID</th>
                <th>Thumbnail</th>
                <th>Slug</th>
                <th>Description</th>
                <th>created_at</th>
                <th>Action</th>
            </thead>
            <?php foreach($categories as $cate){?>
                <tr>
                    <td><?= $cate['id']?></td>
                    <td><?= $cate['category_name']?></td>
                    <td><?= $cate['parent_id']?></td>
                    <td>
                        <img src="<?= $cate['category_thumbnail']?>" width="100px" height="100px">
                    </td>
                    <td><?= $cate['category_slug']?></td>
                    <td><?= $cate['category_description']?></td>
                    <td><?= $cate['category_created_at']?></td>
                    <td>
                        <a href="category_detail.php?id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                        <a href="category_edit.php?id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                        <a href="category_delete.php?id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php }?>
        </table>
    </div>
</body>
</html>
