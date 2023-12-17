<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_ti.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm tiện ích</label>
        </div>


        <div class="table">
            <div> <label> Mã tiện ích: </label>
                <input type="text" name="mati" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên tiện ích : </label>
                <input type="text" name="tenti">
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