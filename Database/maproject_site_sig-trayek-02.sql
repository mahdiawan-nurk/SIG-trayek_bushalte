-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2021 pada 11.28
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maproject.site_sig-trayek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halte`
--

CREATE TABLE `halte` (
  `id_halte` int(5) NOT NULL,
  `kordinat` varchar(128) NOT NULL,
  `lokasi_halte` varchar(50) NOT NULL,
  `kondisi_halte` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halte`
--

INSERT INTO `halte` (`id_halte`, `kordinat`, `lokasi_halte`, `kondisi_halte`, `gambar`) VALUES
(2, '101.022045;0.336335', 'Jalan Jendral Sudirman', 'Baik', '-'),
(3, '101.031550;0.329898', 'Jalan A Rahman Saleh', 'Baik', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(5) NOT NULL,
  `username` varchar(75) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` enum('1','2') NOT NULL COMMENT '1:Admin, 2:user',
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `alamat`, `password`, `level`, `last_login`) VALUES
(1, 'User 1', 'user1@maproject.site', 'jl. nanti', '827ccb0eea8a706c4c34a16891f84e7b', '2', '0000-00-00 00:00:00'),
(2, 'Administrator', 'admin@maproject.site', 'jl. nanti', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_forgotpass`
--

CREATE TABLE `users_forgotpass` (
  `id_forgot` int(5) NOT NULL,
  `email_users` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_verifikasi`
--

CREATE TABLE `users_verifikasi` (
  `id_verifikasi` int(5) NOT NULL,
  `email_users` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `verifikasi` enum('1','2') NOT NULL COMMENT '1:unverifikasi, 2:verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_verifikasi`
--

INSERT INTO `users_verifikasi` (`id_verifikasi`, `email_users`, `token`, `verifikasi`) VALUES
(1, 'administrator@maproject.site', '35e2dcdbea1950a7a290dd0c282da0a0', '2'),
(2, 'user1@maproject.site', '508df4cb2f4d8f80519256258cfb975f', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halte`
--
ALTER TABLE `halte`
  ADD PRIMARY KEY (`id_halte`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users_forgotpass`
--
ALTER TABLE `users_forgotpass`
  ADD PRIMARY KEY (`id_forgot`),
  ADD KEY `email_users` (`email_users`);

--
-- Indeks untuk tabel `users_verifikasi`
--
ALTER TABLE `users_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`),
  ADD KEY `email_users` (`email_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halte`
--
ALTER TABLE `halte`
  MODIFY `id_halte` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users_forgotpass`
--
ALTER TABLE `users_forgotpass`
  MODIFY `id_forgot` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users_verifikasi`
--
ALTER TABLE `users_verifikasi`
  MODIFY `id_verifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
