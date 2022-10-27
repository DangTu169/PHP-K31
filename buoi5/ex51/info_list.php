<?php
    session_start();
    $user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
    <h1>ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
                <th>Ngoại ngữ</th>
                <th>Thông tin thêm</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($user as $user){ ?>
                        <tr>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['gender'] ?></td>
                            <td><?= $user['birthday'] ?></td>
                            <td><?= $user['country'] ?></td>
                            <td><?= $user['language'] ?></td>
                            <td><?= $user['info'] ?></td>
                        </tr>
                <?php } ?>      
            </tbody>
        </table>
    </div>

</body>
</html>