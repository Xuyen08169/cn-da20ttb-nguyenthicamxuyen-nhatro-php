<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_loaipt.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm  loại phòng trọ</label>
        </div>


        <div class="table">
            <div> <label> Mã loại phòng trọ: </label>
                <input type="text" name="maloai" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên loại phòng: </label>
                <input type="text" name="tenloai">
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