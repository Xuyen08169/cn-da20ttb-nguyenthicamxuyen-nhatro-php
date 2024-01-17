<?php
include("ketnoi.php");
include("header_chutro.php");

$userlogin = isset($_SESSION["chutro"]) ? $_SESSION["chutro"] : null;

if ($userlogin) {
    $sql = "SELECT chutro.*, nhatro.* FROM chutro
            LEFT JOIN nhatro ON chutro.mant = nhatro.mant
            WHERE chutro.emailct = '" . $userlogin . "'";
    
    $result = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
} else {
    $row = null;
}
?>

<?php
if ($row) {
    echo '
        <div class="full-ttcn">
            <div class="ttcn-td">
                <label>THÔNG TIN CHỦ TRỌ</label>
            </div>
            <div class="ttcn">
                <div class="ttcn-img">
                    <img src="' . $row["anhdaidienct"] . '" width="250px" height="250px">
                </div>
                <div class="ttcn-tt">
                    <div class="ttcn-tt-left">
                        <label>Mã chủ trọ:</label>
                        <label>Mã nhà trọ:</label>
                        <label>Tên chủ trọ:</label>
                        <label>SDT:</label>
                        <label>Tên nhà trọ:</label>
                        <label>Địa chỉ nhà trọ:</label>
                    </div>
                    <div class="ttcn-tt-right">
                        <label>' . $row["machutro"] . '</label>
                        <label>' . $row["mant"] . '</label>
                        <label>' . $row["tenchutro"] . '</label>
                        <label>' . $row["sdtchutro"] . '</label>
                        <label>' . $row["tennt"] . '</label>
                        <label>' . $row["diachint"] . '</label>
                    </div>
                </div>
            </div>
        </div>
    ';
} else {
    echo 'User not found or not logged in.';
}
?>

<?php
include("footer_admin.php");
?>
