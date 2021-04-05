-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2021 at 08:59 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vokasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `user_id`, `nama`, `jabatan`, `mapel`, `avatar`, `created_at`, `updated_at`) VALUES
(8, 0, 'Ahmad Kardiman', 'MGMP', 'PABP', 'ahmad.jpg', '2021-02-08 21:54:07', '2021-02-15 20:30:12'),
(9, 0, 'Agus Mulyadi', 'Wakasek Kurikulum', 'Bahasa Indonesia', NULL, '2021-02-08 21:55:15', '2021-02-08 21:55:15'),
(10, 0, 'Bustomi', 'Instruktur MMD', 'PAV, Sinematografi', 'bustomi.jpg', '2021-02-08 22:00:53', '2021-02-15 21:11:27'),
(11, 0, 'Dedy Hermady', 'Kepala Sekolah', '-', '', '2021-02-08 22:07:56', '2021-02-08 22:07:56'),
(12, 0, 'Dwiky Maulana Putra', 'Instruktur OTKP', 'K3, Peng Pariwisata,', '', '2021-02-08 22:11:46', '2021-02-08 22:11:46'),
(13, 0, 'Elah Sari Purnama', 'Instruktur MMD', 'PKDK EGP, DDG', '', '2021-02-08 22:14:40', '2021-02-08 22:14:40'),
(14, 0, 'Firman F Muhidin', 'Ka. Prodi MMD', 'Eldas, Junior Operator', 'firman.jpg', '2021-02-08 22:20:56', '2021-02-15 20:56:47'),
(15, 0, 'Gabe Marta Panggabean', 'Ka. Prodi OTKP', 'Kepeg Humas', 'gabe.jpg', '2021-02-08 22:25:15', '2021-02-15 20:58:36'),
(16, 0, 'Hardianto', 'Wakasek Humas', 'Junior Operator, PPKN, SBS,', '', '2021-02-08 22:45:48', '2021-02-08 22:45:48'),
(17, 0, 'Iis Siskowati', 'MGMP', 'Matematika', '', '2021-02-08 22:50:06', '2021-02-08 22:50:06'),
(18, 0, 'Lani Wiranti Andani', 'MGMP', 'Keuangan', '', '2021-02-08 22:51:33', '2021-02-09 01:02:16'),
(19, 0, 'Muhammad Adul Gofar', 'MGMP', 'PABP', '', '2021-02-08 22:53:56', '2021-02-08 22:53:56'),
(20, 0, 'Muchammad Rizky Yudistira', 'Instruktur TKJ', 'Web Programming I, II, II', '', '2021-02-08 22:56:36', '2021-02-08 22:56:36'),
(21, 0, 'Muhammad Rizki Novaldi Syamdaruna', 'Instruktur TKJ', 'Basic Computer', '', '2021-02-09 00:32:54', '2021-02-09 00:32:54'),
(22, 0, 'Nisa Fitri Andriyanti', 'MGMP', 'Matematika', '', '2021-02-09 00:48:20', '2021-02-09 00:48:20'),
(23, 0, 'Noerul Sholikhah Qifayatul Dalfa', 'Wakasek Sapras', 'Bahasa Indonesia', 'noerul.jpg', '2021-02-09 00:51:17', '2021-02-15 20:59:59'),
(24, 0, 'Nunik Dwi Handayani', 'Instruktur OTKP', 'Sapras, Basic Secretary', 'nunik.jpg', '2021-02-09 00:54:08', '2021-02-15 21:00:52'),
(25, 0, 'Sri Wulandari Retno', 'Ka. Prodi EM', 'K3', '', '2021-02-09 01:05:52', '2021-02-09 01:05:52'),
(27, 0, 'Susan Setiawan', 'Instruktur TKJ', 'Networking Industri', '', '2021-02-09 01:14:12', '2021-02-09 01:14:12'),
(28, 0, 'Syarifah Asril Azmiyah', 'MGMP', 'Bahasa Inggris', '', '2021-02-09 01:22:35', '2021-02-09 01:22:35'),
(29, 0, 'Tri Resdianti', 'MGMP', 'PPKN', '', '2021-02-09 01:23:53', '2021-02-09 01:23:53'),
(30, 0, 'Yoki Tri Wibowo', 'Ka. Prodi TKJ', 'Networking Industry', 'yoki.jpg', '2021-02-09 01:25:33', '2021-02-15 21:01:35'),
(31, 0, 'Yon Aidil Indra', 'Instruktur MMD', 'Fisika, DMI, A2D3D', 'yon.jpg', '2021-02-09 01:31:43', '2021-02-15 21:10:43'),
(32, 12, 'Baban Nurhadi', 'Instruktur EM', 'Kelistrikan', NULL, '2021-02-19 23:26:07', '2021-02-19 23:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `semester` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_02_04_031418_create_table_guru', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'adminvokasinasionalbandung@gmail.com', NULL, '$2y$10$sMrVKiu1j7JwjWk8ak23JOhQ6yF1qrJ6sNixnUQf2LSz0KdJ9UJ2O', 'GPtiucGNO5fDYYsavwjVy6gQQyDoVEDgVb1etAzBLjqPb0a2cik1wwxh64B3', '2021-02-08 19:35:32', '2021-02-08 19:35:32'),
(12, 'guru', 'Baban Nurhadi', 'babannur@gmail.com', NULL, '$2y$10$2/3HE9E3WRa8BchQ3iTDz.aAhvlcAtVhN.o5E1t4LAMC.uMVLtk3a', 'v57TzGMknHyLcfSIsorYjWFleqr4SZl2RGNUvPc5geC5tDlpm3GPJZbCggs7', '2021-02-19 23:26:07', '2021-02-19 23:26:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
