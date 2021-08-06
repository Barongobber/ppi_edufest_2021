-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2021 at 11:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen_event` int(255) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `domisili_peserta` int(255) NOT NULL,
  `email_peserta` varchar(255) NOT NULL,
  `hp_peserta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen_event`, `nama_peserta`, `domisili_peserta`, `email_peserta`, `hp_peserta`) VALUES
(2, 'fdasdf', 14, 'boi@boi', 'fds'),
(2, 'fdasdf', 11, 'boi@boi.com', 'fds'),
(2, 'icy', 11, 'icy@icy.com', NULL),
(2, 'Minions', 21, 'minions@minion.com', '098');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `img_event` varchar(255) NOT NULL,
  `wilayah_event` int(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `detail_event` varchar(10000) NOT NULL,
  `link_daftar_event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `img_event`, `wilayah_event`, `tanggal_event`, `detail_event`, `link_daftar_event`) VALUES
(1, 'Event Pentol', '1609623192unnamed.png.png', 5, '2021-01-03', 'Detail', 'Link '),
(2, 'Event 2', '1609651672Screenshot 2020-09-04 at 11.16.36 PM.png.png', 1, '2021-01-25', 'jkl', 'j'),
(3, 'saf', '1b9f19e3-0ee2-4f24-a148-e27907864676.png', 1, '2021-02-14', 'fda', 'asdf'),
(4, 'Event 1', 'Bubbley.JPG', 2, '2020-01-29', 'r', 'j'),
(5, 'Event 1', 'IMG_0746.JPG', 5, '2021-01-07', 'Detail', 'fd');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(255) NOT NULL,
  `question_faq` varchar(255) NOT NULL,
  `answer_faq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `question_faq`, `answer_faq`) VALUES
(1, 'meow?', 'meow!!'),
(2, 'pentol?', 'pentol!!');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `id_wilayah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`, `id_wilayah`) VALUES
(11, 'Aceh', 2),
(12, 'Sumatera Utara', 2),
(13, 'Sumatera Barat', 2),
(14, 'Riau', 2),
(15, 'Jambi', 2),
(16, 'Sumatera Selatan', 2),
(17, 'Bengkulu', 2),
(18, 'Lampung', 2),
(19, 'Kepulauan Bangka Belitung', 2),
(21, 'Kepulauan Riau', 2),
(31, 'DKI Jakarta', 9),
(32, 'Jawa Barat', 8),
(33, 'Jawa Tengah', 7),
(34, 'Di Yogyakarta', 7),
(35, 'Jawa Timur', 7),
(36, 'Banten', 9),
(51, 'Bali', 6),
(52, 'Nusa Tenggara Barat', 6),
(53, 'Nusa Tenggara Timur', 6),
(61, 'Kalimantan Barat', 3),
(62, 'Kalimantan Tengah', 3),
(63, 'Kalimantan Selatan', 3),
(64, 'Kalimantan Timur', 3),
(65, 'Kalimantan Utara', 3),
(71, 'Sulawesi Utara', 4),
(72, 'Sulawesi Tengah', 4),
(73, 'Sulawesi Selatan', 4),
(74, 'Sulawesi Tenggara', 4),
(75, 'Gorontalo', 4),
(76, 'Sulawesi Barat', 4),
(81, 'Maluku', 5),
(82, 'Maluku Utara', 5),
(91, 'Papua Barat', 5),
(94, 'Papua', 5);

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE `speaker` (
  `id_speaker` int(255) NOT NULL,
  `nama_speaker` varchar(255) NOT NULL,
  `email_speaker` varchar(255) NOT NULL,
  `hp_speaker` varchar(255) NOT NULL,
  `img_speaker` varchar(255) NOT NULL,
  `ppi_speaker` varchar(255) DEFAULT NULL,
  `lingkup_jurusan` varchar(255) NOT NULL,
  `tentang_speaker` varchar(1000) DEFAULT NULL,
  `id_event` int(255) NOT NULL,
  `asal_speaker` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id_speaker`, `nama_speaker`, `email_speaker`, `hp_speaker`, `img_speaker`, `ppi_speaker`, `lingkup_jurusan`, `tentang_speaker`, `id_event`, `asal_speaker`) VALUES
(1, 'pentol qt', 'boi@boi.com', 'fds', 'hallo.png', 'ppi speaker ', 'bachelor of pentolmania', 'additional info', 1, 12),
(2, 'Test 4', 'boi@boi.com', 'fds', '16117557475d3d5a5b4d9f051675cb4e549684db9c.jpg', NULL, 'lingkup jurusan', 'asdf', 2, 12),
(3, 'Test 4', 'all@gmail.com', 'fds', '104008_fig2.jpg', NULL, 'fdsa', 'asdf', 2, 12),
(5, 'TestX', 'boi@boi.com', '098', 'Screenshot 2020-09-29 at 5.28.45 PM.png', NULL, 'negara', 'asdf', 3, 12),
(6, 'TestX', 'flabbergastniall@gmail.com', '32343', 'japan-services-pmi@2x-2.png', NULL, 'fdsa', 'asdf', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(255) NOT NULL,
  `nama_wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Indonesia'),
(2, 'Wilayah 1 (Sumatera)'),
(3, 'Wilayah 2 (Kalimantan)'),
(4, 'Wilayah 3 (Sulawesi)'),
(5, 'Wilayah 4 (Indonesia Timur)'),
(6, 'Wilayah 5 (Nusa Tenggara dan Bali)'),
(7, 'Wilayah 6 (Jawa Timur, Jawa Tengah, dan Bali)'),
(8, 'Wilayah 7 (Jawa Barat)'),
(9, 'Wilayah 8 (Jakarta dan Banten)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen_event`,`email_peserta`) USING BTREE,
  ADD KEY `domisili_fk` (`domisili_peserta`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `wilayah_fk` (`wilayah_event`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD KEY `prov_wil_fk` (`id_wilayah`);

--
-- Indexes for table `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id_speaker`),
  ADD KEY `speaker_event_fk` (`id_event`),
  ADD KEY `asal_speaker_fk` (`asal_speaker`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id_speaker` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `domisili_fk` FOREIGN KEY (`domisili_peserta`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `id_event_fk` FOREIGN KEY (`id_absen_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `wilayah_fk` FOREIGN KEY (`wilayah_event`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `prov_wil_fk` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `speaker`
--
ALTER TABLE `speaker`
  ADD CONSTRAINT `asal_speaker_fk` FOREIGN KEY (`asal_speaker`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `speaker_event_fk` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
