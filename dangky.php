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
<!-- <form name="form" action="dangky_button.php" method="post">
  <input type="text" name="subject" id="subject" value="Car Loan">
  <button  type="sumbit"  class="button" name="button">ĐĂNG KÝ</button>
</form> -->
<!-- form text input -->
    <div class="container">
        <form action="dangky_button.php" method="post">
            <div class="dangky" >
                <h1>ĐĂNG KÝ</h1>
                <div class="form-text">
                    <!-- id trùng name -->
                    <input  id="phone" type="tel" placeholder="Số điện thoại" name="phone">
                </div>
                <div class="form-text">
                    <input  id="hoten" type="text" placeholder="Họ tên" name="hoten">
                </div>
                <div class="form-text">
                    <input  id="matkhau" type="password" placeholder="Mật Khẩu" name="matkhau" >
                </div>
                <div class="form-text">
                    <input  id="nhaplaimatkhau" type="password" placeholder="Nhập lại mật Khẩu" name="nhaplaimatkhau">
                </div>
                <button  type="sumbit"  class="button" name="button">ĐĂNG KÝ</button>
            </div>
        </form>
    </div>
</body>
</html>