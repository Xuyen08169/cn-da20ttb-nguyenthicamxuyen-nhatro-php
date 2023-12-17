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



// Update academic department in the database
$sql = "UPDATE phongtro SET matt = '$matt', maloai = '$maloai' , mant ='$mant', mota = '$mota', giapt='$giapt', dientichpt='$dientichpt', ghichu='$ghichu' WHERE mapt = '$mapt'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật phòng trọ thành công');
        window.location='qlphongtro.php';
    </script>";
?>
