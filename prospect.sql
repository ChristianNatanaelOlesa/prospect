-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2022 at 02:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prospect`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`) VALUES
(4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `id` int(5) NOT NULL,
  `device` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_pilih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `device`, `status`, `id_pilih`) VALUES
(1, 'DMCR', '0', 2),
(2, 'DGPT-2', '0', 2),
(3, 'RIS', '0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enclosure`
--

CREATE TABLE `enclosure` (
  `id` int(11) NOT NULL,
  `enclosure` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enclosure`
--

INSERT INTO `enclosure` (`id`, `enclosure`) VALUES
(1, 'IP-00'),
(2, 'IP-10'),
(3, 'IP-11'),
(4, 'IP-12'),
(5, 'IP-13'),
(6, 'IP-15'),
(7, 'IP-20'),
(8, 'IP-21'),
(9, 'IP-22'),
(10, 'IP-23'),
(11, 'IP-24'),
(12, 'IP-25'),
(13, 'IP-30'),
(14, 'IP-31'),
(15, 'IP-32'),
(16, 'IP-33'),
(17, 'IP-34'),
(18, 'IP-35'),
(19, 'IP-40'),
(20, 'IP-41'),
(21, 'IP-42'),
(22, 'IP-43'),
(23, 'IP-44'),
(24, 'IP-45'),
(25, 'IP-50'),
(26, 'IP-51'),
(27, 'IP-52'),
(28, 'IP-53'),
(29, 'IP-54'),
(30, 'IP-55'),
(31, 'IP-56');

-- --------------------------------------------------------

--
-- Table structure for table `h_rpospect`
--

CREATE TABLE `h_rpospect` (
  `id` int(11) NOT NULL,
  `noprospect` varchar(20) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `tgl_prospect` date NOT NULL,
  `project` varchar(100) NOT NULL,
  `kd_cust` varchar(20) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `segment` varchar(50) NOT NULL,
  `sub_segment` varchar(100) NOT NULL,
  `kd_sales` varchar(20) NOT NULL,
  `sales` varchar(30) NOT NULL,
  `priority` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `grupsales` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `h_rpospect`
--

INSERT INTO `h_rpospect` (`id`, `noprospect`, `tahun`, `tgl_prospect`, `project`, `kd_cust`, `customer`, `alamat`, `segment`, `sub_segment`, `kd_sales`, `sales`, `priority`, `status`, `grupsales`) VALUES
(176, 'P21-0001', '2021', '2021-10-25', 'Jawa 9 - Fire Pump', '', 'PT. Inspira Energi Sekawan', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'Low', 0, 'Sales PLN'),
(177, 'P21-0002', '2021', '2021-10-25', 'PABRIK', '', 'PT QUADRO INDONESIA PERKASA', '', 'Industry', 'Food & Beverages', '', 'Christiana Sari Dewi ', 'High', 0, 'Sales Swasta'),
(178, 'P21-0003', '2021', '2021-10-28', 'QIS_MNT_2021_00894', '', 'PT Mitsubishi Chemical Indonesia', '', 'Industry', 'Chemical Industry', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(179, 'P21-0004', '2021', '2021-10-28', 'BUILDING', '', 'PT. DUTA FUJI ELEKTRIK', '', 'Buiding', 'Office', '', 'Christiana Sari Dewi ', 'High', 0, 'Sales Swasta'),
(180, 'P21-0005', '2021', '2021-10-28', 'Bandara Hang Nadim Batam', '', 'PT Nihon Globaltech', '', 'Infrastructure', 'Airport', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(181, 'P21-0006', '2021', '2021-10-28', 'PERTAMINA TBBM Maumere', '', 'PT Nindya Karya', '', 'Oil Gas Mining', 'Oil Company', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(182, 'P21-0007', '2021', '2021-10-29', 'JBR', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(183, 'P21-0008', '2021', '2021-10-29', 'Atmajaya', '', 'PT Mitra adalan sakti', '', 'Other ', 'No Information', '', 'Musa ', 'High', 0, 'Sales Swasta'),
(184, 'P21-0009', '2021', '2021-10-29', 'Pabrik Minyak Goreng - Batulicin', '', 'PT Wijaya Karya Rekayasa Konstruksi', '', 'Industry', 'Chemical Industry', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(185, 'P21-0010', '2021', '2021-11-01', 'PABRIK', '', 'PT. DWIKA SARANA TEKNIK', '', 'Industry', 'Food & Beverages', '', 'Christiana Sari Dewi ', 'Low', 0, 'Sales Swasta'),
(186, 'P21-0011', '2021', '2021-11-01', 'havealock', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(187, 'P21-0012', '2021', '2021-11-01', 'Landfill Mining and RDF Plant Project', '', 'INTI KARYA PERSADA TEKNIK', '', 'Energy', 'IPP / Power Plant', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(188, 'P21-0013', '2021', '2021-11-01', 'PT. KRE', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(189, 'P21-0014', '2021', '2021-11-01', 'EXCEL METAL INDUSTRI', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Steel Industry', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(190, 'P21-0015', '2021', '2021-11-01', 'PABRIK', '', 'PT. PEMUKA SAKTI INDAH', '', 'Industry', 'Food & Beverages', '', 'Christiana Sari Dewi ', 'High', 0, 'Sales Swasta'),
(192, 'P21-0017', '2021', '2021-11-01', 'Pertamina EP Cepu', '', 'PT. Hary Sekawan Abadi', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(193, 'P21-0018', '2021', '2021-11-01', 'GZ0200007A', '', 'PT Pertamina Hulu Rokan', '', 'Oil Gas Mining', 'Oil Company', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(194, 'P21-0019', '2021', '2021-11-01', 'PABRIK ', '', 'PT. WELLTECH POWERIC INDONESIA', '', 'Industry', 'Food & Beverages', '', '<br /><b>Notice</b>:  Undefine', 'Low', 0, ''),
(195, 'P21-0020', '2021', '2021-11-01', 'CR116', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(196, 'P21-0021', '2021', '2021-11-01', 'Converter YTL', '', 'YTL Cement', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(197, 'P21-0022', '2021', '2021-11-02', 'Pertamina Hulu ROKAN', '', 'PT. Reka Patria Ekaguna', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(198, 'P21-0023', '2021', '2021-11-02', 'Pahang Cement Distribution Transformers', '', 'YTL Cement', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(199, 'P21-0024', '2021', '2021-11-02', 'RFQ21459 RMR Electric', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(200, 'P21-0025', '2021', '2021-11-03', 'BREMFIELD PULAU INDAH', '', 'Ablecon', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(201, 'P21-0026', '2021', '2021-11-03', 'RFQ21460- Airline Hose project-SG', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(202, 'P21-0027', '2021', '2021-11-04', 'PT MHU COAL', '', 'PT PRACOM', '', 'Oil Gas Mining', 'Mining Company ( Coal, Gold, Etc)', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(203, 'P21-0028', '2021', '2021-11-04', 'PT REKAYASA CIPTA USAHA', '', 'PT REKAYASA CIPTA USAHA', '', 'Industry', 'Food & Beverages', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(204, 'P21-0029', '2021', '2021-11-04', 'RFQ21463 - DEEC (UPANG Project)', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(205, 'P21-0030', '2021', '2021-11-05', 'RFQ21461 HCEPL-Airline House replacement-SG', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(206, 'P21-0031', '2021', '2021-11-05', 'RFQ21465 DEEC-300kVA Transformer Requirement', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(207, 'P21-0032', '2021', '2021-11-05', 'Radella Holdings Pharma Plant project', '', 'Rotax', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(208, 'P21-0033', '2021', '2021-11-08', 'Jakarta Sewerage System Development', '', 'PT Adhi Karya', '', 'Industry', 'Chemical Industry', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(209, 'P21-0034', '2021', '2021-11-08', 'RFQ21468SG-Trafindo- PBE Philippine requirement', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(210, 'P21-0035', '2021', '2021-11-08', '-', '', 'PT. KAUSA UTAMA ANUGERAH', '', 'Industry', 'Food & Beverages', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(211, 'P21-0036', '2021', '2021-11-08', 'Methanol Storage Facility Pupuk Kaltim', '', 'PT Recon Sarana Utama', '', 'Industry', 'Cement & Fertilizer', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(212, 'P21-0037', '2021', '2021-11-08', 'Mattel', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Food & Beverages', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(213, 'P21-0038', '2021', '2021-11-09', 'Medco Kaji Palembang', '', 'PT. Larondan', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(214, 'P21-0039', '2021', '2021-11-09', 'Sanofi Evolutive Vaccine Facility', '', 'Sanofi Manufacturing Pte Ltd', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(215, 'P21-0040', '2021', '2021-11-10', '-', '', 'REKA GUNA ENGINEERING', '', 'Other ', 'No Specified Project', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(216, 'P21-0041', '2021', '2021-11-10', 'INDOSAT PONDOK GEDE', '', 'DWIMITRA MANDIRI EKATAMA', '', 'Buiding', 'Office', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(217, 'P21-0042', '2021', '2021-11-10', 'STT PROJECT', '', 'SCHNEIDER INDONESIA', '', 'Infrastructure', 'Telecomunication', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(218, 'P21-0043', '2021', '2021-11-10', 'Pelindo 2', '', 'PT. Energi Pelabuhan Indonesia', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(219, 'P21-0044', '2021', '2021-11-10', 'Opus Bay Batam', '', 'PT. Protech Tonas Indonesia', '', 'Buiding', 'Hotel / Resort', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(220, 'P21-0045', '2021', '2021-11-10', 'CGK063', '', 'Ablecon', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(221, 'P21-0046', '2021', '2021-11-10', 'RFQ21471PH-Trafindo-Novicio Requirement', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(222, 'P21-0047', '2021', '2021-11-10', 'RFQ21472SG-Trafindo-Grace Electrical Project', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(223, 'P21-0048', '2021', '2021-11-11', 'FEED STUDY FOR TAMBAKBOYO FIELD DEVELOPMENT', '', 'TRIPATRA ENGINEERS AND CONSTRUCTORS', '', 'Oil Gas Mining', 'Oil Company', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(224, 'P21-0049', '2021', '2021-11-11', 'CL MASTERBATCH', '', 'CABOT INDONESIA', '', 'Industry', 'Chemical Industry', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(225, 'P21-0050', '2021', '2021-11-11', 'RU VII Kasim - Sorong', '', 'PT. Kilang Pertamina Internasional', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(226, 'P21-0051', '2021', '2021-11-12', 'OLTC', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(227, 'P21-0052', '2021', '2021-11-15', 'Perumahan / mess tambang samarinda', '', 'Bp. Warno', '', 'Other ', 'No Specified Project', '', 'Rizky Mulya Nugroho ', 'Low', 0, 'Sales PLN'),
(228, 'P21-0053', '2021', '2021-11-15', 'NTT JKT 2 L8', '', 'DUTA FUJI ELEKTRIK', '', 'Buiding', 'Office', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(229, 'P21-0054', '2021', '2021-11-15', '-', '', 'COMECA INDONESIA', '', 'Industry', 'Chemical Industry', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(230, 'P21-0055', '2021', '2021-11-15', 'MEDAN 2500 KVA', '', 'ADHYA ANUGRAH INDOJAYA', '', 'Industry', 'Chemical Industry', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(231, 'P21-0056', '2021', '2021-11-16', 'Jawa Tengah Plant', '', 'Sunindo Mandiri', '', 'Industry', 'Food & Beverages', '', 'Hinca ', 'High', 0, 'Sales Swasta'),
(232, 'P21-0057', '2021', '2021-11-16', 'Tuna Project', '', 'Cargill', '', 'Industry', 'Chemical Industry', '', 'Hinca ', 'High', 0, 'Sales Swasta'),
(233, 'P21-0058', '2021', '2021-11-17', 'Mill Sungai Lilin', '', 'Cargill', '', 'Industry', 'Chemical Industry', '', 'Hinca ', 'High', 0, 'Sales Swasta'),
(234, 'P21-0059', '2021', '2021-11-17', 'Pertamina Hulu ROKAN', '', 'PT. Pertamina Hulu Energy Rokan', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(235, 'P21-0060', '2021', '2021-11-17', 'Katalis Sinergy Indonesia', '', 'PT. Patra Badak Arun Solusi', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(236, 'P21-0061', '2021', '2021-11-18', 'Alfa - Singapore', '', 'Schneider Electric', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(237, 'P21-0062', '2021', '2021-11-18', 'JFE STEEL', '', 'JFE STEEL', '', 'Industry', 'Steel Industry', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(238, 'P21-0063', '2021', '2021-11-19', 'RFQ21484 DEEC Requirement', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(239, 'P21-0064', '2021', '2021-11-19', 'PLTU Palu 10 MW', '', 'PLN UP3 Palu', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(240, 'P21-0065', '2021', '2021-11-19', 'RFQ21486 PPESI-Cebu Project', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(241, 'P21-0066', '2021', '2021-11-22', 'INDONESIA KOITO', '', 'PT. INDONESIA KOITO', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(242, 'P21-0067', '2021', '2021-11-22', 'PRC-Biodiesel-016', '', 'PT. Padang Raya Cakrawala ', '', 'Industry', 'Chemical Industry', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(243, 'P21-0068', '2021', '2021-11-22', '-', '', 'PT. KRAKATAU DAYA LISTRIK', '', 'Energy', 'IPP / Power Plant', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(244, 'P21-0069', '2021', '2021-11-22', 'RFQ21490-Trafindo_Power Seraya Plant-1100kVA oil TF replacement requirement - (Urgent)', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(245, 'P21-0070', '2021', '2021-11-22', 'RFQ21492 Trafindo_MPPI-Transformer Inquiry', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(246, 'P21-0071', '2021', '2021-11-22', 'PEMBANGKIT', '', 'PT. TERAVISINDO SUKSES', '', 'Energy', 'IPP / Power Plant', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(247, 'P21-0072', '2021', '2021-11-22', 'Zulu-Lampung', '', 'Cargill', '', 'Industry', 'Chemical Industry', '', 'Hinca ', 'Low', 0, 'Sales Swasta'),
(248, 'P21-0073', '2021', '2021-11-22', 'RFQ21491 Centertronics Transformer requirement', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(249, 'P21-0074', '2021', '2021-11-23', 'PT. ATP GROUP', '', 'PT. ATP GROUP', '', 'Industry', 'Food & Beverages', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(250, 'P21-0075', '2021', '2021-11-23', 'PRC-Biodiesel-016', '', 'Apical Group PT.Padang Raya Cakrawala', '', 'Industry', 'Chemical Industry', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(251, 'P21-0076', '2021', '2021-11-23', 'Motor Test Station 6000V Batam', '', 'PT Elmesucon Ruhama', '', 'Energy', 'Substation', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(252, 'P21-0077', '2021', '2021-11-24', 'Other', '', 'Hidup Baru Electric', '', 'Other ', 'No Information', '', 'Hinca ', 'Low', 0, 'Sales Swasta'),
(253, 'P21-0078', '2021', '2021-11-24', 'CONFIDENTIAL - GAS PLANT', '', 'JGC INDONESIA', '', 'Oil Gas Mining', 'Gas Company', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(254, 'P21-0079', '2021', '2021-11-24', 'Batu Hijau', '', 'PT. Amman Mineral Nusa Tenggara', '', 'Oil Gas Mining', 'Mining Company ( Coal, Gold, Etc)', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(255, 'P21-0080', '2021', '2021-11-24', 'Batu Hijau', '', 'PT. Amman Mineral Nusa Tenggara', '', 'Oil Gas Mining', 'Mining Company ( Coal, Gold, Etc)', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(256, 'P21-0081', '2021', '2021-11-24', 'Badak Lng', '', 'CV SURYA PUTRA KEMENANGAN', '', 'Oil Gas Mining', 'Gas Company', '', 'Lusy ', 'Low', 0, 'Sales Swasta'),
(257, 'P21-0082', '2021', '2021-11-24', 'RFQ21495 100kVA-Urgent requirement', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(258, 'P21-0083', '2021', '2021-11-24', 'RFQ21494-ChoonHuatEngineering_1500kVA Oil TF', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(259, 'P21-0084', '2021', '2021-11-24', 'Transformer price - Solitra Power ', '', 'Rotax', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(260, 'P21-0085', '2021', '2021-11-25', 'Pertamina Hulu Energy', '', 'PT. Baker Hughes', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(261, 'P21-0086', '2021', '2021-11-25', 'Pertamina EP Lirik', '', 'PT. Hary Sekawan Abadi', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(262, 'P21-0087', '2021', '2021-11-25', 'ISO XMR', '', 'PT. Pertamina Hulu Energy OSES', '', 'Oil Gas Mining', 'Oil Company', '', 'Rudi Ta an ', 'High', 0, 'Sales BUMN'),
(263, 'P21-0088', '2021', '2021-11-25', '-', '', 'PT JELMA RANGGA GADING', '', 'Industry', 'Cement & Fertilizer', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(264, 'P21-0089', '2021', '2021-11-26', 'PLTP DIENG 1 - FEED SUMUR EPC HCE 10A', '', 'INTI KARYA PERSADA TEKNIK', '', 'Energy', 'IPP / Power Plant', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(265, 'P21-0090', '2021', '2021-11-26', 'HUAWEI', '', 'HUAWEI INDONESIA', '', 'Infrastructure', 'Telecomunication', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(266, 'P21-0091', '2021', '2021-11-29', 'PATIMBAN', '', 'SARANA UTAMA ADIMANDIRI', '', 'Energy', 'IPP / Power Plant', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(267, 'P21-0092', '2021', '2021-11-29', 'NIPPON SEIKI', '', 'ZENA PURWA PERKASA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(268, 'P21-0093', '2021', '2021-11-29', 'TRAYA TIRTA', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Food & Beverages', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(269, 'P21-0094', '2021', '2021-11-29', '-', '', 'PT. SERBA PRIMA', '', 'Industry', 'Food & Beverages', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(270, 'P21-0095', '2021', '2021-11-29', 'HARUM EXECUTION PROJECT - SPV INDONESIA', '', 'INTI KARYA PERSADA TEKNIK', '', 'Industry', 'Chemical Industry', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(271, 'P21-0096', '2021', '2021-11-30', 'PT. KALTIMEX ENERGY ', '', 'PT. KALTIMEX ENERGY ', '', 'Industry', 'Chemical Industry', '', 'Sunata ', 'Low', 0, 'Sales Swasta'),
(272, 'P21-0097', '2021', '2021-11-30', '2500 KVA CONSERVATOR', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(273, 'P21-0098', '2021', '2021-12-01', 'KHS Trafo Distribusi 2021', '', 'PT. PLN (Persero) ', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(274, 'P21-0099', '2021', '2021-12-01', 'KHS Trafo Distribusi 2021', '', 'PT. PLN (Persero)', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(275, 'P21-0100', '2021', '2021-12-01', 'DONGJIN', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Steel Industry', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(276, 'P21-0101', '2021', '2021-12-01', 'MMP NICKEL SMELTER PROJECT ', '', 'PT PP', '', 'Oil Gas Mining', 'Smelter / Oil & gas Terminal', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(277, 'P21-0102', '2021', '2021-12-02', 'KHS Trafo Distribusi 2021', '', 'PT. PLN (Persero)', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(278, 'P21-0103', '2021', '2021-12-02', 'FAJAR PAPER TURBO', '', 'SIEMENS INDONESIA', '', 'Industry', 'Chemical Industry', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(279, 'P21-0104', '2021', '2021-12-06', 'Semarang', '', 'PT. INDONESIA POWER', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(280, 'P21-0105', '2021', '2021-12-07', 'SUMBAWA LNG TERMINAL & REGAS FACILITY', '', 'INTI KARYA PERSADA TEKNIK', '', 'Energy', 'Substation', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(281, 'P21-0106', '2021', '2021-12-07', 'RFQ21505 RE: SG-RFQ21.TTS.DSTA-Trafindo-Transformer Project (IMPORTANT)', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(282, 'P21-0107', '2021', '2021-12-08', 'Jakarta Plant', '', 'Wilmar Group', '', 'Industry', 'Food & Beverages', '', 'Hinca ', 'High', 0, 'Sales Swasta'),
(283, 'P21-0108', '2021', '2021-12-08', 'PLTA Timo', '', 'PT. Indonesia Power', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'Low', 0, 'Sales PLN'),
(284, 'P21-0109', '2021', '2021-12-08', 'PLTU Tambak Lorok - Semarang', '', 'PT. Indonesia Power', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(285, 'P21-0110', '2021', '2021-12-08', 'Terminal Teluk Lamong', '', 'PT. Lamong Energi', '', 'Infrastructure', 'Seaport', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(286, 'P21-0111', '2021', '2021-12-08', 'RFQ for  Malaysia AT&S 132kV GIS S/S - Earthing Transformer', '', 'GE Renewable Energy', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(287, 'P21-0112', '2021', '2021-12-08', 'BDC 275KV Earthing Transformer EWT', '', 'Ablecon', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(288, 'P21-0113', '2021', '2021-12-09', 'NTC', '', 'PT. SARANA UTAMA ADIMANDIRI', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(289, 'P21-0114', '2021', '2021-12-09', 'YKK', '', 'PT. MITRAIDA NUSANTARA', '', 'Industry', 'Food & Beverages', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(290, 'P21-0115', '2021', '2021-12-09', 'PLTS ', '', 'PT. Wika Energi', '', 'Energy', 'IPP / Power Plant', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(291, 'P21-0116', '2021', '2021-12-09', 'PT Inka', '', 'PT. Inspira Energi Sekawan', '', 'Industry', 'Automotive ', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(292, 'P21-0117', '2021', '2021-12-13', 'WTP Sumbawa', '', 'PDAM Sumbawa', '', 'Energy', 'Substation', '', 'Rizky Mulya Nugroho ', 'Low', 0, 'Sales PLN'),
(293, 'P21-0118', '2021', '2021-12-13', 'PLTU Palembang', '', 'PT. SINAR ZAHID UTAMA', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(294, 'P21-0119', '2021', '2021-12-13', 'FCC', '', 'PT. TAIYO SINAR RAYA TEKNIK', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(295, 'P21-0121', '2021', '2021-12-13', '-', '', 'PT. JELMA RANGGA GADING', '', 'Industry', 'Food & Beverages', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(296, 'P21-0122', '2021', '2021-12-13', 'RFQ-MTI 1226-1', '', 'PT. MERDEKA TSINGHAN INDONESIA (MTI)', '', 'Industry', 'Steel Industry', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(297, 'P21-0123', '2021', '2021-12-13', 'SG/RFQ21506-BP_ Project 118 (IWMF)-5MVA 6.6/0.415kV Transformer', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(298, 'P21-0124', '2021', '2021-12-14', 'Power Plant', '', 'PT. ABB', '', 'Energy', 'IPP / Power Plant', '', 'Rizky Mulya Nugroho ', 'Low', 0, 'Sales PLN'),
(299, 'P21-0125', '2021', '2021-12-14', 'BRI', '', 'DWIMITRA MANDIRI EKATAMA', '', 'Buiding', 'Office', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(300, 'P21-0126', '2021', '2021-12-15', 'SRI', '', 'SYNTHETIC RUBBER INDONESIA', '', 'Industry', 'Chemical Industry', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(301, 'P21-0127', '2021', '2021-12-15', 'RFQ for Earting Transformer TRECSA-59-2021', '', 'GE Energy', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(302, 'P21-0128', '2021', '2021-12-15', 'PR TO BE ADVISE - CLOSING ON 20/12/2021', '', 'Kedah Cement', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(303, 'P21-0129', '2021', '2021-12-15', 'SG/RFQ21509-TRAFINDO-TTS_Mindef Replacement Project', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(304, 'P21-0130', '2021', '2021-12-15', 'Purwakarta Project', '', 'PT. TATA METAL LESTARI', '', 'Industry', 'Steel Industry', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(305, 'P21-0131', '2021', '2021-12-16', 'No information', '', 'PT PURAMAYUNGAN', '', 'Other ', 'No Information', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(306, 'P21-0132', '2021', '2021-12-16', 'Hung A Indonesia', '', 'Utama Jaya Teknik', '', 'Industry', 'Automotive ', '', 'Hinca ', 'High', 0, 'Sales Swasta'),
(307, 'P21-0133', '2021', '2021-12-16', 'SG/RFQ21526-TTS_DSTA_Mindef Various Transformer Replacement Project FY2022', '', 'TPPPI', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(308, 'P21-0134', '2021', '2021-12-16', 'TMMIN KARAWANG', '', 'TOYOTA MOTOR MANUFACTURING', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(309, 'P21-0135', '2021', '2021-12-16', 'TBBM Tanjung Batu', '', 'PT Nindya Karya', '', 'Oil Gas Mining', 'Smelter / Oil & gas Terminal', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(310, 'P21-0136', '2021', '2021-12-17', 'CILEGON', '', 'IBU HALIMAH (TEMEN NYA PAK HB)', '', 'Other ', 'No Information', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(311, 'P21-0137', '2021', '2021-12-20', 'PG GORONTALO', '', 'PG GORONTALO', '', 'Industry', 'Food & Beverages', '', 'Christiana Sari Dewi ', 'High', 0, 'Sales Swasta'),
(312, 'P21-0138', '2021', '2021-12-21', 'RE: RFQ SD-2021-053 PowerTech-MSS 132-11kV 45MVA - EARTHING TRANSFORMER - TRAFOINDO', '', 'Elsewedy', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(313, 'P21-0139', '2021', '2021-12-21', 'DATA CENTRE - BEKASI', '', 'PT. TRAKINDO UTAMA', '', 'Infrastructure', 'Telecomunication', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(314, 'P21-0141', '2021', '2021-12-21', 'Re: Trafo untuk Proyek Maroko, TA Singapore', '', 'PT Technical South East Asia', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(315, 'P21-0142', '2021', '2021-12-21', '-', '', 'PT. JELMA RANGGA GADING', '', 'Buiding', 'Office', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(316, 'P21-0143', '2021', '2021-12-22', 'RFQ21528- RMR (Microsemi Project)', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(317, 'P21-0144', '2021', '2021-12-23', '10 mVA', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(318, 'P21-0145', '2021', '2021-12-23', 'COLD STORAGE BANDARA', '', 'PT ARTHUR TEKNIK INDOPRIMA', '', 'Industry', 'Food & Beverages', '', 'Sunata ', 'High', 0, 'Sales Swasta'),
(319, 'P21-0146', '2021', '2021-12-23', 'RFQ21534- 888Tech-Cebu requirement (URGENT)', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(320, 'P21-0147', '2021', '2021-12-23', 'RFQ21534 - MH Poly (Southfield Project)', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(321, 'P21-0148', '2021', '2021-12-23', 'RFQ21535- Maoneng - CCLEX Project', '', 'TPPPI ', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(322, 'P21-0149', '2021', '2021-12-23', 'Gebeng Smart Glove Factory', '', 'Ablecon', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'High', 0, 'Sales Export'),
(323, 'P21-0150', '2021', '2021-12-27', 'IT Data Center Relocation', '', 'PT Amman Mineral Nusa Tenggara', '', 'Oil Gas Mining', 'Mining Company ( Coal, Gold, Etc)', '', 'M Iqbal Harish ', 'High', 0, 'Sales BUMN'),
(324, 'P21-0151', '2021', '2021-12-27', 'PLTD Tersebar', '', 'PLN UP3 Sofifi', '', 'Energy', 'PLN & All Subsidiary / Group', '', 'Rizky Mulya Nugroho ', 'High', 0, 'Sales PLN'),
(325, 'P21-0152', '2021', '2021-12-27', 'Fwd: Hoshay (Everbest, penang science park) - Request Quotation', '', 'Ablecon', '', 'Export', 'All Item', '', 'Marshal Nauli ', 'Low', 0, 'Sales Export'),
(326, 'P21-0153', '2021', '2021-12-28', 'DCI - H2 DISM KARAWANG', '', 'DWIMITRA EKATAMA MANDIRI', '', 'Infrastructure', 'Telecomunication', '', 'Vishnu ', 'High', 0, 'Sales Swasta'),
(327, 'P21-0154', '2021', '2021-12-28', 'Kelapa Sawit', '', 'PT. GLOBAL COMUNITY BORNEO', '', 'Industry', 'Food & Beverages', '', 'Lusy ', 'High', 0, 'Sales Swasta'),
(328, 'P21-0155', '2021', '2021-12-29', 'ADR Group', '', 'PT. QUADRO INDONESIA', '', 'Industry', 'Automotive ', '', 'Dimas ', 'High', 0, 'Sales Swasta'),
(329, 'P21-0156', '2021', '2021-12-29', 'TIMIKI GREEN CAMP PROJECT', '', 'PETROSEA', '', 'Energy', 'IPP / Power Plant', '', 'Vishnu ', 'High', 0, 'Sales Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `insulation`
--

CREATE TABLE `insulation` (
  `id` int(11) NOT NULL,
  `insulation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insulation`
--

INSERT INTO `insulation` (`id`, `insulation`) VALUES
(1, 'Class F (155 C)'),
(2, 'Class H (185 C)'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `int_standard`
--

CREATE TABLE `int_standard` (
  `id` int(11) NOT NULL,
  `standard` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `int_standard`
--

INSERT INTO `int_standard` (`id`, `standard`) VALUES
(1, 'IEC 60076'),
(2, 'ANSI/IEEE C57.12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `Direktur` varchar(50) NOT NULL,
  `Dirut` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `direktorat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `bagian`, `jabatan`, `level`, `Manager`, `Direktur`, `Dirut`, `nohp`, `direktorat`) VALUES
(30, 'it', '4dcf0cda6fcc07008e7f24669ac13656', 'IT', 'IT', 'Manager', 'it', '', '', '', '', ''),
(43, 'Uyong', '3696bd704d6ba4ede62d349aab1cce9f', 'Uyong Buntoro', 'IT', 'IT', 'it', '', '', '', '', ''),
(46, 'David', 'ff44c517b7587acfd1df4e06acb4547a', 'David Kwek', 'IT', 'IT', 'it', '', '', '', '', ''),
(54, 'Henryanto', '9f81160b2e97b06269d98a0edc713591', 'Henryanto Firmansyah', 'Engineer', 'Manager', 'engineer', '', '', '', '56', ''),
(55, 'Riyan', '52fa2540eb68b56074c0fccbb8e7c3b7', 'Riyan', 'Sales Swasta', 'Staff S', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(56, 'Christiana', '3ca378115b6b0dae7aae98409a9eb3d2', 'Christiana Sari Dewi', 'Sales Swasta', 'Manager', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(57, 'Dimas', '165f0e802498349187420f52f2c396d6', 'Dimas', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(58, 'Vishnu', 'd17088c85762d1dda22352398eb2f664', 'Vishnu', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(59, 'Sunata', 'fe4ac056acadc61e3b460f0173b50a69', 'Sunata', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(60, 'Hinca', '013bf46fbbe8731297bf4c2e15b47b10', 'Hinca', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(61, 'Lusy', '9f804188780b906eeca37e4e11c0917a', 'Lusy', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(62, 'Agung', '383829adfde3db734111743bbae6450a', 'Agung Prihandono', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(63, 'Musa', '054393a3d19a773efc77c9fda3f7830a', 'Musa', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(64, 'Iqbal', 'c8f84dc74c434db40733b09448de664c', 'M Iqbal Harish', 'Sales BUMN', 'Manager', 'sales', 'Rudi Taan', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(65, 'Wirata', '9e865ef0b57d15164701abf937786059', 'Wirata Adidharma', 'Admin', 'Manager', 'admin', '', '', '', '', ''),
(66, 'Rudi', '200f015011903e6055c94894174f6070', 'Rudi Ta an', 'Sales BUMN', 'Manager', 'sales', 'Rudi Taan', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(67, 'Guruh', '5c7af6e40a1ec7247d2021af8c213dcf', 'Guruh Agung', 'Sales PLN', 'Manager', 'sales', 'Adrianus Sigit', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(68, 'Andy', '304f6fda7e2aed907dabf42e1addf7c3', 'Andy Rahadianto', 'Sales PLN', 'Staff', 'sales', 'Adrianus Sigit', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(69, 'Rizky', '0bbb746a44bd18925dbf8d206cff53e4', 'Rizky Mulya Nugroho', 'Sales PLN', 'Staff', 'sales', 'Adrianus Sigit', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(70, 'Niken', '1fded17af4cc45b76e2413b8f50236fb', 'Niken Mayalina', 'Sales Swasta', 'Staff', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', ''),
(71, 'Marshal', '4abcca3259e8012bfd2585cc7a73d08f', 'Marshal Nauli', 'Sales Export', 'Manager', 'sales', 'Marshal Nauli', 'David Limputra', 'Freddie Wibowo', '', ''),
(72, 'Tejo', '93aad28b04f72acd0b95614780e9eac0', 'Tejo Wahono', 'Engineer', 'Manager', 'engineer', '', '', '', '', ''),
(73, 'Ekora', '88d074df44d21d1caae9e92b2bc254f4', 'Ekora', 'Engineer', 'Direktur', 'engineer', '', '', '', '56', ''),
(74, 'Freddie', '6c98f351ce0ff32eb96524be97a2dfa9', 'Freddie Wibowo', 'Admin', 'Dirut', 'admin', '', '', '', '', ''),
(75, 'Guruh', 'a9518d41564905f0b745e528ade434bd', 'Guruh Agung', 'Sales PLN', 'Manager', 'sales', 'Adrianus Sigit', 'Hari Bambang', 'Freddie Wibowo', '', ''),
(76, 'Faiza', '880d33b64f4cd1a322b7ce96b96703f5', 'Faiza', 'Engineer', 'Staff', 'tender', '', '', '', '56', ''),
(77, 'Fano', 'a24067cadb2c1bd2fdf4c37a72a6ac07', 'Arfano', 'Engineer', 'Staff', 'tender', '', '', '', '56', ''),
(78, 'Sodik', '8e4c73bd413726984711eed7bdf15b41', 'Sodik', 'Engineer', 'Staff', 'tender', '', '', '', '56', ''),
(79, 'Fendi', '4cf10724f050073b73548f688992bf9b', 'Fendi', 'Engineer', 'Staff', 'tender', '', '', '', '', ''),
(80, 'Muslim', '60a847861cfd4458fc76cb015d5ea0c0', 'Imam Muslim Amin', 'Engineer', 'Staff', 'tender', '', '', '', '', ''),
(81, 'Prakas', 'a0f06b86f40473f6a0791fea9acb2093', 'Prakas', 'Engineer', 'Staff', 'tender', '', '', '', '', ''),
(82, 'Aziz', '66738e472fda76b980223c57af726be7', 'Abdul Aziz', 'Engineer', 'Staff', 'tender', '', '', '', '', ''),
(83, 'Widdy', '73b91df356112df015a656ff3e9947a2', 'Widdy Yuanto', 'Sales Swasta', 'Manager', 'sales', 'Christiana S Dewi', 'Hendra Sunarya', 'Freddie Wibowo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ms_segment`
--

CREATE TABLE `ms_segment` (
  `id_segment` int(11) NOT NULL,
  `nm_segment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_segment`
--

INSERT INTO `ms_segment` (`id_segment`, `nm_segment`) VALUES
(1, 'Energy'),
(2, 'Oil Gas Mining'),
(3, 'Infrastructure'),
(4, 'Industry'),
(5, 'Buiding'),
(6, 'Export'),
(7, 'Other ');

-- --------------------------------------------------------

--
-- Table structure for table `ms_sub_segment`
--

CREATE TABLE `ms_sub_segment` (
  `id_sub_segment` int(5) NOT NULL,
  `nm_sub_segment` varchar(50) NOT NULL,
  `id_segment` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_sub_segment`
--

INSERT INTO `ms_sub_segment` (`id_sub_segment`, `nm_sub_segment`, `id_segment`) VALUES
(1, 'PLN & All Subsidiary / Group', 1),
(2, 'IPP / Power Plant', 1),
(3, 'Substation', 1),
(4, 'Oil Company', 2),
(5, 'Gas Company', 2),
(6, 'Mining Company ( Coal, Gold, Etc)', 2),
(7, 'Smelter / Oil & gas Terminal', 2),
(8, 'Airport', 3),
(9, 'Seaport', 3),
(10, 'Railways', 3),
(11, 'Bus Station', 3),
(12, 'Telecomunication', 3),
(13, 'Chemical Industry', 4),
(14, 'Food & Beverages', 4),
(15, 'Steel Industry', 4),
(16, 'Automotive ', 4),
(17, 'Cement & Fertilizer', 4),
(18, 'Hotel / Resort', 5),
(19, 'Apartement', 5),
(20, 'Hospital', 5),
(21, 'Mall', 5),
(22, 'Office', 5),
(23, 'All Item', 6),
(24, 'No Specified Project', 7),
(25, 'No Information', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ms_vektor_group`
--

CREATE TABLE `ms_vektor_group` (
  `id` int(11) NOT NULL,
  `nm_vektor_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_vektor_group`
--

INSERT INTO `ms_vektor_group` (`id`, `nm_vektor_group`) VALUES
(1, 'Dd-0'),
(2, 'Dd-2'),
(3, 'Dd-4'),
(4, 'Dd-6'),
(5, 'Dd-8'),
(6, 'Dd-10'),
(7, 'Dy-1'),
(8, 'Dy-5'),
(9, 'Dy-7'),
(10, 'Dy-11'),
(11, 'Dyn-1'),
(12, 'Dyn-5'),
(13, 'Dyn-7'),
(14, 'Dyn-11'),
(15, 'Dz-0'),
(16, 'Dz-2'),
(17, 'Dz-4'),
(18, 'Dz-6'),
(19, 'Dz-8'),
(20, 'Dzn-0'),
(21, 'Dzn-2'),
(22, 'Dzn-4'),
(23, 'Dzn-6'),
(24, 'Dzn-8'),
(25, 'Dzn-10'),
(26, 'Yd-1'),
(27, 'Yd-5'),
(28, 'Yd-7'),
(29, 'Yd-11'),
(30, 'YNd-1'),
(31, 'YNd-5'),
(32, 'YNd-7'),
(33, 'YNd-11'),
(34, 'Yz-1'),
(35, 'Yz-5'),
(36, 'Yz-7'),
(37, 'Yz-11'),
(38, 'Yzn-1'),
(39, 'Yzn-5'),
(40, 'Yzn-7'),
(41, 'Yzn-11'),
(42, 'Yy-0'),
(43, 'Yy-6'),
(44, 'Yyn-0'),
(45, 'Yyn-6'),
(46, 'YNyn-0'),
(47, 'YNyn-6'),
(48, 'Ii-0 (CSP)'),
(49, 'Ii-0 (Non CSP)'),
(50, 'Zy-11'),
(51, 'ZNyn-11'),
(52, 'YNa-0'),
(53, 'Ya-0'),
(54, 'Zn-0'),
(55, 'Scott'),
(56, 'Dyn-5 & Dyn-5'),
(57, 'Dyn-11 & Dyn-11'),
(58, 'Dyn-5 & Dd-0'),
(59, 'YNyn-0 & YNyn-0'),
(60, 'YNyn-6 & YNyn-6'),
(61, 'dD-0 & dYN-1'),
(62, 'Dyn-11 & Dd-0'),
(63, 'Dd-0 & Dy-1'),
(64, 'Dd-0 & Dyn-11'),
(65, 'Dd-0 & Dyn-5'),
(66, 'Dd-0 & Dy-5'),
(67, 'Dy-11 & Dd-0'),
(68, 'YNy0 (d5)'),
(69, 'Dd-0 & Dy-11 & Dyn-11'),
(70, 'Yd-5 & Yyn-0'),
(71, 'Dd-0 & Dy-11'),
(72, 'Dyn-1 & Dyn-1'),
(73, 'Yy-0 & Yd-11'),
(74, 'Dy-11 & Yy-0'),
(75, 'Yd-11 & Yd-11'),
(76, 'Dyn-1 & Dd-0'),
(77, 'dYN-5'),
(78, 'dYN-11'),
(79, 'Dd-0 & Dyn-11'),
(80, 'Dd-0 & Dy-5');

-- --------------------------------------------------------

--
-- Table structure for table `oil_prospect`
--

CREATE TABLE `oil_prospect` (
  `id` int(11) NOT NULL,
  `noprospect` varchar(20) NOT NULL,
  `nopracost` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `category_klari` varchar(100) NOT NULL,
  `type_trafo` varchar(100) NOT NULL,
  `type_trafo_klari` varchar(100) NOT NULL,
  `service_condition` varchar(50) NOT NULL,
  `service_condition_klari` varchar(100) NOT NULL,
  `altitude` varchar(11) NOT NULL,
  `altitude_klari` varchar(100) NOT NULL,
  `ambient_temp` varchar(100) NOT NULL,
  `ambient_temp_klari` varchar(100) NOT NULL,
  `standarisasi` varchar(50) NOT NULL,
  `standarisasi_klari` varchar(100) NOT NULL,
  `insulation_thermal` varchar(100) NOT NULL,
  `insulation_thermal_klari` varchar(100) NOT NULL,
  `temp_rise` varchar(11) NOT NULL,
  `temp_rise_klari` varchar(100) NOT NULL,
  `rate_capacity` int(11) NOT NULL,
  `rate_capacity_klari` varchar(100) NOT NULL,
  `no_phase` varchar(50) NOT NULL,
  `no_phase_klari` varchar(100) NOT NULL,
  `frequency` int(15) NOT NULL,
  `frequency_klari` varchar(100) NOT NULL,
  `primary_voltage` int(11) NOT NULL,
  `primary_voltage_klari` varchar(100) NOT NULL,
  `secondary_voltage` int(11) NOT NULL,
  `secondary_voltage_klari` varchar(100) NOT NULL,
  `vektor_group` varchar(50) NOT NULL,
  `vektor_group_klari` varchar(100) NOT NULL,
  `type_winding` varchar(20) NOT NULL,
  `type_winding_klari` varchar(100) NOT NULL,
  `type_cooling` varchar(50) NOT NULL,
  `type_cooling_klari` varchar(100) NOT NULL,
  `no_tap` int(5) NOT NULL,
  `no_tap_klari` varchar(100) NOT NULL,
  `type_oil` varchar(50) NOT NULL,
  `safety_device` varchar(50) NOT NULL,
  `safety_device_klari` varchar(100) NOT NULL,
  `temp_indicator` varchar(50) NOT NULL,
  `temp_indicator_klari` varchar(100) NOT NULL,
  `oil_indicator` varchar(50) NOT NULL,
  `oil_indicator_klari` varchar(100) NOT NULL,
  `presure_device` varchar(100) NOT NULL,
  `presure_device_klari` varchar(100) NOT NULL,
  `winding_connection` varchar(30) NOT NULL,
  `winding_connection_klari` varchar(100) NOT NULL,
  `winding_material` varchar(30) NOT NULL,
  `winding_material_klari` varchar(100) NOT NULL,
  `tap_changer` varchar(50) NOT NULL,
  `tap_changer_klari` varchar(100) NOT NULL,
  `winding_indicator` varchar(100) NOT NULL,
  `winding_indicator_klari` varchar(100) NOT NULL,
  `presure_relay` varchar(150) NOT NULL,
  `presure_relay_klari` varchar(100) NOT NULL,
  `buccholz_relay` varchar(100) NOT NULL,
  `buccholz_relay_klari` varchar(100) NOT NULL,
  `vacuum_gauge` varchar(100) NOT NULL,
  `vacuum_gauge_klari` varchar(100) NOT NULL,
  `dig_thermo` varchar(15) NOT NULL,
  `dig_thermo_klari` varchar(100) NOT NULL,
  `cool_fans` varchar(10) NOT NULL,
  `cool_fans_klari` varchar(100) NOT NULL,
  `enclosure` varchar(30) NOT NULL,
  `enclosure_klari` varchar(100) NOT NULL,
  `notes1` varchar(200) NOT NULL,
  `notes1_klari` varchar(100) NOT NULL,
  `notes2` varchar(200) NOT NULL,
  `notes2_klari` varchar(100) NOT NULL,
  `notes3` varchar(200) NOT NULL,
  `notes3_klari` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `varian_pros` varchar(5) NOT NULL,
  `tipepracost` varchar(20) NOT NULL,
  `tipeprospect` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oil_prospect`
--

INSERT INTO `oil_prospect` (`id`, `noprospect`, `nopracost`, `category`, `category_klari`, `type_trafo`, `type_trafo_klari`, `service_condition`, `service_condition_klari`, `altitude`, `altitude_klari`, `ambient_temp`, `ambient_temp_klari`, `standarisasi`, `standarisasi_klari`, `insulation_thermal`, `insulation_thermal_klari`, `temp_rise`, `temp_rise_klari`, `rate_capacity`, `rate_capacity_klari`, `no_phase`, `no_phase_klari`, `frequency`, `frequency_klari`, `primary_voltage`, `primary_voltage_klari`, `secondary_voltage`, `secondary_voltage_klari`, `vektor_group`, `vektor_group_klari`, `type_winding`, `type_winding_klari`, `type_cooling`, `type_cooling_klari`, `no_tap`, `no_tap_klari`, `type_oil`, `safety_device`, `safety_device_klari`, `temp_indicator`, `temp_indicator_klari`, `oil_indicator`, `oil_indicator_klari`, `presure_device`, `presure_device_klari`, `winding_connection`, `winding_connection_klari`, `winding_material`, `winding_material_klari`, `tap_changer`, `tap_changer_klari`, `winding_indicator`, `winding_indicator_klari`, `presure_relay`, `presure_relay_klari`, `buccholz_relay`, `buccholz_relay_klari`, `vacuum_gauge`, `vacuum_gauge_klari`, `dig_thermo`, `dig_thermo_klari`, `cool_fans`, `cool_fans_klari`, `enclosure`, `enclosure_klari`, `notes1`, `notes1_klari`, `notes2`, `notes2_klari`, `notes3`, `notes3_klari`, `status`, `varian_pros`, `tipepracost`, `tipeprospect`) VALUES
(146, 'P21-0001', 'P21-0001-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 11, '', 7, '', 'Dy-11', '', 'Cu-Cu', '', 'ANAF', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Untuk SLD dan spek detail akan di email. Untuk Vektor Group mohon dapat di proposed. ', '', '', '', '', '', 0, '', 'A', 'DRY'),
(147, 'P21-0002', 'P21-0002-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1250, '', 'Three Phase', '', 50, '', 11, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(148, 'P21-0002', 'P21-0002-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '', '', 1250, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 17, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'TAPPING OLTC: 18-21 kV', '', 'OPTIONAL WINDING CU-CU JUGA PLIS', '', '', '', 0, '', 'A', 'OIL'),
(149, 'P21-0002', 'P21-0002-4', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 17, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'TAPPING: 18-21 kV', '', 'OPTIONAL WINDING CU-CU JUGA YA PLIS', '', '', '', 0, '', 'A', 'OIL'),
(150, 'P21-0003', 'P21-0003-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 800, '', 'Three Phase', '', 50, '', 3000, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'Mohon lihat lampiran pada email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(151, 'P21-0004', 'P21-0004-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 50, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'No C/W Contact', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'OPTIONAL STANDARD D3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(152, 'P21-0004', 'P21-0004-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 100, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'No C/W Contact', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'OPTIONAL STANDARD D3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(153, 'P21-0005', 'P21-0005-1', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 800, '', 'Three Phase', '', 50, '', 20000, '', 380, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(154, 'P21-0005', 'P21-0005-2', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2500, '', 'Three Phase', '', 50, '', 20000, '', 380, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(155, 'P21-0005', 'P21-0005-3', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 4000, '', 'Three Phase', '', 50, '', 20000, '', 380, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(156, 'P21-0006', 'P21-0006-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Mohon mengacu pada lampiran email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(157, 'P21-0007', 'P21-0007-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 333, '', 'Three Phase', '', 60, '', 7, '', 240, '', 'Dyn-11', '', 'Cu-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Replacement - mohon cek attachment. Detail juga mohon dicek kembali.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(158, 'P21-0008', 'P21-0008-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 200, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Tapping +/-5% : +/- 10%', '', 'No load 480 watts\r\nOn load losses 2500 watts', '', '', '', 0, '', 'A', 'OIL'),
(159, 'P21-0009', 'P21-0009-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Mohon mengacu pada lampiran di email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(160, 'P21-0010', 'P21-0010-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6300, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(161, 'P21-0011', 'P21-0011-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2500000, '', 'Three Phase', '', 50, '', 22000, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', 'E2/C2/F1', '', '', '', '', '', 0, '', 'A', 'DRY'),
(162, 'P21-0012', 'P21-0012-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20, '', 0, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN/ONAF', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'For details, please see email prospect & pracost request per 01/11 by Vishnu. Thanks', '', 'Feedback maximal 03/11', '', '', '', 0, '', 'A', 'OIL'),
(163, 'P21-0013', 'P21-0013-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 400, '', 3300, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Kapasitas 630 kva, 2200 kva, 2500 kva', '', 'SUBMIT RABU, 03-11-2021', '', '', '', 0, '', 'A', 'OIL'),
(164, 'P21-0014', 'P21-0014-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20000, '', 6600, '', 'Dd-0', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'KAPASITAS ADA BEBERAPA, SESUAI DENGAN EMAIL', '', 'SUBMIT SELASA, 02-11-2021', '', '', '', 0, '', 'A', 'OIL'),
(165, 'P21-0015', 'P21-0015-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 6600, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(166, 'P21-0015', 'P21-0015-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 3300, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(168, 'P21-0017', 'P21-0017-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 150, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(169, 'P21-0017', 'P21-0017-2', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(170, 'P21-0017', 'P21-0017-3', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 50, '', 6600, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(171, 'P21-0017', 'P21-0017-4', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 500, '', 'Three Phase', '', 50, '', 6600, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(172, 'P21-0018', 'P21-0018-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 300, '', 'Three Phase', '', 60, '', 13200, '', 300, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'No C/W Contact', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'LV CB', '', 'Secondary Voltage 480/960/1100 V', '', 'Non Simultaneously', '', 'Data teknis ada pada lampiran email', '', 0, '', 'A', 'OIL'),
(173, 'P21-0017', 'P21-0017-5', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 630, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(174, 'P21-0019', 'P21-0019-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 4000, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', 'OPTIONAL CU-CU', '', '', '', '', '', 0, '', 'A', 'DRY'),
(175, 'P21-0020', 'P21-0020-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 60, '', 22, '', 11, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Silicone Oil', 'DGPT-2', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'OTF-HST (Hermetically Sealed Type)				\r\n3000kVA, 3P60Hz, 22kV-11kV, Dyn11, KNAN, Class A, Cu-Cu				\r\nNLTC +/-2x2.5%, Silicon Oil, HV/LV Cable Box (Elephant Trunk)				\r\n- DT, MOLI, PRD, WTI, Pressure G', '', '', '', '', '', 0, '', 'A', 'OIL'),
(176, 'P21-0020', 'P21-0020-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1800, '', 'Three Phase', '', 60, '', 22, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Silicone Oil', 'DGPT-2', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'OTF-HST (Hermetically Sealed Type)				\r\n1800kVA, 3P60Hz, 22kV-415V, Dyn11, KNAN, Class A, Cu-Cu				\r\nNLTC +/-2x2.5%, Silicon Oil, HV/LV Cable Box (Elephant Trunk)				\r\n- DT, MOLI, PRD, WTI, Pressure G', '', '', '', '', '', 0, '', 'A', 'OIL'),
(177, 'P21-0020', 'P21-0020-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 900, '', 'Three Phase', '', 60, '', 22, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Silicone Oil', 'DGPT-2', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'OTF-HST (Hermetically Sealed Type)				\r\n900kVA, 3P60Hz, 22kV-415V, Dyn11, KNAN, Class A, Cu-Cu				\r\nNLTC +/-2x2.5%, Silicon Oil, HV/LV Cable Box (Elephant Trunk)				\r\n- DT, MOLI, PRD, WTI, Pressure Gu', '', '', '', '', '', 0, '', 'A', 'OIL'),
(178, 'P21-0021', 'P21-0021-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2800, '', 'Three Phase', '', 50, '', 6600, '', 725, '', 'Dyn-5 & Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Oli Nynas nitro libra/taurus\r\nMohon cek spec di email.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(179, 'P21-0022', 'P21-0022-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 500, '', 'Three Phase', '', 60, '', 13200, '', 480, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'Pad Mounted\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(180, 'P21-0023', 'P21-0023-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Gasket Viton, Silica cobalt free, Oli Nynas Nitro', '', '', '', '', '', 0, '', 'A', 'OIL'),
(181, 'P21-0023', 'P21-0023-2', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Oli Nynas Nitro, Gasket viton, silica gel cobalt free (orange/putih kalau tidak salah)', '', '', '', '', '', 0, '', 'A', 'OIL'),
(182, 'P21-0024', 'P21-0024-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 75, '', 'Three Phase', '', 60, '', 13800, '', 240, '', 'Dyn-11', '', 'Al-Al', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', 'Other Accessories  attached to the Enclosure:\r\n1- MCCB , 240 V , 3phase , 225AT\r\n1- Ammeter, 240V , Range 0-250A\r\n1-Voltmeter, 240V , Range 0-300V\r\n', '', '', '', '', '', 0, '', 'A', 'DRY'),
(183, 'P21-0025', 'P21-0025-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 11, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '11/0.420kV, 2500kVA, ONAN, Cu/Cu, Impedance 7.2%, manufacturer standard losses (1 no)', '', '', '', '', '', 0, '', 'A', 'OIL'),
(184, 'P21-0026', 'P21-0026-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '', '', 3000, '', 'Three Phase', '', 50, '', 22, '', 11, '', 'Yyn-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'No C/W Contact', '', 'N/A', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Temp rise 45/55, vg Yynd0, z 6%, NL 3800, LL 32000', '', '', '', '', '', 0, '', 'A', 'OIL'),
(185, 'P21-0027', 'P21-0027-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20, '', 800, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(186, 'P21-0028', 'P21-0028-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 6, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '2500kVA, 6kV - 400/230V,Dyn-5\r\n3Phase, 50Hz, ONAN, Z=5,72%\r\nProteksi:\r\nISD\r\nBushing Porcelain\r\n\r\nNote :\r\nWinding Cu-Cu & Al-Al', '', '3000kVA, 2kV - 6/3,46kV,Ynd-5\r\n3Phase, 50Hz, ONAN\r\nProteksi:\r\nISD\r\nBushing Porcelain\r\n\r\nNote :\r\nWinding Cu-Cu & Al-Al', '', '', '', 0, '', 'A', 'OIL'),
(187, 'P21-0029', 'P21-0029-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 750, '', 'Three Phase', '', 60, '', 13200, '', 240, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '1 unit    750kVA (ONAN), 13.2kV - 240V Step-down, 3Ph, 60Hz, Pad-Mounted Radial type, \r\nOil Immersed Forced -Air-Cooled with dYn Connection Configuration\r\nCopper winding\r\nWith complete standard access', '', '', '', '', '', 0, '', 'A', 'OIL'),
(188, 'P21-0030', 'P21-0030-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 22, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Silicone Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'Unit replacement - mohon cek attachment di email. \r\nN2 HS radiator panel', '', '', '', '', '', 0, '', 'A', 'OIL'),
(189, 'P21-0031', 'P21-0031-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 300, '', 'Three Phase', '', 60, '', 13800, '', 400, '', 'Dy-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '300KVA Transformer â€“ 1 unit\r\nPrimary Voltage: 13800V\r\nImpedance Volts: 3.31\r\nLow voltage connections\r\nL-L: 400V\r\nL-N: 231V\r\nAmp: 433A\r\nBasic Impulse Insulation Level\r\nH1,H2,H3: 110KV\r\nX1,X2,X3,X0: 4', '', 'Mohon cek nameplate pada email', '', '', '', 0, '', 'A', 'OIL'),
(190, 'P21-0032', 'P21-0032-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 11, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Capacity                                               : 2000 kVA\r\nPrimary                                                : 11kV\r\nSecondary                                           : 0.433kV\r\nVector ', '', 'Diminta harga optional napthalene oil, apakah ini?', '', '', '', 0, '', 'A', 'OIL'),
(191, 'P21-0033', 'P21-0033-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 10000, '', 'Three Phase', '', 50, '', 20000, '', 3300, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 17, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'Mengacu lampiran email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(192, 'P21-0033', 'P21-0033-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 500, '', 'Three Phase', '', 50, '', 3300, '', 380, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-52', '', 'Mengacu lampiran email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(193, 'P21-0033', 'P21-0033-3', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1000, '', 'Three Phase', '', 50, '', 3300, '', 380, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-52', '', 'Mengacu lampiran email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(194, 'P21-0033', 'P21-0033-4', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2000, '', 'Three Phase', '', 50, '', 3300, '', 380, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-52', '', 'Mengacu lampiran email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(195, 'P21-0034', 'P21-0034-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 2000, '', 'Three Phase', '', 60, '', 35400, '', 230, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', 'Pad Mount Transformer 2000KVA, 3Ph, 35.4KV/230V, 60Hz,\r\nw/ NEMA 3 deadfront type enclosure, \r\nInsulation: Dielectric Fluid Immersed Self Cooled;\r\nFluid: Dielectric Fluid / Environmentally friendly Hir', '', '', '', '', '', 0, '', 'A', 'OIL'),
(196, 'P21-0035', 'P21-0035-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN/ONAF', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', 'spec dari customer :\r\n1,5 MVA, 20KV/400V, Z= 6%, ONAF, VR + 5%, Dyn 11, C/w: Bucholz relay, winding and oil temperature, breather: conservator tank+silica gel', '', '', '', '', '', 0, '', 'A', 'OIL'),
(197, 'P21-0036', 'P21-0036-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 100, '', 'Three Phase', '', 50, '', 525, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-31', '', 'Mengacu lampiran email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(198, 'P21-0037', 'P21-0037-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(199, 'P21-0038', 'P21-0038-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 100, '', 'Three Phase', '', 60, '', 400, '', 1819, '', 'Dd-0 & Dy-11', '', 'Cu-Cu', '', 'ONAN', '', 17, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(200, 'P21-0039', 'P21-0039-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1600, '', 'Three Phase', '', 50, '', 22000, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', 'RAL7032', '', '', '', '', '', 0, '', 'A', 'DRY'),
(201, 'P21-0039', 'P21-0039-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 3000, '', 'Three Phase', '', 50, '', 22000, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', 'RAL7032', '', '', '', '', '', 0, '', 'A', 'DRY'),
(202, 'P21-0039', 'P21-0039-3', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2500, '', 'Three Phase', '', 50, '', 22000, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', 'RAL7032', '', '', '', '', '', 0, '', 'A', 'DRY'),
(203, 'P21-0040', 'P21-0040-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 33, '', 400, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DMCR', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'please check email for detail specification.\r\nFeedback max 15 November 2021', '', '', '', '', '', 0, '', 'A', 'OIL'),
(204, 'P21-0041', 'P21-0041-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2000, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', 'Design K4', '', '', '', '', '', 0, '', 'A', 'DRY'),
(205, 'P21-0042', 'P21-0042-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Synthetic Ester', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(206, 'P21-0043', 'P21-0043-1', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1000, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'NO', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(207, 'P21-0044', 'P21-0044-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '80', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 20, '', 6, '', 'Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Temperature rise 80 derajat C.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(208, 'P21-0045', 'P21-0045-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 20, '', 'Three Phase', '', 50, '', 415, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-31', '', '0.415-0.415kV\r\nDry type, AN, Dyn11, Class H, IP31, C2/E2/F1 \r\n', '', '', '', '', '', 0, '', 'A', 'DRY'),
(209, 'P21-0045', 'P21-0045-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 100, '', 'Three Phase', '', 50, '', 415, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-31', '', '0.415-0.415kV\r\nDry type, AN, Dyn11, Class H, IP31, C2/E2/F1 \r\n', '', '', '', '', '', 0, '', 'A', 'DRY'),
(210, 'P21-0045', 'P21-0045-3', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 120, '', 'Three Phase', '', 50, '', 415, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-31', '', '0.415-0.415kV\r\nDry type, AN, Dyn11, Class H, IP31, C2/E2/F1 \r\n', '', '', '', '', '', 0, '', 'A', 'DRY'),
(211, 'P21-0046', 'P21-0046-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 60, '', 23000, '', 480, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'S/No	Descriptions / Specification\r\n1	Distribution Transformer\r\n 	Rating: 2000 kVA\r\n 	Primary Voltage: 23 kV\r\n 	Secondary Voltage: 480Y/277 V\r\n 	Basic Insulation Level: 110 kV\r\n 	No. of Phase: 3 Phase\r', '', '', '', '', '', 0, '', 'A', 'OIL'),
(212, 'P21-0046', 'P21-0046-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 60, '', 23000, '', 480, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Rating: 2500 kVA\r\nPrimary Voltage: 23 kV\r\nSecondary Voltage: 480Y/277 V\r\nBasic Insulation Level: 110 kV\r\nNo. of Phase: 3 Phase\r\nPrimary Winding: Copper\r\nSecondary Winding: Copper\r\nVector Group: Delta-', '', '', '', '', '', 0, '', 'A', 'OIL'),
(213, 'P21-0046', 'P21-0046-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 60, '', 23000, '', 480, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Rating: 3000 kVA\r\nPrimary Voltage: 23 kV\r\nSecondary Voltage: 480Y/277 V\r\nBasic Insulation Level: 110 kV\r\nNo. of Phase: 3 Phase\r\nPrimary Winding: Copper\r\nSecondary Winding: Copper\r\nVector Group: Delta-', '', '', '', '', '', 0, '', 'A', 'OIL'),
(214, 'P21-0047', 'P21-0047-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1100, '', 'Three Phase', '', 50, '', 6600, '', 2305, '', 'Dy-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '1 unit    1100kVA HSTransformer, 6600V/2305V\r\n                Phase: 3 \r\n                Frequency: 50 hz\r\n                Temp rise: 50-55deg C\r\n                Cooling: ONAN\r\n                Insulat', '', '', '', '', '', 0, '', 'A', 'OIL'),
(215, 'P21-0048', 'P21-0048-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1250, '', 'Three Phase', '', 50, '', 6600, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'DRY'),
(216, 'P21-0049', 'P21-0049-1', 'Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1250, '', 'Three Phase', '', 50, '', 6600, '', 690, '', 'Dyn-11', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', 'LANJUTAN PROSPEK P20-0265D\r\nPLEASE CHECK EMAIL FOR DETAILS', '', '', '', '', '', 0, '', 'A', 'DRY'),
(217, 'P21-0005', 'P21-0005-4', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 3150, '', 'Three Phase', '', 50, '', 380, '', 20000, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(218, 'P21-0050', 'P21-0050-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 45, '', 'Three Phase', '', 50, '', 380, '', 220, '', 'Dd-0', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(219, 'P21-0050', 'P21-0050-2', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 75, '', 'Three Phase', '', 50, '', 380, '', 220, '', 'Dd-0', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(220, 'P21-0050', 'P21-0050-3', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 30, '', 'Three Phase', '', 50, '', 380, '', 220, '', 'Dd-0', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-22', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(221, 'P21-0051', 'P21-0051-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 15, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPEK SESUAI EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(222, 'P21-0052', 'P21-0052-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 25, '', 'Single Phase', '', 50, '', 20, '', 400, '', 'Yzn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Tapping dan VG sesuai dengan standar IEC.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(223, 'P21-0053', 'P21-0053-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class H (185 C)', '', '115', '', 325, '', 'Three Phase', '', 50, '', 400, '', 400, '', 'Dzn-0', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'NO', '', 'Sesuai dengan email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(224, 'P21-0054', 'P21-0054-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 30, '', 'Three Phase', '', 50, '', 480, '', 380, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', '', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'DRY'),
(225, 'P21-0055', 'P21-0055-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 10, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SESUAI EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(226, 'P21-0056', 'P21-0056-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1250, '', 'Three Phase', '', 50, '', 500, '', 400, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 0, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'sudah ada permintaan email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(227, 'P21-0057', 'P21-0057-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'DGPT-2', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Data detail melalui email.', '', '', '', '', '', 0, '', 'A', 'OIL'),
(228, 'P21-0058', 'P21-0058-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 400, '', 'Three Phase', '', 50, '', 400, '', 6600, '', 'Dyn-5', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Data lengkap dilampirkan pada email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(229, 'P21-0059', 'P21-0059-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 300, '', 'Three Phase', '', 60, '', 13200, '', 2400, '', 'Dd-0 & Dy-1', '', 'Cu-Cu', '', 'ONAN', '', 9, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(230, 'P21-0060', 'P21-0060-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 2000, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(231, 'P21-0061', 'P21-0061-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3200, '', 'Three Phase', '', 50, '', 22, '', 415, '', 'Dyn-5', '', 'Al-Al', '', 'KHAN/KNAF', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'a.	Rating: 3.2MVA/4MVA KANF\r\nb.	Voltage: 22/0.415kV\r\nc.	Frequency: 50Hz\r\nd.	Cooling: FR3 or Midel\r\ne.	Accessories: HV/LV cable suitable for top entry\r\nOLI, OTI, PRD, WTI\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(232, 'P21-0062', 'P21-0062-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 600, '', 'Three Phase', '', 50, '', 380, '', 260, '', 'Scott', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-20', '', 'SESUAI EMAIL DAN NAMEPLATE DI EMAIL', '', '', '', '', '', 0, '', 'A', 'DRY');
INSERT INTO `oil_prospect` (`id`, `noprospect`, `nopracost`, `category`, `category_klari`, `type_trafo`, `type_trafo_klari`, `service_condition`, `service_condition_klari`, `altitude`, `altitude_klari`, `ambient_temp`, `ambient_temp_klari`, `standarisasi`, `standarisasi_klari`, `insulation_thermal`, `insulation_thermal_klari`, `temp_rise`, `temp_rise_klari`, `rate_capacity`, `rate_capacity_klari`, `no_phase`, `no_phase_klari`, `frequency`, `frequency_klari`, `primary_voltage`, `primary_voltage_klari`, `secondary_voltage`, `secondary_voltage_klari`, `vektor_group`, `vektor_group_klari`, `type_winding`, `type_winding_klari`, `type_cooling`, `type_cooling_klari`, `no_tap`, `no_tap_klari`, `type_oil`, `safety_device`, `safety_device_klari`, `temp_indicator`, `temp_indicator_klari`, `oil_indicator`, `oil_indicator_klari`, `presure_device`, `presure_device_klari`, `winding_connection`, `winding_connection_klari`, `winding_material`, `winding_material_klari`, `tap_changer`, `tap_changer_klari`, `winding_indicator`, `winding_indicator_klari`, `presure_relay`, `presure_relay_klari`, `buccholz_relay`, `buccholz_relay_klari`, `vacuum_gauge`, `vacuum_gauge_klari`, `dig_thermo`, `dig_thermo_klari`, `cool_fans`, `cool_fans_klari`, `enclosure`, `enclosure_klari`, `notes1`, `notes1_klari`, `notes2`, `notes2_klari`, `notes3`, `notes3_klari`, `status`, `varian_pros`, `tipepracost`, `tipeprospect`) VALUES
(233, 'P21-0063', 'P21-0063-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 60, '', 13200, '', 480, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '3 units  Distribution Transformer, 250kVA, HV:13.2kV, LV:240/480, \r\n1-phase, Oil Immersed, Pad Mounted, Copper Winding \r\nApproximate Dimension: 890 x 880 x 1250mm;   \r\nApproximate Weight:695kg.\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(234, 'P21-0064', 'P21-0064-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 10000, '', 20000, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(235, 'P21-0065', 'P21-0065-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1500, '', 'Three Phase', '', 60, '', 13800, '', 400, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '1500kVA, 13.8kV, 400V/230V, 3 phase, 4W, 60 hZ, 5.75% IZ, Pad mounted Type Transformer, Al-al winding\r\n2 units\r\nCNF Cebu', '', '', '', '', '', 0, '', 'A', 'OIL'),
(236, 'P21-0066', 'P21-0066-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Single Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'UNTUK NAMEPLATE TRAFO LAMA, DIKIRIMKAN BY EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(237, 'P21-0067', 'P21-0067-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3150, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(238, 'P21-0068', 'P21-0068-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6000, '', 'Three Phase', '', 50, '', 20, '', 415, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'transformator , 6000kVA,20kV/0.415kV+N,connection D/Y\r\nprimer : Terminal cable, Isolator Bushing\r\nsecondary : Terminal cable, isolator bushing & plate busbar\r\nprotect level oil, DGPT switch, oil tank,', '', '', '', '', '', 0, '', 'A', 'OIL'),
(239, 'P21-0068', 'P21-0068-2', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 4500, '', 'Three Phase', '', 50, '', 20, '', 415, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'transformator, 4500kVA, 20kV/0.415kV+N, connection D/Y\r\nprimary : Terminal cable, isolator bushing\r\nsecondary : terminal cable, isolator bushing & plate busbar\r\nprotect level oil, DGPT switch, oil tan', '', '', '', '', '', 0, '', 'A', 'OIL'),
(240, 'P21-0068', 'P21-0068-3', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3500, '', 'Three Phase', '', 50, '', 20, '', 415, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'transformer, 3500kVA, 20kV/0.415kV+N, connection D/Y\r\nprimary : Terminal cable, Isolator bushing\r\nSecondary : Terminal cable, DGPT switch, oil tank, ladder & filter oil sillicagle', '', '', '', '', '', 0, '', 'A', 'OIL'),
(241, 'P21-0068', 'P21-0068-4', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20, '', 415, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Transformer, 2000kVA, 20kV/0.415kV+N Connection D/Y\r\nprimary : Terminal cable, isolator bushing\r\nsecondary : terminal cable, isolator bushing & plate busbar\r\nProtect level oil, DGPT switch, oil tank, ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(242, 'P21-0068', 'P21-0068-5', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 200, '', 'Three Phase', '', 50, '', 20, '', 230, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Transformer, 200kVA, 20kV/0.230V+N , connection D/Y\r\nprimary : Terminal cable, Isolator bushing\r\nsecondary : Terminal cable, DGPT switch, oil tank, ladder & filter oil siilicagle', '', '', '', '', '', 0, '', 'A', 'OIL'),
(243, 'P21-0069', 'P21-0069-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1100, '', 'Three Phase', '', 50, '', 6600, '', 2305, '', 'Dy-11 & Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'No C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Trafo replacement, dimensi harap disamakan dengan as built trafo existing. Mohon perhatikan detail di as built trafo existing', '', '', '', '', '', 0, '', 'A', 'OIL'),
(244, 'P21-0070', 'P21-0070-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 2500, '', 'Three Phase', '', 60, '', 380, '', 13800, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '3 units of 2500kVA Oil Immersed Type Transformer\r\nâ€¢         Primary: 380V\r\nâ€¢         Secondary: 13.8kV\r\nâ€¢         3phase, 60Hz\r\nâ€¢	Wye-delta\r\nâ€¢         CIF Manila\r\nâ€¢	With 2 options on windi', '', '', '', '', '', 0, '', 'A', 'OIL'),
(245, 'P21-0071', 'P21-0071-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3800, '', 'Three Phase', '', 50, '', 20, '', 6300, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'ADA 2 KAPASITAS, UNTUK SPEK DIEMAIL TERPISAH', '', '', '', '', '', 0, '', 'A', 'OIL'),
(246, 'P21-0072', 'P21-0072-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'DGPT-2', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Spec lengkap terlampir dalam email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(247, 'P21-0073', 'P21-0073-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 225, '', 'Three Phase', '', 60, '', 13800, '', 240, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '(1) unit 225 KVA Pad-Mounted Transformer, with the following technical specifications 	\r\nPhase 	3Ã˜ \r\nFrequency 	60 Hz \r\nPrimary Voltage 	13800 Volts Delta with 2x2.5% taps FCAN/FCBN \r\nSecondary Volta', '', '', '', '', '', 0, '', 'A', 'OIL'),
(248, 'P21-0074', 'P21-0074-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 4000, '', 'Three Phase', '', 50, '', 6300, '', 400, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Trafo step up\r\n400V ke 6,3kV\r\nDaya 4000kVA\r\nBelitan cu/al\r\n', '', 'pracost tolong dibuat 2 opsi cu dan al\r\nTerima kasih', '', '', '', 0, '', 'A', 'OIL'),
(249, 'P21-0075', 'P21-0075-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3150, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Hazard area class kompartmen trafo meliputi :\r\n1.       Box control (Exproof) DGPT / Intrinsically safe relay. Zone 1&2, 21&22 - Ex db IIC T6 Gb, Ex tb IIIC Db IP66\r\n2.       Cable gland class : Zone ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(250, 'P21-0076', 'P21-0076-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 20000, '', 6000, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Lampiran melalui email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(251, 'P21-0077', 'P21-0077-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '', '', 1000, '', 'Three Phase', '', 50, '', 400, '', 6300, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spec lengkap terlampir dalam email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(252, 'P21-0077', 'P21-0077-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 400, '', 6300, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spec lengkap tercantum dalam email', '', '- Opsi winding Cu-Cu', '', '', '', 0, '', 'A', 'OIL'),
(253, 'P21-0078', 'P21-0078-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 6600, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAILS SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL'),
(254, 'P21-0079', 'P21-0079-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 750, '', 'Three Phase', '', 60, '', 33000, '', 400, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(255, 'P21-0080', 'P21-0080-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1000, '', 'Three Phase', '', 60, '', 33000, '', 400, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(256, 'P21-0080', 'P21-0080-2', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1500, '', 'Three Phase', '', 60, '', 33000, '', 400, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(257, 'P21-0081', 'P21-0081-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 75, '', 'Three Phase', '', 50, '', 480, '', 288, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', '', '', 'Transformer  Power :Dry Type; Cap 75KVA;3Ph/50Hz; Type ANC:Reduced Voltage Transformer, HV 480V AC/Y, LV 288-480V AC, Current 90.2A,IZ 3, TEMP RISE 115DEG C,Ins Class H,HV Tap 1/2/3/4/5: 288/330/384/4', '', '', '', '', '', 0, '', 'A', 'DRY'),
(258, 'P21-0082', 'P21-0082-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 100, '', 'Single Phase', '', 60, '', 4160, '', 240, '', 'Ii-0 (Non CSP)', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '3 units  Distribution Transformer 100KVA,4160V,60HZ, VOLTAGE RATING: HV4160-LV240/440 ; \r\nSINGLE PHASE, 65degC continous, \r\nPolarity: Additive\r\nWinding: Cu-Cu\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(259, 'P21-0083', 'P21-0083-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 690, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Hermetically Sealed Type\r\n1500KVA, 3P50Hz, 690V-400V, Dyn11, ONAN, NLTC+/-2x2.5%, Z=5.5%\r\nNLTC+/-2x2.5%, Class A, TR:60/65DegC\r\n\r\na.	Integrated Safety Device (Oil, Gas, Pressure, Temp)\r\nb.	Pressure Re', '', '', '', '', '', 0, '', 'A', 'OIL'),
(260, 'P21-0083', 'P21-0083-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1500, '', 'Three Phase', '', 50, '', 690, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', 'Dry Type â€“ Vacuum Pressure Impregnation (VPI)\r\n1500KVA, 3P50Hz, 690V-400V, Dyn11, AN, NLTC+/-2x2.5%, Z=5.5%\r\nNLTC+/-2x2.5%, Class F, Max Temp Rise: 100degC\r\na.	IP21\r\nb.	Cu-Cu Winding\r\nc.	Digital The', '', '', '', '', '', 0, '', 'A', 'DRY'),
(261, 'P21-0084', 'P21-0084-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 800, '', 33000, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'â€¢	800V / 33KV   1000KVA Transformer  ( primary voltage 800V & secondary voltage 33KV , frequency 50Hz, 03 Phase, Vector symbol â€“ Dyn11, Method of cooling ONAN, winding material -copper )', '', '', '', '', '', 0, '', 'A', 'OIL'),
(262, 'P21-0084', 'P21-0084-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 415, '', 33000, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'â€¢	415V / 33KV  1000KVA Transformer   ( Primary voltage 415V & secondary voltage 33KV, frequency 50Hz, 03 Phase, Vector symbol â€“ Dyn11, Method of cooling ONAN, winding material â€“copper )', '', '', '', '', '', 0, '', 'A', 'OIL'),
(263, 'P21-0085', 'P21-0085-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 130, '', 'Three Phase', '', 60, '', 480, '', 2978, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(264, 'P21-0085', 'P21-0085-2', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 130, '', 'Three Phase', '', 60, '', 480, '', 2685, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(265, 'P21-0085', 'P21-0085-3', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 100, '', 'Three Phase', '', 60, '', 480, '', 2591, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(266, 'P21-0085', 'P21-0085-4', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 150, '', 'Three Phase', '', 60, '', 480, '', 2685, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(267, 'P21-0085', 'P21-0085-5', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 165, '', 'Three Phase', '', 60, '', 480, '', 3837, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(268, 'P21-0085', 'P21-0085-6', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 200, '', 'Three Phase', '', 60, '', 480, '', 3837, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(269, 'P21-0085', 'P21-0085-7', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 210, '', 'Three Phase', '', 60, '', 480, '', 3811, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(270, 'P21-0085', 'P21-0085-8', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 260, '', 'Three Phase', '', 60, '', 480, '', 4434, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(271, 'P21-0085', 'P21-0085-9', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 260, '', 'Three Phase', '', 60, '', 480, '', 3811, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(272, 'P21-0085', 'P21-0085-10', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 325, '', 'Three Phase', '', 60, '', 480, '', 4434, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(273, 'P21-0085', 'P21-0085-11', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 355, '', 'Three Phase', '', 60, '', 480, '', 3811, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(274, 'P21-0085', 'P21-0085-12', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 390, '', 'Three Phase', '', 60, '', 480, '', 4434, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(275, 'P21-0085', 'P21-0085-13', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 400, '', 'Three Phase', '', 60, '', 480, '', 3811, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(276, 'P21-0085', 'P21-0085-14', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 455, '', 'Three Phase', '', 60, '', 480, '', 4988, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(277, 'P21-0085', 'P21-0085-15', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 520, '', 'Three Phase', '', 60, '', 480, '', 4988, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(278, 'P21-0085', 'P21-0085-16', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 520, '', 'Three Phase', '', 60, '', 480, '', 3811, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(279, 'P21-0085', 'P21-0085-17', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 650, '', 'Three Phase', '', 60, '', 480, '', 4330, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(280, 'P21-0085', 'P21-0085-18', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 750, '', 'Three Phase', '', 60, '', 480, '', 4330, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(281, 'P21-0085', 'P21-0085-19', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 875, '', 'Three Phase', '', 60, '', 480, '', 4850, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(282, 'P21-0085', 'P21-0085-20', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1000, '', 'Three Phase', '', 60, '', 480, '', 4850, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(283, 'P21-0086', 'P21-0086-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 150, '', 'Three Phase', '', 60, '', 13800, '', 1300, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(284, 'P21-0086', 'P21-0086-2', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 150, '', 'Three Phase', '', 60, '', 13800, '', 880, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(285, 'P21-0086', 'P21-0086-3', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 150, '', 'Three Phase', '', 60, '', 2400, '', 440, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(286, 'P21-0086', 'P21-0086-4', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 60, '', 13800, '', 1300, '', 'Dyn-1', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(287, 'P21-0087', 'P21-0087-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 500, '', 'Three Phase', '', 60, '', 480, '', 3300, '', 'Dyn-1 & Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 25, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(288, 'P21-0087', 'P21-0087-2', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class H (185 C)', '', '115', '', 150, '', 'Three Phase', '', 60, '', 480, '', 220, '', 'Dyn-1', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-55', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(289, 'P21-0087', 'P21-0087-3', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class H (185 C)', '', '115', '', 300, '', 'Three Phase', '', 60, '', 480, '', 220, '', 'Dyn-1', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-55', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(290, 'P21-0088', 'P21-0088-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 400, '', 20, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(291, 'P21-0088', 'P21-0088-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3150, '', 'Three Phase', '', 50, '', 400, '', 20, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(292, 'P21-0089', 'P21-0089-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 50, '', 11, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAILS SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL'),
(293, 'P21-0090', 'P21-0090-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2000, '', 'Three Phase', '', 50, '', 20000, '', 10000, '', 'YNd-11', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', 'PLEASE CHECK EMAIL FOR DETAILS SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'DRY'),
(294, 'P21-0091', 'P21-0091-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1050, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'PADMOUNT', '', '', '', '', '', 0, '', 'A', 'OIL'),
(295, 'P21-0092', 'P21-0092-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 630, '', 'Three Phase', '', 50, '', 400, '', 200, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPEK SESUAI EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(296, 'P21-0093', 'P21-0093-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20, '', 6910, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'NAMEPLATE DIEMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(297, 'P21-0094', 'P21-0094-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6300, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN/ONAF', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Merefer pada trafo existing : No..STK.411/94;  No. WO. 416/94', '', '', '', '', '', 0, '', 'A', 'OIL'),
(298, 'P21-0095', 'P21-0095-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL'),
(299, 'P21-0096', 'P21-0096-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3500, '', 'Three Phase', '', 50, '', 20, '', 11, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Step Up Transformer\r\n              Type                                   : Conservator, ONAN, 3 Phasa, 50Hz\r\n              Primary Voltage               : 11.000V ( Delta )\r\n              Secondary V', '', '', '', '', '', 0, '', 'A', 'OIL'),
(300, 'P21-0097', 'P21-0097-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(301, 'P21-0098', 'P21-0098-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 50, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Yzn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(302, 'P21-0099', 'P21-0099-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 100, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Yzn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(303, 'P21-0100', 'P21-0100-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 200, '', 'Three Phase', '', 50, '', 20, '', 231, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'UNIT LAIN DAN SPEK ADA DIEMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(304, 'P21-0101', 'P21-0101-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 800, '', 'Three Phase', '', 50, '', 10000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', 'Mengacu pada email', '', '', '', '', '', 0, '', 'A', 'DRY'),
(305, 'P21-0101', 'P21-0101-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 3150, '', 'Three Phase', '', 50, '', 10000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-21', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(306, 'P21-0102', 'P21-0102-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 160, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Yzn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(307, 'P21-0102', 'P21-0102-2', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 50, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(308, 'P21-0102', 'P21-0102-3', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 100, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(309, 'P21-0102', 'P21-0102-4', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 160, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(310, 'P21-0102', 'P21-0102-5', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 160, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(311, 'P21-0102', 'P21-0102-6', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(312, 'P21-0102', 'P21-0102-7', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 400, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(313, 'P21-0102', 'P21-0102-8', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 400, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(314, 'P21-0102', 'P21-0102-9', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 630, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 7, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN D3 2020', '', '', '', '', '', 0, '', 'A', 'OIL'),
(315, 'P21-0103', 'P21-0103-1', 'Non Standard', '', 'Conservator - Panel', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20, '', 690, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN/ONAF', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL'),
(316, 'P21-0104', 'P21-0104-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 100, '', 'Three Phase', '', 50, '', 380, '', 480, '', 'Dd-0', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'N/A', '', 'NO', '', '', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(317, 'P21-0105', 'P21-0105-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3200, '', 'Three Phase', '', 50, '', 6300, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL'),
(318, 'P21-0106', 'P21-0106-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '-	HV / LV Elephant Trunk Cable Box w Busbar Link\r\n-	Dial Thermometer with Contacts\r\n-	Pressure Monitoring with Contacts\r\n-	Magnetic Oil Level gauge with Contacts\r\n-	Pressure Relief Device with Contact', '', '', '', '', '', 0, '', 'A', 'OIL');
INSERT INTO `oil_prospect` (`id`, `noprospect`, `nopracost`, `category`, `category_klari`, `type_trafo`, `type_trafo_klari`, `service_condition`, `service_condition_klari`, `altitude`, `altitude_klari`, `ambient_temp`, `ambient_temp_klari`, `standarisasi`, `standarisasi_klari`, `insulation_thermal`, `insulation_thermal_klari`, `temp_rise`, `temp_rise_klari`, `rate_capacity`, `rate_capacity_klari`, `no_phase`, `no_phase_klari`, `frequency`, `frequency_klari`, `primary_voltage`, `primary_voltage_klari`, `secondary_voltage`, `secondary_voltage_klari`, `vektor_group`, `vektor_group_klari`, `type_winding`, `type_winding_klari`, `type_cooling`, `type_cooling_klari`, `no_tap`, `no_tap_klari`, `type_oil`, `safety_device`, `safety_device_klari`, `temp_indicator`, `temp_indicator_klari`, `oil_indicator`, `oil_indicator_klari`, `presure_device`, `presure_device_klari`, `winding_connection`, `winding_connection_klari`, `winding_material`, `winding_material_klari`, `tap_changer`, `tap_changer_klari`, `winding_indicator`, `winding_indicator_klari`, `presure_relay`, `presure_relay_klari`, `buccholz_relay`, `buccholz_relay_klari`, `vacuum_gauge`, `vacuum_gauge_klari`, `dig_thermo`, `dig_thermo_klari`, `cool_fans`, `cool_fans_klari`, `enclosure`, `enclosure_klari`, `notes1`, `notes1_klari`, `notes2`, `notes2_klari`, `notes3`, `notes3_klari`, `status`, `varian_pros`, `tipepracost`, `tipeprospect`) VALUES
(319, 'P21-0106', 'P21-0106-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Z=5%-	HV / LV Elephant Trunk Cable Box w Busbar Link\r\n-	Dial Thermometer with Contacts\r\n-	Pressure Monitoring with Contacts\r\n-	Magnetic Oil Level gauge with Contacts\r\n-	Pressure Relief Device with Con', '', '', '', '', '', 0, '', 'A', 'OIL'),
(320, 'P21-0106', 'P21-0106-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '-	HV / LV Elephant Trunk Cable Box w Busbar Link\r\n-	Dial Thermometer with Contacts\r\n-	Pressure Monitoring with Contacts\r\n-	Magnetic Oil Level gauge with Contacts\r\n-	Pressure Relief Device with Contact', '', '', '', '', '', 0, '', 'A', 'OIL'),
(321, 'P21-0106', 'P21-0106-4', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 6600, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', ' Z=6%\r\n-	HV / LV Elephant Trunk Cable Box w Busbar Link\r\n-	Dial Thermometer with Contacts\r\n-	Pressure Monitoring with Contacts\r\n-	Magnetic Oil Level gauge with Contacts\r\n-	Pressure Relief Device with ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(322, 'P21-0106', 'P21-0106-5', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6000, '', 'Three Phase', '', 50, '', 22000, '', 6600, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'Oil Immersed - Hermetically Sealed N2 Type\r\n3Phase, 50Hz, Dyn11, ONAN, Cu-Cu, Mineral Oil\r\n6000kVA, 22000V-6600V, Z=8%\r\n-	HV / LV Cable Box \r\n-	N2 Filing Valve\r\n-	Pressure Vacuum Gauge\r\n-	Dial Thermom', '', '', '', '', '', 0, '', 'A', 'OIL'),
(323, 'P21-0107', 'P21-0107-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spec lengkap ada pada email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(324, 'P21-0107', 'P21-0107-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 175, '', 'Three Phase', '', 50, '', 400, '', 340, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 3, '', 'Mineral Oil', 'N/A', '', 'No C/W Contact', '', 'No C/W Contact', '', 'No C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spec lengkap pada email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(325, 'P21-0108', 'P21-0108-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 150, '', 'Three Phase', '', 50, '', 30, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'VG Mohon dapat di proposed untuk PLTA Timo', '', '', '', '', '', 0, '', 'A', 'OIL'),
(326, 'P21-0109', 'P21-0109-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1151, '', 'Three Phase', '', 50, '', 11500, '', 585, '', 'Yd-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'NO', '', 'Impedance 6,7% , Noise 64 db', '', '', '', '', '', 0, '', 'A', 'DRY'),
(327, 'P21-0110', 'P21-0110-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 250, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(328, 'P21-0110', 'P21-0110-2', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 4000, '', 'Three Phase', '', 50, '', 20000, '', 6600, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', 'NGR, 100 A, 6.6/âˆš3 kV, 100 A, 10 detik, 1xCT 100/5, Galvanized Enclosure', '', '', '', '', '', 0, '', 'A', 'OIL'),
(329, 'P21-0110', 'P21-0110-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 400, '', 20000, '', 'YNyn-0', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', ' NGR, 20/âˆš3 kV, 24 A, 10 detik, 1xCT 25/5, Galvanized Enclosure', '', '', '', '', '', 0, '', 'A', 'OIL'),
(330, 'P21-0111', 'P21-0111-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 300, '', 'Three Phase', '', 50, '', 33000, '', 415, '', 'ZNyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-21', '', 'C1/E2/F1\r\nimpedance 6%\r\nAnti vibration pad', '', 'Current at HV Neutral Point\r\n1500/1A\r\nAccuracy CL X\r\n', '', '', '', 0, '', 'A', 'DRY'),
(331, 'P21-0112', 'P21-0112-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 300, '', 'Three Phase', '', 50, '', 33, '', 415, '', 'ZNyn-11', '', 'Cu-Cu', '', 'ONAN', '', 1, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(332, 'P21-0113', 'P21-0113-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20, '', 380, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Sesuai email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(333, 'P21-0114', 'P21-0114-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 400, '', 'Three Phase', '', 50, '', 380, '', 220, '', 'YNa-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Ada 2 unit trafo sesuai email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(334, 'P21-0115', 'P21-0115-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 400, '', 13800, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spek sesuai lampiran email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(335, 'P21-0115', 'P21-0115-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3500, '', 'Three Phase', '', 50, '', 400, '', 3300, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spek sesuai lampiran email ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(336, 'P21-0116', 'P21-0116-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 350, '', 'Three Phase', '', 50, '', 380, '', 560, '', 'Dd-0', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spek sesuai lampiran email ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(337, 'P21-0117', 'P21-0117-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 33000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(338, 'P21-0118', 'P21-0118-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 690, '', 'Three Phase', '', 50, '', 380, '', 6600, '', 'YNd-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(339, 'P21-0119', 'P21-0119-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1250, '', 'Three Phase', '', 50, '', 20, '', 200, '', 'Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SESUAI DENGAN EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(340, 'P21-0120', 'P21-0120-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 630, '', 'Three Phase', '', 0, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 9, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'step 16 sampai 24kV', '', '', '', '', '', 0, '', 'A', 'OIL'),
(341, 'P21-0121', 'P21-0121-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 630, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 9, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'On Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'OLTC 9 tap, step 16 sampai 24kV', '', '', '', '', '', 0, '', 'A', 'OIL'),
(342, 'P21-0122', 'P21-0122-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1250, '', 'Three Phase', '', 50, '', 10500, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(343, 'P21-0122', 'P21-0122-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV CB', '', 'disconnecting switch mounted', '', '', '', '', '', 0, '', 'A', 'OIL'),
(344, 'P21-0123', 'P21-0123-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11 & Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Silicone Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Mohon cek lampiran\r\n5MVA , 6.6kV/415V/415V, 3 winding, KNAN, FR3 oil, hermetically sealed\r\nDyn11yn11\r\nImpedance 8%\r\nInclude cable box & busbar extension. HV cable bottom entry. LV busduct top entry (a', '', '', '', '', '', 0, '', 'A', 'OIL'),
(345, 'P21-0124', 'P21-0124-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 20000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', ' Qty 6 unit. Sbb: Oil Transformer, 2500kVA, 20000V/415V, 3P 50Hz Dyn11,Cu/Cu, IZ=7.8% KNAN, K13', '', '', '', '', '', 0, '', 'A', 'OIL'),
(346, 'P21-0125', 'P21-0125-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 100, '', 'Three Phase', '', 50, '', 400, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', 'IP-20', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'DRY'),
(347, 'P21-0126', 'P21-0126-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 200, '', 'Three Phase', '', 50, '', 400, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', '', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATIONS', '', '', '', '', '', 0, '', 'A', 'DRY'),
(348, 'P21-0127', 'P21-0127-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 60, '', 13800, '', 220, '', 'ZNyn-11', '', 'Al-Al', '', 'ONAN', '', 0, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '1.	Continuous capacity                     = 500kVA.\r\n2.	Neutral instantaneous rating      = 600 Amp for 10s.\r\n3.	Frequency                                       = 60 Hz.\r\n4.	Vector group             ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(349, 'P21-0128', 'P21-0128-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 50, '', 6600, '', 435, '', 'Dy-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Maker:                      TOSHIBA\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.6kV\r\nSecondary Voltage:    0.435kV\r\nRating/ Capacity:       500KVA\r\n% Impedance:           3.48\r\nVector Gr', '', '', '', '', '', 0, '', 'A', 'OIL'),
(350, 'P21-0128', 'P21-0128-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 6930, '', 436, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '\r\nMaker:                      Trafo Union/ Siemens\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.436kV\r\nRating/ Capacity:       2000KVA\r\n% Impedance:         ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(351, 'P21-0128', 'P21-0128-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6930, '', 436, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Maker:                      Trafo Union\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.436kV\r\nRating/ Capacity:       1000KVA\r\n% Impedance:           5.9\r\nVect', '', '', '', '', '', 0, '', 'A', 'OIL'),
(352, 'P21-0128', 'P21-0128-4', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 700, '', 'Three Phase', '', 50, '', 6930, '', 345, '', 'Dy-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Maker:                      Trafo Union\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.345kV\r\nRating/ Capacity:       700KVA\r\n% Impedance:           6.1\r\nVecto', '', '', '', '', '', 0, '', 'A', 'OIL'),
(353, 'P21-0128', 'P21-0128-5', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 6930, '', 735, '', 'Dy-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Maker:                      Trafo Union\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.735kV\r\nRating/ Capacity:       1500KVA\r\n% Impedance:           6.1\r\nVect', '', '', '', '', '', 0, '', 'A', 'OIL'),
(354, 'P21-0128', 'P21-0128-6', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1250, '', 'Three Phase', '', 50, '', 6930, '', 895, '', 'Dy-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '\r\nMaker:                      Trafo Union\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.895kV\r\nRating/ Capacity:       1250KVA\r\n% Impedance:           6.1\r\nVe', '', '', '', '', '', 0, '', 'A', 'OIL'),
(355, 'P21-0128', 'P21-0128-7', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 6930, '', 436, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Maker:                      Trafo Union\r\nCooling Type:            ONAN\r\nPrimary Voltage:        6.93kV\r\nSecondary Voltage:    0.436kV\r\nRating/ Capacity:       1600KVA\r\n% Impedance:           6.2\r\nVect', '', '', '', '', '', 0, '', 'A', 'OIL'),
(356, 'P21-0129', 'P21-0129-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 22000, '', 6600, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 13, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'On Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Mohon lihat lampiran di email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(357, 'P21-0130', 'P21-0130-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 20, '', 380, '', 'Dd-0', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(358, 'P21-0131', 'P21-0131-1', 'Non Standard', '', 'Dry NOn Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 30, '', 'Three Phase', '', 50, '', 400, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'NO', '', 'DRY NON RESIN\r\n30,25,50,75,100,150,200,250,500kVA, 400V - 400/230V, Dyn-11\r\n3Phase, 50Hz, AN, Class F\r\nProteksi :\r\nDigital Thermometer\r\n\r\nWinding Cu-Cu', '', '', '', '', '', 0, '', 'A', 'DRY'),
(359, 'P21-0132', 'P21-0132-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 3300, '', 750, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Detail spec pada email', '', '', '', '', '', 0, '', 'A', 'OIL'),
(360, 'P21-0133', 'P21-0133-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 500, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '500kVA, 6600V-415V, Z%=5%, >=98.87% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(361, 'P21-0133', 'P21-0133-2', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 500, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'On Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '500kVA, 22000V-415V, Z%=5%, >=98.87% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(362, 'P21-0133', 'P21-0133-3', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '1000kVA, 6600V-415V, Z%=6%, >=99.14% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(363, 'P21-0133', 'P21-0133-4', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '1000kVA, 22000V-415V, Z%=6%, >=99.04% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(364, 'P21-0133', 'P21-0133-5', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1500, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '1500kVA, 6600V-415V, Z%=6%, >=99.21% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(365, 'P21-0133', 'P21-0133-6', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '2000kVA, 6600V-415V, Z%=6%, >=99.24% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(366, 'P21-0133', 'P21-0133-7', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 1500, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '1500kVA, 22000V-415V, Z%=6%, >=99.12% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(367, 'P21-0133', 'P21-0133-8', 'Non Standard', '', 'Dry Cast Resin', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 2000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-23', '', '2000kVA, 22000V-415V, Z%=6%, >=99.17% at 50%', '', '', '', '', '', 0, '', 'A', 'DRY'),
(368, 'P21-0133', 'P21-0133-9', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '500kVA, 6600V-415V, Z%=5%, >=99.26%\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(369, 'P21-0133', 'P21-0133-10', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 500, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '500kVA, 22000V-415V, z%=5%, >=99.26%', '', '', '', 0, '', 'A', 'OIL'),
(370, 'P21-0133', 'P21-0133-11', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '1000kVA, 6600V-415V, Z%=5%, >=99.37%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(371, 'P21-0133', 'P21-0133-12', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '1000kVA, 22000V-415V, z%=5%, >=99.37%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(372, 'P21-0133', 'P21-0133-13', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '1500kVA, 6600V-415V, Z%=5%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(373, 'P21-0133', 'P21-0133-14', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '1500kVA, 22000V-415V, z%=5%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(374, 'P21-0133', 'P21-0133-15', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '2000kVA, 6600V-415V, Z%=6%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(375, 'P21-0133', 'P21-0133-16', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '2000kVA, 22000V-415V, z%=6%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(376, 'P21-0133', 'P21-0133-17', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '3000kVA, 6600V-415V, Z%=6%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(377, 'P21-0133', 'P21-0133-18', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '3000kVA, 22000V-415V, z%=6%, >=99.40%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(378, 'P21-0133', 'P21-0133-19', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6000, '', 'Three Phase', '', 50, '', 6600, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '6000kVA, 6.6kV-415V, Z%=7% to 8%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(379, 'P21-0133', 'P21-0133-20', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6000, '', 'Three Phase', '', 50, '', 22000, '', 415, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '6000kVA, 22kV-415V, Z%=7% to 8%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(380, 'P21-0134', 'P21-0134-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 6000, '', 'Three Phase', '', 50, '', 20, '', 3300, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(381, 'P21-0135', 'P21-0135-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 3300, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(382, 'P21-0136', 'P21-0136-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1600, '', 'Three Phase', '', 50, '', 800, '', 20, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(383, 'P21-0137', 'P21-0137-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 630, '', 'Three Phase', '', 50, '', 6, '', 690, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '* Design K-4\r\n* Z = 7,5%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(384, 'P21-0138', 'P21-0138-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 100, '', 'Three Phase', '', 50, '', 33, '', 380, '', 'ZNyn-11', '', 'Al-Al', '', 'ONAN', '', 0, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Spek mohon cek email dari Sunata tanggal 21 Desember\r\nVG Znyn1', '', '', '', '', '', 0, '', 'A', 'OIL'),
(385, 'P21-0139', 'P21-0139-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 11, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Oil FR3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(386, 'P21-0139', 'P21-0139-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 5000, '', 'Three Phase', '', 50, '', 11, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'KHAN', '', 5, '', 'Natural Ester', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Oil FR3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(387, 'P21-0140', 'P21-0140-1', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 800, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(388, 'P21-0141', 'P21-0141-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 3000, '', 'Three Phase', '', 50, '', 11000, '', 690, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '', '', '', '', '', '', 0, '', 'A', 'OIL'),
(389, 'P21-0142', 'P21-0142-1', 'Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class F (155 C)', '', '100', '', 800, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', '', '', '', '', '', '', 0, '', 'A', 'DRY'),
(390, 'P21-0143', 'P21-0143-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 1500, '', 'Three Phase', '', 60, '', 34500, '', 440, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-20', '', '\r\n1 unit    Cast Resin Transformer 1500kVA, 34.5kV/440Y/245V, \r\n3 phase, 60hz, Dyn11, Class F, IP20, 2.5% Impedance, \r\nCu-cu winding, 100 deg. C Temperature rise, \r\n200kV BIL \r\n', '', '', '', '', '', 0, '', 'A', 'DRY'),
(391, 'P21-0144', 'P21-0144-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 10000, '', 'Three Phase', '', 50, '', 20, '', 315, '', 'Dd-0', '', 'Cu-Cu', '', 'ONAN/ONAF', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Impedansi 9.84%', '', '', '', '', '', 0, '', 'A', 'OIL'),
(392, 'P21-0145', 'P21-0145-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 100, '', 'Three Phase', '', 50, '', 400, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', '390,400,410,420,430 V 5 Tap', '', '', '', '', '', 0, '', 'A', 'OIL'),
(393, 'P21-0146', 'P21-0146-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 450, '', 'Three Phase', '', 60, '', 13800, '', 400, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '450 kVA CTC Transformer (1 unit) \r\nService voltage/ Output: 400 volts wye\r\nRated voltage/ Input: 13.8 kv delta\r\nConductor: Aluminum\r\nApplication: Solar farm\r\nOil type\r\npadmounted', '', '', '', '', '', 0, '', 'A', 'OIL'),
(394, 'P21-0147', 'P21-0147-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI/IEEE C57.12', '', 'Class F (155 C)', '', '90', '', 1500, '', 'Three Phase', '', 60, '', 34500, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'AN Â <Â  Air Natural Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'NO', '', 'IP-20', '', '2 units             Cast Resin Transformer, 1500kVA\r\n                          Primary Voltage: 34.5kV (delta)\r\n                          Secondary Voltage: 400V (wye)\r\n                        Winding', '', '', '', '', '', 0, '', 'A', 'DRY'),
(395, 'P21-0147', 'P21-0147-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1500, '', 'Three Phase', '', 60, '', 34500, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'KHAN', '', 5, '', 'Natural Ester', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Hermetically sealed transformer with FR3 insulating oil and complete accessories.\r\nWinding: AL-AL, Cu-Cu (2 options)\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(396, 'P21-0148', 'P21-0148-1', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 1000, '', 'Three Phase', '', 60, '', 400, '', 13800, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '1 unit    1000KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, \r\nAL-AL Winding\r\n\r\n1 unit    625KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(397, 'P21-0148', 'P21-0148-2', 'Non Standard', '', 'Nitrogen Type', '', 'Indoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 625, '', 'Three Phase', '', 60, '', 400, '', 13800, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '1 unit    1000KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, \r\nAL-AL Winding\r\n\r\n1 unit    625KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(398, 'P21-0148', 'P21-0148-3', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 375, '', 'Three Phase', '', 60, '', 400, '', 13800, '', 'Dyn-11', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'N/A', '', '1 unit    1000KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, \r\nAL-AL Winding\r\n\r\n1 unit    625KVA Pad Mount Transformer, Radial Feed \r\n400V / 13.8kV, 3P60Hz, Dyn11, ONAN, ', '', '', '', '', '', 0, '', 'A', 'OIL'),
(399, 'P21-0149', 'P21-0149-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 1500, '', 'Three Phase', '', 50, '', 11000, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '11/0.420kV, Dyn11, ONAN, Cu/Cu, manufacturer standard losses\r\n1500kVA, 6% : 4 units\r\n2000kVA, 6% : 1 unit \r\n2500kVA, 7% : 3 units\r\n', '', '', '', '', '', 0, '', 'A', 'OIL'),
(400, 'P21-0149', 'P21-0149-2', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 11000, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '11/0.420kV, Dyn11, ONAN, Cu/Cu, manufacturer standard losses\r\n1500kVA, 6% : 4 units\r\n2000kVA, 6% : 1 unit \r\n2500kVA, 7% : 3 units\r\nCable box standard ablecon', '', '', '', '', '', 0, '', 'A', 'OIL'),
(401, 'P21-0149', 'P21-0149-3', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2500, '', 'Three Phase', '', 50, '', 11000, '', 420, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', '11/0.420kV, Dyn11, ONAN, Cu/Cu, manufacturer standard losses\r\n1500kVA, 6% : 4 units\r\n2000kVA, 6% : 1 unit \r\n2500kVA, 7% : 3 units\r\nCable box standard ablecon', '', '', '', '', '', 0, '', 'A', 'OIL'),
(402, 'P21-0150', 'P21-0150-1', 'Non Standard', '', 'Nitrogen Type', '', 'Outdoor', '', '<1000', '', '<40', '', 'ANSI / IEEE C57', '', '', '', '50/55', '', 250, '', 'Three Phase', '', 50, '', 11000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', '', '', '', '', '', '', 0, '', 'A', 'OIL');
INSERT INTO `oil_prospect` (`id`, `noprospect`, `nopracost`, `category`, `category_klari`, `type_trafo`, `type_trafo_klari`, `service_condition`, `service_condition_klari`, `altitude`, `altitude_klari`, `ambient_temp`, `ambient_temp_klari`, `standarisasi`, `standarisasi_klari`, `insulation_thermal`, `insulation_thermal_klari`, `temp_rise`, `temp_rise_klari`, `rate_capacity`, `rate_capacity_klari`, `no_phase`, `no_phase_klari`, `frequency`, `frequency_klari`, `primary_voltage`, `primary_voltage_klari`, `secondary_voltage`, `secondary_voltage_klari`, `vektor_group`, `vektor_group_klari`, `type_winding`, `type_winding_klari`, `type_cooling`, `type_cooling_klari`, `no_tap`, `no_tap_klari`, `type_oil`, `safety_device`, `safety_device_klari`, `temp_indicator`, `temp_indicator_klari`, `oil_indicator`, `oil_indicator_klari`, `presure_device`, `presure_device_klari`, `winding_connection`, `winding_connection_klari`, `winding_material`, `winding_material_klari`, `tap_changer`, `tap_changer_klari`, `winding_indicator`, `winding_indicator_klari`, `presure_relay`, `presure_relay_klari`, `buccholz_relay`, `buccholz_relay_klari`, `vacuum_gauge`, `vacuum_gauge_klari`, `dig_thermo`, `dig_thermo_klari`, `cool_fans`, `cool_fans_klari`, `enclosure`, `enclosure_klari`, `notes1`, `notes1_klari`, `notes2`, `notes2_klari`, `notes3`, `notes3_klari`, `status`, `varian_pros`, `tipepracost`, `tipeprospect`) VALUES
(403, 'P21-0151', 'P21-0151-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 630, '', 'Three Phase', '', 50, '', 400, '', 20000, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'SPLN 50/97 lossess D3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(404, 'P21-0151', 'P21-0151-2', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 1000, '', 'Three Phase', '', 50, '', 400, '', 20000, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Standar design SPLN 50/97, Lossess PLN D3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(405, 'P21-0151', 'P21-0151-3', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'SPLN D3', '', '', '', '50/55', '', 1600, '', 'Three Phase', '', 50, '', 400, '', 20000, '', 'YNd-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'No C/W Contact', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Standar design SPLN 50/97, Lossess PLN D3', '', '', '', '', '', 0, '', 'A', 'OIL'),
(406, 'P21-0152', 'P21-0152-1', 'Non Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 4500, '', 'Three Phase', '', 50, '', 11000, '', 433, '', 'Dyn-11', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'DGPT-2', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'HV+LV CB', '', 'Cable box standard Ablecon', '', '', '', '', '', 0, '', 'A', 'OIL'),
(407, 'P21-0153', 'P21-0153-1', 'Non Standard', '', 'Dry Cast Resin', '', 'Indoor', '', '<1000', '', '<40', '', 'IEC 60076', '', 'Class H (185 C)', '', '125', '', 2000, '', 'Three Phase', '', 50, '', 24000, '', 400, '', 'Dyn-11', '', 'Cu-Cu', '', 'ANAF Â < Air Naural Air Force Â >', '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Off Load Tap Changer', '', '', '', '', '', '', '', '', '', 'C/W Contact', '', 'YES', '', '', '', 'DESIGN K-1', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION.', '', '', '', 0, '', 'A', 'DRY'),
(408, 'P21-0154', 'P21-0154-1', 'Standard', '', 'Hermetically Sealed - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 100, '', 'Three Phase', '', 50, '', 20, '', 400, '', 'Dyn-5', '', 'Al-Al', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'N/A', '', 'N/A', '', '', '', '', '', 'N/A', '', 'Proteksi : standar', '', '', '', '', '', 0, '', 'A', 'OIL'),
(409, 'P21-0155', 'P21-0155-1', 'Non Standard', '', 'Conservator - Corrugated', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 12500, '', 'Three Phase', '', 50, '', 10, '', 20, '', 'Dd-0', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'N/A', '', 'N/A', '', 'C/W Contact', '', 'N/A', '', '', '', '', '', 'N/A', '', 'ADA DI EMAIL', '', '', '', '', '', 0, '', 'A', 'OIL'),
(410, 'P21-0156', 'P21-0156-1', 'Non Standard', '', 'Conservator - Panel', '', 'Outdoor', '', '<1000', '', '<40', '', 'IEC 60076', '', '', '', '60/65', '', 2000, '', 'Three Phase', '', 50, '', 20000, '', 400, '', 'Dyn-5', '', 'Cu-Cu', '', 'ONAN', '', 5, '', 'Mineral Oil', '', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'Off Load Tap Changer', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', 'C/W Contact', '', '', '', '', '', 'HV+LV CB', '', 'PLEASE CHECK EMAIL FOR DETAIL SPECIFICATION', '', '', '', '', '', 0, '', 'A', 'OIL');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int(5) NOT NULL,
  `pilihan` varchar(20) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id`, `pilihan`, `status`) VALUES
(1, 'NO', 0),
(2, 'YES', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `prospectall`
-- (See below for the actual view)
--
CREATE TABLE `prospectall` (
`noprospect` varchar(20)
,`tahun` varchar(10)
,`tgl_prospect` date
,`project` varchar(100)
,`customer` varchar(100)
,`segment` varchar(50)
,`sub_segment` varchar(100)
,`sales` varchar(30)
,`grupsales` varchar(30)
,`nopracost` varchar(20)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `prospect_klari`
-- (See below for the actual view)
--
CREATE TABLE `prospect_klari` (
`noprospect` varchar(20)
,`tahun` varchar(10)
,`tgl_prospect` date
,`project` varchar(100)
,`customer` varchar(100)
,`segment` varchar(50)
,`sub_segment` varchar(100)
,`sales` varchar(30)
,`grupsales` varchar(30)
,`nopracost` varchar(20)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `urutprospect`
--

CREATE TABLE `urutprospect` (
  `id` int(11) NOT NULL,
  `nomor` int(20) NOT NULL,
  `noprospect` varchar(25) NOT NULL,
  `lastno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urutprospect`
--

INSERT INTO `urutprospect` (`id`, `nomor`, `noprospect`, `lastno`) VALUES
(9, 4, 'P21-0002', 0),
(10, 1, 'P21-0001', 0),
(11, 1, 'P21-0003', 0),
(12, 2, 'P21-0004', 0),
(13, 4, 'P21-0005', 0),
(14, 1, 'P21-0006', 0),
(15, 1, 'P21-0007', 0),
(16, 1, 'P21-0008', 0),
(17, 1, 'P21-0009', 0),
(18, 1, 'P21-0010', 0),
(19, 1, 'P21-0011', 0),
(20, 1, 'P21-0012', 0),
(21, 1, 'P21-0013', 0),
(22, 1, 'P21-0014', 0),
(23, 2, 'P21-0015', 0),
(24, 1, 'P21-0016', 0),
(25, 5, 'P21-0017', 0),
(26, 1, 'P21-0018', 0),
(27, 1, 'P21-0019', 0),
(28, 3, 'P21-0020', 0),
(29, 1, 'P21-0021', 0),
(30, 1, 'P21-0022', 0),
(31, 2, 'P21-0023', 0),
(32, 1, 'P21-0024', 0),
(33, 1, 'P21-0025', 0),
(34, 1, 'P21-0026', 0),
(35, 1, 'P21-0027', 0),
(36, 1, 'P21-0028', 0),
(37, 1, 'P21-0029', 0),
(38, 1, 'P21-0030', 0),
(39, 1, 'P21-0031', 0),
(40, 1, 'P21-0032', 0),
(41, 4, 'P21-0033', 0),
(42, 1, 'P21-0034', 0),
(43, 1, 'P21-0035', 0),
(44, 1, 'P21-0036', 0),
(45, 1, 'P21-0037', 0),
(46, 1, 'P21-0038', 0),
(47, 3, 'P21-0039', 0),
(48, 1, 'P21-0040', 0),
(49, 1, 'P21-0041', 0),
(50, 1, 'P21-0042', 0),
(51, 1, 'P21-0043', 0),
(52, 1, 'P21-0044', 0),
(53, 3, 'P21-0045', 0),
(54, 3, 'P21-0046', 0),
(55, 1, 'P21-0047', 0),
(56, 1, 'P21-0048', 0),
(57, 1, 'P21-0049', 0),
(58, 3, 'P21-0050', 0),
(59, 1, 'P21-0051', 0),
(60, 1, 'P21-0052', 0),
(61, 1, 'P21-0053', 0),
(62, 1, 'P21-0054', 0),
(63, 1, 'P21-0055', 0),
(64, 1, 'P21-0056', 0),
(65, 1, 'P21-0057', 0),
(66, 1, 'P21-0058', 0),
(67, 1, 'P21-0059', 0),
(68, 1, 'P21-0060', 0),
(69, 1, 'P21-0061', 0),
(70, 1, 'P21-0062', 0),
(71, 1, 'P21-0063', 0),
(72, 1, 'P21-0064', 0),
(73, 1, 'P21-0065', 0),
(74, 1, 'P21-0066', 0),
(75, 1, 'P21-0067', 0),
(76, 5, 'P21-0068', 0),
(77, 1, 'P21-0069', 0),
(78, 1, 'P21-0070', 0),
(79, 1, 'P21-0071', 0),
(80, 1, 'P21-0072', 0),
(81, 1, 'P21-0073', 0),
(82, 1, 'P21-0074', 0),
(83, 1, 'P21-0075', 0),
(84, 1, 'P21-0076', 0),
(85, 2, 'P21-0077', 0),
(86, 1, 'P21-0078', 0),
(87, 1, 'P21-0079', 0),
(88, 2, 'P21-0080', 0),
(89, 1, 'P21-0081', 0),
(90, 1, 'P21-0082', 0),
(91, 2, 'P21-0083', 0),
(92, 2, 'P21-0084', 0),
(93, 20, 'P21-0085', 0),
(94, 4, 'P21-0086', 0),
(95, 3, 'P21-0087', 0),
(96, 2, 'P21-0088', 0),
(97, 1, 'P21-0089', 0),
(98, 1, 'P21-0090', 0),
(99, 1, 'P21-0091', 0),
(100, 1, 'P21-0092', 0),
(101, 1, 'P21-0093', 0),
(102, 1, 'P21-0094', 0),
(103, 1, 'P21-0095', 0),
(104, 1, 'P21-0096', 0),
(105, 1, 'P21-0097', 0),
(106, 1, 'P21-0098', 0),
(107, 1, 'P21-0099', 0),
(108, 1, 'P21-0100', 0),
(109, 2, 'P21-0101', 0),
(110, 9, 'P21-0102', 0),
(111, 1, 'P21-0103', 0),
(112, 1, 'P21-0104', 0),
(113, 1, 'P21-0105', 0),
(114, 5, 'P21-0106', 0),
(115, 2, 'P21-0107', 0),
(116, 1, 'P21-0108', 0),
(117, 1, 'P21-0109', 0),
(118, 3, 'P21-0110', 0),
(119, 1, 'P21-0111', 0),
(120, 1, 'P21-0112', 0),
(121, 1, 'P21-0113', 0),
(122, 1, 'P21-0114', 0),
(123, 2, 'P21-0115', 0),
(124, 1, 'P21-0116', 0),
(125, 1, 'P21-0117', 0),
(126, 1, 'P21-0118', 0),
(127, 1, 'P21-0119', 0),
(128, 1, 'P21-0120', 0),
(129, 1, 'P21-0121', 0),
(130, 2, 'P21-0122', 0),
(131, 1, 'P21-0123', 0),
(132, 1, 'P21-0124', 0),
(133, 1, 'P21-0125', 0),
(134, 1, 'P21-0126', 0),
(135, 1, 'P21-0127', 0),
(136, 7, 'P21-0128', 0),
(137, 1, 'P21-0129', 0),
(138, 1, 'P21-0130', 0),
(139, 1, 'P21-0131', 0),
(140, 1, 'P21-0132', 0),
(141, 20, 'P21-0133', 0),
(142, 1, 'P21-0134', 0),
(143, 1, 'P21-0135', 0),
(144, 1, 'P21-0136', 0),
(145, 1, 'P21-0137', 0),
(146, 1, 'P21-0138', 0),
(147, 2, 'P21-0139', 0),
(148, 1, 'P21-0140', 0),
(149, 1, 'P21-0141', 0),
(150, 1, 'P21-0142', 0),
(151, 1, 'P21-0143', 0),
(152, 1, 'P21-0144', 0),
(153, 1, 'P21-0145', 0),
(154, 1, 'P21-0146', 0),
(155, 2, 'P21-0147', 0),
(156, 3, 'P21-0148', 0),
(157, 3, 'P21-0149', 0),
(158, 1, 'P21-0150', 0),
(159, 3, 'P21-0151', 0),
(160, 1, 'P21-0152', 0),
(161, 1, 'P21-0153', 0),
(162, 1, 'P21-0154', 0),
(163, 1, 'P21-0155', 0),
(164, 1, 'P21-0156', 0);

-- --------------------------------------------------------

--
-- Table structure for table `urutso`
--

CREATE TABLE `urutso` (
  `nomor` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `noprospect` varchar(25) NOT NULL,
  `lastno` int(10) NOT NULL,
  `lastprospect` varchar(25) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urutso`
--

INSERT INTO `urutso` (`nomor`, `id`, `noprospect`, `lastno`, `lastprospect`, `bulan`, `tahun`) VALUES
(156, 1, 'P21-0156', 155, '', '', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `prospectall`
--
DROP TABLE IF EXISTS `prospectall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prospectall`  AS  select `h_rpospect`.`noprospect` AS `noprospect`,`h_rpospect`.`tahun` AS `tahun`,`h_rpospect`.`tgl_prospect` AS `tgl_prospect`,`h_rpospect`.`project` AS `project`,`h_rpospect`.`customer` AS `customer`,`h_rpospect`.`segment` AS `segment`,`h_rpospect`.`sub_segment` AS `sub_segment`,`h_rpospect`.`sales` AS `sales`,`h_rpospect`.`grupsales` AS `grupsales`,`oil_prospect`.`nopracost` AS `nopracost`,`oil_prospect`.`status` AS `status` from (`h_rpospect` join `oil_prospect` on((`h_rpospect`.`noprospect` = `oil_prospect`.`noprospect`))) ;

-- --------------------------------------------------------

--
-- Structure for view `prospect_klari`
--
DROP TABLE IF EXISTS `prospect_klari`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prospect_klari`  AS  select `h_rpospect`.`noprospect` AS `noprospect`,`h_rpospect`.`tahun` AS `tahun`,`h_rpospect`.`tgl_prospect` AS `tgl_prospect`,`h_rpospect`.`project` AS `project`,`h_rpospect`.`customer` AS `customer`,`h_rpospect`.`segment` AS `segment`,`h_rpospect`.`sub_segment` AS `sub_segment`,`h_rpospect`.`sales` AS `sales`,`h_rpospect`.`grupsales` AS `grupsales`,`oil_prospect`.`nopracost` AS `nopracost`,`oil_prospect`.`status` AS `status` from (`h_rpospect` join `oil_prospect` on((`h_rpospect`.`noprospect` = `oil_prospect`.`noprospect`))) where (`oil_prospect`.`status` = 1) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enclosure`
--
ALTER TABLE `enclosure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `h_rpospect`
--
ALTER TABLE `h_rpospect`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `noprospect` (`noprospect`),
  ADD KEY `segment` (`segment`),
  ADD KEY `sub_segment` (`sub_segment`);

--
-- Indexes for table `insulation`
--
ALTER TABLE `insulation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `int_standard`
--
ALTER TABLE `int_standard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `ms_segment`
--
ALTER TABLE `ms_segment`
  ADD PRIMARY KEY (`id_segment`);

--
-- Indexes for table `ms_sub_segment`
--
ALTER TABLE `ms_sub_segment`
  ADD PRIMARY KEY (`id_sub_segment`);

--
-- Indexes for table `ms_vektor_group`
--
ALTER TABLE `ms_vektor_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oil_prospect`
--
ALTER TABLE `oil_prospect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urutprospect`
--
ALTER TABLE `urutprospect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urutso`
--
ALTER TABLE `urutso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enclosure`
--
ALTER TABLE `enclosure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `h_rpospect`
--
ALTER TABLE `h_rpospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `insulation`
--
ALTER TABLE `insulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `int_standard`
--
ALTER TABLE `int_standard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `ms_segment`
--
ALTER TABLE `ms_segment`
  MODIFY `id_segment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ms_sub_segment`
--
ALTER TABLE `ms_sub_segment`
  MODIFY `id_sub_segment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ms_vektor_group`
--
ALTER TABLE `ms_vektor_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `oil_prospect`
--
ALTER TABLE `oil_prospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `urutprospect`
--
ALTER TABLE `urutprospect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
