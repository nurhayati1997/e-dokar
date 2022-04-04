-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 03:07 AM
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
-- Structure for view `v_kenaikan_reguler`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kenaikan_reguler`  AS SELECT `hrd_user`.`nama` AS `nama`, `kenaikan_reguler_karyawan`.`id` AS `id`, `kenaikan_reguler_karyawan`.`tgl_input` AS `tgl_input`, `kenaikan_reguler_karyawan`.`tgl_kenaikan` AS `tgl_kenaikan`, `kenaikan_reguler_karyawan`.`jenis_kenaikan_reguler` AS `jenis_kenaikan_reguler`, `kenaikan_reguler_karyawan`.`file_fc_karpeg` AS `file_fc_karpeg`, `kenaikan_reguler_karyawan`.`file_fc_sk_pangkat_terakhir` AS `file_fc_sk_pangkat_terakhir`, `kenaikan_reguler_karyawan`.`file_fc_stlud` AS `file_fc_stlud`, `kenaikan_reguler_karyawan`.`file_fc_ijazah_terakhir` AS `file_fc_ijazah_terakhir`, `kenaikan_reguler_karyawan`.`file_fc_skp_2_tahun` AS `file_fc_skp_2_tahun`, `kenaikan_reguler_karyawan`.`file_fc_cpns_pns` AS `file_fc_cpns_pns`, `kenaikan_reguler_karyawan`.`file_fc_sk_konversi_nip` AS `file_fc_sk_konversi_nip`, `kenaikan_reguler_karyawan`.`file_asli_sk_terakhir` AS `file_asli_sk_terakhir`, `kenaikan_reguler_karyawan`.`file_asli_skp_2_tahun` AS `file_asli_skp_2_tahun`, `kenaikan_reguler_karyawan`.`file_asli_ijazah` AS `file_asli_ijazah`, `kenaikan_reguler_karyawan`.`file_asli_transkip` AS `file_asli_transkip` FROM (`hrd_user` join `kenaikan_reguler_karyawan`) WHERE `hrd_user`.`id` = `kenaikan_reguler_karyawan`.`nama` ORDER BY `hrd_user`.`id` ASC ;

--
-- VIEW `v_kenaikan_reguler`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
