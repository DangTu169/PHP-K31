<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h4>Upload File</h4>
        <form action="uploadFile.php" method="post" role="form">
            <!-- <label for="">Tên tài liệu</label>
            <input type="text" name="name_file" id=""> <br> -->
            <label for="">Chọn file</label>
            <input type="file" name="images" id=""> <br>
            <button class="btn btn-danger">Upload</button>
        </form>
        <br>
        <?php if(isset($_SESSION['upload_status']) && $_SESSION['uplaod_status'][0] == false) {?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    foreach($_SESSION['upload_status'][1] as $error){
                        echo"<p>".$error."</p>";
                    }
                    unset($_SESSION['upload_status']);
                ?>
            </div>
        <?php } ?>

        <?php if(isset($_SESSION['upload_status']) && $_SESSION['upload_status'][0] == true){?>
            <div class="alert alert-danger" role="alert">
                File đã được upload thành công
            </div>
        <?php 
            unset($_SESSION['upload_status']);
            }
        ?>
    </div>
</body>
</html>