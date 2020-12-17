-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2020 lúc 06:12 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phonestore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` char(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tendangnhap` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` tinyint(4) NOT NULL,
  `loai` tinyint(4) NOT NULL,
  `ten` char(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `tendangnhap`, `matkhau`, `trangthai`, `loai`, `ten`) VALUES
(1, 'danghoangtruong156@Gmail.com', 'hoangtruong', 'hoangtruong1', 1, 1, 'Đặng Hoàng Trương'),
(2, NULL, 'huynhquoctrung', 'huynhquoctrung1', 1, 2, 'Huỳnh Quốc Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `mactdh` int(11) NOT NULL,
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `giasp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`mactdh`, `madh`, `masp`, `giasp`, `soluong`) VALUES
(4, 7, 14, 1590000, 2),
(5, 7, 12, 4490000, 2),
(6, 7, 11, 4390000, 1),
(7, 7, 7, 2900000, 7),
(8, 8, 9, 7590000, 1),
(9, 8, 7, 2900000, 1),
(10, 8, 11, 4390000, 1),
(11, 9, 13, 5490000, 3),
(12, 10, 3, 3700000, 1),
(13, 11, 14, 1590000, 1),
(14, 12, 1, 2800000, 8),
(15, 13, 2, 1880000, 8),
(16, 14, 13, 5490000, 2),
(17, 14, 11, 4390000, 1),
(18, 15, 13, 5490000, 4),
(19, 16, 13, 5490000, 2),
(20, 17, 7, 2748000, 7),
(21, 18, 20, 39690000, 2),
(22, 19, 9, 7590009, 1),
(23, 20, 3, 3799999, 1),
(24, 21, 29, 4990000, 10),
(25, 22, 2, 2380000, 7),
(26, 22, 1, 2800009, 2),
(27, 23, 15, 22990000, 5),
(28, 24, 29, 4990000, 1),
(29, 25, 29, 4990000, 8),
(30, 26, 27, 5990000, 2),
(31, 26, 30, 2990004, 5),
(32, 27, 18, 43900000, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `mactgh` int(11) NOT NULL,
  `magiohang` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`mactgh`, `magiohang`, `masp`, `soluong`) VALUES
