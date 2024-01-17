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
        <div>
            <label> Sữa tiện ích</label>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Mã tiện ích: </label>
                <input type="text" name="mati" value="<?php echo $row["mati"]; ?>" readonly>
            </div>
        </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Tên tiện ích : </label>
                <input type="text" name="tenti" value="<?php echo $row["tenti"]; ?>">
            </div>
        </div>
            </div>
        </div>

        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qltienich.php" />
        </div>


    </div>
</form>
<?php
include("footer_admin.php");
?>