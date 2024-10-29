-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 04:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `pass`) VALUES
(1, ' itsd', 'itsd@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `datetoday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `rating`, `message`, `datetoday`) VALUES
(28, 'Poor', 'Unfortunately, the quality of service provided was below expectations. The response time to queries was slow, and the staff seemed uninterested in resolving issues promptly. Additionally, the product delivered did not match the specifications outlined. Overall, this experience has been disappointing, and improvements are urgently needed.', '2024-03-29'),
(29, 'Very Satisfactory', 'I wanted to express my appreciation for the excellent service provided by your team. The response time to our inquiries was prompt, and the staff members were knowledgeable and courteous. The product delivered exceeded our expectations in terms of quality and functionality', '2024-03-29'),
(30, 'Satisfactory', 'Good services', '2024-03-29'),
(31, 'Medicore', 'The service provided was average. While the staff members were generally polite, there were some delays in response times to our queries. The product delivered met our basic requirements but lacked some features that we had hoped for. Overall, it was an okay experience, but there is room for improvement in terms of efficiency and product offerings', '2024-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_records`
--

CREATE TABLE `inventory_records` (
  `inv_id` int(255) NOT NULL,
  `devicename` varchar(255) NOT NULL,
  `serialnum` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_records`
--

INSERT INTO `inventory_records` (`inv_id`, `devicename`, `serialnum`, `department`, `history`, `status`) VALUES
(21, 'MONITOR', '10-10-10-10-10', '   CITE', 'ITSD', 'USED'),
(22, 'PRINTER', '1', 'qwe', 'qwe', 'AVAILABLE'),
(23, 'SYSTEM UNIT', '3232', 'erty', 'qeqw', 'DISPOSAL'),
(24, 'PROJECTOR', '8766786', '     uoup', 'CITE', 'DAMAGE');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(255) NOT NULL,
  `datetoday` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `reqparty` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `fromm` date NOT NULL,
  `too` date NOT NULL,
  `reservation_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `datetoday`, `department`, `reqparty`, `purpose`, `equipment`, `fromm`, `too`, `reservation_status`) VALUES
(24, '2024-03-21', 'CITE', 'Marc Nakpil', 'Capstone', 'Desktop PC', '2024-03-30', '2024-04-01', '4'),
(25, '2024-03-21', 'qeq', 'Marc Nakpil', 'qqw', 'Desktop PC', '2024-03-24', '2024-03-26', '3'),
(26, '2024-03-22', '1qwqeq', 'Marc Nakpil', '21321', 'Multi-Media Projector', '2024-03-30', '2024-03-31', '2'),
(27, '2024-03-22', '131', 'Marc Nakpil', '2321', 'Desktop PC', '2024-04-04', '2024-04-06', '1'),
(28, '2024-03-23', 'HUMS', 'James Matthew Villanueva', 'lecture', 'Multi-Media Projector', '2024-03-24', '2024-03-26', '1'),
(29, '2024-03-23', '12321', 'James Matthew Villanueva', '123', 'Desktop PC', '2024-04-04', '2024-03-31', '1'),
(30, '2024-03-30', 'CITE', 'Marc Nakpil', 'pak u', 'Multi-Media Projector', '2024-03-31', '2024-04-02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE `reservation_status` (
  `id_status` int(11) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_status`
--

INSERT INTO `reservation_status` (`id_status`, `label`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Declined'),
(4, 'Returned');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `schoolid` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `schoolid`, `department`) VALUES
(22, 'Marc', 'Nakpil', 'marc@gmail.com', 'Nn_123456789', '13-211321-1313', 'CITE'),
(24, 'James Matthew', 'Villanueva', 'james1@gmail.com', 'Nn_129390149', '04-21212-121', 'ITSD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `inventory_records`
--
ALTER TABLE `inventory_records`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `inventory_records`
--
ALTER TABLE `inventory_records`
  MODIFY `inv_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
