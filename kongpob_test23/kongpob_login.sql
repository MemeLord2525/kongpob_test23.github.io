-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2024 at 05:45 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kongpob_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `kongpob_admin`
--

CREATE TABLE `kongpob_admin` (
  `id` int(50) NOT NULL,
  `code_std` varchar(255) NOT NULL,
  `name_std` varchar(255) NOT NULL,
  `dep_std` varchar(255) NOT NULL,
  `tel_std` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kongpob_admin`
--

INSERT INTO `kongpob_admin` (`id`, `code_std`, `name_std`, `dep_std`, `tel_std`) VALUES
(1, '67319010012', 'kongpob', 'Cumputer_IT', '0968622659'),
(3, '10012', 'Admin', 'cumputer_IT', '0968622659'),
(4, '12345678', '12345678', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `kongpob_system`
--

CREATE TABLE `kongpob_system` (
  `id` int(5) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `myname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kongpob_system`
--

INSERT INTO `kongpob_system` (`id`, `uname`, `upass`, `myname`, `email`, `tel`) VALUES
(2, 'admin', '12345', 'admin', 'admin@gmail.com', '0888888888'),
(3, 'film', '44444', 'แฟนซุริสา', '44@gamil.com', '4444444444'),
(5, 'kongpob', '12345', 'kongpob jeenbod', 'kongtvth2525@gmail.com', '0968622659'),
(6, 'testNO23', '12345', 'test', '44@gmail.com', '4444444444'),
(7, 'DEEZ NUZ', '12345', 'DEEZ', 'ligma999@gmail.com', '06969696969');

-- --------------------------------------------------------

--
-- Table structure for table `kongpob_system01`
--

CREATE TABLE `kongpob_system01` (
  `id` int(50) NOT NULL,
  `code_std` varchar(255) NOT NULL,
  `name_std` varchar(255) NOT NULL,
  `dep_std` varchar(255) NOT NULL,
  `tel_std` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kongpob_system01`
--

INSERT INTO `kongpob_system01` (`id`, `code_std`, `name_std`, `dep_std`, `tel_std`) VALUES
(2, '123', '123', '123', '123'),
(3, '1234', '1234', '1234', '1234'),
(4, '1234', '5555', '55', '555555'),
(5, '6666', '5555', '55', '555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kongpob_admin`
--
ALTER TABLE `kongpob_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kongpob_system`
--
ALTER TABLE `kongpob_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kongpob_system01`
--
ALTER TABLE `kongpob_system01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kongpob_admin`
--
ALTER TABLE `kongpob_admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kongpob_system`
--
ALTER TABLE `kongpob_system`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kongpob_system01`
--
ALTER TABLE `kongpob_system01`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
