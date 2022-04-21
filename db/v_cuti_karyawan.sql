-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:57 AM
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
-- Structure for view `v_cuti_karyawan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cuti_karyawan`  AS  select `karyawan`.`rule` AS `rule`,`cuti_karyawan`.`id` AS `id`,`karyawan`.`nama` AS `nama`,`cuti_karyawan`.`tgl_input` AS `tgl_input`,`cuti_karyawan`.`nip` AS `nip`,`cuti_karyawan`.`jabatan` AS `jabatan`,`cuti_karyawan`.`masa_kerja` AS `masa_kerja`,`cuti_karyawan`.`unit_kerja` AS `unit_kerja`,`cuti_karyawan`.`jenis_cuti` AS `jenis_cuti`,`cuti_karyawan`.`alasan_cuti` AS `alasan_cuti`,`cuti_karyawan`.`cuti_selama` AS `cuti_selama`,`cuti_karyawan`.`mulai_tgl` AS `mulai_tgl`,`cuti_karyawan`.`sampai_tgl` AS `sampai_tgl`,`cuti_karyawan`.`tahunan_n2_sisa` AS `tahunan_n2_sisa`,`cuti_karyawan`.`tahunan_n2_keterangan` AS `tahunan_n2_keterangan`,`cuti_karyawan`.`tahunan_n1_sisa` AS `tahunan_n1_sisa`,`cuti_karyawan`.`tahunan_n1_keterangan` AS `tahunan_n1_keterangan`,`cuti_karyawan`.`tahunan_n_sisa` AS `tahunan_n_sisa`,`cuti_karyawan`.`tahunan_n_keterangan` AS `tahunan_n_keterangan`,`cuti_karyawan`.`cuti_besar_ket` AS `cuti_besar_ket`,`cuti_karyawan`.`cuti_sakit_ket` AS `cuti_sakit_ket`,`cuti_karyawan`.`cuti_melahirkan_ket` AS `cuti_melahirkan_ket`,`cuti_karyawan`.`cuti_penting_ket` AS `cuti_penting_ket`,`cuti_karyawan`.`cuti_diluar_tanggungan_ket` AS `cuti_diluar_tanggungan_ket`,`cuti_karyawan`.`alamat_selama_cuti` AS `alamat_selama_cuti`,`cuti_karyawan`.`telp` AS `telp`,`cuti_karyawan`.`pertimbangan_atasan` AS `pertimbangan_atasan`,`cuti_karyawan`.`keputusan_pejabat` AS `keputusan_pejabat`,`cuti_karyawan`.`file_cuti` AS `file_cuti` from (`karyawan` join `cuti_karyawan`) where `karyawan`.`id` = `cuti_karyawan`.`nama` order by `karyawan`.`id` ;

--
-- VIEW `v_cuti_karyawan`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
