-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 03:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assessment_Dr_Sep2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `id` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `UserType` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`id`, `UserName`, `password`, `UserType`, `Email`) VALUES
(1, 'geeta', 'Geeta@123', 'Doctor', 'Geeta@gmail.com'),
(2, 'arun', 'Arun@123', 'Doctor', 'Arun@gmail.com'),
(3, 'Admin', 'Admin@123', 'Admin', 'Admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Patient_Table`
--

CREATE TABLE `Patient_Table` (
  `id` int(11) NOT NULL,
  `PName` varchar(25) NOT NULL,
  `ADate` date NOT NULL,
  `Doctor_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Patient_Table`
--

INSERT INTO `Patient_Table` (`id`, `PName`, `ADate`, `Doctor_id`) VALUES
(1, 'Diya', '2022-09-12', 2),
(2, 'Hala', '2022-09-12', 1),
(3, 'Sharukh', '2022-09-13', 1),
(4, 'tamanna', '2022-09-14', 2),
(5, 'siya', '2022-09-14', 1),
(6, 'iqra', '2022-09-15', 2),
(7, 'sona', '2022-09-12', 1),
(8, 'suraj', '2022-09-12', 1),
(9, 'raja', '2022-09-12', 2),
(10, 'honey', '2022-09-12', 2),
(11, 'raja', '2022-09-14', 2),
(12, 'honey', '2022-09-14', 2),
(13, 'Sharukh', '2022-09-14', 2),
(14, 'Sharukh', '2022-09-14', 1),
(15, 'sona', '2022-09-13', 1),
(16, 'sanem', '2022-09-14', 1),
(17, 'sona', '2022-09-14', 1),
(18, 'jeetu', '2022-09-14', 1),
(19, 'sona', '2022-09-15', 2),
(20, 'sanem', '2022-09-15', 2),
(21, 'raja', '2022-09-15', 2),
(22, 'umra', '2022-09-15', 2),
(27, 'yashi', '2022-08-16', 2),
(28, 'yash', '2022-05-31', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Patient_Table`
--
ALTER TABLE `Patient_Table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Patient_Table`
--
ALTER TABLE `Patient_Table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
