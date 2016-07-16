-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2016 at 06:31 AM
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
  `status_id` int(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `DentistID`, `orderdatetime`, `patientfirstname`, `patientlastname`, `gender`, `age`, `shade1`, `shade2`, `Tray`, `SG`, `BW`, `MC`, `OC`, `Photos`, `Articulator`, `OD`, `notes`, `file`, `duedate`, `duetime`, `status_id`) VALUES
(1, 1, '2016-07-14 11:16:09', 'Abdul', 'Jabar', '1', 51, 2, 'A2.5', 1, 0, 1, 0, 1, 0, 1, 0, '', '', '2016-08-31', '12:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblcaseitem`
--

CREATE TABLE `tblcaseitem` (
  `CaseID` int(11) NOT NULL,
  `ItemID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcaseitem`
--

INSERT INTO `tblcaseitem` (`CaseID`, `ItemID`) VALUES
(1, 'TP');

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
(1, 6);

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
  `notes` text NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldentist`
--

INSERT INTO `tbldentist` (`DentistID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `fax`, `website`, `bstreet`, `bbrgy`, `bcity`, `shipstreet`, `shipbrgy`, `shipcity`, `notes`, `active`) VALUES
(1, 'Mr.', 'Kenneth ', 'Bonagua', 'Rufino', 'Dope Dental Clinic', 'htennek@gmail.com', '8374265', '09156396650', '', 'www.ljrufino.com', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'We''re living in the world of ganja.', 1),
(6, 'Dr.', 'Welvin', 'Olamit', 'Medina', 'Stoned Barbs Clinic', 'wom@gmail.com', '', '09776343033', '', 'www.stonedbarbsclinic.com', '#420 Kalantas St.', 'Western Bicutan', 'Taguig City', 'Shelter 7', 'Eastern Bicutan', 'Taguig City', 'We cut hairs ang build razors.', 0),
(7, 'Mr.', 'Ralph', 'Bogus', 'Pagayon', 'Bogus Ticketing System Corporation', 'hplar@gmail.com', '', '09161775808', '', 'www.BTSC.com', 'Bogusan St. Extension', 'Bokahan', 'Paranaque City', 'Bogusan St. Extension', 'Bokahan', 'Paranaque City', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `InvoiceID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `CaseID` int(11) NOT NULL,
  `datecreated` datetime DEFAULT NULL,
  `duedate` varchar(50) NOT NULL,
  `Total` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`InvoiceID`, `DentistID`, `CaseID`, `datecreated`, `duedate`, `Total`, `status`, `paid`) VALUES
(1, 1, 1, '2016-07-14 05:19:02', '2016-07-31', 4750, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoiceitem`
--

CREATE TABLE `tblinvoiceitem` (
  `InvoiceID` int(11) NOT NULL,
  `ItemID` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `SubTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoiceitem`
--

INSERT INTO `tblinvoiceitem` (`InvoiceID`, `ItemID`, `QTY`, `Amount`, `SubTotal`) VALUES
(1, 'TP', 1, 1500, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `ItemID` varchar(50) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `ItemDesc` varchar(500) NOT NULL,
  `Cost` float NOT NULL,
  `Price` float NOT NULL,
  `QTY` int(11) NOT NULL,
  `QTYBelow` int(11) NOT NULL,
  `ReorderQTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`ItemID`, `SupplierID`, `ItemDesc`, `Cost`, `Price`, `QTY`, `QTYBelow`, `ReorderQTY`) VALUES
('EXS', 6, 'Expansion Screw (ES)', 0, 750, 25, 5, 20),
('LU', 7, 'Lucitone', 500, 800, 30, 15, 15),
('TP', 7, 'Tilite Porcelain Jacket Crown (TPJC)', 500, 1500, 100, 50, 55);

-- --------------------------------------------------------

--
-- Table structure for table `tblpo`
--

CREATE TABLE `tblpo` (
  `POID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `POStatusID` int(11) NOT NULL DEFAULT '1',
  `orderdatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `shipdate` varchar(15) NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpoitem`
--

CREATE TABLE `tblpoitem` (
  `POID` int(11) NOT NULL,
  `ItemID` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `SubTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpostatus`
--

CREATE TABLE `tblpostatus` (
  `POStatusID` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpostatus`
--

INSERT INTO `tblpostatus` (`POStatusID`, `status`) VALUES
(1, 'New'),
(2, 'Approved'),
(3, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE `tblstatus` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstatus`
--

INSERT INTO `tblstatus` (`status_id`, `status`) VALUES
(1, 'New'),
(2, 'In Production'),
(3, 'Completed'),
(4, 'On Hold');

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `SupplierID` int(11) NOT NULL,
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
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`SupplierID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `fax`, `website`, `bstreet`, `bbrgy`, `bcity`, `notes`) VALUES
(1, 'Mr.', 'Linji', 'Bonagua', 'Rufino', 'Dope Dental Clinic', 'htennek@gmail.com', '8374265', '09156396650', '', 'www.ljrufino.com', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'We''re living in the world of ganja.'),
(6, 'Mr.', 'Welvin', 'Olamit', 'Medina', 'Stoned Barbs Company', 'wom@gmail.com', '8374265', '09156396650', '', 'www.ljrufino.com', 'Blk. 12 Lot 1 Damudamu St.', 'Damu', 'Tagaytay CIty', 'We''re living in the world of ganja.'),
(7, 'Mr.', 'Ralph', 'Bogus', 'Pagayon', 'Bogus Ticketing System Corporation', 'hplar@gmail.com', '', '09161775808', '', 'www.BTSC.com', 'Bogusan St. Extension', 'Bokahan', 'Paranaque City', '');

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
  ADD KEY `DentistID` (`DentistID`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `tblcaseitem`
--
ALTER TABLE `tblcaseitem`
  ADD KEY `CaseID` (`CaseID`),
  ADD KEY `ItemID` (`ItemID`);

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
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD UNIQUE KEY `InvoiceID` (`InvoiceID`),
  ADD KEY `CaseID` (`CaseID`),
  ADD KEY `DentistID` (`DentistID`);

--
-- Indexes for table `tblinvoiceitem`
--
ALTER TABLE `tblinvoiceitem`
  ADD KEY `InvoiceID` (`InvoiceID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `SupplierID` (`SupplierID`);

--
-- Indexes for table `tblpo`
--
ALTER TABLE `tblpo`
  ADD PRIMARY KEY (`POID`),
  ADD KEY `DentistID` (`SupplierID`),
  ADD KEY `status_id` (`Total`),
  ADD KEY `POStatusID` (`POStatusID`),
  ADD KEY `Total` (`Total`) USING BTREE;

--
-- Indexes for table `tblpoitem`
--
ALTER TABLE `tblpoitem`
  ADD KEY `ItemID` (`ItemID`),
  ADD KEY `POID` (`POID`);

--
-- Indexes for table `tblpostatus`
--
ALTER TABLE `tblpostatus`
  ADD PRIMARY KEY (`POStatusID`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`SupplierID`);

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
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tblpo`
--
ALTER TABLE `tblpo`
  MODIFY `POID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpostatus`
--
ALTER TABLE `tblpostatus`
  MODIFY `POStatusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  ADD CONSTRAINT `tblcase_ibfk_1` FOREIGN KEY (`DentistID`) REFERENCES `tbldentist` (`DentistID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcase_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `tblstatus` (`status_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tblcaseitem`
--
ALTER TABLE `tblcaseitem`
  ADD CONSTRAINT `tblcaseitem_ibfk_1` FOREIGN KEY (`CaseID`) REFERENCES `tblcase` (`CaseID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblcaseitem_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `tblitem` (`ItemID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblcaseteeth`
--
ALTER TABLE `tblcaseteeth`
  ADD CONSTRAINT `tblcaseteeth_ibfk_1` FOREIGN KEY (`CaseID`) REFERENCES `tblcase` (`CaseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD CONSTRAINT `tblinvoice_ibfk_1` FOREIGN KEY (`DentistID`) REFERENCES `tbldentist` (`DentistID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblinvoice_ibfk_2` FOREIGN KEY (`CaseID`) REFERENCES `tblcase` (`CaseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblinvoiceitem`
--
ALTER TABLE `tblinvoiceitem`
  ADD CONSTRAINT `tblinvoiceitem_ibfk_1` FOREIGN KEY (`InvoiceID`) REFERENCES `tblinvoice` (`InvoiceID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblinvoiceitem_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `tblitem` (`ItemID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblitem`
--
ALTER TABLE `tblitem`
  ADD CONSTRAINT `tblitem_ibfk_1` FOREIGN KEY (`SupplierID`) REFERENCES `tblsupplier` (`SupplierID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpo`
--
ALTER TABLE `tblpo`
  ADD CONSTRAINT `tblpo_ibfk_1` FOREIGN KEY (`SupplierID`) REFERENCES `tblsupplier` (`SupplierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblpo_ibfk_3` FOREIGN KEY (`POStatusID`) REFERENCES `tblpostatus` (`POStatusID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblpoitem`
--
ALTER TABLE `tblpoitem`
  ADD CONSTRAINT `tblpoitem_ibfk_1` FOREIGN KEY (`POID`) REFERENCES `tblpo` (`POID`),
  ADD CONSTRAINT `tblpoitem_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `tblitem` (`ItemID`);

--
-- Constraints for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `tbluser_ibfk_1` FOREIGN KEY (`DentistID`) REFERENCES `tbldentist` (`DentistID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
