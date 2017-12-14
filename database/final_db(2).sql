-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2016 at 03:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `username`, `password`) VALUES
(1, 'AS', '1234'),
(2, 'UBG', '1234'),
(3, 'CBP', '1234'),
(4, 'CCG', '1234'),
(5, 'DCT', '1234'),
(6, 'DL', '1234'),
(7, 'CL', '1234'),
(8, 'PL', '1234'),
(9, 'SKG', '1234'),
(10, 'SPG', '1234'),
(11, 'SPL', '1234'),
(12, 'SDSG', '1234'),
(13, 'VES', '1234'),
(14, 'admin', 'admin'),
(15, 'SASE', '1234'),
(16, 'username', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` text,
  `contact_number` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `middlename`, `lastname`, `address`, `contact_number`, `email`, `account_id`) VALUES
(1, 'AdministratorF', 'AdministratorM', 'AdministratorL', 'Tabina, ZDS', '09123456789', 'choi@gmail.com', 14);

-- --------------------------------------------------------

--
-- Table structure for table `akan_account`
--

CREATE TABLE IF NOT EXISTS `akan_account` (
  `akan_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`akan_account_id`),
  KEY `applicant_id` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `akan_account`
--

INSERT INTO `akan_account` (`akan_account_id`, `username`, `password`, `applicant_id`) VALUES
(1, '111', '111', 1),
(2, '222', '222', 2),
(3, '333', '333', 3),
(4, '444', '444', 4),
(5, '555', '555', 5),
(6, '666', '666', 6),
(7, '777', '777', 7),
(8, '888', '888', 8),
(9, '999', '999', 9),
(10, '100', '100', 10),
(11, '101', '101', 11),
(12, '102', '102', 12),
(13, '1072684', '12345', 18);

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(20) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `home_address` text,
  `religion` text,
  `civil_status` varchar(20) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_contact` varchar(45) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_income` bigint(20) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `mother_contact` varchar(45) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_income` bigint(20) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `year_level` varchar(45) DEFAULT NULL,
  `current_cgpa` decimal(10,2) DEFAULT NULL,
  `passed_prev_units` int(11) DEFAULT NULL,
  `current_units` int(11) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`applicant_id`, `id_number`, `firstname`, `middlename`, `lastname`, `age`, `sex`, `date_of_birth`, `home_address`, `religion`, `civil_status`, `citizenship`, `contact_number`, `email_address`, `father_name`, `father_contact`, `father_occupation`, `father_income`, `mother_name`, `mother_contact`, `mother_occupation`, `mother_income`, `image`, `year_level`, `current_cgpa`, `passed_prev_units`, `current_units`) VALUES
(1, '201534321', 'Johana', 'Santos', 'Benito', 21, 'Female', '1993-12-01', 'Tabina, ZDS', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'choi@gmail.com', 'John Santos', '09123456789', 'Farmer', 24000, 'Ana Fill', '09123456789', 'Helper', 24000, NULL, '2nd year', 1.00, 18, 21),
(2, '201121223', 'Janimah', 'Sacar', 'Baunto', 21, 'Female', '1994-04-27', 'Marawi,City', 'Islam', 'Single', 'Filipino', '09123456789', 'janimah@gmail.com', 'John Santosa', '09123456789', 'Engineer', 500000, 'Ana Filla', '09123456789', 'Office Worker', 500000, 'mimay.jpg', '3rd year', 2.00, 15, 18),
(3, '201101000', 'Dojie', 'Canete', 'Candones', 22, 'Male', '1993-02-12', 'Pagadian, City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'dojie@gmail.com', 'John Santose', '09123456789', 'Teacher', 300000, 'Ana Fille', '09123456789', 'Teacher', 300000, 'baded.jpg', '2nd year', 1.75, 21, 18),
(4, '201201001', 'Leo', 'Obedoza', 'Noobs', 25, 'Male', '2016-01-14', 'Agusan Del Sur', 'Roman Catholic', 'Widower', 'African', '09123456789', 'leonoobs@bulok.com', 'Leonardo De Capricorn', '09123456789', 'Horseback Instructor', 1000000, 'Nancy de Castillo Buhangin', '09123456789', 'SK Kagawad', 1500000, 'rizal.jpg', '5th year', 2.50, 12, 18),
(5, '201201002', 'Alimar', 'Omandam', 'Omar', 24, 'Male', '2016-01-14', 'Pagadian, City', 'Islam', 'Widower', 'Latvian', '09123456789', 'omarbogo@lenoobs.com', 'Omar Ali Omar', '09123456789', 'Solder', 1000000, 'Narcilita Omar', '09123456789', 'Business Woman', 2000000, 'rizal.jpg', '5th year', 2.50, 12, 16),
(6, '201201003', 'Shairo', 'Lumasag', 'Baguio', 21, 'Male', '2016-01-14', 'Ozamis City', 'Roman Catholic', 'Widower', 'Slovakian', '09123456789', 'shairoNGANGA@subo.com', 'Ronaldo Mesi', '09123456789', 'Businessman', 1000000, 'Margie Baguio', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '3rd year', 1.25, 15, 20),
(7, '201201004', 'Goerge', 'Talolort', 'Bush', 23, 'Male', '2016-01-14', 'California City', 'Roman Catholic', 'Single', 'American', '09123456789', 'bush@gmail.com', 'George II Bush', '09123456789', 'Businessman', 1000000, 'Giorgina Bush', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '2nd year', 1.50, 21, 21),
(8, '201201005', 'Jay', 'Contreras', 'Talo', 22, 'Male', '2016-01-14', 'Taguig City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'jay@gmail.com', 'Jay Talo Sr.', '09123567989', 'Businessman', 1000000, 'Lyn Talo', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '2nd year', 2.00, 18, 18),
(9, '201201006', 'Michael ', 'Balintawak', 'Balintong', 20, 'Male', '2016-01-14', 'Pagadian City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'm@gmail.com', 'Michael Balintong', '09123456789', 'Businessman', 1000000, 'Mikalea Balintong', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '3rd year', 1.75, 21, 19),
(10, '201201007', 'Abdul', 'Samad', 'Kagid', 22, 'Male', '2016-01-14', 'Marawi City', 'Islam', 'Single', 'Filipino', '09123456789', 'abdul@gmail.com', 'Abdullah Kagid', '09123456789', 'Businessman', 1000000, 'Mamasita Kagid', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '2nd year', 1.00, 22, 20),
(11, '201201008', 'Kylie', 'Cruz', 'Santos', 21, 'Female', '2016-01-14', 'Pagadian City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'kylie@gmail.com', 'Kiko Santos', '09123456789', 'Businessman', 1000000, 'Mika Santos', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '3rd year', 1.50, 19, 19),
(12, '201201009', 'Steven', 'Bross', 'Bital', 21, 'Male', '2016-01-14', 'Tabina, ZDS', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'steven@gmail.com', 'Edwin Bital', '09123456789', 'Businessman', 1000000, 'Helen Bital', '09123456789', 'Business Woman', 1000000, 'rizal.jpg', '2nd year', 1.75, 21, 20),
(17, '201270598', 'Lester', 'Cabualan', 'Untal', 23, 'Male', '1992-10-01', 'Bayugan City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'lesterjadeu@facebook,com', 'Felix W. Untal', '09123456789', 'Deceased', 1000000, 'Dinah C. Untal', '09123456789', 'Housewife', 60000, 'rizal.jpg', '4th year', 2.00, 15, 18),
(18, '201316458', 'Alioding', 'Pangcatan', 'Indar', 20, 'Male', '1995-04-06', 'Wao, Lanao del Sur', 'Islam', 'Single', 'Filipino', '09123456789', 'alioding_indar@yahoo.com', 'Omar Ali', '09123456789', 'Farmer', 100000, 'Sapia Pangcatan', '09123456789', 'Vendor', 60000, 'rizal.jpg', '2nd year', 2.50, 9, 11),
(29, '201121224', 'Janimahs', 'Sacars', 'Bauntos', 21, 'Female', '1994-04-27', 'Marawi, City', 'Islam', 'Single', 'Filipino', '09123456789', 'janimah@gmail.com', 'John Santosa', '09123456789', 'Engineer', 500000, 'Ana Filla', '09123456789', 'Office Worker', 500000, 'mimay.jpg', '3rd year', 2.00, 15, 18),
(30, '201101001', 'Dojies', 'Canetes', 'Candoness', 22, 'Male', '1993-02-12', 'Pagadian, City', 'Christianity', 'Single', 'Filipino', '09123456789', 'dojie@gmail.com', 'John Santose', '09123456789', 'Teacher', 300000, 'Ana Fille', '09123456789', 'Teacher', 300000, 'baded.jpg', '2nd year', 1.75, 21, 18);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `sub_title` text,
  `body` text,
  `image` varchar(45) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`article_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `sub_title`, `body`, `image`, `date_created`, `staff_id`) VALUES
