-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 05:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` int(100) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `nama_bank`, `nomor_rekening`, `nama_pemilik`) VALUES
(0, 'BCA', '3710375576', 'AMAR CS'),
(1, 'BCA', '3710375576', 'AMAR CS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_creator`
--

CREATE TABLE `tb_creator` (
  `id_creator` int(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_creator` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  `saldo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_creator`
--

INSERT INTO `tb_creator` (`id_creator`, `nik`, `nama_creator`, `deskripsi`, `photo`, `status`, `saldo`) VALUES
(0, '293949', 'NAUFAL CTZ', 'oke', 'naufal.png', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(100) NOT NULL,
  `creator_id` varchar(255) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `creator_id`, `judul_event`, `deskripsi`, `tanggal_mulai`, `tanggal_akhir`, `waktu_mulai`, `waktu_akhir`, `lokasi`, `banner`) VALUES
(1, 'member@gmail.com', 'AMAR EVENT', 'AMAR EVENT TEST', '2022-10-19', '2022-10-31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'KOST AMAR', 'member@gmailcom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_e_tiket`
--

CREATE TABLE `tb_e_tiket` (
  `id` int(100) NOT NULL,
  `kode_pesanan` varchar(255) NOT NULL,
  `kode_tiket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_e_tiket`
--

INSERT INTO `tb_e_tiket` (`id`, `kode_pesanan`, `kode_tiket`) VALUES
(0, '163015', '#016301543'),
(0, '163015', '#116301543'),
(0, '163015', '#216301543'),
(0, '163015', '#316301543'),
(0, '163015', '#416301543'),
(0, '163924', '#016392408'),
(0, '163924', '#116392408'),
(0, '163924', '#216392408'),
(0, '054723', '#005472338'),
(0, '183939', '#018393943'),
(0, '181144', '#018114451');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `kode_pesanan` varchar(255) NOT NULL,
  `tagihan` varchar(100) NOT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `status_bayar` int(100) NOT NULL,
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`kode_pesanan`, `tagihan`, `bukti_bayar`, `status_bayar`, `id_user`) VALUES
('054723', '10000', '054723.jpeg', 1, 1),
('065920', '20000', NULL, 0, 1),
('163015', '50000', '163015.jpeg', 1, 1),
('163924', '30000', '163924.jpeg', 1, 1),
('181144', '10000', NULL, 1, 1),
('183939', '10000', NULL, 1, 1),
('184137', '10000', NULL, 0, 1),
('184358', '10000', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `kode_pesanan` varchar(255) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tiket_id` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jumlah_tiket` varchar(255) NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `metode_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`kode_pesanan`, `tanggal_pesan`, `tiket_id`, `nama`, `no_hp`, `email`, `jumlah_tiket`, `total_bayar`, `metode_bayar`) VALUES
('054723', '2022-10-19', 1, 'amar', '123', 'amar@gmail.com', '1', '10000', '1'),
('065920', '2022-10-19', 1, '', '', '', '2', '20000', '1'),
('163015', '2022-10-18', 1, 'rio aziz', '0899', 'rioaziz@gmail.com', '5', '50000', '1'),
('163924', '2022-10-18', 1, 'amar', 'amar', 'amar@gmail.com', '3', '30000', '1'),
('181144', '2022-10-18', 1, '', '', '', '1', '10000', '1'),
('183939', '2022-10-18', 1, '', '', '', '1', '10000', '1'),
('184137', '2022-10-18', 1, '', '', '', '1', '10000', '1'),
('184358', '2022-10-18', 1, '', '', '', '1', '10000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_tiket` int(11) NOT NULL,
  `event_id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kouta` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tgl_mulai_jual` date NOT NULL,
  `tgl_akhir_jual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tiket`
--

INSERT INTO `tb_tiket` (`id_tiket`, `event_id`, `nama`, `kouta`, `harga`, `deskripsi`, `tgl_mulai_jual`, `tgl_akhir_jual`) VALUES
(1, 1, 'AMAR TIKET -FREE', '10', '10000', 'untuk 10 Orang pertama', '2022-10-18', '2022-10-21'),
(2, 2, 'AMAR TIKET -FREE', '10', '10000', 'untuk 10 Orang pertama', '2022-10-18', '2022-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` enum('admin','creator','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `password`, `no_hp`, `photo`, `role`) VALUES
(1, 'member', 'member@gmail.com', 'aa08769cdcb26674c6706093503ff0a3', '089999', '', 'member'),
(2, 'admin', 'admin@gamil.c.om', '21232f297a57a5a743894a0e4a801fc3', '123', '', 'admin'),
(3, 'creator', 'creator@gmail.com', 'ee2433259b0fe399b40e81d2c98a38b6', '123', '', 'creator'),
(4, 'amar', 'amar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', '', 'admin'),
(5, 'amar', 'amar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '123456890', '', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_creator`
--
ALTER TABLE `tb_creator`
  ADD PRIMARY KEY (`id_creator`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`kode_pesanan`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`kode_pesanan`);

--
-- Indexes for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tiket`
--
ALTER TABLE `tb_tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
