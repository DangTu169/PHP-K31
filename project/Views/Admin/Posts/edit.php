<?php
    require_once('./header.php');
    require_once('./slidebar.php');
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h3 align="center">Edit Category</h3>
                <hr>
                <form action="index.php?admin=admin&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
                    <input type="hidden" id="" placeholder="" name="id" value="<?= $category['id'] ?? ''?>">
                    <div class="form-group">
                            <label for="">title</label>
                            <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label> <br>
                        <textarea class="form-control" name="description" style="width: 100%" id="" cols="50" rows="10"><?= $post['description'] ?? '' ?></textarea>
                    </div>
                    <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $post['thumbnail'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Content</label> <br>
                        <textarea class="form-control" name="content" style="width: 100%" id="" cols="50" rows="10" ><?= $post['content'] ?? '' ?></textarea>
                    </div>
                    <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $post['slug'] ?? ''?>">
                    </div>
                    <button type="submit" style="margin-top: 10px" class="btn btn-primary">Update</button>
                </form>
            </div>
        </main>
<?php
    require_once('./footer.php');
    ?>