(4, 'Meeting', 'Sub-meeting', 'There will be a meeting regarding all the scholarships.', '', '2016-01-16 14:56:47', 2),
(5, 'Title', 'Sub-title', 'This is a message! ! ! ', 'baded.jpg', '2016-01-16 14:59:11', 2),
(6, 'Sample Title', 'Sample Sub-title', 'Sample Message', 'baded.jpg', '2016-01-16 15:11:37', 2),
(7, 'Example Title', 'Example Sub-title', 'Example Message', 'baded.jpg', '2016-01-16 15:12:54', 2),
(9, 'asd', 'asd', 'asdasd', 'baded.jpg', '2016-01-16 15:28:27', 2),
(10, 'Capstone Defense', 'Sub Defense', 'WATEVER!', 'rizal.jpg', '2016-01-20 07:09:48', 2);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `name`) VALUES
(1, 'College of Agriculture'),
(2, 'College of Business Administration and Accountancy'),
(3, 'College of Education'),
(4, 'College of Engineering'),
(5, 'College of Fisheries'),
(6, 'College of Forestry and Environmental Studies'),
(7, 'College of Health Sciences'),
(8, 'College of Hotel and Restaurant Management'),
(9, 'College of Information Technology'),
(10, 'King Faisal Center for Islamic, Arabic and Asian Studies'),
(11, 'College of Law'),
(12, 'College of Medicine'),
(13, 'College of Nattural Sciences and Mathematics'),
(14, 'College of Public Affairs'),
(15, 'College of Social Sciences and Humanities'),
(16, 'College of Sports, Physical Education and Recreation');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contactNo` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `scholarship_id` int(11) NOT NULL,
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `applicant_id` int(11) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `applicant_id` (`applicant_id`),
  KEY `college_id` (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `applicant_id`, `college_id`) VALUES
(1, 'BS Information Technology', 1, 9),
(2, 'BS Computer Science', 2, 9),
(3, 'BS Information Technology', 3, 9),
(4, 'BS Computer Science', 4, 9),
(5, 'BS Computer Science', 5, 9),
(6, 'BS Information Technology', 6, 9),
(7, 'BS Information Technology', 7, 9),
(8, 'BS Information Technology', 8, 9),
(9, 'BS Information Technology', 9, 9),
(10, 'BS Information Technology', 10, 9),
(11, 'BS Information Technology', 11, 9),
(12, 'BS Information Technology', 12, 9);

-- --------------------------------------------------------

--
-- Table structure for table `cut_off_score`
--

CREATE TABLE IF NOT EXISTS `cut_off_score` (
  `cut_off_id` int(11) NOT NULL AUTO_INCREMENT,
  `cut_off_score` varchar(45) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cut_off_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `cut_off_score`
--

INSERT INTO `cut_off_score` (`cut_off_id`, `cut_off_score`, `year`, `scholarship_id`) VALUES
(17, '91-100', 2015, 1),
(18, '81-90', 2015, 2),
(19, '71-80', 2015, 5),
(20, '61-70', 2015, 15),
(21, '91-100', 2015, 1),
(22, '81-90', 2015, 2),
(23, '71-80', 2015, 5),
(24, '61-70', 2015, 15),
(25, '91-100', 2015, 1),
(26, '81-90', 2015, 2),
(27, '71-80', 2015, 5),
(28, '61-70', 2015, 15),
(29, '91-100', 2015, 1),
(30, '81-90', 2015, 2),
(31, '71-80', 2015, 5),
(32, '61-70', 2015, 15);

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `privilege_id` int(11) NOT NULL AUTO_INCREMENT,
  `privileges` text NOT NULL,
  `scholarship_id` int(11) NOT NULL,
  PRIMARY KEY (`privilege_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=247 ;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`privilege_id`, `privileges`, `scholarship_id`) VALUES
