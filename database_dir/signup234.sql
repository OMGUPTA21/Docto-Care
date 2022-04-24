-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 09:44 AM
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
-- Table structure for table `signup234`
--

CREATE TABLE `signup234` (
  `s.no` int(11) NOT NULL,
  `user` text NOT NULL,
  `upassword` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup234`
--

INSERT INTO `signup234` (`s.no`, `user`, `upassword`, `cpassword`, `date`) VALUES
(3, 'guptaom782@gmail.com', '4569', '4569', '2021-12-17 16:28:23'),
(4, 'somojit.karmakar@gmail.com', '1236', '1236', '2021-12-17 17:36:18'),
(5, '', '', '', '2021-12-20 13:49:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup234`
--
ALTER TABLE `signup234`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup234`
--
ALTER TABLE `signup234`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
