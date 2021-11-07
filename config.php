<?php
// $mysqli = new mysqli("localhost:81","root","","vidu");

// // Check connection
// if ($mysqli->connect_errno) {
//   echo "không thể kết nối MySQL: " . $mysqli->connect_error;
//   exit();
// }
//khai báo biến host
$hostName = 'localhost';
// khai báo biến username
$userName = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'vidu';
// khởi tạo kết nối
$connect = new mysqli($hostName, $userName, $passWord, $databaseName);
//Kiểm tra kết nối
if ($connect->connect_error) {
    exit('Kết nối không thành công. chi tiết lỗi:' . $connect->connect_error);
}
// thành công
// echo 'Kết nối thành công!';
?>
<!-- http://localhost:81/baitaplon/config.php -->
<!-- http://localhost:81/baitaplon/dangky.php -->
<!-- http://localhost:81/baitaplon/dangky_button.php -->
<!-- http://localhost:81/baitaplon/dangnhap.php -->
<!-- http://localhost:81/baitaplon/dangnhap_button.php -->
