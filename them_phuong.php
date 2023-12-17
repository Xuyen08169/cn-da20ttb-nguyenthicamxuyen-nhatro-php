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


        <div class="table">
            <div> <label> Mã phường: </label>
                <input type="text" name="maphuong" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên phường: </label>
                <input type="text" name="tenphuong">
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