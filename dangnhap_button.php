<?php
include 'config.php'
if( isset($_POST["button"]) && $_POST["username"] != '' && $_POST["password"] != ''){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FORM user WHERE username= '$username' ";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
    if( mysqli_num_rows($old) > 0 ) {
        echo'<p>Bạn đã đăng nhập thành công</p>';
    }
    else{
        echo'<p>Bạn nhập sai số điện thoại hoặc mật khẩu</p>';
    }
}
else {
    echo'<p>Không thể đăng nhập</p>'
}

?>