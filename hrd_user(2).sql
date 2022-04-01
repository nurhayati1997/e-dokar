-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 09:48 AM
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
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status_karyawan` varchar(30) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `rule` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_karyawan` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_pendidikan` varchar(100) NOT NULL,
  `jenis_tenaga` varchar(100) NOT NULL,
  `jenis_detail_tenaga` int(11) NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kelu` varchar(50) NOT NULL,
  `rt_rw` varchar(100) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(50) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_pernikahan` varchar(100) NOT NULL,
  `goldar` varchar(30) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `no_sd` varchar(30) NOT NULL,
  `file_sd` varchar(30) NOT NULL,
  `smp` varchar(50) NOT NULL,
  `no_smp` varchar(100) NOT NULL,
  `file_smp` varchar(50) NOT NULL,
  `sma` varchar(100) NOT NULL,
  `no_sma` varchar(100) NOT NULL,
  `file_sma` varchar(30) NOT NULL,
  `s1` varchar(30) NOT NULL,
  `no_s1` varchar(30) NOT NULL,
  `file_s1` varchar(50) NOT NULL,
  `s2` varchar(100) NOT NULL,
  `no_s2` varchar(50) NOT NULL,
  `file_s2` varchar(100) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `no_s3` varchar(100) NOT NULL,
  `file_s3` varchar(100) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `no_profesi` varchar(50) NOT NULL,
  `file_profesi` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `pensiun` date NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `file_sk` varchar(50) NOT NULL,
  `file_penempatan` varchar(100) NOT NULL,
  `no_str` varchar(100) NOT NULL,
  `file_str` varchar(30) NOT NULL,
  `no_sip` varchar(30) NOT NULL,
  `file_sip` varchar(30) NOT NULL,
  `masa_sip` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_user`
--

INSERT INTO `hrd_user` (`id`, `nama`, `status_karyawan`, `jabatan`, `email`, `password`, `rule`, `status`, `nik`, `nip`, `no_hp`, `id_karyawan`, `alamat`, `jenis_pendidikan`, `jenis_tenaga`, `jenis_detail_tenaga`, `tgl_update`, `foto`, `prov`, `kab`, `kec`, `kelu`, `rt_rw`, `kode_pos`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_pernikahan`, `goldar`, `suku`, `sd`, `no_sd`, `file_sd`, `smp`, `no_smp`, `file_smp`, `sma`, `no_sma`, `file_sma`, `s1`, `no_s1`, `file_s1`, `s2`, `no_s2`, `file_s2`, `s3`, `no_s3`, `file_s3`, `profesi`, `no_profesi`, `file_profesi`, `golongan`, `pensiun`, `gaji`, `no_sk`, `file_sk`, `file_penempatan`, `no_str`, `file_str`, `no_sip`, `file_sip`, `masa_sip`) VALUES
(1, 'hilal amin', 'PNS', 'KA.Unit', 'hilal@gmail.com', '$y201$a4a$jU/LgIQb21X6hXqmkzX17.fP1uX4OTGq.7o/2mTcUhysbmCtvZ', 1, 1, '2342', '', '', '123456', '', 'Margister', 'Pejabat Struktural', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00'),
(6, 'Nurhayati Fitriani', '', 'owner', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1, '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00'),
(123457, 'mohammad', 'PNS', 'Wadir', 'hilal77@gmail.com', '$y201$4VF$zWC0R9C0x16268QaiJp/bogvFu93H.RMU74Xv94f7PDOtiZcvs', 2, 1, '764', '', '0986', '765', 'bumianyar', 'Pasca Sarjana Manajemen', 'Pejabat Struktural', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00'),
(123458, 'rina handayani', 'Kontrak', 'Staff', 'rina@gmail.com', '$y201$cv/$iLrz0MRLLhi5QoaYexOEJR9mGOCe31ibNOBurOJYCoKX8iFlpM', 3, 1, '5432144', '1909674571474', '08230104', '8764', 'jl.Halim Perdana Kusuma No 12', 'Sarjana Ekonomi', 'Pejabat Struktural', 0, '2022-03-31', '', 'Jawa Timur', 'Bangkalan', 'Bangkalan', '-', '-/-', '69112', 'Sumenep', '2022-04-20', 'Perempuan', 'Islam', 'Menikah', 'o', 'Indonesia', 'bangkalan 01', '', '', 'bangkalan 02', '2457443', '', 'bangkalan 03', '254345', '', 'STKIP', '343', '', '-', '3434', '', '-', '34', '', 'Keperawatan', '7798/j/475', '', 'Penata Muda/IIIb', '0000-00-00', '3.500.000', '4575/597/78', '', '', '7789/14/sep/hn', '', '789/uyr/o/2022', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hrd_user`
--
ALTER TABLE `hrd_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123459;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
