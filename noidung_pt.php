<script src="https://kit.fontawesome.com/4841d78f8a.js" crossorigin="anonymous"></script>
<?php
include("header.php");
include("ketnoi.php");
?>


<?php
              $mabd = $_REQUEST["baidang"];
              $sql = "SELECT * FROM baidang WHERE mabd = '".$mabd."'";
              $result = $conn->query($sql);
              
                ?>

<div class="full-bd">

    <div class="bd-right">
        <?php
                
                $mant =0;
            // Kiểm tra kết quả truy vấn
            if ($result->num_rows > 0) {
                // Lặp qua từng hàng dữ liệu
                while ($row = $result->fetch_assoc()) {
                    $mant = $row["mant"];
                    // Hiển thị dữ liệu trên trang web
                    echo '<div class="baidang">';
                    echo '<h2>' . htmlspecialchars($row["tenbd"]) . '</h2>';
                    echo '<p>' . htmlspecialchars($row["noidungbd"]) . '</p>';
                    echo '<img src="' . $row["anhbd"] . '" alt="Hình ảnh baidang">';
                    echo '<p>Ngày đăng: ' . $row["ngaydang"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "Không có bài đăng nào trong cơ sở dữ liệu.";
            }
            
            $sql_nhatro = "SELECT * FROM nhatro WHERE mant = '".$mant."'";
            $result_nhatro = $conn->query($sql_nhatro);
            
            ?>
    </div>
</div>

<div class="full-bot">
    <?php
 if ($result_nhatro->num_rows > 0) {
    // Lặp qua từng hàng dữ liệu
    while ($row_nt = $result_nhatro->fetch_assoc()) {
        echo " <div class='ttnt-left'>
                    <label class='tdnt'>THÔNG TIN VỀ NHÀ TRỌ</label>";
                    echo"
                    <div class='ttnt-ten'>
                        <label style='font-weight: 600;'>Tên nhà trọ:</label>
                        <label>".$row_nt["tennt"]."</label>
                    </div>";
                 echo"   <div class='ttnt-tct'>
                        <label style='font-weight: 600;'>Tên chủ nhà trọ:</label>
                        <label>".$row_nt["tenchutro"]."</label>
                    </div>";
                    echo"
                    <div class='ttnt-sdt'>
                        <label style='font-weight: 600;'>Số điện thoại liên lạc:</label>
                        <label>".$row_nt["sdtnt"]."</label>
                    </div>";
                 echo"   <div class='ttnt-dc'>
                        <label style='font-weight: 600;'>Địa chỉ:</label>
                        <label>".$row_nt["diachint"]."</label>
                    </div>
            </div>";

    }}

   
   ?>

    <div class="full-bl">
        <label style="font-size: 17px; font-weight:600;">Bình luận:</label>
        <!-- Cục bình luận thứ nhất -->
        <?php
            $sql_danhgia = "SELECT * FROM danhgia WHERE mant = '".$mant."'";
            $result_danhgia = $conn->query($sql_danhgia);
            if ($result_danhgia->num_rows > 0) {
                // Lặp qua từng hàng dữ liệu
                while ($row_dg = $result_danhgia->fetch_assoc()) {
                    $mand =$row_dg["mand"];
                    $sql_nd = "SELECT * FROM nguoidung WHERE mand = '".$mand."'";
                    $result_nd = $conn->query($sql_nd);
                     echo "<div class='khung-bl'>";
                    while ($row_nd = $result_nd->fetch_assoc()) {
                        echo"  <div class='bl-img'>
                                    <img src='".$row_nd["anhdaidien"]."'>
                                </div>";
                        echo"  <div class='bl-tt'>
                                    <label style='font-weight: 500;'>".$row_nd["tennd"]."</label>";

                        echo"       <label>";
                        
                        for ($i = 1; $i <= $row_dg["masao"]; $i++) {
                            echo" <i style='color: yellow;' class='fa-solid fa-star'></i>";
                        }
                        for ($i = $row_dg["masao"]; $i < 5; $i++) {
                            echo" <i class='fa-regular fa-star'></i>";
                        }
                        echo"  </label>";
                        echo"  <label>".$row_dg["binhluan"]."</label>
                            </div>";
                        

                    }
                   echo"    </div> ";
                }
            }
        ?>
    </div>
        <!-- <div class="khung-bl" >
        <div class="binhluan">
            <label> Nhận xét</label>
            <textarea name="binhluan"></textarea>
        </div>
        </div>

        </div> -->
    </div>


    <?php
include("footer.php");
?>