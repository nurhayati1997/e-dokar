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
-- Table structure for table `pelatihan_karyawan`
--

CREATE TABLE `pelatihan_karyawan` (
  `id` int(11) NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp(),
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

INSERT INTO `pelatihan_karyawan` (`id`, `tgl_update`, `nama`, `nama_pelatihan`, `tgl_mulai_pelatihan`, `tgl_selesai_pelatihan`, `durasi_pelatihan`, `no_sertifikat`, `file_sertifikat`) VALUES
(4, '0000-00-00', 123458, 'pelatihan up', '2022-04-01', '2022-04-04', '30 jam', '102/87/a/2020', ''),
(7, '0000-00-00', 6, 'digitalent', '2022-04-14', '2022-04-07', 'hg', 'hi', 'Sertifikat_Pelatihan_Nurhayati_Fitriani.pdf'),
(11, '2022-04-10', 6, 'jjk', '2022-04-07', '0000-00-00', 'k', 'j', 'Sertifikat_Pelatihan_Nurhayati_Fitriani1.pdf'),
(12, '2022-04-19', 6, 'gggg', '2022-03-29', '2022-04-19', 'gg', 'ggg', 'Sertifikat_Pelatihan_Nurhayati_Fitriani2.pdf');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  ADD CONSTRAINT `pelatihan_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
