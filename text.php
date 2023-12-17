<?php
session_start();
if (!isset($_SESSION["nguoidung"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='login.php';
    </script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css_text.css">
    <title> Quản lý nhà trọ</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>




    <body>
    <h1 > <font color="blue">Quản Lý Nhà Trọ </h1>
           <div id="menu">
            <ul type="square">
                <li><a href="#"> Trang chủ</a>

                <li><a href="#"> Diện tích </a>
                    <ul type="circle">
                        <li><a href="#"> 10</a>
                        <li><a href="#"> 20</a>
                        <li><a href="#"> 30</a>
                    </ul>

                <li><a href="#"> Giá cả  </a>
                    <ul type="disc">
                        <li><a href="#"> cao</a>
                        <li><a href="#"> trung bìng</a>
                        <li><a href="#"> rẻ</a>
                    </ul>

                 <li><a href="#"> Loại phòng trọ</a>
                    <ul type="circle">
                        <li><a href="#"> gác </a>
                        <li><a href="#"> không gác </a>
                        <li><a href="#"> Nhà xe</a>
                    </ul>
                 <li><a href="#"> Phường </a>
                    <ul type="circle">
                        <li><a href="#"> p1</a>
                        <li><a href="#"> p2</a>
                        <li><a href="#"> p3</a>
                    </ul>


            </ul>
           </div>
    </body>





</html>