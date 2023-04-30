-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 11:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kb` int(10) NOT NULL,
  `bagian` varchar(255) NOT NULL,
  `kompetensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kb`, `bagian`, `kompetensi`) VALUES
(1, 'b1', 'Melakukan pemeriksaan Radiografi Cranium'),
(2, 'b1', 'Melakukan  pemeriksaan Radografi Sella Tursica'),
(3, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Cervical'),
(4, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Thoracal / Thoracolumbal'),
(5, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Lumbal / Lumbosacral'),
(6, 'b1', 'Melakukan pemeriksaan Radiografi Vertebrae Sacral / Coccyx'),
(7, 'b1', 'Melakukan pemeriksaan Radiografi Scoliosis Program & Kontrol'),
(8, 'b1', 'Melakukan pemeriksaan Radiografi Thorax AP/PA, Lateral'),
(9, 'b1', 'Melakukan pemeriksaan Radiografi Top Lordotik'),
(10, 'b1', 'Melakukan pemeriksaan Radiografi Sternum Costae'),
(11, 'b1', 'Melakukan pemeriksaan Radiografi Plain Abdominal (BNO)'),
(12, 'b1', 'Melakukan pemeriksaan Radiografi Abdomen 3 Posisi'),
(13, 'b1', 'Melakukan pemeriksaan Radiografi Pelvis AP, Lateral, Oblique'),
(14, 'b1', 'Melakukan pemeriksaan Radiografi Frog Lateral'),
(15, 'b1', 'Melakukan pemeriksaan Radiografi Sacro Illiaca Joint (Sacroiliac joints)'),
(16, 'b1', 'Melakukan pemeriksaan Radiografi Orbita'),
(17, 'b1', 'Melakukan pemeriksaan Radiografi Foramen Opticum'),
(18, 'b1', 'Melakukan pemeriksaan Radiografi Nasal Bone'),
(19, 'b1', 'Melakukan pemeriksaan Radiografi Sinus Paranasal'),
(20, 'b1', 'Melakukan pemeriksaan Radiografi Mastoid'),
(21, 'b1', 'Melakukan pemeriksaan Radiografi Os Petrosum'),
(22, 'b1', 'Melakukan pemeriksaan Radiografi Zygomaticum'),
(23, 'b1', 'Melakukan pemeriksaan Radiografi Maxilla / Mandibulla'),
(24, 'b1', 'Melakukan pemeriksaan Radiografi Temporomandibular Joint (TMJ)'),
(25, 'b1', 'Melakukan pemeriksaan Radiografi Panoramic & Cephalometery'),
(26, 'b1', 'Melakukan pemeriksaan Radiografi Bone Age'),
(27, 'b1', 'Melakukan pemeriksaan Radiografi Bone Survey'),
(28, 'b1', 'Melakukan pemeriksaan Radiografi Digiti / Manus'),
(29, 'b1', 'Melakukan pemeriksaan Radiografi Wrist Joint'),
(30, 'b1', 'Melakukan pemeriksaan Radiografi Antebrahi'),
(31, 'b1', 'Melakukan pemeriksaan Radiografi Humerus'),
(32, 'b1', 'Melakukan pemeriksaan Radiografi Elbow Joint'),
(33, 'b1', 'Melakukan pemeriksaan Radiografi Shoulder Joint'),
(34, 'b1', 'Melakukan pemeriksaan Radiografi Clavicula'),
(35, 'b1', 'Melakukan pemeriksaan  Radiografi Scapula'),
(36, 'b1', 'Melakukan pemeriksaan Radiografi Femur'),
(37, 'b1', 'Melakukan pemeriksaan Radiografi Knee Joint'),
(38, 'b1', 'Melakukan pemeriksaan Radiografi Genu Sunrise'),
(39, 'b1', 'Melakukan pemeriksaan Radiografi Cruris'),
(40, 'b1', 'Melakukan pemeriksaan Radiografi Pedis / Digiti'),
(41, 'b1', 'Melakukan pemeriksaan Radiografi Ankle Joint'),
(42, 'b1', 'Melakukan pemeriksaan Radiografi Mammography'),
(43, '2', 'Melakukan pemeriksaan Radiografi Sialografi'),
(44, '2', 'Melakukan pemeriksaan Radiografi Esophaggraphy'),
(45, '2', 'Melakukan pemeriksaan Radiografi MD (Maag Duodenum)'),
(46, '2', 'Melakukan pemeriksaan Radiografi OMD (Oesophagography Maagduodenum)'),
(47, '2', 'Melakukan pemeriksaan Radiografi Follow Through'),
(48, '2', 'Melakukan pemeriksaan Radiografi Appendicogram'),
(49, '2', 'Melakukan pemeriksaan Radiografi Colon In Loop'),
(50, '2', 'Melakukan pemeriksaan Radiografi T- Tube'),
(51, '2', 'Melakukan pemeriksaan Radiografi P.T.C'),
(52, '2', 'Melakukan pemeriksaan Radiografi ERCP'),
(53, '2', 'Melakukan pemeriksaan Radiografi BNO- IVP'),
(54, '2', 'Melakukan pemeriksaan Radiografi Cystography'),
(55, '2', 'Melakukan pemeriksaan Radiografi Retrograde Urethrocystography'),
(56, '2', 'Melakukan pemeriksaan Radiografi Retrograde Pyelography'),
(57, '2', 'Melakukan pemeriksaan Radiografi M.C.U (Micurating Cysctography)'),
(58, '2', 'Melakukan pemeriksaan Radiografi H.S.G (Hysterosalphyngography)'),
(59, '2', 'Melakukan pemeriksaan Radiografi Myelography'),
(60, '2', 'Melakukan pemeriksaan Radiografi Fistulography'),
(61, '2', 'Melakukan pemeriksaan Radiografi Phlebography'),
(62, '2', 'Melakukan pemeriksaan Radiografi Ductulography'),
(63, '3', 'Melakukan Proses pada CR'),
(64, '3', 'Melakukan Proses Print Film'),
(65, '3', 'Melakukan Burn CD'),
(66, '4', 'Melakukan pemeriksaan CT Scan Brain'),
(67, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Cervical& 3D'),
(68, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Thoracal& 3D'),
(69, '4', 'Melakukan pemeriksaan CT Scan Vertebrae Lumbal& 3D'),
(70, '4', 'Melakukan pemeriksaan CT Scan Pelvis & 3D'),
(71, '4', 'Melakukan pemeriksaan CT Scan Sinus Paranasal'),
(72, '4', 'Melakukan pemeriksaan CT Scan Mastoid'),
(73, '4', 'Melakukan pemeriksaan CT Scan Maxilla / Mandibulla'),
(74, '4', 'Melakukan pemeriksaan CT Scan Ekstremity'),
(75, '4', 'Melakukan pemeriksaan CT Scan Thorax'),
(76, '4', 'Melakukan pemeriksaan CT Scan Upper Abdomen'),
(77, '4', 'Melakukan pemeriksaan CT Scan Lower Abdomen'),
(78, '4', 'Melakukan pemeriksaan CT Scan Whole Abdomen'),
(79, '4', 'Melakukan pemeriksaan CT Scan Calcium Score'),
(80, '5', 'Melakukan pemeriksaan CT Scan Brain'),
(81, '5', 'Melakukan pemeriksaan CT Scan Nasopharynk'),
(82, '5', 'Melakukan pemeriksaan CT Scan Larynk'),
(83, '5', '\r\nMelakukan pemeriksaan CT Scan Orbita'),
(84, '5', 'Melakukan pemeriksaan CT Scan Pelvis'),
(85, '5', 'Melakukan pemeriksaan CT Scan Sinus Paranasal'),
(86, '5', 'Melakukan pemeriksaan CT Scan Mastoid'),
(87, '5', 'Melakukan pemeriksaan CT Scan Maxilla / Mandibulla'),
(88, '5', 'Melakukan pemeriksaan CT Scan Ekstremity'),
(89, '5', 'Melakukan pemeriksaan CT Scan Thorax'),
(90, '5', 'Melakukan pemeriksaan CT Scan Upper Abdomen 3 Phase'),
(91, '5', 'Melakukan pemeriksaan CT Scan Lower Abdomen'),
(92, '5', 'Melakukan pemeriksaan CT Scan Whole Abdomen'),
(93, '5', 'Melakukan pemeriksaan CT Scan Myelography'),
(94, '5', 'Melakukan pemeriksaan CT Scan Angiography Coroner'),
(95, '5', 'Melakukan pemeriksaan CT Scan Angiography Circullus Willisi'),
(96, '5', 'Melakukan pemeriksaan CT Scan Angiography Carotis'),
(97, '5', 'Melakukan pemeriksaan CT Scan Angiography Thoracal'),
(98, '5', 'Melakukan pemeriksaan CT Scan Angiography Abdominal (Aorta, Renalis, Mesentric)'),
(99, '5', 'Melakukan pemeriksaan CT Scan Angiography Ekstremity Bawah (Femur & Lower Leg)'),
(100, '5', 'Melakukan pemeriksaan CT Scan Angiography Ekstremitas Atas'),
(101, '6', 'Melakukan pemeriksaan MRI Kepala'),
(102, '6', 'Melakukan pemeriksaan MRI & MRA Kepala'),
(103, '6', 'Melakukan pemeriksaan MRI Vestibulocochlear Organ'),
(104, '6', 'Melakukan pemeriksaan MRI Nasopharynk'),
(105, '6', 'Melakukan pemeriksaan MRI Mouth'),
(106, '6', 'Melakukan pemeriksaan MRI Larynk'),
(107, '6', 'Melakukan pemeriksaan MRI Spine (Cervical, Thoracal , Lumbal)'),
(108, '6', 'Melakukan pemeriksaan MRI Knee Joint'),
(109, '6', 'Melakukan pemeriksaan MRI Ankle'),
(110, '6', 'Melakukan pemeriksaan MRI Shoulder '),
(111, '6', 'Melakukan pemeriksaan MRI Elbow'),
(112, '6', 'Melakukan pemeriksaan MRI Wrist Joint'),
(113, '6', 'Melakukan pemeriksaan MRI TMJ'),
(114, '6', 'Melakukan pemeriksaan MRI HIP Joint'),
(115, '6', 'Melakukan pemeriksaan MRI Ekstremity'),
(116, '6', 'Melakukan pemeriksaan MRI Upper Abdomen'),
(117, '6', 'Melakukan pemeriksaan MRI Pelvis'),
(118, '6', 'Melakukan pemeriksaan MRI Abdomen + Pelvis'),
(119, '6', 'Melakukan pemeriksaan MRI MRCP'),
(120, '6', 'Melakukan pemeriksaan MRA Kepala'),
(121, '6', 'Melakukan pemeriksaan MRA Cervical'),
(122, '6', 'Melakukan pemeriksaan MRA Thorax'),
(123, '6', 'Melakukan pemeriksaan MRA Abdomen'),
(124, '6', 'Melakukan pemeriksaan MRA Upper Ekstremity'),
(125, '6', 'Melakukan pemeriksaan MRA Lower Ekstremity'),
(126, '7', 'Melakukan pemeriksaan MRI Kepala'),
(127, '7', 'Melakukan pemeriksaan MRI & MRA Kepala'),
(128, '7', 'Melakukan pemeriksaan MRI Vestibulocochlear Organ'),
(129, '7', 'Melakukan pemeriksaan MRI Nasopharynk'),
(130, '7', 'Melakukan pemeriksaan MRI Mouth'),
(131, '7', 'Melakukan pemeriksaan MRI Larynk'),
(132, '7', 'Melakukan pemeriksaan MRI Spine (Cervical, Thoracal , Lumbal)'),
(133, '7', 'Melakukan pemeriksaan MRI Knee Joint'),
(134, '7', 'Melakukan pemeriksaan MRI Ankle'),
(135, '7', 'Melakukan pemeriksaan MRI Shoulder'),
(136, '7', 'Melakukan pemeriksaan MRI Elbow'),
(137, '7', 'Melakukan pemeriksaan MRI Wrist Joint'),
(138, '7', 'Melakukan pemeriksaan MRI TMJ'),
(139, '7', 'Melakukan pemeriksaan MRI HIP Joint'),
(140, '7', 'Melakukan pemeriksaan MRI Ekstremity'),
(141, '7', 'Melakukan pemeriksaan MRI Upper Abdomen'),
(142, '7', 'Melakukan pemeriksaan MRI Pelvis'),
(143, '7', 'Melakukan pemeriksaan MRI Abdomen + Pelvis'),
(144, '7', 'Melakukan pemeriksaan MRI MRCP'),
(145, '7', 'Melakukan pemeriksaan MRA Kepala'),
(146, '7', 'Melakukan pemeriksaan MRA Cervical'),
(147, '7', 'Melakukan pemeriksaan MRA Thorax'),
(148, '7', 'Melakukan pemeriksaan MRA Abdomen'),
(149, '7', 'Melakukan pemeriksaan MRA Upper Ekstremity'),
(150, '7', 'Melakukan pemeriksaan MRA Lower Ekstremity'),
(151, '7', 'Melakukan pemeriksaan MRI Cardiac Rest Test'),
(152, '7', 'Melakukan pemeriksaan MRI Cardiac Stress Test'),
(153, '7', 'Melakukan pemeriksaan MR Perfusion'),
(154, '7', 'Melakukan pemeriksaan MRI Spectroscopy'),
(155, '7', 'Melakukan pemeriksaan MRI Diffusion Tensor Imaging / Tractografi'),
(156, '7', 'Melakukan pemeriksaan F-MRI'),
(157, '8', 'Melakukan pemeriksaan USG dengan Teknik B-Mode / 2D'),
(158, '8', 'Melakukan pemeriksaan USG dengan Teknik 3D / 4D'),
(159, '8', 'Melakukan pemeriksaan USG dengan Teknik Color Doppler'),
(160, '8', 'Melakukan pemeriksaan USG dengan Teknik M-Mode'),
(161, '8', 'Melakukan pemeriksaan USG dengan Teknik Elastoscan'),
(162, '8', 'Melakukan pemeriksaan USG dengan Teknik Multislice'),
(163, '8', 'Melakukan pemeriksaan USG dengan Teknik Panoramic'),
(164, '8', 'Melakukan pemeriksaan abdomen dewasa : Liver '),
(165, '8', 'Melakukan pemeriksaan abdomen dewasa : Gallblader dan bile duct'),
(166, '8', 'Melakukan pemeriksaan abdomen dewasa : Pankreas'),
(167, '8', 'Melakukan pemeriksaan abdomen dewasa : Ginjal'),
(168, '8', 'Melakukan pemeriksaan abdomen dewasa : Kelenjar Adrenal'),
(169, '8', 'Melakukan pemeriksaan abdomen dewasa : Spleen'),
(170, '8', 'Melakukan pemeriksaan abdomen dewasa : Vesica Urinaria'),
(171, '8', 'Melakukan pemeriksaan abdomen dewasa : Prostat dan Vesica seminalis'),
(172, '8', 'Melakukan pemeriksaan gynecology : Uterus, Tuba Falopi, dan Ovarium'),
(173, '8', 'Melakukan pemeriksaan abdomen pediatric : Liver'),
(174, '8', 'Melakukan pemeriksaan abdomen pediatric : Gallblader dan bile duct'),
(175, '8', 'Melakukan pemeriksaan abdomen pediatric : Pankreas'),
(176, '8', 'Melakukan pemeriksaan abdomen pediatric : Ginjal '),
(177, '8', 'Melakukan pemeriksaan abdomen pediatric : Spleen'),
(178, '8', 'Melakukan pemeriksaan abdomen pediatric : Vesica Urinaria'),
(179, '8', 'Melakukan pemeriksaan abdomen pediatric : Prostat dan Vesica seminalis'),
(180, '8', 'Melakukan pemeriksaan abdomen pediatric : Kepala (Trans Cranial)'),
(181, '8', 'Melakukan pemeriksaan kehamilan trimester I : Biometric Parameter'),
(182, '8', 'Melakukan pemeriksaan kehamilan trimester II dan III : Biometric Parameter, Amniotic fluid volume, Placenta.'),
(183, '8', 'Melakukan pemeriksaan kehamilan trimester I : Fetomaternal'),
(184, '8', 'Melakukan pemeriksaan kehamilan trimester II dan III : Fetomaternal'),
(185, '8', 'Melakukan pemeriksaan leher : Thyroid'),
(186, '8', 'Melakukan pemeriksaan leher : Parathyroid Gland'),
(187, '8', 'Melakukan pemeriksaan leher : Oesophagus proksimal'),
(188, '8', 'Melakukan pemeriksaan leher : Muscle'),
(189, '8', 'Melakukan pemeriksaan Thorax'),
(190, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Gaster, Distal Oesophagus, dan Proximal Duodenum'),
(191, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Small and large bowel'),
(192, '8', 'Melakukan pemeriksaan sistem saluran pencernaan ; Appendix'),
(193, '8', 'Melakukan pemeriksaan scrotum : Testis, Epididimis'),
(194, '8', 'Melakukan pemeriksaan scrotum : Teknik color doppler'),
(195, '8', 'Melakukan pemeriksaan scrotum : Teknik elastoscan'),
(196, '8', 'Melakukan pemeriksaan vaskuler : Carotis'),
(197, '8', 'Melakukan pemeriksaan vaskuler : Vena Tungkai Bawah'),
(198, '8', 'Melakukan pemeriksaan vaskuler : Haemodialysis Access'),
(199, '8', 'Melakukan pemeriksaan vaskuler : Intra Abdomen dan Pelvis'),
(200, '8', 'Melakukan pemeriksaan payudara'),
(201, '8', 'Melakukan pemeriksaan kelenjar getah bening'),
(202, '8', 'Melakukan pemeriksaan jantung : dewasa'),
(203, '8', 'Melakukan pemeriksaan jantung : anak - anak'),
(204, '8', 'Melakukan pemeriksaan jantung : janin'),
(205, '8', 'Melakukan pemeriksaan musculoskeletal : Bahu'),
(206, '8', 'Melakukan pemeriksaan musculoskeletal : Wrist Join'),
(207, '8', 'Melakukan pemeriksaan musculoskeletal : Genu'),
(208, '8', 'Melakukan pemeriksaan musculoskeletal : Ankle Join'),
(209, '8', 'Melakukan pemeriksaan musculoskeletal : Hip Join'),
(210, '9', 'Melakukan Proteksi Radiasi dalam bidang Kedokteran Nuklir'),
(211, '9', 'Menangani Limbah Kedokteran Nuklir'),
(212, '9', 'Melakukan Penanganan Kontaminasi Radioaktif'),
(213, '9', 'Membuat Proses Elusi Generator Tc-99m'),
(214, '9', 'Penggunaan Radiofarmaka'),
(215, '9', 'Melakukan Daily cek Uniformity pada kamera gamma'),
(216, '9a', 'Melakukan Sidik Kelenjar Thyroid'),
(217, '9a', 'Melakukan Uptake Thyroid'),
(218, '9a', 'Melakukan Sidik Kelenjar Parathyroid dengan dual isotope'),
(219, '9b', 'Melakukan Sidik Perfusi Myocard'),
(220, '9b', 'Melakukan Sidik Jantung MUGA (Multy Gated)'),
(221, '9b', 'Melakukan Flebografi/Venografi'),
(222, '9c', 'Melakukan Ventilasi dan Inhalasi Paru'),
(223, '9c', 'Melakukan Perfusi Paru'),
(224, '9c', 'Melakukan Penentuan fungsi regional paru'),
(225, '9d', 'Melakukan Sidik Kelenjar Saliva'),
(226, '9d', 'Melakukan Waktu Transit Oesophagus'),
(227, '9d', 'Melakukan Lokalisasi Pendarahan Intestinal'),
(228, '9d', 'Melakukan Deteksi Diverkulum Meckels'),
(229, '9e', 'Melakukan Sidik Sistem Hepatobiliar'),
(230, '9e', 'Melakukan Liver Blood Pool Scan'),
(231, '9f', 'Melakukan Bone Scan (WB)'),
(232, '9f', 'Melakukan Bone Scan 3 Phase '),
(233, '9f', 'Dinamik'),
(234, '9f', 'Serial Statik'),
(235, '9f', 'Sidik Seluruh Tubuh (WB)'),
(236, '9f', 'Melakukan Sidik Tulang dengan SPECT/SPECT-CT'),
(237, '9f', 'Melakukan Sidik Seluruh Tubuh (WB) Sestamibi'),
(238, '9f', 'Serial Statik'),
(239, '9f', 'SPECT/SPECT-CT'),
(240, '9f', 'Melakukan Sidik Seluruh Tubuh (WB) I131'),
(241, '9f', 'Melakukan Skintimamografi/Sidik Payudara'),
(242, '9f', 'Melakukan Deteksi Sentinel node'),
(243, '9g', 'Melakukan Dinamik '),
(244, '9g', 'Melakukan Sidik Seluruh Tubuh (WB)'),
(245, '9g', 'Melakukan Serial Statik'),
(246, '9g', 'Melakukan SPECT/SPECT-CT Ethambutol'),
(247, '9h', 'Melakukan Renografi konvensional'),
(248, '9h', 'Melakukan Renografi Captopryl'),
(249, '9h', 'Melakukan Renografi diuresis'),
(250, '9h', 'Melakukan Laju Filtrasi Glomerulus/GFR'),
(251, '9h', 'Melakukan Sidik Ginjal'),
(252, '9h', 'Melakukan Cystografi'),
(253, '9i', 'Melakukan Pelayanan PET untuk Onkologi'),
(254, '9i', 'Melakukan Pelayanan PET untuk Cardiology'),
(255, '9j', 'Melakukan Sidik Otak secara SPECT/SPECT-CT'),
(256, '9j', 'Melakukan Dakriosistografi'),
(257, '9j', 'Melakukan Limfoskintigrafi'),
(258, '9j', 'Melakukan Sidik Testis'),
(259, '10kmr', 'Membuat Masker Fiksasi'),
(260, '10kmr', 'Melakukan Pencetakan Block Individual'),
(261, '10kmr', 'Melakukan Pencetakan Block Standar'),
(262, '10kmr', 'Melakukan Pencetakan Frame Khusus Lapangan Elektron'),
(263, '10kmr', 'Membuat  Alat Bantu Inovatif'),
(264, '10kmr', 'Membuat Kompensator Bolus Lunak'),
(265, '10kmr', 'Membuat Kompensator Bolus Keras'),
(266, '10kmr', 'Membuat Kontur Tubuh Pasien Untuk Kalkulasi Dosis'),
(267, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Lapangan langsung'),
(268, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Plan Pararel '),
(269, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Isocenter (SAD)'),
(270, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Tangensial'),
(271, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Lapangan Axial'),
(272, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Lapangan Loko-regional'),
(273, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Teknik Non Co-plannar'),
(274, '10smltr', 'Melakukan Simulasi Penyinaran Radiasi Eksterna Cranio-spinal'),
(275, '10smltr', 'Melakukan Simulasi Verifikasi merujuk pada hasil analisis Digital Reconstruction Radiography (DRR) Planning Penyinaran Radiasi Eksterna'),
(276, '10smltr', 'Melakukan tindakan radiografi untuk perencanaan Brachyterapi'),
(277, '10cts', 'Melakukan perencanaan radioterapi menggunakan CT Scan Tanpa Kontras'),
(278, '10cts', 'Melakukan perencanaan radioterapi menggunakan CT Scan dengan Kontras'),
(279, '10cts', 'Melakukan Pengiriman Data CT Kontur Tubuh Axial'),
(280, '10re', 'Mengoperasikan Pesawat Radiasi Eksterna'),
(281, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna satu Lapangan'),
(282, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna 2D'),
(283, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna Multiple Planned Fields'),
(284, '10re', 'Melakukan Penyinaran dengan Modalitas Teknik Gamma Knife'),
(285, '10re', 'Melakukan Melakukan Penyinaran dengan Modalitas Teknik Tomotheraphy'),
(286, '10re', 'Melakukan Set up Penyinaran Radiasi Eksterna Total Body Irradiation (TBI)'),
(287, '10mvre', 'Melakukan Verifikasi dan analisa Lapangan Radiasi Dengan Portal Film '),
(288, '10mvre', 'Melakukan Verifikasi dan Analisa Set up Penyinaran Radiasi Eksterna Dengan Perangkat EPID/OB'),
(289, '10mvre', 'Melakukan Verifikasi Set up Penyinaran Radiasi Eksterna Dengan Perangkat Cone Beam'),
(290, '10mvre', 'Melakukan Analisis Data Verifikasi Lapangan Penyinaran Berdasarkan radiograf Gammagrafi / EPID / OBI / Cone Beam CT'),
(291, '10brkt', 'Melakukan Radiografi Brachyterapi dengan Pesawat C-Arm'),
(292, '10brkt', 'Melakukan Brakiterapi Intracaviter'),
(293, '10brkt', 'Melakukan Brakiterapi Intraluminal'),
(294, '10brkt', 'Melakukan Brakiterapi Interstitial'),
(295, '10tps2', 'Melakukan Penghitungan Manual Dosis Monitor Unit / Treatment Time Lapangan Radiasi Eksterna'),
(296, '10tps2', 'Melakukan Penghitungan Dosis Monitor Unit / Treatment Time Penyinaran'),
(297, '10crh', 'Melakukan Warming Up Pesawat Terapi'),
(298, '10crh', 'Melakukan Cek Laser (Ruang Linac/Cobalt/Simulator/CT simulator)'),
(299, '10crh', 'Melakukan Cek Lapangan Penyinaran'),
(300, '10crh', 'Melakukan Cek Optical Distance Indicator (ODI)'),
(301, '10crh', 'Melakukan Cek Collimator'),
(302, '10crh', 'Melakukan Cek Multileaf Collimator (MLC)'),
(303, '10crh', 'Melakukan Cek Emergency Stop'),
(304, '10crh', 'Melakukan Cek Door Safety'),
(305, '10crh', 'Melakukan Cek CCTV'),
(306, '10crh', 'Melakukan Cek Interkom'),
(307, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Setiap Teknik Penyinaran'),
(308, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Pekerja Radiasi Dan Masyarakat'),
(309, '10ikkk', 'Mengimplementasikan Proteksi Radiasi Untuk Lingkungan Sekitar'),
(310, '10ikkk', 'Mengimplementasikan Keselamatan Pasien'),
(311, '10mnjl', 'Menyusun Standar Prosedur Operasional (SPO) untuk setiap teknik penyinaran yang dilakukan'),
(312, '10mnjl', 'Melaksanakan pengelolaan pelayanan Radioterapi'),
(313, '10mnjl', 'Melaksanakan Sistem Manajemen Keselamatan dan Proteksi Radiasi Terhadap Pekerja dan Lingkungan'),
(314, '10mnjl', 'Melaksanakan Sistem Manajemen Jaminan Kualitas dan Kendali Kualitas (QA/QC) Radioterapi dalam Tim'),
(315, '11', 'Menyiapkan media kontras dengan / tanpa injektor'),
(316, '11', 'Menyiapkan pesawat C arm dan penunjang pemeriksaan'),
(317, '11', 'Melakukan Pemeriksaan angiografi ektremitas atas'),
(318, '11', 'Melakukan Pemeriksaan angiografi ektrimitas bawah'),
(319, '11', 'Melakukan Pemeriksaan angiografi carotis / Vertebralis'),
(320, '11', 'Melakukan pemeriksaan angiografi aorta'),
(321, '11', 'Melakukan pemeriksaan angiografi selektif (a. Renalis, a.Hepatika,a.mesenterica)'),
(322, '11', 'Melakukan pemeriksaan angiografi dengan DSA (Digital Subtraction Angiografi)'),
(323, '11', 'Melakukan pemeriksaan angiografi 3 dimensi (3D RA) a, cerebral'),
(324, '11', 'Melakukan pemeriksaan angiografi dalam tindakan anuerisma coiling'),
(325, '11', 'Melakukan pemeriksaan angiografi dalam tindakan  cerebral AVM embolisasi'),
(326, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan CCF (Carotid cavernous fistula) embolisasi'),
(327, '11', 'Melakukan pemeriksaan angiografi dalam tindakan embolisasi preoperative ( Meningioma dll)'),
(328, '11', 'Melakukan pemeriksaan Angiografi dalam tindakan thrombolis pada embolic stroke infarction'),
(329, '11', 'Melakukan pemeriksaan Angiografi dalam tindakan stenting cerebral stenosis'),
(330, '11', 'Melakukan pemeriksaan angiografi  pada tindakan stenting gastro intestinal (colon/oesafagus/duedenum)'),
(331, '11', 'Melakukan pemeriksaan angiografi  pada tindakan stenting saluran bilier (PTCD/PTBD)'),
(332, '11', 'Melakukan pemeriksaan angiografi  pada tindakan embolisasi gastrointestinal (GI Beeding/Epistaxis/post partum bleeding)'),
(333, '11', 'Melakukan pemeriksaan angiografi  pada tindakan embolisasi ruptur hepar/ lien'),
(334, '11', 'Melakukan pemeriksaan angiografi dalam tindakan pemasukan obat kemoterapi (TACE/TACI)'),
(335, '11', 'Melakukan pemeriksaan  angiografi dalam tindakan pemasukan obat kemoterapi (TACE/TACI)'),
(336, '11', 'Melakukan pemeriksaan angiografi dalam tindakan balon angioplasty  periperal'),
(337, '11', 'Melakukan pemeriksaan angiografi dalam tindakan stenting  periperal'),
(338, '11', 'Melakukan pemeriksaan angiografi dalam tindakan embolisasi periperal .testicular, ovarium dan elvic varises'),
(339, '11', 'Melakukan pemeriksaan angiografi pada pemasangan filter pada vena cava inferior'),
(340, '11', 'Melakukan pemeriksaan Plebografi (Venografi)'),
(341, '11', 'Melakukan Pemeriksaan angiografi Koroner'),
(342, '11', 'Melakukan Pemeriksaan Angiografi Pulmonal arteri'),
(343, '11', 'Melakukan Pemeriksaan  angiografi Ventrikel Kanan/kiri'),
(344, '11', 'Melakukan pemeriksaan Penyadapan  jantung kanan'),
(345, '11', 'Melakukan pemeriksaan dalam tindakan pemasangan IABP'),
(346, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan pemasangan stent di pembuluh darah coroner'),
(347, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan pemasangan stent di AORTA'),
(348, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan PDA (ADO)'),
(349, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan ASD (ASO)'),
(350, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan VSD (AVO)'),
(351, '11', 'Melakukan pemeriksaan angiografi dalam tindakan penutupan LAA'),
(352, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan baloninsasi pada katup mitral stenosis (BMV)'),
(353, '11', 'Melakukan pemeriksaan angiografi  dalam tindakan baloninsasi pada arteri  pulmonal stenosis (PTBV)'),
(354, '11', 'Melakukan pemeriksaan dalam  tindakan pemasangan Temporer Pacemaker'),
(355, '11', 'Melakukan pemeriksaan dalam  tindakan pemasangan Permanent  Pacemaker'),
(356, '11', 'Melakukan pemeriksan dalam tindakan elektrophisiologi study (EPI)'),
(357, '11', 'Melakukan pemeriksan dalam tindakan Ablasi Aritmia jantung (ABLASI)'),
(358, '11', 'Menyiapkan media kontras dengan / tanpa injektor'),
(359, '11', 'Menyiapkan pesawat C arm dan penunjang pemeriksaan'),
(360, '12', 'Quality contral Mammografi'),
(361, '12', 'Quality control  CT Scan'),
(362, '12', 'Quality control MRI : PIQT');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_nakes` varchar(50) CHARACTER SET utf8 NOT NULL,
  `id_kompetensi` int(11) NOT NULL,
  `nama_mitra` varchar(50) NOT NULL,
  `status` enum('Diminta','Mandiri','Supervisi','Tidak Disetujui') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_nakes`, `id_kompetensi`, `nama_mitra`, `status`) VALUES
(3, 'USR-002', 260, 'Dani Afrijal', 'Diminta'),
(4, 'USR-003', 1, 'Dani Afrijal', 'Diminta'),
(5, 'USR-002', 15, 'Dani Afrijal', 'Diminta');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_index`
--

