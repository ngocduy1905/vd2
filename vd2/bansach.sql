-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 04, 2021 at 03:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `masach` varchar(13) NOT NULL,
  `tensach` varchar(200) CHARACTER SET utf8 NOT NULL,
  `gia` int(11) NOT NULL DEFAULT 0,
  `hinh` varchar(200) NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`masach`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `gia`, `hinh`, `mota`) VALUES
('s0001', 'Lập trình Php-Mysql ', 100, '1.jpg', 'Mo ta'),
('s0002', 'Phần Mềm nguồn mở ', 20, '2.jpg', 'Mo ta2'),
('s0003', 'Lập trình Hướng đối tượng', 50, '3.jpg', 'Mo ta 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
