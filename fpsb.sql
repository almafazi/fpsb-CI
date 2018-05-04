-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2018 at 06:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `update_at`) VALUES
(19, 'aisyah', '$2y$10$Tbm12IIiEPGj.Ulfl1JzGOC/AVgiP970GnQDQLa34hFy/FvdzRuoS', '2018-04-27 17:57:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` mediumtext NOT NULL,
  `slug` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-1', 'publish', '2018-05-04 06:43:43', '2018-05-04 06:43:43'),
(16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-16', 'publish', '2018-05-04 06:43:59', '2018-05-04 06:43:59'),
(17, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-17', 'publish', '2018-05-04 06:44:20', '2018-05-04 06:44:20'),
(18, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-18', 'hold', '2018-05-04 06:44:29', '2018-05-04 06:44:29'),
(19, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-19', 'publish', '2018-05-04 08:52:44', '2018-05-04 08:52:44'),
(20, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-20', 'publish', '2018-05-04 08:52:55', '2018-05-04 08:52:55'),
(21, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-21', 'publish', '2018-05-04 08:57:20', '2018-05-04 08:57:20'),
(22, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\n', 'lorem-ipsum-is-simply-dummy-text-of-the-printing-and-typesetting-industry-22', 'publish', '2018-05-04 08:57:27', '2018-05-04 08:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` longtext NOT NULL,
  `role` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `judul`, `konten`, `role`, `created_at`, `updated_at`) VALUES
(1, 'teserd', '<p>teser</p>\n', 'visi_misi', '2018-04-29 09:01:41', '2018-05-04 09:27:30'),
(2, 'Profil', '<h2>Ringkasan Program Kerja LEM FPSB periode 2017-2018<br />\n&nbsp;</h2>\n\n<p><br />\n1. DEPARTEMEN JARINGAN MEDIA DAN INFORMASI<br />\nSecara umum bergerak dalam media strategy dan Content creative guna menyediakan dan menciptakan wajah lembaga fakultas yang lebih fresh untuk membranding lembaga sebagai sarana mahasiswa<br />\n&nbsp;<br />\n2. DEPARTEMEN SOSIAL DAN LINGKUNGAN<br />\nSosling merupakan sebuah departemen baru dalam kepengurusan tahun ini, sesuai dengan tagline tahun ini yaitu #BersatuUntukSemesta , yang menyuguhkan beberapa kegiatan sosial dan lingkungan , serta sosling juga membantu masyarakat sekitar dalam kegiatan bencana alam dan yang lainya.<br />\n&nbsp;<br />\n3.DEPARTEMEN MINAT BAKAT<br />\nUntuk periode ini departemen minat dan bakat, tetap terus berusaha untuk mengulik minat dan bakat dari mahasiswa FPSB dengan mengadakan survei dan membuat UKM baru yang harapanyan dapat menjadi wadah dari mahasiswa FPSB<br />\n&nbsp;<br />\n4. DEPARTEMEN KAJIAN DAN DAKWAH<br />\nSesuai dengan namanya, Kajian dan dakwah bergerak dalam mengkaji isu kontemprorer serta menjadikan sarana dakwah sebagai internalisasi nilai-nilai islam kepada mahasiswa FPSB<br />\n&nbsp;<br />\n5. DEPARTEMEN PENGEMBANGAN ORGANISASI<br />\nPengembagan Organisasi merupakan departemen yang bertugas dalam internal pengurus Lembaga yang dimana menciptakan harmonisasi dan sinergitas dengan HMJ, dan dekanat yang berada di lingkup FPSB.</p>\n\n<p>&nbsp;</p>\n', 'profil', '2018-04-29 09:01:41', '2018-04-30 10:49:53'),
(3, 'tesed', '<p>tese</p>\n', 'home_visi', '2018-05-04 09:23:53', '2018-05-04 09:27:20'),
(4, 'tes', 'tes', 'home_misi', '2018-05-04 09:23:53', '2018-05-04 09:24:15'),
(5, 'tess', '<p>tes</p>\n', 'home_grand_theme', '2018-05-04 09:23:53', '2018-05-04 09:33:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
