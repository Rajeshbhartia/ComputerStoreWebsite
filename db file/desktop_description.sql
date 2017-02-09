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
-- Table structure for table `desktop_description`
--

CREATE TABLE IF NOT EXISTS `desktop_description` (
`id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `chipset` varchar(100) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `hdd` varchar(100) NOT NULL,
  `monitor_size` varchar(100) NOT NULL,
  `monitor_type` varchar(100) NOT NULL,
  `audio` varchar(100) NOT NULL,
  `speaker` varchar(100) NOT NULL,
  `keyboard` varchar(100) NOT NULL,
  `mouse` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desktop_description`
--

INSERT INTO `desktop_description` (`id`, `name`, `brand`, `model`, `processor`, `chipset`, `display_type`, `ram`, `hdd`, `monitor_size`, `monitor_type`, `audio`, `speaker`, `keyboard`, `mouse`, `product_id`) VALUES
(1, 'abcd', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'abcd', 'Asus', 'as', 'as', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'dell-optiplex-3020mt', 'dell', '-core-i3-4th-gen-with-os', '4th Gen Intel Core i3-4130 Processor (3.4 GHz) 3MB', 'Interl', 'LED', 'DDR-3', '500 GB SATA', '19-inch', 'led', 'YES', 'YES', 'YES', 'YES', '1234567'),
(4, 'hp-hp-prodesk-400', 'hp', 'prodesk-400-g2-business-desktop', '	IntelÂ® Coreâ„¢ i5-4570, 3.20 GHz', '	IntelÂ® 8 Series (H81 Express) Chipset', 'LED', 'DDR-3', '500 GB SATA', '18.5-inch', 'led', 'YES', 'Yes', 'YES', 'YES', '12345678'),
(5, 'csm-csm-mars', 'csm', 'csm-csm-mars-3rd-gen-pc', 'mars-3rd-gen-pc', 'intel', 'LED', 'DDR-3', '500 GB ', '18.5-inch', 'led', 'YES', 'Yes', 'YES', 'YES', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desktop_description`
--
ALTER TABLE `desktop_description`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desktop_description`
--
ALTER TABLE `desktop_description`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
