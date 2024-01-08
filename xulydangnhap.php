<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý đăng nhập</title>
</head>

<body>
    <?php

    include("ketnoi.php");
    $user = $_POST["tendn"]; 
    $pass = $_POST["matkhau"];
    $sql_nd = "select * from nguoidung where emailnd='" .$user. "' and matkhaund ='" .$pass. "'";
    $kq_nd = mysqli_query($conn, $sql_nd) or die("Không thể mở bảng người dùng".mysqli_error()); // thực thi câu lệnh SQL 

    $sql_ad = "select * from admin where emailadmin='" .$user. "' and passwordadmin ='" .$pass. "'";
    $kq_ad = mysqli_query($conn, $sql_ad) or die("Không thể mở bảng admin".mysqli_error()); // thực thi câu lệnh SQL
    
    $sql_ct = "select * from chutro where emailct='" .$user. "' and matkhauct ='" .$pass. "'";
    $kq_ct = mysqli_query($conn, $sql_ct) or die("Không thể mở bảng chủ trọ".mysqli_error()); // thực thi câu lệnh SQL
    if (mysqli_fetch_array($kq_nd)) {
        $_SESSION['nguoidung'] = $user;
        echo ("<script language=javascript>
                // alert('Đăng nhập thành công');
                window.location='index.php';
                </script> ");
    } else if(mysqli_fetch_array($kq_ad)){
            $_SESSION["admin"] = $user;
            echo ("<script language=javascript>
                    // alert('Đăng nhập thành công');
                    window.location='admin.php';
                    </script>");
    }else if(mysqli_fetch_array($kq_ct)){
        $_SESSION["chutro"] = $user;
        echo ("<script language=javascript>
                // alert('Đăng nhập thành công');
                window.location='chutro.php';
                </script>");  
    } 
    else {
            echo ("<script language=javascript>
                    alert('Sai tên đăng nhập hoặc mật khẩu');
                    window.location='login.php';
                    </script> ");
        }
    ?>
</body>

</html>
