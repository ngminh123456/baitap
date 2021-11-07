<?php
include 'config.php';
if( isset($_POST["button"]) ){
    $phone = $_POST["phone"];
    $hoten = $_POST["hoten"];
    $matkhau = $_POST["matkhau"];
    $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
    $level=0;
    if($phone == ""|| $hoten == ""|| $matkhau=="" || $nhaplaimatkhau==""){
        echo '<p>Bạn cần nhập đầy đủ thông tin</p>';
    }
    else{
        if( $matkhau != $nhaplaimatkhau){
            echo '<p>Mật khẩu không không trùng khớp</p>';
         }
         else{
         $sql = "select * from user where  phone = '$phone'";
         $old = mysqli_query($connect,$sql);
         $matkhaudamahoa = md5($matkhau);
        //  echo (string)$old;
         if( mysqli_num_rows($old) > 0 ) {
             echo '<p>Số điện thoại đã tồn tại</p>';
         }
         else{
            $sql = "INSERT INTO user ( phone,hoten,matkhau,level) VALUE ('$phone','$hoten',' $matkhaudamahoa','$level') ";
            mysqli_query($connect,$sql);
            echo "Đã đăng ký thành công";
         }
    }
}
}
else {
    echo '<p>Không thể đăng ký</p>';
}

?>