-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2022 at 05:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evacuationmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

DROP TABLE IF EXISTS `center`;
CREATE TABLE IF NOT EXISTS `center` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `chotline` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`cid`, `cname`, `caddress`, `chotline`) VALUES
(1, 'Central Gym', 'Pob. Maple Express Plasa ', '890-567-435'),
(2, 'Central Elementary School', '1313 Mockingbird Lane', '567-908-456'),
(3, 'Central High School', 'Ginger St. Avenue ', '789-567-890'),
(4, 'Central Parish Church', '607 S. Ramos Mandaluyong St. ', '117-203-99');

-- --------------------------------------------------------

--
-- Table structure for table `street`
--

DROP TABLE IF EXISTS `street`;
CREATE TABLE IF NOT EXISTS `street` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `person in charge` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `street`
--

INSERT INTO `street` (`id`, `name`, `person in charge`, `contactnumber`) VALUES
(1, 'Zone 1', 'Juan Dela Cruz', '09873456236'),
(2, 'Zone 2', 'John Doe', '09238976403'),
(3, 'Zone 3', 'Madeline Diaz', '09991245678'),
(4, 'Zone 4', 'Odette Chua', '09526378491');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fambers` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fambers`, `contactnum`, `street`, `role`, `status`) VALUES
(1, 'admin', 'admin', '', '09784967850', '', 'admin', ''),
(6, 'Fabiantes', '101', '5', '09784967850', 'Zone 1', 'user', 'Needs Evacuation Support'),
(7, 'Faldas', '102', '8', '09876950462', 'Zone 4', 'user', 'Needs Evacuation Support'),
(8, 'Ycay', '103', '5', '09786955551', 'Zone 1', 'user', 'Safe House'),
(9, 'Aspera', '104', '5', '09261334222', 'Zone 3', 'user', 'Needs Evacuation Support'),
(10, 'Cahong', '105', '4', '09786958551', 'Zone 3', 'user', 'Safe House'),
(11, 'Tan', '106', '5', '09261334333', 'Zone 2', 'user', 'Safe House'),
(12, 'Damaso', '107', '3', '09786951234', 'Zone 4', 'user', 'Safe House');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
