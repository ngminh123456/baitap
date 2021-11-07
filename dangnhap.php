<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangnhap.css">
    <script src="dangnhap.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    
</head>
<body>
    <div class="container">
        <form class="dangnhap">
            <h1>ĐĂNG NHẬP</h1>
            <div class="form-text">
                <input id="phone" type="text" placeholder="Số điện thoại">
            </div>
            <div class="form-text">
                <input id="matkhau" type="password" placeholder="Mật Khẩu">
            </div>
            <input onclick="send()" type="button" value="ĐĂNG NHẬP" class="button">
            <div class="box">
                <span>HOẶC</span>
            </div>
            
            <div class="a">
                <a href="/baitaplon/dangky.php">ĐĂNG KÝ</a>
            </div>
        </form>
    </div>
</body>
</html>