-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 04:22 AM
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
-- Table structure for table `berhenti_karyawan`
--

CREATE TABLE `berhenti_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_berhenti` date NOT NULL,
  `alasan_berhenti` varchar(100) NOT NULL,
  `ruangan_terakhir` varchar(100) NOT NULL,
  `status_karyawan` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berhenti_karyawan`
--

INSERT INTO `berhenti_karyawan` (`id`, `nama`, `tgl_input`, `tgl_berhenti`, `alasan_berhenti`, `ruangan_terakhir`, `status_karyawan`, `jabatan`) VALUES
(4, 123458, '2022-04-11', '2022-04-05', 'Pensiun', 'TULIP', 'THL', 'KA.Subag'),
(5, 1, '2022-04-11', '2022-04-02', 'Mutasi', 'INSTALASI KESEHATAN LINGKUNGAN ', 'CPNS', 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `berkala_karyawan`
--

CREATE TABLE `berkala_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_berkala` date NOT NULL,
  `sk_pangkat_terakhir` varchar(100) NOT NULL,
  `sk_berkala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkala_karyawan`
--

INSERT INTO `berkala_karyawan` (`id`, `nama`, `tgl_input`, `tgl_berkala`, `sk_pangkat_terakhir`, `sk_berkala`) VALUES
(2, 123458, '2022-04-11', '2022-04-14', 'C:\\fakepath\\Blangko_Cuti.pdf', ''),
(4, 1, '2022-04-11', '2022-04-07', 'C:\\fakepath\\Blangko_Cuti.pdf', 'C:\\fakepath\\SK TIM SIMRS.pdf'),
(5, 123458, '2022-04-11', '2022-04-01', 'C:\\fakepath\\Data Karyawan.xls', 'C:\\fakepath\\RAJAL JANUARI 2022.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `nama` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `alasan_cuti` varchar(100) NOT NULL,
  `cuti_selama` varchar(35) NOT NULL,
  `mulai_tgl` date NOT NULL,
  `sampai_tgl` date NOT NULL,
  `tahunan_n2_sisa` varchar(30) NOT NULL,
  `tahunan_n2_keterangan` varchar(100) NOT NULL,
  `tahunan_n1_sisa` varchar(30) NOT NULL,
  `tahunan_n1_keterangan` varchar(100) NOT NULL,
  `tahunan_n_sisa` varchar(30) NOT NULL,
  `tahunan_n_keterangan` varchar(100) NOT NULL,
  `cuti_besar_ket` varchar(100) NOT NULL,
  `cuti_sakit_ket` varchar(100) NOT NULL,
  `cuti_melahirkan_ket` varchar(100) NOT NULL,
  `cuti_penting_ket` varchar(100) NOT NULL,
  `cuti_diluar_tanggungan_ket` varchar(100) NOT NULL,
  `alamat_selama_cuti` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `pertimbangan_atasan` varchar(100) NOT NULL,
  `keputusan_pejabat` varchar(100) NOT NULL,
  `file_cuti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id`, `tgl_input`, `nama`, `nip`, `jabatan`, `masa_kerja`, `unit_kerja`, `jenis_cuti`, `alasan_cuti`, `cuti_selama`, `mulai_tgl`, `sampai_tgl`, `tahunan_n2_sisa`, `tahunan_n2_keterangan`, `tahunan_n1_sisa`, `tahunan_n1_keterangan`, `tahunan_n_sisa`, `tahunan_n_keterangan`, `cuti_besar_ket`, `cuti_sakit_ket`, `cuti_melahirkan_ket`, `cuti_penting_ket`, `cuti_diluar_tanggungan_ket`, `alamat_selama_cuti`, `telp`, `pertimbangan_atasan`, `keputusan_pejabat`, `file_cuti`) VALUES
(3, '2022-04-11', 123458, '11', 'gg', '4 thn', 'g', 'g', 'g', '6', '2022-04-01', '2022-04-20', '', '', '', '', '', '', '', 'melhirkan', '', '', '', 'bmyar', '6756', 'setuju', 'setuju', ''),
(4, '2022-04-11', 123458, '0', 'Wadir', '2 Tahun / September 2019 - Sep', 'HD', 'Cuti Besar', '-', '2', '2022-04-05', '2022-04-07', '-', '-', '-', '-', '-', '', '', '', '', '', '', '', '', 'DITANGGUHKAN', 'PERUBAHAN', ''),
(5, '2022-04-11', 6, '1', 'KA.BAG', '2 Tahun / September 2019 - Sep', 'CAMELIA', 'Cuti Sakit', '', '', '2022-04-19', '2022-04-21', '', '', '', '', '', '', '', '', '', '', '', '', '', 'PERUBAHAN', 'DISETUJUI', ''),
(6, '2022-04-11', 123457, '0', 'KA.Unit', '2 Tahun / September 2019 - Sep', 'HD', 'Cuti Karena Alasan Penting', 'f', 'f', '2022-04-06', '2022-04-27', 'f', 'f', 'fs', 'df', 'x', 'fc', 'fgn', 'fgn', 'gn', 'fgn', 'dfn', 'fgn', 'fgn', 'DISETUJUI', 'DISETUJUI', 'C:\\fakepath\\cuti_karyawan.sql');

-- --------------------------------------------------------

--
-- Table structure for table `gcu_syamrabu`
--

CREATE TABLE `gcu_syamrabu` (
  `id` int(11) NOT NULL,
  `tgl_daftar_gcu` date NOT NULL DEFAULT current_timestamp(),
  `nama` varchar(50) NOT NULL,
  `jk_pasien_gcu` varchar(15) NOT NULL,
  `pernikahan_pasien_gcu` varchar(15) NOT NULL,
  `pendidikan_pasien_gcu` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `ttl_pasien_gcu` date NOT NULL,
  `alamat_pasien_gcu` varchar(100) DEFAULT NULL,
  `kecamatan_pasien_gcu` varchar(20) DEFAULT NULL,
  `kabupaten_pasien_gcu` varchar(20) DEFAULT NULL,
  `bb_pasien_gcu` int(5) DEFAULT NULL,
  `tb_pasien_gcu` int(5) DEFAULT NULL,
  `pendengaran_pasien_gcu` varchar(5) NOT NULL,
  `warna_pasien_gcu` varchar(5) NOT NULL,
  `keperluan_pasien_gcu` varchar(30) DEFAULT NULL,
  `nama_dokter_gcu` varchar(30) DEFAULT NULL,
  `nip_dokter_gcu` varchar(30) DEFAULT NULL,
  `atas_permintaan_ps` varchar(100) DEFAULT NULL,
  `nama_atas_permintaan_ps` varchar(100) DEFAULT NULL,
  `jabatan_atas_permintaan_ps` varchar(100) DEFAULT NULL,
  `no_surat_atas_permintaan_ps` varchar(100) DEFAULT NULL,
  `perihal_atas_permintaan_ps` varchar(100) DEFAULT NULL,
  `keterangan_pasien_gcu` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcu_syamrabu`
--

