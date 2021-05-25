-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2021 at 09:19 AM
-- Server version: 5.6.38
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfectcake`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Anurag', 'Kulkarni', 'kanurag0801@gmail.com', '$2y$12$AMEusfFD2vTYTfN3luYN1elR8mRV9cJjSq1lgvTyJrArDXCeJ4zaW'),
(2, 'Vrushali', 'Kulkarni', 'kvrushali@yahoo.com', '$2y$12$wr2i.PpYymIllm4DBEsLc.V8RguLWeHA4Tp7tJkQ3hJOq5.j2.LPG'),
(3, 'Archit', 'Kulkarni', 'archit@me.com', '$2y$12$8SPQUkTDtbgq9HqY4TmlduI0jVq46ErE8QO6gTbGV/AJkc7RE.unC'),
(4, 'Anurag', 'Kulkarni', 'kanurag@gmail.com', '$2y$12$mr/9Z92XmBJpQXK7CZyoge6Q.wfFCOdwP6Fc30d2eCtW1K3kaowPC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
