<?php 
include("header.php");
?>

<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>

<style>
.ttcn-left img {
    display: block;
    border-radius: 200px;
    border: 3px solid black;
}

.ttcn-left {
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
    gap: 15px;
}

.tt-ttcn {
    display: flex;
    flex-direction: column;
    font-weight: 300;
    gap: 5px;
}

.tt-ttcn input {
    width: 300px;
    padding: 5px 10px;
    font-size: 17px;
    border: 1px solid black;
    border-radius: 5px;
}

.td-tt {
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
}

.btn-ttcn {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin-bottom: 150px;
}

.btn-ttcn button {
    background-color: green;
    color: yellow;
    padding: 15px 30px;
    border-radius: 10px;
    font-size: 17px;
    font-weight: 600;
    border: none;
}
</style>

<?php
include("ketnoi.php");

// Check if the session key is set before using it
$userlogin = isset($_SESSION["nguoidung"]) ? $_SESSION["nguoidung"] : null;

if ($userlogin) {
    $sql = "SELECT * FROM nguoidung WHERE emailnd='" . $userlogin . "'";
    $result = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());
    $row = mysqli_fetch_array($result);
} else {
    // Handle the case where the user is not logged in (if needed)
    $row = null;
}

// Handle form submission for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated information from the form
    $newtennd = $_POST["new_tennd"];
    $newsdtnd = $_POST["new_sdtnd"];
    $newemailnd = $_POST["new_emailnd"];

    // Handle image upload
    $targetDirectory = "./hinhanh/"; // Change this to the actual path
    $targetFile = $targetDirectory . basename($_FILES["file"]["name"]);

    // Check if a file is uploaded
    if ($_FILES["file"]["name"] != "") {
        $duongdan = "./hinhanh/" . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $duongdan);
        $anhdaidien = $duongdan;
    } else {
        // If no new file is uploaded, keep the existing avatar
        $anhdaidien = $row["anhdaidien"];
    }

    // Update the user information in the database
    // Update the user information in the database
$updateSql = "UPDATE nguoidung SET tennd='$newtennd', sdtnd='$newsdtnd', emailnd='$newemailnd', anhdaidien='$anhdaidien' WHERE emailnd='$userlogin'";
mysqli_query($conn, $updateSql) or die("Không thể cập nhật thông tin người dùng " . mysqli_error($conn)); // Pass $conn as an argument

// Redirect to the user profile page after updating
echo ("<script language=javascript>
        alert('Cập nhật thông tin thành công');
        window.location='thongtinnd.php';
    </script> ");

}
?>

<form method="post" action="" enctype="multipart/form-data">
    <div class="full-ttcn">

        <div class="ttcn">

            <div class="ttcn-left">
                <img src="<?php echo $row['anhdaidien']; ?>" width="200px" height="200px">
                <input type="file" name="file">
            </div>
        
            
            <div class="ttcn-right">
                <div>
                    <div class="td-tt">
                        <label>Chỉnh sửa thông tin cá nhân</label>
                    </div>
                </div>

                <div class="ttcb">
                    <div class="td-ttcn">
                        <label>Tên đăng nhập:</label>
                        <label>Số điện thoại:</label>
                        <label>Email người dùng:</label>

                    </div>
                    <div class="tt-ttcn">
                        <input type="text" name="new_tennd"
                            value="<?php echo isset($row["tennd"]) ? $row["tennd"] : ''; ?>" required>
                        <input type="text" name="new_sdtnd"
                            value="<?php echo isset($row["sdtnd"]) ? $row["sdtnd"] : ''; ?>" required>
                        <input type="text" name="new_emailnd"
                            value="<?php echo isset($row["emailnd"]) ? $row["emailnd"] : ''; ?>" required>


                    </div>
                </div>

                <div class="btn-ttcn">
                    <button type="submit">Lưu lại</button>
                    <a href="thongtinnd.php"><button type="button">Hủy</button></a>
                </div>
                
            </div>
        </div>
    </div>
</form>

<?php 
include("footer.php");
?>