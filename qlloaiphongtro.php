<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ LOẠI PHÒNG TRỌ</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_loaipt.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm loại phòng</p>
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
                    <td width="20%">Mã loại </td>
                    <td width="50%">Tên loại phòng trọ</td>
                    <td width="30%">Tính năng</td>




                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from loaiphongtro ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                       
                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["maloai"]."</td>";
                        $usern=$row["maloai"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        /// khóa ngoại
                        ///
                        echo "<td class='bang'> ".$row["tenloai"]."</td>";
                        ///////////


                        echo "<td class='bang'>
                        <a href='sua_loaipt.php?user=$usern'><ion-icon name='create-outline'></ion-icon></a> 
                        <a href='xoa_loaipt.php?user=$usern'><ion-icon name='trash-outline'></ion-icon></a>
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
