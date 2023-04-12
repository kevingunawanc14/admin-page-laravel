-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 09:33 AM
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

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `nama`, `judul`, `image`, `pdf`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(6, 'a', 'a', 'folderImageCatalog/2POx2Yn37P6IOXKhhhespSYd4IdohIU74dF2P7V9.jpg', 'folderPDFCatalog/fn2t5lxowZnsV1VpzoRu8zgngYbR582Uv99uQVLk.pdf', '1', '2023-04-01 02:57:01', 0, '2023-04-01 02:57:34', 0);

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
(22, 'aaa', 1, '1', 'images/57XfEPxuNSSEA7MSlvk6URiXusI20fS79GgcB8oP.jpg', '1', '1', '2023-03-18 02:53:47', 0, '2023-03-18 02:57:15', 0),
(23, '1', 1, '1', 'images/ofbusSuaxSGJTyjJMXBqoxp0rFvO2EN93F4fZR4b.png', '1', '0', '2023-03-28 01:09:01', 0, '2023-03-28 01:09:01', 0),
(27, '12222', 1, '1', 'folderGambar/mxQUkdxwH9YQRHhW6k3U5nNZpL2miS684AyNPKXA.jpg', '1', '0', '2023-03-30 00:38:20', 0, '2023-03-30 00:43:02', 0),
(28, 'abc1', 1, 'aa', 'folderGambar/gEgKyTdd2yYKZVZaxmvul8HRBg3StZNYpoNEgiPL.jpg', '1', '0', '2023-03-31 15:35:59', 0, '2023-04-01 02:15:04', 0),
(29, 'a1', 1, '1', 'folderGambar/nchrc3RZtSCZkx76CgU5YoYoe7q466xQjeJJNx5L.jpg', '1', '0', '2023-04-01 02:19:22', 0, '2023-04-01 02:19:27', 0),
(30, 'a2', 1, '1', 'folderImageProduct/ue1xCipV8XuBa4UlrcMGG29QETpQIcV1h1ITcisz.jpg', '1', '0', '2023-04-01 02:20:35', 0, '2023-04-01 02:49:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `deskripsi`, `linkedin`, `facebook`, `instagram`, `image`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(12, '1', '1', '1', '1', '1', '1', 'folderImageTeam/Ju1uU58f8bS8fx0OLI3w2rSSaKfpzRQgrGLIcsNq.png', '1', '2023-04-11 10:35:18', 0, '2023-04-11 10:45:28', 0);

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
-- Indexes for table `team`
--
ALTER TABLE `team`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
