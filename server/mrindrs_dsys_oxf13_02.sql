-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2025 at 10:29 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrindrs/dsys/oxf13/02`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

DROP TABLE IF EXISTS `batches`;
CREATE TABLE IF NOT EXISTS `batches` (
  `no` int(40) NOT NULL AUTO_INCREMENT,
  `crscname` varchar(100) NOT NULL,
  `batcname` varchar(50) NOT NULL,
  `batfcname` varchar(202) NOT NULL,
  `batno` varchar(30) NOT NULL,
  `batstart` varchar(200) NOT NULL,
  `batstatus` varchar(400) NOT NULL DEFAULT 'active',
  `bateffdate` varchar(500) NOT NULL DEFAULT '0',
  `batstcountall` varchar(100) NOT NULL DEFAULT '0',
  `batstcountactive` varchar(202) NOT NULL DEFAULT '0',
  `bataddby` varchar(202) NOT NULL,
  `bataddtime` varchar(202) NOT NULL,
  `bateditby` varchar(202) NOT NULL DEFAULT '0',
  `batedittime` varchar(202) NOT NULL DEFAULT '0',
  `batdatastatus` varchar(202) NOT NULL DEFAULT '1',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ccr`
--

DROP TABLE IF EXISTS `ccr`;
CREATE TABLE IF NOT EXISTS `ccr` (
  `no` int(255) NOT NULL AUTO_INCREMENT,
  `ccrdate` varchar(100) NOT NULL,
  `ccrstaff` varchar(200) NOT NULL,
  `ccrbatch` varchar(200) NOT NULL,
  `ccrstartt` varchar(200) NOT NULL,
  `ccrfinishedt` varchar(101) NOT NULL,
  `ccrdesc` longtext NOT NULL,
  `ccraddt` varchar(202) NOT NULL,
  `ccraddby` varchar(201) NOT NULL,
  `ccrdatastatus` varchar(12) NOT NULL DEFAULT '1',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `no` int(50) NOT NULL AUTO_INCREMENT,
  `crsname` varchar(300) NOT NULL,
  `crscname` varchar(50) NOT NULL,
  `crsdesc` longtext NOT NULL,
  `crsstart` varchar(200) NOT NULL,
  `crsaddtime` varchar(400) NOT NULL,
  `crssetby` varchar(500) NOT NULL,
  `crsdatastatus` varchar(12) NOT NULL DEFAULT '1',
  `crsstatus` varchar(12) NOT NULL DEFAULT 'active',
  `crsedittime` varchar(50) NOT NULL DEFAULT '0',
  `crseditby` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE IF NOT EXISTS `staffs` (
  `no` int(12) NOT NULL AUTO_INCREMENT,
  `sfregid` varchar(100) NOT NULL,
  `sffullname` varchar(200) NOT NULL,
  `sfnameini` varchar(100) NOT NULL,
  `sfcletterno` varchar(200) NOT NULL,
  `sfnic` varchar(400) NOT NULL,
  `sfjdate` varchar(500) NOT NULL,
  `sfcname` varchar(202) NOT NULL,
  `sfcid` varchar(202) NOT NULL,
  `sfpwrk` varchar(202) NOT NULL,
  `sfswrk` varchar(202) NOT NULL DEFAULT '0',
  `sfgen` varchar(202) NOT NULL,
  `sfadd` varchar(202) NOT NULL,
  `sfdob` varchar(202) NOT NULL,
  `sfmobno` varchar(202) NOT NULL,
  `sflang` varchar(202) NOT NULL,
  `sfimg` varchar(202) NOT NULL,
  `sfadddate` varchar(202) NOT NULL,
  `sfaddby` varchar(202) NOT NULL,
  `authaccess` varchar(202) NOT NULL DEFAULT '0',
  `authpswrd` varchar(202) NOT NULL DEFAULT '0',
  `sfadmin` varchar(202) NOT NULL DEFAULT '0',
  `sfpswrd` varchar(202) NOT NULL DEFAULT '0',
  `sfstatus` varchar(202) NOT NULL DEFAULT 'active',
  `sfldate` varchar(202) NOT NULL DEFAULT '0',
  `sfemail` varchar(200) NOT NULL,
  `sfedutit` varchar(202) NOT NULL DEFAULT '-',
  `sfeditby` varchar(121) NOT NULL DEFAULT '0',
  `sfdatastatus` varchar(12) NOT NULL DEFAULT '1',
  `sfeditdate` varchar(202) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`no`, `sfregid`, `sffullname`, `sfnameini`, `sfcletterno`, `sfnic`, `sfjdate`, `sfcname`, `sfcid`, `sfpwrk`, `sfswrk`, `sfgen`, `sfadd`, `sfdob`, `sfmobno`, `sflang`, `sfimg`, `sfadddate`, `sfaddby`, `authaccess`, `authpswrd`, `sfadmin`, `sfpswrd`, `sfstatus`, `sfldate`, `sfemail`, `sfedutit`, `sfeditby`, `sfdatastatus`, `sfeditdate`) VALUES
(1, 'OXF/STREG/01', 'Admin', 'Admin', '02458', '0000000000', '2023-09-09', 'ADM', '', '--', '--', 'M', '--', '2023-09-09', '-', 'english', 'unknown.jpeg', '04:52:00pm', 'MusaffarIndrs', '0', '0', '101', '0000', 'active', '0', 'contact@musaffar.me', 'musaffar', 'OXF/STREG/01', '1', '09/09/2023');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `no` int(255) NOT NULL AUTO_INCREMENT,
  `stregno` varchar(500) DEFAULT NULL,
  `batfcname` varchar(202) NOT NULL,
  `stnamef` varchar(1010) NOT NULL,
  `stnameini` varchar(101) NOT NULL,
  `strole` varchar(202) NOT NULL,
  `stattr` varchar(1011) NOT NULL,
  `stdob` varchar(20) NOT NULL,
  `stmail` varchar(500) NOT NULL,
  `stgen` varchar(20) NOT NULL,
  `stnic` varchar(303) NOT NULL,
  `stimg` varchar(303) NOT NULL,
  `steducen` varchar(303) NOT NULL DEFAULT 'none',
  `steduyear` varchar(303) NOT NULL DEFAULT 'none',
  `stedugrade` varchar(303) NOT NULL DEFAULT 'none',
  `stjdate` varchar(303) NOT NULL,
  `stadmfee` varchar(202) NOT NULL,
  `steffdate` varchar(20) NOT NULL DEFAULT '0',
  `ststatus` varchar(202) NOT NULL DEFAULT 'none',
  `staddby` varchar(202) NOT NULL,
  `stadddate` varchar(20) NOT NULL,
  `steditby` varchar(202) NOT NULL DEFAULT '0',
  `steditdate` varchar(20) NOT NULL DEFAULT '0',
  `pstnameini` varchar(202) NOT NULL,
  `pstoccu` varchar(202) DEFAULT 'none',
  `pstmob` varchar(20) DEFAULT 'none',
  `pstwa` varchar(20) NOT NULL,
  `stdatastatus` varchar(3) NOT NULL DEFAULT '1',
  `stdrpdate` varchar(101) NOT NULL DEFAULT '0',
  `stdrpreason` longtext,
  `sttransdate` varchar(50) NOT NULL DEFAULT '0',
  `sttransfrom` varchar(200) NOT NULL DEFAULT '0',
  `sttransto` varchar(200) NOT NULL DEFAULT '0',
  `sttransreason` longtext,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `no` int(202) NOT NULL AUTO_INCREMENT,
  `tscode` varchar(202) NOT NULL,
  `tstitle` varchar(200) NOT NULL,
  `tsfrom` varchar(200) NOT NULL,
  `tsto` varchar(200) NOT NULL,
  `tsdesc` longtext NOT NULL,
  `tsrmrk` longtext,
  `tssdate` varchar(202) NOT NULL,
  `tsfdate` varchar(202) NOT NULL,
  `tsstatus` varchar(202) NOT NULL,
  `tsdatastatus` varchar(202) NOT NULL DEFAULT '1',
  `date` varchar(202) NOT NULL,
  `time` varchar(202) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
CREATE TABLE IF NOT EXISTS `transfers` (
  `no` int(20) NOT NULL AUTO_INCREMENT,
  `stregno` varchar(101) NOT NULL,
  `stregnonew` varchar(202) NOT NULL,
  `stnameini` varchar(300) NOT NULL,
  `sttransfrom` varchar(200) NOT NULL,
  `sttransto` varchar(200) NOT NULL,
  `sttransreason` longtext NOT NULL,
  `sttransdate` varchar(500) NOT NULL,
  `sttransby` varchar(202) NOT NULL,
  `time` varchar(202) NOT NULL,
  `date` varchar(202) NOT NULL,
  `stno` varchar(202) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
