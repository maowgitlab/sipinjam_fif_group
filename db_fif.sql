-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 01:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_pegawai`, `level`, `status`) VALUES
(1, 1, 'Admin', 'Aktif'),
(2, 2, 'Pimpinan', 'Aktif'),
(3, 5, 'Petugas', 'Aktif'),
(4, 6, 'Petugas', 'Aktif'),
(5, 7, 'Pimpinan', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `bank`) VALUES
(1, 'Sinarmas Haji'),
(2, 'BNI Syariah'),
(3, 'BCA Syariah'),
(4, 'BRI Syariah'),
(5, 'BTN Syariah'),
(6, 'Danamon Syariah'),
(7, 'Mandiri Syariah'),
(8, 'Muammalat'),
(9, 'CIMB Niaga Syariah'),
(10, 'Panin Syariah'),
(11, 'Mega Syariah'),
(12, 'Pegadaian'),
(13, 'Bukopin Syariah');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Administrator'),
(2, 'Manager'),
(3, 'Sales'),
(4, 'Markeiting'),
(5, 'Debt Collector');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nik_konsumen` varchar(25) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `tmp_konsumen` varchar(100) NOT NULL,
  `tgl_konsumen` date NOT NULL,
  `alamat_konsumen` varchar(255) NOT NULL,
  `telp_konsumen` varchar(15) NOT NULL,
  `email_konsumen` varchar(100) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_pernikahan` int(11) NOT NULL,
  `password_konsumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nik_konsumen`, `nama_konsumen`, `tmp_konsumen`, `tgl_konsumen`, `alamat_konsumen`, `telp_konsumen`, `email_konsumen`, `id_agama`, `id_darah`, `id_pekerjaan`, `id_pendidikan`, `id_pernikahan`, `password_konsumen`) VALUES
(1, '1231231', 'Haydar Ali', 'Banjarmasin', '2024-08-11', 'Veteran Banjarmasin', '0856238738', 'sad@gmail.com', 1, 1, 1, 1, 1, '123456'),
(3, '721309120983', 'Mahmud', 'Banjarmasin', '2024-08-17', 'Jl. Veteran', '0878263678767', 'mahmud@gmail.com', 1, 0, 1, 4, 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `id_terlambat` int(11) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `hasil_kunjungan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id_meta` int(11) NOT NULL,
  `judul_meta` varchar(1000) NOT NULL,
  `telp_meta` varchar(15) NOT NULL,
  `email_meta` varchar(100) NOT NULL,
  `pimpinan_meta` varchar(100) NOT NULL,
  `singkat_meta` varchar(50) NOT NULL,
  `alamat_meta` varchar(355) NOT NULL,
  `logo_meta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id_meta`, `judul_meta`, `telp_meta`, `email_meta`, `pimpinan_meta`, `singkat_meta`, `alamat_meta`, `logo_meta`) VALUES
(1, 'PT. FIF GROUP', '0511 3353586', 'bjmkalsel@kemenag.go.id', 'IRWAN', 'Kemenag', 'JL AYANI KM 5,7 KOMPLEK BANJAR INDAH RT.57 NO.01 KEL.PEMURUS DALAM KEC. BANJARMASIN SELATAN BANJARMASIN', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tmp` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_pernikahan` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nik`, `nama`, `id_jabatan`, `jk`, `tmp`, `tgl`, `alamat`, `id_agama`, `id_darah`, `id_pernikahan`, `id_pekerjaan`, `id_pendidikan`, `username`, `password`, `foto`) VALUES
(1, '35250130065800433', 'Helda Arsitaa', 1, 'Perempuan', 'Banjarmasin', '1992-06-07', 'Jl. Pangeran Hidayatullahh', 2, 2, 2, 4, 2, 'admin', 'admin', 'avatar-15.png'),
(4, '6371041402940001', 'Maulana Adit', 7, 'Laki-Laki', 'Banjarmasin', '2023-07-14', 'Jl. HKSN', 1, 3, 1, 2, 5, 'adit', 'adit', '5.jpg'),
(6, '128637214318', 'Rizaldi', 3, 'Laki-Laki', 'Banjarbaru', '1992-08-17', 'Jl. Gatot Subroto', 1, 0, 2, 1, 5, 'rizaldi', 'rizaldi', 'pic4.jpg'),
(7, '12387198273', 'Irwan', 2, 'Laki-Laki', 'Banjarmasin', '1987-08-30', 'Jl. Banjarmasin', 1, 0, 1, 1, 5, 'irwan', 'irwan', 'img-avatar-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(1, 'Karyawan Swasta'),
(2, 'Wiraswasta'),
(3, 'Pegawai Negeri Sipil'),
(4, 'Mahasiswa/i');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nominal_bayar` int(11) NOT NULL,
  `bayar_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `no_permohonan`, `tgl_pembayaran`, `nominal_bayar`, `bayar_ke`) VALUES
