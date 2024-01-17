        <?php
        include("header.php");
        include("ketnoi.php");
        ?>
        <div class="td-trc">
            <label>Nhà trọ Trà Vinh</label>
        </div>
        <div class="full-trc">
            <div class="trc-left">

                <div class="trc-left-dt">

                <?php
                    // Array of predefined dienTich values
                    $dienTichValues = array('10m2', '15m2', '20m2','25m2');

                    // Generate HTML dynamically for the filter options
                    echo '<div class="trc-left-dientichpt">';
                    echo '<label style="font-weight:600; color: #79AC78; font-size:18px;">Diện tích</label>';

                    foreach ($dienTichValues as $dienTich) {
                        echo '<a href="index.php?locdientich=' . $dienTich . '"><ion-icon name="chevron-forward-outline"></ion-icon> ' . $dienTich . '</a>';
                    }

                    echo '</div>';



?>


        </div>

        <!-- ------------------------------------------------------------------- -->


        <div class=" trc-left-gia">
        <?php
// Array of predefined giapt values
            $giaptValues = array('750.000', '850.000', '1.000.000', '1.200.000');

            // Generate HTML dynamically for the filter options
            echo '<div class="trc-left-giapt">';
            echo '<label style="font-weight:600; color: #79AC78; font-size:18px;"> Giá phòng trọ</label>';

            foreach ($giaptValues as $giapt) {
                // Use raw values in the URL
                echo '<a href="index.php?locgiapt=' . $giapt . '"><ion-icon name="chevron-forward-outline"></ion-icon> ' . $giapt . '</a>';
            }

            echo '</div>';



            ?>


        </div>
        <!---------------------------------------------------------------------------------------->

        <div class=" trc-left-loai">

            <?php
                    // Assuming $conn is your database connection

                    $sql = "SELECT * FROM loaiphongtro";

                    $result = $conn->query($sql);

                    // Generate HTML dynamically
                    if ($result->num_rows > 0) {
                        echo '<div class="trc-left-loaiphongtro">';
                        echo '<label style="font-weight:600; color: #79AC78; font-size:18px;"> Loại phòng trọ</label>';

                        while ($row = $result->fetch_assoc()) {
                            echo '<a href="index.php?locloaipt=' .$row["maloai"] . '"><ion-icon name="chevron-forward-outline"></ion-icon> ' . $row["tenloai"] . '</a>';
                        }

                        echo '</div>';
                    } else {
                        echo "No records found based on the specified condition.";
                    }
                ?>
        </div>
        <!-- ------------------------------------------------------------------------------------------------- -->

        <div>
            <?php
                    $sql = "SELECT * FROM phuong";
                    $result = $conn->query($sql);
                    
                    // Generate HTML dynamically
                    if ($result->num_rows > 0) {
                        echo '<div class="trc-left-phuong">';
                        echo '<label style="font-weight:600; color: #79AC78; font-size:18px;">Phường</label>';
                        
                    
                        while ($row = $result->fetch_assoc()) {
                            echo '<a href="index.php?locphuong=' .$row["maphuong"] . '"><ion-icon name="chevron-forward-outline"></ion-icon> ' . $row["tenphuong"] . '</a>';
                        }
                    
                        echo '</div>';
                    } else {
                        echo "No records found in the 'phuong' table.";
                    }
                ?>
        </div>
    </div>
    <div class="trc-right">
        <!-- ------------------------------------------------------------------------------------------------------ -->

        <!-- Phần này là lọc diện tích -->

        <?php 
            if(!isset($_REQUEST["locdientich"]) && !isset($_REQUEST["locgiapt"]) && !isset($_REQUEST["locloaipt"]) && !isset($_REQUEST["locphuong"]))
            {
                if (isset($_GET['search_name'])) {
                    $search_name = $_GET['search_name'];
                    $sql_tongbd = "SELECT * FROM baidang WHERE tenbd LIKE '%$search_name%'";
                } else {
                    $sql_tongbd = "SELECT * FROM baidang";
                }

            
                $result_tongbd = $conn->query($sql_tongbd); 
                        // Generate HTML dynamically
                if ($result_tongbd->num_rows > 0) {
                    while ($row_tongbd = $result_tongbd->fetch_assoc()) {
                        echo " <a class='bd' href='noidung_pt.php?baidang=" . $row_tongbd["mabd"] . "'>
                                <div class='bd-img'>
                                    <img src='".$row_tongbd["anhbd"]."' width='200px' height='150px'>
                                </div>
                                <div class='bd-tt'>
                                    <label style='color: #C21010; font-weight:600; font-size: 18px;'>".$row_tongbd["tenbd"]."</label>
                                    <label style='color: gray; font-size: 15px;'>" . date('d/m/Y', strtotime($row_tongbd["ngaydang"])) . "</label>

                                    <label style='color: gray; font-size: 15px;'>".$row_tongbd["noidungbd"]."</label>
                                </div>
                            </a>";
                    }            
                } else {
                            echo "No records found in the 'baidang' table.";
                        }
            } else if (isset($_REQUEST["locdientich"]) && !isset($_REQUEST["locgiapt"])){
                $dientich = $_REQUEST["locdientich"];
                //Bước 1. lấy tất cả phòng trọ có diện tích cần lọc
                $sql_phongtro = "SELECT * FROM phongtro WHERE dientichpt = '" . $dientich . "'";
                $kq_phongtro = mysqli_query($conn, $sql_phongtro) or die ("Không thể xuất thông tin phòng trọ ".mysqli_error($conn));
                //nếu có phòng trọ 
                if ($kq_phongtro) {
                    //trong khi có phòng trọ trong danh sách
                    //Bước 2. Lấy các mã nhà trọ chứa phòng trọ đó
                    //tạo mảng chứa danh sách các mã phòng trọ
                    $array_manhatro = array();
                    while ($row_phongtro = $kq_phongtro->fetch_assoc()) {
                        $manhatro = $row_phongtro["mant"];
                        // Thêm mã phòng trọ vào mảng
                        $array_manhatro[] = $manhatro;
                    }
                    // Loại bỏ các mã nhà trọ trùng lặp
                    $unique_array_manhatro = array_unique($array_manhatro);
                    
                    //Bước 3. Lấy các bài đăng của các nhà trọ đó
                    foreach ($array_manhatro as $mant) {
                        
                        $sql_baidang = "SELECT * FROM baidang WHERE mant ='".$mant."'";
                        $result_baidang = $conn->query($sql_baidang);
                        //nếu có bài đăng
                        if ($result_baidang->num_rows > 0) {
                            while ($row_baidang = $result_baidang->fetch_assoc()) {
                                echo" <a class='bd' href='noidung_pt.php?baidang=" . $row_baidang["mabd"] . "'>
                                <div class='bd-img'>
                                    <img src='".$row_baidang["anhbd"]."' width='200px' height='150px'>
                                </div>
                                <div class='bd-tt'>
                                    <label style='color: #C21010; font-weight:600; font-size: 18px;'>".$row_baidang["tenbd"]."</label>
                                    <label style='color: gray; font-size: 15px;'>" . date('d/m/Y', strtotime($row_baidang["ngaydang"])) . "</label>
                                    <label style='color: gray; font-size: 15px;'>".$row_baidang["noidungbd"]."</label>
                                </div>
                            </a>";
                            }
                        }
                    }
                    
                }
                 

            }else if (isset($_REQUEST["locgiapt"])){
                $giapt = $_REQUEST["locgiapt"];
                $sql_phongtro = "SELECT * FROM phongtro WHERE giapt = '" . $giapt . "'";
                $kq_phongtro = mysqli_query($conn, $sql_phongtro) or die ("Không thể xuất thông tin phòng trọ ".mysqli_error($conn));
                //nếu có phòng trọ 
                if ($kq_phongtro) {
                    //trong khi có phòng trọ trong danh sách
                    //Bước 2. Lấy các mã nhà trọ chứa phòng trọ đó
                    //tạo mảng chứa danh sách các mã phòng trọ
                    $array_manhatro = array();
                    while ($row_phongtro = $kq_phongtro->fetch_assoc()) {
                        $manhatro = $row_phongtro["mant"];
                        // Thêm mã phòng trọ vào mảng
                        $array_manhatro[] = $manhatro;
                    }
                    // Loại bỏ các mã nhà trọ trùng lặp
                    $unique_array_manhatro = array_unique($array_manhatro);
                    //Bước 3. Lấy các bài đăng của các nhà trọ đó
                    foreach ($array_manhatro as $mant) {
                        $sql_baidang = "SELECT * FROM baidang WHERE mant ='".$mant."'";
                        $result_baidang = $conn->query($sql_baidang);
                        //nếu có bài đăng
                        if ($result_baidang->num_rows > 0) {
                            while ($row_baidang = $result_baidang->fetch_assoc()) {
                                echo" <a class='bd' href='noidung_pt.php?baidang=" . $row_baidang["mabd"] . "'>
                                <div class='bd-img'>
                                    <img src='".$row_baidang["anhbd"]."' width='200px' height='150px'>
                                </div>
                                <div class='bd-tt'>
                                    <label style='color: #C21010; font-weight:600; font-size: 18px;'>".$row_baidang["tenbd"]."</label>
                                    <label style='color: gray; font-size: 15px;'>" . date('d/m/Y', strtotime($row_baidang["ngaydang"])) . "</label>
                                    <label style='color: gray; font-size: 15px;'>".$row_baidang["noidungbd"]."</label>
                                </div>
                            </a>";
                            }
                        }
                    }
                    
                }
                 

            }else if (isset($_REQUEST["locloaipt"])){
                $maloai = $_REQUEST["locloaipt"];
                $sql_phongtro = "SELECT * FROM phongtro WHERE maloai = '" . $maloai . "'";
                $kq_phongtro = mysqli_query($conn, $sql_phongtro) or die ("Không thể xuất thông tin phòng trọ ".mysqli_error($conn));
                //nếu có phòng trọ 
                if ($kq_phongtro) {
                    //trong khi có phòng trọ trong danh sách
                    //Bước 2. Lấy các mã nhà trọ chứa phòng trọ đó
                    //tạo mảng chứa danh sách các mã phòng trọ
                    $array_manhatro = array();
                    while ($row_phongtro = $kq_phongtro->fetch_assoc()) {
                        $manhatro = $row_phongtro["mant"];
                        // Thêm mã phòng trọ vào mảng
                        $array_manhatro[] = $manhatro;
                    }
                    // Loại bỏ các mã nhà trọ trùng lặp
                    $unique_array_manhatro = array_unique($array_manhatro);
                    //Bước 3. Lấy các bài đăng của các nhà trọ đó
                    foreach ($array_manhatro as $mant) {
                        $sql_baidang = "SELECT * FROM baidang WHERE mant ='".$mant."'";
                        $result_baidang = $conn->query($sql_baidang);
                        //nếu có bài đăng
                        if ($result_baidang->num_rows > 0) {
                            while ($row_baidang = $result_baidang->fetch_assoc()) {
                                echo" <a class='bd' href='noidung_pt.php?baidang=" . $row_baidang["mabd"] . "'>
                                <div class='bd-img'>
                                    <img src='".$row_baidang["anhbd"]."' width='200px' height='150px'>
                                </div>
                                <div class='bd-tt'>
                                    <label style='color: #C21010; font-weight:600; font-size: 18px;'>".$row_baidang["tenbd"]."</label>
                                    <label style='color: gray; font-size: 15px;'>" . date('d/m/Y', strtotime($row_baidang["ngaydang"])) . "</label>
                                    <label style='color: gray; font-size: 15px;'>".$row_baidang["noidungbd"]."</label>
                                </div>
                            </a>";
                            }
                        
                    }
                    
                }
            } 

            }else if (isset($_REQUEST["locphuong"])){
                $maphuong = $_REQUEST["locphuong"];
                $sql_nhatro = "SELECT * FROM nhatro WHERE maphuong = '" . $maphuong . "'";
                $kq_nhatro = mysqli_query($conn, $sql_nhatro) or die ("Không thể xuất thông tin phòng trọ ".mysqli_error($conn));
               
                if ($kq_nhatro) {
                    while ($row_nhatro = $kq_nhatro->fetch_assoc()) {
                        $mant = $row_nhatro["mant"];
                        $sql_baidang = "SELECT * FROM baidang WHERE mant ='".$mant."'";
                        $result_baidang = $conn->query($sql_baidang);
                        //nếu có bài đăng
                        if ($result_baidang->num_rows > 0) {
                            while ($row_baidang = $result_baidang->fetch_assoc()) {
                                echo"<a class='bd' href='noidung_pt.php?baidang=" . $row_baidang["mabd"] . "'>
                                <div class='bd-img'>
                                    <img src='".$row_baidang["anhbd"]."' width='200px' height='150px'>
                                </div>
                                <div class='bd-tt'>
                                    <label style='color: #C21010; font-weight:600; font-size: 18px;'>".$row_baidang["tenbd"]."</label>
                                    <label style='color: gray; font-size: 15px;'>" . date('d/m/Y', strtotime($row_tongbd["ngaydang"])) . "</label>
                                    <label style='color: gray; font-size: 15px;'>".$row_baidang["noidungbd"]."</label>
                                </div>
                            </a>";
                            }
                       
                    }
                } 
                }
                 

            }         
        ?>
        <!-- hết một phần lọc -->









    </div>
</div>

<?php
include("footer.php");
?>