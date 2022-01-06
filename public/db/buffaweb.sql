-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2022 at 12:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buffaweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Moulder', 'moulder', '2021-12-13 18:45:38', '2021-12-13 19:09:45'),
(3, 'Mixers', 'mixers', '2021-12-13 19:10:15', '2021-12-13 19:10:15'),
(4, 'Clamps', 'clamps', '2021-12-13 19:10:32', '2021-12-13 19:10:32'),
(5, 'Blocks', 'blocks', '2021-12-13 19:10:57', '2021-12-13 19:10:57'),
(6, 'Pavers', 'pavers', '2021-12-13 19:11:15', '2021-12-13 19:11:15'),
(7, 'Kerbs', 'kerbs', '2021-12-13 19:13:05', '2021-12-13 19:13:05'),
(8, 'Granite', 'granite', '2021-12-13 19:13:15', '2021-12-13 19:13:15'),
(9, 'Cement', 'cement', '2021-12-13 19:13:29', '2021-12-13 19:13:29'),
(10, 'Portable Carbins', 'portable-carbins', '2021-12-13 19:13:57', '2021-12-13 19:13:57'),
(11, 'Hi-Jack', 'hi-jack', '2021-12-13 19:14:14', '2021-12-13 19:14:14'),
(12, 'Long-John', 'long-john', '2021-12-13 19:14:34', '2021-12-13 19:14:34'),
(13, 'Big-John', 'big-john', '2021-12-13 19:14:49', '2021-12-13 19:14:49'),
(14, 'Bi-Wheeler', 'bi-wheeler', '2021-12-13 19:15:14', '2021-12-13 19:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_16_102815_create_sessions_table', 1),
(7, '2021_10_27_212012_create_blogs_table', 2),
(8, '2021_10_28_150207_create_products_table', 3),
(9, '2021_12_13_155554_create_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `featured`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Standard Blocks', '<p class=\"MsoNormal\" style=\"margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;\" align=\"justify\"><span style=\"mso-spacerun: \'yes\'; font-family: Arial; mso-fareast-font-family: Calibri; font-size: 12.0000pt;\">Our special blocks are machine vibrated and made with a granite dust heavy mix. It has a crushing strength of 5.85 N/</span><span class=\"15\" style=\"mso-spacerun: \'yes\'; font-family: Arial; mso-fareast-font-family: Calibri; font-size: 12.0000pt;\">mm^2</span></p>\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0000pt; text-align: justify; text-justify: inter-ideograph;\" align=\"justify\"><span class=\"15\" style=\"mso-spacerun: \'yes\'; font-family: Arial; mso-fareast-font-family: Calibri; font-size: 12.0000pt;\">Sizes: 6inches / 9 inches</span></p>', NULL, 5, NULL, '1638958892.jpg', '2021-12-08 16:21:32', '2021-12-22 09:29:50'),
(7, 'Lock n Align Blocks', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our Lock \'n Align blocks are machine vibrated and made with a granite dust heavy mix. It has a crushing strength of over 6.5-7 N/mm^2</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Shapes:</strong></p>\n<ul>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Regular shape.</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Half blocks</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Sizes:</strong></li>\n</ul>\n<p>&nbsp;</p>\n<ul>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">9 inch.</li>\n</ul>', NULL, 5, NULL, '1638961171.jpg', '2021-12-08 16:59:31', '2021-12-14 09:09:37'),
(8, 'i-Design Pavers', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our pavers are built from quality concrete mix, and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads. Our pavers are built from quality concrete mix and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads.</p>', NULL, 6, NULL, '1638961305.jpg', '2021-12-08 17:01:45', '2021-12-14 09:09:52'),
(9, 'Arch Design Pavers', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our pavers are built from quality concrete mix, and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads. Our pavers are built from quality concrete mix and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads.</p>', NULL, 6, NULL, '1638961479.jpg', '2021-12-08 17:04:39', '2021-12-14 09:10:06'),
(10, 'Cube Design Pavers', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our pavers are built from quality concrete mix, and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads. Our pavers are built from quality concrete mix and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads.</p>', NULL, 6, NULL, '1638961598.jpg', '2021-12-08 17:06:38', '2021-12-14 09:10:19'),
(11, 'Wave Design Pavers', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our pavers are built from quality concrete mix, and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads. Our pavers are built from quality concrete mix and are suitable for all manner of outdoor use. They are an ideal choice for patios, pathways, courtyards, gardens and the like. They are also an excellent choice for any landscaping, including driveways, borders, and even new roads.</p>', NULL, 6, NULL, '1638961715.jpg', '2021-12-08 17:08:35', '2021-12-14 09:11:01'),
(12, 'CONCRETE KERBS ', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Our kerbs are made with cement and good aggregates. It is made with a steel form, which gives it a regular shape. They are strong and suitable for road construction, landscaping, and gardening.&nbsp;</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #a6a6a6; min-height: 14px;\">&nbsp;</p>\n<ul>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">It is versatile and offers safety especially when used as road dividers.</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">It is low cost</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Easy installation</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Maintenance Free</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Durable.</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">No cracking</li>\n<li style=\"margin: 0px 0px 12px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">It can be reused.</li>\n<li>&nbsp;</li>\n</ul>', NULL, 7, NULL, '1638961974.jpg', '2021-12-08 17:12:54', '2021-12-14 09:11:18'),
(13, 'GRANITE STONE', '<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #0d0d0d;\">Sizes:&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #0d0d0d;\">1 inch</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #0d0d0d;\">&frac34; inch</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #0d0d0d;\">&frac12; inch</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; color: #0d0d0d;\">3/8 inch</p>', NULL, NULL, NULL, '1638962072.jpg', '2021-12-08 17:14:32', '2021-12-08 17:14:32'),
(14, 'CEMENT ', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">At Buffalocrete we also stock and sell cement products for our customers. We have a full stock of cement products and we can deliver the cement products to our customers at their sites, factories and offices.</p>\n<p>&nbsp;</p>', NULL, 9, NULL, '1638962212.jpg', '2021-12-08 17:16:52', '2021-12-14 09:09:24'),
(15, '4 poles Moulder', '<p style=\"margin: 12px 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">The Buffalocrete&rsquo;s 4 pole block moulding machine is a manual/electrical machine that is capable of producing over 1,200 units of 9 or 6 inch blocks of higher quality per day, and over 3,000 i-design paving stones depending on the available manual labour. Its usage is not limited to the amount of manpower available, as it can also be connected to electricity. Our 4 pole block moulding machine has been subjected to intense industrial usage and has a guaranteed production cycle of 4 minutes, hence tested and trusted by major real estate developers across Nigeria.</p>', NULL, 2, NULL, '1638962429.jpg', '2021-12-08 17:20:29', '2021-12-14 09:11:57'),
(16, '2 poles Moulders', '<p style=\"margin: 12px 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Buffalocrete&rsquo;s 2 pole block moulding machine is a manual/electrical machine that is capable of producing over 1,000 units of 9 or 6 inch blocks of higher quality per day. Its usage is not limited to the amount of manpower available, as it can also be connected to electricity. Our 2 pole block moulding machine has been subjected to intense industrial usage and has a guaranteed production cycle of 1 minute, hence tested and trusted by major real estate developers across Nigeria.</p>\n<p style=\"margin: 12px 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Technical Specifications:&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Machine type: </strong>block/ paver moulding&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Machine class:</strong> manual/ Electric</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Electric power:</strong> 1.5kw</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Weight: </strong>250kg to 300kg</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Vibrator: </strong>Yes</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Maintenance Requirements:</strong> Low&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 12px 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Production Capacity</strong></p>\n<p>&nbsp;</p>\n<ul>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">One 9 inches block Per production</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">One 9 inches / One 6-inch block Per production</li>\n<li style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Two 6&nbsp;inches block Per production</li>\n<li>&nbsp;</li>\n</ul>', NULL, NULL, NULL, '1638962699.jpg', '2021-12-08 17:24:59', '2021-12-08 17:24:59'),
(17, 'QTJ4-28 MACHINE ', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Dimension:&nbsp; &nbsp; </strong>2650*1650*2000mm<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Host Machine Power:&nbsp; &nbsp; </strong>14KW</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Vibration Force:&nbsp; &nbsp; </strong>35.5KN <strong>&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Mixer Model: &nbsp; </strong>Stone Mate 1.5.&nbsp; 7.5kw capacity, 0.6m3 mixing capacity</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Moulding Period:&nbsp; &nbsp; </strong>28-30S<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Capacity:&nbsp; &nbsp; </strong>18.8KW<strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Pallet Size: &nbsp; &nbsp; </strong>850&times;550&times;30mm<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Block Type: </strong>hollow 225*225*450mm<strong> </strong>and 150*225*450mm and I-design paver mold.&nbsp; <strong>&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Total Weight:&nbsp; &nbsp; </strong>3200kg <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Voltage:&nbsp; &nbsp; </strong>380V</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Daily Stone Production Capacity: </strong>&nbsp;2000 to 3000 units of blocks.&nbsp;</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Daily Stone Production Capacity:</strong>&nbsp; 150 to 200 sqms of pavers</p>', NULL, NULL, NULL, '1638962811.jpg', '2021-12-08 17:26:51', '2021-12-08 17:26:51'),
(19, 'MECHANICAL SCISSORS & GRABS', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>TBF (TUBE BLOCK FIXED) Mechanical Scissors Grab 16.11&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Buffalocrete\'s TBF mechanical scissors grab 15.11 are non-adjustable, locally fabricated and designed for fast and accurate lifting, loading and unloading of blocks and pavers. This special scissors grab is made of tube, and specifically for blocks/paving stones. it is fixed in size and capacity.</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Technical Specification:</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Operation: </strong>Operated with a<strong> </strong>Hiab or Forklift</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Weight: </strong>Upto<strong> </strong>1.5 tons&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Width:</strong>&nbsp; 1.1meters fixed</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Merits&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">1. low operational cost</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">2. decrease damage to load</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">3. ability to carry loads without pallet</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">4. faster and quick loading ability</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">5. improves productivity and efficiency, and saves time</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">6. low maintenance cost. e.t.c</p>\n<p>&nbsp;</p>', NULL, 4, NULL, '1638963216.jpg', '2021-12-08 17:33:36', '2021-12-14 10:45:19'),
(20, 'TBX  Mechanical Scissors Grab 18.13 ', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Buffalocrete\'s TBX mechanical scissors grab 16.13 are adjustable locally fabricated and designed for fast and accurate lifting, loading and unloading of blocks and pavers. This special scissors grab is made of tube, and specifically for blocks/paving stones. It is adjustable in size but fixed in capacity.</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Technical Specification:</strong></p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Operation: </strong>Operated with a<strong> </strong>Hiab or Forklift</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Weight: </strong>Upto<strong> </strong>1.6 tons&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Width: </strong>Adjustable<strong> </strong>upto 1.3 meters</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Merits&nbsp;</strong></p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">1. low operational cost</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">2. decrease damage to load</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">3. ability to carry loads without pallet</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">4. faster and quick loading ability</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">5. improves productivity and efficiency, and saves time</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">6. low maintenance cost. e.t.c</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>', NULL, 4, NULL, '1638963400.jpg', '2021-12-08 17:36:40', '2021-12-14 10:44:48'),
(21, 'PBF  Mechanical Scissors Grab 18.13', '<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Buffalocrete\'s PBF mechanical scissors grab 18.13 are non-adjustable, locally fabricated and designed for fast and accurate loading of blocks and paving stone products. This special scissors grab is made of plate. It has a fixed non-expandable width and carrying capacity of 1.8tons.</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Technical Specification:</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Operation: </strong>Operated with a<strong> </strong>Hiab or Forklift</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Weight: </strong>Upto<strong> </strong>1.5 tons&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Carriage Width: </strong>Fixed 1 meters</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Merits&nbsp;</strong></p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">1. low operational cost</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">2. decrease damage to load</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">3. ability to carry loads without pallet</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">4. faster and quick loading ability</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">5. improves productivity and efficiency, and saves time</p>\n<p>&nbsp;</p>\n<p style=\"margin: 0px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">6. low maintenance cost. e.t.c</p>', NULL, NULL, NULL, '1638963583.jpg', '2021-12-08 17:39:43', '2021-12-09 15:56:00'),
(22, 'High Jack Wheel Barrows', '<p style=\"margin: 0px 0px 12px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">The Johnny Power double chassis high-john wheelbarrow has a 65-litre carrying capacity with a big bucket for general purpose usage. It uses a very strong double chassis for ease of field work and balancing. This well-balanced and extremely strong wheelbarrow can perform admirably in all sectors and for various products such as building and construction industries, metal and fabrication industries and other general purposes.</p>', NULL, 13, NULL, '1638964425.jpg', '2021-12-08 17:53:45', '2021-12-21 19:11:45'),
(23, 'Long John Wheel Barrows', '<p style=\"margin: 0px 0px 12px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">The Johnny Power double chassis The Long-john wheelbarrow has a 70-litre carrying capacity with a big, elongated bucket for general-purpose usage. It uses a very strong double chassis for ease of field work and balancing. This well-balanced and extremely strong wheelbarrow can perform admirably in all sectors and for various products such as building and construction industries, metal and fabrication industries and other general purposes.</p>\n<p>&nbsp;</p>', NULL, 13, NULL, '1638964645.jpg', '2021-12-08 17:57:25', '2021-12-21 19:12:07'),
(24, 'Big John Wheel Barrows', '<p style=\"margin: 0px 0px 12px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Johnny Power\'s big-john wheelbarrow is a 170-litre strong and durable wheelbarrow with a bigger bucket for industrial usage. It uses two big wheels for extra balance and easy mobility. This well-balanced and extremely strong wheelbarrow can perform admirably in all sectors and for various products such as concrete, building and construction industries, metal and fabrication industries, and so on.</p>\n<p>&nbsp;</p>', NULL, 13, NULL, '1638964816.jpg', '2021-12-08 18:00:16', '2021-12-14 10:46:12'),
(25, 'Bi-Wheelers Wheel Barrows', '<p style=\"margin: 0px 0px 12px; text-align: justify; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Johnny Power\'s Low-John wheelbarrow is a 95-litre strong and durable wheelbarrow with a bigger bucket for general purpose usage. It is constructed to be wide and low, this enables it to carry heavy goods without the risk of tipping and falling. It also uses two big wheels for extra balance and easy mobility. This well-balanced and extremely strong wheelbarrow can perform admirably in all sectors and for various products such as building and construction industries, metal and fabrication industries, and other general purposes.</p>', NULL, 13, NULL, '1638964892.jpg', '2021-12-08 18:01:32', '2021-12-21 19:12:27'),
(26, 'PORTABLE CABIN', '<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Customization Options/Features</strong></p>\n<ul>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Wood Panelling.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Polyurethane (PU) panels or Sandwich panel for added insulation.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Ceiling.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Heat Extractor.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Aluminium glass windows.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Louvre glass window.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof window.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof roof.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof floor.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Floor covering (Carpet and Rugs)</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Concrete stand.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Air Conditioning.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Toilet.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Kitchenette</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Electric wiring and lighting.</li>\n</ul>\n<p style=\"margin: 0px 0px 0px 63px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial; min-height: 14px;\">&nbsp;</p>\n<p style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\"><strong>Customization Options/Features</strong></p>\n<p>&nbsp;</p>\n<ul>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Wood Panelling.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Polyurethane (PU) panels or Sandwich panel for added insulation.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Ceiling.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Heat Extractor.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Aluminium glass windows.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Louvre glass window.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof window.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof roof.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Burglary proof floor.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Floor covering (Carpet and Rugs)</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Concrete stand.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Air Conditioning.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Toilet.</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Kitchenette</li>\n<li style=\"margin: 0px; font-stretch: normal; font-size: 12px; line-height: normal; font-family: Arial;\">Electric wiring and lighting.</li>\n<li>&nbsp;</li>\n</ul>', NULL, 10, NULL, '1638965072.jpg', '2021-12-08 18:04:32', '2021-12-14 09:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5aNEHSdQ28lQU9IR8S6R9A68Zaet1fcdPbC5gqoK', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTnlhdjIwRGhHYjhlTXFBaVdRc2RSRjJ1VkhQMGpuOXZNMVZSbXhPTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iaWctam9obnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZzVkZU4vdjVtOHBTL1I3aTFPVEdOLjhtMTRVZkh6MW1ZdzNhUnRhYWMycVExY1J0TjZNL3kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGc1ZGVOL3Y1bThwUy9SN2kxT1RHTi44bTE0VWZIejFtWXczYVJ0YWFjMnFRMWNSdE42TS95Ijt9', 1640122175),
('axj8bkrbaCk0Oxprzf0wLX1fexhcj3fem2CUGX2U', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR0d2bGM4Q0t1RVJVTnk3WlM3em9TSDRqdmZ6NnZKdDhySDVoNmFUUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkZzVkZU4vdjVtOHBTL1I3aTFPVEdOLjhtMTRVZkh6MW1ZdzNhUnRhYWMycVExY1J0TjZNL3kiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGc1ZGVOL3Y1bThwUy9SN2kxT1RHTi44bTE0VWZIejFtWXczYVJ0YWFjMnFRMWNSdE42TS95Ijt9', 1640169499),
('EsWyKkQI2SispSR7PrE3yLByUx2FrhfH2NmG0NPi', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVktGNW95S1pieHBqVzY4TDl5VG9TTjJQbGVuVzh6QXZ3eWViQ0cyRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzLzE1Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1640121375),
('Zt5mleaym2eW23Vq1FcSsrejeCCjiUaMDLOQykwl', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:95.0) Gecko/20100101 Firefox/95.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRTNhWDlNME1DcGhvTVNlMjF0Z2xjYjhYWlZja3ZyRnlrcTR3aDZCSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWxzLzIyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1640119480);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin USR for users or customers',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'System', 'Admin', 'admin@admin.com', NULL, '$2y$10$g5deN/v5m8pS/R7i1OTGN.8m14UfHz1mYw3aRtaac2qQ1cRtN6M/y', NULL, NULL, NULL, NULL, NULL, 'ADM', '2021-10-26 07:55:09', '2021-10-26 07:55:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
