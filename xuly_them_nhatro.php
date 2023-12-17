<?php
session_start();

include("ketnoi.php");

$mant = $_POST["mant"];
$phuong = $_POST["phuong"];
$tennt = $_POST["tennt"];
$tenchutro = $_POST["tenchutro"];
$sdtnt = $_POST["sdtnt"];
$diachint = $_POST["diachint"];


// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO nhatro (mant, maphuong, tennt, tenchutro, sdtnt, diachint) 
VALUES ('$mant', '$phuong', '$tennt', '$tenchutro', '$sdtnt', '$diachint')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm nhà trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm nhà trọ thành công');
        window.location='qlnhatro.php';
    </script>";
?>