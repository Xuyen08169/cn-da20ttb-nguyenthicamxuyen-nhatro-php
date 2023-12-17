<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM tienich WHERE mati = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin bộ môn " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_ti.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm tiện ích</label>
        </div>


        <div class="table">
            <div> <label> Mã tiện ích: </label><!---->
                <input type="text" name="mati" value="<?php echo $row["mati"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên tiện ích : </label>
                <input type="text" name="tenti" value="<?php echo $row["tenti"]; ?>">
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