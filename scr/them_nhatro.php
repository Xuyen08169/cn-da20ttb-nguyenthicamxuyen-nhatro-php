<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_nhatro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="top-center">
            <h3> Thêm nhà trọ</h3>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã nhà trọ: </label>
                        <input type="text" name="mant" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã phường: </label>
                        <select name="phuong">
                            <?php
                $sql = "SELECT maphuong, tenphuong FROM phuong";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm phường: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $maphuong = $row['maphuong'];
                    $tenphuong = $row['tenphuong'];
                    echo "<option value=\"$maphuong\">$tenphuong</option>";
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
                        <input type="text" name="tennt">
                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Tên chủ nhà trọ: </label>
                        <input type="text" name="tenchutro">
                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">

                    <div> <label> Số điện thoại nhà trọ: </label>
                        <input type="text" name="sdtnt">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">

                    <div> <label> Địa chỉ nhà trọ: </label>
                        <input type="text" name="diachint">
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