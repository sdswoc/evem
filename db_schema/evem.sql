-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2018 at 07:21 PM
-- Server version: 5.7.24-0ubuntu0.18.10.1
-- PHP Version: 7.2.10-0ubuntu1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evem`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `start_at` time DEFAULT NULL,
  `end_at` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `for_people` varchar(50) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `auth` varchar(100) DEFAULT NULL,
  `resources` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `enroll` varchar(10) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `organizer` varchar(5) DEFAULT NULL,
  `security_ques` varchar(50) DEFAULT NULL,
  `security_ans` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `gender`, `mobile`, `enroll`, `branch`, `year`, `organizer`, `security_ques`, `security_ans`) VALUES
(3, 'Adrij Shikhar', 'adrijshikhar', 'adrijshikhar85@gmail.com', 'm', '9634542342', '18121003', 'Polymer Science And Engineering', 1, 'n', 'In which city you were born?', 'bareilly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
