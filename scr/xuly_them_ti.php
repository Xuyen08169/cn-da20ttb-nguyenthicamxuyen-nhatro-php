<?php
session_start();

include("ketnoi.php");


$mati = $_POST["mati"];
$tenti = $_POST["tenti"];


// Thêm CSDL với khóa chính tự động tăng
$sql = "INSERT INTO tienich VALUES ('" .$mati. "', '" .$tenti. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm tiện ích : " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm tiện ích thành công');
        window.location='qltienich.php';
    </script>";
?>