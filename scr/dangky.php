
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register</title>
    <link rel="stylesheet" type="text/css" href="csth2.css">
    
</head>
<body>

<div class="login_box">
<form enctype="multipart/form-data" action="Xuly_dangky.php" name="frmdk" method="post">

    <h2></br>ĐĂNG KÝ WEBSITE </h2>
    
            <div class="login_input">

            
             <input type="text" name="tennd"  placeholder=" Tên đăng ký"/>
           
             <input type=" number" name="sdtnd" placeholder=" Số điện thoại"/>


             <input type="email" name="emailnd" placeholder=" email người dùng"/>

            <input type="password" name="matkhaund" placeholder=" Mật khẩu"/>
            
                <td><input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                    <input type="file" name="anhdaidien" />
                </td>
            </div>
            <div class="login_input button">
            <button>Đăng Ký</button></div>
           
        </div>
</body>
</html>
