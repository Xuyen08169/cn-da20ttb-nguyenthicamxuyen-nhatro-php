<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM loaiphongtro WHERE maloai = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin bộ môn " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_loaipt.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm loại phòng trọ</label>
        </div>

        <div class="table">
            <div> <label> Mã loại phòng trọ: </label>
                <input type="text" name="maloai" value="<?php echo $row["maloai"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên loại phòng trọ: </label>
                <input type="text" name="tenloai" value="<?php echo $row["tenloai"]; ?>">
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