<?php
    require_once('./header.php');
    require_once('./slidebar.php');
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h3 align="center">Edit Category</h3>
                <hr>
                <form action="index.php?admin=admin&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" id="" placeholder="" name="id" value="<?= $category['id'] ?? ''?>">
                    <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?= $category['category_name'] ?? ''?>">
                    </div>
                    <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input type="text" class="form-control" id="" placeholder="" name="category_thumbnail" value="<?= $category['category_thumbnail'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label> <br>
                        <textarea class="form-control" name="category_description" style="width: 100%" id="" cols="50" rows="10" ><?= $category['category_description'] ?? '' ?></textarea>
                    </div>
                    <button type="submit" style="margin-top: 10px" class="btn btn-primary">Update</button>
                </form>
            </div>
        </main>
<?php
    require_once('./footer.php');
    ?>