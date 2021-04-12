-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2021 pada 10.54
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
-- Kesalahan membaca data untuk tabel maproject.site_sig-trayek.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `maproject.site_sig-trayek`.`users`' at line 1

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
