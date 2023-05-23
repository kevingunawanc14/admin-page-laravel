-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 06.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `catalog`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `catalog`
--

INSERT INTO `catalog` (`id`, `nama`, `judul`, `image`, `pdf`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(7, 'c1', 'c1', 'folderImageCatalog/btj9N12vrL1ftRnZMH3aUdbzK8tiOY1e2JH67uPA.jpg', 'folderPDFCatalog/UCV55ccsOdQ0lwY4qpKV8XDOKbLRcszNINqhbtvw.pdf', '1', '2023-04-28 15:04:48', 0, '2023-04-28 15:04:48', 0),
(8, 'c2', 'c2', 'folderImageCatalog/DQWtDByjJhasFD7ykXMlxNNut9SvBDPzrUHTr6Db.jpg', 'folderPDFCatalog/faQo8fxSZPmvyQGz72NXWBeauuOCvnBx5JcofmxU.pdf', '1', '2023-04-28 15:07:16', 0, '2023-04-28 15:07:16', 0),
(9, 'c3', 'c3', 'folderImageCatalog/WHUyZ28zDmkjqlkJVmXGIqgFL1i64XsYcujqgfVA.jpg', 'folderPDFCatalog/iZhFTmISXLaN2CW2Vz6d9ARZ0S6SWR8vofCgYYp9.pdf', '1', '2023-04-28 15:07:37', 0, '2023-04-28 15:07:37', 0),
(10, 'c4', 'c4', 'folderImageCatalog/GgnUW0ZKbh2UDraBFjEkQnty96hHma92NV3LR2Pq.jpg', 'folderPDFCatalog/53ZefESSc7ebIA3US4WBvI9IThmPmpMmHjNq30L0.pdf', '1', '2023-04-28 15:07:58', 0, '2023-04-28 15:07:58', 0),
(11, 'c5', 'c5', 'folderImageCatalog/qltMaxWaVxtHxfm76sZtOEB2vHiUVMTIvwXfu3zq.jpg', 'folderPDFCatalog/TW30EQtE1yuFxeEAqTgUmsLnVqgzXCNbMdecvPwL.pdf', '1', '2023-04-28 15:08:12', 0, '2023-04-28 15:08:12', 0),
(12, 'c6', 'c6', 'folderImageCatalog/YddmEewLyYvO5B73eszQFNOoDib7QXf8SRYAspKP.jpg', 'folderPDFCatalog/gzcPgoCm5Us416uxr5LDsyLXF5Qxr0CojeE8dOf1.pdf', '1', '2023-04-28 15:08:27', 0, '2023-04-28 15:08:27', 0),
(13, 'c7', 'c7', 'folderImageCatalog/5oKbJMvbRpIk6vhL7rX0mkPAr3J57tGFLbY7P2fc.jpg', 'folderPDFCatalog/riagDnBd5Bf72zDSadm27Rmuj3BkuXyYgvva1AYr.pdf', '1', '2023-04-28 15:08:41', 0, '2023-04-28 15:08:41', 0),
(14, 'c8', 'c8', 'folderImageCatalog/ZkdL8LqBbzjQ57ycxBc98S8HSZgF6qmoridaT3VK.jpg', 'folderPDFCatalog/eY9eXqBSrY6C0mXCmNRe9w0gT6FPbrKTM0wKNdjL.pdf', '1', '2023-04-28 15:08:55', 0, '2023-04-28 15:08:55', 0),
(15, 'c9', 'c9', 'folderImageCatalog/B63OyiQFb4Nzi1bb4EDD2GEPKgBF2JpEaezYK9Yf.jpg', 'folderPDFCatalog/7mw7jBn9IT9A3UX37I63q5pSFUtCB6ddn5jOM0js.pdf', '1', '2023-04-28 15:09:09', 0, '2023-04-28 15:09:09', 0),
(16, 'c10', 'c10', 'folderImageCatalog/yTKDhrtrUO4qFYcT70K41AVAPrkfgqfFkzaHO9mw.jpg', 'folderPDFCatalog/5VCGpCVng6ZdKWQnNHWGsL1OiFLsuwzBcXbutxPA.pdf', '1', '2023-04-28 15:09:29', 0, '2023-04-28 15:09:29', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`id`, `nama`, `email`, `pesan`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(2, 'a', 'b', 'c', '1', '2023-05-06 17:52:04', 0, '2023-05-06 17:52:04', 0),
(3, 'a', 'a', 'a', '0', '2023-05-07 01:43:51', 0, '2023-05-07 01:43:51', 0),
(4, 'a', 'ax', 'aa', '1', '2023-05-07 01:44:17', 0, '2023-05-07 01:50:33', 0),
(5, 'q', '', '', '', '2023-05-07 02:48:17', 0, '2023-05-07 02:48:17', 0),
(6, 'q', '', '', '', '2023-05-07 02:48:32', 0, '2023-05-07 02:48:32', 0),
(7, 'q', '', '', '', '2023-05-07 03:35:39', 0, '2023-05-07 03:35:39', 0),
(8, 'aa', '', '', '', '2023-05-07 03:36:17', 0, '2023-05-07 03:36:17', 0),
(9, 'q', '', '', '', '2023-05-07 03:36:35', 0, '2023-05-07 03:36:35', 0),
(10, 'q*', '', '', '', '2023-05-07 03:38:30', 0, '2023-05-07 03:38:30', 0),
(11, 'q', '', '', '', '2023-05-07 03:38:54', 0, '2023-05-07 03:38:54', 0),
(12, 'q', '', '', '', '2023-05-07 03:39:34', 0, '2023-05-07 03:39:34', 0),
(13, 'q', '', '', '', '2023-05-07 03:40:26', 0, '2023-05-07 03:40:26', 0),
(14, 'q', '', '', '', '2023-05-07 03:40:48', 0, '2023-05-07 03:40:48', 0),
(15, 'q', '', '', '', '2023-05-07 03:42:39', 0, '2023-05-07 03:42:39', 0),
(16, 'q', '', '', '', '2023-05-07 03:43:18', 0, '2023-05-07 03:43:18', 0),
(17, 'x', '', '', '', '2023-05-07 03:43:38', 0, '2023-05-07 03:43:38', 0),
(18, 'v', '', '', '', '2023-05-07 03:44:47', 0, '2023-05-07 03:44:47', 0),
(19, 'F', '', '', '', '2023-05-07 03:45:49', 0, '2023-05-07 03:45:49', 0),
(20, 'X', 'Q@GMAIL.COM', 'Q', '', '2023-05-07 03:53:39', 0, '2023-05-07 03:53:39', 0),
(21, 'xx', 'xx@gmail.com', 'x', '1', '2023-05-07 03:54:41', 0, '2023-05-07 03:55:17', 0),
(22, 't', 't@gmail.com', 't', '', '2023-05-07 03:57:05', 0, '2023-05-07 03:57:05', 0),
(23, 'x', 'x@gmail.com', 'x', '', '2023-05-07 03:58:22', 0, '2023-05-07 03:58:22', 0),
(24, 'xx', 'x@gmail.com', 'x', '', '2023-05-07 03:59:18', 0, '2023-05-07 03:59:18', 0),
(25, 'x', 'x@gmail.com', 'x', '1', '2023-05-07 04:10:11', 0, '2023-05-10 06:52:43', 0),
(26, 'xx', 'x@gmail.com', 'x', '1', '2023-05-07 04:10:24', 0, '2023-05-07 04:13:05', 0),
(27, 'q', 'q@gmail.com', 'q', '', '2023-05-07 04:36:59', 0, '2023-05-07 04:36:59', 0),
(28, 'ab', 'a@gmail.com', 'abcde', '1', '2023-05-07 05:01:29', 0, '2023-05-10 06:51:26', 0),
(29, 'ab', 'ab@gmail.com', 'abcde', '1', '2023-05-07 05:02:23', 0, '2023-05-07 05:02:35', 0),
(30, 'ab', 'ab@gmail.com', 'abcdeee', '1', '2023-05-07 05:04:21', 0, '2023-05-09 02:33:43', 0),
(31, 'ab', 'ab@gmail.com', 'abcdeee', '1', '2023-05-07 05:04:24', 0, '2023-05-10 06:48:10', 0),
(32, 'abcdef', 'abc@gmail.com', 'aaaaaaaa', '1', '2023-05-08 15:54:22', 0, '2023-05-09 02:42:02', 0),
(33, 'abcc', 'abc@gmail.com', 'aaaaaaaaaaaaaa', '1', '2023-05-09 01:38:17', 0, '2023-05-09 02:29:11', 0),
(34, 'test', 'test@gmail.com', 'testttttttttxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '1', '2023-05-09 01:40:47', 0, '2023-05-09 15:09:00', 0),
(35, 'ab', 'b@gmail.com', 'cdefg', '1', '2023-05-09 02:46:27', 0, '2023-05-09 15:08:57', 0),
(36, 'aaaaaaa', 'abc@gmail.com', 'aaaaaaaaaaaaaaaa', '', '2023-05-10 11:39:24', 0, '2023-05-10 11:39:24', 0),
(37, 'ab', 'a@gmail.com', 'abcde', '', '2023-05-10 13:40:21', 0, '2023-05-10 13:40:21', 0),
(38, 'abcde', 'abc@gmail.com', 'abcde', '', '2023-05-10 13:40:44', 0, '2023-05-10 13:40:44', 0),
(39, 'a', 'b@gmail.com', 'c', '', '2023-05-10 14:14:23', 0, '2023-05-10 14:14:23', 0),
(40, 'a', 'b@gmail.com', 'a', '', '2023-05-10 14:14:35', 0, '2023-05-10 14:14:35', 0),
(41, 'a', 'b@gmail.com', 'c', '1', '2023-05-10 14:14:48', 0, '2023-05-11 07:14:08', 0),
(42, 'a', 'a@gmail.com', 'tepe', '1', '2023-05-10 14:15:04', 0, '2023-05-11 07:00:48', 0),
(43, 'a', 'b@gmail.com', 'a', '1', '2023-05-10 14:15:18', 0, '2023-05-11 06:39:31', 0),
(44, 'aaa', 'a@gmail.com', 'a', '', '2023-05-15 08:32:37', 0, '2023-05-15 08:32:37', 0),
(45, 'a', 'x@gmail.com', 'x', '', '2023-05-15 08:36:45', 0, '2023-05-15 08:36:45', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `deskripsi`, `image`, `link`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(31, 'p1', 1, 'p1', 'folderImageProduct/XhNdMtiyuI4gNXMfjeeFexfk8AVeKJ440ek6FlCD.jpg', 'p1', '1', '2023-04-28 13:14:25', 0, '2023-04-30 02:44:00', 0),
(32, 'p2', 2, 'p2', 'folderImageProduct/4lgl1ukdIfexGCo8i5JbCI1JBZN1jHhdSZUE6BGK.jpg', 'p2', '1', '2023-04-28 13:14:59', 0, '2023-04-30 01:51:28', 0),
(33, 'p3', 3, 'p3', 'folderImageProduct/s9AE8m8zPqbWsy2PEYTorSGwtR9cX3XZAWtFkbpF.jpg', 'p3', '0', '2023-04-28 13:15:18', 0, '2023-04-30 02:44:59', 0),
(34, 'p4', 4, 'p4', 'folderImageProduct/pxrT3On0xWmoJAEw2ZiBV0OM5KmG36kfe5CTGSIQ.jpg', 'p4', '1', '2023-04-28 13:42:10', 0, '2023-04-30 02:44:09', 0),
(35, 'p5', 5, 'p5', 'folderImageProduct/R9BYvBejfCGCtAKU4d0GhZDf0UbbrF5sNycd3asc.jpg', 'p5', '1', '2023-04-28 13:42:26', 0, '2023-04-30 02:44:13', 0),
(36, 'p6', 6, 'p6', 'folderImageProduct/cw8NExUi6SgrmPyDn0tyL4F9beD5iItwyJXMQid4.jpg', 'p6', '1', '2023-04-28 13:43:12', 0, '2023-04-30 01:38:35', 0),
(37, 'p7', 7, 'p7', 'folderImageProduct/ogWyqV6k9WVuB5Df2mJw2I9mT7IK0mVi2p65Ubyj.jpg', 'p7', '1', '2023-04-28 13:43:41', 0, '2023-04-30 01:38:04', 0),
(38, 'p8', 8, 'p8', 'folderImageProduct/ZUcXl4sGDNvO129NsiNrVGKxKP4Mglav5KDlsMjM.jpg', 'p8', '1', '2023-04-28 13:43:57', 0, '2023-04-30 02:44:19', 0),
(39, 'p9', 9, 'p9', 'folderImageProduct/oI9SVZFJCy2AaRijlrsFbW9OVKi7opVwy1M54277.jpg', 'p9', '0', '2023-04-28 15:05:15', 0, '2023-05-03 13:57:53', 0),
(40, 'p10', 10, 'p10', 'folderImageProduct/dXvW5a6Qf8571sgDHTTUOdrhmOEuyiTKwq7UOnQ8.jpg', 'p10', '1', '2023-04-28 15:05:46', 0, '2023-04-28 15:05:46', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistic`
--

CREATE TABLE `statistic` (
  `id` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `page` varchar(200) NOT NULL,
  `status` char(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `statistic`
--

INSERT INTO `statistic` (`id`, `ip`, `page`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '180.247.16.184', 'http://127.0.0.1:5500/index.html', '', '2023-05-18 12:29:51', 0, '2023-05-19 12:29:51', 0),
(2, '180.247.16.184', 'http://127.0.0.1:5500/contact.html', '', '2023-05-19 12:30:14', 0, '2023-05-19 12:30:14', 0),
(3, '180.247.16.184', 'http://127.0.0.1:5500/contact.html', '', '2023-05-19 14:45:27', 0, '2023-05-19 14:45:27', 0),
(4, '180.247.16.184', 'http://127.0.0.1:5500/contact.html', '', '2023-05-19 14:45:35', 0, '2023-05-19 14:45:35', 0),
(5, '180.247.16.184', 'http://127.0.0.1:5500/contact.html', '', '2023-05-17 14:45:55', 0, '2023-05-19 14:45:55', 0),
(8, '180.241.7.174', 'http://127.0.0.1:5500/index.html', '', '2023-05-23 03:54:31', 0, '2023-05-23 03:54:31', 0),
(9, '180.241.7.174', 'http://127.0.0.1:5500/index.html', '', '2023-05-23 03:54:42', 0, '2023-05-23 03:54:42', 0),
(10, '180.241.7.174', 'http://127.0.0.1:5500/contact.html', '', '2023-05-23 03:54:50', 0, '2023-05-23 03:54:50', 0),
(11, '180.241.7.174', 'http://127.0.0.1:5500/contact.html', '', '2023-05-23 04:04:24', 0, '2023-05-23 04:04:24', 0),
(12, '180.241.7.174', 'http://127.0.0.1:5500/contact.html', '', '2023-05-23 04:04:25', 0, '2023-05-23 04:04:25', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `deskripsi`, `linkedin`, `facebook`, `instagram`, `image`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(13, 't1', 't1', 't1', 't1', 't1', 't1', 'folderImageTeam/BHm7a2Ot9wxnCGBslgmSMsAFxOIGMpnYvky1EOHk.jpg', '0', '2023-04-28 15:09:59', 0, '2023-04-30 01:47:09', 0),
(14, 't2', 't2', 't2', 't2', 't2', 't2', 'folderImageTeam/ApKYa1qTgEqRJsLGxoOG1Zcd37On2S5r35LzngBE.jpg', '1', '2023-04-28 15:10:12', 0, '2023-04-30 01:48:09', 0),
(15, 't3', 't3', 't3', 't3', 't3', 't3', 'folderImageTeam/QlKOpDt3mIn0BHGe9h6FlQmA8UVBbApQEzXGKRSA.jpg', '0', '2023-04-28 15:10:25', 0, '2023-04-30 01:47:21', 0),
(16, 't4', 't4', 't4', 't4', 't4', 't4', 'folderImageTeam/VVIyvOksVdCMBVD4IXSz7IquEHoA0NQbEjsbtkj4.jpg', '0', '2023-04-28 15:10:44', 0, '2023-04-30 01:47:28', 0),
(17, 't5', 't5', 't5', 't5', 't5', 't5', 'folderImageTeam/Nm6i4qGB4nYs0xYIggHVI3Ffz3An6Zn7jUhkO3Nm.jpg', '0', '2023-04-28 15:10:57', 0, '2023-04-30 01:47:34', 0),
(18, 't6', 't6', 't6', 't6', 't6', 't6', 'folderImageTeam/iEbf6oabGTVdadYIBjttwHwPIjDNHi6rz3QUoHki.jpg', '0', '2023-04-28 15:11:20', 0, '2023-04-30 01:47:41', 0),
(19, 't7', 't7', 't7', 't7', 't7', 't7', 'folderImageTeam/6Oeix5qfe7cc5sCin9jPlVX4RyFDf87WHry3ERBh.jpg', '1', '2023-04-28 15:11:34', 0, '2023-04-28 15:11:34', 0),
(20, 't8', 't8', 't8', '', '', 't8', 'folderImageTeam/M38Bf4z2Q2vMXBCx55p3ffv13gkg39ixEMI4JuiW.jpg', '1', '2023-04-28 15:11:49', 0, '2023-04-28 15:39:36', 0),
(21, 't9', 't9', 't9', 't9', 't9', 't9', 'folderImageTeam/4iC2axRLF5MHlAYiDYncs7jszAAqGvVOvifwGE5O.jpg', '0', '2023-04-28 15:12:03', 0, '2023-04-30 01:47:52', 0),
(22, 't10', 't10', 't10', 't10', '', 't10', 'folderImageTeam/wDClLupuOzDCvTx8ffI59325O4UPwxrS5fpkEhQK.jpg', '1', '2023-04-28 15:12:23', 0, '2023-04-28 15:19:15', 0),
(23, 'a', 'b', 'c', 'd', 'e', 'f', 'folderImageTeam/M4WK9ozL3PDK8IrdsrAquuhXuoCUyTr3oHHxmQvl.jpg', '1', '2023-05-04 09:25:59', 0, '2023-05-04 09:25:59', 0),
(24, 'xxxx', 'xxxxxxxxxxx', 'ccccccccccc\r\nccccccccccccccccccccccccccccca\r\n\r\n\r\nxxxxxxx', '1', '1', '1', 'folderImageTeam/yDScIVTC2aYva1MhbCWnZ9yGCSDKrUwbD4VxoCet.jpg', '1', '2023-05-04 09:30:02', 0, '2023-05-04 09:46:07', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `email`, `alamat`, `password`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'harbor', 'harbor', 'harbor@gmail.com', 'sea', '$2y$10$AoR.a7glsY068Vt8LdKRjO0L7oxth9cy1Fc7mjIp2mGyuMwPBhgmS', '0', '2023-03-13 07:28:44', 0, '2023-03-13 07:49:04', 0),
(2, 'move', 'move', 'move@gmail.com', 'move', '$2y$10$tsX7LDJmi5BLXJP730K2J.qCVfJyDHJV5uszzYwCEYhMoD4MO..5e', '0', '2023-03-13 07:55:12', 0, '2023-03-13 07:55:12', 0),
(3, 'gecko', 'gecko', 'gecko@gmail.com', 'gecko', '$2y$10$OKQeFzl7xDOWqKyoU9h4QeNNc.B725wIb6q/mZjTJmDa6310XwdL2', '0', '2023-03-13 08:02:29', 0, '2023-03-13 08:02:29', 0),
(4, 'thief', 'thief', 'thief@gmail.com', 'thief', '$2y$10$F9NMAeyQNuWFsej9B4eBGuG0PtKzIL3yfdBfnf5KlqJ3VtvJ2KN8a', '0', '2023-03-13 08:15:28', 0, '2023-03-13 08:15:28', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statistic`
--
ALTER TABLE `statistic`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `statistic`
--
ALTER TABLE `statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
