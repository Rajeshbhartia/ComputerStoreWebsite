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
-- Table structure for table `antivirus_description`
--

CREATE TABLE IF NOT EXISTS `antivirus_description` (
`id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `software_type` varchar(100) NOT NULL,
  `protection_type` varchar(100) NOT NULL,
  `protection_against` varchar(100) NOT NULL,
  `Supporting_OS` varchar(100) NOT NULL,
  `user_limit` varchar(100) NOT NULL,
  `System_Req_Processor` varchar(100) NOT NULL,
  `Display` varchar(100) NOT NULL,
  `Product_ID` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antivirus_description`
--

INSERT INTO `antivirus_description` (`id`, `name`, `brand`, `model`, `software_type`, `protection_type`, `protection_against`, `Supporting_OS`, `user_limit`, `System_Req_Processor`, `Display`, `Product_ID`) VALUES
(2, 'ab', '', '', '', '', '', 'b', '', '', '', ''),
(3, 'abcde', '', '', '', '', '', '', '', '', '', ''),
(4, 'Bitdefender Internet Security 2015', 'Bitdefender ', 'Bitdefender Internet Security 2015', 'Student Edition', 'Internet Security', '', 'Windows Vista, Windows XP, Windows 7, Windows 8', '1', '', '', '54.149.11'),
(5, 'Kaspersky Internet Security For Android', 'Kaspersky', 'Kaspersky Internet Security For Android', 'Anti-virus', 'Internet Security', 'Viruses, malware, Identity theft by key loggers', 'Android 2.3 - 4.4,', '1 user', 'Android 2.3 - 4.4', 'Minimum screen resolution: 320 x 480', '54.157.24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antivirus_description`
--
ALTER TABLE `antivirus_description`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antivirus_description`
--
ALTER TABLE `antivirus_description`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
