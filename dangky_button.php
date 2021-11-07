<?php
include 'config.php';
if( isset($_POST["button"]) ){
    $phone = $_POST["phone"];
    $hoten = $_POST["hoten"];
    $matkhau = $_POST["matkhau"];
    $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
    $level=0;
    if($phone == ""|| $matkhau=="" || $nhaplaimatkhau==""){
        echo'<p>Bạn cần nhập đầy đủ thông tin</p>'
    }
    else{
        if( $matkhau != $nhaplaimatkhau){
            echo'<p>Mật khẩu không đúng</p>'
         }
         $sql = "SELECT * FORM user WHERE phone= '$phone' ";
         $old = mysqli_query($conn,$sql);
         $matkhau = md5($matkhau);
         if( mysqli_num_rows($old) > 0 ) {
             echo'<p>Số điện thoại đã tồn tại</p>';
         }
         $sql = "INSERT INTO user ( phone,matkhau,level) VALUE ('$phone','$matkhau','$level') ";
         mysqli_query($conn,$sql);
         echo "Đã đăng ký thành công"
    }
}
else {
    echo'<p>Không thể đăng ký</p>'
}

?>