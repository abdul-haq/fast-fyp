-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 03:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`d_id`, `d_name`) VALUES
(1, 'Peter'),
(2, 'CS'),
(3, 'CS'),
(4, 'CS'),
(5, 'CS'),
(6, 'CS'),
(7, 'CS'),
(8, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `p_id` int(11) NOT NULL,
  `leader_name` varchar(255) NOT NULL,
  `g_mem1_name` varchar(255) NOT NULL,
  `g_mem2_name` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `project_tittle` varchar(255) NOT NULL,
  `project_description` varchar(255) NOT NULL,
  `l_rollno` varchar(255) NOT NULL,
  `g_mem1_rollno` varchar(255) NOT NULL,
  `g_mem2_rollno` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`p_id`, `leader_name`, `g_mem1_name`, `g_mem2_name`, `batch`, `dept`, `teacher`, `project_tittle`, `project_description`, `l_rollno`, `g_mem1_rollno`, `g_mem2_rollno`, `img`, `status`) VALUES
(1, 'mahad', 'saad', 'rameez', '2016', 'SE', 'sir haider', 'LMS', 'this is description', '70', '73', '83', 'img', 'approved'),
(2, 'hammad', 'sami', 'haq', '2017', 'CS', 'sir misbah', 'OLMS', 'this is OLMS', '59', '58', '69', 'image', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
