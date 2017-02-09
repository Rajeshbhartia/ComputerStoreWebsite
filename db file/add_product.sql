-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 09:53 PM
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
-- Table structure for table `add_product`
--

CREATE TABLE IF NOT EXISTS `add_product` (
`user_id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `avil` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `catagorics` varchar(50) NOT NULL,
  `image_link` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`user_id`, `productname`, `price`, `avil`, `model`, `catagorics`, `image_link`) VALUES
(119, 'hp-elitebook', 60000, 5, '8460w', 'notebook', 'http://localhost/project/upload/admin1426604767hp-elitebook.png'),
(120, 'Asus vx 239', 12000, 5, 'vx239', 'monitor', 'http://localhost/project/upload/admin1426605554asus mx239.png'),
(121, 'Asus vx 279', 14000, 5, 'vx 279', 'monitor', 'http://localhost/project/upload/admin1426605602asus vx279h.png'),
(122, 'Asus mx 249', 13000, 5, 'mx 249', 'monitor', 'http://localhost/project/upload/admin14266056476a70f68849360f06d4672c86abb7b156a9e3fca4 (1).png'),
(125, 'dell-optiplex-3020mt', 43000, 5, '-core-i3-4th-gen-with-os', 'desktop', 'http://localhost/project/upload/admin1426607166dell-optiplex-3020mt-core-i3-4th-gen-with-os.jpg'),
(126, 'hp-hp-prodesk-400', 50000, 4, '400-g2-business-desktop', 'desktop', 'http://localhost/project/upload/admin1426607470hp-hp-prodesk-400-g2-business-desktop.jpg'),
(127, 'csm-csm-mars', 32000, 5, 'csm-csm-mars-3rd-gen-pc', 'desktop', 'http://localhost/project/upload/admin1426607707csm-csm-mars-3rd-gen-pc.jpg'),
(128, 'hp-laserjet', 65000, 5, 'hp-laserjet-pro-color-m451nw', 'printer', 'http://localhost/project/upload/admin1426607918hp-laserjet-pro-color-m451nw.jpg'),
(129, 'hp-laserjet-pro-m251n-color', 20000, 3, 'hp-laserjet-pro-m251n-color', 'printer', 'http://localhost/project/upload/admin1426608324hp-laserjet-pro-m251n-color.jpg'),
(130, 'Kaspersky Internet Security For Android', 200, 20, 'Kaspersky Internet Security For Android', 'antivirus', 'http://localhost/project/upload/admin1426612087Capture99.PNG'),
(131, 'Bitdefender Internet Security 2015', 365, 45, 'Bitdefender Internet Security 2015', 'antivirus', 'http://localhost/project/upload/admin1426612198Capture11.PNG'),
(132, 'Dell XPS 13z i5 ULTRA BOOK', 125000, 1, 'Dell XPS 13z i5 ULTRA BOOK', 'notebook', 'http://localhost/project/upload/admin1426618838dell-xps-13z-ultra-book-i7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
