<?php
session_start();

include("ketnoi.php");


$maloai = $_POST["maloai"];
$tenloai = $_POST["tenloai"];


// Thêm CSDL với khóa chính tự động tăng
$sql = "INSERT INTO loaiphongtro VALUES ('" .$maloai. "', '" .$tenloai. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm loại phòng trọ : " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm phòng trọ thành công');
        window.location='qlloaiphongtro.php';
    </script>";
?>