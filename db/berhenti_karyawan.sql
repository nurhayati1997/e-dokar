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
-- Table structure for table `berhenti_karyawan`
--

CREATE TABLE `berhenti_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_berhenti` date NOT NULL,
  `alasan_berhenti` varchar(100) NOT NULL,
  `ruangan_terakhir` varchar(100) NOT NULL,
  `status_karyawan` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berhenti_karyawan`
--

INSERT INTO `berhenti_karyawan` (`id`, `nama`, `tgl_input`, `tgl_berhenti`, `alasan_berhenti`, `ruangan_terakhir`, `status_karyawan`, `jabatan`) VALUES
(4, 123458, '2022-04-11', '2022-04-05', 'Pensiun', 'TULIP', 'THL', 'KA.Subag'),
(5, 1, '2022-04-11', '2022-04-02', 'Mutasi', 'INSTALASI KESEHATAN LINGKUNGAN ', 'CPNS', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  ADD CONSTRAINT `berhenti_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
