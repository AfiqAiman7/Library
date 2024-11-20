-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` char(8) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_pass`) VALUES
('123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` char(10) NOT NULL,
  `Book_Title` varchar(35) NOT NULL,
  `No_Pages` int(5) NOT NULL,
  `Author_Name` varchar(35) NOT NULL,
  `ISBN` varchar(17) NOT NULL,
  `Staff_ID` char(10) DEFAULT NULL,
  `HD_ID` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Book_Title`, `No_Pages`, `Author_Name`, `ISBN`, `Staff_ID`, `HD_ID`) VALUES
('book01', 'Unknwon', 10, '', '1023771023', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `head_department`
--

CREATE TABLE `head_department` (
  `HD_ID` char(10) NOT NULL,
  `HD_Name` varchar(35) NOT NULL,
  `HD_PhoneNum` char(12) NOT NULL,
  `HD_Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_department`
--

INSERT INTO `head_department` (`HD_ID`, `HD_Name`, `HD_PhoneNum`, `HD_Email`) VALUES
('1234', 'HEAD DEPARTMENT', '0167122281', 'HeadDepartment@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` char(10) NOT NULL,
  `Member_Name` varchar(35) NOT NULL,
  `Member_Birth` date NOT NULL,
  `Member_Email` varchar(25) NOT NULL,
  `Member_PhoneNum` varchar(12) NOT NULL,
  `Member_Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `Member_Name`, `Member_Birth`, `Member_Email`, `Member_PhoneNum`, `Member_Address`) VALUES
('AAAA', 'A', '2022-06-28', 'A@Gmail.com', '019298885678', 'AA'),
('NIK191', '', '2022-06-09', '', '1231231231', '');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `Record_ID` char(10) NOT NULL,
  `Status` char(1) NOT NULL,
  `Record_Date` date NOT NULL,
  `Member_ID` char(10) NOT NULL,
  `Book_ID` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` char(10) NOT NULL,
  `Staff_Name` varchar(35) NOT NULL,
  `Staff_PhoneNum` char(12) NOT NULL,
  `Branch` varchar(35) NOT NULL,
  `HD_ID` char(10) DEFAULT NULL,
  `staff_pass` varchar(20) NOT NULL,
  `admin_ID` char(8) DEFAULT NULL,
  `UserType` text DEFAULT '\'Staff\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Staff_PhoneNum`, `Branch`, `HD_ID`, `staff_pass`, `admin_ID`, `UserType`) VALUES
('1234', 'ZAID', '01135648398', 'AIR_KUNING', NULL, '1234', NULL, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`),
  ADD KEY `Publisher_Name` (`Staff_ID`),
  ADD KEY `HD_ID` (`HD_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `head_department`
--
ALTER TABLE `head_department`
  ADD PRIMARY KEY (`HD_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`Record_ID`),
  ADD KEY `Member_ID` (`Member_ID`,`Book_ID`),
  ADD KEY `Book_ID` (`Book_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `HD_ID` (`HD_ID`),
  ADD KEY `admin_ID` (`admin_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`HD_ID`) REFERENCES `head_department` (`HD_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`Member_ID`) REFERENCES `member` (`Member_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `record_ibfk_2` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`admin_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`HD_ID`) REFERENCES `head_department` (`HD_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
