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
    <link rel="stylesheet" type="text/css" href="css_index.css">
    <title> Quản lý nhà trọ</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>


    <style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 14px 18px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
    </style>
</head>


<header>
    <h1>
        <font color="blue">Quản Lý Nhà Trọ
    </h1>

    <body>

        <picture>
            
            <source media="(min-width: 465px)" srcset="h1.jpg">
            <img src="h1.jpg">
        </picture>
        <td>
            <font color="#FF0000">
                <marquee>Tìm nhà trọ cấp tốc ! uy tính, chất lượng</marquee>
            </font>
        </td>
        </tr>

        <div>
            <input class="input" type="type" placeholder="Tìm kiếm..." />
            <ul class="nav">
                <li><a href="#">Trang chủ</a></li>


                <div class="dropdown">
                    <button class="dropbtn">Phân loại</button>
                    <div class="dropdown-content">
                        <a href="#"> loại đặt biệt</a>
                        <a href="#"> loại bình thường </a>
                        <a href="#"> loại ngon nhất</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Phân loại</button>
                    <div class="dropdown-content">
                        <a href="#"> loại đặt biệt</a>
                        <a href="#"> loại bình thường </a>
                        <a href="#"> loại ngon nhất</a>
                    </div>

                </div>

                <div class="dropdown">
                    <button class="dropbtn">Phân loại</button>
                    <div class="dropdown-content">
                        <a href="#"> loại đặt biệt</a>
                        <a href="#"> loại bình thường </a>
                        <a href="#"> loại ngon nhất</a>
                    </div>

                </div>


                <div class="dropdown">
                    <button class="dropbtn">Phân loại</button>
                    <div class="dropdown-content">
                        <a href="#"> loại đặt biệt</a>
                        <a href="#"> loại bình thường </a>
                        <a href="#"> loại ngon nhất</a>
                    </div>

                </div>







    </body>
</header>




</html>