(13, 'S.PR.24/000001', '2024-08-22', 432000, 1),
(14, 'S.PR.24/000001', '2024-08-25', 432000, 2),
(15, 'S.PR.24/000003', '2024-08-25', 200000, 1),
(16, 'S.PR.24/000003', '2024-08-25', 22222, 2),
(17, 'S.PR.24/000003', '2024-08-25', 22222, 3),
(18, 'S.PR.24/000003', '2024-08-25', 22222, 4),
(19, 'S.PR.24/000003', '2024-08-25', 22222, 5),
(20, 'S.PR.24/000003', '2024-08-25', 22222, 6),
(21, 'S.PR.24/000003', '2024-08-25', 22222, 7),
(22, 'S.PR.24/000003', '2024-08-25', 5000000, 8),
(23, 'S.PR.24/000003', '2024-08-25', 22222, 9),
(24, 'S.PR.24/000004', '2024-08-25', 669000, 1),
(25, 'S.PR.24/000004', '2024-08-25', 669000, 2),
(26, 'S.PR.24/000004', '2024-08-25', 669000, 3),
(27, 'S.PR.24/000004', '2024-08-25', 669000, 4),
(28, 'S.PR.24/000004', '2024-08-25', 669000, 5),
(34, 'S.PR.24/000004', '2024-08-25', 669000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'SMP'),
(2, 'SMA'),
(3, 'DI'),
(4, 'DII'),
(5, 'DIII');

-- --------------------------------------------------------

--
-- Table structure for table `peringatan`
--

