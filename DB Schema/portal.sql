-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 07:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(3) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `cname`, `title`, `location`, `salary`) VALUES
(2, 'Data', 'Logo Design', 'Dhaka', 10000),
(3, 'Data', 'Desktop Software Development', 'Dhaka', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userId` int(11) NOT NULL,
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `type` varchar(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userId`, `username`, `password`, `type`, `name`, `cname`, `mobile`) VALUES
(1, 'admin', 'admin', 'admin', '', '', ''),
(2, 'admin', 'admin', 'admin', '', '', ''),
(5, 'employee', '1234', 'employee', 'shanto', 'Data', '1778578380'),
(7, 'hasib999', '1234', 'employee', 'hasib', 'Tata', '1778578380'),
(10, 'hasib999', '1234', 'employee', 'ssf', 'fedfdf', '1778578380'),
(11, 'hasib999', '1234', 'employee', 'ssf', 'fedfdf', '1778578380'),
(12, 'hasib999', '1234', 'employee', 'ssf', 'fedfdf', '1778578380'),
(13, 'dhfhd', '1234', 'employee', 'hghfg', 'fgfgf', '1778578380'),
(14, 'hhh', 'sdsd', 'employee', 'sdsds', 'sdsds', '1778578380');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
