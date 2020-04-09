-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:46 PM
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
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `body` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` text CHARACTER SET utf8 NOT NULL,
  `link` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `title`, `body`, `status`, `link`) VALUES
(1, 'ÑÑƒÑ€Ð³ÑƒÑƒÐ»Ð¸Ð¹Ñ€ Ð¾Ð¹Ñ€ Ñ€Ñ…Ð¹Ð»Ñ€Ó©Ð´Ð»Ð¹Ñ€Ñ‹Ð±Ð´Ó© Ð¾Ñ€Ð»Ð¹Ð»Ñ‹Ñ€Ð±Ó©Ð´Ð»', 'Ñ€Ð»Ð¹Ñ‹Ñ€Ó©Ð»Ð´Ñ‹Ñ€Ð¹Ó©Ð´Ð» Ð»Ñ€Ð¹Ð»Ñ‹Ó©Ñ€ Ð¹Ð»Ð´Ñ€Ð±Ó© Ð»Ð´Ñ€Ð±Ð±Ñ‹Ð»Ñ€Ó©Ð»Ð´Ñ‹', '0', 'soft.jpg'),
(2, 'Ð±Ð¾Ð»Ñ‡Ð¾Ð¾ÑÐ¾Ð¹ Ð±Ð¸Ð»ÑÑ', 'sdfsadfas', '0', 'pic3.jpg'),
(5, 'sdfsd', 'sdfsad', '0', 'pic4.jpg'),
(9, 'ddf', 'æˆ‘æ˜¯', '', 'logo1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
