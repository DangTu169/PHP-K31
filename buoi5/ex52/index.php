<?php
    session_start();
    require_once('data_product.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Danh sách sản phẩm</h2>
        <a href="cart.php" class="btn btn-primary">Giỏ hàng</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $key => $product){?>
                    <tr>
                        <td><?php echo $product['id'] ?></td>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo number_format($product['price']) ?></td>
                        <td><?php echo $product['amount'] ?></td>
                        <td><img src="<?php echo $product['image'] ?>" alt="" width = 100px></td>
                        <td>
                            <a href="add2cart.php" class="btn btn-info">Thêm vào giỏ hàng</a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>