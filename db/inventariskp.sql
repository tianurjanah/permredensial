-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2023 pada 11.56
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `barang`
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
-- Dumping data untuk tabel `barang`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `ket`) VALUES
(1, 'Barang', 'Inventaris milik perusahaan yang digunakan untuk produktivitas perusahaan.'),
(2, 'Kendaraan', 'Inventaris milik perusahaan yang digunakan untuk operasional perusahaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kb` int(10) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `kode_profesi` int(10) NOT NULL,
  `kode_nakes` int(10) NOT NULL,
  `diminta` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kompetensi`
--

INSERT INTO `kompetensi` (`id_kb`, `bagian`, `kompetensi`, `kode_profesi`, `kode_nakes`, `diminta`, `status`) VALUES
(1, 'b1', 'Melakukan pemeriksaan Radiografi Cranium', 0, 0, '', ''),
(2, 'b1', 'Melakukan  pemeriksaan Radografi Sella Tursica', 0, 0, '', ''),
(3, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Cervical', 0, 0, '', ''),
(4, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Thoracal / Thoracolumbal', 0, 0, '', ''),
(5, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Lumbal / Lumbosacral', 0, 0, '', ''),
(6, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Sacral / Coccyx', 0, 0, '', ''),
(7, 'b1', 'Melakukan pemeriksaan Radiografi Scoliosis Program & Kontrol', 0, 0, '', ''),
(8, 'b1', 'Melakukan pemeriksaan Radiografi Thorax AP/PA, Lateral', 0, 0, '', ''),
(9, 'b1', 'Melakukan pemeriksaan Radiografi Top Lordotik', 0, 0, '', ''),
(10, 'b1', 'Melakukan pemeriksaan Radiografi Sternum Costae', 0, 0, '', ''),
(11, 'b1', 'Melakukan pemeriksaan Radiografi Plain Abdominal (BNO)', 0, 0, '', ''),
(12, 'b1', 'Melakukan pemeriksaan Radiografi Abdomen 3 Posisi', 0, 0, '', ''),
(13, 'b1', 'Melakukan pemeriksaan Radiografi Pelvis AP, Lateral, Oblique', 0, 0, '', ''),
(14, 'b1', 'Melakukan pemeriksaan Radiografi Frog Lateral', 0, 0, '', ''),
(15, 'b1', 'Melakukan pemeriksaan Radiografi Sacro Illiaca Joint (Sacroiliac joints)', 0, 0, '', ''),
(16, 'b1', 'Melakukan pemeriksaan Radiografi Orbita', 0, 0, '', ''),
(17, 'b1', 'Melakukan pemeriksaan Radiografi Foramen Opticum', 0, 0, '', ''),
(18, 'b1', 'Melakukan pemeriksaan Radiografi Nasal Bone', 0, 0, '', ''),
(19, 'b1', 'Melakukan pemeriksaan Radiografi Sinus Paranasal', 0, 0, '', ''),
(20, 'b1', 'Melakukan pemeriksaan Radiografi Mastoid', 0, 0, '', ''),
(21, 'b1', 'Melakukan pemeriksaan Radiografi Os Petrosum', 0, 0, '', ''),
(22, 'b1', 'Melakukan pemeriksaan Radiografi Zygomaticum', 0, 0, '', ''),
(23, 'b1', 'Melakukan pemeriksaan Radiografi Maxilla / Mandibulla', 0, 0, '', ''),
(24, 'b1', 'Melakukan pemeriksaan Radiografi Temporomandibular Joint (TMJ)', 0, 0, '', ''),
(25, 'b1', 'Melakukan pemeriksaan Radiografi Panoramic & Cephalometery', 0, 0, '', ''),
(26, 'b1', 'Melakukan pemeriksaan Radiografi Bone Age', 0, 0, '', ''),
(27, 'b1', 'Melakukan pemeriksaan Radiografi Bone Survey', 0, 0, '', ''),
(28, 'b1', 'Melakukan pemeriksaan Radiografi Digiti / Manus', 0, 0, '', ''),
(29, 'b1', 'Melakukan pemeriksaan Radiografi Wrist Joint', 0, 0, '', ''),
(30, 'b1', 'Melakukan pemeriksaan Radiografi Antebrahi', 0, 0, '', ''),
(31, 'b1', 'Melakukan pemeriksaan Radiografi Humerus', 0, 0, '', ''),
(32, 'b1', 'Melakukan pemeriksaan Radiografi Elbow Joint', 0, 0, '', ''),
(33, 'b1', 'Melakukan pemeriksaan Radiografi Shoulder Joint', 0, 0, '', ''),
(34, 'b1', 'Melakukan pemeriksaan Radiografi Clavicula', 0, 0, '', ''),
(35, 'b1', 'Melakukan pemeriksaan  Radiografi Scapula', 0, 0, '', ''),
(36, 'b1', 'Melakukan pemeriksaan Radiografi Femur', 0, 0, '', ''),
(37, 'b1', 'Melakukan pemeriksaan Radiografi Knee Joint', 0, 0, '', ''),
(38, 'b1', 'Melakukan pemeriksaan Radiografi Genu Sunrise', 0, 0, '', ''),
(39, 'b1', 'Melakukan pemeriksaan Radiografi Cruris', 0, 0, '', ''),
(40, 'b1', 'Melakukan pemeriksaan Radiografi Pedis / Digiti', 0, 0, '', ''),
(41, 'b1', 'Melakukan pemeriksaan Radiografi Ankle Joint', 0, 0, '', ''),
(42, 'b1', 'Melakukan pemeriksaan Radiografi Mammography', 0, 0, '', ''),
(43, '2', 'Melakukan pemeriksaan Radiografi Sialografi', 0, 0, '', ''),
(44, '2', 'Melakukan pemeriksaan Radiografi Esophaggraphy', 0, 0, '', ''),
(45, '2', 'Melakukan pemeriksaan Radiografi MD (Maag Duodenum)', 0, 0, '', ''),
(46, '2', 'Melakukan pemeriksaan Radiografi OMD (Oesophagography Maagduodenum)', 0, 0, '', ''),
(47, '2', 'Melakukan pemeriksaan Radiografi Follow Through', 0, 0, '', ''),
(48, '2', 'Melakukan pemeriksaan Radiografi Appendicogram', 0, 0, '', ''),
(49, '2', 'Melakukan pemeriksaan Radiografi Colon In Loop', 0, 0, '', ''),
(50, '2', 'Melakukan pemeriksaan Radiografi T- Tube', 0, 0, '', ''),
(51, '2', 'Melakukan pemeriksaan Radiografi P.T.C', 0, 0, '', ''),
(52, '2', 'Melakukan pemeriksaan Radiografi ERCP', 0, 0, '', ''),
(53, '2', 'Melakukan pemeriksaan Radiografi BNO- IVP', 0, 0, '', ''),
(54, '2', 'Melakukan pemeriksaan Radiografi Cystography', 0, 0, '', ''),
(55, '2', 'Melakukan pemeriksaan Radiografi Retrograde Urethrocystography', 0, 0, '', ''),
(56, '2', 'Melakukan pemeriksaan Radiografi Retrograde Pyelography', 0, 0, '', ''),
(57, '2', 'Melakukan pemeriksaan Radiografi M.C.U (Micurating Cysctography)', 0, 0, '', ''),
(58, '2', 'Melakukan pemeriksaan Radiografi H.S.G (Hysterosalphyngography)', 0, 0, '', ''),
(59, '2', 'Melakukan pemeriksaan Radiografi Myelography', 0, 0, '', ''),
(60, '2', 'Melakukan pemeriksaan Radiografi Fistulography', 0, 0, '', ''),
(61, '2', 'Melakukan pemeriksaan Radiografi Phlebography', 0, 0, '', ''),
(62, '2', 'Melakukan pemeriksaan Radiografi Ductulography', 0, 0, '', ''),
(63, '3', 'Melakukan Proses pada CR', 0, 0, '', ''),
(64, '3', 'Melakukan Proses Print Film', 0, 0, '', ''),
(65, '3', 'Melakukan Burn CD', 0, 0, '', ''),
(66, '4', 'Melakukan pemeriksaan CT Scan Brain', 0, 0, '', ''),
(67, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Cervical& 3D', 0, 0, '', ''),
(68, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Thoracal& 3D', 0, 0, '', ''),
(69, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Lumbal& 3D', 0, 0, '', ''),
(70, '4', 'Melakukan pemeriksaan CT Scan Pelvis & 3D', 0, 0, '', ''),
(71, '4', 'Melakukan pemeriksaan CT Scan Sinus Paranasal', 0, 0, '', ''),
(72, '4', 'Melakukan pemeriksaan CT Scan Mastoid', 0, 0, '', ''),
(73, '4', 'Melakukan pemeriksaan CT Scan Maxilla / Mandibulla', 0, 0, '', ''),
(74, '4', 'Melakukan pemeriksaan CT Scan Ekstremity', 0, 0, '', ''),
(75, '4', 'Melakukan pemeriksaan CT Scan Thorax', 0, 0, '', ''),
(76, '4', 'Melakukan pemeriksaan CT Scan Upper Abdomen', 0, 0, '', ''),
(77, '4', 'Melakukan pemeriksaan CT Scan Lower Abdomen', 0, 0, '', ''),
(78, '4', 'Melakukan pemeriksaan CT Scan Whole Abdomen', 0, 0, '', ''),
(79, '4', 'Melakukan pemeriksaan CT Scan Calcium Score', 0, 0, '', ''),
(80, '5', 'Melakukan pemeriksaan CT Scan Brain', 0, 0, '', ''),
(81, '5', 'Melakukan pemeriksaan CT Scan Nasopharynk', 0, 0, '', ''),
(82, '5', 'Melakukan pemeriksaan CT Scan Larynk', 0, 0, '', ''),
(83, '5', '\r\nMelakukan pemeriksaan CT Scan Orbita', 0, 0, '', ''),
(84, '5', 'Melakukan pemeriksaan CT Scan Pelvis', 0, 0, '', ''),
(85, '5', 'Melakukan pemeriksaan CT Scan Sinus Paranasal', 0, 0, '', ''),
(86, '5', 'Melakukan pemeriksaan CT Scan Mastoid', 0, 0, '', ''),
(87, '5', 'Melakukan pemeriksaan CT Scan Maxilla / Mandibulla', 0, 0, '', ''),
(88, '5', 'Melakukan pemeriksaan CT Scan Ekstremity', 0, 0, '', ''),
(89, '5', 'Melakukan pemeriksaan CT Scan Thorax', 0, 0, '', ''),
(90, '5', 'Melakukan pemeriksaan CT Scan Upper Abdomen 3 Phase', 0, 0, '', ''),
(91, '5', 'Melakukan pemeriksaan CT Scan Lower Abdomen', 0, 0, '', ''),
(92, '5', 'Melakukan pemeriksaan CT Scan Whole Abdomen', 0, 0, '', ''),
(93, '5', 'Melakukan pemeriksaan CT Scan Myelography', 0, 0, '', ''),
(94, '5', 'Melakukan pemeriksaan CT Scan Angiography Coroner', 0, 0, '', ''),
(95, '5', 'Melakukan pemeriksaan CT Scan Angiography Circullus Willisi', 0, 0, '', ''),
(96, '5', 'Melakukan pemeriksaan CT Scan Angiography Carotis', 0, 0, '', ''),
(97, '5', 'Melakukan pemeriksaan CT Scan Angiography Thoracal', 0, 0, '', ''),
(98, '5', 'Melakukan pemeriksaan CT Scan Angiography Abdominal (Aorta, Renalis, Mesentric)', 0, 0, '', ''),
(99, '5', 'Melakukan pemeriksaan CT Scan Angiography Ekstremity Bawah (Femur & Lower Leg)', 0, 0, '', ''),
(100, '5', 'Melakukan pemeriksaan CT Scan Angiography Ekstremitas Atas', 0, 0, '', ''),
(101, '6', 'Melakukan pemeriksaan MRI Kepala', 0, 0, '', ''),
(102, '6', 'Melakukan pemeriksaan MRI & MRA Kepala', 0, 0, '', ''),
(103, '6', 'Melakukan pemeriksaan MRI Vestibulocochlear Organ', 0, 0, '', ''),
(104, '6', 'Melakukan pemeriksaan MRI Nasopharynk', 0, 0, '', ''),
(105, '6', 'Melakukan pemeriksaan MRI Mouth', 0, 0, '', ''),
(106, '6', 'Melakukan pemeriksaan MRI Larynk', 0, 0, '', ''),
(107, '6', 'Melakukan pemeriksaan MRI Spine (Cervical, Thoracal , Lumbal)', 0, 0, '', ''),
(108, '6', 'Melakukan pemeriksaan MRI Knee Joint', 0, 0, '', ''),
(109, '6', 'Melakukan pemeriksaan MRI Ankle', 0, 0, '', ''),
(110, '6', 'Melakukan pemeriksaan MRI Shoulder ', 0, 0, '', ''),
(111, '6', 'Melakukan pemeriksaan MRI Elbow', 0, 0, '', ''),
(112, '6', 'Melakukan pemeriksaan MRI Wrist Joint', 0, 0, '', ''),
(113, '6', 'Melakukan pemeriksaan MRI TMJ', 0, 0, '', ''),
(114, '6', 'Melakukan pemeriksaan MRI HIP Joint', 0, 0, '', ''),
(115, '6', 'Melakukan pemeriksaan MRI Ekstremity', 0, 0, '', ''),
(116, '6', 'Melakukan pemeriksaan MRI Upper Abdomen', 0, 0, '', ''),
(117, '6', 'Melakukan pemeriksaan MRI Pelvis', 0, 0, '', ''),
(118, '6', 'Melakukan pemeriksaan MRI Abdomen + Pelvis', 0, 0, '', ''),
(119, '6', 'Melakukan pemeriksaan MRI MRCP', 0, 0, '', ''),
(120, '6', 'Melakukan pemeriksaan MRA Kepala', 0, 0, '', ''),
(121, '6', 'Melakukan pemeriksaan MRA Cervical', 0, 0, '', ''),
(122, '6', 'Melakukan pemeriksaan MRA Thorax', 0, 0, '', ''),
(123, '6', 'Melakukan pemeriksaan MRA Abdomen', 0, 0, '', ''),
(124, '6', 'Melakukan pemeriksaan MRA Upper Ekstremity', 0, 0, '', ''),
(125, '6', 'Melakukan pemeriksaan MRA Lower Ekstremity', 0, 0, '', ''),
(126, '7', 'Melakukan pemeriksaan MRI Kepala', 0, 0, '', ''),
(127, '7', 'Melakukan pemeriksaan MRI & MRA Kepala', 0, 0, '', ''),
(128, '7', 'Melakukan pemeriksaan MRI Vestibulocochlear Organ', 0, 0, '', ''),
(129, '7', 'Melakukan pemeriksaan MRI Nasopharynk', 0, 0, '', ''),
(130, '7', 'Melakukan pemeriksaan MRI Mouth', 0, 0, '', ''),
(131, '7', 'Melakukan pemeriksaan MRI Larynk', 0, 0, '', ''),
(132, '7', 'Melakukan pemeriksaan MRI Spine (Cervical, Thoracal , Lumbal)', 0, 0, '', ''),
(133, '7', 'Melakukan pemeriksaan MRI Knee Joint', 0, 0, '', ''),
(134, '7', 'Melakukan pemeriksaan MRI Ankle', 0, 0, '', ''),
(135, '7', 'Melakukan pemeriksaan MRI Shoulder', 0, 0, '', ''),
(136, '7', 'Melakukan pemeriksaan MRI Elbow', 0, 0, '', ''),
(137, '7', 'Melakukan pemeriksaan MRI Wrist Joint', 0, 0, '', ''),
(138, '7', 'Melakukan pemeriksaan MRI TMJ', 0, 0, '', ''),
(139, '7', 'Melakukan pemeriksaan MRI HIP Joint', 0, 0, '', ''),
(140, '7', 'Melakukan pemeriksaan MRI Ekstremity', 0, 0, '', ''),
(141, '7', 'Melakukan pemeriksaan MRI Upper Abdomen', 0, 0, '', ''),
(142, '7', 'Melakukan pemeriksaan MRI Pelvis', 0, 0, '', ''),
(143, '7', 'Melakukan pemeriksaan MRI Abdomen + Pelvis', 0, 0, '', ''),
(144, '7', 'Melakukan pemeriksaan MRI MRCP', 0, 0, '', ''),
(145, '7', 'Melakukan pemeriksaan MRA Kepala', 0, 0, '', ''),
(146, '7', 'Melakukan pemeriksaan MRA Cervical', 0, 0, '', ''),
(147, '7', 'Melakukan pemeriksaan MRA Thorax', 0, 0, '', ''),
(148, '7', 'Melakukan pemeriksaan MRA Abdomen', 0, 0, '', ''),
(149, '7', 'Melakukan pemeriksaan MRA Upper Ekstremity', 0, 0, '', ''),
(150, '7', 'Melakukan pemeriksaan MRA Lower Ekstremity', 0, 0, '', ''),
(151, '7', 'Melakukan pemeriksaan MRI Cardiac Rest Test', 0, 0, '', ''),
(152, '7', 'Melakukan pemeriksaan MRI Cardiac Stress Test', 0, 0, '', ''),
(153, '7', 'Melakukan pemeriksaan MR Perfusion', 0, 0, '', ''),
(154, '7', 'Melakukan pemeriksaan MRI Spectroscopy', 0, 0, '', ''),
(155, '7', 'Melakukan pemeriksaan MRI Diffusion Tensor Imaging / Tractografi', 0, 0, '', ''),
(156, '7', 'Melakukan pemeriksaan F-MRI', 0, 0, '', ''),
(157, '8', 'Melakukan pemeriksaan USG dengan Teknik B-Mode / 2D', 0, 0, '', ''),
(158, '8', 'Melakukan pemeriksaan USG dengan Teknik 3D / 4D', 0, 0, '', ''),
(159, '8', 'Melakukan pemeriksaan USG dengan Teknik Color Doppler', 0, 0, '', ''),
(160, '8', 'Melakukan pemeriksaan USG dengan Teknik M-Mode', 0, 0, '', ''),
(161, '8', 'Melakukan pemeriksaan USG dengan Teknik Elastoscan', 0, 0, '', ''),
(162, '8', 'Melakukan pemeriksaan USG dengan Teknik Multislice', 0, 0, '', ''),
(163, '8', 'Melakukan pemeriksaan USG dengan Teknik Panoramic', 0, 0, '', ''),
(164, '8', 'Melakukan pemeriksaan abdomen dewasa : Liver ', 0, 0, '', ''),
(165, '8', 'Melakukan pemeriksaan abdomen dewasa : Gallblader dan bile duct', 0, 0, '', ''),
(166, '8', 'Melakukan pemeriksaan abdomen dewasa : Pankreas', 0, 0, '', ''),
(167, '8', 'Melakukan pemeriksaan abdomen dewasa : Ginjal', 0, 0, '', ''),
(168, '8', 'Melakukan pemeriksaan abdomen dewasa : Kelenjar Adrenal', 0, 0, '', ''),
(169, '8', 'Melakukan pemeriksaan abdomen dewasa : Spleen', 0, 0, '', ''),
(170, '8', 'Melakukan pemeriksaan abdomen dewasa : Vesica Urinaria', 0, 0, '', ''),
(171, '8', 'Melakukan pemeriksaan abdomen dewasa : Prostat dan Vesica seminalis', 0, 0, '', ''),
(172, '8', 'Melakukan pemeriksaan gynecology : Uterus, Tuba Falopi, dan Ovarium', 0, 0, '', ''),
(173, '8', 'Melakukan pemeriksaan abdomen pediatric : Liver', 0, 0, '', ''),
(174, '8', 'Melakukan pemeriksaan abdomen pediatric : Gallblader dan bile duct', 0, 0, '', ''),
(175, '8', 'Melakukan pemeriksaan abdomen pediatric : Pankreas', 0, 0, '', ''),
(176, '8', 'Melakukan pemeriksaan abdomen pediatric : Ginjal ', 0, 0, '', ''),
(177, '8', 'Melakukan pemeriksaan abdomen pediatric : Spleen', 0, 0, '', ''),
(178, '8', 'Melakukan pemeriksaan abdomen pediatric : Vesica Urinaria', 0, 0, '', ''),
(179, '8', 'Melakukan pemeriksaan abdomen pediatric : Prostat dan Vesica seminalis', 0, 0, '', ''),
(180, '8', 'Melakukan pemeriksaan abdomen pediatric : Kepala (Trans Cranial)', 0, 0, '', ''),
(181, '8', 'Melakukan pemeriksaan kehamilan trimester I : Biometric Parameter', 0, 0, '', ''),
(182, '8', 'Melakukan pemeriksaan kehamilan trimester II dan III : Biometric Parameter, Amniotic fluid volume, Placenta.', 0, 0, '', ''),
(183, '8', 'Melakukan pemeriksaan kehamilan trimester I : Fetomaternal', 0, 0, '', ''),
(184, '8', 'Melakukan pemeriksaan kehamilan trimester II dan III : Fetomaternal', 0, 0, '', ''),
(185, '8', 'Melakukan pemeriksaan leher : Thyroid', 0, 0, '', ''),
(186, '8', 'Melakukan pemeriksaan leher : Parathyroid Gland', 0, 0, '', ''),
(187, '8', 'Melakukan pemeriksaan leher : Oesophagus proksimal', 0, 0, '', ''),
(188, '8', 'Melakukan pemeriksaan leher : Muscle', 0, 0, '', ''),
(189, '8', 'Melakukan pemeriksaan Thorax', 0, 0, '', ''),
(190, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Gaster, Distal Oesophagus, dan Proximal Duodenum', 0, 0, '', ''),
(191, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Small and large bowel', 0, 0, '', ''),
(192, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Appendix', 0, 0, '', ''),
(193, '8', 'Melakukan pemeriksaan scrotum : Testis, Epididimis', 0, 0, '', ''),
(194, '8', 'Melakukan pemeriksaan scrotum : Teknik color doppler', 0, 0, '', ''),
(195, '8', 'Melakukan pemeriksaan scrotum : Teknik elastoscan', 0, 0, '', ''),
(196, '8', 'Melakukan pemeriksaan vaskuler : Carotis', 0, 0, '', ''),
(197, '8', 'Melakukan pemeriksaan vaskuler : Vena Tungkai Bawah', 0, 0, '', ''),
(198, '8', 'Melakukan pemeriksaan vaskuler : Haemodialysis Access', 0, 0, '', ''),
(199, '8', 'Melakukan pemeriksaan vaskuler : Intra Abdomen dan Pelvis', 0, 0, '', ''),
(200, '8', 'Melakukan pemeriksaan payudara', 0, 0, '', ''),
(201, '8', 'Melakukan pemeriksaan kelenjar getah bening', 0, 0, '', ''),
(202, '8', 'Melakukan pemeriksaan jantung : dewasa', 0, 0, '', ''),
(203, '8', 'Melakukan pemeriksaan jantung : anak - anak', 0, 0, '', ''),
(204, '8', 'Melakukan pemeriksaan jantung : janin', 0, 0, '', ''),
(205, '8', 'Melakukan pemeriksaan musculoskeletal : Bahu', 0, 0, '', ''),
(206, '8', 'Melakukan pemeriksaan musculoskeletal : Wrist Join', 0, 0, '', ''),
(207, '8', 'Melakukan pemeriksaan musculoskeletal : Genu', 0, 0, '', ''),
(208, '8', 'Melakukan pemeriksaan musculoskeletal : Ankle Join', 0, 0, '', ''),
(209, '8', 'Melakukan pemeriksaan musculoskeletal : Hip Join', 0, 0, '', ''),
(210, '9', 'Melakukan Proteksi Radiasi dalam bidang Kedokteran Nuklir', 0, 0, '', ''),
(211, '9', 'Menangani Limbah Kedokteran Nuklir', 0, 0, '', ''),
(212, '9', 'Melakukan Penanganan Kontaminasi Radioaktif', 0, 0, '', ''),
(213, '9', 'Membuat Proses Elusi Generator Tc-99m', 0, 0, '', ''),
(214, '9', 'Penggunaan Radiofarmaka', 0, 0, '', ''),
(215, '9', 'Melakukan Daily cek Uniformity pada kamera gamma', 0, 0, '', ''),
(216, '9a', 'Melakukan Sidik Kelenjar Thyroid', 0, 0, '', ''),
(217, '9a', 'Melakukan Uptake Thyroid', 0, 0, '', ''),
(218, '9a', 'Melakukan Sidik Kelenjar Parathyroid dengan dual isotope', 0, 0, '', ''),
(219, '9b', 'Melakukan Sidik Perfusi Myocard', 0, 0, '', ''),
(220, '9b', 'Melakukan Sidik Jantung MUGA (Multy Gated)', 0, 0, '', ''),
(221, '9b', 'Melakukan Flebografi/Venografi', 0, 0, '', ''),
(222, '9c', 'Melakukan Ventilasi dan Inhalasi Paru', 0, 0, '', ''),
(223, '9c', 'Melakukan Perfusi Paru', 0, 0, '', ''),
(224, '9c', 'Melakukan Penentuan fungsi regional paru', 0, 0, '', ''),
(225, '9d', 'Melakukan Sidik Kelenjar Saliva', 0, 0, '', ''),
(226, '9d', 'Melakukan Waktu Transit Oesophagus', 0, 0, '', ''),
(227, '9d', 'Melakukan Lokalisasi Pendarahan Intestinal', 0, 0, '', ''),
(228, '9d', 'Melakukan Deteksi Diverkulum Meckels', 0, 0, '', ''),
(229, '9e', 'Melakukan Sidik Sistem Hepatobiliar', 0, 0, '', ''),
(230, '9e', 'Melakukan Liver Blood Pool Scan', 0, 0, '', ''),
(231, '9f', 'Melakukan Bone Scan (WB)', 0, 0, '', ''),
(232, '9f', 'Melakukan Bone Scan 3 Phase ', 0, 0, '', ''),
(233, '9f', 'Dinamik', 0, 0, '', ''),
(234, '9f', 'Serial Statik', 0, 0, '', ''),
(235, '9f', 'Sidik Seluruh Tubuh (WB)', 0, 0, '', ''),
(236, '9f', 'Melakukan Sidik Tulang dengan SPECT/SPECT-CT', 0, 0, '', ''),
(237, '9f', 'Melakukan Sidik Seluruh Tubuh (WB) Sestamibi', 0, 0, '', ''),
(238, '9f', 'Serial Statik', 0, 0, '', ''),
(239, '9f', 'SPECT/SPECT-CT', 0, 0, '', ''),
(240, '9f', 'Melakukan Sidik Seluruh Tubuh (WB) I131', 0, 0, '', ''),
(241, '9f', 'Melakukan Skintimamografi/Sidik Payudara', 0, 0, '', ''),
(242, '9f', 'Melakukan Deteksi Sentinel node', 0, 0, '', ''),
(243, '9g', 'Melakukan Dinamik ', 0, 0, '', ''),
(244, '9g', 'Melakukan Sidik Seluruh Tubuh (WB)', 0, 0, '', ''),
(245, '9g', 'Melakukan Serial Statik', 0, 0, '', ''),
(246, '9g', 'Melakukan SPECT/SPECT-CT Ethambutol', 0, 0, '', ''),
(247, '9h', 'Melakukan Renografi konvensional', 0, 0, '', ''),
(248, '9h', 'Melakukan Renografi Captopryl', 0, 0, '', ''),
(249, '9h', 'Melakukan Renografi diuresis', 0, 0, '', ''),
(250, '9h', 'Melakukan Laju Filtrasi Glomerulus/GFR', 0, 0, '', ''),
(251, '9h', 'Melakukan Sidik Ginjal', 0, 0, '', ''),
(252, '9h', 'Melakukan Cystografi', 0, 0, '', ''),
(253, '9i', 'Melakukan Pelayanan PET untuk Onkologi', 0, 0, '', ''),
(254, '9i', 'Melakukan Pelayanan PET untuk Cardiology', 0, 0, '', ''),
(255, '9j', 'Melakukan Sidik Otak secara SPECT/SPECT-CT', 0, 0, '', ''),
(256, '9j', 'Melakukan Dakriosistografi', 0, 0, '', ''),
(257, '9j', 'Melakukan Limfoskintigrafi', 0, 0, '', ''),
(258, '9j', 'Melakukan Sidik Testis', 0, 0, '', ''),
(259, '10kmr', 'Membuat Masker Fiksasi', 0, 0, '', ''),
(260, '10kmr', 'Melakukan Pencetakan Block Individual', 0, 0, '', ''),
(261, '10kmr', 'Melakukan Pencetakan Block Standar', 0, 0, '', ''),
(262, '10kmr', 'Melakukan Pencetakan Frame Khusus Lapangan Elektron', 0, 0, '', ''),
(263, '10kmr', 'Membuat  Alat Bantu Inovatif', 0, 0, '', ''),
(264, '10kmr', 'Membuat Kompensator Bolus Lunak', 0, 0, '', ''),
(265, '10kmr', 'Membuat Kompensator Bolus Keras', 0, 0, '', ''),
(266, '10kmr', 'Membuat Kontur Tubuh Pasien Untuk Kalkulasi Dosis', 0, 0, '', ''),
(267, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Lapangan langsung', 0, 0, '', ''),
(268, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Plan Pararel ', 0, 0, '', ''),
(269, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Isocenter (SAD)', 0, 0, '', ''),
(270, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Tangensial', 0, 0, '', ''),
(271, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Lapangan Axial', 0, 0, '', ''),
(272, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Lapangan Loko-regional', 0, 0, '', ''),
(273, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Non Co-plannar', 0, 0, '', ''),
(274, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Cranio-spinal', 0, 0, '', ''),
(275, '10smltr', 'Melakukan Simulasi Verifikasi merujuk pada hasil analisis Digital Reconstruction Radiography (DRR) Planning Penyinaran Radiasi Eksterna', 0, 0, '', ''),
(276, '10smltr', 'Melakukan tindakan radiografi untuk perencanaan Brachyterapi', 0, 0, '', ''),
(277, '10cts', 'Melakukan perencanaan radioterapi menggunakan CT Scan Tanpa Kontras', 0, 0, '', ''),
(278, '10cts', 'Melakukan perencanaan radioterapi menggunakan CT Scan dengan Kontras', 0, 0, '', ''),
(279, '10cts', 'Melakukan Pengiriman Data CT Kontur Tubuh Axial', 0, 0, '', ''),
(280, '10re', 'Mengoperasikan Pesawat Radiasi Eksterna', 0, 0, '', ''),
(281, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna satu Lapangan', 0, 0, '', ''),
(282, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna 2D', 0, 0, '', ''),
(283, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna Multiple Planned Fields', 0, 0, '', ''),
(284, '10re', 'Melakukan Penyinaran dengan Modalitas Teknik Gamma Knife', 0, 0, '', ''),
(285, '10re', 'Melakukan Melakukan Penyinaran dengan Modalitas Teknik Tomotheraphy', 0, 0, '', ''),
(286, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna Total Body Irradiation (TBI)', 0, 0, '', ''),
(287, '10mvre', 'Melakukan Verifikasi dan analisa Lapangan Radiasi Dengan Portal Film ', 0, 0, '', ''),
(288, '10mvre', 'Melakukan Verifikasi dan Analisa Set up Penyinaran Radiasi Eksterna Dengan Perangkat EPID/OB', 0, 0, '', ''),
(289, '10mvre', 'Melakukan Verifikasi Set up Penyinaran Radiasi Eksterna Dengan Perangkat Cone Beam', 0, 0, '', ''),
(290, '10mvre', 'Melakukan Analisis Data Verifikasi Lapangan Penyinaran Berdasarkan radiograf Gammagrafi / EPID / OBI / Cone Beam CT', 0, 0, '', ''),
(291, '10brkt', 'Melakukan Radiografi Brachyterapi dengan Pesawat C-Arm', 0, 0, '', ''),
(292, '10brkt', 'Melakukan Brakiterapi Intracaviter', 0, 0, '', ''),
(293, '10brkt', 'Melakukan Brakiterapi Intraluminal', 0, 0, '', ''),
(294, '10brkt', 'Melakukan Brakiterapi Interstitial', 0, 0, '', ''),
(295, '10tps2', 'Melakukan Penghitungan Manual Dosis Monitor Unit / Treatment Time Lapangan Radiasi Eksterna', 0, 0, '', ''),
(296, '10tps2', 'Melakukan Penghitungan Dosis Monitor Unit / Treatment Time Penyinaran', 0, 0, '', ''),
(297, '10crh', 'Melakukan Warming Up Pesawat Terapi', 0, 0, '', ''),
(298, '10crh', 'Melakukan Cek Laser (Ruang Linac/Cobalt/Simulator/CT simulator)', 0, 0, '', ''),
(299, '10crh', 'Melakukan Cek Lapangan Penyinaran', 0, 0, '', ''),
(300, '10crh', 'Melakukan Cek Optical Distance Indicator (ODI)', 0, 0, '', ''),
(301, '10crh', 'Melakukan Cek Collimator', 0, 0, '', ''),
(302, '10crh', 'Melakukan Cek Multileaf Collimator (MLC)', 0, 0, '', ''),
(303, '10crh', 'Melakukan Cek Emergency Stop', 0, 0, '', ''),
(304, '10crh', 'Melakukan Cek Door Safety', 0, 0, '', ''),
(305, '10crh', 'Melakukan Cek CCTV', 0, 0, '', ''),
(306, '10crh', 'Melakukan Cek Interkom', 0, 0, '', ''),
(307, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Setiap Teknik Penyinaran', 0, 0, '', ''),
(308, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Pekerja Radiasi Dan Masyarakat', 0, 0, '', ''),
(309, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Lingkungan Sekitar', 0, 0, '', ''),
(310, '10ikkk', 'Mengimplementasikan Keselamatan Pasien', 0, 0, '', ''),
(311, '10mnjl', 'Menyusun Standar Prosedur Operasional (SPO) untuk setiap teknik penyinaran yang dilakukan', 0, 0, '', ''),
(312, '10mnjl', 'Melaksanakan pengelolaan pelayanan Radioterapi', 0, 0, '', ''),
(313, '10mnjl', 'Melaksanakan Sistem Manajemen Keselamatan dan Proteksi Radiasi Terhadap Pekerja dan Lingkungan', 0, 0, '', ''),
(314, '10mnjl', 'Melaksanakan Sistem Manajemen Jaminan Kualitas dan Kendali Kualitas (QA/QC) Radioterapi dalam Tim', 0, 0, '', ''),
(315, '11', 'Menyiapkan media kontras dengan / tanpa injektor', 0, 0, '', ''),
(316, '11', 'Menyiapkan pesawat C arm dan penunjang pemeriksaan', 0, 0, '', ''),
(317, '11', 'Melakukan Pemeriksaan angiografi ektremitas atas', 0, 0, '', ''),
(318, '11', 'Melakukan Pemeriksaan angiografi ektrimitas bawah', 0, 0, '', ''),
(319, '11', 'Melakukan Pemeriksaan angiografi carotis / Vertebralis', 0, 0, '', ''),
(320, '11', 'Melakukan pemeriksaan angiografi aorta', 0, 0, '', ''),
(321, '11', 'Melakukan pemeriksaan angiografi selektif (a. Renalis, a.Hepatika,a.mesenterica)', 0, 0, '', ''),
(322, '11', 'Melakukan pemeriksaan angiografi dengan DSA (Digital Subtraction Angiografi)', 0, 0, '', ''),
(323, '11', 'Melakukan pemeriksaan angiografi 3 dimensi (3D RA) a, cerebral', 0, 0, '', ''),
(324, '11', 'Melakukan pemeriksaan angiografi dalam tindakan anuerisma coiling', 0, 0, '', ''),
(325, '11', 'Melakukan pemeriksaan angiografi dalam tindakan  cerebral AVM embolisasi', 0, 0, '', ''),
(326, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan CCF (Carotid cavernous fistula) embolisasi', 0, 0, '', ''),
(327, '11', 'Melakukan pemeriksaan angiografi dalam tindakan embolisasi preoperative ( Meningioma dll)', 0, 0, '', ''),
(328, '11', 'Melakukan pemeriksaan Angiografi dalam tindakan thrombolis pada embolic stroke infarction', 0, 0, '', ''),
(329, '11', 'Melakukan pemeriksaan Angiografi dalam tindakan stenting cerebral stenosis', 0, 0, '', ''),
(330, '11', 'Melakukan pemeriksaan angiografi  pada tindakan stenting gastro intestinal (colon/oesafagus/duedenum)', 0, 0, '', ''),
(331, '11', 'Melakukan pemeriksaan angiografi  pada tindakan stenting saluran bilier (PTCD/PTBD)', 0, 0, '', ''),
(332, '11', 'Melakukan pemeriksaan angiografi  pada tindakan embolisasi gastrointestinal (GI Beeding/Epistaxis/post partum bleeding)', 0, 0, '', ''),
(333, '11', 'Melakukan pemeriksaan angiografi  pada tindakan embolisasi ruptur hepar/ lien', 0, 0, '', ''),
(334, '11', 'Melakukan pemeriksaan angiografi dalam tindakan pemasukan obat kemoterapi (TACE/TACI)', 0, 0, '', ''),
(335, '11', 'Melakukan pemeriksaan  angiografi dalam tindakan pemasukan obat kemoterapi (TACE/TACI)', 0, 0, '', ''),
(336, '11', 'Melakukan pemeriksaan angiografi dalam tindakan balon angioplasty  periperal', 0, 0, '', ''),
(337, '11', 'Melakukan pemeriksaan angiografi dalam tindakan stenting  periperal', 0, 0, '', ''),
(338, '11', 'Melakukan pemeriksaan angiografi dalam tindakan embolisasi periperal .testicular, ovarium dan elvic varises', 0, 0, '', ''),
(339, '11', 'Melakukan pemeriksaan angiografi pada pemasangan filter pada vena cava inferior', 0, 0, '', ''),
(340, '11', 'Melakukan pemeriksaan Plebografi (Venografi)', 0, 0, '', ''),
(341, '11', 'Melakukan Pemeriksaan angiografi Koroner', 0, 0, '', ''),
(342, '11', 'Melakukan Pemeriksaan Angiografi Pulmonal arteri', 0, 0, '', ''),
(343, '11', 'Melakukan Pemeriksaan  angiografi Ventrikel Kanan/kiri', 0, 0, '', ''),
(344, '11', 'Melakukan pemeriksaan Penyadapan  jantung kanan', 0, 0, '', ''),
(345, '11', 'Melakukan pemeriksaan dalam tindakan pemasangan IABP', 0, 0, '', ''),
(346, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan pemasangan stent di pembuluh darah coroner', 0, 0, '', ''),
(347, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan pemasangan stent di AORTA', 0, 0, '', ''),
(348, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan PDA (ADO)', 0, 0, '', ''),
(349, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan ASD (ASO)', 0, 0, '', ''),
(350, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan VSD (AVO)', 0, 0, '', ''),
(351, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan LAA', 0, 0, '', ''),
(352, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan baloninsasi pada katup mitral stenosis (BMV)', 0, 0, '', ''),
(353, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan baloninsasi pada arteri  pulmonal stenosis (PTBV)', 0, 0, '', ''),
(354, '11', 'Melakukan pemeriksaan dalam  tindakan pemasangan Temporer Pacemaker', 0, 0, '', ''),
(355, '11', 'Melakukan pemeriksaan dalam  tindakan pemasangan Permanent  Pacemaker', 0, 0, '', ''),
(356, '11', 'Melakukan pemeriksan dalam tindakan elektrophisiologi study (EPI)', 0, 0, '', ''),
(357, '11', 'Melakukan pemeriksan dalam tindakan Ablasi Aritmia jantung (ABLASI)', 0, 0, '', ''),
(358, '11', 'Menyiapkan media kontras dengan / tanpa injektor', 0, 0, '', ''),
(359, '11', 'Menyiapkan pesawat C arm dan penunjang pemeriksaan', 0, 0, '', ''),
(360, '12', 'Quality contral Mammografi', 0, 0, '', ''),
(361, '12', 'Quality control  CT Scan', 0, 0, '', ''),
(362, '12', 'Quality control MRI : PIQT', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perawatan`
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
-- Dumping data untuk tabel `perawatan`
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
('PRW-0025', 'BRG-0004', 'Yosep Andrian', '2021-11-26', 'Aman', 'butuh perawatan'),
('PRW-0026', 'BRG-0004', 'Yosep Andrian', '2023-04-14', 'Perlu Diperbaiki', 'Fotocopy teroos euy'),
('PRW-0027', 'BRG-0006', 'Yosep Andrian', '2023-04-14', 'Perlu Diperbaiki', 'rusak'),
('PRW-0028', 'BRG-0003', 'Yosep Andrian', '2020-04-14', 'Perlu Diperbaiki', 'Fotocopy teroos');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbaikan`
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
-- Dumping data untuk tabel `perbaikan`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
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
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indeks untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`kode_perawatan`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indeks untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`kode_perbaikan`),
  ADD UNIQUE KEY `kode_perawatan` (`kode_perawatan`),
  ADD KEY `kode_barangprb` (`kode_barangprb`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perawatan`
--
ALTER TABLE `perawatan`
  ADD CONSTRAINT `perawatan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_2` FOREIGN KEY (`kode_perawatan`) REFERENCES `perawatan` (`kode_perawatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perbaikan_ibfk_3` FOREIGN KEY (`kode_barangprb`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
