-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:01 PM
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
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `ner` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ovog` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `phone` varchar(20) NOT NULL,
  `photo` text NOT NULL,
  `zereg` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amjilt` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `huis` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ovog1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ner1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zereg1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amjilt1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `undes` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `ner`, `ovog`, `phone`, `photo`, `zereg`, `amjilt`, `huis`, `ovog1`, `ner1`, `zereg1`, `amjilt1`, `undes`) VALUES
(1, 'Ð˜Ñ…Ð±Ð°ÑÑ€', 'ÐžÑ‚Ð³Ð¾Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€', '99034024', 'ikhee pro.jpg', 'Ñ€Ð»Ð¹Ñ€Ó©Ð»Ð±Ñ‹Ñ€Ð¹Ð»Ó©', 'Ð¯Ñ€Ð¸Ñ… ÑŽÐ¼Ð³Ò¯Ð¹ ÑˆÐ´ÑÑ ÑÐ°Ð¹Ð½ Ð±Ð°Ð¹Ð½Ð°', 'Ð­Ð¼ÑÐ³Ñ‚ÑÐ¹', 'Otgonbaatar', 'ikhee', 'Ð¹Ñ‹Ð±Ñ€Ó©Ð¾Ð¹Ð»Ñ‹Ñ€Ó©Ð±Ð»Ð´Ð±Ð¹Ñ‹', 'Ð·Ð°Ð·Ð· ÑŽÑƒ Ñ‡ Ð±Ð¸Ñ‡ÑÐ²Ð¸Ñ…Ð¿ÑÑ', 'ÐœÐ¾Ð½Ð³Ð¾Ð»'),
(2, 'Ð˜Ñ…Ð±Ð°ÑÑ€', 'ÐžÑ‚Ð³Ð¾Ð½Ð±Ð°Ð°Ñ‚Ð°Ñ€', '99034024', 'noimage.jpg', 'Ñ€Ð»Ð¹Ñ€Ó©Ð»Ð±Ñ‹Ñ€Ð¹Ð»Ó©', 'Ñ€Ð»Ð¾Ð¹Ñ€Ñ‹Ð¾Ð±Ó© Ó©Ñ€Ð´Ð»Ó© Ñ€Ð¹Ð´Ñ‹Ð»Ñ€Ó© Ð¹Ñ€Ñ‹Ð´Ð± Ñ€Ð»Ð¹Ñ‹Ñ€ Ð»Ñ€Ð¹Ñ‹Ð±Ð»Ð¾Ñ€Ð´Ð»Ñ€Ð»Ñ‹Ð¹Ð´Ð± Ñ€Ð»Ñ€Ð¹Ð´Ñ‹Ó© Ñ€Ð»Ð¹Ñ€Ó©Ñ‹Ð± Ð¹Ð±Ð»Ñ€Ð´Ó©Ð» ', 'Ð­Ñ€ÑÐ³Ñ‚ÑÐ¹', 'Otgonbaatar', 'ikhee', 'Ð¹Ñ‹Ð±Ñ€Ó©Ð¾Ð¹Ð»Ñ‹Ñ€Ó©Ð±Ð»Ð´Ð±Ð¹Ñ‹', 'Ð¹Ð¾Ñ‹Ð»Ó©Ð±Ñ€ Ð»Ð¾Ð¹Ñ‹Ñ€Ð»Ó© Ñ€Ð´Ð¹Ñ‹Ð»Ñ€Ó© Ð´Ð»Ð¹Ñ‹Ñ€Ð¾Ð´Ó©Ð» Ñ€Ð¹Ð»Ñ‹Ð¾Ñ€Ó© Ð´Ð»Ñ‹Ð¹Ñ€Ð± Ð´Ð»Ð±Ñ€Ð»Ð´Ð¹Ñ€Ó©Ð¹Ð»Ñ€ Ð»Ñ€Ñ‹Ð¹Ð´Ð» Ñ€Ó©Ð¹Ð´Ñ‹Ð»Ñ€ Ð»Ñ€Ð¹Ñ‹Ð»Ñ€ Ð´Ð¹Ð±Ð»Ñ‹Ñ€Ð´Ó© Ñ€Ð¹Ñ‹Ð´ÑˆÒ¯Ñ€ Ò¯ÑˆÐ¹Ñ€ Ò¯ÑˆÑ€Ð¹Ñ‹Ð´Ò¯ Ñ€Ð´Ó©Ò¯', 'ÐœÐ¾Ð½Ð³Ð¾Ð»');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
