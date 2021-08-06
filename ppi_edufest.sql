-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Agu 2021 pada 04.08
-- Versi server: 5.7.35
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppi_edufest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen_event` int(255) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `domisili_peserta` int(255) NOT NULL,
  `email_peserta` varchar(255) NOT NULL,
  `hp_peserta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
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
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `judul_event`, `img_event`, `wilayah_event`, `tanggal_event`, `detail_event`, `link_daftar_event`) VALUES
(1, 'Sumatera - Sesi 1 Edisi Malaysia dan Singapore', '1613379251sumatera_1.jpg.jpg', 1, '2021-02-20', 'Acara Webinar PPI Edufest Edisi Sumatera- Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Singapura dan juga Malaysia dari jenjang S1-S3 <b> yang akan diadakan pukul 10.00-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLScbKvMQBIzkKQo0rDaIvLE3PdUfymCEv5ldcRoZ-6Z_-5XUhA/viewform?embedded=true'),
(2, 'Sumatera - Sesi 2 Edisi Jerman dan Belanda', '1613379264sumatera_2.jpg.jpg', 1, '2021-02-20', 'Acara Webinar PPI Edufest Edisi Sumatera- Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Jerman dan juga Belanda dari jenjang S1-S3 <b> yang akan diadakan pukul 14.00-16.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSei7IEp6L9e8MdhFY_3IfCI8CDqDRskQBu3C8OhBB5GXZxpEw/viewform?embedded=true'),
(3, 'Sumatera - Sesi 3 Edisi Libya dan Mesir', '1613379278sumatera_3.jpg.jpg', 1, '2021-02-21', 'Acara Webinar PPI Edufest Edisi Sumatera- Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Libya dan juga Mesir dari jenjang S1-S3 <b> yang akan diadakan pukul 10.00-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSeLzr5go-PXSIj70DpPnuvGm2q5ooT0unh3PohacnN-oCZjKQ/viewform?embedded=true'),
(5, 'Kalimantan - Sesi 1 Edisi Tiongkok dan Taiwan', '1614497396tw.jpg.jpg', 1, '2021-03-06', 'Acara Webinar PPI Edufest Edisi Kalimantan- Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Tiongkok dan juga Taiwan dari jenjang S1-S3 <b>yang akan diadakan pukul 09.30-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSe3OOMmEtREZwjIN9ktWfDzMXr4q95-z6bRuWWZOEcqTBPGuA/viewform?embedded=true'),
(6, 'Kalimantan - Sesi 2 Edisi Hungaria dan Rusia', '1614497413russia .jpg.jpg', 1, '2021-03-06', 'Acara Webinar PPI Edufest Edisi Kalimantan- Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Hungaria dan juga Rusia dari jenjang S1-S3 <b>yang akan diadakan pukul 14.00-16.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLScEV-Z4Ky58YUNQkNoP2KjVg9XtPKYtDXOPl7Se8ZsAmq6mzg/viewform?embedded=true'),
(7, 'Kalimantan - Sesi 3 Edisi Yordania dan Lebanon', '1614497429lebanon.jpg.jpg', 1, '2021-03-07', 'Acara Webinar PPI Edufest Edisi Kalimantan- Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Yordania dan juga Lebanon dari jenjang S1-S3 <b>yang akan diadakan pukul 10.00-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSe-ri6Ygk7X96ZZUBxKLDmnqi8kKB8TQxOKcmzjNK0L4oac4A/viewform?embedded=true'),
(8, 'Sulawesi - Sesi 1 Edisi Filipina dan Thailand', '16157200431.jpg.jpg', 4, '2021-03-20', 'Acara Webinar PPI Edufest Edisi Sulawesi- Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Filipina dan juga Thailand dari jenjang S1-S3 yang akan diadakan pukul 09.30-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSetuERx24kQ-jzuji0TtKdORbYKwnmQWimr0sVQwVO4_TT6EQ/viewform?embedded=true'),
(9, 'Sulawesi - Sesi 2 Edisi Spanyol dan Portugal', '16157200582.jpg.jpg', 4, '2021-03-20', 'Acara Webinar PPI Edufest Edisi Sulawesi - Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Spanyol dan juga Portugal dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLScScxE4ZIz7Y7ZpzN93aLjQNFYpuRf2q9qwt7xO-CrV18E93Q/viewform?embedded=true'),
(10, 'Sulawesi - Sesi 3 Edisi Pakistan dan Iran', '16157200703.jpg.jpg', 4, '2021-03-21', 'Acara Webinar PPI Edufest Edisi Sulawesi - Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Pakistan dan juga Iran dari jenjang S1-S3 yang akan diadakan pukul 10.00-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSdP4h01yVgF_-ixRwE0OlPHwv9AtDJ4mj8Agw261fMV2DLQ1Q/viewform?embedded=true'),
(11, 'Indonesia Timur - Sesi 1 Edisi Amerika dan Kanada', '1616939558pos-2_01.png.png', 5, '2021-04-03', 'Acara Webinar PPI Edufest Edisi Indonesia Timur- Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Amerika dan juga Kanada dari jenjang S1-S3 yang akan diadakan pukul 09.30-12.00 WIB. ', 'https://docs.google.com/forms/d/e/1FAIpQLSfTQj-TOmlb97Mb76GXtConhOPIE1K2aEB12PzH4SUWoFUjnw/viewform?embedded=true'),
(12, 'Indonesia Timur - Sesi 2 Edisi Romania dan Belgia', '1616939574pos-2_02.png.png', 5, '2021-04-03', 'Acara Webinar PPI Edufest Edisi Indonesia Timur - Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Romania dan juga Belgia dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLScgiQ9xnItrJIChDk_WOTNS7YpOW59BV7MMKGzsW22kyZOrMw/viewform?embedded=true'),
(13, 'Indonesia Timur - Sesi 3 Edisi Denmark dan Estonia', '1616939593pos-2_03.png.png', 5, '2021-04-04', 'Acara Webinar PPI Edufest Edisi Indonesia Timur - Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Denmark dan juga Estonia dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLScFNhpZVdCBVNAYlWojUrVjz0U64-NYDcwqcD4MT6sVAt65Lw/viewform?embedded=true'),
(14, 'Nusa Tenggara dan Bali - Sesi 1 Edisi India dan Bangladesh', '16182261073.png.png', 6, '2021-04-17', 'Acara Webinar PPI Edufest Edisi Nusa Tenggara dan Bali- Sesi 1 ini akan diramaikan oleh para mahasiswa/i Indonesia yang berkuliah di negara India dan juga Bangladesh dari jenjang S1-S3 yang akan diadakan pukul 09.30-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSd2nQHZ-i1pM653X_CH6Kb8HKa-j1OU_6-tcj4cSUZTqs6IMw/viewform?embedded=true'),
(15, 'Nusa Tenggara dan Bali - Sesi 2 Edisi Polandia dan Republik Ceko', '16182261241.png.png', 6, '2021-04-17', 'Acara Webinar PPI Edufest Edisi Nusa Tenggara dan Bali- Sesi 2 ini akan diramaikan oleh para mahasiswa/i Indonesia yang berkuliah di negara Polandia dan juga Republik Ceko dari jenjang S1-S3 <b>yang akan diadakan pukul 14.00-16.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLScElr9MoQVmzAW3y5LqLBUPSofNPPa0-a_LdbJ2Ad0VLykPyQ/viewform?embedded=true'),
(16, 'Nusa Tenggara dan Bali - Sesi 3 Edisi Maroco dan Tunisia', '16182261402.png.png', 6, '2021-04-18', 'Acara Webinar PPI Edufest Edisi Nusa Tenggara dan Bali - Sesi 3 ini akan diramaikan oleh para mahasiswa/i Indonesia yang berkuliah di negara Maroco dan juga Tunisia dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSfmV5MUwX7BGpxjbXPUw1VmWhBYg_02x4DqPZspDNm__tbyLw/viewform?embedded=true'),
(17, 'Pulau Jawa - Sesi 1 Edisi Jepang dan Korea Selatan', '1619677569pos-2_01.png.png', 7, '2021-05-01', 'Acara Webinar PPI Edufest Edisi Pulau Jawa - Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Jepang dan juga Korea Selatan dari jenjang S1-S3 yang akan diadakan pukul 09.30-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSdma0y-ZEUvxPCEJJNtt9FWr3B7t5fWC61Lbxz9ttgEHELBZQ/viewform?embedded=true'),
(18, 'Pulau Jawa - Sesi 2 Edisi Azerbaijan dan Turki Â  Â ', '1619677604pos-2_02.png.png', 7, '2021-05-01', 'Acara Webinar PPI Edufest Edisi Pulau Jawa - Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Azerbaijan dan juga Turki dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSd_vX8wCRiXSds2apk2FTfxAHLaz7C5C78rUFtATTiBnv5EyA/viewform?embedded=true'),
(19, 'Pulau Jawa - Sesi 3 Edisi Oman dan Yaman Â  Â  Â Â ', '1619677616pos-2_03.png.png', 7, '2021-05-02', 'Acara Webinar PPI Edufest Edisi Pulau Jawa - Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Oman dan juga Yaman dari jenjang S1-S3 yang akan diadakan pukul 10.00-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSc3YK-MJs0MeYYrPgPxZdvNEwReiAtM9fMk4UJoB7GQL2bBxg/viewform?embedded=true'),
(20, 'PPI Edufest x BM KEM UGM - Sesi 1 Edisi Australia dan New Zealand', '16212328781.png.png', 8, '2021-05-22', 'Acara Webinar PPI Edufest Edisi PPI Edufest x BM KEM UGM- Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Australia dan juga New Zealand dari jenjang S1-S3 yang akan diadakan pukul 09.30-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSfSJ_avTLnB6z5BGLisokgutJ_xk3e2IG3AYc89CKErO9I_QQ/viewform?embedded=true'),
(21, 'PPI Edufest x BM KEM UGM - Sesi 2 Edisi Swedia dan Austria', '16212329162.png.png', 8, '2021-05-22', 'Acara Webinar PPI Edufest Edisi PPI Edufest x BM KEM UGM - Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Swedia dan juga Austria dari jenjang S1-S3 yang akan diadakan pukul 14.00-16.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSdDBDEQCQ5wJGpA6DEYIv_03NZ0cVDaGOwRCrJ34wYyvFqIjw/viewform?embedded=true'),
(22, 'PPI Edufest x BM KEM UGM - Sesi 3 Edisi Saudi Arabia dan Sudan', '16212329553.png.png', 8, '2021-05-23', 'Acara Webinar PPI Edufest Edisi PPI Edufest x BM KEM UGM - Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Saudi Arabia dan juga Sudan dari jenjang S1-S3 yang akan diadakan pukul 10.00-12.00 WIB.', 'https://docs.google.com/forms/d/e/1FAIpQLSfLeXjxj178qw740RncOFgLOWxU6jtOgwyusRy8ariOqZB0cA/viewform?embedded=true'),
(23, 'PPI Edufest X BEM UI - Sesi 1 Edisi Irlandia dan United Kingdom', '1622557843delegasi_01.png.png', 9, '2021-06-05', 'Acara Webinar PPI Edufest Edisi PPI Edufest X BEM UI - Sesi 1 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Irlandia dan juga United Kingdom dari jenjang S1-S3 <b>yang akan diadakan pukul 09.30-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSdkeaEQgzcJOryKkrkUtdjBYeCpfHt7zECPnfKZgcQzQ1ayxA/viewform?embedded=true'),
(24, 'PPI Edufest X BEM UI - Sesi 2 Edisi Italia dan Perancis', '1622557859delegasi_02.png.png', 9, '2021-06-05', 'Acara Webinar PPI Edufest Edisi PPI Edufest X BEM UI - Sesi 2 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Italia dan juga Perancis dari jenjang S1-S3 <b>yang akan diadakan pukul 14.00-16.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSfuXNFCSX_1H1UlNPJ2IMGWpzFxXywdh2x9nQSnAqj4YdHnlQ/viewform?embedded=true'),
(25, 'PPI Edufest X BEM UI - Sesi 3 Edisi Suriah dan United Arab Emirate', '1622557872delegasi_03.png.png', 9, '2021-06-06', 'Acara Webinar PPI Edufest Edisi PPI Edufest X BEM UI - Sesi 3 ini akan diramaikan oleh para mahahsiswa/i Indonesia yang berkuliah di negara Suriah dan juga United Arab Emirate dari jenjang S1-S3 <b>yang akan diadakan pukul 10.00-12.00 WIB </b>', 'https://docs.google.com/forms/d/e/1FAIpQLSfyvix2PnOEdb-d1woFJ5oBV54LQc4n2dCVlOsrOUYHEVUkrg/viewform?embedded=true'),
(26, 'PPI Edufest Special Session', '1623807096special-session_01.jpg.jpg', 1, '2021-06-19', 'Acara Webinar PPI Edufest Edisi Spesial Session ini akan diramaikan oleh para Narasumber yang memiliki pengalaman dan juga pengetahuan akan berkuliah di luar negeri. Selain daripada itu, akan ada special performance dari guest star yang akan menghibur teman-teman ditengah acara kami. Acara akan dibagi menjadi 2 sesi dengan detail sebagai berikut: <br><br> - Sesi 1: 19 Juni 2021, Pukul 10.00 â€“ 12.00 WIB <br> - Sesi 2: 19 Juni 2021, Pukul 14.00 â€“ 16.00 WIB', 'https://docs.google.com/forms/d/e/1FAIpQLSfwAHb0ZytrehbQoSVt1skYH6zJ6k2JaVMCaT4_4eea-vnqOQ/viewform?embedded=true');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(255) NOT NULL,
  `question_faq` varchar(255) NOT NULL,
  `answer_faq` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `question_faq`, `answer_faq`) VALUES
