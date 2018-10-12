-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.08
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
-- Database: `d_modul6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `hobi` varchar(10) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `nim`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('123', '202cb962ac59075b964b07152d234b70', NULL, 0, '0', '', '', '', ''),
('234', '289dff07669d7a23de0ef88d2f7129e7', NULL, 0, '0', '', '', '', ''),
('444', '444', NULL, 0, '0', '', '', '', ''),
('666', 'fae0b27c451c728867a567e8c1bb4e53', NULL, 0, '0', '', '', '', ''),
('777', 'f1c1592588411002af340cbaedd6fc33', NULL, 0, '0', '', '', '', ''),
('999', 'b706835de79a2b4e80506f582af3676a', NULL, 0, '0', '', '', '', ''),
('aaaaa', '202cb962ac59075b964b07152d234b70', NULL, 0, '0', '', '', '', ''),
('admin', 'admin', 'admin', 0, '0', '', '', '', ''),
('fadhil', 'fc646ab58bc3535f15cebaf9caa144e6', NULL, 0, '0', '', '', '', ''),
('fadhil21', 'cf79ae6addba60ad018347359bd144d2', NULL, 0, '0', '', '', '', ''),
('login', 'd56b699830e77ba53855679cb1d252da', NULL, 0, '0', '', '', '', ''),
('mfadhil21', 'cf79ae6addba60ad018347359bd144d2', NULL, 0, '0', '', '', '', ''),
('qqqq', 'qqqq', NULL, 0, '', '', '', '', ''),
('qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', NULL, 0, '0', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
