-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2022 at 08:40 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

DROP TABLE IF EXISTS `admin1`;
CREATE TABLE IF NOT EXISTS `admin1` (
  `adminid` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` VALUES(1, 'dulakshim72@gmail.com', '0713778954', 'm', '105/Koppala Road,Hirana', '123');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `town_city` varchar(20) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `note` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `needday` date NOT NULL,
  `fistshopping` varchar(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paymentoption` enum('Direct Pay','VISA','Master Card','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer1`
--

DROP TABLE IF EXISTS `customer1`;
CREATE TABLE IF NOT EXISTS `customer1` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `CustomerName` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer1`
--

INSERT INTO `customer1` VALUES(1, 'dulakshim72@gmail.com', '0713778410', 'm', '105/Koppala Road,Hirana', '456');
INSERT INTO `customer1` VALUES(2, 'fgh', '124', 'm', 'dfh', '788');
INSERT INTO `customer1` VALUES(3, 'dulakshim72@gmail.com', '0713778741', 'm', '105/Koppala Road,Hirana', '789');
INSERT INTO `customer1` VALUES(4, 'roshi@gmail.com', '0382520458', 'roshini', '105/', '789');
INSERT INTO `customer1` VALUES(5, 'wind@gmail.com', '014', 'windy', 'asdf', '159');
INSERT INTO `customer1` VALUES(6, 'fgh@gmail.com', '0713778855', 'roshini', '105/Koppala Road,Hirana', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
