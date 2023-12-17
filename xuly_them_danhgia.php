<?php
session_start();

include("ketnoi.php");

$mand = $_POST["mand"];
$mant = $_POST["mant"];
$masao = $_POST["masao"];
$binhluan = $_POST["binhluan"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO danhgia (mand, mant, masao, binhluan) 
VALUES ('$mand', '$mant', '$masao', '$binhluan')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm đánh giá: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm đánh giá thành công');
        window.location='qldanhgia.php';
    </script>";
?>