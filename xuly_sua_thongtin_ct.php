<?php
session_start();

include("ketnoi.php");

$mant = $_POST["mant"];
$maphuong = $_POST["maphuong"];
$tennt = $_POST["tennt"];
$tenchutro = $_POST["tenchutro"];
$sdtnt = $_POST["sdtnt"];
$diachint = $_POST["diachint"];


// Update academic department in the database
$sql = "UPDATE nhatro SET tennt = '$tennt', maphuong = '$maphuong' , tennt ='$tennt', tenchutro = '$tenchutro', sdtnt='$sdtnt', diachint='$diachint' WHERE mant = '$mant'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các loại phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật loại phòng trọ thành công thành công thành công');
        window.location='thongtin_nhatro.php';
    </script>";
?>