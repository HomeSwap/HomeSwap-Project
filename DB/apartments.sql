-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2018 at 08:56 AM
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
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `AptID` int(10) NOT NULL,
  `country` varchar(30) COLLATE utf8_bin NOT NULL,
  `city` varchar(30) COLLATE utf8_bin NOT NULL,
  `street` varchar(30) COLLATE utf8_bin NOT NULL,
  `aptNum` int(5) NOT NULL,
  `zipCode` int(10) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(400) COLLATE utf8_bin NOT NULL,
  `guestNum` int(11) NOT NULL,
  `propertyType` enum('Villa','Apartment','Condominium','Loft') COLLATE utf8_bin NOT NULL,
  `propertyStyle` varchar(200) COLLATE utf8_bin NOT NULL,
  `amenities` varchar(200) COLLATE utf8_bin NOT NULL,
  `accessibility` varchar(200) COLLATE utf8_bin NOT NULL,
  `rules` varchar(200) COLLATE utf8_bin NOT NULL,
  `avgRate` float NOT NULL,
  `userID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`AptID`, `country`, `city`, `street`, `aptNum`, `zipCode`, `title`, `description`, `guestNum`, `propertyType`, `propertyStyle`, `amenities`, `accessibility`, `rules`, `avgRate`, `userID`) VALUES
(100, 'ffgg', 'vgtgt', 'tgt', 66, 0, 'Great apartment in city center', 'hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello hello', 3, 'Villa', 'urban,openSpace,seaView', 'balcony,washing_machine, safe, iron, TV, WIFI', 'elivator,accesible_parking', 'smoking_allowed, suitable_for_events', 0, 8888880),
(101, 'Brazil', 'Rio-de jenero', 'kopa kabana 3', 24, 12345, 'Most amazing place in the middle of kopa kabana! come to stay and enjoy the sun and lovely beaches!!', 'The most amazing place, fitted for accommodation. equipped to all needs. pretty and comfortable place. come and stay at my place :-) your more than welcome to coma and stay here. The most amazing place, fitted for accommodation. equipped to all needs. pretty and comfortable place. come and stay at my place :-) your more than welcome to coma and stay here. see you soon in kopa kabana!!!!!!!!!!!!!!', 2, 'Apartment', 'seaView,countryHouse,forFamilies', 'WIFI,balcony,pool,hot_tub,safe,kitchen,workspace,TV,gym,fire_place,air_conditioner', 'staircase_free,accesible_parking', 'pets_allowed,suitable_for_events', 0, 549547642),
(102, 'Israel', 'Tel aviv', 'Bugrashov 20', 3, 0, 'Amazing apartment near the beach!!!', 'ziv!!!!! :-)', 2, 'Loft', 'countryHouse', 'pool,hot_tub,workspace,iron', 'staircase_free', 'smoking_allowed', 0, 987656789),
(103, 'Israel', 'Rosh-haayin', 'Dragot 23', 4, 0, 'The most regular place you could ever visit', 'I dont recommend to come visit my place. Rosh-haayin is a boring city.', 2, 'Apartment', 'urban,openSpace', 'balcony,pool,hot_tub,safe,iron', 'staircase_free,accesible_parking', 'smoking_allowed', 0, 305641276),
(104, 'Israel', 'Tel aviv', 'aliyat hanoar', 17, 0, 'Very nice place - come visit!', 'In the middle of tel-aviv (givatayim) - lies little piece of urban heaven!', 2, 'Villa', 'urban', 'hot_tub', 'wide_corridor', 'smoking_allowed', 0, 203018791),
(105, 'Israel', 'ramat-hasharon', 'Rotchild', 3, 0, 'Very snob place in ramat hasharon', 'come and stay in our pretty place', 2, 'Villa', 'urban,forFamilies', 'gym,fire_place,washing_machine,air_conditioner', 'accesible_parking', 'pets_allowed', 0, 6666666);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`AptID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `AptID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartments`
--
ALTER TABLE `apartments`
  ADD CONSTRAINT `apartments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
