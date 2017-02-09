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
-- Table structure for table `new_order_table`
--

CREATE TABLE IF NOT EXISTS `new_order_table` (
  `id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_order_table`
--

INSERT INTO `new_order_table` (`id`, `user_id`, `productname`, `price`) VALUES
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('', '112', 'abcdef', '0'),
('R_b', '112', 'abcdef', '0'),
('R_b', '114', 'abcdefg', '0'),
('R_b', '114', 'abcdefg', '0'),
('R_b', '114', 'abcdefg', '0'),
('R_b', '107', 'abcd', '30000'),
('R_b', '107', 'abcd', '30000'),
('R_b', '88', 'Acer Aspire E5-411', '23000'),
('R_b', '88', 'Acer Aspire E5-411', '23000'),
('R_b', '88', 'Acer Aspire E5-411', '23000'),
('R_b', '103', 'Asus X200MA Intel PQC N3540 28000', '20000'),
('R_b', '88', 'Acer Aspire E5-411', '23000'),
('admin', '88', 'Acer Aspire E5-411', '23000'),
('admin', '102', 'Acer Aspire E5-411 PQC N3540 28000', '32000'),
('admin', '103', 'Asus X200MA Intel PQC N3540 28000', '20000'),
('admin', '112', 'abcdef', '0'),
('admin', '121', 'Asus vx 279', '14000'),
('admin', '120', 'Asus vx 239', '12000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
