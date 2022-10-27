<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập dữ liệu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form-style{
            width: 80%;
        }
        .form-group{
            display: flex;
            justify-content: space-between;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ZENT GROUP - PHP - Thực hành về gửi dữ liệu sử dụng POST</h1>
        <form action="info.php" method="post" role="form">
            <div class="form-group">
                <label for="hoten">Họ và tên</label>
                <input type="text" class="form-style" name="name" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <label for="" style="margin-right: 20px;">Giới tính</label>
                <div class="form-style">
                    <input type="radio" name="gender" value="man">Nam
                    <input type="radio" name="gender" value="women">Nữ
                    <input type="radio" name="gender" value="gay">Khác
                </div>
            </div>
            <div class="form-group">
                <label >Ngày sinh</label>
                <input type="date" class="form-style" name="birthday" id="">
            </div>
            <div class="form-group">
                <label>Quê quán</label>
                <input type="text" class="form-style" name="country" placeholder="Nhập quê quán">
            </div>
            <div class="form-group">
                <label>Ngoại ngữ</label>
                <div class="form-style">
                    <input type="checkbox" name="language" value="anh">Tiếng Anh
                    <input type="checkbox" name="language" value="nhat">Tiếng Nhật
                    <input type="checkbox" name="language" value="phap">Tiếng Pháp
                </div>
            </div>
            <div class="form-group">
                <label for="">Thông tin thêm</label>
                <textarea name="info" class="form-style" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>