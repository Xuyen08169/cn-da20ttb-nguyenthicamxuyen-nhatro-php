
<?php
session_start();
if (!isset($_SESSION["chutro"])) {
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
    <title>Chủ trọ </title>
</head>
<?php
/////kết nối cơ sở dữ liệu 
    include("ketnoi.php");
    $sql = "select * from chutro ";
    $userlogin = $_SESSION["chutro"];
    $sql2 = "select * from chutro where emailct='" . $userlogin . "'";
    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $chutros = mysqli_fetch_array($kq);
    $chutro_login =  mysqli_fetch_array($kq2);

    ?>
<body>
    <d class="container">
        <div class="b-left">
            <div class="b-ava">
                <img src="<?php echo $chutro_login["anhdaidienct"]; ?>" alt="Profile Picture">
                <label><?php echo $chutro_login["tenchutro"]; ?></label>
            </div>
            <div class="s-left">
                
              
                </a>
                <a href="thongtin_nhatro.php" class="s-left-item">
                <ion-icon name="business"></ion-icon>
                    <p>Nhà trọ</p>
                </a>
<!-- 
                <a href="dangtin.php" class="s-left-item">
                <ion-icon name="newspaper"></ion-icon>
                    <p> Bài đăng</p>
                </a>
     -->

                <a href="logout.php" class="s-left-item">
                    <ion-icon name="key"></ion-icon>
                    <p>Đăng xuất</p>
                </a>
            </div>
        </div>
                <!-- Hết div trái -->

                <div class="b-right">
                    <div class="content">