-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 06:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `interests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `password`, `firstname`, `email`, `address`, `dob`, `gender`,`interests`) VALUES
('Kabir', '12345', 'Md', 'kabir@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Rahim', '12345', 'Md', 'rahim@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Jafor', '12345', 'Md', 'jafor@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Rayhan', '12345', 'Md', 'rayhan@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Inzamam', '12345', 'Md', 'inzamam@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Istiaq', '12345', 'Md', 'istiaq@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Rumel', '12345', 'Md', 'rumel@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Imtiaz', '12345', 'Md', 'imtiaz@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Qaif', '12345', 'Md', 'qaif@gmail.com', 'Dhaka', '9/8/99', 'male', 'music'),
('Zashim', '12345', 'Md', 'zashim@gmail.com', 'Dhaka', '9/8/99', 'male', 'music');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
