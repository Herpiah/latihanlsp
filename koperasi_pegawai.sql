-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2025 pada 12.53
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `custemer`
--

CREATE TABLE `custemer` (
  `id_custemer` int(10) NOT NULL,
  `nama_custemer` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telp` int(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `custemer`
--

INSERT INTO `custemer` (`id_custemer`, `nama_custemer`, `alamat`, `telp`, `fax`, `email`) VALUES
(5, 'budi', 'jakarta', 736874516, '9741896796', 'budi@hsgdsa.com'),
(6, 'ds', 'dD', 847189, '213', 'bjkb@hj.com'),
(7, 'andi', 'jkt', 676, '676', 'andi@dnj.com'),
(8, 'dhjb', '7896', 787, '786', 'hjhg@sgahb.com'),
(9, 'dhsajgd', 'ahdjsab', 787897, '788687', 'gdah@hajdh.com'),
(10, 'Roni', 'Tangerang', 2147483647, '8736', 'roni@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `ussername` varchar(10) NOT NULL,
  `password` int(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(10) NOT NULL,
  `tgl_sales` varchar(20) NOT NULL,
  `id_custemer` int(10) NOT NULL,
  `do_number` int(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `custemer`
--
ALTER TABLE `custemer`
  ADD PRIMARY KEY (`id_custemer`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `custemer`
--
ALTER TABLE `custemer`
  MODIFY `id_custemer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
