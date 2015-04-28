-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 12:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techfitdb_`
--

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE IF NOT EXISTS `gym` (
  `GymId` int(11) NOT NULL AUTO_INCREMENT,
  `ProviderId` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ContactFirstName` varchar(255) NOT NULL,
  `ContactLastName` varchar(255) NOT NULL,
  `Rate` decimal(19,4) DEFAULT '0.0000',
  `DaysOperation` set('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') DEFAULT NULL,
  `HoursOperation` varchar(255) DEFAULT NULL,
  `Amenities` set('Tanning','Pool','Basketball Court','Sauna','Track') DEFAULT NULL,
  `ClassesOffered` tinyint(1) DEFAULT '0',
  `MembershipLevel` varchar(255) DEFAULT NULL,
  `ProfilePictureUrl` varchar(255) DEFAULT NULL,
  `ProfileDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`GymId`),
  UNIQUE KEY `GymId` (`GymId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`GymId`, `ProviderId`, `Name`, `ContactFirstName`, `ContactLastName`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfilePictureUrl`, `ProfileDescription`) VALUES
(1, 9, 'McComas', 'Mccomas', 'Rep', '50.0000', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', 'Pool,Basketball Court,Sauna,Track', 1, 'Silver', NULL, 'Located right off Washington Street, McComas is a state of the art gym provided by Virginia Tech.  The facility offers a wide range of amenities and workout equipment.'),
(2, 10, 'War Memorial', 'War', 'Rep', '50.0000', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', 'Pool,Basketball Court,Sauna', 1, 'Gold', NULL, 'Located right off the Drillfield, War Memorial is a more traditional gym provided by Virginia Tech.  A bit smaller and usually less crowded, this is a great alternative to McComas with many of the same amenities.'),
(3, 11, 'The Weight Club', 'Weight Club', 'Rep', '42.0000', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', 'Track', 1, 'Platinum', 'Gorilla Munch.png', 'Located at the University Mall, the Weight Club offers all the necessary equipment for the body you''re looking for.  Great for those looking for a gym outside of campus.'),
(4, 12, 'Anytime Fitness', 'Anytime Fitness', 'Rep', '40.0000', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', 'Tanning', 1, 'Silver', NULL, 'Near the plazas off South Main, Anytime Fitness is perfect for those struggling to find time to workout.  Open 24/7 with tons of amenities, there will be no issues fitting exercise into your schedule.'),
(5, 13, 'Crossfit Blacksburg', 'Crossfit', 'Rep', '45.0000', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', '', 1, 'Gold', NULL, 'Just past Downtown Blacksburg, Crossfit Blacksurg incorporates all the activities and equipment for trending crossfit excercises.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
