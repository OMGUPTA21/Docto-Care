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
-- Table structure for table `doctor123`
--

CREATE TABLE `doctor123` (
  `s.no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `category` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor123`
--

INSERT INTO `doctor123` (`s.no`, `id`, `name`, `address`, `contact`, `email`, `category`, `date`) VALUES
(2, 1001, 'somojit karmakar', 'naihati', '933052565', 'test@gmail.com', 'bone', '2021-11-23 20:10:34'),
(3, 1002, 'Sayan Roy', 'Kolkata', '9674793386', 'roysayan846@gmail.com', 'MentalHealth', '2021-11-23 20:13:07'),
(4, 1003, 'Om Gupta', 'naihati', '+916289330', 'guptaom782@gmail.com', 'heart', '2021-11-23 20:15:42'),
(5, 1004, 'Anwesha Chaterjee', 'chinsura', '0628933065', 'anweha57@gmail.com', 'MentalHealth', '2021-11-23 20:18:02'),
(6, 1005, 'manish', 'naihati', '0628933065', 'manish123@gmail.com', 'bone', '2021-11-23 20:19:01'),
(7, 1006, 'Uevesh Pal', 'Kolkata', '8617257949', 'urveshpal2018@gmail.com', 'Surgery', '2021-11-24 13:06:10'),
(8, 1007, 'anil', 'bidhanagar', '245452454', 'om21062000@gmail.com', 'MentalHealth', '2021-11-24 13:09:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor123`
--
ALTER TABLE `doctor123`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor123`
--
ALTER TABLE `doctor123`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
