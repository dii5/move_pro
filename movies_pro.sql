-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 14 يناير 2024 الساعة 18:21
-- إصدار الخادم: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_pro`
--

-- --------------------------------------------------------

--
-- بنية الجدول `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_move` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `message`, `id_move`) VALUES
(1, 'ahmed', 'mohammedjassim@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.', 11),
(3, 'wala', 'baqrb7211131@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.', 11),
(5, 'wala', 'baqrb7211131@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae eros eget tellus tristique bibendum. Donec rutrum sed sem quis venenatis.', 11);

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'hestetht', '1mohammedjassim111@gmail.com', 'wteru3rt'),
(2, 'hestetht', '1mohammedjassim111@gmail.com', 'wteru3rt');

-- --------------------------------------------------------

--
-- بنية الجدول `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `long` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `evaluataon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Genres` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `timeinsert` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `film`
--

INSERT INTO `film` (`id`, `name`, `long`, `evaluataon`, `image`, `Genres`, `timeinsert`) VALUES
(47, 'iraq hero', '93', '5', '642b44255a688.jpg', 'drama', '2023-04-10'),
(49, 'last test', '99', '5', '643022f746b93.jpg', 'famile', '2023-04-15'),
(50, 'test tow', '59', '3', '6432b78fcc707.jpg', 'drama', '2023-04-17'),
(52, 'anethink', '58', '4', '6432ba7663ad7.jpg', 'drama', '2023-04-17');

-- --------------------------------------------------------

--
-- بنية الجدول `time`
--

DROP TABLE IF EXISTS `time`;
CREATE TABLE IF NOT EXISTS `time` (
  `id` int NOT NULL AUTO_INCREMENT,
  `film_id` int NOT NULL,
  `timeshow` int NOT NULL,
  `day` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `time`
--

INSERT INTO `time` (`id`, `film_id`, `timeshow`, `day`) VALUES
(1, 47, 2, 2);

-- --------------------------------------------------------

--
-- بنية الجدول `timeshow`
--

DROP TABLE IF EXISTS `timeshow`;
CREATE TABLE IF NOT EXISTS `timeshow` (
  `id` int NOT NULL AUTO_INCREMENT,
  `film_id` int DEFAULT NULL,
  `time` time DEFAULT NULL,
  `day` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `film_id` (`film_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `timeshow`
--

INSERT INTO `timeshow` (`id`, `film_id`, `time`, `day`) VALUES
(14, 47, '02:16:00', '2023-04-15'),
(15, 42, '08:30:00', '2023-04-10'),
(16, 42, '14:10:11', '2023-04-10'),
(21, 47, '20:00:00', '2023-04-09'),
(18, 42, '14:10:11', '2023-04-10'),
(20, 47, '20:00:00', '2023-04-09'),
(22, 47, '20:00:00', '2023-04-09'),
(23, 47, '20:00:00', '2023-04-09'),
(24, 47, '20:00:00', '2023-04-09'),
(25, 47, '20:00:00', '2023-04-09'),
(26, 47, '20:00:00', '2023-04-09'),
(27, 51, '08:15:00', '2023-04-10'),
(28, 47, '22:15:00', '2023-04-15');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rank` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `rank`) VALUES
(1, 'ali', 'baqrb7231@gmail.com', 'wwwwww', ''),
(2, 'ali', 'baqrb7231@gmail.com', '1111', '1'),
(3, 'user', '1mohammedjassim1@gmail.com', '1111', '0'),
(4, 'ali', 'baqrb7211131@gmail.com', '2222', '0'),
(5, 'mohammed', '1mohammedjassim12@gmail.com', '11111111', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
