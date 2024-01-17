<?php
include("header_admin.php");
?>

<head>
    <script src="ckeditor/ckeditor.js"></script>

</head>
<form enctype="multipart/form-data" action="xuly_them_phongtro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="top-center">
            <h3> Thêm phòng trọ</h3>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã phòng trọ: </label>
                        <input type="text" name="mapt" readonly>
                    </div>
                </div>
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
                while ($row = mysqli_fetch_assoc($kq)) {
                    $matt = $row['matt'];
                    $tentt = $row['tentt'];
                    echo "<option value=\"$matt\">$tentt</option>";
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
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mant = $row['mant'];
                    $tennt = $row['tennt'];
                    echo "<option value=\"$mant\">$tennt</option>";
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
                        <textarea name="mota" id="editor1"></textarea>
                        <script>
                        CKEDITOR.replace('editor1');
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Giá phòng trọ: </label>
                    <select name="dientichpt">
                        <option value="750">750.000</option>
                        <option value="850">850.000</option>
                        <option value="1"> 1.000.000</option>
                        <option value="1"> 1.200.000</option>

                    </select>
                        <!-- <input type="text" name="giapt"> -->


                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Diện tích phòng trọ: </label>
                    <select name="dientichpt">
                        <option value="10">10m²</option>
                        <option value="15">15m²</option>
                        <option value="20">20m²</option>
                        <option value="25">25m²</option>

                    </select>
                        <!-- <input type="text" name="dientichpt"> -->
                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Ghi chú: </label>
                        <input type="text" name="ghichu">
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