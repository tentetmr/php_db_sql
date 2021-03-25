-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2021 at 02:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `sns_contents`
--

CREATE TABLE `sns_contents` (
  `id` int(11) NOT NULL,
  `u_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `restaurantName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `restaurantCost` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL,
  `updatedSysdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sns_contents`
--

INSERT INTO `sns_contents` (`id`, `u_name`, `restaurantName`, `restaurantCost`, `contents`, `indate`, `updatedSysdate`) VALUES
(1, 'tamura', 'Laravel', '40', 'MVCについて学習した。', '2021-03-25 23:14:31', '2021-03-25 14:16:14'),
(2, 'tamura', 'Laravel', '60', 'Jetstreamを学習した。', '2021-03-25 20:49:01', '2021-03-25 14:14:03'),
(3, 'tamura', 'PHP', '60', '認証機能を学習した。', '2021-03-25 23:08:04', '2021-03-25 14:08:55'),
(4, 'tamura', 'Bootstrap', '30', 'Studied Grid system', '2021-03-25 23:17:02', '2021-03-25 14:17:02'),
(5, 'nakamura', '英語', '20', '英語の勉強をした。難しい…', '2021-03-25 23:29:35', '2021-03-25 14:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `sns_user`
--

CREATE TABLE `sns_user` (
  `id` int(11) NOT NULL,
  `u_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `life_flg` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sns_user`
--

INSERT INTO `sns_user` (`id`, `u_name`, `u_id`, `u_pw`, `life_flg`, `indate`) VALUES
(1, 'tamura', 'tententmr', 'tamurakeisuke', 0, '2021-03-25 19:42:13'),
(2, 'nakamura', 'masashi', 'nakamura', 0, '2021-03-25 23:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `u_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `todo_contents` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `u_name`, `todo_contents`, `deadline`) VALUES
(10, 'tamura', '宿題をする', '2021-03-25'),
(11, 'tamura', '最終課題を作る', '2021-03-30'),
(12, 'tamura', '最終課題を発表する', '2021-03-31'),
(13, 'tamura', '修了式', '2021-04-03'),
(19, 'nakamura', '英語の課題', '2021-03-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sns_contents`
--
ALTER TABLE `sns_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sns_user`
--
ALTER TABLE `sns_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sns_contents`
--
ALTER TABLE `sns_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sns_user`
--
ALTER TABLE `sns_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
