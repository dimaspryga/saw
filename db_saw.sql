-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2022 pada 13.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_analisa`
--

CREATE TABLE `tbl_analisa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `pendidikan` int(1) NOT NULL,
  `ipk` double NOT NULL,
  `tertulis` int(3) NOT NULL,
  `wawancara` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_analisa`
--

INSERT INTO `tbl_analisa` (`id`, `nama`, `penempatan`, `pendidikan`, `ipk`, `tertulis`, `wawancara`) VALUES
(636, 'Teno Tundoyekti ', 'Pemeliharaan Jalan dan Jembatan', 1, 3.35, 75, 85),
(637, 'Ida Puspita', 'Pemeliharaan Jalan dan Jembatan', 2, 3.23, 80, 80),
(638, 'Among Salahudin', 'Pemeliharaan Jalan dan Jembatan', 3, 3.25, 80, 75),
(639, 'Hadi Mahendra', 'Pemeliharaan Jalan dan Jembatan', 3, 3.33, 85, 85),
(640, 'Asirwanda Prasetya', 'Pemeliharaan Jalan dan Jembatan', 5, 2.97, 83, 78);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `pendidikan` varchar(2) NOT NULL,
  `ipk` double NOT NULL,
  `tertulis` int(3) NOT NULL,
  `wawancara` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `penempatan`, `pendidikan`, `ipk`, `tertulis`, `wawancara`) VALUES
(21, 'Agus Faizun  ', 'Penyehatan Lingkungan ', 'S1', 3.31, 83, 80),
(22, 'Alis', 'Kelompok Substansi Keuangan', 'S1', 3.54, 78, 90),
(23, 'Ade Syafrudin', 'Kelompok Substansi Keuangan ', 'D3', 3.27, 80, 85),
(24, 'Ricky Pratama ', 'Kelompok Substansi Kepegawaian ', 'S1', 3.02, 83, 80),
(25, 'Teno Tundoyekti ', 'Pemeliharaan Jalan dan Jembatan', 'D1', 3.35, 75, 85),
(26, 'Rahayu Purwanti', 'Penyehatan Lingkungan ', 'D4', 2.95, 75, 78),
(27, 'Ida Puspita', 'Pemeliharaan Jalan dan Jembatan', 'D2', 3.23, 80, 80),
(28, 'Dagel Winarno', 'Kelompok Substansi Keuangan', 'D3', 3.63, 93, 85),
(29, 'Bagiya Hardiansyah', 'Penyehatan Lingkungan ', 'D2', 3.11, 78, 85),
(30, 'Among Salahudin', 'Pemeliharaan Jalan dan Jembatan', 'D3', 3.25, 80, 75),
(31, 'Amalia Handayani', 'Kelompok Substansi Keuangan', 'D2', 3.43, 78, 82),
(32, 'Wirda Agustina', 'Penyehatan Lingkungan ', 'D4', 2.97, 78, 68),
(33, 'Soleh Siregar', 'Penyehatan Lingkungan ', 'D2', 3.07, 75, 80),
(34, 'Cindy Pertiwi', 'Kelompok Substansi Keuangan', 'D3', 3.22, 83, 85),
(35, 'Tirtayasa Saputra', 'Kelompok Substansi Kepegawaian ', 'D2', 2.99, 78, 75),
(36, 'Ratna Lailasari', 'Kelompok Substansi Kepegawaian ', 'S1', 3.44, 90, 80),
(37, 'Hadi Mahendra', 'Pemeliharaan Jalan dan Jembatan', 'D3', 3.33, 85, 85),
(38, 'Yance Rahayu', 'Kelompok Substansi Kepegawaian ', 'D2', 2.75, 78, 80),
(39, 'Asirwanda Prasetya', 'Pemeliharaan Jalan dan Jembatan', 'S1', 2.97, 83, 78),
(40, 'Jaka Suwarno', 'Kelompok Substansi Kepegawaian ', 'D4', 3.21, 75, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normalisasi`
--

CREATE TABLE `tbl_normalisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `pendidikan` double NOT NULL,
  `ipk` double NOT NULL,
  `tertulis` double NOT NULL,
  `wawancara` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_normalisasi`
--

