-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 06:53 AM
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
-- Database: `masterdiy`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `guide_id`, `username`, `comment`, `created_at`) VALUES
(1, 4, 'siomai', 'werawerawe', '2025-05-14 04:17:47'),
(2, 4, 'siomai', 'aergaergaerg', '2025-05-14 04:17:54'),
(3, 4, 'siomai', 'sdsdfhsdrh', '2025-05-14 04:22:24'),
(4, 4, 'siomai', 'ampanget hahhaha', '2025-05-14 04:23:04'),
(7, 4, 'siomai', 'sfthsrths', '2025-05-14 04:31:17'),
(8, 4, 'siomai', 'srhdrth', '2025-05-14 04:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` int(11) NOT NULL,
  `guide_type` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `part` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `difficulty_estimate` varchar(50) DEFAULT NULL,
  `tools` varchar(255) DEFAULT NULL,
  `conclusion` text DEFAULT NULL,
  `steps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`steps`)),
  `step_type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`step_type`)),
  `wisdom` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`wisdom`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `step_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`id`, `guide_type`, `device`, `part`, `title`, `introduction`, `difficulty_estimate`, `tools`, `conclusion`, `steps`, `step_type`, `wisdom`, `created_at`, `step_images`) VALUES
(1, 'Replacement', 'iPhone 16', 'Battery', 'iphone battery replacement', 'rgsergsergerger', 'Moderate', 'jlafarjfer3', 'sdfgsdgsdrg', '[\"step 1\",\"step 2\"]', '[]', '[\"ardgaerg\",\"aergsergserg\"]', '2025-05-13 13:05:25', NULL),
(2, 'Replacement', 'iPhone 16', 'Battery', 'battery replacement', 'aegaergerg', 'Moderate', 'aergegergae', 'rgaergrjhaegvgrva', '[\"step 1\",\"step 2\",\"step 3\"]', '[]', '[\"sdtsrthrsthsth\",\"athrthaerfdfvasdv\",\"rsthsrtsrtbsr\"]', '2025-05-13 13:28:25', '[\"uploads\\/stepimg_682348f902179_494359325_1053978556580148_2521357988331885254_n.png\",\"uploads\\/stepimg_682348f90ca13_494358854_982913163827000_4533838095770380835_n.png\",\"uploads\\/stepimg_682348f90d1dc_494357658_1680618539214175_1124004200284624763_n.png\"]'),
(3, 'replacement', 'ip17', 'batt', 'iphone battery ni simoen', 'swrthsrth', 'Moderate', 'asrthsrth', 'asrthsarehshrt', '[\"step 1\",\"step 2\",\"step 3\"]', '[]', '[\"srtjhrsdth\",\"dtyjktedyjdtyj\",\"rjhrsjh\"]', '2025-05-14 01:33:32', '[\"uploads\\/stepimg_6823f2ec082ed_repair2.jpg\",\"uploads\\/stepimg_6823f2ec08377_repair.jpg\",\"uploads\\/stepimg_6823f2ec083d3_ip-logo.png\"]'),
(4, 'sdthst', 'hsrthsrt', 'hrsthsr', 'hsrth', 'rdthserth', 'Easy', 'rasehsr', 'srthsrth', '[\"\"]', '[]', '[\"saerhsrthsrth\"]', '2025-05-14 03:05:55', '[\"uploads\\/stepimg_68240893d06a4_repair2.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`) VALUES
(28, 'ADMIN FLAMINIA', '$2y$10$ywly1EEzh3t9tTizL/KZi.xx6eF/amSoSC4drRGFv/x8Mwbw74HF6', 'admin'),
(29, 'jlflaminia', '$2y$10$uGBSB1L7FvbmMbBKvdnCzejM8EezaKSbe.4O/SS5PQb0rsfyV.Mh6', 'user'),
(30, 'simeon', '$2y$10$Za3EJgjguCAnyRN7sCQVBuypClkWGD3Qd4jSJtA3YedjTurYgjCqq', 'user'),
(31, 'janbona', '$2y$10$NEyjoUAtM2c.0WLijmhJgeg2cpII1QgtXFo5sM38qlg/NDtPwNPKa', 'user'),
(32, 'lourdes', '$2y$10$AWm.5x0v.aoammPwLAhPnO2a1lkbGB4dMmw6jQC0tLW7uh4ZHVQAq', 'user'),
(33, 'admin', '$2y$10$a8gHtP4drlqBPOePHRDc1.bjJe7P.E7jUi22am2XBZOS.DUXEg4qq', 'admin'),
(34, 'jl', '$2y$10$hna8W98MjpNx.TbLB2oSgOIOBj6p5ArBQJUUpi9xSu.reLTqqpBDK', 'user'),
(35, 'siomai', '$2y$10$/Rtfi8q1gSsT70zhQnxgpe8AyQQ39eC3DSfo89C0JVM7RZyLOxJUK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `guides` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
