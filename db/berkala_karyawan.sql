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
-- Table structure for table `berkala_karyawan`
--

CREATE TABLE `berkala_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_berkala` date NOT NULL,
  `sk_pangkat_terakhir` varchar(100) NOT NULL,
  `sk_berkala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkala_karyawan`
--

INSERT INTO `berkala_karyawan` (`id`, `nama`, `tgl_input`, `tgl_berkala`, `sk_pangkat_terakhir`, `sk_berkala`) VALUES
(5, 123458, '2022-04-11', '2022-04-01', 'C:\\fakepath\\Data Karyawan.xls', 'C:\\fakepath\\RAJAL JANUARI 2022.xlsx'),
(6, 6, '2022-04-17', '2023-03-08', 'SK_PANGKAT_TERAKHIR_Nurhayati_Fitriani.pdf', 'SK_PANGKAT_TERAKHIR_Nurhayati_Fitriani3.pdf'),
(8, 6, '2022-04-19', '2022-04-20', '', 'SK_PANGKAT_TERAKHIR_Nurhayati_Fitriani2.pdf'),
(9, 123457, '2022-04-19', '2022-05-07', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  ADD CONSTRAINT `berkala_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
