-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 12:07 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `tblcase`
--

CREATE TABLE `tblcase` (
  `CaseID` int(11) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `CaseTypeID` varchar(10) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `orderdatetime` datetime NOT NULL,
  `patientfirstname` varchar(50) NOT NULL,
  `patientlastname` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `shade1` int(11) NOT NULL,
  `shade2` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `Tray` int(11) NOT NULL,
  `SG` int(11) NOT NULL,
  `BW` int(11) NOT NULL,
  `MC` int(11) NOT NULL,
  `OC` int(11) NOT NULL,
  `Photos` int(11) NOT NULL,
  `Articulator` int(11) NOT NULL,
  `OD` int(11) NOT NULL,
  `teeth` varchar(500) NOT NULL,
  `items` varchar(500) NOT NULL,
  `notes` text NOT NULL,
  `file` text NOT NULL,
  `duedate` varchar(15) NOT NULL,
  `duetime` varchar(15) NOT NULL,
  `status_id` int(50) NOT NULL DEFAULT '1',
  `createdon` datetime DEFAULT '0000-00-00 00:00:00',
  `completedon` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcase1`
--

CREATE TABLE `tblcase1` (
  `CaseID` int(11) NOT NULL,
  `Type` varchar(500) NOT NULL,
  `CaseTypeID` varchar(10) NOT NULL,
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
  `teeth` varchar(500) NOT NULL,
  `items` varchar(500) NOT NULL,
  `notes` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `duedate` varchar(15) NOT NULL,
  `duetime` varchar(15) NOT NULL,
  `status_id` int(50) NOT NULL DEFAULT '1',
  `createdon` datetime DEFAULT '0000-00-00 00:00:00',
  `completedon` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcase1`
--

INSERT INTO `tblcase1` (`CaseID`, `Type`, `CaseTypeID`, `DentistID`, `orderdatetime`, `patientfirstname`, `patientlastname`, `gender`, `age`, `shade1`, `shade2`, `Tray`, `SG`, `BW`, `MC`, `OC`, `Photos`, `Articulator`, `OD`, `teeth`, `items`, `notes`, `file`, `duedate`, `duetime`, `status_id`, `createdon`, `completedon`) VALUES
(1, 'Others', 'EX', 26, '2016-09-21 08:00:51', 'Jesus', 'Bongolan', '1', 21, 3, 'A1', 0, 0, 1, 1, 1, 1, 1, 0, '1,2,3,4,5,6,7,8', 'CBM,E,ES,FS-TK', '', '', '2016-09-27', '20:18', 3, '2016-09-22 00:00:00', '2016-09-26 00:00:00'),
(2, 'FIXED', 'PJ', 18, '2016-09-29 10:31:14', 'Jobert', 'Bajaro', '1', 52, 4, 'A3.5', 1, 1, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'CBM,E,ES', '', '', '2016-10-12', '14:25', 1, '2016-09-30 00:00:00', '2016-10-11 00:00:00'),
(3, 'FIXED', 'C', 18, '2016-09-14 19:28:31', 'Wright', 'Horcajo', '1', 60, 2, 'A1', 1, 1, 1, 1, 1, 0, 1, 1, '1,2,3,4,5', 'CBM,E,ES', '', '', '2016-09-22', '15:23', 1, '2016-09-15 00:00:00', '2016-09-21 00:00:00'),
(4, 'Others', 'MG', 27, '2016-09-21 13:33:45', 'John Carlo', 'Duzon', '1', 47, 3, 'A3', 0, 0, 1, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'CBM,E,ES,FS-TK', '', '', '2016-10-09', '17:09', 1, '2016-09-22 00:00:00', '2016-10-08 00:00:00'),
(5, 'RPD', 'D', 9, '2016-09-12 20:30:41', 'Roger', 'Condino', '1', 59, 3, 'A3', 0, 1, 1, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11', 'CBM', '', '', '2016-10-03', '12:04', 1, '2016-09-13 00:00:00', '2016-10-02 00:00:00'),
(6, 'FIXED', 'P', 16, '2016-09-03 16:01:55', 'Charbi', 'Escapalao', '1', 48, 4, 'A3', 0, 1, 1, 1, 0, 1, 0, 0, '1,2,3,4,5,6,7,8', 'CBM,E', '', '', '2016-09-18', '17:21', 1, '2016-09-04 00:00:00', '2016-09-17 00:00:00'),
(7, 'Others', 'EX', 12, '2016-09-15 15:29:18', 'Jobert', 'Monares', '1', 32, 3, 'A3.5', 1, 1, 1, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-27', '18:39', 1, '2016-09-16 00:00:00', '2016-09-26 00:00:00'),
(8, 'Others', 'R', 12, '2016-09-16 20:41:57', 'Ricardo', 'Dimaano', '1', 36, 4, 'A3.5', 1, 1, 0, 1, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-04', '18:41', 1, '2016-09-17 00:00:00', '2016-10-03 00:00:00'),
(9, 'RPD', 'TH', 16, '2016-09-27 20:49:51', 'Joseph Albert', 'Sudario', '1', 22, 2, 'A3.5', 1, 1, 1, 0, 0, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-10', '11:56', 1, '2016-09-28 00:00:00', '2016-10-09 00:00:00'),
(10, 'RPD', 'OP', 30, '2016-09-20 13:30:31', 'Ferdinand', 'Bajaro', '1', 32, 1, 'A1', 0, 1, 1, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-26', '13:09', 1, '2016-09-21 00:00:00', '2016-09-25 00:00:00'),
(11, 'FIXED', 'P', 13, '2016-09-17 09:06:03', 'Jozel', 'Dolor', '1', 50, 1, 'A2.5', 1, 1, 1, 0, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-30', '09:39', 1, '2016-09-18 00:00:00', '2016-09-29 00:00:00'),
(12, 'FIXED', 'VE', 17, '2016-09-11 14:18:56', 'Joseph Albert', 'De Vera', '1', 48, 1, 'A2.5', 0, 0, 0, 0, 0, 1, 1, 0, '1,2,3,4,5,6,7', 'CBM,E,ES,FS-TK', '', '', '2016-09-28', '17:19', 1, '2016-09-12 00:00:00', '2016-09-27 00:00:00'),
(13, 'RPD', 'COM', 23, '2016-09-13 20:51:50', 'Cosme', 'Boligao', '1', 28, 4, 'A3', 0, 1, 0, 1, 1, 0, 0, 0, '1,2,3,4,5,6,7,8', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-18', '10:36', 1, '2016-09-14 00:00:00', '2016-09-17 00:00:00'),
(14, 'FIXED', 'Z', 10, '2016-09-19 15:24:59', 'Cosme', 'Bendana', '1', 50, 3, 'A1', 0, 1, 0, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-26', '10:32', 1, '2016-09-20 00:00:00', '2016-09-25 00:00:00'),
(15, 'Others', 'MG', 14, '2016-09-12 19:48:49', 'Angelito', 'Valdez', '1', 20, 3, 'A2.5', 0, 1, 0, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'CBM,E', '', '', '2016-09-19', '14:16', 1, '2016-09-13 00:00:00', '2016-09-18 00:00:00'),
(16, 'FIXED', 'PJ', 15, '2016-09-14 14:46:41', 'Ferdinand', 'Nicomedez', '1', 22, 3, 'A3', 0, 0, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-26', '17:24', 1, '2016-09-15 00:00:00', '2016-09-25 00:00:00'),
(17, 'FIXED', 'Z', 21, '2016-09-16 19:37:49', 'Ferdinand', 'Abanil', '1', 41, 4, 'A3.5', 1, 1, 0, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9', 'CBM', '', '', '2016-10-04', '10:45', 1, '2016-09-17 00:00:00', '2016-10-03 00:00:00'),
(18, 'FIXED', 'C', 19, '2016-09-16 13:09:07', 'Alejandro', 'Gallano', '1', 50, 1, 'A3.5', 0, 1, 1, 0, 0, 0, 0, 1, '1,2,3,4,5', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-06', '18:52', 1, '2016-09-17 00:00:00', '2016-10-05 00:00:00'),
(19, 'RPD', 'COM', 24, '2016-09-30 09:40:14', 'Ricardo', 'Fernandez', '1', 29, 4, 'A3.5', 1, 0, 0, 1, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', 'CBM,E,ES', '', '', '2016-10-11', '09:13', 1, '0000-00-00 00:00:00', '2016-10-10 00:00:00'),
(20, 'Others', 'R', 19, '2016-09-24 12:02:54', 'Feliciano', 'Valdez', '1', 28, 4, 'A2.5', 1, 1, 0, 0, 1, 0, 1, 0, '1,2,3', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-03', '11:44', 1, '2016-09-25 00:00:00', '2016-10-02 00:00:00'),
(21, 'RPD', 'CC', 21, '2016-09-06 08:11:15', 'Roger', 'Onguda', '1', 50, 1, 'A2.5', 0, 0, 1, 0, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'CBM', '', '', '2016-09-12', '13:30', 1, '2016-09-07 00:00:00', '2016-09-11 00:00:00'),
(22, 'RPD', 'COM', 25, '2016-09-16 20:03:02', 'Jose', 'Dimaano', '1', 44, 1, 'A3', 1, 0, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', 'CBM,E', '', '', '2016-09-24', '10:51', 1, '2016-09-17 00:00:00', '2016-09-23 00:00:00'),
(23, 'FIXED', 'P', 13, '2016-09-28 16:05:44', 'Jose', 'Torres', '1', 48, 2, 'A1', 1, 0, 1, 1, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-18', '10:48', 1, '2016-09-29 00:00:00', '2016-10-17 00:00:00'),
(24, 'Others', 'MG', 21, '2016-09-23 19:04:46', 'Rhomel', 'Bajaro', '1', 45, 2, 'A3.5', 1, 0, 1, 0, 0, 0, 0, 0, '1,2,3', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-05', '10:11', 1, '2016-09-24 00:00:00', '2016-10-04 00:00:00'),
(25, 'Others', 'IR', 21, '2016-09-13 19:10:34', 'Michael', 'Sudario', '1', 24, 4, 'A3', 1, 1, 0, 1, 1, 0, 1, 1, '1,2,3,4,5', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-22', '20:26', 1, '2016-09-14 00:00:00', '2016-09-21 00:00:00'),
(26, 'FIXED', 'PJ', 9, '2016-09-21 10:26:14', 'Alejandro', 'Reyes', '1', 51, 3, 'A1', 1, 1, 1, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8', 'CBM,E,ES', '', '', '2016-09-26', '11:24', 1, '2016-09-22 00:00:00', '2016-09-25 00:00:00'),
(27, 'Others', 'IR', 9, '2016-09-28 09:32:50', 'Noel', 'Redrino', '1', 37, 3, 'A2.5', 0, 1, 1, 0, 0, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-19', '16:06', 1, '2016-09-29 00:00:00', '2016-10-18 00:00:00'),
(28, 'FIXED', 'VE', 30, '2016-09-12 17:54:48', 'Joseph', 'Alanano', '1', 35, 1, 'A1', 1, 1, 1, 1, 0, 0, 0, 0, '1,2,3,4,5,6', 'CBM,E,ES', '', '', '2016-10-03', '17:33', 1, '2016-09-13 00:00:00', '2016-10-02 00:00:00'),
(29, 'RPD', 'CC', 8, '2016-09-12 08:48:47', 'Arnel', 'Herrera', '1', 38, 1, 'A3.5', 0, 1, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'CBM,E,ES,FS-TK', '', '', '2016-09-21', '10:31', 1, '2016-09-13 00:00:00', '2016-09-20 00:00:00'),
(30, 'Others', 'R', 19, '2016-09-22 12:48:56', 'Allan', 'Raynera', '1', 53, 3, 'A2.5', 1, 1, 0, 1, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'CBM', '', '', '2016-10-02', '10:26', 1, '2016-09-23 00:00:00', '2016-10-01 00:00:00'),
(31, 'FIXED', 'Z', 28, '2016-09-28 09:13:20', 'Reynaldo', 'Mandapat', '1', 43, 3, 'A3', 0, 0, 0, 0, 0, 1, 0, 1, '1,2,3,4,5', 'CBM,E', '', '', '2016-10-17', '11:27', 4, '2016-09-29 00:00:00', '2016-10-16 00:00:00'),
(32, 'FIXED', 'Z', 18, '2016-09-09 13:31:54', 'Ferdinand', 'Aquino', '1', 50, 4, 'A3.5', 1, 0, 0, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7', 'CBM,E,ES,FS-TK', '', '', '2016-09-14', '19:32', 3, '2016-09-10 00:00:00', '2016-09-13 00:00:00'),
(33, 'FIXED', 'VE', 30, '2016-09-24 11:55:10', 'Rhomel', 'Onguda', '1', 56, 2, 'A2.5', 0, 0, 1, 0, 1, 0, 1, 0, '1,2,3,4,5', 'CBM,E,ES,FS-TK', '', '', '2016-10-10', '17:26', 2, '2016-09-25 00:00:00', '2016-10-09 00:00:00'),
(34, 'Others', 'MG', 13, '2016-09-07 10:13:05', 'Feliciano', 'Labonete', '1', 57, 3, 'A3.5', 1, 0, 0, 1, 1, 1, 1, 0, '1,2,3,4,5,6,7', 'CBM', '', '', '2016-09-13', '16:33', 4, '2016-09-08 00:00:00', '2016-09-12 00:00:00'),
(35, 'FIXED', 'EM', 21, '2016-09-06 16:04:41', 'Bobet Mari', 'Reyes', '1', 51, 2, 'A3', 0, 0, 1, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', 'CBM,E,ES,FS-TK', '', '', '2016-09-27', '18:16', 4, '2016-09-07 00:00:00', '2016-09-26 00:00:00'),
(36, 'Others', 'MG', 22, '2016-09-10 08:40:47', 'Christopher', 'Basallaje', '1', 48, 3, 'A2.5', 0, 0, 0, 1, 0, 1, 1, 1, '1,2,3', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-27', '13:58', 3, '2016-09-11 00:00:00', '2016-09-26 00:00:00'),
(37, 'Others', 'MG', 12, '2016-09-29 18:33:12', 'Louie', 'Bernales', '1', 56, 3, 'A3.5', 1, 1, 1, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-18', '09:39', 3, '2016-09-30 00:00:00', '2016-10-17 00:00:00'),
(38, 'FIXED', 'EM', 22, '2016-09-10 14:40:39', 'Jessie', 'Monares', '1', 37, 1, 'A3.5', 0, 0, 0, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-01', '08:36', 2, '2016-09-11 00:00:00', '2016-10-30 00:00:00'),
(39, 'RPD', 'I', 24, '2016-09-07 15:02:17', 'Rodrigo', 'Raynera', '1', 43, 2, 'A2.5', 0, 0, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'CBM,E,ES', '', '', '2016-09-28', '11:57', 2, '2016-09-08 00:00:00', '2016-09-27 00:00:00'),
(40, 'FIXED', 'Z', 29, '2016-09-03 20:25:58', 'Ricardo', 'Sudario', '1', 28, 4, 'A3', 0, 1, 1, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-11', '11:11', 2, '2016-09-04 00:00:00', '2016-09-10 00:00:00'),
(41, 'FIXED', 'P', 28, '2016-09-20 10:21:20', 'John Carlo', 'Musa', '1', 33, 1, 'A2.5', 1, 1, 1, 0, 1, 0, 1, 1, '1,2,3', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-26', '16:41', 4, '2016-09-21 00:00:00', '2016-09-25 00:00:00'),
(42, 'FIXED', 'C', 16, '2016-09-21 18:03:15', 'Richie', 'Hipolito', '1', 35, 2, 'A1', 0, 0, 0, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'CBM,E,ES,FS-TK', '', '', '2016-09-26', '10:19', 4, '2016-09-22 00:00:00', '2016-09-25 00:00:00'),
(43, 'Others', 'EX', 12, '2016-09-09 08:33:36', 'Renante', 'Condino', '1', 33, 4, 'A1', 0, 1, 1, 0, 0, 1, 1, 0, '1,2,3,4,5,6,7,8,9', 'CBM,E', '', '', '2016-09-25', '09:21', 3, '2016-09-10 00:00:00', '2016-09-24 00:00:00'),
(44, 'RPD', 'CC', 18, '2016-09-26 11:26:16', 'Joseph Albert', 'Redrino', '1', 43, 2, 'A3.5', 1, 0, 1, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'CBM,E', '', '', '2016-10-11', '15:27', 3, '2016-09-27 00:00:00', '2016-10-10 00:00:00'),
(45, 'RPD', 'OP', 17, '2016-09-27 14:59:49', 'Francis Oliver', 'Bendana', '1', 27, 1, 'A1', 0, 0, 0, 1, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E,ES,FS-TK', '', '', '2016-10-04', '16:34', 3, '2016-09-28 00:00:00', '2016-10-03 00:00:00'),
(46, 'RPD', 'D', 29, '2016-09-30 14:20:12', 'Francis Oliver', 'Vicente', '1', 36, 1, 'A3', 0, 0, 1, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-17', '08:51', 4, '0000-00-00 00:00:00', '2016-10-16 00:00:00'),
(47, 'RPD', 'D', 12, '2016-09-17 20:42:50', 'Casimiro', 'Duzon', '1', 38, 4, 'A3.5', 1, 1, 1, 0, 1, 0, 0, 1, '1,2,3,4,5', 'CBM,E,ES,FS-TK', '', '', '2016-10-01', '15:09', 3, '2016-09-18 00:00:00', '2016-10-30 00:00:00'),
(48, 'RPD', 'F', 16, '2016-09-20 16:57:53', 'Francis Oliver', 'Canete', '1', 48, 2, 'A3', 0, 0, 1, 0, 0, 1, 0, 0, '1,2,3,4,5', 'CBM,E,ES,FS-TK', '', '', '2016-10-07', '11:29', 3, '2016-09-21 00:00:00', '2016-10-06 00:00:00'),
(49, 'Others', 'IR', 27, '2016-09-28 20:56:21', 'Rhomel', 'Raynera', '1', 29, 3, 'A1', 0, 1, 1, 1, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-13', '14:56', 3, '2016-09-29 00:00:00', '2016-10-12 00:00:00'),
(50, 'FIXED', 'Z', 21, '2016-09-08 16:31:05', 'Nelson', 'Hipolito', '1', 50, 2, 'A2.5', 1, 0, 1, 0, 0, 1, 1, 1, '1', 'CBM,E,ES', '', '', '2016-09-25', '13:59', 3, '2016-09-09 00:00:00', '2016-09-24 00:00:00'),
(51, 'Others', 'MG', 12, '2016-09-09 16:15:27', 'Cosme', 'Ladrillo', '1', 20, 1, 'A2.5', 0, 1, 1, 1, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E', '', '', '2016-09-23', '18:11', 3, '2016-09-10 00:00:00', '2016-09-22 00:00:00'),
(52, 'FIXED', 'TI', 30, '2016-09-25 19:29:11', 'Rhomel', 'Vicente', '1', 46, 3, 'A3', 1, 1, 0, 1, 0, 1, 0, 0, '1', 'CBM,E', '', '', '2016-10-03', '11:36', 3, '2016-09-26 00:00:00', '2016-10-02 00:00:00'),
(53, 'FIXED', 'Z', 30, '2016-09-21 13:22:27', 'Wallie', 'Reyes', '1', 33, 3, 'A1', 1, 1, 0, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'CBM,E,ES', '', '', '2016-09-26', '18:59', 4, '2016-09-22 00:00:00', '2016-09-25 00:00:00'),
(54, 'Others', 'IR', 19, '2016-09-26 09:59:27', 'Jan', 'Dayaon', '1', 23, 3, 'A3.5', 0, 1, 1, 0, 1, 0, 0, 0, '1,2,3', 'CBM,E,ES', '', '', '2016-10-01', '20:58', 3, '2016-09-27 00:00:00', '2016-10-30 00:00:00'),
(55, 'Others', 'EX', 21, '2016-09-20 19:28:39', 'Renante', 'Bongolan', '1', 48, 4, 'A3', 0, 1, 1, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-03', '12:56', 4, '2016-09-21 00:00:00', '2016-10-02 00:00:00'),
(56, 'FIXED', 'T', 28, '2016-09-29 18:04:52', 'Joseph', 'Santos', '1', 56, 1, 'A3', 1, 1, 0, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'CBM,E,ES,FS-TK', '', '', '2016-10-10', '14:57', 2, '2016-09-30 00:00:00', '2016-10-09 00:00:00'),
(57, 'Others', 'MG', 14, '2016-09-06 19:43:57', 'Feliciano', 'Nicomedez', '1', 35, 1, 'A3.5', 0, 0, 1, 0, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14', 'CBM,E,ES,FS-TK', '', '', '2016-09-12', '14:01', 4, '2016-09-07 00:00:00', '2016-09-11 00:00:00'),
(58, 'RPD', 'CC', 26, '2016-09-11 12:35:50', 'Wright', 'Redrino', '1', 45, 4, 'A2.5', 0, 0, 0, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-22', '18:32', 2, '2016-09-12 00:00:00', '2016-09-21 00:00:00'),
(59, 'FIXED', 'C', 25, '2016-09-17 15:04:55', 'Jobert', 'Gallano', '1', 29, 4, 'A1', 1, 0, 0, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10', 'CBM,E,ES,FS-TK', '', '', '2016-09-29', '10:28', 2, '2016-09-18 00:00:00', '2016-09-28 00:00:00'),
(60, 'Others', 'IR', 29, '2016-09-09 17:19:06', 'Eduardo', 'De Guzman', '1', 44, 3, 'A1', 1, 1, 0, 1, 1, 1, 1, 0, '1,2,3,4', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-24', '20:19', 3, '2016-09-10 00:00:00', '2016-09-23 00:00:00'),
(61, 'Others', 'R', 18, '2016-09-30 17:13:01', 'Roger', 'Solleza', '1', 54, 1, 'A3', 0, 0, 0, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', 'CBM,E,ES', '', '', '2016-10-06', '16:06', 2, '0000-00-00 00:00:00', '2016-10-05 00:00:00'),
(62, 'FIXED', 'P', 19, '2016-09-05 17:28:16', 'Roger', 'Condino', '1', 49, 1, 'A3.5', 0, 1, 1, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'CBM,E', '', '', '2016-09-25', '15:55', 2, '2016-09-06 00:00:00', '2016-09-24 00:00:00'),
(63, 'FIXED', 'VE', 27, '2016-09-10 20:28:15', 'Rhomel', 'Aquino', '1', 58, 3, 'A1', 0, 0, 1, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-09-29', '14:07', 2, '2016-09-11 00:00:00', '2016-09-28 00:00:00'),
(64, 'RPD', 'I', 27, '2016-09-09 12:51:12', 'Arnel', 'Duzon', '1', 40, 1, 'A2.5', 0, 1, 0, 1, 0, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26', 'CBM,E', '', '', '2016-09-22', '09:22', 3, '2016-09-10 00:00:00', '2016-09-21 00:00:00'),
(65, 'RPD', 'D', 9, '2016-09-17 12:16:23', 'Joseph Albert', 'Aquino', '1', 26, 3, 'A1', 1, 1, 0, 1, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-26', '12:36', 3, '2016-09-18 00:00:00', '2016-09-25 00:00:00'),
(66, 'FIXED', 'TI', 17, '2016-09-22 11:27:50', 'Arnel', 'Boligao', '1', 33, 1, 'A3.5', 1, 1, 1, 0, 0, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-03', '17:28', 4, '2016-09-23 00:00:00', '2016-10-02 00:00:00'),
(67, 'FIXED', 'EM', 28, '2016-09-17 08:30:43', 'Casimiro', 'Valdez', '1', 42, 4, 'A1', 1, 0, 1, 0, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-29', '12:18', 3, '2016-09-18 00:00:00', '2016-09-28 00:00:00'),
(68, 'RPD', 'CC', 10, '2016-09-28 17:05:35', 'Rodrigo', 'Condino', '1', 22, 4, 'A1', 1, 0, 0, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E', '', '', '2016-10-18', '10:45', 3, '2016-09-29 00:00:00', '2016-10-17 00:00:00'),
(69, 'RPD', 'LB', 16, '2016-09-07 12:14:14', 'Christopher', 'Monares', '1', 24, 2, 'A2.5', 1, 0, 1, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-18', '19:20', 3, '2016-09-08 00:00:00', '2016-09-17 00:00:00'),
(70, 'RPD', 'COM', 17, '2016-09-21 13:41:01', 'Casimiro', 'Basallaje', '1', 30, 4, 'A1', 0, 1, 1, 0, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9', 'CBM', '', '', '2016-10-10', '11:43', 3, '2016-09-22 00:00:00', '2016-10-09 00:00:00'),
(71, 'FIXED', 'Z', 27, '2016-09-25 18:47:24', 'Bobet Mari', 'Torres', '1', 60, 4, 'A3', 1, 1, 1, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-11', '14:42', 4, '2016-09-26 00:00:00', '2016-10-10 00:00:00'),
(72, 'FIXED', 'TI', 16, '2016-09-04 19:22:54', 'Roger', 'De Guzman', '1', 40, 3, 'A2.5', 1, 1, 1, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19', 'CBM,E,ES,FS-TK', '', '', '2016-09-10', '19:30', 4, '2016-09-05 00:00:00', '2016-09-09 00:00:00'),
(73, 'FIXED', 'P', 24, '2016-09-19 14:53:16', 'Goerge', 'Fernandez', '1', 55, 4, 'A1', 0, 0, 0, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'CBM,E,ES', '', '', '2016-10-01', '13:04', 3, '2016-09-20 00:00:00', '2016-10-30 00:00:00'),
(74, 'FIXED', 'Z', 12, '2016-09-19 14:09:58', 'Noel', 'Mandapat', '1', 44, 4, 'A3.5', 0, 0, 0, 0, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'CBM,E,ES', '', '', '2016-10-05', '18:18', 3, '2016-09-20 00:00:00', '2016-10-04 00:00:00'),
(75, 'RPD', 'OP', 20, '2016-09-11 17:21:53', 'Elmer', 'Horcajo', '1', 31, 1, 'A2.5', 1, 0, 0, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-28', '18:20', 4, '2016-09-12 00:00:00', '2016-09-27 00:00:00'),
(76, 'FIXED', 'VE', 27, '2016-09-12 12:23:22', 'Roger', 'Valdez', '1', 45, 4, 'A3', 1, 0, 1, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'CBM', '', '', '2016-10-01', '17:15', 2, '2016-09-13 00:00:00', '2016-10-30 00:00:00'),
(77, 'Others', 'MG', 12, '2016-09-21 15:49:30', 'Joseph', 'Redrino', '1', 37, 1, 'A1', 0, 1, 0, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'CBM,E,ES,FS-TK', '', '', '2016-10-09', '12:40', 4, '2016-09-22 00:00:00', '2016-10-08 00:00:00'),
(78, 'Others', 'MG', 8, '2016-09-01 13:20:28', 'Rogelio', 'Quesea', '1', 23, 2, 'A1', 0, 0, 1, 1, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-09-08', '10:56', 2, '2016-09-02 00:00:00', '2016-09-07 00:00:00'),
(79, 'RPD', 'OP', 26, '2016-09-05 17:30:13', 'Nelson', 'De Guzman', '1', 43, 1, 'A2.5', 1, 0, 1, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7', 'CBM', '', '', '2016-09-18', '18:13', 4, '2016-09-06 00:00:00', '2016-09-17 00:00:00'),
(80, 'Others', 'MG', 14, '2016-09-16 10:53:42', 'Joseph', 'Redrino', '1', 54, 2, 'A1', 1, 1, 0, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-03', '20:38', 3, '2016-09-17 00:00:00', '2016-10-02 00:00:00'),
(81, 'Others', 'MG', 15, '2016-09-05 16:53:37', 'Herminio', 'Usog', '1', 51, 2, 'A2.5', 1, 0, 0, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E,ES', '', '', '2016-09-20', '14:34', 3, '2016-09-06 00:00:00', '2016-09-19 00:00:00'),
(82, 'Others', 'R', 8, '2016-09-26 13:55:14', 'Jay', 'Bendana', '1', 27, 2, 'A2.5', 1, 0, 1, 0, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29', 'CBM,E,ES', '', '', '2016-10-17', '14:38', 4, '2016-09-27 00:00:00', '2016-10-16 00:00:00'),
(83, 'RPD', 'COM', 19, '2016-09-11 12:27:32', 'Jessie', 'Francisco', '1', 26, 2, 'A2.5', 1, 0, 0, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'CBM', '', '', '2016-09-30', '12:11', 3, '2016-09-12 00:00:00', '2016-09-29 00:00:00'),
(84, 'FIXED', 'PJ', 19, '2016-09-01 13:11:04', 'Rizalino', 'Alanano', '1', 44, 1, 'A3.5', 0, 0, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E,ES,FS-TK', '', '', '2016-09-06', '13:42', 3, '2016-09-02 00:00:00', '2016-09-05 00:00:00'),
(85, 'RPD', 'I', 14, '2016-09-20 20:37:59', 'Joseph Albert', 'Bajaro', '1', 59, 2, 'A3.5', 0, 0, 1, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-02', '11:19', 3, '2016-09-21 00:00:00', '2016-10-01 00:00:00'),
(86, 'Others', 'R', 19, '2016-09-19 08:14:34', 'Noel', 'Ladrillo', '1', 59, 3, 'A2.5', 0, 1, 1, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'CBM,E,ES', '', '', '2016-10-06', '15:48', 4, '2016-09-20 00:00:00', '2016-10-05 00:00:00'),
(87, 'Others', 'R', 24, '2016-09-12 14:24:34', 'Rhomel', 'Abanil', '1', 26, 4, 'A3.5', 0, 1, 1, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'CBM,E,ES', '', '', '2016-09-30', '12:27', 4, '2016-09-13 00:00:00', '2016-09-29 00:00:00'),
(88, 'RPD', 'LB', 13, '2016-09-04 11:52:36', 'Wallie', 'Cometa', '1', 40, 3, 'A1', 1, 1, 0, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E,ES,FS-TK', '', '', '2016-09-13', '18:38', 2, '2016-09-05 00:00:00', '2016-09-12 00:00:00'),
(89, 'RPD', 'TH', 16, '2016-09-07 20:59:15', 'Angelito', 'Torres', '1', 56, 3, 'A3.5', 1, 0, 0, 1, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'CBM,E,ES,FS-TK', '', '', '2016-09-27', '08:17', 3, '2016-09-08 00:00:00', '2016-09-26 00:00:00'),
(90, 'Others', 'IR', 13, '2016-09-28 15:33:13', 'Michael', 'Raynera', '1', 40, 4, 'A1', 1, 1, 1, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'CBM,E,ES,FS-TK,FS-TN,FW', '', '', '2016-10-04', '11:45', 3, '2016-09-29 00:00:00', '2016-10-03 00:00:00'),
(91, 'Others', 'MG', 17, '2016-09-22 20:02:52', 'Jan', 'Tapiador', '1', 45, 3, 'A1', 1, 1, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6', 'CBM,E,ES', '', '', '2016-10-11', '14:17', 3, '2016-09-23 00:00:00', '2016-10-10 00:00:00'),
(92, 'FIXED', 'VE', 27, '2016-09-16 17:19:21', 'Fernando', 'Camelon', '1', 56, 1, 'A3.5', 0, 1, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29', 'CBM,E,ES,FS-TK,FS-TN', '', '', '2016-10-04', '19:11', 4, '2016-09-17 00:00:00', '2016-10-03 00:00:00'),
(93, 'FIXED', 'TI', 8, '2016-09-26 19:04:28', 'Feliciano', 'De Vera', '1', 28, 1, 'A1', 0, 1, 1, 1, 1, 1, 1, 1, '1,2', 'CBM,E,ES', '', '', '2016-10-16', '09:09', 4, '2016-09-27 00:00:00', '2016-10-15 00:00:00'),
(94, 'RPD', 'TH', 11, '2016-09-27 11:21:43', 'Rhomel', 'Bautista', '1', 24, 2, 'A3', 0, 1, 1, 1, 0, 0, 1, 1, '1,2,3,4', 'CBM', '', '', '2016-10-15', '20:22', 3, '2016-09-28 00:00:00', '2016-10-14 00:00:00'),
(95, 'RPD', 'LB', 28, '2016-09-28 20:43:34', 'Fernando', 'Mandapat', '1', 29, 1, 'A3.5', 1, 1, 0, 1, 0, 1, 1, 1, '1,2,3', 'CBM,E,ES,FS-TK', '', '', '2016-10-05', '12:41', 4, '2016-09-29 00:00:00', '2016-10-04 00:00:00'),
(96, 'FIXED', 'EM', 22, '2016-09-05 10:19:40', 'John Carlo', 'Bongolan', '1', 40, 4, 'A3.5', 0, 1, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9', 'CBM,E', '', '', '2016-09-17', '08:30', 3, '2016-09-06 00:00:00', '2016-09-16 00:00:00'),
(97, 'FIXED', 'T', 28, '2016-09-30 15:07:43', 'Richie', 'Valdez', '1', 36, 3, 'A1', 0, 1, 0, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM,E,ES', '', '', '2016-10-21', '10:58', 2, '0000-00-00 00:00:00', '2016-10-20 00:00:00'),
(98, 'RPD', 'COM', 16, '2016-09-15 17:09:31', 'Marcelo', 'Nicomedez', '1', 56, 2, 'A1', 0, 0, 1, 0, 0, 1, 1, 1, '1,2,3,4,5,6,7', 'CBM,E', '', '', '2016-10-06', '20:26', 3, '2016-09-16 00:00:00', '2016-10-05 00:00:00'),
(99, 'FIXED', 'VE', 20, '2016-09-15 15:34:40', 'Richie', 'Dolor', '1', 24, 3, 'A2.5', 0, 1, 0, 1, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'CBM', '', '', '2016-09-27', '10:13', 3, '2016-09-16 00:00:00', '2016-09-26 00:00:00'),
(100, 'RPD', 'COM', 13, '2016-09-06 17:02:30', 'Jay', 'Redrino', '1', 22, 2, 'A3.5', 1, 0, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14', 'CBM,E', '', '', '2016-09-20', '16:34', 3, '2016-09-07 00:00:00', '2016-09-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcasetype`
--

CREATE TABLE `tblcasetype` (
  `CaseTypeID` varchar(10) NOT NULL,
  `CaseTypeDesc` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `TotalOrder` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcasetype`
--

INSERT INTO `tblcasetype` (`CaseTypeID`, `CaseTypeDesc`, `Type`, `TotalOrder`, `Price`) VALUES
('C', 'Ceramage', 'FIXED', 0, 0),
('CC', 'Casted Clasp', 'RPD', 0, 0),
('COM', 'Combination', 'RPD', 0, 0),
('D', 'Denture', 'RPD', 0, 0),
('EM', 'Emax', 'FIXED', 0, 0),
('EX', 'Expander', 'OTHERS', 0, 0),
('F', 'Flexible', 'RPD', 0, 0),
('I', 'Ivocap', 'RPD', 0, 0),
('IR', 'Invisible Retainer', 'OTHERS', 0, 0),
('LB', 'Lucitone Base', 'RPD', 0, 0),
('MG', 'Mouthguard', 'OTHERS', 0, 0),
('OP', 'One Piece', 'RPD', 0, 0),
('P', 'Porcelain', 'FIXED', 0, 0),
('PJ', 'Plastic Jacket', 'FIXED', 0, 0),
('R', 'Retainer', 'OTHERS', 0, 0),
('T', 'Temporary', 'FIXED', 0, 0),
('TH', 'Thermosen', 'RPD', 0, 0),
('TI', 'Tillite', 'FIXED', 0, 0),
('VE', 'Veneer', 'FIXED', 0, 0),
('Z', 'Zirconia', 'FIXED', 0, 0);

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
  `image` varchar(500) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldentist`
--

INSERT INTO `tbldentist` (`DentistID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `fax`, `website`, `bstreet`, `bbrgy`, `bcity`, `shipstreet`, `shipbrgy`, `shipcity`, `notes`, `image`, `active`) VALUES
(1, 'Mr.', 'Romie', '', 'Serohijos', 'HJM Dental Laboratory', 'hjmdentallaboratory@gmail.com', '', '', '', '', '', '', '', '', '', '', 'Administrator of HJM Dental Laboratory', '', 0),
(8, 'Dra.', 'Mayann', 'Talavera', 'Coyoca', 'M.G TALAVERA DENTAL CLINIC', 'mayann.talaveracoyoca@gmail.com', '', '09298549209', '', 'http://', '      # 1 Saint Peter St., Maticaban Pasay City', 'Maticaban', 'Pasay', '# 1 Saint Peter St., Maticaban Pasay City', 'Maticaban', 'Pasay', '', '', 1),
(9, 'Dra.', 'Mitzi', '', 'Lim', 'Oral Care Group', 'mitzilim@gmail.com', '7266755', '', '', '', 'Greenhills,  San Juan', 'Greenhills', 'San Juan', 'Greenhills,  San Juan', 'Greenhills', 'San Juan', '', '', 1),
(10, 'Dra.', 'Edith', '', 'Banaag', 'Prima Medical Health Clinic', 'ebanaag@gmail.com', '8296611', '09154072196', '', '', '3rd flr Bldg B. SM City Sucat Paranaque', 'Sucat', 'Paranaque', '3rd flr Bldg B. SM City Sucat Paranaque', 'Sucat', 'Paranaque', '', '', 1),
(11, 'Dr.', 'Roi', '', 'Nunes', 'St. Stephen Medical Clinic', 'r.nunes@gmail.com', '8329397', '', '', '', '1718 Dian St., Cor. Emilia Brgy Palanan Makati City', 'Palanan', 'Makati', '1718 Dian St., Cor. Emilia Brgy Palanan Makati City', 'Palanan', 'Makati', '', '', 1),
(12, 'Dra.', 'Myla', '', 'Napalang', 'Napalang Dental Clinic', 'mylanapalang@gmail.com', '6223009', '09165069913', '', '', '214 National Road Bayanan Muntinlupa', 'Bayanan', 'Muntinlupa', '214 National Road Bayanan Muntinlupa', 'Bayanan', 'Muntinlupa', '', '', 1),
(13, 'Dra.', 'Erlinda', '', 'Pobre', 'POBRE''S DENTAL CLINIC', 'erlinda.pobre@yahoo.com', '', '09272291771', '', 'http://', '2nd flr Cochengco Bldg, Lozada Market. Real St.', 'Talon', 'Las Pinas City', '2nd flr Cochengco Bldg, in between overpass and Lozada Market. Real St., Talon Las Pinas City', 'Talon', 'Las Pinas', '', '', 1),
(14, 'Dra.', 'Jocelyn', '', 'Galutera', 'ALINSOD DENTAL CARE CLINIC', 'j.galutera@yahoo.com', '8434266', '', '', '', '440 Cementina St., Pasay City', 'Cementina', 'Pasay', '440 Cementina St., Pasay City', 'Cementina', 'Pasay', '', '', 1),
(15, 'Dra.', 'Francisca', '', 'Pastor', 'St. James Medical And Diagnostics Center', 'f.pastor@gmail.com', '', '09989756936', '', '', '5th Flr MRS Building 1431 A  Mabini St., Ermita Manila', 'Ermita', 'Manila', '5th Flr MRS Building 1431 A  Mabini St., Ermita Manila', 'Ermita', 'Manila', '', '', 1),
(16, 'Dra.', 'Janice', '', 'Peralta', 'SAVERS TOOTH DENTAL CLINIC', 'j.peralta@gmail.com', '3437071', '09228332318', '', '', 'Rn 14 Luzon Ave. Corner Rose St., Brgy Pasong Tamo Quezon City', 'Pasong Tamo', 'Quezon', 'Rn 14 Luzon Ave. Corner Rose St., Brgy Pasong Tamo Quezon City', 'Pasong Tamo', 'Quezon', '', '', 1),
(17, 'Dra.', 'Bea', '', 'Garillo', 'MCAB DENTAL CLINIC', 'mcabdental@gmail.com', '4806715', '03298888706', '', '', '2114 Angel Linao St., Malate Manila', 'Malate', 'Manila', '2114 Angel Linao St., Malate Manila', 'Malate', 'Manila', '', '', 1),
(18, 'Dra.', 'Rowena', '', 'DelaCruz', 'Dela Cruz – Tajon Dental Clinic', 'delacruztajondental@gmail.com', '2515352', '09093095350', '', '', '# 337 Herbosa St., Tondo, Manila', 'Tondo', 'Manila', '# 337 Herbosa St., Tondo, Manila', 'Tondo', 'Manila', '', '', 1),
(19, 'Dra.', 'Alimar', '', 'Gerona', 'Alemar Dental Clinic', 'g.alimar@yahoo.com', '2905462', '09178521864', '', '', '117 A. Herbosa Ext. Tondo Manila', 'Tondo', 'Manila', '117 A. Herbosa Ext. Tondo Manila', 'Tondo', 'Manila', '', '', 0),
(20, 'Dra.', 'Agnes', '', 'Mariategue', 'Villanueva-Mariategue Dental Clinic', 'agnes.mariategue@gmail.com', '8376832', '', '', '', '141 M.L Quezon St., Lower Bicutan, Taguig City', 'Lower Bicutan', 'Taguig', '141 M.L Quezon St., Lower Bicutan, Taguig City', 'Lower Bicutan', 'Taguig', '', '', 1),
(21, 'Dr.', 'Rick', '', 'Sarreal', 'Dream Smile Design Center', 'dreamsmiledesigncenter@gmail.com', '', '09998877777', '', '', '1515 Rizal Avenue. Olongapo City', 'Rizal Avenue', 'Olongapo', '1515 Rizal Avenue. Olongapo City', 'Rizal Avenue', 'Olongapo', '', '', 1),
(22, 'Dra.', 'Victoria', '', 'Tangalin', 'Dobles Dental Clinic', 'doblesdental@gmail.com', '8864068', '', '', '', '1545 Mayhaligue St., Sta. Cruz, Manila', 'Sta. Cruz', 'Manila', '1545 Mayhaligue St., Sta. Cruz, Manila', 'Sta. Cruz', 'Manila', '', '', 1),
(23, 'Dra.', 'Lilybeth', '', 'Caviteno', 'Delas Alas-Caviteno Dental Clinic', 'lilibeth.caviteno@gmail.com', '5239107', '09173261759', '', '', '17 Legend Mansion condominium 212 san St. pasay city', 'San', 'Pasay', '17 Legend Mansion condominium 212 san St. pasay city', 'San', 'Pasay', '', '', 1),
(24, 'Dr.', 'Romano', '', 'Kamantigue', 'Kamantigue Dental Clinic', 'kamantiguedental@gmail.com', '5248207', '', '', '', '1702 J BOCOBO ST, BGY 698, ZONE 076 MALATE, MANILA', 'Malate', 'Manila', '1702 J BOCOBO ST, BGY 698, ZONE 076 MALATE, MANILA', 'Malate', 'Manila', '', '', 1),
(25, 'Dr.', 'Jectoffer Jan', 'C', 'Tan', 'Jectoffer Jan C. Tan Dental Clinic', 'jjtandental@gmail.com', '', '092286225887', '', '', '1723 Taft Avenue Pasay City (Beside law School)', 'Taft', 'Pasay', '1723 Taft Avenue Pasay City (Beside law School)', 'Taft', 'Pasay', '', '', 1),
(26, 'Dra.', 'Rebecca', 'T', 'Se', 'Dr. Rebecca T. Se Dental Clinic', 'rebecca.se@yahoo.com', '', '09165457224', '', '', '1870 Evangelista St., Brgy  Pio Del Pilar Makati City', 'Pio Del Pilar', 'Makati', '1870 Evangelista St., Brgy  Pio Del Pilar Makati City', 'Pio Del Pilar', 'Makati', '', '', 1),
(27, 'Dra.', 'Rowena', 'A', 'Concepcion', 'Concepcion Dental House', 'Wengconcepcion@gmail.com', '2540002', '09228287841', '', '', '2015 F.B Harisson Street Pasay City', 'Harisson', 'Pasay', '2015 F.B Harisson Street Pasay City', 'Harisson', 'Pasay', '', '', 1),
(28, 'Dra.', 'Ruth Caringal', ' ', 'Zagada', 'RUTH CARINGAL- ZAGADA DENTAL CLINIC', 'ruthcaringaldent@gmail.com', '8873289', '09195039187', '', '', '2020 - B Edison St., San Isidro, Makati City', 'San Isidro', 'Makati', '2020 - B Edison St., San Isidro, Makati City', 'San Isidro', 'Makati', '', '', 1),
(29, 'Dra.', 'Jean', 'A', 'Bautista', 'U R Beauteethful Dental Clinic', 'beauteethful@gmail.com', '4256879', '09178887977', '', 'http://', 'Unit B 2/F Marasigan Bldg. cor A. Matha and 12th Sts. Villamor Airbase Village, Pasay City', 'Villamor Airbase Village', 'Pasay', 'Unit B 2/F Marasigan Bldg. cor A. Matha and 12th Sts. Villamor Airbase Village, Pasay City', 'Villamor Airbase Village', 'Pasay', '', '', 1),
(30, 'Dra.', 'Michelle Ann', 'A', 'Soriano', 'MA Soriano Dental Care', 'masorianodental@gmail.com', '4584328', '09156250937', '', '', '214 74th St., J. Luna Pasay City', 'J. Luna', 'Pasay', '214 74th St., J. Luna Pasay City', 'J. Luna', 'Pasay', '', '', 1),
(31, 'Dr.', 'asfasdf', '', 'asdfasdf', 'asdfasdf', 'jgabagacina@gmail.com', '', '', '', '', 'asdfasdf', 'aasdfasdf', 'asdfasdf', 'asdfasdf', 'aasdfasdf', 'asdfasdf', '', '', 1),
(32, 'Dr.', 'fasdf', 'asdf', 'asdfasdf', 'asdfasdfasdf', '', '', '', '', '', 'asdfasdf', 'asdfasdf', 'asdfadsf', '', '', '', '', '', 1),
(33, 'Dr.', 'adfasd', '', 'fasdfasdf', 'asdfasdf', '', '', '', '', '', 'asdfasd', 'asdfasdf', 'fasdf', '', '', '', '', '', 1),
(34, 'Dr.', 'test', '', 'asdf', 'asdfasdfasdf', '', '', '', '', '', 'asfdasdf', 'asdfasdf', 'asdfasdf', '', '', '', '', '', 1),
(35, 'Mr.', 'Sasya', '', 'Grey', 'asfasdfasdf', '', '', '', '', '', 'sdfasdf', 'asdfasdf', 'fasdf', '', '', '', '', '', 1),
(36, 'Dr.', 'asdfa', '', 'asdfasfd', 'asfasdf', '', '', '', '', '', 'asdfasdf', 'asdf', 'asdfasdf', '', '', '', '', '', 1),
(37, 'Dr.', 'asdf', '', 'asdf', 'asfd', '', '', '', '', '', 'asdf', 'asdf', 'asdf', '', '', '', '', '', 1),
(38, 'Dr.', 'asdf', '', 'asdf', 'asfd', '', '', '', '', '', 'asdf', 'asdf', 'asdf', '', '', '', '', '', 1),
(39, 'Dr.', 'fasdf', '', 'asdf', 'asdfasdf', '', '', '', '', '', 'fasdf', 'asdfasdf', 'asdfas', '', '', '', '', '', 1),
(40, 'Dra.', 'cgfgfjgfjgfj', '', 'ftyrfytry', 'dfgdfgdhg', '', '', '', '', '', 'dfgdfgdhg', 'dfgdfgdhg', 'dfgdfgdhg', '', '', '', '', '', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice1`
--

CREATE TABLE `tblinvoice1` (
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
-- Dumping data for table `tblinvoice1`
--

INSERT INTO `tblinvoice1` (`InvoiceID`, `DentistID`, `CaseID`, `datecreated`, `duedate`, `Total`, `status`, `paid`) VALUES
(1, 26, 1, '2016-10-18 03:40:08', '2016-10-31', 725, 1, 0),
(2, 26, 2, NULL, '', 0, 0, 0),
(3, 24, 3, NULL, '', 0, 0, 0),
(4, 29, 4, NULL, '', 0, 0, 0),
(5, 21, 5, NULL, '', 0, 0, 0),
(6, 8, 6, NULL, '', 0, 0, 0),
(7, 8, 7, NULL, '', 0, 0, 0),
(8, 16, 8, NULL, '', 0, 0, 0),
(9, 23, 9, NULL, '', 0, 0, 0),
(10, 13, 10, NULL, '', 0, 0, 0),
(11, 26, 11, NULL, '', 0, 0, 0),
(12, 11, 12, NULL, '', 0, 0, 0),
(13, 29, 13, NULL, '', 0, 0, 0),
(14, 23, 14, NULL, '', 0, 0, 0),
(15, 15, 15, NULL, '', 0, 0, 0),
(16, 19, 16, NULL, '', 0, 0, 0),
(17, 13, 17, NULL, '', 0, 0, 0),
(18, 17, 18, NULL, '', 0, 0, 0),
(19, 9, 19, NULL, '', 0, 0, 0),
(20, 28, 20, NULL, '', 0, 0, 0),
(21, 13, 21, NULL, '', 0, 0, 0),
(22, 21, 22, NULL, '', 0, 0, 0),
(23, 11, 23, NULL, '', 0, 0, 0),
(24, 9, 24, NULL, '', 0, 0, 0),
(25, 14, 25, NULL, '', 0, 0, 0),
(26, 19, 26, NULL, '', 0, 0, 0),
(27, 26, 27, NULL, '', 0, 0, 0),
(28, 17, 28, NULL, '', 0, 0, 0),
(29, 26, 29, NULL, '', 0, 0, 0),
(30, 11, 30, NULL, '', 0, 0, 0),
(31, 30, 31, NULL, '', 0, 0, 0),
(32, 25, 32, '2016-10-18 04:25:40', '2016-10-05', 475, 1, 0),
(33, 19, 33, '2016-10-18 04:25:12', '2016-10-13', 475, 1, 0),
(34, 27, 34, NULL, '', 0, 0, 0),
(35, 12, 35, NULL, '', 0, 0, 0),
(36, 26, 36, '2016-10-18 04:23:58', '2016-10-01', 500, 1, 0),
(37, 15, 37, NULL, '', 0, 0, 0),
(38, 19, 38, '2016-10-18 04:23:27', '2016-10-27', 550, 0, 0),
(39, 12, 39, NULL, '', 0, 0, 0),
(40, 8, 40, '2016-10-18 04:22:37', '2016-10-01', 550, 1, 0),
(41, 23, 41, NULL, '', 0, 0, 0),
(42, 15, 42, NULL, '', 0, 0, 0),
(43, 26, 43, '2016-10-18 04:21:43', '2016-10-01', 250, 1, 0),
(44, 17, 44, '2016-10-18 04:21:06', '2016-10-21', 305, 0, 0),
(45, 19, 45, '2016-10-18 04:20:45', '2016-10-11', 475, 1, 0),
(46, 16, 46, NULL, '', 0, 0, 0),
(47, 25, 47, '2016-10-18 04:19:13', '2016-10-12', 475, 1, 0),
(48, 18, 48, '2016-10-18 04:18:22', '2016-10-12', 475, 1, 0),
(49, 26, 49, '2016-10-18 04:18:07', '2016-10-20', 550, 1, 0),
(50, 11, 50, '2016-10-18 04:12:42', '2016-10-08', 440, 1, 0),
(51, 8, 51, '2016-10-18 04:12:20', '2016-10-07', 305, 1, 0),
(52, 25, 52, '2016-10-18 04:11:32', '2016-10-08', 305, 1, 0),
(53, 26, 53, NULL, '', 0, 0, 0),
(54, 8, 54, '2016-10-18 04:10:47', '2016-10-07', 440, 1, 0),
(55, 24, 55, NULL, '', 0, 0, 0),
(56, 13, 56, '2016-10-18 04:09:56', '2016-10-20', 420, 0, 0),
(57, 9, 57, NULL, '', 0, 0, 0),
(58, 23, 58, '2016-10-18 04:09:16', '2016-10-26', 500, 0, 0),
(59, 19, 59, '2016-10-18 04:08:53', '2016-10-20', 475, 1, 0),
(60, 25, 60, '2016-10-18 04:08:06', '2016-10-01', 500, 1, 0),
(61, 11, 61, '2016-10-18 04:07:44', '2016-10-20', 350, 1, 0),
(62, 11, 62, '2016-10-18 04:06:50', '2016-10-19', 305, 1, 0),
(63, 26, 63, '2016-10-18 04:06:29', '2016-10-19', 550, 1, 0),
(64, 16, 64, '2016-10-18 04:05:47', '2016-10-13', 305, 1, 0),
(65, 9, 65, '2016-10-18 04:05:11', '2016-10-12', 500, 0, 0),
(66, 25, 66, NULL, '', 0, 0, 0),
(67, 26, 67, '2016-10-18 04:04:09', '2016-10-06', 500, 1, 0),
(68, 12, 68, '2016-10-18 04:02:44', '2016-10-18', 305, 1, 0),
(69, 30, 69, '2016-10-18 04:03:27', '2016-10-12', 445, 0, 0),
(70, 21, 70, '2016-10-18 03:58:41', '2016-10-17', 55, 1, 0),
(71, 11, 71, NULL, '', 0, 0, 0),
(72, 12, 72, NULL, '', 0, 0, 0),
(73, 18, 73, '2016-10-18 03:58:14', '2016-10-06', 440, 1, 0),
(74, 19, 74, '2016-10-18 03:57:52', '2016-10-10', 440, 1, 0),
(75, 16, 75, NULL, '', 0, 0, 0),
(76, 16, 76, '2016-10-18 03:57:09', '2016-10-06', 55, 1, 0),
(77, 20, 77, NULL, '', 0, 0, 0),
(78, 12, 78, '2016-10-18 03:56:35', '2016-10-12', 500, 1, 0),
(79, 8, 79, NULL, '', 0, 0, 0),
(80, 14, 80, '2016-10-18 03:53:36', '2016-10-12', 550, 1, 0),
(81, 14, 81, '2016-10-18 03:52:59', '2016-10-13', 440, 1, 0),
(82, 22, 82, NULL, '', 0, 0, 0),
(83, 22, 83, '2016-10-18 03:52:09', '2016-10-31', 55, 1, 0),
(84, 25, 84, '2016-10-18 03:51:28', '2016-10-11', 475, 1, 0),
(85, 29, 85, '2016-10-18 03:48:27', '2016-10-07', 500, 1, 0),
(86, 12, 86, '2016-10-18 03:45:42', '2016-10-11', 495, 1, 0),
(87, 14, 87, NULL, '', 0, 0, 0),
(88, 19, 88, '2016-10-18 03:45:15', '2016-10-19', 430, 1, 0),
(89, 17, 89, '2016-10-18 03:43:35', '2016-10-31', 475, 0, 0),
(90, 29, 90, '2016-10-18 03:43:17', '2016-10-10', 550, 1, 0),
(91, 28, 91, '2016-10-18 03:42:56', '2016-10-17', 440, 1, 0),
(92, 15, 92, NULL, '', 0, 0, 0),
(93, 16, 93, NULL, '', 0, 0, 0),
(94, 24, 94, '2016-10-18 03:41:32', '2016-10-19', 0, 1, 0),
(95, 28, 95, NULL, '', 0, 0, 0),
(96, 26, 96, '2016-10-18 04:36:32', '2016-10-07', 305, 1, 0),
(97, 28, 97, '2016-10-18 03:39:01', '2016-10-25', 1460, 1, 0),
(98, 10, 98, '2016-10-18 03:36:48', '2016-10-19', 1415, 1, 0),
(99, 28, 99, '2016-10-18 04:36:00', '2016-10-12', 55, 0, 0),
(100, 28, 100, '2016-10-18 03:34:15', '2016-09-27', 665, 1, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoicepayment`
--

CREATE TABLE `tblinvoicepayment` (
  `PaymentID` int(11) NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `datecreated` date NOT NULL,
  `timecreated` datetime NOT NULL,
  `PaymentMethod` varchar(60) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE `tblitem` (
  `ItemID` varchar(50) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `ItemDesc` varchar(500) NOT NULL,
  `Price` float NOT NULL,
  `QTY` int(11) NOT NULL,
  `CurrentQTY` int(11) NOT NULL DEFAULT '0',
  `QTYBelow` int(11) NOT NULL,
  `ReorderQTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitem`
--

INSERT INTO `tblitem` (`ItemID`, `SupplierID`, `ItemDesc`, `Price`, `QTY`, `CurrentQTY`, `QTYBelow`, `ReorderQTY`) VALUES
('CBM', 5, 'Carburandum', 55, 60, 0, 30, 30),
('E', 1, 'Expander', 250, 50, 0, 23, 25),
('ES', 5, 'Expansion Screw', 45, 65, 0, 30, 35),
('FS-TK', 3, 'Flat Stone (Thick)', 35, 75, 0, 25, 50),
('FS-TN', 3, 'Flat Stone (Thin)', 25, 50, 0, 25, 25),
('FW', 4, 'Felt Wheel', 50, 50, 0, 25, 25),
('H', 5, 'Hexagel', 200, 33, 0, 18, 15),
('IP', 3, 'Ivocap Powder', 180, 40, 0, 27, 18),
('ISG', 3, 'Inverted Stone Green', 300, 60, 0, 33, 30),
('ISR', 3, 'Inverted Stone Red', 400, 40, 0, 23, 20),
('M', 1, 'Mandrel', 50, 60, 0, 35, 25),
('PRB', 3, 'Pointed Rubber (Black)', 60, 60, 0, 30, 30),
('PRG', 3, 'Pointed Rubber (Green)', 60, 60, 0, 30, 30),
('PSG', 3, 'Pointed Stone (Green)', 90, 70, 0, 35, 35),
('PSRB', 3, 'Pointed Stone Red (Big)', 90, 70, 0, 35, 35),
('PSRS', 3, 'Pointed Stone Red (Small)', 80, 70, 0, 35, 35),
('PW', 3, 'Pink Wax', 90, 75, 0, 30, 35),
('RW', 1, 'Rug Wheel', 85, 150, 0, 40, 110),
('RWB', 3, 'Rubber Wheel (Black)', 90, 50, 0, 25, 25),
('RWG', 3, 'Rubber Wheel (Green)', 90, 50, 0, 25, 25),
('SD', 3, 'Separating Disc', 75, 80, 0, 40, 40),
('SPD', 4, 'Speedy', 30, 75, 0, 20, 55),
('SW11/2', 3, 'Sprue Wax 1 1/2', 90, 100, 0, 50, 50),
('SW8L', 3, 'Sprue Wax 8L', 150, 100, 0, 25, 75),
('SW8R', 3, 'Sprue Wax 8R', 75, 90, 0, 30, 60),
('UT', 2, 'Ultra Thin', 140, 35, 0, 23, 17),
('WB', 1, 'Wheel Brush', 85, 75, 0, 35, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblpo`
--

CREATE TABLE `tblpo` (
  `POID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `POStatusID` int(11) NOT NULL DEFAULT '1',
  `orderdatetime` datetime NOT NULL,
  `shipdate` varchar(15) NOT NULL,
  `receivedate` varchar(50) DEFAULT NULL,
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
(1, 'Draft'),
(2, 'Approved'),
(3, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequisition`
--

CREATE TABLE `tblrequisition` (
  `ReqID` int(11) NOT NULL,
  `CaseID` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblrequisitionitem`
--

CREATE TABLE `tblrequisitionitem` (
  `ReqID` int(11) NOT NULL,
  `ItemID` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Mr.', 'Vincent', '', 'Fajardo', 'Intercast Dental Corp', 'info@intercast-dental.net', '2526171', '', '2530124', 'http://www.intercast-dental.net', '4th Floor, Intercast Tower, 2230 Jose Abad Santos Avenue,  Manila1012 Philippines', 'Jose Abad Santos Avenue', 'Manila', ''),
(2, 'Mr.', 'Remedio', '', 'Ronie', 'Ace Dental Supply', 'acedentalsupply@gmail.com', '7336453', '', '', '', '668, F Torres Street, Sta. Cruz, Manila City, 1014, Metro Manila', 'Sta. Cruz', 'Manila', ''),
(5, 'Mrs.', 'Angelita', 'Quintos', 'Chua', 'Centro Dentista Dental Supply & General Merchandise', 'centrodental@gmail.com', '7334452', '', '', 'http://', '447 Evangelista Street, Quiapo, Manila, Metro Manila, Philippines ', 'Quiapo', 'Manila', ''),
(6, 'Mr.', 'asdf', '', 'asdf', 'asdfasdf', '', '', '', '', '', 'asdf', 'asdfasdf', 'asdf', ''),
(7, 'Mr.', 'asdf', '', 'asf', 'asdfasdf', '', '', '', '', '', 'asdf', 'asdfasdfasfasd', 'asdfasdf', ''),
(8, 'Mr.', 'asdf', '', 'asdf', 'asdf', '', '', '', '', '', 'asdf', 'asdf', 'asfd', '');

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
(1, 1, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 2),
(2, 8, 'client', 'ae2b1fca515949e5d54fb22b8ed95575', 1),
(3, 31, 'jgabagacina@gmail.com', '03ea847ef28f97dfc4cd3f335080fbfb', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `DentistID` (`DentistID`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `CaseTypeID` (`CaseTypeID`);

--
-- Indexes for table `tblcase1`
--
ALTER TABLE `tblcase1`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `DentistID` (`DentistID`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `CaseTypeID` (`CaseTypeID`);

--
-- Indexes for table `tblcasetype`
--
ALTER TABLE `tblcasetype`
  ADD PRIMARY KEY (`CaseTypeID`);

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
-- Indexes for table `tblinvoice1`
--
ALTER TABLE `tblinvoice1`
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
-- Indexes for table `tblinvoicepayment`
--
ALTER TABLE `tblinvoicepayment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `DentistID` (`DentistID`),
  ADD KEY `InvoiceID` (`InvoiceID`);

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
-- Indexes for table `tblrequisition`
--
ALTER TABLE `tblrequisition`
  ADD PRIMARY KEY (`ReqID`);

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
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblcase1`
--
ALTER TABLE `tblcase1`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblinvoicepayment`
--
ALTER TABLE `tblinvoicepayment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `tblrequisition`
--
ALTER TABLE `tblrequisition`
  MODIFY `ReqID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
