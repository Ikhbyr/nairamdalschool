-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:47 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `status` varchar(191) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`status`, `id`, `username`, `password`, `createDate`, `email`) VALUES
('0', 1, 'Ikhee', 'ikhee0711', '2019-02-04 01:11:47', 'iheeizee@gmail.com'),
('0', 2, 'Ихбаяр', 'ikhee0711', '2019-02-02 00:01:13', 'ikhbayar42@gmail.com'),
('0', 4, 'Hogymaa', 'ikhee0711', '2019-02-02 00:04:06', 'ikhbayar42@gmail.com'),
('0', 37, 'ikhee2', 'ikhee0711Q', '2019-02-02 02:33:41', 'ikhbayar42@gmail.com'),
('logo1.jpg', 38, 'bataas', 'Ikhee0711', '2019-02-04 14:00:09', 'ikhee@6.'),
('', 39, 'ikhbayar', 'Ikhee0711', '2019-03-02 00:47:53', 'iheeizee@gmail.com'),
('', 40, 'dsajpf', 'sdfdsafe1A', '2019-03-23 16:50:08', 'sdfds@.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
