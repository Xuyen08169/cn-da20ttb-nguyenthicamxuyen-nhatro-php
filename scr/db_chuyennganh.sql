-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2023 lúc 04:24 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chuyennganh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `maadmin` int(11) NOT NULL,
  `tenadmin` varchar(50) NOT NULL,
  `emailadmin` varchar(30) NOT NULL,
  `passwordadmin` text NOT NULL,
  `avataadmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`maadmin`, `tenadmin`, `emailadmin`, `passwordadmin`, `avataadmin`) VALUES
(1, 'Cẩm Xuyên', 'xuyennguyen21012001@gmail.com', '12345', 'hinhanh/ran.jpg'),
(2, 'Tiên Tiên', 'tientien346@gmail.com', '1234', 'hinhanh/sau.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `mabd` int(11) NOT NULL,
  `mand` int(11) NOT NULL,
  `mant` int(11) NOT NULL,
  `tenbd` varchar(100) NOT NULL,
  `anhbd` text NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettienich`
--

CREATE TABLE `chitiettienich` (
  `mapt` int(11) NOT NULL,
  `mati` int(11) NOT NULL,
  `soluongtienich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `mand` int(11) NOT NULL,
  `mant` int(11) NOT NULL,
  `masao` int(11) NOT NULL,
  `binhluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphongtro`
--

CREATE TABLE `loaiphongtro` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisao`
--

CREATE TABLE `loaisao` (
  `masao` int(11) NOT NULL,
  `tensao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `mand` int(11) NOT NULL,
  `tennd` varchar(50) NOT NULL,
  `sdtnd` varchar(10) NOT NULL,
  `emailnd` varchar(30) NOT NULL,
  `matkhaund` text NOT NULL,
  `anhdaidien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`mand`, `tennd`, `sdtnd`, `emailnd`, `matkhaund`, `anhdaidien`) VALUES
(1, 'Trung Hiếu', '0866776732', 'trunghieu1234@gmail.com', '12345', 'hinhanh/tho.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatro`
--

CREATE TABLE `nhatro` (
  `mant` int(11) NOT NULL,
  `maphuong` int(11) NOT NULL,
  `tennt` varchar(50) NOT NULL,
  `tenchutro` varchar(30) NOT NULL,
  `sdtnt` varchar(10) NOT NULL,
  `diachint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatro`
--

INSERT INTO `nhatro` (`mant`, `maphuong`, `tennt`, `tenchutro`, `sdtnt`, `diachint`) VALUES
(1, 1, 'Mai Linh', 'Hiếu Hiếu', '0765489672', 'số 32, Phạm Ngũ Lão, Phường 1, Thành phố Trà Vinh'),
(2, 7, 'Tường Duy', 'Thanh Trúc', '0124698753', 'Số 35, Nguyễn Thị Minh Khai, Phường 7, Thành Phố Trà Vinh ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongtro`
--

CREATE TABLE `phongtro` (
  `mapt` int(11) NOT NULL,
  `matt` int(11) NOT NULL,
  `maloai` int(11) NOT NULL,
  `mant` int(11) NOT NULL,
  `mota` text NOT NULL,
  `giapt` varchar(20) NOT NULL,
  `dientichpt` varchar(20) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuong`
--

CREATE TABLE `phuong` (
  `maphuong` int(11) NOT NULL,
  `tenphuong` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuong`
--

INSERT INTO `phuong` (`maphuong`, `tenphuong`) VALUES
(1, 'Phường 1'),
(2, 'Phường 2'),
(3, 'Phường 3'),
(4, 'Phường 4'),
(5, 'Phường 5'),
(6, 'Phường 6'),
(7, 'Phường 7'),
(8, 'Phường 8'),
(9, 'Phường 9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tienich`
--

CREATE TABLE `tienich` (
  `mati` int(11) NOT NULL,
  `tenti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `matt` int(11) NOT NULL,
  `tentt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`maadmin`);

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`mabd`),
  ADD KEY `mand` (`mand`),
  ADD KEY `mant` (`mant`);

--
-- Chỉ mục cho bảng `chitiettienich`
--
ALTER TABLE `chitiettienich`
  ADD KEY `mapt` (`mapt`),
  ADD KEY `mati` (`mati`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD KEY `mand` (`mand`),
  ADD KEY `mant` (`mant`),
  ADD KEY `masao` (`masao`);

--
-- Chỉ mục cho bảng `loaiphongtro`
--
ALTER TABLE `loaiphongtro`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `loaisao`
--
ALTER TABLE `loaisao`
  ADD PRIMARY KEY (`masao`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`mand`);

--
-- Chỉ mục cho bảng `nhatro`
--
ALTER TABLE `nhatro`
  ADD PRIMARY KEY (`mant`),
  ADD KEY `maphuong` (`maphuong`);

--
-- Chỉ mục cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  ADD PRIMARY KEY (`mapt`),
  ADD KEY `matt` (`matt`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mant` (`mant`);

--
-- Chỉ mục cho bảng `phuong`
--
ALTER TABLE `phuong`
  ADD PRIMARY KEY (`maphuong`);

--
-- Chỉ mục cho bảng `tienich`
--
ALTER TABLE `tienich`
  ADD PRIMARY KEY (`mati`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`matt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `maadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `mabd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaiphongtro`
--
ALTER TABLE `loaiphongtro`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisao`
--
ALTER TABLE `loaisao`
  MODIFY `masao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `mand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhatro`
--
ALTER TABLE `nhatro`
  MODIFY `mant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  MODIFY `mapt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phuong`
--
ALTER TABLE `phuong`
  MODIFY `maphuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tienich`
--
ALTER TABLE `tienich`
  MODIFY `mati` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`),
  ADD CONSTRAINT `baidang_ibfk_2` FOREIGN KEY (`mant`) REFERENCES `nhatro` (`mant`);

--
-- Các ràng buộc cho bảng `chitiettienich`
--
ALTER TABLE `chitiettienich`
  ADD CONSTRAINT `chitiettienich_ibfk_1` FOREIGN KEY (`mapt`) REFERENCES `phongtro` (`mapt`),
  ADD CONSTRAINT `chitiettienich_ibfk_2` FOREIGN KEY (`mati`) REFERENCES `tienich` (`mati`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`mand`) REFERENCES `nguoidung` (`mand`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`mant`) REFERENCES `nhatro` (`mant`),
  ADD CONSTRAINT `danhgia_ibfk_3` FOREIGN KEY (`masao`) REFERENCES `loaisao` (`masao`);

--
-- Các ràng buộc cho bảng `nhatro`
--
ALTER TABLE `nhatro`
  ADD CONSTRAINT `nhatro_ibfk_1` FOREIGN KEY (`maphuong`) REFERENCES `phuong` (`maphuong`);

--
-- Các ràng buộc cho bảng `phongtro`
--
ALTER TABLE `phongtro`
  ADD CONSTRAINT `phongtro_ibfk_1` FOREIGN KEY (`matt`) REFERENCES `trangthai` (`matt`),
  ADD CONSTRAINT `phongtro_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaiphongtro` (`maloai`),
  ADD CONSTRAINT `phongtro_ibfk_3` FOREIGN KEY (`mant`) REFERENCES `nhatro` (`mant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
