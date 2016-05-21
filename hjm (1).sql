-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 07:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjm`
--
CREATE DATABASE IF NOT EXISTS `hjm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hjm`;

-- --------------------------------------------------------

--
-- Table structure for table `tblcase`
--

CREATE TABLE `tblcase` (
  `CaseID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `orderdatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patientfirstname` varchar(50) NOT NULL,
  `patientlastname` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `shade1` int(11) NOT NULL,
  `shade2` varchar(50) NOT NULL,
  `Tray` int(11) NOT NULL,
  `SG` int(11) NOT NULL,
  `BW` int(11) NOT NULL,
  `MC` int(11) NOT NULL,
  `OC` int(11) NOT NULL,
  `Photos` int(11) NOT NULL,
  `Articulator` int(11) NOT NULL,
  `OD` int(11) NOT NULL,
  `notes` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `duedate` varchar(15) NOT NULL,
  `duetime` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `DentistID`, `orderdatetime`, `patientfirstname`, `patientlastname`, `gender`, `age`, `shade1`, `shade2`, `Tray`, `SG`, `BW`, `MC`, `OC`, `Photos`, `Articulator`, `OD`, `notes`, `file`, `duedate`, `duetime`, `status`) VALUES
(1, 6, '2016-05-19 21:31:54', 'Patrick', 'Bagacina', '0', 18, 3, 'A1', 0, 0, 0, 0, 0, 0, 0, 0, 'Dapat parang walng ngipin.', '', '2016-05-31', '04:20', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `tblcaseteeth`
--

CREATE TABLE `tblcaseteeth` (
  `CaseID` int(11) NOT NULL,
  `teeth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcaseteeth`
--

INSERT INTO `tblcaseteeth` (`CaseID`, `teeth`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbldentist`
--

CREATE TABLE `tbldentist` (
  `DentistID` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `fax` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `bstreet` varchar(500) NOT NULL,
  `bbrgy` varchar(100) NOT NULL,
  `bcity` varchar(100) NOT NULL,
  `shipstreet` varchar(500) NOT NULL,
  `shipbrgy` varchar(100) NOT NULL,
  `shipcity` varchar(100) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldentist`
--

INSERT INTO `tbldentist` (`DentistID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `fax`, `website`, `bstreet`, `bbrgy`, `bcity`, `shipstreet`, `shipbrgy`, `shipcity`, `notes`) VALUES
(1, 'Mr.', 'Kenneth ', 'Bonagua', 'Rufino', 'Dope Dental Clinic', 'htennek@gmail.com', '8374265', '09156396650', '', 'www.ljrufino.com', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'We''re living in the world of ganja.'),
(6, 'Dr.', 'Welvin', 'Olamit', 'Medina', 'Stoned Barbs Clinic', 'wom@gmail.com', '', '09776343033', '', 'www.stonedbarbsclinic.com', '#420 Kalantas St.', 'Western Bicutan', 'Taguig City', 'Shelter 7', 'Eastern Bicutan', 'Taguig City', 'We cut hairs ang build razors.'),
(7, 'Mr.', 'Ralph', 'Bogus', 'Pagayon', 'Bogus Ticketing System Corporation', 'hplar@gmail.com', '', '09161775808', '', 'www.BTSC.com', 'Bogusan St. Extension', 'Bokahan', 'Paranaque City', 'Bogusan St. Extension', 'Bokahan', 'Paranaque City', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `ps_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserID`, `DentistID`, `username`, `password`, `ps_id`) VALUES
(1, 1, 'kenneth', '7ca955bd92ca8b00548ddf36d2e79217', 2),
(2, 6, 'welvin', '03e62a73de3d14806647ae2cfa949f80', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `DentistID` (`DentistID`);

--
-- Indexes for table `tblcaseteeth`
--
ALTER TABLE `tblcaseteeth`
  ADD KEY `CaseID` (`CaseID`);

--
-- Indexes for table `tbldentist`
--
ALTER TABLE `tbldentist`
  ADD PRIMARY KEY (`DentistID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `DentistID` (`DentistID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcase`
--
ALTER TABLE `tblcase`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD CONSTRAINT `tblcase_ibfk_1` FOREIGN KEY (`DentistID`) REFERENCES `tbldentist` (`DentistID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcaseteeth`
--
ALTER TABLE `tblcaseteeth`
  ADD CONSTRAINT `tblcaseteeth_ibfk_1` FOREIGN KEY (`CaseID`) REFERENCES `tblcase` (`CaseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`DentistID`) REFERENCES `tbldentist` (`DentistID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
