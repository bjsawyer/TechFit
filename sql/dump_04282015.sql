-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2015 at 04:20 PM
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
-- Table structure for table `adlocation`
--

CREATE TABLE IF NOT EXISTS `adlocation` (
  `LocationId` int(11) NOT NULL AUTO_INCREMENT,
  `LocationDesc` varchar(255) DEFAULT NULL,
  `LocationRate` decimal(19,4) DEFAULT '0.0000',
  PRIMARY KEY (`LocationId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `adlocation`
--

INSERT INTO `adlocation` (`LocationId`, `LocationDesc`, `LocationRate`) VALUES
(1, 'Homepage - Left Sidebar', '100.0000'),
(2, 'Homepage - Right Sidebar', '100.0000'),
(3, 'Left Sidebar', '75.0000'),
(4, 'Right Sidebar', '75.0000');

-- --------------------------------------------------------

--
-- Table structure for table `advertiser`
--

CREATE TABLE IF NOT EXISTS `advertiser` (
  `ProviderId` int(11) NOT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `ContactFirstName` varchar(255) DEFAULT NULL,
  `ContactLastName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ProviderId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertiser`
--

INSERT INTO `advertiser` (`ProviderId`, `Company`, `ContactFirstName`, `ContactLastName`) VALUES
(5, 'EAS', 'Kaley', 'Duncan'),
(7, 'CytoSport', 'Michael', 'Comiskey'),
(8, 'Powerade', 'Jeremy', 'Long');

-- --------------------------------------------------------

--
-- Table structure for table `ae_adpurchase`
--

CREATE TABLE IF NOT EXISTS `ae_adpurchase` (
  `PurchaseDateTime` datetime DEFAULT NULL,
  `ExpirationDateTime` datetime DEFAULT NULL,
  `AdUrl` varchar(255) DEFAULT NULL,
  `LocationId` int(11) NOT NULL,
  `ProviderId` int(11) NOT NULL,
  PRIMARY KEY (`LocationId`,`ProviderId`),
  KEY `ProviderId` (`ProviderId`),
  KEY `LocationId` (`LocationId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ae_gymmembership`
--

CREATE TABLE IF NOT EXISTS `ae_gymmembership` (
  `GymMembershipId` int(11) NOT NULL AUTO_INCREMENT,
  `RequestDate` date DEFAULT NULL,
  `UserId` int(11) NOT NULL,
  `ProviderId` int(11) NOT NULL,
  PRIMARY KEY (`GymMembershipId`),
  KEY `ProviderId` (`ProviderId`),
  KEY `UserId` (`UserId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ae_gymmembership`
--

INSERT INTO `ae_gymmembership` (`GymMembershipId`, `RequestDate`, `UserId`, `ProviderId`) VALUES
(2, '2015-04-08', 3, 9),
(4, '2015-03-03', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `ae_trainingregistration`
--

CREATE TABLE IF NOT EXISTS `ae_trainingregistration` (
  `TrainingRegistrationId` int(11) NOT NULL AUTO_INCREMENT,
  `RequestDate` date DEFAULT NULL,
  `UserId` int(11) NOT NULL,
  `ProviderId` int(11) NOT NULL,
  PRIMARY KEY (`TrainingRegistrationId`),
  KEY `UserId` (`UserId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ae_trainingregistration`
--

INSERT INTO `ae_trainingregistration` (`TrainingRegistrationId`, `RequestDate`, `UserId`, `ProviderId`) VALUES
(1, '2015-04-14', 3, 6),
(2, '2015-04-29', 1, 4),
(3, '2015-04-29', 1, 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE IF NOT EXISTS `provider` (
  `ProviderId` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `ZipCode` int(11) DEFAULT NULL,
  `ProviderType` varchar(255) NOT NULL,
  PRIMARY KEY (`ProviderId`),
  UNIQUE KEY `Email` (`Email`),
  KEY `ZipCode` (`ZipCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`ProviderId`, `Email`, `Password`, `Phone`, `Address`, `City`, `State`, `ZipCode`, `ProviderType`) VALUES
(4, 'smneyl@gmail.com', 'diesel', '5403495939', '4567 Progress St', 'Blacksburg', 'CA', 24060, 'Trainer'),
(5, 'kdunc@yahoo.com', 'kdunc', '1234567890', '4965 Clay St', 'Blacksburg', 'VA', 24060, 'Advertiser'),
(6, 'billyo@gmail.com', 'billyo', '8049348904', '4201 Janie Ln', 'Blacksburg', 'VA', 24060, 'Trainer'),
(7, 'mcomiskey@aim.com', 'mcomiskey', '5403941231', '3990 Kabrich St', 'Blacksburg', 'VA', 24060, 'Advertiser'),
(8, 'longjeremy@gmail.com', 'long', '5408904856', '2131 Progress St', 'Blacksburg', 'VA', 24060, 'Advertiser'),
(9, 'mccomasgym@vt.edu', 'mccomas', '5402316856', 'asdf', 'Blacksburg', 'VA', 24060, 'Gym'),
(10, 'warmemorialgym@vt.edu', 'warmem', '5402316856', '370 Drillfield Dr', 'Blacksburg', 'VA', 24060, 'Gym'),
(11, 'weightclub@gmail.com', 'weightclub', '5409512949', '801 University City Blvd', 'Blacksburg', 'VA', 24060, 'Gym'),
(12, 'anytimefitness@hotmail.com', 'anytimefit', '5409511340', '1480 S Main St', 'Blacksburg', 'VA', 24060, 'Gym'),
(13, 'Crossfit Blacksburg', 'crossfitbburg', '5405520625', '112 Country Club Dr', 'Blacksburg', 'VA', 24060, 'Gym'),
(3, 'johnpaul@gmail.com', 'johnpaul', '5403445434', '1234 N Main St', 'Blacksburg', 'VA', 24060, 'Trainer');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE IF NOT EXISTS `trainer` (
  `TrainerId` int(11) NOT NULL AUTO_INCREMENT,
  `ProviderId` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Rate` decimal(19,4) DEFAULT '0.0000',
  `MembershipLevel` varchar(255) DEFAULT NULL,
  `ClassesOffered` tinyint(1) DEFAULT '0',
  `Specialities` set('Balance','Core','Endurance','Flexibility','Rehabilitation','Strength','Water Aerobics','Weight Loss') DEFAULT NULL,
  `DaysAvailability` set('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') DEFAULT NULL,
  `HoursAvailability` varchar(255) DEFAULT NULL,
  `ProfilePictureUrl` varchar(255) DEFAULT NULL,
  `ProfileDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TrainerId`),
  UNIQUE KEY `TrainerId` (`TrainerId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`TrainerId`, `ProviderId`, `FirstName`, `LastName`, `Gender`, `Rate`, `MembershipLevel`, `ClassesOffered`, `Specialities`, `DaysAvailability`, `HoursAvailability`, `ProfilePictureUrl`, `ProfileDescription`) VALUES
(1, 6, 'Billy', 'Ozycz', 'Male', '20.0000', 'Silver', 0, 'Balance,Core,Endurance,Flexibility,Weight Loss', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '8AM-10PM', NULL, 'Everyday two-a-days is a normal thing for me and can be for you too!  With the right balance of lifting and cardio I can give you the nice, toned body you have always wanted.'),
(2, 3, 'JP', 'Theo', 'Male', '25.0000', 'Gold', 1, 'Core,Endurance,Flexibility,Strength,Water Aerobics', 'Monday,Tuesday,Wednesday,Thursday,Friday', '8AM-10PM', NULL, 'Avid athlete in all sports - currently Rugby at Virginia Tech.  With monster biceps and indestructable core there is no surprise to why the people call him "Big Sexi."'),
(3, 4, 'shawn', 'neylon', 'Male', '40.0000', 'Platinum', 1, 'Balance,Core', 'Monday,Wednesday', '5AM-6PM', 'seref.jpg', 'Former Marine and US Marshal, workouts with me will push you to the limit.  I am a working man with a family so for those of you looking to book sessions on the weekend - I''m your guy.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `ZipCode` int(11) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `SearchingFor` longtext,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `Email` (`Email`),
  KEY `ZipCode` (`ZipCode`),
  KEY `UserId` (`UserId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `SearchingFor`) VALUES
(1, 'Brandon', 'DiCarlo', 'btd115@vt.edu', 'brocarlo', 'Male', '900 Orchard Street', 'Blacksburg', 'VA', 24060, '571-265-2332', 'Trainer'),
(2, 'Corey', 'Chandler', 'coreyc4@vt.edu', 'chanman', 'Male', '123 Janie Lane', 'Blacksburg', 'VA', 24060, '703-362-0790', 'Trainer'),
(3, 'Brendan', 'Sawyer', 'bjsawyer@vt.edu', 'sawyerbeatz', 'Male', '321 Center Street', 'Blacksburg', 'VA', 24060, '703-655-3286', 'Trainer'),
(4, 'Connor', 'MacDonald', 'mcyd12@vt.edu', 'ponyboy', 'Male', '369 Progress Street', 'Blacksburg', 'VA', 24060, '757-254-8824', 'Gym');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
