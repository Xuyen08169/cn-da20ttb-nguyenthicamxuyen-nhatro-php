<?php
session_start();

include("ketnoi.php");

$mapt = $_POST["mapt"];
$mati = $_POST["mati"];
$soluongtienich = $_POST["soluongtienich"];

// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO chitiettienich (mapt, mati, soluongtienich) 
VALUES ('$mapt', '$mati', '$soluongtienich')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm chi tiết: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm chi tiết thành công');
        window.location='ql_chitiet_tienich.php';
    </script>";
?>