INSERT INTO `gcu_syamrabu` (`id`, `tgl_daftar_gcu`, `nama`, `jk_pasien_gcu`, `pernikahan_pasien_gcu`, `pendidikan_pasien_gcu`, `tempat_lahir`, `ttl_pasien_gcu`, `alamat_pasien_gcu`, `kecamatan_pasien_gcu`, `kabupaten_pasien_gcu`, `bb_pasien_gcu`, `tb_pasien_gcu`, `pendengaran_pasien_gcu`, `warna_pasien_gcu`, `keperluan_pasien_gcu`, `nama_dokter_gcu`, `nip_dokter_gcu`, `atas_permintaan_ps`, `nama_atas_permintaan_ps`, `jabatan_atas_permintaan_ps`, `no_surat_atas_permintaan_ps`, `perihal_atas_permintaan_ps`, `keterangan_pasien_gcu`) VALUES
(12, '2022-02-02', 'yati', 'Perempuan', 'Belum Menikah', 'ghdfh', 'fh', '2022-02-10', 'fdh', 'hdf', 'dgsdg', 57, 167, 'Baik', '57', 'gfjf', 'dr.YULIA MAYASIN', '197207082010012003', 'Pemkot surabaya', 'mustakim', 'kepala cabang ', '800/10', 'Permohonan Fasilitas Kesehatan', 'ythf'),
(13, '2022-02-03', 'yati sedang mencoba', 'Perempuan', 'Menikah', 'S1 Teknik Informatika', 'Bangkalan', '2022-02-22', 'Tanjungbumi', 'bangkalan', 'surabaya', 62, 162, 'Baik', '-', 'pemberkasan p3k', 'dr.YULIA MAYASIN', '197207082010012003', '-', '-', '-', '-', '-', '-'),
(14, '2022-02-04', 'yati sedang mencoba', 'Perempuan', 'Menikah', 'si', 'fh', '2022-02-22', 'gf', 'fgj', 'jil', NULL, NULL, '', '', 'dtutfhdfhyftrytjhtyjnghjygloiu', NULL, NULL, '-', '-', '-', '-', '-', NULL),
(15, '2022-02-04', 'tud', 'Perempuan', 'Menikah', 'drtu', 'trd', '2022-02-08', 'dh', 'dj', 'jd', 172, 67, 'Baik', '-', 'dj', 'dr.YULIA MAYASIN', '197207082010012003', 'dy', 'du', 'u', 'u', 'u', 'hfhf'),
(18, '2022-02-04', 'trdyu', 'Perempuan', 'Menikah', 'djudt', 'tu', '2022-02-14', 'utr', 'tu', 'rtd', NULL, NULL, '', '', 'ght', NULL, NULL, 'tu', 'tu', 'u', 'u', 'u', NULL);

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
  `ruangan` varchar(100) NOT NULL,
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

