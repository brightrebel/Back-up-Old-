-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for coredb
CREATE DATABASE IF NOT EXISTS `coredb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `coredb`;


-- Dumping structure for table coredb.artdep
CREATE TABLE IF NOT EXISTS `artdep` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `TaD` datetime(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `logo` longblob NOT NULL,
  `banner` longblob NOT NULL,
  `video` longblob NOT NULL,
  `background` longblob NOT NULL,
  `article background` longblob NOT NULL,
  `facebook url` varchar(75) NOT NULL,
  `twitter url` varchar(75) NOT NULL,
  `google plus url` varchar(75) NOT NULL,
  `instagram url` varchar(75) NOT NULL,
  `short info` varchar(100) NOT NULL,
  `extended info` varchar(500) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.itdep
CREATE TABLE IF NOT EXISTS `itdep` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `TaD` datetime(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `logo` longblob NOT NULL,
  `banner` longblob NOT NULL,
  `video` longblob NOT NULL,
  `background` longblob NOT NULL,
  `article background` longblob NOT NULL,
  `facebook url` varchar(75) NOT NULL,
  `twitter url` varchar(75) NOT NULL,
  `google plus url` varchar(75) NOT NULL,
  `instagram url` varchar(75) NOT NULL,
  `short info` varchar(100) NOT NULL,
  `extended info` varchar(500) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.main
CREATE TABLE IF NOT EXISTS `main` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `small info` varchar(50) NOT NULL,
  `backroundimg` longblob NOT NULL,
  `video` longblob NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.newsfeed
CREATE TABLE IF NOT EXISTS `newsfeed` (
  `id` int(11) DEFAULT NULL,
  `newsslide` longblob NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.retdep
CREATE TABLE IF NOT EXISTS `retdep` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `TaD` datetime(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `logo` longblob NOT NULL,
  `banner` longblob NOT NULL,
  `video` longblob NOT NULL,
  `background` longblob NOT NULL,
  `article background` longblob NOT NULL,
  `facebook url` varchar(75) NOT NULL,
  `twitter url` varchar(75) NOT NULL,
  `google plus url` varchar(75) NOT NULL,
  `instagram url` varchar(75) NOT NULL,
  `short info` varchar(100) NOT NULL,
  `extended info` varchar(500) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.studdep
CREATE TABLE IF NOT EXISTS `studdep` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `TaD` datetime(6) NOT NULL,
  `location` varchar(50) NOT NULL,
  `logo` longblob NOT NULL,
  `banner` longblob NOT NULL,
  `video` longblob NOT NULL,
  `background` longblob NOT NULL,
  `article background` longblob NOT NULL,
  `facebook url` varchar(75) NOT NULL,
  `twitter url` varchar(75) NOT NULL,
  `google plus url` varchar(75) NOT NULL,
  `instagram url` varchar(75) NOT NULL,
  `short info` varchar(100) NOT NULL,
  `extended info` varchar(500) NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table coredb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ussername` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
