
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

    <h2></br>ĐĂNG KÝ WEBSITE </h2>
    
    
        
            <div class="login_input">
            
            <input type="text" placeholder=" Tên đăng ký"/>

            
            <input type="password"placeholder=" Mật khẩu"/>

            
            <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Xác nhận mật khẩu">

            
            <input type="tel" id="phoneNumber"placeholder=" Số điện thoại"/>

            
            <input type="date" id="dob" required/>
            </div>
            <div class="login_input button">
            <button>Đăng Ký</button></div>
        </div>

        
    

    <script>
        function validateForm() {
            // Kiểm tra xác nhận mật khẩu
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (password !== confirmPassword) {
                alert("Mật khẩu và xác nhận mật khẩu không khớp!");
                return false;
            }

            // Các kiểm tra khác có thể được thêm tùy thuộc vào yêu cầu của bạn.

            return true;
        }
    </script>
</body>
</html>
