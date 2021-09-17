-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Des 2017 pada 04.54
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webenterprise`
--
CREATE DATABASE IF NOT EXISTS `db_webenterprise` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_webenterprise`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapenduduk`
--

CREATE TABLE `tb_datapenduduk` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `tmptlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `warga` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datapenduduk`
--

INSERT INTO `tb_datapenduduk` (`nik`, `nama`, `alamat`, `tmptlahir`, `tgllahir`, `agama`, `status`, `warga`) VALUES
('3628020101880001','Jhon Doe','Lorem Ipsum','Los Angeles','2000-10-03','Islam','Kawin','WNI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datapenduduk`
--
ALTER TABLE `tb_datapenduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
