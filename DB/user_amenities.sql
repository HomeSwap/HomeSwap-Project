-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 02:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `user_amenities`
--

CREATE TABLE `user_amenities` (
  `userID` int(10) NOT NULL,
  `WIFI` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `air_conditioner` tinyint(1) NOT NULL,
  `pool` tinyint(1) NOT NULL,
  `hot_tub` tinyint(1) NOT NULL,
  `safe` tinyint(1) NOT NULL,
  `kitchen` tinyint(1) NOT NULL,
  `workspace` tinyint(1) NOT NULL,
  `washing_machine` tinyint(1) NOT NULL,
  `TV` tinyint(1) NOT NULL,
  `fire_place` tinyint(1) NOT NULL,
  `iron` tinyint(1) NOT NULL,
  `gym` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_amenities`
--
ALTER TABLE `user_amenities`
  ADD PRIMARY KEY (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
