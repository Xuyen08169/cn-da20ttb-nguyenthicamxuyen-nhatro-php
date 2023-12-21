<?php
include("header_chutro.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ NHÀ TRỌ</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="sua_thongtin_ct.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p> Sữa thông tin</p>
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
                    <td width="7%">Mã nhà trọ</td>
                    <td width="13%">Mã Phường</td>
                    <td width="15%">Tên Nhà trọ</td>
                    <td width="15%">Tên chủ trọ</td>
                    <td width="15%">Số điện thoại nhà trọ</td>
                    <td width="25%">Địa chỉ nhà trọ </td>                    
                    <!-- <td width="10%">Tính năng</td>
                </tr> -->
                <?php 
                    include("ketnoi.php");
                    $sql="select * from nhatro ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                        $phuongs = $row["maphuong"];
                        $sql2 = "SELECT * FROM phuong WHERE maphuong='" . $phuongs . "'";
                        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $phuong = mysqli_fetch_array($kq2);

                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mant"]."</td>";
                        $usern=$row["mant"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        echo "<td> " . $phuong["tenphuong"] . "</td>";
                        echo "<td class='bang'> ".$row["tennt"]."</td>";
                        echo "<td class='bang'>".$row["tenchutro"]."</td>";
                        echo "<td class='bang'>".$row["sdtnt"]."</td>";
                        echo "<td class='bang'>".$row["diachint"]."</td>";
                        
                        echo "<td class='bang'>
                        
                        </td>";//Thêm cột sửa tương ứng + truyền biến user (chứa thông tin về tên đăng nhập) sang file sua.php
                        
                    }
                    ?>
        
        </div>
                </table>
    </div>

</div>
</div>

<?php
include("footer_chutro.php");
?>