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
-- Table structure for table `kenaikan_reguler_karyawan`
--

CREATE TABLE `kenaikan_reguler_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `jenis_kenaikan_reguler` varchar(50) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_kenaikan` date NOT NULL,
  `file_fc_karpeg` varchar(100) NOT NULL,
  `file_fc_sk_pangkat_terakhir` varchar(100) NOT NULL,
  `file_fc_stlud` varchar(100) NOT NULL,
  `file_fc_ijazah_terakhir` varchar(100) NOT NULL,
  `file_fc_skp_2_tahun` varchar(100) NOT NULL,
  `file_fc_cpns_pns` varchar(100) NOT NULL,
  `file_fc_sk_konversi_nip` varchar(100) NOT NULL,
  `file_asli_sk_terakhir` varchar(100) NOT NULL,
  `file_asli_skp_2_tahun` varchar(100) NOT NULL,
  `file_asli_ijazah` varchar(100) NOT NULL,
  `file_asli_transkip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kenaikan_reguler_karyawan`
--

INSERT INTO `kenaikan_reguler_karyawan` (`id`, `nama`, `jenis_kenaikan_reguler`, `tgl_input`, `tgl_kenaikan`, `file_fc_karpeg`, `file_fc_sk_pangkat_terakhir`, `file_fc_stlud`, `file_fc_ijazah_terakhir`, `file_fc_skp_2_tahun`, `file_fc_cpns_pns`, `file_fc_sk_konversi_nip`, `file_asli_sk_terakhir`, `file_asli_skp_2_tahun`, `file_asli_ijazah`, `file_asli_transkip`) VALUES
(1, 6, '', '0000-00-00', '2022-04-21', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(3, 123458, '', '2022-04-03', '2022-04-28', '', '', '', '', '', '', '', '', '', '', ''),
(6, 1, 'Struktural', '2022-04-03', '2022-04-20', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  ADD CONSTRAINT `kenaikan_reguler_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `hrd_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
