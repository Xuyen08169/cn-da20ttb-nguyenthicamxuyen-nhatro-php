<?php
session_start();

include("ketnoi.php");

$mapt = $_POST["mapt"];
$matt = $_POST["matt"];
$maloai = $_POST["maloai"];
$mant = $_POST["mant"];
$mota = $_POST["mota"];
$giapt = $_POST["giapt"];
$dientichpt = $_POST["dientichpt"];
$ghichu = $_POST["ghichu"];


// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO phongtro (mapt, matt, maloai, mant, mota, giapt, dientichpt, ghichu) 
VALUES ('$mapt', '$matt', '$maloai', '$mant', '$mota', '$giapt', '$dientichpt', '$ghichu')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm phòng trọ thành công');
        window.location='qlphongtro.php';
    </script>";
?>