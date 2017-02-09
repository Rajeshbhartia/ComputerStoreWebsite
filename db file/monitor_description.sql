-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 09:54 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitor_description`
--

CREATE TABLE IF NOT EXISTS `monitor_description` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `display_size` varchar(100) NOT NULL,
  `screen_type` varchar(100) NOT NULL,
  `brightness` varchar(100) NOT NULL,
  `screen_resolution` varchar(100) NOT NULL,
  `contrast_ratio` varchar(100) NOT NULL,
  `hdmi_port` varchar(100) NOT NULL,
  `speaker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor_description`
--

INSERT INTO `monitor_description` (`id`, `name`, `brand`, `model`, `type`, `display_size`, `screen_type`, `brightness`, `screen_resolution`, `contrast_ratio`, `hdmi_port`, `speaker`) VALUES
(0, 'abcdef', '', '', '', '', '', '', '', '', '', ''),
(0, 'Asus vx 239', 'Asus', ' vx 239', 'LED', '22', 'auto', 'auto', '1920*1080', '1:500000', 'HDMI*2', 'Yes'),
(0, 'Asus vx 279', 'Asus ', ' vx 279', 'LED', '27-inch', 'auto', 'auto', '1920*1080', '1:500000', 'HDMI*2', 'Yes'),
(0, 'Asus mx 249', 'Asus ', 'mx 249', 'LED', '23-inch', 'auto', 'auto', '1920*1080', '1:500000', 'HDMI*2', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
