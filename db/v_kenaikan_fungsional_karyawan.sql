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
-- Structure for view `v_kenaikan_fungsional_karyawan`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kenaikan_fungsional_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `kenaikan_fungsional_karyawan`.`tgl_input` AS `tgl_input`, `kenaikan_fungsional_karyawan`.`tgl_kenaikan` AS `tgl_kenaikan`, `kenaikan_fungsional_karyawan`.`file_fc_karpeg` AS `file_fc_karpeg`, `kenaikan_fungsional_karyawan`.`file_fc_sk_pangkat_terakhir` AS `file_fc_sk_pangkat_terakhir`, `kenaikan_fungsional_karyawan`.`file_pak_asli` AS `file_pak_asli`, `kenaikan_fungsional_karyawan`.`file_pak_sebelumnya` AS `file_pak_sebelumnya`, `kenaikan_fungsional_karyawan`.`file_fc_ijazah_terakhir` AS `file_fc_ijazah_terakhir`, `kenaikan_fungsional_karyawan`.`file_fc_skp_2_tahun` AS `file_fc_skp_2_tahun`, `kenaikan_fungsional_karyawan`.`file_fc_sk_konversi_nip` AS `file_fc_sk_konversi_nip`, `kenaikan_fungsional_karyawan`.`file_asli_pak_terakhir` AS `file_asli_pak_terakhir`, `kenaikan_fungsional_karyawan`.`file_jabatan_fungsional` AS `file_jabatan_fungsional`, `kenaikan_fungsional_karyawan`.`file_asli_sk_terakhir` AS `file_asli_sk_terakhir`, `kenaikan_fungsional_karyawan`.`file_asli_skp_2_tahun` AS `file_asli_skp_2_tahun`, `kenaikan_fungsional_karyawan`.`file_asli_ijazah` AS `file_asli_ijazah`, `kenaikan_fungsional_karyawan`.`file_asli_transkip` AS `file_asli_transkip` FROM (`karyawan` join `kenaikan_fungsional_karyawan`) WHERE `karyawan`.`id` = `kenaikan_fungsional_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

--
-- VIEW `v_kenaikan_fungsional_karyawan`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
