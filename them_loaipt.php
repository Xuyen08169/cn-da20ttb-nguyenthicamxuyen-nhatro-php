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


        
        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Mã loại phòng trọ: </label>
                <input type="text" name="maloai" readonly>
            </div>
        </div>
            </div>
        </div>

       
        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
            <div> <label> Tên loại phòng: </label>
                <input type="text" name="tenloai">
            </div>
        </div>
            </div>
        </div>

        <div class="txt-btn">
            <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
            <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ" href="qlloaiphongtro.php" />
        </div>



    </div>
</form>
<?php
include("footer_admin.php");
?>