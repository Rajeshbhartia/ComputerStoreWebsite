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
-- Table structure for table `printer_description`
--

CREATE TABLE IF NOT EXISTS `printer_description` (
`id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `function` varchar(100) NOT NULL,
  `printer_type` varchar(100) NOT NULL,
  `speed_PPM_black` varchar(100) NOT NULL,
  `print_resolution` varchar(100) NOT NULL,
  `paper` varchar(100) NOT NULL,
  `interface` varchar(100) NOT NULL,
  `memory` varchar(100) NOT NULL,
  `OS_compatibility` varchar(100) NOT NULL,
  `dimensions` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printer_description`
--

INSERT INTO `printer_description` (`id`, `name`, `brand`, `model`, `function`, `printer_type`, `speed_PPM_black`, `print_resolution`, `paper`, `interface`, `memory`, `OS_compatibility`, `dimensions`, `weight`, `product_id`) VALUES
(1, 'abcdefg', '', '', '', '', '', '', '', '', '', 'asa', '', '', ''),
(2, 'hp-laserjet', 'hp', 'hp-laserjet-pro-color-m451nw', 'MOBILE PRINTING CAPABILITY', 'HP PCL 6, HP PCL 5c, HP postscript level 3 emulation', ' Up to 21 ppm', 'Up to 600 x 600 dpi', ' 8.5 x 13 in, 3 x 5 in, 4 x 6 in, 5 x 8 in, ', 'Hi-Speed USB 2.0 port', '128 MB', 'Full software installs supported on: MicrosoftÂ® WindowsÂ® 7 32-bit and 64-bit, ', '15.9 x 17.9 x 12.7 in ', '50.1 lb (22.74 kg', '12345'),
(3, 'hp-laserjet-pro-m251n-color', 'hp', 'hp-laserjet-pro-m251n-color', 'Print', ' Up to 14 ppm', 'Black: up to 600 x 600 dpi', 'Color: Up to 600 x 600 dpi', '150-sheet input tray', '', '128 MB', 'MicrosoftÂ® WindowsÂ®7 ', '15.94 x 17.83 x 10.43 in', '41.4 lb', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `printer_description`
--
ALTER TABLE `printer_description`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `printer_description`
--
ALTER TABLE `printer_description`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
