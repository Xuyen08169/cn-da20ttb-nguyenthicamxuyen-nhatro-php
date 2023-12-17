
<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; 

$sql = "SELECT * FROM danhgia where mand= '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin đánh giá" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_danhgia.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> sữa</label>
        </div>

        <div class="table">
            <div> <label> Mã người dùng: </label>
                <input type="text" name="mand" value="<?php echo $row["mand"]; ?>" readonly>
            </div>
        </div>

       
        <div class="table">
            <div> <label> Mã nhà trọ: </label>
                <input type="text" name="mant" value="<?php echo $row["mant"]; ?>" readonly>
            </div>
        </div>


        <div class="table">
            <div> <label> Mã sao: </label>
                <input type="text" name="masao" value="<?php echo $row["masao"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Bình luận: </label>
                <input type="text" name="binhluan" value="<?php echo $row["binhluan"]; ?>">
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