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
// Update academic department in the database
$sql = "UPDATE baidang SET mand = '$mand', mant = '$mant' , tenbd ='$tenbd', anhbd = '$anhbd', ngaydang='$ngaydang', noidungbd='$noidungbd' WHERE mabd = '$mabd'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật các phòng trọ: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật bài đăng thành công');
        window.location='qlbaidang.php';
    </script>";
?>