(17, 'P600.00 monthly stipend', 16),
(18, 'Free dormitory accomodation', 16),
(19, 'Free tuition fee', 16),
(20, 'Transportation allowance (once a year not to exceed P1,000.00', 16),
(21, 'P600.00 book allowance per semester', 16),
(22, 'P600.00 monthly stipend', 5),
(23, 'Free dormitory accomodation', 5),
(24, 'Free tuition fee', 5),
(25, 'Transportation allowance (once a year not to exceed P1,000.00', 5),
(26, 'P600.00 book allowance per semester', 5),
(32, 'Award of Certificate of Commendation', 6),
(33, 'Free tuition fee', 6),
(34, 'Award of Certificate of Commendation', 7),
(35, 'P1,000.00 monthly stipend', 7),
(36, 'Free tuition fee', 7),
(37, 'Free dormitory accomodation', 7),
(38, 'Transportation allowance(once a year, not to exceed P1,000.00', 7),
(39, 'P1,000.00 book allowance per semester', 7),
(40, 'Free accident insurance coverage', 7),
(41, 'Additional monthly board allowance of P200.00 during the succeeding semester only', 7),
(42, 'Award of Certificate of Commendation', 8),
(43, 'P1,000.00 monthly stipend', 8),
(44, 'Free tuition fee', 8),
(45, 'Free dormitory accomodation', 8),
(46, 'Transportation allowance(once a year, not to exceed P1,000.00', 8),
(47, 'P1,000.00 book allowance per semester', 8),
(48, 'Free accident insurance coverage', 8),
(49, 'Additional monthly board allowance of P300.00 during the succeeding semester only', 8),
(50, 'P1,000.00 cash gift', 8),
(51, 'Resident/Senior Member - P450.00 monthly stipend', 10),
(52, 'Junior Member - P300.00 monthly stipend', 10),
(53, 'Apprentices - Free Tuition', 10),
(54, 'Free dormitory accomodation', 10),
(55, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 10),
(56, 'Resident/Senior Member - P450.00 monthly stipend', 11),
(57, 'Junior Member - P300.00 monthly stipend', 11),
(58, 'Apprentices - Free Tuition', 11),
(59, 'Free dormitory accomodation', 11),
(60, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 11),
(61, 'P700.00 monthly stipend', 15),
(62, 'Free tuition fee', 15),
(63, 'Free dormitory accomodation', 15),
(64, 'Transportation allowance(once a year, not to exceed P1,000.00', 15),
(65, 'P1,000.00 book allowance per semester', 15),
(66, 'P1,000.00 monthly allowance', 14),
(67, 'Free playing uniform', 14),
(68, 'Free dormitory accomodation', 14),
(69, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 14),
(70, 'P1,000.00 monthly stipend', 3),
(71, 'Free tuition fee', 3),
(72, 'Free dormitory accomodation', 3),
(73, 'Transportation allowance(once a year, not to exceed P1,000.00', 3),
(74, 'P1,000.00 book allowance per semester', 3),
(75, 'Free accident insurance coverage', 3),
(185, 'P1,000.00 monthly stipend', 2),
(186, 'Free tuition fee', 2),
(187, 'Free dormitory accomodation', 2),
(188, 'Transportation allowance(once a year, not to exceed P1,000.00', 2),
(189, 'P1,000.00 book allowance per semester', 2),
(190, 'Free accident insurance coverage', 2),
(191, 'P1,000.00 monthly stipend', 1),
(192, 'Free tuition fee', 1),
(193, 'Free dormitory accomodation', 1),
(194, 'Transportation allowance(once a year, not to exceed P1,000.00', 1),
(195, 'P1,000.00 book allowance per semester', 1),
(196, 'A semestral laboratory allowance of P500.00', 1),
(197, 'Free accident insurance coverage', 1),
(204, 'Resident/Senior Member - P450.00 monthly stipend', 9),
(205, 'Junior Member - P300.00 monthly stipend', 9),
(206, 'Apprentices - Free Tuition', 9),
(207, 'Free dormitory accomodation', 9),
(208, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 9),
(229, 'Resident/Senior Member - P450.00 monthly stipend', 13),
(230, 'Junior Member - P300.00 monthly stipend', 13),
(231, 'Apprentices - Free Tuition', 13),
(232, 'Free dormitory accomodation', 13),
(233, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 13),
(239, 'Junior Member - P300.00 monthly stipend', 12),
(240, 'Apprentices - Free Tuition', 12),
(241, 'Free dormitory accomodation', 12),
(242, 'May also enjoy Academic Scholarship provided that they \n    shall receive only an augmentation allowance not to exceed P100.00 per month in addition to their \n    privileges as scholar', 12),
(243, 'sample privilege', 12),
(244, 'privilege1', 28),
(245, 'privilege2', 28),
(246, 'privilege3', 28);

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE IF NOT EXISTS `recommend` (
  `applicant_id` int(11) NOT NULL,
  `id_number` varchar(20) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `home_address` text,
  `religion` text,
  `civil_status` varchar(20) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  `email_address` varchar(45) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `father_contact` varchar(45) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_income` bigint(20) DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `mother_contact` varchar(45) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_income` varchar(100) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `year_level` varchar(45) DEFAULT NULL,
  `current_cgpa` decimal(10,2) DEFAULT NULL,
  `passed_prev_units` int(11) DEFAULT NULL,
  `current_units` int(11) DEFAULT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend`
--

INSERT INTO `recommend` (`applicant_id`, `id_number`, `firstname`, `middlename`, `lastname`, `age`, `sex`, `date_of_birth`, `home_address`, `religion`, `civil_status`, `citizenship`, `contact_number`, `email_address`, `father_name`, `father_contact`, `father_occupation`, `father_income`, `mother_name`, `mother_contact`, `mother_occupation`, `mother_income`, `image`, `year_level`, `current_cgpa`, `passed_prev_units`, `current_units`) VALUES
(3, '201101000', 'Dojie', 'Canete', 'Candones', 22, 'Male', '1993-02-12', 'Pagadian, City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'dojie@gmail.com', 'John Santose', '09123456789', 'Teacher', 300000, 'Ana Fille', '09123456789', 'Teacher', '300000', 'baded.jpg', '2nd year', 1.75, 21, 18),
(6, '201201003', 'Shairo', 'Lumasag', 'Baguio', 21, 'Male', '2016-01-14', 'Ozamis City', 'Roman Catholic', 'Widower', 'Slovakian', '09123456789', 'shairoNGANGA@subo.com', 'Ronaldo Mesi', '09123456789', 'Businessman', 1000000, 'Margie Baguio', '09123456789', 'Business Woman', '1000000', 'rizal.jpg', '3rd year', 1.25, 15, 20),
(8, '201201005', 'Jay', 'Contreras', 'Talo', 22, 'Male', '2016-01-14', 'Taguig City', 'Roman Catholic', 'Single', 'Filipino', '09123456789', 'jay@gmail.com', 'Jay Talo Sr.', '09123567989', 'Businessman', 1000000, 'Lyn Talo', '09123456789', 'Business Woman', '1000000', 'rizal.jpg', '2nd year', 2.00, 18, 18),
(10, '201201007', 'Abdul', 'Samad', 'Kagid', 22, 'Male', '2016-01-14', 'Marawi City', 'Islam', 'Single', 'Filipino', '09123456789', 'abdul@gmail.com', 'Abdullah Kagid', '09123456789', 'Businessman', 1000000, 'Mamasita Kagid', '09123456789', 'Business Woman', '1000000', 'rizal.jpg', '2nd year', 1.00, 22, 20);

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `requirement_id` int(11) NOT NULL AUTO_INCREMENT,
  `requirements` text NOT NULL,
  `scholarship_id` int(11) NOT NULL,
  PRIMARY KEY (`requirement_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`requirement_id`, `requirements`, `scholarship_id`) VALUES
