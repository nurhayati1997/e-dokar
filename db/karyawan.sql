-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 03:53 AM
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
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
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
  `file_sd` varchar(50) NOT NULL,
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
  `jenis_jabatan` varchar(50) NOT NULL,
  `pangkat_golongan` varchar(50) NOT NULL,
  `pensiun` date NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `no_sk` varchar(100) NOT NULL,
  `file_sk` varchar(50) NOT NULL,
  `file_penempatan` varchar(100) NOT NULL,
  `no_str` varchar(100) NOT NULL,
  `file_str` varchar(30) NOT NULL,
  `no_sip` varchar(30) NOT NULL,
  `file_sip` varchar(30) NOT NULL,
  `masa_sip` date NOT NULL,
  `file_skp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `status_karyawan`, `jabatan`, `email`, `password`, `rule`, `status`, `nik`, `nip`, `no_hp`, `id_karyawan`, `alamat`, `jenis_pendidikan`, `jenis_tenaga`, `jenis_detail_tenaga`, `tgl_update`, `foto`, `prov`, `kab`, `kec`, `kelu`, `rt_rw`, `kode_pos`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_pernikahan`, `goldar`, `suku`, `sd`, `no_sd`, `file_sd`, `smp`, `no_smp`, `file_smp`, `sma`, `no_sma`, `file_sma`, `s1`, `no_s1`, `file_s1`, `s2`, `no_s2`, `file_s2`, `s3`, `no_s3`, `file_s3`, `profesi`, `no_profesi`, `file_profesi`, `golongan`, `jenis_jabatan`, `pangkat_golongan`, `pensiun`, `gaji`, `ruangan`, `no_sk`, `file_sk`, `file_penempatan`, `no_str`, `file_str`, `no_sip`, `file_sip`, `masa_sip`, `file_skp`) VALUES
(1, 'hilal aminuddin', 'PNS', 'Direktur', 'hilal@gmail.com', '$y201$a4a$jU/LgIQb21X6hXqmkzX17.fP1uX4OTGq.7o/2mTcUhysbmCtvZ', 1, 1, '2342', '', '', '123456', '', 'Dokter Umum', 'Tenaga Medis / Dokter', 0, '2022-03-31', 'hilal_aminuddin6.jpeg', '', '', '', '', '', '', '', '1992-03-05', 'Laki-Laki', '', '', '', '', '', '', 'Ijazah_SD_hilal_aminuddin3.pdf', '', '', 'Ijazah_SMP_hilal_aminuddin3.pdf', '', '', 'Ijazah_SMA_hilal_aminuddin1.pd', '', '', 'Ijazah_S1_hilal_aminuddin.pdf', '', '', 'Ijazah_S2_hilal_aminuddin2.pdf', '', '', 'Ijazah_S3_hilal_aminuddin1.pdf', '', '', 'Ijazah_Profesi_hilal_aminuddin1.pdf', '-', '-', '-', '0000-00-00', '', 'LOKET 1 ( RM )', '', 'SK_hilal_aminuddin1.pdf', 'SK_PENEMPATAN_hilal_aminuddin1.pdf', '', 'STR_hilal_aminuddin1.pdf', '', 'SIP_hilal_aminuddin.pdf', '2022-08-28', 'SKP_hilal_aminuddin1.pdf'),
(6, 'Nurhayati Fitriani', 'CPNS', '', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1, '', '', '', '', '', '', 'Tenaga Keperawatan', 0, '0000-00-00', 'Nurhayati_Fitriani.png', '', '', '', '', '', '', '', '0000-00-00', 'Perempuan', '', '', '', '', '', '', 'Ijazah_SD_Nurhayati_Fitriani1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'IV a', 'Profesi', 'Pertama', '0000-00-00', '', 'INSTALASI TEKNOLOGI DAN INFORMASI', '', '', '', '', '', '', 'SIP_Nurhayati_Fitriani.pdf', '0000-00-00', ''),
(123457, 'mohammad', 'PNS', 'Direktur', 'hilal77@gmail.com', '$y201$4VF$zWC0R9C0x16268QaiJp/bogvFu93H.RMU74Xv94f7PDOtiZcvs', 2, 1, '764', '', '0986', '765', 'bumianyar', 'Dokter Umum', 'Tenaga Medis / Dokter', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', 'Laki-Laki', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '-', '-', '-', '0000-00-00', '', 'LOKET 1 ( RM )', '', '', '', '', '', '', '', '2022-07-23', 'C:\\fakepath\\license.txt'),
(123458, 'rina handayani', 'THL', '', 'rina@gmail.com', '$y201$cv/$iLrz0MRLLhi5QoaYexOEJR9mGOCe31ibNOBurOJYCoKX8iFlpM', 3, 1, '5432144', '1909674571474', '08230104', '8764', 'jl.Halim Perdana Kusuma No 12', '', '', 0, '2022-03-31', 'rina_handayani1.jpeg', 'Jawa Timur', 'Bangkalan', 'Bangkalan', '-', '-/-', '69112', 'Sumenep', '1940-04-13', 'Perempuan', 'Islam', 'Menikah', 'o', 'Indonesia', 'bangkalan 01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-04-14', '', 'BAGIAN KEPEGAWAIAN', '', '', 'SK_PENEMPATAN_rina_handayani.pdf', '', '', '', '', '0000-00-00', ''),
(123460, 'tutul', '', '', 'tutul@gmail.com', '$y201$9vq$wYTzyr765YKWId6oqR8lHav/A.15PfplvNSkEl8Zj1kDgqRwkV', 3, 1, '', '', '', '7544', '', '', '', 0, '2022-04-12', '', '', '', '', '', '', '', '', '0000-00-00', 'Perempuan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '2022-06-21', ''),
(123461, 'dfc', '', NULL, 'up.syamrabu@gmail.com', '$y201$OJk$pZo6wpa7JiIyehk4bLIKbaNA2.9M2quxp6s8N99Omd0WZiS41l', 3, 1, '', '', '', '435', '', '', '', 0, '2022-04-17', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(123462, 'ngn', '', NULL, 'nunukkristiani@gmail.com', '$y201$Erb$UgUHSZ8wFLaCztuLhtZu8v9ANe6VkKSo2S5eoGNm6E6Ao.GcMN', 3, 1, '', '', '', '564', '', '', '', 0, '2022-04-17', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(123463, 'renutu', '', NULL, 'kristiani@gmail.com', '$y201$jXp$Yugwb4j017HGusIkoInj7em6dua1rQPyLUqg2smeeiV4n65L0N', 3, 1, '', '', '', '436', '', '', '', 0, '2022-04-17', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123464;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
