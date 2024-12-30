-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 05:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(22) NOT NULL,
  `name` varchar(44) DEFAULT NULL,
  `contact` varchar(33) DEFAULT NULL,
  `product` varchar(55) DEFAULT NULL,
  `email` varchar(44) DEFAULT NULL,
  `message` varchar(88) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `contact`, `product`, `email`, `message`) VALUES
(1, 'Rahul Sarkar', '9131644480', 'bash 1 pro', 'rahulsarkar0121@gmail.com', 'nothing to do in these field'),
(2, 'Digeshwar', '93849385938', 'bash 1 pro', 'digesh@gmail.com', 'nothing to do here ..'),
(3, 'Yashu(giraf)', '9093493402', 'bash 1 pro', 'grafhoon@gamil.com', 'abhi bhi phone nhi aya jldi nhi ki to change ho jeaga mood 7 din hone wala hain'),
(5, 'Priyanka ', '879879879879', 'bash 1', 'priyanka@gmail.com', 'HR of team');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
