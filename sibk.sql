-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 04:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibk`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `mapel`) VALUES
(1, 'Nazilul Umami', '125678901426', 'Nahwu'),
(2, 'Fatimatuz Zahro', '863350985232', 'BMK');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `poin` int(3) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nama_siswa`, `jenis`, `poin`, `tanggal`) VALUES
(1, 'Ratu Maulidia Angraini', 'Bolos', 5, '2025-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kamar` varchar(15) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `kls_pagi` varchar(10) NOT NULL,
  `kls_sore` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `sk_negatif` varchar(5) NOT NULL,
  `sk_positif` varchar(5) NOT NULL,
  `jumlah_sk` varchar(5) NOT NULL,
  `sanksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `kamar`, `jk`, `kls_pagi`, `kls_sore`, `alamat`, `sk_negatif`, `sk_positif`, `jumlah_sk`, `sanksi`) VALUES
(1, 'Alfina Damayanti', '2018.02.08', 'A.5', 'Perempuan', '2 e MTS', 'PT', 'Banyuwangi', '1', '10', '0', 'tidak ada'),
(2, 'Ruwaidah Kholatil Widat', '2018.10.00', 'E.3', 'Perempuan', '2 e MTS', 'PT', 'Kangean', '12,5', '0', '12,5', 'Menulis Alfiyah 50 bet');

-- --------------------------------------------------------

--
-- Table structure for table `siswi`
--

CREATE TABLE `siswi` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `kamar` varchar(15) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `kls_pagi` varchar(10) NOT NULL,
  `kls_sore` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `sk_negatif` varchar(5) NOT NULL,
  `sk_positif` varchar(5) NOT NULL,
  `jumlah_sk` varchar(5) NOT NULL,
  `sanksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswi`
--
ALTER TABLE `siswi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswi`
--
ALTER TABLE `siswi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
