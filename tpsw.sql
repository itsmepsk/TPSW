-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2015 at 06:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpsw`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `registration_no` int(8) NOT NULL,
  `roll_no` text NOT NULL,
  `name` text NOT NULL,
  `branch` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `category` text NOT NULL,
  `email` text NOT NULL,
  `contact_no_1` text NOT NULL,
  `contact_no_2` text NOT NULL,
  `home_town` text NOT NULL,
  `home_address` text NOT NULL,
  `hostel_address` text NOT NULL,
  `sgpa_1` double NOT NULL,
  `sgpa_2` double NOT NULL,
  `sgpa_3` double NOT NULL,
  `sgpa_4` double NOT NULL,
  `sgpa_5` double NOT NULL,
  `sgpa_6` double NOT NULL,
  `sgpa_7` double NOT NULL,
  `sgpa_8` double NOT NULL,
  `cgpa` double NOT NULL,
  `supplies` int(11) NOT NULL,
  `active_supplies` int(11) NOT NULL,
  `aieee_air` int(11) NOT NULL,
  `gap_12_btech` int(11) NOT NULL,
  `12_board` text NOT NULL,
  `12_school` text NOT NULL,
  `12_passing_year` int(11) NOT NULL,
  `12_obtained_marks` int(11) NOT NULL,
  `12_total_marks` int(11) NOT NULL,
  `12_percent` double NOT NULL,
  `10_board` text NOT NULL,
  `10_school` text NOT NULL,
  `10_passing_year` int(11) NOT NULL,
  `10_obtained_marks` int(11) NOT NULL,
  `10_total_marks` int(11) NOT NULL,
  `10_percent` double NOT NULL,
  `disability` tinyint(1) NOT NULL,
  `disability_type` text NOT NULL,
  `disability_percent` double NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `power_left` double NOT NULL,
  `power_right` double NOT NULL,
  `scholastic_achievements` text NOT NULL,
  `academic_projects` text NOT NULL,
  `practical_training` text NOT NULL,
  `skills_capabilities` text NOT NULL,
  `position_responsibility` text NOT NULL,
  `extra_curriculars` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration_no` (`registration_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `registration_no`, `roll_no`, `name`, `branch`, `gender`, `dob`, `category`, `email`, `contact_no_1`, `contact_no_2`, `home_town`, `home_address`, `hostel_address`, `sgpa_1`, `sgpa_2`, `sgpa_3`, `sgpa_4`, `sgpa_5`, `sgpa_6`, `sgpa_7`, `sgpa_8`, `cgpa`, `supplies`, `active_supplies`, `aieee_air`, `gap_12_btech`, `12_board`, `12_school`, `12_passing_year`, `12_obtained_marks`, `12_total_marks`, `12_percent`, `10_board`, `10_school`, `10_passing_year`, `10_obtained_marks`, `10_total_marks`, `10_percent`, `disability`, `disability_type`, `disability_percent`, `father_name`, `mother_name`, `height`, `weight`, `power_left`, `power_right`, `scholastic_achievements`, `academic_projects`, `practical_training`, `skills_capabilities`, `position_responsibility`, `extra_curriculars`) VALUES
(1, 20120683, '12/EC/93', 'PRATHAMESH KAKADE', 'ELECTRONICS AND COMMUNICATION', 'MALE', '1994-09-18', 'GENERAL', 'itsmepsk@gmail.com', '8001815307', '8106110069', 'HYDERABAD', 'RAILWAY QUARTERS NO. A-88,KACHIGUDA,HYDERABAD,TELANGANA,\r\n500027', 'ROOM NO.335 HALL-1,NIT DURGAPUR,\r\nDURGAPUR,WEST BENGAL,713209', 8.48, 8.12, 8.32, 7.41, 7.61, 0, 0, 0, 8.01, 0, 0, 11103, 0, 'BIEAP', 'NARAYANA JUNIOR COLLEGE', 2012, 925, 1000, 92.5, 'CBSE', 'SHREE HANUMAN VYAYAM SHALA PUBLIC SCHOOL', 2010, 465, 500, 9.8, 0, '', 0, 'SHRIPAD KAKADE', 'CHHAYA KAKADE', 168, 53, 3, 2.5, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
