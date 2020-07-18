-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 18, 2020 lúc 08:50 AM
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
-- Cấu trúc bảng cho bảng `banner_slide_show`
--

CREATE TABLE `banner_slide_show` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `thunbar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner_slide_show`
--

INSERT INTO `banner_slide_show` (`id`, `name`, `thunbar`) VALUES
(10, 'slide2', 'slider2.jpg'),
(11, 'slide1', 'slider1.jpg'),
(12, 'slide3', 'slide3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_parent_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_parent_id`, `name`, `images`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(17, 1, 'Áo Nike', NULL, NULL, 1, '2020-06-13 02:51:56', '2020-06-18 14:24:48'),
(18, 1, 'Áo Adidas', NULL, NULL, 1, '2020-06-13 02:52:21', '2020-06-18 14:16:28'),
(20, 1, 'Áo bóng đá', NULL, NULL, 1, '2020-06-13 02:52:44', '2020-06-18 14:16:37'),
(21, 2, 'Quần Nike', NULL, NULL, 1, '2020-06-13 02:53:00', '2020-06-18 14:16:41'),
(22, 2, 'Quần Adidas', NULL, NULL, 1, '2020-06-13 02:53:08', '2020-06-18 14:13:50'),
(24, 2, 'Quần bóng đá', NULL, NULL, 1, '2020-06-13 02:53:22', '2020-06-30 09:48:46'),
(25, 3, 'Giày thể thao', NULL, NULL, 1, '2020-06-13 02:53:46', '2020-06-18 14:16:03'),
(27, 4, 'Túi thể thao', NULL, NULL, 1, '2020-06-13 02:54:10', '2020-06-18 14:15:56'),
(28, 4, 'Băng tay', NULL, NULL, 1, '2020-06-13 02:54:26', '2020-06-18 14:15:52'),
(29, 4, 'Băng gối ', NULL, NULL, 1, '2020-06-13 02:54:33', '2020-06-18 14:15:49'),
(30, 4, 'Băng chân', NULL, NULL, 1, '2020-06-13 02:54:45', '2020-06-18 14:15:46'),
(31, 1, 'Áo thể thao', NULL, NULL, 1, '2020-06-13 10:24:54', '2020-06-18 14:15:42'),
(32, 2, 'Quần thể thao', NULL, NULL, 1, '2020-06-13 10:25:03', '2020-06-18 14:15:39'),
(33, 3, 'Giày bóng đá', NULL, NULL, 1, '2020-06-18 14:26:01', '2020-06-18 18:30:54'),
(37, 1, 'Áo bóng rổ', NULL, NULL, 1, '2020-06-29 15:39:21', '2020-06-29 15:39:21'),
(38, 2, 'Quần bóng rổ', NULL, NULL, 1, '2020-06-29 15:39:39', '2020-06-29 15:39:39');

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
(2, 'Quần', 'quan', NULL, 1, '2020-06-18 13:51:27', '2020-06-18 13:51:27'),
(3, 'Giày', 'giay', NULL, 1, '2020-06-18 13:51:36', '2020-06-18 13:51:36'),
(4, 'Dụng cụ hỗ trợ', 'dung-cu-ho-tro', NULL, 1, '2020-06-18 13:51:52', '2020-06-18 13:51:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
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

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Phạm Ngọc Thạch', 'Tây Ninh', 'ngocthach2000@gmail.com', '123123123Thach', '01228889076', 1, 1, NULL, '2020-06-29 15:07:40', '2020-07-17 12:48:50'),
(2, 'Admin', 'Q5, Sài Gòn', 'Admin2020@gmail.com', 'Admin2020', '0000000000', 1, 1, NULL, '2020-07-17 12:44:55', '2020-07-17 12:44:55');

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

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(27, 26, 14, 5, 1199000, '2020-07-17 12:15:02', '2020-07-17 12:15:02'),
(28, 26, 93, 3, 225000, '2020-07-17 12:15:02', '2020-07-17 12:15:02'),
(29, 27, 74, 1, 810000, '2020-07-17 12:16:25', '2020-07-17 12:16:25'),
(30, 27, 80, 1, 7125000, '2020-07-17 12:16:25', '2020-07-17 12:16:25'),
(31, 28, 75, 1, 680000, '2020-07-17 12:17:08', '2020-07-17 12:17:08'),
(32, 28, 57, 1, 400000, '2020-07-17 12:17:08', '2020-07-17 12:17:08'),
(33, 29, 26, 2, 4475700, '2020-07-18 03:22:11', '2020-07-18 03:22:11'),
(34, 29, 94, 1, 250000, '2020-07-18 03:22:11', '2020-07-18 03:22:11');

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
(9, 'Nike Sportswear ', 'nikesportswear', 963200, '50', 'dri-fit-academy-football-short-sleeve-top-01.jpg', 'dri-fit-academy-football-short-sleeve-top-02.jpg', 'L', 17, 'Nike T-shirts with full-color tie prints and pixel graphics printed on soft cotton for unfocused look with a soft feel. . ', 100, '2020-06-13 03:41:47', '2020-07-18 05:36:56'),
(10, 'Nike Sportswear Swooshh', 'nikesportswearswooshh', 819000, '0', 'nikecourt-dri-fit-tennis-polo-6jCqZv1.jpg', 'nikecourt-dri-fit-tennis-polo-6jCqZv2.jpg', 'S', 17, 'Áo thun Nike Sportswear Swoosh giúp bạn nổi bật với chất liệu cotton mềm mại và logo cổ điển trên ngực áo..', 10, '2020-06-13 05:16:17', '2020-07-18 05:37:09'),
(12, 'Nike Sportswear Black1', 'nikesportswearblack1', 819000, '0', 'exploration-series-basketball-t-shirt-Ttjgk1.jpg', 'exploration-series-basketball-t-shirt-Ttjgk2.jpg', 'XXL', 17, 'kết hợp độc đáo với logo cổ điển trên áo phông thể thao Nike. Chất liệu cotton mềm mại tạo cảm giác mịn màng như bầu trời.', 100, '2020-06-13 05:23:27', '2020-07-18 05:38:34'),
(13, 'Nike Sportswear', 'nikesportswear', 819000, '0', 'sportswear-t-shirt-01.jpg', 'sportswear-t-shirt-nt02.jpg', 'XXL', 17, 'Áo thun thể thao Nike tạo cho bạn một chiếc áo cotton mềm mại và logo cổ điển trên ngực áo.', 100, '2020-06-13 05:29:36', '2020-07-18 05:42:14'),
(14, 'NikeCourt Dri FIT', 'nikecourtdrifit', 1199000, '0', 'Ao1.jpg', 'Ao2.jpg', 'XL', 17, 'With sweat-wicking, 100% recycled fabric and a design that\'s made for movement, the NikeCourt Dri-FIT Polo is your first choice for the court. This product is made from at least 75% recycled polyester.', 15, '2020-06-13 05:32:17', '2020-07-18 05:38:44'),
(15, 'Nike Dri FIT', 'nikedrifit', 659000, '0', 'dri-fit-classic-basketball-jersey-gZ1Bk1.jpg', 'dri-fit-classic-basketball-jersey-gZ1Bk2.jpg', 'XXL', 17, 'Nike Dri-FIT Tank được làm từ vải mềm, thấm mồ hôi trong một cấu hình không tay để giúp bạn thoải mái và di chuyển tự do trong suốt quá trình tập luyện.', 100, '2020-06-13 05:34:31', '2020-07-18 05:40:54'),
(16, 'Men\'s Short Sleeve', 'mensshortsleeve', 659000, '0', 'pro-short-sleeve-top-NQKZts1.jpg', 'pro-short-sleeve-top-NQKZts2.jpg', 'XL', 17, 'Nike Pro Top có Công nghệ Dri-FIT giúp bạn khô ráo và thoải mái.', 100, '2020-06-13 05:35:54', '2020-07-18 05:42:02'),
(17, 'Nike Dri FIT Classic', 'nikedrifitclassic', 819000, '0', 'dri-fit-training-tank-brmLc1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XXL', 17, 'Nike Dri-FIT Classic kết hợp thiết kế hiệu suất với phong cách bóng rổ theo phong cách sống. Nó được làm từ vải lưới thấm mồ hôi tạo cảm giác mềm mại và nhẹ.', 100, '2020-06-13 05:37:28', '2020-07-18 05:43:05'),
(18, 'Nike Exploration Series', 'nikeexplorationseries', 819000, '99', 'sportswear-t-shirt-s1.jpg', 'sportswear-t-shirt-zmMkxS2.jpg', 'L', 17, 'áo phông Nike Explective Series. Được làm từ bông nhẹ, đan nhẹ, nó có đồ họa lấy cảm hứng từ màu sắc và cảnh quan xung quanh Phoenix, Arizona, Hoa Kỳ.', 20, '2020-06-13 05:39:24', '2020-07-18 05:43:48'),
(22, 'LeBron 17 ', 'lebron17', 5210505, '2', 'lebron-17-graffiti-basketball-shoe-DkNN8W.jpg', 'lebron-17-graffiti-basketball-shoe-DkNN8W (1).jpg', '42', 25, 'Taking cues from one of the most coveted LeBron 4 colorways, the LeBron 17 \"Grafﬁti\" pushes the boundaries of both past and present by combining elements from both signature shoes. The LeBron 17’s integrated tech—overlaid with a freestyle interpretation of LeBron’s personal values in the LeBron 4’s recognizable grafﬁti style—draws inspiration from the rhythm, art and culture of New York City’s streets, with lettering inspired by the iconography of the Big Apple.', 20, '2020-07-01 02:50:11', '2020-07-18 05:43:41'),
(23, 'Kyrie 6 N7', 'kyrie6n7', 3000000, '20', 'kyrie-6-n7-basketball-shoe-n61njg.jpg', 'kyrie-6-n7-basketball-shoe-n61njg (1).jpg', '41', 25, 'We each have a story to tell. Distinct symbols on the Kyrie 6 N7 reflect Kyrie Irving’s personal journey and reconnection to his indigenous roots. A star representing his community is inspired by the long history of Lakota quilt design. The mountain stands for his Lakota name, Hela or Little Mountain—symbols of strength Kyrie carries with him on and off the court.', 19, '2020-07-01 02:53:22', '2020-07-18 05:42:08'),
(24, 'LeBron Witness 4', 'lebronwitness4', 5300000, '0', 'lebron-witness-4-basketball-shoe-7zfgGM.jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (1).jpg', '43', 25, 'Be a force on the court in the LeBron Witness 4, a great fit for powerful players who want good ankle support but still feel light. The sculpted, padded collar and exterior heel counter provide a stable fit, while visible cushioning units under the forefoot return energy with every step.', 20, '2020-07-01 02:54:52', '2020-07-18 05:44:07'),
(25, 'LeBron Witness 4\'', 'lebronwitness4', 7200000, '0', 'lebron-witness-4-basketball-shoe-7zfgGM (2).jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (3).jpg', '40', 25, 'Be a force on the court in the LeBron Witness 4, a great fit for powerful players who want good ankle support but still feel light. The sculpted, padded collar and exterior heel counter provide a stable fit, while visible cushioning units under the forefoot return energy with every step.', 20, '2020-07-01 02:56:50', '2020-07-18 05:43:32'),
(26, 'Nike Precision 4', 'nikeprecision4', 4973000, '10', 'precision-4-basketball-shoe-N8ZKrT.jpg', 'precision-4-basketball-shoe-N8ZKrT (1).jpg', '43', 25, 'The quicker players are in and out of cuts, the easier it is to keep the defense off balance. The Nike Precision 4 combines a racer look with a low-profile design, so you can make the most of your speed and agility during games.', 50, '2020-07-01 02:58:35', '2020-07-18 05:43:55'),
(27, 'Nike Precision 4', 'nikeprecision4', 4730000, '10', 'precision-4-basketball-shoe-N8ZKrT (2).jpg', 'precision-4-basketball-shoe-N8ZKrT (3).jpg', '41', 25, 'The quicker players are in and out of cuts, the easier it is to keep the defense off balance. The Nike Precision 4 combines a racer look with a low-profile design, so you can make the most of your speed and agility during games.', 30, '2020-07-01 03:00:06', '2020-07-18 05:44:00'),
(28, 'LeBron 17 I Promise', 'lebron17ipromise', 4900000, '0', 'lebron-17-i-promise-basketball-shoe-DcJ6sx.jpg', 'lebron-17-i-promise-basketball-shoe-DcJ6sx (1).jpg', '40', 25, 'The LeBron 17 I Promise harnesses LeBron\'s strength and speed with containment and support for all-court domination. It features a lightweight mix of knit and heat-molded yarns that give each one a durable look and feel. Combined cushioning provides LeBron with the impact support and responsive energy return he needs to power through the long season.', 20, '2020-07-01 03:01:26', '2020-07-18 05:44:12'),
(29, 'LeBron 7 QS', 'lebron7qs', 4200000, '0', 'lebron-7-qs-mens-shoe-DN0BJz.jpg', 'lebron-7-qs-mens-shoe-DN0BJz (1).jpg', '45', 25, 'Make your head-turning journey to the top comfortable. Built strong and sleek, the LeBron 7 QS features a mix of materials on the upper for a look that lasts. Metal accents and multiple LeBron crests celebrate a king, while full-length cushioning graces your every step.', 20, '2020-07-01 03:03:23', '2020-07-18 05:44:19'),
(30, 'LeBron 7 QS', 'lebron7qs', 4100000, '5', 'lebron-7-qs-mens-shoe-DN0BJz (2).jpg', 'lebron-7-qs-mens-shoe-DN0BJz (3).jpg', '40', 25, 'Make your head-turning journey to the top comfortable. Built strong and sleek, the LeBron 7 QS features a mix of materials on the upper for a look that lasts. Metal accents and multiple LeBron crests celebrate a king, while full-length cushioning graces your every step.', 20, '2020-07-01 03:04:14', '2020-07-18 05:40:37'),
(31, 'LeBron 17 Low Tune Squad', 'lebron17lowtunesquad', 3900000, '0', 'lebron-17-low-tune-squad-basketball-shoe-fHcqqM.jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (1).jpg', '41', 25, 'Monstars beware, the newest starting forward for the Tune Squad has just crash-landed in Chicago for All-Star. LBJ is here and he’s poised to outplay everyone in the galaxy. The LeBron 17 Low Tune Squad channels the vibrant (and furry) energy of his Tune Squad teammates with a special nod to his favorite point guard’s iconic catchphrase, “What’s up, Doc?”. LeBron is leading the Tune Squad to the winner’s circle and with the season halfway complete, he and his team have their sights set on capturing more rings than the Looney Tunes logo.', 30, '2020-07-01 03:06:00', '2020-07-18 05:45:07'),
(32, 'Nike Mercurial Vapor 13 Elite Neymar Jr. FG', 'nikemercurialvapor13eliteneymarjrfg', 3800000, '0', 'mercurial-vapor-13-elite-neymar-jr-fg-firm-ground-soccer-cleat-HvrF9w.jpg', 'mercurial-vapor-13-elite-neymar-jr-fg-firm-ground-soccer-cleat-HvrF9w (1).jpg', '43', 33, 'Building on the 360 innovation of the 12, the Nike Mercurial Vapor 13 Elite Neymar Jr. FG adds a Nike Aerotrak zone to the forefoot and a slightly stiffer chassis to help supercharge traction. Inside, an insole with NikeGrip technology provides maximum interior traction underfoot and lightweight cushioning.', 20, '2020-07-01 03:08:14', '2020-07-18 05:44:51'),
(33, 'Nike Phantom Vision Elite Dynamic Fit FG', 'nikephantomvisionelitedynamicfitfg', 3500000, '30', 'phantom-vision-elite-dynamic-fit-fg-firm-ground-soccer-cleat-19Kv1V.jpg', 'phantom-vision-elite-dynamic-fit-fg-firm-ground-soccer-cleat-19Kv1V (1).jpg', '43', 33, 'The Nike Phantom Vision Elite Dynamic Fit FG brings the fierce precision of street play to the pitch. A foot-hugging inner sleeve is concealed in a Flyknit constructed outer layer to create a cleat for the finishers, the providers and the battlers of tomorrow\'s game.', 30, '2020-07-01 03:09:39', '2020-07-18 05:45:36'),
(34, 'Nike Mercurial Superfly 7 Elite MDS FG', 'nikemercurialsuperfly7elitemdsfg', 4760000, '0', 'mercurial-superfly-7-elite-mds-fg-firm-ground-soccer-cleat-Xgb9Qw.jpg', 'mercurial-superfly-7-elite-mds-fg-firm-ground-soccer-cleat-Xgb9Qw (1).jpg', '42', 33, 'Dream of speed and play fast in the Nike Mercurial Superfly 7 Elite MDS FG. A streamlined upper combines with a Nike Aerotrak zone for high-speed play and supercharged traction.', 30, '2020-07-01 03:12:06', '2020-07-18 05:44:57'),
(35, 'Nike Tiempo Legend 7 Elite FG', 'niketiempolegend7elitefg', 3800000, '0', 'tiempo-legend-7-elite-fg-firm-ground-soccer-cleat-BDw2WJ.jpg', 'tiempo-legend-7-elite-fg-firm-ground-soccer-cleat-BDw2WJ (1).jpg', '45', 33, 'The Nike Tiempo Legend 7 Elite FG elevates a classic by adding a new ultra-soft leather and, for the first time in Tiempo history, a Flyknit constructed heel and midfoot with Flywire cables. It’s legendary fit, touch and traction—evolved.', 30, '2020-07-01 03:13:29', '2020-07-18 05:45:22'),
(36, 'Nike Mercurial Superfly 7 Club MG', 'nikemercurialsuperfly7clubmg', 890000, '0', 'mercurial-superfly-7-club-mg-multi-ground-soccer-cleat-rF5V10.jpg', 'mercurial-superfly-7-club-mg-multi-ground-soccer-cleat-rF5V10 (1).jpg', '42', 33, 'The Nike Mercurial Superfly 7 Club MG wraps your foot for streamlined speed. A versatile multi-ground plate provides traction on natural- and artificial-grass surfaces.', 30, '2020-07-01 03:15:08', '2020-07-18 05:46:08'),
(37, 'Nike SuperflyX 6 Elite IC Game Over', 'nikesuperflyx6eliteicgameover', 1200000, '0', 'superflyx-6-elite-ic-game-over-mens-indoor-court-soccer-cleat-JkTG4LGj.jpg', 'superflyx-6-elite-ic-game-over-mens-indoor-court-soccer-cleat-JkTG4LGj (1).jpg', '43', 33, 'Pretty good, tight fit what you’d expect from a superfly definelty true to size if you want a perfect fit.', 20, '2020-07-01 03:17:44', '2020-07-18 05:46:00'),
(38, 'Nike Superfly 6 Pro FG', 'nikesuperfly6profg', 2400000, '26', 'superfly-6-pro-fg-firm-ground-soccer-cleat-k1DVez.jpg', 'superfly-6-pro-fg-firm-ground-soccer-cleat-k1DVez (1).jpg', '43', 33, 'The micro-textured, premium synthetic and fabric upper of the Nike Superfly 6 Pro FG wraps underneath your foot for a second-skin-like fit. A 2-part podular plate system utilizes chevron studs for speed in every step, while embossed speed ribs from heel to toe make your boot look as fast as you feel.', 20, '2020-07-01 03:19:13', '2020-07-18 05:49:45'),
(39, 'Nike Mercurial Vapor 13 Academy Neymar Jr. MG', 'nikemercurialvapor13academyneymarjrmg', 3800000, '10', 'mercurial-vapor-13-academy-neymar-jr-mg-multi-ground-soccer-cleat-jRKr6D.jpg', 'mercurial-vapor-13-academy-neymar-jr-mg-multi-ground-soccer-cleat-jRKr6D (1).jpg', '44', 33, 'The Nike Mercurial Vapor 13 Academy Neymar Jr. MG is built for fast play and adds a versatile multi-ground plate that provides traction on natural- and artificial-grass surfaces.\r\n\r\n', 19, '2020-07-01 03:20:35', '2020-07-18 05:49:54'),
(40, 'Nike Jr. Mercurial Superfly 7 Academy CR7 Safari MG', 'nikejrmercurialsuperfly7academycr7safarimg', 6999999, '69', 'jr-mercurial-superfly-7-academy-cr7-safari-mg-little-big-kids-multi-ground-soccer-cleat-LKB8WB.jpg', '12315.jpg', '44', 33, 'The Nike Jr. Mercurial Superfly 7 Academy CR7 Safari MG brings back an iconic colorway worn by Cristiano Ronaldo. A textured material and stretchy collar wrap your foot for streamlined speed, while a versatile plate provides explosive traction on a variety of surfaces.', 20, '2020-07-01 03:23:16', '2020-07-18 05:50:48'),
(41, 'LeBron 17 I Promise', 'lebron17ipromise', 4900000, '0', 'lebron-17-i-promise-basketball-shoe-DcJ6sx.jpg', 'lebron-17-i-promise-basketball-shoe-DcJ6sx (1).jpg', '43', 33, 'The LeBron 17 I Promise harnesses LeBron\'s strength and speed with containment and support for all-court domination. It features a lightweight mix of knit and heat-molded yarns that give each one a durable look and feel. Combined cushioning provides LeBron with the impact support and responsive energy return he needs to power through the long season.', 20, '2020-07-01 03:29:27', '2020-07-18 05:51:14'),
(42, 'Nike Sportswear City Edition', 'nikesportswearcityedition', 637000, '15', 'sportswear-city-edition-mens-woven-shorts-mTgTN6.jpg', 'sportswear-city-edition-mens-woven-shorts-mTgTN6 (1).jpg', 'XL', 21, 'Featuring a tonal color-block design, the Nike Sportswear Shorts give you a classic look with simple, street-ready style. Crafted from a lightweight woven fabric and soft mesh lining, they\'ve got you covered for all-day comfort.', 20, '2020-07-01 03:32:37', '2020-07-18 05:45:51'),
(43, 'Nike Sportswear Alumni', 'nikesportswearalumni', 730000, '0', 'sportswear-alumni-mens-shorts-7sxFP2.jpg', 'sportswear-alumni-mens-shorts-7sxFP2 (1).jpg', 'XXL', 21, 'The Nike Sportswear Alumni Shorts are designed with raw edges around the pockets and hem for a laid back look. The color-block design gives you bold, street-ready style.', 19, '2020-07-01 03:34:28', '2020-07-18 05:51:23'),
(44, 'Nike Dri FIT', 'nikedrifit', 365000, '5', 'dri-fit-mens-training-shorts-2KTr7KBn.jpg', 'dri-fit-mens-training-shorts-2KTr7KBn (1).jpg', 'XL', 21, 'The Men\'s Nike Dry Shorts let you take training to the next level with sweat management and motion vents that allow you to move freely and comfortably.', 27, '2020-07-01 03:35:50', '2020-07-18 05:52:21'),
(45, 'Nike Flight', 'nikeflight', 386000, '0', 'flight-basketball-shorts-1bBMrk.jpg', 'flight-basketball-shorts-1bBMrk (1).jpg', 'L', 21, 'Inspired by the iconic \'90s Flight Series, the Nike Flight Shorts offer an audacious look and feel with an authentic basketball design. Made with lightweight woven fabric and a mesh lining, they feature a Flight logo cut and stitched into the design.', 20, '2020-07-01 03:38:15', '2020-07-18 05:55:21'),
(46, 'Nike Flight', 'nikeflight', 436000, '0', 'flight-basketball-shorts-1bBMrk (2).jpg', 'flight-basketball-shorts-1bBMrk (3).jpg', 'XL', 21, 'Inspired by the iconic \'90s Flight Series, the Nike Flight Shorts offer an audacious look and feel with an authentic basketball design. Made with lightweight woven fabric and a mesh lining, they feature a Flight logo cut and stitched into the design.', 20, '2020-07-01 03:39:11', '2020-07-18 05:45:44'),
(47, 'Nike Flex', 'nikeflex', 530000, '40', 'flex-mens-training-shorts-3jGZS9.jpg', 'flex-mens-training-shorts-3jGZS9 (1).jpg', 'XL', 21, 'Made with lightweight heathered fabric, the Nike Flex Shorts move with your body through your most intense workouts. Mesh at the sides keep air flowing to help you stay cool when your routine heats up.', 20, '2020-07-01 03:40:17', '2020-07-18 05:52:32'),
(48, 'Backpack', 'backpack', 100000, '00', 'Backpack 1300.jpg', 'Backpack.jpg', 'XXXL', 27, 'Túi.', 10, '2020-07-01 08:17:44', '2020-07-18 05:40:27'),
(49, 'Nike Dri FIT Kyrie', 'nikedrifitkyrie', 1125000, '00', 'Nike Dri-FIT Kyrie 1125000.jpg', 'Nike Dri-FIT Kyrie.jpg', 'L', 17, 'Nike Dri-FIT Kyrie', 20, '2020-07-01 15:22:38', '2020-07-18 05:52:43'),
(50, '3 STRIPES CLUB TEE', '3stripesclubtee', 700000, '0', '3-STRIPES CLUB TEE 700.jpg', '3-STRIPES CLUB TEE.jpg', 'XL', 18, '3-STRIPES CLUB TEE', 20, '2020-07-01 15:33:03', '2020-07-18 05:52:49'),
(51, '3STRIPES CLUB TEE ', '3stripesclubtee', 700000, '0', '3-STRIPES CLUB TEE B700.jpg', '3-STRIPES CLUB TEE B.jpg', 'L', 18, '3-STRIPES CLUB TEE ', 20, '2020-07-01 15:35:22', '2020-07-18 05:51:58'),
(52, '3STRIPES TEE', '3stripestee', 625000, '0', '3-STRIPES TEE 625.jpg', '3-STRIPES TEE.jpg', 'L', 18, '3-STRIPES TEE', 20, '2020-07-01 15:36:26', '2020-07-18 05:53:12'),
(53, 'ADICOLOR 3D TREFOIL 3 STRIPES TEE', 'adicolor3dtrefoil3stripestee', 875000, '0', 'ADICOLOR 3D TREFOIL 3-STRIPES TEE 875000.jpg', 'Adicolor_3D_Trefoil_3_Stripes_Tee_Black_GE0836_23_hover_model.jpg', 'XL', 18, 'ADICOLOR 3D TREFOIL 3-STRIPES TEE', 10, '2020-07-01 15:37:29', '2020-07-18 05:53:51'),
(54, 'CAMO TREFOIL TEE', 'camotrefoiltee', 750000, '0', 'CAMO TREFOIL TEE 750.jpg', 'CAMO TREFOIL TEE.jpg', 'L', 18, 'CAMO TREFOIL TEE', 10, '2020-07-01 15:38:31', '2020-07-18 05:54:07'),
(55, 'MEN VOLLEYBALL GRAPHIC LOGO TSHIRT', 'menvolleyballgraphiclogotshirt', 700000, '0', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT 700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT.jpg', 'L', 18, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT', 10, '2020-07-01 15:39:12', '2020-07-18 05:55:35'),
(56, 'MEN VOLLEYBALL GRAPHIC LOGO TSHIRT ', 'menvolleyballgraphiclogotshirt', 700000, '0', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W.jpg', 'XL', 18, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT ', 10, '2020-07-01 15:39:54', '2020-07-18 05:56:41'),
(57, 'SHMOO LOGO TEE', 'shmoologotee', 500000, '20', 'SHMOO LOGO TEE 500000.jpg', 'SHMOO LOGO TEE.jpg', 'XXXL', 18, 'SHMOO LOGO TEE', 19, '2020-07-01 15:40:59', '2020-07-18 05:58:59'),
(58, 'SHMOO LOGO TEE ', 'shmoologotee', 1000000, '0', 'SHMOO LOGO TEE Y1000000.jpg', 'SHMOO LOGO TEE Y.jpg', 'XL', 18, 'SHMOO LOGO TEE ', 100, '2020-07-01 15:42:24', '2020-07-18 05:59:36'),
(59, 'HEAT.RDY CLUB TEE', 'heatrdyclubtee', 1250000, '0', 'HEAT.RDY CLUB TEE 1250.jpg', 'HEAT.RDY CLUB TEE.jpg', 'L', 18, 'HEAT.RDY CLUB TEE', 20, '2020-07-01 15:43:00', '2020-07-18 05:51:04'),
(60, 'Nike', 'nike', 1625000, '0', 'Nike 1625.jpg', 'Nike.jpg', 'L', 21, 'Nike', 20, '2020-07-01 15:44:05', '2020-07-18 05:57:56'),
(61, 'Nike Air', 'nikeair', 1640000, '0', 'Nike Air 1640.jpg', 'Nike Air.jpg', 'L', 21, 'Nike Air', 10, '2020-07-01 15:46:59', '2020-07-18 06:01:01'),
(62, 'NikeCourt DriFIT', 'nikecourtdrifit', 1500000, '0', 'NikeCourt Dri-FIT 1500.jpg', 'NikeCourt Dri-FIT.jpg', 'L', 21, 'NikeCourt Dri-FIT', 20, '2020-07-01 15:49:12', '2020-07-18 05:55:47'),
(63, 'Nike DriFIT', 'nikedrifit', 2500000, '0', 'Nike Dri-FIT 2500.jpg', 'Nike Dri-FIT.jpg', 'L', 21, 'Nike Dri-FIT', 20, '2020-07-01 15:50:11', '2020-07-18 05:58:07'),
(64, 'Nike Air', 'nikeair', 1640000, '0', 'Nike Air 1640.jpg', 'Nike Air.jpg', 'XXL', 21, 'Nike Air', 20, '2020-07-01 15:51:24', '2020-07-18 05:58:30'),
(65, 'Nike Air', 'nikeair', 1640000, '0', 'Nike Air 1640.jpg', 'Nike Air.jpg', '28', 21, 'Nike Air', 50, '2020-07-01 15:51:59', '2020-07-18 05:47:39'),
(66, '3D TREFOIL 3STRIPES SWEAT SHORTS', '3dtrefoil3stripessweatshorts', 1125000, '0', '3D TREFOIL 3-STRIPES SWEAT SHORTS 1125.jpg', '3D TREFOIL 3-STRIPES SWEAT SHORTS.jpg', 'L', 22, '3D TREFOIL 3-STRIPES SWEAT SHORTS', 50, '2020-07-01 15:52:54', '2020-07-18 06:00:00'),
(67, 'CLUB SHORTS 9INCH', 'clubshorts9inch', 700000, '0', 'CLUB SHORTS 9-INCH 700.jpg', 'CLUB SHORTS 9-INCH.jpg', 'S', 22, 'CLUB SHORTS 9-INCH', 50, '2020-07-01 15:53:26', '2020-07-18 05:54:56'),
(68, 'O SHAPE PANTS', 'oshapepants', 1200000, '0', 'O SHAPE PANTS 1200.jpg', 'O SHAPE PANTS.jpg', 'L', 22, 'O SHAPE PANTS', 20, '2020-07-01 15:54:00', '2020-07-18 05:52:10'),
(69, 'O SHAPE PANTS ', 'oshapepants', 1200000, '0', 'O SHAPE PANTS R1200.jpg', 'O SHAPE PANTS R.jpg', 'L', 22, 'O SHAPE PANTS ', 10, '2020-07-01 15:54:33', '2020-07-18 05:56:53'),
(70, 'PANEL TREFOIL SHORTS', 'paneltrefoilshorts', 1225000, '0', 'PANEL TREFOIL SHORTS 1225.jpg', 'PANEL TREFOIL SHORTS.jpg', 'L', 22, 'PANEL TREFOIL SHORTS', 20, '2020-07-01 15:55:07', '2020-07-18 05:54:34'),
(71, 'PRIDE 4KRFT SHORTS', 'pride4krftshorts', 850000, '0', 'PRIDE 4KRFT SHORTS 850.jpg', 'PRIDE 4KRFT SHORTS.jpg', 'L', 22, 'PRIDE 4KRFT SHORTS', 20, '2020-07-01 15:55:58', '2020-07-18 05:56:12'),
(72, 'SHMOO TERRY SHORTS', 'shmooterryshorts', 1050000, '0', 'SHMOO TERRY SHORTS 1050.jpg', 'SHMOO TERRY SHORTS.jpg', 'L', 22, 'SHMOO TERRY SHORTS', 20, '2020-07-01 15:56:41', '2020-07-18 05:46:40'),
(74, 'TIRO 19 TRAINING PANTS ', 'tiro19trainingpants', 900000, '10', 'TIRO 19 TRAINING PANTS B900.jpg', 'TIRO 19 TRAINING PANTS B.jpg', 'L', 22, 'TIRO 19 TRAINING PANTS ', 49, '2020-07-01 15:58:18', '2020-07-18 05:59:10'),
(75, 'ZENO BIG TREFOIL SHORTS', 'zenobigtrefoilshorts', 850000, '20', 'ZENO BIG TREFOIL SHORTS 850.jpg', 'ZENO BIG TREFOIL SHORTS.jpg', 'L', 22, 'ZENO BIG TREFOIL SHORTS', 19, '2020-07-01 15:58:58', '2020-07-18 05:58:17'),
(76, 'Nike Air Force 1 \'07 ', 'nikeairforce107', 3750000, '0', 'Nike Air Force 1 \'07 3750.jpg', 'Nike Air Force 1 \'07 3.jpg', '45', 25, 'Nike Air Force 1 \'07 ', 50, '2020-07-01 16:00:46', '2020-07-18 05:57:19'),
(79, 'Nike Zoom Pegasus Turbo 2', 'nikezoompegasusturbo2', 6500000, '0', 'Nike Zoom Pegasus Turbo 2 6500.jpg', 'Nike Zoom Pegasus Turbo 2.jpg', '39', 25, 'Nike Zoom Pegasus Turbo 2', 50, '2020-07-01 16:15:48', '2020-07-18 05:59:26'),
(80, 'Nike Air VaporMax Flyknit 3', 'nikeairvapormaxflyknit3', 7125000, '0', 'Nike Air VaporMax Flyknit 3 7125.jpg', 'Nike Air VaporMax Flyknit 3.jpg', '42', 25, 'Nike Air VaporMax Flyknit 3', 19, '2020-07-01 16:19:13', '2020-07-18 06:00:29'),
(81, 'Nike Jr. Mercurial Superfly 7 Academy MG', 'nikejrmercurialsuperfly7academymg', 2900000, '0', 'Nike Jr. Mercurial Superfly 7 Academy MG 2900.jpg', 'Nike Jr. Mercurial Superfly 7 Academy MG.jpg', '43', 33, 'Nike Jr. Mercurial Superfly 7 Academy MG', 20, '2020-07-01 16:20:26', '2020-07-18 05:54:22'),
(82, 'Nike Mercurial Vapor 13 Academy MDS MG', 'nikemercurialvapor13academymdsmg', 2250000, '20', 'Nike Mercurial Vapor 13 Academy MDS MG 2250.jpg', 'Nike Mercurial Vapor 13 Academy MDS MG.jpg', '43', 33, 'Nike Mercurial Vapor 13 Academy MDS MG', 20, '2020-07-01 16:21:06', '2020-07-18 05:46:57'),
(83, 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG', 'nikejrmercurialsuperfly7clubcr7safarimg', 2250000, '0', 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG 2250.jpg', 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG.jpg', '39', 33, 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG', 20, '2020-07-01 16:22:21', '2020-07-18 05:56:01'),
(84, 'Brazil Stadium', 'brazilstadium', 700000, '10', 'Brazil Stadium 700.jpg', 'Brazil Stadium.jpg', 'L', 27, 'Brazil Stadium', 20, '2020-07-01 16:23:25', '2020-07-18 05:58:43'),
(85, 'Nike Brasilia', 'nikebrasilia', 1300000, '0', 'Nike Brasilia 1300.jpg', 'Nike Brasilia.jpg', 'XL', 27, 'Nike Brasilia', 19, '2020-07-01 16:24:04', '2020-07-18 06:01:22'),
(86, 'Nike Brasilia', 'nikebrasilia', 1600000, '0', 'Nike Brasilia 1600.jpg', 'Nike Brasilia B.jpg', 'L', 27, 'Nike Brasilia', 20, '2020-07-01 16:24:38', '2020-07-18 06:02:08'),
(87, 'Nike Graphic', 'nikegraphic', 300000, '0', 'Nike Graphic 300.jpg', 'Nike Graphic.jpg', 'L', 27, 'Nike Graphic', 20, '2020-07-01 16:25:14', '2020-07-18 06:00:37'),
(88, 'Nike Gym Club', 'nikegymclub', 11000000, '0', 'Nike Gym Club 1100.jpg', 'Nike Gym Club.jpg', 'XL', 27, 'Nike Gym Club', 100, '2020-07-01 16:25:52', '2020-07-18 06:02:20'),
(89, 'Nike Gym Club', 'nikegymclub', 1100000, '0', 'Nike Gym Club B1100.jpg', 'Nike Gym Club B.jpg', 'XL', 27, 'Nike Gym Club', 100, '2020-07-01 16:26:21', '2020-07-18 05:57:39'),
(90, 'Nike Shoebox', 'nikeshoebox', 1000000, '0', 'Nike Shoebox 1000.jpg', 'Nike Shoebox.jpg', 'M', 27, 'Nike Shoebox', 100, '2020-07-01 16:26:57', '2020-07-18 05:55:14'),
(91, 'Nike Gym Club ', 'nikegymclub', 1100000, '50', 'Nike Gym Club W1100.jpg', 'Nike Gym Club W.jpg', 'L', 27, 'Nike Gym Club ', 100, '2020-07-01 16:27:39', '2020-07-18 05:56:28'),
(92, 'Nike Graphic', 'nikegraphic', 300000, '10', 'Nike Graphic 300.jpg', 'Nike Graphic.jpg', 'XL', 27, 'Nike Graphic', 100, '2020-07-01 16:28:18', '2020-07-18 06:01:36'),
(93, 'Nike Swoosh', 'nikeswoosh', 250000, '10', 'Nike Swoosh 250.jpg', 'Nike Swoosh.jpg', 'L', 28, 'Nike Swoosh', 97, '2020-07-01 16:30:59', '2020-07-18 05:47:18'),
(94, 'Nike Swoosh', 'nikeswoosh', 250000, '', 'Nike Swoosh.jpg', 'Nike Swoosh 250.jpg', 'XL', 28, 'Nike Swoosh', 100, '2020-07-01 16:31:32', '2020-07-18 05:40:09'),
(95, 'Jordan Jumpman ', 'jordanjumpman', 750000, '0', 'Jordan Jumpman 750.jpg', 'Jordan Jumpman 750.jpg', 'X', 28, 'Jordan Jumpman', 100, '2020-07-01 16:32:37', '2020-07-18 05:39:42');

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

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(26, 6670000, 16, 1, '2020-07-17 12:15:02', '2020-07-17 12:17:18'),
(27, 7935000, 16, 1, '2020-07-17 12:16:25', '2020-07-17 12:17:17'),
(28, 1080000, 4, 1, '2020-07-17 12:17:08', '2020-07-17 13:50:22'),
(29, 9201400, 16, 0, '2020-07-18 03:22:11', '2020-07-18 03:22:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT 1,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `email`, `phone`, `address`, `avatar`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Hồ Phạm Ngọc Thạch', 1, 'ngocthach26112000@gmail.com', '0778889076', 'Tây Ninh', 'wp4382182.jpg', '123', '2020-06-22 15:21:57', '2020-07-17 14:41:35'),
(7, 'Van Thang', 1, 'VanThang@gmail.com', '023065412', 'Bình Định', '', '123123123Thang', '2020-06-22 18:48:58', '2020-07-17 03:58:15'),
(16, 'Thủy Tiên', 2, 'Tien@gmail.com', '090956565', 'Tây Ninh', '42044308_2163746367285237_8367527505942282240_o.jpg', '123123123Tien', '2020-07-17 03:33:16', '2020-07-17 03:40:14'),
(17, 'Thiên Trần', 1, 'ThienTran@gmail.com', '0123321456', 'Bạc liêu', '71700757_2656504424374151_2826972926203396096_n.png', '123123123Thien', '2020-07-17 12:41:50', '2020-07-17 12:41:50'),
(18, 'Kim Tuyền', 2, 'KimTuyen@gmail.com', '999999999', 'Hà Nội', '', '123123123Tuyen', '2020-07-17 12:53:41', '2020-07-17 12:53:41'),
(19, 'Nguyễn Quang Trường', 1, 'QTruong@gmail.com', '0909090909', 'Bình Dương', '', '123123123Truong', '2020-07-17 17:09:35', '2020-07-17 17:09:35');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
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
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
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
-- AUTO_INCREMENT cho bảng `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `category_parent`
--
ALTER TABLE `category_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
