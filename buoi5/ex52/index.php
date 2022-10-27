<?php
    session_start();
    $product = $_SESSION['product'];
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
    <h2>Product List</h2>
    <a href="cart.php" class="btn btn-primary">Giỏ hàng</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá bán</th>
            <th>Ảnh sản phẩm</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                foreach($product as $key => $product){ ?>
                    <tr>
                        <td><?= $product['product_code'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['product_amount'] ?></td>
                        <td><?= number_format($product['product_price'])?>đ</td>
                        <td> <img width="100px" height="100px" src="<?= $product['product_images'] ?>" alt=""> </td>
                        <td><a href="add2cart.php?id=<?= $key ?>" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
                    </tr>
            <?php } ?>      
        </tbody>
    </table>
    </div>

</body>
</html>