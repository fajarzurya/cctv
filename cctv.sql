-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 07:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cctv`
--
CREATE DATABASE IF NOT EXISTS `cctv` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cctv`;

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `kecamatan` varchar(10) DEFAULT NULL,
  `kota` varchar(10) DEFAULT NULL,
  `provinsi` varchar(15) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `kode_pos`, `kecamatan`, `kota`, `provinsi`, `alamat`) VALUES
(1, '61252', 'Buduran', 'Sidoarjo', 'Jawa Timur', 'Jalan Raya Sidokepung Rt 30 Rw 07'),
(2, '62100', 'Wiyung', 'Surabaya', 'Jawa Timur', ''),
(3, '61252', 'Candi', 'Sidoarjo', 'Jawa TImur', ''),
(8, '61250', 'Sidoarjo', 'Sidoarjo', 'Jawa Timur', ''),
(9, '', '', '', '', ''),
(10, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(11) NOT NULL,
  `customer` varchar(30) NOT NULL,
  `tipe` int(1) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_kontak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `customer`, `tipe`, `id_alamat`, `id_kontak`) VALUES
('C001', 'SLAMET FAJAR', 2, 1, 1),
('C002', 'PT CUA', 1, 2, 3),
('C003', 'M FAUZI', 2, 2, 2),
('C004', 'PT. PERTAMINA', 1, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `departemen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `nopeg` varchar(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `departemen` varchar(15) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_berhenti` date DEFAULT NULL,
  `id_kontak` int(11) NOT NULL,
  `id_alamat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`nopeg`, `nama`, `status`, `departemen`, `jabatan`, `tgl_masuk`, `tgl_berhenti`, `id_kontak`, `id_alamat`) VALUES
('K001', 'M FAUZI', 'Aktif', 'Proyek', 'Direktur', '2010-08-31', NULL, 0, 0),
('K002', 'MURYA INDRA FRIZAL', 'Aktif', 'Proyek', 'Staff Senior', '2017-08-31', NULL, 0, 0),
('K003', 'M. JAINUL ARIFIN', 'Aktif', 'Teknologi', 'Staff Senior', '2017-08-01', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL,
  `nama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `nama`) VALUES
(1, 'WHUTAMA'),
(2, 'WHTOOL');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `harga` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instalasi`
--

CREATE TABLE `instalasi` (
  `id_instalasi` varchar(15) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `drawing` varchar(20) DEFAULT NULL,
  `id_customer` varchar(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `jenis` varchar(10) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `pelaksana` varchar(11) DEFAULT NULL,
  `total` decimal(20,0) DEFAULT NULL,
  `id_reservasi` int(11) DEFAULT NULL,
  `id_kontrak` int(11) DEFAULT NULL,
  `tgl_entri` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instalasi`
--

INSERT INTO `instalasi` (`id_instalasi`, `deskripsi`, `drawing`, `id_customer`, `status`, `jenis`, `tgl_mulai`, `tgl_selesai`, `pelaksana`, `total`, `id_reservasi`, `id_kontrak`, `tgl_entri`) VALUES
('INS001-08-17', 'INSTALASI BARU DI PT CUA', '', 'C002', 'Pelepasan', 'Beli', '2017-08-01', '2017-08-31', 'K002', '0', NULL, NULL, '2017-08-26 16:27:33'),
('INS002-08-17', 'INSTALASI BARU DI RUMAH DIREKTUR', '', 'C003', 'Aktif', 'Beli', '2017-09-01', '2017-09-30', 'K002', '0', NULL, NULL, '2017-08-26 16:42:11'),
('INS003-08-17', 'INSTALASI GEDUNG PERTAMINA', '', 'C004', 'Aktif', 'Sewa', '2017-08-01', '2017-08-31', 'K003', '0', NULL, NULL, '2017-08-26 16:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` varchar(11) NOT NULL,
  `id_barang` varchar(11) NOT NULL,
  `kondisi` varchar(10) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `tgl_entri` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` float NOT NULL,
  `stokminim` float NOT NULL,
  `id_gudang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `id_barang`, `kondisi`, `harga`, `tgl_entri`, `jumlah`, `stokminim`, `id_gudang`) VALUES
('001/08/2017', 'I00001', 'Normal', '1200000', '2017-08-18 09:07:05', 8, 0, 1),
('002/08/2017', 'I00002', 'Normal', '500000', '2017-08-20 12:49:04', 5, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_barang` varchar(11) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `id_satuan` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `manufaktur` varchar(20) NOT NULL,
  `grup` varchar(10) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_barang`, `deskripsi`, `id_satuan`, `status`, `manufaktur`, `grup`, `jenis`, `gambar`) VALUES
('I00001', '4CONNECT V380 WIFI HD720 P2P CCTV', 2, 'AKTIF', 'SONY', 'Utama', 'IP CAM', ''),
('I00002', 'KABEL LAN CAT 6', 2, 'AKTIF', 'AMP', 'Pendukung', '', ''),
('I00003', 'KABEL COAXIAL', 2, 'AKTIF', 'OEM', 'Pendukung', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `hp` varchar(17) DEFAULT NULL,
  `telpon` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `kontak`, `email`, `hp`, `telpon`) VALUES