INSERT INTO `hrd_user` (`id`, `nama`, `status_karyawan`, `jabatan`, `email`, `password`, `rule`, `status`, `nik`, `nip`, `no_hp`, `id_karyawan`, `alamat`, `jenis_pendidikan`, `jenis_tenaga`, `jenis_detail_tenaga`, `tgl_update`, `foto`, `prov`, `kab`, `kec`, `kelu`, `rt_rw`, `kode_pos`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status_pernikahan`, `goldar`, `suku`, `sd`, `no_sd`, `file_sd`, `smp`, `no_smp`, `file_smp`, `sma`, `no_sma`, `file_sma`, `s1`, `no_s1`, `file_s1`, `s2`, `no_s2`, `file_s2`, `s3`, `no_s3`, `file_s3`, `profesi`, `no_profesi`, `file_profesi`, `golongan`, `pensiun`, `gaji`, `ruangan`, `no_sk`, `file_sk`, `file_penempatan`, `no_str`, `file_str`, `no_sip`, `file_sip`, `masa_sip`) VALUES
(1, 'hilal aminuddin rohman', 'PNS', 'Direktur', 'hilal@gmail.com', '$y201$a4a$jU/LgIQb21X6hXqmkzX17.fP1uX4OTGq.7o/2mTcUhysbmCtvZ', 1, 1, '2342565', '', '', '123456', '', 'Dokter Umum', 'Tenaga Medis / Dokter', 0, '2022-03-31', 'hilal_aminuddin_rohman.jpg', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'LOKET 1 ( RM )', '', '', '', '', '', '', '', '0000-00-00'),
(6, 'Nurhayati Fitriani', '', 'owner', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1, '', '', '', '', '', '', '', 0, '0000-00-00', 'Nurhayati_Fitriani_Karyawan.jpeg', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123457, 'mohammad', 'PNS', 'Wadir', 'hilal77@gmail.com', '$y201$4VF$zWC0R9C0x16268QaiJp/bogvFu93H.RMU74Xv94f7PDOtiZcvs', 2, 1, '764', '', '0986', '765', 'bumianyar', 'Pasca Sarjana Manajemen', 'Pejabat Struktural', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'BAGIAN UMUM', '', '', '', '', '', '', '', '0000-00-00'),
(123458, 'rina handayani', 'Kontrak', 'Staff', 'rina@gmail.com', '$y201$cv/$iLrz0MRLLhi5QoaYexOEJR9mGOCe31ibNOBurOJYCoKX8iFlpM', 3, 1, '5432144', '1909674571474', '08230104', '8764', 'jl.Halim Perdana Kusuma No 12', 'Sarjana Ekonomi', 'Pejabat Struktural', 0, '2022-03-31', '', 'Jawa Timur', 'Bangkalan', 'Bangkalan', '-', '-/-', '69112', 'Sumenep', '2022-04-20', 'Perempuan', 'Islam', 'Menikah', 'o', 'Indonesia', 'bangkalan 01', '', 'C:\\fakepath\\01a-big data routi', 'bangkalan 02', '2457443', '', 'bangkalan 03', '254345', '', 'STKIP', '343', '', '-', '3434', '', '-', '34', '', 'Keperawatan', '7798/j/475', '', 'Penata Muda/IIIb', '0000-00-00', '3.500.000', 'BAGIAN KEPEGAWAIAN', '4575/597/78', '', '', '7789/14/sep/hn', '', '789/uyr/o/2022', '', '0000-00-00'),
(123460, 'nanaj', 'Kontrak', 'Staff', '', '$y201$5.X$za29zx53QsaZBGUXijVMhTdyO.AlvfOY40nn8xaecpAICqL71h', 3, 1, '', '', '', '65754', '', 'D-III Manajemen Informatika', 'Tenaga Umum / Non Medis', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', 'Perempuan', 'Islam', 'Menikah', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 'LOKET 1 ( RM )', '', '', '', '', '', '', '', '0000-00-00'),
(123462, 'fsa', '', NULL, 'itriani77@gmail.com', '$y201$yy3$nnSwO1eKR5gCBqc/5Py6J4SUaepoBR18CYENB2JbNEFOqioEeO', 3, 1, '', '', '', '8565', '', '', '', 0, '2022-04-08', '_.jpeg', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123463, 'jia nur afifah', '', '', 'jia@gmail.com', '$y201$8n3$V0xsgXOqnWmtWDkkViCllKC.le2IDEaK2qFYTLbvHJv86OKlnL', 3, 1, '', '', '', '564', '', '', '', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123464, 'etry', '', NULL, 'fgj77@gmail.com', '$y201$FxR$DmVDk1v7SgLMIBTQOtSS72ExnOnP.tLZ91OYKTXKrtMAj2r6AO', 3, 1, '', '', '', '54', '', '', '', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123465, '879', '', NULL, 'jhg@gmail.com', '$y201$wSI$gBhkhr03/T.CVwR70K3a/lEd2Oky3a7RwG.sppmY6F0RUSU7Gj', 3, 1, '', '', '', '658', '', '', '', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123466, 'ytu', '', NULL, 'tyh@gmail.com', '$y201$k3z$KaUyBaFySOzCiYQgbJPWmsNKDuLXWp2R3Z7Fe4lVLGKS1u6067', 3, 1, '', '', '', '87', '', '', '', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00'),
(123467, 'hgf', '', NULL, 'ghgh@gmail.com', '$y201$Dkh$W1SSksWLYFp0k8CvbRha9EEM2usxq3NatMcV477tyk/TY6bUe1', 3, 1, '', '', '', '876', '', '', '', 0, '2022-04-08', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00');

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
(1, 'hilal aminuddin', 'PNS', 'KA.Unit', 'hilal@gmail.com', '$y201$a4a$jU/LgIQb21X6hXqmkzX17.fP1uX4OTGq.7o/2mTcUhysbmCtvZ', 1, 1, '2342', '', '', '123456', '', '', 'Pejabat Struktural', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', 'C:\\fakepath\\01a-big data routi', '', '', 'C:\\fakepath\\02b-Final_LGP_SIRS Big Data_Nov 2020.p', '', '', 'C:\\fakepath\\2_19_Buku_Saku_Ren', '', '', 'C:\\fakepath\\280-1424-1-PB.pdf', '', '', 'C:\\fakepath\\280-1424-1-PB.pdf', '', '', 'C:\\fakepath\\1472-Article Text-4341-1-10-20210818.pdf', '', '', 'C:\\fakepath\\Kurikulum - Departemen Teknik Elektro.', '', '', '', '0000-00-00', '', '', '', 'C:\\fakepath\\Kurikulum - Departemen Teknik Elektro.', 'C:\\fakepath\\outline rencana tugas akhir_nurhayati fitriani.pdf', '', 'C:\\fakepath\\Kurikulum - Depart', '', 'C:\\fakepath\\outline tesis.pdf', '0000-00-00', ''),
(6, 'Nurhayati Fitriani', 'CPNS', '', 'nurhayatifitriani77@gmail.com', '$y201$H8m$nI/V0H/vVJ60wQaK0Lfi86WhH.tcWDg5o73ZhNAwZr5oCSpmug', 1, 1, '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '0000-00-00', ''),
(123457, 'mohammad', 'PPPK', 'Wadir', 'hilal77@gmail.com', '$y201$4VF$zWC0R9C0x16268QaiJp/bogvFu93H.RMU74Xv94f7PDOtiZcvs', 2, 1, '764', '', '0986', '765', 'bumianyar', 'Pasca Sarjana Manajemen', 'Pejabat Struktural', 0, '2022-03-31', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'III b', 'Struktural', 'Penata', '0000-00-00', '', 'BAGIAN UMUM', '', '', '', '', '', '', '', '0000-00-00', 'C:\\fakepath\\license.txt'),
(123458, 'rina handayani', 'Kontrak', 'Staff', 'rina@gmail.com', '$y201$cv/$iLrz0MRLLhi5QoaYexOEJR9mGOCe31ibNOBurOJYCoKX8iFlpM', 3, 1, '5432144', '1909674571474', '08230104', '8764', 'jl.Halim Perdana Kusuma No 12', 'Sarjana Ekonomi', 'Pejabat Struktural', 0, '2022-03-31', '', 'Jawa Timur', 'Bangkalan', 'Bangkalan', '-', '-/-', '69112', 'Sumenep', '2022-04-20', 'Perempuan', 'Islam', 'Menikah', 'o', 'Indonesia', 'bangkalan 01', '', 'C:\\fakepath\\01a-big data routi', 'bangkalan 02', '2457443', '', 'bangkalan 03', '254345', '', 'STKIP', '343', '', '-', '3434', '', '-', '34', '', 'Keperawatan', '7798/j/475', '', 'Penata Muda/IIIb', '', '', '0000-00-00', '3.500.000', 'BAGIAN KEPEGAWAIAN', '4575/597/78', '', '', '7789/14/sep/hn', '', '789/uyr/o/2022', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan_fungsional_karyawan`
--

CREATE TABLE `kenaikan_fungsional_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_kenaikan` date NOT NULL,
  `file_fc_karpeg` varchar(100) NOT NULL,
  `file_fc_sk_pangkat_terakhir` varchar(100) NOT NULL,
  `file_fc_ijazah_terakhir` varchar(100) NOT NULL,
  `file_fc_skp_2_tahun` varchar(100) NOT NULL,
  `file_pak_asli` varchar(50) NOT NULL,
  `file_pak_sebelumnya` varchar(100) NOT NULL,
  `file_fc_sk_konversi_nip` varchar(100) NOT NULL,
  `file_asli_pak_terakhir` varchar(100) NOT NULL,
  `file_asli_skp_2_tahun` varchar(100) NOT NULL,
  `file_asli_sk_terakhir` varchar(100) NOT NULL,
  `file_jabatan_fungsional` varchar(100) NOT NULL,
  `file_asli_ijazah` varchar(100) NOT NULL,
  `file_asli_transkip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kenaikan_fungsional_karyawan`
--

INSERT INTO `kenaikan_fungsional_karyawan` (`id`, `nama`, `tgl_input`, `tgl_kenaikan`, `file_fc_karpeg`, `file_fc_sk_pangkat_terakhir`, `file_fc_ijazah_terakhir`, `file_fc_skp_2_tahun`, `file_pak_asli`, `file_pak_sebelumnya`, `file_fc_sk_konversi_nip`, `file_asli_pak_terakhir`, `file_asli_skp_2_tahun`, `file_asli_sk_terakhir`, `file_jabatan_fungsional`, `file_asli_ijazah`, `file_asli_transkip`) VALUES
(8, 1, '2022-04-04', '2022-04-13', 'C:\\fakepath\\hrd_user.sql', 'C:\\fakepath\\kenaikan_reguler_karyawan.sql', 'C:\\fakepath\\v_kenaikan_reguler.sql', 'C:\\fakepath\\v_pelatihan_karyawan.sql', 'C:\\fakepath\\NAMA RUANGAN.xlsx', 'C:\\fakepath\\hrd_user(1).sql', 'C:\\fakepath\\Permohonan sarana aplikasi WA API.pdf', '', '', '', '', '', ''),
(9, 123458, '2022-04-11', '2022-04-12', 'C:\\fakepath\\hrd_user(2).sql', 'C:\\fakepath\\Data Karyawan(2).xls', 'C:\\fakepath\\Data Karyawan(3).xls', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan_reguler_karyawan`
--

CREATE TABLE `kenaikan_reguler_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `jenis_kenaikan_reguler` varchar(50) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `tgl_kenaikan` date NOT NULL,
  `file_fc_karpeg` varchar(100) NOT NULL,
  `file_fc_sk_pangkat_terakhir` varchar(100) NOT NULL,
  `file_fc_stlud` varchar(100) NOT NULL,
  `file_fc_ijazah_terakhir` varchar(100) NOT NULL,
  `file_fc_skp_2_tahun` varchar(100) NOT NULL,
  `file_fc_cpns_pns` varchar(100) NOT NULL,
  `file_fc_sk_konversi_nip` varchar(100) NOT NULL,
  `file_asli_sk_terakhir` varchar(100) NOT NULL,
  `file_asli_skp_2_tahun` varchar(100) NOT NULL,
  `file_asli_ijazah` varchar(100) NOT NULL,
  `file_asli_transkip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kenaikan_reguler_karyawan`
--

INSERT INTO `kenaikan_reguler_karyawan` (`id`, `nama`, `jenis_kenaikan_reguler`, `tgl_input`, `tgl_kenaikan`, `file_fc_karpeg`, `file_fc_sk_pangkat_terakhir`, `file_fc_stlud`, `file_fc_ijazah_terakhir`, `file_fc_skp_2_tahun`, `file_fc_cpns_pns`, `file_fc_sk_konversi_nip`, `file_asli_sk_terakhir`, `file_asli_skp_2_tahun`, `file_asli_ijazah`, `file_asli_transkip`) VALUES
(3, 123458, '', '2022-04-03', '2022-04-28', '', '', '', '', '', '', '', '', '', '', ''),
(6, 1, 'Struktural', '2022-04-03', '2022-04-20', '', '', '', '', '', '', '', '', '', '', ''),
(8, 123457, 'Struktural', '2022-04-06', '2022-04-13', 'C:\\fakepath\\Blangko_Cuti.pdf', '', '', '', '', '', '', '', '', '', ''),
(9, 123458, 'Non Struktural', '2022-04-11', '2022-04-05', 'C:\\fakepath\\hrd_user(2).sql', 'C:\\fakepath\\Data Karyawan(2).xls', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan_karyawan`
--

CREATE TABLE `pelatihan_karyawan` (
  `id` int(11) NOT NULL,
  `tgl_update` date NOT NULL DEFAULT current_timestamp(),
  `nama` int(11) NOT NULL,
  `nama_pelatihan` varchar(100) NOT NULL,
  `tgl_mulai_pelatihan` date NOT NULL,
  `tgl_selesai_pelatihan` date NOT NULL,
  `durasi_pelatihan` varchar(30) NOT NULL,
  `no_sertifikat` varchar(100) NOT NULL,
  `file_sertifikat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan_karyawan`
--

INSERT INTO `pelatihan_karyawan` (`id`, `tgl_update`, `nama`, `nama_pelatihan`, `tgl_mulai_pelatihan`, `tgl_selesai_pelatihan`, `durasi_pelatihan`, `no_sertifikat`, `file_sertifikat`) VALUES
(4, '0000-00-00', 123458, 'pelatihan up', '2022-04-01', '2022-04-04', '30 jam', '102/87/a/2020', ''),
(7, '0000-00-00', 6, 'digitalent', '2022-04-14', '2022-04-07', 'hg', 'hi', ''),
(11, '2022-04-10', 6, 'jjk', '2022-04-07', '0000-00-00', 'k', 'j', '');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kerja_karyawan`
--

CREATE TABLE `riwayat_kerja_karyawan` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp(),
  `ruangan_baru` varchar(50) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `nama_pinpinan` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_kerja_karyawan`
--

INSERT INTO `riwayat_kerja_karyawan` (`id`, `nama`, `tgl_input`, `ruangan_baru`, `no_sk`, `tgl_sk`, `nama_pinpinan`, `tahun`) VALUES
(2, 6, '2022-04-04', 'INSTALASI TEKNOLOGI DAN INFORMASI', '546', '2022-04-12', 'jml', 2012),
(4, 1, '2022-04-06', 'SAKURA', '4634', '2022-04-13', 'ty', 2002),
(5, 123458, '2022-04-11', 'CEMPAKA', '54', '2022-04-26', 'tg', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `swab_syamrabu`
--

CREATE TABLE `swab_syamrabu` (
  `id` int(11) NOT NULL,
  `tgl_daftar_swab` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(35) NOT NULL,
  `tgl_sudah_dilayani` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_swab` varchar(30) NOT NULL,
  `tujuan_swab` varchar(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `umur` varchar(50) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `timbul_gejala` date NOT NULL,
  `riwayat_demam` varchar(30) NOT NULL,
  `derajat_demam` varchar(30) NOT NULL,
  `riwayat_batuk` varchar(30) NOT NULL,
  `riwayat_pilek` varchar(30) NOT NULL,
  `riwayat_sakit_tenggorokan` varchar(30) NOT NULL,
  `riwayat_sakit_kepala` varchar(30) NOT NULL,
  `lemah` varchar(30) NOT NULL,
  `nyeri_otot` varchar(30) NOT NULL,
  `mual` varchar(30) NOT NULL,
  `abdomen` varchar(30) NOT NULL,
  `diare` varchar(30) NOT NULL,
  `hamil` varchar(30) NOT NULL,
  `diabetes` varchar(30) NOT NULL,
  `jantung` varchar(30) NOT NULL,
  `hipertensi` varchar(30) NOT NULL,
  `keganasan` varchar(30) NOT NULL,
  `gangguan_imunologi` varchar(30) NOT NULL,
  `gagal_ginjal` varchar(30) NOT NULL,
  `gangguan_hati` varchar(30) NOT NULL,
  `ppok` varchar(30) NOT NULL,
  `kondisi_penyerta_lain` varchar(100) NOT NULL,
  `pneumonia` varchar(100) NOT NULL,
  `ards` varchar(100) NOT NULL,
  `diagnosis_lain` varchar(100) NOT NULL,
  `etiologi` varchar(100) NOT NULL,
  `diagnosis_pernafasan_lain` varchar(100) NOT NULL,
  `rawat_rs` varchar(100) NOT NULL,
  `rs_terakhir` varchar(100) NOT NULL,
  `tgl_masuk_rs` date NOT NULL,
  `rawat_icu` varchar(100) NOT NULL,
  `tindakan_intubasi` varchar(100) NOT NULL,
  `penggunaan_emco` varchar(100) NOT NULL,
  `rs_sebelumnya` varchar(100) NOT NULL,
  `status_pasien_terakhir` varchar(100) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `riwayat_luar_negeri` varchar(100) NOT NULL,
  `negara_1` varchar(100) NOT NULL,
  `kota_1` varchar(100) NOT NULL,
  `tgl_negara_1` date NOT NULL,
  `tgl_tiba_negara_1` date NOT NULL,
  `negara_2` varchar(100) NOT NULL,
  `kota_2` varchar(100) NOT NULL,
  `tgl_negara_2` date NOT NULL,
  `tgl_tiba_negara_2` date NOT NULL,
  `riwayat_transmisi_lokal` varchar(100) NOT NULL,
  `provinsi_transmisi_1` varchar(100) NOT NULL,
  `kota_transmisi_1` varchar(100) NOT NULL,
  `tgl_transmisi_1` date NOT NULL,
  `tgl_tiba_transmisi_1` date NOT NULL,
  `provinsi_transmisi_2` varchar(100) NOT NULL,
  `kota_transmisi_2` varchar(100) NOT NULL,
  `tgl_transmisi_2` date NOT NULL,
  `tgl_tiba_transmisi_2` date NOT NULL,
  `riwayat_ketransmisi_lokal` varchar(100) NOT NULL,
  `provinsi_ketransmisi` varchar(100) NOT NULL,
  `kota_ketransmisi` varchar(100) NOT NULL,
  `riwayat_kontak_suspek` varchar(100) NOT NULL,
  `nama_suspek_1` varchar(100) NOT NULL,
  `alamat_suspek_1` varchar(100) NOT NULL,
  `hubungan_suspek_1` varchar(100) NOT NULL,
  `tgl_kontak_suspek_1` date NOT NULL,
  `tgl_terakhir_kontak_suspek_1` date NOT NULL,
  `riwayat_kontak_konfirm` varchar(100) NOT NULL,
  `nama_konfirm_1` varchar(100) NOT NULL,
  `alamat_konfirm_1` varchar(100) NOT NULL,
  `hubungan_konfirm_1` varchar(100) NOT NULL,
  `tgl_kontak_konfirm_1` date NOT NULL,
  `tgl_terakhir_kontak_konfirm_1` date NOT NULL,
  `ispa` varchar(100) NOT NULL,
  `hewan_peliharaan` varchar(30) NOT NULL,
  `jenis_hewan_peliharaan` varchar(100) NOT NULL,
  `petugas_kesehatan` varchar(30) NOT NULL,
  `apd` varchar(30) NOT NULL,
  `aerosol` varchar(100) NOT NULL,
  `sebutkan_aerosol` varchar(100) NOT NULL,
  `nama_kasus_1` varchar(100) NOT NULL,
  `umur_kasus_1` varchar(100) NOT NULL,
  `jk_kasus_1` varchar(100) NOT NULL,
  `hubungan_kasus_1` varchar(100) NOT NULL,
  `alamat_kasus_1` varchar(100) NOT NULL,
  `hp_kasus_1` varchar(100) NOT NULL,
  `aktifitas_kasus_1` varchar(100) NOT NULL,
  `nama_kasus_2` varchar(100) NOT NULL,
  `umur_kasus_2` varchar(100) NOT NULL,
  `jk_kasus_2` varchar(30) NOT NULL,
  `hubungan_kasus_2` varchar(30) NOT NULL,
  `alamat_kasus_2` varchar(30) NOT NULL,
  `hp_kasus_2` varchar(30) NOT NULL,
  `aktifitas_kasus_2` varchar(100) NOT NULL,
  `nama_kasus_3` varchar(100) NOT NULL,
  `umur_kasus_3` varchar(100) NOT NULL,
  `jk_kasus_3` varchar(30) NOT NULL,
  `hubungan_kasus_3` varchar(100) NOT NULL,
  `alamat_kasus_3` varchar(100) NOT NULL,
  `hp_kasus_3` varchar(30) NOT NULL,
  `aktifitas_kasus_3` varchar(100) NOT NULL,
  `nama_kasus_4` varchar(100) NOT NULL,
  `umur_kasus_4` varchar(30) NOT NULL,
  `jk_kasus_4` varchar(30) NOT NULL,
  `hubungan_kasus_4` varchar(100) NOT NULL,
  `alamat_kasus_4` varchar(100) NOT NULL,
  `hp_kasus_4` varchar(30) NOT NULL,
  `aktifitas_kasus_4` varchar(100) NOT NULL,
  `vaksin1` varchar(30) NOT NULL,
  `vaksin2` varchar(30) NOT NULL,
  `booster` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `swab_syamrabu`
--

INSERT INTO `swab_syamrabu` (`id`, `tgl_daftar_swab`, `status`, `tgl_sudah_dilayani`, `nama`, `jenis_swab`, `tujuan_swab`, `nik`, `nama_ortu`, `ttl`, `umur`, `jk`, `pekerjaan`, `jalan`, `rt`, `desa`, `kec`, `kab`, `no_hp`, `timbul_gejala`, `riwayat_demam`, `derajat_demam`, `riwayat_batuk`, `riwayat_pilek`, `riwayat_sakit_tenggorokan`, `riwayat_sakit_kepala`, `lemah`, `nyeri_otot`, `mual`, `abdomen`, `diare`, `hamil`, `diabetes`, `jantung`, `hipertensi`, `keganasan`, `gangguan_imunologi`, `gagal_ginjal`, `gangguan_hati`, `ppok`, `kondisi_penyerta_lain`, `pneumonia`, `ards`, `diagnosis_lain`, `etiologi`, `diagnosis_pernafasan_lain`, `rawat_rs`, `rs_terakhir`, `tgl_masuk_rs`, `rawat_icu`, `tindakan_intubasi`, `penggunaan_emco`, `rs_sebelumnya`, `status_pasien_terakhir`, `tgl_meninggal`, `riwayat_luar_negeri`, `negara_1`, `kota_1`, `tgl_negara_1`, `tgl_tiba_negara_1`, `negara_2`, `kota_2`, `tgl_negara_2`, `tgl_tiba_negara_2`, `riwayat_transmisi_lokal`, `provinsi_transmisi_1`, `kota_transmisi_1`, `tgl_transmisi_1`, `tgl_tiba_transmisi_1`, `provinsi_transmisi_2`, `kota_transmisi_2`, `tgl_transmisi_2`, `tgl_tiba_transmisi_2`, `riwayat_ketransmisi_lokal`, `provinsi_ketransmisi`, `kota_ketransmisi`, `riwayat_kontak_suspek`, `nama_suspek_1`, `alamat_suspek_1`, `hubungan_suspek_1`, `tgl_kontak_suspek_1`, `tgl_terakhir_kontak_suspek_1`, `riwayat_kontak_konfirm`, `nama_konfirm_1`, `alamat_konfirm_1`, `hubungan_konfirm_1`, `tgl_kontak_konfirm_1`, `tgl_terakhir_kontak_konfirm_1`, `ispa`, `hewan_peliharaan`, `jenis_hewan_peliharaan`, `petugas_kesehatan`, `apd`, `aerosol`, `sebutkan_aerosol`, `nama_kasus_1`, `umur_kasus_1`, `jk_kasus_1`, `hubungan_kasus_1`, `alamat_kasus_1`, `hp_kasus_1`, `aktifitas_kasus_1`, `nama_kasus_2`, `umur_kasus_2`, `jk_kasus_2`, `hubungan_kasus_2`, `alamat_kasus_2`, `hp_kasus_2`, `aktifitas_kasus_2`, `nama_kasus_3`, `umur_kasus_3`, `jk_kasus_3`, `hubungan_kasus_3`, `alamat_kasus_3`, `hp_kasus_3`, `aktifitas_kasus_3`, `nama_kasus_4`, `umur_kasus_4`, `jk_kasus_4`, `hubungan_kasus_4`, `alamat_kasus_4`, `hp_kasus_4`, `aktifitas_kasus_4`, `vaksin1`, `vaksin2`, `booster`) VALUES
(9, '2022-03-11', '0', '0000-00-00', 'fh', 'PCR', '', 'dfh', 'dfh', '2022-03-23', '', 'Perempuan', '', '', '', '', '', '', '', '0000-00-00', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '', '1', '', '1', '', '0000-00-00', '1', '1', '1', '', '1', '0000-00-00', '1', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '1', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '1', '', '', '1', '', '', '', '0000-00-00', '0000-00-00', '1', '', '', '', '0000-00-00', '0000-00-00', '1', '1', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '2022-03-11', '0', '0000-00-00', 'yati', 'PCR', '', '657', 'hapsari', '2022-03-25', '25', 'Perempuan', 'it', '-', '-', 'Burneh', 'Buneh', 'Bangkalan', '082301042012', '2022-03-01', 'Ya', '39', 'Ya', 'Tidak', 'Tidak', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '-', 'Tidak', 'Tidak Tahu', '-', 'Tidak Tahu', '-', 'Tidak', '-', '0000-00-00', 'Tidak', 'Tidak', 'Tidak', '-', 'Selesai Isolasi / Sembuh', '0000-00-00', 'Tidak', '-', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '0000-00-00', 'Tidak', '-', '-', '0000-00-00', '0000-00-00', '-', '-', '0000-00-00', '0000-00-00', 'Tidak', '-', '-', 'Tidak', '-', '-', '-', '0000-00-00', '0000-00-00', 'Tidak', '-', '-', '-', '0000-00-00', '0000-00-00', 'Tidak', 'Tidak', '-', 'Ya', 'Tidak Memakai APD', 'Tidak', '-', '-', '-', '-', '-', '-', '-', '-', '--', '', '--', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(11, '2022-03-14', 'Belum dilayani', '0000-00-00', 'tut', 'PCR', 'Perjalanan', '34', '', '0000-00-00', '', 'Perempuan', '', 'r', 'r', 'r', 'r', 'r', '352', '0000-00-00', 'Ya', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', 'Ya', 'Ya', '', 'Ya', '', 'Ya', '', '0000-00-00', 'Ya', 'Ya', 'Ya', '', 'Selesai Isolasi / Sembuh', '0000-00-00', 'Ya', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', 'Ya', '', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', '', '0000-00-00', '0000-00-00', 'Ya', 'Ya', '', 'Ya', 'Gown', 'Ya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '2022-03-14', 'Sudah dilayani', '2022-03-16', 're', 'Antigen', 'Perjalanan', 're', '', '0000-00-00', '', 'Perempuan', '', 'fd', 'sdf', 'sdfg', 'sfg', 'er', '45', '0000-00-00', 'Ya', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', 'Ya', 'Ya', '', 'Ya', '', 'Ya', '', '0000-00-00', 'Ya', 'Ya', 'Ya', '', 'Selesai Isolasi / Sembuh', '0000-00-00', 'Ya', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', 'Ya', '', '', '', '0000-00-00', '0000-00-00', 'Ya', '', '', '', '0000-00-00', '0000-00-00', 'Ya', 'Ya', '', 'Ya', 'Gown', 'Ya', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Ya', 'Tidak', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `syarefa`
--

CREATE TABLE `syarefa` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_antrian` int(11) DEFAULT NULL,
  `jenis_pasien` int(11) NOT NULL,
  `poli` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_input` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syarefa`
--

INSERT INTO `syarefa` (`id`, `no_rm`, `nama`, `no_antrian`, `jenis_pasien`, `poli`, `status`, `tgl_input`) VALUES
(16, '343', 'yatij', 12466, 1, 'an', 4, '2022-01-14'),
(17, '343', 'yatihj', 12466, 2, 'hn', 1, '2022-01-14'),
(18, '343', 'iya', 124890, 1, 'an', 1, '2022-01-14'),
(19, '343', 'iu', 8774, 2, 'ki', 3, '2022-01-14'),
(20, '76', 'yati', 101, 2, 'gigi', 5, '2022-01-16'),
(21, '456', 'romi', 102, 2, 'anak', 5, '2022-01-16'),
(22, '544', 'dedek', 103, 2, 'anak', 4, '2022-01-16'),
(23, '976', 'opo', 104, 1, 'jantung', 2, '2022-01-16'),
(24, '654', 'tutu', 105, 1, 'ortho', 3, '2022-01-16'),
(25, '786', 'teri', 106, 1, 'jia', 1, '2022-01-16');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ambilantrian_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_ambilantrian_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_ambilantrian_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_ambilantrian_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_berhenti_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `v_berhenti_karyawan` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`tgl_berhenti` date
,`alasan_berhenti` varchar(100)
,`ruangan_terakhir` varchar(100)
,`status_karyawan` varchar(100)
,`jabatan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_berkala_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `v_berkala_karyawan` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`tgl_berkala` date
,`sk_pangkat_terakhir` varchar(100)
,`sk_berkala` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_cuti_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `v_cuti_karyawan` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`nip` varchar(100)
,`jabatan` varchar(100)
,`masa_kerja` varchar(30)
,`unit_kerja` varchar(50)
,`jenis_cuti` varchar(100)
,`alasan_cuti` varchar(100)
,`cuti_selama` varchar(35)
,`mulai_tgl` date
,`sampai_tgl` date
,`tahunan_n2_sisa` varchar(30)
,`tahunan_n2_keterangan` varchar(100)
,`tahunan_n1_sisa` varchar(30)
,`tahunan_n1_keterangan` varchar(100)
,`tahunan_n_sisa` varchar(30)
,`tahunan_n_keterangan` varchar(100)
,`cuti_besar_ket` varchar(100)
,`cuti_sakit_ket` varchar(100)
,`cuti_melahirkan_ket` varchar(100)
,`cuti_penting_ket` varchar(100)
,`cuti_diluar_tanggungan_ket` varchar(100)
,`alamat_selama_cuti` varchar(100)
,`telp` varchar(50)
,`pertimbangan_atasan` varchar(100)
,`keputusan_pejabat` varchar(100)
,`file_cuti` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_gcu_syamrabu`
-- (See below for the actual view)
--
CREATE TABLE `v_gcu_syamrabu` (
`id` int(11)
,`tgl_daftar_gcu` varchar(72)
,`nama` varchar(50)
,`jk_pasien_gcu` varchar(15)
,`pernikahan_pasien_gcu` varchar(15)
,`pendidikan_pasien_gcu` varchar(30)
,`tempat_lahir` varchar(50)
,`ttl_pasien_gcu` varchar(10)
,`alamat_pasien_gcu` varchar(100)
,`kecamatan_pasien_gcu` varchar(20)
,`kabupaten_pasien_gcu` varchar(20)
,`bb_pasien_gcu` int(5)
,`tb_pasien_gcu` int(5)
,`pendengaran_pasien_gcu` varchar(5)
,`warna_pasien_gcu` varchar(5)
,`keperluan_pasien_gcu` varchar(30)
,`nama_dokter_gcu` varchar(30)
,`nip_dokter_gcu` varchar(30)
,`atas_permintaan_ps` varchar(100)
,`nama_atas_permintaan_ps` varchar(100)
,`jabatan_atas_permintaan_ps` varchar(100)
,`no_surat_atas_permintaan_ps` varchar(100)
,`perihal_atas_permintaan_ps` varchar(100)
,`keterangan_pasien_gcu` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kenaikan_fungsional`
-- (See below for the actual view)
--
CREATE TABLE `v_kenaikan_fungsional` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`tgl_kenaikan` date
,`file_fc_karpeg` varchar(100)
,`file_fc_sk_pangkat_terakhir` varchar(100)
,`file_pak_asli` varchar(50)
,`file_pak_sebelumnya` varchar(100)
,`file_fc_ijazah_terakhir` varchar(100)
,`file_fc_skp_2_tahun` varchar(100)
,`file_fc_sk_konversi_nip` varchar(100)
,`file_asli_pak_terakhir` varchar(100)
,`file_jabatan_fungsional` varchar(100)
,`file_asli_sk_terakhir` varchar(100)
,`file_asli_skp_2_tahun` varchar(100)
,`file_asli_ijazah` varchar(100)
,`file_asli_transkip` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kenaikan_reguler`
-- (See below for the actual view)
--
CREATE TABLE `v_kenaikan_reguler` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`jenis_kenaikan_reguler` varchar(50)
,`tgl_kenaikan` date
,`file_fc_karpeg` varchar(100)
,`file_fc_sk_pangkat_terakhir` varchar(100)
,`file_fc_stlud` varchar(100)
,`file_fc_ijazah_terakhir` varchar(100)
,`file_fc_skp_2_tahun` varchar(100)
,`file_fc_cpns_pns` varchar(100)
,`file_fc_sk_konversi_nip` varchar(100)
,`file_asli_sk_terakhir` varchar(100)
,`file_asli_skp_2_tahun` varchar(100)
,`file_asli_ijazah` varchar(100)
,`file_asli_transkip` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_obatbelumdiambil_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_obatbelumdiambil_bpjs` (
`no_antrian` int(11)
,`nama` varchar(50)
,`poli` varchar(30)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_obatbelumdiambil_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_obatbelumdiambil_umum` (
`no_antrian` int(11)
,`nama` varchar(50)
,`poli` varchar(30)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pelatihan_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `v_pelatihan_karyawan` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_update` date
,`nama_pelatihan` varchar(100)
,`tgl_mulai_pelatihan` date
,`tgl_selesai_pelatihan` date
,`durasi_pelatihan` varchar(30)
,`no_sertifikat` varchar(100)
,`file_sertifikat` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_riwayat_kerja_karyawan`
-- (See below for the actual view)
--
CREATE TABLE `v_riwayat_kerja_karyawan` (
`rule` int(1)
,`id` int(11)
,`nama` varchar(200)
,`tgl_input` date
,`ruangan_baru` varchar(50)
,`no_sk` varchar(50)
,`tgl_sk` date
,`nama_pinpinan` varchar(50)
,`tahun` year(4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sedangdikerjan_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_sedangdikerjan_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sedangdikerjan_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_sedangdikerjan_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sisaresep_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_sisaresep_bpjs` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_sisaresep_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_sisaresep_umum` (
`no_antrian` int(11)
,`status` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_today`
-- (See below for the actual view)
--
CREATE TABLE `v_today` (
`no_antrian` int(11)
,`no_rm` varchar(12)
,`nama` varchar(50)
,`poli` varchar(30)
,`jenis_pasien` int(11)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_bpjs`
-- (See below for the actual view)
--
CREATE TABLE `v_total_bpjs` (
`no_antrian` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_cpns`
-- (See below for the actual view)
--
CREATE TABLE `v_total_cpns` (
`id` int(11)
,`nama` varchar(200)
,`nip` varchar(100)
,`status_karyawan` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_pns`
-- (See below for the actual view)
--
CREATE TABLE `v_total_pns` (
`id` int(11)
,`nama` varchar(200)
,`nip` varchar(100)
,`status_karyawan` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_pppk`
-- (See below for the actual view)
--
CREATE TABLE `v_total_pppk` (
`id` int(11)
,`nama` varchar(200)
,`nip` varchar(100)
,`status_karyawan` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_total_umum`
-- (See below for the actual view)
--
CREATE TABLE `v_total_umum` (
`no_antrian` int(11)
,`jenis_pasien` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `v_ambilantrian_bpjs`
--
DROP TABLE IF EXISTS `v_ambilantrian_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambilantrian_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '3' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_ambilantrian_umum`
--
DROP TABLE IF EXISTS `v_ambilantrian_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_ambilantrian_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '3' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_berhenti_karyawan`
--
DROP TABLE IF EXISTS `v_berhenti_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berhenti_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `berhenti_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `berhenti_karyawan`.`tgl_input` AS `tgl_input`, `berhenti_karyawan`.`tgl_berhenti` AS `tgl_berhenti`, `berhenti_karyawan`.`alasan_berhenti` AS `alasan_berhenti`, `berhenti_karyawan`.`ruangan_terakhir` AS `ruangan_terakhir`, `berhenti_karyawan`.`status_karyawan` AS `status_karyawan`, `berhenti_karyawan`.`jabatan` AS `jabatan` FROM (`karyawan` join `berhenti_karyawan`) WHERE `karyawan`.`id` = `berhenti_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_berkala_karyawan`
--
DROP TABLE IF EXISTS `v_berkala_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_berkala_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `berkala_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `berkala_karyawan`.`tgl_input` AS `tgl_input`, `berkala_karyawan`.`tgl_berkala` AS `tgl_berkala`, `berkala_karyawan`.`sk_pangkat_terakhir` AS `sk_pangkat_terakhir`, `berkala_karyawan`.`sk_berkala` AS `sk_berkala` FROM (`karyawan` join `berkala_karyawan`) WHERE `karyawan`.`id` = `berkala_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_cuti_karyawan`
--
DROP TABLE IF EXISTS `v_cuti_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_cuti_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `cuti_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `cuti_karyawan`.`tgl_input` AS `tgl_input`, `cuti_karyawan`.`nip` AS `nip`, `cuti_karyawan`.`jabatan` AS `jabatan`, `cuti_karyawan`.`masa_kerja` AS `masa_kerja`, `cuti_karyawan`.`unit_kerja` AS `unit_kerja`, `cuti_karyawan`.`jenis_cuti` AS `jenis_cuti`, `cuti_karyawan`.`alasan_cuti` AS `alasan_cuti`, `cuti_karyawan`.`cuti_selama` AS `cuti_selama`, `cuti_karyawan`.`mulai_tgl` AS `mulai_tgl`, `cuti_karyawan`.`sampai_tgl` AS `sampai_tgl`, `cuti_karyawan`.`tahunan_n2_sisa` AS `tahunan_n2_sisa`, `cuti_karyawan`.`tahunan_n2_keterangan` AS `tahunan_n2_keterangan`, `cuti_karyawan`.`tahunan_n1_sisa` AS `tahunan_n1_sisa`, `cuti_karyawan`.`tahunan_n1_keterangan` AS `tahunan_n1_keterangan`, `cuti_karyawan`.`tahunan_n_sisa` AS `tahunan_n_sisa`, `cuti_karyawan`.`tahunan_n_keterangan` AS `tahunan_n_keterangan`, `cuti_karyawan`.`cuti_besar_ket` AS `cuti_besar_ket`, `cuti_karyawan`.`cuti_sakit_ket` AS `cuti_sakit_ket`, `cuti_karyawan`.`cuti_melahirkan_ket` AS `cuti_melahirkan_ket`, `cuti_karyawan`.`cuti_penting_ket` AS `cuti_penting_ket`, `cuti_karyawan`.`cuti_diluar_tanggungan_ket` AS `cuti_diluar_tanggungan_ket`, `cuti_karyawan`.`alamat_selama_cuti` AS `alamat_selama_cuti`, `cuti_karyawan`.`telp` AS `telp`, `cuti_karyawan`.`pertimbangan_atasan` AS `pertimbangan_atasan`, `cuti_karyawan`.`keputusan_pejabat` AS `keputusan_pejabat`, `cuti_karyawan`.`file_cuti` AS `file_cuti` FROM (`karyawan` join `cuti_karyawan`) WHERE `karyawan`.`id` = `cuti_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_gcu_syamrabu`
--
DROP TABLE IF EXISTS `v_gcu_syamrabu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_gcu_syamrabu`  AS SELECT `gcu_syamrabu`.`id` AS `id`, date_format(`gcu_syamrabu`.`tgl_daftar_gcu`,'%d-%M-%Y') AS `tgl_daftar_gcu`, `gcu_syamrabu`.`nama` AS `nama`, `gcu_syamrabu`.`jk_pasien_gcu` AS `jk_pasien_gcu`, `gcu_syamrabu`.`pernikahan_pasien_gcu` AS `pernikahan_pasien_gcu`, `gcu_syamrabu`.`pendidikan_pasien_gcu` AS `pendidikan_pasien_gcu`, `gcu_syamrabu`.`tempat_lahir` AS `tempat_lahir`, date_format(`gcu_syamrabu`.`ttl_pasien_gcu`,'%d-%m-%Y') AS `ttl_pasien_gcu`, `gcu_syamrabu`.`alamat_pasien_gcu` AS `alamat_pasien_gcu`, `gcu_syamrabu`.`kecamatan_pasien_gcu` AS `kecamatan_pasien_gcu`, `gcu_syamrabu`.`kabupaten_pasien_gcu` AS `kabupaten_pasien_gcu`, `gcu_syamrabu`.`bb_pasien_gcu` AS `bb_pasien_gcu`, `gcu_syamrabu`.`tb_pasien_gcu` AS `tb_pasien_gcu`, `gcu_syamrabu`.`pendengaran_pasien_gcu` AS `pendengaran_pasien_gcu`, `gcu_syamrabu`.`warna_pasien_gcu` AS `warna_pasien_gcu`, `gcu_syamrabu`.`keperluan_pasien_gcu` AS `keperluan_pasien_gcu`, `gcu_syamrabu`.`nama_dokter_gcu` AS `nama_dokter_gcu`, `gcu_syamrabu`.`nip_dokter_gcu` AS `nip_dokter_gcu`, `gcu_syamrabu`.`atas_permintaan_ps` AS `atas_permintaan_ps`, `gcu_syamrabu`.`nama_atas_permintaan_ps` AS `nama_atas_permintaan_ps`, `gcu_syamrabu`.`jabatan_atas_permintaan_ps` AS `jabatan_atas_permintaan_ps`, `gcu_syamrabu`.`no_surat_atas_permintaan_ps` AS `no_surat_atas_permintaan_ps`, `gcu_syamrabu`.`perihal_atas_permintaan_ps` AS `perihal_atas_permintaan_ps`, `gcu_syamrabu`.`keterangan_pasien_gcu` AS `keterangan_pasien_gcu` FROM `gcu_syamrabu` ;

-- --------------------------------------------------------

--
-- Structure for view `v_kenaikan_fungsional`
--
DROP TABLE IF EXISTS `v_kenaikan_fungsional`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kenaikan_fungsional`  AS SELECT `karyawan`.`rule` AS `rule`, `kenaikan_fungsional_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `kenaikan_fungsional_karyawan`.`tgl_input` AS `tgl_input`, `kenaikan_fungsional_karyawan`.`tgl_kenaikan` AS `tgl_kenaikan`, `kenaikan_fungsional_karyawan`.`file_fc_karpeg` AS `file_fc_karpeg`, `kenaikan_fungsional_karyawan`.`file_fc_sk_pangkat_terakhir` AS `file_fc_sk_pangkat_terakhir`, `kenaikan_fungsional_karyawan`.`file_pak_asli` AS `file_pak_asli`, `kenaikan_fungsional_karyawan`.`file_pak_sebelumnya` AS `file_pak_sebelumnya`, `kenaikan_fungsional_karyawan`.`file_fc_ijazah_terakhir` AS `file_fc_ijazah_terakhir`, `kenaikan_fungsional_karyawan`.`file_fc_skp_2_tahun` AS `file_fc_skp_2_tahun`, `kenaikan_fungsional_karyawan`.`file_fc_sk_konversi_nip` AS `file_fc_sk_konversi_nip`, `kenaikan_fungsional_karyawan`.`file_asli_pak_terakhir` AS `file_asli_pak_terakhir`, `kenaikan_fungsional_karyawan`.`file_jabatan_fungsional` AS `file_jabatan_fungsional`, `kenaikan_fungsional_karyawan`.`file_asli_sk_terakhir` AS `file_asli_sk_terakhir`, `kenaikan_fungsional_karyawan`.`file_asli_skp_2_tahun` AS `file_asli_skp_2_tahun`, `kenaikan_fungsional_karyawan`.`file_asli_ijazah` AS `file_asli_ijazah`, `kenaikan_fungsional_karyawan`.`file_asli_transkip` AS `file_asli_transkip` FROM (`karyawan` join `kenaikan_fungsional_karyawan`) WHERE `karyawan`.`id` = `kenaikan_fungsional_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_kenaikan_reguler`
--
DROP TABLE IF EXISTS `v_kenaikan_reguler`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kenaikan_reguler`  AS SELECT `karyawan`.`rule` AS `rule`, `kenaikan_reguler_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `kenaikan_reguler_karyawan`.`tgl_input` AS `tgl_input`, `kenaikan_reguler_karyawan`.`jenis_kenaikan_reguler` AS `jenis_kenaikan_reguler`, `kenaikan_reguler_karyawan`.`tgl_kenaikan` AS `tgl_kenaikan`, `kenaikan_reguler_karyawan`.`file_fc_karpeg` AS `file_fc_karpeg`, `kenaikan_reguler_karyawan`.`file_fc_sk_pangkat_terakhir` AS `file_fc_sk_pangkat_terakhir`, `kenaikan_reguler_karyawan`.`file_fc_stlud` AS `file_fc_stlud`, `kenaikan_reguler_karyawan`.`file_fc_ijazah_terakhir` AS `file_fc_ijazah_terakhir`, `kenaikan_reguler_karyawan`.`file_fc_skp_2_tahun` AS `file_fc_skp_2_tahun`, `kenaikan_reguler_karyawan`.`file_fc_cpns_pns` AS `file_fc_cpns_pns`, `kenaikan_reguler_karyawan`.`file_fc_sk_konversi_nip` AS `file_fc_sk_konversi_nip`, `kenaikan_reguler_karyawan`.`file_asli_sk_terakhir` AS `file_asli_sk_terakhir`, `kenaikan_reguler_karyawan`.`file_asli_skp_2_tahun` AS `file_asli_skp_2_tahun`, `kenaikan_reguler_karyawan`.`file_asli_ijazah` AS `file_asli_ijazah`, `kenaikan_reguler_karyawan`.`file_asli_transkip` AS `file_asli_transkip` FROM (`karyawan` join `kenaikan_reguler_karyawan`) WHERE `karyawan`.`id` = `kenaikan_reguler_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_obatbelumdiambil_bpjs`
--
DROP TABLE IF EXISTS `v_obatbelumdiambil_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_obatbelumdiambil_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`nama` AS `nama`, `v_today`.`poli` AS `poli`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '5' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_obatbelumdiambil_umum`
--
DROP TABLE IF EXISTS `v_obatbelumdiambil_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_obatbelumdiambil_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`nama` AS `nama`, `v_today`.`poli` AS `poli`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '5' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_pelatihan_karyawan`
--
DROP TABLE IF EXISTS `v_pelatihan_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pelatihan_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `pelatihan_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `pelatihan_karyawan`.`tgl_update` AS `tgl_update`, `pelatihan_karyawan`.`nama_pelatihan` AS `nama_pelatihan`, `pelatihan_karyawan`.`tgl_mulai_pelatihan` AS `tgl_mulai_pelatihan`, `pelatihan_karyawan`.`tgl_selesai_pelatihan` AS `tgl_selesai_pelatihan`, `pelatihan_karyawan`.`durasi_pelatihan` AS `durasi_pelatihan`, `pelatihan_karyawan`.`no_sertifikat` AS `no_sertifikat`, `pelatihan_karyawan`.`file_sertifikat` AS `file_sertifikat` FROM (`karyawan` join `pelatihan_karyawan`) WHERE `karyawan`.`id` = `pelatihan_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_riwayat_kerja_karyawan`
--
DROP TABLE IF EXISTS `v_riwayat_kerja_karyawan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_riwayat_kerja_karyawan`  AS SELECT `karyawan`.`rule` AS `rule`, `riwayat_kerja_karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `riwayat_kerja_karyawan`.`tgl_input` AS `tgl_input`, `riwayat_kerja_karyawan`.`ruangan_baru` AS `ruangan_baru`, `riwayat_kerja_karyawan`.`no_sk` AS `no_sk`, `riwayat_kerja_karyawan`.`tgl_sk` AS `tgl_sk`, `riwayat_kerja_karyawan`.`nama_pinpinan` AS `nama_pinpinan`, `riwayat_kerja_karyawan`.`tahun` AS `tahun` FROM (`karyawan` join `riwayat_kerja_karyawan`) WHERE `karyawan`.`id` = `riwayat_kerja_karyawan`.`nama` ORDER BY `karyawan`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `v_sedangdikerjan_bpjs`
--
DROP TABLE IF EXISTS `v_sedangdikerjan_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sedangdikerjan_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '2' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sedangdikerjan_umum`
--
DROP TABLE IF EXISTS `v_sedangdikerjan_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sedangdikerjan_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '2' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sisaresep_bpjs`
--
DROP TABLE IF EXISTS `v_sisaresep_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sisaresep_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '1' AND `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_sisaresep_umum`
--
DROP TABLE IF EXISTS `v_sisaresep_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_sisaresep_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`status` AS `status`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`status` = '1' AND `v_today`.`jenis_pasien` = '2' ;

-- --------------------------------------------------------

--
-- Structure for view `v_today`
--
DROP TABLE IF EXISTS `v_today`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_today`  AS SELECT `syarefa`.`no_antrian` AS `no_antrian`, `syarefa`.`no_rm` AS `no_rm`, `syarefa`.`nama` AS `nama`, `syarefa`.`poli` AS `poli`, `syarefa`.`jenis_pasien` AS `jenis_pasien`, `syarefa`.`status` AS `status` FROM `syarefa` WHERE `syarefa`.`tgl_input` = curdate() ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_bpjs`
--
DROP TABLE IF EXISTS `v_total_bpjs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_bpjs`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`jenis_pasien` = '1' ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_cpns`
--
DROP TABLE IF EXISTS `v_total_cpns`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_cpns`  AS SELECT `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `karyawan`.`nip` AS `nip`, `karyawan`.`status_karyawan` AS `status_karyawan` FROM `karyawan` WHERE `karyawan`.`status_karyawan` = 'CPNS' ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_pns`
--
DROP TABLE IF EXISTS `v_total_pns`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pns`  AS SELECT `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `karyawan`.`nip` AS `nip`, `karyawan`.`status_karyawan` AS `status_karyawan` FROM `karyawan` WHERE `karyawan`.`status_karyawan` = 'PNS' ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_pppk`
--
DROP TABLE IF EXISTS `v_total_pppk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_pppk`  AS SELECT `karyawan`.`id` AS `id`, `karyawan`.`nama` AS `nama`, `karyawan`.`nip` AS `nip`, `karyawan`.`status_karyawan` AS `status_karyawan` FROM `karyawan` WHERE `karyawan`.`status_karyawan` = 'PPPK' ;

-- --------------------------------------------------------

--
-- Structure for view `v_total_umum`
--
DROP TABLE IF EXISTS `v_total_umum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_total_umum`  AS SELECT `v_today`.`no_antrian` AS `no_antrian`, `v_today`.`jenis_pasien` AS `jenis_pasien` FROM `v_today` WHERE `v_today`.`jenis_pasien` = '2' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `gcu_syamrabu`
--
ALTER TABLE `gcu_syamrabu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`nama`);

--
-- Indexes for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `swab_syamrabu`
--
ALTER TABLE `swab_syamrabu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syarefa`
--
ALTER TABLE `syarefa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gcu_syamrabu`
--
ALTER TABLE `gcu_syamrabu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hrd_user`
--
ALTER TABLE `hrd_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123468;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123460;

--
-- AUTO_INCREMENT for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `swab_syamrabu`
--
ALTER TABLE `swab_syamrabu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `syarefa`
--
ALTER TABLE `syarefa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berhenti_karyawan`
--
ALTER TABLE `berhenti_karyawan`
  ADD CONSTRAINT `berhenti_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `berkala_karyawan`
--
ALTER TABLE `berkala_karyawan`
  ADD CONSTRAINT `berkala_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD CONSTRAINT `cuti_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kenaikan_fungsional_karyawan`
--
ALTER TABLE `kenaikan_fungsional_karyawan`
  ADD CONSTRAINT `kenaikan_fungsional_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kenaikan_reguler_karyawan`
--
ALTER TABLE `kenaikan_reguler_karyawan`
  ADD CONSTRAINT `kenaikan_reguler_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pelatihan_karyawan`
--
ALTER TABLE `pelatihan_karyawan`
  ADD CONSTRAINT `pelatihan_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `riwayat_kerja_karyawan`
--
ALTER TABLE `riwayat_kerja_karyawan`
  ADD CONSTRAINT `riwayat_kerja_karyawan_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
