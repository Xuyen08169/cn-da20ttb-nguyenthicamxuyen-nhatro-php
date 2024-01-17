<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="Xuly_them_ct_tienich.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm chi tiết tiện ích</label>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã phòng trọ: </label>
                        <select name="mapt">
                            <?php
                $sql = "SELECT mapt FROM phongtro";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mapt = $row['mapt'];
                    $mapt = $row['mapt'];
                    echo "<option value=\"$mapt\">$mapt</option>";
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
                    <div> <label> Mã tiện ích: </label>
                        <select name="mati">
                            <?php
                $sql = "SELECT mati, tenti FROM tienich";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm bài đăng: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mati = $row['mati'];
                    $tenti= $row['tenti'];
                    echo "<option value=\"$mati\">$tenti</option>";
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
                    <div> <label> Số lượng tiện ích: </label>
                        <input type="text" name="soluongtienich">
                    </div>
                </div>
            </div>
        </div>


        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="ql_chitiet_tienich.php" />
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>