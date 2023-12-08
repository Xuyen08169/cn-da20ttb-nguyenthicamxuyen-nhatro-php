<!DOCTYPE html>
<html>
<head>
    <title>Menu Đa Cấp</title>
    <style>
        /* Thiết lập CSS cho menu */
        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            display: inline-block;
            position: relative;
        }

        ul li a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
        }

        ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            border: 1px solid #ccc;
        }

        ul li:hover > ul {
            display: block;
        }

        ul li ul li {
            display: block;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="#">Trang chủ</a></li>
        <li>
            <a href="#">Danh mục</a>
            <ul>
                <li><a href="#">Danh mục con 1</a></li>
                <li><a href="#">Danh mục con 2</a></li>
                <li><a href="#">Danh mục con 3</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Sản phẩm</a>
            <ul>
                <li><a href="#">Sản phẩm con 1</a></li>
                <li><a href="#">Sản phẩm con 2</a></li>
            </ul>
        </li>
        <li><a href="#">Liên hệ</a></li>
    </ul>
</body>
</html>
