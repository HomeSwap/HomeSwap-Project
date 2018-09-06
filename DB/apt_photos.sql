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
-- Table structure for table `apt_photos`
--

CREATE TABLE `apt_photos` (
  `photoID` int(11) NOT NULL,
  `photoName` varchar(50) COLLATE utf8_bin NOT NULL,
  `AptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apt_photos`
--

INSERT INTO `apt_photos` (`photoID`, `photoName`, `AptID`) VALUES
(60, 'countryHouse.jpg', 100),
(61, 'apt03.jpg', 101),
(62, 'seaView.jpg', 101),
(63, 'forFamilies.jpg', 102),
(65, 'apt04.jpg', 103),
(66, 'apt02.jpg', 104),
(67, 'apt01.jpg', 105);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apt_photos`
--
ALTER TABLE `apt_photos`
  ADD PRIMARY KEY (`photoID`),
  ADD KEY `AptID` (`AptID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apt_photos`
--
ALTER TABLE `apt_photos`
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apt_photos`
--
ALTER TABLE `apt_photos`
  ADD CONSTRAINT `apt_photos_ibfk_1` FOREIGN KEY (`AptID`) REFERENCES `apartments` (`AptID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
