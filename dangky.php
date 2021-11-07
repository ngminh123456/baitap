<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangky.css">
    <script src="dangky.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    
</head>
<body>
    <div class="container">
        <form action="dangky_button.php" method="POST">
            <div class="dangky" >
                <h1>ĐĂNG KÝ</h1>
                <div class="form-text">
                    <input value="123456" id="phone" type="tel" placeholder="Số điện thoại" name="ursename">
                </div>
                <div class="form-text">
                    <input value="123456" id="hoten" type="text" placeholder="Họ tên" name="hoten">
                </div>
                <div class="form-text">
                    <input value="123456" id="matkhau" type="password" placeholder="Mật Khẩu" name="password" >
                </div>
                <div class="form-text">
                    <input value="123456" id="nhaplaimatkhau" type="password" placeholder="Nhập lại mật Khẩu" name="repassword">
                </div>
                <button  type="sumbit"  class="button" name="button">ĐĂNG KÝ</button>
            </div>
        </form>
    </div>
</body>
</html>