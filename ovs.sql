-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 01:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `can` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`can`, `votecount`, `id`) VALUES
('AAP', 6, 1),
('BJP', 0, 2),
('ICP', 1, 3),
('ICPM', 0, 4),
('INC', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `aadhar`, `pass`) VALUES
('Person 1', 'person1@gmail.com', 1234567890, 1234567890, '123'),
('Person 10', 'person10@gmail.com', 1234567890, 2147483647, '123'),
('Person 2', 'person2@gmail.com', 1234567890, 2147483647, '123'),
('Person 3', 'person3@gmail.com', 1234567890, 2147483647, '123'),
('Person 4', 'person4@gmail.com', 1234567890, 2147483647, '123'),
('Person 5', 'prachet.balaji@gmail.com', 2147483647, 2147483647, '123'),
('Person 6', 'person6@gmail.com', 1234567890, 2147483647, '123'),
('Person 7', 'prachet.balaji@gmail.com', 2147483647, 2147483647, '123'),
('Person 8', 'prachet.balaji@gmail.com', 2147483647, 1234567890, '123'),
('Person 9', 'prachet.balaji@gmail.com', 2147483647, 2147483647, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`can`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
