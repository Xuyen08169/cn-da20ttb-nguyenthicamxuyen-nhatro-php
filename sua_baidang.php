
<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM baidang WHERE mabd = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin bài đăng" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_baidang.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> sữa</label>
        </div>

        <div class="table">
            <div> <label> Mã bài đăng: </label>
                <input type="text" name="mabd" value="<?php echo $row["mabd"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã người dùng: </label>
                <input type="text" name="mand" value="<?php echo $row["mand"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Mã nhà trọ: </label>
                <input type="text" name="mant" value="<?php echo $row["mant"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên bài đăng: </label>
                <input type="text" name="tenbd" value="<?php echo $row["tenbd"]; ?>">
            </div>
        </div>
       

        <div class="table">
            <div> <label> Ảnh bài đăng: </label>
                <input type="file" name="anhbd">
                <input type="hidden" name="MAX_FILE_SIZE"value="100000">
            </div>
        </div>


        <div class="table">
            <div> <label> Ngày đăng: </label>
                <input type="date" name="ngaydang" value="<?php echo $row["ngaydang"]; ?>">
            </div>
        </div>

        
        <div class="table">
            <div> <label> Nội dung bài đăng: </label>
                <input type="text" name="noidungbd" value="<?php echo $row["noidungbd"]; ?>">
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