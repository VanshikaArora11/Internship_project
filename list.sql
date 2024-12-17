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
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `enrollment_no` varchar(15) NOT NULL,
  `name` varchar(23) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` bigint(12) NOT NULL,
  `address` varchar(60) NOT NULL,
  `program` varchar(10) NOT NULL,
  `branch` varchar(12) NOT NULL,
  `year_sem` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`enrollment_no`, `name`, `email`, `mobile_no`, `address`, `program`, `branch`, `year_sem`) VALUES
('2021BTCS001', 'VANSHIKA ARORA', 'vanshika.arora@student.suas.ac.in', 1000000000, 'Geeta Bhawan', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS002', 'NAGARJUN SAGAR MANDIGA', 'nagarjun.mandiga@student.suas.ac.in', 2000000000, 'Omax city', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS004', 'SHIVAM CHADOKAR', 'shivam.chadokar@student.suas.ac.in', 300000000, 'Bapat Circle', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS005', 'ANUJ PANDEY', 'anuj@student.suas.ac.in', 40000000, 'Super corridor', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS006', 'NAKULJOSHI', 'nakul.joshi@student.suas.ac.in', 50000000, 'Rajendra Nagar', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS007', 'PRAKHAR CHATURVEDI', 'prakhar.chaturvedi@student.suas.ac.in', 60000000, 'Bapat Circle', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS008', 'KARAN CHOPRA', 'karan.chopra@student.suas.ac.in', 70000000, 'Kalani Nagar', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS010', 'PREM SHARMA', 'prem.sharma@student.suas.ac.in', 80000000, 'New Palasia', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS011', 'OJAS  MEHROTRA', 'ojas.mehrotra@student.suas.ac.in', 90000000, 'Anand Bazar', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS019', 'SOUMYA RATHORE', 'soumya.rathore@student.suas.ac.in', 1900000, 'Mahalaxmi Nagar', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS023', 'Sarthak Kushwaha', 'sarthak.kushwaha@student.suas.ac.in', 5478012354, 'Bhagirathpura ', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCS035 ', 'ISHITA PALIWAL', 'ishita.paliwal@student.suas.ac.in', 84310000, 'Harda MP', 'B.Tech', 'CSIT', 'I/II'),
('2021BTCSOZ1', 'DEVISHA SOLANKI', 'devisha.solanki@student.suas.ac.in', 75400000, 'Footi Kothi ', 'B.Tech', 'CSIT', 'I/II');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`enrollment_no`,`email`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
