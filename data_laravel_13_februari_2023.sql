-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 05:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `alamat`, `password`, `status`) VALUES
(1, '', 'a', NULL, 'jalan a', 'a', ''),
(2, '', 'b', NULL, 'jalan b', 'b', ''),
(3, '', 'c', NULL, 'nama c', 'c', ''),
(4, '', 'phoenix', NULL, 'x', 'x', ''),
(5, '', 'skye', NULL, 'x', 'x', ''),
(6, '', 'x', NULL, 'x', 'x', ''),
(7, '', 'x', NULL, 'x', 'x', ''),
(8, '', 'x', NULL, 'x', 'x', ''),
(9, '', 'x', NULL, 'x', 'x', ''),
(10, '', 'x', NULL, 'x', 'x', ''),
(11, '', '', NULL, '', '', ''),
(12, '', 'x', NULL, 'x', '', ''),
(13, '', '', NULL, '', '', ''),
(14, '', 'x', NULL, 'x', '', ''),
(15, '', '', NULL, NULL, '', ''),
(16, '', 'x', NULL, NULL, 'x', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
