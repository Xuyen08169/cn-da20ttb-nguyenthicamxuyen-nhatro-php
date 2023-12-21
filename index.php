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
    <link rel="stylesheet" href="cs_index.css">
    <title> Quản lý nhà trọ</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>



</head>

<body>
    <div class="t1">


        <h1>
            <font color="blue">Quản Lý Nhà Trọ
        </h1>


        <div>

            <font color="#FF0000">
                <marquee>Tìm nhà trọ cấp tốc ! uy tính, chất lượng</marquee>
            </font>

        </div>

        <div>
            <input class="input" type="type" placeholder="Tìm kiếm..." />
        </div>

        <div class="menu">
            <div class=" dropdown">
                <ion-icon name="home-outline"></ion-icon>
                <a class=" dropbtn" href="#">Trang chủ</a>
            </div>

            <div class="dropdown">
                <button class="dropbtn"> Diện tích </button>
                <div class="dropdown-content">
                    <a href="#"> Phòng 10m2</a>
                    <a href="#"> Phòng 15m2</a>
                    <a href="#"> Phòng 20m2</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn"> Giá nhà trọ</button>
                <div class="dropdown-content">
                    <a href="#"> 500 ngìn - 700 nghìn</a>
                    <a href="#"> 700 nghìn - 1 triệu </a>
                    <a href="#"> 1 triệu - 1 triệu 500 nghìn</a>
                </div>

            </div>

            <div class="dropdown">
                <button class="dropbtn"> Loại phòng trọ</button>
                <div class="dropdown-content">
                    <a href="#"> Có gác lửng</a>
                    <a href="#"> Không có gác </a>
                    <!-- <a href="#"> loại ngon nhất</a> -->
                </div>

            </div>


            <div class="dropdown">
                <button class="dropbtn">Phường </button>
                <div class="dropdown-content">
                    <a href="#"> Phường 1</a>
                    <a href="#"> Phường 2</a>
                    <a href="#"> Phường 3</a>
                    <a href="#"> Phường 4</a>
                    <a href="#"> Phường 5</a>
                    <a href="#"> Phường 6</a>
                    <a href="#"> Phường 7</a>
                    <a href="#"> Phường 8</a>
                    <a href="#"> Phường 9</a>
                </div>

            </div>

            <div class=" dropdown">
                <ion-icon name="information-circle-outline"></ion-icon>
                <a class=" dropbtn" href="#">Hỗ trợ </a>
            </div>


        </div>







    </div>

    <div class="ct">


    </div>


</body>




<!-- <div class="footer">
    <p>Bản quyền thuộc @CemXien</p>
</div> -->

</html>