(4, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 12),
(5, 'Must carry atleast 12 units', 12),
(6, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 13),
(7, 'Must carry atleast 12 units', 13),
(8, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 16),
(9, 'Must carry atleast 18 units', 16),
(10, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 5),
(11, 'Must carry atleast 18 units', 5),
(12, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 9),
(13, 'Must carry atleast 12 units', 9),
(14, 'Grade Maintenace: CGPA = 1.75 or better', 6),
(15, 'Semestral Average of 1.25 or better', 7),
(16, 'Atleast 18 credit units within the prescribed curriculum', 7),
(17, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 7),
(18, 'Semestral Average of 1.0', 8),
(19, 'Atleast 18 credit units within the prescribed curriculum', 8),
(20, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 8),
(21, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 10),
(22, 'Must carry atleast 12 units', 10),
(23, 'Grade Maintenance: CGPA = 3.0 or better (with one failure in 3 unit course allowed)', 11),
(24, 'Must carry atleast 12 units', 11),
(25, 'Grade Maintenance: CGPA = 2.75 or better (no failing grade)', 15),
(26, 'Must carry atleast 18 units', 15),
(27, 'Must be a Muslim student who pass the SASE and who were not awarder Science or Academic Scholarship', 15),
(28, 'Must have attended and successfully completed the Summer College Bound Program (CBP)', 15),
(29, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 15),
(30, 'Must carry atleast 12 units', 14),
(31, 'Must be below 25 years of age', 14),
(32, 'Beginner to elite level of skills', 14),
(33, 'Willing to train and listen', 14),
(34, 'With attitude', 14),
(35, 'Grade Maintenance: CGPA = 2.0 or better (no failing grade)', 3),
(36, 'Must carry atleast 18 units per semester. All units must be within the prescribed curriculum', 3),
(37, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 3),
(38, 'Grade Maintenance: CGPA = 2.0 or better (no failing grade)', 1),
(39, 'Must carry atleast 18 units per semester. All units must be within the prescribed curriculum', 1),
(40, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 1),
(56, 'Grade Maintenance: CGPA = 2.0 or better (no failing grade)', 2),
(57, 'Must carry atleast 18 units per semester. All units must be within the prescribed curriculum', 2),
(58, 'Not allowed to shift to another program of study, except when the shifting is done within the same college', 2),
(66, 'requirement1', 28),
(67, 'requirement2', 28);

