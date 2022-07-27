-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 02:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greengarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `id_barang` int(4) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok` int(255) NOT NULL,
  `kuantitas` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`id_barang`, `nama_barang`, `stok`, `kuantitas`, `harga`, `foto`) VALUES
(5, 'Nanas', 75, 1, 28000, 'nanas.jpg'),
(11, 'Sayur Kol', 500, 1, 10000, 'sayur_kol.jpg'),
(12, 'Apel', 40, 1, 25000, 'apel.jpg'),
(14, 'Stroberi', 30, 1, 40000, 'stroberi.jpg'),
(15, 'Semangka', 20, 1, 5000, 'semangka.jpg'),
(17, 'Pisang', 27, 1, 4000, 'pisang.jpg'),
(18, 'Ketimun', 100, 1, 7000, 'ketimun.jpg'),
(20, 'Bawang Merah', 50, 1, 15000, 'bawang_merah.jpg'),
(23, 'Buah Naga', 17, 1, 24500, 'buah naga.jpg'),
(24, 'Mangga', 12, 5, 15000, 'Mangga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_orderan` int(11) NOT NULL,
  `id_barang` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kuantitas` int(13) NOT NULL,
  `harga` int(13) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_orderan`, `id_barang`, `nama`, `kuantitas`, `harga`, `foto`) VALUES
(22, 2, 'Ketimun', 1, 10000, 'ketimun.jpg'),
(24, 11, 'Sayur Kol', 1, 10000, 'sayur_kol.jpg'),
(26, 2, 'Ketimun', 1, 15000, 'ketimun.jpg'),
(28, 23, 'Buah Naga', 1, 24500, 'buah naga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `foto`) VALUES
(2, 'Ulfiah Sri Sazkia', 'ulfiah@gmail.com', '123456', 'LOGO POLITEKNIK NEGERI UJUNG PANDANG.png'),
(3, 'Muh Fadhil', 'fadhil@gmail.com', '123456', 'LOGO POLITEKNIK NEGERI UJUNG PANDANG.png'),
(4, 'Zhandy', 'ahmadzdy230401@gmail.com', '123456', 'LOGO POLITEKNIK NEGERI UJUNG PANDANG.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_orderan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_orderan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
