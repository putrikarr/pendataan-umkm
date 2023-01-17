-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Feb 2021 pada 12.06
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblumkm`
--

CREATE TABLE `tblumkm` (
  `nama` varchar(100) NOT NULL,
  `kategori_usaha` enum('mikro','kecil','menengah') NOT NULL,
  `omset_penjualan` varchar(50) NOT NULL,
  `alamat_toko` text() NOT NULL,
  `izin_usaha` enum('Ada','Tidak') NOT NULL,
  `no_izin` varchar(20) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblumkm`
--

INSERT INTO `tblumkm` (`nama`, `kategori_usaha`, `jenis_usaha`,`omset_penjualan`, `alamat_toko`, `izin_usaha`, `no_izin`, `kontak`) VALUES
('pertashop', 'kecil', 'lainnya','15000000', 'Teluk Awur', 'Ada', '503/89/22-11-2021', '083456789876'),
('laundry tika', 'kecil', 'lainnya', '7000000', 'Teluk Awur', 'Tidak', '-', '083829405867'),
('mebel ari', 'kecil', 'properti/mebel','8000000', 'Teluk Awur', 'Ada', '503/01/04-01-2021', '087365467987');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
