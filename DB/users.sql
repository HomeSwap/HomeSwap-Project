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
(111, 'Jacob', 'Smith', 'Smith@Smith.com', 'Smith123', 123456, 'Australia', 'Sydney', 'Chalmers Ave', 3, 0, 'seaView,urban,forFamilies', 'WIFI,parking,safe,workspace,TV,air_conditioner', 'accesible_parking', 'smoking_allowed,pets_allowed', 0),
(222, 'Michael', 'Jones', 'Jones@Jones.com', 'Jones123', 123456, 'France', 'Paris', '', 0, 0, 'urban', 'WIFI,parking,kitchen,TV,washing_machine,air_conditioner', 'staircase_free', '', 0),
(333, 'Joshua', 'Taylor', 'Taylor@Taylor.com', 'Taylor123', 33333, 'United Kingdom', 'London', 'Hamlet Gardens', 42, 0, '', '', '', '', 0),
(444, 'Matthew', 'Williams', 'Williams@Williams.com', 'Williams123', 4444444, 'Italy', 'Rome', 'Via Francesco Orioli', 4, 0, 'seaView,urban', 'balcony,hot_tub,TV,gym', 'wide_corridor', 'smoking_allowed', 0),
(555, 'Christopher', 'Brown', 'Brown@Brown.com', 'Brown123', 55555555, 'Spain', 'Barcelona', 'Carrer de Mallorca', 58, 0, 'seaView,urban,openSpace', 'WIFI,parking,hot_tub,kitchen,TV,washing_machine', 'elivator', 'smoking_allowed,pets_allowed,suitable_for_events', 0),
(666, 'Andrew', 'Davies', 'Davies@Davies.com', 'Davies123', 666666666, 'Germany', 'Berlin', 'Charlottenburger ', 30, 5436787, 'urban', 'WIFI,parking,hot_tub,kitchen,TV,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed,suitable_for_events', 0),
(777, 'Daniel', 'Evans', 'Evans@Evans.com', 'Evans123', 77777777, 'Spain', 'Madrid', 'Calle de Carretas', 4, 654645, '', '', '', '', 0),
(888, 'Ethan', 'Wilson', 'noga@nogaggg.com', 'Wilson123', 88888888, 'Netherlands', 'Amsterdam', 'Tolstraat ', 120, 8768678, '', '', '', '', 0),
(999, 'Joseph', 'Thomas', 'Thomas@Thomas.com', 'Thomas123', 9999999, 'Portugal', 'Lisbon', 'Largo Mastro', 39, 7765, '', '', '', '', 0),
(101010, 'William', 'Roberts', 'Roberts@Roberts.com', 'Roberts123', 10304320, 'Czech Republic', 'Prague', 'Jeseniova ', 96, 645664, '', '', '', '', 0),
(111110, 'Anthony', 'Johnson', 'Johnson@Johnson.com', 'Johnson123', 1112324234, 'Italy', 'Milan', 'Via Melzo', 12, 543535346, '', '', '', '', 0),
(121212, 'Nicholas', 'Lewis', 'Lewis@Lewis.com', 'Lewis123', 12123313, 'Italy', 'Venice', 'Calle Fava', 124, 0, '', '', '', '', 0),
(131313, 'David', 'Walker', 'Walker@Walker.com', 'Walker123', 133423554, 'USA', 'New York', 'W 46th', 114, 0, 'urban', '', '', '', 0),
(141414, 'Emily', 'Clark', 'Clark@Clark.com', 'Clark123', 143255364, 'USA', 'Las Vegas', 'Fremont St', 554, 0, '', '', '', '', 0),
(151515, 'Madison', 'Harrison', 'Harrison@Harrison.com', 'Harrison123', 453536456, 'USA', 'Los Angeles', 'W Magnolia Blvd', 11135, 0, '', '', '', '', 0),
(161616, 'Emma', 'Scott', 'Scott@Scott.com', 'Scott123', 213425345, 'USA', 'Chicago', 'S Financial Pl', 601, 0, '', '', '', '', 0),
(171717, 'Hannah', 'Young', 'Young@Young.com', 'Young123', 43465464, 'USA', 'San Francisco', 'Mission St', 1199, 0, '', '', '', '', 0),
(181818, 'Olivia', 'Morris', 'Morris@Morris.com', 'Morris123', 543645, 'USA', 'Miami Beach', 'Keystone Blvd', 2246, 0, '', '', '', '', 0),
(191919, 'Jonathan', 'Jackson', 'Jackson@Jackson.com', 'Jackson123', 987995656, 'Mexico', 'Mexico City', 'Calle de Venustiano Carranza', 60, 0, '', '', '', '', 0),
(201698, 'Nofar', 'Lev Ari', 'levartstudio1@gmail.com', '1234567899', 546882254, '', '', '', 0, 0, 'seaView,urban,forFamilies', 'WIFI,pool,hot_tub,workspace,fire_place', 'elivator', 'smoking_allowed', 0),
(202020, 'Brandon', 'Wright', 'Wright@Wright.com', 'Wright123', 5756867, 'Thailand', 'Bangkok', 'Soi Praphatson', 37, 0, '', '', '', '', 0),
(212121, 'Christian', 'Green', 'Green@Green.com', 'Green123', 213234243, 'China', 'Shanghai', 'Anfu Rd', 275, 0, '', '', '', '', 0),
(252525, 'Samuel', 'Lee', 'Lee@Lee.com', 'Lee123', 867868876, 'Israel', 'Jerusalem', 'Azza St', 33, 0, '', '', '', '', 0),
(262626, 'Benjamin', 'Martin', 'Martin@Martin.com', 'Martin123', 64545756, 'Sweden', 'Stockholm', 'RingvÃ¤gen ', 25, 0, '', '', '', '', 0),
(272727, 'Nathan', 'Clarke', 'Clarke@Clarke.com', 'Clarke123', 6554646, 'ISRAEL', 'TEL AVIV', 'Pinsker St', 38, 0, '', '', '', '', 0),
(282828, 'Logan', 'James', 'James@James.com', 'James123', 534345354, 'Brazil', 'Rio de Janeiro', 'R. OtÃ¡vio CorrÃªa', 435, 0, '', '', '', '', 0),
(3333339, 'Shir', 'Balmas', 'shirshir444@gmail.com', '1234567', 506663090, '', '', '', 0, 0, 'urban,countryHouse,openSpace', '', '', 'suitable_for_events', 0),
(12121212, 'Noga', 'Gordon-Bar', 'noga@noga.com', 'Noga123', 545440039, '', '', '', 0, 0, 'seaView,urban', 'safe,air_conditioner', '', 'pets_allowed', 0),
(29292929, 'Justin', 'Morgan', 'Morgan@Morgan.com', 'Morgan123', 54355, 'USA', 'Boston', 'Deforest St', 112, 0, '', '', '', '', 0),
(39311027, 'Assi', 'Azar', 'asafyanko89@gmail.com', 'MaccabiJordi14', 509640409, '', '', '', 0, 0, 'seaView,countryHouse,openSpace', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,iron,gym,fire_place,washing_machine,air_conditioner', 'elivator', 'smoking_allowed,pets_allowed,suitable_for_events', 0),
(123456789, 'Nofar', 'Balmas', 'nogagordonbar@walla.co.il', 'Nofar123', 54, 'Israel', 'Ashkelon', 'Exsodos 18', 9, 82000, 'urban,openSpace,forFamilies', 'parking,pool,hot_tub,kitchen,workspace,TV,washing_machine', 'staircase_free,elivator', 'smoking_allowed,pets_allowed', 0),
(203018792, 'shir', 'balmas', 'shirb27@gmail.com', '123456', 504440390, '', '', '', 0, 0, '', '', 'accesible_parking', 'smoking_allowed,pets_allowed,suitable_for_events', 0),
(300223313, 'John', 'Doe', 'johnd@gmail.com', 'jhon123', 54, 'Israel', 'Tel aviv', 'rabenu yeruham 10', 2, 0, 'seaView,countryHouse,openSpace', 'WIFI,balcony,hot_tub,workspace,fire_place,washing_machine,air_conditioner', 'wide_corridor,elivator', 'smoking_allowed,pets_allowed', 0),
(305641276, 'Noga', 'Gordon-bar', 'noga.gorbar@gmail.com', 'Noga123', 545440039, '', '', '', 0, 0, 'urban,forFamilies', 'WIFI,safe,iron,gym', 'elivator', 'smoking_allowed,pets_allowed', 0),
(909090909, 'Asaf', 'Cohen', 'asaf@asaf.com', 'Asaf123', 50, '', '', '', 0, 0, 'seaView', 'kitchen', '', 'smoking_allowed', 0),
(998899889, 'Sapir', 'Cohen', 'ziv0508235213@gmail.com', 'Sapir123', 54, 'Israel', '', '', 0, 0, 'urban', 'washing_machine', '', '', 0),
(2147483647, 'yair', 'belams', 'belamsyair@gmail.com', 'by280666!@', 504012033, 'israel', 'kiryat gat', 'adouraim', 0, 0, '', 'WIFI,parking,balcony,pool,hot_tub,safe,kitchen,workspace,TV,iron,gym,fire_place,washing_machine,air_conditioner', '', 'smoking_allowed,suitable_for_events', 0);

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
