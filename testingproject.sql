-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2018 at 05:32 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testingproject`
--
DROP DATABASE IF EXISTS `testingproject`;
CREATE DATABASE `testingproject`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `fullname`, `email`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dan', '$2y$10$AeppTKlvXlrIfhqFiFELkubXYH2tHdQ3tvzsMbSF5EaHeDsPaUZ96', 'Dan Rice Koozai', 'dan@gmail.com', 'uploads/images/20180913024933_Dan-Rice-Koozai.jpg', 'MRbAsLRWXhAV35x4tblUdoGi0SxrmZd3F93oZQiIGBZWXzTSDTwS3AwFbKLM', '2018-09-13 08:00:26', '2018-09-13 10:22:05'),
(2, 'Jessica', '$2y$10$AeppTKlvXlrIfhqFiFELkubXYH2tHdQ3tvzsMbSF5EaHeDsPaUZ96', 'Jessica Stillman', 'jessica@gmail.com', 'uploads/images/20180913024933_JessicaStillman.png', 'aDn50xO72o1enXGB7IxxiDJQfZwrPPejoaAQmuZFwkVc12oP6CA7DaZlHSkj', '2018-09-13 08:11:08', '2018-09-13 08:11:08'),
(3, 'John', '$2y$10$AeppTKlvXlrIfhqFiFELkubXYH2tHdQ3tvzsMbSF5EaHeDsPaUZ96', 'John', 'john@gmail.com', 'uploads/images/20180913024933_John.jpg', 'HE8N6zkbRJjqyDsYS317Wz9Vg051tJrIseq98mSyOR75HCzIH3kNHxXsIEk4', '2018-09-13 08:12:31', '2018-09-13 08:12:31'),
(4, 'Nicola', '$2y$10$AeppTKlvXlrIfhqFiFELkubXYH2tHdQ3tvzsMbSF5EaHeDsPaUZ96', 'Nicola quinn', 'nicola@test.com', 'uploads/images/20180913024933_nicola-quinn.png', 'X7dbFW5uCiqnbAaMDhESDAQqtMkEt6axEaWhcxVdgGoQT3polXVIFyp2zkdg', '2018-09-13 08:19:33', '2018-09-13 08:19:33'),
(5, 'Tim', '$2y$10$AeppTKlvXlrIfhqFiFELkubXYH2tHdQ3tvzsMbSF5EaHeDsPaUZ96', 'Tim', 'tim@gmail.com', 'uploads/images/20180913024933_tim.png', 'yzVFC4vgtU8BVrKnO4kiaDbikdLGt7Y49j33AINOfSbPqBOzRZP7lFbTmaUc', '2018-09-13 10:35:07', '2018-09-13 10:35:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
