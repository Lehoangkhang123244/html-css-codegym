-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 16, 2021 lúc 05:23 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cosmetic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL,
  `ngayMua` date NOT NULL,
  `ghichu` varchar(50) NOT NULL,
  `tinhTrang` int(11) NOT NULL,
  `maKH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `tongTien`, `ngayMua`, `ghichu`, `tinhTrang`, `maKH`) VALUES
(34, 2, '2021-08-14', 'Giao hàng nhanh nha shop', 0, 14),
(35, 0, '2021-08-15', '', 0, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadonchitiet`
--

CREATE TABLE `hoadonchitiet` (
  `maHD` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadonchitiet`
--

INSERT INTO `hoadonchitiet` (`maHD`, `maSP`, `soLuong`, `donGia`) VALUES
(34, 17, 1, 1),
(34, 10, 1, 1),
(35, 12, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `soDT` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `diaChi` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenKH`, `username`, `password`, `soDT`, `email`, `diaChi`, `role`) VALUES
(12, 'Hồng Phương', 'admin', 'admin', '0853736682', 'hp205125@gmail.com', 'Khánh Hòa', 'khách hàng'),
(14, 'Hồng Ngọc', 'hongngoc', '123456', '0853736734', 'pd205125@gmail.com', 'Khánh Hòa', 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(255) NOT NULL,
  `moTa` varchar(255) NOT NULL,
  `hinhAnh` varchar(200) NOT NULL,
  `hot_news` varchar(255) NOT NULL,
  `cate_ID` varchar(255) NOT NULL,
  `donGia` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `maPhanLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`maSP`, `tenSP`, `moTa`, `hinhAnh`, `hot_news`, `cate_ID`, `donGia`, `soLuong`, `maPhanLoai`) VALUES
(9, 'BÚT CUSHION CHE KHUYẾT ĐIỂM PHIÊN BẢN MARVEL MAYBELLINE INSTANT AGE REWIND ERASER', 'Bút  Che Khuyết Điểm', 'untitled_95dd1c802fdf40028100e197daa26f45_small[1].png', '1', '2', 176800, 10, 'TD'),
(10, 'KEM NỀN MAYBELLINE FIT ME MATTE + PORELESS FOUNDATION #130 BUFF BEIGE MỚI (IP01)', 'Kem Nền', 'khung_nen_c218ade53f2e432f8b363e465ca2d406_large_77faebf3310f48f9b32de9a415fed8da_small[1].png', '1', '2', 189300, 5, 'TD'),
(11, 'LEMONADE SON KEM PE 2 đầu son Lip Cream (4g/đầu)RFECT COUPLE LIP - FASHIONISTAR ', 'Son kem Lâu Trôi', 'khung_nen_5cc5cc2ea3e644e4a103f3a0d4c1fc15_small[1].png', '1', '2', 269100, 7, 'TD'),
(12, 'GEL RỬA MẶT VÀ TẮM LAROCHE POSAY EFFACLAR MICRO-PEELING PURIFYING GEL 400ML', 'Sửa Rửa Mặt', 'untitled_0162e81852744afc85f57e83d2236dfd_small[1].png', '0', '1', 436000, 100, 'CSD'),
(13, 'LĂN NGĂN MỒ HÔI VÀ KHỬ MÙI HÔI NÁCH PERSPI-GUARD MAXIMUM STRENGTH ANTIPERSPIRANT 30ML (IP02)', 'Lăn Khử Mùi', 'khung_nen_a6226c8b26504dfe9f83dc8e5bd0ce0a_small[1].png', '0', '1', 300000, 3, 'BD'),
(14, 'Tẩy Trang Pháp LAROCHE POSAY MICELLAR WATER ULTRA OILY SKIN 100ML (IP01)', 'Nước Tẩy Trang', 'khung_nen_sammi_d44c31c0a68f4a05866e64e9aaf723cf_small[1].png', '0', '1', 200000, 10, 'CSD'),
(15, 'NƯỚC TẨY TRANG CALLIDERM EAU MICELLAIRES CHIẾT XUẤT TỪ HOA HỒNG (HỒNG)', 'Nước Tẩy Trang', 'untitled_7904859a2e6a47a488a303231b028072_small[2].png', '1', '1', 146300, 0, 'CSD'),
(16, 'Tẩy Trang COMBO GEL BÍ ĐAO RỬA MẶT COCOON 310ML + NƯỚC TẨY TRANG BÍ ĐAO 140ML', 'Nước Tẩy Trang', 'khung_nen_2181a68b302b479abe69a48a33e59ac0_small[1].png', '0', '1', 378000, 2, 'CSD'),
(17, 'SOME BY MI XỊT DƯỠNG TÓC CICA PEPTIDE ANTI HAIR LOSS DERMA SCALP TONIC 150ML (IP04)', 'Dưỡng Tóc', 'untitled_e58889d55f4b43d797ab813e7db3bda2_small[1].png', '1', '2', 188000, 8, 'CST'),
(18, 'TINH CHẤT CHỐNG LÃO HÓA MARTIDERM PLATINUM NIGHT RENEW AMPOULE 30 AMP', 'Tinh Chất ', 'anh_7_bded179a88cd4bb5844bae30753762b0_small[1].png', '1', '2', 2079000, 3, 'CSD'),
(19, 'SOME BY MI AHA-BHA-PHA 30 DAYS MIRACLE SERUM 50ML (TẶNG DR.MORITA TEA TREE PORE PURIFYING TONER 150G)', 'Tinh Chất Some By Mi ', 'a47b4d6100df94f3ce192b0b4c70d0a_b4b9f4ee23ae4db5bebcb5c28fc91af9_large_937ef44d5bb24ce59bd7fe1689195324_small[1].jpg', '1', '2', 326000, 6, 'CSD'),
(20, 'COMBO KEM CHỐNG NẮNG BANOBAGI MILK THISTLE REPAIR SUNSCREEN SPF 50+ PA++++ KÈM TUÝP MINI 15ML (IP02)', 'Kem Chống Nẵng', 'untitled_2b4d161691174584b44818773cf2e4e8_large_c3d55395167f42358dffc45724fb6938_small[1].png', '1', '2', 250000, 5, 'CSD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai`
--

CREATE TABLE `phanloai` (
  `maPhanLoai` varchar(255) NOT NULL,
  `tenPhanLoai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanloai`
--

INSERT INTO `phanloai` (`maPhanLoai`, `tenPhanLoai`) VALUES
('TD', 'Trang Điểm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKH` (`maKH`);

--
-- Chỉ mục cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD KEY `maHD` (`maHD`),
  ADD KEY `maSP` (`maSP`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`maSP`),
  ADD KEY `maPhanLoai` (`maPhanLoai`);

--
-- Chỉ mục cho bảng `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`maPhanLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `maSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadonchitiet`
--
ALTER TABLE `hoadonchitiet`
  ADD CONSTRAINT `hoadonchitiet_ibfk_1` FOREIGN KEY (`maSP`) REFERENCES `news` (`maSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadonchitiet_ibfk_2` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
