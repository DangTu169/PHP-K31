<?php
    require_once('./header.php');
    require_once('./slidebar.php');
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h3 class="text-center">--- CATEGORIES ---</h3>
                <a class="btn btn-info" href="index.php?admin=admin&mod=category&act=create">Add New Category</a>
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
                                <a href="index.php?mod=category&act=show&id=<?=$cate['id']?>" class="btn btn-primary">Detail</a>
                                <a href="index.php?admin=admin&mod=category&act=edit&id=<?=$cate['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?admin=admin&mod=category&act=delete&id=<?=$cate['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </main>
    <?php
    require_once('./footer.php');
    ?>