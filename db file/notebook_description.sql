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
-- Table structure for table `notebook_description`
--

CREATE TABLE IF NOT EXISTS `notebook_description` (
`id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `display_Size` varchar(100) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `graphics_chipset` varchar(100) NOT NULL,
  `battary` varchar(100) NOT NULL,
  `backup_time` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notebook_description`
--

INSERT INTO `notebook_description` (`id`, `name`, `brand`, `model`, `ram`, `display_Size`, `display_type`, `graphics_chipset`, `battary`, `backup_time`, `weight`, `color`) VALUES
(1, 'Acer Aspire E5-411', 'nzjcn', 'dasd', 'dsad', 'cdcsd', 'dsada', 'sadasd', 'dsadsa', '', 'dsds', 'sdasd'),
(11, 'Acer Aspire E5-411 PQC N3540 28000', '', 'acer', '', '', '', '', '', '', '', ''),
(12, 'Asus X200MA Intel PQC N3540 28000', 'Asus', ' X200MA', '4 GB', '14.4 inch', 'LED', 'INTEL 4400', '4 cell', '5 hour', '2 kg', 'pink'),
(13, 'hp-elitebook', 'hp', '8460w', '4 GB', '14.4 inch', 'LED', 'INTEL 4400', '4 cell', '5 hour', '2 kg', 'silver'),
(14, 'Dell XPS 13z i5 ULTRA BOOK', 'dell', 'Dell XPS 13z i5 ULTRA BOOK', '4 GB', '13.3 inch', 'LED', 'IntelÂ® HD 3000 graphics', '6 cell', '47 whr', '1.3kg', 'silver');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notebook_description`
--
ALTER TABLE `notebook_description`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notebook_description`
--
ALTER TABLE `notebook_description`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
