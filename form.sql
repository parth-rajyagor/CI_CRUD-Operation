-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 12, 2024 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT current_timestamp(),
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `language`, `gender`, `qualification`, `image`, `added_on`, `updated_on`, `status`) VALUES
(1, 'testname1', 'testname1@gmail.com', '0000000000', 'PHP', 'Male', 'BTech', 'user_image1.jpg', '12 Dec, 2024', '2024-12-12 08:56:29', 1),
(2, 'testname2', 'testname2@gmail.com', '1111111111', 'JAVA', 'Female', 'BCA', 'user_image2.jpg', '12 Dec, 2024', '2024-12-12 09:05:38', 1),
(3, 'testname3', 'testname3@gmail.com', '2222222222', 'Python', 'Male', 'BSC', 'user_image3.jpg', '12 Dec, 2024', '2024-12-12 04:36:21', 0),
(5, 'testname4', 'testname4@gmail.com', '3333333333', 'PHP', 'Female', 'BTech', 'user_image41.jpg', '12 Dec, 2024', '2024-12-12 09:08:55', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
