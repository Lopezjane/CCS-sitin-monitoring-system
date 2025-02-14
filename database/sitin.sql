-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2025 at 01:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitin`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `idno` varchar(8) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `course` varchar(100) NOT NULL,
  `yearlevel` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`idno`, `firstname`, `lastname`, `middlename`, `course`, `yearlevel`, `email`, `username`, `password`) VALUES
('22597819', 'daisy', 'laygan', 'P', 'BSIT', 3, 'daisylynlaygan@gmail.com', 'daisy123', '$2y$10$1Q0VS7Kn2ZryWbe.mStREuWKhUYaIZ4oag0OVho0nSBV42bhglboa'),
('22597959', 'jane', 'lapas', '', 'BSIT', 1, 'jane@gmail.com', 'jane123', '$2y$10$uSsq7o9HG.sAen7YN3LNVOjSYvULz4hXIOK3V3ARnxg4u8wERcfni'),
('22686570', 'Froillan', 'Edem', 'B', 'BSIT', 3, 'froillan.edem@gmail.com', 'kimperor', '$2y$10$7OroYtGPWIGzjpEwRr9tyuGCqjoUNvUHoI0CW74Lhh5EJUYQP9.V2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idno`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
