<?php 
include("header.php");
?>

<?php 
    session_start(); 
    session_destroy();
        echo "<script language=javascript>
        alert ('Bạn đã đăng xuất thành công');
        window.location='index.php';
        </script> ";
?>


<?php 
include("footer.php");
?>