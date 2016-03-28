-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2015 at 08:44 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jpb_ws`
--

-- --------------------------------------------------------

--
-- Table structure for table `jpb_ws_users`
--

CREATE TABLE IF NOT EXISTS `jpb_ws_users` (
  `CREATED_BY` varchar(60) NOT NULL DEFAULT '-1',
  `CREATED_DATE` date NOT NULL DEFAULT '0000-00-00',
  `LAST_UPDATE_BY` varchar(60) NOT NULL DEFAULT '-1',
  `LAST_UPDATE_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) DEFAULT NULL,
  `DESIGNATION` varchar(30) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `ROLE` varchar(30) NOT NULL,
  `PASS_WORD` varchar(60) NOT NULL,
  `COMPANY` varchar(60) NOT NULL,
  `ADDRESS` varchar(160) NOT NULL,
  `CITY` varchar(30) NOT NULL,
  `STATES` varchar(30) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `PINCODE` varchar(15) NOT NULL,
  `MOBILE` varchar(30) NOT NULL,
  `LANDLINE` varchar(30) NOT NULL,
  `ACTIVE_FLAG` int(1) NOT NULL DEFAULT '0',
  `APPRV_REJ_DATE` date NOT NULL DEFAULT '0000-00-00',
  `TERMINATED_DATE` date NOT NULL DEFAULT '0000-00-00',
  `DEFAULT_PASSWORD_CHANGED` varchar(1) NOT NULL DEFAULT 'N',
  `LAST_SUCCESS_LOGIN_DATE` date DEFAULT NULL,
  `LAST_FAILED_LOGIN_DATE` date DEFAULT NULL,
  `NEXT_PASSWORD_CHANGE_DATE` date DEFAULT NULL,
  `REMARKS` varchar(240) DEFAULT NULL,
  `SESSION_ID` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `EMAIL` (`EMAIL`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `jpb_ws_users`
--

INSERT INTO `jpb_ws_users` (`CREATED_BY`, `CREATED_DATE`, `LAST_UPDATE_BY`, `LAST_UPDATE_DATE`, `ID`, `FIRSTNAME`, `LASTNAME`, `DESIGNATION`, `EMAIL`, `ROLE`, `PASS_WORD`, `COMPANY`, `ADDRESS`, `CITY`, `STATES`, `COUNTRY`, `PINCODE`, `MOBILE`, `LANDLINE`, `ACTIVE_FLAG`, `APPRV_REJ_DATE`, `TERMINATED_DATE`, `DEFAULT_PASSWORD_CHANGED`, `LAST_SUCCESS_LOGIN_DATE`, `LAST_FAILED_LOGIN_DATE`, `NEXT_PASSWORD_CHANGE_DATE`, `REMARKS`, `SESSION_ID`) VALUES
('-1', '0000-00-00', '-1', '2015-09-18 09:12:45', 1, 'Dinesh', 'Raj', 'Junior Officer', 'ajprince1789@gmail.com', 'user', 'Dinesh20151509', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '0999420820', '0442502077', 1, '2015-09-15', '2015-09-15', 'Y', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 05:59:10', 2, 'Mohan', 'Kumar', 'Junior Officer', 'arun@gmail.com', 'ADMIN', 'Mohan.2015-09-15', 'ADFC', '444 Rajany colony', 'Trichy', 'Tamil Nadu', 'India', '600001', '2147483998', '0442502070', 1, '2015-09-15', '0000-00-00', 'Y', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 13:04:07', 26, 'Dinesh', 'Raj', 'Junior Officer', 'ajprinceton@gmail.com', 'user', '123456789', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '0999420820', '0442502077', 3, '2015-09-15', '2015-09-18', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 08:36:03', 18, 'Dinesh', 'Raj', 'Junior Officer', 'arnold_joseph02@gmail.com', '', '9751711325', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '0999420820', '0442502070', 1, '0000-00-00', '0000-00-00', 'Y', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 09:55:01', 27, '', '', 'aa', 'ajprince1789', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 10:27:48', 28, '', '', '', '', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:34:58', 29, '', '', '', 'aaaaa', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:35:40', 30, '', '', '', 'aaaaaa', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:35:59', 31, '', '', '', 'aaaaaa@jj', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:36:10', 32, '', '', '', 'aaaa@gns.co', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:57:13', 33, 'Dinesh', 'Raj', 'Junior Officer', 'ajprince17089@gmail.com', 'User', '', 'assas', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0442502070', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 12:58:24', 34, 'Dinesh', 'Raj', 'aa', 'arnold_joseph002@yahoo.in', 'User', '', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0442502070', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-16 13:03:04', 35, '', '', '', 'aaaa', 'User', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 06:39:51', 36, '4869048', '045604', 'kj;akgjd', 'ajprince17@gmail.com', 'User', '', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0442502070', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 06:53:39', 37, '', '', 'Junior Officer', 'arunbalu79@gmail.com', 'User', '', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0432423533', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 07:18:18', 38, '', '', 'Junior Officer', 'raj@gmail.com', 'User', '', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0432423533', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 07:40:35', 39, 'Dinesh', 'Raj', 'Junior Officer', 'ajprince17289@gmail.com', 'User', '', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '9994208206', '0442502077', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL),
('-1', '0000-00-00', '-1', '2015-09-18 12:02:01', 40, 'Arun', 'Raj', 'testing', 'arunbalu487@gmail.com', 'User', '12345678', 'arun@co', 'northstreet', 'thanjavur', 'Tamil Nadu', 'India', '613504', '9994208206', '0433925079', 1, '2015-09-18', '0000-00-00', 'Y', NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
