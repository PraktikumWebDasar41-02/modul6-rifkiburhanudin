-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.15
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
-- Database: `modul6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal6`
--

CREATE TABLE `jurnal6` (
  `nama` varchar(35) NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `jeniskel` varchar(30) NOT NULL,
  `hobi` varchar(35) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal6`
--

INSERT INTO `jurnal6` (`nama`, `nim`, `kelas`, `jeniskel`, `hobi`, `fakultas`, `alamat`) VALUES
('rifki', 2147483647, '', '', '', '', ''),
('rifki', 2147483647, '', '', '', '', ''),
('rifki', 2147483647, 'Array', 'jenkel', 'Array', 'FKB', 'jl.ciganitri'),
('rifki', 2147483647, 'Array', 'jenkel', 'Array', 'FRI', 'lhjkljkl'),
('rifki', 2147483647, 'Array', 'jenkel', 'Array', 'FKB', 'ewqerqwrwe'),
('herdi', 918276354, '4103', 'jenkel', 'Array', 'FRI', 'jl.malioboro'),
('fitri', 2147483647, '4101', 'jenkel', 'Array', 'FKB', 'weqrrewr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
