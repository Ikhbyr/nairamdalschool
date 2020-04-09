-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `zarlal`
--

CREATE TABLE `zarlal` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `body` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `body1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zarlal`
--

INSERT INTO `zarlal` (`id`, `title`, `body`, `date`, `title1`, `body1`) VALUES
(1, 'Ð¥Ð¾Ñ‘Ñ€Ð´Ð°Ñ…ÑŒ Ð·Ð°Ñ€Ð»Ð°Ð»', 'ÑÐ±Ñ‹Ð¹Ð¹Ñ‹', '2019-03-23 17:25:46', 'Ñ€Ñ‹Ð¹Ð±Ð»Ð´Ð¾Ó©Ñ…Ð± ', 'Ñ‹Ð±Ó©Ñ‹');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zarlal`
--
ALTER TABLE `zarlal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zarlal`
--
ALTER TABLE `zarlal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
