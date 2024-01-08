<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ CÁC PHƯỜNG </p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_phuong.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm phường</p>
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
                    <td width="10%">Mã Phường </td>
                    <td width="60%">Tên Phường</td>
                    <td width="40%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from phuong ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                        

                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["maphuong"]."</td>";
                        $usern=$row["maphuong"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        echo "<td class='bang'>".$row["tenphuong"]."</td>";
                        
                        ///////////


                        echo "<td class='bang'>
                  
                        <a href='xoa_phuong.php?user=$usern'><ion-icon name='trash-outline'></ion-icon></a>
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

