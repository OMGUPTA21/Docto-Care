-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 09:43 AM
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
-- Database: `doctor123`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `s.no` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `e-mail` varchar(20) NOT NULL,
  `phone_no` text NOT NULL,
  `dob` date NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `time_slot` text NOT NULL,
  `date and time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`s.no`, `first_name`, `last_name`, `e-mail`, `phone_no`, `dob`, `age`, `gender`, `time_slot`, `date and time`) VALUES
(8, 'Om', 'Gupta', 'omgupta564@gmail.com', '06289330657', '2000-06-21', '21 Year', 'male', '7pm-9pm', '2022-01-02 18:21:45'),
(9, 'urvesh', 'pal', 'urveshpal2018@gmail.', '08617257949', '1993-02-17', '28 Year', 'male', '4pm-6pm', '2022-01-02 19:28:49'),
(10, 'Om', 'Gupta', 'guptaom782@gmail.com', '+916289330657', '1996-07-25', '25 Year', 'male', '4pm-6pm', '2022-01-08 11:25:51'),
(11, 'Somojit', 'Karmakar', '', '890675544', '2000-12-12', '21 Year', 'male', '7pm-9pm', '2022-01-08 11:29:23'),
(12, 'som', 'karmakar', 'somo123@gmail.com', '9330525265', '2000-12-24', '21 Year', 'male', '4pm-6pm', '2022-01-08 11:51:12'),
(13, '', '', '', '', '0000-00-00', '', '', 'option', '2022-01-08 19:12:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
