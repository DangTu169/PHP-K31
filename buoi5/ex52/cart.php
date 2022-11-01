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
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center">Giỏ hàng</h2>
        <a href="index.php" class="btn btn-primary">Danh sách sản phẩm</a>
        <table class="table table-cart">
            <thead>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="hidden" name="msp[]" value="<?= $product['id'] ?>">
                        <?= $product['id'] ?>
                    </td>
                    <td><?= $product['name'] ?></td>
                    <td>
                        <input type="hidden" name="price[]" value="<?= $product['price'] ?>">
                        <?= number_format($product['price']) ?>VND
                    </td>
                    <td>
                        <div class="input-group input-group-quantity" style="width: 170px">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quantity[]" <?php if ($product['amount'] == 1) echo 'disabled' ?>>
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </span>
                            <input name="quantity[]" class="form-control input-number" min="1" max="9999" value="<?= $product['amount'] ?>" type="number" data-old-value="<?= $product['amount'] ?>">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quantity[]" <?php if ($product['amount'] == 9999) echo 'disabled' ?>>
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </td>

                    <td><img style="width: 80px;height: 80px;" src="<?= $product['image'] ?>"></td>
                    <!-- <td>
                        <a class="btn btn-danger" href="deleteCart.php?msp=<?= $row['msp'] ?>" title="">Delete</a>
                    </td>            -->
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>