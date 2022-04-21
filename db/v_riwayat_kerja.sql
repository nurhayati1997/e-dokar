-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 04:26 PM
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
-- Structure for view `v_riwayat_kerja`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_riwayat_kerja`  AS SELECT `karyawan`.`rule` AS `rule`, `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `riwayat_kerja_karyawan`.`tgl_input` AS `tgl_input`, `riwayat_kerja_karyawan`.`ruangan_baru` AS `ruangan_baru`, `riwayat_kerja_karyawan`.`no_sk` AS `no_sk`, `riwayat_kerja_karyawan`.`tgl_sk` AS `tgl_sk`, `riwayat_kerja_karyawan`.`nama_pinpinan` AS `nama_pinpinan`, `riwayat_kerja_karyawan`.`tahun` AS `tahun` FROM (`karyawan` join `riwayat_kerja_karyawan`) WHERE `karyawan`.`id` = `riwayat_kerja_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

--
-- VIEW `v_riwayat_kerja`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
