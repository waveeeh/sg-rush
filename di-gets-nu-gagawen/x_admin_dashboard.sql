-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 03:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
  `username` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Administrator', '$2y$10$uA.P3rXJ8QFFRn/BWbxLmuW/FWL/CRwBZ56QFUrtXMn7c3Wvd9oXe', '2025-09-18 12:27:56');

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
(1, 'Regular Sessions'),
(2, 'Resolutions'),
(3, 'Ordinances'),
(4, 'Proposed Ordinance');

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
(23, 1, 3, 'asasaasfasfa asf ', 'dadad', NULL, '2025-09-16 12:04:01', '2025-09-17 15:16:01'),
(24, 4, 10, 'new1', '', NULL, '2025-09-16 12:11:36', NULL),
(25, 2, 6, 'new 2', 'asf sf a', 'uploads/1758025017_Sample file.pdf', '2025-09-16 12:16:06', '2025-09-16 12:16:57'),
(26, 4, 10, 'new 241 145 14 ', 'ra rg arg', 'uploads/Sample-file---Copy_1758025717.pdf', '2025-09-16 12:28:37', NULL),
(27, 3, 8, 'aweg aewg awe g', 'w egaw eg', 'uploads/Sample-file---Copy_1758025733.pdf', '2025-09-16 12:28:53', NULL),
(28, 2, 5, 'a fawf aw faw', '', 'uploads/Sample file_1758027080.pdf', '2025-09-16 12:30:04', '2025-09-16 12:51:20'),
(31, 1, 1, 'malupet', '', 'uploads/Sample file_1758039634.pdf', '2025-09-16 16:20:34', NULL),
(32, 1, 1, 'wat ef maraming words - update', 'longger <b> Lorem </b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ilongger <b> Lorem </b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ilongger \r\n\r\n   <b> Lorem </b> ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco \r\n\r\nspace ---- laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure doud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i\r\n1\r\n\r\n-/new line\r\n1\r\n2\r\n\r\n\r\n/new line', 'uploads/Sample file_1758039712.pdf', '2025-09-16 16:21:52', '2025-09-18 13:19:10'),
(33, 1, 1, 'walng subtitle pero mahang title aa eb eber brfsvervr baebb ;ij hwie e awbv we wev az vd vferb aervzdfvc zb ;ij hwie e awbv we wev az vd vferb aervzdfvc z', '', 'uploads/Sample file_1758039904.pdf', '2025-09-16 16:25:04', NULL),
(34, 1, 1, 'short vr', 'make it short', 'uploads/Sample file_1758040453.pdf', '2025-09-16 16:34:13', '2025-09-16 16:36:38'),
(35, 3, 9, 'afasfafijp pjv', '', NULL, '2025-09-16 19:41:32', NULL),
(36, 1, 1, 'a1', 'sdasd', 'uploads/Sample file_1758052191.pdf', '2025-09-16 19:49:51', NULL),
(37, 1, 2, 'dwc2', '', 'uploads/Sample file_1758052213.pdf', '2025-09-16 19:50:13', NULL),
(38, 1, 3, 'fwefcaef e er', '', 'uploads/Sample file_1758052229.pdf', '2025-09-16 19:50:29', NULL),
(39, 2, 4, 'aef e awef  <i> testing update </i>', '<b>hi</b>', 'uploads/Sample file_1758052243.pdf', '2025-09-16 19:50:43', '2025-09-17 12:09:28'),
(40, 2, 5, 'awe we fwef4 g', '', 'uploads/Sample file_1758052260.pdf', '2025-09-16 19:51:00', NULL),
(41, 3, 7, 'ag aw4g a4g4g', 'b45b 4 b', 'uploads/Sample file_1758052276.pdf', '2025-09-16 19:51:16', NULL),
(42, 3, 8, 'mru ru m', '', 'uploads/Sample file_1758052292.pdf', '2025-09-16 19:51:32', NULL),
(44, 3, 10, 'abr aer baerb', '', 'uploads/Sample file_1758052334.pdf', '2025-09-16 19:52:14', NULL),
(45, 4, 11, 'zbz zerb erbzerb', '  we webwebw we webwebw we webwebw we webwebw we webwebw we webwebw we webwebw we webwebw we webwebw', 'uploads/Sample file_1758052352.pdf', '2025-09-16 19:52:32', '2025-09-17 12:28:26'),
(47, 4, 11, 'Update anooo ', 'aat rh rh tj xedrtj ', 'uploads/Sample file_1758056325.pdf', '2025-09-16 20:58:45', '2025-09-16 20:59:19'),
(48, 2, 4, 'sample fancy title', '𝓱𝓮𝓵𝓵𝓸\r\n\r\n𝒽𝑒𝓁𝓁𝑜\r\n\r\n𝕙𝕖𝕝𝕝𝕠\r\n\r\nｈｅｌｌｏ\r\n\r\nꫝꫀꪶꪶꪮ\r\n\r\nhׁׅ֮ꫀׁׅܻᥣׁׅ֪ᥣׁׅ֪ᨵׁׅ\r\n\r\n⋈⋆﹅﹅ꕤ\r\n\r\nꃅꍟ꒒꒒ꂦ\r\n\r\n🍩 ⋆ 🍌  🎀  𝒽𝑒𝓁𝓁❁  🎀  🍌 ⋆ 🍩\r\n\r\nʜᴇʟʟᴏ\r\n\r\nollǝɥ\r\n\r\nh⃣   e⃣   l⃣   l⃣   o⃣\r\n\r\n​🇭​​🇪​​🇱​​🇱​​🇴​\r\n\r\nh⃞    e⃞    l⃞    l⃞    o⃞\r\n\r\n🄷🄴🄻🄻🄾\r\n\r\no||ɘʜ\r\n\r\nḩ̸̻̳̲͗̔̿̀̓͗̈́͋͝ȩ̶̦̣̝̥̙͙̐̉̈̂͋͂̈́̐̒l̷̛͉̗̭͍̒̌̄̃l̴͓̰̟̬̠̙͎̜̏͗̽̎̌́͊̕͘͜͜o̵̡̫̺̟͌̾͌̉̿̚\r\n\r\n🅷🅴🅻🅻🅾\r\n\r\nₕₑₗₗₒ\r\n\r\nʰᵉˡˡᵒ\r\n\r\nⓗⓔⓛⓛⓞ\r\n\r\nђєɭɭ๏\r\n\r\nԋҽʅʅσ\r\n\r\nɦɛʟʟօ\r\n\r\nᏂᏋᏝᏝᎧ\r\n\r\nɧɛƖƖơ\r\n\r\nhēll໐\r\n\r\n𝐡𝐞𝐥𝐥𝐨\r\n\r\n𝗵𝗲𝗹𝗹𝗼\r\n\r\n𝘩𝘦𝘭𝘭𝘰\r\n\r\n𝙝𝙚𝙡𝙡𝙤\r\n\r\n𝚑𝚎𝚕𝚕𝚘\r\n\r\nΉΣᄂᄂӨ\r\n\r\nнєℓℓσ\r\n\r\nhêllð\r\n\r\nⱧɆⱠⱠØ\r\n\r\n卄乇ㄥㄥㄖ\r\n\r\nん乇ﾚﾚの\r\n\r\n【h】【e】【l】【l】【o】\r\n\r\n『h』『e』『l』『l』『o』\r\n\r\n≋h≋e≋l≋l≋o≋\r\n\r\n░h░e░l░l░o░\r\n\r\n(っ◔◡◔)っ ♥ hello ♥\r\n\r\nｈｅｌｌｏ　河鋭ラ', NULL, '2025-09-17 12:25:25', NULL),
(49, 1, 1, 'vv ; ;iui', 'wsct bsrtnbsryn ryn', NULL, '2025-09-17 12:40:47', NULL),
(50, 1, 1, 'cgkvj', 'uctfvghk', NULL, '2025-09-17 12:40:57', NULL),
(51, 1, 1, 'ditvu', 'tvuhl ', NULL, '2025-09-17 12:41:07', NULL),
(52, 1, 1, 'as', '', NULL, '2025-09-17 12:54:48', NULL),
(53, 1, 1, 'favdv', '', NULL, '2025-09-17 12:54:57', NULL),
(54, 1, 1, 'abeb', '', NULL, '2025-09-17 12:55:05', NULL),
(55, 1, 1, 'nt srtns rt', '', NULL, '2025-09-17 12:55:13', NULL),
(56, 1, 1, 's tnsrtn srt', '', NULL, '2025-09-17 12:55:21', NULL),
(57, 1, 2, 'xfnxrtn x', '', NULL, '2025-09-17 12:55:28', NULL),
(58, 1, 1, 'x tnx rtnxt', '', NULL, '2025-09-17 12:55:37', NULL),
(59, 1, 1, 'afave', '', NULL, '2025-09-17 12:55:51', NULL),
(60, 1, 1, 'vavaevaev', '', NULL, '2025-09-17 12:55:58', NULL),
(61, 1, 1, 'ahb erbaer', '', NULL, '2025-09-17 12:56:04', NULL),
(62, 3, 7, 'a erhba erb ', '', NULL, '2025-09-17 12:56:10', NULL),
(63, 1, 1, ' aen aetntnb rt', '', NULL, '2025-09-17 12:56:16', NULL),
(64, 4, 11, '1', '', NULL, '2025-09-17 14:51:15', NULL),
(65, 4, 11, '22', '', NULL, '2025-09-17 14:51:21', NULL),
(66, 4, 11, '33', '', NULL, '2025-09-17 14:51:26', NULL),
(67, 4, 11, '44', '', NULL, '2025-09-17 14:51:33', NULL),
(68, 4, 11, '55', '', NULL, '2025-09-17 14:51:38', NULL),
(69, 4, 11, '66', '', NULL, '2025-09-17 14:51:46', NULL),
(70, 4, 11, '77', '', NULL, '2025-09-17 14:51:52', NULL),
(71, 4, 11, '88', '', NULL, '2025-09-17 14:51:58', NULL),
(72, 4, 11, '99', '', 'uploads/Sample file_1758120741.pdf', '2025-09-17 14:52:04', '2025-09-17 14:52:21'),
(73, 2, 5, 'aa', '', NULL, '2025-09-17 15:10:21', NULL),
(74, 2, 6, 'a', '', NULL, '2025-09-17 15:10:26', NULL),
(75, 2, 6, 'faw f', '', NULL, '2025-09-17 15:10:32', NULL);

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
(1, 1, '15th Regular Sessions'),
(2, 1, '14th Regular Sessions'),
(3, 1, '13th Regular Sessions'),
(4, 2, '15th Resolutions'),
(5, 2, '14th Resolutions'),
(6, 2, 'Previous Resolutions'),
(7, 3, '15th Ordinances'),
(8, 3, '14th Ordinances'),
(9, 3, '13th Ordinances'),
(10, 3, 'Previous Ordinances'),
(11, 4, 'Proposed Ordinances');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

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
