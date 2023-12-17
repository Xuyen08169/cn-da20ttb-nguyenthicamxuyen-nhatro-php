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
</head>


<header>
<h1 > <font color="blue">Quản Lý Nhà Trọ </h1>
    <body>
      

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


                <li>
                    <a href="#"> Diện tích </a>
                    <ul>
                        <li><a href="#">Lớn </a></li>
                        <li><a href="#">Nhỏ </a></li>
                        <li><a href="#">Trung bình</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> Giá phòng trị </a>
                    <ul>
                        <li><a href="#">A </a></li>
                        <li><a href="#">B </a></li>
                        <li><a href="#">C</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> Phường</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> Loại phòng trọ</a>
                    <ul>
                        <li><a href="#">cccc</a></li>
                        <li><a href="#">aaaaaa </a></li>
                        <li><a href="#">bbbbbbb</a></li>
                    </ul>
                </li>



            </ul>
    </body>
</header>




</html>