-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 16.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `ussername_admin` varchar(20) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `ussername_admin`, `password_admin`, `status`) VALUES
(1, 'admin_info', '$2y$10$WfveGpveyv2TX87aqLmviuGrrdUsP.sK0WU9c7ygzjkgK9UTQHZWa', 'admin_info'),
(2, 'admin_pesawat', '$2y$10$4bmdNxs2G9FlA14llMAV9ePiLAieCtg.0h/D8xlPI1irWmoclBQiO', 'admin_pesawat'),
(3, 'admin_kereta', '$2y$10$TZ0nwvFHoUEZRdqQlB9ouOSd9m0lLxbN56atwD1PN0ezskw6MoRHK', 'admin_kereta'),
(4, 'admin_bus', '$2y$10$MpCU16DyYhmEQt5brUQXJeq9my4URpKGDQaEKu08th1c8aL/zySX2', 'admin_bus'),
(5, 'admin_manager', '$2y$10$cAqgK2u/YovnKVC7EELiIuFYBQVmiky5V7EROQIGIj1zBjFlXJbkK', 'admin_manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_boking_bus`
--

CREATE TABLE `tb_boking_bus` (
  `id_boking` int(11) NOT NULL,
  `kode_boking` varchar(20) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_bus` varchar(20) NOT NULL,
  `nama_terminal` varchar(20) NOT NULL,
  `id_pemesanan_bus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_boking_kereta`
--

CREATE TABLE `tb_boking_kereta` (
  `id_boking` int(11) NOT NULL,
  `kode_boking` varchar(20) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_kereta` varchar(20) NOT NULL,
  `nama_stasiun` varchar(20) NOT NULL,
  `id_pemesanan_kereta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_boking_kereta`
--

INSERT INTO `tb_boking_kereta` (`id_boking`, `kode_boking`, `ussername_pemesan`, `nama_kereta`, `nama_stasiun`, `id_pemesanan_kereta`) VALUES
(4, '12', 'bayu', 'serayu', 'kroya', '2 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_boking_pesawat`
--

CREATE TABLE `tb_boking_pesawat` (
  `id_boking` int(11) NOT NULL,
  `kode_boking` varchar(20) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_pesawat` varchar(20) NOT NULL,
  `nama_bandara` varchar(20) NOT NULL,
  `id_pemesanan_pesawat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_boking_pesawat`
--

INSERT INTO `tb_boking_pesawat` (`id_boking`, `kode_boking`, `ussername_pemesan`, `nama_pesawat`, `nama_bandara`, `id_pemesanan_pesawat`) VALUES
(9, '12', 'bayu', 'garuda1', 'soekarno hatta', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bus`
--

CREATE TABLE `tb_bus` (
  `id_bus` int(11) NOT NULL,
  `nama_bus` varchar(20) NOT NULL,
  `nama_terminal` varchar(20) NOT NULL,
  `kota_asal_bus` varchar(20) NOT NULL,
  `kota_tujuan_bus` varchar(20) NOT NULL,
  `jam_berangkat_bus` time NOT NULL,
  `gambar_bus` varchar(20) NOT NULL,
  `jumlah_tiket` int(100) NOT NULL,
  `logo_bus` varchar(20) NOT NULL,
  `gambar_terminal` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bus`
--

INSERT INTO `tb_bus` (`id_bus`, `nama_bus`, `nama_terminal`, `kota_asal_bus`, `kota_tujuan_bus`, `jam_berangkat_bus`, `gambar_bus`, `jumlah_tiket`, `logo_bus`, `gambar_terminal`, `harga`) VALUES
(2, 'sinar jaya', 'cicaheum', 'bandung', 'sala tiga', '08:00:00', 'sinarjaya.jpg', 79, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(3, 'sinar jaya', 'cicaheum', 'bandung', 'banjar negara', '08:00:00', 'sinarjaya.jpg', 98, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(4, 'sinar jaya', 'cicaheum', 'bandung', 'indramayu', '08:00:00', 'sinarjaya.jpg', 100, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(5, 'sinar jaya', 'cicaheum', 'bandung', 'cilacap', '08:00:00', 'sinarjaya.jpg', 99, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(6, 'sinar jaya', 'cicaheum', 'bandung', 'wonosobo', '08:00:00', 'sinarjaya.jpg', 100, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(7, 'sinar jaya', 'cicaheum', 'bandung', 'banyumas', '08:00:00', 'sinarjaya.jpg', 50, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(8, 'sinar jaya', 'cicaheum', 'bandung', 'banyumas', '08:00:00', 'sinarjaya.jpg', 50, 'logosinarjaya', 'terminalcicaheum.jpg', 100000),
(19, '', 'Dago2', 'Bandung', '', '00:00:00', '', 0, '', 'terminal2.jpg', 0),
(20, 'Budiman', 'Dago2', 'Bandung', 'banyumas', '12:00:00', 'sinarjaya.jpg', 100, '100', '', 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kereta`
--

CREATE TABLE `tb_kereta` (
  `id_kereta` int(11) NOT NULL,
  `nama_kereta` varchar(20) NOT NULL,
  `nama_stasiun` varchar(20) NOT NULL,
  `kota_asal_kereta` varchar(20) NOT NULL,
  `kota_tujuan_kereta` varchar(20) NOT NULL,
  `jam_berangkat_kereta` time NOT NULL,
  `gambar_kereta` varchar(20) NOT NULL,
  `kelas_kereta` varchar(20) NOT NULL,
  `jumlah_tiket` int(225) NOT NULL,
  `gambar_stasiun` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kereta`
--

INSERT INTO `tb_kereta` (`id_kereta`, `nama_kereta`, `nama_stasiun`, `kota_asal_kereta`, `kota_tujuan_kereta`, `jam_berangkat_kereta`, `gambar_kereta`, `kelas_kereta`, `jumlah_tiket`, `gambar_stasiun`, `harga`) VALUES
(2, 'serayu', 'kroya', 'cilacap', 'bandung', '12:00:00', 'serayu.jpg', 'ekonomi', 97, 'stasiun.jpg', 90000),
(3, 'serayu', 'kroya', 'cilacap', 'bandung', '00:12:00', 'serayu.jpg', 'ekonomi', 125, 'stasiun.jpg', 90000),
(4, 'serayu', 'kroya', 'cilacap', 'bandung', '12:00:00', 'serayu.jpg', 'bisnis', 129, 'stasiun.jpg', 90000),
(7, 'serayu', 'kroya', 'cilacap', 'bandung', '15:00:00', 'serayu.jpg', 'bisnis', 130, 'stasiun.jpg', 90000),
(8, 'parahyangan20', 'kiara condong3', 'bandung', 'jakarta', '15:00:00', 'parahyangan.jpg', 'bisnis', 130, 'kiara.jpg', 90000),
(9, 'cibatu', 'kiara condong3', 'bandung', 'jaya pura', '16:00:00', 'cibatu.jpg', 'bisnis', 130, 'cibatu2.jpg', 90000),
(10, 'serayu', 'kroya', 'cilacap', 'bandung', '20:00:00', 'serayu.jpg', 'bisnis', 130, 'stasiun.jpg', 90000),
(11, 'parahyangan', 'kiara condong3', 'bandung', 'jakarta', '20:00:00', 'parahyangan.jpg', 'ekonomi', 130, 'kiara.jpg', 90000),
(12, 'parahyangan', 'kiara condong3', 'bandung', 'jakarta', '10:00:00', 'parahyangan.jpg', 'eksekutif', 130, 'kiara.jpg', 90000),
(24, 'indraby', 'kroya', 'cilacap2', 'america', '05:05:00', 'cibatu.jpg', 'bisnis', 900, 'stasiun.jpg', 79999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_bus`
--

CREATE TABLE `tb_pemesanan_bus` (
  `id_pemesanan_bus` int(11) NOT NULL,
  `id_bus` varchar(20) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_terminal` varchar(20) NOT NULL,
  `nama_bus` varchar(20) NOT NULL,
  `tanggal_berangkat_bus` date NOT NULL,
  `jumlah_penumpang` int(200) NOT NULL,
  `kota_tujuan_bus` varchar(20) NOT NULL,
  `jam_berangkat_bus` time NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_kereta`
--

CREATE TABLE `tb_pemesanan_kereta` (
  `id_pemesanan_kereta` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_stasiun` varchar(20) NOT NULL,
  `nama_kereta` varchar(20) NOT NULL,
  `tanggal_berangkat_kereta` varchar(20) NOT NULL,
  `jumlah_penumpang` int(11) NOT NULL,
  `kota_tujuan_kereta` varchar(20) NOT NULL,
  `jam_berangkat_kereta` time NOT NULL,
  `kelas_kereta` varchar(20) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan_kereta`
--

INSERT INTO `tb_pemesanan_kereta` (`id_pemesanan_kereta`, `id_kereta`, `ussername_pemesan`, `nama_stasiun`, `nama_kereta`, `tanggal_berangkat_kereta`, `jumlah_penumpang`, `kota_tujuan_kereta`, `jam_berangkat_kereta`, `kelas_kereta`, `total_harga`, `status_pemesanan`) VALUES
(2, 2, 'bayu', 'kroya', 'serayu', '2021-12-16', 1, 'bandung', '12:00:00', 'ekonomi', 90000, 'dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_pesawat`
--

CREATE TABLE `tb_pemesanan_pesawat` (
  `id_pemesanan_pesawat` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `ussername_pemesan` varchar(20) NOT NULL,
  `nama_bandara` varchar(20) NOT NULL,
  `nama_pesawat` varchar(20) NOT NULL,
  `tanggal_berangkat_pesawat` date NOT NULL,
  `jumlah_penumpang` int(20) NOT NULL,
  `kota_tujuan_pesawat` varchar(20) NOT NULL,
  `jam_berangkat_pesawat` time NOT NULL,
  `kelas_pesawat` varchar(20) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pemesanan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan_pesawat`
--

INSERT INTO `tb_pemesanan_pesawat` (`id_pemesanan_pesawat`, `id_pesawat`, `ussername_pemesan`, `nama_bandara`, `nama_pesawat`, `tanggal_berangkat_pesawat`, `jumlah_penumpang`, `kota_tujuan_pesawat`, `jam_berangkat_pesawat`, `kelas_pesawat`, `total_harga`, `status_pemesanan`) VALUES
(3, 1, 'bayu', 'soekarno hatta', 'garuda1', '2021-12-24', 1, 'jakarta', '08:00:00', 'ekonomi', 1000000, 'dibayar'),
(4, 1, 'bayu', 'soekarno hatta', 'garuda1', '2021-12-24', 1, 'jakarta', '08:00:00', 'ekonomi', 1000000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `pesan`) VALUES
(1, 'penerbangan garuda 1  bandara juanada \r\ndiundur karena badai'),
(2, 'garuda satu bandara juanda dibatalkan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `nama_pesawat` varchar(20) NOT NULL,
  `nama_bandara` varchar(50) NOT NULL,
  `kota_asal_pesawat` varchar(20) NOT NULL,
  `kota_tujuan_pesawat` varchar(20) NOT NULL,
  `jam_berangkat_pesawat` time NOT NULL,
  `gambar_pesawat` varchar(20) NOT NULL,
  `kelas_pesawat` varchar(20) NOT NULL,
  `jumlah_kursi` int(100) NOT NULL,
  `logo_pesawat` varchar(20) NOT NULL,
  `gambar_bandara` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesawat`
--

INSERT INTO `tb_pesawat` (`id_pesawat`, `nama_pesawat`, `nama_bandara`, `kota_asal_pesawat`, `kota_tujuan_pesawat`, `jam_berangkat_pesawat`, `gambar_pesawat`, `kelas_pesawat`, `jumlah_kursi`, `logo_pesawat`, `gambar_bandara`, `harga`) VALUES
(199, '', 'soekarno hatta', 'banyumas2', '', '00:00:00', '', '', 0, '', 'soekarnohatta.jpg', 0),
(202, 'garuda1', 'soekarno hatta', 'banyumas2', 'banyumas', '20:28:00', 'batik.jpg', 'bisnis', 200, 'logo1.jpg', '', 1000000),
(204, '', 'husen sastra negara', 'Bandung', '', '00:00:00', '', '', 0, '', 'soekarnohatta.jpg', 0),
(205, 'garuda3', 'husen sastra negara', 'Bandung', 'jakarta', '20:03:00', 'batik.jpg', 'ekonomi', 200, 'logo1.jpg', '', 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_usser`
--

CREATE TABLE `tb_usser` (
  `id_usser` int(11) NOT NULL,
  `ussername_usser` varchar(20) NOT NULL,
  `password_usser` varchar(100) NOT NULL,
  `no_telepon_usser` varchar(12) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `saldo` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_usser`
--

INSERT INTO `tb_usser` (`id_usser`, `ussername_usser`, `password_usser`, `no_telepon_usser`, `foto`, `saldo`, `nik`, `alamat`) VALUES
(1, 'bayu', '$2y$10$ldArjJJe7S/6cZV9AJeU1uFiqv5.dlc34BVcUhIqlUjkFNkAjgbBi', '            ', '5.jpg', 8692000, '                ', '                 banyumas'),
(12, 'anggi', '$2y$10$VAkSsCMf/2K88EG9v4N0ceB3lWyxBEJJSiv/hnDpO.8wqHlcmDxCW', '087705054601', 'foto.jpg', 1000000012, '', '0'),
(13, 'vera', '$2y$10$0QS2fmaO8Vycx0VrrTfrhuYjL1KQc9aYbGNhj6.KYlWaR9wdeFvlC', '098808087808', 'foto.jpg', 211, '', '0'),
(14, 'nb', '$2y$10$MgpYuFtHSWCNymXWTKnkKe0crzt4h8To9Ly7FzoISDVP9VG4oZKk.', '123456789012', 'foto.jpg', 0, '', '0'),
(15, 'asasas', '$2y$10$Wzq/IM7xeWK3Yy5bZR9cZ.pEE/kATYGerSbCLkj57gYUX9EK7CABG', 'bayu@gmail.c', 'foto.jpg', 0, '', '0'),
(16, 'as', '$2y$10$bXNfFfjJxsrOVZ0ovPyJxu4bjuqSyUopgzuokLSrbIOhOah8xbq2e', '009876543223', 'foto.jpg', 0, '', '0'),
(18, 'qwqw', '$2y$10$KfP9ZGhPu1AqCtyajfYSAeaFgBxYlXTMGkBvDOafwCa7ZIoXn4Woe', '123456789012', 'foto.jpg', 0, '', '0'),
(19, 'sdfgh', '$2y$10$C02/UsIBt6QZyJSrA7wQ9OuuszWitK94PUu5NBz98U9u.jw1MARsq', '123456789012', 'foto.jpg', 0, '', '0'),
(21, 'h', '$2y$10$aQd6XdxEopmVjFwTzdr1r.XHZv9DLCtZkJY/6Vaw.age37rYHV9Ca', '4567', 'foto.jpg', 0, '', '0'),
(25, 'asawas', '$2y$10$XLzoZqNzrlsuQKBPyNtL9OXTwCMRFnNnPiw.AZ.2T0yzzMfq6e7yy', '1211111111', 'foto.jpg', 0, '', '0'),
(26, 'asdsdf', '$2y$10$oWegLStI7zl5z2rUGWkoxu8aDhfP.n5r9yCmNSVMl3Svg0ezgKj5m', '', 'foto.jpg', 0, '', '0'),
(27, 'ascvbnm', '$2y$10$0JDalRB95YMIk5zEa9ZpFe/v3H1AjnxA6t0bNM4kBeMLXJP4ea3Q6', '098898989898', 'foto.jpg', 0, '', '0'),
(28, 'sdfghjkvbn', '$2y$10$tjJi5M3f.JnzcYSzZS22N.NpDqdhysVXVFsdHvc7z/mc3M5FXzyvi', '121111', 'foto.jpg', 0, '', '0'),
(29, 'aaaaaaaaakjhgf', '$2y$10$6pSGRlsUyiRkzXSza.jrAeFgevb0WIaPij8JZZ6nr54TfeJ7R/xNW', '090090909876', 'foto.jpg', 0, '', '0'),
(30, 'admin_manager', '$2y$10$f1q3A4fS6pNqATz.haDMnOaxo3hWCPShZ4BXY9E6OJQqvrTbGIxC2', '787', 'foto.jpg', 0, '', '0'),
(31, 'qutewbndhjs', '$2y$10$6VmiMSAu.xlMS9jcfdVydeyaFSbbvbuz.J/TnHuMPOvkIC4pkKDa.', '087707070707', 'foto.jpg', 0, '', '0'),
(32, 'habib', '$2y$10$KqiLttypk/NHWP.B9pSPDenp5we./lPB/DgYZHXQq/vfDsB/siniS', '09889898687', 'foto.jpg', 2000000, '', '0'),
(34, 'habib2', '$2y$10$0WXJ02NeREalpRnh/iJr7OVELVLdjyWN3MopsBoShvdgnA1xJX6/e', '123456789012', 'foto.jpg', 0, '', '0'),
(35, 'aswxc', '$2y$10$W8ANblcXC6GmjR8K1yKBn.j.pBMMPAjyp/CpDLDOgPW1zs8cCFF5K', '123456789012', 'foto.jpg', 0, '', ''),
(36, 'bayu2121', '$2y$10$O.cNDy35q1WEnhXOJKTneu2CfACnpKqYvG.7/FqghXcEnM7yCbfU6', '123456789012', 'foto.jpg', 0, '', ''),
(37, 'as12', '$2y$10$JImtfutA5BUVDgX8xA09quz9Vra7i4/pEbJ42sfBExS0fwDHv/8Eu', '123456789012', 'foto.jpg', 0, '', ''),
(38, 'dwitam', '$2y$10$94dOUv7vwrvwggzygtKR2OO6QVq/8yz2HwFkaCKEez9OkUpiBcpzi', '123456789012', 'foto.jpg', 0, '', ''),
(39, 'aqw', '$2y$10$cfoURpaT5DKd1fTGYIoace6uP5Y10MdbBDfEEVO3gR7mDIAfAzyCm', '123456789012', 'foto.jpg', 0, '', ''),
(40, 'aqw11', '$2y$10$aC74xI/evVchEwehXRSz0OkVyz2bsyYRNeqsdWHuSnfa99WS0eLUK', '123456789012', 'foto.jpg', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_boking_bus`
--
ALTER TABLE `tb_boking_bus`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `tb_boking_kereta`
--
ALTER TABLE `tb_boking_kereta`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `tb_boking_pesawat`
--
ALTER TABLE `tb_boking_pesawat`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `tb_bus`
--
ALTER TABLE `tb_bus`
  ADD PRIMARY KEY (`id_bus`);

--
-- Indeks untuk tabel `tb_kereta`
--
ALTER TABLE `tb_kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indeks untuk tabel `tb_pemesanan_bus`
--
ALTER TABLE `tb_pemesanan_bus`
  ADD PRIMARY KEY (`id_pemesanan_bus`);

--
-- Indeks untuk tabel `tb_pemesanan_kereta`
--
ALTER TABLE `tb_pemesanan_kereta`
  ADD PRIMARY KEY (`id_pemesanan_kereta`);

--
-- Indeks untuk tabel `tb_pemesanan_pesawat`
--
ALTER TABLE `tb_pemesanan_pesawat`
  ADD PRIMARY KEY (`id_pemesanan_pesawat`);

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indeks untuk tabel `tb_usser`
--
ALTER TABLE `tb_usser`
  ADD PRIMARY KEY (`id_usser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_boking_bus`
--
ALTER TABLE `tb_boking_bus`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_boking_kereta`
--
ALTER TABLE `tb_boking_kereta`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_boking_pesawat`
--
ALTER TABLE `tb_boking_pesawat`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_bus`
--
ALTER TABLE `tb_bus`
  MODIFY `id_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_kereta`
--
ALTER TABLE `tb_kereta`
  MODIFY `id_kereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan_bus`
--
ALTER TABLE `tb_pemesanan_bus`
  MODIFY `id_pemesanan_bus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan_kereta`
--
ALTER TABLE `tb_pemesanan_kereta`
  MODIFY `id_pemesanan_kereta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan_pesawat`
--
ALTER TABLE `tb_pemesanan_pesawat`
  MODIFY `id_pemesanan_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  MODIFY `id_pesawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT untuk tabel `tb_usser`
--
ALTER TABLE `tb_usser`
  MODIFY `id_usser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
