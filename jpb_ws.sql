-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsqlmoo13
-- Generation Time: Mar 28, 2016 at 10:58 AM
-- Server version: 5.5.44
-- PHP Version: 4.4.9
-- 
-- Database: `jpb_ws`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `jpb_ws_users`
-- 

CREATE TABLE `jpb_ws_users` (
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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

-- 
-- Dumping data for table `jpb_ws_users`
-- 

INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-24 03:51:01', 1, 'Dinesh', 'Raj', 'Junior Officer', 'ajprince1789@gmail.com', 'user', 'Dinesh20151509', 'ADFC', '420 pandruti', 'kudalore', 'Tamil Nadu', 'India', '642554', '0999420820', '0442502077', 3, '2015-09-15', '2015-09-24', 'Y', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-24 09:33:06', 2, 'Jindal', 'Admin', 'Administrator', 'info@jindalbuttons.com', 'ADMIN', 'admin', 'Jindal buttons Pvt Ltd ', '18,Central Market, Punjabi Bagh(West)', 'New Delhi', 'New Delhi', 'India', '110026', '9910229147', '01145020000', 1, '2015-09-15', '0000-00-00', 'Y', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-25 03:10:12', 47, 'pragya', 'jindal', 'MD', 'pragya_jindal@yahoo.com', 'User', '', 'XYZ', '71/41 west punjabi bagh', 'new delhi', 'new delhi', 'india', '110026', '9810706000', '45093866', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-25 04:10:16', 48, 'payal', 'chawla', 'coordinator', 'payal@jindalbuttons.com', 'User', '', 'jindal', '56jlkj', 'new delhi', 'new delhi', 'india', '110026', '9910225421', '011-4525628', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-24 08:01:33', 45, 'victor', 'gaddiel', 'HR', 'victor.gaddiel@gmail.com', 'User', 'admin123', 'Gaddiel Technologies Pvt Ltd', '9/23 E', 'Trichy', 'Tamil Nadu', 'India', '620021', '97917555690', '04312457778', 1, '2015-09-24', '0000-00-00', 'Y', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-24 08:14:04', 46, 'Arun', 'raj', 'test', 'arunbalu79@gmail.com', 'User', '', 'test', 'test', 'THANJAVUR', 'TAMIL NADU', 'india', '613504', '09159476100', '324234', 0, '0000-00-00', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `jpb_ws_users` VALUES ('-1', '0000-00-00', '-1', '2015-09-24 08:12:46', 41, 'Arun', 'raj', 'test', 'arunbalu487@gmail.com', 'User', '', 'test', 'ew', 'THANJAVUR', 'TAMIL NADU', 'india', '613504', '09159476100', '234324', 2, '2015-09-24', '0000-00-00', 'N', NULL, NULL, NULL, NULL, NULL);
