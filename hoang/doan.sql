-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2023 lúc 04:35 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `maDG` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `tenhienthi` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(10) NOT NULL,
  `sophong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`maDG`, `maKH`, `tenhienthi`, `comment`, `rating`, `sophong`) VALUES
(1, 4, 'Ngo Minh Nhat', 'phòng rất tốt, sạch đẹp', 5, 3),
(2, 4, 'Tran Nghia', 'Được', 4, 1),
(4, 4, 'Nam', 'Phòng rất đẹp', 4, 2),
(5, 4, 'Ngo Nhat', 'Phòng rất tiện nghi', 5, 1),
(6, 4, 'Nhat', 'Phòng tệ', 3, 1),
(7, 4, 'ABC', 'sạch đẹp', 3, 3),
(8, 4, 'RoNalDo', 'rất tệ', 1, 3),
(9, 4, 'Nhat', 'Phòng xấu', 2, 4),
(10, 4, 'Nhat', 'Tuyệt vời', 5, 5),
(11, 5, 'ABC', 'Thái độ phục vụ không tốt', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `cccd` varchar(12) NOT NULL,
  `sodienthoaiKH` varchar(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `tenkhachhang`, `cccd`, `sodienthoaiKH`, `email`) VALUES
(4, 'Nhật Ngô', '14523756342', '12314123223', 'nhatngo1205q@gmail.com'),
(5, 'Người DÙng', '31289534673', '1234123', 'user@gmail.com'),
(7, 'Nghĩa', '14532452387', '12341243', 'vn@gmail.com'),
(9, 'Trần Dạ', '23489572356', '2345689259', 'nhatngo1205qWW@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_29_101548_create_admins_table', 2),
(6, '2022_11_17_060910_create_user_client', 3),
(7, '2014_10_12_200000_add_two_factor_columns_to_users_table', 4),
(8, '2022_11_17_142031_create_sessions_table', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderapp`
--

CREATE TABLE `orderapp` (
  `id` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `night` int(11) NOT NULL,
  `sophong` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderapp`
--

INSERT INTO `orderapp` (`id`, `maKH`, `startDate`, `night`, `sophong`, `status`) VALUES
(1, 4, '2023-05-11', 2, 2, 1),
(2, 4, '2023-05-14', 1, 2, 1),
(6, 7, '13/5/2023', 2, 2, 0),
(7, 7, '16/5/2023', 3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `sophong` int(11) NOT NULL,
  `tenkhachsan` varchar(255) NOT NULL,
  `giaphong` int(20) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `khuvuc` varchar(30) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sodienthoai` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`sophong`, `tenkhachsan`, `giaphong`, `mota`, `khuvuc`, `diachi`, `sodienthoai`, `image`) VALUES
