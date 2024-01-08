<?php
include("ketnoi.php");
include("header.php");

// Check if the session key is set before using it
$userlogin = isset($_SESSION["nguoidung"]) ? $_SESSION["nguoidung"] : null;

if ($userlogin) {
    $sql = "SELECT *
            FROM nguoidung
            
            WHERE emailnd = '" . $userlogin . "'";

    $result = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error($conn));
    $row = mysqli_fetch_array($result);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $oldPassword = $_POST["oldPassword"];
        $newPassword = $_POST["newPassword"];
        $confirmPassword = $_POST["confirmPassword"];

        // Validate the old password (you might want to enhance this)
        if ($oldPassword == $row["matkhaund"]) {
            // Validate the new password (you might want to enhance this)
            if ($newPassword == $confirmPassword) {
                // Update the password in the database
                $updateSql = "UPDATE nguoidung SET matkhaund = '$newPassword' WHERE emailnd = '$userlogin'";
                mysqli_query($conn, $updateSql) or die("Không thể cập nhật mật khẩu " . mysqli_error($conn));
                
                // Inform the user that the password has been updated
                echo ("<script language=javascript>
                    alert('Mật khẩu của bạn đã được cập nhật');
                    window.location='thongtinnd.php';
                    </script> ");
            } else {
                echo ("<script language=javascript>
                    alert('Mật khẩu mới không khớp! Hãy nhập lại mật khẩu mới');
                    </script>");
            }
        } else {
            echo ("<script language=javascript>
                    alert('Mật khẩu cũ không đúng! Hãy nhập lại mật khẩu');
                    </script>");
        }
    }
} else {
    // Handle the case where the user is not logged in (if needed)
    $row = null;
}
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>

.ttcn-left{
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
}


.ttcn-right {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ttcn {
    display: flex;
    background-color: F5F7F8;
    margin: 30px 220px;
    padding: 30px 50px;
    border-radius: 10px;
    align-items: center;
    gap: 60px;
    justify-content: center;
    box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.25);
}

.ttcb {
    display: flex;
    padding: 10px 0px;
    gap: 15px;
    font-size: 17px;
}

.td-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 400;
    gap: 15px ;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.tt-ttcn input{
    width: 300px;
    padding: 5px 10px;
    font-size: 17px;
    border: 1px solid black;
    border-radius: 5px ;
}

.td-tt{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin-bottom: 150px;
}

.btn-ttcn button{
    background-color:green;
    color:yellow;
    padding: 15px 30px;
    border-radius: 10px;
    font-size: 17px;
    font-weight: 600;
    border: none;
}

</style>

<!-- The rest of your HTML code remains unchanged -->
<form method="post" action="">
<div class="full-ttcn">
    <div class="ttcn">
        <div class="ttcn-right">
            <div>
                <div class="td-tt">
                    <label>Đổi mật khẩu</label>
                </div>
            </div>
            <div>
                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Mật khẩu cũ:</label>
                        <label>Mật khẩu mới:</label>
                        <label>Nhập lại mật khẩu mới:</label>
                    </div>
                    <div class="tt-ttcn">
                        <input type="password" name="oldPassword" required>
                        <input type="password" name="newPassword" required>
                        <input type="password" name="confirmPassword" required>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="btn-ttcn">
    <button type="submit">Lưu lại</button>
        <a href="thongtinnd.php"><button>Hủy</button></a>
    </div>
</form>

<!-- </div>
                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Nhập mật khẩu cũ:</label>
                        <input type="password" name="oldPassword" required>
                        <label>Nhập Mật khẩu mới :</label>
                        <input type="password" name="newPassword" required>
                        <label>Nhập lại mật khẩu mới:</label>
                        <input type="password" name="confirmPassword" required>
                    </div>


                <div class="btn-ttcn">
                    <button type="submit">Lưu lại</button>
                    <a href="thongtinnd.php"><button type="button">Hủy</button></a>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</form> -->


<?php
include("footer.php");
?>