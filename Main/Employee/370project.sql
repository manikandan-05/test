-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 08:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `370project`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dept` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `email`, `Designation`, `password`, `birthday`, `gender`, `contact`, `address`, `dept`, `degree`, `pic`) VALUES
(101,  'Aravind', 'G', 'aravind@claidas.org', 'Senior Software Developer', '1234', '1997-08-13', 'Male', '01919', 'Razarbagh', 'IT', 'Head', 'images/me.png'),
(100,  'Siva Kumar', 'E', 'sivakumar@claidas.org', 'Team Manager','1234', '1997-08-13', 'Male', '01919', 'Razarbagh', 'IT', 'Head', 'images/me.png'),
(102, 'Sathish', 'S', 'sathish@claidas.org','Senior Software Developer', '1234', '2018-01-01', 'Male', '0202', 'Ad_______', 'CSE', 'CSE', 'images/no.jpg'),
(103,  'Sriram', 'G', 'sriram@claidas.org', 'Senior Software Developer','1234', '1990-02-02', 'Male', '5252', 'Thames, UK', 'Creative', 'MSc', 'images/sw-google.png'),
(104,  'Dhivya', 'G', 'dhivya@claidas.org', 'Senior Software Developer','1234', '1971-12-01', 'Female', '9595', 'Chemsford, USA', 'Creative', 'MSc', 'images/test.jpg'),
(105,  'Bharath', 'B', 'bharath@claidas.org', 'Senior Software Developer','1234', '1971-06-28', 'Male', '8585',  'LAUSA', 'SpaceTech', 'BSc', 'images/330px-Elon_Musk_Royal_Society.jpg'),
(106, 'Pavan', 'A', 'pavanappana@claidas.org', 'Junior Software Developer','1234', '1990-02-02', 'Male', '7575', 'Underground Dhaka', 'NetworkSecurity', 'MSc', 'images/hacker.png'),
(107, 'Pravallika ', 'V', 'pravallika@claidas.org', 'Junior Software Developer', '1234', '1993-03-03', 'Female','8767', 'USA', 'Defense ', 'MS', 'images/no.jpg'),
(108, 'Gowtham', ' K', 'gowtham@claidas.org', 'Junior Software Developer', '1234', '1976-04-16', 'Male', '758758', 'USA', 'AI', 'PhD', 'images/download.jpeg'),
(109,'Joy Vimal Raj', 'F D', 'joyvimalraj@claidas.org', 'Junior Software Developer','1234', '1985-01-01', 'Male', '852852', 'USA', 'AI', 'PhD', 'images/1-5.jpg'),
(110,'Mohammed Raiyan ', 'T A', 'mohammedrayan@claidas.org', 'Junior Software Developer','1234', '1965-09-18', 'Male', '147147', 'USA', 'NLP', 'PhD', 'images/download (1).jpeg'),
(111, 'Chathura', 'P', 'chathura@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Female', '0187282', 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(112, 'Sri Nithi', 'E', 'srinithi@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Female', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(113, 'Sharmila', 'M', 'sharmila@claidas.org', 'Junior Software Developer', '1234', '2011-02-01', 'Female', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(114, 'Aasha', 'G', 'aasha@claidas.org', 'Junior Software Developer','1234',  '2011-02-01', 'Female', '0187282', 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(115, 'Prakash', 'T', 'prakash@claidas.org','Junior Software Developer', '1234', '2011-02-01', 'Male', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(116, 'Sevagrahul', 'G G', 'sevagrahul@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Male', '0187282', 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(117, 'Gowtham', 'K E', 'gowthamke@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Male', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(118, 'Manikandan', 'S', 'manikandan@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Male', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(119, 'Santhosh Kumar', 'S', 'santhoshkumar@claidas.org', 'Junior Software Developer', '1234', '2011-02-01', 'Male', '0187282', 'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(120, 'Kudiyarasu', 'P', 'kudiyarasu@claidas.org','Junior Software Developer', '1234', '2011-02-01', 'Male', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(121, 'Niramal Raj', 'S', 'nirmalraj@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Male', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(122, 'Sri Nithi', 'K', 'srinithik@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Female', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(123,'Bavithra', 'G', 'bavithra@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Female', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg'),
(124, 'Sneha', 'S', 'snega@claidas.org', 'Junior Software Developer','1234', '2011-02-01', 'Female', '0187282',  'Winterfell', 'Management', 'BSc.', 'images/jon-snow.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;
-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE `employee_leave` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `reason` char(100) DEFAULT NULL,
  `status` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`id`, `token`, `start`, `end`, `reason`, `status`) VALUES
(101, 301, '2019-04-07', '2019-04-08', 'Sick Leave', 'Approved'),
(102, 305, '2019-04-07', '2019-04-08', 'Urgent Family Cause', 'Approved'),
(103, 306, '2019-04-08', '2019-04-08', 'Concert Tour', 'Approved'),
(101, 307, '2019-04-14', '2019-04-30', 'Want to see GOT', 'Pending'),
(105, 308, '2019-04-26', '2019-04-30', 'Launching Tesla Model Y', 'Pending'),
(111, 309, '2019-04-09', '2019-04-13', 'Visit to Kings Landing', 'Pending'),
(104, 310, '2019-04-08', '2019-04-09', 'Emergency Leave', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `eid` int(11) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `subdate` date DEFAULT '0000-00-00',
  `mark` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `eid`, `pname`, `duedate`, `subdate`, `mark`, `status`) VALUES
(213, 101, 'Database', '2019-04-07', '2019-04-04', 10, 'Submitted'),
(214, 102, 'Test', '2019-04-10', '0000-00-00', 0, 'Due'),
(215, 105, 'Tesla Model Y', '2019-04-19', '2019-04-06', 10, 'Submitted'),
(216, 106, 'Hack', '2019-05-04', '2019-04-05', 5, 'Submitted'),
(217, 111, 'Do Nothing', '2019-04-02', '2019-04-01', 8, 'Submitted'),
(218, 105, 'Tesla Model X', '2019-04-03', '2019-04-03', 10, 'Submitted'),
(219, 101, 'PHP', '2019-04-07', '0000-00-03', 0, 'Due'),
(220, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 8, 'Submitted'),
(221, 110, 'Data Analysis', '2019-04-16', '2019-04-04', 7, 'Submitted'),
(222, 103, 'Statistical', '2019-04-19', '2019-04-04', 6, 'Submitted'),
(223, 108, 'Software Schema', '2019-04-09', '2019-04-02', 3, 'Submitted'),
(224, 107, 'Security Check', '2019-04-26', '2019-04-05', 9, 'Submitted'),
(225, 109, 'ML', '2019-04-03', '2019-04-04', 6, 'Submitted');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `department`, `role`, `experience`) VALUES
(100, 'Mobile App', 'Team Manager', NULL),
(101, 'Web Development', 'Senior', NULL),
(102, 'Data Analytics', 'Senior', NULL),
(103, 'Mobile App', 'Senior', NULL),
(104, 'Web Development', 'Software Trainee', NULL),
(105, 'Web Development', 'Software Trainee', NULL),
(106, 'Data Analytics', 'Software Trainee', NULL),
(107, 'Data Analytics', 'Software Trainee', NULL),
(108, 'Data Analytics', 'Software Trainee', NULL),
(109, 'Mobile App', 'Software Trainee', NULL),
(110, 'Mobile App', 'Software Trainee', NULL),
(111, 'Data Analytics', 'Software Trainee', NULL),
(112, 'Mobile App', 'Software Trainee', NULL),
(113, 'Cloud', 'Software Trainee', NULL),
(114, 'Cloud', 'Software Trainee', NULL),
(115, 'Cloud', 'Software Trainee', NULL),
(116, 'Cloud', 'Software Trainee', NULL),
(117, 'Cloud', 'Software Trainee', NULL),
(118, 'Cloud', 'Software Trainee', NULL),
(119, 'Mobile App', 'Software Trainee', NULL),
(120, 'Web Development', 'Software Trainee', NULL),
(121, 'Mobile App', 'Software Trainee', NULL),
(122, 'Web Development', 'Software Trainee', NULL),
(123, 'Web Development', 'Software Trainee', NULL),
(124, 'Web Development', 'Software Trainee', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `base` int(11) NOT NULL,
  `bonus` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `base`, `bonus`, `total`) VALUES
(101, 55000, 10, 60500),
(102, 16500, 0, 16500),
(103, 65000, 6, 68900),
(104, 78000, 0, 78000),
(105, 105000, 20, 126000),
(106, 60000, 5, 63000),
(107, 77000, 9, 83930),
(108, 50000, 3, 51500),
(109, 85000, 6, 90100),
(110, 47000, 15, 54050),
(111, 45000, 8, 48600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD PRIMARY KEY (`token`),
  ADD KEY `employee_leave_ibfk_1` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `project_ibfk_1` (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `employee_leave`
--
ALTER TABLE `employee_leave`
  MODIFY `token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_leave`
--
ALTER TABLE `employee_leave`
  ADD CONSTRAINT `employee_leave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rank`
--
ALTER TABLE `rank`
  ADD CONSTRAINT `rank_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
