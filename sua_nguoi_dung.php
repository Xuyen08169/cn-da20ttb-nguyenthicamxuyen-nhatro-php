<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM nguoidung WHERE mand = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_nd.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm người dùng</label>
        </div>

        <div class="table">
            <div> <label> Mã người dùng: </label>
                <input type="text" name="mand" value="<?php echo $row["mand"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên người dùng: </label>
                <input type="text" name="tennd" value="<?php echo $row["tennd"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Số điện thoại người dùng: </label>
                <input type="text" name="sdtnd" value="<?php echo $row["sdtnd"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> email người dùng: </label>
                <input type="text" name="emailnd" value="<?php echo $row["emailnd"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Mật khẩu người dùng: </label>
                <input type="text" name="matkhaund" value="<?php echo $row["matkhaund"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Hình đại diện người dùng: </label>
                <input type="file" name="anhdaidien">
                <input type="hidden" name="MAX_FILE_SIZE"value="100000">
            </div>
        </div>




        <div class="table">

            <input type="submit" name="luu" value="Lưu">
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>