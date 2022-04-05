-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 02:41 AM
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
-- Table structure for table `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id`, `nama`, `nip`, `jabatan`) VALUES
(1, 123459, '1', 'jg'),
(2, 123458, '7', 'njh');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD CONSTRAINT `cuti_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `hrd_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
