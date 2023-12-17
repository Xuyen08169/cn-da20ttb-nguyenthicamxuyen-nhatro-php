<?php
session_start();

include("ketnoi.php");

$mand = $_POST["mand"];
$mant = $_POST["mant"];
$masao = $_POST["masao"];
$binhluan = $_POST["binhluan"];




// Update academic department in the database
$sql = "UPDATE danhgia SET  mant ='$mant', masao = '$masao', binhluan='$binhluan' where mand='$mand'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật đánh giá thành công');
        window.location='qldanhgia.php';
    </script>";
?>
