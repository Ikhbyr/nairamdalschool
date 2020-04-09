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
-- Table structure for table `medee`
--

CREATE TABLE `medee` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `body` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `photo` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `title1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `body1` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date_day` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medee`
--

INSERT INTO `medee` (`id`, `title`, `body`, `photo`, `title1`, `body1`, `date_day`) VALUES
(2, 'zaza', 'asdf', '53639371_420255252073393_4377305632995278848_n.jpg', 'asdf', 'asdf', '2019-03-23 01:38:25'),
(3, 'zaza', '', 'noimage.jpg', 'ZXcxz', '', '2019-03-23 01:43:14'),
(4, 'zaza', 'XCZZC', 'noimage.jpg', 'ZXcxz', 'ZXCzC', '2019-03-23 01:43:35'),
(5, 'sads', '', 'noimage.jpg', 'sadf', '', '2019-03-23 01:44:38'),
(7, 'trieywiurewyiyr', 'wejrlkjwe;or', '53639371_420255252073393_4377305632995278848_n.jpg', 'wejrojwe;oirjeow', 'werjpojwerpojewporj', '2019-03-23 16:54:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medee`
--
ALTER TABLE `medee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medee`
--
ALTER TABLE `medee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
