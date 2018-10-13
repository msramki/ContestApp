-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2018 at 11:09 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestdetail`
--

DROP TABLE IF EXISTS `contestdetail`;
CREATE TABLE IF NOT EXISTS `contestdetail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CandidateName` varchar(200) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `ContactNo` varchar(40) NOT NULL,
  `EmailId` varchar(300) NOT NULL,
  `MaritialStatus` varchar(20) NOT NULL,
  `WedAnniv` varchar(20) NOT NULL,
  `Fburl` varchar(300) NOT NULL,
  `Twurl` varchar(300) NOT NULL,
  `Linurl` varchar(300) NOT NULL,
  `Weburl` varchar(300) NOT NULL,
  `Blogurl` varchar(300) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `SubjectTitl` varchar(600) NOT NULL,
  `ArticleText` varchar(3000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
