-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 09:44 AM
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
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`) VALUES
(1, 'akila@claidas.org', 'Akila@07', 'Claidas', 'Team', 'desktop.jpg', '2018-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `reference_number` int(11) NOT NULL,
  `temperature` varchar(30) NOT NULL,
  `tagno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `reference_number`, `temperature`, `tagno`, `date`, `time_in`, `status`, `time_out`, `num_hr`) VALUES
(2, 3, '33', '3', '2024-09-13', '16:51:56', 0, '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `reference_number` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `residence_status` varchar(100) NOT NULL,
  `residence` varchar(200) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `admission_year` varchar(11) NOT NULL,
  `level` varchar(10) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reference_number`, `firstname`, `mname`, `lastname`, `email`, `phone`, `residence_status`, `residence`, `programme`, `admission_year`, `level`, `created_on`) VALUES
(1, '9100609620', 'Bridget', '', 'Gafa', 'mra@gmail.com', '1230444444', 'Resident', 'Michael Kofi Avenue', 'Minerals Engineering', '2020', '2', '2021-02-08'),
(2, '9100709721', 'Nathaniel', '', 'Nkrumah', 'knat@gmail.com', '0123456783', 'Non-Resident', '', 'Computer Science', '2020', '2', '2022-10-19'),
(3, '9876543210', 'Pavan', '', 'A', 'pavan@gmail.com', '9234567890', 'Non-Resident', 'VZM', 'IT', '2024', '1', '2024-09-13'),
(4, '9123456789', 'Chatura', '', 'P', 'chatura@gmail.com', '9876543210', 'Non-Resident', 'VZM', 'IT', '2024', '1', '2024-09-13'),
(5, '8123546789', 'Prravalika', '', 'V', 'pravalika@gmail.com', '8987654321', 'Non-Resident', 'VZM', 'CSE', '2024', '1', '2024-09-13'),
(6, '7123456789', 'Aravind', '', 'Jack', 'aravind@gmail.com', '7987654321', 'Resident', 'Chennai', 'IT', '2020', '5', '2024-09-13'),
(7, '6123456789', 'Bharat', '', 'B', 'bharat@gmail.com', '6987654321', 'Resident', 'Chennai', 'AI', '2025', '5', '2024-09-13'),
(8, '5123546789', 'Satish', '', 'S', 'satish@gmail.com', '9789456123', 'Resident', 'Chennai', 'IT', '2022', '4', '2024-09-13'),
(9, '4123456789', 'Sriram', '', 'G', 'sriram@gmail.com', '8789456612', 'Resident', 'Chennai', 'Cloud', '2020', '4', '2024-09-13'),
(10, '3123456789', 'Gawtham', '', 'G', 'gawtham@gmail.com', '7789456123', 'Resident', 'Chennai', 'IT', '2024', '1', '2024-09-13'),
(11, '2123456789', 'Raayan', '', 'R', 'raayan@gmail.com', '6789456123', 'Resident', 'Chennai', 'IT', '2024', '1', '2024-09-13'),
(12, '1123456789', 'Joy', '', 'J', 'joyj@gmail.com', '9654873219', 'Resident', 'Chennai', 'IT', '2024', '1', '2024-09-13'),
(13, '1234567890', 'Srinidhi', '', 'S', 'srinidhi@gmail.com', '8456789123', 'Resident', 'Chennai', 'IT', '2024', '1', '2024-09-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
