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
-- Table structure for table `contact123`
--

CREATE TABLE `contact123` (
  `sl no` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact123`
--

INSERT INTO `contact123` (`sl no`, `name`, `email`, `number`, `description`, `state`) VALUES
(1, 'om gupta', 'gupta123@gmail.com', 82836724, 'Hello world!', 'westbengal'),
(7, 'shayaman roy', ' sham1567@gmail.com', 2147483647, 'Hello owner', ' Karnataka'),
(13, 'Om Gupta', ' guptaom782@gmail.com', 2147483647, 'Hi', ' West Bengal'),
(18, 'Urvesh Pal', ' urveshpal2018@gmail.com', 2147483647, 'I am a enterpurner', ' West Bengal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact123`
--
ALTER TABLE `contact123`
  ADD PRIMARY KEY (`sl no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact123`
--
ALTER TABLE `contact123`
  MODIFY `sl no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