(7, 5, 6, 9),
(8, 5, 27, 7),
(9, 5, 11, 2),
(10, 5, 10, 1),
(11, 5, 30, 2),
(12, 7, 30, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `ngaydh` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngaygh` datetime DEFAULT NULL,
  `makh` int(11) DEFAULT NULL,
  `math` tinyint(4) NOT NULL DEFAULT '0',
  `tenkh` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachikh` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `sdtkh` char(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madh`, `ngaydh`, `ngaygh`, `makh`, `math`, `tenkh`, `diachikh`, `sdtkh`) VALUES
(7, '2019-11-20 09:16:51', NULL, NULL, 2, 'Nguyễn Nghĩa', '166 Bình Thới P11 Q11 Hồ Chí Minh', '09327266'),
(8, '2019-11-26 10:13:36', NULL, 1, 4, 'Huỳnh Quốc Trung', 'Cao Lỗ', '0932726612'),
(9, '2019-11-26 10:38:48', NULL, 1, 1, 'Huỳnh Quốc Trung', 'hgfhghj', '0932726612'),
(10, '2019-11-30 14:20:46', NULL, NULL, 1, 'Trịnh Sản', '166 Bình Thới', '0932726612'),
(11, '2019-12-02 10:01:30', NULL, NULL, 1, 'Nguyễn Nghĩa', '1685/461 Long Hưng', '98465132'),
(12, '2019-12-02 10:10:18', NULL, NULL, 1, 'Nguyễn Nghĩa', '166 Bình Thới', '98465132'),
(13, '2019-12-02 10:11:04', NULL, NULL, 1, 'sssssss', 'Địa chỉ', '0932726613'),
(14, '2019-12-02 11:09:29', NULL, NULL, 1, 'AAAAA', 'AAAAA', 'AAAAAA'),
(15, '2019-12-02 11:12:27', NULL, 1, 1, 'Huỳnh Quốc Trung', 'Cao Lỗ', '0932726612'),
(16, '2019-12-02 11:12:51', NULL, NULL, 1, 'ddddddd', '1685/461 Long Hưng', '0932726613'),
(17, '2019-12-14 11:03:54', NULL, NULL, 1, 's', 's', '0123456789'),
(18, '2019-12-14 11:12:34', NULL, NULL, 1, '1', '1', '1234567890'),
(19, '2019-12-14 11:34:15', NULL, NULL, 1, 'Nguyễn Nghĩa', '1685/461 Long Hưng', '0932726613'),
(20, '2019-12-14 11:40:46', NULL, NULL, 1, '', '', '0932726613'),
(21, '2019-12-15 12:39:04', NULL, NULL, 1, 'Nguyễn Nghĩa', '1685/461 Long Hưng', '0932726612'),
(22, '2019-12-15 14:19:43', NULL, 1, 1, 'Huỳnh Quốc Trung', 'Cao Lỗ', '0932726612'),
(23, '2019-12-15 17:15:29', NULL, 1, 1, 'Huỳnh Quốc Trung', 'Cao Lỗ', '0932726612'),
(24, '2019-12-15 19:45:58', NULL, NULL, 1, 'a', 'a', '0932726612'),
(25, '2019-12-16 07:55:00', NULL, NULL, 1, 's', 's', '0932726613'),
(26, '2019-12-17 11:08:00', NULL, NULL, 1, 'ss', 'ss', '0932726613'),
(27, '2019-12-17 11:09:07', NULL, 8, 1, 'Từ Chi Thành', '168/46 Lê Thị Bạch Cát P11 Q11 HCM', '0932726612');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magiohang` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`magiohang`, `makh`, `ngaytao`) VALUES
(1, 1, '2019-12-15 12:49:27'),
(3, 8, '2019-12-15 19:57:41'),
(5, 9, '2019-12-15 20:11:21'),
(6, 4, '2019-12-15 20:15:23'),
(7, 10, '2019-12-16 20:16:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `email` char(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `tendangnhap` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `diachi` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `sodienthoai` char(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `ten` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ngaydk` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `email`, `tendangnhap`, `matkhau`, `diachi`, `sodienthoai`, `ten`, `ngaydk`) VALUES
(1, NULL, 'hoangtruong1', 'hoangtruong1', 'Cao Lỗ', '0932726612', 'Đặng Hoàng Trương', '2019-11-29 15:43:31'),
(3, 'tuchithanh1998@gmail.com', 'tuchithanh', '123', '166 Bình Thới P11 Q11 Hồ Chí Minh', '5424524', 'Từ Chí Thành', '2019-11-29 15:44:50'),
(4, 'tuchithanh1998@gmail.com', 'nguyenthikieudiem', '123', '166 Bình Thới P11 Q11 Hồ Chí Minh', '5424524', 'Nguyễn Thị Kiều', '2019-11-29 15:47:59'),
(5, 'tuchithanh1998@gmail.com', 'nguyenbachnhatlong', '132325', '1685/461 Long Hưng', '5424524', 'Nguyễn Bạch Nhật Long', '2019-11-29 15:49:35'),
(6, NULL, 'asp', '123', '123', '123', '123', '2019-12-07 10:12:21'),
(7, 'tuchithanh1998@gmail.com', 'tranthihongdieu', '7908710', '1685/461 Long Hưng', '5424524', 'Tran Thi Hong Dieu', '2019-12-09 11:00:55'),
(8, 'tuchithanh1998@gmail.com', 'chithanh', 'chithanh', '168/46 Lê Thị Bạch Cát P11 Q11 HCM', '0932726612', 'Từ Chi Thành', '2019-12-15 19:44:49'),
(9, 'tuchithanh1998@gmail.com', 'chithanh1', 'chithanh', '168/46 Lê Thị Bạch Cát P11 Q11 HCM', '0932726612', 'Từ Chí Thành', '2019-12-15 20:00:02'),
(10, '0932726612', 'chithanh2', 'tuchithanh', '168', '12', 'Từ Chí Thành', '2019-12-16 20:16:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmaisp`
--

CREATE TABLE `khuyenmaisp` (
  `makm` int(11) NOT NULL,
  `ngaybd` datetime NOT NULL,
  `ngaykt` datetime NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mansx` int(11) NOT NULL,
  `sotienkm` int(11) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmaisp`
--

INSERT INTO `khuyenmaisp` (`makm`, `ngaybd`, `ngaykt`, `ngaytao`, `mansx`, `sotienkm`, `admin`) VALUES
(1, '2019-11-14 00:00:00', '2020-01-31 23:59:59', '2019-11-14 18:45:34', 4, 500000, 1),
(2, '2019-11-14 00:00:00', '2020-01-31 23:59:59', '2019-11-14 18:45:39', 3, 500000, 1),
(3, '2001-01-01 11:01:00', '2001-01-01 11:01:00', '2019-11-14 21:56:51', 1, 500000, 1),
(4, '2001-01-01 11:01:00', '2001-01-01 01:01:00', '2019-11-14 22:19:45', 2, 30000, 1),
(5, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-11-14 22:36:29', 3, 2500000, 1),
(6, '2019-11-18 00:01:00', '2020-02-22 23:59:00', '2019-11-18 19:36:18', 5, 200000, 1),
(7, '2019-12-06 00:00:00', '2019-12-31 00:00:00', '2019-12-11 11:34:43', 1, 300000, 1),
(8, '2019-12-29 00:00:00', '2020-01-16 00:00:00', '2019-12-13 12:30:22', 2, 152000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` int(11) NOT NULL,
  `tenloai` char(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` int(11) NOT NULL,
  `tennsx` char(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`) VALUES
(1, 'apple'),
(2, 'samsung'),
(3, 'oppo'),
(4, 'xiaomi'),
(5, 'vsmart'),
(6, 'honor'),
(7, 'realme'),
(8, 'huawei');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `tensp` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `giasp` int(11) NOT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP,
  `mota` text COLLATE utf8_vietnamese_ci NOT NULL,
  `mansx` int(11) NOT NULL,
  `anhsp` char(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `maloai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giasp`, `ngaytao`, `mota`, `mansx`, `anhsp`, `trangthai`, `maloai`) VALUES
(1, 'OPPO A1K', 2800009, '2019-11-04 00:00:00', 'Màn hình : 6.1 inches, 720 x 1560 Pixels<br /> Camera trước : 5.0 MP<br /> Camera sau : 8.0 MP<br /> RAM : 2 GB<br /> Bộ nhớ trong : 32 GB<br /> CPU : MT6762R, 8, 2.0 GHz<br /> GPU : IMG GE8320<br /> Dung lượng pin : 4000 mAh<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : Nano SIM, 2 Sim<br /> <br /> ', 2, 'oppo-a1k-red-400x460-300x347.png', 1, NULL),
(2, 'OPPO A3s 16GB', 2380000, '2019-11-15 00:00:00', 'Màn hình: IPS LCD, 6.2″, HD+<br /> Hệ điều hành: Android 8.1 (Oreo)<br /> Camera sau: Chính 13 MP & Phụ 2 MP<br /> Camera trước: 8 MP<br /> RAM: 2 GB<br /> Bộ nhớ trong: 16 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB<br /> Thẻ SIM:2 Nano SIM, Hỗ trợ 4G<br /> Dung lượng pin: 4230 mAh', 3, '845c47bbb70a207050dd6bab2032defb-300x347.jpg', 1, NULL),
(3, 'OPPO A5 (2020) 64GB', 4299999, '2019-11-05 09:48:33', 'Màn hình: TFT, 6.5″, HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 12 MP & Phụ 8 MP, 2 MP, 2 MP<br /> Camera trước: 8 MP<br /> CPU: Qualcomm Snapdragon 665 8 nhân<br /> RAM: 3 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB<br /> Thẻ SIM:<br /> 2 Nano SIM, Hỗ trợ 4G', 3, 'oppo-a5-2020-white-400x460-300x347.png', 1, NULL),
(4, 'OPPO F9 Sạc VOOC', 2800009, '2019-11-05 10:23:13', 'Màn hình: LTPS LCD, 6.3″, Full HD+<br /> Hệ điều hành: ColorOS 5.2 (Android 8.1)<br /> Camera sau: Chính 16 MP & Phụ 2 MP<br /> Camera trước: 25 MP<br /> Ram 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 256 GB<br /> Thẻ SIM: 2 Nano SIM, Hỗ trợ 4G<br /> Dung lượng pin: 3500 mAh, có sạc nhanh', 3, '155159195-300x347.jpg', 1, NULL),
(5, 'OPPO K3', 6000000, '2019-11-08 14:56:25', 'Màn hình: AMOLED, 6.5″, Full HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 16 MP & Phụ 2 MP<br /> Camera trước: 16 MP<br /> CPU: Snapdragon 710 8 nhân 64-bit<br /> RAM: 6 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ SIM:<br /> 2 Nano SIM, Hỗ trợ 4G', 3, 'oppo-k3-black-1-400x460-300x347.png', 1, NULL),
(6, 'OPPO R17 Pro', 10500000, '2019-11-15 15:49:30', 'Màn hình : 6.4 inches, 1080 x 2340 Pixels<br /> Camera trước : 25.0 MP<br /> Camera sau : 20.0 MP + 12.0 MP<br /> RAM : 8 GB<br /> Bộ nhớ trong : 128 GB<br /> CPU : Qualcomm Snapdragon 710, 8, 2.2 Ghz<br /> GPU : Adreno 616<br /> Dung lượng pin : 3700 mAh<br /> Hệ điều hành : ColorOS 5.2 (Android 8.1)<br /> Thẻ SIM : Nano SIM, 2 (SIM 2 chung khe thẻ nhớ)', 3, 'OPPO-R17-Pro-6-4-Inch-8GB-128GB-Smartphone-Green-770461--300x347.jpg', 1, NULL),
(7, 'Samsung Galaxy A30', 2900000, '2019-11-18 19:02:02', 'Màn hình: Super AMOLED, 6.4″, Full HD+<br /> Camera sau: Chính 16 MP & Phụ 5 MP<br /> Camera trước: 16 MP<br /> RAM: 4 GB<br /> Bộ nhớ trong: 32 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB<br /> Thẻ SIM: 2 Nano SIM, Hỗ trợ 4G<br /> Dung lượng pin: 4000 mAh, có sạc nhanh', 2, '1551094863-samsung_galaxy_a30-300x347.jpg', 1, NULL),
(8, 'Samsung Galaxy A50 64GB', 4490005, '2019-11-18 19:03:28', 'Màu sắc: Xanh Dương, Đen, Trắng<br /> Màn hình: Super AMOLED, 6.4″, Full HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 25 MP & Phụ 8 MP, 5 MP<br /> Camera trước: 25 MP<br /> CPU: Exynos 9610 8 nhân 64-bit<br /> RAM: 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB<br /> Thẻ SIM: 2 Nano SIM, Hỗ trợ 4G<br /> Dung lượng pin: 4000 mAh, có sạc nhanh', 2, '17130742677534-300x347.jpg', 1, NULL),
(9, 'Vsmart Live 6GB-64GB', 7790009, '2019-11-18 19:06:45', 'Màn hình : 6.2 inchs, 1080 x 2232 pixel<br /> Camera trước : 20.0 MP<br /> Camera sau : 48MP f/1.7 + 5MP f/1.9+8 MP f/22<br /> RAM : 6 GB<br /> Bộ nhớ trong : 64 GB<br /> CPU : Qualcomm® Snapdragon™ 675, 8, 2.0 Ghz<br /> GPU : Qualcomm® Adreno™ 612<br /> Dung lượng pin : 4000mAh<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : Nano SIM, 2 Sim', 5, '636993881845164627_vsmart-live-xanh-1.png', 1, NULL),
(10, 'Vsmart Live 4GB-64GB', 6690000, '2019-11-18 19:10:44', 'Màn hình : 6.2 inchs, 1080 x 2232 pixel<br /> Camera trước : 20.0 MP<br /> Camera sau : 48MP f/1.7 + 5MP f/1.9+8 MP f/22<br /> RAM : 4 GB<br /> Bộ nhớ trong : 64 GB<br /> CPU : Qualcomm® Snapdragon™ 675, 8, 2.0 Ghz<br /> GPU : Qualcomm® Adreno™ 612<br /> Dung lượng pin : 4000mAh<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : Nano SIM, 2 Sim<br /> Xuất xứ : Việt Nam<br /> Năm sản xuất : 2019', 5, '636993881845164627_vsmart-live-xanh-1.png', 1, NULL),
(11, 'Vsmart Active 1+', 4590000, '2019-11-18 19:12:06', 'Màn hình : 6.18 inches, 1080 x 2280 Pixels<br /> Camera trước : 20.0 MP<br /> Camera sau : 24.0 MP + 12.0 MP<br /> RAM : 6 GB<br /> Bộ nhớ trong : 64 GB<br /> CPU : Qualcomm Snapdragon 660, 8, 4 x 2.2 GHz & 4 x 1.8 GHz<br /> GPU : Adreno 512<br /> Dung lượng pin : 3650 mAh<br /> Hệ điều hành : VOS (Based on Android 8.1)<br /> Thẻ SIM : 2 SIM Nano (SIM 2 chung khe thẻ nhớ), 2 Sim<br /> Xuất xứ : Việt Nam<br /> Năm sản xuất : 2018', 5, '636801168764977606_vsmart-active1-plus-hong-1.png', 1, NULL),
(12, 'Xiaomi Redmi Note 8', 4990000, '2019-11-18 19:15:40', 'Màn hình IPS LCD, 6.3\', Full HD+<br /> Thiết kế Nguyên khối <br /> Hệ điều hành Android 9.0 (Pie) <br /> Camera sau 4 camera, 48 MP, Phụ 8 MP, 2 MP, 2 MP <br /> Camera trước 13MP <br /> Tính năng camera Super Slow Motion, Chế độ chụp ban đêm <br /> CPU Qualcomm Snapdragon 665 8 nhân, 2.0 Ghz <br /> RAM 4GB 6GB<br /> Bộ nhớ lưu trữ 64GB <br /> Hỗ trợ thẻ nhớ Hỗ trợ thẻ nhớ tối đa 256GB <br /> Thẻ sim Dual nano-SIM <br /> Dung lượng pin 4000mAh (Typ) <br /> Trọng lượng 190 g', 4, 'note8-white-left.png', 1, NULL),
(13, 'Redmi Note 8 Pro', 5990000, '2019-11-18 19:17:02', 'Màn hình IPS LCD, 6.53\', Full HD+<br /> Thiết kế Nguyên khối, khung kim loại', 4, 'note8-white-left.png', 1, NULL),
(14, 'Vsmart Star 2GB-16GB', 1790000, '2019-11-18 19:34:44', 'Màn hình : 5.7 inchs, 720 x 1520 Pixels<br /> Camera trước : 5.0 MP<br /> Camera sau : 8 MP f/2.0 + 2 MP f/2.4<br /> RAM : 2 GB<br /> Bộ nhớ trong : 16 GB<br /> CPU : Qualcomm® Snapdragon™ 215, 4, 1.3Ghz<br /> GPU : Qualcomm® Adreno™ 308<br /> Dung lượng pin : 3000mAh<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : Nano SIM, 2 Sim<br /> Xuất xứ : Việt Nam<br /> Năm sản xuất : 2019', 5, '637013962159232628_vsmart-star-den-1.png', 1, NULL),
(15, 'Samsung Galaxy Note', 22990000, '2019-12-07 10:47:03', 'Màn hình: Dynamic AMOLED, 6.3, Full HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 12 MP & Phụ 12 MP, 16 MP<br /> Camera trước: 10 MP<br /> CPU: Exynos 9825 8 nhân<br /> RAM: 8 GB<br /> Bộ nhớ trong: 256 GB<br /> Thẻ SIM:<br /> 2 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 3500 mAh, có sạc nhanh', 2, '01.png', 1, NULL),
(16, 'Samsung Galaxy A50s', 6990000, '2019-12-07 11:12:24', 'Màn hình: Super AMOLED, 6.4", Full HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 48 MP & Phụ 8 MP, 5 MP<br /> Camera trước: 32 MP<br /> CPU: Exynos 9610 8 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB<br /> Thẻ SIM:<br /> 2 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 4000 mAh, có sạc nhanh', 2, 'samsung-galaxy-a50s.jpg', 1, NULL),
(17, 'Samsung Galaxy A20s 64GB', 5390000, '2019-12-07 11:29:48', 'Màn hình: IPS LCD, 6.5inch, HD+<br /> Hệ điều hành: Android 9.0 (Pie)<br /> Camera sau: Chính 13 MP & Phụ 8 MP, 5 MP<br /> Camera trước: 8 MP<br /> CPU: Snapdragon 450 8 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ nhớ: MicroSD, hỗ trợ tối đa 512 GB<br /> Thẻ SIM:<br /> 2 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 4000 mAh, có sạc nhanh', 2, 'samsung-galaxy-a20s-black.jpg', 1, NULL),
(18, 'iPhone 11 Pro Max 512GB', 43900000, '2019-12-07 11:32:21', 'Màn hình: OLED, 6.5inch, Super Retina XDR<br /> Hệ điều hành: iOS 13<br /> Camera sau: 3 camera 12 MP<br /> Camera trước: 12 MP<br /> CPU: Apple A13 Bionic 6 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 512 GB<br /> Thẻ SIM:<br /> Nano SIM & eSIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 3969 mAh, có sạc nhanh', 1, 'iphone-11-pro-max.jpg', 1, NULL),
(19, 'iPhone 11 Pro Max 256GB', 37990000, '2019-12-07 11:34:44', 'Màn hình: OLED, 6.5inch, Super Retina XDR<br /> Hệ điều hành: iOS 13<br /> Camera sau: 3 camera 12 MP<br /> Camera trước: 12 MP<br /> CPU: Apple A13 Bionic 6 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 256 GB<br /> Thẻ SIM:<br /> 1 eSIM & 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 3969 mAh, có sạc nhanh', 1, 'iphone-11-pro-max-256gb.jpg', 1, NULL),
(20, 'iPhone 11 Pro Max 64GB', 39990000, '2019-12-07 11:37:32', 'Màn hình: OLED, 6.5inch, Super Retina XDR<br /> Hệ điều hành: iOS 13<br /> Camera sau: 3 camera 12 MP<br /> Camera trước: 12 MP<br /> CPU: Apple A13 Bionic 6 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ SIM:<br /> 1 eSIM & 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 3969 mAh, có sạc nhanh<br /> <br /> ', 1, 'iphone-11-pro-max-256gb.jpg', 1, NULL),
(21, 'iPhone Xs 256GB', 24990000, '2019-12-07 11:39:17', 'Màn hình: OLED, 5.8inch, Super Retina<br /> Hệ điều hành: iOS 12<br /> Camera sau: Chính 12 MP & Phụ 12 MP<br /> Camera trước: 7 MP<br /> CPU: Apple A12 Bionic 6 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 256 GB<br /> Thẻ SIM:<br /> Nano SIM & eSIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 2658 mAh, có sạc nhanh', 1, 'iphone-xs-256gb.jpg', 1, NULL),
(22, 'iPhone 11 64GB', 21990099, '2019-12-07 11:41:36', 'Màn hình: IPS LCD, 6.1inch, Liquid Retina<br /> Hệ điều hành: iOS 13<br /> Camera sau: Chính 12 MP & Phụ 12 MP<br /> Camera trước: 12 MP<br /> CPU: Apple A13 Bionic 6 nhân<br /> RAM: 4 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ SIM:<br /> 1 eSIM & 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 3110 mAh, có sạc nhanh', 1, 'iphone-11-red-2-400x460.png', 1, NULL),
(23, 'iPhone 7 32GB', 8990000, '2019-12-07 11:43:10', 'Màn hình: LED-backlit IPS LCD, 4.7inch, Retina HD<br /> Hệ điều hành: iOS 12<br /> Camera sau: 12 MP<br /> Camera trước: 7 MP<br /> CPU: Apple A10 Fusion 4 nhân<br /> RAM: 2 GB<br /> Bộ nhớ trong: 32 GB<br /> Thẻ SIM:<br /> 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 1960 mAh', 1, 'iphone-7-gold-400x460.png', 1, NULL),
(24, 'iPhone 7 Plus 32GB', 11990000, '2019-12-07 11:46:02', 'Màn hình: LED-backlit IPS LCD, 5.5inch, Retina HD<br /> Hệ điều hành: iOS 12<br /> Camera sau: Chính 12 MP & Phụ 12 MP<br /> Camera trước: 7 MP<br /> CPU: Apple A10 Fusion 4 nhân<br /> RAM: 3 GB<br /> Bộ nhớ trong: 32 GB<br /> Thẻ SIM:<br /> 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 2900 mAh', 1, 'apple-iphone-7-plus-1-400x460.png', 1, NULL),
(25, 'iPhone 8 Plus 64GB', 14990000, '2019-12-07 11:47:34', 'Màn hình: LED-backlit IPS LCD, 5.5inch, Retina HD<br /> Hệ điều hành: iOS 12<br /> Camera sau: Chính 12 MP & Phụ 12 MP<br /> Camera trước: 7 MP<br /> CPU: Apple A11 Bionic 6 nhân<br /> RAM: 3 GB<br /> Bộ nhớ trong: 64 GB<br /> Thẻ SIM:<br /> 1 Nano SIM, Hỗ trợ 4G<br /> HOTSIM Mobi Big 70 (3GB data/tháng). Giá từ 170.000đ<br /> Dung lượng pin: 2691 mAh, có sạc nhanh', 1, 'iphone-8-plus3-400x460.png', 1, NULL),
(26, 'Honor', 7990000, '2019-12-07 11:49:55', 'Màn hình : 5.84inch, Full HD+, 1080 x 2280 pixels<br /> Camera trước : 24 MP<br /> Camera sau : 24 MP và 16 MP<br /> RAM : 4 GB<br /> Bộ nhớ trong : 128 GB<br /> CPU : Hisilicon Kirin 970 , 8 nhân, 4 nhân 2.4 GHz Cortex-A73 & 4 nhân 1.8 GHz Cortex-A53<br /> GPU : Mali-G72 MP12<br /> Dung lượng pin : 3400 mAh<br /> Hệ điều hành : Android 8.1 (Oreo)<br /> Thẻ SIM : Nano SIM, 2 Sim, hỗ trợ 4G<br /> Xuất xứ : Trung Quốc<br /> Năm sản xuất : 2018', 6, '637031035316000963_honor-10-xanh-1.png', 1, NULL),
(27, 'Honor 8X 128GB', 5990000, '2019-12-07 11:51:09', 'Màn hình : 6.5 inchs, Full HD +, 1080 x 2340 Pixels<br /> Camera trước : 16.0 MP<br /> Camera sau : 20 MP và 2 MP (2 camera)<br /> RAM : 4 GB<br /> Bộ nhớ trong : 128 GB<br /> CPU : Hisilicon Kirin 710, 8, 4 x Cortex-A73 2.2 GHz + 4x Cortex-A53 1.7 GHz<br /> GPU : Mali-G51 MP4<br /> Dung lượng pin : 3750 mAh<br /> Hệ điều hành : Android 8.1<br /> Thẻ SIM : Nano SIM, 2 Sim<br /> Xuất xứ : Trung Quốc<br /> Năm sản xuất : 2018', 6, '636743663074087605_honor8x-den-3.jpg', 1, NULL),
(28, 'Honor Play', 5990000, '2019-12-07 11:52:58', 'Màn hình : 6.3inch, Full HD+, 1080 x 2340 pixels<br /> Camera trước : 16 MP<br /> Camera sau : 16 MP + 2 MP<br /> RAM : 4 GB<br /> Bộ nhớ trong : 64 GB<br /> CPU : Hisilicon Kirin 970, 8 nhân, 4 x 2.36 GHz + 4 x 1.8 GHz<br /> GPU : Mali-G72 MP12<br /> Dung lượng pin : 3750 mAh<br /> Hệ điều hành : Android 8.1 Oreo<br /> Thẻ SIM : Nano, 2 Sim, hỗ trợ 4G', 6, '636689138915771496_honor-play-den-1.jpg', 1, NULL),
(29, 'Honor 20 Lite', 4990000, '2019-12-07 11:54:23', 'Màn hình : 6.21 inches, Full HD +, 2340 x 1080 Pixel<br /> Camera trước : 32.0Mp<br /> Camera sau : 24 MP+8 MP+2 MP (3 camera)<br /> RAM : 4 GB<br /> Bộ nhớ trong : 128 GB<br /> CPU : Hisilicon Kirin 710, 8, 4xCortex A73 2.2 GHz + 4xCortex A53 1.7 GHz<br /> GPU : Mali-G51 MP4<br /> Dung lượng pin : 3400 mAh<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : 2 SIM Nano (SIM 2 chung khe thẻ nhớ), 2 (SIM 2 chung khe thẻ nhớ)<br /> Xuất xứ : Trung Quốc<br /> Năm sản xuất : 2019', 6, '636912024205220616_honor-20-lite-do-1.jpg', 1, NULL),
(30, 'Honor 8A 32 GB', 2990004, '2019-12-07 11:56:04', 'Màn hình : 6.1 inchs, HD+, 720 x 1520 Pixels<br /> Camera trước : 8.0 MP<br /> Camera sau : 13.0 MP<br /> RAM : 2 GB<br /> Bộ nhớ trong : 32 GB<br /> CPU : MT6765 Helio P35, 8, 4x2.3Ghz & 4x1.8Ghz<br /> GPU : PowerVR GE8320<br /> Dung lượng pin : 3020<br /> Hệ điều hành : Android 9<br /> Thẻ SIM : Nano SIM, 2 Sim', 6, '636868737841005709_honor-play-vang-1.png', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `trangthai` char(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `math` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`trangthai`, `math`) VALUES
('Chờ xác nhận', 1),
('Đã xác nhận', 2),
('Đang giao hàng', 3),
('Đã giao hàng', 4),
('Hủy đơn hàng', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD PRIMARY KEY (`mactdh`),
  ADD KEY `madh` (`madh`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD PRIMARY KEY (`mactgh`),
  ADD KEY `magiohang` (`magiohang`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `makh` (`makh`,`math`),
  ADD KEY `math` (`math`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magiohang`),
  ADD UNIQUE KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `khuyenmaisp`
--
ALTER TABLE `khuyenmaisp`
  ADD PRIMARY KEY (`makm`),
  ADD KEY `mansx` (`mansx`),
  ADD KEY `admin` (`admin`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `mansx` (`mansx`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`math`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  MODIFY `mactdh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  MODIFY `mactgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `khuyenmaisp`
--
ALTER TABLE `khuyenmaisp`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `mansx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `math` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE NO ACTION,
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`magiohang`) REFERENCES `giohang` (`magiohang`),
  ADD CONSTRAINT `chitietgiohang_ibfk_3` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`math`) REFERENCES `trangthai` (`math`) ON DELETE NO ACTION,
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Các ràng buộc cho bảng `khuyenmaisp`
--
ALTER TABLE `khuyenmaisp`
  ADD CONSTRAINT `khuyenmaisp_ibfk_1` FOREIGN KEY (`mansx`) REFERENCES `nhasanxuat` (`mansx`) ON DELETE NO ACTION,
  ADD CONSTRAINT `khuyenmaisp_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `admin` (`id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`mansx`) REFERENCES `nhasanxuat` (`mansx`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
