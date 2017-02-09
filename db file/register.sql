-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 09:55 PM
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
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `user_id`, `password`, `repassword`) VALUES
(1, 'rajesh', 'bhartia', 'r@gmail', 'R_b', '1234', ''),
(2, 'prince', 'hasan', 'p@gmail', 'p_h', '12345', ''),
(3, 'pial', 'kanti', 'p@gmail', 'pial_kanti', '12345', ''),
(4, 'rubel', 'ahamed', 'r@gmail', 'rubel_ahamed', '12345', ''),
(5, 'rubel2', 'ahamed', 'r@gmail', 'rubel2_ahamed', '1234', ''),
(6, 'rajesh', 'bhartia', 'rbhartiamuk@gmail.com', 'admin', '123435', ''),
(7, 'Piyal', 'Shovro', 'piyal@gami.com', 'Piyal_Shovro', '12345', ''),
(8, 'Piyal', 'Shovro', 'piyal@gami.com', 'pial.shovro', '123456', ''),
(9, 'prince', 'bh', 'prince@gmail.com', 'prince_bhartia', '123456', '12345'),
(10, 'prince', 'bhartia', 'prince@gmail.com', 'prince_bhartia1', '1234567', '12345'),
(11, 'prince', 'bhartia', 'prince@gmail.com', 'prince_bhartia4', '123456789', '12345'),
(12, 'prince', 'bhartia', 'prince@gmail.com', 'prince_bhartia4', 'ddd', '5555'),
(13, 'Rajesh', 'Bhartia', 'r_b@gmail.com', 'Rajesh_bhartia', '', ''),
(14, 'Rajesh', 'Bhartia', 'r_b@gmail.com', 'Rajesh_bhartia', '', ''),
(15, 'Rajesh', 'Bhartia', 'r_b@gmail.com', 'Rajesh_bhartia', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
