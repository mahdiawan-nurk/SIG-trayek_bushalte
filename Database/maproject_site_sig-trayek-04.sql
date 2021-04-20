-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2021 pada 10.48
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

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `gambar`, `url_linked`, `isi_konten`, `created`) VALUES
(1, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-001-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(2, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-002-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(3, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-003-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(4, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-004-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(5, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-005-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(6, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-006-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(7, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-007-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00'),
(8, 'Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan.', 'berita01.jpeg', 'article-008-2021-04-16', ' Dalam rangka menyambut bulan suci Ramadhan tahun 1442 H / 2021 M Dinas Perhubungan Kabupaten Kampar melaksanakan Pengaturan Lalu Lintas dan Penertiban Parkir dilokasi Pasar Ramadhan, Rabu (14/04/2021). situasi lalu lintas diseputaran Kota Bangkinang. Terutama pada sore hari selalu ramai dengan banyaknya aktivitas masyarakat yang berbelanja untuk keperluan buka puasa.\r\nBeberapa kawasan menjadi pusat keramaian masyarakat, karena adanya pasar ramadhan yang di pusatkan di Jl. Prof. M. Yamin disekitar Pasar Bawah.\r\nKemudian untuk mengantisipasi kemacetan Lalu Lintas, khususnya disekitaran pasar  Ramadhan ini. Dinas Perhubungan Kabupaten Kampar, menurunkan sejumlah 71 personel pada titik – titik keramaian untuk melakukan Pengaturan Lalu Lintas :\r\n\r\n    Simpang Jl. A. Yani – Jl. Sudirman\r\n    Simpang Jl. Sudirman – Jl. DI. Panjaitan\r\n    Simpang Jl. Sudirman – Jl. Dt. Tabano\r\n    Simpang Jl. Sudirman – Jl. Ali Rasyid\r\n    Simpang Jl. Cik Ditiro – Jl. A. Rahman Saleh\r\n    Simpang Jl. Sudirman – Jl. A. Rahman Saleh\r\n    Simpang Jl. Ali Rasyid – Jl. Sisingamaharaja\r\n    Simpang Jl. Sisingamaharaja -Jl. Teuku Umar\r\n    Simpang Jl. Dt. Tabano – Jl. Sisingamaharaja\r\n    Simpang Jl. Jl. DI. Panjaitan – Jl. Sisingamaharaja\r\n    Simpang  Jl. A. Yani – Jl. Agussalim\r\n    Simpang Jl. DI. Panjaitan – Jl. Agussalim\r\n    Simpang Jl. Agussalim – Jl. Abdul Mutalib\r\n    Simpang Jl. Agussalim – Jl. Teuku Umar\r\n    Simpang Jl. Agussalim – Jl. Ali Rasyid\r\n    U Turn Kumantan\r\n    Simpang Jl. Ali Rasyid – Jl. M. Yamin\r\n    Simpang Jembatan Water Front City\r\n    Simpang Jl. Teuku Umar – Jl. M. Yamin\r\n    Depan Terminal Bangkinang\r\n    Depan Mesjid Raya Bangkinang\r\n    Simpang Jl. Mawar (Pasar Bangkinang)\r\n    Simpang Jl. Abdul Mutalib – Jl. M. Yamin\r\n    Pasar Air Tiris\r\n    Pasar Kuok\r\n\r\nTerkait kegiatan Pengaturan Lalu Lintas pada sore hari  selama bulan Ramadhan setiap sorenya akan dilakukan pengaturan oleh Dinas Perhubungan Kabupaten Kampar pada lokasi – lokasi keramaian dan daerah rawan kemacetan.', '2021-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id_bus` int(5) NOT NULL,
  `tnkb_bus` varchar(10) NOT NULL,
  `sumber_bus` varchar(128) NOT NULL,
  `info_berangkat` varchar(128) NOT NULL,
  `nm_pramudi` varchar(50) NOT NULL,
  `no_tlp_pramudi` varchar(15) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id_bus`, `tnkb_bus`, `sumber_bus`, `info_berangkat`, `nm_pramudi`, `no_tlp_pramudi`, `gambar`) VALUES
(1, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(2, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(3, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(4, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(5, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(6, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(7, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png'),
(8, '7076 F', 'Anggaran Pendapatan dan Belanja Negara (APBN)', '-', 'Imur', '-', 'bus01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halte`
--

CREATE TABLE `halte` (
  `id_halte` int(5) NOT NULL,
  `nama_halte` varchar(75) NOT NULL,
  `kordinat` varchar(128) NOT NULL,
  `lokasi_halte` varchar(150) NOT NULL,
  `kondisi_halte` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halte`
--

INSERT INTO `halte` (`id_halte`, `nama_halte`, `kordinat`, `lokasi_halte`, `kondisi_halte`, `gambar`) VALUES
(2, 'Halte di dekat SMA 1 Bangkinang', '101.022045;0.336335', 'Jalan Jendral Sudirman', 'Baik', 'halte01.jpg'),
(3, 'Halte di dekat SMA 2 Bangkinang', '101.031550;0.329898', 'Jalan A Rahman Saleh', 'Baik', 'halte02.jpeg'),
(4, 'Halte di dekat Islamic Center', '101.01956874132158;0.34401967051219007', 'Jalan Prof M. Yamin di depan Masjid Raya Islamid c', 'Sangat Baik', 'halte03.jpg');

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
(2, 'Administrator', 'admin@maproject.site', 'jl. nanti', 'e10adc3949ba59abbe56e057f20f883e', '1', '2021-04-16 17:52:49'),
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
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id_bus`);

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
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id_bus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
