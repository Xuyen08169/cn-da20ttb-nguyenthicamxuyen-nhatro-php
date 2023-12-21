
<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_phongtro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm phòng trọ</label>
        </div>


        <div class="table">
            <div> <label> Mã phòng trọ: </label>
                <input type="text" name="mapt" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã trạng thái: </label>
            <select name="matt">
                        <?php
                $sql = "SELECT matt, tentt FROM trangthai";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $matt = $row['matt'];
                    $tentt = $row['tentt'];
                    echo "<option value=\"$matt\">$tentt</option>";
                    }
                ?>
                    </select>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã loại: </label>
            <select name="maloai">
                        <?php
                $sql = "SELECT maloai, tenloai FROM loaiphongtro";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm loại phòng trọ: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $maloai = $row['maloai'];
                    $tenloai= $row['tenloai'];
                    echo "<option value=\"$maloai\">$tenloai</option>";
                    }
                ?>
                    </select>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã nhà trọ: </label>
            <select name="mant">
                        <?php
                $sql = "SELECT mant, tennt FROM nhatro";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm nhà trọ: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mant = $row['mant'];
                    $tennt = $row['tennt'];
                    echo "<option value=\"$mant\">$tennt</option>";
                    }
                ?>
                    </select>
            </div>
        </div>


        <div class="table">
            <div> <label> Mô tả: </label>
                <input type="text" name="mota">
            </div>
        </div>

        <div class="table">
            <div> <label> Giá phòng trọ: </label>
                <input type="text" name="giapt">
            </div>
        </div>


        <div class="table">
            <div> <label> Diện tích phòng trọ: </label>
                <input type="text" name="dientichpt">
            </div>
        </div>

        <div class="table">
            <div> <label> Ghi chú: </label>
                <input type="text" name="ghichu">
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