
<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_baidang.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm bài đăng</label>
        </div>


        <div class="table">
            <div> <label> Mã bài đăng: </label>
                <input type="text" name="mabd" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Mã người dùng: </label>
            <select name="mand">
                        <?php
                $sql = "SELECT mand, tennd FROM nguoidung";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mand = $row['mand'];
                    $tennd = $row['tennd'];
                    echo "<option value=\"$mand\">$tennd</option>";
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
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm bài đăng: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $mant = $row['mant'];
                    $tennt= $row['tennt'];
                    echo "<option value=\"$mant\">$tennt</option>";
                    }
                ?>
                    </select>
            </div>
        </div>

     

        <div class="table">
            <div> <label> Tên bài đăng: </label>
                <input type="text" name="tenbd">
            </div>
        </div>

        <div class="table">
            <div> <label> Ảnh bài đăng: </label>
                <input type="file" name="anhbd">
                <input type="hidden" name="MAX_FILE_SIZE"value="100000">
            </div>
        </div>




        <div class="table">
            <div> <label> Ngày đăng: </label>
                <input type="date" name="ngaydang">
            </div>
        </div>

        <div class="table">
            <div> <label> Nội dung bài đăng: </label>
                <input type="text" name="noidungbd">
            </div>
        </div>


        <div class="table">

            <input type="submit" name="luu" value="Lưu">
        </div>
    </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>