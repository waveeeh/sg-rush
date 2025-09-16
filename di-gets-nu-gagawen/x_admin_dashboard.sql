-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2025 at 10:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `x_admin_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(64) NOT NULL,
  `salt` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `salt`) VALUES
(1, 'Admin_XYZ', '805d4fc4381c68c87df4e75df028fb3362aabbc0319370fae41e35d54d8dcbee', '123e4567-e89b-12d3-a456-426614174000');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Regular_Sessions'),
(2, 'Resolutions'),
(3, 'Ordinances'),
(4, 'Proposed_Ordinance');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `category_id`, `subcategory_id`, `title`, `subtitle`, `pdf_path`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'unang title para sa rs15', 'achuega rga rhagvrhavrha rhaer ha', 'uploads/1758020049_Sample file.pdf', '2025-09-16 10:54:09', '2025-09-16 10:54:09'),
(3, 2, 5, 'rts 14 111', '', 'uploads/1758020072_Sample file.pdf', '2025-09-16 10:54:32', '2025-09-16 10:54:32'),
(5, 2, 4, 'afa', 'egaeg', NULL, '2025-09-16 10:55:14', '2025-09-16 10:55:14'),
(6, 3, 7, 'aw22222egaw', 'wegawegaweg', NULL, '2025-09-16 10:55:25', '2025-09-16 10:56:16'),
(7, 1, 1, 'asdasd', 'asasfasf', NULL, '2025-09-16 10:57:23', '2025-09-16 10:57:23'),
(8, 1, 2, 'asfaf-update', 'asfasfawf', NULL, '2025-09-16 10:57:37', '2025-09-16 11:43:25'),
(18, 2, 4, 'wheweh', 'aewha aw haw hawe h', NULL, '2025-09-16 11:37:10', NULL),
(20, 2, 5, 'asd', 'afasf', NULL, '2025-09-16 11:42:28', NULL),
(21, 4, 10, 's', 'sss', NULL, '2025-09-16 12:00:18', NULL),
(22, 1, 1, 'asas', 'asas', NULL, '2025-09-16 12:03:55', NULL),
(23, 1, 3, 'asasa', 'dadad', NULL, '2025-09-16 12:04:01', NULL),
(24, 4, 10, 'new1', '', NULL, '2025-09-16 12:11:36', NULL),
(25, 2, 6, 'new 2', 'asf sf a', 'uploads/1758025017_Sample file.pdf', '2025-09-16 12:16:06', '2025-09-16 12:16:57'),
(26, 4, 10, 'new 241 145 14 ', 'ra rg arg', 'uploads/Sample-file---Copy_1758025717.pdf', '2025-09-16 12:28:37', NULL),
(27, 3, 8, 'aweg aewg awe g', 'w egaw eg', 'uploads/Sample-file---Copy_1758025733.pdf', '2025-09-16 12:28:53', NULL),
(28, 2, 5, 'a fawf aw faw', '', 'uploads/Sample file_1758027080.pdf', '2025-09-16 12:30:04', '2025-09-16 12:51:20'),
(31, 1, 1, 'malupet', '', 'uploads/Sample file_1758039634.pdf', '2025-09-16 16:20:34', NULL),
(32, 1, 1, 'wat ef maraming words', 'longger <b> Lorem <b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'uploads/Sample file_1758039712.pdf', '2025-09-16 16:21:52', '2025-09-16 16:51:23'),
(33, 1, 1, 'walng subtitle pero mahang title aa eb eber brfsvervr baebb ;ij hwie e awbv we wev az vd vferb aervzdfvc zb ;ij hwie e awbv we wev az vd vferb aervzdfvc z', '', 'uploads/Sample file_1758039904.pdf', '2025-09-16 16:25:04', NULL),
(34, 1, 1, 'short vr', 'make it short', 'uploads/Sample file_1758040453.pdf', '2025-09-16 16:34:13', '2025-09-16 16:36:38'),
(35, 3, 9, 'afasfafijp pjv', '', NULL, '2025-09-16 19:41:32', NULL),
(36, 1, 1, 'a1', 'sdasd', 'uploads/Sample file_1758052191.pdf', '2025-09-16 19:49:51', NULL),
(37, 1, 2, 'dwc2', '', 'uploads/Sample file_1758052213.pdf', '2025-09-16 19:50:13', NULL),
(38, 1, 3, 'fwefcaef e er', '', 'uploads/Sample file_1758052229.pdf', '2025-09-16 19:50:29', NULL),
(39, 2, 4, 'aef e awef ', '', 'uploads/Sample file_1758052243.pdf', '2025-09-16 19:50:43', NULL),
(40, 2, 5, 'awe we fwef4 g', '', 'uploads/Sample file_1758052260.pdf', '2025-09-16 19:51:00', NULL),
(41, 3, 7, 'ag aw4g a4g4g', 'b45b 4 b', 'uploads/Sample file_1758052276.pdf', '2025-09-16 19:51:16', NULL),
(42, 3, 8, 'mru ru m', '', 'uploads/Sample file_1758052292.pdf', '2025-09-16 19:51:32', NULL),
(43, 3, 9, 'd tyt dy nty ntyaze ', ' dtt', 'uploads/Sample file_1758052317.pdf', '2025-09-16 19:51:57', NULL),
(44, 3, 10, 'abr aer baerb', '', 'uploads/Sample file_1758052334.pdf', '2025-09-16 19:52:14', NULL),
(45, 4, 11, 'zbz zerb erbzerb', ' we webwebw', 'uploads/Sample file_1758052352.pdf', '2025-09-16 19:52:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Regular_Sessions_15th'),
(2, 1, 'Regular_Sessions_14th'),
(3, 1, 'Regular_Sessions_13th'),
(4, 2, 'Resolutions_15th'),
(5, 2, 'Resolutions_14th'),
(6, 2, 'Resolutions_Previous'),
(7, 3, 'Ordinances_15th'),
(8, 3, 'Ordinances_14th'),
(9, 3, 'Ordinances_13th'),
(10, 3, 'Ordinances_Previous'),
(11, 4, 'Proposed_Ordinances');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
