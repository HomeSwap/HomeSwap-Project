-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2018 at 08:57 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `apt_availability`
--

CREATE TABLE `apt_availability` (
  `dateID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `AptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apt_availability`
--

INSERT INTO `apt_availability` (`dateID`, `StartDate`, `EndDate`, `AptID`) VALUES
(90, '2018-08-12', '2018-08-17', 100),
(151, '2018-09-16', '2018-09-22', 102),
(153, '2018-09-16', '2018-09-22', 102),
(154, '2018-09-16', '2018-09-22', 103),
(156, '2018-09-17', '2018-09-21', 105),
(157, '2018-10-21', '2018-10-27', 105),
(158, '2018-09-23', '2018-09-25', 105),
(163, '2018-09-16', '2018-09-22', 101),
(164, '2018-09-16', '2018-09-22', 104),
(165, '2018-09-16', '2018-09-22', 101),
(166, '2018-09-16', '2018-09-22', 104),
(167, '2018-09-16', '2018-09-19', 101),
(168, '2018-09-16', '2018-09-19', 102),
(169, '2018-09-16', '2018-09-19', 101),
(170, '2018-09-16', '2018-09-19', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apt_availability`
--
ALTER TABLE `apt_availability`
  ADD PRIMARY KEY (`dateID`),
  ADD KEY `AptID` (`AptID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apt_availability`
--
ALTER TABLE `apt_availability`
  MODIFY `dateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apt_availability`
--
ALTER TABLE `apt_availability`
  ADD CONSTRAINT `apt_availability_ibfk_1` FOREIGN KEY (`AptID`) REFERENCES `apartments` (`AptID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
