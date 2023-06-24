-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 03:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasktwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_task`
--

CREATE TABLE `child_task` (
  `c_taskid` int(11) NOT NULL,
  `child_task` text NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `child_task`
--

INSERT INTO `child_task` (`c_taskid`, `child_task`, `parent_id`) VALUES
(19, 'task three', 63),
(20, 'child task two', 73);

-- --------------------------------------------------------

--
-- Table structure for table `tasksdata`
--

CREATE TABLE `tasksdata` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(200) DEFAULT NULL,
  `task_desc` text DEFAULT NULL,
  `task_date` varchar(255) NOT NULL,
  `task_end_date` varchar(256) NOT NULL,
  `task_complete_date` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasksdata`
--

INSERT INTO `tasksdata` (`task_id`, `task_name`, `task_desc`, `task_date`, `task_end_date`, `task_complete_date`, `status`) VALUES
(94, 'test task name', 'fdsghf', '1644201660', '1644288060', '1644201709', 1),
(95, 'task number 1', 'fdsfghg', '1644201720', '1643771100', '1644201792', 1),
(96, 'gfgfgfgh', 'fdsfdgf', '1644201840', '1639978200', '1644201901', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_temp`
--

CREATE TABLE `task_temp` (
  `task_temp_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task_temp`
--

INSERT INTO `task_temp` (`task_temp_id`, `task_name`, `task_id`) VALUES
(1, 'test task name', 93);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_task`
--
ALTER TABLE `child_task`
  ADD PRIMARY KEY (`c_taskid`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `tasksdata`
--
ALTER TABLE `tasksdata`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `start_date` (`task_date`),
  ADD KEY `end_date` (`task_end_date`),
  ADD KEY `status` (`status`),
  ADD KEY `task_complete_date` (`task_complete_date`);

--
-- Indexes for table `task_temp`
--
ALTER TABLE `task_temp`
  ADD PRIMARY KEY (`task_temp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_task`
--
ALTER TABLE `child_task`
  MODIFY `c_taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tasksdata`
--
ALTER TABLE `tasksdata`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `task_temp`
--
ALTER TABLE `task_temp`
  MODIFY `task_temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
