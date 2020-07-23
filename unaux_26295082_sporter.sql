-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql300.unaux.com
-- Generation Time: Jul 23, 2020 at 11:23 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_26295082_sporter`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_slide_show`
--

CREATE TABLE `banner_slide_show` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `thunbar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_slide_show`
--

INSERT INTO `banner_slide_show` (`id`, `name`, `thunbar`) VALUES
(10, 'slide2', 'slider2.jpg'),
(11, 'slide1', 'slider1.jpg'),
(12, 'slide3', 'slide3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_parent_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `banner` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_parent_id`, `name`, `images`, `banner`, `created_at`, `updated_at`) VALUES
(17, 1, 'Áo Nike', NULL, NULL, '2020-06-13 02:51:56', '2020-06-18 14:24:48'),
(18, 1, 'Áo Adidas', NULL, NULL, '2020-06-13 02:52:21', '2020-06-18 14:16:28'),
(20, 1, 'Áo bóng đá', NULL, NULL, '2020-06-13 02:52:44', '2020-06-18 14:16:37'),
(21, 2, 'Quần Nike', NULL, NULL, '2020-06-13 02:53:00', '2020-06-18 14:16:41'),
(22, 2, 'Quần Adidas', NULL, NULL, '2020-06-13 02:53:08', '2020-06-18 14:13:50'),
(24, 2, 'Quần bóng đá', NULL, NULL, '2020-06-13 02:53:22', '2020-06-30 09:48:46'),
(25, 3, 'Giày thể thao', NULL, NULL, '2020-06-13 02:53:46', '2020-06-18 14:16:03'),
(27, 4, 'Túi thể thao', NULL, NULL, '2020-06-13 02:54:10', '2020-06-18 14:15:56'),
(28, 4, 'Băng tay', NULL, NULL, '2020-06-13 02:54:26', '2020-06-18 14:15:52'),
(29, 4, 'Băng gối ', NULL, NULL, '2020-06-13 02:54:33', '2020-06-18 14:15:49'),
(30, 4, 'Băng chân', NULL, NULL, '2020-06-13 02:54:45', '2020-06-18 14:15:46'),
(31, 1, 'Áo thể thao', NULL, NULL, '2020-06-13 10:24:54', '2020-06-18 14:15:42'),
(32, 2, 'Quần thể thao', NULL, NULL, '2020-06-13 10:25:03', '2020-06-18 14:15:39'),
(33, 3, 'Giày bóng đá', NULL, NULL, '2020-06-18 14:26:01', '2020-06-18 18:30:54'),
(37, 1, 'Áo bóng rổ', NULL, NULL, '2020-06-29 15:39:21', '2020-06-29 15:39:21'),
(38, 2, 'Quần bóng rổ', NULL, NULL, '2020-06-29 15:39:39', '2020-06-29 15:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `category_parent`
--

CREATE TABLE `category_parent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_parent`
--

INSERT INTO `category_parent` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Áo', '2020-06-18 13:51:21', '2020-06-18 13:51:21'),
(2, 'Quần', '2020-06-18 13:51:27', '2020-06-18 13:51:27'),
(3, 'Giày', '2020-06-18 13:51:36', '2020-06-18 13:51:36'),
(4, 'Dụng cụ hỗ trợ', '2020-06-18 13:51:52', '2020-06-18 13:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` char(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'Nguyễn Văn Thắng', '123 Văn Cừ', 'cungtrang@gmail.com', 'Thang1234', '0326566821', 1, 1, NULL, '2020-07-23 04:12:06', '2020-07-23 04:12:06'),
(2, 'Admin', 'Q5, Sài Gòn', 'Admin2020@gmail.com', 'Admin2020', '0000000000', 1, 1, NULL, '2020-07-17 12:44:55', '2020-07-17 12:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` tinyint(4) DEFAULT '0',
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(27, 26, 14, 5, 1199000, '2020-07-17 12:15:02', '2020-07-17 12:15:02'),
(28, 26, 93, 3, 225000, '2020-07-17 12:15:02', '2020-07-17 12:15:02'),
(29, 27, 74, 1, 810000, '2020-07-17 12:16:25', '2020-07-17 12:16:25'),
(30, 27, 80, 1, 7125000, '2020-07-17 12:16:25', '2020-07-17 12:16:25'),
(31, 28, 75, 1, 680000, '2020-07-17 12:17:08', '2020-07-17 12:17:08'),
(32, 28, 57, 1, 400000, '2020-07-17 12:17:08', '2020-07-17 12:17:08'),
(33, 29, 26, 2, 4475700, '2020-07-18 03:22:11', '2020-07-18 03:22:11'),
(34, 29, 94, 1, 250000, '2020-07-18 03:22:11', '2020-07-18 03:22:11'),
(46, 37, 47, 1, 318000, '2020-07-21 14:15:47', '2020-07-21 14:15:47'),
(41, 34, 105, 3, 469000, '2020-07-21 07:51:20', '2020-07-21 07:51:20'),
(37, 31, 46, 2, 436000, '2020-07-18 17:13:13', '2020-07-18 17:13:13'),
(38, 32, 42, 3, 541450, '2020-07-18 17:24:32', '2020-07-18 17:24:32'),
(39, 32, 10, 1, 819000, '2020-07-18 17:24:32', '2020-07-18 17:24:32'),
(45, 37, 100, 7, 195000, '2020-07-21 14:15:47', '2020-07-21 14:15:47'),
(47, 38, 129, 1, 395000, '2020-07-22 11:54:22', '2020-07-22 11:54:22'),
(48, 39, 101, 1, 9000000, '2020-07-22 13:30:34', '2020-07-22 13:30:34'),
(49, 40, 9, 1, 481600, '2020-07-22 13:54:39', '2020-07-22 13:54:39'),
(50, 41, 129, 1, 395000, '2020-07-22 16:45:27', '2020-07-22 16:45:27'),
(51, 42, 42, 1, 541450, '2020-07-23 08:18:03', '2020-07-23 08:18:03'),
(52, 42, 10, 1, 819000, '2020-07-23 08:18:03', '2020-07-23 08:18:03'),
(53, 42, 13, 1, 819000, '2020-07-23 08:18:03', '2020-07-23 08:18:03'),
(54, 42, 23, 1, 2400000, '2020-07-23 08:18:03', '2020-07-23 08:18:03'),
(55, 42, 9, 1, 481600, '2020-07-23 08:18:03', '2020-07-23 08:18:03'),
(56, 43, 129, 1, 395000, '2020-07-23 11:29:51', '2020-07-23 11:29:51'),
(57, 44, 129, 1, 395000, '2020-07-23 11:30:53', '2020-07-23 11:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `thunbar1` varchar(100) DEFAULT NULL,
  `thunbar2` varchar(100) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `content` text,
  `number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar1`, `thunbar2`, `size`, `category_id`, `content`, `number`, `created_at`, `updated_at`) VALUES
(9, 'Nike Sportswear ', 'nikesportswear', 963200, 50, 'dri-fit-academy-football-short-sleeve-top-01.jpg', 'dri-fit-academy-football-short-sleeve-top-02.jpg', 'L XL XXL S', 17, 'Nike T-shirts with full-color tie prints and pixel graphics printed on soft cotton for unfocused look with a soft feel. . ', 99, '2020-06-13 03:41:47', '2020-07-23 10:04:53'),
(10, 'Nike Sportswear Swooshh', 'nikesportswearswooshh', 819000, 0, 'nikecourt-dri-fit-tennis-polo-6jCqZv1.jpg', 'nikecourt-dri-fit-tennis-polo-6jCqZv2.jpg', 'S M L XL X', 17, 'Áo thun Nike Sportswear Swoosh giúp bạn nổi bật với chất liệu cotton mềm mại và logo cổ điển trên ngực áo..', 9, '2020-06-13 05:16:17', '2020-07-23 10:04:53'),
(12, 'Nike Sportswear Black1', 'nikesportswearblack1', 819000, 0, 'exploration-series-basketball-t-shirt-Ttjgk1.jpg', 'exploration-series-basketball-t-shirt-Ttjgk2.jpg', 'XXL', 17, 'kết hợp độc đáo với logo cổ điển trên áo phông thể thao Nike. Chất liệu cotton mềm mại tạo cảm giác mịn màng như bầu trời.', 100, '2020-06-13 05:23:27', '2020-07-18 05:38:34'),
(13, 'Nike Sportswear', 'nikesportswear', 819000, 0, 'sportswear-t-shirt-01.jpg', 'sportswear-t-shirt-nt02.jpg', 'XXL', 17, 'Áo thun thể thao Nike tạo cho bạn một chiếc áo cotton mềm mại và logo cổ điển trên ngực áo.', 99, '2020-06-13 05:29:36', '2020-07-23 10:04:53'),
(14, 'NikeCourt Dri FIT', 'nikecourtdrifit', 1199000, 0, 'Ao1.jpg', 'Ao2.jpg', 'XL', 17, 'With sweat-wicking, 100% recycled fabric and a design that\'s made for movement, the NikeCourt Dri-FIT Polo is your first choice for the court. This product is made from at least 75% recycled polyester.', 15, '2020-06-13 05:32:17', '2020-07-18 05:38:44'),
(15, 'Nike Dri FIT', 'nikedrifit', 659000, 0, 'dri-fit-classic-basketball-jersey-gZ1Bk1.jpg', 'dri-fit-classic-basketball-jersey-gZ1Bk2.jpg', 'XXL', 17, 'Nike Dri-FIT Tank được làm từ vải mềm, thấm mồ hôi trong một cấu hình không tay để giúp bạn thoải mái và di chuyển tự do trong suốt quá trình tập luyện.', 100, '2020-06-13 05:34:31', '2020-07-18 05:40:54'),
(16, 'Men\'s Short Sleeve', 'mensshortsleeve', 659000, 0, 'pro-short-sleeve-top-NQKZts1.jpg', 'pro-short-sleeve-top-NQKZts2.jpg', 'XL', 17, 'Nike Pro Top có Công nghệ Dri-FIT giúp bạn khô ráo và thoải mái.', 100, '2020-06-13 05:35:54', '2020-07-18 05:42:02'),
(17, 'Nike Dri FIT Classic', 'nikedrifitclassic', 819000, 0, 'dri-fit-training-tank-brmLc1.jpg', 'dri-fit-training-tank-brmLc2.jpg', 'XXL', 17, 'Nike Dri-FIT Classic kết hợp thiết kế hiệu suất với phong cách bóng rổ theo phong cách sống. Nó được làm từ vải lưới thấm mồ hôi tạo cảm giác mềm mại và nhẹ.', 100, '2020-06-13 05:37:28', '2020-07-18 05:43:05'),
(18, 'Nike Exploration Series', 'nikeexplorationseries', 819000, 99, 'sportswear-t-shirt-s1.jpg', 'sportswear-t-shirt-zmMkxS2.jpg', 'L', 17, 'áo phông Nike Explective Series. Được làm từ bông nhẹ, đan nhẹ, nó có đồ họa lấy cảm hứng từ màu sắc và cảnh quan xung quanh Phoenix, Arizona, Hoa Kỳ.', 20, '2020-06-13 05:39:24', '2020-07-18 05:43:48'),
(22, 'LeBron 17 ', 'lebron17', 5210505, 2, 'lebron-17-graffiti-basketball-shoe-DkNN8W.jpg', 'lebron-17-graffiti-basketball-shoe-DkNN8W (1).jpg', '42', 25, 'Taking cues from one of the most coveted LeBron 4 colorways, the LeBron 17 \"Grafﬁti\" pushes the boundaries of both past and present by combining elements from both signature shoes. The LeBron 17’s integrated tech—overlaid with a freestyle interpretation of LeBron’s personal values in the LeBron 4’s recognizable grafﬁti style—draws inspiration from the rhythm, art and culture of New York City’s streets, with lettering inspired by the iconography of the Big Apple.', 20, '2020-07-01 02:50:11', '2020-07-18 05:43:41'),
(23, 'Kyrie 6 N7', 'kyrie6n7', 3000000, 20, 'kyrie-6-n7-basketball-shoe-n61njg.jpg', 'kyrie-6-n7-basketball-shoe-n61njg (1).jpg', '41', 25, 'We each have a story to tell. Distinct symbols on the Kyrie 6 N7 reflect Kyrie Irving’s personal journey and reconnection to his indigenous roots. A star representing his community is inspired by the long history of Lakota quilt design. The mountain stands for his Lakota name, Hela or Little Mountain—symbols of strength Kyrie carries with him on and off the court.', 18, '2020-07-01 02:53:22', '2020-07-23 10:04:53'),
(24, 'LeBron Witness 4', 'lebronwitness4', 5300000, 0, 'lebron-witness-4-basketball-shoe-7zfgGM.jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (1).jpg', '43', 25, 'Be a force on the court in the LeBron Witness 4, a great fit for powerful players who want good ankle support but still feel light. The sculpted, padded collar and exterior heel counter provide a stable fit, while visible cushioning units under the forefoot return energy with every step.', 20, '2020-07-01 02:54:52', '2020-07-18 05:44:07'),
(25, 'LeBron Witness 4\'', 'lebronwitness4', 7200000, 0, 'lebron-witness-4-basketball-shoe-7zfgGM (2).jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (3).jpg', '40', 25, 'Be a force on the court in the LeBron Witness 4, a great fit for powerful players who want good ankle support but still feel light. The sculpted, padded collar and exterior heel counter provide a stable fit, while visible cushioning units under the forefoot return energy with every step.', 20, '2020-07-01 02:56:50', '2020-07-18 05:43:32'),
(26, 'Nike Precision 4', 'nikeprecision4', 4973000, 10, 'precision-4-basketball-shoe-N8ZKrT.jpg', 'precision-4-basketball-shoe-N8ZKrT (1).jpg', '43', 25, 'The quicker players are in and out of cuts, the easier it is to keep the defense off balance. The Nike Precision 4 combines a racer look with a low-profile design, so you can make the most of your speed and agility during games.', 50, '2020-07-01 02:58:35', '2020-07-18 05:43:55'),
(27, 'Nike Precision 4', 'nikeprecision4', 4730000, 10, 'precision-4-basketball-shoe-N8ZKrT (2).jpg', 'precision-4-basketball-shoe-N8ZKrT (3).jpg', '41', 25, 'The quicker players are in and out of cuts, the easier it is to keep the defense off balance. The Nike Precision 4 combines a racer look with a low-profile design, so you can make the most of your speed and agility during games.', 30, '2020-07-01 03:00:06', '2020-07-18 05:44:00'),
(28, 'LeBron 17 I Promise', 'lebron17ipromise', 4900000, 0, 'lebron-17-i-promise-basketball-shoe-DcJ6sx.jpg', 'lebron-17-i-promise-basketball-shoe-DcJ6sx (1).jpg', '40', 25, 'The LeBron 17 I Promise harnesses LeBron\'s strength and speed with containment and support for all-court domination. It features a lightweight mix of knit and heat-molded yarns that give each one a durable look and feel. Combined cushioning provides LeBron with the impact support and responsive energy return he needs to power through the long season.', 20, '2020-07-01 03:01:26', '2020-07-18 05:44:12'),
(29, 'LeBron 7 QS', 'lebron7qs', 4200000, 0, 'lebron-7-qs-mens-shoe-DN0BJz.jpg', 'lebron-7-qs-mens-shoe-DN0BJz (1).jpg', '45', 25, 'Make your head-turning journey to the top comfortable. Built strong and sleek, the LeBron 7 QS features a mix of materials on the upper for a look that lasts. Metal accents and multiple LeBron crests celebrate a king, while full-length cushioning graces your every step.', 20, '2020-07-01 03:03:23', '2020-07-18 05:44:19'),
(30, 'LeBron 7 QS', 'lebron7qs', 4100000, 5, 'lebron-7-qs-mens-shoe-DN0BJz (2).jpg', 'lebron-7-qs-mens-shoe-DN0BJz (3).jpg', '40', 25, 'Make your head-turning journey to the top comfortable. Built strong and sleek, the LeBron 7 QS features a mix of materials on the upper for a look that lasts. Metal accents and multiple LeBron crests celebrate a king, while full-length cushioning graces your every step.', 20, '2020-07-01 03:04:14', '2020-07-18 05:40:37'),
(31, 'LeBron 17 Low Tune Squad', 'lebron17lowtunesquad', 3900000, 0, 'lebron-17-low-tune-squad-basketball-shoe-fHcqqM.jpg', 'lebron-witness-4-basketball-shoe-7zfgGM (1).jpg', '41', 25, 'Monstars beware, the newest starting forward for the Tune Squad has just crash-landed in Chicago for All-Star. LBJ is here and he’s poised to outplay everyone in the galaxy. The LeBron 17 Low Tune Squad channels the vibrant (and furry) energy of his Tune Squad teammates with a special nod to his favorite point guard’s iconic catchphrase, “What’s up, Doc?”. LeBron is leading the Tune Squad to the winner’s circle and with the season halfway complete, he and his team have their sights set on capturing more rings than the Looney Tunes logo.', 30, '2020-07-01 03:06:00', '2020-07-18 05:45:07'),
(32, 'Nike Mercurial Vapor 13 Elite Neymar Jr. FG', 'nikemercurialvapor13eliteneymarjrfg', 3800000, 0, 'mercurial-vapor-13-elite-neymar-jr-fg-firm-ground-soccer-cleat-HvrF9w.jpg', 'mercurial-vapor-13-elite-neymar-jr-fg-firm-ground-soccer-cleat-HvrF9w (1).jpg', '43', 33, 'Building on the 360 innovation of the 12, the Nike Mercurial Vapor 13 Elite Neymar Jr. FG adds a Nike Aerotrak zone to the forefoot and a slightly stiffer chassis to help supercharge traction. Inside, an insole with NikeGrip technology provides maximum interior traction underfoot and lightweight cushioning.', 20, '2020-07-01 03:08:14', '2020-07-18 05:44:51'),
(33, 'Nike Phantom Vision Elite Dynamic Fit FG', 'nikephantomvisionelitedynamicfitfg', 3500000, 30, 'phantom-vision-elite-dynamic-fit-fg-firm-ground-soccer-cleat-19Kv1V.jpg', 'phantom-vision-elite-dynamic-fit-fg-firm-ground-soccer-cleat-19Kv1V (1).jpg', '43', 33, 'The Nike Phantom Vision Elite Dynamic Fit FG brings the fierce precision of street play to the pitch. A foot-hugging inner sleeve is concealed in a Flyknit constructed outer layer to create a cleat for the finishers, the providers and the battlers of tomorrow\'s game.', 30, '2020-07-01 03:09:39', '2020-07-18 05:45:36'),
(34, 'Nike Mercurial Superfly 7 Elite MDS FG', 'nikemercurialsuperfly7elitemdsfg', 4760000, 0, 'mercurial-superfly-7-elite-mds-fg-firm-ground-soccer-cleat-Xgb9Qw.jpg', 'mercurial-superfly-7-elite-mds-fg-firm-ground-soccer-cleat-Xgb9Qw (1).jpg', '42', 33, 'Dream of speed and play fast in the Nike Mercurial Superfly 7 Elite MDS FG. A streamlined upper combines with a Nike Aerotrak zone for high-speed play and supercharged traction.', 30, '2020-07-01 03:12:06', '2020-07-18 05:44:57'),
(35, 'Nike Tiempo Legend 7 Elite FG', 'niketiempolegend7elitefg', 3800000, 0, 'tiempo-legend-7-elite-fg-firm-ground-soccer-cleat-BDw2WJ.jpg', 'tiempo-legend-7-elite-fg-firm-ground-soccer-cleat-BDw2WJ (1).jpg', '45', 33, 'The Nike Tiempo Legend 7 Elite FG elevates a classic by adding a new ultra-soft leather and, for the first time in Tiempo history, a Flyknit constructed heel and midfoot with Flywire cables. It’s legendary fit, touch and traction—evolved.', 30, '2020-07-01 03:13:29', '2020-07-18 05:45:22'),
(36, 'Nike Mercurial Superfly 7 Club MG', 'nikemercurialsuperfly7clubmg', 890000, 0, 'mercurial-superfly-7-club-mg-multi-ground-soccer-cleat-rF5V10.jpg', 'mercurial-superfly-7-club-mg-multi-ground-soccer-cleat-rF5V10 (1).jpg', '42', 33, 'The Nike Mercurial Superfly 7 Club MG wraps your foot for streamlined speed. A versatile multi-ground plate provides traction on natural- and artificial-grass surfaces.', 30, '2020-07-01 03:15:08', '2020-07-18 05:46:08'),
(37, 'Nike SuperflyX 6 Elite IC Game Over', 'nikesuperflyx6eliteicgameover', 1200000, 0, 'superflyx-6-elite-ic-game-over-mens-indoor-court-soccer-cleat-JkTG4LGj.jpg', 'superflyx-6-elite-ic-game-over-mens-indoor-court-soccer-cleat-JkTG4LGj (1).jpg', '43', 33, 'Pretty good, tight fit what you’d expect from a superfly definelty true to size if you want a perfect fit.', 20, '2020-07-01 03:17:44', '2020-07-18 05:46:00'),
(38, 'Nike Superfly 6 Pro FG', 'nikesuperfly6profg', 2400000, 26, 'superfly-6-pro-fg-firm-ground-soccer-cleat-k1DVez.jpg', 'superfly-6-pro-fg-firm-ground-soccer-cleat-k1DVez (1).jpg', '43', 33, 'The micro-textured, premium synthetic and fabric upper of the Nike Superfly 6 Pro FG wraps underneath your foot for a second-skin-like fit. A 2-part podular plate system utilizes chevron studs for speed in every step, while embossed speed ribs from heel to toe make your boot look as fast as you feel.', 20, '2020-07-01 03:19:13', '2020-07-18 05:49:45'),
(39, 'Nike Mercurial Vapor 13 Academy Neymar Jr. MG', 'nikemercurialvapor13academyneymarjrmg', 3800000, 10, 'mercurial-vapor-13-academy-neymar-jr-mg-multi-ground-soccer-cleat-jRKr6D.jpg', 'mercurial-vapor-13-academy-neymar-jr-mg-multi-ground-soccer-cleat-jRKr6D (1).jpg', '44', 33, 'The Nike Mercurial Vapor 13 Academy Neymar Jr. MG is built for fast play and adds a versatile multi-ground plate that provides traction on natural- and artificial-grass surfaces.\r\n\r\n', 19, '2020-07-01 03:20:35', '2020-07-18 05:49:54'),
(40, 'Nike Jr. Mercurial Superfly 7 Academy CR7 Safari MG', 'nikejrmercurialsuperfly7academycr7safarimg', 6999999, 69, 'jr-mercurial-superfly-7-academy-cr7-safari-mg-little-big-kids-multi-ground-soccer-cleat-LKB8WB.jpg', '12315.jpg', '44', 33, 'The Nike Jr. Mercurial Superfly 7 Academy CR7 Safari MG brings back an iconic colorway worn by Cristiano Ronaldo. A textured material and stretchy collar wrap your foot for streamlined speed, while a versatile plate provides explosive traction on a variety of surfaces.', 20, '2020-07-01 03:23:16', '2020-07-18 05:50:48'),
(41, 'LeBron 17 I Promise', 'lebron17ipromise', 4900000, 0, 'lebron-17-i-promise-basketball-shoe-DcJ6sx.jpg', 'lebron-17-i-promise-basketball-shoe-DcJ6sx (1).jpg', '43', 33, 'The LeBron 17 I Promise harnesses LeBron\'s strength and speed with containment and support for all-court domination. It features a lightweight mix of knit and heat-molded yarns that give each one a durable look and feel. Combined cushioning provides LeBron with the impact support and responsive energy return he needs to power through the long season.', 20, '2020-07-01 03:29:27', '2020-07-18 05:51:14'),
(42, 'Nike Sportswear City Edition', 'nikesportswearcityedition', 637000, 15, 'sportswear-city-edition-mens-woven-shorts-mTgTN6.jpg', 'sportswear-city-edition-mens-woven-shorts-mTgTN6 (1).jpg', 'XL', 21, 'Featuring a tonal color-block design, the Nike Sportswear Shorts give you a classic look with simple, street-ready style. Crafted from a lightweight woven fabric and soft mesh lining, they\'ve got you covered for all-day comfort.', 19, '2020-07-01 03:32:37', '2020-07-23 10:04:53'),
(43, 'Nike Sportswear Alumni', 'nikesportswearalumni', 730000, 0, 'sportswear-alumni-mens-shorts-7sxFP2.jpg', 'sportswear-alumni-mens-shorts-7sxFP2 (1).jpg', 'XXL', 21, 'The Nike Sportswear Alumni Shorts are designed with raw edges around the pockets and hem for a laid back look. The color-block design gives you bold, street-ready style.', 19, '2020-07-01 03:34:28', '2020-07-18 05:51:23'),
(44, 'Nike Dri FIT', 'nikedrifit', 365000, 5, 'dri-fit-mens-training-shorts-2KTr7KBn.jpg', 'dri-fit-mens-training-shorts-2KTr7KBn (1).jpg', 'XL', 21, 'The Men\'s Nike Dry Shorts let you take training to the next level with sweat management and motion vents that allow you to move freely and comfortably.', 27, '2020-07-01 03:35:50', '2020-07-18 05:52:21'),
(45, 'Nike Flight', 'nikeflight', 386000, 0, 'flight-basketball-shorts-1bBMrk.jpg', 'flight-basketball-shorts-1bBMrk (1).jpg', 'L', 21, 'Inspired by the iconic \'90s Flight Series, the Nike Flight Shorts offer an audacious look and feel with an authentic basketball design. Made with lightweight woven fabric and a mesh lining, they feature a Flight logo cut and stitched into the design.', 20, '2020-07-01 03:38:15', '2020-07-18 05:55:21'),
(46, 'Nike Flight', 'nikeflight', 436000, 0, 'flight-basketball-shorts-1bBMrk (2).jpg', 'flight-basketball-shorts-1bBMrk (3).jpg', 'XL', 21, 'Inspired by the iconic \'90s Flight Series, the Nike Flight Shorts offer an audacious look and feel with an authentic basketball design. Made with lightweight woven fabric and a mesh lining, they feature a Flight logo cut and stitched into the design.', 18, '2020-07-01 03:39:11', '2020-07-19 02:53:16'),
(47, 'Nike Flex', 'nikeflex', 530000, 40, 'flex-mens-training-shorts-3jGZS9.jpg', 'flex-mens-training-shorts-3jGZS9 (1).jpg', 'XL', 21, 'Made with lightweight heathered fabric, the Nike Flex Shorts move with your body through your most intense workouts. Mesh at the sides keep air flowing to help you stay cool when your routine heats up.', 20, '2020-07-01 03:40:17', '2020-07-18 05:52:32'),
(48, 'Backpack', 'backpack', 100000, 0, 'Backpack 1300.jpg', 'Backpack.jpg', 'XXXL', 27, 'Túi.', 10, '2020-07-01 08:17:44', '2020-07-18 05:40:27'),
(49, 'Nike Dri FIT Kyrie', 'nikedrifitkyrie', 1125000, 0, 'Nike Dri-FIT Kyrie 1125000.jpg', 'Nike Dri-FIT Kyrie.jpg', 'L', 17, 'Nike Dri-FIT Kyrie', 20, '2020-07-01 15:22:38', '2020-07-18 05:52:43'),
(50, '3 STRIPES CLUB TEE', '3stripesclubtee', 700000, 0, '3-STRIPES CLUB TEE 700.jpg', '3-STRIPES CLUB TEE.jpg', 'XL', 18, '3-STRIPES CLUB TEE', 20, '2020-07-01 15:33:03', '2020-07-18 05:52:49'),
(51, '3STRIPES CLUB TEE ', '3stripesclubtee', 700000, 0, '3-STRIPES CLUB TEE B700.jpg', '3-STRIPES CLUB TEE B.jpg', 'L', 18, '3-STRIPES CLUB TEE ', 20, '2020-07-01 15:35:22', '2020-07-18 05:51:58'),
(52, '3STRIPES TEE', '3stripestee', 625000, 0, '3-STRIPES TEE 625.jpg', '3-STRIPES TEE.jpg', 'L', 18, '3-STRIPES TEE', 20, '2020-07-01 15:36:26', '2020-07-18 05:53:12'),
(53, 'ADICOLOR 3D TREFOIL 3 STRIPES TEE', 'adicolor3dtrefoil3stripestee', 875000, 0, 'ADICOLOR 3D TREFOIL 3-STRIPES TEE 875000.jpg', 'Adicolor_3D_Trefoil_3_Stripes_Tee_Black_GE0836_23_hover_model.jpg', 'XL', 18, 'ADICOLOR 3D TREFOIL 3-STRIPES TEE', 10, '2020-07-01 15:37:29', '2020-07-18 05:53:51'),
(54, 'CAMO TREFOIL TEE', 'camotrefoiltee', 750000, 0, 'CAMO TREFOIL TEE 750.jpg', 'CAMO TREFOIL TEE.jpg', 'L', 18, 'CAMO TREFOIL TEE', 10, '2020-07-01 15:38:31', '2020-07-18 05:54:07'),
(55, 'MEN VOLLEYBALL GRAPHIC LOGO TSHIRT', 'menvolleyballgraphiclogotshirt', 700000, 0, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT 700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT.jpg', 'L', 18, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT', 10, '2020-07-01 15:39:12', '2020-07-18 05:55:35'),
(56, 'MEN VOLLEYBALL GRAPHIC LOGO TSHIRT ', 'menvolleyballgraphiclogotshirt', 700000, 0, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W700.jpg', 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT W.jpg', 'XL', 18, 'MEN VOLLEYBALL GRAPHIC LOGO T-SHIRT ', 10, '2020-07-01 15:39:54', '2020-07-18 05:56:41'),
(57, 'SHMOO LOGO TEE', 'shmoologotee', 500000, 20, 'SHMOO LOGO TEE 500000.jpg', 'SHMOO LOGO TEE.jpg', 'XXXL', 18, 'SHMOO LOGO TEE', 17, '2020-07-01 15:40:59', '2020-07-18 08:30:21'),
(58, 'SHMOO LOGO TEE ', 'shmoologotee', 1000000, 0, 'SHMOO LOGO TEE Y1000000.jpg', 'SHMOO LOGO TEE Y.jpg', 'XL', 18, 'SHMOO LOGO TEE ', 100, '2020-07-01 15:42:24', '2020-07-18 05:59:36'),
(59, 'HEAT.RDY CLUB TEE', 'heatrdyclubtee', 1250000, 0, 'HEAT.RDY CLUB TEE 1250.jpg', 'HEAT.RDY CLUB TEE.jpg', 'L', 18, 'HEAT.RDY CLUB TEE', 20, '2020-07-01 15:43:00', '2020-07-18 05:51:04'),
(60, 'Nike', 'nike', 1625000, 0, 'Nike 1625.jpg', 'Nike.jpg', 'L', 21, 'Nike', 20, '2020-07-01 15:44:05', '2020-07-18 05:57:56'),
(61, 'Nike Air', 'nikeair', 1640000, 0, 'Nike Air 1640.jpg', 'Nike Air.jpg', 'L', 21, 'Nike Air', 10, '2020-07-01 15:46:59', '2020-07-18 06:01:01'),
(62, 'NikeCourt DriFIT', 'nikecourtdrifit', 1500000, 0, 'NikeCourt Dri-FIT 1500.jpg', 'NikeCourt Dri-FIT.jpg', 'L', 21, 'NikeCourt Dri-FIT', 20, '2020-07-01 15:49:12', '2020-07-18 05:55:47'),
(63, 'Nike DriFIT', 'nikedrifit', 2500000, 0, 'Nike Dri-FIT 2500.jpg', 'Nike Dri-FIT.jpg', 'L', 21, 'Nike Dri-FIT', 20, '2020-07-01 15:50:11', '2020-07-18 05:58:07'),
(64, 'Nike Air', 'nikeair', 1640000, 0, 'Nike Air 1640.jpg', 'Nike Air.jpg', 'XXL', 21, 'Nike Air', 20, '2020-07-01 15:51:24', '2020-07-18 05:58:30'),
(96, 'Áo thể thao adidas nam FM6097', 'aothethaoadidasnamfm6097', 560000, 0, 'ao-the-thao-adidas-nam-fm6097.jpg', 'ao-the-thao-adidas-nam-fl3950-m-mh-plain-tee.jpg', 'SML', 31, 'Áo này đẹp cực!', 100, '2020-07-19 10:35:50', '2020-07-19 10:40:47'),
(66, '3D TREFOIL 3STRIPES SWEAT SHORTS', '3dtrefoil3stripessweatshorts', 1125000, 0, '3D TREFOIL 3-STRIPES SWEAT SHORTS 1125.jpg', '3D TREFOIL 3-STRIPES SWEAT SHORTS.jpg', 'L', 22, '3D TREFOIL 3-STRIPES SWEAT SHORTS', 50, '2020-07-01 15:52:54', '2020-07-18 06:00:00'),
(67, 'CLUB SHORTS 9INCH', 'clubshorts9inch', 700000, 0, 'CLUB SHORTS 9-INCH 700.jpg', 'CLUB SHORTS 9-INCH.jpg', 'S', 22, 'CLUB SHORTS 9-INCH', 50, '2020-07-01 15:53:26', '2020-07-18 05:54:56'),
(68, 'O SHAPE PANTS', 'oshapepants', 1200000, 0, 'O SHAPE PANTS 1200.jpg', 'O SHAPE PANTS.jpg', 'L', 22, 'O SHAPE PANTS', 20, '2020-07-01 15:54:00', '2020-07-18 05:52:10'),
(69, 'O SHAPE PANTS ', 'oshapepants', 1200000, 0, 'O SHAPE PANTS R1200.jpg', 'O SHAPE PANTS R.jpg', 'L', 22, 'O SHAPE PANTS ', 10, '2020-07-01 15:54:33', '2020-07-18 05:56:53'),
(70, 'PANEL TREFOIL SHORTS', 'paneltrefoilshorts', 1225000, 0, 'PANEL TREFOIL SHORTS 1225.jpg', 'PANEL TREFOIL SHORTS.jpg', 'L', 22, 'PANEL TREFOIL SHORTS', 20, '2020-07-01 15:55:07', '2020-07-18 05:54:34'),
(71, 'PRIDE 4KRFT SHORTS', 'pride4krftshorts', 850000, 0, 'PRIDE 4KRFT SHORTS 850.jpg', 'PRIDE 4KRFT SHORTS.jpg', 'L', 22, 'PRIDE 4KRFT SHORTS', 20, '2020-07-01 15:55:58', '2020-07-18 05:56:12'),
(72, 'SHMOO TERRY SHORTS', 'shmooterryshorts', 1050000, 0, 'SHMOO TERRY SHORTS 1050.jpg', 'SHMOO TERRY SHORTS.jpg', 'L', 22, 'SHMOO TERRY SHORTS', 20, '2020-07-01 15:56:41', '2020-07-18 05:46:40'),
(74, 'TIRO 19 TRAINING PANTS ', 'tiro19trainingpants', 900000, 10, 'TIRO 19 TRAINING PANTS B900.jpg', 'TIRO 19 TRAINING PANTS B.jpg', 'L', 22, 'TIRO 19 TRAINING PANTS ', 49, '2020-07-01 15:58:18', '2020-07-18 05:59:10'),
(75, 'ZENO BIG TREFOIL SHORTS', 'zenobigtrefoilshorts', 850000, 20, 'ZENO BIG TREFOIL SHORTS 850.jpg', 'ZENO BIG TREFOIL SHORTS.jpg', 'L', 22, 'ZENO BIG TREFOIL SHORTS', 19, '2020-07-01 15:58:58', '2020-07-18 05:58:17'),
(76, 'Nike Air Force 1 \'07 ', 'nikeairforce107', 3750000, 0, 'Nike Air Force 1 \'07 3750.jpg', 'Nike Air Force 1 \'07 3.jpg', '45', 25, 'Nike Air Force 1 \'07 ', 50, '2020-07-01 16:00:46', '2020-07-18 05:57:19'),
(79, 'Nike Zoom Pegasus Turbo 2', 'nikezoompegasusturbo2', 6500000, 0, 'Nike Zoom Pegasus Turbo 2 6500.jpg', 'Nike Zoom Pegasus Turbo 2.jpg', '39', 25, 'Nike Zoom Pegasus Turbo 2', 50, '2020-07-01 16:15:48', '2020-07-18 05:59:26'),
(80, 'Nike Air VaporMax Flyknit 3', 'nikeairvapormaxflyknit3', 7125000, 0, 'Nike Air VaporMax Flyknit 3 7125.jpg', 'Nike Air VaporMax Flyknit 3.jpg', '42', 25, 'Nike Air VaporMax Flyknit 3', 19, '2020-07-01 16:19:13', '2020-07-18 06:00:29'),
(81, 'Nike Jr. Mercurial Superfly 7 Academy MG', 'nikejrmercurialsuperfly7academymg', 2900000, 0, 'Nike Jr. Mercurial Superfly 7 Academy MG 2900.jpg', 'Nike Jr. Mercurial Superfly 7 Academy MG.jpg', '43', 33, 'Nike Jr. Mercurial Superfly 7 Academy MG', 20, '2020-07-01 16:20:26', '2020-07-18 05:54:22'),
(82, 'Nike Mercurial Vapor 13 Academy MDS MG', 'nikemercurialvapor13academymdsmg', 2250000, 20, 'Nike Mercurial Vapor 13 Academy MDS MG 2250.jpg', 'Nike Mercurial Vapor 13 Academy MDS MG.jpg', '43', 33, 'Nike Mercurial Vapor 13 Academy MDS MG', 17, '2020-07-01 16:21:06', '2020-07-18 08:30:21'),
(83, 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG', 'nikejrmercurialsuperfly7clubcr7safarimg', 2250000, 0, 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG 2250.jpg', 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG.jpg', '39', 33, 'Nike Jr. Mercurial Superfly 7 Club CR7 Safari MG', 20, '2020-07-01 16:22:21', '2020-07-18 05:56:01'),
(84, 'Brazil Stadium', 'brazilstadium', 700000, 10, 'Brazil Stadium 700.jpg', 'Brazil Stadium.jpg', 'L', 27, 'Brazil Stadium', 20, '2020-07-01 16:23:25', '2020-07-18 05:58:43'),
(85, 'Nike Brasilia', 'nikebrasilia', 1300000, 0, 'Nike Brasilia 1300.jpg', 'Nike Brasilia.jpg', 'XL', 27, 'Nike Brasilia', 19, '2020-07-01 16:24:04', '2020-07-18 06:01:22'),
(86, 'Nike Brasilia', 'nikebrasilia', 1600000, 0, 'Nike Brasilia 1600.jpg', 'Nike Brasilia B.jpg', 'L', 27, 'Nike Brasilia', 20, '2020-07-01 16:24:38', '2020-07-18 06:02:08'),
(87, 'Nike Graphic', 'nikegraphic', 300000, 0, 'Nike Graphic 300.jpg', 'Nike Graphic.jpg', 'L', 27, 'Nike Graphic', 20, '2020-07-01 16:25:14', '2020-07-18 06:00:37'),
(88, 'Nike Gym Club', 'nikegymclub', 11000000, 0, 'Nike Gym Club 1100.jpg', 'Nike Gym Club.jpg', 'XL', 27, 'Nike Gym Club', 100, '2020-07-01 16:25:52', '2020-07-18 06:02:20'),
(89, 'Nike Gym Club', 'nikegymclub', 1100000, 0, 'Nike Gym Club B1100.jpg', 'Nike Gym Club B.jpg', 'XL', 27, 'Nike Gym Club', 100, '2020-07-01 16:26:21', '2020-07-18 05:57:39'),
(90, 'Nike Shoebox', 'nikeshoebox', 1000000, 0, 'Nike Shoebox 1000.jpg', 'Nike Shoebox.jpg', 'M', 27, 'Nike Shoebox', 100, '2020-07-01 16:26:57', '2020-07-18 05:55:14'),
(91, 'Nike Gym Club ', 'nikegymclub', 1100000, 50, 'Nike Gym Club W1100.jpg', 'Nike Gym Club W.jpg', 'L', 27, 'Nike Gym Club ', 100, '2020-07-01 16:27:39', '2020-07-18 05:56:28'),
(92, 'Nike Graphic', 'nikegraphic', 300000, 10, 'Nike Graphic 300.jpg', 'Nike Graphic.jpg', 'XL', 27, 'Nike Graphic', 100, '2020-07-01 16:28:18', '2020-07-18 06:01:36'),
(93, 'Nike Swoosh', 'nikeswoosh', 250000, 10, 'Nike Swoosh 250.jpg', 'Nike Swoosh.jpg', 'L', 28, 'Nike Swoosh', 97, '2020-07-01 16:30:59', '2020-07-18 05:47:18'),
(94, 'Nike Swoosh', 'nikeswoosh', 250000, 0, 'Nike Swoosh.jpg', 'Nike Swoosh 250.jpg', 'XL', 28, 'Nike Swoosh', 100, '2020-07-01 16:31:32', '2020-07-18 05:40:09'),
(95, 'Jordan Jumpman ', 'jordanjumpman', 750000, 0, 'Jordan Jumpman 750.jpg', 'Jordan Jumpman 750.jpg', 'X', 28, 'Jordan Jumpman', 100, '2020-07-01 16:32:37', '2020-07-18 05:39:42'),
(97, 'Áo thể thao adidas nam EJ0927', 'aothethaoadidasnamej0927', 570000, 20, 'ao-the-thao-adidas-nam-ej0927.jpg', 'ao-the-thao-adidas-nam-fm6097 (1).jpg', 'XS', 31, 'Áo này cực đẹp luôn.', 100, '2020-07-19 10:42:38', '2020-07-19 10:42:38'),
(98, 'Áo thể thao adidas nam FM5439 M MH BD POLO', 'aothethaoadidasnamfm5439mmhbdpolo', 550000, 0, 'ao-the-thao-adidas-nam-fm5442-m-mh-bd-polo.jpg', 'ao-the-thao-adidas-nam-fm5439-m-mh-bd-polo.jpg', 'M', 31, 'Đẹp chưa từng thấy luôn', 20, '2020-07-19 10:47:22', '2020-07-19 10:47:22'),
(99, 'Áo không cổ ngắn tay Nike AS M NK BRTHE RISE 365 SS', 'aokhongcongantaynikeasmnkbrtherise365ss', 1150000, 30, 'ao-khong-co-ngan-tay-nike-as-m-nk-dry-miler-ss-jacquard.jpg', 'ao-khong-co-ngan-tay-nike-as-m-nk-brthe-rise-365-ss.jpg', 'M', 31, 'Không cổ tay ngắn cực phẩm mùa hè ', 100, '2020-07-19 10:49:41', '2020-07-19 10:49:41'),
(100, 'Áo MU đỏ 2019 2020 hàng Thái Lan sân nhà', 'aomudo20192020hangthailansannha', 195000, 0, 'Ao-mu-san-nha-1-3.jpg', 'Ao-mu-san-nha-2-3.jpg', 'SML', 20, 'Trăm năm Kiều vẫn là Kiều, MU vô đối là điều hiển nhiên!', 25, '2020-07-19 10:53:21', '2020-07-19 10:57:23'),
(101, 'Áo MU sân khách 2019  2020', 'aomusankhach20192020', 9000000, 0, 'Ao-mu-san-khach-1-2.jpg', 'Ao-mu-san-khach-2-2.jpg', 'M', 20, 'Quỷ Đỏ ', 70, '2020-07-19 10:56:14', '2020-07-19 10:56:49'),
(102, 'Áo Liverpool sân nhà hàng Thái Lan 2019  2020', 'aoliverpoolsannhahangthailan20192020', 1000, 0, 'Ao-liverpool-san-nha-1-2.jpg', 'Ao-liverpool-san-nha-2-2.jpg', 'S', 20, 'The Losers', 2, '2020-07-19 10:59:49', '2020-07-19 10:59:49'),
(120, 'EZRUN Men\'s Tank Tops Quick Dry Athletic', 'ezrunmenstanktopsquickdryathletic', 900000, 0, 'mt1.jpg', 'ms1.jpg', 'M', 37, 'Đào tạo Áo tập thể dục cho phòng tập thể hình Thể hình Thể hình Chạy bộ Chạy bộ', 32, '2020-07-19 16:25:17', '2020-07-19 16:25:17'),
(105, 'Nike Mens Fitness Workout Tank Top', 'nikemensfitnessworkouttanktop', 670000, 30, 'mt-áo bóng rổ Nike Mens Fitness Workout Tank Top.jpg', 'ms-áo bóng rổ Nike Mens Fitness Workout Tank Top.jpg', 'XL', 37, 'Nike Mens Fitness Workout Tank Top sản phẩm mang thương hiệu Nike được sản suất tại mỹ', 17, '2020-07-19 15:14:15', '2020-07-21 07:54:45'),
(119, 'APRAW Men\'s Basketball Muscle Tank Top Mesh Quick Dry Fit Performance Gym Workout Sleeveless Shirts', 'aprawmensbasketballmuscletanktopmeshquickdryfitperformancegymworkoutsleevelessshirts', 333000, 0, 'mt.jpg', 'ms.jpg', 'XL', 37, 'áo bóng rổ thoáng mát giúp các cử động thoãi mái nhất', 33, '2020-07-19 16:22:57', '2020-07-19 16:22:57'),
(112, 'Áo Bóng Rổ Nam Jersey uniform Black Jartazi SGH03', 'aobongronamjerseyuniformblackjartazisgh03', 670000, 0, '04bb914b379b376347bc063f13ec0981.jpg', 'ms-402bedfdc25338710a432c960b678bcf.jpg', 'XL', 37, 'Áo Bóng Rổ Nam Jersey uniform Black Jartazi SGH03 được may từ chất liệu cao cấp, mềm mịn, khô thoáng, hỗ trợ tối đa cho các hoạt động thể dục, thể thao. Sản phẩm thiết kế thể thao, trẻ trung mang lại sự khỏe khoắn, năng động cho người mặc\r\nChất liệu vải Polyester mềm mại, thoáng mát\r\nỨng dụng công nghệ tiên tiến giúp sản phẩm có khả năng giữ nhiệt, chống bám bẩn, tránh gió, nước và kháng khuẩn\r\nÁo phù hợp đi chơi, du lịch và các hoạt động ngoài trời\r\nĐường may tỉ mỉ, chắc chắn\r\nCổ tròn, tay ngắn năng động', 35, '2020-07-19 15:45:49', '2020-07-19 15:45:49'),
(113, 'Áo Bóng Rổ Nam Nam Warm Up Short Sleeve Black Jartazi SGH21', 'aobongronamnamwarmupshortsleeveblackjartazisgh21', 440000, 0, 'mt-Áo Bóng Rổ Nam Nam Warm Up Short Sleeve Black Jartazi SGH21.jpg', 'ms-Áo Bóng Rổ Nam Nam Warm Up Short Sleeve Black Jartazi SGH21.jpg', 'S', 37, 'Áo Bóng Rổ Nam Nam Warm Up Short Sleeve Black Jartazi SGH21 được may từ chất liệu cao cấp, mềm mịn, khô thoáng, hỗ trợ tối đa cho các hoạt động thể dục, thể thao. Sản phẩm thiết kế thể thao, trẻ trung mang lại sự khỏe khoắn, năng động cho người mặc\r\nChất liệu vải Polyester mềm mại, thoáng mát\r\nỨng dụng công nghệ tiên tiến giúp sản phẩm có khả năng giữ nhiệt, chống bám bẩn, tránh gió, nước và kháng khuẩn\r\nÁo phù hợp đi chơi, du lịch và các hoạt động ngoài trời\r\nĐường may tỉ mỉ, chắc chắn\r\nCổ tròn, tay ngắn năng động', 67, '2020-07-19 15:49:01', '2020-07-19 15:49:01'),
(121, 'Under Armour Men\'s HeatGear Armour Sleeveless Compression', 'underarmourmensheatgeararmoursleevelesscompression', 990000, 0, 'mt2.jpg', 'ms2.jpg', 'XL', 37, 'Năng suất \r\n• 92% Polyester, 8% Elastane \r\n• Nhập khẩu \r\n• Máy giặt \r\n• Vải HeatGear, với tất cả các lợi ích của UA Nén, đủ thoải mái để mặc cả ngày \r\n• Tấm lưới nách kéo dài mang lại sự thông thoáng chiến lược \r\n• UPF 30 bảo vệ làn da của bạn khỏi các tia có hại của mặt trời \r\n• Xây dựng kéo dài 4 chiều di chuyển tốt hơn theo mọi hướng \r\n• Chất liệu thấm mồ hôi & khô rất nhanh', 200, '2020-07-19 16:29:41', '2020-07-19 16:29:41'),
(115, 'Nike Men\'s Dri Fit Utility Training Tank', 'nikemensdrifitutilitytrainingtank', 325000, 0, 'mt-áo bóng rổ Nike Men\'s Dri-Fit Utility Training Tank.jpg', 'ms-áo bóng rổ Nike Men\'s Dri-Fit Utility Training Tank.jpg', 'L', 37, 'sản phẩm thoáng mát', 9, '2020-07-19 16:05:55', '2020-07-19 16:05:55'),
(116, 'Nike Men\'s Dri Fit Miler Running Tank Black', 'nikemensdrifitmilerrunningtankblack', 678000, 0, 'mt-Nike Men\'s Dri Fit Miler Running Tank Black.jpg', 'ms-Nike Men\'s Dri Fit Miler Running Tank Black.jpg', 'XL', 37, 'Nike Men\'s Dri Fit Miler Running Tank Black/Reflective Silver Size Medium', 76, '2020-07-19 16:09:32', '2020-07-19 16:09:32'),
(117, 'adidas Men\'s Active Tank', 'adidasmensactivetank', 800000, 0, 'mt-adidas Men\'s Active Tank.jpg', 'ms-adidas Men\'s Active Tank.jpg', 'XL', 37, 'Năng suất \r\n• Slim fit vừa khít với cơ thể\r\n • Cổ thuyền \r\n• Tricot polyester tái chế 100% \r\n• Chiếc tank top này được làm bằng polyester tái chế để tiết kiệm tài nguyên và giảm khí thải \r\n• Vải Climalite thấm mồ hôi Mô hình sản phẩm của chúng tôi Tank top này được thực hiện để thống trị phá vỡ nhanh chóng và có được xô trong quá trình chuyển đổi thoải mái. Được làm bằng polyester tái chế, phần trên nhẹ được chế tạo bằng vải thấm mồ hôi và có thêm độ thông thoáng để giữ cho bạn khô ráo khi bạn chơi ly hợp kéo dài.', 12, '2020-07-19 16:13:34', '2020-07-19 16:13:34'),
(118, 'Amazon Essentials Men\'s Tech Stretch Performance Tank Top Shirt', 'amazonessentialsmenstechstretchperformancetanktopshirt', 377000, 0, 'mt-Amazon Essentials Men\'s Tech Stretch Performance Tank Top Shirt.jpg', 'ms-Amazon Essentials Men\'s Tech Stretch Performance Tank Top Shirt.jpg', 'XXL', 37, '• 95% Polyester, 5% Elastane \r\n• Nhập khẩu \r\n• Máy giặt \r\n• Rèn luyện sự tự tin với bể tập luyện hiệu suất thiết yếu này với hỗn hợp polyester co giãn công nghệ mềm và nhẹ, thúc đẩy luồng không khí giúp bạn mát mẻ và khô ráo \r\n• Vải dệt kim siêu mềm, thấm ẩm này cung cấp một lớp linh hoạt với độ lỏng và nhẹ phù hợp cho phạm vi chuyển động tối đa • Làm khô nhanh, thấm ẩm, đánh dấu logo phản chiếu \r\n• Thể thao trở nên tốt hơn: chúng tôi lắng nghe phản hồi của khách hàng và tinh chỉnh từng chi tiết để đảm bảo chất lượng, phù hợp và thoải mái', 33, '2020-07-19 16:16:39', '2020-07-19 16:16:39'),
(122, 'EZRUN Men\'s Quick Dry Sport Tank Top ', 'ezrunmensquickdrysporttanktop', 233000, 0, 'mt.jpg', 'ms.jpg', 'XL', 31, 'Tập thể hình Thể hình Chạy bộ thể thao Chạy bộ, Tập thể dục Tập thể dục Áo sơ mi không tay', 23, '2020-07-19 16:31:32', '2020-07-19 16:31:32'),
(124, 'EZRUN Men\'s Quick Dry Sport Tank Top', 'ezrunmensquickdrysporttanktop', 310000, 0, 'mt11.jpg', 'ms11.jpg', 'XL', 31, 'Bodybuilding Gym Athletic Jogging Running,Fitness Training Workout Sleeveless Shirts', 12, '2020-07-19 16:34:54', '2020-07-19 16:34:54'),
(125, 'Under Armour Men\'s Tech Short Sleeve', 'underarmourmenstechshortsleeve', 700000, 0, 'mt3.jpg', 'ms3.jpg', 'XL', 31, 'áo thể thao màu xanh', 70, '2020-07-19 16:42:28', '2020-07-19 16:42:28'),
(126, 'BALEAF Men\'s Long Sleeve Running Shirts', 'baleafmenslongsleeverunningshirts', 1500000, 0, 'mt4.jpg', 'ms4.jpg', 'S', 31, 'áo thể thao tay dài màu xám xanh', 11, '2020-07-19 16:43:09', '2020-07-19 16:43:09'),
(127, 'Men Dry Fit Short Sleeve T Shirt Moisture Wicking Gym Running Workout Athletic Shirts', 'mendryfitshortsleevetshirtmoisturewickinggymrunningworkoutathleticshirts', 769000, 0, 'mt5.jpg', 'ms5.jpg', 'L', 31, 'áo thể thao co giãn màu đen', 7, '2020-07-19 16:44:14', '2020-07-19 16:44:14'),
(128, 'HIBETY Men\'s Short Sleeve', 'hibetymensshortsleeve', 669900, 5, 'mt6.jpg', 'ms6.jpg', 'XXL', 31, 'áo giúp tàn hình trước đám đông', 111, '2020-07-19 16:46:51', '2020-07-19 16:46:51'),
(129, 'adidas Men\'s Soccer Arsenal Home Jersey', 'adidasmenssoccerarsenalhomejersey', 790000, 50, 'mt7.jpg', 'ms7.jpg', 'XXL', 20, 'tính năng\r\n• Climalite thấm mồ hôi để giữ cho bạn khô ráo trong mọi điều kiện \r\n• Phù hợp thường xuyên là rộng hơn ở cơ thể, với một hình bóng thẳng \r\n• Lưới chèn vào tay áo bên trong; Swimal-wicking vải thấm mồ hôi\r\n• Tay áo ngắn, cổ chữ V, mào Arsenal dệt \r\n• 50% polyester / 50% polyester mock polyester tái chế', 78, '2020-07-19 16:54:22', '2020-07-23 10:04:55'),
(130, 'adidas Juventus Adult Home Replica Jersey ', 'adidasjuventusadulthomereplicajersey', 455000, 0, 'mt8.jpg', 'ms8.jpg', 'L', 20, '• Phù hợp thường xuyên là rộng hơn ở cơ thể, với một hình bóng thẳng \r\n• Phi hành đoàn có gân \r\n• Tay áo ngắn \r\n• Khóa liên động 100% polyester tái chế \r\n• Áo này được làm bằng polyester tái chế để tiết kiệm tài nguyên và giảm khí thải', 55, '2020-07-19 16:55:49', '2020-07-19 16:55:49'),
(131, 'adidas Mens 2018 Spain Away Jersey', 'adidasmens2018spainawayjersey', 730000, 0, 'mt9.jpg', 'ms9.jpg', 'XXL', 20, '• Climalite thấm mồ hôi để giữ cho bạn khô ráo trong mọi điều kiện\r\n• Cổ chữ V có gân với chi tiết nghiêng; Băng cổ \r\n• 3 sọc trên vai; Dệt huy hiệu thể thao adidas trên ngực \r\n• Bản sao phù hợp được tạo cho người hâm mộ và cho bạn chỗ để di chuyển ở vai và cơ thể \r\n• 51% polyester / 49% polyester doubleknit tái chế', 11, '2020-07-19 16:58:39', '2020-07-19 16:58:39'),
(132, 'adidas Jrsy Ss M Replica MLS Men', 'adidasjrsyssmreplicamlsmen', 400000, 0, 'mt10.jpg', 'ms10.jpg', 'XL', 20, 'áo MLS', 4, '2020-07-19 17:05:11', '2020-07-19 17:05:11'),
(133, 'adidas MLS Mens Men', 'adidasmlsmensmen', 1000000, 0, 'mt12.jpg', 'ms12.jpg', 'L', 20, '...', 12, '2020-07-19 17:06:10', '2020-07-19 17:06:10'),
(134, 'Nike FC Barcelona Stadium Jersey with Sponsor', 'nikefcbarcelonastadiumjerseywithsponsor', 99999999, 70, 'mt13.jpg', 'ms13.jpg', 'XL', 20, '• 100% Polyester \r\n• Nhập khẩu \r\n• Sẽ được vận chuyển với các thẻ Nike đích thực. \r\n• Đảm bảo Nike chính hãng \r\n• Kích thước XL', 99, '2020-07-19 17:08:39', '2020-07-19 17:08:39'),
(135, 'PUMA Mens FIGC Italia Replica Home Football Jersey', 'pumamensfigcitaliareplicahomefootballjersey', 121000, 0, 'mt14.jpg', 'ms14.jpg', 'XXL', 20, 'PUMA Mens FIGC Italia Replica Home Football Jersey', 12, '2020-07-19 17:12:33', '2020-07-19 17:12:33'),
(136, 'Quần bóng rổ Durant', 'quanbongrodurant', 1000000, 0, 'Quần bóng rổ Durant.jpg', 'Quần bóng rổ Durant 1.jpg', 'L XL', 38, 'Quần bóng rổ Durant', 100, '2020-07-21 16:46:32', '2020-07-21 16:47:15'),
(137, 'Quần bóng đá nike DRY ACADEMY SHORT nam', 'quanbongdanikedryacademyshortnam', 200000, 0, 'Quần bóng đá nike DRY ACADEMY SHORT nam 832900-010.jpg', '', 'M L XL', 24, 'Quần bóng đá nike DRY ACADEMY SHORT nam 832900-010', 100, '2020-07-22 06:50:22', '2020-07-22 06:51:42'),
(138, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP', 'quanbongdanikenamasmnkdryacdm18shortkzfp', 150000, 10, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP CD2232-451.jpg', '', 'M L XL', 24, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP CD2232-451', 1000, '2020-07-22 06:51:07', '2020-07-22 06:51:07'),
(139, 'Quần bóng đá Nike AS M NK BRT ACDMY SHORT JAQ KP nam ', 'quanbongdanikeasmnkbrtacdmyshortjaqkpnam', 150000, 20, 'Quần bóng đá Nike AS M NK BRT ACDMY SHORT JAQ KP nam AJ9926-013.jpg', '', 'M L XL', 24, 'Quần bóng đá Nike AS M NK BRT ACDMY SHORT JAQ KP nam AJ9926-013', 100, '2020-07-22 06:52:28', '2020-07-22 06:52:28'),
(140, 'Quần bóng đá NIKE AS M NK DRY SQD SHORT K 19 nam ', 'quanbongdanikeasmnkdrysqdshortk19nam', 200000, 0, 'Quần bóng đá NIKE AS M NK DRY SQD SHORT K 19 nam BQ3777-492.jpg', '', 'M L XL', 24, 'Quần bóng đá NIKE AS M NK DRY SQD SHORT K 19 nam BQ3777-492', 1000, '2020-07-22 06:52:56', '2020-07-22 06:52:56'),
(141, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP ', 'quanbongdanikenamasmnkdryacdm18shortkzfp', 100000, 0, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP CD2232-010.jpg', '', 'M L XL', 24, 'Quần bóng đá Nike nam AS M NK DRY ACD M18 SHORTKZFP CD2232-010', 100, '2020-07-22 06:53:24', '2020-07-22 06:53:24'),
(142, 'Quần bóng đá DRY ACDMY SHORT K nike trẻ em ', 'quanbongdadryacdmyshortkniketreem', 100000, 0, 'Quần bóng đá DRY ACDMY SHORT K nike trẻ em 832901-451.jpg', '', 'M L XL', 24, 'Quần bóng đá DRY ACDMY SHORT K nike trẻ em 832901-451', 100, '2020-07-22 06:54:08', '2020-07-22 06:54:08'),
(143, 'Quần dài thể thao nam Adidas ống suông', 'quandaithethaonamadidasongsuong', 500000, 0, 'QUẦN DÀI THỂ THAO NAM ADIDAS ỐNG SUÔNG.jpg', '', 'M L XL', 32, 'QUẦN DÀI THỂ THAO NAM ADIDAS ỐNG SUÔNG', 1000, '2020-07-22 06:55:49', '2020-07-22 07:01:17'),
(144, 'Quần Jogger nike nam', 'quanjoggernikenam', 200000, 0, 'QUẦN JOGGER NIKE NAM.jpg', '', 'M L XL', 32, 'QUẦN JOGGER NIKE NAM', 1000, '2020-07-22 06:57:13', '2020-07-22 07:00:49'),
(145, 'Quần short Nike', 'quanshortnike', 200000, 0, 'QUẦN SHORT NIKE.jpg', 'QUẦN SHORT NIKE 150.jpg', 'M L XL', 32, 'QUần', 100, '2020-07-22 06:58:17', '2020-07-22 07:00:18'),
(146, 'Quần short Nike nam', 'quanshortnikenam', 15000000, 0, 'QUẦN SHORT THỂ THAO NAM ADIDAS.jpg', 'QUẦN SHORT THỂ THAO NAM ADIDAS 200.jpg', 'M L XL', 32, 'QUẦN SHORT THỂ THAO NAM ADIDAS 200', 1000, '2020-07-22 06:59:44', '2020-07-22 06:59:44'),
(147, 'Quần short nike', 'quanshortnike', 200000, 30, 'QUẦN SHORT NIKE 150.jpg', '', 'M L XL', 32, 'QUẦN SHORT', 1000, '2020-07-22 07:03:00', '2020-07-22 07:03:43'),
(148, 'Quần bóng rổ Jordan ', 'quanbongrojordan', 250000, 10, 'Quần bóng rổ Jordan 2.jpg', 'Quần bóng rổ Jordan 3.jpg', 'M L XL', 38, 'Quần bóng rổ Jordan 2', 100, '2020-07-22 07:05:50', '2020-07-22 07:05:50'),
(149, 'Quần bóng rổ Jordan ', 'quanbongrojordan', 250000, 20, 'Quần bóng rổ Jordan  4.jpg', 'Quần bóng rổ Jordan 5.jpg', 'M L XL', 38, 'Quần bóng rổ Jordan ', 100, '2020-07-22 07:06:19', '2020-07-22 07:06:19'),
(150, 'Quần bóng rổ Jordan Jumpman', 'quanbongrojordanjumpman', 300000, 0, 'Quần bóng rổ Jordan Jumpman.jpg', 'Quần bóng rổ Jordan Jumpman 1.jpg', 'M L XL', 38, 'Quần bóng rổ Jordan Jumpman', 1000, '2020-07-22 07:06:56', '2020-07-22 07:06:56'),
(151, 'Quần bóng rổ Kyrie Irving', 'quanbongrokyrieirving', 200000, 10, 'Quần bóng rổ Kyrie Irving.jpg', 'Quần bóng rổ Kyrie Irving 1.jpg', 'M L XL', 38, 'Quần bóng rổ Kyrie Irving', 100, '2020-07-22 07:07:36', '2020-07-22 07:07:36'),
(152, 'Quần bóng rổ Lebron', 'quanbongrolebron', 200000, 10, 'Quần bóng rổ Lebron.jpg', 'Quần bóng rổ Lebron 1.jpg', 'M L XL', 38, 'Quần bóng rổ Lebron', 100, '2020-07-22 07:08:11', '2020-07-22 07:08:11'),
(153, 'Quần bóng rổ Kyrie Irving 2', 'quanbongrokyrieirving2', 200000, 0, 'Quần bóng rổ Kyrie Irving 2.jpg', 'Quần bóng rổ Kyrie Irving 3.jpg', 'M L XL', 38, 'Quần bóng rổ Kyrie Irving ', 100, '2020-07-22 07:08:43', '2020-07-22 07:08:43'),
(154, 'Băng chân có đệm dài đen', 'bangchancodemdaiden', 500000, 0, 'Băng chân có đệm dài đen.jpg', 'Băng chân có đệm dài đen1.jpg', 'M L XL', 30, 'Băng chân có đệm dài đen', 100, '2020-07-22 07:11:04', '2020-07-22 07:11:04'),
(155, 'Băng chân có đệm dài đen', 'bangchancodemdaiden', 450000, 10, 'Băng chân có đệm dài đen1.jpg', 'Băng chân có đệm dài đen.jpg', 'M L XL', 30, 'Băng chân có đệm dài đen', 100, '2020-07-22 07:11:42', '2020-07-22 07:11:42'),
(156, 'Băng chân có đệm dài trắng', 'bangchancodemdaitrang', 500000, 30, 'Băng chân có đệm dài trắng.jpg', 'Băng chân có đệm dài trắng1.jpg', 'M L XL', 30, 'Băng chân có đệm dài trắng', 100000, '2020-07-22 07:12:23', '2020-07-22 07:12:23'),
(157, 'Băng chân có đệm dài trắng', 'bangchancodemdaitrang', 500000, 10, 'Băng chân có đệm dài trắng1.jpg', 'Băng chân có đệm dài trắng.jpg', 'M L XL', 30, 'Băng chân có đệm dài trắng', 20, '2020-07-22 07:13:07', '2020-07-22 07:13:07'),
(158, 'Băng gối', 'banggoi', 150000, 10, 'Băng gối.jpg', 'Băng gối1.jpg', 'M L XL', 29, 'Băng gối', 1000, '2020-07-22 07:14:13', '2020-07-22 07:14:13'),
(159, 'Băng gối', 'banggoi', 200000, 0, 'Băng gối1.jpg', 'Băng gối2.jpg', 'M L XL', 29, 'Băng gối', 100, '2020-07-22 07:14:38', '2020-07-22 07:14:38'),
(160, 'Băng gối', 'banggoi', 150000, 0, 'Băng gối2.jpg', 'Băng gối3.jpg', 'M L XL', 29, 'Băng gối', 100, '2020-07-22 07:15:00', '2020-07-22 07:15:00'),
(161, 'Băng gối', 'banggoi', 300000, 20, 'Băng gối3.jpg', 'Băng gối.jpg', 'M L XL', 29, 'Băng gối', 20, '2020-07-22 07:15:24', '2020-07-22 07:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(26, 6670000, 16, 1, '2020-07-17 12:15:02', '2020-07-17 12:17:18'),
(27, 7935000, 16, 1, '2020-07-17 12:16:25', '2020-07-17 12:17:17'),
(28, 1080000, 4, 1, '2020-07-17 12:17:08', '2020-07-17 13:50:22'),
(29, 9201400, 16, 0, '2020-07-18 03:22:11', '2020-07-18 03:22:11'),
(34, 1407000, 16, 1, '2020-07-21 07:51:20', '2020-07-21 07:54:45'),
(31, 872000, 16, 1, '2020-07-18 17:13:13', '2020-07-19 02:53:16'),
(32, 2443350, 20, 0, '2020-07-18 17:24:32', '2020-07-18 17:24:32'),
(37, 1683000, 23, 0, '2020-07-21 14:15:47', '2020-07-21 14:15:47'),
(38, 395000, 27, 0, '2020-07-22 11:54:22', '2020-07-22 11:54:22'),
(39, 9000000, 27, 0, '2020-07-22 13:30:34', '2020-07-22 13:30:34'),
(40, 481600, 28, 0, '2020-07-22 13:54:39', '2020-07-22 13:54:39'),
(41, 395000, 27, 1, '2020-07-22 16:45:27', '2020-07-23 10:04:55'),
(42, 5061050, 20, 1, '2020-07-23 08:18:03', '2020-07-23 10:04:53'),
(43, 395000, 27, 0, '2020-07-23 11:29:51', '2020-07-23 11:29:51'),
(44, 395000, 27, 0, '2020-07-23 11:30:53', '2020-07-23 11:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT '1',
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `email`, `phone`, `address`, `avatar`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Hồ Phạm Ngọc Thạch', 1, 'Thach@gmail.com', '0778889076', 'Tây Ninh', 'wp4382182.jpg', '123123123Thach', '2020-06-22 15:21:57', '2020-07-22 13:22:45'),
(22, 'Nguyễn Nhật Trường', 1, 'nhattruongtp2000@gmail.com', '0336873310', 'nhattruongtp2000@gmail.com', '', 'Kiprao123', '2020-07-20 09:41:35', '2020-07-20 09:41:35'),
(16, 'Thủy Tiên', 2, 'Tien@gmail.com', '090956565', 'Tây Ninh', '71214211_2350051705312086_4019730428574302208_n.jpg', '123123123Tien', '2020-07-17 03:33:16', '2020-07-22 12:54:27'),
(17, 'Thiên Trần', 1, 'ThienTran@gmail.com', '0123321456', 'Bạc liêu', '71700757_2656504424374151_2826972926203396096_n.png', '123123123Thien', '2020-07-17 12:41:50', '2020-07-17 12:41:50'),
(18, 'Kim Tuyền', 2, 'KimTuyen@gmail.com', '999999999', 'Hà Nội', '', '123123123Tuyen', '2020-07-17 12:53:41', '2020-07-17 12:53:41'),
(23, 'Nguyễn Quốc Việt', 1, 'Viet@gmail.com', '0784953530', 'Tphcm', '86853669_241381223537186_5947025616002875392_n.jpg', 'Aq123456789', '2020-07-21 08:07:06', '2020-07-21 14:19:12'),
(20, 'Nguyễn Văn Thắng', 1, 'cungtrang@gmail.co', '0326566821', '123 Văn Cừ', '86853669_241381223537186_5947025616002875392_n.jpg', 'Thang1234', '2020-07-18 17:22:11', '2020-07-21 14:09:13'),
(27, 'trần mạnh thiên', 1, 'tranmanhthienvn@gmail.com', '0818100133', '280 an dương vương', '', 'Aa123456789', '2020-07-22 11:38:14', '2020-07-22 14:11:16'),
(28, 'Hồ Lộc', 1, 'Loc@gmail.com', '0123456789', 'Sóc Trăng', '', 'Loc123123', '2020-07-22 13:49:36', '2020-07-22 13:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lienketbangcha` (`category_parent_id`);

--
-- Indexes for table `category_parent`
--
ALTER TABLE `category_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lienketsanpham` (`product_id`),
  ADD KEY `lienkethoadon` (`transaction_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lienketdanhmuc` (`category_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lienketkhachmua` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `category_parent`
--
ALTER TABLE `category_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
