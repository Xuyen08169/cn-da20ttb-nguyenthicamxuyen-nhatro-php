<?php
include("header_admin.php");
?>
<form enctype="multipart/form-data" action="xuly_them_nd.php" name="them" method="post">
    <div>
        <div class="top-center">
            <p> QUẢN LÝ NHÀ TRỌ</p>
        </div>
        <div class="top-center">
            <h3> Thêm người dùng</h3>
        </div>


        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mã người dùng: </label>
                        <input type="text" name="mand" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Tên người dùng: </label>
                        <input type="text" name="tennd">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Số điện thoại người dùng: </label>
                        <input type="text" name="sdtnd">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Email người dùng: </label>
                        <input type="text" name="emailnd">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Mật khẩu người dùng: </label>
                        <input type="text" name="matkhaund">
                    </div>
                </div>
            </div>
        </div>

        <div class="table-center">
            <div class="txt-gv-top">
                <div class="txt-gv-lb">
                    <div> <label> Hình đại diện người dùng: </label>
                        <input type="file" name="anhdaidien">
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    </div>
                </div>
            </div>
        </div>


        <div class="txt-btn">
                <input class="txt-btn-luu" type="submit" name="luu" value="Lưu lại" />
                <input class="txt-btn-luu" type="reset" name="huy" value=" Hủy bỏ"  href="qlnguoidung.php"/>


        </div>
       

    </div>
</form>
<?php
include("footer_admin.php");
?>