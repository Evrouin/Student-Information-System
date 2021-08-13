-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 09:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `user_name`, `password`, `name`, `email`) VALUES
(5, 'ADMIN-Elway', '4a4dcb0d89c8bba8922ef82fda722f9c', 'Elway Cortez', 'elwaycortez@gmail.com'),
(6, 'ADMIN-JOSH', '4a4dcb0d89c8bba8922ef82fda722f9c', 'Joshu Samaniego', 'joshuasamaniego@gmail.com'),
(7, 'ADMIN-Test', '2c9341ca4cf3d87b9e4eb905d6a3ec45', 'Johnny Test', 'johnnytest@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_code` varchar(100) NOT NULL,
  `student_number` varchar(40) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `section` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `student_number`, `full_name`, `section`) VALUES
('COMP 20053 - Information Assurance and Security', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COMP 20053 - Information Assurance and Security', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COMP 20053 - Information Assurance and Security', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COMP 20153 - Software Engineering 1', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COMP 20153 - Software Engineering 1', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COMP 20153 - Software Engineering 1', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COMP 20163 - Web Development', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COMP 20163 - Web Development', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COMP 20163 - Web Development', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COMP 20173 - Data Communications and Networking', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COMP 20173 - Data Communications and Networking', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COMP 20173 - Data Communications and Networking', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COSC 30073 - Introduction to Artificial Intelligence', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COSC 30073 - Introduction to Artificial Intelligence', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COSC 30073 - Introduction to Artificial Intelligence', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COSC 40013 - CS Thesis Writing 1', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COSC 40013 - CS Thesis Writing 1', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COSC 40013 - CS Thesis Writing 1', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4'),
('COSC-E2 - CS Elective 2', '2018-00554-MN-0', 'Joshua Samaniego', 'BSCS 3-2'),
('COSC-E2 - CS Elective 2', '2018-02639-MN-0', 'King Red Sanchez', 'BSCS 3-P'),
('COSC-E2 - CS Elective 2', '2018-12345-MN-0', 'Johhny Test', 'BSCS 3-4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `section` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `last_name`, `email`, `section`) VALUES
(10, '2018-03657-MN-0', '4a4dcb0d89c8bba8922ef82fda722f9c', 'Elway', 'Cortez', 'jepcortez@iskolarngbayan.pup.edu.ph', 'BSCS 3-1'),
(44, '2018-00554-MN-0', '4a4dcb0d89c8bba8922ef82fda722f9c', 'Joshua', 'Samaniego', 'jtsamaniego@iskolarngbayan.pup.edu.ph', 'BSCS 3-2'),
(55, '2018-02639-MN-0', 'a33d8b0fcb95dd88cd47ee9fa0a4fefa', 'King Red', 'Sanchez', 'krmsanchez@iskolarngbayan.pup.edu.ph', 'BSCS 3-P'),
(61, '2018-12345-MN-0', '4a4dcb0d89c8bba8922ef82fda722f9c', 'Johhny', 'Test', 'johnnytest@iskolarngbayan.pup.edu.ph', 'BSCS 3-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_code`,`student_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
