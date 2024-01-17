<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    include("ketnoi.php");
    $tennd = $_POST["tennd"];
    $sdtnd = $_POST["sdtnd"];
    $emailnd = $_POST["emailnd"];
    $matkhaund = $_POST["matkhaund"];


$duongdan = "./hinhanh/"; // Thư mục lưu trữ hình ảnh, bạn cần tạo thư mục này trong dự án của mình
$duongdan = $duongdan . basename($_FILES["anhdaidien"]["name"]);
move_uploaded_file($_FILES["anhdaidien"]["tmp_name"], $duongdan);
$anhdaidien = $duongdan;


    $sql = "INSERT INTO nguoidung (tennd, sdtnd, emailnd, matkhaund, anhdaidien) VALUES ('$tennd', '$sdtnd', '$emailnd', '$matkhaund', '$anhdaidien')";
    $kq = mysqli_query($conn, $sql) or die("Không thể thêm giảng viên: " . mysqli_error($conn));

    echo "<script language=javascript>
            alert('Đăng kí thành công');
            window.location='index.php';
        </script>";
?>

</body>

</html>