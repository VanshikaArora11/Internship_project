-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 11:46 PM
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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `password`) VALUES
('vanshika@std.ac.in', 'vanshika123'),
('nagarjun@std.ac.in', 'nagarjun123'),
('shivam@std.ac.in', 'shivam123'),
('anuj@std.ac.in', 'anuj123'),
('nakul@std.ac.in', 'nakul123'),
('prakhar@std.ac.in', 'prakhar123'),
('karan@std.ac.in', 'karan123'),
('prem@std.ac.in', 'prem123'),
('ojas@std.ac.in', 'ojas123'),
('soumya@std.ac.in', 'soumya123'),
('soumil@std.ac.in', 'soumil123'),
('ishita@std.ac.in', 'ishita123'),
('devisha@std.ac.in', 'devisha123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
