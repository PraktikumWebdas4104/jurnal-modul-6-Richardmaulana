-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.09
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelolauser`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelolauser`
--

CREATE TABLE `kelolauser` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelolauser`
--

INSERT INTO `kelolauser` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`, `password`) VALUES
('6706174071', 'Muchammad Richard', 'MI4101', 'laki2', 'renang', 'FIK', 'asd', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelolauser`
--
ALTER TABLE `kelolauser`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
