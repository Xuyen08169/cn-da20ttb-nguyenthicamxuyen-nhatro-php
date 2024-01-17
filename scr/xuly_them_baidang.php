<?php
session_start();

include("ketnoi.php");

$mabd = $_POST["mabd"];
$mand = $_POST["mand"];
$mant = $_POST["mant"];
$tenbd = $_POST["tenbd"];
$ngaydang = $_POST["ngaydang"];
$noidungbd = $_POST["noidungbd"];


$duongdan = "./hinhanh/"; // Thư mục lưu trữ hình ảnh, bạn cần tạo thư mục này trong dự án của mình
$duongdan = $duongdan . basename($_FILES["anhbd"]["name"]);
move_uploaded_file($_FILES["anhbd"]["tmp_name"], $duongdan);
$anhbd = $duongdan;
// Thêm bộ môn mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO baidang (mabd, mand, mant, tenbd, anhbd, ngaydang, noidungbd) 
VALUES ('$mabd', '$mand', '$mant', '$tenbd', '$anhbd', '$ngaydang', '$noidungbd')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm nhà trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm bài đăng thành công');
        window.location='qlbaidang.php';
    </script>";
?>