<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_nhatro.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm nhà trọ</label>
        </div>


        <div class="table">
            <div> <label> Mã nhà trọ: </label>
                <input type="text" name="mant" readonly>
            </div>
        </div>

        <div class="table">
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

        <div class="table">
            <div> <label> Tên nhà trọ: </label>
                <input type="text" name="tennt">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên chủ nhà trọ: </label>
                <input type="text" name="tenchutro">
            </div>
        </div>


        <div class="table">
            <div> <label> Số điện thoại nhà trọ: </label>
                <input type="number" name="sdtnt">
            </div>
        </div>

        <div class="table">
            <div> <label> Địa chỉ nhà trọ: </label>
                <input type="text" name="diachint">
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