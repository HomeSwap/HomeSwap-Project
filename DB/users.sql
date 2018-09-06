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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `Fname` varchar(20) COLLATE utf8_bin NOT NULL,
  `Lname` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` int(20) NOT NULL,
  `usersCountry` varchar(30) COLLATE utf8_bin NOT NULL,
  `usersCity` varchar(30) COLLATE utf8_bin NOT NULL,
  `street` varchar(30) COLLATE utf8_bin NOT NULL,
  `aptNum` int(5) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `tripType` varchar(200) COLLATE utf8_bin NOT NULL,
  `amenities` varchar(200) COLLATE utf8_bin NOT NULL,
  `accessibilityNeeds` varchar(200) COLLATE utf8_bin NOT NULL,
  `requests` varchar(200) COLLATE utf8_bin NOT NULL,
  `avgRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `Fname`, `Lname`, `email`, `password`, `phone`, `usersCountry`, `usersCity`, `street`, `aptNum`, `zipCode`, `tripType`, `amenities`, `accessibilityNeeds`, `requests`, `avgRate`) VALUES
(444, 'fff', 'ff', 'shirb27@gmail.com', '123456', 55, '', '', '', 0, 0, '', '', '', '', 0),
(65432, 'ggg', 'gg', 'fgfgfghh@gmail.com', '123456', 0, '', '', '', 0, 0, '', '', '', '', 0),
(666633, 'ggg', 'g', 'fff@djk.com', '123456', 6, '', '', '', 0, 0, '', '', '', '', 0),
(6666666, 'Sapir', 'Shkalim', 'sapir@sapir.com', 'sapir666', 54000000, '', '', '', 0, 0, 'seaView,countryHouse', 'pool,fire_place,washing_machine', '', '', 0),
(8888880, 'hghvf', 'cffrc', 'dgdgdg@mfgjgf.com', '444444444', 888, 'Israel', 'Tel Aviv', '', 0, 0, '', '', '', '', 0),
(203018791, 'Shir', 'Balmas', 'shirshir@gmail.com', 'shi000', 504440390, '', '', '', 0, 0, 'seaView,urban', 'parking,pool,gym,washing_machine', 'wide_corridor,staircase_free', 'smoking_allowed', 0),
(305641276, 'Noga', 'Gordon-Bar', 'nog@nog123.com', '123123', 545440039, 'Israel', 'Rosh-haayin', 'Dragot 23', 0, 1234, 'seaView', 'parking,pool,kitchen', 'elivator', 'pets_allowed', 0),
(549547642, 'Asaf', 'Yanko', 'asaf@asaf.com', '123123123', 546882254, 'Israel (ISR)', 'Petach Tikva', 'Aharon meskin 25', 56, 82000, 'seaView,countryHouse,openSpace', 'WIFI,balcony,hot_tub,safe,TV,iron,gym,air_conditioner', 'wide_corridor,elivator,accesible_parking', 'smoking_allowed,pets_allowed', 0),
(987656789, 'ziv', 'cohen', 'zivcohen@gmail.com', 'ziv123', 1, '', '', '', 0, 0, 'seaView', 'hot_tub,washing_machine', '', 'pets_allowed', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
