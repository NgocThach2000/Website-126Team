-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2020 lúc 06:56 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doanweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `level` tinyint(4) DEFAULT 1,
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Áo Nike', 'ao-nike', NULL, NULL, 1, '2020-06-13 02:51:56', '2020-06-13 08:55:44'),
(18, 'Áo Adidas', 'ao-adidas', NULL, NULL, 1, '2020-06-13 02:52:21', '2020-06-13 08:53:17'),
(19, 'Áo Thái', 'ao-thai', NULL, NULL, 1, '2020-06-13 02:52:36', '2020-06-13 08:53:14'),
(20, 'Áo bóng đá', 'ao-bong-da', NULL, NULL, 1, '2020-06-13 02:52:44', '2020-06-13 08:53:10'),
(21, 'Quần Nike', 'quan-nike', NULL, NULL, 1, '2020-06-13 02:53:00', '2020-06-13 05:47:42'),
(22, 'Quần Adidas', 'quan-adidas', NULL, NULL, 1, '2020-06-13 02:53:08', '2020-06-13 08:53:07'),
(23, 'Quần Thái', 'quan-thai', NULL, NULL, 1, '2020-06-13 02:53:16', '2020-06-13 05:47:48'),
(24, 'Quần bóng đá', 'quan-bong-da', NULL, NULL, 1, '2020-06-13 02:53:22', '2020-06-13 08:55:45'),
(25, 'Giày thể thao', 'giay-the-thao', NULL, NULL, 1, '2020-06-13 02:53:46', '2020-06-13 08:53:03'),
(26, 'Giày bóng đá', 'giay-bong-da', NULL, NULL, 1, '2020-06-13 02:53:59', '2020-06-13 08:53:04'),
(27, 'Túi thể thao', 'tui-the-thao', NULL, NULL, 1, '2020-06-13 02:54:10', '2020-06-13 08:53:05'),
(28, 'Băng tay', 'bang-tay', NULL, NULL, 1, '2020-06-13 02:54:26', '2020-06-13 08:53:05'),
(29, 'Băng gối ', 'bang-goi', NULL, NULL, 1, '2020-06-13 02:54:33', '2020-06-13 08:53:05'),
(30, 'Băng chân', 'bang-chan', NULL, NULL, 1, '2020-06-13 02:54:45', '2020-06-13 08:54:20'),
(31, 'Áo thể thao', 'ao-the-thao', NULL, NULL, 1, '2020-06-13 10:24:54', '2020-06-13 10:24:54'),
(32, 'Quần thể thao', 'quan-the-thao', NULL, NULL, 1, '2020-06-13 10:25:03', '2020-06-13 10:25:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT 0,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinytext DEFAULT '0',
  `thunbar1` varchar(100) DEFAULT NULL,
  `thunbar2` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar1`, `thunbar2`, `size`, `category_id`, `content`, `number`, `created_at`, `updated_at`) VALUES
(9, 'Nike Sportswear ', 'nike-sportswear', 963000, '0', 'Ao1.jpg', 'Ao2.jpg', 'L', 17, 'Nike T-shirts with full-color tie prints and pixel graphics printed on soft cotton for unfocused look with a soft feel. ', 10, '2020-06-13 03:41:47', '2020-06-13 09:29:33'),
(10, 'Nike Sportswear Swoosh', 'nike-sportswear-swoosh', 819000, '0', 'sportswear-swoosh-1.jpg', 'sportswear-swoosh-t-shir2.jpg', 'S', 17, 'Áo thun Nike Sportswear Swoosh giúp bạn nổi bật với chất liệu cotton mềm mại và logo cổ điển trên ngực áo.', 10, '2020-06-13 05:16:17', '2020-06-13 05:16:17'),
(11, 'Men\'s Football Short-Sleeve Top', 'mens-football-short-sleeve-top', 659000, '0', 'dri-fit-academy-football-short-sleeve-top-01.jpg', 'dri-fit-academy-football-short-sleeve-top-02.jpg', 'XXL', 17, 'Nâng cao việc đào tạo hàng ngày của bạn với Nike Dri-FIT Academy Top. Vải có kết cấu tinh tế và công nghệ thấm mồ hôi để giữ cho bạn khô ráo và thoải mái. Các tấm lưới ở hai bên và mặt sau tạo ra luồng không khí và chống bám.', 2, '2020-06-13 05:18:52', '2020-06-13 05:18:52'),
(12, 'Nike Sportswear Black1', 'nike-sportswear-black1', 819000, '0', 'sportswear-t-shirt-01.jpg', 'sportswear-t-shirt-nt02.jpg', 'XXL', 17, 'kết hợp độc đáo với logo cổ điển trên áo phông thể thao Nike. Chất liệu cotton mềm mại tạo cảm giác mịn màng như bầu trời.', 5, '2020-06-13 05:23:27', '2020-06-13 05:23:27'),
(13, 'Nike Sportswear', 'nike-sportswear', 819000, '0', 'sportswear-t-shirt-s1.jpg', 'sportswear-t-shirt-zmMkxS2.jpg', 'XXL', 17, 'Áo thun thể thao Nike tạo cho bạn một chiếc áo cotton mềm mại và logo cổ điển trên ngực áo.', 5, '2020-06-13 05:29:36', '2020-06-13 05:29:36'),
(14, 'NikeCourt Dri-FIT', 'nikecourt-dri-fit', 1199000, '0', 'nikecourt-dri-fit-tennis-polo-6jCqZv1.jpg', 'nikecourt-dri-fit-tennis-polo-6jCqZv2.jpg', 'XL', 17, 'With sweat-wicking, 100% recycled fabric and a design that\'s made for movement, the NikeCourt Dri-FIT Polo is your first choice for the court. This product is made from at least 75% recycled polyester.', 20, '2020-06-13 05:32:17', '2020-06-13 05:32:17'),
(15, 'Nike Dri-FIT', 'nike-dri-fit', 659000, '0', 'dri-fit-training-tank-brmLc1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XXL', 17, 'Nike Dri-FIT Tank được làm từ vải mềm, thấm mồ hôi trong một cấu hình không tay để giúp bạn thoải mái và di chuyển tự do trong suốt quá trình tập luyện.', 5, '2020-06-13 05:34:31', '2020-06-13 05:34:31'),
(16, 'Men\'s Short-Sleeve', 'mens-short-sleeve', 659000, '0', 'pro-short-sleeve-top-NQKZts1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XL', 17, 'Nike Pro Top có Công nghệ Dri-FIT giúp bạn khô ráo và thoải mái.', 5, '2020-06-13 05:35:54', '2020-06-13 05:35:54'),
(17, 'Nike Dri-FIT Classic', 'nike-dri-fit-classic', 819000, '0', 'dri-fit-classic-basketball-jersey-gZ1Bk1.jpg', 'dri-fit-classic-basketball-jersey-gZ1Bk2.jpg', 'XXL', 17, 'Nike Dri-FIT Classic kết hợp thiết kế hiệu suất với phong cách bóng rổ theo phong cách sống. Nó được làm từ vải lưới thấm mồ hôi tạo cảm giác mềm mại và nhẹ.', 5, '2020-06-13 05:37:28', '2020-06-13 05:37:28'),
(18, 'Nike Exploration Series', 'nike-exploration-series', 819000, '0', 'exploration-series-basketball-t-shirt-Ttjgk1.jpg', 'exploration-series-basketball-t-shirt-Ttjgk2.jpg', 'L', 17, 'áo phông Nike Explective Series. Được làm từ bông nhẹ, đan nhẹ, nó có đồ họa lấy cảm hứng từ màu sắc và cảnh quan xung quanh Phoenix, Arizona, Hoa Kỳ.', 20, '2020-06-13 05:39:24', '2020-06-13 05:39:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `password` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
