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
            <select name="masao">
                        <?php
                $sql = "SELECT masao, tensao FROM loaisao";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row_sao = mysqli_fetch_assoc($kq)) {
                    $masao = $row_sao['masao'];
                    $tensao = $row_sao['tensao'];
                    $selected = ($masao == $row["masao"]) ? "selected" : "";
                    echo "<option value=\"$masao\" $selected>$tensao</option>";
                    
                    }
                ?>
                    </select>
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


