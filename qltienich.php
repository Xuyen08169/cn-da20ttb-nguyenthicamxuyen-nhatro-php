<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ TIỆN ÍCH</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="#" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm tiện ích</p>
                </a>
                <a href="#" class="button button-xtt">
                    <ion-icon name="trash-outline"></ion-icon>
                    <p>Xóa tất cả</p>
                </a>
            </div>
        </div>

        <div class="table">
            <table width="100%" class="table-content">
                <tr style="background-color:#CDD0CB; font-weight:600;">
                    <td width="3%"><input type="checkbox"></td>
                    <td width="10%">Mã tiện ích </td>
                    <td width="55%">Tên tiện ích</td>
                    <td width="35%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from tienich ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                       

                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mati"]."</td>";
                        $usern=$row["mati"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        ///  
                        echo "<td class='bang'>".$row["tenti"]."</td>";
                      
                        ///////////


                        echo "<td class='bang'>
                        <a href='sua.php?user=$usern'><ion-icon name='create-outline'></ion-icon></a> 
                        <a href='xoa.php?user=$usern'><ion-icon name='trash-outline'></ion-icon></a>
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
