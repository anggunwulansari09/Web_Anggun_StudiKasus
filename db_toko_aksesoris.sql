-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 12:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_aksesoris`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int(30) DEFAULT NULL,
  `stok` int(30) DEFAULT NULL,
  `penilaian` varchar(20) DEFAULT NULL,
  `kategori_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `stok`, `penilaian`, `kategori_id`) VALUES
(1, 'bandoA1', 10000, 10, 'sangat baik', 1),
(2, 'gelangC1', 20000, 20, 'sangat baik', 3),
(3, 'kalungD1', 90000, 40, 'sangat baik', 4),
(4, 'tasF1', 120000, 20, 'sangat baik', 6),
(5, 'cincinH1', 50000, 60, 'sangat baik', 8),
(6, 'jepitB1', 10000, 50, 'sangat baik', 2),
(7, 'topiG1', 100000, 10, 'baik', 7),
(8, 'ikatrambutE1', 20, 10, 'sangat baik', 5),
(9, 'bandoA2', 25000, 5, 'baik', 8),
(11, 'bandoA3', 15000, 2, 'baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(30) DEFAULT NULL,
  `barang_id` int(30) DEFAULT NULL,
  `jumlah_barang` int(20) DEFAULT NULL,
  `total_pesanan` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `pesanan_id`, `barang_id`, `jumlah_barang`, `total_pesanan`) VALUES
(2, 2, 2, 2, 5000),
(3, 2, 4, 40, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Bando'),
(2, 'Jepit'),
(3, 'gelang'),
(4, 'kalung'),
(5, 'ikat rambut'),
(6, 'tas'),
(7, 'topi'),
(8, 'cincin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `no_telp` int(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kode_pos` int(13) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `no_telp`, `alamat`, `kota`, `kode_pos`, `email`) VALUES
(1, 'anggun', 'Wanita', 852, 'gotong royong', 'baturaja', 32111, 'angguncantikkatamamak123'),
(2, 'zia', 'Wanita', 812, 'kelapa sawit', 'baturaja', 32111, 'zia123'),
(3, 'tri', 'Pria', 812, 'jakabaring', 'palembang', 3242, 'tri123'),
(4, 'dede', 'Pria', 823, 'air paoh', 'baturaja', 32111, 'adekdedejelek123'),
(5, 'indah', 'Wanita', 852, 'belitang', 'belitang', 32445, 'indah123'),
(6, 'citra', 'Wanita', 823, 'linggau', 'lubuk linggau', 3423, 'citraa'),
(7, 'kirana', 'Wanita', 854, 'palembang', 'palembang', 3456, 'kirana123'),
(8, 'minhyun', 'Pria', 6543, 'baturaja', 'baturaja', 12345, 'minhyun123'),
(16, 'angg', 'Wanita', 9, 'bta', 'b', 0, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal_pesanan` date DEFAULT NULL,
  `pelanggan_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal_pesanan`, `pelanggan_id`) VALUES
(1, '2023-11-01', 1),
(2, '2023-11-08', 4),
(3, '2023-11-15', 7),
(4, '2023-11-06', 8),
(5, '2023-11-09', 3),
(6, '2023-11-22', 2),
(7, '2023-11-11', 6),
(8, '2023-11-30', 6),
(10, '2023-11-20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanan_id` (`pesanan_id`,`barang_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan_id` (`pelanggan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Constraints for table `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
