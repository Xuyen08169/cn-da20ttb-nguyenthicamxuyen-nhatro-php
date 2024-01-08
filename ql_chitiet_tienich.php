<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ ĐÁNH GIÁ </p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_ct_tienich.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm các chi tiết tiện ích</p>
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
                    <td width="14%">Mã Phòng trọ</td>
                    <td width="12%">Mã tiện ích</td>
                    <td width="15%">Số lượng tiện ích</td>
                    <td width="12%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from chitiettienich ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                        $phongtros = $row["mapt"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                        $sql2 = "SELECT * FROM phongtro WHERE mapt='" . $phongtros . "'";
                        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $phongtro = mysqli_fetch_array($kq2);

                        $tienichs = $row["mati"];
                        $sql3 = "SELECT * FROM tienich WHERE mati='" . $tienichs . "'";
                        $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $tienich = mysqli_fetch_array($kq3);

                       

                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mapt"]."</td>";
                        $usern=$row["mapt"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        //echo "<td> " . $nguoidung["tennd"] . "</td>";/// khóa ngoại
                        echo "<td> " . $tienich["mati"] . "</td>";
                    
                 
                        echo "<td class='bang'> ".$row["soluongtienich"]."</td>";
                        
                        ///////////


                        echo "<td class='bang'>
                       
                        <a href='xoa_danhgia.php?user=$usern'><ion-icon name='trash-outline'></ion-icon></a>
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
