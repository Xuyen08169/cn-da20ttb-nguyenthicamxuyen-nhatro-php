<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ NGƯỜI DÙNG</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_nguoi_dung.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm người dùng</p>
                </a>
                <!-- <a href="#" class="button button-xtt">
                    <ion-icon name="trash-outline"></ion-icon>
                    <p>Xóa tất cả</p>
                </a> -->
            </div>
        </div>

        <div class="table">
            <table width="100%" class="table-content">
                <tr style="background-color:#CDD0CB; font-weight:600;">
                    <td width="3%"><input type="checkbox"></td>
                    <td width="10%">Mã người dùng</td>
                    <td width="15%">Tên người dùng</td>
                    <td width="10%">Số điện thoại</td>
                    <td width="20%">Email</td>
                    <td width="15%">Mật khẩu</td>                    
                    <td width="15%">Hình đại diện</td>
                    <td width="20%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from nguoidung ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                       
                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mand"]."</td>";
                        $usern=$row["mand"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        //
                        echo "<td class='bang'> ".$row["tennd"]."</td>";
                        echo "<td class='bang'>".$row["sdtnd"]."</td>";
                        echo "<td class='bang'>".$row["emailnd"]."</td>";
                        echo "<td class='bang'>".$row["matkhaund"]."</td>";
                        echo "<td><img src= '".$row["anhdaidien"]."' height='50' width='50'></td>";
                        ///////////


                        echo "<td class='bang'>
                        <a href='sua_nguoi_dung.php?user=$usern'><ion-icon name='create-outline'></ion-icon></a> 
                        <a href='xoa_nguoi_dung.php?user=$usern'><ion-icon name='trash-outline'></ion-icon></a>
                        </td>";//Thêm cột sửa tương ứng + truyền biến user (chứa thông tin về tên đăng nhập) sang file sua.php
                        
                    }
                    ?>
        
        </div>
                </table>
    </div>

</div>
</div>

<?php
include("footer_admin.php");
?>