(1, 'SLAMET FAJAR', 'fajar@ptpjbs.com', '+(62)85730760338', '(031)0000000'),
(2, 'M FAUZI', 'fauzi@gmail.com', '+(62)8573076', '(031)857033_'),
(3, 'PT CUA', 'cua@gmail.com', '', '(031)0000000'),
(9, 'MURYA INDRA FRIZAL', 'murya@gmail.com', '(62)00000000', ''),
(10, 'M. JAINUL ARIFIN', 'ari@gmail.com', '', ''),
(11, 'PT. PERTAMINA', 'humas@pertamina.co.id', '+(62)00000000000', '(021)0000000');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_kontrak` int(11) NOT NULL,
  `kontrak` blob NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` int(11) NOT NULL,
  `MENU_NAMA` varchar(20) DEFAULT NULL,
  `MENU_URI` varchar(20) DEFAULT NULL,
  `MENU_AKSES` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MENU_ID`, `MENU_NAMA`, `MENU_URI`, `MENU_AKSES`) VALUES
(1, 'home', 'home/', '+1+2+3+'),
(2, 'master', 'master/', '+1+2+3+');

-- --------------------------------------------------------

--
-- Table structure for table `pelepasan`
--

CREATE TABLE `pelepasan` (
  `id_pelepasan` int(11) NOT NULL,
  `id_instalasi` varchar(15) NOT NULL,
  `tgl_pelepasan` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `pelaksana` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelepasan`
--

INSERT INTO `pelepasan` (`id_pelepasan`, `id_instalasi`, `tgl_pelepasan`, `keterangan`, `pelaksana`) VALUES
(2, 'INS001-08-17', '2017-10-19', 'Kontrak habis', 'K002');

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `id_pemeliharaan` varchar(15) NOT NULL,
  `deskripsi` varchar(30) NOT NULL,
  `akt_mulai` datetime NOT NULL,
  `akt_selesai` datetime NOT NULL,
  `jadwal_mulai` datetime NOT NULL,
  `jadwal_selesai` datetime NOT NULL,
  `pelaksana` varchar(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `id_instalasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `satuan`) VALUES
(1, 'KG'),
(2, 'BUAH'),
(3, 'ROLL'),
(4, 'LOT'),
(5, 'PACK'),
(6, 'LUSIN');

-- --------------------------------------------------------

--
-- Table structure for table `status_user`
--

CREATE TABLE `status_user` (
  `ID_STATUS_USER` int(11) NOT NULL,
  `STATUS_USER` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_user`
--

INSERT INTO `status_user` (`ID_STATUS_USER`, `STATUS_USER`) VALUES
(1, 'ak'),
(2, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_user`
--

CREATE TABLE `tipe_user` (
  `ID_TIPE_USER` int(11) NOT NULL,
  `TIPE_USER` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_user`
--

INSERT INTO `tipe_user` (`ID_TIPE_USER`, `TIPE_USER`) VALUES
(1, 'superadmin'),
(2, 'admin'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `trans_barang`
--

CREATE TABLE `trans_barang` (
  `id_reservasi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `tgl_butuh` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `ID_USER` int(10) UNSIGNED NOT NULL,
  `USERNAME` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `ID_TIPE_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`ID_USER`, `USERNAME`, `PASSWORD`, `ID_TIPE_USER`) VALUES
(1, 'root', '92c49e9f763bee6646ed8efb97120861', 1),
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'fajar', 'e10adc3949ba59abbe56e057f20f883e', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`nopeg`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `instalasi`
--
ALTER TABLE `instalasi`
  ADD PRIMARY KEY (`id_instalasi`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD KEY `barang` (`id_barang`),
  ADD KEY `gudang` (`id_gudang`) USING BTREE;

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `satuan` (`id_satuan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`id_kontrak`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MENU_ID`);

--
-- Indexes for table `pelepasan`
--
ALTER TABLE `pelepasan`
  ADD PRIMARY KEY (`id_pelepasan`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`id_pemeliharaan`),
  ADD KEY `instalasi` (`id_instalasi`),
  ADD KEY `fk_brg` (`id_reservasi`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`ID_STATUS_USER`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_user`
--
ALTER TABLE `tipe_user`
  ADD PRIMARY KEY (`ID_TIPE_USER`);

--
-- Indexes for table `trans_barang`
--
ALTER TABLE `trans_barang`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `resv_barang` (`id_barang`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MENU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelepasan`
--
ALTER TABLE `pelepasan`
  MODIFY `id_pelepasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status_user`
--
ALTER TABLE `status_user`
  MODIFY `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe_user`
--
ALTER TABLE `tipe_user`
  MODIFY `ID_TIPE_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `trans_barang`
--
ALTER TABLE `trans_barang`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `ID_USER` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `barang` FOREIGN KEY (`id_barang`) REFERENCES `item` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
