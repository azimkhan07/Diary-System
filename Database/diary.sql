-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `mobile`, `created_at`) VALUES
(1, 'Admin', 'admin@diary.com', '12345', '+919876543210', '2023-07-10 08:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `cash_head`
--

CREATE TABLE `cash_head` (
  `id` int(50) NOT NULL,
  `reg_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `credit` int(50) DEFAULT NULL,
  `debit` int(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cash_head`
--

INSERT INTO `cash_head` (`id`, `reg_id`, `date`, `credit`, `debit`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '2023-08-10', 1000, 0, '2023-08-09 13:10:34', NULL, NULL, 0),
(2, 1, '2023-08-08', 200, 0, '2023-08-09 13:20:06', NULL, NULL, 0),
(3, 1, '2023-08-10', 0, 300, '2023-08-09 13:21:34', NULL, NULL, 0),
(4, 2, '2023-08-09', 1000, 0, '2023-08-09 14:38:30', NULL, NULL, 0),
(5, 2, '2023-08-12', 0, 200, '2023-08-12 07:22:23', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `id` int(50) NOT NULL,
  `ch_id` int(50) NOT NULL,
  `reg_id` int(50) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `id` int(50) NOT NULL,
  `ch_id` int(50) NOT NULL,
  `reg_id` int(50) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(50) NOT NULL,
  `user_num` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `isActive` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(50) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `user_num`, `name`, `email`, `mobile`, `dob`, `gender`, `address`, `landmark`, `password`, `isActive`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'USR-471', 'Azim khan', 'azimkhan00797@gmail.com', '9876543210', '1986-09-02', 'Male', 'trrfdfd', 'dgfgfh', 'AZIM1207', '1', '2023-07-26 10:03:07', NULL, '0000-00-00 00:00:00', 0),
(2, 'USR-277', 'azim_philsof', 'azim@diary.com', '9887654321', '1993-09-07', 'Male', 'ertxfdhthfgvbcxdf', 'dfsdfd', 'AZIM2628', '1', '2023-07-26 10:03:28', NULL, NULL, NULL),
(3, 'USR-421', 'khan', 'demomadarsa@gmail.com', '9987654321', '1989-09-26', 'Male', 'reteyhfgfrewrrwesdfs', 'sdfsdfsdf', 'KHAN2651', '1', '2023-07-26 10:03:51', NULL, '0000-00-00 00:00:00', 0),
(4, 'USR-554', 'test', 'azimkhan00797@gmail.com', '2331312312321', '1991-01-10', 'Male', 'sdsdfsczxc', 'zxczxc', 'TEST1991', '1', '2023-08-20 06:46:17', NULL, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_head`
--
ALTER TABLE `cash_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cash_head`
--
ALTER TABLE `cash_head`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
