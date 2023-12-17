<?php
session_start();

include("ketnoi.php");

$mati = $_POST["mati"];
$tenti = $_POST["tenti"];



// Update academic department in the database
$sql = "UPDATE tienich SET tenti = '$tenti' WHERE mati = '$mati'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các tiện ích: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật tiện ích thành công thành công');
        window.location='qltienich.php';
    </script>";
?>