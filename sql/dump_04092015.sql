#
# DUMP FILE
#
# Database is ported from MS Access
#------------------------------------------------------------------
# Created using "MS Access to MySQL" form http://www.bullzip.com
# Program Version 5.3.259
#
# OPTIONS:
#   sourcefilename=C:\Users\Owner\Documents\VIRGINIA TECH\4th Year - 2nd Semester\BIT 4454 Business Analysis Seminar\Team Project\Access\TechFit.accdb
#   sourceusername=
#   sourcepassword=
#   sourcesystemdatabase=
#   destinationdatabase=techfitDB_
#   storageengine=MyISAM
#   dropdatabase=1
#   createtables=1
#   unicode=1
#   autocommit=1
#   transferdefaultvalues=1
#   transferindexes=1
#   transferautonumbers=1
#   transferrecords=1
#   columnlist=1
#   tableprefix=
#   negativeboolean=0
#   ignorelargeblobs=0
#   memotype=LONGTEXT
#

DROP DATABASE IF EXISTS `techfitDB_`;
CREATE DATABASE IF NOT EXISTS `techfitDB_`;
USE `techfitDB_`;

#
# Table structure for table 'AdLocation'
#

DROP TABLE IF EXISTS `AdLocation`;

CREATE TABLE `AdLocation` (
  `LocationId` INTEGER NOT NULL AUTO_INCREMENT, 
  `LocationDesc` VARCHAR(255), 
  `LocationRate` DECIMAL(19,4) DEFAULT 0, 
  PRIMARY KEY (`LocationId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'AdLocation'
#

INSERT INTO `AdLocation` (`LocationId`, `LocationDesc`, `LocationRate`) VALUES (1, 'Homepage - Left Sidebar', 100);
INSERT INTO `AdLocation` (`LocationId`, `LocationDesc`, `LocationRate`) VALUES (2, 'Homepage - Right Sidebar', 100);
INSERT INTO `AdLocation` (`LocationId`, `LocationDesc`, `LocationRate`) VALUES (3, 'Left Sidebar', 75);
INSERT INTO `AdLocation` (`LocationId`, `LocationDesc`, `LocationRate`) VALUES (4, 'Right Sidebar', 75);
# 4 records

#
# Table structure for table 'Advertiser'
#

DROP TABLE IF EXISTS `Advertiser`;

CREATE TABLE `Advertiser` (
  `ProviderId` INTEGER NOT NULL, 
  `Company` VARCHAR(255), 
  `ContactFirstName` VARCHAR(255), 
  `ContactLastName` VARCHAR(255), 
  PRIMARY KEY (`ProviderId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Advertiser'
#

INSERT INTO `Advertiser` (`ProviderId`, `Company`, `ContactFirstName`, `ContactLastName`) VALUES (5, 'EAS', 'Kaley', 'Duncan');
INSERT INTO `Advertiser` (`ProviderId`, `Company`, `ContactFirstName`, `ContactLastName`) VALUES (7, 'CytoSport', 'Michael', 'Comiskey');
INSERT INTO `Advertiser` (`ProviderId`, `Company`, `ContactFirstName`, `ContactLastName`) VALUES (8, 'Powerade', 'Jeremy', 'Long');
# 3 records

#
# Table structure for table 'AE_AdPurchase'
#

DROP TABLE IF EXISTS `AE_AdPurchase`;

CREATE TABLE `AE_AdPurchase` (
  `PurchaseDateTime` DATETIME, 
  `ExpirationDateTime` DATETIME, 
  `AdUrl` VARCHAR(255), 
  `LocationId` INTEGER NOT NULL, 
  `ProviderId` INTEGER NOT NULL, 
  INDEX (`ProviderId`), 
  INDEX (`LocationId`), 
  PRIMARY KEY (`LocationId`, `ProviderId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'AE_AdPurchase'
#

# 0 records

#
# Table structure for table 'AE_GymMembership'
#

DROP TABLE IF EXISTS `AE_GymMembership`;

CREATE TABLE `AE_GymMembership` (
  `MembershipDateTime` DATETIME, 
  `UserId` INTEGER NOT NULL, 
  `ProviderId` INTEGER NOT NULL, 
  INDEX (`ProviderId`), 
  PRIMARY KEY (`UserId`, `ProviderId`), 
  INDEX (`UserId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'AE_GymMembership'
#

# 0 records

#
# Table structure for table 'AE_TrainingRegistration'
#

DROP TABLE IF EXISTS `AE_TrainingRegistration`;

CREATE TABLE `AE_TrainingRegistration` (
  `TrainingLocation` VARCHAR(255), 
  `TrainingDateTime` DATETIME, 
  `TrainingDuration` VARCHAR(255), 
  `RegistrationDateTime` DATETIME, 
  `UserId` INTEGER NOT NULL, 
  `ProviderId` INTEGER NOT NULL, 
  PRIMARY KEY (`UserId`, `ProviderId`), 
  INDEX (`UserId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'AE_TrainingRegistration'
#

# 0 records

#
# Table structure for table 'Gym'
#

DROP TABLE IF EXISTS `Gym`;

CREATE TABLE `Gym` (
  `ProviderId` INTEGER NOT NULL, 
  `Name` VARCHAR(255), 
  `Rate` DECIMAL(19,4) DEFAULT 0, 
  `DaysOperation` LONGTEXT, 
  `HoursOperation` VARCHAR(255), 
  `Amenities` LONGTEXT, 
  `ClassesOffered` TINYINT(1) DEFAULT 0, 
  `MembershipLevel` VARCHAR(255), 
  `ProfileDescription` VARCHAR(255), 
  PRIMARY KEY (`ProviderId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Gym'
#

INSERT INTO `Gym` (`ProviderId`, `Name`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfileDescription`) VALUES (9, 'McComas', 50, '', '8AM-10PM', '', 1, 'Silver', 'Located right off Washington Street, McComas is a state of the art gym provided by Virginia Tech.  The facility offers a wide range of amenities and workout equipment.');
INSERT INTO `Gym` (`ProviderId`, `Name`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfileDescription`) VALUES (10, 'War Memorial', 50, '', '8AM-10PM', '', 1, 'Gold', 'Located right off the Drillfield, War Memorial is a more traditional gym provided by Virginia Tech.  A bit smaller and usually less crowded, this is a great alternative to McComas with many of the same amenities.');
INSERT INTO `Gym` (`ProviderId`, `Name`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfileDescription`) VALUES (11, 'The Weight Club', 42, '', '8AM-10PM', '', 1, 'Platinum', 'Located at the University Mall, the Weight Club offers all the necessary equipment for the body you\'re looking for.  Great for those looking for a gym outside of campus.');
INSERT INTO `Gym` (`ProviderId`, `Name`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfileDescription`) VALUES (12, 'Anytime Fitness', 40, '', '8AM-10PM', 'Tanning', 1, 'Silver', 'Near the plazas off South Main, Anytime Fitness is perfect for those struggling to find time to workout.  Open 24/7 with tons of amenities, there will be no issues fitting exercise into your schedule.');
INSERT INTO `Gym` (`ProviderId`, `Name`, `Rate`, `DaysOperation`, `HoursOperation`, `Amenities`, `ClassesOffered`, `MembershipLevel`, `ProfileDescription`) VALUES (13, 'Crossfit Blacksburg', 45, '', '8AM-10PM', '', 1, 'Gold', 'Just past Downtown Blacksburg, Crossfit Blacksurg incorporates all the activities and equipment for trending crossfit excercises.');
# 5 records

#
# Table structure for table 'Provider'
#

DROP TABLE IF EXISTS `Provider`;

CREATE TABLE `Provider` (
  `ProviderId` INTEGER NOT NULL AUTO_INCREMENT, 
  `Email` VARCHAR(255), 
  `Phone` VARCHAR(255), 
  `Address` VARCHAR(255), 
  `City` VARCHAR(255), 
  `State` VARCHAR(255), 
  `ZipCode` INTEGER, 
  PRIMARY KEY (`ProviderId`), 
  INDEX (`ZipCode`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Provider'
#

INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (4, 'smneyl@gmail.com', '5403495939', '4567 Progress St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (5, 'kdunc@yahoo.com', '1234567890', '4965 Clay St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (6, 'billyo@gmail.com', '8049348904', '4201 Janie Ln', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (7, 'mcomiskey@aim.com', '5403941231', '3990 Kabrich St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (8, 'longjeremy@gmail.com', '5408904856', '2131 Progress St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (9, 'mccomasgym@vt.edu', '5402316856', '895 Washington St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (10, 'warmemorialgym@vt.edu', '5402316856', '370 Drillfield Dr', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (11, 'weightclub@gmail.com', '5409512949', '801 University City Blvd', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (12, 'anytimefitness@hotmail.com', '5409511340', '1480 S Main St', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (13, 'Crossfit Blacksburg', '5405520625', '112 Country Club Dr', 'Blacksburg', 'VA', 24060);
INSERT INTO `Provider` (`ProviderId`, `Email`, `Phone`, `Address`, `City`, `State`, `ZipCode`) VALUES (3, 'johnpaul@gmail.com', '5403445434', '1234 N Main St', 'Blacksburg', 'VA', 24060);
# 11 records

#
# Table structure for table 'Trainer'
#

DROP TABLE IF EXISTS `Trainer`;

CREATE TABLE `Trainer` (
  `ProviderId` INTEGER NOT NULL, 
  `FirstName` VARCHAR(255), 
  `LastName` VARCHAR(255), 
  `Gender` VARCHAR(255), 
  `Rate` DECIMAL(19,4) DEFAULT 0, 
  `MembershipLevel` VARCHAR(255), 
  `ClassesOffered` TINYINT(1) DEFAULT 0, 
  `Specialties` LONGTEXT, 
  `DaysAvailability` LONGTEXT, 
  `HoursAvailability` VARCHAR(255), 
  `ProfileDescription` VARCHAR(255), 
  PRIMARY KEY (`ProviderId`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'Trainer'
#

INSERT INTO `Trainer` (`ProviderId`, `FirstName`, `LastName`, `Gender`, `Rate`, `MembershipLevel`, `ClassesOffered`, `Specialties`, `DaysAvailability`, `HoursAvailability`, `ProfileDescription`) VALUES (6, 'Billy', 'Ozycz', 'Male', 20, 'Silver', 0, '', '', '8AM-10PM', 'Everyday two-a-days is a normal thing for me and can be for you too!  With the right balance of lifting and cardio I can give you the nice, toned body you have always wanted.');
INSERT INTO `Trainer` (`ProviderId`, `FirstName`, `LastName`, `Gender`, `Rate`, `MembershipLevel`, `ClassesOffered`, `Specialties`, `DaysAvailability`, `HoursAvailability`, `ProfileDescription`) VALUES (3, 'JP', 'Theo', 'Male', 25, 'Gold', 1, '', '', '8AM-10PM', 'Avid athlete in all sports - currently Rugby at Virginia Tech.  With monster biceps and indestructable core there is no surprise to why the people call him \"Big Sexi.\"');
INSERT INTO `Trainer` (`ProviderId`, `FirstName`, `LastName`, `Gender`, `Rate`, `MembershipLevel`, `ClassesOffered`, `Specialties`, `DaysAvailability`, `HoursAvailability`, `ProfileDescription`) VALUES (4, 'Shawn', 'Neylon', 'Male', 30, 'Platinum', 1, '', '', '8AM-10PM', 'Former Marine and US Marshal, workouts with me will push you to the limit.  I am a working man with a family so for those of you looking to book sessions on the weekend - I\'m your guy.');
# 3 records

#
# Table structure for table 'User'
#

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `UserId` INTEGER NOT NULL AUTO_INCREMENT, 
  `FirstName` VARCHAR(255), 
  `LastName` VARCHAR(255), 
  `Email` VARCHAR(255), 
  `Password` VARCHAR(255), 
  `Gender` VARCHAR(255), 
  `Address` VARCHAR(255), 
  `City` VARCHAR(255), 
  `State` VARCHAR(255), 
  `ZipCode` INTEGER, 
  `Phone` VARCHAR(255), 
  `SearchingFor` LONGTEXT, 
  PRIMARY KEY (`UserId`), 
  INDEX (`ZipCode`)
) ENGINE=myisam DEFAULT CHARSET=utf8;

SET autocommit=1;

#
# Dumping data for table 'User'
#

INSERT INTO `User` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `SearchingFor`) VALUES (1, 'Brandon', 'DiCarlo', 'btd115@vt.edu', 'brocarlo', 'Male', '900 Orchard Street', 'Blacksburg', 'VA', 24060, '571-265-2332', 'Trainer');
INSERT INTO `User` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `SearchingFor`) VALUES (2, 'Corey', 'Chandler', 'coreyc4@vt.edu', 'chanman', 'Male', '123 Janie Lane', 'Blacksburg', 'VA', 24060, '703-362-0790', 'Trainer');
INSERT INTO `User` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `SearchingFor`) VALUES (3, 'Brendan', 'Sawyer', 'bjsawyer@vt.edu', 'sawyerbeatz', 'Male', '321 Center Street', 'Blacksburg', 'VA', 24060, '703-655-3286', 'Gym');
INSERT INTO `User` (`UserId`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Address`, `City`, `State`, `ZipCode`, `Phone`, `SearchingFor`) VALUES (4, 'Connor', 'MacDonald', 'mcyd12@vt.edu', 'ponyboy', 'Male', '369 Progress Street', 'Blacksburg', 'VA', 24060, '757-254-8824', 'Gym');
# 4 records