CREATE TABLE `pengajuan_index` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama_mitra` varchar(50) NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_index`
--

INSERT INTO `pengajuan_index` (`id`, `id_user`, `nama_mitra`, `tanggal_pengajuan`) VALUES
(1, 'USR-002', 'Dani Afrijal', '2023-04-29 15:43:05'),
(2, 'USR-003', 'Dani Afrijal', '2023-04-29 15:44:43'),
(3, 'USR-003', 'Rochmat', '2023-04-29 16:26:15');

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
('PRW-0025', 'BRG-0004', 'Yosep Andrian', '2021-11-26', 'Aman', 'butuh perawatan'),
('PRW-0026', 'BRG-0004', 'Yosep Andrian', '2023-04-14', 'Perlu Diperbaiki', 'Fotocopy teroos euy'),
('PRW-0027', 'BRG-0006', 'Yosep Andrian', '2023-04-14', 'Perlu Diperbaiki', 'rusak'),
('PRW-0028', 'BRG-0003', 'Yosep Andrian', '2020-04-14', 'Perlu Diperbaiki', 'Fotocopy teroos');

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
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_kompetensi_pengajuan` (`id_kompetensi`),
  ADD KEY `id_user_pengajuan` (`id_nakes`);

--
-- Indexes for table `pengajuan_index`
--
ALTER TABLE `pengajuan_index`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_pengajuan_index` (`id_user`);

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
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengajuan_index`
--
ALTER TABLE `pengajuan_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `id_kompetensi_pengajuan` FOREIGN KEY (`id_kompetensi`) REFERENCES `kompetensi` (`id_kb`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_pengajuan` FOREIGN KEY (`id_nakes`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_index`
--
ALTER TABLE `pengajuan_index`
  ADD CONSTRAINT `idx_user_pengajuan_index` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

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
