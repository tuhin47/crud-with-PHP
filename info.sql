-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 02:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `dept` varchar(55) NOT NULL,
  `reg` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `dept`, `reg`) VALUES
(1, 'TUHIN', 'tuhintowhidul9@gmail.com', 'CSE', '2013331047'),
(3, 'Rizvi', 'rizvisust2013@gmail.com', 'CSE', '2013331015'),
(4, 'Alif', 'Alif@gmail.com', 'CSE', '2013331060'),
(5, 'Kola', 'kola@gmail.com', 'kola', '2013331021'),
(6, 'Kola', 'kola@gmail.com', 'kola', '2013331021'),
(7, 'Kola', 'tuhintowhidul9@gmail.com', 'CSE', '4615631'),
(8, 'dsjsfd', 'tanvirnihal@gmail.com', 'hkfwniwq', '4615631'),
(9, 'dsjsfd', 'tanvirnihal@gmail.com', 'hkfwniwq', '4615631'),
(10, 'dtj', 'xdjhjh@gg.hh', 'jh;', '877789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