(1, 'KaiO', 250000, '1 giường đôi lớn,\ndiện tích phòng: 25 m²,\nhướng phòng: Thành phố', 'danang', 'Hòa Hải, Ngủ Hành Sơn, Đà Nẵng', '0198745632', '1667115304-product.jpg'),
(2, 'Khách Sạn Hoàng Dược Sư', 250000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'danang', 'Thanh Khê,Đà Nẵng', '0123655489', '1667827046-product.jpg'),
(3, 'victory', 250000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hochiminh', 'Quận 1, Hồ Chí Minh', '0123655489', '1667136824-product.jpg'),
(4, 'Phuc Thanh Luxury Hotel', 520000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'danang', 'Liên Chiểu, Đà Nẵng', '0934759789', 'DN Phuc Thanh Luxury Hotel.jpg'),
(5, 'The EmblemSea Beauty Villas Da Nang', 550000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'danang', '470 Trần Đại Nghĩa, Hòa Hải, Ngũ Hành Sơn, Đà Nẵng', '0986532147', 'Dn The EmblemSea Beauty Villas Da Nang.jpg'),
(6, 'Sekong Hotel Da Nang', 550000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'danang', '123 Liên Chiểu ,Đà Nẵng', '0147325698', 'DN Sekong Hotel Da Nang.jpg'),
(8, ' Lamnaga Hotel & Suites', 700000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hanoi', 'Tây Hồ, Hà Nội', '0963214587', 'DN Lamnaga Hotel & Suites.jpg'),
(9, ' GIC Luxury Hotel and Spa', 690000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hochiminh', 'Quận 2, Hồ Chí Minh', '0165234789', 'Dn GIC Luxury Hotel and Spa.jpg'),
(10, 'Vinpearl Danang Riverfront', 700000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'danang', '999 abc, Thanh Khê, Đà Nẵng', '0965478123', 'Vinpearl Danang Riverfront.jpg'),
(11, 'Garden Villas', 650000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hochiminh', 'Đường 123, Quận 1,Hồ Chí Minh', '0987452136', 'HA Garden Villas.jpg'),
(12, 'Hoi An TNT Villa', 690000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hochiminh', 'Đường 998,Quận Bình Thạnh,Hồ Chí Minh', '0147896523', 'HA TNT Villa.jpg'),
(13, 'Hoi An Centrall', 500000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hanoi', 'Đường 234, Đống Đa, Hà Nội', '0985632147', 'Hoi An Centrall.jpg'),
(14, 'Hotel Royal Hoi An MGallery Hotel', 2000000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hanoi', 'Phố ABC, Cầu Giấy, Hà Nội', '+842353950888', '1667100863-product.jpg'),
(16, 'Lucky Hotel', 2000000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hochiminh', 'Đường Võ Chí Công, Quận 7, Hồ Chí Minh', '011145236', '1667136364-product.jpg'),
(17, 'Beryl Palace Hotel and Spa', 1500000, '1 giường đôi lớn,\r\ndiện tích phòng: 25 m²,\r\nhướng phòng: Thành phố', 'hanoi', 'Đường 222, Quận Đống Đa, Hà Nội', '091234756', '1667136773-product.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2Mb3C77PTojdAz6KxiJn6JrPcntInLUsP7zI4Szh', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWk9lYnhNcUV5RGZjT3hrc2RDYUJtUVRJTk1sMjRnNlBXdmJjOTg0NyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9kb2FuL2NsaWVudC9pbmRleCI7fX0=', 1669086155),
('2wCTn0iyMYQuhryA1FQJ1j1g3I3kvEQYlQ0B1THE', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNElPQlhaaVU4Z3hQa2xBNjd2ZmZyQVIzN3hUOUNpZ1lTQ2RJbG1WNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9kb2FuL3Rlc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1668829985),
('9O7yzEGjc5UyeGWzfF9cTzcSv50q5CLNZtIzsPoj', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUJKaENmRzlrUzRROVU4WFRLQTcwYW80aHFnNVpIM0ZyTVZlYWwwYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9kb2FuL3JlZ2lzdGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1668864294),
('bK7NfHTARhzQGRS3PXQTR6VKrz2pISDdleNZLec2', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnNoWmNJZmFVc1NHTjlqeHIwZzVuS3ZEc20xNHBrM1hSYlZrWHlydCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9kb2FuL2NsaWVudC9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1671026875),
('GJHi0oWOyn6x4UUyP1ngBmPoS0WrRzCZitJRANLR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieENHQ1VqWnNMcGVUS01wMDdxMUFobXpSWWlsRThtemptY1ZTbEFGbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9kb2FuL2NsaWVudC9pbmRleD9wYWdlPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1668936670),
('gq7tQkL0oPquPJHhx2XXy1ALn5NgsRf52M1eMU80', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMjoiaHR0cDovL2xvY2FsaG9zdDo4MDgwL2RvYW4vdGVzdDMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiNkFFWE11a0dKRmNkQ0ZCZ21taXJ2NjhRRFdWNFNoSEZBZGw4Q2kyYiI7fQ==', 1668698878),
('UoBt77WGfRFfovtLMmCfCBOEnFetb911sxFBdjge', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.52', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiS0YxdnkyMjZmZldjVXJIT3Zhc1hJVEVBa25lbGRMTXJUYTRtWjdyRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1669086289);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindatphong`
--

CREATE TABLE `thongtindatphong` (
  `madatphong` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `CheckIn` datetime DEFAULT current_timestamp(),
  `CheckOut` datetime DEFAULT NULL,
  `sophong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtindatphong`
--

INSERT INTO `thongtindatphong` (`madatphong`, `maKH`, `CheckIn`, `CheckOut`, `sophong`) VALUES
(15, 7, '2022-11-19 21:00:00', '2022-11-20 09:00:00', 2),
(16, 7, '2022-11-19 21:46:00', '2022-11-19 21:47:00', 2),
(18, 4, '2022-11-22 10:31:00', '2022-11-22 10:32:00', 3),
(19, 4, '2022-11-29 08:36:00', '2022-11-30 20:36:00', 4),
(20, 4, '2022-11-29 20:51:00', '2022-11-30 20:51:00', 3),
(21, 4, '2022-12-18 17:16:00', '2022-12-19 17:18:00', 5),
(22, 5, '2022-12-19 20:22:00', '2022-12-20 20:24:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(20) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `maKH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `access`, `remember_token`, `created_at`, `updated_at`, `maKH`) VALUES
(8, 'nhat', 'nhatngo1205q@gmail.com', NULL, '123', '1', NULL, '2022-11-19 06:40:48', '2022-11-19 06:40:48', 4),
(9, 'user', 'user@gmail.com', NULL, '123', '1', NULL, '2022-11-19 06:43:48', '2022-11-19 06:43:48', 5),
(10, 'nghia', 'vn@gmail.com', NULL, '123', '1', NULL, '2022-11-19 06:57:42', '2022-11-19 06:57:42', 7),
(12, 'admin', 'admin@gmail.com', NULL, '1234', NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`,`password`) USING BTREE;

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`maDG`),
  ADD KEY `maKH` (`maKH`),
  ADD KEY `sophong` (`sophong`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`),
  ADD KEY `email_4` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderapp`
--
ALTER TABLE `orderapp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pk_show` (`sophong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`sophong`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `thongtindatphong`
--
ALTER TABLE `thongtindatphong`
  ADD PRIMARY KEY (`madatphong`),
  ADD KEY `maKH` (`maKH`),
  ADD KEY `sophong` (`sophong`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `maKH` (`maKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `maDG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orderapp`
--
ALTER TABLE `orderapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `sophong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `thongtindatphong`
--
ALTER TABLE `thongtindatphong`
  MODIFY `madatphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`sophong`) REFERENCES `phong` (`sophong`);

--
-- Các ràng buộc cho bảng `orderapp`
--
ALTER TABLE `orderapp`
  ADD CONSTRAINT `pk_show` FOREIGN KEY (`sophong`) REFERENCES `phong` (`sophong`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `thongtindatphong`
--
ALTER TABLE `thongtindatphong`
  ADD CONSTRAINT `thongtindatphong_ibfk_2` FOREIGN KEY (`sophong`) REFERENCES `phong` (`sophong`),
  ADD CONSTRAINT `thongtindatphong_ibfk_3` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`maKH`) REFERENCES `khachhang` (`maKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
