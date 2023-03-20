-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 08:19 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `deskripsi`, `image`, `link`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(20, 'a4', 1, 'a', 'images/QGcHLmrLvggdgMrNf94nxk5Nrsnete50GW7ZSHFn.jpg', 'a', '0', '2023-03-17 14:40:36', 0, '2023-03-18 02:57:41', 0),
(21, 'a5', 1, '1', 'images/4XQY5IAWFZshArXXCRSHbg7Mn4nN8JZJMDA3gyLL.jpg', '1', '0', '2023-03-17 14:42:35', 0, '2023-03-17 14:42:35', 0),
(22, 'aaa', 1, '1', 'images/57XfEPxuNSSEA7MSlvk6URiXusI20fS79GgcB8oP.jpg', '1', '1', '2023-03-18 02:53:47', 0, '2023-03-18 02:57:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `alamat`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'harbor', 'harbor', 'harbor@gmail.com', 'sea', '$2y$10$AoR.a7glsY068Vt8LdKRjO0L7oxth9cy1Fc7mjIp2mGyuMwPBhgmS', '0', '2023-03-13 07:28:44', 0, '2023-03-13 07:49:04', 0),
(2, 'move', 'move', 'move@gmail.com', 'move', '$2y$10$tsX7LDJmi5BLXJP730K2J.qCVfJyDHJV5uszzYwCEYhMoD4MO..5e', '0', '2023-03-13 07:55:12', 0, '2023-03-13 07:55:12', 0),
(3, 'gecko', 'gecko', 'gecko@gmail.com', 'gecko', '$2y$10$OKQeFzl7xDOWqKyoU9h4QeNNc.B725wIb6q/mZjTJmDa6310XwdL2', '0', '2023-03-13 08:02:29', 0, '2023-03-13 08:02:29', 0),
(4, 'thief', 'thief', 'thief@gmail.com', 'thief', '$2y$10$F9NMAeyQNuWFsej9B4eBGuG0PtKzIL3yfdBfnf5KlqJ3VtvJ2KN8a', '0', '2023-03-13 08:15:28', 0, '2023-03-13 08:15:28', 0),
(5, 'xxx', 'xxx', 'xxx2\\@gmail.com', 'xxx', '$2y$10$zrY49s4ijsvByC/Ys3ktseZhYU9C/63JNX28e8QB3Z7YuBNCjI6fi', '0', '2023-03-13 09:45:32', 0, '2023-03-13 09:45:32', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
