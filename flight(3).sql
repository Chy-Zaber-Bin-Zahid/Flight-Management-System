-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 11:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `f_id` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `f_from` varchar(250) NOT NULL,
  `f_to` varchar(250) NOT NULL,
  `f_date` date NOT NULL,
  `f_time` varchar(250) NOT NULL,
  `adult_cost` varchar(250) NOT NULL,
  `available` int(11) NOT NULL,
  `child_cost` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`f_id`, `f_name`, `f_from`, `f_to`, `f_date`, `f_time`, `adult_cost`, `available`, `child_cost`) VALUES
('f001', 'e001', 'Dhaka', 'London', '2022-08-03', '24.00.00', '$100', 3, '$50'),
('f002', 'e002', 'London', 'India', '2022-08-19', '22.30.00', '$50', 0, '$15'),
('f003', 'e003', 'Dhaka', 'Sylhet', '2022-08-23', '19.15.00', '$80', 4, '$30');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `from` varchar(250) NOT NULL,
  `to` varchar(250) NOT NULL,
  `buy_date` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `f_id` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `f_time` varchar(250) NOT NULL,
  `f_cost` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`from`, `to`, `buy_date`, `payment`, `email`, `f_id`, `f_name`, `f_time`, `f_cost`) VALUES
('Dhaka', 'London', '2022-08-03', 'Debit card', 'bilkis@gmail.com', 'f001', 'e001', '24.00.00', '$300'),
('Dhaka', 'Sylhet', '2022-08-23', 'Nagad', 'kuddus@gmail.com', 'f003', 'e003', '19.15.00', '$30'),
('Dhaka', 'London', '2022-08-03', 'Credit card', 'kuddus@gmail.com', 'f001', 'e001', '24.00.00', '$250'),
('Dhaka', 'London', '2022-08-03', 'Bkash', 'czaber47@gmail.com', 'f001', 'e001', '24.00.00', '$250'),
('Dhaka', 'London', '2022-08-03', 'Nagad', 'admin47@gmail.com', 'f001', 'e001', '24.00.00', '$250'),
('Dhaka', 'London', '2022-08-03', 'Bkash', 'admin47@gmail.com', 'f001', 'e001', '24.00.00', '$100'),
('Dhaka', 'London', '2022-08-03', 'Bkash', 'bilkis@gmail.com', 'f001', 'e001', '24.00.00', '$100'),
('Dhaka', 'London', '2022-08-03', 'Bkash', 'admin47@gmail.com', 'f001', 'e001', '24.00.00', '$100');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `From` varchar(250) NOT NULL,
  `To` varchar(250) NOT NULL,
  `buy_date` varchar(250) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `Payment` varchar(250) NOT NULL,
  `Adult` int(11) NOT NULL,
  `Child` int(11) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `b_date` date NOT NULL,
  `Password` varchar(20) NOT NULL,
  `p_number` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `Email`, `b_date`, `Password`, `p_number`, `Gender`) VALUES
(1, 'Chy', 'Zaber', 'admin47@gmail.com', '1999-06-13', 'letmeinman', 1711457876, 'Male'),
(4, 'Bilkis', 'Begum', 'bilkis@gmail.com', '2022-08-02', 'bilkis47', 1722849567, 'Female'),
(3, 'Walid Ibne', 'Hasan', 'czaber47@gmail.com', '2022-08-08', 'walid', 1722935478, 'Male'),
(2, 'Kuddus', 'Miah', 'kuddus@gmail.com', '2022-08-02', 'kuddusmiah', 1622345678, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
