-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 11:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assesment`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `bagian`, `username`, `password`, `level`) VALUES
(2, 'Aku Admin', 'SDM', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', 'Admin'),
(4, 'Adminnya aku', 'SDM', 'ptpn', '27042002ac89a16ed148930861e16b5f', 'Admin'),
(8, 'AIDIL SYUKRI, SE', 'Project Manager 1', '9000044', '27042002ac89a16ed148930861e16b5f', 'User'),
(9, 'HARI YUDHOTOMO, ST', 'Co. PM 1', '9007823', '27042002ac89a16ed148930861e16b5f', 'User'),
(10, 'SURATMO, SE', 'Staf', '9006872', '27042002ac89a16ed148930861e16b5f', 'User'),
(11, 'MUNAWIR AJI ROSID AMD.', 'Admin PM 1', '9000088', '27042002ac89a16ed148930861e16b5f', 'User'),
(12, 'IMANUDIN RAMDANI, S.SOS.I', 'Admin', '9002332', '27042002ac89a16ed148930861e16b5f', 'User'),
(13, 'AGUNG PRASETYO, SP., MM.', 'Project Manager 2', '9000001', '27042002ac89a16ed148930861e16b5f', 'User'),
(14, 'TOTOK INDARTO, ST., MM', 'Co. PM 2', '9012815', '27042002ac89a16ed148930861e16b5f', 'User'),
(15, 'PRIMADANI SETYO PRAKOSO, SP', 'Staf PM 2', '9014341', '27042002ac89a16ed148930861e16b5f', 'User'),
(16, 'AGUS WANTORO, S.PD', 'Staf PM 2', '9000074', '27042002ac89a16ed148930861e16b5f', 'User'),
(17, 'EDY ARIANTO PURBA', 'Karyawan Management Trainee', 'belum5', '27042002ac89a16ed148930861e16b5f', 'User'),
(18, 'MOHAMAD SUNHAJI, SE., S.KOM', 'Kepala Bagian Teknologi Informasi', '9000003', '27042002ac89a16ed148930861e16b5f', 'User'),
(19, 'SETYANTO, SE., M.SI', 'Kepala Sub Bagian TI', '9000007', '27042002ac89a16ed148930861e16b5f', 'User'),
(20, 'FA. DWI NUGROHO, S.KOM', 'Staf TI', '9000012', '27042002ac89a16ed148930861e16b5f', 'User'),
(21, 'BONI ANDIKA, S.KOM', 'Admin TI', '9000089', '27042002ac89a16ed148930861e16b5f', 'User'),
(22, 'TEGUH BUDIYONO, SE.', 'Admin', '9006251', '27042002ac89a16ed148930861e16b5f', 'User'),
(23, 'MOCH AFENDI', 'Admin', '9000121', '27042002ac89a16ed148930861e16b5f', 'User'),
(24, 'EKKY CAHYADITHIA', 'Karyawan Management Trainee', '9015463', '27042002ac89a16ed148930861e16b5f', 'User'),
(25, 'FEBRI VALENTINO', 'Karyawan Management Trainee', '9015464', '27042002ac89a16ed148930861e16b5f', 'User'),
(26, 'WAHYUDI, SE., MM', 'Kepala Bagian Sekretaris Perusahaan', '9000002', '27042002ac89a16ed148930861e16b5f', 'User'),
(27, 'ELWAN SATRIAWAN, SE', 'Kepala Sub Bagian Konsolidasi', '9000005', '27042002ac89a16ed148930861e16b5f', 'User'),
(28, 'SENTOT TRI JOKO, SE', 'Kepala Sub Bagian Humas', '9013455', '27042002ac89a16ed148930861e16b5f', 'User'),
(29, 'TITIN NUSANTARI, S.KOM.', 'Kepala Sub Bagian Kepatuhan & MR', '9000060', '27042002ac89a16ed148930861e16b5f', 'User'),
(30, 'KENDRIA AYU WIPRIATI, SE', 'Staf PKBL', '9002818', '27042002ac89a16ed148930861e16b5f', 'User'),
(31, 'TRI ISWANTO, SPD, SH', 'Staf Humas', '9000072', '27042002ac89a16ed148930861e16b5f', 'User'),
(32, 'VERONICA', 'Staf Humas', '9000008', '27042002ac89a16ed148930861e16b5f', 'User'),
(33, 'YOGA AGUNG JATMIKA, SE', 'Staf Konsolidasi', '9000137', '27042002ac89a16ed148930861e16b5f', 'User'),
(34, 'HERMAWAN BUDI HARTOKO, SE., MM', 'Staf Konsolidasi', '9000013', '27042002ac89a16ed148930861e16b5f', 'User'),
(35, 'DINNA NURYANI PUTRI P. S.PSI', 'Staf MR', '9000075', '27042002ac89a16ed148930861e16b5f', 'User'),
(36, 'SUKMA RANI TEJOWATI, S.PSI', 'Staf MR', '9000067', '27042002ac89a16ed148930861e16b5f', 'User'),
(37, 'WIWIN TRI KURNIYAWAN, STP', 'Staf MR', '9006896', '27042002ac89a16ed148930861e16b5f', 'User'),
(38, 'MARDJIUN, S.PD', 'Staf MR', '', '27042002ac89a16ed148930861e16b5f', 'User'),
(39, 'MOH. TAUFIK, S.PD', 'Staf PKBL', '9000111', '27042002ac89a16ed148930861e16b5f', 'User'),
(40, 'GATOT CAESARIO TOLANDO', 'Staf Sekretaris Perusahaan', '9000090', '27042002ac89a16ed148930861e16b5f', 'User'),
(41, 'MARIA HAPPY KURNIA', 'Sekretaris Direksi', '9000097', '27042002ac89a16ed148930861e16b5f', 'User'),
(42, 'RIA ANGGRAINI NINGRUM', 'Sekretaris Direksi', '9014814', '27042002ac89a16ed148930861e16b5f', 'User'),
(43, 'HARYONO, S.PD.', 'Admin PKBL', '9000081', '27042002ac89a16ed148930861e16b5f', 'User'),
(44, 'SUHARMI', 'Admin Kesekretariatan', '9000105', '27042002ac89a16ed148930861e16b5f', 'User'),
(45, 'FIBRIA WAHYU HARJANTO', 'Admin Protokoler', '9005538', '27042002ac89a16ed148930861e16b5f', 'User'),
(46, 'MARDJOEKI, AMD', 'Admin Kesekretariatan', '9000096', '27042002ac89a16ed148930861e16b5f', 'User'),
(47, 'RUDI GONDO KARYONO', 'Admin Agendaris MR', '9000113', '27042002ac89a16ed148930861e16b5f', 'User'),
(48, 'LUHUR BUDI UTOMO', 'Satpam', '9000092', '27042002ac89a16ed148930861e16b5f', 'User'),
(49, 'PITOYO PRAMUJI', 'Driver', '9000116', '27042002ac89a16ed148930861e16b5f', 'User'),
(50, 'WAHYU PAMUNGKAS', 'Driver', '9000128', '27042002ac89a16ed148930861e16b5f', 'User'),
(51, 'EKO GANGSAR RAHARDJO', 'Driver', '9000130', '27042002ac89a16ed148930861e16b5f', 'User'),
(52, 'SUBIONO', 'Satpam', '9000099', '27042002ac89a16ed148930861e16b5f', 'User'),
(53, 'RUSLI EFFENDI', 'Admin', '9000091', '27042002ac89a16ed148930861e16b5f', 'User'),
(54, 'AHMAD RIYONO', 'Satpam', '9000093', '27042002ac89a16ed148930861e16b5f', 'User'),
(55, 'SUTARNO', 'Satpam', '9000100', '27042002ac89a16ed148930861e16b5f', 'User'),
(56, 'DANANG WIDANARKO', 'Admin LO Jakarta', '9013779', '27042002ac89a16ed148930861e16b5f', 'User'),
(57, 'MUJIONO', 'Admin', '9000127', '27042002ac89a16ed148930861e16b5f', 'User'),
(58, 'EKO SUDIARTO', 'Satpam', '9000094', '27042002ac89a16ed148930861e16b5f', 'User'),
(59, 'BAMBANG KRISTANTO', 'Admin LO Jakarta', '9013781', '27042002ac89a16ed148930861e16b5f', 'User'),
(60, 'SENO ARY BUDIARTO', 'Admin Bangunan Kantor', '9010179', '27042002ac89a16ed148930861e16b5f', 'User'),
(61, 'IHSAN HALIM', 'Driver LO Jakarta', '9013780', '27042002ac89a16ed148930861e16b5f', 'User'),
(62, 'SAPTADI', 'Driver', '9000126', '27042002ac89a16ed148930861e16b5f', 'User'),
(63, 'ELLY KUSSETYOWARDANI, SE', 'Admin RT', '9014706', '27042002ac89a16ed148930861e16b5f', 'User'),
(64, 'JOKO PURNOMO, SE', 'Pjs. Kepala Bagian SPI', '9000015', '27042002ac89a16ed148930861e16b5f', 'User'),
(65, 'ADAM AS\'ADI, SP', 'Kepala Sub Bagian ', '9007821', '27042002ac89a16ed148930861e16b5f', 'User'),
(66, 'MOHAMAD DION TIARA, SP., MSI', 'Ymt. Kepala Sub Bagian', '9000030', '27042002ac89a16ed148930861e16b5f', 'User'),
(67, 'RYO CAHYA ARDANA, SP', 'Staf Pemeriksaan Tanaman 1', '9000019', '27042002ac89a16ed148930861e16b5f', 'User'),
(68, 'ADHI SUDIBYO, SP', 'Staf Pemeriksaan Tanaman 2', '9000031', '27042002ac89a16ed148930861e16b5f', 'User'),
(69, 'KURNYANTO, SP', 'Staf ', '9000029', '27042002ac89a16ed148930861e16b5f', 'User'),
(70, 'ERNIS ANGGUNG KUNCORO, SE', 'Staf ', '9000051', '27042002ac89a16ed148930861e16b5f', 'User'),
(71, 'SULISTIYONO', 'Admin Agendaris', '9000087', '27042002ac89a16ed148930861e16b5f', 'User'),
(72, 'SHAFWAN AZIZ', 'Karyawan Management Trainee', 'belum1', '27042002ac89a16ed148930861e16b5f', 'User'),
(73, 'PADLI', 'Karyawan Management Trainee', 'belum2', '27042002ac89a16ed148930861e16b5f', 'User'),
(74, 'M FAKHRUR ROZI, SP', 'Kepala Bagian Tanaman', '9009927', '27042002ac89a16ed148930861e16b5f', 'User'),
(75, 'RIYANTO ATMODJO, SP', 'Kepala Sub Bagian Karet', '9002816', '27042002ac89a16ed148930861e16b5f', 'User'),
(76, 'FIRMAN WIDYOSUSENO, SP', 'Kepala Sub Bagian Tebu & Saprodi', '9000027', '27042002ac89a16ed148930861e16b5f', 'User'),
(77, 'MUSTAQ ARIFIANTO, SPD', 'Staf ', '9002819', '27042002ac89a16ed148930861e16b5f', 'User'),
(78, 'WAHYU MAYA SUKMA, SE', 'Staf Analisa Laporan', '9000011', '27042002ac89a16ed148930861e16b5f', 'User'),
(79, 'YUNIANTO', 'Staf Teh & Kopi', '9002296', '27042002ac89a16ed148930861e16b5f', 'User'),
(80, 'WAHYU ASRIANTO, SP', 'Staf Kayu & Hortikultura', '9014172', '27042002ac89a16ed148930861e16b5f', 'User'),
(81, 'ROHMAD, SE', 'Staf Areal Konsesi', '9000033', '27042002ac89a16ed148930861e16b5f', 'User'),
(82, 'BAGYO SUTANTO, SE', 'Admin', '9000112', '27042002ac89a16ed148930861e16b5f', 'User'),
(83, 'BASUKI RAKHMAD', 'Admin Agendaris', '9000104', '27042002ac89a16ed148930861e16b5f', 'User'),
(84, 'SIGIT SUJATMOKO, SP', 'Kepala Bagian Teknik & Pengolahan', '9002294', '27042002ac89a16ed148930861e16b5f', 'User'),
(85, 'HUSEIN SYIROD TEGUH SANTOSO', 'Kepala Sub Bagian Teknik', '9010683', '27042002ac89a16ed148930861e16b5f', 'User'),
(86, 'REZA OLIVIA SETIAWAN, STP', 'Kepala Sub Bagian Pengolahan', '9000035', '27042002ac89a16ed148930861e16b5f', 'User'),
(87, 'USWATUN KHASANAH, STP', 'Kepala Sub Bagian QC', '9000078', '27042002ac89a16ed148930861e16b5f', 'User'),
(88, 'RETNO DWI RIASTUTI TR', 'Staf Laporan & Sertifikasi', '9000037', '27042002ac89a16ed148930861e16b5f', 'User'),
(89, 'ERMINA SUTRISNIYATI', 'Staf Teknik & Pengolahan', '9010684', '27042002ac89a16ed148930861e16b5f', 'User'),
(90, 'KHAERUDIN', 'Staf Teknik', '9000040', '27042002ac89a16ed148930861e16b5f', 'User'),
(91, 'SUSANTI WIDYANING TYAS, ST', 'Staf Pengolahan', '9003992', '27042002ac89a16ed148930861e16b5f', 'User'),
(92, 'UNTUNG MARGO HARTONO, ST', 'Staf', '9000039', '27042002ac89a16ed148930861e16b5f', 'User'),
(93, 'BAMBANG BUSONO', 'Admin Agendaris', '9000107', '27042002ac89a16ed148930861e16b5f', 'User'),
(94, 'AGUS EKO PRIYANTO', 'Admin Teknik', '9000098', '27042002ac89a16ed148930861e16b5f', 'User'),
(95, 'BAGUS YUDHA KURNIAWAN', 'Admin Teknik', '9000120', '27042002ac89a16ed148930861e16b5f', 'User'),
(96, 'VICTOR WIDYALISTAMA', 'Admin Pengolahan', '9006276', '27042002ac89a16ed148930861e16b5f', 'User'),
(97, 'AGUSTINUS DWI PUJOYUWONO', 'Admin Pengolahan', '9000119', '27042002ac89a16ed148930861e16b5f', 'User'),
(98, 'DIAN HEMAWATI', 'Admin Laporan', '9002970', '27042002ac89a16ed148930861e16b5f', 'User'),
(99, 'MOHAMMAD ZAQQI', 'Karyawan Management Trainee', 'belum3', '27042002ac89a16ed148930861e16b5f', 'User'),
(100, 'DODIK RISTIAWAN, SE., M.Si', 'Kepala Bagian Pembiayaan', '9004809', '27042002ac89a16ed148930861e16b5f', 'User'),
(101, 'ASIH WARASTUTI, SE', 'Kepala Sub Bagian Keuangan', '9000042', '27042002ac89a16ed148930861e16b5f', 'User'),
(102, 'DIDIK MARYONO, SE', 'Kepala Sub Bagian Akuntansi', '9000043', '27042002ac89a16ed148930861e16b5f', 'User'),
(103, 'YUDHIT SUATMAJA, SE', 'Staf Pajak PPh', '9000047', '27042002ac89a16ed148930861e16b5f', 'User'),
(104, 'IBNU PURNAJANTO, SE', 'Staf Anggaran', '9000049', '27042002ac89a16ed148930861e16b5f', 'User'),
(105, 'TRI ACHIR NUGROHO, SE', 'Staf Akuntansi', '9000050', '27042002ac89a16ed148930861e16b5f', 'User'),
(106, 'MAHARDIKO BAYU BONDOYUDO', 'Meelopen Akuntansi', '9000125', '27042002ac89a16ed148930861e16b5f', 'User'),
(107, 'CAHYO NUGROHO', 'Admin Kasir', '9000117', '27042002ac89a16ed148930861e16b5f', 'User'),
(108, 'AGUS TAK LILIK SETYONO, SE', 'Admin Keuangan', '9000115', '27042002ac89a16ed148930861e16b5f', 'User'),
(109, 'SUBANDI', 'Admin Laporan', '9000118', '27042002ac89a16ed148930861e16b5f', 'User'),
(110, 'RINA HINDRIANA LISTYANINGSIH, ', 'Admin', '9000101', '27042002ac89a16ed148930861e16b5f', 'User'),
(111, 'RINO PAHLEVI NOVIANTO', 'Admin', '9011065', '27042002ac89a16ed148930861e16b5f', 'User'),
(112, 'ERIEK KRISTIONO, SE', 'Kepala Bagian Pemasaran & Pengadaan', '9000041', '27042002ac89a16ed148930861e16b5f', 'User'),
(113, 'LUTFI FIRDAUS NOVIANTO, SE', 'Kepala Sub Bagian Pemasaran ', '9000055', '27042002ac89a16ed148930861e16b5f', 'User'),
(114, 'SUTARTO, SE', 'Ymt. Kepala Sub Bagian Pengadaan', '9000022', '27042002ac89a16ed148930861e16b5f', 'User'),
(115, 'PUJO HARI PRASTOWO, SE', 'Staf Penjualan Ekspor', '9000056', '27042002ac89a16ed148930861e16b5f', 'User'),
(116, 'SUDARMADI, SPD', 'Staf Pengadaan', '9000057', '27042002ac89a16ed148930861e16b5f', 'User'),
(117, 'MG. AJENG ROEHDIANI, SE', 'Staf Penjualan Lokal', '9000058', '27042002ac89a16ed148930861e16b5f', 'User'),
(118, 'KASMURI', 'Admin Penjualan Ekspor', '9000123', '27042002ac89a16ed148930861e16b5f', 'User'),
(119, 'AGUS SLAMET WIDODO', 'Admin Penjualan Lokal', '9000085', '27042002ac89a16ed148930861e16b5f', 'User'),
(120, 'MARJIYANTO, AMD', 'Admin Pengadaan', '9000084', '27042002ac89a16ed148930861e16b5f', 'User'),
(121, 'PAHRUDDIN', 'Admin Agendaris', '9000095', '27042002ac89a16ed148930861e16b5f', 'User'),
(122, 'ADITOMO SULISTYA HARGIANTO', 'Admin Pengadaan', '9000086', '27042002ac89a16ed148930861e16b5f', 'User'),
(123, 'AGUS HERI YULIANTO, SE', 'Admin Pengadaan', '9011066', '27042002ac89a16ed148930861e16b5f', 'User'),
(124, 'REDAH RESPANINGSIH, SPD', 'Kepala Bagian SDM & Umum', '9000014', '27042002ac89a16ed148930861e16b5f', 'User'),
(125, 'HILMA FAZA ARIYANI, SE., MM', 'Kepala Sub Bagian PSDM', '9000061', '27042002ac89a16ed148930861e16b5f', 'User'),
(126, 'M. PENI SISWANTI, SE', 'Kepala Sub Bagian Personalia', '9006867', '27042002ac89a16ed148930861e16b5f', 'User'),
(127, 'ANTONIUS SUSMONO, SH', 'Kepala Sub Bagian Hukum, Agraria & Aset', '9000068', '27042002ac89a16ed148930861e16b5f', 'User'),
(128, 'ADITYA TEJA UTAMA, S.PSI', 'Staf PSDM', '9000062', '27042002ac89a16ed148930861e16b5f', 'User'),
(129, 'HERMAN, SE', 'Staf Personalia', '9000063', '27042002ac89a16ed148930861e16b5f', 'User'),
(130, 'RINI SETIA NINGSIH, S,PSI', 'Staf PSDM', '9000066', '27042002ac89a16ed148930861e16b5f', 'User'),
(131, 'CANDRA ARI WIBOWO, S.SI', 'Staf Personalia', '9000064', '27042002ac89a16ed148930861e16b5f', 'User'),
(132, 'ANDI PANGERAN A. HASAN', 'Staf Hukum, Agraria', '9000069', '27042002ac89a16ed148930861e16b5f', 'User'),
(133, 'ANDRIYANTO, SE', 'Admin BPJS Kesehatan, Absensi', '9000082', '27042002ac89a16ed148930861e16b5f', 'User'),
(134, 'BUDI TRIYONO, AMD.', 'Admin Agendaris', '9000103', '27042002ac89a16ed148930861e16b5f', 'User'),
(135, 'AGUNG WIBOWO', 'Admin Aset', '9000124', '27042002ac89a16ed148930861e16b5f', 'User'),
(136, 'AGUNG ISDINAWAN, SH', 'Admin Hukum', '9010703', '27042002ac89a16ed148930861e16b5f', 'User'),
(137, 'WIDYA INDAH PERTIWI, SH', 'Admin Hukum', '9003229', '27042002ac89a16ed148930861e16b5f', 'User'),
(138, 'HAPSARI DYAH KEMALADEWI R', 'Admin Hukum', '9015538', '27042002ac89a16ed148930861e16b5f', 'User'),
(139, 'PETRUS BUDIMAN, SP', 'Kepala Bagian Perencanaan Strategis', '9000052', '27042002ac89a16ed148930861e16b5f', 'User'),
(140, 'M. BURHAN MURTAKI, ST., MM', 'Kepala Sub Bagian (Penugasan Direktur PT', '9000036', '27042002ac89a16ed148930861e16b5f', 'User'),
(141, 'BUDI REING WIRAWAN, ST', 'Kepala Sub Bagian Pengembangan Proses Bi', '9002295', '27042002ac89a16ed148930861e16b5f', 'User'),
(142, 'SURYANTO, SE', 'Kepala Sub Bagian Perencanaan Strategis', '9012819', '27042002ac89a16ed148930861e16b5f', 'User'),
(143, 'TEGUH WIDODO, STP', 'Co. PM 1', '9000018', '27042002ac89a16ed148930861e16b5f', 'User'),
(144, 'DICKY PRAMUDITO, S.KOM., MM', 'Staf Optimalisasi Aset', '9013456', '27042002ac89a16ed148930861e16b5f', 'User'),
(145, 'JOKO PURWANTO', 'Admin Wisata Agro', '9000102', '27042002ac89a16ed148930861e16b5f', 'User'),
(146, 'THOMAS MUJI LEKSONO', 'Staf Perencanaan Strategis', '9010517', '27042002ac89a16ed148930861e16b5f', 'User'),
(147, 'DWI SUSANTO, AMD, SH', 'Admin Agendaris', '9000109', '27042002ac89a16ed148930861e16b5f', 'User'),
(148, 'ADHITYA DWI RAHMANTO', 'Karyawan Management Trainee', 'belum4', '27042002ac89a16ed148930861e16b5f', 'User'),
(150, 'najib', 'sdm', '11111', '27042002ac89a16ed148930861e16b5f', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `bank_soal`
--

CREATE TABLE `bank_soal` (
  `id` int(11) NOT NULL,
  `no_soal` int(4) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `a` varchar(500) NOT NULL,
  `point_a` int(4) NOT NULL,
  `b` varchar(500) NOT NULL,
  `point_b` int(4) NOT NULL,
  `c` varchar(500) NOT NULL,
  `point_c` int(4) NOT NULL,
  `d` varchar(500) NOT NULL,
  `point_d` int(4) NOT NULL,
  `e` varchar(500) NOT NULL,
  `point_e` int(4) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_soal`
