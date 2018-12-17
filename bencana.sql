-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2018 pada 14.50
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bencana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`) VALUES
(1, 'azmiardhy', 'qazwsxedc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angin`
--

CREATE TABLE `angin` (
  `id_angin` int(6) NOT NULL,
  `nama_angin` varchar(50) NOT NULL,
  `lokasi_angin` varchar(100) NOT NULL,
  `deskripsi_angin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `banjir`
--

CREATE TABLE `banjir` (
  `id_banjir` int(6) NOT NULL,
  `nama_banjir` varchar(50) NOT NULL,
  `lokasi_banjir` varchar(100) NOT NULL,
  `deskripsi_banjir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banjir`
--

INSERT INTO `banjir` (`id_banjir`, `nama_banjir`, `lokasi_banjir`, `deskripsi_banjir`) VALUES
(1, 'Banjir Kali Ciliwung', 'Indonesia', 'ini deskripsi'),
(2, 'Banjir kali kuadrat', 'indonesia', 'ini deskripsi2'),
(3, 'Banjir lokal', 'indonesia', 'asdaasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gempa`
--

CREATE TABLE `gempa` (
  `id_gempa` int(6) NOT NULL,
  `nama_gempa` varchar(50) NOT NULL,
  `lokasi_gempa` varchar(100) NOT NULL,
  `deskripsi_gempa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gunung`
--

CREATE TABLE `gunung` (
  `id_gunung` int(6) NOT NULL,
  `nama_gunung` varchar(50) NOT NULL,
  `lokasi_gunung` varchar(100) NOT NULL,
  `deskripsi_gunung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gunung`
--

INSERT INTO `gunung` (`id_gunung`, `nama_gunung`, `lokasi_gunung`, `deskripsi_gunung`) VALUES
(1, 'Gunung Merapi', 'Jl.Kaliurang KM 30, Sleman, Yogyakarta', 'Gunung ini blablablabla'),
(2, 'Gunung Rinjani', 'Jl.yang diridhoi KM 30, Sleman, malang', 'Gunung ini blablablabla'),
(3, 'Gunung Galunggung', 'Jl.Singaparna', 'asfgfdsasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebakaran`
--

CREATE TABLE `kebakaran` (
  `id_kebakaran` int(6) NOT NULL,
  `nama_kebakaran` varchar(50) NOT NULL,
  `lokasi_kebakaran` varchar(100) NOT NULL,
  `deskripsi_kebakaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kekeringan`
--

CREATE TABLE `kekeringan` (
  `id_kekeringan` int(6) NOT NULL,
  `nama_kekeringan` varchar(50) NOT NULL,
  `lokasi_kekeringan` varchar(100) NOT NULL,
  `deskripsi_kekeringan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanahlongsor`
--

CREATE TABLE `tanahlongsor` (
  `id_tanahLongsor` int(6) NOT NULL,
  `nama_tanahLongsor` varchar(50) NOT NULL,
  `lokasi_tanahLongsor` varchar(100) NOT NULL,
  `deskripsi_tanahLongsor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tsunami`
--

CREATE TABLE `tsunami` (
  `id_tsunami` int(6) NOT NULL,
  `nama_tsunami` varchar(50) NOT NULL,
  `lokasi_tsunami` varchar(100) NOT NULL,
  `deskripsi_tsunami` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `angin`
--
ALTER TABLE `angin`
  ADD PRIMARY KEY (`id_angin`);

--
-- Indexes for table `banjir`
--
ALTER TABLE `banjir`
  ADD PRIMARY KEY (`id_banjir`);

--
-- Indexes for table `gempa`
--
ALTER TABLE `gempa`
  ADD PRIMARY KEY (`id_gempa`);

--
-- Indexes for table `gunung`
--
ALTER TABLE `gunung`
  ADD PRIMARY KEY (`id_gunung`);

--
-- Indexes for table `kebakaran`
--
ALTER TABLE `kebakaran`
  ADD PRIMARY KEY (`id_kebakaran`);

--
-- Indexes for table `kekeringan`
--
ALTER TABLE `kekeringan`
  ADD PRIMARY KEY (`id_kekeringan`);

--
-- Indexes for table `tanahlongsor`
--
ALTER TABLE `tanahlongsor`
  ADD PRIMARY KEY (`id_tanahLongsor`);

--
-- Indexes for table `tsunami`
--
ALTER TABLE `tsunami`
  ADD PRIMARY KEY (`id_tsunami`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banjir`
--
ALTER TABLE `banjir`
  MODIFY `id_banjir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gunung`
--
ALTER TABLE `gunung`
  MODIFY `id_gunung` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
