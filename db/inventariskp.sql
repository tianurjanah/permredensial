-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 12:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventariskp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(60) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `kategori` int(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `posisi`, `kategori`, `tanggal_masuk`, `foto`) VALUES
('BRG-0001', 'Dot Matrix Printer Epson LQ590II', 'Ruang Admin', 1, '2021-08-24', 'aaa1.png'),
('BRG-0002', 'Printer Epson L380', 'Ruang Admin', 1, '2021-08-24', 'aaaaa.png'),
('BRG-0003', 'Printer Epson L310', 'Ruang Manager', 1, '2021-08-24', 'aaaa-removebg-preview.png'),
('BRG-0004', 'Laptop Asus X441', 'Ruang Manager', 1, '2021-08-24', 'downloadaaa-removebg-preview1.png'),
('BRG-0005', 'Laptop Lenovo G40-80', 'Ruang Admin', 1, '2021-08-24', 'Lenovo-removebg-preview.png'),
('BRG-0006', 'Motor Yamaha Xeon 125', 'Garasi', 2, '2021-08-24', 'Keleb-removebg-preview.png'),
('BRG-0007', 'Telp kantor Panasonic KX-TS 505 MX', 'Ruang Manager', 1, '2021-08-24', 'PANASONIC--removebg-preview.png'),
('BRG-0008', 'Telp kantor Panasonic KX-T7703', 'Ruang Admin', 1, '2021-08-24', 'penasonic-500x500-removebg-preview.png'),
('BRG-0009', 'Camera Canon EOS 600D', 'Lemari Ruang Meeting', 1, '2021-08-24', 'aaaaaa-removebg-preview.png'),
('BRG-0010', 'AC Daikin Flash Inverter FTKQ 1 PK', 'Ruang Manager', 1, '2021-08-24', 'ac-640w1.png'),
('BRG-0011', 'AC Daikin FTC35NV14 1,5 PK', 'Ruang Admin', 1, '2021-08-24', 'ac-640w2.png'),
('BRG-0012', 'AC Daikin FTC20NV14 3/4 PK', 'Ruang Meeting', 1, '2021-08-24', 'ac-640w3.png'),
('BRG-0013', 'Projektor InFokus IN112x', 'Ruang Meeting', 1, '2021-08-24', 'e3f3cb1f79f4b302e673054c36a7aed8-removebg-preview.png'),
('BRG-0014', 'Paper Shredder Krisbow S340', 'Ruang Meeting', 1, '2021-08-24', 'a3759ec8f83d0bff76dd37297d53c32d-removebg-preview.png'),
('BRG-0015', 'Machine Fingerprint Solution P208', 'Pintu Masuk Kantor', 1, '2021-08-24', '90271802_1135a768-9ce5-4bb5-95ba-2ee47d1b382f_800_800-removebg-preview.png'),
('BRG-0016', 'CCTV INBEX Waterproof IR LED', 'Garasi', 1, '2021-08-24', 'c0fb6c6cdeeca3efcdb90bb910540c3f-removebg-preview1.png'),
('BRG-0017', 'CCTV HiLook THC-T120-PC', 'Ruang Admin', 1, '2021-08-24', 'c8ec37906b64cbd5a5b25b534ee85feb-removebg-preview.png'),
('BRG-0018', 'AC Daikin Flash Inverter FTKQ series', 'Ruang Manager', 1, '2021-08-24', 'ac-640w.png'),
('BRG-0019', 'CCTV HiLook THC-T120-PC', 'Ruang Meeting', 1, '2021-08-24', 'c8ec37906b64cbd5a5b25b534ee85feb-removebg-preview1.png'),
('BRG-0020', 'CCTV HiLook THC-T120-PC', 'Ruang Manager', 1, '2021-08-24', 'c8ec37906b64cbd5a5b25b534ee85feb-removebg-preview2.png'),
('BRG-0021', 'Motor beat', 'Garasi', 2, '2021-11-18', 'cilcmlhj1fvcllaiopzy-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `ket`) VALUES
(1, 'Barang', 'Inventaris milik perusahaan yang digunakan untuk produktivitas perusahaan.'),
(2, 'Kendaraan', 'Inventaris milik perusahaan yang digunakan untuk operasional perusahaan.');

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE `perawatan` (
  `kode_perawatan` varchar(11) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_perawatan` date NOT NULL,
  `status` enum('Aman','Perlu Diperbaiki','Diperbaiki') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perawatan`
--

INSERT INTO `perawatan` (`kode_perawatan`, `kode_barang`, `nama`, `tanggal_perawatan`, `status`, `keterangan`) VALUES
('PRW-0001', 'BRG-0001', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0002', 'BRG-0002', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0003', 'BRG-0003', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'Tinta Merah Habis dan Macet'),
('PRW-0004', 'BRG-0004', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0005', 'BRG-0005', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'Tombol Spasi dan D rusak'),
('PRW-0006', 'BRG-0006', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'Rem belakang habis'),
('PRW-0007', 'BRG-0007', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0008', 'BRG-0008', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0009', 'BRG-0009', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0010', 'BRG-0010', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'AC Bocor'),
('PRW-0011', 'BRG-0011', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'AC Kurang dingin'),
('PRW-0012', 'BRG-0012', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0013', 'BRG-0013', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0014', 'BRG-0014', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0015', 'BRG-0015', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0016', 'BRG-0016', 'Yosep Andrian', '2021-09-08', 'Aman', '-'),
('PRW-0017', 'BRG-0017', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'Adaptor Mati'),
('PRW-0019', 'BRG-0019', 'Yosep Andrian', '2021-09-08', 'Diperbaiki', 'Kabel CCTV putus'),
('PRW-0020', 'BRG-0018', 'Yosep Andrian', '2021-09-21', 'Aman', '-'),
('PRW-0021', 'BRG-0020', 'Yosep Andrian', '2021-09-21', 'Aman', '-'),
('PRW-0022', 'BRG-0001', 'Yosep Andrian', '2021-11-18', 'Aman', '-'),
('PRW-0023', 'BRG-0002', 'Yosep Andrian', '2021-11-18', 'Diperbaiki', 'Tinta merah habis'),
('PRW-0024', 'BRG-0006', 'Yosep Andrian', '2021-11-18', 'Perlu Diperbaiki', 'Oli Kering'),
('PRW-0025', 'BRG-0004', 'Yosep Andrian', '2021-11-26', 'Aman', 'butuh perawatan');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `kode_perbaikan` varchar(11) NOT NULL,
  `kode_perawatan` varchar(11) NOT NULL,
  `kode_barangprb` varchar(11) NOT NULL,
  `tanggal_perbaikan` date NOT NULL,
  `namaprb` varchar(30) NOT NULL,
  `kerusakan` text NOT NULL,
  `penanganan` text NOT NULL,
  `kebutuhan_komponen` text NOT NULL,
  `statusprb` enum('Sedang Diperbaiki','Sudah Diperbaiki') NOT NULL,
  `total_biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`kode_perbaikan`, `kode_perawatan`, `kode_barangprb`, `tanggal_perbaikan`, `namaprb`, `kerusakan`, `penanganan`, `kebutuhan_komponen`, `statusprb`, `total_biaya`) VALUES
('PRB-0001', 'PRW-0003', 'BRG-0003', '2021-09-28', 'Rochmat', 'Tinta Merah Habis dan Macet', 'Membeli dan mengisi tinta merah', 'Tinta Merah', 'Sudah Diperbaiki', '35.000'),
('PRB-0002', 'PRW-0005', 'BRG-0005', '2021-09-27', 'Rochmat', 'Tombol Spasi dan D rusak', 'Mengganti keyboard laptop', 'keyboard laptop', 'Sudah Diperbaiki', '155.000'),
('PRB-0003', 'PRW-0006', 'BRG-0006', '2021-09-28', 'Rochmat', 'Rem belakang habis', 'Mengganti rem belakang', 'Rem belakang ', 'Sudah Diperbaiki', '53.500'),
('PRB-0004', 'PRW-0010', 'BRG-0010', '2021-09-27', 'Rochmat', 'AC Bocor', 'Membersihkan saluran pembuangn AC', '-', 'Sudah Diperbaiki', '43.000'),
('PRB-0005', 'PRW-0011', 'BRG-0011', '2021-09-27', 'Rochmat', 'AC Kurang dingin', 'Menambah Freon AC', 'Freon AC', 'Sudah Diperbaiki', '175.000'),
('PRB-0006', 'PRW-0017', 'BRG-0017', '2021-09-29', 'Rochmat', 'Adaptor Mati', 'Mengganti kabel adaptor', 'Kabel Adaptor', 'Sudah Diperbaiki', '115.000'),
('PRB-0007', 'PRW-0019', 'BRG-0019', '2021-09-30', 'Rochmat', 'Kabel CCTV putus', 'Mengganti kabel CCTV', 'Kabel CCtV', 'Sudah Diperbaiki', '35.000'),
('PRB-0008', 'PRW-0023', 'BRG-0002', '2021-11-18', 'Yosep Andrian', 'Tinta merah habis', 'Menambah tinta merah', 'Tinta merah', 'Sudah Diperbaiki', '45.000'),
('PRB-0009', 'PRW-0024', 'BRG-0006', '2021-11-18', 'Yosep Andrian', 'Oli Kering', '', '', 'Sedang Diperbaiki', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `level` enum('Pegawai','Admin','Supervisor') NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `notelp`, `level`, `password`, `foto`, `status`) VALUES
('USR-002', 'Yosep Andrian', 'yosep', 'yosepandrian@gmail.com', '087817379229', 'Pegawai', 'a5e8ed535fa631fa1e804dd8cfcf519c', 'yosep.jpg', 'Aktif'),
('USR-003', 'Nova Rida TN', 'nova', 'novarida@gmail.com', '089291889228', 'Supervisor', '21ad1d01984d169bd62a85bedf448371', 'nova.png', 'Aktif'),
('USR-004', 'Dani Afrijal', 'dani', 'daniafrijal@gmail.com', '0895352429600', 'Admin', '909d04bb454d2fd8f73735a43c5fe516', 'dani.jpg', 'Aktif'),
('USR-005', 'Rochmat', 'rochmat', 'rochmat@gmail.com', '089654345234', 'Pegawai', '42016f6d0ff5e2a2f74fa7d9137a2897', 'rochmat.jpg', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`kode_perawatan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`kode_perbaikan`),
  ADD UNIQUE KEY `kode_perawatan` (`kode_perawatan`),
  ADD KEY `kode_barangprb` (`kode_barangprb`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD CONSTRAINT `perawatan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_2` FOREIGN KEY (`kode_perawatan`) REFERENCES `perawatan` (`kode_perawatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perbaikan_ibfk_3` FOREIGN KEY (`kode_barangprb`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