--

INSERT INTO `bank_soal` (`id`, `no_soal`, `soal`, `a`, `point_a`, `b`, `point_b`, `c`, `point_c`, `d`, `point_d`, `e`, `point_e`, `kategori`) VALUES
(3, 1, 'Dalam melaksanakan suatu tugas yang dipercayakan kepada saya, saya akan:', 'Berusaha menyelesaikan pekerjaan lebih cepat dari waktu yang diberikan', 1, 'Bekerja dengan kemampuan kerja yang dimiliki dan berusaha memberikan hasil yang lebih baik dari sebelumnya', 2, 'Mencoba tantangan tugas yang lebih berat guna melatih kemampuan kerja yang dimiliki', 3, 'Berani mengambil keputusan sebagai bentuk kepercayaan tugas yang diberikan', 4, 'Mengembangkan ide-ide baru dalam menyelesaikan tugas yang diberikan', 5, 'core'),
(4, 2, 'Saya harus menyelesaikan tugas dengan cepat dikarenakan tugas tersebut telah dibatasi waktu pengerjaannya oleh atasan saya. Sikap saya:', 'Berusaha menyelesaikan tugas sebaik-baiknya agar tidak banyak kekeliruan', 1, 'Berusaha menyelesaikan tugas tepat waktu sebelum batas pengumpulan', 2, 'Berusaha menyelesaikan tugas secara lebih optimal daripada rekan kerja yang lain', 3, 'Berusaha menyelesaikan tugas dengan sebaik-baiknya agar dapat memberikan manfaat bagi perusahaan', 4, 'Berusaha menyelesaikan tugas dengan ide baru yang berbeda dengan rekan kerja yang lain', 5, 'core'),
(5, 3, 'Ketika saya gagal dalam mencapai sesuatu yang saya inginkan, biasanya saya:', 'Memperbaiki kinerja saya dengan sebaik-baiknya sesuai dengan kemampuan yang saya miliki', 1, 'Menunjukkan sesuatu yang terbaik untuk meraih apa yang diinginkannya', 2, 'Mencoba melakukan suatu kegiatan yang menarik dan menantang untuk menyelesaikan permasalahan yang sulit', 3, 'Berani untuk mengajukkan diri di dalam suatu forum agar melatih kemampuan yang saya miliki', 4, 'Berani mengambil keputusan meskipun hal tersebut dapat beresiko bagi saya', 5, 'core'),
(6, 4, 'Saya ditugaskan menghadiri suatu kegiatan seminar menggantikan atasan saya. Sikap saya:', 'Mengikuti dan menerima berbagai informasi mengenai materi yang disampaikan selama kegiatan seminar', 1, 'Mengikuti dan menelaah seluruh informasi yang didapatkan dari materi kegiatan seminar guna menambah kemampuan kinerja yang saya miliki', 2, 'Mengikuti dan dapat menerapkan informasi yang di dapat dan mencobanya sebagai tantangan baru untuk melatih kemampuan kinerja yang saya miliki', 3, 'Mengikuti kegiatan seminar dapat memberikan dan menambah hal-hal yang positif bagi kemampuan kinerja saya', 4, 'Mengikuti dan dapat menyampaikan informasi hal-hal baru ke rekan kerja lain agar mampu diterapkan guna menambah kemampuan kinerja', 5, 'core'),
(7, 5, 'Setelah saya mendapatkan kenaikan golongan pada tahun ini. Sikap saya: ', 'Bekerja lebih baik dan menyelesaikan pekerjaan secepat mungkin dari sebelumnya', 1, 'Meningkatkan kemampuan kinerja untuk menghasilkan yang lebih baik ', 2, 'Berani mengambil tawaran untuk pekerjaan yang lebih berat dari sebelumnya', 3, 'Mengembangkan kemampuan bekerja serta memberikan potensi yang dimiliki agar bermanfaat bagi perusahaan', 4, 'Mengevaluasi pekerjaan sebelumnya untuk menghasilkan pekerjaan yang lebih baik', 5, 'core'),
(8, 6, 'Suatu ketika kantor mengirim saya mengikuti seminar pelatihan leadership yang bertujuan meningkatkan kemampuan kepemimpinan bagi seluruh pegawai BUMN. ', 'Saya dapat mengingat seluruh materi yang disampaikan pemateri sehingga  saya dapat mengaplikasikan dalam pekerjaan sehari-hari', 1, 'Saya dapat memahami secara detail seluruh informasi yang disampaikan pemateri sehingga dapat digunakan untuk meningkatkan kinerja harian.', 2, 'Saya menawarkan diri untuk memimpin sebuah project yang diberikan oleh Kepala Bagian Divisi, meskipun saya belum berpengalaman untuk itu.', 3, 'Saya melihat pelatihan ini berdampak signifikan bagi saya maupun pegawai lainnya, sehingga saya mengusulkan pengadaannya di tahun depan', 4, 'Saya mengusulkan untuk diadakan pelatihan public speaking, karena menurut saya kepemimpinan harus disertai juga oleh kemampuan berbicara di depan umum', 5, 'core'),
(9, 7, 'Bagi saya, kerja keras dan cermat merupakan wujud upaya untuk menjadi pribadi yang bermanfaat. Berkaitan dengan hal itu saya senang melakukan:', 'Pekerjaan yang prosedurnya jelas dan rutin', 1, 'Pekerjaan yang membutuhkan ketelitian yang tinggi ', 2, 'Pekerjaan yang spesifik dan menantang', 3, 'Pekerjaan yang membutuhkan analisis dan berdampak bagi orang lain', 4, 'Pekerjaan baru yang inovatif meskipun beresiko', 5, 'core'),
(10, 8, 'Saya baru saja di mutasi ke bagian lain yang sama sekali baru untuk saya. Suatu ketika saya diberi pekerjaan yang tidak saya kuasai. Sikap saya:', 'Berusaha sebaik dan sesegera mungkin untuk menyelesaikan seluruh pekerjaan yang diberikan atasan', 1, 'Berusaha menyelesaikan pekerjaan secara efisien dan lebih baik dari rekan  saya', 2, 'Melihat bagaimana rekan bagian saya bagaimana menyelesaikan pekerjaan tersebut', 3, 'Mempelajari terlebih dahulu materi yang saya belum kuasai, sehingga saya dapat mengerjakannya dengan baik.  ', 4, 'Mengintegerasikan seluruh pengetahuan yang saya miliki untuk menyelesaikan pekerjaan tersebut. ', 5, 'core'),
(11, 9, 'Supaya suatu pekerjaan berhasil dengan baik, saya akan:', 'Berusaha sebaik-baiknya agar atasan dan rekan bagian saya puas', 1, 'Berusaha sebaik-baiknya agar melampaui standar yang ditetapkan', 2, 'Berusaha sebaik-baiknya agar pekerjaan yang saya lakukan lebih baik dari rekan saya', 3, 'Berusaha sebaik-baiknya agar pekerjaan yang saya lakukan dapat bermanfaat bagi perusahaan', 4, 'Berusaha sebaik-baiknya dan berinisiatif melakukan pekerjaan lain yang menunjang pekerjaan utama ', 5, 'core'),
(12, 10, 'Biasanya orang-orang menilai saya sebagai:', 'Orang yang sangat tepat waktu dalam mengerjakan sesuatu', 1, 'Orang yang memberikan hasil yang memuaskan dalam mengerjakan sesuatu', 2, 'Orang yang jarang mengalami kegagalan dalam mengerjakan sesuatu', 3, 'Orang yang selalu mempertimbangkan segala sesuatu dengan matang', 4, 'Orang inovatif dan suka mengambil resiko dalam bertindak', 5, 'core'),
(13, 11, 'Pada suatu waktu perusahaan saya sedang menghadapi permasalahan tertentu. Kemudian, perusahaan saya tidak menemukan solusi yang sesuai. Sikap saya:', 'Memberikan gambaran permasalahan yang ada dan memberikan penghargaan terhadap usaha yang telah dilakukan', 1, 'Menawarkan diri untuk membantu dalam penyelesaian masalah', 2, 'Memahami permasalahan yang telah terjadi kemudian menyesuaikan terhadap misi dan kebutuhan perusahaan', 3, 'Memberikan waktu yang lebih dari jam kerja untuk membantu menyelesaikan permasalahan', 4, 'Berusaha memberikan kemampuan yang dimiliki untuk menyelesaikan permasalahan ', 5, 'core'),
(14, 12, 'Saya merasa sudah mulai tidak nyaman dalam melakukan pekerjaan yang sudah saya kerjakan selama ini. Maka saya:', 'Bersikap jujur kepada pihak perusahaan terhadap ketidaknyamanan saya dalam melakukan pekerjaan', 1, 'Tetap melakukan pekerjaan yang telah dilakukan hingga tujuan perusahaan tercapai', 2, 'Memahami kebutuhan perusahaan dan kondisi perusahaan yang lebih dalam dalam melakukan pekerjaan', 3, 'Mengerjakan hal-hal lain di luar pekerjaan sehingga merasakan kenyamanan kembali dalam melakukan pekerjaan', 4, 'Mengesampingkan ketidaknyamanan dalam bekerja dan tetap bekerja semaksimal mungkin', 5, 'core'),
(15, 13, 'Saya mendapat penawaran dari perusahaan lain untuk pindah bekerja dari perusahaan saya bekerja sekarang ini. Sikap saya:', 'Mengambil pekerjaan tersebut dan menghargai perusahaan tempat saya bekerja dalam memperlakukan selama saya bekerja', 1, 'Memberikan tawaran pekerjaan tersebut kepada orang lain dan saya tetap bekerja di perusahaan', 2, 'Memahami kondisi perusahaan di tempat saya bekerja sebelum saya menerima tawaran pekerjaan tersebut', 3, 'Tetap bekerja di perusahaan saya dengan kinerja yang lebih baik dari sebelumnya', 4, 'Berkomitmen dalam diri saya agar tetap bekerja di perusahaan saya bekerja dan berusaha memperbaiki perusahaan ', 5, 'core'),
(16, 14, 'Di dalam perusahaan saya bekerja terdapat peraturan-peraturan baru yang ditetapkan sesuai dengan perkembangan perusahaan tempat saya bekerja. Maka saya:', 'Menghargai peraturan baru yang dibuat oleh perusahaan', 1, 'Bersedia untuk mentaati peraturan baru yang telah dibuat', 2, 'Mendukung peraturan baru yang dibuat didasari atas kebutuhan perusahaan', 3, 'Menerima peraturan baru yang dibuat perusahaan dan memberikan segenap diri untuk melakukan yang terbaik demi perusahaan', 4, 'Menerima segala apapun yang dibuat oleh perusahaan didasari atas rasa loyalitas kepada perusahaan', 5, 'core'),
(17, 15, 'Dalam suatu perusahaan, saya memiliki teman yang akan keluar dari perusahaan dan mengajak saya untuk keluar dari perusahaan tempat saya bekerja. Sikap saya:', 'Mengikuti ajakan teman dan mengajukan pengunduran diri', 1, 'Menyelesaikan tugas yang belum terselesaikan terlebih dahulu sesuai dari tujuan perusahaan', 2, 'Melihat kondisi dan kebutuhan perusahaan Anda sebelum memilih karir saya kedepannya', 3, 'Memberikan sepenuhnya kemampuan yang dimiliki untuk tetap bekerja guna mencapai target perusahaan tanpa memandang teman', 4, 'Tetap bekerja di perusahan tempat saya bekerja saat ini tanpa ada alasan apapun yang dapat membuat saya keluar dari perusahaan', 5, 'core'),
(18, 16, 'Saya akan sangat senang menghabiskan sisa karir saya dengan perusahaan ini. Karena: ', 'Saya merasa perusahaan ini memiliki kredibilitas yang baik', 1, 'Saya memiliki kompetensi yang perusahaan perlukan ', 2, 'Saya merasa perusahaan membutuhkan saya untuk mewujudkan visi & misi perusahaan kedepannya', 3, 'Saya merasa bertanggung jawab demi terciptanya kemajuan perusahaan kedepannya', 4, 'Saya merasa harus loyal dan berkomitmen tinggi pada perusahaan', 5, 'core'),
(19, 17, 'Kalimat dibawah ini yang paling menggambarkan definisi ?Loyal?. Menurut saya adalah:', 'Memberikan pengakuan dan penghargaan kepada perusahaan', 1, 'Bersedia menyelesaikan seluruh tugas semaksimal mungkin untuk mencapai tujuan perusahaan', 2, 'Mendukung segala kebijakan dan kondisi perusahaan ', 3, 'Memberikan waktu, tenaga, dan pikiran lebih dari yang diharapkan perusahaan', 4, 'Memberikan kontribusi terbaik kepada perusahaan dalam kondisi apapun', 5, 'core'),
(20, 18, 'Saya mendapatkan tawaran oleh pimpinan untuk menempati jabatan strategis dan saya inginkan, namun berbeda unit kerja. Saya akan mengambil tawaran tersebut dengan alasan:', 'Perusahaan telah memberikan saya kesempatan itu, sehingga saya harus memanfaatkannya.', 1, 'Tidak ada kandidat lain yang memiliki spesifikasi yang lebih baik dari saya untuk menempati posisi tersebut. ', 2, 'Posisi tersebut memang sangat dibutuhkan di kantor cabang yang baru, dan saya berkompeten untuk posisi tersebut.', 3, 'Posisi tersebut dapat memaksimalkan seluruh potensi yang saya miliki   ', 4, 'Saya merasa harus mendedikasikan diri saya untuk perusahaan, meskipun harus ditempatkan di luar pulau', 5, 'core'),
(21, 19, 'Suatu ketika saya sedang mengerjakan pekerjaan rutin, kemudian rekan bagian saya meminta bantuan kepada saya. Saya akan membantunya karena: ', 'Pekerjaan tersebut bisa saya kerjakan ', 1, 'Pekerjaan tersebut harus segera selesai', 2, 'Pekerjaan tersebut cukup penting bagi divisi kami ', 3, 'Pekerjaan tersebut melibatkan diskusi antar anggota divisi ', 4, 'Pekerjaan rekan divisi saya merupakan tanggung jawab saya pula', 5, 'core'),
(22, 20, 'Saya diminta untuk lembur kerja di hari libur sedangkan saya sudah berencana melakukan beberapa aktivitas, dan dengan berat hati saya harus melaksanakannya karena tidak ada yang dapat melakukannya selain saya. Alasan yang membuat saya harus mengerjakannya yaitu:', 'Saya merasa tidak memiliki cukup alasan untuk menolak mengerjakan tugas ini', 1, 'Saya merasa menyelesaikan tugas tersebut merupakan kewajiban saya ', 2, 'Tugas ini membutuhkan orang yang berkompeten seperti saya', 3, 'Saya merasa harus memberikan waktu, dan kemampuan yang saya miliki untuk perusahaan ', 4, 'Saya telah berkomitmen terhadap perusahaan untuk memberikan kemampuan terbaik saya', 5, 'core'),
(23, 21, 'Dalam suatu kelompok kerja, saya dihadapkan permasalahan berkaitan dengan tugas yang harus dikerjakan dengan anggota tim saya. Maka yang akan saya lakukan adalah:', 'Berusaha mencari tahu kendala-kendala apa saja yang menjadi permasalahan di dalam kelompok kerja tersebut', 1, 'Memaparkan permasalahan yang dihadapi untuk dijadikan bahan evaluasi berikutnya', 2, 'Berusaha berdiskusi dengan anggota tim mengenai permasalahan di dalam kelompok kerja tersebut', 3, 'Memotivasi anggota tim dalam mengatasi permasalahan di dalam kelompok kerja tersebut', 4, 'Mengumpulkan solusi-solusi yang menjadi dasar alternatif mengatasi permasalahan di dalam kelompok kerja tersebut', 5, 'core'),
(24, 22, 'Sebagai anggota dalam sebuah rapat organisasi yang sedang membicarakan berbagai rancangan topik-topik untuk rencana kegiatan dengan rekan kerja yang lain. Sikap saya:', 'Saya ikut terlibat dalam susunan anggota guna membantu melaksanakan kegiatan organisasi kedepan', 1, 'Saya akan menyumbangan ide-ide pikiran saya untuk kemajuan organisasi kedepan', 2, 'Memberikan kritikan mengenai rencana kegiatan yang relevan bagi organisasi kedepan', 3, 'Memotivasi kepada anggota lain untuk menyampaikan pendapatnya mengenai rencana kegiatan organisasi ', 4, 'Mengusulkan rangkaian rencana kegiatan organisasi kedepan kepada atasan untuk disetujui', 5, 'core'),
(25, 23, 'Pada sebuah diskusi dengan tim kerja yang sedang membahas sebuah proyek yang akan segera dikerjakan. Biasanya saya:', 'Ikut andil dan bekerja bersama-sama dengan rekan kerja dalam menjalankan tugas yang diberikan', 1, 'Bersama rekan kerja tim membangun hubungan kerjasama yang harmonis dalam menjalankan tugas', 2, 'Saling memberikan saran dan masukan untuk meningkatkan kerja antar anggota tim', 3, 'Selalu bersemangat dalam kerjasama dengan rekan kerja tim guna menyelesaikan tugas dengan cepat', 4, 'Mengajak rekan kerja tim untuk menemukan solusi-solusi dari permasalahan yang terjadi selama menjalankan tugas', 5, 'core'),
(26, 24, 'Dalam mencapai keberhasilan suatu tugas dibutuhkan kerjasama tim yang solid. Saya berpendapat rekan kerja tim adalah:', 'Bekerja bersama-sama dengan penuh dedikasi dan profesionalisme terhadap tugas', 1, 'Bekerjasama dengan saling memberikan kontribusi dan dapat dengan bebas berbagi ide-ide, perasaan, dan harapan antar rekan kerja', 2, 'Memberikan saran dan pendapat antar rekan kerja yang dapat didiskusikan dan dikembangkan lebih lanjut', 3, 'Saling mendukung antar rekan kerja guna meningkatkan kinerja', 4, 'Dapat membicarakan kesulitan masing-masing antar rekan kerja guna mencapai tujuan yang diinginkan', 5, 'core'),
(27, 25, 'Laporan yang dibuat anggota tim kerja hasilnya kurang memuaskan untuk atasan. Hal ini menyebabkan anggota tim kerja memperlihatkan sikap tidak peduli dengan tugas yang diemban. Sikap saya: ', 'Mengajak anggota tim untuk melakukan komunikasi secara terbuka agar menemukan kendala dalam bekerja', 1, 'Memberikan kepercayaan kepada anggota tim jika dapat menyelesaikan tugas dengan hasil maksimal yang dilakukan bersama-sama', 2, 'Melakukan diskusi bersama dan menerima saran dari anggota tim guna penyelesaian masalah', 3, 'Saling menyakinkan dan mendorong anggota tim kerja terhadap kemampuan tim dalam menyelesaikan masalah', 4, 'Setiap anggota tim berinisiatif dalam memberikan ide-ide dan alternatif  dalam penyelesaian masalah', 5, 'core'),
(28, 26, 'Dalam suatu rapat bagian, ada rekan yang tidak sependapat dengan usulan saya. Menurut saya: ', 'Perbedaan pendapat merupakan hal yang biasa, dan semakin banyak pendapat maka semakin tinggi partisipasi individu dalam tim. ', 1, 'Perbedaan pendapat merupakan hal yang biasa, dan merupakan  dinamika dalam berkelompok sehingga tidak ada yang perlu dipermasalahkan. ', 2, 'Perbedaan pendapat merupakan hal yang biasa, yang yang  terpenting adalah harus saling menghormati perbedaan pendapat antar anggota tim', 3, 'Perbedaan pendapat merupakan hal yang biasa, hal yang terpenting adalah setiap individu dapat memberikan analisis dan feedback yang rasional   ', 4, 'Perbedaan pendapat merupakan hal yang biasa hal yang terpenting adalah menemukan solusi yang bermanfaat dengan kemungkinan konflik terkecil. ', 5, 'core'),
(29, 27, 'Secara tiba-tiba atasan memberikan tugas bersama yang harus selesai pada hari itu juga dalam waktu yang relatif singkat. Sikap anda sebagai pimpinan:', 'Mendorong seluruh anggota tim untuk segera menyelesaikan tugas yang harus diselesaikan hari itu', 1, 'Menyampaikan peran yang anda harapkan pada setiap anggota tim', 2, 'Berdiskusi dengan seluruh anggota tim terkait dengan pembagian tugas', 3, 'Menganalisis kemampuan individu dan memberi tugas sesuai dengan keahliannya', 4, 'Menganalisis dan membagi tim dalam kelompok yang lebih kecil berdasarkan keahliannya', 5, 'core'),
(30, 28, 'Dari sekian banyak pegawai dalam bagian saya, saya merasa beban tugas terberat ada pada saya dan saya merasa stress karena dikejar-kejar deadline. Respon saya:', 'Menyampaikan dalam tim terkait dengan tugas saya yang terlalu berat. ', 1, 'Berharap tugas yang diberikan kepada saya dapat dikerjakan dapat dikerjakan orang lain.', 2, 'Berdiskusi dan meminta saran pada anggota tim yang lain terkait dengan masalah yang saya alami', 3, 'Memetakan kemampuan yang dimiliki anggota tim lain sehingga tugas dapat dikerjakan oleh orang yang tepat', 4, 'Mengintegerasikan beberapa anggota tim yang berkompeten untuk mengerjakan tugas tersebut', 5, 'core'),
(31, 29, 'Setelah bersusah payah pada akhirnya tim kami berhasil mengerjakan proyek secara memuaskan tahun ini. Kemudian tim kami diberikan proyek yang lebih sulit, hal yang saya lakukan sebagai anggota tim:', 'Mengetahui kelebihan yang saya miliki sehingga dapat dapat bekerja secara optimal dalam tim', 1, 'Memahami peran dan kontribusi yang dapat saya lakukan sehingga dapat memaksimalkannya dalam bidang tersebut', 2, 'Melakukan eksplorasi terkait bakat yang saya miliki sehingga dapat melampaui target yang diberikan', 3, 'Menganalisis setiap tugas dan kesesuaian dengan kemampuan yang saya miliki sehingga dapat maksimal dan melampaui target yang diberikan', 4, 'Berkolaborasi dengan beberapa rekan anggota tim yang kompeten sehingga dapat maksimal dan melampaui target yang diberikan', 5, 'core'),
(32, 30, 'Saya mendapat teguran dari atasan saya karena kesalahan tim yang saya pimpin. Reaksi saya:', 'Saya mencatat seluruh daftar kesalahan yang disampaikan oleh atasan saya dan berupaya memperbaikinya', 1, 'Saya menerimanya, karena hal itu merupakan konsekuensi menjadi pimpinan dan berupaya memperbaikinya', 2, 'Saya meminta saran kepada seluruh anggota tim dan berupaya untuk memperbaikinya', 3, 'Saya berusaha melakukan refleksi atas perilaku dan cara saya memimpin tim saya kemudian berupaya memperbaikinya', 4, 'Saya berusaha mengumpulkan seluruh anggota tim dan meminta saran untuk memperbaikinya', 5, 'core'),
(62, 1, 'Saya senang jika saya dianggap orang yang:', 'Berpendirian ', 1, 'Toleran ', 2, 'Kompeten', 3, 'Pekerja keras', 4, 'Bertanggung jawab', 5, 'managerial'),
(63, 2, 'Suatu ketika unit kerja saya berhasil mendapatkan penghargaan sebagai unit kerja terbaik. Sebagai pimpinan unit kerja tersebut saya diminta untuk menceritakan rahasia mencapai penghargaan tersebut. Hal yang akan saya sampaikan yaitu:', 'Mengatakan bahwa tim beranggotakan orang-orang yang menyukai tantangan ', 1, 'Mengatakan bahwa tim beranggotakan orang-orang yang tanggap terhadap tugas yang diberikan', 2, 'Mengatakan bahwa tim berisikan orang-orang yang kompeten dalam bidangnya', 3, 'Mengatakan bahwa tim berisikan orang-orang yang disiplin dan memanfaatkan waktu sebaik-baiknya', 4, 'Mengatakan bahwa tim berisikan anggota yang mematuhi aturan kerja, dan bertanggung jawab', 5, 'managerial'),
(64, 3, 'Suatu ketika saya mendapat kesempatan untuk mewakili penerimaan penghargaan atas hasil kerja tim yang saya pimpin. Kata sambutan yang akan saya paparkan seputar:', 'Memaparkan rencana kerja di tahun mendatang', 1, 'Ungkapan rasa terimakasih atas penghargaan yang diberikan', 2, 'Menyebutkan nama-nama orang yang berjasa dalam penghargaan ini', 3, 'Komitmen untuk mendapat penghargaan ditahun mendatang', 4, 'Komitmen tim kerja saya untuk menjalani tugas sebaik mungkin', 5, 'managerial'),
(65, 4, 'Jika saya memiliki keinginan untuk menjadi orang hebat, maka saya harus:', 'Berjiwa besar', 1, 'Pemaaf', 2, 'Senang belajar', 3, 'Pengambil Resiko', 4, 'Inovatif', 5, 'managerial'),
(66, 5, 'Saya cukup sering mengalami kegagalan dalam melakukan pekerjaan tertentu. Maka saya:', 'Akan mencoba hal lain yang saya lebih kuasai', 1, 'Kecewa, tetapi saya yakin masih ada semangat untuk mencoba', 2, 'Mencari bantuan untuk jalan keluar', 3, 'Menganggap kegagalan sebagai resiko sekaligus latihan', 4, 'Akan berusaha sampai saya bisa melakukan pekerjaan tersebut', 5, 'managerial'),
(67, 6, 'Saya akan melakukan presentasi laporan pertanggung jawaban di kantor esok hari. Oleh karena itu, sikap saya:', 'Saya menyakinkan diri dengan pasti bahwa presentasi esok hari akan berjalan dengan baik', 1, 'Saya menyelesaikan presentasi esok tanpa memperhatikan masukan dari orang lain karena sudah menjadi kewajiban saya', 2, 'Menunjukkan penampilan dengan maksimal dalam melakukan presentasi esok hari', 3, 'Saya akan mempertahankan pendapat dan penampilan saya saat melakukan presentasi esok hari sehingga presentasi berjalan dengan baik', 4, 'Saya menjadikan tugas yang diberikan ini sebagai tantangan agar dalam penampilan presentasi selanjutnya menjadi lebih baik', 5, 'managerial'),
(68, 7, 'Saya dipercayakan tugas untuk mempersiapkan program rancangan kerja ke depan. Sikap saya:', 'Saya yakin bahwa saya mampu menyelesaikan tugas yang diberikan kepada saya', 1, 'Saya akan terus menghadapi berbagai kesulitan saat saya menyelesaikan tugas yang diberikan', 2, 'Saya percaya dengan keahlian saya dapat memberikan hasil yang terbaik dalam menyelesaikan tugas', 3, 'Saya berusaha menyelesaikan tugas sebaik mungkin meskipun dalam situasi yang tidak menguntungkan', 4, 'Saya yakin dapat memberikan ide ide inovatif dalam menyelesaikan tugas yang diberikan', 5, 'managerial'),
(69, 8, 'Saya ingin rekan-rekan kerja di kantor melihat kualitas diri saya yang terbaik. Yang harus saya lakukan:', 'Saya ingin menunjukkan kinerja dengan maksimal setiap menyelesaikan tugas yang dibebankan', 1, 'Saya selalu berusaha mencari cara yang terbaik dalam menyelesaikan tugas yang dibebankan kepada saya', 2, 'Saya yakin dengan kemampuan yang saya miliki dapat bermanfaat bagi perusahaan', 3, 'Saya selalu optimis mampu menyelesaikan setiap persoalan atau saat situasi yang sulit yang akan saya hadapi', 4, 'Saya siap menerima tugas yang menantang agar menjadi peluang untuk meningkatkan kemampuan kinerja', 5, 'managerial'),
(70, 9, 'Saya merasa tugas yang diberikan dari atasan terlalu rumit dan sulit. Hal yang harus saya lakukan:', 'Saya yakin terhadap tugas yang diberikan dapat saya selesaikan dengan hasil maksimal', 1, 'Saya mampu menghadapi suatu tugas rumit dan sulit tanpa bantuan orang lain', 2, 'Saya percaya dengan kemampuan yang saya miliki dapat memecahkan tugas meskipun rumit dan sulit', 3, 'Saya mampu mempertahankan kemampuan saya dalam menghadapi masalah situasi yang rumit dan sulit', 4, 'Saya semakin tertantang jika saya mendapatkan pekerjaan yang rumit dan sulit', 5, 'managerial'),
(71, 10, 'Di dalam suatu forum sedang diadakan rapat dengan pimpinan serta rekan-rekan kerja di kantor dan pimpinan meminta saya untuk berpendapat mengenai pembahasan rapat tersebut. Sikap saya:', 'Saya yakin dan mampu mengutarakan pendapat saya dengan baik', 1, 'Saya mampu untuk berpendapat tanpa melihat pendapat orang-orang di sekitar saya', 2, 'Saya berani melakukan diskusi dengan rekan yang lain untuk menemukan ide-ide menarik berbeda dari lainnya', 3, 'Saya tetap mengutarakan pendapat saya meskipun tahu risiko yang akan terjadi', 4, 'Saya berani bertanggung-jawab pada setiap pendapat yang saya bicarakan di dalam forum rapat', 5, 'managerial'),
(72, 11, 'Saya baru saja dipindahkan ke unit kerja yang anggotanya sering membolos. Hal ini tentu sangat mengganggu jalannya operasional kantor. Maka sebagai pimpinan unit yang saya lakukan :', 'Menanyakan alasan mereka membolos', 1, 'Memberikan teguran setiap kali membolos', 2, 'Menasehati agar mereka sadar akan kewajibannya', 3, 'Memberikan Surat Peringatan (SP)', 4, 'Memberikan ancaman akan memutasi pegawai tersebut', 5, 'managerial'),
(73, 12, 'Dalam bekerja secara kelompok. Saya cenderung orang yang :', 'Diam dan mendengarkan karena pendengar yang baik nantinya akan bekerja dengan baik', 1, 'Menjadi pendengar yang baik, serta mencatat seluruh usulan', 2, 'Mendominasi jalannya diskusi karena saya memiliki kompetensi untuk topik tersebut', 3, 'Mendengarkan dan memberikan kritik setiap ditemukan kesalahan', 4, 'Aktif serta memberikan usul dan saran', 5, 'managerial'),
(74, 13, 'Ketika saya memimpin sebuah proyek, saya senang jika memiliki staf yang:', 'Kritis dan sering memberi saran bagi proyek kami', 1, 'Mudah diatur dengan baik', 2, 'Cepat mengerti dan mengetahui langkah yang harus dikerjakan', 3, 'Menyelesaikan pekerjaan sebelum tenggang waktu', 4, 'Semangat dalam mengerjakan tugas', 5, 'managerial'),
(75, 14, 'Suatu ketika ada seorang pegawai magang yang ditempatkan di tim yang sama dengan saya. Sebagai ketua tim, sikap saya:', 'Berusaha lebih jauh mengenal pribadinya', 1, 'Memberinya pekerjaan untuk mengetahui kemampuannya ', 2, 'Menjelaskan proses kerja dibagian saya dengan detail', 3, 'Memberikan contoh bagaimana cara melakukan pekerjaan yang harus dilakukannya', 4, 'Mengkomunikasikan terkait tugas dan target tim yang harus dikerjakan ', 5, 'managerial'),
(76, 15, 'Saya sedang memimpin sebuah proyek, dan atasan saya meminta untuk saya melakukan evaluasi terhadap kinerja tim saya karena hasil yang kami kerjakan kurang memuaskan. Hal yang akan saya perhatikan:', 'Memastikan apakah seluruh anggota tim paham tentang pekerjaan yang dilakukannya', 1, 'Memastikan efektivitas kerja tim dalam menyelesaikan tugasnya', 2, 'Memastikan apakah seluruh anggota telah mendapatkan kebutuhan dasar dalam mengerjakan tugasnya', 3, 'Melakukan evaluasi terhadap sistem kepemimpinan yang saya terapkan ', 4, 'Melakukan evaluasi visi tim terhadap proyek yang kami kerjakan', 5, 'managerial'),
(77, 16, 'Ketika saya sedang memimpin sebuah rapat mengenai pembagian tugas yang akan dikerjakan bersama anggota tim, namun ada beberapa anggota selalu membuat gaduh di dalam ruangan. Sikap saya:', 'Meminta informasi dari anggota tim kemudian membuat forum diskusi untuk bertukar pendapat ', 1, 'Mengarahkan anggota tim untuk membuats trategi tertentu dalam menjalankan tugas yang diberikan', 2, 'Memastikan anggota tim mampu menjalankan tugas masing-masing sesuai dengan kesepakatan saat rapat berlangsung', 3, 'Memberikan teguran dengan mengeluarkan anggota tim saat rapat yang tidak dapat menghargai anggota lain di ruangan', 4, 'Memberi penghargaan bagi anggota tim yang mampu menyelesaikan tugas sebelum waktu yang ditentukan', 5, 'managerial'),
(78, 17, 'Saya ditunjuk sebagai pemimpin untuk menjalankan suatu proyek, sebagai pemimpin harus mampu mengenali berbagai hal yang berpengaruh terhadap anggota tim dalam mencapai target yang diinginkan. Sikap saya:', 'Mencari tahu informasi terkait permasalahan anggota tim agar dapat menjalankan sesuai target yang diinginkan', 1, 'Membimbing dan mengarahkan anggota tim agar mengenali masing-masing potensi yang dimiliki', 2, 'Menjaga hubungan kerja yang harmonis dengan anggota tim agar meningkatkan efektivitas dalam bekerja', 3, 'Memberikan sanksi bagi anggota tim dalam menyelesaikan tugas melebihi waktu yang ditentukan', 4, 'Memberikan bonus yang menarik kepada anggota tim agar dapat meningkatkan kemampuan kinerja yang dimiliki', 5, 'managerial'),
(79, 18, 'Saya ditugaskan untuk memimpin tim dengan waktu kerja yang sangat terbatas. Saat saya memberikan sosialisasi mengenai proyek, anggota tim menunjukkan sikap yang kurang peduli dengan tugas yang diberikan. Sikap saya:', 'Mengumpulkan anggota tim dan berdiskusi terkait permasalahan yang dihadapi serta memastikan seluruh anggota mendapatkan informasi yang sesuai mengenai proyek yang akan dikerjakan', 1, 'Menjelaskan lebih detail mengenai tugas masing-masing anggota tim yang akan membuat anggota tim mengerti masing-masing tugas dan bekerja optimal', 2, 'Memastikan anggota tim menjalankan proyek sesuai dengan prosedur yang sudah direncanakan dan ditetapkan sebelumnya sesuai kesepakatan', 3, 'Terjun langsung dalam proyek yang sedang dilaksanakan untuk menjadi contoh bagi anggota tim lain', 4, 'Meminta anggota tim untuk menyampaikan kesulitan-kesulitan yang dihadapi selama menjalankan proyek dan melakukan evaluasi bersama', 5, 'managerial'),
(80, 19, 'Ketika proyek kerja yang saya pimpin memberikan hasil yang baik dikarenakan dari anggota tim mampu bekerja dengan optimal. Sikap yang saya lakukan:', 'Memberikan penjelasan terkait kontribusi antar anggota tim dalam menyelesaikan proyek sehingga mencapai target yang ingin dicapai', 1, 'Memotivasi dan mendorong anggota tim agar lebih meningkatkan kinerjanya dalam bekerja', 2, 'Menjaga kekompakkan anggota tim agar mampu menjalankan tugas selanjutnya sesuai sasaran target yang diharapkan', 3, 'Memberikan contoh dalam berkomunikasi antar anggota tim agar dapat menyelesaikan tugas selanjutnya', 4, 'Berkomitmen dan bertanggung jawab terhadap peningkatan motivasi kinerja agar anggota tim lebih optimal dalam bekerja', 5, 'managerial'),
(81, 20, 'Perusahaan menunjuk saya sebagai pimpinan di unit kerja dan mengharapkan kinerja organisasi berjalan cukup efisien. Sikap saya:', 'Memberikan informasi kepada rekan kerja terkait agenda kerja yang akan dikerjakan dan telah disepakati bersama', 1, 'Membuat serangkaian tujuan dan mengajak rekan kerja berpartisipasi guna mencapai target perusahaan', 2, 'Membangun strategi baru dan membangkitkan rasa percaya diri rekan kerja guna mencapai target perusahaan', 3, 'Mengawasi kegiatan dan memberi saran kepada rekan kerja jika terjadi kesalahan agar menjadi lebih baik lagi dalam bekerja', 4, 'Memberikan kebebasan bagi rekan kerja untuk dapat menyampaikan pendapatnya guna kemajuan perusahaan', 5, 'managerial');

