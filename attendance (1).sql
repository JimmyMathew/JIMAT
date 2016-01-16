-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2013 at 02:28 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Designation` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Id`, `Designation`) VALUES
(24, 'Administrator'),
(25, 'Manager'),
(26, 'Project Manager'),
(27, 'Delivery Manager'),
(28, 'Team Leader'),
(29, 'Members');

-- --------------------------------------------------------

--
-- Table structure for table `government`
--

CREATE TABLE IF NOT EXISTS `government` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Reason` text NOT NULL,
  `Month` text NOT NULL,
  `Date` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `government`
--

INSERT INTO `government` (`Id`, `Reason`, `Month`, `Date`) VALUES
(4, 'Pongal Festival', 'Jan', '01/14/2013'),
(5, 'Thiruvalluvar Day', 'Jan', '01/15/2013'),
(6, 'Milad nabi(Miladi nabi)', 'Jan', '01/25/2013'),
(7, 'Republic Day', 'Jan', '01/26/2013'),
(8, 'Good Friday', 'Mar', '03/29/2013'),
(9, 'Telugu New Year', 'Apr', '04/11/2013'),
(10, 'Tamil New Year, Ambedkar Day', 'Apr', '04/14/2013'),
(11, 'Mahaveera Varthana Bagavan Jayanthi', 'Apr', '04/24/2013'),
(12, 'May Day', 'May', '05/01/2013'),
(13, 'Ramzan', 'Aug', '08/09/2013'),
(14, 'Independence Day', 'Aug', '08/15/2013'),
(15, 'Sri Krishna Jayanthi', 'Aug', '08/28/2013'),
(16, 'Sri Vinayagar Sathurthi', 'Sep', '09/09/2013'),
(17, 'Gandhi Jayanthi', 'Oct', '10/02/2013'),
(18, 'Sarasvathi Pooja, Aytha Pooja', 'Oct', '10/13/2013'),
(19, 'Bakreeth', 'Oct', '10/16/2013'),
(20, 'Deepavali (Diwali)', 'Nov', '11/02/2013'),
(21, 'Moharam', 'Nov', '11/14/2013');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `Designation` text NOT NULL,
  `Salary` int(11) NOT NULL,
  `ImagePath` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Type` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`Id`, `Name`, `Designation`, `Salary`, `ImagePath`, `Username`, `Password`, `Type`) VALUES
(74, 'Jimmy', 'Administrator', 100000, 'jimmy.jpg', 'admin', 'admin', '1'),
(90, 'khalid', 'Manager', 75000, '1362918609_khalid.jpg', 'khalid75', 'khalid75', '25'),
(91, 'george', 'Administrator', 50000, '1362918646_george.jpg', 'george91', 'george91', '24'),
(92, 'kevin', 'Project Manager', 40000, '1362918681_kevin.jpg', 'kevin92', 'kevin92', '26'),
(93, 'praveen', 'Delivery Manager', 30000, '1362918709_praveenm.jpg', 'praveen93', 'praveen93', '27'),
(94, 'nimesh', 'Team Leader', 25000, '1362918739_nimesh.jpg', 'nimesh94', 'nimesh94', '28'),
(95, 'palani', 'Team Leader', 25000, '1362918763_palani.jpg', 'palani95', 'palani95', '28'),
(96, 'arul', 'Members', 15000, '1362918782_arul.jpg', 'arul96', 'arul96', '29'),
(97, 'michel', 'Members', 15000, '1362918809_mj.jpg', 'michel97', 'michel97', '29'),
(98, 'jijesh', 'Members', 15000, '1362918826_jijesh.jpg', 'jijesh98', 'jijesh98', '29'),
(99, 'kenny', 'Members', 15000, '1362918842_kenny.jpg', 'kenny99', 'kenny99', '29'),
(100, 'krish', 'Members', 10000, '1362918865_krish.jpg', 'krish100', 'krish100', '29');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `EmpId` text NOT NULL,
  `Name` text NOT NULL,
  `Designation` text NOT NULL,
  `Leaves` text NOT NULL,
  `Permission` text NOT NULL,
  `Month` text NOT NULL,
  `Year` text NOT NULL,
  `Leavefrom` text NOT NULL,
  `Leaveto` text NOT NULL,
  `Permissiondate` text NOT NULL,
  `Permissionfrom` text NOT NULL,
  `Permissionto` text NOT NULL,
  `Attendance` text NOT NULL,
  `Weekname` text NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`EmpId`, `Name`, `Designation`, `Leaves`, `Permission`, `Month`, `Year`, `Leavefrom`, `Leaveto`, `Permissiondate`, `Permissionfrom`, `Permissionto`, `Attendance`, `Weekname`, `Id`) VALUES
('74', 'Jimmy', 'Administrator', '', '', 'Feb', '2013', '', '', '', '', '', '02/28/2013', 'Thursday', 65),
('90', 'khalid', 'Manager', '', '', 'Feb', '2013', '', '', '', '', '', '02/28/2013', 'Thursday', 66),
('92', 'kevin', 'Project Manager', '', '', 'Feb', '2013', '', '', '', '', '', '02/28/2013', 'Thursday', 67),
('96', 'arul', 'Members', '', '', 'Feb', '2013', '', '', '', '', '', '02/28/2013', 'Thursday', 68),
('74', 'Jimmy', 'Administrator', '', '', 'Mar', '2013', '', '', '', '', '', '03/10/2013', 'Sunday', 69),
('90', 'khalid', 'Manager', '', '', 'Mar', '2013', '', '', '', '', '', '03/10/2013', 'Sunday', 70),
('90', 'khalid', 'Manager', '5', '', 'Mar', '2013', '2013-03-17', '2013-03-21', '', '', '', '', '', 71),
('90', 'khalid', 'Manager', '', '2', 'Mar', '2013', '', '', '2013-03-11', '11.00', '13.00', '', '', 72),
('96', 'arul', 'Members', '1', '', 'Mar', '2013', '2013-03-13', '', '', '', '', '', '', 73),
('96', 'arul', 'Members', '', '2', 'Mar', '2013', '', '', '2013-03-14', '13.00', '15.00', '', '', 74),
('74', 'Jimmy', 'Administrator', '3', '', 'Mar', '2013', '2013-03-21', '2013-03-23', '', '', '', '', '', 75);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
