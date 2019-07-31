-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2019 at 01:11 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Tokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` text,
  `contact_no` varchar(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `fname`, `lname`, `birth_date`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL, '2019-07-25 08:02:03', '2019-07-25 08:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `Token_table`
--

CREATE TABLE `Token_table` (
  `tokenid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Token_table`
--

INSERT INTO `Token_table` (`tokenid`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-07-26 10:36:02', '2019-07-28 10:16:45'),
(2, 1, 1, '2019-07-26 10:37:24', '2019-07-28 10:16:58'),
(3, 1, 1, '2019-07-26 10:38:34', '2019-07-28 10:36:02'),
(4, 1, 1, '2019-07-28 08:58:49', '2019-07-30 09:39:47'),
(5, 1, 0, '2019-07-28 10:06:09', '2019-07-28 10:06:09'),
(6, 1, 0, '2019-07-28 10:06:40', '2019-07-28 10:06:40'),
(7, 1, 0, '2019-07-28 10:07:26', '2019-07-28 10:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Token_table`
--
ALTER TABLE `Token_table`
  ADD PRIMARY KEY (`tokenid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Token_table`
--
ALTER TABLE `Token_table`
  MODIFY `tokenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
