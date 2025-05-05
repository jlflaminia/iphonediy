-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 07:53 AM
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
(33, 'admin', '$2y$10$a8gHtP4drlqBPOePHRDc1.bjJe7P.E7jUi22am2XBZOS.DUXEg4qq', 'admin');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
