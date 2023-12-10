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
                <a href="#" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm các bình luận</p>
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
                    <td width="14%">Mã người dùng</td>
                    <td width="12%">Mã nhà trọ</td>
                    <td width="10%">Tên nhà trọ</td>
                    <td width="12%">Mã sao</td>
                    <td width="50%">Bình luận</td>
                    <td width="12%">Tính năng</td>


                </tr>
                <?php 
                    include("ketnoi.php");
                    $sql="select * from danhgia ";
                    $kq=mysqli_query($conn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error()); 
                    while($row=mysqli_fetch_array($kq))
                    {
                        $nguoidungs = $row["mand"];//////////nếu không có khóa ngoại thì ko cần dùng đến
                        $sql2 = "SELECT * FROM nguoidung WHERE mand='" . $nguoidungs . "'";
                        $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $nguoidung = mysqli_fetch_array($kq2);

                        $nhatros = $row["mant"];
                        $sql3 = "SELECT * FROM nhatro WHERE mant='" . $nhatros . "'";
                        $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $nhatro = mysqli_fetch_array($kq3);

                        $saos = $row["masao"];
                        $sql3 = "SELECT * FROM loaisao WHERE masao='" . $saos . "'";
                        $kq3 = mysqli_query($conn, $sql3) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                        $sao = mysqli_fetch_array($kq3);


                        echo "<tr>";
                        echo"<td width='3%'><input type='checkbox'></td>";
                        echo "<td> ".$row["mand"]."</td>";
                        $usern=$row["mand"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
                        //echo "<td> " . $nguoidung["tennd"] . "</td>";/// khóa ngoại
                        echo "<td> " . $nhatro["mant"] . "</td>";
                        echo "<td> " . $nhatro["tennt"] . "</td>";
                        echo "<td> " . $sao["tensao"] . "</td>";///
                        echo "<td class='bang'> ".$row["binhluan"]."</td>";
                        
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
