-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2024 at 06:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tds3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesan_tiket`
--

CREATE TABLE `pemesan_tiket` (
  `id_tiket` int NOT NULL,
  `namalengkap` varchar(255) DEFAULT NULL,
  `nik` int DEFAULT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `usia` int DEFAULT NULL,
  `pilihCAT` varchar(50) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `b_admin` int DEFAULT NULL,
  `b_pajak` int DEFAULT NULL,
  `totalharga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemesan_tiket`
--

INSERT INTO `pemesan_tiket` (`id_tiket`, `namalengkap`, `nik`, `jeniskelamin`, `usia`, `pilihCAT`, `harga`, `b_admin`, `b_pajak`, `totalharga`) VALUES
(1, 'Risma Auliya S', 10, 'Perempuan', 20, 'CAT 1 (Rp3.500.000,-)', 3500000, 50000, 525000, 4075000),
(2, 'Mark Lee', 28, 'Laki-laki', 25, 'CAT 2 (Rp3.300.000,-)', 3300000, 50000, 495000, 3845000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesan_tiket`
--
ALTER TABLE `pemesan_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesan_tiket`
--
ALTER TABLE `pemesan_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
