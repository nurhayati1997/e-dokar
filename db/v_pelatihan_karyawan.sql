-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:59 AM
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
-- Structure for view `v_pelatihan_karyawan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pelatihan_karyawan`  AS  select `karyawan`.`rule` AS `rule`,`pelatihan_karyawan`.`id` AS `id`,`karyawan`.`nama` AS `nama`,`pelatihan_karyawan`.`tgl_update` AS `tgl_update`,`pelatihan_karyawan`.`nama_pelatihan` AS `nama_pelatihan`,`pelatihan_karyawan`.`tgl_mulai_pelatihan` AS `tgl_mulai_pelatihan`,`pelatihan_karyawan`.`tgl_selesai_pelatihan` AS `tgl_selesai_pelatihan`,`pelatihan_karyawan`.`durasi_pelatihan` AS `durasi_pelatihan`,`pelatihan_karyawan`.`no_sertifikat` AS `no_sertifikat`,`pelatihan_karyawan`.`file_sertifikat` AS `file_sertifikat` from (`karyawan` join `pelatihan_karyawan`) where `karyawan`.`id` = `pelatihan_karyawan`.`nama` order by `karyawan`.`id` ;

--
-- VIEW `v_pelatihan_karyawan`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
