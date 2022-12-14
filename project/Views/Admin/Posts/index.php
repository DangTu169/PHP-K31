<?php
    require_once('./header.php');
    require_once('./slidebar.php');
?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <h3 class="text-center">--- Posts ---</h3>
                <a href="index.php?admin=admin&mod=post&act=create" class="btn btn-info">Add new Post</a>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Content</th>
                        <th>Slug</th>
                        <th>View_count</th>
                        <th>User_id</th>
                        <th>Category_id </th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </thead>
                    <?php foreach($posts as $pot){?>
                        <tr>
                            <td><?= $pot['id']?></td>
                            <td><?= $pot['title']?></td>
                            <td><?= $pot['description']?></td>
                            <td>
                                <img src="<?= $pot['Thumbnail']?>" width="100px" height="100px">
                            </td>
                            <td><?= $pot['content']?></td>
                            <td><?= $pot['slug']?></td>
                            <td><?= $pot['view_count']?></td>
                            <td><?= $pot['user_id']?></td>
                            <td><?= $pot['category_id']?></td>
                            <td><?= $pot['created_at']?></td>
                            <td>
                                <a href="index.php?mod=category&act=show&id=<?=$pot['id']?>" class="btn btn-primary">Detail</a>
                                <a href="index.php?admin=admin&mod=post&act=edit&id=<?=$pot['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?admin=admin&mod=post&act=delete&id=<?=$pot['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </main>
    <?php
    require_once('./footer.php');
    ?>