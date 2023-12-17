<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_nd.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="table-center">
            <label> Thêm  người dùng</label>
        </div>


        <div class="table">
            <div> <label> Mã người dùng: </label>
                <input type="text" name="mand" readonly>
            </div>
        </div>

        <div class="table">
            <div> <label> Tên người dùng: </label>
                <input type="text" name="tennd">
            </div>
        </div>

        <div class="table">
            <div> <label> Số điện thoại người dùng: </label>
                <input type="text" name="sdtnd">
            </div>
        </div>

        <div class="table">
            <div> <label> Email người dùng: </label>
                <input type="text" name="emailnd">
            </div>
        </div>

        <div class="table">
            <div> <label> Mật khẩu người dùng: </label>
                <input type="text" name="matkhaund">
            </div>
        </div>

        <div class="table">
            <div> <label> Hình đại diện người dùng: </label>
                <input type="file" name="anhdaidien">
                <input type="hidden" name="MAX_FILE_SIZE"value="100000">
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