<?php
session_start();

include("ketnoi.php");

$mand = $_POST["mand"];
$tennd = $_POST["tennd"];
$sdtnd = $_POST["sdtnd"];
$emailnd = $_POST["emailnd"];
$matkhaund = $_POST["matkhaund"];

$duongdan = "./hinhanh/"; // Thư mục lưu trữ hình ảnh, bạn cần tạo thư mục này trong dự án của mình
$duongdan = $duongdan . basename($_FILES["anhdaidien"]["name"]);
move_uploaded_file($_FILES["anhdaidien"]["tmp_name"], $duongdan);
$anhdaidien = $duongdan;

// Update academic department in the database
$sql = "UPDATE nguoidung SET tennd = '$tennd' ,sdtnd = '$sdtnd' ,emailnd = '$emailnd'  ,matkhaund = '$matkhaund' ,anhdaidien= '$anhdaidien' WHERE mand = '$mand'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật người dùng: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật người dùng thành công');
        window.location='qlnguoidung.php';
    </script>";
?>