CREATE TABLE `peringatan` (
  `id_peringatan` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `tgl_peringatan` date NOT NULL,
  `isi` text NOT NULL,
  `status_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peringatan`
--

INSERT INTO `peringatan` (`id_peringatan`, `no_permohonan`, `tgl_peringatan`, `isi`, `status_bayar`) VALUES
(3, 'S.PR.24/000001', '2024-08-22', 'segera lakukan pembayaran', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `no_permohonan` varchar(20) NOT NULL,
  `id_konsumen` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `waktu_permohonan` time NOT NULL,
  `ktp` text NOT NULL,
  `kk` text NOT NULL,
  `stnk` text NOT NULL,
  `bpkb` text NOT NULL,
  `listrik` text NOT NULL,
  `status_permohonan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`no_permohonan`, `id_konsumen`, `tgl_permohonan`, `waktu_permohonan`, `ktp`, `kk`, `stnk`, `bpkb`, `listrik`, `status_permohonan`) VALUES
('S.PR.24/000001', 3, '2024-08-22', '13:53:00', '8342f9c25047492593229740e32fc54b.jpg', 'agya.jpg', 'agya1.jpg', 'ayla.jpg', 'ayla1.jpg', 'ACC'),
('S.PR.24/000002', 1, '2024-08-25', '12:35:00', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'ACC'),
('S.PR.24/000003', 1, '2024-08-25', '14:00:00', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'ACC'),
('S.PR.24/000004', 1, '2024-08-25', '16:12:00', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'ACC'),
('S.PR.24/000005', 1, '2024-08-26', '00:26:00', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'computer.png', 'ACC');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_cair`
--

CREATE TABLE `permohonan_cair` (
  `id_permohonan_cair` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `waktu_pinjaman` time NOT NULL,
  `jum_pinjaman` int(11) NOT NULL,
  `tenor_pinjaman` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `norek` varchar(100) NOT NULL,
  `atasnama` varchar(100) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `status_pinjaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan_cair`
--

INSERT INTO `permohonan_cair` (`id_permohonan_cair`, `no_permohonan`, `tgl_pinjaman`, `waktu_pinjaman`, `jum_pinjaman`, `tenor_pinjaman`, `angsuran`, `bank`, `norek`, `atasnama`, `jatuh_tempo`, `status_pinjaman`) VALUES
(5, 'S.PR.24/000001', '2024-08-22', '14:04:00', 4000000, 18, 432000, 'BCA', '112387370', 'Mahmud', '2024-10-13', 'Cicilan'),
(6, 'S.PR.24/000003', '2024-08-25', '16:07:00', 2500000, 6, 22222, 'ww', '222', '222', '2025-05-22', 'Cicilan'),
(7, 'S.PR.24/000004', '2024-08-25', '16:14:00', 2500000, 6, 669000, '333', '333', 'udin', '2025-07-21', 'Cicilan'),
(9, 'S.PR.24/000005', '2024-08-26', '00:27:00', 2500000, 6, 669000, 'bri', '55', '55', '2024-10-24', 'Cicilan');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan_cek`
--

CREATE TABLE `permohonan_cek` (
  `id_permohonan_cek` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `dicek` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `no_polis` varchar(20) NOT NULL,
  `no_rangka` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `mesin_hidup` varchar(10) NOT NULL,
  `mesin_suara` varchar(10) NOT NULL,
  `mesin_oli` varchar(10) NOT NULL,
  `body` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permohonan_cek`
--

INSERT INTO `permohonan_cek` (`id_permohonan_cek`, `no_permohonan`, `dicek`, `merk`, `no_polis`, `no_rangka`, `no_mesin`, `type`, `warna`, `tahun`, `mesin_hidup`, `mesin_suara`, `mesin_oli`, `body`) VALUES
(4, 'S.PR.24/000001', 'Rizaldi', 'Honda', 'DA 7812 CV', '1290392148', '4359834521321', 'Matic', 'Putih', '2019', 'Baik', 'Langsam', 'Baik', 'Baik'),
(5, 'S.PR.24/000003', 'Rizaldi', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', '2024', 'Baik', 'Tidak', 'Baik', 'Rusak'),
(6, 'S.PR.24/000004', 'Rizaldi', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'Baik', 'Tidak', 'Baik', 'Rusak'),
(7, 'S.PR.24/000005', 'Rizaldi', 'gg', 'gg', 'gg', 'gg', 'gg', 'gg', '2012', 'Baik', 'Langsam', 'Baik', 'Baik'),
(8, 'S.PR.24/000005', 'Rizaldi', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'ff', 'Baik', 'Langsam', 'Baik', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `id_pernikahan` int(11) NOT NULL,
  `pernikahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`id_pernikahan`, `pernikahan`) VALUES
(1, 'Menikah'),
(2, 'Belum Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `enam` int(11) NOT NULL,
  `duabelas` int(11) NOT NULL,
  `delapanbelas` int(11) NOT NULL,
  `duaempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nominal`, `enam`, `duabelas`, `delapanbelas`, `duaempat`) VALUES
(2, 2500000, 669000, 432000, 303000, 245000),
(3, 3000000, 763000, 493000, 346000, 279000),
(4, 3500000, 859000, 556000, 389000, 314000),
(5, 4000000, 954000, 617000, 432000, 348000);

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id` int(11) NOT NULL,
  `id_konsumen` int(10) UNSIGNED NOT NULL,
  `no_permohonan` varchar(50) NOT NULL DEFAULT '',
  `pertanyaan_lengkapi_syarat` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_masuk_sistem` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_diproses` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_penyerahan_syarat` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_dokumen_terbit` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_dokumen_diterima` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_dibatalkan` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `pertanyaan_ajukan_ulang` enum('Sangat Puas','Puas','Biasa Saja','Buruk') NOT NULL,
  `tanggal_survei` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id`, `id_konsumen`, `no_permohonan`, `pertanyaan_lengkapi_syarat`, `pertanyaan_masuk_sistem`, `pertanyaan_diproses`, `pertanyaan_penyerahan_syarat`, `pertanyaan_dokumen_terbit`, `pertanyaan_dokumen_diterima`, `pertanyaan_dibatalkan`, `pertanyaan_ajukan_ulang`, `tanggal_survei`) VALUES
(8, 1, 'S.PR.24/000003', 'Sangat Puas', 'Puas', 'Biasa Saja', 'Puas', 'Biasa Saja', 'Biasa Saja', 'Biasa Saja', 'Biasa Saja', '2024-08-25 15:09:31'),
(9, 1, 'S.PR.24/000004', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Puas', 'Biasa Saja', 'Puas', 'Puas', 'Puas', '2024-08-25 16:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `terlambat`
--

CREATE TABLE `terlambat` (
  `id_terlambat` int(11) NOT NULL,
  `no_permohonan` varchar(20) NOT NULL,
  `tgl_terlambat` date NOT NULL,
  `selama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id_meta`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_jabatan` (`id_jabatan`,`id_agama`,`id_darah`,`id_pernikahan`,`id_pekerjaan`,`id_pendidikan`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD PRIMARY KEY (`id_peringatan`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`no_permohonan`);

--
-- Indexes for table `permohonan_cair`
--
ALTER TABLE `permohonan_cair`
  ADD PRIMARY KEY (`id_permohonan_cair`);

--
-- Indexes for table `permohonan_cek`
--
ALTER TABLE `permohonan_cek`
  ADD PRIMARY KEY (`id_permohonan_cek`);

--
-- Indexes for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`id_pernikahan`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terlambat`
--
ALTER TABLE `terlambat`
  ADD PRIMARY KEY (`id_terlambat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id_meta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peringatan`
--
ALTER TABLE `peringatan`
  MODIFY `id_peringatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permohonan_cair`
--
ALTER TABLE `permohonan_cair`
  MODIFY `id_permohonan_cair` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permohonan_cek`
--
ALTER TABLE `permohonan_cek`
  MODIFY `id_permohonan_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `id_pernikahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `terlambat`
--
ALTER TABLE `terlambat`
  MODIFY `id_terlambat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
