-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:52 AM
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
-- Table structure for table `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `nama` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `alasan_cuti` varchar(100) NOT NULL,
  `cuti_selama` varchar(35) NOT NULL,
  `mulai_tgl` date NOT NULL,
  `sampai_tgl` date NOT NULL,
  `tahunan_n2_sisa` varchar(30) NOT NULL,
  `tahunan_n2_keterangan` varchar(100) NOT NULL,
  `tahunan_n1_sisa` varchar(30) NOT NULL,
  `tahunan_n1_keterangan` varchar(100) NOT NULL,
  `tahunan_n_sisa` varchar(30) NOT NULL,
  `tahunan_n_keterangan` varchar(100) NOT NULL,
  `cuti_besar_ket` varchar(100) NOT NULL,
  `cuti_sakit_ket` varchar(100) NOT NULL,
  `cuti_melahirkan_ket` varchar(100) NOT NULL,
  `cuti_penting_ket` varchar(100) NOT NULL,
  `cuti_diluar_tanggungan_ket` varchar(100) NOT NULL,
  `alamat_selama_cuti` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `pertimbangan_atasan` varchar(100) NOT NULL,
  `keputusan_pejabat` varchar(100) NOT NULL,
  `file_cuti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id`, `tgl_input`, `nama`, `nip`, `jabatan`, `masa_kerja`, `unit_kerja`, `jenis_cuti`, `alasan_cuti`, `cuti_selama`, `mulai_tgl`, `sampai_tgl`, `tahunan_n2_sisa`, `tahunan_n2_keterangan`, `tahunan_n1_sisa`, `tahunan_n1_keterangan`, `tahunan_n_sisa`, `tahunan_n_keterangan`, `cuti_besar_ket`, `cuti_sakit_ket`, `cuti_melahirkan_ket`, `cuti_penting_ket`, `cuti_diluar_tanggungan_ket`, `alamat_selama_cuti`, `telp`, `pertimbangan_atasan`, `keputusan_pejabat`, `file_cuti`) VALUES
(3, '2022-04-11', 123458, '11', 'gg', '4 thn', 'g', 'g', 'g', '6', '2022-04-01', '2022-04-20', '', '', '', '', '', '', '', 'melhirkan', '', '', '', 'bmyar', '6756', 'setuju', 'setuju', ''),
(4, '2022-04-11', 123458, '0', 'Wadir', '2 Tahun / September 2019 - Sep', 'HD', 'Cuti Besar', '-', '2', '2022-04-05', '2022-04-07', '-', '-', '-', '-', '-', '', '', '', '', '', '', '', '', 'DITANGGUHKAN', 'PERUBAHAN', 'Berkas_Cuti_rina_handayani.pdf'),
(5, '2022-04-11', 6, '1', 'KA.BAG', '2 Tahun / September 2019 - Sep', 'CAMELIA', 'Cuti Sakit', '', '', '2022-04-19', '2022-04-21', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PERUBAHAN', 'DISETUJUI', 'Berkas_Cuti_Nurhayati_Fitriani.pdf'),
(6, '2022-04-11', 123457, '0', 'KA.Unit', '2 Tahun / September 2019 - Sep', 'HD', 'Cuti Karena Alasan Penting', 'f', 'f', '2022-04-06', '2022-04-27', 'f', 'f', 'fs', 'df', 'x', 'fc', 'fgn', 'fgn', 'gn', 'fgn', 'dfn', 'fgn', 'fgn', 'DISETUJUI', 'DISETUJUI', 'C:\\fakepath\\cuti_karyawan.sql');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD CONSTRAINT `cuti_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
