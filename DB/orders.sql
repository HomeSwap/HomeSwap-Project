-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2018 at 02:51 PM
-- Server version: 5.6.40
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shirba_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `status` enum('Approved','Waiting','Rejected','') COLLATE utf8_bin NOT NULL,
  `AptID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `RequesterID` int(11) NOT NULL,
  `RequesterAptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `StartDate`, `EndDate`, `status`, `AptID`, `userID`, `RequesterID`, `RequesterAptID`) VALUES
(35, '2018-08-05', '2018-08-11', 'Approved', 137, 998899889, 123456789, 133),
(36, '2018-08-12', '2018-08-18', 'Approved', 133, 123456789, 909090909, 135),
(37, '2018-08-05', '2018-08-11', 'Approved', 135, 909090909, 123456789, 133),
(39, '2018-10-21', '2018-10-27', 'Approved', 114, 888, 39311027, 139),
(40, '2018-09-23', '2018-09-29', 'Approved', 134, 203018792, 305641276, 140),
(41, '2018-07-01', '2018-07-07', 'Approved', 137, 998899889, 123456789, 133);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `AptID` (`AptID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`AptID`) REFERENCES `apartments` (`AptID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
