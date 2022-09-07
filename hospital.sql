-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 09:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `family` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `passwoord` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `stat` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `family`, `username`, `passwoord`, `stat`) VALUES
(1, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaa', 0),
(2, 'name', 'family', 'userName', 'password', 0),
(4, 'admin', 'admin', 'admin', 'admin', 0),
(5, 'admin', 'admin', 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `part_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `family` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `visit_time` text COLLATE utf8_persian_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `patient_count` int(11) DEFAULT NULL,
  `major` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `address` text COLLATE utf8_persian_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_persian_ci DEFAULT NULL,
  `social` text COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `passwoord` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `part_id`, `name`, `family`, `visit_time`, `price`, `patient_count`, `major`, `address`, `phone`, `social`, `username`, `passwoord`, `stat`) VALUES
(1, NULL, 'aaa', 'aaaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaaaa', 'aaaa', 0),
(2, NULL, 'fgf', 'fghghd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fdgh', 'dgh', 0),
(3, NULL, 'doctor', 'doctor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'doctor', 'doctor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `description` text COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`id`, `name`, `description`) VALUES
(6, 'heart', 'heart operation');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `part_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `family` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `passwoord` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `part_id`, `doctor_id`, `name`, `family`, `username`, `passwoord`) VALUES
(1, NULL, NULL, 'gdtfgh', 'gjhjk', 'klnhlk', 'nlknk'),
(2, NULL, NULL, 'patient', 'patient', 'patient', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `part_id` (`part_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `part` (`id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`part_id`) REFERENCES `part` (`id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
