-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 01:12 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `example` ()  BEGIN 
SELECT * FROM police;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `NEW` (IN `Officer_Id` VARCHAR(20), IN `Station_Id` INT(20), IN `Station_Name` VARCHAR(20), IN `Address` VARCHAR(50), IN `City` VARCHAR(20), IN `Email` VARCHAR(20), IN `Mobile` BIGINT(50), IN `name` VARCHAR(20), IN `password` VARCHAR(20))  BEGIN
         INSERT INTO police
         (
          Officer_Id	,	
          Station_Id           , 
           Station_Name                     , 
           Address                    , 
           City                      , 
           Email                     , 
           Mobile                   ,
           name                   , 
           password      
         )
         
    VALUES 
         ( 
	  Officer_Id,
          Station_Id           , 
           Station_Name                     , 
           Address                    , 
           City                      , 
           Email                     , 
           Mobile                   ,
           name                   , 
           password                     
         ) ;
       END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `Admin_Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Admin_Id`, `name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'new', 'new'),
(3, 'skanda', 'skanda');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `National_id` int(12) NOT NULL,
  `File_number` varchar(14) NOT NULL,
  `Dateoftrial` date NOT NULL,
  `Sentence` varchar(14) NOT NULL,
  `Location` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`National_id`, `File_number`, `Dateoftrial`, `Sentence`, `Location`) VALUES
(101, '2', '2016-12-18', '15 Above', 'Bengaluru Court'),
(102, '3', '2017-01-25', '15 Above', 'Bengaluru Court'),
(103, '4', '2017-01-13', '1 to 3 Months', 'Hassan Court'),
(104, '5', '2017-01-20', '1year', 'Mandya Court');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `Officer_Id` varchar(20) NOT NULL,
  `Station_Id` int(20) NOT NULL,
  `Telephone` bigint(50) NOT NULL,
  `From_Prison` varchar(20) NOT NULL,
  `To_Prison` varchar(20) NOT NULL,
  `Dateoftransfer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`Officer_Id`, `Station_Id`, `Telephone`, `From_Prison`, `To_Prison`, `Dateoftransfer`) VALUES
