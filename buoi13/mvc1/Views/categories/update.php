<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">Add New Category</h3>
    <hr>
    <form action="index.php?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
    <input type="hidden" id="" placeholder="" name="id" value="<?= $category['id'] ?? ''?>">
    <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?= $category['category_name'] ?? ''?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="category_description" id="" cols="50" rows="10" ><?= $category['category_description'] ?? '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>