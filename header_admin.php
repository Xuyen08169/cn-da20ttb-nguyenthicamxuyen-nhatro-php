<?php
session_start();
if (!isset($_SESSION["admin"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='login.php';
    </script>";
}
?>



<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css_admin.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <title>Document</title>
</head>
<?php
/////kết nối cơ sở dữ liệu 
    include("ketnoi.php");
    $sql = "select * from admin ";
    $userlogin = $_SESSION["admin"];
    $sql2 = "select * from admin where emailadmin='" . $userlogin . "'";
    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $admins = mysqli_fetch_array($kq);
    $admin_login =  mysqli_fetch_array($kq2);

    ?>
<body>
    <d class="container">
        <div class="b-left">
            <div class="b-ava">
                <img src="<?php echo $admin_login["avataadmin"]; ?>" alt="Profile Picture">
                <label><?php echo $admin_login["tenadmin"]; ?></label>
            </div>
            <div class="s-left">
                <a href="#" class="s-left-item">
                    <ion-icon name="home"></ion-icon>
                    <p>Trang chủ</p>
                </a>
                <a href="qlnhatro.php" class="s-left-item">
                <ion-icon name="business"></ion-icon>
                    <p>Quản lý nhà trọ</p>
                </a>
                <a href="qlphongtro.php" class="s-left-item">
                <ion-icon name="bed"></ion-icon>
                    <p>Quản lý phòng trọ</p>
                </a>
                <a href="qlloaiphongtro.php" class="s-left-item">
                <ion-icon name="pricetags"></ion-icon>
                    <p>Quản lý loại phòng trọ</p>
                </a>
                <a href="qlnguoidung.php" class="s-left-item">
                <ion-icon name="people"></ion-icon>
                    <p>Quản lý người dùng</p>
                </a>
                <a href="qlphuong.php" class="s-left-item">
                <ion-icon name="map"></ion-icon>
                    <p>Quản lý phường</p>
                </a>
                <a href="qltienich.php" class="s-left-item">
                <ion-icon name="cube"></ion-icon>
                    <p>Quản lý tiện ích</p>
                </a>
                <a href="qldanhgia.php" class="s-left-item">
                <ion-icon name="checkbox"></ion-icon>
                    <p>Quản lý đánh giá</p>
                </a>

                <a href="qlbaidang.php" class="s-left-item">
                <ion-icon name="newspaper"></ion-icon>
                    <p>Quản lý bài đăng</p>
                </a>
                <a href="logout.php" class="s-left-item">
                    <ion-icon name="key"></ion-icon>
                    <p>Đăng xuất</p>
                </a>
            </div>
        </div>
                <!-- Hết div trái -->

                <div class="b-right">
                    <div class="content">