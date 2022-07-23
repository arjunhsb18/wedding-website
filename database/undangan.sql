-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2022 pada 11.48
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `kode_pemesan` varchar(255) NOT NULL,
  `nama_diundang` varchar(255) NOT NULL,
  `link_undangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `link`
--

INSERT INTO `link` (`id`, `kode_pemesan`, `nama_diundang`, `link_undangan`) VALUES
(3, 'daulatandanisa', 'Maya Rahmadhani Hasibuan', 'http://localhost/undangan/daulatanisa/to/Maya+Rahmadhani+Hasibuan'),
(4, 'daulatandanisa', 'Arjun Hasibuan', 'http://localhost/undangan/daulatandanisa/to/Arjun%20Hasibuan'),
(5, 'daulatandanisa', 'Arjun Hasibuan & Partner', 'http://localhost/undangan/daulatandanisa/to/Arjun%20Hasibuan%20%26%20Partner'),
(6, 'daulatandanisa', 'Arjun Hasibuan & Partner', 'http://localhost/undangan/daulatandanisa/to/Arjun%20Hasibuan%20%26%20Partner'),
(7, 'daulatandanisa', 'Arjun Hasibuan', 'http://localhost/undangan/daulatandanisa/to/Arjun%20Hasibuan'),
(8, 'daulatandanisa', 'Maya Rahmadhani Hasibuan', 'http://localhost/undangan/daulatandanisa/to/Maya%20Rahmadhani%20Hasibuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ucapan`
--

CREATE TABLE `ucapan` (
  `id` int(11) NOT NULL,
  `kode_pemesan` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `ucapan` longtext NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `jumlah_hadir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ucapan`
--

INSERT INTO `ucapan` (`id`, `kode_pemesan`, `nama`, `ucapan`, `kehadiran`, `jumlah_hadir`) VALUES
(1, 'a', 'a', 'b', 1, 1),
(2, 'b', 'b', 'b', 0, 2),
(3, 'daulatandanisa', 'Arjun Hasibuan', 'aaaaa', 1, 10),
(4, 'daulatandanisa', 'Maya Rahmadhani Hasibuan', 'aaaaa', 1, 1),
(5, 'daulatandanisa', 'Arjun Hasibuan', 'aaa', 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `password`, `is_active`) VALUES
(1, 'arjun123', 'Arjun Hasibuan', 'sukses123', 1),
(2, 'daulatandanisa', 'Daulat Siregar', 'sukses123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
