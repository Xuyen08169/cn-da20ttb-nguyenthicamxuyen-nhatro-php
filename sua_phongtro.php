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
        <div>
            <label> Sữa phòng trọ</label>
        </div>

        <div class="table">
            <div> <label> Mã phòng trọ: </label>
                <input type="text" name="mapt" value="<?php echo $row["mapt"]; ?>" readonly>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã trạng thái: </label>
                        <select name="matt">
                            <?php
                $sql = "SELECT matt, tentt FROM trangthai";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row_tt = mysqli_fetch_assoc($kq)) {
                    $matt = $row_tt['matt'];
                    $tentt = $row_tt['tentt'];
                    $selected = ($matt == $row["matt"]) ? "selected" : "";
                    echo "<option value=\"$matt\" $selected>$tentt</option>";
                    
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
                    <div> <label> Mã loai: </label>
                        <select name="maloai">
                            <?php
                $sql = "SELECT maloai, tenloai FROM loaiphongtro";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm loại phòng trọ: " . mysqli_error($conn));
                while ($row_loai = mysqli_fetch_assoc($kq)) {
                    $maloai = $row_loai['maloai'];
                    $tenloai = $row_loai['tenloai'];
                    $selected = ($maloai == $row["maloai"]) ? "selected" : "";
                    echo "<option value=\"$maloai\" $selected>$tenloai</option>";
                    
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
                    <div> <label> Mã nhà trọ: </label>
                        <select name="mant">
                            <?php
                $sql = "SELECT mant, tennt FROM nhatro";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm nhà trọ: " . mysqli_error($conn));
                while ($row_nt = mysqli_fetch_assoc($kq)) {
                    $mant = $row_nt['mant'];
                    $tennt = $row_nt['tennt'];
                    $selected = ($mant == $row["mant"]) ? "selected" : "";
                    echo "<option value=\"$mant\" $selected>$tennt</option>";
                    
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
                    <div> <label> Mô tả: </label>
                        <input type="text" name="mota" value="<?php echo $row["mota"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> giapt </label>
                        <input type="text" name="giapt" value="<?php echo $row["giapt"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Diện tích phòng trọ: </label>
                        <input type="text" name="dientichpt" value="<?php echo $row["dientichpt"]; ?>">
                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Ghi chú: </label>
                        <input type="text" name="ghichu" value="<?php echo $row["ghichu"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Ảnh phòng trọ: </label>
                        <input type="file" name="anhpt">
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    </div>
                </div>
            </div>
        </div>


        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qlphongtro.php" />
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>