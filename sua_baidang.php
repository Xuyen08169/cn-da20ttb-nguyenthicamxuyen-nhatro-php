<?php
include("header_admin.php");


include("ketnoi.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM baidang WHERE mabd = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin bài đăng" . mysqli_error());
$row = mysqli_fetch_array($kq);
?>


<form enctype="multipart/form-data" action="xuly_sua_baidang.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div>
            <label> Sữa bài đăng </label>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã bài đăng: </label>
                        <input type="text" name="mabd" value="<?php echo $row["mabd"]; ?>" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã người dùng: </label>
                        <input type="text" name="mand" value="<?php echo $row["mand"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã nhà trọ: </label>
                        <input type="text" name="mant" value="<?php echo $row["mant"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Tên bài đăng: </label>
                        <input type="text" name="tenbd" value="<?php echo $row["tenbd"]; ?>">
                    </div>
                </div>
            </div>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Ảnh bài đăng: </label>
                        <input type="file" name="anhbd">
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    </div>
                </div>
            </div>
        </div>



        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Ngày đăng: </label>
                        <input type="date" name="ngaydang" value="<?php echo $row["ngaydang"]; ?>">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Nội dung bài đăng: </label>
                        <input type="text" name="noidungbd" value="<?php echo $row["noidungbd"]; ?>">
                    </div>
                </div>
            </div>
        </div>




        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qlbaidang.php" />
        </div>


    </div>
</form>
<?php
include("footer_admin.php");
?>