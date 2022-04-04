-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 03:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
-- Table structure for table `pelatihan_karyawan`
--

CREATE TABLE `pelatihan_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `tgl_mulai_pelatihan` date NOT NULL,
  `tgl_selesai_pelatihan` date NOT NULL,
  `durasi_pelatihan` varchar(30) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL,
  `file_sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan_karyawan`
--

INSERT INTO `pelatihan_karyawan` (`id`, `nama`, `nama_pelatihan`, `tgl_mulai_pelatihan`, `tgl_selesai_pelatihan`, `durasi_pelatihan`, `no_sertifikat`, `file_sertifikat`) VALUES
(4, 123458, 'pelatihan up', '2022-04-01', '2022-04-04', '30 jam', '102/87/a/2020', ''),
(7, 6, 'digitalent', '2022-04-14', '2022-04-07', 'hg', 'hi', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  ADD CONSTRAINT `pelatihan_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `hrd_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
