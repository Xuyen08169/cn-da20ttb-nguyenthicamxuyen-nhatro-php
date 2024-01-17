<?php
session_start();
include("ketnoi.php");

$userlogin = isset($_SESSION["nguoidung"]) ? $_SESSION["nguoidung"] : null;

if ($userlogin) {
    $sql2 = "SELECT * FROM nguoidung WHERE emailnd='" . $userlogin . "'";
    $kq2 = mysqli_query($conn, $sql2);

    if (!$kq2) {
        die("Query failed: " . mysqli_error($conn));
    }

    $nguoidung_login = mysqli_fetch_array($kq2);
} else {
    // Handle the case where the user is not logged in (if needed)
    $nguoidung_login = null;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nhà trọ</title>
</head>

<body>
    <div>
        <link rel="stylesheet" href="css.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

        <div class="divbig">
            <div class="top">
                <div class="marquee">
                    <div>
                        <span>
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <span>
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tìm nhà trọ giá rẻ - đầy
                            đủ tiện nghi&nbsp;
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-tc">
                <img src="hinhanh/Home Furniture.png">
            </div>

            <div class="full-tt">
                <div class="tk">


                     <form action="" method="GET" class="btn-center-search">
                     
                    <input type="text" name="search_name" placeholder="Tìm kiếm tên nhà trọ" required>
                       

                    <button type="submit">
                       
                    </button>
                </form>



                    <div>
                        <label>
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>

                </div>
                <div class="tk-trc">
                    <a href="index.php">
                        <label>Trang chủ</label>
                    </a>

                    <a href="hotro.php">
                        <label>Hỗ trợ</label>
                    </a>
                    <!-- <a href="noidung_pt.php">
                        <label> thông tin </label>
                    </a> -->


                    <?php
                    if (!isset($_SESSION["nguoidung"])) {
                        // If the user is not logged in, show the login link
                        echo '<a href="login.php"><label>Đăng nhập</label></a>';
                    } else {
                        // If the user is logged in, show the user's name and a link to their profile
                        echo '<a class="user" href="thongtinnd.php"><label>' . $nguoidung_login["tennd"] . '</label></a>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- The rest of your HTML content here -->

</body>

</html>