('10', 1, 8878954526, 'MYSURU', 'BENGALURU', '2017-11-18'),
('11', 1, 9954781023, 'BENGALURU', 'MANDYA', '2017-08-20'),
('22', 2, 9632451025, 'MANDYA', 'MADIKERI', '2017-11-15'),
('23', 2, 8014556972, 'MYSURU', 'HASSAN', '2017-11-20'),
('12', 1, 9574102365, 'MYSURU', 'MANGALURU', '2017-11-14'),
('24', 2, 805755628, 'MYSURU', 'MANDYA', '2017-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `Officer_Id` varchar(20) NOT NULL DEFAULT '0',
  `Station_Id` int(20) NOT NULL DEFAULT '0',
  `Station_Name` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` bigint(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`Officer_Id`, `Station_Id`, `Station_Name`, `Address`, `City`, `Email`, `Mobile`, `name`, `password`) VALUES
('10', 1, 'Station 1', 'Vijaynagar', 'Mysuru', 'police@police.com', 8878954526, 'Johnny', 'police'),
('11', 1, 'Station 1', 'Kalasipalya', 'Bengaluru', 'police@police.com', 9954781023, 'Anthony', 'police'),
('12', 1, 'Station 1', 'Kanakdasnagar', 'Mysuru', 'police@police.com', 9574102365, 'Ragini', 'police'),
('13', 1, 'Station 1', 'Kuvempunagar', 'Mysuru', 'police@police.com', 8450221459, 'Jaggesh', 'police'),
('14', 1, 'Station 1', 'Nazarbad', 'Mysuru', 'police@police.com', 7845612548, 'Malashree', 'police'),
('20', 2, 'Station 2', 'Gandhibazar', 'Madikeri', 'police@police.com', 9954621147, 'Pushkar Naik', 'police'),
('21', 2, 'Station 2', 'Padmanabhnagar', 'Hassan', 'police@police.com', 8867412012, 'Kiran Bedi', 'police'),
('22', 2, 'Station 2', 'BBstreet', 'Mandya', 'police@police.com', 9632451025, 'Jagan', 'police'),
('23', 2, 'Station 2', 'Urs road', 'Mysuru', 'police@police.com', 8014556972, 'Shruthi', 'police'),
('24', 2, 'Station 2', 'Bamboo bazar', 'Mysuru', 'police@police.com', 8057556286, 'Chandan', 'police');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL DEFAULT '0',
  `Full_Name` varchar(23) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `Marital` varchar(20) NOT NULL,
  `Offence` varchar(90) NOT NULL,
  `Date_in` date NOT NULL,
  `File_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Full_Name`, `DOB`, `Address`, `County`, `Gender`, `Education`, `Marital`, `Offence`, `Date_in`, `File_num`) VALUES
(100, 'John', '1969-09-19', 'Vijaynagar', 'MYSURU', 'Male', 'Diploma', 'Married', 'Robbery', '2016-12-10', '1'),
(101, 'Johnny', '1972-08-27', 'Hoysala circle', 'BENGALURU', 'Male', 'Diploma', 'Single', 'Killing', '2016-12-16', '2'),
(102, 'Seeta', '1968-03-25', 'Kalasipalya', 'BENGALURU', 'Female', 'Never', 'Divorced', 'Killing', '2017-01-23', '3'),
(103, 'Shama', '1975-09-04', 'Hampi circle', 'HASSAN', 'Male', 'Bachelor Degree', 'Married', 'Other', '2017-01-09', '4'),
(104, 'Geeta', '1963-07-31', 'Kanakadasnagar', 'MANDYA', 'Female', 'Pre University', 'Married', 'Forgery', '2017-01-17', '5'),
(105, 'Latif', '1973-01-09', 'Akkihebbal', 'BENGALURU', 'Male', 'Bachelor Degree', 'Married', 'Other', '2017-02-09', '6'),
(106, 'Kunal', '1980-06-26', 'Dandupalya', 'BENGALURU', 'Male', 'Pre University', 'Single', 'Raping', '2017-02-18', '7'),
(107, 'Rita', '1984-04-16', 'Coorg', 'MADIKERI', 'Female', 'Bachelor Degree', 'Divorced', 'Killing', '2017-02-25', '8'),
(109, 'Siddarth', '1979-08-27', 'Ananthnagar', 'MANGALURU', 'Male', 'Never', 'Married', 'Robbery', '2017-03-07', '9'),
(110, 'Manushi', '1985-10-25', 'Nazarbad', 'MYSURU', 'Female', 'Bachelor Degree', 'Single', 'Other', '2017-03-18', '10'),
(111, 'Kumar', '1987-11-29', 'Padmanabhnagar', 'HASSAN', 'Male', 'Diploma', 'Single', 'Forgery', '2017-04-24', '11'),
(112, 'Diana', '1978-12-05', 'Gowrigadde', 'MANDYA', 'Female', 'Pre University', 'Divorced', 'Robbery', '2017-04-28', '12'),
(113, 'Amar', '1968-04-30', 'Ashokpuram', 'MYSURU', 'Male', 'Bachelor Degree', 'Divorced', 'Raping', '2017-05-10', '13'),
(114, 'Anushree', '1986-06-26', 'Katriguppe', 'BENGALURU', 'Female', 'Bachelor Degree', 'Married', 'Other', '2017-05-26', '14'),
(115, 'Krishna', '1985-05-29', 'Kushalnagar', 'MADIKERI', 'Female', 'Bachelor Degree', 'Single', 'Killing', '2017-05-30', '15');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `registration` FOR EACH ROW BEGIN
INSERT INTO registration_pol 
VALUES (new.id,new.Full_Name,new.DOB,new.Address,new.County,new.Gender,new.Education,new.Marital,new.Offence,new.Date_in,new.File_num );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `registration_bkp`
--

CREATE TABLE `registration_bkp` (
  `id` int(10) NOT NULL DEFAULT '0',
  `Full_Name` varchar(23) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(20) NOT NULL,
  `County` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(20) NOT NULL,
  `Marital` varchar(20) NOT NULL,
  `Offence` varchar(90) NOT NULL,
  `Date_in` date NOT NULL,
  `File_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_bkp`
--

INSERT INTO `registration_bkp` (`id`, `Full_Name`, `DOB`, `Address`, `County`, `Gender`, `Education`, `Marital`, `Offence`, `Date_in`, `File_num`) VALUES
(100, 'John', '1969-09-19', 'Vijaynagar', 'MYSURU', 'Male', 'Diploma', 'Married', 'Robbery', '2016-12-10', '1'),
(101, 'Johnny', '1972-08-27', 'Hoysala circle', 'BENGALURU', 'Male', 'Diploma', 'Single', 'Killing', '2016-12-16', '2'),
(102, 'Seeta', '1968-03-25', 'Kalasipalya', 'BENGALURU', 'Female', 'Never', 'Divorced', 'Killing', '2017-01-23', '3'),
(103, 'Shama', '1975-09-04', 'Hampi circle', 'HASSAN', 'Male', 'Bachelor Degree', 'Married', 'Other', '2017-01-09', '4'),
(104, 'Geeta', '1963-07-31', 'Kanakadasnagar', 'MANDYA', 'Female', 'Pre University', 'Married', 'Forgery', '2017-01-17', '5'),
(105, 'Latif', '1973-01-09', 'Akkihebbal', 'BENGALURU', 'Male', 'Bachelor Degree', 'Married', 'Other', '2017-02-09', '6'),
(106, 'Kunal', '1980-06-26', 'Dandupalya', 'BENGALURU', 'Male', 'Pre University', 'Single', 'Raping', '2017-02-18', '7'),
(107, 'Rita', '1984-04-16', 'Coorg', 'MADIKERI', 'Female', 'Bachelor Degree', 'Divorced', 'Killing', '2017-02-25', '8'),
(109, 'Siddarth', '1979-08-27', 'Ananthnagar', 'MANGALURU', 'Male', 'Never', 'Married', 'Robbery', '2017-03-07', '9'),
(110, 'Manushi', '1985-10-25', 'Nazarbad', 'MYSURU', 'Female', 'Bachelor Degree', 'Single', 'Other', '2017-03-18', '10'),
(111, 'Kumar', '1987-11-29', 'Padmanabhnagar', 'HASSAN', 'Male', 'Diploma', 'Single', 'Forgery', '2017-04-24', '11'),
(112, 'Diana', '1978-12-05', 'Gowrigadde', 'MANDYA', 'Female', 'Pre University', 'Divorced', 'Robbery', '2017-04-28', '12'),
(113, 'Amar', '1968-04-30', 'Ashokpuram', 'MYSURU', 'Male', 'Bachelor Degree', 'Divorced', 'Raping', '2017-05-10', '13'),
(114, 'Anushree', '1986-06-26', 'Katriguppe', 'BENGALURU', 'Female', 'Bachelor Degree', 'Married', 'Other', '2017-05-26', '14'),
(115, 'Krishna', '1985-05-29', 'Kushalnagar', 'MADIKERI', 'Female', 'Bachelor Degree', 'Single', 'Killing', '2017-05-30', '15'),
(116, 'Laxman', '1983-04-17', 'NR mohalla', 'MADIKERI', 'Male', 'Pre University', 'Married', 'Robbery', '2017-06-12', '16');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `National_id` int(16) NOT NULL,
  `File_num` varchar(16) NOT NULL,
  `From_prison` varchar(17) NOT NULL,
  `To_prison` varchar(18) NOT NULL,
  `Dateoftransfer` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`National_id`, `File_num`, `From_prison`, `To_prison`, `Dateoftransfer`) VALUES
(101, '2', 'BENGALURU', 'MADIKERI', '2017-01-02'),
(102, '3', 'BENGALURU', 'MYSURU', '2017-01-24'),
(103, '4', 'HASSAN', 'MANDYA', '2017-01-16'),
(104, '5', 'MANDYA', 'BENGALURU', '2017-01-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD KEY `National_id` (`National_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD KEY `Officer_Id` (`Officer_Id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`Officer_Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `File_num` (`File_num`);

--
-- Indexes for table `registration_bkp`
--
ALTER TABLE `registration_bkp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `File_num` (`File_num`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD KEY `National_id` (`National_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `court`
--
ALTER TABLE `court`
  ADD CONSTRAINT `court_ibfk_1` FOREIGN KEY (`National_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `officer`
--
ALTER TABLE `officer`
  ADD CONSTRAINT `officer_ibfk_1` FOREIGN KEY (`Officer_Id`) REFERENCES `police` (`Officer_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`National_id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
