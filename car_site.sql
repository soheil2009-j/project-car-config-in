-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2026 at 08:55 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb3_persian_ci NOT NULL,
  `specs` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `image`, `specs`) VALUES
(1, 'bmw m5 e60', 'e60.jpg', 'دیفرانسیل:عقب\r\nقدرت:507 اسب بخار\r\nشتاب 0 تا4.7:100\r\nحداکثر سرعت:250\r\nbest:this car'),
(2, 'bens cls 550', 'cls.jpg', 'دیفرانسیل:عقب\r\nتعداد سیلندر:8سیلندر\r\nقدرت:408 اسب بخار\r\nحداکثر سرعت:250'),
(3, 'supra mk4', 'mk4.jpg', 'قدرت:320اسب بخار\r\nشتاب 0 تا 5.0:100\r\nحداکثر سرعت:250\r\nتعداد سیلندر:6سیلندر'),
(4, 'dodge chalenger', 'dodge.jpg', 'تعداد سیلندر:8سیلندر\r\nفدرت:840 اسب بخار\r\nدیفرانسیل:عقب\r\nخداکثر سرعت:327'),
(5, 'bmw m4 f80', '4.jpg', 'محور محرک:عقب\r\nحجم موتور:3.0لیتر\r\nنوع موتور:شیش سیلندر خطی\r\nحداکثر قدرت:503اسب بخار\r\nحداکثر سرعت:249کیلو متر');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`) VALUES
(19, 'admin', '111', 1),
(17, 'soheil', '123', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
