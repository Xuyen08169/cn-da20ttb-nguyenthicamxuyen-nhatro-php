<?php
session_start();

include("ketnoi.php");


$maphuong = $_POST["maphuong"];
$tenphuong = $_POST["tenphuong"];


// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO phuong VALUES ('" .$maphuong. "', '" .$tenphuong. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm phường : " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm phường thành công');
        window.location='qlphuong.php';
    </script>";
?>