<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM nhatro WHERE mant = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_nhatro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm nhà trọ</label>
        </div>

        <div class="table">
            <div> <label> Mã nhà trọ: </label>
                <input type="text" name="mant" value="<?php echo $row["mant"]; ?>" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã phường: </label>
                <input type="text" name="maphuong" value="<?php echo $row["maphuong"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên nhà trọ: </label>
                <input type="text" name="tennt" value="<?php echo $row["tennt"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên chủ trọ: </label>
                <input type="text" name="tenchutro" value="<?php echo $row["tenchutro"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Số điện thoại người dùng: </label>
                <input type="text" name="sdtnt" value="<?php echo $row["sdtnt"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Địa chỉ nhà trọ: </label>
                <input type="text" name="diachint" value="<?php echo $row["diachint"]; ?>">
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