-- --------------------------------------------------------

--
-- Table structure for table `jawab_core`
--

CREATE TABLE `jawab_core` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `j1` int(5) NOT NULL,
  `j2` int(5) NOT NULL,
  `j3` int(5) NOT NULL,
  `j4` int(5) NOT NULL,
  `j5` int(5) NOT NULL,
  `j6` int(5) NOT NULL,
  `j7` int(5) NOT NULL,
  `j8` int(5) NOT NULL,
  `j9` int(5) NOT NULL,
  `j10` int(5) NOT NULL,
  `j11` int(5) NOT NULL,
  `j12` int(5) NOT NULL,
  `j13` int(5) NOT NULL,
  `j14` int(5) NOT NULL,
  `j15` int(5) NOT NULL,
  `j16` int(5) NOT NULL,
  `j17` int(5) NOT NULL,
  `j18` int(5) NOT NULL,
  `j19` int(5) NOT NULL,
  `j20` int(5) NOT NULL,
  `j21` int(5) NOT NULL,
  `j22` int(5) NOT NULL,
  `j23` int(5) NOT NULL,
  `j24` int(5) NOT NULL,
  `j25` int(5) NOT NULL,
  `j26` int(5) NOT NULL,
  `j27` int(5) NOT NULL,
  `j28` int(5) NOT NULL,
  `j29` int(5) NOT NULL,
  `j30` int(5) NOT NULL,
  `achiv` float NOT NULL,
  `organ` float NOT NULL,
  `teamwork` float NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `s_detik` int(30) NOT NULL,
  `s_menit` int(11) NOT NULL,
  `s_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawab_core`
