-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_syamrabu`
--

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kerja_karyawan`
--

CREATE TABLE `riwayat_kerja_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `ruangan_baru` varchar(50) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `nama_pinpinan` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_kerja_karyawan`
--

INSERT INTO `riwayat_kerja_karyawan` (`id`, `nama`, `tgl_input`, `ruangan_baru`, `no_sk`, `tgl_sk`, `nama_pinpinan`, `tahun`) VALUES
(2, 6, '2022-04-04', 'INSTALASI TEKNOLOGI DAN INFORMASI', '546', '2022-04-12', 'jml', 2012),
(4, 1, '2022-04-06', 'SAKURA', '4634', '2022-04-13', 'ty', 2002),
(5, 123458, '2022-04-11', 'CEMPAKA', '54', '2022-04-26', 'tg', 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  ADD CONSTRAINT `riwayat_kerja_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
