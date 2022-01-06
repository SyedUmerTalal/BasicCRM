-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2021 at 03:15 AM
-- Server version: 10.3.29-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprojectmockup_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `task_description` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `assign_to` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `task_date` date DEFAULT NULL,
  `task_time` text NOT NULL,
  `task_city_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `task_activity_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `task_activity_by` int(11) NOT NULL,
  `task_custom` varchar(100) DEFAULT NULL,
  `task_service` varchar(30) DEFAULT NULL,
  `client_number` varchar(20) DEFAULT NULL,
  `task_status` enum('Pending','Completed','Processing') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_name`, `task_description`, `address`, `assign_to`, `task_date`, `task_time`, `task_city_name`, `task_activity_at`, `task_activity_by`, `task_custom`, `task_service`, `client_number`, `task_status`) VALUES
(51, '1', 'q', '22', NULL, '2021-05-29', '16:15', 'karachi', '2021-05-25 13:11:06', 0, 'custom', 'PD', '1', 'Completed'),
(52, 'test', 'test first time', 'OIP', NULL, '2021-04-27', '07:34', 'karachi', '2021-05-25 09:46:19', 0, 'custom', 'PD', '1', 'Processing'),
(68, 'Carpenter ', 'Bedroom cupboard', 'House no 65, 45 street ', '30', '2021-05-26', '11:47', 'Nashville', '2021-05-31 05:56:51', 0, 'hj55', 'Cupboard Drawer', '14568561222', 'Processing'),
(75, 'Roof Design', 'Please design the roof', 'Street 10, 16th house', '35', '2021-06-01', '10:00', 'NY', '2021-05-31 21:20:59', 0, 'Roof', 'Design roof', '+19587894561', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `designation_id` int(11) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `user_activity_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_activity_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role_id`, `designation_id`, `user_status`, `user_activity_at`, `user_activity_by`) VALUES
(1, 'Admin', 'admin@admin.com', '123', 1, 1, 1, '2021-05-20 11:28:42', 99),
(31, 'ali', 'ali@gmail.com', '123', 2, 1, 0, '2021-05-27 09:13:49', 0),
(35, 'Umer', 'umer@outsourceinpakistan.com', '12345', 2, 0, 1, '2021-05-31 21:19:44', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
