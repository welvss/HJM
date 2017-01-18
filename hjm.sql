-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 01:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

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

CREATE TABLE IF NOT EXISTS `tblcase` (
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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `Type`, `CaseTypeID`, `DentistID`, `orderdatetime`, `patientfirstname`, `patientlastname`, `gender`, `age`, `shade1`, `shade2`, `description`, `Tray`, `SG`, `BW`, `MC`, `OC`, `Photos`, `Articulator`, `OD`, `teeth`, `items`, `notes`, `file`, `duedate`, `duetime`, `status_id`, `createdon`, `completedon`) VALUES
(1, 'FIXED', 'EM', 10, '2016-11-11 15:04:20', 'Arnel', 'Bernales', '1', 30, 1, 'A1', '', 1, 0, 1, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'E', '', '', '2016-11-18', '19:25:00', 3, '2016-11-12 00:00:00', '2016-11-17 00:00:00'),
(2, 'RPD', 'F', 13, '2016-11-21 17:55:59', 'Rowel', 'Bendana', '1', 53, 3, 'A1', '', 0, 0, 0, 1, 1, 0, 0, 1, '1,2,3', 'FS-TN', '', '', '2016-12-07', '16:14:00', 3, '2016-11-22 00:00:00', '2016-12-06 00:00:00'),
(3, 'FIXED', 'C', 20, '2016-11-11 18:10:07', 'Wycliffe', 'Aquino', '1', 29, 4, 'A3.5', '', 0, 1, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10', 'E', '', '', '2016-11-21', '11:29:00', 3, '2016-11-12 00:00:00', '2016-11-20 00:00:00'),
(4, 'Others', 'MG', 18, '2016-11-18 14:33:53', 'Reynaldo', 'Redrino', '1', 42, 4, 'A3.5', '', 0, 1, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'FS-TK', '', '', '2016-11-26', '15:58:00', 3, '2016-11-19 00:00:00', '2016-11-25 00:00:00'),
(5, 'RPD', 'D', 29, '2016-11-04 18:55:36', 'Herminio', 'Basallaje', '1', 52, 4, 'A2.5', '', 0, 0, 0, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'FS-TK', '', '', '2016-11-13', '13:03:00', 3, '2016-11-05 00:00:00', '2016-11-12 00:00:00'),
(6, 'Others', 'R', 21, '2016-11-21 08:03:20', 'Joseph Albert', 'Raynera', '1', 45, 3, 'A1', '', 0, 0, 1, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12', 'CBM', '', '', '2016-12-05', '13:53:00', 3, '2016-11-22 00:00:00', '2016-12-04 00:00:00'),
(7, 'FIXED', 'TI', 8, '2016-11-13 20:35:24', 'William', 'Cometa', '1', 45, 4, 'A3', '', 0, 0, 1, 0, 1, 0, 0, 0, '1,2,3', 'ES', '', '', '2016-11-23', '15:18:00', 3, '2016-11-14 00:00:00', '2016-11-22 00:00:00'),
(8, 'FIXED', 'VE', 11, '2016-11-06 09:14:07', 'Cosme', 'Monares', '1', 59, 2, 'A2.5', '', 0, 0, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'E', '', '', '2016-11-14', '17:36:00', 3, '2016-11-07 00:00:00', '2016-11-13 00:00:00'),
(9, 'RPD', 'OP', 26, '2016-11-26 08:38:47', 'Jessie', 'Tapiador', '1', 40, 2, 'A3.5', '', 1, 1, 0, 0, 1, 1, 1, 0, '1,2,3,4,5,6', 'FS-TN', '', '', '2016-12-06', '15:36:00', 3, '2016-11-27 00:00:00', '2016-12-05 00:00:00'),
(10, 'RPD', 'D', 27, '2016-11-03 19:00:23', 'Rodney', 'Hipolito', '1', 49, 4, 'A3.5', '', 1, 1, 0, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12', 'E', '', '', '2016-11-11', '08:39:00', 3, '2016-11-04 00:00:00', '2016-11-10 00:00:00'),
(11, 'FIXED', 'TI', 9, '2016-11-10 17:54:42', 'Cosme', 'Fernandez', '1', 56, 1, 'A3', '', 1, 1, 1, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11', 'FS-TN', '', '', '2016-11-26', '14:19:00', 3, '2016-11-11 00:00:00', '2016-11-25 00:00:00'),
(12, 'FIXED', 'P', 15, '2016-11-14 10:12:43', 'Nelson', 'Delima', '1', 46, 1, 'A2.5', '', 0, 1, 1, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'FS-TK', '', '', '2016-12-01', '15:41:00', 3, '2016-11-15 00:00:00', '2016-12-30 00:00:00'),
(13, 'Others', 'IR', 30, '2016-11-17 11:20:32', 'Rodrigo', 'Olivar', '1', 48, 4, 'A3.5', '', 1, 1, 1, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'FS-TK', '', '', '2016-11-30', '20:37:00', 3, '2016-11-18 00:00:00', '2016-11-29 00:00:00'),
(14, 'FIXED', 'T', 19, '2016-11-20 17:06:59', 'Alejandro', 'Dolor', '1', 58, 4, 'A3', '', 0, 0, 0, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7', 'E', '', '', '2016-12-08', '16:29:00', 3, '2016-11-21 00:00:00', '2016-12-07 00:00:00'),
(15, 'FIXED', 'EM', 18, '2016-11-01 17:46:00', 'Rodrigo', 'Rile', '1', 43, 2, 'A2.5', '', 0, 1, 0, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19', 'FW', '', '', '2016-11-06', '10:49:00', 3, '2016-11-02 00:00:00', '2016-11-05 00:00:00'),
(16, 'FIXED', 'C', 24, '2016-11-02 14:35:30', 'Michael', 'Ladrillo', '1', 44, 3, 'A2.5', '', 1, 0, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'E', '', '', '2016-11-17', '10:18:00', 3, '2016-11-03 00:00:00', '2016-11-16 00:00:00'),
(17, 'Others', 'R', 25, '2016-11-20 16:30:26', 'Michael', 'Onguda', '1', 56, 3, 'A3', '', 0, 0, 1, 0, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'FW', '', '', '2016-11-26', '10:00:00', 3, '2016-11-21 00:00:00', '2016-11-25 00:00:00'),
(18, 'FIXED', 'P', 9, '2016-11-10 09:08:18', 'Wright', 'Tasin', '1', 29, 2, 'A2.5', '', 0, 0, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'E', '', '', '2016-11-15', '20:51:00', 3, '2016-11-11 00:00:00', '2016-11-14 00:00:00'),
(19, 'FIXED', 'T', 19, '2016-11-15 20:39:33', 'Filimon', 'Mandapat', '1', 56, 2, 'A3', '', 0, 0, 1, 0, 1, 1, 0, 1, '1,2', 'FW', '', '', '2016-12-02', '09:52:00', 3, '2016-11-16 00:00:00', '2016-12-01 00:00:00'),
(20, 'RPD', 'CC', 23, '2016-11-21 08:56:43', 'Bobet Mari', 'Camelon', '1', 52, 4, 'A2.5', '', 1, 1, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9', 'FS-TN', '', '', '2016-12-04', '08:35:00', 3, '2016-11-22 00:00:00', '2016-12-03 00:00:00'),
(21, 'RPD', 'D', 26, '2016-11-06 16:48:55', 'Jobert', 'Escapalao', '1', 53, 3, 'A3', '', 0, 1, 0, 0, 0, 0, 1, 0, '1,2,3,4,5,6', 'ES', '', '', '2016-11-23', '11:12:00', 3, '2016-11-07 00:00:00', '2016-11-22 00:00:00'),
(22, 'Others', 'EX', 19, '2016-11-13 18:55:52', 'Noel', 'Francisco', '1', 36, 4, 'A2.5', '', 0, 1, 1, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'ES', '', '', '2016-11-27', '17:03:00', 3, '2016-11-14 00:00:00', '2016-11-26 00:00:00'),
(23, 'RPD', 'F', 27, '2016-11-17 10:13:13', 'Jay', 'Dayaon', '1', 20, 2, 'A1', '', 0, 0, 1, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'ES', '', '', '2016-12-03', '10:38:00', 3, '2016-11-18 00:00:00', '2016-12-02 00:00:00'),
(24, 'RPD', 'OP', 16, '2016-11-05 13:38:21', 'Charbi', 'Reyes', '1', 32, 2, 'A3', '', 0, 0, 0, 0, 0, 0, 1, 1, '1,2,3,4,5,6', 'FS-TK', '', '', '2016-11-24', '08:50:00', 3, '2016-11-06 00:00:00', '2016-11-23 00:00:00'),
(25, 'FIXED', 'Z', 9, '2016-11-15 15:18:45', 'Richie', 'Basallaje', '1', 58, 4, 'A2.5', '', 1, 1, 1, 1, 0, 0, 0, 1, '1,2,3', 'E', '', '', '2016-11-25', '15:58:00', 3, '2016-11-16 00:00:00', '2016-11-24 00:00:00'),
(26, 'RPD', 'CC', 26, '2016-11-29 09:04:20', 'Michael', 'Tapiador', '1', 39, 4, 'A2.5', '', 0, 0, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26', 'CBM', '', '', '2016-12-10', '08:07:00', 3, '2016-11-30 00:00:00', '2016-12-09 00:00:00'),
(27, 'FIXED', 'VE', 16, '2016-11-19 14:56:59', 'Wright', 'Quesea', '1', 43, 2, 'A3.5', '', 0, 0, 1, 0, 0, 1, 1, 1, '1,2,3', 'ES', '', '', '2016-12-03', '16:14:00', 3, '2016-11-20 00:00:00', '2016-12-02 00:00:00'),
(28, 'Others', 'R', 26, '2016-11-10 13:42:13', 'Rodney', 'Aquino', '1', 59, 3, 'A1', '', 0, 0, 0, 1, 0, 1, 1, 0, '1,2', 'FS-TN', '', '', '2016-11-27', '09:36:00', 3, '2016-11-11 00:00:00', '2016-11-26 00:00:00'),
(29, 'RPD', 'CC', 10, '2016-11-23 11:22:10', 'Jobert', 'Bautista', '1', 44, 4, 'A1', '', 0, 1, 1, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'E', '', '', '2016-12-06', '18:56:00', 3, '2016-11-24 00:00:00', '2016-12-05 00:00:00'),
(30, 'RPD', 'OP', 9, '2016-11-25 20:36:19', 'Jose Mari Abelardo', 'Dayaon', '1', 45, 2, 'A2.5', '', 1, 1, 1, 0, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'FS-TN', '', '', '2016-12-03', '12:57:00', 3, '2016-11-26 00:00:00', '2016-12-02 00:00:00'),
(31, 'RPD', 'CC', 11, '2016-11-02 12:05:45', 'Herminio', 'Canete', '1', 25, 4, 'A2.5', '', 0, 1, 0, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'E', '', '', '2016-11-07', '14:37:00', 3, '2016-11-03 00:00:00', '2016-11-06 00:00:00'),
(32, 'FIXED', 'Z', 28, '2016-11-09 10:20:20', 'Angelito', 'Canete', '1', 36, 3, 'A3', '', 1, 0, 0, 0, 0, 1, 0, 0, '1,2,3,4', 'FW', '', '', '2016-11-29', '15:14:00', 3, '2016-11-10 00:00:00', '2016-11-28 00:00:00'),
(33, 'FIXED', 'TI', 21, '2016-11-21 10:59:47', 'Elmer', 'Abanil', '1', 48, 3, 'A3', '', 1, 0, 0, 0, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10', 'CBM', '', '', '2016-12-04', '12:39:00', 3, '2016-11-22 00:00:00', '2016-12-03 00:00:00'),
(34, 'Others', 'EX', 25, '2016-11-07 13:38:17', 'Ralph', 'Valdez', '1', 57, 2, 'A3', '', 0, 0, 0, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26', 'FW', '', '', '2016-11-16', '18:02:00', 3, '2016-11-08 00:00:00', '2016-11-15 00:00:00'),
(35, 'Others', 'IR', 28, '2016-11-16 08:26:00', 'Joseph Albert', 'Bongolan', '1', 56, 4, 'A3.5', '', 0, 1, 1, 0, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'CBM', '', '', '2016-11-25', '18:48:00', 3, '2016-11-17 00:00:00', '2016-11-24 00:00:00'),
(36, 'Others', 'MG', 23, '2016-11-19 09:07:32', 'Rowel', 'Aquino', '1', 41, 1, 'A1', '', 0, 1, 0, 0, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'ES', '', '', '2016-11-25', '13:50:00', 3, '2016-11-20 00:00:00', '2016-11-24 00:00:00'),
(37, 'Others', 'MG', 24, '2016-11-21 17:51:15', 'Ricardo', 'Duzon', '1', 22, 3, 'A3', '', 0, 1, 1, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'FS-TK', '', '', '2016-11-27', '11:55:00', 3, '2016-11-22 00:00:00', '2016-11-26 00:00:00'),
(38, 'RPD', 'OP', 24, '2016-11-01 15:19:53', 'Jose Mari Abelardo', 'Dolor', '1', 43, 4, 'A2.5', '', 0, 1, 0, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'ES', '', '', '2016-11-10', '12:54:00', 3, '2016-11-02 00:00:00', '2016-11-09 00:00:00'),
(39, 'FIXED', 'T', 19, '2016-11-24 10:50:41', 'Roger', 'Ladrillo', '1', 39, 4, 'A2.5', '', 1, 1, 0, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'FS-TN', '', '', '2016-12-08', '09:01:00', 3, '2016-11-25 00:00:00', '2016-12-07 00:00:00'),
(40, 'FIXED', 'Z', 9, '2016-11-14 20:22:29', 'Ricardo', 'Santos', '1', 23, 3, 'A2.5', '', 1, 0, 0, 0, 0, 0, 1, 0, '1,2,3,4,5', 'FW', '', '', '2016-11-23', '16:43:00', 3, '2016-11-15 00:00:00', '2016-11-22 00:00:00'),
(41, 'RPD', 'D', 26, '2016-11-09 19:10:18', 'Robert', 'Quesea', '1', 42, 4, 'A3', '', 1, 1, 1, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12', 'FS-TK', '', '', '2016-11-27', '12:50:00', 3, '2016-11-10 00:00:00', '2016-11-26 00:00:00'),
(42, 'RPD', 'TH', 20, '2016-11-08 17:31:27', 'Jessie', 'De Vera', '1', 31, 1, 'A3.5', '', 1, 0, 1, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23', 'FS-TK', '', '', '2016-11-24', '15:47:00', 3, '2016-11-09 00:00:00', '2016-11-23 00:00:00'),
(43, 'FIXED', 'VE', 11, '2016-11-27 10:42:01', 'Richie', 'Torres', '1', 52, 2, 'A3', '', 0, 1, 1, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11', 'E', '', '', '2016-12-13', '09:44:00', 3, '2016-11-28 00:00:00', '2016-12-12 00:00:00'),
(44, 'FIXED', 'Z', 19, '2016-11-18 11:27:10', 'Ricardo', 'Vicente', '1', 50, 1, 'A1', '', 0, 0, 1, 1, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', 'FS-TK', '', '', '2016-11-23', '19:45:00', 3, '2016-11-19 00:00:00', '2016-11-22 00:00:00'),
(45, 'FIXED', 'VE', 30, '2016-11-17 18:50:47', 'Roger', 'Bueno', '1', 43, 2, 'A1', '', 1, 1, 0, 1, 1, 1, 0, 1, '1,2,3,4,5,6', 'FW', '', '', '2016-12-03', '20:38:00', 3, '2016-11-18 00:00:00', '2016-12-02 00:00:00'),
(46, 'FIXED', 'C', 17, '2016-11-21 17:07:20', 'Christopher', 'Onguda', '1', 43, 1, 'A3.5', '', 1, 1, 1, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12', 'FW', '', '', '2016-12-09', '13:03:00', 3, '2016-11-22 00:00:00', '2016-12-08 00:00:00'),
(47, 'Others', 'IR', 12, '2016-11-06 18:16:35', 'Rowel', 'Dimaano', '1', 30, 2, 'A3', '', 1, 0, 1, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29', 'FW', '', '', '2016-11-24', '20:46:00', 3, '2016-11-07 00:00:00', '2016-11-23 00:00:00'),
(48, 'Others', 'MG', 8, '2016-11-20 20:39:18', 'Christopher', 'Cometa', '1', 20, 2, 'A2.5', '', 0, 1, 1, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'FS-TN', '', '', '2016-11-29', '17:40:00', 3, '2016-11-21 00:00:00', '2016-11-28 00:00:00'),
(49, 'RPD', 'I', 10, '2016-11-11 09:25:06', 'Jay', 'Boligao', '1', 51, 4, 'A3.5', '', 1, 1, 0, 0, 0, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14', 'FS-TK', '', '', '2016-11-17', '20:57:00', 3, '2016-11-12 00:00:00', '2016-11-16 00:00:00'),
(50, 'RPD', 'F', 13, '2016-11-03 18:37:50', 'Jessie', 'Laylo', '1', 26, 1, 'A1', '', 1, 0, 0, 0, 0, 1, 0, 0, '1,2,3,4,5,6,7,8,9', 'FS-TN', '', '', '2016-11-22', '13:53:00', 3, '2016-11-04 00:00:00', '2016-11-21 00:00:00'),
(51, 'RPD', 'I', 23, '2016-11-16 11:55:09', 'Jessie', 'Musa', '1', 32, 4, 'A1', '', 1, 0, 1, 1, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'FW', '', '', '2016-12-02', '12:01:00', 3, '2016-11-17 00:00:00', '2016-12-01 00:00:00'),
(52, 'Others', 'MG', 16, '2016-11-10 14:34:13', 'Rhomel', 'Santos', '1', 50, 2, 'A3.5', '', 1, 0, 0, 0, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'FS-TN', '', '', '2016-11-18', '11:58:00', 3, '2016-11-11 00:00:00', '2016-11-17 00:00:00'),
(53, 'Others', 'R', 23, '2016-11-20 16:05:05', 'Bobet Mari', 'Torres', '1', 35, 2, 'A3', '', 1, 0, 0, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27', 'FW', '', '', '2016-12-02', '18:03:00', 3, '2016-11-21 00:00:00', '2016-12-01 00:00:00'),
(54, 'RPD', 'LB', 22, '2016-11-18 19:47:49', 'Ricky', 'Dolor', '1', 55, 3, 'A1', '', 0, 0, 1, 0, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'ES', '', '', '2016-11-29', '18:54:00', 3, '2016-11-19 00:00:00', '2016-11-28 00:00:00'),
(55, 'Others', 'R', 22, '2016-11-23 17:34:53', 'Jay', 'Hipolito', '1', 35, 3, 'A1', '', 0, 1, 1, 0, 1, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24', 'FW', '', '', '2016-12-11', '16:05:00', 3, '2016-11-24 00:00:00', '2016-12-10 00:00:00'),
(56, 'FIXED', 'P', 19, '2016-11-06 17:22:41', 'Reynaldo', 'Boligao', '1', 28, 1, 'A1', '', 1, 1, 0, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9', 'E', '', '', '2016-11-25', '18:16:00', 3, '2016-11-07 00:00:00', '2016-11-24 00:00:00'),
(57, 'RPD', 'I', 20, '2016-11-23 13:34:05', 'Bobet Mari', 'Camelon', '1', 60, 3, 'A2.5', '', 1, 1, 1, 1, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10', 'FW', '', '', '2016-12-05', '14:16:00', 3, '2016-11-24 00:00:00', '2016-12-04 00:00:00'),
(58, 'RPD', 'COM', 24, '2016-11-17 10:39:10', 'Ferdinand', 'Jalimao', '1', 44, 1, 'A1', '', 0, 1, 1, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'FS-TN', '', '', '2016-12-02', '18:19:00', 3, '2016-11-18 00:00:00', '2016-12-01 00:00:00'),
(59, 'RPD', 'LB', 17, '2016-11-10 19:27:03', 'Goerge', 'Francisco', '1', 59, 4, 'A3', '', 1, 0, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15', 'CBM', '', '', '2016-11-20', '08:59:00', 3, '2016-11-11 00:00:00', '2016-11-19 00:00:00'),
(60, 'Others', 'EX', 19, '2016-11-08 10:16:13', 'Ricky', 'Bajaro', '1', 34, 4, 'A3', '', 0, 1, 0, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8', 'FS-TN', '', '', '2016-11-18', '08:34:00', 3, '2016-11-09 00:00:00', '2016-11-17 00:00:00'),
(61, 'Others', 'IR', 13, '2016-11-30 20:49:49', 'Bobet Mari', 'Bendana', '1', 35, 2, 'A2.5', '', 1, 0, 0, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'FW', '', '', '2016-12-15', '11:17:00', 3, '0000-00-00 00:00:00', '2016-12-14 00:00:00'),
(62, 'FIXED', 'TI', 21, '2016-11-29 20:58:07', 'Bobet Mari', 'Dimaano', '1', 35, 4, 'A2.5', '', 0, 1, 1, 1, 1, 0, 0, 1, '1,2,3,4,5,6,7', 'FW', '', '', '2016-12-14', '15:48:00', 3, '2016-11-30 00:00:00', '2016-12-13 00:00:00'),
(63, 'RPD', 'TH', 26, '2016-11-21 16:07:16', 'Ricky', 'Musa', '1', 32, 2, 'A3.5', '', 1, 0, 1, 0, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'ES', '', '', '2016-12-02', '10:22:00', 3, '2016-11-22 00:00:00', '2016-12-01 00:00:00'),
(64, 'RPD', 'COM', 11, '2016-11-18 13:24:48', 'Jesus', 'Gallano', '1', 22, 2, 'A3', '', 0, 1, 0, 1, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19', 'ES', '', '', '2016-11-28', '13:00:00', 3, '2016-11-19 00:00:00', '2016-11-27 00:00:00'),
(65, 'RPD', 'I', 13, '2016-11-10 11:22:11', 'Ricardo', 'Gantalao', '1', 20, 3, 'A2.5', '', 0, 1, 0, 0, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10', 'FW', '', '', '2016-11-18', '18:00:00', 3, '2016-11-11 00:00:00', '2016-11-17 00:00:00'),
(66, 'FIXED', 'VE', 18, '2016-11-26 19:34:04', 'Nelson', 'Escapalao', '1', 30, 1, 'A1', '', 0, 1, 1, 1, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', 'FW', '', '', '2016-12-07', '08:10:00', 3, '2016-11-27 00:00:00', '2016-12-06 00:00:00'),
(67, 'FIXED', 'T', 17, '2016-11-15 15:09:31', 'Arnel', 'Solleza', '1', 41, 3, 'A3.5', '', 0, 0, 0, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13', 'CBM', '', '', '2016-12-01', '09:41:00', 3, '2016-11-16 00:00:00', '2016-12-30 00:00:00'),
(68, 'Others', 'R', 30, '2016-11-02 17:42:39', 'Ferdinand', 'Aquino', '1', 57, 2, 'A3.5', '', 1, 0, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12', 'FS-TN', '', '', '2016-11-21', '16:28:00', 3, '2016-11-03 00:00:00', '2016-11-20 00:00:00'),
(69, 'RPD', 'I', 30, '2016-11-27 12:55:54', 'Winifredo', 'Bajaro', '1', 46, 1, 'A2.5', '', 1, 1, 0, 0, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'ES', '', '', '2016-12-08', '11:45:00', 3, '2016-11-28 00:00:00', '2016-12-07 00:00:00'),
(70, 'FIXED', 'VE', 19, '2016-11-22 19:35:17', 'Filimon', 'Nicomedez', '1', 59, 2, 'A2.5', '', 0, 0, 0, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'ES', '', '', '2016-12-05', '10:32:00', 3, '2016-11-23 00:00:00', '2016-12-04 00:00:00'),
(71, 'FIXED', 'Z', 30, '2016-11-27 09:23:22', 'John Carlo', 'De Guzman', '1', 59, 3, 'A2.5', '', 0, 1, 1, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'FS-TK', '', '', '2016-12-11', '20:04:00', 3, '2016-11-28 00:00:00', '2016-12-10 00:00:00'),
(72, 'Others', 'MG', 13, '2016-11-17 17:33:31', 'Francis Oliver', 'Torres', '1', 22, 4, 'A3', '', 0, 1, 0, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'E', '', '', '2016-12-03', '18:22:00', 3, '2016-11-18 00:00:00', '2016-12-02 00:00:00'),
(73, 'Others', 'R', 29, '2016-11-05 09:48:46', 'Angelito', 'Basallaje', '1', 21, 2, 'A3', '', 0, 1, 1, 0, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19', 'E', '', '', '2016-11-21', '10:15:00', 3, '2016-11-06 00:00:00', '2016-11-20 00:00:00'),
(74, 'RPD', 'D', 20, '2016-11-29 17:44:19', 'Jose', 'Reyes', '1', 58, 1, 'A3', '', 1, 1, 1, 1, 0, 1, 0, 1, '1,2,3,4,5,6,7', 'FS-TK', '', '', '2016-12-08', '11:51:00', 3, '2016-11-30 00:00:00', '2016-12-07 00:00:00'),
(75, 'FIXED', 'C', 18, '2016-11-02 08:57:24', 'Louie', 'De Vera', '1', 58, 4, 'A3', '', 1, 1, 1, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21', 'FS-TK', '', '', '2016-11-09', '13:56:00', 3, '2016-11-03 00:00:00', '2016-11-08 00:00:00'),
(76, 'Others', 'MG', 8, '2016-11-19 12:01:12', 'Bobet Mari', 'Dayaon', '1', 30, 4, 'A2.5', '', 1, 0, 1, 1, 1, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31', 'ES', '', '', '2016-12-02', '18:13:00', 3, '2016-11-20 00:00:00', '2016-12-01 00:00:00'),
(77, 'FIXED', 'T', 24, '2016-11-23 09:06:08', 'Bobet Mari', 'Santos', '1', 48, 2, 'A2.5', '', 1, 0, 1, 1, 0, 1, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25', 'FS-TK', '', '', '2016-11-29', '20:17:00', 3, '2016-11-24 00:00:00', '2016-11-28 00:00:00'),
(78, 'Others', 'EX', 24, '2016-11-14 12:56:28', 'Wright', 'Raynera', '1', 44, 4, 'A2.5', '', 0, 1, 1, 1, 1, 1, 1, 0, '1,2,3,4,5', 'ES', '', '', '2016-12-04', '18:36:00', 3, '2016-11-15 00:00:00', '2016-12-03 00:00:00'),
(79, 'Others', 'MG', 13, '2016-11-27 15:59:18', 'Ricardo', 'Horcajo', '1', 59, 2, 'A2.5', '', 0, 1, 1, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11', 'FS-TN', '', '', '2016-12-14', '18:28:00', 3, '2016-11-28 00:00:00', '2016-12-13 00:00:00'),
(80, 'RPD', 'COM', 19, '2016-11-18 09:46:02', 'Paul Martin', 'Bernales', '1', 39, 4, 'A2.5', '', 0, 0, 1, 0, 1, 1, 0, 0, '1,2,3,4,5,6,7', 'FS-TK', '', '', '2016-12-09', '08:28:00', 3, '2016-11-19 00:00:00', '2016-12-08 00:00:00'),
(81, 'Others', 'IR', 8, '2016-11-17 18:23:54', 'Richie', 'Santos', '1', 25, 4, 'A3', '', 0, 0, 1, 1, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', 'ES', '', '', '2016-12-06', '12:49:00', 3, '2016-11-18 00:00:00', '2016-12-05 00:00:00'),
(82, 'Others', 'R', 22, '2016-11-27 14:31:45', 'Rodrigo', 'Monares', '1', 33, 4, 'A2.5', '', 0, 0, 0, 0, 1, 1, 1, 0, '1,2,3,4', 'ES', '', '', '2016-12-03', '17:02:00', 3, '2016-11-28 00:00:00', '2016-12-02 00:00:00'),
(83, 'RPD', 'CC', 26, '2016-11-22 18:55:31', 'Casimiro', 'Baylon', '1', 45, 1, 'A3.5', '', 0, 1, 1, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'CBM', '', '', '2016-12-05', '20:13:00', 3, '2016-11-23 00:00:00', '2016-12-04 00:00:00'),
(84, 'RPD', 'LB', 27, '2016-11-29 12:44:49', 'Elmer', 'Bueno', '1', 35, 1, 'A3.5', '', 0, 1, 0, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30', 'FS-TK', '', '', '2016-12-13', '11:10:00', 3, '2016-11-30 00:00:00', '2016-12-12 00:00:00'),
(85, 'FIXED', 'P', 26, '2016-11-18 20:08:27', 'Ferdinand', 'Camelon', '1', 34, 2, 'A2.5', '', 0, 0, 1, 1, 1, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23', 'ES', '', '', '2016-12-09', '20:10:00', 3, '2016-11-19 00:00:00', '2016-12-08 00:00:00'),
(86, 'FIXED', 'Z', 12, '2016-11-10 14:40:16', 'Winifredo', 'Hipolito', '1', 31, 3, 'A2.5', '', 1, 1, 1, 0, 1, 1, 1, 0, '1,2,3,4,5', 'CBM', '', '', '2016-11-17', '16:20:00', 3, '2016-11-11 00:00:00', '2016-11-16 00:00:00'),
(87, 'Others', 'IR', 15, '2016-11-07 09:28:52', 'Rizalino', 'Santos', '1', 26, 1, 'A3.5', '', 0, 1, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', 'FS-TN', '', '', '2016-11-18', '10:40:00', 3, '2016-11-08 00:00:00', '2016-11-17 00:00:00'),
(88, 'RPD', 'LB', 8, '2016-11-12 17:26:11', 'Jozel', 'Horcajo', '1', 29, 4, 'A3', '', 1, 0, 1, 1, 0, 1, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23', 'FS-TK', '', '', '2016-11-26', '12:35:00', 3, '2016-11-13 00:00:00', '2016-11-25 00:00:00'),
(89, 'Others', 'MG', 22, '2016-11-01 17:47:07', 'Angelito', 'Dolor', '1', 30, 3, 'A3.5', '', 0, 1, 1, 1, 0, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26', 'E', '', '', '2016-11-11', '14:00:00', 3, '2016-11-02 00:00:00', '2016-11-10 00:00:00'),
(90, 'RPD', 'CC', 23, '2016-11-30 13:40:03', 'Winifredo', 'Torres', '1', 55, 2, 'A1', '', 0, 0, 1, 0, 1, 0, 0, 0, '1,2,3,4,5,6,7,8', 'CBM', '', '', '2016-12-14', '20:42:00', 3, '0000-00-00 00:00:00', '2016-12-13 00:00:00'),
(91, 'FIXED', 'Z', 10, '2016-11-23 11:55:54', 'Renante', 'Monares', '1', 32, 3, 'A2.5', '', 0, 0, 1, 0, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28', 'FS-TN', '', '', '2016-11-29', '12:31:00', 3, '2016-11-24 00:00:00', '2016-11-28 00:00:00'),
(92, 'Others', 'EX', 23, '2016-11-30 19:59:02', 'Jessie', 'De Guzman', '1', 37, 1, 'A3', '', 1, 0, 0, 0, 1, 1, 1, 1, '1,2,3,4,5,6,7,8,9,10,11', 'FW', '', '', '2016-12-18', '17:42:00', 3, '0000-00-00 00:00:00', '2016-12-17 00:00:00'),
(93, 'FIXED', 'PJ', 24, '2016-11-21 20:37:13', 'Francis Oliver', 'Dayaon', '1', 31, 2, 'A3.5', '', 1, 0, 1, 0, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', 'ES', '', '', '2016-11-28', '18:07:00', 3, '2016-11-22 00:00:00', '2016-11-27 00:00:00'),
(94, 'RPD', 'D', 24, '2016-11-09 16:14:12', 'Arnel', 'Tapiador', '1', 59, 1, 'A3.5', '', 0, 0, 0, 1, 0, 0, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18', 'FS-TK', '', '', '2016-11-27', '09:55:00', 3, '2016-11-10 00:00:00', '2016-11-26 00:00:00'),
(95, 'FIXED', 'VE', 15, '2016-11-29 16:54:00', 'Rogelio', 'Vicente', '1', 57, 2, 'A3.5', '', 0, 0, 0, 1, 1, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14', 'ES', '', '', '2016-12-09', '16:36:00', 3, '2016-11-30 00:00:00', '2016-12-08 00:00:00'),
(96, 'RPD', 'LB', 27, '2016-11-22 08:53:55', 'Winifredo', 'De Vera', '1', 49, 2, 'A2.5', '', 0, 1, 1, 1, 1, 0, 1, 0, '1,2,3,4,5,6,7,8,9', 'E', '', '', '2016-12-03', '15:04:00', 3, '2016-11-23 00:00:00', '2016-12-02 00:00:00'),
(97, 'Others', 'MG', 27, '2016-11-11 16:28:07', 'Joseph Albert', 'Tapiador', '1', 21, 2, 'A3.5', '', 1, 1, 0, 1, 0, 0, 1, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'CBM', '', '', '2016-11-30', '18:09:00', 3, '2016-11-12 00:00:00', '2016-11-29 00:00:00'),
(98, 'RPD', 'CC', 24, '2016-11-22 19:58:39', 'Allan', 'Bongolan', '1', 30, 4, 'A3.5', '', 1, 0, 1, 0, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22', 'FS-TK', '', '', '2016-12-12', '16:14:00', 3, '2016-11-23 00:00:00', '2016-12-11 00:00:00'),
(99, 'RPD', 'TH', 12, '2016-11-13 13:27:14', 'Filimon', 'Usog', '1', 48, 1, 'A3.5', '', 0, 0, 1, 1, 1, 1, 0, 1, '1,2,3,4,5,6,7,8,9,10,11', 'FS-TN', '', '', '2016-12-02', '12:38:00', 3, '2016-11-14 00:00:00', '2016-12-01 00:00:00'),
(100, 'RPD', 'OP', 28, '2016-11-07 19:00:34', 'Ricardo', 'Basallaje', '1', 39, 2, 'A3.5', '', 0, 1, 1, 1, 0, 0, 1, 1, '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17', 'ES', '', '', '2016-11-28', '13:38:00', 3, '2016-11-08 00:00:00', '2016-11-27 00:00:00'),
(101, 'FIXED', 'EM', 31, '2017-01-16 22:00:08', 'asadfas', 'dadf', '1', 123123, 4, 'A1', '', 0, 0, 0, 0, 0, 0, 0, 0, '1,2,3,4,5', 'CBM', '', 'http://localhost/HJM/app/uploads/f6d128d1ee5cbd90c1fc7346ce308ece.JPG', '2017-01-17', '12:31', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'FIXED', 'C', 31, '2017-01-17 06:15:44', 'fasdf', 'sdfasdf', '1', 23, 4, '', '					    	\r\n					    	', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '2017-01-18', '03:12', 3, '2017-01-18 00:00:00', '2017-01-18 00:00:00'),
(103, 'FIXED', 'C', 31, '2017-01-19 01:08:35', 'afsdf', 'asdfasdf', '0', 0, 4, '', '					    	\r\n					    	', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 'data:image/png;base64,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', '2017-01-03', '12:31', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'FIXED', 'C', 31, '2017-01-19 01:22:04', '', '', '', 0, 4, '', '					    	\r\n					    	', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 'data:image/png;base64,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', '2017-01-05', '15:12', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcase1`
--

CREATE TABLE IF NOT EXISTS `tblcase1` (
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
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tblcasetype` (
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
('C', 'Ceramage', 'FIXED', 4, 100),
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

CREATE TABLE IF NOT EXISTS `tbldentist` (
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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

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
(31, 'Dr.', 'asfasdf', '', 'asdfasdf', 'asdfasdf', 'jgabagacina@gmail.com', '', '', '', '', 'asdfasdf', 'aasdfasdf', 'asdfasdf', 'asdfasdf', 'aasdfasdf', 'asdfasdf', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE IF NOT EXISTS `tblinvoice` (
  `InvoiceID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `CaseID` int(11) NOT NULL,
  `datecreated` datetime DEFAULT NULL,
  `duedate` varchar(50) NOT NULL,
  `Total` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`InvoiceID`, `DentistID`, `CaseID`, `datecreated`, `duedate`, `Total`, `status`, `paid`) VALUES
(1, 10, 1, '2016-11-11 15:04:20', '2016-11-28', 665, 1, 1),
(2, 13, 2, '2016-11-21 17:55:59', '2016-12-17', 1245, 1, 1),
(3, 20, 3, '2016-11-11 18:10:07', '2016-12-01', 1805, 1, 1),
(4, 18, 4, '2016-11-18 14:33:53', '2016-12-06', 1260, 1, 1),
(5, 29, 5, '2016-11-04 18:55:36', '2016-11-23', 1070, 1, 1),
(6, 21, 6, '2016-11-21 08:03:20', '2016-12-15', 165, 1, 1),
(7, 8, 7, '2016-11-13 20:35:24', '2016-12-03', 1075, 1, 1),
(8, 11, 8, '2016-11-06 09:14:07', '2016-11-24', 1385, 1, 1),
(9, 26, 9, '2016-11-26 08:38:47', '2016-12-16', 880, 1, 1),
(10, 27, 10, '2016-11-03 19:00:23', '2016-11-21', 1580, 1, 1),
(11, 9, 11, '2016-11-10 17:54:42', '2016-12-06', 2130, 1, 1),
(12, 15, 12, '2016-11-14 10:12:43', '2016-12-11', 2120, 1, 1),
(13, 30, 13, '2016-11-17 11:20:32', '2016-12-10', 830, 1, 1),
(14, 19, 14, '2016-11-20 17:06:59', '2016-12-18', 860, 1, 1),
(15, 18, 15, '2016-11-01 17:46:00', '2016-11-16', 2515, 1, 1),
(16, 24, 16, '2016-11-02 14:35:30', '2016-11-27', 775, 1, 1),
(17, 25, 17, '2016-11-20 16:30:26', '2016-12-06', 990, 1, 1),
(18, 9, 18, '2016-11-10 09:08:18', '2016-11-25', 1415, 1, 1),
(19, 19, 19, '2016-11-15 20:39:33', '2016-12-12', 2435, 1, 1),
(20, 23, 20, '2016-11-21 08:56:43', '2016-12-14', 1460, 1, 1),
(21, 26, 21, '2016-11-06 16:48:55', '2016-12-03', 1595, 1, 1),
(22, 19, 22, '2016-11-13 18:55:52', '2016-12-07', 1565, 1, 1),
(23, 27, 23, '2016-11-17 10:13:13', '2016-12-13', 1425, 1, 1),
(24, 16, 24, '2016-11-05 13:38:21', '2016-12-04', 2260, 1, 1),
(25, 9, 25, '2016-11-15 15:18:45', '2016-12-05', 1885, 1, 1),
(26, 26, 26, '2016-11-29 09:04:20', '2016-12-20', 55, 1, 1),
(27, 16, 27, '2016-11-19 14:56:59', '2016-12-13', 1490, 1, 1),
(28, 26, 28, '2016-11-10 13:42:13', '2016-12-07', 2085, 1, 1),
(29, 10, 29, '2016-11-23 11:22:10', '2016-12-16', 915, 1, 1),
(30, 9, 30, '2016-11-25 20:36:19', '2016-12-13', 810, 1, 1),
(31, 11, 31, '2016-11-02 12:05:45', '2016-11-17', 970, 1, 1),
(32, 28, 32, '2016-11-09 10:20:20', '2016-12-09', 1265, 1, 1),
(33, 21, 33, '2016-11-21 10:59:47', '2016-12-14', 165, 1, 1),
(34, 25, 34, '2016-11-07 13:38:17', '2016-11-26', 1330, 1, 1),
(35, 28, 35, '2016-11-16 08:26:00', '2016-12-05', 220, 1, 1),
(36, 23, 36, '2016-11-19 09:07:32', '2016-12-05', 1780, 1, 1),
(37, 24, 37, '2016-11-21 17:51:15', '2016-12-07', 790, 1, 1),
(38, 24, 38, '2016-11-01 15:19:53', '2016-11-20', 1015, 1, 1),
(39, 19, 39, '2016-11-24 10:50:41', '2016-12-18', 2140, 1, 1),
(40, 9, 40, '2016-11-14 20:22:29', '2016-12-03', 2215, 1, 1),
(41, 26, 41, '2016-11-09 19:10:18', '2016-12-07', 1695, 1, 1),
(42, 20, 42, '2016-11-08 17:31:27', '2016-12-04', 2085, 1, 1),
(43, 11, 43, '2016-11-27 10:42:01', '2016-12-23', 1970, 1, 1),
(44, 19, 44, '2016-11-18 11:27:10', '2016-12-03', 1605, 1, 1),
(45, 30, 45, '2016-11-17 18:50:47', '2016-12-13', 1415, 1, 1),
(46, 17, 46, '2016-11-21 17:07:20', '2016-12-19', 2615, 1, 1),
(47, 12, 47, '2016-11-06 18:16:35', '2016-12-04', 1835, 1, 1),
(48, 8, 48, '2016-11-20 20:39:18', '2016-12-09', 2085, 1, 1),
(49, 10, 49, '2016-11-11 09:25:06', '2016-11-27', 2355, 1, 1),
(50, 13, 50, '2016-11-03 18:37:50', '2016-12-02', 1400, 1, 1),
(51, 23, 51, '2016-11-16 11:55:09', '2016-12-12', 2460, 1, 1),
(52, 16, 52, '2016-11-10 14:34:13', '2016-11-28', 2320, 1, 1),
(53, 23, 53, '2016-11-20 16:05:05', '2016-12-12', 2030, 1, 1),
(54, 22, 54, '2016-11-18 19:47:49', '2016-12-09', 700, 1, 1),
(55, 22, 55, '2016-11-23 17:34:53', '2016-12-21', 2415, 1, 1),
(56, 19, 56, '2016-11-06 17:22:41', '2016-12-05', 860, 1, 1),
(57, 20, 57, '2016-11-23 13:34:05', '2016-12-15', 2025, 1, 1),
(58, 24, 58, '2016-11-17 10:39:10', '2016-12-12', 790, 1, 1),
(59, 17, 59, '2016-11-10 19:27:03', '2016-11-30', 165, 1, 1),
(60, 19, 60, '2016-11-08 10:16:13', '2016-11-28', 2620, 1, 1),
(61, 13, 61, '2016-11-30 20:49:49', '2016-12-25', 1760, 1, 1),
(62, 21, 62, '2016-11-29 20:58:07', '2016-12-24', 1480, 1, 1),
(63, 26, 63, '2016-11-21 16:07:16', '2016-12-12', 705, 1, 1),
(64, 11, 64, '2016-11-18 13:24:48', '2016-12-08', 950, 1, 1),
(65, 13, 65, '2016-11-10 11:22:11', '2016-11-28', 1470, 1, 1),
(66, 18, 66, '2016-11-26 19:34:04', '2016-12-17', 1575, 1, 1),
(67, 17, 67, '2016-11-15 15:09:31', '2016-12-11', 165, 1, 1),
(68, 30, 68, '2016-11-02 17:42:39', '2016-12-01', 2260, 1, 1),
(69, 30, 69, '2016-11-27 12:55:54', '2016-12-18', 1650, 1, 1),
(70, 19, 70, '2016-11-22 19:35:17', '2016-12-15', 650, 1, 1),
(71, 30, 71, '2016-11-27 09:23:22', '2016-12-21', 2235, 1, 1),
(72, 13, 72, '2016-11-17 17:33:31', '2016-12-13', 665, 1, 1),
(73, 29, 73, '2016-11-05 09:48:46', '2016-12-01', 1470, 1, 1),
(74, 20, 74, '2016-11-29 17:44:19', '2016-12-18', 720, 1, 1),
(75, 18, 75, '2016-11-02 08:57:24', '2016-11-19', 1630, 1, 1),
(76, 8, 76, '2016-11-19 12:01:12', '2016-12-12', 1680, 1, 1),
(77, 24, 77, '2016-11-23 09:06:08', '2016-12-09', 2110, 1, 1),
(78, 24, 78, '2016-11-14 12:56:28', '2016-12-14', 1870, 1, 1),
(79, 13, 79, '2016-11-27 15:59:18', '2016-12-24', 975, 1, 1),
(80, 19, 80, '2016-11-18 09:46:02', '2016-12-19', 500, 1, 1),
(81, 8, 81, '2016-11-17 18:23:54', '2016-12-16', 2185, 1, 1),
(82, 22, 82, '2016-11-27 14:31:45', '2016-12-13', 1005, 1, 1),
(83, 26, 83, '2016-11-22 18:55:31', '2016-12-15', 55, 1, 1),
(84, 27, 84, '2016-11-29 12:44:49', '2016-12-23', 1820, 1, 1),
(85, 26, 85, '2016-11-18 20:08:27', '2016-12-19', 1930, 1, 1),
(86, 12, 86, '2016-11-10 14:40:16', '2016-11-27', 275, 1, 1),
(87, 15, 87, '2016-11-07 09:28:52', '2016-11-28', 1185, 1, 1),
(88, 8, 88, '2016-11-12 17:26:11', '2016-12-06', 1580, 1, 1),
(89, 22, 89, '2016-11-01 17:47:07', '2016-11-21', 1135, 1, 1),
(90, 23, 90, '2016-11-30 13:40:03', '2016-12-24', 165, 1, 1),
(91, 10, 91, '2016-11-23 11:55:54', '2016-12-09', 2590, 1, 1),
(92, 23, 92, '2016-11-30 19:59:02', '2016-12-28', 1325, 1, 1),
(93, 24, 93, '2016-11-21 20:37:13', '2016-12-08', 660, 1, 1),
(94, 24, 94, '2016-11-09 16:14:12', '2016-12-07', 1065, 1, 1),
(95, 15, 95, '2016-11-29 16:54:00', '2016-12-19', 1485, 1, 1),
(96, 27, 96, '2016-11-22 08:53:55', '2016-12-13', 1385, 1, 1),
(97, 27, 97, '2016-11-11 16:28:07', '2016-12-10', 55, 1, 1),
(98, 24, 98, '2016-11-22 19:58:39', '2016-12-22', 1960, 1, 1),
(99, 12, 99, '2016-11-13 13:27:14', '2016-12-12', 1650, 1, 1),
(100, 28, 100, '2016-11-07 19:00:34', '2016-12-08', 1140, 1, 1),
(101, 31, 101, NULL, '', 0, 0, 0),
(102, 31, 102, '2017-01-18 01:20:32', '2017-01-20', 200, 1, 0),
(103, 31, 103, NULL, '', 0, 0, 0),
(104, 31, 104, NULL, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice1`
--

CREATE TABLE IF NOT EXISTS `tblinvoice1` (
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

CREATE TABLE IF NOT EXISTS `tblinvoiceitem` (
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
(1, 'CBM', 3, 55, 165),
(1, 'E', 2, 250, 500),
(2, 'CBM', 4, 55, 220),
(2, 'E', 2, 250, 500),
(2, 'ES', 7, 45, 315),
(2, 'FS-TK', 1, 35, 35),
(2, 'FS-TN', 7, 25, 175),
(3, 'CBM', 1, 55, 55),
(3, 'E', 7, 250, 1750),
(4, 'CBM', 1, 55, 55),
(4, 'E', 4, 250, 1000),
(4, 'ES', 3, 45, 135),
(4, 'FS-TK', 2, 35, 70),
(5, 'CBM', 7, 55, 385),
(5, 'E', 1, 250, 250),
(5, 'ES', 5, 45, 225),
(5, 'FS-TK', 6, 35, 210),
(6, 'CBM', 3, 55, 165),
(7, 'CBM', 1, 55, 55),
(7, 'E', 3, 250, 750),
(7, 'ES', 6, 45, 270),
(8, 'CBM', 7, 55, 385),
(8, 'E', 4, 250, 1000),
(9, 'CBM', 1, 55, 55),
(9, 'E', 2, 250, 500),
(9, 'ES', 4, 45, 180),
(9, 'FS-TK', 2, 35, 70),
(9, 'FS-TN', 3, 25, 75),
(10, 'CBM', 6, 55, 330),
(10, 'E', 5, 250, 1250),
(11, 'CBM', 5, 55, 275),
(11, 'E', 6, 250, 1500),
(11, 'ES', 3, 45, 135),
(11, 'FS-TK', 2, 35, 70),
(11, 'FS-TN', 6, 25, 150),
(12, 'CBM', 2, 55, 110),
(12, 'E', 7, 250, 1750),
(12, 'ES', 5, 45, 225),
(12, 'FS-TK', 1, 35, 35),
(13, 'CBM', 5, 55, 275),
(13, 'E', 1, 250, 250),
(13, 'ES', 6, 45, 270),
(13, 'FS-TK', 1, 35, 35),
(14, 'CBM', 2, 55, 110),
(14, 'E', 3, 250, 750),
(15, 'CBM', 2, 55, 110),
(15, 'E', 7, 250, 1750),
(15, 'ES', 2, 45, 90),
(15, 'FS-TK', 4, 35, 140),
(15, 'FS-TN', 5, 25, 125),
(15, 'FW', 6, 50, 300),
(16, 'CBM', 5, 55, 275),
(16, 'E', 2, 250, 500),
(17, 'CBM', 6, 55, 330),
(17, 'E', 1, 250, 250),
(17, 'ES', 2, 45, 90),
(17, 'FS-TK', 7, 35, 245),
(17, 'FS-TN', 1, 25, 25),
(17, 'FW', 1, 50, 50),
(18, 'CBM', 3, 55, 165),
(18, 'E', 5, 250, 1250),
(19, 'CBM', 3, 55, 165),
(19, 'E', 6, 250, 1500),
(19, 'ES', 3, 45, 135),
(19, 'FS-TK', 6, 35, 210),
(19, 'FS-TN', 7, 25, 175),
(19, 'FW', 5, 50, 250),
(20, 'CBM', 1, 55, 55),
(20, 'E', 4, 250, 1000),
(20, 'ES', 2, 45, 90),
(20, 'FS-TK', 4, 35, 140),
(20, 'FS-TN', 7, 25, 175),
(21, 'CBM', 3, 55, 165),
(21, 'E', 5, 250, 1250),
(21, 'ES', 4, 45, 180),
(22, 'CBM', 7, 55, 385),
(22, 'E', 4, 250, 1000),
(22, 'ES', 4, 45, 180),
(23, 'CBM', 2, 55, 110),
(23, 'E', 4, 250, 1000),
(23, 'ES', 7, 45, 315),
(24, 'CBM', 3, 55, 165),
(24, 'E', 7, 250, 1750),
(24, 'ES', 3, 45, 135),
(24, 'FS-TK', 6, 35, 210),
(25, 'CBM', 7, 55, 385),
(25, 'E', 6, 250, 1500),
(26, 'CBM', 1, 55, 55),
(27, 'CBM', 4, 55, 220),
(27, 'E', 4, 250, 1000),
(27, 'ES', 6, 45, 270),
(28, 'CBM', 2, 55, 110),
(28, 'E', 6, 250, 1500),
(28, 'ES', 5, 45, 225),
(28, 'FS-TK', 5, 35, 175),
(28, 'FS-TN', 3, 25, 75),
(29, 'CBM', 3, 55, 165),
(29, 'E', 3, 250, 750),
(30, 'CBM', 1, 55, 55),
(30, 'E', 1, 250, 250),
(30, 'ES', 3, 45, 135),
(30, 'FS-TK', 7, 35, 245),
(30, 'FS-TN', 5, 25, 125),
(31, 'CBM', 4, 55, 220),
(31, 'E', 3, 250, 750),
(32, 'CBM', 4, 55, 220),
(32, 'E', 2, 250, 500),
(32, 'ES', 1, 45, 45),
(32, 'FS-TK', 5, 35, 175),
(32, 'FS-TN', 3, 25, 75),
(32, 'FW', 5, 50, 250),
(33, 'CBM', 3, 55, 165),
(34, 'CBM', 3, 55, 165),
(34, 'E', 2, 250, 500),
(34, 'ES', 5, 45, 225),
(34, 'FS-TK', 4, 35, 140),
(34, 'FS-TN', 4, 25, 100),
(34, 'FW', 4, 50, 200),
(35, 'CBM', 4, 55, 220),
(36, 'CBM', 1, 55, 55),
(36, 'E', 6, 250, 1500),
(36, 'ES', 5, 45, 225),
(37, 'CBM', 4, 55, 220),
(37, 'E', 1, 250, 250),
(37, 'ES', 4, 45, 180),
(37, 'FS-TK', 4, 35, 140),
(38, 'CBM', 4, 55, 220),
(38, 'E', 3, 250, 750),
(38, 'ES', 1, 45, 45),
(39, 'CBM', 2, 55, 110),
(39, 'E', 6, 250, 1500),
(39, 'ES', 3, 45, 135),
(39, 'FS-TK', 7, 35, 245),
(39, 'FS-TN', 6, 25, 150),
(40, 'CBM', 3, 55, 165),
(40, 'E', 6, 250, 1500),
(40, 'ES', 1, 45, 45),
(40, 'FS-TK', 3, 35, 105),
(40, 'FS-TN', 2, 25, 50),
(40, 'FW', 7, 50, 350),
(41, 'CBM', 6, 55, 330),
(41, 'E', 4, 250, 1000),
(41, 'ES', 5, 45, 225),
(41, 'FS-TK', 4, 35, 140),
(42, 'CBM', 4, 55, 220),
(42, 'E', 7, 250, 1750),
(42, 'ES', 1, 45, 45),
(42, 'FS-TK', 2, 35, 70),
(43, 'CBM', 4, 55, 220),
(43, 'E', 7, 250, 1750),
(44, 'CBM', 6, 55, 330),
(44, 'E', 4, 250, 1000),
(44, 'ES', 3, 45, 135),
(44, 'FS-TK', 4, 35, 140),
(45, 'CBM', 6, 55, 330),
(45, 'E', 2, 250, 500),
(45, 'ES', 2, 45, 90),
(45, 'FS-TK', 7, 35, 245),
(45, 'FS-TN', 4, 25, 100),
(45, 'FW', 3, 50, 150),
(46, 'CBM', 3, 55, 165),
(46, 'E', 7, 250, 1750),
(46, 'ES', 7, 45, 315),
(46, 'FS-TK', 6, 35, 210),
(46, 'FS-TN', 3, 25, 75),
(46, 'FW', 2, 50, 100),
(47, 'CBM', 4, 55, 220),
(47, 'E', 3, 250, 750),
(47, 'ES', 6, 45, 270),
(47, 'FS-TK', 7, 35, 245),
(47, 'FS-TN', 6, 25, 150),
(47, 'FW', 4, 50, 200),
(48, 'CBM', 7, 55, 385),
(48, 'E', 6, 250, 1500),
(48, 'ES', 2, 45, 90),
(48, 'FS-TK', 1, 35, 35),
(48, 'FS-TN', 3, 25, 75),
(49, 'CBM', 7, 55, 385),
(49, 'E', 7, 250, 1750),
(49, 'ES', 1, 45, 45),
(49, 'FS-TK', 5, 35, 175),
(50, 'CBM', 3, 55, 165),
(50, 'E', 3, 250, 750),
(50, 'ES', 5, 45, 225),
(50, 'FS-TK', 6, 35, 210),
(50, 'FS-TN', 2, 25, 50),
(51, 'CBM', 7, 55, 385),
(51, 'E', 6, 250, 1500),
(51, 'ES', 2, 45, 90),
(51, 'FS-TK', 1, 35, 35),
(51, 'FS-TN', 6, 25, 150),
(51, 'FW', 6, 50, 300),
(52, 'CBM', 3, 55, 165),
(52, 'E', 7, 250, 1750),
(52, 'ES', 4, 45, 180),
(52, 'FS-TK', 5, 35, 175),
(52, 'FS-TN', 2, 25, 50),
(53, 'CBM', 4, 55, 220),
(53, 'E', 6, 250, 1500),
(53, 'ES', 1, 45, 45),
(53, 'FS-TK', 4, 35, 140),
(53, 'FS-TN', 1, 25, 25),
(53, 'FW', 2, 50, 100),
(54, 'CBM', 2, 55, 110),
(54, 'E', 2, 250, 500),
(54, 'ES', 2, 45, 90),
(55, 'CBM', 5, 55, 275),
(55, 'E', 6, 250, 1500),
(55, 'ES', 2, 45, 90),
(55, 'FS-TK', 5, 35, 175),
(55, 'FS-TN', 1, 25, 25),
(55, 'FW', 7, 50, 350),
(56, 'CBM', 2, 55, 110),
(56, 'E', 3, 250, 750),
(57, 'CBM', 4, 55, 220),
(57, 'E', 4, 250, 1000),
(57, 'ES', 4, 45, 180),
(57, 'FS-TK', 5, 35, 175),
(57, 'FS-TN', 4, 25, 100),
(57, 'FW', 7, 50, 350),
(58, 'CBM', 3, 55, 165),
(58, 'E', 1, 250, 250),
(58, 'ES', 3, 45, 135),
(58, 'FS-TK', 4, 35, 140),
(58, 'FS-TN', 4, 25, 100),
(59, 'CBM', 3, 55, 165),
(60, 'CBM', 5, 55, 275),
(60, 'E', 7, 250, 1750),
(60, 'ES', 7, 45, 315),
(60, 'FS-TK', 3, 35, 105),
(60, 'FS-TN', 7, 25, 175),
(61, 'CBM', 5, 55, 275),
(61, 'E', 4, 250, 1000),
(61, 'ES', 1, 45, 45),
(61, 'FS-TK', 4, 35, 140),
(61, 'FS-TN', 6, 25, 150),
(61, 'FW', 3, 50, 150),
(62, 'CBM', 6, 55, 330),
(62, 'E', 3, 250, 750),
(62, 'ES', 2, 45, 90),
(62, 'FS-TK', 1, 35, 35),
(62, 'FS-TN', 7, 25, 175),
(62, 'FW', 2, 50, 100),
(63, 'CBM', 5, 55, 275),
(63, 'E', 1, 250, 250),
(63, 'ES', 4, 45, 180),
(64, 'CBM', 2, 55, 110),
(64, 'E', 3, 250, 750),
(64, 'ES', 2, 45, 90),
(65, 'CBM', 4, 55, 220),
(65, 'E', 1, 250, 250),
(65, 'ES', 7, 45, 315),
(65, 'FS-TK', 6, 35, 210),
(65, 'FS-TN', 7, 25, 175),
(65, 'FW', 6, 50, 300),
(66, 'CBM', 2, 55, 110),
(66, 'E', 3, 250, 750),
(66, 'ES', 1, 45, 45),
(66, 'FS-TK', 7, 35, 245),
(66, 'FS-TN', 3, 25, 75),
(66, 'FW', 7, 50, 350),
(67, 'CBM', 3, 55, 165),
(68, 'CBM', 6, 55, 330),
(68, 'E', 6, 250, 1500),
(68, 'ES', 5, 45, 225),
(68, 'FS-TK', 3, 35, 105),
(68, 'FS-TN', 4, 25, 100),
(69, 'CBM', 4, 55, 220),
(69, 'E', 5, 250, 1250),
(69, 'ES', 4, 45, 180),
(70, 'CBM', 4, 55, 220),
(70, 'E', 1, 250, 250),
(70, 'ES', 4, 45, 180),
(71, 'CBM', 2, 55, 110),
(71, 'E', 7, 250, 1750),
(71, 'ES', 6, 45, 270),
(71, 'FS-TK', 3, 35, 105),
(72, 'CBM', 3, 55, 165),
(72, 'E', 2, 250, 500),
(73, 'CBM', 4, 55, 220),
(73, 'E', 5, 250, 1250),
(74, 'CBM', 3, 55, 165),
(74, 'E', 1, 250, 250),
(74, 'ES', 6, 45, 270),
(74, 'FS-TK', 1, 35, 35),
(75, 'CBM', 5, 55, 275),
(75, 'E', 4, 250, 1000),
(75, 'ES', 4, 45, 180),
(75, 'FS-TK', 5, 35, 175),
(76, 'CBM', 7, 55, 385),
(76, 'E', 5, 250, 1250),
(76, 'ES', 1, 45, 45),
(77, 'CBM', 4, 55, 220),
(77, 'E', 6, 250, 1500),
(77, 'ES', 4, 45, 180),
(77, 'FS-TK', 6, 35, 210),
(78, 'CBM', 1, 55, 55),
(78, 'E', 6, 250, 1500),
(78, 'ES', 7, 45, 315),
(79, 'CBM', 3, 55, 165),
(79, 'E', 2, 250, 500),
(79, 'ES', 4, 45, 180),
(79, 'FS-TK', 3, 35, 105),
(79, 'FS-TN', 1, 25, 25),
(80, 'CBM', 1, 55, 55),
(80, 'E', 1, 250, 250),
(80, 'ES', 2, 45, 90),
(80, 'FS-TK', 3, 35, 105),
(81, 'CBM', 3, 55, 165),
(81, 'E', 7, 250, 1750),
(81, 'ES', 6, 45, 270),
(82, 'CBM', 3, 55, 165),
(82, 'E', 3, 250, 750),
(82, 'ES', 2, 45, 90),
(83, 'CBM', 1, 55, 55),
(84, 'CBM', 1, 55, 55),
(84, 'E', 5, 250, 1250),
(84, 'ES', 6, 45, 270),
(84, 'FS-TK', 7, 35, 245),
(85, 'CBM', 7, 55, 385),
(85, 'E', 6, 250, 1500),
(85, 'ES', 1, 45, 45),
(86, 'CBM', 5, 55, 275),
(87, 'CBM', 2, 55, 110),
(87, 'E', 2, 250, 500),
(87, 'ES', 4, 45, 180),
(87, 'FS-TK', 7, 35, 245),
(87, 'FS-TN', 6, 25, 150),
(88, 'CBM', 6, 55, 330),
(88, 'E', 4, 250, 1000),
(88, 'ES', 4, 45, 180),
(88, 'FS-TK', 2, 35, 70),
(89, 'CBM', 7, 55, 385),
(89, 'E', 3, 250, 750),
(90, 'CBM', 3, 55, 165),
(91, 'CBM', 7, 55, 385),
(91, 'E', 7, 250, 1750),
(91, 'ES', 3, 45, 135),
(91, 'FS-TK', 7, 35, 245),
(91, 'FS-TN', 3, 25, 75),
(92, 'CBM', 4, 55, 220),
(92, 'E', 2, 250, 500),
(92, 'ES', 6, 45, 270),
(92, 'FS-TK', 6, 35, 210),
(92, 'FS-TN', 3, 25, 75),
(92, 'FW', 1, 50, 50),
(93, 'CBM', 5, 55, 275),
(93, 'E', 1, 250, 250),
(93, 'ES', 3, 45, 135),
(94, 'CBM', 2, 55, 110),
(94, 'E', 2, 250, 500),
(94, 'ES', 7, 45, 315),
(94, 'FS-TK', 4, 35, 140),
(95, 'CBM', 1, 55, 55),
(95, 'E', 5, 250, 1250),
(95, 'ES', 4, 45, 180),
(96, 'CBM', 7, 55, 385),
(96, 'E', 4, 250, 1000),
(97, 'CBM', 1, 55, 55),
(98, 'CBM', 2, 55, 110),
(98, 'E', 6, 250, 1500),
(98, 'ES', 7, 45, 315),
(98, 'FS-TK', 1, 35, 35),
(99, 'CBM', 5, 55, 275),
(99, 'E', 4, 250, 1000),
(99, 'ES', 2, 45, 90),
(99, 'FS-TK', 6, 35, 210),
(99, 'FS-TN', 3, 25, 75),
(100, 'CBM', 3, 55, 165),
(100, 'E', 3, 250, 750),
(100, 'ES', 5, 45, 225),
(102, 'C', 2, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoicepayment`
--

CREATE TABLE IF NOT EXISTS `tblinvoicepayment` (
  `PaymentID` int(11) NOT NULL,
  `InvoiceID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `datecreated` date NOT NULL,
  `timecreated` datetime NOT NULL,
  `PaymentMethod` varchar(60) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=252 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoicepayment`
--

INSERT INTO `tblinvoicepayment` (`PaymentID`, `InvoiceID`, `DentistID`, `datecreated`, `timecreated`, `PaymentMethod`, `Amount`) VALUES
(1, 1, 10, '2016-11-11', '2016-11-11 15:04:20', 'New', 0),
(2, 1, 10, '2016-11-28', '2016-11-28 19:25:00', 'Full', 665),
(3, 2, 13, '2016-11-21', '2016-11-21 17:55:59', 'New', 0),
(4, 2, 13, '2016-11-22', '2016-11-22 09:21:00', 'Partial', 622.5),
(5, 2, 13, '2016-12-17', '2016-12-17 16:14:00', 'Partial', 622.5),
(6, 3, 20, '2016-11-11', '2016-11-11 18:10:07', 'New', 0),
(7, 3, 20, '2016-12-01', '2016-12-01 11:29:00', 'Full', 1805),
(8, 4, 18, '2016-11-18', '2016-11-18 14:33:53', 'New', 0),
(9, 4, 18, '2016-11-19', '2016-11-19 17:13:00', 'Partial', 630),
(10, 4, 18, '2016-12-06', '2016-12-06 15:58:00', 'Partial', 630),
(11, 5, 29, '2016-11-04', '2016-11-04 18:55:36', 'New', 0),
(12, 5, 29, '2016-11-05', '2016-11-05 09:01:00', 'Partial', 535),
(13, 5, 29, '2016-11-23', '2016-11-23 13:03:00', 'Partial', 535),
(14, 6, 21, '2016-11-21', '2016-11-21 08:03:20', 'New', 0),
(15, 6, 21, '2016-11-22', '2016-11-22 14:01:00', 'Partial', 82.5),
(16, 6, 21, '2016-12-15', '2016-12-15 13:53:00', 'Partial', 82.5),
(17, 7, 8, '2016-11-13', '2016-11-13 20:35:24', 'New', 0),
(18, 7, 8, '2016-11-14', '2016-11-14 08:59:00', 'Partial', 537.5),
(19, 7, 8, '2016-12-03', '2016-12-03 15:18:00', 'Partial', 537.5),
(20, 8, 11, '2016-11-06', '2016-11-06 09:14:07', 'New', 0),
(21, 8, 11, '2016-11-24', '2016-11-24 17:36:00', 'Full', 1385),
(22, 9, 26, '2016-11-26', '2016-11-26 08:38:47', 'New', 0),
(23, 9, 26, '2016-12-16', '2016-12-16 15:36:00', 'Full', 880),
(24, 10, 27, '2016-11-03', '2016-11-03 19:00:23', 'New', 0),
(25, 10, 27, '2016-11-04', '2016-11-04 12:27:00', 'Partial', 790),
(26, 10, 27, '2016-11-21', '2016-11-21 08:39:00', 'Partial', 790),
(27, 11, 9, '2016-11-10', '2016-11-10 17:54:42', 'New', 0),
(28, 11, 9, '2016-12-06', '2016-12-06 14:19:00', 'Full', 2130),
(29, 12, 15, '2016-11-14', '2016-11-14 10:12:43', 'New', 0),
(30, 12, 15, '2016-12-11', '2016-12-11 15:41:00', 'Full', 2120),
(31, 13, 30, '2016-11-17', '2016-11-17 11:20:32', 'New', 0),
(32, 13, 30, '2016-12-10', '2016-12-10 20:37:00', 'Full', 830),
(33, 14, 19, '2016-11-20', '2016-11-20 17:06:59', 'New', 0),
(34, 14, 19, '2016-11-21', '2016-11-21 13:49:00', 'Partial', 430),
(35, 14, 19, '2016-12-18', '2016-12-18 16:29:00', 'Partial', 430),
(36, 15, 18, '2016-11-01', '2016-11-01 17:46:00', 'New', 0),
(37, 15, 18, '2016-11-02', '2016-11-02 16:24:00', 'Partial', 1257.5),
(38, 15, 18, '2016-11-16', '2016-11-16 10:49:00', 'Partial', 1257.5),
(39, 16, 24, '2016-11-02', '2016-11-02 14:35:30', 'New', 0),
(40, 16, 24, '2016-11-03', '2016-11-03 20:59:00', 'Partial', 387.5),
(41, 16, 24, '2016-11-27', '2016-11-27 10:18:00', 'Partial', 387.5),
(42, 17, 25, '2016-11-20', '2016-11-20 16:30:26', 'New', 0),
(43, 17, 25, '2016-12-06', '2016-12-06 10:00:00', 'Full', 990),
(44, 18, 9, '2016-11-10', '2016-11-10 09:08:18', 'New', 0),
(45, 18, 9, '2016-11-25', '2016-11-25 20:51:00', 'Full', 1415),
(46, 19, 19, '2016-11-15', '2016-11-15 20:39:33', 'New', 0),
(47, 19, 19, '2016-11-16', '2016-11-16 19:22:00', 'Partial', 1217.5),
(48, 19, 19, '2016-12-12', '2016-12-12 09:52:00', 'Partial', 1217.5),
(49, 20, 23, '2016-11-21', '2016-11-21 08:56:43', 'New', 0),
(50, 20, 23, '2016-11-22', '2016-11-22 19:30:00', 'Partial', 730),
(51, 20, 23, '2016-12-14', '2016-12-14 08:35:00', 'Partial', 730),
(52, 21, 26, '2016-11-06', '2016-11-06 16:48:55', 'New', 0),
(53, 21, 26, '2016-12-03', '2016-12-03 11:12:00', 'Full', 1595),
(54, 22, 19, '2016-11-13', '2016-11-13 18:55:52', 'New', 0),
(55, 22, 19, '2016-11-14', '2016-11-14 10:12:00', 'Partial', 782.5),
(56, 22, 19, '2016-12-07', '2016-12-07 17:03:00', 'Partial', 782.5),
(57, 23, 27, '2016-11-17', '2016-11-17 10:13:13', 'New', 0),
(58, 23, 27, '2016-11-18', '2016-11-18 10:29:00', 'Partial', 712.5),
(59, 23, 27, '2016-12-13', '2016-12-13 10:38:00', 'Partial', 712.5),
(60, 24, 16, '2016-11-05', '2016-11-05 13:38:21', 'New', 0),
(61, 24, 16, '2016-11-06', '2016-11-06 11:57:00', 'Partial', 1130),
(62, 24, 16, '2016-12-04', '2016-12-04 08:50:00', 'Partial', 1130),
(63, 25, 9, '2016-11-15', '2016-11-15 15:18:45', 'New', 0),
(64, 25, 9, '2016-11-16', '2016-11-16 13:08:00', 'Partial', 942.5),
(65, 25, 9, '2016-12-05', '2016-12-05 15:58:00', 'Partial', 942.5),
(66, 26, 26, '2016-11-29', '2016-11-29 09:04:20', 'New', 0),
(67, 26, 26, '2016-11-30', '2016-11-30 18:31:00', 'Partial', 27.5),
(68, 26, 26, '2016-12-20', '2016-12-20 08:07:00', 'Partial', 27.5),
(69, 27, 16, '2016-11-19', '2016-11-19 14:56:59', 'New', 0),
(70, 27, 16, '2016-12-13', '2016-12-13 16:14:00', 'Full', 1490),
(71, 28, 26, '2016-11-10', '2016-11-10 13:42:13', 'New', 0),
(72, 28, 26, '2016-11-11', '2016-11-11 09:41:00', 'Partial', 1042.5),
(73, 28, 26, '2016-12-07', '2016-12-07 09:36:00', 'Partial', 1042.5),
(74, 29, 10, '2016-11-23', '2016-11-23 11:22:10', 'New', 0),
(75, 29, 10, '2016-12-16', '2016-12-16 18:56:00', 'Full', 915),
(76, 30, 9, '2016-11-25', '2016-11-25 20:36:19', 'New', 0),
(77, 30, 9, '2016-11-26', '2016-11-26 19:16:00', 'Partial', 405),
(78, 30, 9, '2016-12-13', '2016-12-13 12:57:00', 'Partial', 405),
(79, 31, 11, '2016-11-02', '2016-11-02 12:05:45', 'New', 0),
(80, 31, 11, '2016-11-17', '2016-11-17 14:37:00', 'Full', 970),
(81, 32, 28, '2016-11-09', '2016-11-09 10:20:20', 'New', 0),
(82, 32, 28, '2016-12-09', '2016-12-09 15:14:00', 'Full', 1265),
(83, 33, 21, '2016-11-21', '2016-11-21 10:59:47', 'New', 0),
(84, 33, 21, '2016-11-22', '2016-11-22 19:28:00', 'Partial', 82.5),
(85, 33, 21, '2016-12-14', '2016-12-14 12:39:00', 'Partial', 82.5),
(86, 34, 25, '2016-11-07', '2016-11-07 13:38:17', 'New', 0),
(87, 34, 25, '2016-11-26', '2016-11-26 18:02:00', 'Full', 1330),
(88, 35, 28, '2016-11-16', '2016-11-16 08:26:00', 'New', 0),
(89, 35, 28, '2016-11-17', '2016-11-17 15:56:00', 'Partial', 110),
(90, 35, 28, '2016-12-05', '2016-12-05 18:48:00', 'Partial', 110),
(91, 36, 23, '2016-11-19', '2016-11-19 09:07:32', 'New', 0),
(92, 36, 23, '2016-12-05', '2016-12-05 13:50:00', 'Full', 1780),
(93, 37, 24, '2016-11-21', '2016-11-21 17:51:15', 'New', 0),
(94, 37, 24, '2016-12-07', '2016-12-07 11:55:00', 'Full', 790),
(95, 38, 24, '2016-11-01', '2016-11-01 15:19:53', 'New', 0),
(96, 38, 24, '2016-11-20', '2016-11-20 12:54:00', 'Full', 1015),
(97, 39, 19, '2016-11-24', '2016-11-24 10:50:41', 'New', 0),
(98, 39, 19, '2016-11-25', '2016-11-25 10:49:00', 'Partial', 1070),
(99, 39, 19, '2016-12-18', '2016-12-18 09:01:00', 'Partial', 1070),
(100, 40, 9, '2016-11-14', '2016-11-14 20:22:29', 'New', 0),
(101, 40, 9, '2016-11-15', '2016-11-15 16:51:00', 'Partial', 1107.5),
(102, 40, 9, '2016-12-03', '2016-12-03 16:43:00', 'Partial', 1107.5),
(103, 41, 26, '2016-11-09', '2016-11-09 19:10:18', 'New', 0),
(104, 41, 26, '2016-12-07', '2016-12-07 12:50:00', 'Full', 1695),
(105, 42, 20, '2016-11-08', '2016-11-08 17:31:27', 'New', 0),
(106, 42, 20, '2016-12-04', '2016-12-04 15:47:00', 'Full', 2085),
(107, 43, 11, '2016-11-27', '2016-11-27 10:42:01', 'New', 0),
(108, 43, 11, '2016-12-23', '2016-12-23 09:44:00', 'Full', 1970),
(109, 44, 19, '2016-11-18', '2016-11-18 11:27:10', 'New', 0),
(110, 44, 19, '2016-12-03', '2016-12-03 19:45:00', 'Full', 1605),
(111, 45, 30, '2016-11-17', '2016-11-17 18:50:47', 'New', 0),
(112, 45, 30, '2016-12-13', '2016-12-13 20:38:00', 'Full', 1415),
(113, 46, 17, '2016-11-21', '2016-11-21 17:07:20', 'New', 0),
(114, 46, 17, '2016-11-22', '2016-11-22 20:44:00', 'Partial', 1307.5),
(115, 46, 17, '2016-12-19', '2016-12-19 13:03:00', 'Partial', 1307.5),
(116, 47, 12, '2016-11-06', '2016-11-06 18:16:35', 'New', 0),
(117, 47, 12, '2016-11-07', '2016-11-07 08:20:00', 'Partial', 917.5),
(118, 47, 12, '2016-12-04', '2016-12-04 20:46:00', 'Partial', 917.5),
(119, 48, 8, '2016-11-20', '2016-11-20 20:39:18', 'New', 0),
(120, 48, 8, '2016-11-21', '2016-11-21 16:54:00', 'Partial', 1042.5),
(121, 48, 8, '2016-12-09', '2016-12-09 17:40:00', 'Partial', 1042.5),
(122, 49, 10, '2016-11-11', '2016-11-11 09:25:06', 'New', 0),
(123, 49, 10, '2016-11-12', '2016-11-12 08:22:00', 'Partial', 1177.5),
(124, 49, 10, '2016-11-27', '2016-11-27 20:57:00', 'Partial', 1177.5),
(125, 50, 13, '2016-11-03', '2016-11-03 18:37:50', 'New', 0),
(126, 50, 13, '2016-12-02', '2016-12-02 13:53:00', 'Full', 1400),
(127, 51, 23, '2016-11-16', '2016-11-16 11:55:09', 'New', 0),
(128, 51, 23, '2016-12-12', '2016-12-12 12:01:00', 'Full', 2460),
(129, 52, 16, '2016-11-10', '2016-11-10 14:34:13', 'New', 0),
(130, 52, 16, '2016-11-11', '2016-11-11 15:10:00', 'Partial', 1160),
(131, 52, 16, '2016-11-28', '2016-11-28 11:58:00', 'Partial', 1160),
(132, 53, 23, '2016-11-20', '2016-11-20 16:05:05', 'New', 0),
(133, 53, 23, '2016-12-12', '2016-12-12 18:03:00', 'Full', 2030),
(134, 54, 22, '2016-11-18', '2016-11-18 19:47:49', 'New', 0),
(135, 54, 22, '2016-11-19', '2016-11-19 14:31:00', 'Partial', 350),
(136, 54, 22, '2016-12-09', '2016-12-09 18:54:00', 'Partial', 350),
(137, 55, 22, '2016-11-23', '2016-11-23 17:34:53', 'New', 0),
(138, 55, 22, '2016-12-21', '2016-12-21 16:05:00', 'Full', 2415),
(139, 56, 19, '2016-11-06', '2016-11-06 17:22:41', 'New', 0),
(140, 56, 19, '2016-11-07', '2016-11-07 12:25:00', 'Partial', 430),
(141, 56, 19, '2016-12-05', '2016-12-05 18:16:00', 'Partial', 430),
(142, 57, 20, '2016-11-23', '2016-11-23 13:34:05', 'New', 0),
(143, 57, 20, '2016-11-24', '2016-11-24 17:22:00', 'Partial', 1012.5),
(144, 57, 20, '2016-12-15', '2016-12-15 14:16:00', 'Partial', 1012.5),
(145, 58, 24, '2016-11-17', '2016-11-17 10:39:10', 'New', 0),
(146, 58, 24, '2016-11-18', '2016-11-18 09:48:00', 'Partial', 395),
(147, 58, 24, '2016-12-12', '2016-12-12 18:19:00', 'Partial', 395),
(148, 59, 17, '2016-11-10', '2016-11-10 19:27:03', 'New', 0),
(149, 59, 17, '2016-11-11', '2016-11-11 16:33:00', 'Partial', 82.5),
(150, 59, 17, '2016-11-30', '2016-11-30 08:59:00', 'Partial', 82.5),
(151, 60, 19, '2016-11-08', '2016-11-08 10:16:13', 'New', 0),
(152, 60, 19, '2016-11-09', '2016-11-09 12:39:00', 'Partial', 1310),
(153, 60, 19, '2016-11-28', '2016-11-28 08:34:00', 'Partial', 1310),
(154, 61, 13, '2016-11-30', '2016-11-30 20:49:49', 'New', 0),
(155, 61, 13, '2016-12-25', '2016-12-25 11:17:00', 'Full', 1760),
(156, 62, 21, '2016-11-29', '2016-11-29 20:58:07', 'New', 0),
(157, 62, 21, '2016-11-30', '2016-11-30 09:48:00', 'Partial', 740),
(158, 62, 21, '2016-12-24', '2016-12-24 15:48:00', 'Partial', 740),
(159, 63, 26, '2016-11-21', '2016-11-21 16:07:16', 'New', 0),
(160, 63, 26, '2016-12-12', '2016-12-12 10:22:00', 'Full', 705),
(161, 64, 11, '2016-11-18', '2016-11-18 13:24:48', 'New', 0),
(162, 64, 11, '2016-12-08', '2016-12-08 13:00:00', 'Full', 950),
(163, 65, 13, '2016-11-10', '2016-11-10 11:22:11', 'New', 0),
(164, 65, 13, '2016-11-28', '2016-11-28 18:00:00', 'Full', 1470),
(165, 66, 18, '2016-11-26', '2016-11-26 19:34:04', 'New', 0),
(166, 66, 18, '2016-12-17', '2016-12-17 08:10:00', 'Full', 1575),
(167, 67, 17, '2016-11-15', '2016-11-15 15:09:31', 'New', 0),
(168, 67, 17, '2016-11-16', '2016-11-16 14:39:00', 'Partial', 82.5),
(169, 67, 17, '2016-12-11', '2016-12-11 09:41:00', 'Partial', 82.5),
(170, 68, 30, '2016-11-02', '2016-11-02 17:42:39', 'New', 0),
(171, 68, 30, '2016-11-03', '2016-11-03 14:16:00', 'Partial', 1130),
(172, 68, 30, '2016-12-01', '2016-12-01 16:28:00', 'Partial', 1130),
(173, 69, 30, '2016-11-27', '2016-11-27 12:55:54', 'New', 0),
(174, 69, 30, '2016-12-18', '2016-12-18 11:45:00', 'Full', 1650),
(175, 70, 19, '2016-11-22', '2016-11-22 19:35:17', 'New', 0),
(176, 70, 19, '2016-11-23', '2016-11-23 10:27:00', 'Partial', 325),
(177, 70, 19, '2016-12-15', '2016-12-15 10:32:00', 'Partial', 325),
(178, 71, 30, '2016-11-27', '2016-11-27 09:23:22', 'New', 0),
(179, 71, 30, '2016-11-28', '2016-11-28 13:04:00', 'Partial', 1117.5),
(180, 71, 30, '2016-12-21', '2016-12-21 20:04:00', 'Partial', 1117.5),
(181, 72, 13, '2016-11-17', '2016-11-17 17:33:31', 'New', 0),
(182, 72, 13, '2016-12-13', '2016-12-13 18:22:00', 'Full', 665),
(183, 73, 29, '2016-11-05', '2016-11-05 09:48:46', 'New', 0),
(184, 73, 29, '2016-12-01', '2016-12-01 10:15:00', 'Full', 1470),
(185, 74, 20, '2016-11-29', '2016-11-29 17:44:19', 'New', 0),
(186, 74, 20, '2016-12-18', '2016-12-18 11:51:00', 'Full', 720),
(187, 75, 18, '2016-11-02', '2016-11-02 08:57:24', 'New', 0),
(188, 75, 18, '2016-11-03', '2016-11-03 10:09:00', 'Partial', 815),
(189, 75, 18, '2016-11-19', '2016-11-19 13:56:00', 'Partial', 815),
(190, 76, 8, '2016-11-19', '2016-11-19 12:01:12', 'New', 0),
(191, 76, 8, '2016-12-12', '2016-12-12 18:13:00', 'Full', 1680),
(192, 77, 24, '2016-11-23', '2016-11-23 09:06:08', 'New', 0),
(193, 77, 24, '2016-12-09', '2016-12-09 20:17:00', 'Full', 2110),
(194, 78, 24, '2016-11-14', '2016-11-14 12:56:28', 'New', 0),
(195, 78, 24, '2016-12-14', '2016-12-14 18:36:00', 'Full', 1870),
(196, 79, 13, '2016-11-27', '2016-11-27 15:59:18', 'New', 0),
(197, 79, 13, '2016-11-28', '2016-11-28 14:34:00', 'Partial', 487.5),
(198, 79, 13, '2016-12-24', '2016-12-24 18:28:00', 'Partial', 487.5),
(199, 80, 19, '2016-11-18', '2016-11-18 09:46:02', 'New', 0),
(200, 80, 19, '2016-11-19', '2016-11-19 14:30:00', 'Partial', 250),
(201, 80, 19, '2016-12-19', '2016-12-19 08:28:00', 'Partial', 250),
(202, 81, 8, '2016-11-17', '2016-11-17 18:23:54', 'New', 0),
(203, 81, 8, '2016-11-18', '2016-11-18 18:34:00', 'Partial', 1092.5),
(204, 81, 8, '2016-12-16', '2016-12-16 12:49:00', 'Partial', 1092.5),
(205, 82, 22, '2016-11-27', '2016-11-27 14:31:45', 'New', 0),
(206, 82, 22, '2016-12-13', '2016-12-13 17:02:00', 'Full', 1005),
(207, 83, 26, '2016-11-22', '2016-11-22 18:55:31', 'New', 0),
(208, 83, 26, '2016-11-23', '2016-11-23 12:30:00', 'Partial', 27.5),
(209, 83, 26, '2016-12-15', '2016-12-15 20:13:00', 'Partial', 27.5),
(210, 84, 27, '2016-11-29', '2016-11-29 12:44:49', 'New', 0),
(211, 84, 27, '2016-12-23', '2016-12-23 11:10:00', 'Full', 1820),
(212, 85, 26, '2016-11-18', '2016-11-18 20:08:27', 'New', 0),
(213, 85, 26, '2016-12-19', '2016-12-19 20:10:00', 'Full', 1930),
(214, 86, 12, '2016-11-10', '2016-11-10 14:40:16', 'New', 0),
(215, 86, 12, '2016-11-11', '2016-11-11 08:16:00', 'Partial', 137.5),
(216, 86, 12, '2016-11-27', '2016-11-27 16:20:00', 'Partial', 137.5),
(217, 87, 15, '2016-11-07', '2016-11-07 09:28:52', 'New', 0),
(218, 87, 15, '2016-11-28', '2016-11-28 10:40:00', 'Full', 1185),
(219, 88, 8, '2016-11-12', '2016-11-12 17:26:11', 'New', 0),
(220, 88, 8, '2016-11-13', '2016-11-13 18:39:00', 'Partial', 790),
(221, 88, 8, '2016-12-06', '2016-12-06 12:35:00', 'Partial', 790),
(222, 89, 22, '2016-11-01', '2016-11-01 17:47:07', 'New', 0),
(223, 89, 22, '2016-11-21', '2016-11-21 14:00:00', 'Full', 1135),
(224, 90, 23, '2016-11-30', '2016-11-30 13:40:03', 'New', 0),
(225, 90, 23, '2016-12-08', '2016-12-08 09:30:00', 'Partial', 82.5),
(226, 90, 23, '2016-12-24', '2016-12-24 20:42:00', 'Partial', 82.5),
(227, 91, 10, '2016-11-23', '2016-11-23 11:55:54', 'New', 0),
(228, 91, 10, '2016-12-09', '2016-12-09 12:31:00', 'Full', 2590),
(229, 92, 23, '2016-11-30', '2016-11-30 19:59:02', 'New', 0),
(230, 92, 23, '2016-12-28', '2016-12-28 17:42:00', 'Full', 1325),
(231, 93, 24, '2016-11-21', '2016-11-21 20:37:13', 'New', 0),
(232, 93, 24, '2016-12-08', '2016-12-08 18:07:00', 'Full', 660),
(233, 94, 24, '2016-11-09', '2016-11-09 16:14:12', 'New', 0),
(234, 94, 24, '2016-12-07', '2016-12-07 09:55:00', 'Full', 1065),
(235, 95, 15, '2016-11-29', '2016-11-29 16:54:00', 'New', 0),
(236, 95, 15, '2016-11-30', '2016-11-30 08:40:00', 'Partial', 742.5),
(237, 95, 15, '2016-12-19', '2016-12-19 16:36:00', 'Partial', 742.5),
(238, 96, 27, '2016-11-22', '2016-11-22 08:53:55', 'New', 0),
(239, 96, 27, '2016-12-13', '2016-12-13 15:04:00', 'Full', 1385),
(240, 97, 27, '2016-11-11', '2016-11-11 16:28:07', 'New', 0),
(241, 97, 27, '2016-11-12', '2016-11-12 17:15:00', 'Partial', 27.5),
(242, 97, 27, '2016-12-10', '2016-12-10 18:09:00', 'Partial', 27.5),
(243, 98, 24, '2016-11-22', '2016-11-22 19:58:39', 'New', 0),
(244, 98, 24, '2016-11-23', '2016-11-23 09:48:00', 'Partial', 980),
(245, 98, 24, '2016-12-22', '2016-12-22 16:14:00', 'Partial', 980),
(246, 99, 12, '2016-11-13', '2016-11-13 13:27:14', 'New', 0),
(247, 99, 12, '2016-11-14', '2016-11-14 19:07:00', 'Partial', 825),
(248, 99, 12, '2016-12-12', '2016-12-12 12:38:00', 'Partial', 825),
(249, 100, 28, '2016-11-07', '2016-11-07 19:00:34', 'New', 0),
(250, 100, 28, '2016-12-08', '2016-12-08 13:38:00', 'Full', 1140),
(251, 102, 31, '2017-01-18', '2017-01-18 01:20:44', 'New', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblitem`
--

CREATE TABLE IF NOT EXISTS `tblitem` (
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
('CBM', 5, 'Carburandum', 55, 60, -13, 30, 30),
('E', 1, 'Expander', 250, 50, 9, 23, 25),
('ES', 5, 'Expansion Screw', 45, 65, -29, 30, 35),
('FS-TK', 3, 'Flat Stone (Thick)', 35, 75, -20, 25, 50),
('FS-TN', 3, 'Flat Stone (Thin)', 25, 50, -9, 25, 25),
('FW', 4, 'Felt Wheel', 50, 50, -3, 25, 25),
('H', 5, 'Hexagel', 200, 33, 15, 18, 15),
('IP', 3, 'Ivocap Powder', 180, 40, 0, 27, 18),
('ISG', 3, 'Inverted Stone Green', 300, 60, 0, 33, 30),
('ISR', 3, 'Inverted Stone Red', 400, 40, 0, 23, 20),
('M', 1, 'Mandrel', 50, 60, 50, 35, 25),
('PRB', 3, 'Pointed Rubber (Black)', 60, 60, 0, 30, 30),
('PRG', 3, 'Pointed Rubber (Green)', 60, 60, 0, 30, 30),
('PSG', 3, 'Pointed Stone (Green)', 90, 70, 0, 35, 35),
('PSRB', 3, 'Pointed Stone Red (Big)', 90, 70, 0, 35, 35),
('PSRS', 3, 'Pointed Stone Red (Small)', 80, 70, 0, 35, 35),
('PW', 3, 'Pink Wax', 90, 75, 0, 30, 35),
('RW', 1, 'Rug Wheel', 85, 150, 110, 40, 110),
('RWB', 3, 'Rubber Wheel (Black)', 90, 50, 0, 25, 25),
('RWG', 3, 'Rubber Wheel (Green)', 90, 50, 0, 25, 25),
('SD', 3, 'Separating Disc', 75, 80, 0, 40, 40),
('SPD', 4, 'Speedy', 30, 75, 0, 20, 55),
('SW11/2', 3, 'Sprue Wax 1 1/2', 90, 100, 0, 50, 50),
('SW8L', 3, 'Sprue Wax 8L', 150, 100, 0, 25, 75),
('SW8R', 3, 'Sprue Wax 8R', 75, 90, 0, 30, 60),
('UT', 2, 'Ultra Thin', 140, 35, 17, 23, 17),
('WB', 1, 'Wheel Brush', 85, 75, 70, 35, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tblpo`
--

CREATE TABLE IF NOT EXISTS `tblpo` (
  `POID` int(11) NOT NULL,
  `SupplierID` int(11) NOT NULL,
  `POStatusID` int(11) NOT NULL DEFAULT '1',
  `orderdatetime` datetime NOT NULL,
  `shipdate` varchar(15) NOT NULL,
  `receivedate` varchar(50) DEFAULT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpo`
--

INSERT INTO `tblpo` (`POID`, `SupplierID`, `POStatusID`, `orderdatetime`, `shipdate`, `receivedate`, `Total`) VALUES
(1, 1, 3, '2016-09-29 17:54:11', '2015-06-10', NULL, 4850),
(2, 2, 3, '2016-09-29 17:55:26', '2016-03-02', NULL, 0),
(3, 5, 3, '2016-10-17 12:50:06', '2016-10-18', NULL, 6325);

-- --------------------------------------------------------

--
-- Table structure for table `tblpoitem`
--

CREATE TABLE IF NOT EXISTS `tblpoitem` (
  `POID` int(11) NOT NULL,
  `ItemID` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Amount` float NOT NULL,
  `SubTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpoitem`
--

INSERT INTO `tblpoitem` (`POID`, `ItemID`, `QTY`, `Amount`, `SubTotal`) VALUES
(2, 'UT', 17, 0, 0),
(1, 'E', 50, 7, 350),
(1, 'M', 50, 4, 200),
(1, 'RW', 110, 20, 2200),
(1, 'WB', 70, 30, 2100),
(3, 'C', 125, 36, 4500),
(3, 'CBM', 30, 20, 600),
(3, 'ES', 35, 5, 175),
(3, 'H', 15, 70, 1050);

-- --------------------------------------------------------

--
-- Table structure for table `tblpostatus`
--

CREATE TABLE IF NOT EXISTS `tblpostatus` (
  `POStatusID` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpostatus`
--

INSERT INTO `tblpostatus` (`POStatusID`, `status`) VALUES
(1, 'Draft'),
(2, 'Approved'),
(3, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE IF NOT EXISTS `tblstatus` (
  `status_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tblsupplier` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`SupplierID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `fax`, `website`, `bstreet`, `bbrgy`, `bcity`, `notes`) VALUES
(1, 'Mr.', 'Vincent', '', 'Fajardo', 'Intercast Dental Corp', 'info@intercast-dental.net', '2526171', '', '2530124', 'http://www.intercast-dental.net', '4th Floor, Intercast Tower, 2230 Jose Abad Santos Avenue,  Manila1012 Philippines', 'Jose Abad Santos Avenue', 'Manila', ''),
(2, 'Mr.', 'Remedio', '', 'Ronie', 'Ace Dental Supply', 'acedentalsupply@gmail.com', '7336453', '', '', '', '668, F Torres Street, Sta. Cruz, Manila City, 1014, Metro Manila', 'Sta. Cruz', 'Manila', ''),
(5, 'Mrs.', 'Angelita', 'Quintos', 'Chua', 'Centro Dentista Dental Supply & General Merchandise', 'centrodental@gmail.com', '7334452', '', '', 'http://', '447 Evangelista Street, Quiapo, Manila, Metro Manila, Philippines ', 'Quiapo', 'Manila', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `UserID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `ps_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tblcase1`
--
ALTER TABLE `tblcase1`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tblinvoicepayment`
--
ALTER TABLE `tblinvoicepayment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `tblpo`
--
ALTER TABLE `tblpo`
  MODIFY `POID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblpostatus`
--
ALTER TABLE `tblpostatus`
  MODIFY `POStatusID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
