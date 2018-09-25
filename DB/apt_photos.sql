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
-- Table structure for table `apt_photos`
--

CREATE TABLE `apt_photos` (
  `photoID` int(11) NOT NULL,
  `photoName` varchar(100) COLLATE utf8_bin NOT NULL,
  `AptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `apt_photos`
--

INSERT INTO `apt_photos` (`photoID`, `photoName`, `AptID`) VALUES
(70, 'Smith1.png', 107),
(71, 'Jones1.jpg', 108),
(72, 'Jones2.jpg', 108),
(73, 'Taylor1.jpg', 109),
(74, 'Taylor2.jpg', 109),
(75, 'Taylor3.jpg', 109),
(76, 'Williams1.jpg', 110),
(77, 'Williams2.jpg', 110),
(78, 'Williams3.jpg', 110),
(79, 'Brown1.jpg', 111),
(80, 'Brown2.jpg', 111),
(81, 'Brown3.jpg', 111),
(100, 'Davies1.jpg', 112),
(101, 'Davies2.jpg', 112),
(102, 'Davies3.jpg', 112),
(103, 'Evans1.jpg', 113),
(104, 'Evans2.jpg', 113),
(105, 'Evans3.jpg', 113),
(106, 'Wilson1.jpg', 114),
(107, 'Wilson2.jpg', 114),
(108, 'Wilson3.jpg', 114),
(109, 'Thomas1.jpg', 115),
(110, 'Thomas2.jpg', 115),
(111, 'Thomas3.jpg', 115),
(112, 'Roberts1.jpg', 116),
(113, 'Roberts2.jpg', 116),
(114, 'Roberts3.jpg', 116),
(115, 'Johnson1.jpg', 117),
(116, 'Johnson2.jpg', 117),
(117, 'Johnson3.jpg', 117),
(118, 'Lewis1.jpg', 118),
(119, 'Lewis2.jpg', 118),
(120, 'Lewis3.jpg', 118),
(121, 'Walker1.jpg', 119),
(122, 'Walker2.jpg', 119),
(123, 'Walker3.jpg', 119),
(124, 'Clark1.jpg', 120),
(125, 'Clark2.jpg', 120),
(126, 'Clark3.jpg', 120),
(127, 'Harrison1.jpg', 121),
(128, 'Harrison2.jpg', 121),
(129, 'Harrison3.jpg', 121),
(130, 'Scott1.jpg', 122),
(131, 'Scott2.jpg', 122),
(132, 'Scott3.jpg', 122),
(133, 'Young1.jpg', 123),
(134, 'Young2.jpg', 123),
(135, 'Young3.jpg', 123),
(136, 'Morris1.jpg', 124),
(137, 'Morris2.jpg', 124),
(138, 'Morris3.jpg', 124),
(139, 'Jackson1.jpg', 125),
(140, 'Jackson2.jpg', 125),
(141, 'Jackson3.jpg', 125),
(142, 'Wright1.jpg', 126),
(143, 'Wright2.jpg', 126),
(144, 'Wright3.jpg', 126),
(145, 'Green1.jpg', 127),
(146, 'Green2.jpg', 127),
(147, 'Green3.jpg', 127),
(160, 'Lee1.jpg', 128),
(161, 'Lee2.jpg', 128),
(162, 'Lee3.jpg', 128),
(163, 'Martin1.jpg', 129),
(164, 'Martin2.jpg', 129),
(165, 'Martin3.jpg', 129),
(166, 'Clarke1.jpg', 130),
(167, 'Clarke2.jpg', 130),
(168, 'Clarke3.jpg', 130),
(169, 'James1.jpg', 131),
(170, 'James2.jpg', 131),
(171, 'James3.jpg', 131),
(172, 'Morgan1.jpg', 132),
(173, 'Morgan2.jpg', 132),
(174, 'Morgan3.jpg', 132),
(175, 'apt05.jpg', 133),
(176, 'apt06.jpg', 133),
(177, 'apt06.jpg', 134),
(178, 'Lighthouse.jpg', 135),
(179, 'apt07.jpg', 136),
(180, 'apartment-architectural.jpg', 137),
(181, 'apartment-architecture-black-and-white-276511.jpg', 137),
(182, '123800261.jpg', 138),
(183, 'apt123456.jpg', 139),
(184, 'apt12345678.jpg', 139),
(185, 'apartment-amalfi.jpg', 140),
(186, 'apartments-amalfi.jpg', 140),
(187, 'picture.jpg', 141);

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
  MODIFY `photoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

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
