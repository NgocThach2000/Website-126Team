-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2020 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.31

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
  `category_parent_id` int(11) DEFAULT NULL,
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

INSERT INTO `category` (`id`, `category_parent_id`, `name`, `slug`, `images`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(17, 1, 'Áo Nike', 'ao-nike', NULL, NULL, 1, '2020-06-13 02:51:56', '2020-06-18 14:24:48'),
(18, 1, 'Áo Adidas', 'ao-adidas', NULL, NULL, 1, '2020-06-13 02:52:21', '2020-06-18 14:16:28'),
(19, 1, 'Áo Thái', 'ao-thai', NULL, NULL, 1, '2020-06-13 02:52:36', '2020-06-18 14:16:32'),
(20, 1, 'Áo bóng đá', 'ao-bong-da', NULL, NULL, 1, '2020-06-13 02:52:44', '2020-06-18 14:16:37'),
(21, 2, 'Quần Nike', 'quan-nike', NULL, NULL, 1, '2020-06-13 02:53:00', '2020-06-18 14:16:41'),
(22, 2, 'Quần Adidas', 'quan-adidas', NULL, NULL, 1, '2020-06-13 02:53:08', '2020-06-18 14:13:50'),
(23, 2, 'Quần Thái', 'quan-thai', NULL, NULL, 1, '2020-06-13 02:53:16', '2020-06-18 14:16:10'),
(24, 3, 'Quần bóng đá', 'quan-bong-da', NULL, NULL, 1, '2020-06-13 02:53:22', '2020-06-18 14:16:07'),
(25, 3, 'Giày thể thao', 'giay-the-thao', NULL, NULL, 1, '2020-06-13 02:53:46', '2020-06-18 14:16:03'),
(27, 4, 'Túi thể thao', 'tui-the-thao', NULL, NULL, 1, '2020-06-13 02:54:10', '2020-06-18 14:15:56'),
(28, 4, 'Băng tay', 'bang-tay', NULL, NULL, 1, '2020-06-13 02:54:26', '2020-06-18 14:15:52'),
(29, 4, 'Băng gối ', 'bang-goi', NULL, NULL, 1, '2020-06-13 02:54:33', '2020-06-18 14:15:49'),
(30, 4, 'Băng chân', 'bang-chan', NULL, NULL, 1, '2020-06-13 02:54:45', '2020-06-18 14:15:46'),
(31, 1, 'Áo thể thao', 'ao-the-thao', NULL, NULL, 1, '2020-06-13 10:24:54', '2020-06-18 14:15:42'),
(32, 2, 'Quần thể thao', 'quan-the-thao', NULL, NULL, 1, '2020-06-13 10:25:03', '2020-06-18 14:15:39'),
(33, 3, 'Giày bóng đá', 'giay-bong-da', NULL, NULL, 1, '2020-06-18 14:26:01', '2020-06-18 18:30:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_parent`
--

CREATE TABLE `category_parent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category_parent`
--

INSERT INTO `category_parent` (`id`, `name`, `slug`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Áo', 'ao', NULL, 1, '2020-06-18 13:51:21', '2020-06-18 13:51:21'),
(2, 'Quần', 'quan', NULL, 1, '2020-06-18 13:51:27', '2020-06-23 07:57:30'),
(3, 'Giày', 'giay', NULL, 1, '2020-06-18 13:51:36', '2020-06-18 13:51:36'),
(4, 'Dụng cụ hỗ trợ', 'dung-cu-ho-tro', NULL, 1, '2020-06-18 13:51:52', '2020-06-18 13:51:52');

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
(9, 'Nike Sportswear ', 'nike-sportswear', 963200, '50', 'dri-fit-academy-football-short-sleeve-top-01.jpg', 'dri-fit-academy-football-short-sleeve-top-02.jpg', 'L', 17, 'Nike T-shirts with full-color tie prints and pixel graphics printed on soft cotton for unfocused look with a soft feel. ', 10, '2020-06-13 03:41:47', '2020-06-23 02:58:24'),
(10, 'Nike Sportswear Swooshh', 'nike-sportswear-swooshh', 819000, '0', 'nikecourt-dri-fit-tennis-polo-6jCqZv1.jpg', 'nikecourt-dri-fit-tennis-polo-6jCqZv2.jpg', 'S', 17, 'Áo thun Nike Sportswear Swoosh giúp bạn nổi bật với chất liệu cotton mềm mại và logo cổ điển trên ngực áo.', 10, '2020-06-13 05:16:17', '2020-06-22 15:31:42'),
(12, 'Nike Sportswear Black1', 'nike-sportswear-black1', 819000, '0', 'exploration-series-basketball-t-shirt-Ttjgk1.jpg', 'exploration-series-basketball-t-shirt-Ttjgk2.jpg', 'XXL', 17, 'kết hợp độc đáo với logo cổ điển trên áo phông thể thao Nike. Chất liệu cotton mềm mại tạo cảm giác mịn màng như bầu trời.', 5, '2020-06-13 05:23:27', '2020-06-22 15:32:00'),
(13, 'Nike Sportswear', 'nike-sportswear', 819000, '0', 'sportswear-t-shirt-01.jpg', 'sportswear-t-shirt-nt02.jpg', 'XXL', 17, 'Áo thun thể thao Nike tạo cho bạn một chiếc áo cotton mềm mại và logo cổ điển trên ngực áo.', 5, '2020-06-13 05:29:36', '2020-06-22 15:32:13'),
(14, 'NikeCourt Dri-FIT', 'nikecourt-dri-fit', 1199000, '0', 'Ao1.jpg', 'Ao2.jpg', 'XL', 17, 'With sweat-wicking, 100% recycled fabric and a design that\'s made for movement, the NikeCourt Dri-FIT Polo is your first choice for the court. This product is made from at least 75% recycled polyester.', 20, '2020-06-13 05:32:17', '2020-06-22 15:37:32'),
(15, 'Nike Dri-FIT', 'nike-dri-fit', 659000, '0', 'dri-fit-classic-basketball-jersey-gZ1Bk1.jpg', 'dri-fit-classic-basketball-jersey-gZ1Bk2.jpg', 'XXL', 17, 'Nike Dri-FIT Tank được làm từ vải mềm, thấm mồ hôi trong một cấu hình không tay để giúp bạn thoải mái và di chuyển tự do trong suốt quá trình tập luyện.', 5, '2020-06-13 05:34:31', '2020-06-22 15:37:44'),
(16, 'Men\'s Short-Sleeve', 'mens-short-sleeve', 659000, '0', 'pro-short-sleeve-top-NQKZts1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XL', 17, 'Nike Pro Top có Công nghệ Dri-FIT giúp bạn khô ráo và thoải mái.', 5, '2020-06-13 05:35:54', '2020-06-13 05:35:54'),
(17, 'Nike Dri-FIT Classic', 'nike-dri-fit-classic', 819000, '0', 'dri-fit-training-tank-brmLc1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XXL', 17, 'Nike Dri-FIT Classic kết hợp thiết kế hiệu suất với phong cách bóng rổ theo phong cách sống. Nó được làm từ vải lưới thấm mồ hôi tạo cảm giác mềm mại và nhẹ.', 5, '2020-06-13 05:37:28', '2020-06-22 15:39:03'),
(18, 'Nike Exploration Series', 'nike-exploration-series', 819000, '0', 'sportswear-t-shirt-s1.jpg', 'sportswear-t-shirt-zmMkxS2.jpg', 'L', 17, 'áo phông Nike Explective Series. Được làm từ bông nhẹ, đan nhẹ, nó có đồ họa lấy cảm hứng từ màu sắc và cảnh quan xung quanh Phoenix, Arizona, Hoa Kỳ.', 20, '2020-06-13 05:39:24', '2020-06-22 15:39:17'),
(20, 'Áo Thái', 'ao-thai', 2000000, '0', 'sportswear-swoosh-1.jpg', 'sportswear-swoosh-t-shir2.jpg', 'XL', 19, 'Oke', 20, '2020-06-22 15:07:55', '2020-06-22 15:07:55'),
(23, 'ÁO NIKE PRO HYPERCOOL', 'ao-nike-pro-hypercool', 650000, '0', 'ÁO NIKE PRO HYPERCOOL 650.jpeg', 'ÁO NIKE PRO HYPERCOOL .jpeg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:34:13', '2020-06-23 16:34:13'),
(24, 'Nike Dri-FIT Kyrie', 'nike-dri-fit-kyrie', 1125000, '0', 'Nike Dri-FIT Kyrie 1125000.jpg', 'Nike Dri-FIT Kyrie.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:35:32', '2020-06-23 16:35:32'),
(26, 'Nike SB Icon', 'nike-sb-icon', 1375000, '0', 'Nike SB Icon 1375000.jpg', 'Nike SB Icon.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:37:56', '2020-06-23 16:37:56'),
(27, 'Nike Sportswear Swoosh ', 'nike-sportswear-swoosh', 1125000, '0', 'Nike Sportswear Swoosh 1125000.jpg', 'Nike Sportswear Swoosh.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:38:41', '2020-06-23 16:38:41'),
(28, 'Nike', 'nike', 1125000, '0', 'Nike 1125000.jpg', 'Nike.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:40:04', '2020-06-23 16:40:04'),
(29, 'Nike Sportswear', 'nike-sportswear', 1125000, '0', 'Nike Sportswear1250000.jpg', 'Nike Sportswear1250.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:41:01', '2020-06-23 16:41:01'),
(30, 'Nike Sportswear Swoosh Red', 'nike-sportswear-swoosh-red', 1000000, '0', 'Nike Sportswear Swoosh Red 1000000.jpg', 'Nike Sportswear Swoosh Red.jpg', 'L,XL', 17, 'Nike', 10, '2020-06-23 16:43:53', '2020-06-23 16:43:53'),
(31, '3-STRIPES CLUB TEE B', '3-stripes-club-tee-b', 700000, '0', '3-STRIPES CLUB TEE B700.jpg', '3-STRIPES CLUB TEE B.jpg', 'L,XL', 18, 'ADIDAS', 10, '2020-06-23 16:45:31', '2020-06-23 16:45:31'),
(32, '3-STRIPES CLUB TEE', '3-stripes-club-tee', 700000, '0', '3-STRIPES CLUB TEE 700.jpg', '3-STRIPES CLUB TEE.jpg', 'L,XL', 18, 'ADIDAS\r\n', 10, '2020-06-23 16:46:34', '2020-06-23 16:46:34'),
(33, '3-STRIPES TEE', '3-stripes-tee', 650000, '0', '3-STRIPES TEE 625.jpg', '3-STRIPES TEE.jpg', 'L,XL', 18, 'ADIDAS', 10, '2020-06-23 16:47:40', '2020-06-23 16:47:40'),
(34, 'ADICOLOR 3D TREFOIL 3-STRIPES TEE ', 'adicolor-3d-trefoil-3-stripes-tee', 875000, '0', 'ADICOLOR 3D TREFOIL 3-STRIPES TEE 875000.jpg', 'Adicolor_3D_Trefoil_3_Stripes_Tee_Black_GE0836_23_hover_model.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:48:40', '2020-06-23 16:48:40'),
(35, 'CAMO TREFOIL TEE', 'camo-trefoil-tee', 750000, '0', 'CAMO TREFOIL TEE 750.jpg', 'CAMO TREFOIL TEE.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:49:18', '2020-06-23 16:49:18'),
(36, 'HEAT.RDY CLUB TEE', 'heatrdy-club-tee', 1250000, '0', 'HEAT.RDY CLUB TEE 1250.jpg', 'HEAT.RDY CLUB TEE.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:49:55', '2020-06-23 16:49:55'),
(37, 'PRIDE UNITES LONG SLEEVE TEE', 'pride-unites-long-sleeve-tee', 750000, '0', 'PRIDE UNITES LONG SLEEVE TEE 750.jpg', 'PRIDE UNITES LONG SLEEVE TEE.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:50:36', '2020-06-23 16:50:36'),
(38, 'SHMOO LOGO TEE', 'shmoo-logo-tee', 500000, '0', 'SHMOO LOGO TEE 500000.jpg', 'SHMOO LOGO TEE.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:51:10', '2020-06-23 16:51:10'),
(39, 'SHMOO LOGO TEE Y', 'shmoo-logo-tee-y', 1000000, '0', 'SHMOO LOGO TEE Y1000000.jpg', 'SHMOO LOGO TEE Y.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:51:50', '2020-06-23 16:51:50'),
(40, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT', 'men-volleyball-graphic-logo-t-shirt', 700000, '0', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT 700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:54:16', '2020-06-23 16:54:16'),
(41, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT ', 'men-volleyball-graphic-logo-t-shirt', 700000, '0', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W.jpg', 'L,XL', 18, 'Adidas', 10, '2020-06-23 16:55:03', '2020-06-23 16:55:03'),
(42, 'Nike', 'nike', 50000, '0', 'Nikee.jpg', 'Nikeee.jpg', 'L,XL', 17, 'Nike:)))', 100, '2020-06-23 16:56:33', '2020-06-23 16:56:33'),
(43, 'Nike', 'nike', 1625000, '0', 'Nike.jpg', 'Nike 1625.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:07:58', '2020-06-23 17:07:58'),
(44, 'Nike Air', 'nike-air', 1640000, '0', 'Nike Air 1640.jpg', 'Nike Air.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:08:41', '2020-06-23 17:08:41'),
(45, 'Nike Dri-FIT Academy Pro', 'nike-dri-fit-academy-pro', 2000000, '0', 'Nike Dri-FIT Academy Pro 2000.jpg', 'Nike Dri-FIT Academy Pro.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:09:18', '2020-06-23 17:09:18'),
(46, 'Nike Dri-FIT Academy Pro ', 'nike-dri-fit-academy-pro', 1750000, '0', 'Nike Dri-FIT Academy Pro B1750.jpg', 'Nike Dri-FIT Academy Pro B.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:09:54', '2020-06-23 17:09:54'),
(47, 'Nike Flex', 'nike-flex', 1125000, '0', 'Nike Flex 1125.jpg', 'Nike Flex.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:10:29', '2020-06-23 17:10:29'),
(48, 'Nike Sportswear Swoosh ', 'nike-sportswear-swoosh', 1875000, '0', 'Nike Sportswear Swoosh 1875.jpg', 'Nike Sportswear Swoosh 1.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:11:05', '2020-06-23 17:11:05'),
(49, 'Nike Sportswear Swoosh ', 'nike-sportswear-swoosh', 3125000, '0', 'Nike Sportswear Swoosh 3125.jpg', 'Nike Sportswear Swoosh.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:11:38', '2020-06-23 17:11:38'),
(50, 'NikeCourt Dri-FIT', 'nikecourt-dri-fit', 1500000, '0', 'NikeCourt Dri-FIT 1500.jpg', 'NikeCourt Dri-FIT.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:12:16', '2020-06-23 17:12:16'),
(51, 'Nike Dri-FIT', 'nike-dri-fit', 2500000, '0', 'Nike Dri-FIT 2500.jpg', 'Nike Dri-FIT.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:14:18', '2020-06-23 17:14:18'),
(52, 'Nike Dri-FIT Icon', 'nike-dri-fit-icon', 1125000, '0', 'Nike Dri-FIT Icon 1125.jpg', 'Nike Dri-FIT Icon.jpg', 'L,XL', 21, 'Nike', 10, '2020-06-23 17:15:17', '2020-06-23 17:15:17'),
(53, '3D TREFOIL 3-STRIPES SWEAT SHORTS', '3d-trefoil-3-stripes-sweat-shorts', 1125000, '0', '3D TREFOIL 3-STRIPES SWEAT SHORTS 1125.jpg', '3D TREFOIL 3-STRIPES SWEAT SHORTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:25:18', '2020-06-23 17:25:18'),
(54, 'CLUB SHORTS 9-INCH', 'club-shorts-9-inch', 700000, '0', 'CLUB SHORTS 9-INCH 700.jpg', 'CLUB SHORTS 9-INCH.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:25:54', '2020-06-23 17:26:35'),
(55, 'O SHAPE PANTS', 'o-shape-pants', 1200000, '0', 'O SHAPE PANTS 1200.jpg', 'O SHAPE PANTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:27:30', '2020-06-23 17:27:30'),
(56, 'O SHAPE PANTS ', 'o-shape-pants', 1200000, '0', 'O SHAPE PANTS R1200.jpg', 'O SHAPE PANTS R.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:28:06', '2020-06-23 17:28:06'),
(57, 'PANEL TREFOIL SHORTS', 'panel-trefoil-shorts', 1225000, '0', 'PANEL TREFOIL SHORTS 1225.jpg', 'PANEL TREFOIL SHORTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:28:47', '2020-06-23 17:28:47'),
(58, 'TIRO 19 TRAINING PANTS', 'tiro-19-training-pants', 900000, '0', 'TIRO 19 TRAINING PANTS 900.jpg', 'TIRO 19 TRAINING PANTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:29:43', '2020-06-23 17:29:43'),
(59, 'PRIDE 4KRFT SHORTS', 'pride-4krft-shorts', 850000, '0', 'PRIDE 4KRFT SHORTS 850.jpg', 'PRIDE 4KRFT SHORTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:30:21', '2020-06-23 17:30:21'),
(60, 'SHMOO TERRY SHORTS', 'shmoo-terry-shorts', 1050000, '0', 'SHMOO TERRY SHORTS 1050.jpg', 'SHMOO TERRY SHORTS.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:31:06', '2020-06-23 17:31:06'),
(61, 'TIRO 19 TRAINING PANTS ', 'tiro-19-training-pants', 900000, '0', 'TIRO 19 TRAINING PANTS B900.jpg', 'TIRO 19 TRAINING PANTS B.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:31:49', '2020-06-23 17:31:49'),
(62, 'TIRO 19 TRAINING PANTS ', 'tiro-19-training-pants', 900000, '0', 'TIRO 19 TRAINING PANTS G900.jpg', 'TIRO 19 TRAINING PANTS G.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:32:31', '2020-06-23 17:32:31'),
(63, 'TIRO 19 TRAINING PANTS ', 'tiro-19-training-pants', 900000, '0', 'TIRO 19 TRAINING PANTS R900.jpg', 'TIRO 19 TRAINING PANTS R.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:33:10', '2020-06-23 17:33:10'),
(64, 'TIRO 19 TRAINING PANTS ', 'tiro-19-training-pants', 900000, '0', 'TIRO 19 TRAINING PANTS W900.jpg', 'TIRO 19 TRAINING PANTS W.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:33:56', '2020-06-23 17:33:56'),
(65, 'ZENO BIG TREFOIL SHORTS ', 'zeno-big-trefoil-shorts', 850000, '0', 'ZENO BIG TREFOIL SHORTS.jpg', 'ZENO BIG TREFOIL SHORTS 850.jpg', 'L,XL', 22, 'Adidas', 10, '2020-06-23 17:34:37', '2020-06-23 17:34:37');

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
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `avatar`, `status`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Hồ Phạm Ngọc Thạch', 'ngocthach26112000@gmail.com', '0778889076', 'Tây Ninh', 'anh-dai-dien-cutejpg.jpg', 1, '123', '2020-06-22 15:21:57', '2020-06-22 15:21:57'),
(7, 'Van Thang', 'VanThang@gmail.com', '123456', 'Bình Định', '', 1, '123', '2020-06-22 18:48:58', '2020-06-22 18:48:58'),
(9, 'Quan Truong', 'quantrong@gmail.com', '0778889077', 'Binh Duong', '', 1, '123', '2020-06-23 08:05:18', '2020-06-23 08:05:18');

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
-- Chỉ mục cho bảng `category_parent`
--
ALTER TABLE `category_parent`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `category_parent`
--
ALTER TABLE `category_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
