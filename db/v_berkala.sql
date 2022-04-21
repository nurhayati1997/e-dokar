-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 04:27 PM
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
-- Structure for view `v_berkala`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berkala`  AS SELECT `karyawan`.`rule` AS `rule`, `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `berkala_karyawan`.`tgl_input` AS `tgl_input`, `berkala_karyawan`.`tgl_berkala` AS `tgl_berkala`, `berkala_karyawan`.`sk_pangkat_terakhir` AS `sk_pangkat_terakhir`, `berkala_karyawan`.`sk_berkala` AS `sk_berkala` FROM (`karyawan` join `berkala_karyawan`) WHERE `karyawan`.`id` = `berkala_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

--
-- VIEW `v_berkala`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
