-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 01:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dos`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_1`
--

CREATE TABLE `address_1` (
  `COL 1` int(3) DEFAULT NULL,
  `COL 2` varchar(5) DEFAULT NULL,
  `COL 3` varchar(12) DEFAULT NULL,
  `COL 4` varchar(16) DEFAULT NULL,
  `COL 5` varchar(43) DEFAULT NULL,
  `COL 6` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address_1`
--

INSERT INTO `address_1` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`) VALUES
(1, 'Nepal', 'Province 1', 'BHOJPUR', 'Temkemaiyung Rural Municipality', 'Nepal'),
(2, 'Nepal', 'Province 1', 'BHOJPUR', 'Shadananda Municipality', 'Nepal'),
(3, 'Nepal', 'Province 1', 'BHOJPUR', 'Salpasilichho Rural Municipality', 'Nepal'),
(4, 'Nepal', 'Province 1', 'BHOJPUR', 'Ramprasad Rai Rural Municipality', 'Nepal'),
(5, 'Nepal', 'Province 1', 'BHOJPUR', 'Pauwadungma Rural Municipality', 'Nepal'),
(6, 'Nepal', 'Province 1', 'BHOJPUR', 'Hatuwagadhi Rural Municipality', 'Nepal'),
(7, 'Nepal', 'Province 1', 'BHOJPUR', 'Bhojpur Municipality', 'Nepal'),
(8, 'Nepal', 'Province 1', 'BHOJPUR', 'Arun Rural Municipality', 'Nepal'),
(9, 'Nepal', 'Province 1', 'BHOJPUR', 'Aamchowk Rural Municipality', 'Nepal'),
(10, 'Nepal', 'Province 1', 'DHANKUTA', 'Shahidbhumi Rural Municipality', 'Nepal'),
(11, 'Nepal', 'Province 1', 'DHANKUTA', 'Sangurigadhi Rural Municipality', 'Nepal'),
(12, 'Nepal', 'Province 1', 'DHANKUTA', 'Pakhribas Municipality', 'Nepal'),
(13, 'Nepal', 'Province 1', 'DHANKUTA', 'Mahalaxmi Municipality', 'Nepal'),
(14, 'Nepal', 'Province 1', 'DHANKUTA', 'Dhankuta Municipality', 'Nepal'),
(15, 'Nepal', 'Province 1', 'DHANKUTA', 'Chhathar Jorpati Rural Municipality', 'Nepal'),
(16, 'Nepal', 'Province 1', 'DHANKUTA', 'Chaubise Rural Municipality', 'Nepal'),
(17, 'Nepal', 'Province 1', 'ILAM', 'Suryodaya Municipality', 'Nepal'),
(18, 'Nepal', 'Province 1', 'ILAM', 'Sandakpur Rural Municipality', 'Nepal'),
(19, 'Nepal', 'Province 1', 'ILAM', 'Rong Rural Municipality', 'Nepal'),
(20, 'Nepal', 'Province 1', 'ILAM', 'Mangsebung Rural Municipality', 'Nepal'),
(21, 'Nepal', 'Province 1', 'ILAM', 'Maijogmai Rural Municipality', 'Nepal'),
(22, 'Nepal', 'Province 1', 'ILAM', 'Mai Municipality', 'Nepal'),
(23, 'Nepal', 'Province 1', 'ILAM', 'Illam Municipality', 'Nepal'),
(24, 'Nepal', 'Province 1', 'ILAM', 'Fakphokthum Rural Municipality', 'Nepal'),
(25, 'Nepal', 'Province 1', 'ILAM', 'Deumai Municipality', 'Nepal'),
(26, 'Nepal', 'Province 1', 'ILAM', 'Chulachuli Rural Municipality', 'Nepal'),
(27, 'Nepal', 'Province 1', 'JHAPA', 'Shivasataxi Municipality', 'Nepal'),
(28, 'Nepal', 'Province 1', 'JHAPA', 'Mechinagar Municipality', 'Nepal'),
(29, 'Nepal', 'Province 1', 'JHAPA', 'Kankai Municipality', 'Nepal'),
(30, 'Nepal', 'Province 1', 'JHAPA', 'Kamal Rural Municipality', 'Nepal'),
(31, 'Nepal', 'Province 1', 'JHAPA', 'Kachankawal Rural Municipality', 'Nepal'),
(32, 'Nepal', 'Province 1', 'JHAPA', 'Jhapa Rural Municipality', 'Nepal'),
(33, 'Nepal', 'Province 1', 'JHAPA', 'Haldibari Rural Municipality', 'Nepal'),
(34, 'Nepal', 'Province 1', 'JHAPA', 'Gauriganj Rural Municipality', 'Nepal'),
(35, 'Nepal', 'Province 1', 'JHAPA', 'Gauradhaha Municipality', 'Nepal'),
(36, 'Nepal', 'Province 1', 'JHAPA', 'Damak Municipality', 'Nepal'),
(37, 'Nepal', 'Province 1', 'JHAPA', 'Buddhashanti Rural Municipality', 'Nepal'),
(38, 'Nepal', 'Province 1', 'JHAPA', 'Birtamod Municipality', 'Nepal'),
(39, 'Nepal', 'Province 1', 'JHAPA', 'Bhadrapur Municipality', 'Nepal'),
(40, 'Nepal', 'Province 1', 'JHAPA', 'Barhadashi Rural Municipality', 'Nepal'),
(41, 'Nepal', 'Province 1', 'JHAPA', 'Arjundhara Municipality', 'Nepal'),
(42, 'Nepal', 'Province 1', 'KHOTANG', 'Sakela Rural Municipality', 'Nepal'),
(43, 'Nepal', 'Province 1', 'KHOTANG', 'Rawa Besi Rural Municipality', 'Nepal'),
(44, 'Nepal', 'Province 1', 'KHOTANG', 'Khotehang Rural Municipality', 'Nepal'),
(45, 'Nepal', 'Province 1', 'KHOTANG', 'Kepilasagadhi Rural Municipality', 'Nepal'),
(46, 'Nepal', 'Province 1', 'KHOTANG', 'Jantedhunga Rural Municipality', 'Nepal'),
(47, 'Nepal', 'Province 1', 'KHOTANG', 'Halesi Tuwachung Municipality', 'Nepal'),
(48, 'Nepal', 'Province 1', 'KHOTANG', 'Diprung Chuichumma Rural Municipality', 'Nepal'),
(49, 'Nepal', 'Province 1', 'KHOTANG', 'Diktel Rupakot Majhuwagadhi Municipality', 'Nepal'),
(50, 'Nepal', 'Province 1', 'KHOTANG', 'Barahapokhari Rural Municipality', 'Nepal'),
(51, 'Nepal', 'Province 1', 'KHOTANG', 'Ainselukhark Rural Municipality', 'Nepal'),
(52, 'Nepal', 'Province 1', 'MORANG', 'Uralabari Municipality', 'Nepal'),
(53, 'Nepal', 'Province 1', 'MORANG', 'Sunwarshi Municipality', 'Nepal'),
(54, 'Nepal', 'Province 1', 'MORANG', 'Sundarharaicha Municipality', 'Nepal'),
(55, 'Nepal', 'Province 1', 'MORANG', 'Ratuwamai Municipality', 'Nepal'),
(56, 'Nepal', 'Province 1', 'MORANG', 'Rangeli Municipality', 'Nepal'),
(57, 'Nepal', 'Province 1', 'MORANG', 'Patahrishanishchare Municipality', 'Nepal'),
(58, 'Nepal', 'Province 1', 'MORANG', 'Miklajung Rural Municipality', 'Nepal'),
(59, 'Nepal', 'Province 1', 'MORANG', 'Letang Municipality', 'Nepal'),
(60, 'Nepal', 'Province 1', 'MORANG', 'Kerabari Rural Municipality', 'Nepal'),
(61, 'Nepal', 'Province 1', 'MORANG', 'Katahari Rural Municipality', 'Nepal'),
(62, 'Nepal', 'Province 1', 'MORANG', 'Kanepokhari Rural Municipality', 'Nepal'),
(63, 'Nepal', 'Province 1', 'MORANG', 'Jahada Rural Municipality', 'Nepal'),
(64, 'Nepal', 'Province 1', 'MORANG', 'Gramthan Rural Municipality', 'Nepal'),
(65, 'Nepal', 'Province 1', 'MORANG', 'Dhanpalthan Rural Municipality', 'Nepal'),
(66, 'Nepal', 'Province 1', 'MORANG', 'Budhiganga Rural Municipality', 'Nepal'),
(67, 'Nepal', 'Province 1', 'MORANG', 'Biratnagar Metropolitian City', 'Nepal'),
(68, 'Nepal', 'Province 1', 'MORANG', 'Belbari Municipality', 'Nepal'),
(69, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Sunkoshi Rural Municipality', 'Nepal'),
(70, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Siddhicharan Municipality', 'Nepal'),
(71, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Molung Rural Municipality', 'Nepal'),
(72, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Manebhanjyang Rural Municipality', 'Nepal'),
(73, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Likhu Rural Municipality', 'Nepal'),
(74, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Khijidemba Rural Municipality', 'Nepal'),
(75, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Chisankhugadhi Rural Municipality', 'Nepal'),
(76, 'Nepal', 'Province 1', 'OKHALDHUNGA', 'Champadevi Rural Municipality', 'Nepal'),
(77, 'Nepal', 'Province 1', 'PANCHTHAR', 'Yangwarak Rural Municipality', 'Nepal'),
(78, 'Nepal', 'Province 1', 'PANCHTHAR', 'Tumbewa Rural Municipality', 'Nepal'),
(79, 'Nepal', 'Province 1', 'PANCHTHAR', 'Phidim Municipality', 'Nepal'),
(80, 'Nepal', 'Province 1', 'PANCHTHAR', 'Miklajung Rural Municipality', 'Nepal'),
(81, 'Nepal', 'Province 1', 'PANCHTHAR', 'Kummayak Rural Municipality', 'Nepal'),
(82, 'Nepal', 'Province 1', 'PANCHTHAR', 'Hilihang Rural Municipality', 'Nepal'),
(83, 'Nepal', 'Province 1', 'PANCHTHAR', 'Falgunanda Rural Municipality', 'Nepal'),
(84, 'Nepal', 'Province 1', 'PANCHTHAR', 'Falelung Rural Municipality', 'Nepal'),
(85, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Silichong Rural Municipality', 'Nepal'),
(86, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Sabhapokhari Rural Municipality', 'Nepal'),
(87, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Panchakhapan Municipality', 'Nepal'),
(88, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Makalu Rural Municipality', 'Nepal'),
(89, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Madi Municipality', 'Nepal'),
(90, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Khandbari Municipality', 'Nepal'),
(91, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Dharmadevi Municipality', 'Nepal'),
(92, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Chichila Rural Municipality', 'Nepal'),
(93, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Chainpur Municipality', 'Nepal'),
(94, 'Nepal', 'Province 1', 'SANKHUWASABHA', 'Bhotkhola Rural Municipality', 'Nepal'),
(95, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Thulung Dudhkoshi Rural Municipality', 'Nepal'),
(96, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Sotang Rural Municipality', 'Nepal'),
(97, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Solududhakunda Municipality', 'Nepal'),
(98, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Nechasalyan Rural Municipality', 'Nepal'),
(99, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Mahakulung Rural Municipality', 'Nepal'),
(100, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Maapya Dudhkoshi Rural Municipality', 'Nepal'),
(101, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Likhupike Rural Municipality', 'Nepal'),
(102, 'Nepal', 'Province 1', 'SOLUKHUMBU', 'Khumbupasanglahmu Rural Municipality', 'Nepal'),
(103, 'Nepal', 'Province 1', 'SUNSARI', 'Ramdhuni Municipality', 'Nepal'),
(104, 'Nepal', 'Province 1', 'SUNSARI', 'Koshi Rural Municipality', 'Nepal'),
(105, 'Nepal', 'Province 1', 'SUNSARI', 'Itahari Sub-Metropolitian City', 'Nepal'),
(106, 'Nepal', 'Province 1', 'SUNSARI', 'Inaruwa Municipality', 'Nepal'),
(107, 'Nepal', 'Province 1', 'SUNSARI', 'Harinagar Rural Municipality', 'Nepal'),
(108, 'Nepal', 'Province 1', 'SUNSARI', 'Gadhi Rural Municipality', 'Nepal'),
(109, 'Nepal', 'Province 1', 'SUNSARI', 'Duhabi Municipality', 'Nepal'),
(110, 'Nepal', 'Province 1', 'SUNSARI', 'Dharan Sub-Metropolitian City', 'Nepal'),
(111, 'Nepal', 'Province 1', 'SUNSARI', 'Dewanganj Rural Municipality', 'Nepal'),
(112, 'Nepal', 'Province 1', 'SUNSARI', 'Bhokraha Narsing Rural Municipality', 'Nepal'),
(113, 'Nepal', 'Province 1', 'SUNSARI', 'Barju Rural Municipality', 'Nepal'),
(114, 'Nepal', 'Province 1', 'SUNSARI', 'Barahchhetra Municipality', 'Nepal'),
(115, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Sirijangha Rural Municipality', 'Nepal'),
(116, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Sidingba Rural Municipality', 'Nepal'),
(117, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Phungling Municipality', 'Nepal'),
(118, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Phaktanglung Rural Municipality', 'Nepal'),
(119, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Pathivara Yangwarak Rural Municipality', 'Nepal'),
(120, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Mikwakhola Rural Municipality', 'Nepal'),
(121, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Meringden Rural Municipality', 'Nepal'),
(122, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Maiwakhola Rural Municipality', 'Nepal'),
(123, 'Nepal', 'Province 1', 'TAPLEJUNG', 'Aathrai Tribeni Rural Municipality', 'Nepal'),
(124, 'Nepal', 'Province 1', 'TERHATHUM', 'Phedap Rural Municipality', 'Nepal'),
(125, 'Nepal', 'Province 1', 'TERHATHUM', 'Myanglung Municipality', 'Nepal'),
(126, 'Nepal', 'Province 1', 'TERHATHUM', 'Menchayam Rural Municipality', 'Nepal'),
(127, 'Nepal', 'Province 1', 'TERHATHUM', 'Laligurans Municipality', 'Nepal'),
(128, 'Nepal', 'Province 1', 'TERHATHUM', 'Chhathar Rural Municipality', 'Nepal'),
(129, 'Nepal', 'Province 1', 'TERHATHUM', 'Aathrai Rural Municipality', 'Nepal'),
(130, 'Nepal', 'Province 1', 'UDAYAPUR', 'Udayapurgadhi Rural Municipality', 'Nepal'),
(131, 'Nepal', 'Province 1', 'UDAYAPUR', 'Triyuga Municipality', 'Nepal'),
(132, 'Nepal', 'Province 1', 'UDAYAPUR', 'Tapli Rural Municipality', 'Nepal'),
(133, 'Nepal', 'Province 1', 'UDAYAPUR', 'Rautamai Rural Municipality', 'Nepal'),
(134, 'Nepal', 'Province 1', 'UDAYAPUR', 'Limchungbung Rural Municipality', 'Nepal'),
(135, 'Nepal', 'Province 1', 'UDAYAPUR', 'Katari Municipality', 'Nepal'),
(136, 'Nepal', 'Province 1', 'UDAYAPUR', 'Chaudandigadhi Municipality', 'Nepal'),
(137, 'Nepal', 'Province 1', 'UDAYAPUR', 'Belaka Municipality', 'Nepal'),
(138, 'Nepal', 'Madhesh', 'BARA', 'Suwarna Rural Municipality', 'Nepal'),
(139, 'Nepal', 'Madhesh', 'BARA', 'Simraungadh Municipality', 'Nepal'),
(140, 'Nepal', 'Madhesh', 'BARA', 'Prasauni Rural Municipality', 'Nepal'),
(141, 'Nepal', 'Madhesh', 'BARA', 'Pheta Rural Municipality', 'Nepal'),
(142, 'Nepal', 'Madhesh', 'BARA', 'Parwanipur Rural Municipality', 'Nepal'),
(143, 'Nepal', 'Madhesh', 'BARA', 'Pacharauta Municipality', 'Nepal'),
(144, 'Nepal', 'Madhesh', 'BARA', 'Nijgadh Municipality', 'Nepal'),
(145, 'Nepal', 'Madhesh', 'BARA', 'Mahagadhimai Municipality', 'Nepal'),
(146, 'Nepal', 'Madhesh', 'BARA', 'Kolhabi Municipality', 'Nepal'),
(147, 'Nepal', 'Madhesh', 'BARA', 'Karaiyamai Rural Municipality', 'Nepal'),
(148, 'Nepal', 'Madhesh', 'BARA', 'Kalaiya Sub-Metropolitian City', 'Nepal'),
(149, 'Nepal', 'Madhesh', 'BARA', 'Jitpur Simara Sub-Metropolitian City', 'Nepal'),
(150, 'Nepal', 'Madhesh', 'BARA', 'Devtal Rural Municipality', 'Nepal'),
(151, 'Nepal', 'Madhesh', 'BARA', 'Bishrampur Rural Municipality', 'Nepal'),
(152, 'Nepal', 'Madhesh', 'BARA', 'Baragadhi Rural Municipality', 'Nepal'),
(153, 'Nepal', 'Madhesh', 'BARA', 'Adarshkotwal Rural Municipality', 'Nepal'),
(154, 'Nepal', 'Madhesh', 'DHANUSA', 'Sahidnagar Municipality', 'Nepal'),
(155, 'Nepal', 'Madhesh', 'DHANUSA', 'Sabaila Municipality', 'Nepal'),
(156, 'Nepal', 'Madhesh', 'DHANUSA', 'Nagarain Municipality', 'Nepal'),
(157, 'Nepal', 'Madhesh', 'DHANUSA', 'Mukhiyapatti Musarmiya Rural Municipality', 'Nepal'),
(158, 'Nepal', 'Madhesh', 'DHANUSA', 'Mithila Municipality', 'Nepal'),
(159, 'Nepal', 'Madhesh', 'DHANUSA', 'Mithila Bihari Municipality', 'Nepal'),
(160, 'Nepal', 'Madhesh', 'DHANUSA', 'Lakshminiya Rural Municipality', 'Nepal'),
(161, 'Nepal', 'Madhesh', 'DHANUSA', 'Kamala Municipality', 'Nepal'),
(162, 'Nepal', 'Madhesh', 'DHANUSA', 'Janakpurdham Sub-Metropolitian City', 'Nepal'),
(163, 'Nepal', 'Madhesh', 'DHANUSA', 'Janaknandani Rural Municipality', 'Nepal'),
(164, 'Nepal', 'Madhesh', 'DHANUSA', 'Hansapur Municipality', 'Nepal'),
(165, 'Nepal', 'Madhesh', 'DHANUSA', 'Ganeshman Charnath Municipality', 'Nepal'),
(166, 'Nepal', 'Madhesh', 'DHANUSA', 'Dhanusadham Municipality', 'Nepal'),
(167, 'Nepal', 'Madhesh', 'DHANUSA', 'Dhanauji Rural Municipality', 'Nepal'),
(168, 'Nepal', 'Madhesh', 'DHANUSA', 'Chhireshwornath Municipality', 'Nepal'),
(169, 'Nepal', 'Madhesh', 'DHANUSA', 'Bideha Municipality', 'Nepal'),
(170, 'Nepal', 'Madhesh', 'DHANUSA', 'Bateshwor Rural Municipality', 'Nepal'),
(171, 'Nepal', 'Madhesh', 'DHANUSA', 'Aaurahi Rural Municipality', 'Nepal'),
(172, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Sonama Rural Municipality', 'Nepal'),
(173, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Samsi Rural Municipality', 'Nepal'),
(174, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Ramgopalpur Municipality', 'Nepal'),
(175, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Pipra Rural Municipality', 'Nepal'),
(176, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Matihani Municipality', 'Nepal'),
(177, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Manra Siswa Municipality', 'Nepal'),
(178, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Mahottari Rural Municipality', 'Nepal'),
(179, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Loharpatti Municipality', 'Nepal'),
(180, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Jaleswor Municipality', 'Nepal'),
(181, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Gaushala Municipality', 'Nepal'),
(182, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Ekdanra Rural Municipality', 'Nepal'),
(183, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Bhangaha Municipality', 'Nepal'),
(184, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Bardibas Municipality', 'Nepal'),
(185, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Balwa Municipality', 'Nepal'),
(186, 'Nepal', 'Madhesh', 'MAHOTTARI', 'Aurahi Municipality', 'Nepal'),
(187, 'Nepal', 'Madhesh', 'PARSA', 'Thori Rural Municipality', 'Nepal'),
(188, 'Nepal', 'Madhesh', 'PARSA', 'SakhuwaPrasauni Rural Municipality', 'Nepal'),
(189, 'Nepal', 'Madhesh', 'PARSA', 'Pokhariya Municipality', 'Nepal'),
(190, 'Nepal', 'Madhesh', 'PARSA', 'Paterwasugauli Rural Municipality', 'Nepal'),
(191, 'Nepal', 'Madhesh', 'PARSA', 'Parsagadhi Municipality', 'Nepal'),
(192, 'Nepal', 'Madhesh', 'PARSA', 'Pakahamainpur Rural Municipality', 'Nepal'),
(193, 'Nepal', 'Madhesh', 'PARSA', 'Kalikamai Rural Municipality', 'Nepal'),
(194, 'Nepal', 'Madhesh', 'PARSA', 'Jirabhawani Rural Municipality', 'Nepal'),
(195, 'Nepal', 'Madhesh', 'PARSA', 'Jagarnathpur Rural Municipality', 'Nepal'),
(196, 'Nepal', 'Madhesh', 'PARSA', 'Dhobini Rural Municipality', 'Nepal'),
(197, 'Nepal', 'Madhesh', 'PARSA', 'Chhipaharmai Rural Municipality', 'Nepal'),
(198, 'Nepal', 'Madhesh', 'PARSA', 'Birgunj Metropolitian City', 'Nepal'),
(199, 'Nepal', 'Madhesh', 'PARSA', 'Bindabasini Rural Municipality', 'Nepal'),
(200, 'Nepal', 'Madhesh', 'PARSA', 'Bahudaramai Municipality', 'Nepal'),
(201, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Yemunamai Rural Municipality', 'Nepal'),
(202, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Rajpur Municipality', 'Nepal'),
(203, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Rajdevi Municipality', 'Nepal'),
(204, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Phatuwa Bijayapur Municipality', 'Nepal'),
(205, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Paroha Municipality', 'Nepal'),
(206, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Maulapur Municipality', 'Nepal'),
(207, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Madhav Narayan Municipality', 'Nepal'),
(208, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Katahariya Municipality', 'Nepal'),
(209, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Ishanath Municipality', 'Nepal'),
(210, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Gujara Municipality', 'Nepal'),
(211, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Gaur Municipality', 'Nepal'),
(212, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Garuda Municipality', 'Nepal'),
(213, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Gadhimai Municipality', 'Nepal'),
(214, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Durga Bhagwati Rural Municipality', 'Nepal'),
(215, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Dewahhi Gonahi Municipality', 'Nepal'),
(216, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Chandrapur Municipality', 'Nepal'),
(217, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Brindaban Municipality', 'Nepal'),
(218, 'Nepal', 'Madhesh', 'RAUTAHAT', 'Baudhimai Municipality', 'Nepal'),
(219, 'Nepal', 'Madhesh', 'SAPTARI', 'Tirahut Rural Municipality', 'Nepal'),
(220, 'Nepal', 'Madhesh', 'SAPTARI', 'Tilathi Koiladi Rural Municipality', 'Nepal'),
(221, 'Nepal', 'Madhesh', 'SAPTARI', 'Surunga Municipality', 'Nepal'),
(222, 'Nepal', 'Madhesh', 'SAPTARI', 'Shambhunath Municipality', 'Nepal'),
(223, 'Nepal', 'Madhesh', 'SAPTARI', 'Saptakoshi Rural Municipality', 'Nepal'),
(224, 'Nepal', 'Madhesh', 'SAPTARI', 'Rupani Rural Municipality', 'Nepal'),
(225, 'Nepal', 'Madhesh', 'SAPTARI', 'Rajgadh Rural Municipality', 'Nepal'),
(226, 'Nepal', 'Madhesh', 'SAPTARI', 'Rajbiraj Municipality', 'Nepal'),
(227, 'Nepal', 'Madhesh', 'SAPTARI', 'Mahadeva Rural Municipality', 'Nepal'),
(228, 'Nepal', 'Madhesh', 'SAPTARI', 'Khadak Municipality', 'Nepal'),
(229, 'Nepal', 'Madhesh', 'SAPTARI', 'Kanchanrup Municipality', 'Nepal'),
(230, 'Nepal', 'Madhesh', 'SAPTARI', 'Hanumannagar Kankalini Municipality', 'Nepal'),
(231, 'Nepal', 'Madhesh', 'SAPTARI', 'Dakneshwori Municipality', 'Nepal'),
(232, 'Nepal', 'Madhesh', 'SAPTARI', 'Chhinnamasta Rural Municipality', 'Nepal'),
(233, 'Nepal', 'Madhesh', 'SAPTARI', 'Bode Barsain Municipality', 'Nepal'),
(234, 'Nepal', 'Madhesh', 'SAPTARI', 'Bishnupur Rural Municipality', 'Nepal'),
(235, 'Nepal', 'Madhesh', 'SAPTARI', 'Balan Bihul Rural Municipality', 'Nepal'),
(236, 'Nepal', 'Madhesh', 'SAPTARI', 'Agnisair Krishna Savaran Rural Municipality', 'Nepal'),
(237, 'Nepal', 'Madhesh', 'SARLAHI', 'Ramnagar Rural Municipality', 'Nepal'),
(238, 'Nepal', 'Madhesh', 'SARLAHI', 'Parsa Rural Municipality', 'Nepal'),
(239, 'Nepal', 'Madhesh', 'SARLAHI', 'Malangawa Municipality', 'Nepal'),
(240, 'Nepal', 'Madhesh', 'SARLAHI', 'Lalbandi Municipality', 'Nepal'),
(241, 'Nepal', 'Madhesh', 'SARLAHI', 'Kaudena Rural Municipality', 'Nepal'),
(242, 'Nepal', 'Madhesh', 'SARLAHI', 'Kabilasi Municipality', 'Nepal'),
(243, 'Nepal', 'Madhesh', 'SARLAHI', 'Ishworpur Municipality', 'Nepal'),
(244, 'Nepal', 'Madhesh', 'SARLAHI', 'Hariwan Municipality', 'Nepal'),
(245, 'Nepal', 'Madhesh', 'SARLAHI', 'Haripurwa Municipality', 'Nepal'),
(246, 'Nepal', 'Madhesh', 'SARLAHI', 'Haripur Municipality', 'Nepal'),
(247, 'Nepal', 'Madhesh', 'SARLAHI', 'Godaita Municipality', 'Nepal'),
(248, 'Nepal', 'Madhesh', 'SARLAHI', 'Dhankaul Rural Municipality', 'Nepal'),
(249, 'Nepal', 'Madhesh', 'SARLAHI', 'Chandranagar Rural Municipality', 'Nepal'),
(250, 'Nepal', 'Madhesh', 'SARLAHI', 'Chakraghatta Rural Municipality', 'Nepal'),
(251, 'Nepal', 'Madhesh', 'SARLAHI', 'Bramhapuri Rural Municipality', 'Nepal'),
(252, 'Nepal', 'Madhesh', 'SARLAHI', 'Bishnu Rural Municipality', 'Nepal'),
(253, 'Nepal', 'Madhesh', 'SARLAHI', 'Basbariya Rural Municipality', 'Nepal'),
(254, 'Nepal', 'Madhesh', 'SARLAHI', 'Barahathawa Municipality', 'Nepal'),
(255, 'Nepal', 'Madhesh', 'SARLAHI', 'Balara Municipality', 'Nepal'),
(256, 'Nepal', 'Madhesh', 'SARLAHI', 'Bagmati Municipality', 'Nepal'),
(257, 'Nepal', 'Madhesh', 'SIRAHA', 'Sukhipur Municipality', 'Nepal'),
(258, 'Nepal', 'Madhesh', 'SIRAHA', 'Siraha Municipality', 'Nepal'),
(259, 'Nepal', 'Madhesh', 'SIRAHA', 'Sakhuwanankarkatti Rural Municipality', 'Nepal'),
(260, 'Nepal', 'Madhesh', 'SIRAHA', 'Nawarajpur Rural Municipality', 'Nepal'),
(261, 'Nepal', 'Madhesh', 'SIRAHA', 'Naraha Rural Municipality', 'Nepal'),
(262, 'Nepal', 'Madhesh', 'SIRAHA', 'Mirchaiya Municipality', 'Nepal'),
(263, 'Nepal', 'Madhesh', 'SIRAHA', 'Laxmipur Patari Rural Municipality', 'Nepal'),
(264, 'Nepal', 'Madhesh', 'SIRAHA', 'Lahan Municipality', 'Nepal'),
(265, 'Nepal', 'Madhesh', 'SIRAHA', 'Karjanha Municipality', 'Nepal'),
(266, 'Nepal', 'Madhesh', 'SIRAHA', 'Kalyanpur Municipality', 'Nepal'),
(267, 'Nepal', 'Madhesh', 'SIRAHA', 'Golbazar Municipality', 'Nepal'),
(268, 'Nepal', 'Madhesh', 'SIRAHA', 'Dhangadhimai Municipality', 'Nepal'),
(269, 'Nepal', 'Madhesh', 'SIRAHA', 'Bishnupur Rural Municipality', 'Nepal'),
(270, 'Nepal', 'Madhesh', 'SIRAHA', 'Bhagawanpur Rural Municipality', 'Nepal'),
(271, 'Nepal', 'Madhesh', 'SIRAHA', 'Bariyarpatti Rural Municipality', 'Nepal'),
(272, 'Nepal', 'Madhesh', 'SIRAHA', 'Aurahi Rural Municipality', 'Nepal'),
(273, 'Nepal', 'Madhesh', 'SIRAHA', 'Arnama Rural Municipality', 'Nepal'),
(274, 'Nepal', 'Bagmati', 'BHAKTAPUR', 'Suryabinayak Municipality', 'Nepal'),
(275, 'Nepal', 'Bagmati', 'BHAKTAPUR', 'Madhyapur Thimi Municipality', 'Nepal'),
(276, 'Nepal', 'Bagmati', 'BHAKTAPUR', 'Changunarayan Municipality', 'Nepal'),
(277, 'Nepal', 'Bagmati', 'BHAKTAPUR', 'Bhaktapur Municipality', 'Nepal'),
(278, 'Nepal', 'Bagmati', 'CHITAWAN', 'Ratnanagar Municipality', 'Nepal'),
(279, 'Nepal', 'Bagmati', 'CHITAWAN', 'Rapti Municipality', 'Nepal'),
(280, 'Nepal', 'Bagmati', 'CHITAWAN', 'Madi Municipality', 'Nepal'),
(281, 'Nepal', 'Bagmati', 'CHITAWAN', 'Khairahani Municipality', 'Nepal'),
(282, 'Nepal', 'Bagmati', 'CHITAWAN', 'Kalika Municipality', 'Nepal'),
(283, 'Nepal', 'Bagmati', 'CHITAWAN', 'Ichchhyakamana Rural Municipality', 'Nepal'),
(284, 'Nepal', 'Bagmati', 'CHITAWAN', 'Bharatpur Metropolitian City', 'Nepal'),
(285, 'Nepal', 'Bagmati', 'DHADING', 'Tripura Sundari Rural Municipality', 'Nepal'),
(286, 'Nepal', 'Bagmati', 'DHADING', 'Thakre Rural Municipality', 'Nepal'),
(287, 'Nepal', 'Bagmati', 'DHADING', 'Siddhalek Rural Municipality', 'Nepal'),
(288, 'Nepal', 'Bagmati', 'DHADING', 'Rubi Valley Rural Municipality', 'Nepal'),
(289, 'Nepal', 'Bagmati', 'DHADING', 'Nilakantha Municipality', 'Nepal'),
(290, 'Nepal', 'Bagmati', 'DHADING', 'Netrawati Dabjong Rural Municipality', 'Nepal'),
(291, 'Nepal', 'Bagmati', 'DHADING', 'Khaniyabash Rural Municipality', 'Nepal'),
(292, 'Nepal', 'Bagmati', 'DHADING', 'Jwalamukhi Rural Municipality', 'Nepal'),
(293, 'Nepal', 'Bagmati', 'DHADING', 'Gangajamuna Rural Municipality', 'Nepal'),
(294, 'Nepal', 'Bagmati', 'DHADING', 'Galchi Rural Municipality', 'Nepal'),
(295, 'Nepal', 'Bagmati', 'DHADING', 'Gajuri Rural Municipality', 'Nepal'),
(296, 'Nepal', 'Bagmati', 'DHADING', 'Dhunibesi Municipality', 'Nepal'),
(297, 'Nepal', 'Bagmati', 'DHADING', 'Benighat Rorang Rural Municipality', 'Nepal'),
(298, 'Nepal', 'Bagmati', 'DOLAKHA', 'Tamakoshi Rural Municipality', 'Nepal'),
(299, 'Nepal', 'Bagmati', 'DOLAKHA', 'Sailung Rural Municipality', 'Nepal'),
(300, 'Nepal', 'Bagmati', 'DOLAKHA', 'Melung Rural Municipality', 'Nepal'),
(301, 'Nepal', 'Bagmati', 'DOLAKHA', 'Kalinchok Rural Municipality', 'Nepal'),
(302, 'Nepal', 'Bagmati', 'DOLAKHA', 'Jiri Municipality', 'Nepal'),
(303, 'Nepal', 'Bagmati', 'DOLAKHA', 'Gaurishankar Rural Municipality', 'Nepal'),
(304, 'Nepal', 'Bagmati', 'DOLAKHA', 'Bigu Rural Municipality', 'Nepal'),
(305, 'Nepal', 'Bagmati', 'DOLAKHA', 'Bhimeshwor Municipality', 'Nepal'),
(306, 'Nepal', 'Bagmati', 'DOLAKHA', 'Baiteshwor Rural Municipality', 'Nepal'),
(307, 'Nepal', 'Bagmati', 'KATHMANDU', 'Tokha Municipality', 'Nepal'),
(308, 'Nepal', 'Bagmati', 'KATHMANDU', 'Tarakeshwor Municipality', 'Nepal'),
(309, 'Nepal', 'Bagmati', 'KATHMANDU', 'Shankharapur Municipality', 'Nepal'),
(310, 'Nepal', 'Bagmati', 'KATHMANDU', 'Nagarjun Municipality', 'Nepal'),
(311, 'Nepal', 'Bagmati', 'KATHMANDU', 'Kirtipur Municipality', 'Nepal'),
(312, 'Nepal', 'Bagmati', 'KATHMANDU', 'Kathmandu Metropolitian City', 'Nepal'),
(313, 'Nepal', 'Bagmati', 'KATHMANDU', 'Kageshwori Manahora Municipality', 'Nepal'),
(314, 'Nepal', 'Bagmati', 'KATHMANDU', 'Gokarneshwor Municipality', 'Nepal'),
(315, 'Nepal', 'Bagmati', 'KATHMANDU', 'Dakshinkali Municipality', 'Nepal'),
(316, 'Nepal', 'Bagmati', 'KATHMANDU', 'Chandragiri Municipality', 'Nepal'),
(317, 'Nepal', 'Bagmati', 'KATHMANDU', 'Budhanilakantha Municipality', 'Nepal'),
(318, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Temal Rural Municipality', 'Nepal'),
(319, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Roshi Rural Municipality', 'Nepal'),
(320, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Panchkhal Municipality', 'Nepal'),
(321, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Panauti Municipality', 'Nepal'),
(322, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Namobuddha Municipality', 'Nepal'),
(323, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Mandandeupur Municipality', 'Nepal'),
(324, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Mahabharat Rural Municipality', 'Nepal'),
(325, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Khanikhola Rural Municipality', 'Nepal'),
(326, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Dhulikhel Municipality', 'Nepal'),
(327, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Chaurideurali Rural Municipality', 'Nepal'),
(328, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Bhumlu Rural Municipality', 'Nepal'),
(329, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Bethanchowk Rural Municipality', 'Nepal'),
(330, 'Nepal', 'Bagmati', 'KAVREPALANCHOK', 'Banepa Municipality', 'Nepal'),
(331, 'Nepal', 'Bagmati', 'LALITPUR', 'Mahankal Rural Municipality', 'Nepal'),
(332, 'Nepal', 'Bagmati', 'LALITPUR', 'Mahalaxmi Municipality', 'Nepal'),
(333, 'Nepal', 'Bagmati', 'LALITPUR', 'Lalitpur Metropolitian City', 'Nepal'),
(334, 'Nepal', 'Bagmati', 'LALITPUR', 'Konjyosom Rural Municipality', 'Nepal'),
(335, 'Nepal', 'Bagmati', 'LALITPUR', 'Godawari Municipality', 'Nepal'),
(336, 'Nepal', 'Bagmati', 'LALITPUR', 'Bagmati Rural Municipality', 'Nepal'),
(337, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Thaha Municipality', 'Nepal'),
(338, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Raksirang Rural Municipality', 'Nepal'),
(339, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Manahari Rural Municipality', 'Nepal'),
(340, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Makawanpurgadhi Rural Municipality', 'Nepal'),
(341, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Kailash Rural Municipality', 'Nepal'),
(342, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Indrasarowar Rural Municipality', 'Nepal'),
(343, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Hetauda Sub-Metropolitian City', 'Nepal'),
(344, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Bhimphedi Rural Municipality', 'Nepal'),
(345, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Bakaiya Rural Municipality', 'Nepal'),
(346, 'Nepal', 'Bagmati', 'MAKWANPUR', 'Bagmati Rural Municipality', 'Nepal'),
(347, 'Nepal', 'Bagmati', 'NUWAKOT', 'Tarkeshwar Rural Municipality', 'Nepal'),
(348, 'Nepal', 'Bagmati', 'NUWAKOT', 'Tadi Rural Municipality', 'Nepal'),
(349, 'Nepal', 'Bagmati', 'NUWAKOT', 'Suryagadhi Rural Municipality', 'Nepal'),
(350, 'Nepal', 'Bagmati', 'NUWAKOT', 'Shivapuri Rural Municipality', 'Nepal'),
(351, 'Nepal', 'Bagmati', 'NUWAKOT', 'Panchakanya Rural Municipality', 'Nepal'),
(352, 'Nepal', 'Bagmati', 'NUWAKOT', 'Myagang Rural Municipality', 'Nepal'),
(353, 'Nepal', 'Bagmati', 'NUWAKOT', 'Likhu Rural Municipality', 'Nepal'),
(354, 'Nepal', 'Bagmati', 'NUWAKOT', 'Kispang Rural Municipality', 'Nepal'),
(355, 'Nepal', 'Bagmati', 'NUWAKOT', 'Kakani Rural Municipality', 'Nepal'),
(356, 'Nepal', 'Bagmati', 'NUWAKOT', 'Dupcheshwar Rural Municipality', 'Nepal'),
(357, 'Nepal', 'Bagmati', 'NUWAKOT', 'Bidur Municipality', 'Nepal'),
(358, 'Nepal', 'Bagmati', 'NUWAKOT', 'Belkotgadhi Municipality', 'Nepal'),
(359, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Umakunda Rural Municipality', 'Nepal'),
(360, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Sunapati Rural Municipality', 'Nepal'),
(361, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Ramechhap Municipality', 'Nepal'),
(362, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Manthali Municipality', 'Nepal'),
(363, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Likhu Tamakoshi Rural Municipality', 'Nepal'),
(364, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Khadadevi Rural Municipality', 'Nepal'),
(365, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Gokulganga Rural Municipality', 'Nepal'),
(366, 'Nepal', 'Bagmati', 'RAMECHHAP', 'Doramba Rural Municipality', 'Nepal'),
(367, 'Nepal', 'Bagmati', 'RASUWA', 'Uttargaya Rural Municipality', 'Nepal'),
(368, 'Nepal', 'Bagmati', 'RASUWA', 'Naukunda Rural Municipality', 'Nepal'),
(369, 'Nepal', 'Bagmati', 'RASUWA', 'Kalika Rural Municipality', 'Nepal'),
(370, 'Nepal', 'Bagmati', 'RASUWA', 'Gosaikunda Rural Municipality', 'Nepal'),
(371, 'Nepal', 'Bagmati', 'RASUWA', 'Amachodingmo Rural Municipality', 'Nepal'),
(372, 'Nepal', 'Bagmati', 'SINDHULI', 'Tinpatan Rural Municipality', 'Nepal'),
(373, 'Nepal', 'Bagmati', 'SINDHULI', 'Sunkoshi Rural Municipality', 'Nepal'),
(374, 'Nepal', 'Bagmati', 'SINDHULI', 'Phikkal Rural Municipality', 'Nepal'),
(375, 'Nepal', 'Bagmati', 'SINDHULI', 'Marin Rural Municipality', 'Nepal'),
(376, 'Nepal', 'Bagmati', 'SINDHULI', 'Kamalamai Municipality', 'Nepal'),
(377, 'Nepal', 'Bagmati', 'SINDHULI', 'Hariharpurgadhi Rural Municipality', 'Nepal'),
(378, 'Nepal', 'Bagmati', 'SINDHULI', 'Golanjor Rural Municipality', 'Nepal'),
(379, 'Nepal', 'Bagmati', 'SINDHULI', 'Ghanglekh Rural Municipality', 'Nepal'),
(380, 'Nepal', 'Bagmati', 'SINDHULI', 'Dudhouli Municipality', 'Nepal'),
(381, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Tripurasundari Rural Municipality', 'Nepal'),
(382, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Sunkoshi Rural Municipality', 'Nepal'),
(383, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Panchpokhari Thangpal Rural Municipality', 'Nepal'),
(384, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Melamchi Municipality', 'Nepal'),
(385, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Lisangkhu Pakhar Rural Municipality', 'Nepal'),
(386, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Jugal Rural Municipality', 'Nepal'),
(387, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Indrawati Rural Municipality', 'Nepal'),
(388, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Helambu Rural Municipality', 'Nepal'),
(389, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Chautara SangachokGadhi Municipality', 'Nepal'),
(390, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Bhotekoshi Rural Municipality', 'Nepal'),
(391, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Barhabise Municipality', 'Nepal'),
(392, 'Nepal', 'Bagmati', 'SINDHUPALCHOK', 'Balefi Rural Municipality', 'Nepal'),
(393, 'Nepal', 'Gandaki', 'BAGLUNG', 'Tara Khola Rural Municipality', 'Nepal'),
(394, 'Nepal', 'Gandaki', 'BAGLUNG', 'Taman Khola Rural Municipality', 'Nepal'),
(395, 'Nepal', 'Gandaki', 'BAGLUNG', 'Nisikhola Rural Municipality', 'Nepal'),
(396, 'Nepal', 'Gandaki', 'BAGLUNG', 'Kanthekhola Rural Municipality', 'Nepal'),
(397, 'Nepal', 'Gandaki', 'BAGLUNG', 'Jaimuni Municipality', 'Nepal'),
(398, 'Nepal', 'Gandaki', 'BAGLUNG', 'Galkot Municipality', 'Nepal'),
(399, 'Nepal', 'Gandaki', 'BAGLUNG', 'Dhorpatan Municipality', 'Nepal'),
(400, 'Nepal', 'Gandaki', 'BAGLUNG', 'Bareng Rural Municipality', 'Nepal'),
(401, 'Nepal', 'Gandaki', 'BAGLUNG', 'Baglung Municipality', 'Nepal'),
(402, 'Nepal', 'Gandaki', 'BAGLUNG', 'Badigad Rural Municipality', 'Nepal'),
(403, 'Nepal', 'Gandaki', 'GORKHA', 'Siranchok Rural Municipality', 'Nepal'),
(404, 'Nepal', 'Gandaki', 'GORKHA', 'Sahid Lakhan Rural Municipality', 'Nepal'),
(405, 'Nepal', 'Gandaki', 'GORKHA', 'Palungtar Municipality', 'Nepal'),
(406, 'Nepal', 'Gandaki', 'GORKHA', 'Gorkha Municipality', 'Nepal'),
(407, 'Nepal', 'Gandaki', 'GORKHA', 'Gandaki Rural Municipality', 'Nepal'),
(408, 'Nepal', 'Gandaki', 'GORKHA', 'Dharche Rural Municipality', 'Nepal'),
(409, 'Nepal', 'Gandaki', 'GORKHA', 'Chum Nubri Rural Municipality', 'Nepal'),
(410, 'Nepal', 'Gandaki', 'GORKHA', 'Bhimsenthapa Rural Municipality', 'Nepal'),
(411, 'Nepal', 'Gandaki', 'GORKHA', 'Barpak Sulikot Rural Municipality', 'Nepal'),
(412, 'Nepal', 'Gandaki', 'GORKHA', 'Ajirkot Rural Municipality', 'Nepal'),
(413, 'Nepal', 'Gandaki', 'GORKHA', 'Aarughat Rural Municipality', 'Nepal'),
(414, 'Nepal', 'Gandaki', 'KASKI', 'Rupa Rural Municipality', 'Nepal'),
(415, 'Nepal', 'Gandaki', 'KASKI', 'Pokhara Metropolitian City', 'Nepal'),
(416, 'Nepal', 'Gandaki', 'KASKI', 'Madi Rural Municipality', 'Nepal'),
(417, 'Nepal', 'Gandaki', 'KASKI', 'Machhapuchchhre Rural Municipality', 'Nepal'),
(418, 'Nepal', 'Gandaki', 'KASKI', 'Annapurna Rural Municipality', 'Nepal'),
(419, 'Nepal', 'Gandaki', 'LAMJUNG', 'Sundarbazar Municipality', 'Nepal'),
(420, 'Nepal', 'Gandaki', 'LAMJUNG', 'Rainas Municipality', 'Nepal'),
(421, 'Nepal', 'Gandaki', 'LAMJUNG', 'Marsyangdi Rural Municipality', 'Nepal'),
(422, 'Nepal', 'Gandaki', 'LAMJUNG', 'MadhyaNepal Municipality', 'Nepal'),
(423, 'Nepal', 'Gandaki', 'LAMJUNG', 'Kwholasothar Rural Municipality', 'Nepal'),
(424, 'Nepal', 'Gandaki', 'LAMJUNG', 'Dudhpokhari Rural Municipality', 'Nepal'),
(425, 'Nepal', 'Gandaki', 'LAMJUNG', 'Dordi Rural Municipality', 'Nepal'),
(426, 'Nepal', 'Gandaki', 'LAMJUNG', 'Besishahar Municipality', 'Nepal'),
(427, 'Nepal', 'Gandaki', 'MANANG', 'Narshon Rural Municipality', 'Nepal'),
(428, 'Nepal', 'Gandaki', 'MANANG', 'Narpa Bhumi Rural Municipality', 'Nepal'),
(429, 'Nepal', 'Gandaki', 'MANANG', 'Manang Ingshyang Rural Municipality', 'Nepal'),
(430, 'Nepal', 'Gandaki', 'MANANG', 'Chame Rural Municipality', 'Nepal'),
(431, 'Nepal', 'Gandaki', 'MUSTANG', 'Waragung Muktikhsetra Rural Municipality', 'Nepal'),
(432, 'Nepal', 'Gandaki', 'MUSTANG', 'Thasang Rural Municipality', 'Nepal'),
(433, 'Nepal', 'Gandaki', 'MUSTANG', 'Lomanthang Rural Municipality', 'Nepal'),
(434, 'Nepal', 'Gandaki', 'MUSTANG', 'Lo-Ghekar Damodarkunda Rural Municipality', 'Nepal'),
(435, 'Nepal', 'Gandaki', 'MUSTANG', 'Gharapjhong Rural Municipality', 'Nepal'),
(436, 'Nepal', 'Gandaki', 'MYAGDI', 'Raghuganga Rural Municipality', 'Nepal'),
(437, 'Nepal', 'Gandaki', 'MYAGDI', 'Mangala Rural Municipality', 'Nepal'),
(438, 'Nepal', 'Gandaki', 'MYAGDI', 'Malika Rural Municipality', 'Nepal'),
(439, 'Nepal', 'Gandaki', 'MYAGDI', 'Dhaulagiri Rural Municipality', 'Nepal'),
(440, 'Nepal', 'Gandaki', 'MYAGDI', 'Beni Municipality', 'Nepal'),
(441, 'Nepal', 'Gandaki', 'MYAGDI', 'Annapurna Rural Municipality', 'Nepal'),
(442, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Madhyabindu Municipality', 'Nepal'),
(443, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Kawasoti Municipality', 'Nepal'),
(444, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Hupsekot Rural Municipality', 'Nepal'),
(445, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Gaidakot Municipality', 'Nepal'),
(446, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Devchuli Municipality', 'Nepal'),
(447, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Bulingtar Rural Municipality', 'Nepal'),
(448, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Binayee Tribeni Rural Municipality', 'Nepal'),
(449, 'Nepal', 'Gandaki', 'NAWALPARASI EAST', 'Baudeekali Rural Municipality', 'Nepal'),
(450, 'Nepal', 'Gandaki', 'PARBAT', 'Phalebas Municipality', 'Nepal'),
(451, 'Nepal', 'Gandaki', 'PARBAT', 'Painyu Rural Municipality', 'Nepal'),
(452, 'Nepal', 'Gandaki', 'PARBAT', 'Modi Rural Municipality', 'Nepal'),
(453, 'Nepal', 'Gandaki', 'PARBAT', 'Mahashila Rural Municipality', 'Nepal'),
(454, 'Nepal', 'Gandaki', 'PARBAT', 'Kushma Municipality', 'Nepal'),
(455, 'Nepal', 'Gandaki', 'PARBAT', 'Jaljala Rural Municipality', 'Nepal'),
(456, 'Nepal', 'Gandaki', 'PARBAT', 'Bihadi Rural Municipality', 'Nepal'),
(457, 'Nepal', 'Gandaki', 'SYANGJA', 'Waling Municipality', 'Nepal'),
(458, 'Nepal', 'Gandaki', 'SYANGJA', 'Putalibazar Municipality', 'Nepal'),
(459, 'Nepal', 'Gandaki', 'SYANGJA', 'Phedikhola Rural Municipality', 'Nepal'),
(460, 'Nepal', 'Gandaki', 'SYANGJA', 'Kaligandagi Rural Municipality', 'Nepal'),
(461, 'Nepal', 'Gandaki', 'SYANGJA', 'Harinas Rural Municipality', 'Nepal'),
(462, 'Nepal', 'Gandaki', 'SYANGJA', 'Galyang Municipality', 'Nepal'),
(463, 'Nepal', 'Gandaki', 'SYANGJA', 'Chapakot Municipality', 'Nepal'),
(464, 'Nepal', 'Gandaki', 'SYANGJA', 'Biruwa Rural Municipality', 'Nepal'),
(465, 'Nepal', 'Gandaki', 'SYANGJA', 'Bhirkot Municipality', 'Nepal'),
(466, 'Nepal', 'Gandaki', 'SYANGJA', 'Arjunchaupari Rural Municipality', 'Nepal'),
(467, 'Nepal', 'Gandaki', 'SYANGJA', 'Aandhikhola Rural Municipality', 'Nepal'),
(468, 'Nepal', 'Gandaki', 'TANAHU', 'Shuklagandaki Municipality', 'Nepal'),
(469, 'Nepal', 'Gandaki', 'TANAHU', 'Rhishing Rural Municipality', 'Nepal'),
(470, 'Nepal', 'Gandaki', 'TANAHU', 'Myagde Rural Municipality', 'Nepal'),
(471, 'Nepal', 'Gandaki', 'TANAHU', 'Ghiring Rural Municipality', 'Nepal'),
(472, 'Nepal', 'Gandaki', 'TANAHU', 'Devghat Rural Municipality', 'Nepal'),
(473, 'Nepal', 'Gandaki', 'TANAHU', 'Byas Municipality', 'Nepal'),
(474, 'Nepal', 'Gandaki', 'TANAHU', 'Bhimad Municipality', 'Nepal'),
(475, 'Nepal', 'Gandaki', 'TANAHU', 'Bhanu Municipality', 'Nepal'),
(476, 'Nepal', 'Gandaki', 'TANAHU', 'Bandipur Rural Municipality', 'Nepal'),
(477, 'Nepal', 'Gandaki', 'TANAHU', 'Anbukhaireni Rural Municipality', 'Nepal'),
(478, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Sitganga Municipality', 'Nepal'),
(479, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Sandhikharka Municipality', 'Nepal'),
(480, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Panini Rural Municipality', 'Nepal'),
(481, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Malarani Rural Municipality', 'Nepal'),
(482, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Chhatradev Rural Municipality', 'Nepal'),
(483, 'Nepal', 'Lumbini', 'ARGHAKHANCHI', 'Bhumekasthan Municipality', 'Nepal'),
(484, 'Nepal', 'Lumbini', 'BANKE', 'Rapti Sonari Rural Municipality', 'Nepal'),
(485, 'Nepal', 'Lumbini', 'BANKE', 'Nepalgunj Sub-Metropolitian City', 'Nepal'),
(486, 'Nepal', 'Lumbini', 'BANKE', 'Narainapur Rural Municipality', 'Nepal'),
(487, 'Nepal', 'Lumbini', 'BANKE', 'Kohalpur Municipality', 'Nepal'),
(488, 'Nepal', 'Lumbini', 'BANKE', 'Khajura Rural Municipality', 'Nepal'),
(489, 'Nepal', 'Lumbini', 'BANKE', 'Janki Rural Municipality', 'Nepal'),
(490, 'Nepal', 'Lumbini', 'BANKE', 'Duduwa Rural Municipality', 'Nepal'),
(491, 'Nepal', 'Lumbini', 'BANKE', 'Baijanath Rural Municipality', 'Nepal'),
(492, 'Nepal', 'Lumbini', 'BARDIYA', 'Thakurbaba Municipality', 'Nepal'),
(493, 'Nepal', 'Lumbini', 'BARDIYA', 'Rajapur Municipality', 'Nepal'),
(494, 'Nepal', 'Lumbini', 'BARDIYA', 'Madhuwan Municipality', 'Nepal'),
(495, 'Nepal', 'Lumbini', 'BARDIYA', 'Gulariya Municipality', 'Nepal'),
(496, 'Nepal', 'Lumbini', 'BARDIYA', 'Geruwa Rural Municipality', 'Nepal'),
(497, 'Nepal', 'Lumbini', 'BARDIYA', 'Barbardiya Municipality', 'Nepal'),
(498, 'Nepal', 'Lumbini', 'BARDIYA', 'Bansagadhi Municipality', 'Nepal'),
(499, 'Nepal', 'Lumbini', 'BARDIYA', 'Badhaiyatal Rural Municipality', 'Nepal'),
(500, 'Nepal', 'Lumbini', 'DANG', 'Tulsipur Sub-Metropolitian City', 'Nepal'),
(501, 'Nepal', 'Lumbini', 'DANG', 'Shantinagar Rural Municipality', 'Nepal'),
(502, 'Nepal', 'Lumbini', 'DANG', 'Rapti Rural Municipality', 'Nepal'),
(503, 'Nepal', 'Lumbini', 'DANG', 'Rajpur Rural Municipality', 'Nepal'),
(504, 'Nepal', 'Lumbini', 'DANG', 'Lamahi Municipality', 'Nepal'),
(505, 'Nepal', 'Lumbini', 'DANG', 'Ghorahi Sub-Metropolitian City', 'Nepal'),
(506, 'Nepal', 'Lumbini', 'DANG', 'Gadhawa Rural Municipality', 'Nepal'),
(507, 'Nepal', 'Lumbini', 'DANG', 'Dangisharan Rural Municipality', 'Nepal'),
(508, 'Nepal', 'Lumbini', 'DANG', 'Banglachuli Rural Municipality', 'Nepal'),
(509, 'Nepal', 'Lumbini', 'DANG', 'Babai Rural Municipality', 'Nepal'),
(510, 'Nepal', 'Lumbini', 'GULMI', 'Satyawati Rural Municipality', 'Nepal'),
(511, 'Nepal', 'Lumbini', 'GULMI', 'Ruru Rural Municipality', 'Nepal'),
(512, 'Nepal', 'Lumbini', 'GULMI', 'Resunga Municipality', 'Nepal'),
(513, 'Nepal', 'Lumbini', 'GULMI', 'Musikot Municipality', 'Nepal'),
(514, 'Nepal', 'Lumbini', 'GULMI', 'Malika Rural Municipality', 'Nepal'),
(515, 'Nepal', 'Lumbini', 'GULMI', 'Madane Rural Municipality', 'Nepal'),
(516, 'Nepal', 'Lumbini', 'GULMI', 'Kaligandaki Rural Municipality', 'Nepal'),
(517, 'Nepal', 'Lumbini', 'GULMI', 'Isma Rural Municipality', 'Nepal'),
(518, 'Nepal', 'Lumbini', 'GULMI', 'Gulmidarbar Rural Municipality', 'Nepal'),
(519, 'Nepal', 'Lumbini', 'GULMI', 'Dhurkot Rural Municipality', 'Nepal'),
(520, 'Nepal', 'Lumbini', 'GULMI', 'Chatrakot Rural Municipality', 'Nepal'),
(521, 'Nepal', 'Lumbini', 'GULMI', 'Chandrakot Rural Municipality', 'Nepal'),
(522, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Yashodhara Rural Municipality', 'Nepal'),
(523, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Suddhodhan Rural Municipality', 'Nepal'),
(524, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Shivaraj Municipality', 'Nepal'),
(525, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Mayadevi Rural Municipality', 'Nepal'),
(526, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Maharajgunj Municipality', 'Nepal'),
(527, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Krishnanagar Municipality', 'Nepal'),
(528, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Kapilbastu Municipality', 'Nepal'),
(529, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Buddhabhumi Municipality', 'Nepal'),
(530, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Bijayanagar Rural Municipality', 'Nepal'),
(531, 'Nepal', 'Lumbini', 'KAPILBASTU', 'Banganga Municipality', 'Nepal'),
(532, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Susta Rural Municipality', 'Nepal'),
(533, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Sunwal Municipality', 'Nepal'),
(534, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Sarawal Rural Municipality', 'Nepal'),
(535, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Ramgram Municipality', 'Nepal'),
(536, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Pratappur Rural Municipality', 'Nepal'),
(537, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Palhi Nandan Rural Municipality', 'Nepal'),
(538, 'Nepal', 'Lumbini', 'NAWALPARASI WEST', 'Bardaghat Municipality', 'Nepal'),
(539, 'Nepal', 'Lumbini', 'PALPA', 'Tinau Rural Municipality', 'Nepal'),
(540, 'Nepal', 'Lumbini', 'PALPA', 'Tansen Municipality', 'Nepal'),
(541, 'Nepal', 'Lumbini', 'PALPA', 'Ribdikot Rural Municipality', 'Nepal'),
(542, 'Nepal', 'Lumbini', 'PALPA', 'Rampur Municipality', 'Nepal'),
(543, 'Nepal', 'Lumbini', 'PALPA', 'Rambha Rural Municipality', 'Nepal'),
(544, 'Nepal', 'Lumbini', 'PALPA', 'Rainadevi Chhahara Rural Municipality', 'Nepal'),
(545, 'Nepal', 'Lumbini', 'PALPA', 'Purbakhola Rural Municipality', 'Nepal'),
(546, 'Nepal', 'Lumbini', 'PALPA', 'Nisdi Rural Municipality', 'Nepal'),
(547, 'Nepal', 'Lumbini', 'PALPA', 'Mathagadhi Rural Municipality', 'Nepal'),
(548, 'Nepal', 'Lumbini', 'PALPA', 'Bagnaskali Rural Municipality', 'Nepal'),
(549, 'Nepal', 'Lumbini', 'PYUTHAN', 'Sworgadwary Municipality', 'Nepal'),
(550, 'Nepal', 'Lumbini', 'PYUTHAN', 'Sarumarani Rural Municipality', 'Nepal'),
(551, 'Nepal', 'Lumbini', 'PYUTHAN', 'Pyuthan Municipality', 'Nepal'),
(552, 'Nepal', 'Lumbini', 'PYUTHAN', 'Naubahini Rural Municipality', 'Nepal'),
(553, 'Nepal', 'Lumbini', 'PYUTHAN', 'Mandavi Rural Municipality', 'Nepal'),
(554, 'Nepal', 'Lumbini', 'PYUTHAN', 'Mallarani Rural Municipality', 'Nepal'),
(555, 'Nepal', 'Lumbini', 'PYUTHAN', 'Jhimruk Rural Municipality', 'Nepal'),
(556, 'Nepal', 'Lumbini', 'PYUTHAN', 'Gaumukhi Rural Municipality', 'Nepal'),
(557, 'Nepal', 'Lumbini', 'PYUTHAN', 'Ayirabati Rural Municipality', 'Nepal'),
(558, 'Nepal', 'Lumbini', 'ROLPA', 'Tribeni Rural Municipality', 'Nepal'),
(559, 'Nepal', 'Lumbini', 'ROLPA', 'Thawang Rural Municipality', 'Nepal'),
(560, 'Nepal', 'Lumbini', 'ROLPA', 'Sunil Smriti Rural Municipality', 'Nepal'),
(561, 'Nepal', 'Lumbini', 'ROLPA', 'Sunchhahari Rural Municipality', 'Nepal'),
(562, 'Nepal', 'Lumbini', 'ROLPA', 'Runtigadi Rural Municipality', 'Nepal'),
(563, 'Nepal', 'Lumbini', 'ROLPA', 'Rolpa Municipality', 'Nepal'),
(564, 'Nepal', 'Lumbini', 'ROLPA', 'Pariwartan Rural Municipality', 'Nepal'),
(565, 'Nepal', 'Lumbini', 'ROLPA', 'Madi Rural Municipality', 'Nepal'),
(566, 'Nepal', 'Lumbini', 'ROLPA', 'Lungri Rural Municipality', 'Nepal'),
(567, 'Nepal', 'Lumbini', 'ROLPA', 'Gangadev Rural Municipality', 'Nepal'),
(568, 'Nepal', 'Lumbini', 'RUKUM EAST', 'Sisne Rural Municipality', 'Nepal'),
(569, 'Nepal', 'Lumbini', 'RUKUM EAST', 'Putha Uttarganga Rural Municipality', 'Nepal'),
(570, 'Nepal', 'Lumbini', 'RUKUM EAST', 'Bhume Rural Municipality', 'Nepal'),
(571, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Tillotama Municipality', 'Nepal'),
(572, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Sudhdhodhan Rural Municipality', 'Nepal'),
(573, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Siyari Rural Municipality', 'Nepal'),
(574, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Siddharthanagar Municipality', 'Nepal'),
(575, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Sammarimai Rural Municipality', 'Nepal'),
(576, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Sainamaina Municipality', 'Nepal'),
(577, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Rohini Rural Municipality', 'Nepal'),
(578, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Omsatiya Rural Municipality', 'Nepal'),
(579, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Mayadevi Rural Municipality', 'Nepal'),
(580, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Marchawari Rural Municipality', 'Nepal'),
(581, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Lumbini Sanskritik Municipality', 'Nepal'),
(582, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Kotahimai Rural Municipality', 'Nepal'),
(583, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Kanchan Rural Municipality', 'Nepal'),
(584, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Gaidahawa Rural Municipality', 'Nepal'),
(585, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Devdaha Municipality', 'Nepal'),
(586, 'Nepal', 'Lumbini', 'RUPANDEHI', 'Butwal Sub-Metropolitian City', 'Nepal'),
(587, 'Nepal', 'Karnali', 'DAILEKH', 'Thantikandh Rural Municipality', 'Nepal'),
(588, 'Nepal', 'Karnali', 'DAILEKH', 'Naumule Rural Municipality', 'Nepal'),
(589, 'Nepal', 'Karnali', 'DAILEKH', 'Narayan Municipality', 'Nepal'),
(590, 'Nepal', 'Karnali', 'DAILEKH', 'Mahabu Rural Municipality', 'Nepal'),
(591, 'Nepal', 'Karnali', 'DAILEKH', 'Gurans Rural Municipality', 'Nepal'),
(592, 'Nepal', 'Karnali', 'DAILEKH', 'Dungeshwor Rural Municipality', 'Nepal'),
(593, 'Nepal', 'Karnali', 'DAILEKH', 'Dullu Municipality', 'Nepal'),
(594, 'Nepal', 'Karnali', 'DAILEKH', 'Chamunda Bindrasaini Municipality', 'Nepal'),
(595, 'Nepal', 'Karnali', 'DAILEKH', 'Bhairabi Rural Municipality', 'Nepal'),
(596, 'Nepal', 'Karnali', 'DAILEKH', 'Bhagawatimai Rural Municipality', 'Nepal'),
(597, 'Nepal', 'Karnali', 'DAILEKH', 'Aathabis Municipality', 'Nepal'),
(598, 'Nepal', 'Karnali', 'DOLPA', 'Tripurasundari Municipality', 'Nepal'),
(599, 'Nepal', 'Karnali', 'DOLPA', 'Thuli Bheri Municipality', 'Nepal'),
(600, 'Nepal', 'Karnali', 'DOLPA', 'Shey Phoksundo Rural Municipality', 'Nepal'),
(601, 'Nepal', 'Karnali', 'DOLPA', 'Mudkechula Rural Municipality', 'Nepal'),
(602, 'Nepal', 'Karnali', 'DOLPA', 'Kaike Rural Municipality', 'Nepal'),
(603, 'Nepal', 'Karnali', 'DOLPA', 'Jagadulla Rural Municipality', 'Nepal'),
(604, 'Nepal', 'Karnali', 'DOLPA', 'Dolpo Buddha Rural Municipality', 'Nepal'),
(605, 'Nepal', 'Karnali', 'DOLPA', 'Chharka Tangsong Rural Municipality', 'Nepal'),
(606, 'Nepal', 'Karnali', 'HUMLA', 'Tanjakot Rural Municipality', 'Nepal'),
(607, 'Nepal', 'Karnali', 'HUMLA', 'Simkot Rural Municipality', 'Nepal'),
(608, 'Nepal', 'Karnali', 'HUMLA', 'Sarkegad Rural Municipality', 'Nepal'),
(609, 'Nepal', 'Karnali', 'HUMLA', 'Namkha Rural Municipality', 'Nepal'),
(610, 'Nepal', 'Karnali', 'HUMLA', 'Kharpunath Rural Municipality', 'Nepal'),
(611, 'Nepal', 'Karnali', 'HUMLA', 'Chankheli Rural Municipality', 'Nepal'),
(612, 'Nepal', 'Karnali', 'HUMLA', 'Adanchuli Rural Municipality', 'Nepal'),
(613, 'Nepal', 'Karnali', 'JAJARKOT', 'Shiwalaya Rural Municipality', 'Nepal'),
(614, 'Nepal', 'Karnali', 'JAJARKOT', 'Nalagad Municipality', 'Nepal'),
(615, 'Nepal', 'Karnali', 'JAJARKOT', 'Kuse Rural Municipality', 'Nepal'),
(616, 'Nepal', 'Karnali', 'JAJARKOT', 'Junichande Rural Municipality', 'Nepal'),
(617, 'Nepal', 'Karnali', 'JAJARKOT', 'Chhedagad Municipality', 'Nepal'),
(618, 'Nepal', 'Karnali', 'JAJARKOT', 'Bheri Municipality', 'Nepal'),
(619, 'Nepal', 'Karnali', 'JAJARKOT', 'Barekot Rural Municipality', 'Nepal'),
(620, 'Nepal', 'Karnali', 'JUMLA', 'Tila Rural Municipality', 'Nepal'),
(621, 'Nepal', 'Karnali', 'JUMLA', 'Tatopani Rural Municipality', 'Nepal'),
(622, 'Nepal', 'Karnali', 'JUMLA', 'Sinja Rural Municipality', 'Nepal'),
(623, 'Nepal', 'Karnali', 'JUMLA', 'Patrasi Rural Municipality', 'Nepal'),
(624, 'Nepal', 'Karnali', 'JUMLA', 'Kanakasundari Rural Municipality', 'Nepal'),
(625, 'Nepal', 'Karnali', 'JUMLA', 'Hima Rural Municipality', 'Nepal'),
(626, 'Nepal', 'Karnali', 'JUMLA', 'Guthichaur Rural Municipality', 'Nepal'),
(627, 'Nepal', 'Karnali', 'JUMLA', 'Chandannath Municipality', 'Nepal'),
(628, 'Nepal', 'Karnali', 'KALIKOT', 'Tilagufa Municipality', 'Nepal'),
(629, 'Nepal', 'Karnali', 'KALIKOT', 'Subha Kalika Rural Municipality', 'Nepal'),
(630, 'Nepal', 'Karnali', 'KALIKOT', 'Sanni Tribeni Rural Municipality', 'Nepal'),
(631, 'Nepal', 'Karnali', 'KALIKOT', 'Raskot Municipality', 'Nepal'),
(632, 'Nepal', 'Karnali', 'KALIKOT', 'Palata Rural Municipality', 'Nepal'),
(633, 'Nepal', 'Karnali', 'KALIKOT', 'Pachaljharana Rural Municipality', 'Nepal'),
(634, 'Nepal', 'Karnali', 'KALIKOT', 'Naraharinath Rural Municipality', 'Nepal'),
(635, 'Nepal', 'Karnali', 'KALIKOT', 'Mahawai Rural Municipality', 'Nepal'),
(636, 'Nepal', 'Karnali', 'KALIKOT', 'Khandachakra Municipality', 'Nepal'),
(637, 'Nepal', 'Karnali', 'MUGU', 'Soru Rural Municipality', 'Nepal'),
(638, 'Nepal', 'Karnali', 'MUGU', 'Mugum Karmarong Rural Municipality', 'Nepal'),
(639, 'Nepal', 'Karnali', 'MUGU', 'Khatyad Rural Municipality', 'Nepal'),
(640, 'Nepal', 'Karnali', 'MUGU', 'Chhayanath Rara Municipality', 'Nepal'),
(641, 'Nepal', 'Karnali', 'RUKUM WEST', 'Tribeni Rural Municipality', 'Nepal'),
(642, 'Nepal', 'Karnali', 'RUKUM WEST', 'Sani Bheri Rural Municipality', 'Nepal'),
(643, 'Nepal', 'Karnali', 'RUKUM WEST', 'Musikot Municipality', 'Nepal'),
(644, 'Nepal', 'Karnali', 'RUKUM WEST', 'Chaurjahari Municipality', 'Nepal'),
(645, 'Nepal', 'Karnali', 'RUKUM WEST', 'Banfikot Rural Municipality', 'Nepal'),
(646, 'Nepal', 'Karnali', 'RUKUM WEST', 'Aathbiskot Municipality', 'Nepal'),
(647, 'Nepal', 'Karnali', 'SALYAN', 'Tribeni Rural Municipality', 'Nepal'),
(648, 'Nepal', 'Karnali', 'SALYAN', 'Siddha Kumakh Rural Municipality', 'Nepal'),
(649, 'Nepal', 'Karnali', 'SALYAN', 'Sharada Municipality', 'Nepal'),
(650, 'Nepal', 'Karnali', 'SALYAN', 'Kumakh Rural Municipality', 'Nepal'),
(651, 'Nepal', 'Karnali', 'SALYAN', 'Kapurkot Rural Municipality', 'Nepal'),
(652, 'Nepal', 'Karnali', 'SALYAN', 'Kalimati Rural Municipality', 'Nepal'),
(653, 'Nepal', 'Karnali', 'SALYAN', 'Darma Rural Municipality', 'Nepal'),
(654, 'Nepal', 'Karnali', 'SALYAN', 'Chhatreshwori Rural Municipality', 'Nepal'),
(655, 'Nepal', 'Karnali', 'SALYAN', 'Bangad Kupinde Municipality', 'Nepal'),
(656, 'Nepal', 'Karnali', 'SALYAN', 'Bagchaur Municipality', 'Nepal');
INSERT INTO `address_1` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`) VALUES
(657, 'Nepal', 'Karnali', 'SURKHET', 'Simta Rural Municipality', 'Nepal'),
(658, 'Nepal', 'Karnali', 'SURKHET', 'Panchpuri Municipality', 'Nepal'),
(659, 'Nepal', 'Karnali', 'SURKHET', 'Lekbeshi Municipality', 'Nepal'),
(660, 'Nepal', 'Karnali', 'SURKHET', 'Gurbhakot Municipality', 'Nepal'),
(661, 'Nepal', 'Karnali', 'SURKHET', 'Chingad Rural Municipality', 'Nepal'),
(662, 'Nepal', 'Karnali', 'SURKHET', 'Chaukune Rural Municipality', 'Nepal'),
(663, 'Nepal', 'Karnali', 'SURKHET', 'Birendranagar Municipality', 'Nepal'),
(664, 'Nepal', 'Karnali', 'SURKHET', 'Bheriganga Municipality', 'Nepal'),
(665, 'Nepal', 'Karnali', 'SURKHET', 'Barahtal Rural Municipality', 'Nepal'),
(666, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Turmakhad Rural Municipality', 'Nepal'),
(667, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Sanphebagar Municipality', 'Nepal'),
(668, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Ramaroshan Rural Municipality', 'Nepal'),
(669, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Panchadewal Binayak Municipality', 'Nepal'),
(670, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Mellekh Rural Municipality', 'Nepal'),
(671, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Mangalsen Municipality', 'Nepal'),
(672, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Kamalbazar Municipality', 'Nepal'),
(673, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Dhakari Rural Municipality', 'Nepal'),
(674, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Chaurpati Rural Municipality', 'Nepal'),
(675, 'Nepal', 'Sudurpaschim', 'ACHHAM', 'Bannigadhi Jayagadh Rural Municipality', 'Nepal'),
(676, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Surnaya Rural Municipality', 'Nepal'),
(677, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Sigas Rural Municipality', 'Nepal'),
(678, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Shivanath Rural Municipality', 'Nepal'),
(679, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Purchaudi Municipality', 'Nepal'),
(680, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Patan Municipality', 'Nepal'),
(681, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Pancheshwar Rural Municipality', 'Nepal'),
(682, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Melauli Municipality', 'Nepal'),
(683, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Dogadakedar Rural Municipality', 'Nepal'),
(684, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Dilasaini Rural Municipality', 'Nepal'),
(685, 'Nepal', 'Sudurpaschim', 'BAITADI', 'Dasharathchanda Municipality', 'Nepal'),
(686, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Thalara Rural Municipality', 'Nepal'),
(687, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Talkot Rural Municipality', 'Nepal'),
(688, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Surma Rural Municipality', 'Nepal'),
(689, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'SaiPaal Rural Municipality', 'Nepal'),
(690, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Masta Rural Municipality', 'Nepal'),
(691, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Khaptadchhanna Rural Municipality', 'Nepal'),
(692, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Kedarseu Rural Municipality', 'Nepal'),
(693, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'JayaPrithivi Municipality', 'Nepal'),
(694, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Durgathali Rural Municipality', 'Nepal'),
(695, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Chabispathivera Rural Municipality', 'Nepal'),
(696, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Bungal Municipality', 'Nepal'),
(697, 'Nepal', 'Sudurpaschim', 'BAJHANG', 'Bithadchir Rural Municipality', 'Nepal'),
(698, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Tribeni Municipality', 'Nepal'),
(699, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Swami Kartik Khaapar Rural Municipality', 'Nepal'),
(700, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Khaptad Chhededaha Rural Municipality', 'Nepal'),
(701, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Jagannath Rural Municipality', 'Nepal'),
(702, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Himali Rural Municipality', 'Nepal'),
(703, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Gaumul Rural Municipality', 'Nepal'),
(704, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Budhinanda Municipality', 'Nepal'),
(705, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Budhiganga Municipality', 'Nepal'),
(706, 'Nepal', 'Sudurpaschim', 'BAJURA', 'Badimalika Municipality', 'Nepal'),
(707, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Parashuram Municipality', 'Nepal'),
(708, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Nawadurga Rural Municipality', 'Nepal'),
(709, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Ganayapdhura Rural Municipality', 'Nepal'),
(710, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Bhageshwar Rural Municipality', 'Nepal'),
(711, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Amargadhi Municipality', 'Nepal'),
(712, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Alital Rural Municipality', 'Nepal'),
(713, 'Nepal', 'Sudurpaschim', 'DADELDHURA', 'Ajaymeru Rural Municipality', 'Nepal'),
(714, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Shailyashikhar Municipality', 'Nepal'),
(715, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Naugad Rural Municipality', 'Nepal'),
(716, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Marma Rural Municipality', 'Nepal'),
(717, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Malikaarjun Rural Municipality', 'Nepal'),
(718, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Mahakali Municipality', 'Nepal'),
(719, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Lekam Rural Municipality', 'Nepal'),
(720, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Dunhu Rural Municipality', 'Nepal'),
(721, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Byas Rural Municipality', 'Nepal'),
(722, 'Nepal', 'Sudurpaschim', 'DARCHULA', 'Apihimal Rural Municipality', 'Nepal'),
(723, 'Nepal', 'Sudurpaschim', 'DOTI', 'Shikhar Municipality', 'Nepal'),
(724, 'Nepal', 'Sudurpaschim', 'DOTI', 'Sayal Rural Municipality', 'Nepal'),
(725, 'Nepal', 'Sudurpaschim', 'DOTI', 'Purbichauki Rural Municipality', 'Nepal'),
(726, 'Nepal', 'Sudurpaschim', 'DOTI', 'K I Singh Rural Municipality', 'Nepal'),
(727, 'Nepal', 'Sudurpaschim', 'DOTI', 'Jorayal Rural Municipality', 'Nepal'),
(728, 'Nepal', 'Sudurpaschim', 'DOTI', 'Dipayal Silgadi Municipality', 'Nepal'),
(729, 'Nepal', 'Sudurpaschim', 'DOTI', 'Bogtan Foodsil Rural Municipality', 'Nepal'),
(730, 'Nepal', 'Sudurpaschim', 'DOTI', 'Badikedar Rural Municipality', 'Nepal'),
(731, 'Nepal', 'Sudurpaschim', 'DOTI', 'Adharsha Rural Municipality', 'Nepal'),
(732, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Tikapur Municipality', 'Nepal'),
(733, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Mohanyal Rural Municipality', 'Nepal'),
(734, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Lamkichuha Municipality', 'Nepal'),
(735, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Kailari Rural Municipality', 'Nepal'),
(736, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Joshipur Rural Municipality', 'Nepal'),
(737, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Janaki Rural Municipality', 'Nepal'),
(738, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Godawari Municipality', 'Nepal'),
(739, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Ghodaghodi Municipality', 'Nepal'),
(740, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Gauriganga Municipality', 'Nepal'),
(741, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Dhangadhi Sub-Metropolitian City', 'Nepal'),
(742, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Chure Rural Municipality', 'Nepal'),
(743, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Bhajani Municipality', 'Nepal'),
(744, 'Nepal', 'Sudurpaschim', 'KAILALI', 'Bardagoriya Rural Municipality', 'Nepal'),
(745, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Shuklaphanta Municipality', 'Nepal'),
(746, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Punarbas Municipality', 'Nepal'),
(747, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Mahakali Municipality', 'Nepal'),
(748, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Laljhadi Rural Municipality', 'Nepal'),
(749, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Krishnapur Municipality', 'Nepal'),
(750, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Bhimdatta Municipality', 'Nepal'),
(751, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Beldandi Rural Municipality', 'Nepal'),
(752, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Belauri Municipality', 'Nepal'),
(753, 'Nepal', 'Sudurpaschim', 'KANCHANPUR', 'Bedkot Municipality', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `agps`
--

CREATE TABLE `agps` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rWard` varchar(200) NOT NULL,
  `rDistrict` varchar(200) NOT NULL,
  `rCenter` varchar(200) NOT NULL,
  `rQualificationYears` varchar(255) NOT NULL,
  `rSmartCardNo` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agps`
--

INSERT INTO `agps` (`id`, `intro_id`, `rWard`, `rDistrict`, `rCenter`, `rQualificationYears`, `rSmartCardNo`) VALUES
(1, NULL, '4', 'JHAPA', 'ktm ', '2074', 2147483647),
(2, NULL, '4', 'DHANKUTA', 'ktm ', '2074', 2147483647),
(3, NULL, '4', 'OKHALDHUNGA', 'ktm ', '2074', 2147483647),
(4, NULL, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(5, NULL, '4', 'JHAPA', 'ktm ', '2075', 0),
(6, NULL, '45', 'ILAM', 'ktm ', '2074', 2147483647),
(7, 11, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(8, 12, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(9, 14, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(10, 83, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(11, 86, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(12, 92, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(13, 93, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(14, 94, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(15, 95, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(16, 96, '4', 'KHOTANG', 'ktm ', '2074', 2147483647),
(17, 97, '4', 'JHAPA', 'ktm ', '2074', 2147483647),
(18, 98, '4', 'DHANKUTA', 'ktm ', '2074', 2147483647),
(19, 99, '4', 'MORANG', 'ktm ', '2074', 2147483647),
(20, 100, '4', 'OKHALDHUNGA', 'ktm ', '2074', 2147483647),
(21, 101, '09', 'UDAYAPUR', 'hadiya ', '2005', 0),
(22, 102, '4', 'JHAPA', 'ktm ', '2074', 2147483647),
(23, 103, '4', 'JHAPA', 'ktm ', '2074', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `COL 1` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`COL 1`) VALUES
('A+'),
('A-'),
('B+'),
('B-'),
('0+'),
('0-'),
('AB+'),
('AB-');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `COL 1` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COL 1`) VALUES
('Afghanistan'),
('Albania'),
('Algeria'),
('Andorra'),
('Angola'),
('Antigua and Barbuda'),
('Argentina'),
('Armenia'),
('Austria'),
('Azerbaijan'),
('Bahrain'),
('Bangladesh'),
('Barbados'),
('Belarus'),
('Belgium'),
('Belize'),
('Benin'),
('Bhutan'),
('Bolivia'),
('Bosnia and Herzegovina'),
('Botswana'),
('Brazil'),
('Brunei'),
('Bulgaria'),
('Burkina Faso'),
('Burundi'),
('Cabo Verde'),
('Cambodia'),
('Cameroon'),
('Canada'),
('Central African Republic'),
('Chad'),
('Channel Islands'),
('Chile'),
('China'),
('Colombia'),
('Comoros'),
('Congo'),
('Costa Rica'),
('Croatia'),
('Cuba'),
('Cyprus'),
('Czech Republic'),
('C?te d\'Ivoire'),
('DR Congo'),
('Denmark'),
('Djibouti'),
('Dominica'),
('Dominican Republic'),
('Ecuador'),
('Egypt'),
('El Salvador'),
('Equatorial Guinea'),
('Eritrea'),
('Estonia'),
('Eswatini'),
('Ethiopia'),
('Faeroe Islands'),
('Finland'),
('France'),
('French Guiana'),
('Gabon'),
('Gambia'),
('Georgia'),
('Germany'),
('Ghana'),
('Gibraltar'),
('Greece'),
('Grenada'),
('Guatemala'),
('Guinea'),
('Guinea-Bissau'),
('Guyana'),
('Haiti'),
('Holy See'),
('Honduras'),
('Hong Kong'),
('Hungary'),
('Iceland'),
('India'),
('Indonesia'),
('Iran'),
('Iraq'),
('Ireland'),
('Isle of Man'),
('Israel'),
('Italy'),
('Jamaica'),
('Japan'),
('Jordan'),
('Kazakhstan'),
('Kenya'),
('Kuwait'),
('Kyrgyzstan'),
('Laos'),
('Latvia'),
('Lebanon'),
('Lesotho'),
('Liberia'),
('Libya'),
('Liechtenstein'),
('Lithuania'),
('Luxembourg'),
('Macao'),
('Madagascar'),
('Malawi'),
('Malaysia'),
('Maldives'),
('Mali'),
('Malta'),
('Mauritania'),
('Mauritius'),
('Mayotte'),
('Mexico'),
('Moldova'),
('Monaco'),
('Mongolia'),
('Montenegro'),
('Morocco'),
('Mozambique'),
('Myanmar'),
('Namibia'),
('Nepal'),
('Netherlands'),
('Nicaragua'),
('Niger'),
('Nigeria'),
('North Korea'),
('North Macedonia'),
('Norway'),
('Oman'),
('Pakistan'),
('Panama'),
('Paraguay'),
('Peru'),
('Philippines'),
('Poland'),
('Portugal'),
('Qatar'),
('Romania'),
('Russia'),
('Rwanda'),
('R?union'),
('Saint Helena'),
('Saint Kitts and Nevis'),
('Saint Lucia'),
('Saint Vincent and the Grenadines'),
('San Marino'),
('Sao Tome & Principe'),
('Saudi Arabia'),
('Senegal'),
('Serbia'),
('Seychelles'),
('Sierra Leone'),
('Singapore'),
('Slovakia'),
('Slovenia'),
('Somalia'),
('South Africa'),
('South Korea'),
('South Sudan'),
('Spain'),
('Sri Lanka'),
('State of Palestine'),
('Sudan'),
('Suriname'),
('Sweden'),
('Switzerland'),
('Syria'),
('Taiwan'),
('Tajikistan'),
('Tanzania'),
('Thailand'),
('The Bahamas'),
('Timor-Leste'),
('Togo'),
('Trinidad and Tobago'),
('Tunisia'),
('Turkey'),
('Turkmenistan'),
('Uganda'),
('Ukraine'),
('United Arab Emirates'),
('United Kingdom'),
('United States'),
('Uruguay'),
('Uzbekistan'),
('Venezuela'),
('Vietnam'),
('Western Sahara'),
('Yemen'),
('Zambia'),
('Zimbabwe'),
('Accountant'),
('Actor /Actress'),
('Architect'),
('Astronomer'),
('Baker'),
('Bricklayer'),
('Bus driver'),
('Butcher'),
('Carpenter'),
('Chef/Cook'),
('Cleaner'),
('Dentist'),
('Designer'),
('Doctor'),
('Electrician'),
('Engineer'),
('Factory worker'),
('Farmer'),
('Fireman/Fire fighter'),
('Fisherman'),
('Florist'),
('Gardener'),
('Hairdresser'),
('Journalist'),
('Judge'),
('Lawyer'),
('Lecturer'),
('Librarian'),
('Lifeguard'),
('Mechanic'),
('Model'),
('Newsreader'),
('Nurse'),
('Optician'),
('Painter'),
('Pharmacist'),
('Photographer'),
('Pilot'),
('Plumber'),
('Politician'),
('Policeman/Policewoman'),
('Postman'),
('Real estate agent'),
('Receptionist'),
('Scientist'),
('Secretary'),
('Shop assistant'),
('Soldier'),
('Tailor'),
('Taxi driver'),
('Teacher'),
('Translator'),
('Traffic warden'),
('Travel agent'),
('Veterinary doctor (Vet)'),
('Waiter/Waitress'),
('Businessman'),
('Dancer'),
('Artist'),
('Bartenders');

-- --------------------------------------------------------

--
-- Table structure for table `currentaddress`
--

CREATE TABLE `currentaddress` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rWard` varchar(200) NOT NULL,
  `rMunici` varchar(200) NOT NULL,
  `rProvince` varchar(200) NOT NULL,
  `rDistrict` varchar(255) NOT NULL,
  `rTelephoneNo` varchar(200) NOT NULL,
  `rMobileNo` varchar(200) NOT NULL,
  `rEmail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currentaddress`
--

INSERT INTO `currentaddress` (`id`, `intro_id`, `rWard`, `rMunici`, `rProvince`, `rDistrict`, `rTelephoneNo`, `rMobileNo`, `rEmail`) VALUES
(2, 76, '5', 'Bagmati', 'DHADING', 'THAKRE RURAL MUNICIPALITY', '9989898989', '9865527793', 'guptabikesh12@gmail.com'),
(3, NULL, '5', 'Madhesh', 'DHANUSA', 'LAKSHMINIYA RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger@gmail.com'),
(4, NULL, '5', 'Madhesh', 'DHANUSA', 'LAKSHMINIYA RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger@gmail.com'),
(5, NULL, '5', 'Madhesh', 'MAHOTTARI', 'LOHARPATTI MUNICIPALITY', '9989898989', '9865527793', 'younger1@gmail.com'),
(6, NULL, '5', 'Bagmati', 'DOLAKHA', 'KALINCHOK RURAL MUNICIPALITY', '9989898989', '9865527793', 'kiransir343@gmail.com'),
(7, NULL, '5', 'Madhesh', 'MAHOTTARI', 'PIPRA RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(8, NULL, '5', 'Gandaki', 'MANANG', 'MANANG INGSHYANG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger43@gmail.com'),
(9, NULL, '5', 'Madhesh', 'DHANUSA', 'SABAILA MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(10, 10, '5', 'Bagmati', 'DOLAKHA', 'KALINCHOK RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger1@gmail.com'),
(11, 11, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(13, 12, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(14, 14, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(15, 83, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(16, 85, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(17, 86, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(18, 90, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(19, 91, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(20, 92, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(21, 93, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(22, 94, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(23, 95, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(24, 96, '5', 'Bagmati', 'DHADING', 'NETRAWATI DABJONG RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(25, 97, '5', 'Madhesh', 'MAHOTTARI', 'SAMSI RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(26, 98, '5', 'Madhesh', 'BARA', 'SIMRAUNGADH MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(27, 99, '5', 'Bagmati', 'DOLAKHA', 'KALINCHOK RURAL MUNICIPALITY', '9989898989', '9865527793', 'programmingaddicted110@gmail.com'),
(28, 100, '5', 'Bagmati', 'DOLAKHA', 'KALINCHOK RURAL MUNICIPALITY', '9989898989', '9865527793', 'rajeshkumaryadav@gmail.com'),
(29, 101, '09', 'Province 1', 'UDAYAPUR', 'CHAUDANDIGADHI MUNICIPALITY', '', '9851152844', 'chaulagainkrish7@gmail.com'),
(30, 102, '5', 'Madhesh', 'MAHOTTARI', 'RAMGOPALPUR MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com'),
(31, 103, '5', 'Gandaki', 'GORKHA', 'CHUM NUBRI RURAL MUNICIPALITY', '9989898989', '9865527793', 'younger12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `healthdetails`
--

CREATE TABLE `healthdetails` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rBloodGroup` varchar(200) NOT NULL,
  `rChecked` varchar(200) NOT NULL,
  `rWrite` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healthdetails`
--

INSERT INTO `healthdetails` (`id`, `intro_id`, `rBloodGroup`, `rChecked`, `rWrite`) VALUES
(3, NULL, '0+', 'छैन', ''),
(4, NULL, 'A-', 'छैन', ''),
(5, NULL, '0-', 'छैन', ''),
(6, NULL, 'B-', 'छैन', ''),
(7, NULL, 'B-', 'छैन', ''),
(8, NULL, 'B+', 'छैन', ''),
(9, 11, 'B-', 'छैन', ''),
(10, 12, 'B-', 'छैन', ''),
(11, 14, 'B-', 'छैन', ''),
(12, 83, 'B-', 'छैन', ''),
(13, 86, 'B-', 'छैन', ''),
(14, 92, 'B-', 'छैन', ''),
(15, 93, 'B-', 'छैन', ''),
(16, 94, 'B-', 'छैन', ''),
(17, 95, 'B-', 'छैन', ''),
(18, 96, 'B-', 'छैन', ''),
(19, 97, 'B+', 'छैन', ''),
(20, 98, 'B+', 'छैन', ''),
(21, 99, 'A+', 'छैन', ''),
(22, 100, 'B+', 'छैन', 'something problem '),
(23, 101, 'AB+', 'छैन', ''),
(24, 102, 'B+', 'छैन', ''),
(25, 103, 'B+', 'छैन', '');

-- --------------------------------------------------------

--
-- Table structure for table `introductiondetails`
--

CREATE TABLE `introductiondetails` (
  `id` bigint(20) NOT NULL,
  `active_state` tinyint(1) DEFAULT 1,
  `imagepath` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rName` varchar(200) NOT NULL,
  `rNameCapital` varchar(200) NOT NULL,
  `rDOB` date NOT NULL,
  `eDate` date NOT NULL,
  `rNational` varchar(200) NOT NULL,
  `rEducation` varchar(200) NOT NULL,
  `rProfession` varchar(200) NOT NULL,
  `rGender` varchar(200) NOT NULL,
  `rSpecialAbility` varchar(200) NOT NULL,
  `rMarital` varchar(50) NOT NULL,
  `rMotherToungue` varchar(200) NOT NULL,
  `rCitizenshipNo` varchar(100) NOT NULL,
  `rIssuedDate` date NOT NULL,
  `rIssuedLocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `introductiondetails`
--

INSERT INTO `introductiondetails` (`id`, `active_state`, `imagepath`, `image`, `rName`, `rNameCapital`, `rDOB`, `eDate`, `rNational`, `rEducation`, `rProfession`, `rGender`, `rSpecialAbility`, `rMarital`, `rMotherToungue`, `rCitizenshipNo`, `rIssuedDate`, `rIssuedLocation`) VALUES
(10, 0, 'imagefile.php', 'Global Tech Background Image.jpg', 'Bikesh kumar gupta', 'BIKESH KUMAR GUPTA', '2023-01-18', '2023-01-13', 'Argentina', '+2 Running', 'Astronomer', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(11, 0, 'imagefile.php', '', 'younger gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(12, 0, 'imagefile.php', '', 'younger gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(14, 0, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(76, 0, 'imagefile.php', 'Global Tech Background Image.jpg', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-18', '2023-01-22', 'Argentina', 'Bachelor Running', 'Bricklayer', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-11', 'rohuwa bikesh'),
(77, 0, 'imagefile.php', 'Global Tech Background Image.jpg', 'murari jha', 'MURARI JHA', '2023-01-18', '2023-01-18', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '45644-65456465', '2023-01-17', 'rohuwa bikesh'),
(83, 0, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(85, 0, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(86, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(87, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(88, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(89, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(90, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(91, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(92, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(93, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(94, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(95, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(96, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-26', '2023-01-12', 'Antigua and Barbuda', '+2 Running', 'Baker', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-25', 'rohuwa bikesh'),
(97, 1, 'imagefile.php', '', 'younger  gupta', 'YOUNGER GUPTA', '2023-01-19', '2023-01-24', 'Bahrain', 'Bachelor Degree', 'Bricklayer', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-24', 'rohuwa bikesh'),
(98, 1, 'imagefile.php', '', 'raju gupta', 'RAJU GUTPA', '2023-01-25', '2023-01-19', 'Andorra', 'Bachelor Degree', 'Doctor', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother language', '7874542933', '2023-01-11', 'rohuwa bikesh'),
(99, 1, 'imagefile.php', '', 'mukesh kumar gupta ', 'MUKESH KUMAR GUPTA', '2023-01-19', '2023-01-18', 'Antigua and Barbuda', '+2 Running', 'Astronomer', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-17', 'rohuwa bikesh'),
(100, 0, 'imagefile.php', '', 'Sangin Sir', 'SANGIN SIR', '2023-01-25', '2023-01-18', 'Angola', 'Bachelor Degree', 'Bricklayer', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother languagegdetg', '7874542933', '2023-01-18', 'rohuwa bikesh'),
(101, 1, 'imagefile.php', '', 'balkrishna chaulagain', 'BALKKRISHNA', '2023-12-25', '2023-01-04', 'Nepal', 'Master Degree', 'Baker', 'पुरुष', 'training', 'विवाहित', 'nepali', '68326', '2023-01-18', 'udayapur'),
(102, 1, 'imagefile.php', '', 'jitentendra gupta', 'JITENTENDRA GUPTA', '2023-01-18', '2023-01-27', 'Antigua and Barbuda', '10+2 or PCL प्लस टु वा प्रविणता प्रमाणपत्र तह', 'Accountant', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother language', '85692314', '2023-01-18', 'rohuwa'),
(103, 0, 'imagefile.php', '', 'prem lal sah', 'JITENTENDRA GUPTA', '2023-01-18', '2023-01-27', 'Antigua and Barbuda', '10+2 or PCL प्लस टु वा प्रविणता प्रमाणपत्र तह', 'Accountant', 'पुरुष', 'bachelor of computer application', 'अविवाहित', 'mother language', '85692314', '2023-01-18', 'rohuwa');

-- --------------------------------------------------------

--
-- Table structure for table `languagedetails`
--

CREATE TABLE `languagedetails` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rFirstLanguage` varchar(200) NOT NULL,
  `rSecondLanguage` varchar(200) NOT NULL,
  `rThirdLanguage` varchar(200) NOT NULL,
  `rForthLanguage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languagedetails`
--

INSERT INTO `languagedetails` (`id`, `intro_id`, `rFirstLanguage`, `rSecondLanguage`, `rThirdLanguage`, `rForthLanguage`) VALUES
(4, NULL, 'nepali', 'english', 'hindi', 'telgu'),
(5, NULL, 'nepali', 'english', 'hindi', 'telgu'),
(6, NULL, 'nepali', 'nepali', 'hindi', 'telgu'),
(7, NULL, 'nepali', 'english', 'hindi', 'telgu'),
(8, NULL, 'nepali', 'nepali', 'madrashi', 'madrashi'),
(9, 11, 'nepali', 'nepali', 'hindi', 'telgu'),
(10, 12, 'nepali', 'nepali', 'hindi', 'telgu'),
(11, 14, 'nepali', 'nepali', 'hindi', 'telgu'),
(12, 83, 'nepali', 'nepali', 'hindi', 'telgu'),
(13, 86, 'nepali', 'nepali', 'hindi', 'telgu'),
(14, 92, 'nepali', 'nepali', 'hindi', 'telgu'),
(15, 93, 'nepali', 'nepali', 'hindi', 'telgu'),
(16, 94, 'nepali', 'nepali', 'hindi', 'telgu'),
(17, 95, 'nepali', 'nepali', 'hindi', 'telgu'),
(18, 96, 'nepali', 'nepali', 'hindi', 'telgu'),
(19, 97, 'nepali', 'nepali', 'hindi', 'telgu'),
(20, 98, 'nepali', 'english', 'chini', 'hindi'),
(21, 99, 'nepali', 'english', 'madrashi', 'telgu'),
(22, 100, 'English', 'nepali', 'hindi', 'telgu'),
(23, 101, 'nepali', 'english', '', ''),
(24, 102, 'nepali', 'english', 'chini', 'koriyan'),
(25, 103, 'nepali', 'english', 'chini', 'koriyan');

-- --------------------------------------------------------

--
-- Table structure for table `login_det`
--

CREATE TABLE `login_det` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_det`
--

INSERT INTO `login_det` (`id`, `username`, `password`) VALUES
(0, 'Bikesh Kumar Gupta', 'Bikesh@12345');

-- --------------------------------------------------------

--
-- Table structure for table `permanentaddress`
--

CREATE TABLE `permanentaddress` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rWard` varchar(200) NOT NULL,
  `rMunici` varchar(200) NOT NULL,
  `rProvince` varchar(200) NOT NULL,
  `rDistrict` varchar(255) NOT NULL,
  `rTelephoneNo` varchar(200) NOT NULL,
  `rMobileNo` varchar(200) NOT NULL,
  `rEmail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permanentaddress`
--

INSERT INTO `permanentaddress` (`id`, `intro_id`, `rWard`, `rMunici`, `rProvince`, `rDistrict`, `rTelephoneNo`, `rMobileNo`, `rEmail`) VALUES
(4, NULL, '5', 'THAKRE RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '', ''),
(5, NULL, '6', 'LAKSHMINIYA RURAL MUNICIPALITY', 'Madhesh', 'DHANUSA', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(6, NULL, '6', 'LAKSHMINIYA RURAL MUNICIPALITY', 'Madhesh', 'DHANUSA', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(7, NULL, '4', 'LOHARPATTI MUNICIPALITY', 'Madhesh', 'MAHOTTARI', '985632147', '9865236985', 'youngerboy89@gmail.com'),
(8, NULL, '5', 'KALINCHOK RURAL MUNICIPALITY', 'Bagmati', 'DOLAKHA', '985632147', '9856321478', 'kiransir34@gmail.com'),
(9, NULL, '6', 'PIPRA RURAL MUNICIPALITY', 'Madhesh', 'MAHOTTARI', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(10, NULL, '5', 'MANANG INGSHYANG RURAL MUNICIPALITY', 'Gandaki', 'MANANG', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(11, NULL, '5', 'SABAILA MUNICIPALITY', 'Madhesh', 'DHANUSA', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(12, NULL, '4', 'KALINCHOK RURAL MUNICIPALITY', 'Bagmati', 'DOLAKHA', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(13, 11, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(14, 12, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(15, 14, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(16, 83, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(17, 85, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(18, 86, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(19, 92, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(20, 93, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(21, 94, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(22, 95, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(23, 96, '6', 'NETRAWATI DABJONG RURAL MUNICIPALITY', 'Bagmati', 'DHADING', '985632147', '9856321478', 'youngerboy1@gmail.com'),
(24, 97, '5', 'SAMSI RURAL MUNICIPALITY', 'Madhesh', 'MAHOTTARI', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(25, 98, '5', 'SIMRAUNGADH MUNICIPALITY', 'Madhesh', 'BARA', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(26, 99, '5', 'KALINCHOK RURAL MUNICIPALITY', 'Bagmati', 'DOLAKHA', '985632147', '9856321478', 'programmingaddicted213@gmail.com'),
(27, 100, '5', 'KALINCHOK RURAL MUNICIPALITY', 'Bagmati', 'DOLAKHA', '985632147', '9856321478', 'youngerboy89@gmail.com'),
(28, 101, '09', 'CHAUDANDIGADHI MUNICIPALITY', 'Province 1', 'UDAYAPUR', '', '9851152844', 'chaullagainkrish7@gmail.com'),
(29, 102, '5', 'RAMGOPALPUR MUNICIPALITY', 'Madhesh', 'MAHOTTARI', '985632147', '9856321478', 'happykumargupta1@gmail.com'),
(30, 103, '54', 'CHUM NUBRI RURAL MUNICIPALITY', 'Gandaki', 'GORKHA', '985632147', '9856321478', 'happykumargupta1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `COL 1` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`COL 1`) VALUES
('Accountant'),
('Actor/Actress'),
('Architect'),
('Artist'),
('Banker'),
('Businessman'),
('Bus driver'),
('Carpenter'),
('Chef/Cook'),
('Dancer'),
('Designer'),
('Doctor'),
('Electrician'),
('Engineer'),
('Farmer'),
('Fireman/Fire fighter'),
('Gardener'),
('Govt.'),
('Journalist'),
('Judge'),
('Lawyer'),
('Lecturer'),
('Mechanic'),
('Model'),
('NGO'),
('Newsreader'),
('Nurse'),
('Painter'),
('Pharmacist'),
('Photographer'),
('Pilot'),
('Plumber'),
('Policeman/Policewoman'),
('Scientist'),
('Secretary'),
('Soldier'),
('Study'),
('Tailor'),
('Taxi driver'),
('Teacher'),
('Translator'),
('Veterinary doctor (Vet)');

-- --------------------------------------------------------

--
-- Table structure for table `serviceattacheddetails`
--

CREATE TABLE `serviceattacheddetails` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rPublicity` varchar(100) NOT NULL,
  `rPublicity_1` varchar(100) NOT NULL,
  `rKatrine` varchar(100) NOT NULL,
  `rKatrine_1` varchar(100) NOT NULL,
  `rPublicity1` varchar(100) NOT NULL,
  `rPublicity1_1` varchar(100) NOT NULL,
  `rKatrine1` varchar(100) NOT NULL,
  `rKatrine1_1` varchar(100) NOT NULL,
  `rPublicity2` varchar(100) NOT NULL,
  `rPublicity2_1` varchar(100) NOT NULL,
  `rKatrine2` varchar(100) NOT NULL,
  `rKatrine2_1` varchar(100) NOT NULL,
  `rPublicity3` varchar(100) NOT NULL,
  `rPublicity3_1` varchar(100) NOT NULL,
  `rMc` varchar(100) NOT NULL,
  `rMc_1` varchar(100) NOT NULL,
  `rPublication` varchar(100) NOT NULL,
  `rPublication_1` varchar(100) NOT NULL,
  `rIt` varchar(100) NOT NULL,
  `rIt_1` varchar(100) NOT NULL,
  `rMobileTent` varchar(100) NOT NULL,
  `rMobileTent_1` varchar(100) NOT NULL,
  `rLoverWelcome` varchar(100) NOT NULL,
  `rLoverWelcome_1` varchar(100) NOT NULL,
  `rMustardCleaning` varchar(100) NOT NULL,
  `rMustardCleaning_1` varchar(100) NOT NULL,
  `rVideoGraphy` varchar(100) NOT NULL,
  `rVideoGraphy_1` varchar(100) NOT NULL,
  `rVijuli` varchar(100) NOT NULL,
  `rVijuli_1` varchar(100) NOT NULL,
  `rSecurity` varchar(100) NOT NULL,
  `rSecurity_1` varchar(100) NOT NULL,
  `rAsring` varchar(100) NOT NULL,
  `rAsring_1` varchar(100) NOT NULL,
  `rPhotographer` varchar(100) NOT NULL,
  `rPhotographer_1` varchar(100) NOT NULL,
  `rCoach` varchar(100) NOT NULL,
  `rCoach_1` varchar(100) NOT NULL,
  `rMedical` varchar(100) NOT NULL,
  `rMedical_1` varchar(100) NOT NULL,
  `rRegistration` varchar(100) NOT NULL,
  `rRegistration_1` varchar(100) NOT NULL,
  `rVideoEditor` varchar(100) NOT NULL,
  `rVideoEditor_1` varchar(100) NOT NULL,
  `rPublicRelations` varchar(100) NOT NULL,
  `rPublicRelations_1` varchar(100) NOT NULL,
  `rBuyingAndSelling` varchar(100) NOT NULL,
  `rBuyingAndSelling_1` varchar(100) NOT NULL,
  `rComputerOperator` varchar(100) NOT NULL,
  `rComputerOperator_1` varchar(100) NOT NULL,
  `rAdiyeEditor` varchar(100) NOT NULL,
  `rAdiyeEditor_1` varchar(100) NOT NULL,
  `rTranslation` varchar(100) NOT NULL,
  `rTranslation_1` varchar(100) NOT NULL,
  `rCook` varchar(100) NOT NULL,
  `rCook_1` varchar(100) NOT NULL,
  `rTypist` varchar(100) NOT NULL,
  `rTypist_1` varchar(100) NOT NULL,
  `rAdiyaRecorded` varchar(100) NOT NULL,
  `rAdiyaRecorded_1` varchar(100) NOT NULL,
  `rDepartmentOfServices` varchar(100) NOT NULL,
  `rDepartmentOfServices_1` varchar(100) NOT NULL,
  `rKatrinHelper` varchar(100) NOT NULL,
  `rKatrinHelper_1` varchar(100) NOT NULL,
  `rCultural` varchar(100) NOT NULL,
  `rCultural_1` varchar(100) NOT NULL,
  `rLaw` varchar(100) NOT NULL,
  `rLaw_1` varchar(100) NOT NULL,
  `rProduction` varchar(100) NOT NULL,
  `rProduction_1` varchar(100) NOT NULL,
  `rAccommodation` varchar(100) NOT NULL,
  `rAccommodation_1` varchar(100) NOT NULL,
  `rSmartCard` varchar(100) NOT NULL,
  `rSmartCard_1` varchar(100) NOT NULL,
  `rConstruction` varchar(100) NOT NULL,
  `rConstruction_1` varchar(100) NOT NULL,
  `rOfficeAssistant` varchar(100) NOT NULL,
  `rOfficeAssistant_1` varchar(100) NOT NULL,
  `rAdiya` varchar(100) NOT NULL,
  `rAdiya_1` varchar(100) NOT NULL,
  `rWorkShop` varchar(100) NOT NULL,
  `rWorkShop_1` varchar(100) NOT NULL,
  `rGeneralService` varchar(100) NOT NULL,
  `rGeneralService_1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceattacheddetails`
--

INSERT INTO `serviceattacheddetails` (`id`, `intro_id`, `rPublicity`, `rPublicity_1`, `rKatrine`, `rKatrine_1`, `rPublicity1`, `rPublicity1_1`, `rKatrine1`, `rKatrine1_1`, `rPublicity2`, `rPublicity2_1`, `rKatrine2`, `rKatrine2_1`, `rPublicity3`, `rPublicity3_1`, `rMc`, `rMc_1`, `rPublication`, `rPublication_1`, `rIt`, `rIt_1`, `rMobileTent`, `rMobileTent_1`, `rLoverWelcome`, `rLoverWelcome_1`, `rMustardCleaning`, `rMustardCleaning_1`, `rVideoGraphy`, `rVideoGraphy_1`, `rVijuli`, `rVijuli_1`, `rSecurity`, `rSecurity_1`, `rAsring`, `rAsring_1`, `rPhotographer`, `rPhotographer_1`, `rCoach`, `rCoach_1`, `rMedical`, `rMedical_1`, `rRegistration`, `rRegistration_1`, `rVideoEditor`, `rVideoEditor_1`, `rPublicRelations`, `rPublicRelations_1`, `rBuyingAndSelling`, `rBuyingAndSelling_1`, `rComputerOperator`, `rComputerOperator_1`, `rAdiyeEditor`, `rAdiyeEditor_1`, `rTranslation`, `rTranslation_1`, `rCook`, `rCook_1`, `rTypist`, `rTypist_1`, `rAdiyaRecorded`, `rAdiyaRecorded_1`, `rDepartmentOfServices`, `rDepartmentOfServices_1`, `rKatrinHelper`, `rKatrinHelper_1`, `rCultural`, `rCultural_1`, `rLaw`, `rLaw_1`, `rProduction`, `rProduction_1`, `rAccommodation`, `rAccommodation_1`, `rSmartCard`, `rSmartCard_1`, `rConstruction`, `rConstruction_1`, `rOfficeAssistant`, `rOfficeAssistant_1`, `rAdiya`, `rAdiya_1`, `rWorkShop`, `rWorkShop_1`, `rGeneralService`, `rGeneralService_1`) VALUES
(4, NULL, '(ई)', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', ''),
(6, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', ''),
(7, NULL, '(अ)', '', '', '', '', '', '(अ)', '(ई)', '(अ)', '', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, NULL, '(अ)', '(ई)', '(अ)', '', '(अ)', '(ई)', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 11, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 12, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 14, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 83, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 86, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 92, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 93, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 94, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 95, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 96, '', '(ई)', '(अ)', '', '(अ)', '', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 97, '', '(ई)', '(अ)', '(ई)', '', '(ई)', '(अ)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 98, '', '(ई)', '', '(ई)', '(अ)', '', '(अ)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 99, '(अ)', '', '(अ)', '(ई)', '(अ)', '(ई)', '', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 100, '(अ)', '(ई)', '', '', '', '', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 101, '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 102, '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 103, 'प्रचार (अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '(अ)', '(ई)', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicetimedetails`
--

CREATE TABLE `servicetimedetails` (
  `id` bigint(20) NOT NULL,
  `intro_id` bigint(20) DEFAULT NULL,
  `rCertainTime` varchar(200) NOT NULL,
  `rCertainDays` varchar(200) NOT NULL,
  `rCertainArea` varchar(200) NOT NULL,
  `rInvestmentTime` varchar(200) NOT NULL,
  `rInvestmentDays` varchar(200) NOT NULL,
  `rPlace` varchar(255) NOT NULL,
  `rDescription` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicetimedetails`
--

INSERT INTO `servicetimedetails` (`id`, `intro_id`, `rCertainTime`, `rCertainDays`, `rCertainArea`, `rInvestmentTime`, `rInvestmentDays`, `rPlace`, `rDescription`) VALUES
(0, NULL, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', ' ', 'आफ्नो क्षेत्रमा मात्रै', 'raju rastogi'),
(0, NULL, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'प्रति हप्ता ', 'आफ्नो क्षेत्रमा मात्रै', 'younger'),
(0, NULL, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'प्रति हप्ता ', 'आफ्नो क्षेत्रमा मात्रै', 'younger boys '),
(0, NULL, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देश बाहिर ', 'Rauniyar ', 'प्रति हप्ता ', 'आफ्नो क्षेत्रमा मात्रै', 'unique boy'),
(0, NULL, 'Mukesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'प्रति हप्ता ', 'आफ्नो क्षेत्रमा मात्रै', 'murari jha'),
(0, 11, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 12, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 14, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 83, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 86, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 96, 'Bikesh kumar gupta', 'प्रति हप्ता', 'देशभरि जहाँसुकै ', 'Rauniyar ', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it'),
(0, 97, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'प्रति हप्ता ', 'आफ्नो क्षेत्रमा मात्रै', 'happy'),
(0, 98, '2 hrs ', 'अर्थ मासिक', 'आफ्नो क्षेत्रमा मात्रै ', '4 hrs ', 'अर्थ मासिक ', 'देशभरि जहाँसुकै', 'I am harry'),
(0, 99, 'Bikesh kumar gupta', 'अर्थ मासिक', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'अर्थ मासिक ', 'आफ्नो क्षेत्रमा मात्रै', 'you can do it bg'),
(0, 100, '2 hrs', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', '2 hrs', 'प्रति हप्ता ', 'देशभरि जहाँसुकै', 'you can do it '),
(0, 101, '15', '', 'आफ्नो सहरमा मात्रै ', '7', 'प्रति हप्ता ', 'आफ्नो सहरमा मात्रै', ''),
(0, 102, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'अर्थ मासिक ', 'आफ्नो सहरमा मात्रै', 'happy jha'),
(0, 103, 'Bikesh kumar gupta', 'प्रति हप्ता', 'आफ्नो क्षेत्रमा मात्रै ', 'Rauniyar ', 'अर्थ मासिक ', 'आफ्नो सहरमा मात्रै', 'happy jha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agps`
--
ALTER TABLE `agps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `currentaddress`
--
ALTER TABLE `currentaddress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `healthdetails`
--
ALTER TABLE `healthdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `introductiondetails`
--
ALTER TABLE `introductiondetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languagedetails`
--
ALTER TABLE `languagedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `permanentaddress`
--
ALTER TABLE `permanentaddress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `serviceattacheddetails`
--
ALTER TABLE `serviceattacheddetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intro_id` (`intro_id`);

--
-- Indexes for table `servicetimedetails`
--
ALTER TABLE `servicetimedetails`
  ADD KEY `intro_id` (`intro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agps`
--
ALTER TABLE `agps`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `currentaddress`
--
ALTER TABLE `currentaddress`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `healthdetails`
--
ALTER TABLE `healthdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `introductiondetails`
--
ALTER TABLE `introductiondetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `languagedetails`
--
ALTER TABLE `languagedetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permanentaddress`
--
ALTER TABLE `permanentaddress`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `serviceattacheddetails`
--
ALTER TABLE `serviceattacheddetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agps`
--
ALTER TABLE `agps`
  ADD CONSTRAINT `agps_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`),
  ADD CONSTRAINT `agps_ibfk_2` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `currentaddress`
--
ALTER TABLE `currentaddress`
  ADD CONSTRAINT `currentaddress_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `healthdetails`
--
ALTER TABLE `healthdetails`
  ADD CONSTRAINT `healthdetails_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `languagedetails`
--
ALTER TABLE `languagedetails`
  ADD CONSTRAINT `languagedetails_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `permanentaddress`
--
ALTER TABLE `permanentaddress`
  ADD CONSTRAINT `permanentaddress_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `serviceattacheddetails`
--
ALTER TABLE `serviceattacheddetails`
  ADD CONSTRAINT `serviceattacheddetails_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);

--
-- Constraints for table `servicetimedetails`
--
ALTER TABLE `servicetimedetails`
  ADD CONSTRAINT `servicetimedetails_ibfk_1` FOREIGN KEY (`intro_id`) REFERENCES `introductiondetails` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
