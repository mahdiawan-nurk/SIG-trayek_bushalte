-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2021 pada 12.10
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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `url_linked` varchar(75) NOT NULL,
  `isi_konten` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `halte`
--

CREATE TABLE `halte` (
  `id_halte` int(5) NOT NULL,
  `kordinat` varchar(128) NOT NULL,
  `lokasi_halte` varchar(150) NOT NULL,
  `kondisi_halte` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halte`
--

INSERT INTO `halte` (`id_halte`, `kordinat`, `lokasi_halte`, `kondisi_halte`, `gambar`) VALUES
(2, '101.022045;0.336335', 'Jalan Jendral Sudirman', 'Baik', '-'),
(3, '101.031550;0.329898', 'Jalan A Rahman Saleh', 'Baik', '-'),
(4, '101.01956874132158;0.34401967051219007', 'Jalan Prof M. Yamin di depan Masjid Raya Islamid c', 'Sangat Baik', 'dummy.png');

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
(2, 'Administrator', 'admin@maproject.site', 'jl. nanti', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00 00:00:00'),
(6, 'mahdiawan', 'mahdid355@gmail.com', 'jl.kartini', 'd93591bdf7860e1e4ee2fca799911215', '2', '2021-04-15 17:04:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_forgotpass`
--

CREATE TABLE `users_forgotpass` (
  `id_forgot` int(5) NOT NULL,
  `email_users` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_forgotpass`
--

INSERT INTO `users_forgotpass` (`id_forgot`, `email_users`, `token`) VALUES
(2, 'mahdid355@gmail.com', 'bbf5f77f15568d267468a04d3e1cfe61'),
(3, 'mahdid355@gmail.com', '0a1744380b6c4d9dc795c6bde95da46f');

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
(1, 'mahdid355@gmail.com', '6030427ca7497d7677db1c9ad55ad5bd', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halte`
--
ALTER TABLE `halte`
  MODIFY `id_halte` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users_forgotpass`
--
ALTER TABLE `users_forgotpass`
  MODIFY `id_forgot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users_verifikasi`
--
ALTER TABLE `users_verifikasi`
  MODIFY `id_verifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
