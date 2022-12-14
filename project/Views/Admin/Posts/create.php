<?php
    require_once('./header.php');
    require_once('./slidebar.php');
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h3 align="center">Add New Post</h3>
                <hr>
                    <form action="index.php?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" placeholder="" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label> <br>
                            <textarea class="form-control" name="description" id="" style="width: 100%" cols="50" rows="10" placeholder="Mô tả" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Thumbnail</label>
                            <input type="text" class="form-control" id="" placeholder="link image" name="thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="">Content</label> <br>
                            <textarea class="form-control" name="content" id="" style="width: 100%" cols="50" rows="10" placeholder="" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" id="" placeholder="link image" name="slug">
                        </div>
                        <button type="submit" style="margin-top: 10px" class="btn btn-primary">Create</button>
                    </form>
            </div>
        </main>
<?php
    require_once('./footer.php');
    ?>