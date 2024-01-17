<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_phuong.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm phường </label>
        </div>


       
        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Mã phường: </label>
                <input type="text" name="maphuong" readonly>
            </div>
        </div>
            </div>
        </div>

       
        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Tên phường: </label>
                <input type="text" name="tenphuong">
            </div>
        </div>
            </div>
        </div>

        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qlphuong.php" />
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>