<?php
include("header.php");

?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
    .ttcn-left img {
        display: block;
        border-radius: 200px;
        border: 3px solid black;
    }

    .ttcn-right {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .ttcn {
        display: flex;
        background-color: F5F7F8;
        margin: 50px 170px;
        padding: 30px 0px;
        border-radius: 10px;
        align-items: center;
        gap: 30px;
        justify-content: center;
        box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25)
    }

    .ttcb {
        display: flex;
        padding: 10px 0px;
        gap: 15px;
        font-size: 17px;
    }

    .td-ttcn {
        display: flex;
        flex-direction: column;
        font-weight: 400;
        gap: 5px;
    }

    .tt-ttcn {
        display: flex;
        flex-direction: column;
        font-weight: 300;
        gap: 5px;
    }

    .td-tt {
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 10px;
    }

    .btn-ttcn {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 40px;
        margin-bottom: 150px;
        padding-right: 170px;
    }

    .btn-ttcn a {
        background-color: #3e8e41;
        color: #ffce00;
        padding: 15px 20px;
        border-radius: 10px;
        text-decoration: none;
    }
</style>
<?php
include("ketnoi.php");

// Check if the session key is set before using it
$userlogin = isset($_SESSION["nguoidung"]) ? $_SESSION["nguoidung"] : null;

if ($userlogin) {
    $sql = "SELECT * FROM nguoidung WHERE emailnd='" . $userlogin . "'";
    $result = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $row = mysqli_fetch_array($result);
} else {
    // Handle the case where the user is not logged in (if needed)
    $row = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Add your CSS stylesheets or external links here -->
</head>
<body>
    <div class="full-ttcn">
        <div class="ttcn">
            <div class="ttcn-left">
                <?php
                // Check if $row is not empty before accessing its values
                if (!empty($row)) {
                ?>
                    <img src="<?php echo $row['anhdaidien']; ?>" width="200px" height="200px" alt="User Avatar">
                <?php
                } else {
                    echo "User not found"; // Handle the case where the user is not found
                }
                ?>
            </div>
            <div class="ttcn-right">
                <div>
                    <div class="td-tt">
                        <label>Thông tin cá nhân</label>
                    </div>
                </div>
                <div>
                    <div class="ttcb">
                        <div class="td-ttcn">
                            <label>Tên đăng nhập:</label>
                            <label>Số điện thoại:</label>
                            <label>Email người dùng:</label>
               
                        </div>
                        <div class="tt-ttcn">
                            <?php
                            // Check if $row is not empty before accessing its values
                            if (!empty($row)) {
                            ?>
                                <label><?php echo $row["tennd"]; ?></label>
                                <label><?php echo $row["sdtnd"]; ?></label>
                                <label><?php echo $row["emailnd"]; ?></label>
                     
                            <?php
                            } else {
                                // Handle the case where the user is not found
                                echo "<label>Not available</label>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btn-ttcn">
        <a href="suathongtin_nd.php"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Sửa thông tin</a>

        <a href="doimatkhaund.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Đổi mật khẩu</a>

        <a href="dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;Đăng xuất</a>


    </div>

</div>

<?php
include("footer.php");
?>