(1, 'Apa itu PPI Edufest 2021?', 'PPI Edufest 2021 adalah kegiatan Education Expo yang diselenggarakan oleh Festival Luar Negeri PPI Dunia dengan tujuan memberikan informasi kepada pelajar Indonesia untuk melanjutkan pendidikan di luar negeri melalui jalur beasiswa maupun non-beasiswa.'),
(2, 'Siapa saja yang bisa mendaftar kegiatan PPI Edufest 2021?', 'PPI Edufest 2021 bisa diikuti oleh pelajar/mahasiswa Indonesia tanpa terkecuali. Peserta diperbolehkan untuk mendaftar sesi education expo lainnya.'),
(3, 'Kapan waktu pelaksanaan PPI Edufest 2021?', 'Akan dimulai pada Bulan Februari 2021 hingga bulan Juni 2021'),
(4, 'Siapa saja Narasumber pada acara PPI Edufest 2021?', 'Dihadiri oleh Mahasiswa/i asal Indonesia yang sedang menempuh kuliah diluar negeri dengan beasiswa maupun non-beasiswa. Dengan menghadirkan narasumber dari 48 negara dari kawasan Asia, Amerika, Eropa, Timur-Tengah, Afrika.'),
(5, 'Metode apakah yang akan digunakan pada acara PPI Edufest 2021? - Part 1', 'PPI Edufest 2021 akan dilaksanakan secara daring via Zoom Meeting.'),
(6, 'Metode apakah yang akan digunakan pada acara PPI Edufest 2021? - Part 2', 'Acara ini menerapkan 15 menit penjelasan singkat tentang studi di negara tersebut di Main Room serta 55 menit untuk sesi konsultasi dan tanya jawab di Breakout Room sesuai dengan negara yang diminati.'),
(7, 'Apa keuntungan yang akan didapatkan oleh peserta?', 'Bertambahnya wawasan mengenai pendidikan di luar negeri, networking, pengalaman, dan e-sertifikat.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `id_wilayah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
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
-- Struktur dari tabel `speaker`
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
-- Dumping data untuk tabel `speaker`
--

INSERT INTO `speaker` (`id_speaker`, `nama_speaker`, `email_speaker`, `hp_speaker`, `img_speaker`, `ppi_speaker`, `lingkup_jurusan`, `tentang_speaker`, `id_event`, `asal_speaker`) VALUES
(1, 'Mila Septian Haryati', 'milaseptianharyati9@gmail.com', '+6285337212288', 'Mila Septian Haryati.jpg', 'PPI Malaysia', 'S2 - Educational Managament di Universitas Pendidikan Sultan Idris', 'Beasiswa Aktivis NTB', 1, NULL),
(2, 'Bintang Astiana', 'bintangastiana@gmail.com', '+6281369184384', 'Bintang Astiana.jpg', 'PPI Malaysia', 'S1 - Media and Communication di Albukhary International University', 'Albukhary Foundation dan Lembaga Beasiswa Baznas', 1, NULL),
(3, 'Annisa Wahidatul Asmi', 'annisawahidatulasmi16@yahoo.com', '085263855805', 'Annisa Wahidatul.jpg', 'PPI Malaysia', 'S3 - Pendidikan Matematika di Universitas Pendidikan sultan idris', 'Mandiri', 1, NULL),
(4, 'Jasmine Annisa Putri', 'jasmineannisa2002@gmail.com', '+6285264540881', '1613241589Jasmine_Annisaa.jpeg', 'PPI Singapore', 'Diploma in International Business di Singapore Institute of Management', 'Beasiswa SIM Global Education Diploma', 1, NULL),
(5, 'Primavera Desta Amelia Putri', 'primaveradesta@yahoo.com', '+6588811630', 'Primavera Desta.jpeg', 'PPI Singapore', 'Master of Science Integrated Sustainable Design di National University of Singapore', 'LPDP', 1, NULL),
(6, 'Indah Wahyu Puji Utami', 'indahwahyu.p.u@um.ac.id', '+6281230759821', 'Indah Wahyu.jpeg', 'PPI Singapore', 'Humanities and Social Studies Education di Nanyang Technological University', 'LPDP', 1, NULL),
(7, 'Gede Kreshna Wiryatama', 'Kreshnawirya@gmail.com', '+4917620319629', 'Gede Kreshna W.jpeg', 'PPI Jerman', 'S2 - Business Administration and Engineering di Beuth Hochschule fÃ¼r Technik Berlin', NULL, 2, NULL),
(8, 'Devi Christin Sampebulu', 'Vice.president@ppi-jerman.de', '+4917632556721', 'Devi Christin.jpeg', 'PPI Jerman', 'S1 - Medical Sciences di Justus-Liebig-University', NULL, 2, NULL),
(9, 'Titien Pratiwi Adnas', 'titienpratiwi95@gmail.com', '+6282394682437', 'Titien Pratiwi Adnas.jpeg', 'PPI Belanda', 'MSc Environmental Science di Wageningen University and Research', 'LPDP', 2, NULL),
(10, 'Atshiila Frayaska Harryadi', 'atshiila.frayaska@gmail.com', '+31627346301', 'Atshiila Frayaska Harryadi.jpeg', 'PPI Belanda', 'Bachelor in International Business Administration di Rotterdam School of Management, Erasmus University', 'Mandiri', 2, NULL),
(11, 'Nurul Iffat Wirusanti', 'nurul.wirusanti@gmail.com', '+31621330831', 'Nurul Iffat Wirusanti.jpeg', 'PPI Belanda', 'PhD in Global Health di University of Amsterdam', ' awardee OTS M.Sc in Molecular Medicine and Innovative Treatment RuG', 2, NULL),
(12, 'Immas Anjas Sasmita ningruh', 'immasredeon@gmail.com', '+6285240165258', 'Immas_Anjas-min.jpeg', 'KKMI Libya', 'S1 - Fakultas bahasa Arab di International Islamic Call College', 'Mandiri', 3, NULL),
(13, 'Hafizd Alharomain Lubis', 'lubishafizd17@gmail.com', '+201148775273', 'Hafizd_Alharomain.jpg', 'PPMI Mesir', 'S1 - Sejarah dan Peradaban Islam di Universitas Al Azhar', 'Mandiri', 3, NULL),
(14, 'Ahmad Nabil Nashiri', 'blank@gmail.com', '+20127135 0898', 'Ahmad Nabil.jpeg', 'PPMI Mesir', 'S1 - Pendidikan di Universitas Al Azhar', 'Al Azhar Scholarship 2018', 3, NULL),
(15, 'Agung Wicaksono', 'agung.wicaksono@soc.uir.ac.id', '+6285210847643', 'Agung Wicaksono.jpg', 'PPI Hongaria', 'PhD in Political Science di Corvinus University of Budapest', 'Stipendium Hungaricum Awardee', 6, NULL),
(16, 'Fachri Rizky Sitompul', 'Fachririzkysitompul@gmail.com', '+6282364415400', 'Fachri Rizky Sitompul.jpg', 'PPI Hongaria', 'S2 - Supply chain management di SzÃ©chenyi Istvan University', 'Stipendium Hungaricum Awardee', 6, NULL),
(17, ' Mazaya Raina Habibie', 'raihabs@gmail.com', '+628118012300', ' Mazaya Raina Habibie.jpg', 'PPI Hongaria', 'Bachelor in Dietetics di University of Pecs', 'Mandiri', 6, NULL),
(18, 'Yulia Fitria', 'ulifitri11@gmail.com', '081262969256', 'Yulia Fitria.jpg', 'PPI Tiongkok', 'S2 - Applied Psychology di Nanchang University ', 'Chinese Government Scholarship', 5, NULL),
(19, 'Laras Ayu Putriana', 'larasayuputriana@gmail.com', '+6281221808579', 'Laras Ayu Putriana.jpg', 'PPI Tiongkok', 'S1 - Mechanical Engineering di Harbin Engineering University ', 'Chinese Government Scholarship', 5, NULL),
(20, 'Nurul Aulia Rahma', 'auliarahma516@gmail.com', '082190042805', 'Nurul Aulia Rahma.jpg', 'PPI Tiongkok', 'S1 - MBBS di Changsha Medical University ', 'Mandiri', 5, NULL),
(21, 'Muhammad Dani SM Rabbani', 'danirabbani48@gmail.com', '082111687957', 'Muhammad Dani SM Rabbani.jpg', 'PPI Lebanon', 'S1 - Translation di Jinan University of Lebanon', 'Mandiri', 7, NULL),
(22, 'Mujtahid Samad Abbas', 'mujtahidabbas370@gmail.com', '+96181423781', 'Mujtahid Samad Abbas.jpg', 'PPI Lebanon', 'S1 - Islamic Law di Univeristy of Tripoli', 'Timur Tengah Kementerian Agama RI 2019 Ditjen Pendidikan Islam Awardee', 7, NULL),
(23, 'Muhammad Muslih', 'muslih@umm.ac.id', '085132478797', 'Muhammad Muslih.jpg', 'PPI Taiwan', 'S3 - Nursing di Taipei Medical University', 'TMU Type A Awardee', 5, NULL),
(24, 'Bayu Satria Wiratama', 'bayu.satria@ugm.ac.id', '08983658242', 'Bayu Satria Wiratama.jpg', 'PPI Taiwan', 'S3 - Injury Prevention and Control di Taipei Medical University ', 'MOST (Ministry of Science and Technology) Awardee', 5, NULL),
(25, 'Andam Sofi Astarina', 'andamsofiastarina20@gmail.com', '081381533203', 'Andam Sofi Astarina.jpg', 'PERMIRA (PPI Rusia)', 'S2 - Medical Physics of Radiation Therapy and Radiology di National Research Nuclear University MEPhI', 'Awardee Beasiswa Pemerintah Rusia', 6, NULL),
(26, 'Rizqina Ramadhaniah', 'rizqina89@gmail.com', '087855797764', 'Rizqina Ramadhaniah.jpg', 'PERMIRA (PPI Rusia)', 'S2 - Applied Linguistics di Tomsk State University', 'Awardee Open Doors Global Universities', 6, NULL),
(27, 'Jehansyah Fathzikry Isfahan', 'jjehansyah@gmail.com', '+79826283129', 'Jehansyah Fathzikry Isfahan.jpg', 'PERMIRA (PPI Rusia)', 'S2 - Business Informatics di Ural Federal University', 'Awardee Beasiswa Pemerintah Rusia', 6, NULL),
(28, 'M.Rinaldy Usni Pratama', 'aldikaze23@gmail.com', '+6289526103815', '1614344776M. Rinaldy.jpeg', 'HPMI Yordania', 'S2 - Bahasa dan Sastra Arab di Philadelphia University', 'Mandiri', 7, NULL),
(29, 'Yoga Waaly Hukama', 'waalyyoga@gmail.com', '+962779316188', '1614344788Yoga Waaly Hukama.jpeg', 'HPMI Yordania', 'S1 - Ushuluddin di University of Jordan', 'Mandiri', 7, NULL),
(30, ' Nabila Asad', 'nabila.asad@fe.up.pt', '+351933191849', '1615604992Nabila As_ad.jpg', 'PPI Portugal', 'S3 - Industrial Engineering and Management di University of Porto', 'Marie SkÅ‚odowska-Curie Actions (MSCA) & Foundation of Science and Technology, Portugal (FCT)', 9, NULL),
(31, 'Gusta Ventura Purba', 'gustapurba@gmail.com', '+6281321953022', 'Gusta Ventura Purba.jpg', 'PPI Portugal', 'S2 - Engineering and Management & Master of Energy Storage di Instituto Superior TÃ©cnico & Aalto University ', 'Mandiri', 9, NULL),
(32, 'Reza Hargiyanto ', 'Hargiyantoazer@gmail.com', '087800130463', '1615604969Reza Hargiyanto.jpg', 'PPI Spanyol', 'S2 - Mechanical Engineering di Universitat Rovira i Virgili', 'Research Grants - CREVER', 9, NULL),
(33, 'Dama Qoriy Arjanto', 'Damaqoriy@gmail.com', '085640494547', '1615604955Dama Qoriy Arjanto.jpg', 'PPI Spanyol', 'S2 - Quaternary archaeology and human evolution di Universitat Rovira i Virgili', 'ERASMUS', 9, NULL),
(34, 'Husein Mauladdawilah', 'mauladdawilah@gmail.com', '+34623337245', 'Husein Mauladdawilah.jpg', 'PPI Spanyol', 'S3 - Renewable energy di Universidad de Granada', 'Mandiri', 9, NULL),
(35, 'Athifah Utami', 'athifah.utami@outlook.com', '+34671361071', 'Athifah Utami.jpg', 'PPI Portugal', ' S2 - Play, Education, Toys, and Languages di Universide de CÃ³rdoba (Spain) , Instituto PolitÃ©cnico de Lisboa (Portugal), dan Marmara University (Turkey)', 'Erasmus Mundus Joint Master Degree', 9, NULL),
(36, 'Juliana Pandiangan', 'Juliana.pandiangan@gmail.com', '+63916436937', '1615610660Juliana Pandiangan.jpg', 'PPI Filipina', 'S2 - Akutansi di De La Salle University - Manila', 'Mandiri', 8, NULL),
(37, 'Adriyan Fachri Buana', 'Adriyanbroy@gmail.com', '+639561595225', '1615610671Adriyan Fachri Buana.jpg', 'PPI Filipina', 'S1 - Development Studies di University of the Philippines Manila', 'Mandiri', 8, NULL),
(38, 'Syahril Rahmat', 'syahrilrahmat22@gmail.com', '082169292329', 'Syahril Rahmat.jpg', 'PERMITHA - PPI Thailand', 'S2 - Civil Engineering di SIIT Thammasat University', 'Excellent Foreign Student', 8, NULL),
(39, 'Aditya Nugroho', 'aditnuho@outlook.com', '08997026069', 'Aditya Nugroho.jpg', 'PERMITHA - PPI Thailand', 'S1 Teknik Kimia di KMUTT', 'KISP', 8, NULL),
(40, 'Mochamad Solehudin', 'Solehudin.chemist@gmail.com', '081212738096', 'Mochamad Solehudin.jpg', 'PERMITHA - PPI Thailand', 'S3 - Applied Chemistry di King Mongkuts Institute of Technology Ladkrabang', 'KMITL Doctoral Scholarship', 8, NULL),
(41, 'Laila Rahmah, S.Si', 'lailarahmah8@gmail.com', '+6281359170518', 'Laila Rahmah.jpg', 'IPI Iran', 'S1 - Kedokteran (Doctor of Medicine, M.D) di Tehran University of Medical Sciences', 'Beasiswa GSIA Ministry of Health, Iran', 10, NULL),
(42, 'Muhammad Zhafran Fadlil', 'Zafranfadlil98@gmail.com', '+6285710407810', 'Muhammad Zhafran Fadli.jpg', 'IPI Iran', 'S1 - Business Management di Ferdowsi University of Mashhad ', 'Mandiri', 10, NULL),
(43, 'Muhammad Ridhan Al-Hafidz', 'ridhanalhafidz050500@gmail.com', '+923455722200', 'Muhammad Ridhan Al-Hafidz.jpg', 'PPMI Pakistan', 'S1 - BS. Islamic Studies di International Islamic University of Islamabad', 'Mandiri', 10, NULL),
(44, 'Ahmad Suryadi, L', 'beyazahmad30@gmail.com', '+60147239028', 'Ahmad Suryadi L.jpg', 'PPMI Pakistan', 'S2 - MS. Hadist & It&#x27;s Science di International Islamic University of Islamabad', 'Mandiri', 10, NULL),
(45, 'Andhika Febri Suwantoro', 'ppiromania911@gmail.com', '+40733456298 ', '1616568322Andhika Febri Suwantoro_.jpg', 'PPI Rumania', 'S2 - Komunikasi Internasional di Babes-Bolyai university of Cluj-Napoca ', 'Mandiri', 12, NULL),
(46, 'Cintami Sunjana', 'tami_sunjana@yahoo.com', '+40 720 887 234', 'Cintami Sunjana.jpg', 'PPI Rumania', 'S1 - Business administration english section di Bucharest university of economic studies', 'Mandiri', 12, NULL),
(47, 'Muhammad Fatih Avicena Lasmana', 'avicenafatih00@gmail.com', '+40 758 696 589', 'Muhammad Fatih Avicena Lasmana_.jpg', 'PPI Rumania', 'S1 - Hubungan internasional di University of Oradea', 'Mandiri', 12, NULL),
(48, 'Hartono Tanambell', 'hartono.tanambell@gmail.com', '+6281330349365', 'Hartono Tanambell.jpg', 'PPI Denmark', 'S3 - Food Science di Aarhus University', 'Fellowship Scholarship', 13, NULL),
(49, 'Reza Arkan', 'rezaarkan@gmail.com', '+6281804204058', 'Reza Arkan.jpg', 'PPI Denmark', 'S2 - Digital Communication Leadership di Aalborg University Copenhagen', 'Erasmus', 13, NULL),
(50, 'Berlian Awlya Pratiwi', 'berlianpratiwi07@gmail.com', '+6289649350110', 'Berlian Awlya Pratiwi.jpg', 'PPI Denmark', 'S2 - Environmental and Resource Management di University of Southern Denmark', 'Danish Government Scholarship', 13, NULL),
(51, 'Aditya Iqbal Bagaskara', 'bagaskaraiqbal7a@gmail.com', '+37253950073', 'Aditya Iqbal Bagaskara.jpg', 'PPI Estonia', 'S1 - Cybersecurity Engineering di Tallinn University of Technology ', 'Mandiri', 13, NULL),
(52, 'Handy Kurniawan', 'Handy.kurniawan@ut.ee', '+372 5824 3586', 'Handy Kurniawan.jpg', 'PPI Estonia', 'S2 - Computer Science di University of Tartu', 'Mandiri', 13, NULL),
(53, 'Harun Ardiansyah', 'harun@umich.edu', '7342393250', 'Harun Ardiansyah.jpg', 'PERMIAS (Amerika Serikat)', 'S2 - Nuclear Engineering di University of Michigan ', 'LPDP', 11, NULL),
(54, 'Fira Fatmasiefa', 'firasiefa_@berkeley.edu', '+62811602141', 'Fira Fatmasiefa.jpg', 'PERMIAS (Amerika Serikat)', 'S1 - Astrophysics di UC Berkeley', 'Mandiri', 11, NULL),
(55, 'Nikmatul Azizah', 'aziznikmatul9@gmail.com', '+6285729541301', 'Nikmatul Azizah.jpg', 'PPI Belgia', 'S2 - Nematology di Ghent University', 'VLIR-UOS', 12, NULL),
(56, 'Kevin Cahyadi Untoro', 'kevin_untoro@yahoo.com', '+6289672732701', 'Kevin Cahyadi Untoro.jpg', 'PPI Belgia', 'S2 - Master of Food Technology di Ghent University - KU Leuven', 'Mandiri', 12, NULL),
(57, 'William Nathaniel Jan Rotty', 'william.n.j.rotty@gmail.com', '+32456148534', 'William Nathaniel Jan Rotty.jpg', 'PPI Belgia', 'Bachelor of Engineering Technology di KU Leuven', 'Mandiri', 12, NULL),
(58, 'Raphaela Widjaja', 'widjajaraphaela@gmail.com', '+1 236-777-5819', 'Raphaela Widjaja.jpg', 'PERMIKA (Kanada)', 'S1 - Advertising and Marketing Communications Management di Algonquin College - Ottawa Campus', 'Mandiri', 11, NULL),
(59, 'Tri Handoko', 'tri.handoko@outlook.co.id', '+6282113113617', 'Tri Handoko.jpg', 'PERMIKA (Kanada)', 'S2 - Adult Education and Community Development di University of Toronto', 'LPDP', 11, NULL),
(60, 'Anggy Eka Pratiwi', 'anggyekap@gmail.com', '(+91) 77378 30522', 'anggy.png', 'PPI India', 'S3 - Computer Science and Engineering di Indian Institute of Technology Jodhpur (IIT Jodhpur)', 'ASEAN Fellowship Program ', 14, NULL),
(61, 'Ayu Andriyaningsih M.A (English)', 'andriyaningsihayu@gmail.com', '(+91)  77549 14090', 'ayu.png', 'PPI India', 'M.A (English) di Lucknow University', 'Beasiswa Indian Council for Cultural Relations (ICCR)', 14, NULL),
(62, 'Fikri', 'fikrfikri0019@gmail.com', '(+91) 89237 30914', 'fikri.jpg', 'PPI India', 'B.A Islamic Studies di Aligarh Muslim University', 'Mandiri', 14, NULL),
(63, 'Sarah Ulfa Anwar', 'sarahulfaa@gmail.com', '+62 813 1721 6798', 'sarah.jpeg', 'PPI Bangladesh', 'S2 - Master of Public Health di James P Grant School of Public Health BRAC University', 'Beasiswa WHO TDR Postgraduate BRAC University', 14, NULL),
(64, 'Noorhaliza Putri Fadhila', 'noorhaliza.fadhila@auw.edu.bd', '+62 821 2891 0348', 'haliza.jpeg', 'PPI Bangladesh', 'S1 - Politics Philosophy & Economics di Asian University for Women', 'AUW Scholarship dan Beasiswa DISDIK PEMPROV JABAR', 14, NULL),
(65, 'Surya Gentha Akmal, M.Sc.', 'akmal@af.czu.cz', '+420733784704', 'surya.jpg', 'PPI Ceko', 'S3 - Applied Zoology, Department of Zoology and Fisheries di Czech University of Life Sciences Prague', 'ÄŒZU Doctoral Scholarship', 15, NULL),
(66, 'Reza Syahputra', 'syahputrareza@gmail.com', '087883917464', 'reza.jpg', 'PPI Ceko', 'S3 - Geology di Charles University', 'Charles University Scholarship', 15, NULL),
(67, 'Nugraheni Yun Mahasti Tasmuri', 'nugraheniyunmahasti@gmail.com', '+430733429', 'nugraheni.jpg', 'PPI Ceko', 'S1 - Faculty of Fine Arts di Charles University', 'Mandiri', 15, NULL),
(68, 'Altifani Rizky Hayyu', 'tifanirizky@gmail.com', '+48690394055', 'altifani.jpeg', 'PPI Polandia', 'S3 - Fisika di Jagiellonian University', 'Doctoral School Scholarship', 15, NULL),
(69, 'Nafila Syifa Haura', 'nsyifa4444@gmail.com', '+6285603359093', 'nafila.jpeg', 'PPI Polandia', 'S1 - International Relation and Areas Study di Jagiellonian University', 'Mandiri', 15, NULL),
(70, 'Asyraf Muntazhar', 'muntazharasyraf99@gmail.com', '+212631037930', '1617880465asyraf-min.jpg', 'PPI Maroko', 'S1 - Studi Islam di UniversitÃ© Sidi Mohamed ben Abdellah - Fes', 'Beasiswa Kerjasama AMCI-Diktis Kemenag RI', 16, NULL),
(71, 'Ahmad Ihabul Fathi', 'ihabfathi21@gmail.com', '+212632610040', '1617880332ihab.jpg', 'PPI Maroko', 'S1 - Studi Islam di UniversitÃ© Mohammed V - Rabat', 'Beasiswa Kerjasama AMCI-Diktis Kemenag RI', 16, NULL),
(72, 'Muhammad Yasir', 'muhammadyasir446@gmail.com', '+6282162322947', 'yasir.jpg', 'PPI Tunisia', 'S2 - Peradaban Islam dan Dialog Kebudayaan di Ez-Zitouna University', 'Mandiri', 16, NULL),
(73, 'Ilma Silmi Nufus', 'ilmasilmi0612@gmail.com', '+21655927457', 'ilma.jpg', 'PPI Tunisia', 'S1 - Ulumul Qur&#39;an Wal Hadist di Ez-Zitouna University', 'Mandiri', 16, NULL),
(74, 'Muhammad Setyawan Wirapraja', 'wirapraja78@gmail.com', '+905523654897', 'Muhammad Setyawan Wirapraja.jpg', 'PPI Turki', 'S1 - International Relations di  SÃ¼leyman Demirel Ãœniversitesi', 'Beasiswa TÃ¼rkiye BurslarÄ± (YTB)', 18, NULL),
(75, 'Muhammad Irfan', 'muhirfanfaizal@gmail.com', '+6282189444317', 'Muhammad Irfan.png', 'PPI Turki', 'S2 - Urban & Regional Planning di Akdeniz Ãœniversitesi', 'Beasiswa TÃ¼rkiye BurslarÄ± (YTB)', 18, NULL),
(76, 'Muhammad Hafidz Ramadhani', 'mahrfidz25@gmail.com', '+905449678120', 'Muhammad Hafidz Ramadhani.jpg', 'PPI Turki', 'S1 - Bussiness Administration di BandÄ±rma Onyedi EylÃ¼l Ãœniversitesi', 'Mandiri', 18, NULL),
(77, 'Kifah Gibraltar Bey Fananie', 'pppiazerbaijan@gmail.com', '994 515700798', 'Kifah Gibraltar Bey Fananie.jpg', 'P3I Azerbaijan', 'S1 - International Relation di ADA University', 'Mandiri', 18, NULL),
(78, 'Adib kurniawan', 'PPPIAZARBAIJAN@GMAIL.COM', '60 175521127', 'Adib Kurniawan.jpg', 'P3I Azerbaijan', 'S3 - Literature di Khazar University', 'KHAZAR SCHOLARSHIP', 18, NULL),
(79, 'Muhammad Topan Nasrun', 'topandlw67@gmail.com', '+967774538373', '_Muhammad Topan Nasrun.jpg', 'PPI Yaman', 'S1 - Syar&#39;iah dan Hukum di Universitas Al-Ahgaf', 'Beasiswa Parsial', 19, NULL),
(80, 'Hasan Rusydi Tanthawi', 'hasanrusydi21@gmail.com', '+967774903748', 'Hasan Rusydi Tanthawi.jpg', 'PPI Yaman', 'S1 - Syariah di Universitas Al-Ahgaf', 'Beasiswa Parsial', 19, NULL),
(81, 'Mustaqim Abdillah', 'mustaqimabd22@gmail.com', '+967739160261', 'Mustaqim Abdillah.jpg', 'PPI Yaman', 'S1 - Syari&#39;ah  di Universitas Al-Ahgaf', 'Beasiswa Parsial', 19, NULL),
(82, 'Faishal Abdul Aziz', 'faishalabdulaziz.faa@gmail.com', '+96879403762', 'Faishal Abdul Aziz.jpg', 'PPI Oman', 'S1 - Mechanical Engineering di University of Technology & Applied Sciences Sohar', 'Omani Cultural and Scientific Cooperation Scholarship Program', 19, NULL),
(83, 'Fuad Al Fikri', 'mafengz45@gmail.com', '+96894431235', 'Fuad Al Fikri.jpg', 'PPI Oman', 'S1 - Ushul Fiqh di College of Sharia Sciences', 'Jalur undangan', 19, NULL),
(84, 'Yudi Ariesta Chandra', 'ya.chandra@yahoo.co.id', '+81 80-4035-8021', 'Yudi Ariesta Chandra_.jpg', 'PPI Jepang', 'S3 - Disaster Nursing di University of Kochi', 'Rotary Yoneyama Memorial Scholarship', 17, NULL),
(85, 'Girvan Bhagaskara', 'girvan.bagaskara@gmail.com', '+81 70-4062-4227', 'Girvan Bhagaskara.jpg', 'PPI Jepang', 'S1 - Business Economics di Tokyo International University', 'Beasiswa Jasso for privately-financed international student', 17, NULL),
(86, 'Rannissa Puspita Jayanti', 'rannissapuspita15@gmail.com', '+8210-6751-5542', 'Rannissa Puspita Jayanti.jpg', 'PERPIKA', 'S2 - Clinical Pharmacology di Inje University, College of Medicine', 'Beasiswa Professor through Project ', 17, NULL),
(87, 'Malikah Najibah', 'malikahnajibah@gmail.com', '+82 10 8652 1728', 'Malikah Najibah.jpg', 'PERPIKA', 'S2 - Energy Engineering di Korea Institute of Science and Technology - University of Science and Technology (KIST-UST)', '1. KIST-UST (Research Scholarship) 2. Daewoong Global Scholarship', 17, NULL),
(88, 'Dimas Harris Sean Keefe', 'Dimasharris23@gmail.com', '+821021918799', 'Dimas Harris Sean Keefe.jpg', 'PERPIKA', 'S3 - International Trade and Commerce di Pusan National University', 'BK21+, PNU Merit Scholarship dan 5 beasiswa lainnya.', 17, NULL),
(89, 'Lilik Astari', 'lastari@student.unimelb.edu.au', '+6282122105141', 'Lilik Astari.jpg', 'PPI Australia', 'PhD in Ecosystem and Forest Science di University of Melbourne', 'Australia Awards Scholarship Awardee', 20, NULL),
(90, 'Adhitya Perdana', 'adhitya.perdana@anu.edu.au', '+61450903544', 'Adhitya Perdana.jpg', 'PPI Australia', 'Master of Public Policy di the Australian National University', 'Australia Awards Scholarship', 20, NULL),
(91, 'Stephany Mutiara Pradipta', 'blank@gmail.com', '+61450707361', 'Stephany Mutiara Pradipta.jpg', 'PPI Australia', 'Bachelor of Commerce (Major Finance) di the Australian National university', 'Mandiri', 20, NULL),
(92, 'Iqbal Fachrurrazie Surahman', 'nita.handastya@gmail.com', '+46720228175', 'Iqbal Fachrurrazie Surahman.jpg', 'PPI Swedia', 'S2 - Transport and Geoinformation Technology di KTH Royal Institute of Technology', 'Mandiri', 21, NULL),
(93, 'Gumilang Almas Pratama Satria', 'gumilangalmas@gmail.com', '+6281931714470', 'Gumilang Almas Pratama Satria.jpg', 'PPI Swedia', 'Master of Bioentrepreneurship di Karolinska Institutet', 'LPDP Awardee', 21, NULL),
(94, 'Nurul Tri Wirastiningtyas', 'Nurultriw.tyas@gmail.com', '+46764013139', 'Nurul Tri Wirastiningtyas.jpg', 'PPI Swedia', 'S2 - International and Comparative Education di Stockholm University', 'Swedish Institute Scholarship Awardee', 21, NULL),
(95, 'Imam Fitri Rahmadi', 'imamrahmadi@unpam.ac.id', '+4368184681448', 'Imam Fitri Rahmadi-min.jpg', 'PPI Austria', 'S3 - STEM Education di Johannes Kepler Universitat Linz', 'Indonesia - Austria Scholarship Programme', 21, NULL),
(96, 'Pikal Annisa Gondokusumo', 'ppiaustria@gmail.com', '+43 660 3879143', '1620995126Pikal Annisa Gondokusumo1.jpg', 'PPI Austria', 'S1 - Tourism, Hotel Management and Operations di MODUL University Vienna', 'Mandiri', 21, NULL),
(97, 'Ali Anshor', 'Alianshorh@gmail.com', '+6281211116949', 'Ali Anshor.jpg', 'PPMI Arab Saudi', 'S1 - Hadits & Pendidikan Islam di Al Qasimia University', 'Beasiswa Pemerintah Arab Saudi', 22, NULL),
(98, 'Mulya Muhammad Nur', 'mulyamnur@gmail.com', '+6289693848944', 'Mulya Muhammad Nur.jpg', 'PPMI Arab Saudi', 'S2 - Chemistry di king fahd university of petroleum and minerals (KFUPM)', 'Beasiswa Pemerintah Arab Saudi ', 22, NULL),
(99, 'Muhammad Mufid', 'mufid1410@gmail.com', '+6281392320101', 'Muhammad Mufid.jpg', 'PPI Sudan', 'S1 - Islamic Studies di International University of Africa, Sudan', 'Mandiri', 22, NULL),
(100, 'Mala Himmah Ulya', 'mallahimma79@gmail.com', '+249 11 346 7266', 'Mala Himmah Ulya.jpg', 'PPI Sudan', 'S1 - Theology and Islamic Thought di International University of Africa, Sudan', 'Beasiswa dari MoU Pesantren Mathaliul Falah', 22, NULL),
(101, 'Zikra Juninawan', 'juninawan24@gmail.com', '+249 99 826 9130', 'Zikra Juninawan.jpg', 'PPI Sudan', 'S2 - Pendidikan Bahasa Arab untuk non-Arab di Khartoum Internasional Insitute for Arabic language Sudan', 'Beasiswa Kampus (Khartoum Internasional Insitute for Arabic language Sudan)', 22, NULL),
(102, 'Jesse Febrina', 'jessefebrina112@gmail.com', 'â€ª+62Â 812â€‘8746â€‘7678â€¬', 'Jesse Febrina-min.jpg', 'PPI New Zealand', 'S1 - Biochemistry di University of Canterbury', 'International UC First Year Scholarship Awardee', 20, NULL),
(103, 'Yosep Irfande', 'irfandeyosep@gmail.com', '0274616301', 'Yosep Irfande.jpg', 'PPI New Zealand', 'Bachelor of Environment and Society di Lincoln University', 'Beasiswa afirmasi luar negeri putra-putri Papua', 20, NULL),
(104, 'Nita Handastya', 'nita.handastya@gmail.com', '+39 3489244663', 'Nita Handastya.jpg', 'PPI Italia', 'S3 - Economics di UniversitÃ  Degli Studi di Siena', 'PEGASO di Regione Toscana Scholarsip Awardee', 24, NULL),
(105, 'Della Christina Napitu', 'dellanapitu@gmail.com', '+39 3285859627', 'Della Christina Napitu.jpg', 'PPI Italia', 'S1 - Management di UniversitÃ  di Bologna', 'Penerima Beasiswa Regional ER-GO', 24, NULL),
(106, 'Endar Purnawan', 'epurnawan2@gmail.com', '+39 3483404901', 'Endar Purnawan.jpg', 'PPI Italia', 'S3 - Agriculture, Food, and Environment di UniversitÃ  di Pisa', 'LPDP Awardee', 24, NULL),
(107, 'Ridha Mujahidah Fajri Islami', 'ridhamujahidahfajri@gmail.com', '+971507901642', 'Ridha_Mujahidah_Fajri_Islami.jpg', 'PPI United Arab Emirates', 'S1 - Sharia and Islamic Studies di Al Qasimia University', 'Al Qasimia University Scholarship Awardee', 25, NULL),
(108, 'Dewi Salindri', 'dewisalindri05@gmail.com', '+971585174742', 'Dewi Salindri.jpg', 'PPI United Arab Emirates', 'Master of Real Estate Development di Heriot-Watt University Dubai', 'Mandiri', 25, NULL),
(109, 'Hazel Abidio Tjahyadi', 'dio.hazel85@gmail.com', '+447341950648', 'Hazel Abidio Tjahyadi.jpg', 'PPI United Kingdom', 'BSc. in Mathematics with Finance di University of Manchester', 'Mandiri', 23, NULL),
(110, 'Dhany Malau', 'ramdaniedo17@gmail.com', '+447544006036', 'Dhany Malau.jpg', 'PPI United Kingdom', 'S3 - Electronic and Electrical Engineering di University College London (UCL)', 'LPDP Awardee', 23, NULL),
(111, 'Evelyn Mustopo', 'mustopoevelyn@gmail.com', '+33 6 11 67 75 07', 'Evelyn Mustopo.jpg', 'PPI Prancis', 'S1 - Management di UniversitÃ© de Montpellier', 'Mandiri', 24, NULL),
(112, 'Irfai Afham', 'irfaiafham@gmail.com', '0758625649', 'Irfai Afham.jpg', 'PPI Prancis', 'S2 - Politik transnational di UniversitÃ© Paris 8', 'ISDB Scholarship Awardee', 24, NULL),
(113, 'Findley Maringka', 'findleymaringka@gmail.com', '+353 83 392 2317', 'Findley Maringka.jpg', 'PPI Irlandia', 'S1 - Digital Marketing & Public Relations di Dundalk Institute of Technology', 'Partial Scholarship (Accommodation and Academic Merit)', 23, NULL),
(114, 'Aryq Suryo Wicaksono', 'ariq.suryowicaksono@gmail.com', '+353 89 490 3027', 'Aryq Suryo Wicaksono.jpg', 'PPI Irlandia', 'S2 - Food Business and Innovation di University College Cork', 'Mandiri', 23, NULL),
(115, 'Jefri Sholachudin Nasrulloh ', 'deganjombang79@gmail.com', '+963 935691523', 'Jefri Sholachudin Nasrulloh.jpg', 'PPI Suriah', 'S1 - Ushuluddin di Univ. Bilaad alSham', 'Univ. Bilaad alSham Foundation Awardee', 25, NULL),
(116, 'Nurul Kausar', 'nrlkautsar@gmail.com', '+963 997507132', 'Nurul Kausar.jpg', 'PPI Suriah', 'S1 - Syari&#39ah wa alQaanuun di Univ. Bilaad alSham ', 'Bilaad alSham Foundation Awardee', 25, NULL),
(117, 'Dr. H. Mochamad Ridwan Kamil, S.T., M.U.D', 'test@gmail.com', '00000000001', '1623674995RK.jpg', NULL, 'Narasumber Utama', 'Sesi 1', 26, NULL),
(118, 'Dr. Dino Patti Djalal', 'test@gmail.com', '00000000001', 'Dr. Dino Patti Djalal - Speaker.jpg', NULL, 'Main Speaker', 'Sesi 1', 26, NULL),
(119, 'Berklee Indonesian Community', 'test@gmail.com', '00000000001', '1623675327Berklee-Indonesian-Community-min.jpeg', NULL, 'Musical Performance', 'Sesi 1', 26, NULL),
(120, 'Dr. Laksana Tri Handoko, M.Sc ', 'test@gmail.com', '00000000001', '1623675986LTH.jpg', NULL, 'Main Speaker', 'Sesi 1', 26, NULL),
(121, 'Gresika Bunga ', 'test@gmail.com', '00000000001', 'Gresika Bunga Sylvana - Moderator.jpg', NULL, 'Moderator', 'Sesi 1', 26, NULL),
(122, 'Bianca Kartika', 'test@gmail.com', '00000000001', 'Bianca Kartika - Speaker.jpg', NULL, 'Main Speaker', 'Sesi 2', 26, NULL),
(123, 'Billy Mambrasar', 'test@gmail.com', '00000000001', 'Billy Mambrasar - Narasumber.jpg', NULL, 'Narasumber Utama', 'Sesi 2', 26, NULL),
(124, 'Parama Pradana Suteja', 'test@gmail.com', '00000000001', 'Parama Pradana Suteja - Narasumber.jpeg', NULL, 'Narasumber Utama', 'Sesi 2', 26, NULL),
(125, 'Nadin Amizah ', 'test@gmail.com', '00000000001', 'Nadin Amizah - Musical Performance.jpg', NULL, 'Musical Performance', 'Sesi 2', 26, NULL),
(126, 'Zhafira Aqyla ', 'test@gmail.com', '00000000001', 'Zhafira Aqyla - Moderator.jpg', NULL, 'Moderator', 'Sesi 2', 26, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(255) NOT NULL,
  `nama_wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wilayah`
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
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen_event`,`email_peserta`) USING BTREE,
  ADD KEY `domisili_fk` (`domisili_peserta`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `wilayah_fk` (`wilayah_event`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`),
  ADD KEY `prov_wil_fk` (`id_wilayah`);

--
-- Indeks untuk tabel `speaker`
--
ALTER TABLE `speaker`
  ADD PRIMARY KEY (`id_speaker`),
  ADD KEY `speaker_event_fk` (`id_event`),
  ADD KEY `asal_speaker_fk` (`asal_speaker`);

--
-- Indeks untuk tabel `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `speaker`
--
ALTER TABLE `speaker`
  MODIFY `id_speaker` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `domisili_fk` FOREIGN KEY (`domisili_peserta`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `id_event_fk` FOREIGN KEY (`id_absen_event`) REFERENCES `event` (`id_event`);

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `wilayah_fk` FOREIGN KEY (`wilayah_event`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `prov_wil_fk` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Ketidakleluasaan untuk tabel `speaker`
--
ALTER TABLE `speaker`
  ADD CONSTRAINT `asal_speaker_fk` FOREIGN KEY (`asal_speaker`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `speaker_event_fk` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
