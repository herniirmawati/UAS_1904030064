-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2022 pada 10.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030064`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `nama_pelajaran` varchar(100) NOT NULL,
  `jenis_pelajaran` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `nama_pelajaran`, `jenis_pelajaran`, `keterangan`) VALUES
(1, 'Matematika', 'Wajib', 'Mata Pelajaran Wajib'),
(2, 'Agama Islam', 'Wajib', 'Mata Pelajaran Bidang'),
(3, 'Budi Pekerti', 'Muatan Lokal', 'Mata Pelajaran Mulok'),
(4, 'PENJASKES', 'BIDANG', 'Mata Pelajaran Bidang'),
(5, 'Bahasa Inggris', 'BIDANG', 'Mata Pelajaran Bidang'),
(6, 'Tema 1 diriku', 'Wajib', 'Mata Pelajaran Wajib'),
(7, 'Tema 2 Lingkungan', 'Wajib', 'Mata Pelajaran Wajib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `nip` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `foto`) VALUES
(109, 'Jung Hoseok', 'Laki-laki', 'Bandung', 'jhp.jpg'),
(3001, 'Herni Irma Wati', 'Perempuan', 'Tangerang', 'png1.jpg'),
(4000, 'Jeon Jungkook', 'Laki-Laki', 'Bandung', 'jjk.jpg'),
(4129, 'Kim Seokjin', 'Laki-laki', 'Tangerang', 'ksj.jpg'),
(5000, 'Min Yoongi', 'Laki-laki', 'Tangerang', 'myg.jpg'),
(80701, 'Kim Taehyung', 'Laki-laki', 'Tangerang', 'kth.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
