-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 06:42 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `GMAIL` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `LANDMARK` text NOT NULL,
  `CITY` text NOT NULL,
  `PCODE` text NOT NULL,
  `DISTRICT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`GMAIL`, `ADDRESS`, `LANDMARK`, `CITY`, `PCODE`, `DISTRICT`) VALUES
('deepdey20998@gmail.com', 'New Purbachal,Kalibari Road', 'Mitra Builders', 'HALISAHAR', '743136', 'NORTH 24 PGS'),
('deepdey@gmail.com', 'New Purbachal', '', 'HALISAHAR', '743136', 'NORTH 24 PGS'),
('rahul22@gmail.com', 'New Purbachal', 'Mitra Builders', 'HALISAHAR', '743136', 'NORTH 24 PGS'),
('sks@gmail.com', 'BaraiPara', '', 'Kankinara', '743135', 'North 24 Parganas'),
('aa@gmail.com', 'Baraipara', '', 'KAKINARA', '721325', 'NORTH 24 PGS');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `UID` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `GMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UID`, `PASSWORD`, `GMAIL`) VALUES
('111', '123', 'admin@gmail.co');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `NAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`NAME`, `EMAIL`, `FEEDBACK`) VALUES
('DEEP DEY', 'deepdey20998@gmail.com', 'Your site is good but there need some improvement'),
('RAHUL ROY', 'rahulroy@gmail.com', 'Your Project is nice but there are some minor Problems that need to be improved.'),
('deep dey', 'deepdey20998@gmail.com', 'good morning'),
('deep dey', 'deepdey20998@gmail.com', 'good morning'),
('deep dey', 'deepdey20998@gmail.com', 'good morning'),
('deep dey', 'deepdey20998@gmail.com', 'good morning'),
('deep dey', 'deepdey20998@gmail.com', 'good morning'),
('deep dey', 'deepdey20998@gmail.com', 'FDHDN');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `ID` text NOT NULL,
  `MNAME` text NOT NULL,
  `BNAME` text NOT NULL,
  `PRICE` text NOT NULL,
  `QTY` text NOT NULL,
  `MFD` date NOT NULL,
  `EXP` date NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `MNAME`, `BNAME`, `PRICE`, `QTY`, `MFD`, `EXP`, `IMAGE`) VALUES
('hsj5', 'Nicip 100 MG Tablet', 'Cipla Ltd.', '26', '500', '2019-06-01', '2020-12-31', '9706b16d98fde31f8b9138d8fa508e2f5ba137ed4.jpg'),
('kV2l', 'VELOZ L Capsule 10`S', 'TORRENT PHARMA (VISTA)', '168', '400', '2019-06-01', '2020-12-31', 'download.jpg'),
('2jVu', 'Metrogyl 400 MG Tablet', 'Jb Chemicals And Pharmaceuticals Ltd.', '13', '380', '2019-06-01', '2020-12-31', '39f5a804ddba35d5d14d4c83b577078e00e421231.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `OID` text NOT NULL,
  `GMAIL` text NOT NULL,
  `BID` text NOT NULL,
  `OSTATUS` varchar(20) NOT NULL DEFAULT 'PAYMENT NOT DONE',
  `AMMOUNT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OID`, `GMAIL`, `BID`, `OSTATUS`, `AMMOUNT`) VALUES
('T17m2b', 'deepdey20998@gmail.com', 'hsj5', 'PAYMENT NOT DONE', '26'),
('fJj1vD', 'deepdey20998@gmail.com', 'kV2l', 'PAYMENT NOT DONE', '168'),
('T9PE0t', 'deepdey20998@gmail.com', '2jVu', 'PAYMENT NOT DONE', '13'),
('7MEiKY', 'deepdey20998@gmail.com', '2jVu', 'PAYMENT NOT DONE', '13');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UNAME` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `GMAIL` text NOT NULL,
  `GENDER` text NOT NULL,
  `PH` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `UNAME`, `PASSWORD`, `GMAIL`, `GENDER`, `PH`) VALUES
(9, 'DEEP DEY', '12345678', 'deepdey20998@gmail.com', 'male', '8697448896'),
(64, 'DEEP', '12345678', 'deepdey@gmail.com', 'male', '8697448896'),
(65, 'RAHUL ROY', '12345678', 'rahul@gmail.com', 'male', '8697448896'),
(66, 'RAHUL', '123456789', 'rahul22@gmail.com', 'male', '8697448896'),
(67, 'RAHUL', '12345678', 'rahul11@gmail.com', 'male', '8697448896'),
(69, 'SACHIN KUMAR SHAW', '12345678', 'sks@gmail.com', 'male', '9874086640'),
(70, 'DEEP', '12345678', 'rahul13@gmail.com', 'male', '8697448896'),
(71, 'DEEP', '12345678', 'aa@gmail.com', 'male', '8697448896');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `TID` text NOT NULL,
  `PRICE` text NOT NULL,
  `GMAIL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TID`, `PRICE`, `GMAIL`) VALUES
('4545', '8', 'deepdey20998@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
