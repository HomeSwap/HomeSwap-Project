-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 11:31 AM
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
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `AptID` int(10) NOT NULL,
  `country` varchar(30) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `street` varchar(30) COLLATE utf8_bin NOT NULL,
  `aptNum` int(5) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `title` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `guestNum` int(11) NOT NULL,
  `propertyType` enum('Villa','Apartment','Condominium','Loft') COLLATE utf8_bin NOT NULL,
  `propertyStyle` varchar(200) COLLATE utf8_bin NOT NULL,
  `amenities` varchar(200) COLLATE utf8_bin NOT NULL,
  `accessibility` varchar(200) COLLATE utf8_bin NOT NULL,
  `rules` varchar(200) COLLATE utf8_bin NOT NULL,
  `avgRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`AptID`, `country`, `city`, `street`, `aptNum`, `zipCode`, `title`, `description`, `guestNum`, `propertyType`, `propertyStyle`, `amenities`, `accessibility`, `rules`, `avgRate`) VALUES
(1, 'Spain', 'madrid', 'kohones 9', 99, 0, 'titelos', 'doscriptionos', 6, 'Villa', '', '', '', '', 0),
(2, 'kukaracha', 'chacha', 'kuku', 2, 12, '121212', '343434', 6, 'Loft', '', '', '', '', 0),
(12, 'france', 'paris', 'shanz elize', 34, 1234, 'ohhh', 'shanz elize', 55, 'Loft', '', 'WIFI,hot_tub,workspace,fire_place,washing_machine', '', '', 0),
(13, 's', 's', 's', 3, 3, 'd', 'd', 3, 'Condominium', '', 'WIFI,pool', 'wide_corridor,elivator', 'smoking_allowed,suitable_for_events', 0),
(14, 'Israel', 'Rosh-pina', 'pina 3', 45, 345, 'koteret', 'tiur', 3, 'Villa', '', 'WIFI,safe', 'wide_corridor', 'smoking_allowed', 0),
(15, 'bomba', 'bumbum', 'bumi', 3, 3, 't', 'd', 4, 'Villa', '', '', 'accesible_parking', 'pets_allowed', 0),
(17, 'hello', 'byebye', 'shalom', 3, 3, 't', 'd', 4, 'Villa', '', 'WIFI', 'wide_corridor', 'smoking_allowed', 0),
(23, 'Israel', 'rosh aayin', '23 dragot st.', 2, 48580, '', '', 2, 'Villa', '', '', '', '', 0),
(31, 'bella', 'chaw', 'bella', 3, 3, '', '', 3, 'Villa', 'seaView', 'washing_machine,air_conditioner', 'wide_corridor', 'suitable_for_events', 0),
(34, 'spain', 'barcellona', 'd', 3, 3, '3', '3', 3, 'Villa', 'seaView', 'kitchen', 'wide_corridor', 'suitable_for_events', 0),
(35, 'russia', 'moscow', '23 dragot st.', 12, 48580, '', '', 3, 'Villa', 'countryHouse', 'kitchen', '', 'suitable_for_events', 0),
(36, 'russia', 'moscow', '23 dragot st.', 12, 48580, '', '', 3, 'Villa', 'countryHouse', 'kitchen', '', 'suitable_for_events', 0),
(37, 'israel', '3', '3', 3, 3, '', '', 3, 'Villa', 'seaView,countryHouse', '', '', '', 0),
(38, 'r', 'r', 'r', 4, 4, '', '', 3, 'Villa', '', '', '', '', 0),
(39, 'r', 'r', 'r', 4, 4, '', '', 3, 'Villa', '', '', '', '', 0),
(40, 'r', 'r', 'r', 4, 4, '', '', 3, 'Villa', '', '', '', '', 0),
(41, 'r', 'r', 'r', 4, 4, '', '', 3, 'Villa', '', '', '', '', 0),
(42, 'jim', 'Eldad', 'corem', 2, 2, '', '', 2, 'Villa', 'countryHouse', '', '', '', 0),
(43, 'rr', '4fr', '4', 4, 4, '', '', 3, 'Villa', 'seaView,countryHouse', 'WIFI,pool', 'wide_corridor', 'smoking_allowed', 0),
(44, 'rr', '4fr', '4', 4, 4, '', '', 3, 'Villa', 'seaView,countryHouse', 'WIFI,pool', 'wide_corridor', 'smoking_allowed', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`AptID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `AptID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
