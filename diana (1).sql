-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 03:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diana`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `MENU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MENU_NAMA` varchar(20) DEFAULT NULL,
  `MENU_URI` varchar(20) DEFAULT NULL,
  `MENU_AKSES` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`MENU_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MENU_ID`, `MENU_NAMA`, `MENU_URI`, `MENU_AKSES`) VALUES
(1, 'home', 'home/', '+1+2+3+'),
(2, 'master', 'master/', '+1+2+3+');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `keluhan` varchar(1000) NOT NULL,
  `usia` int(11) NOT NULL,
  `obat` varchar(1000) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE IF NOT EXISTS `status_user` (
  `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT,
  `STATUS_USER` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ID_STATUS_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`ID_STATUS_USER`, `STATUS_USER`) VALUES
(1, 'ak'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_user`
--

CREATE TABLE IF NOT EXISTS `tipe_user` (
  `ID_TIPE_USER` int(11) NOT NULL AUTO_INCREMENT,
  `TIPE_USER` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_TIPE_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipe_user`
--

INSERT INTO `tipe_user` (`ID_TIPE_USER`, `TIPE_USER`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE IF NOT EXISTS `user_` (
  `ID_USER` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL,
  `ID_TIPE_USER` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`ID_USER`, `USERNAME`, `PASSWORD`, `ID_TIPE_USER`) VALUES
(1, 'root', '92c49e9f763bee6646ed8efb97120861', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
