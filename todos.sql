-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 06:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todos`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `title`) VALUES
(9, 9, 'jhbcdhcbhc'),
(2, 3, ''),
(3, 2, ''),
(10, 9, 'jhskbc'),
(11, 9, 'nbxjhbkxnakj'),
(12, 10, 'bxhbxkjanxa'),
(13, 10, 'jkxnajxkj'),
(14, 9, 'jknkjn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `admin` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `admin`) VALUES
(11, 'h', 'h@gmail.com', '$2y$10$SvfT48bWVfHbmnIgI4dzH.nH4Zns7rTZfs9o/eNuT534XqJeRqFHq', 'h', 'h', NULL),
(2, 'admin', 'habti2656@gmail.com', '$2y$10$Mu.dVOTCuI70hL67N5ukye7hHEipJkhYrH2Ee7clRi395Yiq4UqOa', 'hab', 'sdgszd', NULL),
(3, 'nikola', 'hab2656@gmail.com', '$2y$10$LnP2g05kqITbp0kY.dOPUOBjgRm9cPPeQHlnizvswireGjba9bp2e', 'zsdgds', 'mat', NULL),
(9, 'insa', 'insa@gmail.com', '$2y$10$9rhXQokPkvyMGpEI8dU9H.rsUWFyxvFNhmgkNF3EBeSu8OTrf0xT6', 'insa', 'insa', '@dmin'),
(10, 'haila', 'haila@haila.com', '$2y$10$RDAi9eNK0HOMDy8ojnSyp.3/zhOAMrOzIZx/4eS90QZwXgFrRJ3hC', 'haila', 'haila', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `admin` (`admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
