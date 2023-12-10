<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="csth.css">
    <title> Đăng nhập</title>
    

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 95vh;
        }
    </style>
</head>
<body>

    <div class="login_box">
        
        <h2></br> ĐĂNG NHẬP WEBSITE </h2>
        <div class="login_input">
        <form action="xulydangnhap.php" name="dangnhap" method="post">
            <div class="login_input">
                <input type="text" name="tendn" placeholder="Email" required>
                <input type="password" name="matkhau" placeholder="Mật khẩu" required>
                <div class="login_remember">
                    <input id="remember_pw" type="checkbox">
                    <label for="remember_pw">Nhớ mật khẩu</label>
                </div>
                <button type="submit" name="dn">Đăng nhập</button>
            </form>
        </div>
        

    </div>
</body>
</html>