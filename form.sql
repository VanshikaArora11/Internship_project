-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `enrollment_no` varchar(20) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zip` int(12) NOT NULL,
  `mobile_number` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(15) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `interest` varchar(25) NOT NULL,
  `languagesgoodat` varchar(10) NOT NULL,
  `placement` tinyint(1) NOT NULL,
  `company_you_get_placed` varchar(20) NOT NULL,
  `where_company_is_located` varchar(20) NOT NULL,
  `further_studies` tinyint(1) NOT NULL,
  `you_going_to_study_for` varchar(20) NOT NULL,
  `name_of_clg_forfurtherstudies` varchar(20) NOT NULL,
  `Preferrable_Company` varchar(15) NOT NULL,
  `Orientation_within_your_department` varchar(10) NOT NULL,
  `Did_you_receive_a_current_job_description_when_you_were_hired` tinyint(1) NOT NULL,
  `training` tinyint(1) NOT NULL,
  `receive_any_info` tinyint(1) NOT NULL,
  `recommend_employment_in_your_department_to_a_friend_or_colleague` tinyint(1) NOT NULL,
  `experience_by_getting_a_placement_through_SUAS` text NOT NULL,
  `LinkedIn_Profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`enrollment_no`, `firstname`, `lastname`, `email`, `address`, `city`, `state`, `zip`, `mobile_number`, `gender`, `dob`, `course`, `branch`, `interest`, `languagesgoodat`, `placement`, `company_you_get_placed`, `where_company_is_located`, `further_studies`, `you_going_to_study_for`, `name_of_clg_forfurtherstudies`, `Preferrable_Company`, `Orientation_within_your_department`, `Did_you_receive_a_current_job_description_when_you_were_hired`, `training`, `receive_any_info`, `recommend_employment_in_your_department_to_a_friend_or_colleague`, `experience_by_getting_a_placement_through_SUAS`, `LinkedIn_Profile`) VALUES
('2021BTCS001', 'VANSHIKA', 'ARORA', 'vanshika112003@gmail.com', '62 GREATER TIRUPATI COLONY INDORE', 'Indore', 'Madhya Pradesh', 452001, 7000959698, 'female', '2003-11-11', 'B.Tech', 'CSIT', 'software developing', 'html/css', 0, 'MICROSOFT', 'BANGLORE', 0, '', '', 'MICROSOFT', 'Excellent', 0, 0, 0, 0, 'great', ' abc'),
('2021BTCS021', 'Devisha', 'Solanki', 'devishaji99@gmail.com', 'vigyan nagar', 'Indore', 'MP', 452012, 9893209767, 'female', '2004-01-27', 'B.Tech', 'CSIT', 'web development', 'html/css', 0, 'Microsoft', 'silicon valley', 0, '', '', 'MICROSOFT', 'Good', 0, 0, 0, 0, 'good', ' no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`enrollment_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
