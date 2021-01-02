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
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `interests` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `password`, `firstname`, `email`, `address`, `dob`, `gender`, `profession`, `interests`) VALUES
('Tanvir', '12345', 'Md', 'tanvir@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Bijoy', '12345', 'Md', 'bijoy@gmail.com', 'Dhaka', '9/8/99', 'male', 'Sergent', 'music'),
('Sajjadur', '12345', 'Md', 'sajjadur@gmail.com', 'Dhaka', '9/8/99', 'male', 'Eye Specialist', 'music'),
('Fahim', '12345', 'Md', 'afrin@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Tonmoy', '12345', 'Md', 'tonmoy@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Pranto', '12345', 'Md', 'pranto@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Arnob', '12345', 'Md', 'arnob@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Avik', '12345', 'Md', 'avik@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Kasem', '12345', 'Md', 'kasem@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music'),
('Iqbal', '12345', 'Md', 'iqbal@gmail.com', 'Dhaka', '9/8/99', 'male', 'MBBS', 'music');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
