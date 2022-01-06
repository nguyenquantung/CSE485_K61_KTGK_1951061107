-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061107_daihocthuyloi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(11) NOT NULL,
  `hovaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` int(11) NOT NULL,
  `gioitinh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuyenmon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Terra', 11, 'Male', 'thạc sĩ', 'không có', 'thạc sĩ', 'thạc sĩ', 'Đại học'),
(2, 'Randal', 11, 'Male', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ'),
(3, 'Maritsa', 10, 'Male', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ'),
(4, 'Murdoch', 10, 'Female', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ', 'thạc sĩ'),
(5, 'nguyễn quán tùng', 0, 'nam', 'thạc sĩ', 'CNTT', 'Đại Học', 'Tiến Sĩ', 'dđ'),
(6, 'nguyễn quán tùng', 13, 'fa', 'thạc sĩ', 'CNTT', 'Đại Học', 'Tiến Sĩ', 'fffff');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
