<?php
    session_start();
     
    session_destroy(); // Hủy bỏ session

    echo '<script>sessionStorage.removeItem("activeItemIndex");</script>';

    echo "<script language=javascript>
        alert('Bạn đã thoát ra khỏi hệ thống!');
        window.location='login.php';
        </script> ";
    exit();
?>
