-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 07:35 AM
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
-- Table structure for table `hrd_user`
--

CREATE TABLE `hrd_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_karyawan` varchar(30) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_user`
--

INSERT INTO `hrd_user` (`id_user`, `nama`, `status_karyawan`, `jabatan`, `email`, `password`, `rule`, `status`) VALUES
(6, 'Nurhayati Fitriani', '', 'owner', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1),
(127, 're', '1', '1', 'nurhayatifitriani@gmail.com', '$y201$2Ul$La/2iVsC3g0k/2XoQt6plNx.2.ZGW0azV8DDRDzJOB6FOGqPRU', 1, 0),
(1254, 'romi', '1', '3', 'romi@gmail.com', '$y201$mTp$XlQuB.WGO9XabyiaoBb97GUSGO2TCaxnlMrkrjlD/UcTt6/rbg', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
