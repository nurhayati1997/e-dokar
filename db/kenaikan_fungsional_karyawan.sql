-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:53 AM
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
-- Table structure for table `kenaikan_fungsional_karyawan`
--

CREATE TABLE `kenaikan_fungsional_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_kenaikan` date NOT NULL,
  `file_fc_karpeg` varchar(100) NOT NULL,
  `file_fc_sk_pangkat_terakhir` varchar(100) NOT NULL,
  `file_fc_ijazah_terakhir` varchar(100) NOT NULL,
  `file_fc_skp_2_tahun` varchar(100) NOT NULL,
  `file_pak_asli` varchar(50) NOT NULL,
  `file_pak_sebelumnya` varchar(100) NOT NULL,
  `file_fc_sk_konversi_nip` varchar(100) NOT NULL,
  `file_asli_pak_terakhir` varchar(100) NOT NULL,
  `file_asli_skp_2_tahun` varchar(100) NOT NULL,
  `file_asli_sk_terakhir` varchar(100) NOT NULL,
  `file_jabatan_fungsional` varchar(100) NOT NULL,
  `file_asli_ijazah` varchar(100) NOT NULL,
  `file_asli_transkip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kenaikan_fungsional_karyawan`
--

INSERT INTO `kenaikan_fungsional_karyawan` (`id`, `nama`, `tgl_input`, `tgl_kenaikan`, `file_fc_karpeg`, `file_fc_sk_pangkat_terakhir`, `file_fc_ijazah_terakhir`, `file_fc_skp_2_tahun`, `file_pak_asli`, `file_pak_sebelumnya`, `file_fc_sk_konversi_nip`, `file_asli_pak_terakhir`, `file_asli_skp_2_tahun`, `file_asli_sk_terakhir`, `file_jabatan_fungsional`, `file_asli_ijazah`, `file_asli_transkip`) VALUES
(10, 123458, '2022-04-17', '2022-10-13', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 123460, '2022-04-17', '2022-11-16', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  ADD CONSTRAINT `kenaikan_fungsional_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
