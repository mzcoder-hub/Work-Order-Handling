-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2020 pada 08.24
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_complain`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `complain`
--

CREATE TABLE `complain` (
  `ID_COMPLAIN` varchar(6) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `NPK` int(6) NOT NULL,
  `Divisi` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Nama_Atasan` varchar(255) NOT NULL,
  `Subject_Abnormality` varchar(255) NOT NULL,
  `Keterangan_Abnormality` text NOT NULL,
  `Add_info` text DEFAULT NULL,
  `Attachment` varchar(255) DEFAULT NULL,
  `Status` enum('Open','On Progress','Closed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `role`, `last_login`, `created_at`, `is_active`) VALUES
(6, 'user', '$2y$10$HaK18z/QMIWIXIfKUUDtfOTLFa6XMM52kqeiuxBK1lKKKSpAFj4Gm', 'astra@gmail.com', 'User Astra', 'user', '2020-10-08 06:06:40', '2020-10-08 06:03:32', 1),
(8, 'admin', '$2y$10$LL/xPUbNBJ2nOQaCYsoU5ub3faHiKOYKPmOzom1PuyaHeP6pzKYja', 'astra@gmail.com', 'Admin Astra', 'admin', '2020-10-08 06:06:22', '2020-10-08 06:06:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`ID_COMPLAIN`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