-- --------------------------------------------------------

--
-- Table structure for table `sase_passers_list`
--

CREATE TABLE IF NOT EXISTS `sase_passers_list` (
  `sase_passers_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `xnum` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `school` text,
  `address` text,
  `religion` varchar(45) DEFAULT NULL,
  `tribe` varchar(45) DEFAULT NULL,
  `year_passed` varchar(5) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`sase_passers_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sase_passers_list`
--

INSERT INTO `sase_passers_list` (`sase_passers_list_id`, `xnum`, `firstname`, `middlename`, `lastname`, `school`, `address`, `religion`, `tribe`, `year_passed`, `score`) VALUES
(1, '201501', 'Joel ', 'Abad', 'Labador', 'Tabina, National High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 89),
(2, '201502', 'Romeo', 'Renedo', 'Ligutom', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 91),
(3, '201503', 'Faye', 'Lobet', 'Eballena', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 70),
(4, '201504', 'Choi', 'Logronio', 'Tenefrancia', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 90),
(5, '201505', 'Ayap ', 'Anuar', 'Guro', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 80),
(6, '201506', 'John', 'Felix', 'Zamora', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 89),
(7, '201507', 'Arthur', 'Toro', 'Untal', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 88),
(8, '201508', 'John', 'Melchor', 'Aquino', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 92),
(9, '201509', 'Gilbert', 'Gibo', 'Picasales', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 100),
(10, '201510', 'Hildo', 'Palabo', 'Samijon', 'Saint Ambrose High School', 'Tabina, ZDS', 'Roman Catholic', 'Cebuano', '2015', 83);

-- --------------------------------------------------------

--
-- Table structure for table `sase_scholars_list`
--

CREATE TABLE IF NOT EXISTS `sase_scholars_list` (
  `sase_scholars_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `sase_passers_list_id` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'Pending',
  PRIMARY KEY (`sase_scholars_list_id`),
  KEY `sase_passers_list_id` (`sase_passers_list_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=244 ;

--
-- Dumping data for table `sase_scholars_list`
--

INSERT INTO `sase_scholars_list` (`sase_scholars_list_id`, `sase_passers_list_id`, `scholarship_id`, `status`) VALUES
(234, 1, 2, 'Approve'),
(235, 2, 1, 'Approve'),
(236, 3, 15, 'Pending'),
(237, 4, 2, 'Pending'),
(238, 5, 5, 'Pending'),
(239, 6, 2, 'Pending'),
(240, 7, 2, 'Pending'),
(241, 8, 1, 'Pending'),
(242, 9, 1, 'Pending'),
(243, 10, 2, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE IF NOT EXISTS `scholarship` (
  `scholarship_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `slots` int(11) NOT NULL,
  `date_of_effectivity` varchar(45) NOT NULL,
  PRIMARY KEY (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scholarship_id`, `name`, `details`, `slots`, `date_of_effectivity`) VALUES
(1, 'Science Scholarship', 'Awarded to the top examinees in the MSU System Admission and Scholarship Exam(SASE) who will enrol in the pure and applied sciences in the Colleges of Agriculture, Engineering, Fisheries, Forestry, Natural Sciences and Mathematics, Information Technology and Health Science including Eco-Tourism, and some courses in Education', 50, 'Yearly'),
(2, 'Academic Scholarship', 'Awarded to the next top examinees in the MSU SASE who will enrol in the non-priority courses.', 49, 'Yearly'),
(3, 'Entrance Scholarship', 'Awarded to high school valedictorian, salutatorians, and other honor graduates as determined by the scholarship Committee and as certified by their school principals.', 48, 'Yearly'),
(4, 'Tuition Privilege Scholarship', 'Awarded to student who passed all his/her subjects during the previuos semester; provided that he/she was carrying at least eighteen units or as prescribed in the curriculum that he/she is following.', 47, 'Semestral'),
(5, 'Cultural Community Grant (CCG)', 'The CCG is awarded to students who belong to the cultural communities of the MINSUPALA area and who passed the SASE but are financially handicapped to study in the University as determined by the screening committee.', 46, 'Yearly'),
(6, 'Deans Honors List', 'Scholars who obtain a cumulative grade point average (CGPA) of 1.75 or better during the previous semester.', 45, 'Semestral'),
(7, 'Chancellors List', 'Scholars who obtain a grade point average (GPA) of 1.25 or better during the previous semester.', 44, 'Semestral'),
(8, 'Presidents List', 'Scholars who obtain a grade point average (GPA) of 1.00 during the previous semester.', 43, 'Semestral'),
(9, 'Darangen Cultural Troupe Grants', 'Students with special skills and talents who, after screening, became regular members of talent, performing, and athletic groups are awarded Study Grants.', 42, 'Semestral'),
(10, 'Sining Kambayoka Grant', 'Students with special skills and talents who, after screening, became regular members of talent, performing, and athletic groups are awarded Study Grants.', 41, 'Semestral'),
(11, 'Sining Pananadem Grant', 'Students with special skills and talents who, after screening, became regular members of talent, performing, and athletic groups are awarded Study Grants.', 40, 'Semestral'),
(12, 'University Band Grants', 'University Description', 40, 'Yearly'),
(13, 'University Combo Grant', 'Students with special skills and talents who, after screening, became regular members of talent, performing, and athletic groups are awarded Study Grants.', 38, 'Semestral'),
(14, 'Sports Development Study Grant', 'Students with special skills and talents who, after screening, became regular members of talent, performing, and athletic groups are awarded Study Grants.', 37, 'Semestral'),
(15, 'Special Muslim Grant', 'Awarded to the next top Muslim examinees in the SASE who attended and passed the summer CBP.', 36, 'Yearly'),
(16, 'College Bound Program', 'The CBP is awarded to the top participants of the annual Summer College Bound Program who belong to the cultural communities of the MINSUPALA area.', 35, 'Yearly'),
(17, 'CHED Student Financial Assistance Program (STUFAP)', 'Description', 34, 'Semestral'),
(18, 'Department of Science and Technology', 'Description', 33, 'Semestral'),
(19, 'Expanded Students Grants-in-Aid Program for Poverty Alleviation (ESGP-PA)', 'Description', 32, 'Semestral'),
(20, 'Sajahatra Bangsamoro Study Grant', 'Description', 31, 'Semestral'),
(21, 'CHED Iskolar ng Bayan', 'Description', 30, 'Semestral'),
(28, 'Sample Name', 'Sample Description', 5, 'Semestral');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_applicant`
--

CREATE TABLE IF NOT EXISTS `scholarship_applicant` (
  `scholarship_applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `approval_status` varchar(10) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `academic_year` varchar(45) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`scholarship_applicant_id`),
  KEY `scholarship_id` (`scholarship_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `scholarship_applicant`
--

INSERT INTO `scholarship_applicant` (`scholarship_applicant_id`, `approval_status`, `applicant_id`, `academic_year`, `scholarship_id`, `staff_id`) VALUES
(7, 'Pending', 3, '2015-2016 1st Semester', 6, 6),
(9, 'Approve', 4, '2015-2016 1st Semester', 12, 2),
(10, 'Pending', 3, '2015-2016 1st Semester', 12, NULL),
(11, 'Pending', 5, '2015-2016 1st Semester', 12, NULL),
(12, 'Approve', 6, '2015-2016 1st Semester', 12, 2),
(13, 'Pending', 1, '2015-2016 1st Semester', 9, NULL),
(14, 'Pending', 7, '2015-2016 1st Semester', 12, NULL),
(15, 'Pending', 8, '2015-2016 1st Semester', 12, NULL),
(16, 'Pending', 9, '2015-2016 1st Semester', 12, NULL),
(17, 'Pending', 10, '2015-2016 1st Semester', 12, NULL),
(18, 'Pending', 11, '2015-2016 1st Semester', 12, NULL),
(19, 'Pending', 12, '2015-2016 1st Semester', 12, NULL),
(20, 'Pending', 18, '2015-2016 1st Semester', 14, NULL),
(21, 'Pending', 18, '2015-2016 1st Semester', 9, NULL),
(22, 'Pending', 18, '2015-2016 1st Semester', 10, NULL),
(23, 'Pending', 18, '2015-2016 1st Semester', 11, NULL),
(24, 'Pending', 18, '2015-2016 1st Semester', 12, NULL),
(25, 'Pending', 18, '2015-2016 1st Semester', 13, NULL),
(26, 'Pending', 10, '2015-2016 1st Semester', 11, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_tags`
--

CREATE TABLE IF NOT EXISTS `scholarship_tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_column` varchar(45) DEFAULT NULL,
  `tag_value` varchar(45) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `scholarship_tags`
--

INSERT INTO `scholarship_tags` (`tag_id`, `tag_column`, `tag_value`, `scholarship_id`, `percentage`) VALUES
(27, 'skill', 'Dancing', 9, NULL),
(28, 'skill', 'Dancing', 10, NULL),
(29, 'skill', 'Dancing', 11, NULL),
(34, 'current_cgpa', '1.00', 8, NULL),
(35, 'current_cgpa', '1.25', 7, NULL),
(36, 'current_cgpa', '1.75', 6, NULL),
(48, 'skill', 'Singing', 13, NULL),
(49, 'skill', 'Playing Instruments', 13, NULL),
(53, 'age', '22', 12, 20),
(54, 'sex', 'Male', 12, 30);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `score_id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `sase_passers_list_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`score_id`),
  KEY `subject_id` (`subject_id`),
  KEY `sase_passers_list_id` (`sase_passers_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill` varchar(45) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `applicant_id` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill`, `applicant_id`) VALUES
(1, 'Dancing', 1),
(2, 'Singing', 2),
(3, 'Playing Instruments', 3),
(4, 'Playing Instruments', 4),
(5, 'Playing Instruments', 5),
(6, 'Playing Instruments', 6),
(7, 'Playing Instruments', 7),
(8, 'Playing Instruments', 8),
(9, 'Playing Instruments', 9),
(10, 'Playing Instruments', 10),
(11, 'Playing Instruments', 11),
(12, 'Playing Instruments', 12),
(17, 'Playing Instruments\r\n', 29),
(18, 'Dancing', 30);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) DEFAULT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` text,
  `contact_number` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `account_id` (`account_id`),
  KEY `admin_id` (`admin_id`),
  KEY `scholarship_id` (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `middlename`, `lastname`, `address`, `contact_number`, `email`, `account_id`, `admin_id`, `scholarship_id`) VALUES
(1, 'AcademicF', 'AcademicM', 'AcademicL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 1, 1, 2),
(2, 'BandF', 'BandM', 'BandL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 2, 1, 12),
(3, 'CollegeBoundF', 'CollegeBoundM', 'CollegeBoundL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 3, 1, 16),
(4, 'CulturalCommunityF', 'CulturalCommunityM', 'CulturalCommunityL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 4, 1, 5),
(5, 'DarangenF', 'DarangenM', 'DarangenL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 5, 1, 9),
(6, 'DeanF', 'DeanM', 'DeanL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 6, 1, 6),
(7, 'ChancellorF', 'ChancellorM', 'ChancellorL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 7, 1, 7),
(8, 'PresidentF', 'PresidentM', 'PresidentL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 8, 1, 8),
(9, 'SiningKambayokaF', 'SiningKambayokaM', 'SiningKambayokaL', 'Tabina, ZDS', '09123456789', 'baded@gmail.com', 9, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` text,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'Logic'),
(2, 'Math'),
(3, 'Science'),
(4, 'Aptitude');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`);

--
-- Constraints for table `akan_account`
--
ALTER TABLE `akan_account`
  ADD CONSTRAINT `akan_account_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`);

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`college_id`) REFERENCES `college` (`college_id`);

--
-- Constraints for table `cut_off_score`
--
ALTER TABLE `cut_off_score`
  ADD CONSTRAINT `cut_off_score_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `privilege`
--
ALTER TABLE `privilege`
  ADD CONSTRAINT `privilege_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `sase_scholars_list`
--
ALTER TABLE `sase_scholars_list`
  ADD CONSTRAINT `sase_scholars_list_ibfk_1` FOREIGN KEY (`sase_passers_list_id`) REFERENCES `sase_passers_list` (`sase_passers_list_id`),
  ADD CONSTRAINT `sase_scholars_list_ibfk_2` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `scholarship_applicant`
--
ALTER TABLE `scholarship_applicant`
  ADD CONSTRAINT `scholarship_applicant_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`),
  ADD CONSTRAINT `scholarship_applicant_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Constraints for table `scholarship_tags`
--
ALTER TABLE `scholarship_tags`
  ADD CONSTRAINT `scholarship_tags_ibfk_1` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`),
  ADD CONSTRAINT `score_ibfk_2` FOREIGN KEY (`sase_passers_list_id`) REFERENCES `sase_passers_list` (`sase_passers_list_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `applicant_id` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`account_id`),
  ADD CONSTRAINT `staff_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `staff_ibfk_3` FOREIGN KEY (`scholarship_id`) REFERENCES `scholarship` (`scholarship_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
