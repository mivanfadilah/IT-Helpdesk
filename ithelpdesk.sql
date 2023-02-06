-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 04:35 AM
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
-- Database: `ithelpdesk`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `beranda`
-- (See below for the actual view)
--
CREATE TABLE `beranda` (
`id` int(11)
,`nama` varchar(255)
,`status` varchar(2550)
,`foto` varchar(255)
,`file` varchar(255)
,`video` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `chat_box`
--

CREATE TABLE `chat_box` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pesan` varchar(2550) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_box`
--

INSERT INTO `chat_box` (`id`, `username`, `pesan`) VALUES
(1, 'das', 'afas'),
(2, '', 'eegeg'),
(3, '', 'sfzsf'),
(4, '', 'zdgsdg'),
(5, '', 'dgdb'),
(6, '', 'rherh'),
(7, '', 'sefae'),
(8, '', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(2550) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `nama`, `status`, `foto`, `file`, `video`) VALUES
(2, '', '', 'http://localhost/ithelpdesksinemart/uploads/files/ebigc9qldyan6j0.jpg', '', ''),
(3, '', '', '', 'http://localhost/ithelpdesksinemart/uploads/files/t96k1lsug2wz570.pdf', ''),
(6, '', 'Mix and match multiple content types to create the card you need, or throw everything in there. Shown below are image styles, blocks, text styles, and a list group—all wrapped in a fixed-width card.', '', '', ''),
(7, '', 'PENGUMUMAN\r\nBESOK LIBUR TG 26 JANUARY 2023', '', '', ''),
(8, '', 'Horeee ....\r\nSinetron terbaru dari Sinemart yaitu Melukis Senja.\r\n\r\n#melukissenja', 'http://localhost/ithelpdesksinemart/uploads/files/ofwjml_3cb62qt0.jpg', '', ''),
(16, '', 'Pembelian RAM 4GB Untuk diruangan IT sebanyak 10 pcs.', 'http://localhost/ithelpdesksinemart/uploads/files/sokz_vd392tbenq.jpg', '', ''),
(26, '', 'Tajdwid Cinta Episode 9-10', '', '', 'http://localhost/ithelpdesksinemart/uploads/files/egs5dtfo81qih7a.mp4'),
(31, '', 'Jakarta - Ketua Badan Kerja Sama Antar Parlemen (BKSAP) DPR RI Fadli Zon mengatakan usulan biaya kenaikan haji oleh Kemenag tak bijaksana. Ia menyoroti biaya yang ditanggung oleh jemaah senilai Rp 69,19 juta, lebih besar dari tahun lalu, yang sebesar Rp 39,8 juta per orang.\r\n\"Usulan Kementerian Agama (Kemenag) untuk menaikkan porsi pembiayaan yang ditanggung jamaah haji dalam besaran lebih dari 73 persen dibandingkan biaya tahun lalu sangatlah tak bijaksana dan menyalahi prinsip tata kelola penyelenggaraan haji sebagaimana yang diamanatkan undang-undang,\" kata Fadli Zon dalam keterangannya, Jumat (27/1/2023).\r\n\r\nBaca artikel detiknews, \"Fadli Zon Tolak Usulan Biaya Haji Naik Jadi Rp 69 Juta: Sangat Tak Wajar\" selengkapnya https://news.detik.com/berita/d-6537649/fadli-zon-tolak-usulan-biaya-haji-naik-jadi-rp-69-juta-sangat-tak-wajar.\r\n\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/', 'http://localhost/ithelpdesksinemart/uploads/files/59tqe76unyapvm4.jpeg', '', ''),
(41, '', 'TINGGAL CHAT BOXNYA BELUM BISA BISA WKWKWK\r\n', '', '', ''),
(42, '', 'Selamat Siang , Selamat makan , ckckckck', '', '', ''),
(47, '', 'Selamat Pagii ..', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_ranting`
--

CREATE TABLE `rekap_ranting` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `episode` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `rangking` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_ranting`
--

INSERT INTO `rekap_ranting` (`id`, `judul`, `episode`, `tanggal`, `rangking`) VALUES
(1, 'Tajwid Cinta', '10-12', '2023-01-25', '10'),
(2, 'Tajwid Cinta', '9', '2023-01-24', '9'),
(3, 'Aura', '1', '2023-01-24', '6'),
(4, 'Aura', '2', '2023-01-25', '8.2'),
(5, 'Takdir Cinta', '6', '2023-01-24', '7.9'),
(6, 'Takdir Cinta', '7', '2023-01-25', '5.5'),
(7, 'Cinta Setelah Cinta', '9', '2023-01-24', '6'),
(8, 'Cinta Setelah Cinta', '10', '2023-01-25', '7'),
(9, 'Tajwid Cinta', '13', '2023-01-31', '7.1'),
(10, 'Cinta Setelah Cinta', '11', '2023-01-31', '8.2'),
(11, 'Takdir Cinta', '8', '2023-01-31', '9.4'),
(12, 'Aura', '3', '2023-01-31', '6.1'),
(13, 'Aura', '4', '2023-02-02', '7.9'),
(14, 'Takdir Cinta', '9', '2023-02-02', '7'),
(15, 'Cinta Setelah Cinta', '12', '2023-02-02', '9.1'),
(16, 'Tajwid Cinta', '14', '2023-02-02', '8.7');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2023-04-27 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tgl_lahir`, `level`, `email`, `foto`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, 'M Ivan Fadilah', '$2y$10$mIKYXi2ircaV02ScawoSnOax5aa5fDHJtMIJoG76XpWkUHelrTWCW', '1997-05-15', 'IT', 'muhammadivanfadilah@gmail.com', 'http://localhost/ithelpdesksinemart/uploads/files/pzlf1i0ca79gqm5.png', NULL, NULL, '2023-04-27 00:00:00', NULL),
(8, 'ivan', '$2y$10$lnAOZ17gFMIyH4luqJHnyO5LNxHB91IWtFhSWDliRwqWbfj/19QnW', '1990-01-19', 'IT', 'ivan@gmail.com', 'http://localhost/ithelpdesksinemart/uploads/files/6w70s_ezytabu5f.png', NULL, NULL, '2023-04-27 00:00:00', NULL),
(9, 'admin', '$2y$10$tKvnfGH1FijUve6LvlkM..G6L5jML27pXTkzAQkL3n6lgN9uIPN.C', '1990-08-17', 'Editing', 'admin@gmail.com', 'http://localhost/ithelpdesksinemart/uploads/files/6c3hp4mskvrye0_.jpg', NULL, NULL, '2023-04-27 00:00:00', NULL),
(10, 'user', '$2y$10$vrziel0.ylwk5fr76L24xeDHeo3jFlmuZEO6KhNTV/Q8H8.LqegBK', '1997-09-16', 'Marketing', 'user@gamil.com', 'http://localhost/ithelpdesksinemart/uploads/files/9its8gj2vlxufrn.jpg', NULL, NULL, '2023-04-27 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Structure for view `beranda`
--
DROP TABLE IF EXISTS `beranda`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `beranda`  AS SELECT `i`.`id` AS `id`, `i`.`nama` AS `nama`, `i`.`status` AS `status`, `i`.`foto` AS `foto`, `i`.`file` AS `file`, `i`.`video` AS `video` FROM `informasi` AS `i``i`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_box`
--
ALTER TABLE `chat_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekap_ranting`
--
ALTER TABLE `rekap_ranting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_box`
--
ALTER TABLE `chat_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rekap_ranting`
--
ALTER TABLE `rekap_ranting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
