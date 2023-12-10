<?php
include("header_admin.php");
?>

<div>
    <div class="top-center">
        <p> QUẢN LÝ PHÒNG TRỌ</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="#" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm phòng trọ</p>
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
                    <td width="10%">Mã <br>phòng trọ</td>
                    <td width="13%">Mã trạng thái</td>
                    <td width="12%">Mã loại</td>
                    <td width="15%">Mã nhà trọ</td>
                    <td width="7%">Mô tả </td>                    
                    <td width="10%">Giá <br>phòng trọ</td>
                    <td width="11%">Diện tích</td>
                    <td width="12%">Ghi chú </td>
                    <td width="10%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from phongtro ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                        $trangthais = $row["matt"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                        $sql2 = "SELECT * FROM trangthai WHERE matt='" . $trangthais . "'";
                        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $trangthai = mysqli_fetch_array($kq2);

                        $loais = $row["maloai"];
                        $sql3 = "SELECT * FROM loaiphongtro WHERE maloai='" . $mloais . "'";
                        $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $loai = mysqli_fetch_array($kq3);

                        $nhatros = $row["mant"];
                        $sql3 = "SELECT * FROM nhatro WHERE mant='" . $nhatros . "'";
                        $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $nhatro = mysqli_fetch_array($kq3);


                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mabd"]."</td>";
                        $usern=$row["mabd"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        echo "<td> " . $trangthai["tentt"] . "</td>";
                        echo "<td> " . $loai["tenloai"] . "</td>";/// khóa ngoại
                        echo "<td> " . $nhatro["tennt"] . "</td>";///
                        echo "<td class='bang'> ".$row["mota"]."</td>";
                        echo "<td><img src= '".$row["giapt"]."' height='50' width='50'></td>";
                        echo "<td class='bang'>".$row["dientichpt"]."</td>";
                        echo "<td class='bang'>".$row["ghichu"]."</td>";
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
