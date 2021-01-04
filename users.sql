-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 01:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impactrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `No.` int(11) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `pic` text NOT NULL,
  `amount` int(11) NOT NULL,
  `workout` int(11) NOT NULL,
  `distance` int(11) NOT NULL,
  `curr_streak` int(11) NOT NULL,
  `max_streak` int(11) NOT NULL,
  `achievements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`No.`, `name`, `title`, `pic`, `amount`, `workout`, `distance`, `curr_streak`, `max_streak`, `achievements`) VALUES
(1, 'Nikhil Khandelwal', 'Education Master', 'img.jpg', 122596, 5891, 109, 18, 58, 'Hunger Superstar'),
(2, 'Anuj Mehta', 'Student', 'img1.jpg', 100000, 4000, 57, 20, 50, 'Environment Star'),
(3, 'Ajay Sharma', 'Student', 'img2.jpg', 2000, 50, 12, 12, 15, 'Women-Rights Legend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `No.` (`No.`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
