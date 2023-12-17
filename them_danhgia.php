
<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_danhgia.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm đánh giá</label>
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
            <div> <label> Mã sao: </label>
            <select name="masao">
                        <?php
                $sql = "SELECT masao, tensao FROM loaisao";
                $kq = mysqli_query($conn, $sql) or die("Không thể thêm trạng thái: " . mysqli_error($conn));
                while ($row = mysqli_fetch_assoc($kq)) {
                    $masao = $row['masao'];
                    $tensao = $row['tensao'];
                    echo "<option value=\"$masao\">$tensao</option>";
                    }
                ?>
                    </select>
            </div>
        </div>


        <div class="table">
            <div> <label> Bình luận: </label>
                <input type="text" name="binhluan">
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