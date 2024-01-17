<?php
session_start();

include("ketnoi.php");

$maloai = $_POST["maloai"];
$tenloai = $_POST["tenloai"];



// Update academic department in the database
$sql = "UPDATE loaiphongtro SET tenloai = '$tenloai' WHERE maloai = '$maloai'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các loại phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật loại phòng trọ thành công thành công thành công');
        window.location='qlloaiphongtro.php';
    </script>";
?>