--

INSERT INTO `jawab_core` (`id`, `username`, `j1`, `j2`, `j3`, `j4`, `j5`, `j6`, `j7`, `j8`, `j9`, `j10`, `j11`, `j12`, `j13`, `j14`, `j15`, `j16`, `j17`, `j18`, `j19`, `j20`, `j21`, `j22`, `j23`, `j24`, `j25`, `j26`, `j27`, `j28`, `j29`, `j30`, `achiv`, `organ`, `teamwork`, `waktu_awal`, `waktu_akhir`, `s_detik`, `s_menit`, `s_jam`) VALUES
(133, '9000001', 2, 5, 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 3, 5, 5, 0, 0, 0, 4, 0, 0, 0, 0, 0, 5, 1.7, 1.8, 0.9, '2019-09-27 13:57:26', '2019-09-27 13:57:48', 22, 0, 0),
(134, '11111', 2, 0, 0, 0, 0, 0, 2, 0, 5, 5, 0, 3, 5, 0, 2, 0, 5, 0, 5, 3, 5, 4, 0, 5, 0, 5, 3, 5, 2, 5, 1.4, 2.3, 3.4, '2019-09-27 14:28:05', '2019-09-27 14:28:24', 19, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jawab_managerial`
--

CREATE TABLE `jawab_managerial` (
  `id` int(5) NOT NULL,
  `id_akun` varchar(30) NOT NULL,
  `j1` int(5) NOT NULL,
  `j2` int(5) NOT NULL,
  `j3` int(5) NOT NULL,
  `j4` int(5) NOT NULL,
  `j5` int(5) NOT NULL,
  `j6` int(5) NOT NULL,
  `j7` int(5) NOT NULL,
  `j8` int(5) NOT NULL,
  `j9` int(5) NOT NULL,
  `j10` int(5) NOT NULL,
  `j11` int(5) NOT NULL,
  `j12` int(5) NOT NULL,
  `j13` int(5) NOT NULL,
  `j14` int(5) NOT NULL,
  `j15` int(5) NOT NULL,
  `j16` int(5) NOT NULL,
  `j17` int(5) NOT NULL,
  `j18` int(5) NOT NULL,
  `j19` int(5) NOT NULL,
  `j20` int(5) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ket_kategori`
--

CREATE TABLE `ket_kategori` (
  `kategori` varchar(30) NOT NULL,
  `ket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ket_kategori`
--

INSERT INTO `ket_kategori` (`kategori`, `ket`) VALUES
('core', 'Core Competention'),
('managerial', 'Managerial Competention');

-- --------------------------------------------------------

--
-- Table structure for table `ket_level`
--

CREATE TABLE `ket_level` (
  `id` int(11) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ket_level`
--

INSERT INTO `ket_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `bank_soal`
--
ALTER TABLE `bank_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawab_core`
--
ALTER TABLE `jawab_core`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawab_managerial`
--
ALTER TABLE `jawab_managerial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket_level`
--
ALTER TABLE `ket_level`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `bank_soal`
--
ALTER TABLE `bank_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `jawab_core`
--
ALTER TABLE `jawab_core`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `jawab_managerial`
--
ALTER TABLE `jawab_managerial`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ket_level`
--
ALTER TABLE `ket_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
