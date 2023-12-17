
<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM phongtro WHERE mapt = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin phòng trọ" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_phongtro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> sữa</label>
        </div>

        <div class="table">
            <div> <label> Mã phòng trọ: </label>
                <input type="text" name="mapt" value="<?php echo $row["mapt"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã trạng thái: </label>
                <input type="text" name="matt" value="<?php echo $row["matt"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Mã loại: </label>
                <input type="text" name="maloai" value="<?php echo $row["maloai"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Mã nhà trọ: </label>
                <input type="text" name="mant" value="<?php echo $row["mant"]; ?>">
            </div>
        </div>
        <div class="table">
            <div> <label> Mô tả: </label>
                <input type="text" name="mota" value="<?php echo $row["mota"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> giapt </label>
                <input type="text" name="giapt" value="<?php echo $row["giapt"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Diện tích phòng trọ: </label>
                <input type="text" name="dientichpt" value="<?php echo $row["dientichpt"]; ?>">
            </div>
        </div>

        
        <div class="table">
            <div> <label> Ghi chú: </label>
                <input type="text" name="ghichu" value="<?php echo $row["ghichu"]; ?>">
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