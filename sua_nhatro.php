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
        <div class="top-center">
            <h3> Sữa nhà trọ</h3>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã nhà trọ: </label>
                        <input type="text" name="mant" value="<?php echo $row["mant"]; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã phường: </label><!-- nếu muốn sổ bản khóa ngoại-->
                        <select name="maphuong">
                            <?php
                $sql = "SELECT maphuong, tenphuong FROM phuong";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row_phuong = mysqli_fetch_assoc($kq)) {
                    $maphuong = $row_phuong['maphuong'];
                    $tenphuong = $row_phuong['tenphuong'];
                    $selected = ($maphuong == $row["maphuong"]) ? "selected" : "";
                    echo "<option value=\"$maphuong\" $selected>$tenphuong</option>";
                    
                    }
                ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Tên nhà trọ: </label>
                        <input type="text" name="tennt" value="<?php echo $row["tennt"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Tên chủ trọ: </label>
                        <input type="text" name="tenchutro" value="<?php echo $row["tenchutro"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Số điện thoại người dùng: </label>
                        <input type="text" name="sdtnt" value="<?php echo $row["sdtnt"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Địa chỉ nhà trọ: </label>
                        <input type="text" name="diachint" value="<?php echo $row["diachint"]; ?>">
                    </div>
                </div>
            </div>
        </div>







        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qlnhatro.php" />
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>