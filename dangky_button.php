<?php
include 'config.php'
if( isset($_POST["sumbit"]) && $_POST["username"] != '' && $_POST["password'"] != ''&& $_POST["repassword"] != '' ){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $level=0;
    if(($username == ""|| $password=="" || $repassword==""){
        echo'<p>Bạn cần nhập đầy đủ thông tin</p>'
    }
    else{
        if( $password != $repassword){
            echo'<p>Mật khẩu không đúng</p>'
         }
         $sql = "SELECT * FORM user WHERE username= '$username' ";
         $old = mysqli_query($conn,$sql);
         $password = md5($password);
         if( mysqli_num_rows($old) > 0 ) {
             echo'<p>Số điện thoại đã tồn tại</p>';
         }
         $sql = "INSERT INTO user ( username,password,level) VALUE ('$username','$password','$level') ";
         mysqli_query($conn,$sql);
         echo "Đã đăng ký thành công"
    }
}
else {
    echo'<p>Không thể đăng ký</p>'
}

?>