INSERT INTO `tbl_normalisasi` (`id`, `nama`, `penempatan`, `pendidikan`, `ipk`, `tertulis`, `wawancara`) VALUES
(1657, 'Agus Faizun  ', 'Penyehatan Lingkungan ', 1, 1, 1, 0.94),
(1658, 'Rahayu Purwanti', 'Penyehatan Lingkungan ', 0.8, 0.89, 0.9, 0.92),
(1659, 'Bagiya Hardiansyah', 'Penyehatan Lingkungan ', 0.4, 0.94, 0.94, 1),
(1660, 'Wirda Agustina', 'Penyehatan Lingkungan ', 0.8, 0.9, 0.94, 0.8),
(1661, 'Soleh Siregar', 'Penyehatan Lingkungan ', 0.4, 0.93, 0.9, 0.94),
(1667, 'Ricky Pratama ', 'Kelompok Substansi Kepegawaian ', 1, 0.88, 0.92, 0.94),
(1668, 'Tirtayasa Saputra', 'Kelompok Substansi Kepegawaian ', 0.4, 0.87, 0.87, 0.88),
(1669, 'Ratna Lailasari', 'Kelompok Substansi Kepegawaian ', 1, 1, 1, 0.94),
(1670, 'Yance Rahayu', 'Kelompok Substansi Kepegawaian ', 0.4, 0.8, 0.87, 0.94),
(1671, 'Jaka Suwarno', 'Kelompok Substansi Kepegawaian ', 0.8, 0.93, 0.83, 1),
(1672, 'Alis', 'Kelompok Substansi Keuangan', 1, 0.98, 0.84, 1),
(1673, 'Ade Syafrudin', 'Kelompok Substansi Keuangan ', 0.6, 0.9, 0.86, 0.94),
(1674, 'Dagel Winarno', 'Kelompok Substansi Keuangan', 0.6, 1, 1, 0.94),
(1675, 'Amalia Handayani', 'Kelompok Substansi Keuangan', 0.4, 0.94, 0.84, 0.91),
(1676, 'Cindy Pertiwi', 'Kelompok Substansi Keuangan', 0.6, 0.89, 0.89, 0.94),
(1677, 'Teno Tundoyekti ', 'Pemeliharaan Jalan dan Jembatan', 0.2, 1, 0.88, 1),
(1678, 'Ida Puspita', 'Pemeliharaan Jalan dan Jembatan', 0.4, 0.96, 0.94, 0.94),
(1679, 'Among Salahudin', 'Pemeliharaan Jalan dan Jembatan', 0.6, 0.97, 0.94, 0.88),
(1680, 'Hadi Mahendra', 'Pemeliharaan Jalan dan Jembatan', 0.6, 0.99, 1, 1),
(1681, 'Asirwanda Prasetya', 'Pemeliharaan Jalan dan Jembatan', 1, 0.89, 0.98, 0.92);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `pendidikan` double NOT NULL,
  `ipk` double NOT NULL,
  `tertulis` double NOT NULL,
  `wawancara` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id`, `nama`, `penempatan`, `pendidikan`, `ipk`, `tertulis`, `wawancara`, `total`) VALUES
(601, 'Agus Faizun  ', 'Penyehatan Lingkungan ', 1, 1, 1, 0.94, 98.2),
(602, 'Rahayu Purwanti', 'Penyehatan Lingkungan ', 0.8, 0.89, 0.9, 0.92, 88.4),
(603, 'Bagiya Hardiansyah', 'Penyehatan Lingkungan ', 0.4, 0.94, 0.94, 1, 85),
(604, 'Wirda Agustina', 'Penyehatan Lingkungan ', 0.8, 0.9, 0.94, 0.8, 86.2),
(605, 'Soleh Siregar', 'Penyehatan Lingkungan ', 0.4, 0.93, 0.9, 0.94, 81.8),
(606, 'Ricky Pratama ', 'Kelompok Substansi Kepegawaian ', 1, 0.88, 0.92, 0.94, 93.4),
(607, 'Tirtayasa Saputra', 'Kelompok Substansi Kepegawaian ', 0.4, 0.87, 0.87, 0.88, 77.9),
(608, 'Ratna Lailasari', 'Kelompok Substansi Kepegawaian ', 1, 1, 1, 0.94, 98.2),
(609, 'Yance Rahayu', 'Kelompok Substansi Kepegawaian ', 0.4, 0.8, 0.87, 0.94, 78.3),
(610, 'Jaka Suwarno', 'Kelompok Substansi Kepegawaian ', 0.8, 0.93, 0.83, 1, 89.5),
(611, 'Alis', 'Kelompok Substansi Keuangan', 1, 0.98, 0.84, 1, 94.8),
(612, 'Ade Syafrudin', 'Kelompok Substansi Keuangan ', 0.6, 0.9, 0.86, 0.94, 84),
(613, 'Dagel Winarno', 'Kelompok Substansi Keuangan', 0.6, 1, 1, 0.94, 90.2),
(614, 'Amalia Handayani', 'Kelompok Substansi Keuangan', 0.4, 0.94, 0.84, 0.91, 79.3),
(615, 'Cindy Pertiwi', 'Kelompok Substansi Keuangan', 0.6, 0.89, 0.89, 0.94, 84.7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_analisa`
--
ALTER TABLE `tbl_analisa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_analisa`
--
ALTER TABLE `tbl_analisa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=641;

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_normalisasi`
--
ALTER TABLE `tbl_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1682;

--
-- AUTO_INCREMENT untuk tabel `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=616;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
