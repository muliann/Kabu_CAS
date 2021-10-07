-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 02, 2021 at 10:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kabu_cas`
--

-- --------------------------------------------------------

--
-- Table structure for table `sset`
--

CREATE TABLE `sset` (
  `id` int(255) NOT NULL,
  `ssetrooms` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sset`
--

INSERT INTO `sset` (`id`, `ssetrooms`) VALUES
(1, 'L1'),
(2, 'L2'),
(3, 'L3'),
(4, 'L4'),
(5, 'L5'),
(6, 'L6'),
(7, 'L7'),
(8, 'L8'),
(9, 'L9'),
(10, 'L10'),
(11, 'L11'),
(12, 'L12'),
(13, 'L13'),
(14, 'L14'),
(15, 'L15'),
(16, 'L16'),
(17, 'L17'),
(18, 'L18'),
(19, 'L19'),
(20, 'L20');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `lecturernumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` char(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `phoneno`, `password`, `confirm`) VALUES
(2, 'admin', 'admin', 'admin@kabarak.ac.ke', '0712345678', 'admin', 'admin'),
(23, 'Muliann', 'Muli Ann', 'amuli@kabarak.ac.ke', '0700000000', 'mulimuli', 'mulimuli'),
(24, 'mr mochoge', 'simon mochoge', 'smochoge@kabarak.ac.ke', '0745902145', 'mochoge', 'mochoge');

-- --------------------------------------------------------

--
-- Table structure for table `y1s1`
--

CREATE TABLE `y1s1` (
  `id` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `lecturernumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `y1s1`
--

INSERT INTO `y1s1` (`id`, `day`, `unit`, `period`, `class`, `lecturername`, `lecturernumber`) VALUES
(73, 'Monday', 'comp 457', '7:00am-10:00am', 'L1', 'mr. Mochoge', 745893963),
(74, 'Monday', 'comp 127', '10:00am-1:00pm', 'L2', 'dr. Sakwa', 745893962),
(75, 'Tuesday', 'comp 567', '7:00am-10:00am', 'L3', 'madam Daisy', 745893961),
(76, 'Wednesday', 'comp300', '7:00am-10:00am', 'L4', 'mr Martin', 745893964),
(77, 'Wednesday', 'comp306', '0:00am-1:00pm', 'L4', 'madam mercy', 745893965);

-- --------------------------------------------------------

--
-- Table structure for table `y1s2`
--

CREATE TABLE `y1s2` (
  `id` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `lecnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `y1s2`
--

INSERT INTO `y1s2` (`id`, `day`, `unit`, `period`, `class`, `lecturername`, `lecnumber`) VALUES
(16, 'Monday', 'comp 100', '7:00am-10:00am', 'L4', '', 0),
(17, 'Monday', 'comp 103', '10:00am-1:00pm', 'L9', '', 0),
(18, 'Tuesday', 'math 567', '0:00am-1:00pm', 'L10', '', 0),
(19, 'Wednesday', 'math345', '7:00am-10:00am', 'L6', '', 0),
(20, 'Wednesday', 'math 234', '1:00pm-4:00pm', 'L13', '', 0),
(21, 'Wednesday', 'comp 129', '1:00pm-4:00pm', 'L9', '', 0),
(22, 'Thursday', 'math 129', '4:00pm-7:00pm', 'L16', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `y2s1`
--

CREATE TABLE `y2s1` (
  `id` int(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `lecnumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sset`
--
ALTER TABLE `sset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- Indexes for table `y1s1`
--
ALTER TABLE `y1s1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- Indexes for table `y1s2`
--
ALTER TABLE `y1s2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- Indexes for table `y2s1`
--
ALTER TABLE `y2s1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit` (`unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sset`
--
ALTER TABLE `sset`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `y1s1`
--
ALTER TABLE `y1s1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `y1s2`
--
ALTER TABLE `y1s2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `y2s1`
--
ALTER TABLE `y2s1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
