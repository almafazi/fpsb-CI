-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2018 at 01:45 PM
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
(19, 'admin', '$2y$10$gzZ6VYjhPMYE8DvhHLWFBu1zOGHNC1cHYf6UPkKJNgZchg0xMD1Uu', '2018-04-27 17:57:12', NULL);

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
(1, 'Judul', '<h1>Visi Lem 2017-2018</h1>\n\n<p>&nbsp;</p>\n\n<p>&ldquo;Optimalisasi peran dan fungsi Lembaga Eksekutif Mahasiswa Fakultas Psikologi dan Ilmu Sosial Budaya Universitas Islam Indonesia sebagai upaya membentuk karakter mahasiswa insan ulil albab yang mampu memberikan rahmat bagi seluruh alam semesta&rdquo;.</p>\n\n<p>&nbsp;</p>\n\n<h1>Misi Lem 2017-2018</h1>\n\n<p>&nbsp;</p>\n\n<p>1. Mengoptimalkan peran dan fungsi lembaga kemahasiswaan.<br />\n2. Internalisasi nilai-nilai islam pada Mahasiswa FPSB UII dalam berorganisasi.<br />\n3. Mewujudkan LEM FPSB UII sebagai wadah organisasi yang harmonis, humanis, dan progresif.<br />\n4. Mempererat jalinan silaturahmi dan koordinasi antar Lembaga kemahasiswaan di lingkungan Fakultas Psikologi dan Ilmu Sosial Budaya Universitas Islam Indonesia guna menciptakan iklim yang harmonis di antara lembaga.<br />\n5. Meningkatkan sistem pengelolaan sumber daya manusia dalam Lembaga Eksekutif Mahasiswa Fakultas Psikologi dan Ilmu Sosial Budaya Universitas Islam Indonesia.<br />\n6. Mengembangkan pergerakan mahasiswa FPSB UII dibidang sosial dan lingkungan.<br />\n7. Penguatan bergaining posisition Lembaga Eksekutif Mahasiswa FPSB UII terhadap Dekanat FPSB UII<br />\n8. Memperteguh eksistensi Lembaga Eksekutif Mahasiswa Fakultas Psikologi dan Ilmu Sosial Budaya Universitas Islam Indonesia dengan memperluas jaringan dan kerjasama dengan pihak luar.</p>\n\n<p>&nbsp;</p>\n', 'visi_misi', '2018-04-29 09:01:41', '2018-04-29 11:04:09'),
(2, 'Judul', '<h1>Ringkasan Program Kerja LEM FPSB periode 2017-2018</h1>\n\n<p>&nbsp;</p>\n\n<p>1. DEPARTEMEN JARINGAN MEDIA DAN INFORMASI<br />\nSecara umum bergerak dalam media strategy dan Content creative guna menyediakan dan menciptakan wajah lembaga fakultas yang lebih fresh untuk membranding lembaga sebagai sarana mahasiswa<br />\n<br />\n2. DEPARTEMEN SOSIAL DAN LINGKUNGAN<br />\nSosling merupakan sebuah departemen baru dalam kepengurusan tahun ini, sesuai dengan tagline tahun ini yaitu #BersatuUntukSemesta , yang menyuguhkan beberapa kegiatan sosial dan lingkungan , serta sosling juga membantu masyarakat sekitar dalam kegiatan bencana alam dan yang lainya.<br />\n<br />\n3. DEPARTEMEN MINAT BAKAT<br />\nUntuk periode ini departemen minat dan bakat, tetap terus berusaha untuk mengulik minat dan bakat dari mahasiswa FPSB dengan mengadakan survei dan membuat UKM baru yang harapanyan dapat menjadi wadah dari mahasiswa FPSB<br />\n<br />\n4. DEPARTEMEN KAJIAN DAN DAKWAH<br />\nSesuai dengan namanya, Kajian dan dakwah bergerak dalam mengkaji isu kontemprorer serta menjadikan sarana dakwah sebagai internalisasi nilai-nilai islam kepada mahasiswa FPSB<br />\n<br />\n5. DEPARTEMEN PENGEMBANGAN ORGANISASI<br />\nPengembagan Organisasi merupakan departemen yang bertugas dalam internal pengurus Lembaga yang dimana menciptakan harmonisasi dan sinergitas dengan HMJ, dan dekanat yang berada di lingkup FPSB.</p>\n\n<p>&nbsp;</p>\n', 'profil', '2018-04-29 09:01:41', '2018-04-29 10:55:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
