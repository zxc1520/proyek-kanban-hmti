-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Feb 2019 pada 06.30
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himpunan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id_article` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(200) NOT NULL,
  `posting` text NOT NULL,
  `image` text NOT NULL,
  `id_category` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id_article`, `date`, `title`, `posting`, `image`, `id_category`, `id_user`, `publish`) VALUES
('15eBXZ0717otP7j', '2017-07-12 14:10:02', 'Mahasiswa Polinema membuat Monitoring Cuaca Berbasis SMS (MCBS)', '<p>Yang muda yang kreatif, Alat deteksi cuaca berbasis sms yang di buat M. Hanif widianto. Masiswa Jurusan D3 Teknik Elektro, mirip pendeteksi iklim yang biasa di gunakan di BMKG (Badan Meteorologi,Klimatologi dan geofisika) Kincir angin&nbsp; setinggi 60 sentimeter di padukan dengan ponsel yang sudah diberi program deteksi cuaca, jadi ponsel tersebut tidak bisa digunakan oleh orang lain kecuali sudah di program untuk pendeteksi cuaca. Alat tersebut dapat di akses di mana saja meski berposisi di luar negeri, Masiswa jurusan tenik elektro semester akhir ini akan mengembangkan terus, temuanya agar bisa digunakan masyarakat.</p>\r\n', 'c150e83399949d0738eee0dc9f40d99a.jpg', 'gRMN70717jkb4vL', 'Ashaq213KH', 1),
('63GEaS0717I6K4A', '2017-07-13 08:28:27', 'test web ujian', '<p>Sabtu 25 April 2015 telah dilaksanakan State Polytechnic of Malang English Competition III, yang dilaksanakan mulai jam 8.00 sampai 12.00. Lomba tersebut terdiri dari tiga kategori: News Reporting, English Speech, dan Story Telling. Adapun pemenang lomba di masing-masing kategor</p>\r\n', '35da9e6775b6e1d569f6b360e71ab995.png', 'gRMN70717jkb4vL', 'pJaK0h1207CUlQx', 1),
('a8LMkK1018NbqOR', '2018-10-20 02:17:45', 'di dalam persatuan terdapat tidak persatuan', '<p>&lt;div class=&quot;space-top&quot;&gt;<br />\r\n&nbsp; &lt;div class=&quot;row&quot;&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &lt;div class=&quot;4u&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;div class=&quot;container-fluid contact_panel&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos-row&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a target=&quot;_blank&quot; href=&quot;https://facebook.com/HMTIPolinema&quot; class=&quot;icon fa-facebook medsos-panel&quot;&gt;&lt;span class=&quot;label&quot;&gt;Facebook&lt;/span&gt;&lt;/a&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;&lt;br&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos-row&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a target=&quot;_blank&quot; href=&quot;https://twitter.com/HMTIPolinema&quot; class=&quot;icon fa-twitter medsos-panel&quot;&gt;&lt;span class=&quot;label&quot;&gt;Twitter&lt;/span&gt;&lt;/a&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &lt;div class=&quot;4u&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;div class=&quot;container-fluid contact_panel&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos-row&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a target=&quot;_blank&quot; href=&quot;https://www.instagram.com/hmtipolinema/&quot; class=&quot;icon fa-instagram medsos-panel&quot;&gt;&lt;span class=&quot;label&quot;&gt;Instagram&lt;/span&gt;&lt;/a&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;&lt;br&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;medsos-row&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;a target=&quot;_blank&quot; href=&quot;https://www.youtube.com/channel/UCCYvUmujUiHUCAGDN3zpdew&quot; class=&quot;icon fa-youtube medsos-panel&quot;&gt;&lt;span class=&quot;label&quot;&gt;Youtube&lt;/span&gt;&lt;/a&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &lt;div class=&quot;4u&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;div class=&quot;container-fluid contact_panel&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;label for=&quot;email&quot; class=&quot;contact&quot;&gt;E-Mail&lt;/label&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;hmti.polinema@gmail.com&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;hr&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;label for=&quot;Telepon&quot; class=&quot;contact&quot;&gt;Telepon&lt;/label&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;085-730-269-938&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;hr&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;label for=&quot;Alamat&quot; class=&quot;contact&quot;&gt;Alamat&lt;/label&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;Jl. Soekarno Hatta No. 9 Malang, &lt;br&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Politeknik Negeri Malang&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;hr&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &lt;/div&gt;<br />\r\n&nbsp;</p>\r\n', '201e02238c81214518323a09abdbc42c.jpg', 'oCMyF07177bOwVI', 'Ashaq213KH', 1),
('HAjYXD0717T7KMG', '2017-07-12 14:12:02', 'Malang State Polytechnic English Competition III (MSPEC III) 2015', '<p>Sabtu 25 April 2015 telah dilaksanakan State Polytechnic of Malang English Competition III, yang dilaksanakan mulai jam 8.00 sampai 12.00. Lomba tersebut terdiri dari tiga kategori: News Reporting, English Speech, dan Story Telling.</p>\r\n\r\n<p>Adapun pemenang lomba di masing-masing kategori adalah:</p>\r\n\r\n<p>News Reporting:</p>\r\n\r\n<ul>\r\n	<li>Juara 1: Firza Asa Imama (Jurusan Teknik Kimia)</li>\r\n	<li>Juara 2: Naufal Nurdinasetyo N. (Jurusan Teknik Elektronika)</li>\r\n	<li>Juara 3: Vianesa Ninda Erliana (Jurusan Administrasi Niaga)</li>\r\n</ul>\r\n\r\n<p>English Speech:</p>\r\n\r\n<ul>\r\n	<li>Juara 1: Adihan Triayu &nbsp;&nbsp;&nbsp;(Jurusan Teknik Informasi)</li>\r\n	<li>Juara 2: Galih Prahistya (Jurusan Teknik Mesin)</li>\r\n	<li>Juara 3: Fahmia Aulia Putrie&nbsp; (Jurusan Teknik Elektronika)</li>\r\n</ul>\r\n\r\n<p>Story Telling</p>\r\n\r\n<ul>\r\n	<li>Juara 1: Niswah Selmi Kaffa (Jurusan Teknik Sipil)</li>\r\n	<li>Juara 2: Hanna Sarah Ayuningrun (Jurusan Akuntansi)</li>\r\n	<li>Juara 3: Rizky Ananta Kusumah (Jurusan Administrasi Niaga)</li>\r\n</ul>\r\n', '9d4c5c9c4cea8a81d1cc236fe92c6aed.jpg', 'oCMyF07177bOwVI', 'Ashaq213KH', 1),
('WFsZfb0717DwB7d', '2017-07-12 14:11:20', 'Kesejahteraan Karyawan Industri UKM yang Terabaikan', '<p>Menjamurnya Usaha Kecil Menengah (UKM) di Indonesia saat ini tak diimbangi dengan manajemen yang baik. Terlebih dalam hal sumberdaya manusia yang menjadi tenaga kerja didalamnya.&nbsp;Hal inilah yang mendorong Asminah Rachmi, SE.,MBA., DBA., salah satu Dosen di Jurusan Administrasi Niaga Politeknik Negeri Malang (Polinema) untuk melakukan penelitian dalam bidang tersebut. Berdasarkan riset yang dilakukannya, lebih dari 50 persen UKM yang ada di pulau Jawa tidak memiliki Manajemen Sumber Daya Manusia (MSDM) yang baik. Ia menyatakan, kebanyakan UKM hanya fokus pada modal dan distribusi pasar saja, tanpa memperhatikan masalah kesejahteraan tenaga kerjanya.</p>\r\n\r\n<p>Ironisnya lagi, fenomena tersebut rupanya juga tidak didukung oleh peran perguruan tinggi sebagai golongan yang memiliki ilmu MSDM tersebut.</p>\r\n\r\n<p>&ldquo;Kebanyakan belum ada yang menyentuh tentang masalah praktik MSDM tadi. Akademisi hanya fokus pada permodalan, akses pasar dan teknologi. Padahal, di luar negeri, praktik MSDM sudah banyak dikembangkan,&rdquo; ungkap Asminah selepas orasi ilmiah di Aula Pertamina Polinema yang diselenggarakan beberapa waktu lalu.</p>\r\n\r\n<p>MSDM ini menyangkut bagaimana UKM bisa memberdayakan karyawannya, termasuk memberikan training yang formal dan juga memperhatikan sistem pengupahan berdasarkan prestasi.</p>\r\n\r\n<p>Selain itu, kebanyakan UKM juga tidak melakukan rekruitmen dan proses seleksi karyawan secara formal. Mereka hanya bermodalkan informasi dari mulut ke mulut dan tidak memuat iklan lowongan kerja karena terkendala biaya. Sebagian besar UKM juga tidak mengadakan training untuk karyawannya. Disamping itu juga tidak ada kompensasi berdasarkan pengalaman dan kemampuan serta kenaikan gaji berkala. Dalam kesempatan ini, Asminah meminta rekan-rekan sesama dsen untuk memberikan perhatian lebih terhadap pengelolaan sumber daya manusia di UKM, agar kesejahteraan masyarakat semakin meningkat.</p>\r\n\r\n<p>Selain materi dengan judul Peran Perguruan Tinggi dalam Mengembangkan Kemampuan UKM di Bidang Praktik Manajemen Sumber Daya Manusia ini, orasi ilmiah yang juga merupakan rangkaian Dies Natalies ke 33 ini, Ratih Indri Hapsari, ST., MT., Ph.D, dosen Teknik Sipil juga menyampaikan orasi ilmiah dengan judul Mitigasi Bencana Banjir Perkotan dengan Sistem Peringatan Dini menggunakan Teknologi Radar Cuaca.</p>\r\n', '27b7d41298421d1a135077b1fbde64f6.jpg', 'gRMN70717jkb4vL', 'Ashaq213KH', 1),
('YGifbO0717ndDJp', '2017-07-12 14:09:02', 'Polinema Kirim Mahasiswanya ke Singapore', '<p>Polinema &ndash; Mahasiswa Politeknik Negeri Malang (polinema) punya peluang besar untuk mengikuti program pertukaran mahasiswa. Sebanyak 20 mahasiswa Jurusan Teknologi Informasi (TI) telah dikirim ke Singapore untuk mengikuti program pertukaran mahasiswa pada bulan Juli lalu.</p>\r\n\r\n<p>Ini adalah tahun ke 2 Para mahasiswa polinema yang dikirim dan didampingi oleh Ketua Jurusan TI, Rudy Aryanto, ST,Mcs ini untuk belajar di Republic Politecnic Singapore selama 20 hari mereka diajari cara membuat Komputer kecil Rasbery Pie (Komputer Kecil)&nbsp;&nbsp; .</p>\r\n\r\n<p>perwakilan dosen Republic Politecnic Singapore yang diwakili Mr Jason Lim dan Mr Jason Tey melihat pemaparan hasil karya mahasiswa polinema. Di antaranya karya Sensor Buka Tutup Pintu dan Google Kalender Hijriah. Mereka cukup antusias dan mengacungi jempol terhadap mahasiswa polinema ini. Karena itu dianggap layak mengikuti program pertukaran mahasiwa. (Why)</p>\r\n', '37e3dd2746ac4a6db97886d288da5f5b.jpg', 'oCMyF07177bOwVI', 'Ashaq213KH', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id_auth` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `id_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id_auth`, `username`, `password`, `id_user`) VALUES
('id5A0K1207KhXBR', 'nawawi932', '4076469135864b9db87b3b03b137e0b9', 'pJaK0h1207CUlQx'),
('kAsasQIYW12E', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ashaq213KH'),
('KpsGJd0602B9Lsd', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'txQRpB06024GJyO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` varchar(15) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
('6X1R50117FRfPug', 'Lomba'),
('eKVl40317d9MwI7', 'Undangan Acara'),
('gRMN70717jkb4vL', 'Penelitian'),
('oCMyF07177bOwVI', 'Akademi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `division`
--

CREATE TABLE `division` (
  `id_division` varchar(15) NOT NULL,
  `division` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `division`
--

INSERT INTO `division` (`id_division`, `division`) VALUES
('jfi39gu89gu20jv', 'programming'),
('kgplg23QsG9j4e0', 'multimedia'),
('ngieAogJu498qej', 'networking');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `date`, `title`, `image`, `description`) VALUES
('dSwCX0717wEljDP', '2017-07-12 14:21:56', 'Mahasiswa Polinema membuat Monitoring Cuaca Berbasis SMS (MCBS)', 'e67e28808e1d3e6606962c6495f115c1.jpg', 'Yang muda yang kreatif, Alat deteksi cuaca berbasis sms yang di buat M. Hanif widianto. Masiswa Jurusan D3 Teknik Elektro, mirip pendeteksi iklim yang biasa di gunakan di BMKG (Badan Meteorologi,Klimatologi dan geofisika) Kincir angin'),
('fDry90717nBpiRd', '2017-07-12 14:14:17', 'Malang State Polytechnic English Competition III (MSPEC III) 2015', '23cc4cb4fec828c72070f97eda4bd262.jpg', 'Sabtu 25 April 2015 telah dilaksanakan State Polytechnic of Malang English Competition III, yang dilaksanakan mulai jam 8.00 sampai 12.00. Lomba tersebut terdiri dari tiga kategori: News Reporting, English Speech, dan Story Telling.'),
('iPTEp10186KQ3ul', '2018-10-20 02:22:27', 'yeaaaha uiah iehwqi heiwq hq', '4a2ce98ace6f21c9f703effc68d29d5f.jpg', 'qwejh qwjk heqwj hekjqwh kjewqkj hqwknwkjsnkajsndskandi qwheulhqwu qw'),
('NpsYz0717a0vEKP', '2017-07-12 14:14:52', 'Kesejahteraan Karyawan Industri UKM yang Terabaikan', '8b24c232e3fcb7001c6e583cd1c84fa1.jpg', 'Menjamurnya Usaha Kecil Menengah (UKM) di Indonesia saat ini tak diimbangi dengan manajemen yang baik. Terlebih dalam hal sumberdaya manusia yang menjadi tenaga kerja didalamnya. Hal inilah yang mendorong Asminah Rachmi, SE.,MBA., DBA., salah satu Dosen di Jurusan Administrasi Niaga Politeknik Negeri Malang (Polinema) untuk melakukan penelitian dalam bidang tersebut. Berdasarkan riset yang dilakukannya, lebih dari 50 persen UKM yang ada di pulau Jawa tidak memiliki Manajemen Sumber Daya Manusia (MSDM) yang baik. Ia menyatakan, kebanyakan UKM hanya fokus pada modal dan distribusi pasar saja, tanpa memperhatikan masalah kesejahteraan tenaga kerjanya.'),
('ofqOv0717r2Mk8H', '2017-07-12 14:21:10', 'Polinema Kirim Mahasiswanya ke Singapore', '3f8d76300ad313d89c05eb04a2c190b9.jpg', 'Polinema – Mahasiswa Politeknik Negeri Malang (polinema) punya peluang besar untuk mengikuti program pertukaran mahasiswa. Sebanyak 20 mahasiswa Jurusan Teknologi Informasi (TI) telah dikirim ke Singapore untuk mengikuti program pertukaran mahasiswa pada bulan Juli lalu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `ref` text,
  `date` datetime NOT NULL,
  `browser` text NOT NULL,
  `platform` varchar(15) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `ip`, `ref`, `date`, `browser`, `platform`, `location`) VALUES
(29, '172.16.80.56', '', '2017-02-07 11:07:35', 'Chrome', 'Windows 10', 'unknown'),
(31, '64.233.173.137', '', '2017-02-07 12:30:19', 'Chrome', 'Android', 'unknown'),
(32, '114.125.85.61', '', '2017-02-07 12:48:15', 'Chrome', 'Linux', 'Indonesia'),
(33, '114.125.82.207', '', '2017-02-07 15:13:28', 'Chrome', 'Windows 10', 'Indonesia'),
(34, '66.102.6.17', '', '2017-02-07 21:08:11', 'Chrome', 'Android', 'United States'),
(36, '66.102.6.155', 'http://wri.polinema.ac.id/', '2017-02-08 05:03:17', 'Chrome', 'Android', 'United States'),
(41, '172.16.80.57', '', '2017-02-08 10:48:59', 'Chrome', 'Windows 10', 'unknown'),
(44, '64.233.173.135', '', '2017-02-08 10:51:50', 'Chrome', 'Android', 'unknown'),
(129, '172.16.250.21', '', '2017-02-08 16:01:25', 'Chrome', 'Windows 7', 'unknown'),
(130, '172.16.250.21', '', '2017-02-08 16:01:29', 'Chrome', 'Windows 7', 'unknown'),
(131, '114.125.84.6', '', '2017-02-11 10:37:39', 'Chrome', 'Android', 'Indonesia'),
(132, '172.16.80.65', '', '2017-02-13 10:34:47', 'Chrome', 'Windows 10', 'unknown'),
(133, '64.233.173.29', '', '2017-02-15 20:49:16', 'Chrome', 'Android', 'unknown'),
(134, '36.82.103.96', '', '2017-02-16 13:51:47', 'Chrome', 'Windows 10', 'Indonesia'),
(135, '64.233.173.27', '', '2017-02-16 15:39:59', 'Chrome', 'Android', 'unknown'),
(136, '172.16.80.59', '', '2017-02-20 09:29:20', 'Chrome', 'Windows 10', 'unknown'),
(137, '172.16.31.147', '', '2017-02-20 11:28:23', 'Chrome', 'Android', 'unknown'),
(138, '64.233.173.28', '', '2017-02-20 11:51:45', 'Chrome', 'Android', 'unknown'),
(139, '125.164.97.27', '', '2017-02-21 06:17:41', 'Chrome', 'Windows 10', 'Indonesia'),
(140, '36.82.101.148', '', '2017-02-21 09:16:26', 'Chrome', 'Windows 10', 'Indonesia'),
(141, '36.82.101.106', '', '2017-02-21 09:16:42', 'Spartan', 'Windows 10', 'Indonesia'),
(142, '172.16.43.11', '', '2017-02-21 11:17:55', 'Chrome', 'Windows 10', 'unknown'),
(143, '66.102.6.91', 'http://www.google.com/search', '2017-02-21 11:59:32', 'Chrome', 'Linux', 'unknown'),
(144, '66.249.80.13', '', '2017-02-21 11:59:34', 'Chrome', 'Linux', 'unknown'),
(145, '66.102.6.90', 'http://www.google.com/search', '2017-02-21 19:01:07', 'Chrome', 'Linux', 'United States'),
(146, '192.168.164.211', '', '2017-02-21 19:40:32', 'Chrome', 'Windows 10', 'unknown'),
(147, '172.16.42.8', '', '2017-02-22 13:41:26', 'Chrome', 'Android', 'unknown'),
(148, '50.118.198.80', '', '2017-02-24 15:55:56', 'Chrome', 'Windows 10', 'United States'),
(149, '172.16.182.12', '', '2017-02-25 11:16:25', 'Chrome', 'Windows 10', 'unknown'),
(150, '172.16.42.243', '', '2017-02-25 11:16:56', 'Chrome', 'Windows 10', 'unknown'),
(151, '172.16.40.37', '', '2017-02-25 11:16:58', 'Firefox', 'Windows 8.1', 'unknown'),
(152, '172.16.40.37', '', '2017-02-25 11:20:34', 'Firefox', 'Windows 8.1', 'unknown'),
(153, '36.82.103.136', '', '2017-02-25 13:30:36', 'Firefox', 'Windows 8.1', 'Indonesia'),
(154, '192.168.164.107', 'http://wri.polinema.ac.id/Contact', '2017-02-26 16:25:23', 'Chrome', 'Windows 10', 'unknown'),
(155, '66.249.80.13', '', '2017-02-26 17:03:03', 'Chrome', 'Linux', 'United States'),
(156, '66.249.80.15', '', '2017-02-27 21:11:57', 'Chrome', 'Linux', 'United States'),
(157, '192.168.164.38', '', '2017-02-27 21:29:53', 'Chrome', 'Windows 10', 'unknown'),
(158, '115.178.235.52', '', '2017-02-28 20:30:20', 'Chrome', 'Windows 10', 'Indonesia'),
(159, '112.215.153.29', '', '2017-02-28 20:31:30', 'Firefox', 'Windows 8.1', 'Indonesia'),
(160, '192.168.164.205', '', '2017-02-28 20:49:07', 'Firefox', 'Windows 10', 'unknown'),
(161, '66.249.80.15', '', '2017-03-01 15:37:57', 'Chrome', 'Linux', 'United States'),
(162, '172.16.40.22', '', '2017-03-02 09:05:22', 'Chrome', 'Windows 10', 'unknown'),
(163, '66.249.80.15', '', '2017-03-03 10:05:28', 'Chrome', 'Linux', 'United States'),
(164, '36.85.63.104', '', '2017-03-03 17:12:45', 'Chrome', 'Windows 10', 'Indonesia'),
(165, '66.249.80.15', '', '2017-03-05 20:11:44', 'Chrome', 'Linux', 'United States'),
(166, '66.249.80.15', '', '2017-03-06 15:19:04', 'Chrome', 'Linux', 'unknown'),
(167, '36.82.102.226', 'http://wri.polinema.ac.id/admin/Login/process_login', '2017-03-06 16:26:50', 'Chrome', 'Windows 10', 'Indonesia'),
(168, '64.233.173.135', '', '2017-03-06 20:53:27', 'Chrome', 'Android', 'unknown'),
(169, '192.168.231.230', '', '2017-03-07 14:07:29', 'Chrome', 'Windows 8.1', 'unknown'),
(170, '125.164.54.190', '', '2017-03-08 06:51:41', 'Chrome', 'Windows 10', 'unknown'),
(171, '125.164.54.190', '', '2017-03-08 06:58:13', 'Chrome', 'Windows 10', 'unknown'),
(172, '66.249.80.13', '', '2017-03-08 13:06:47', 'Chrome', 'Linux', 'United States'),
(173, '66.249.80.15', '', '2017-03-10 13:44:02', 'Chrome', 'Linux', 'United States'),
(174, '112.215.36.145', '', '2017-03-11 07:57:20', 'Chrome', 'Android', 'Indonesia'),
(175, '112.215.36.145', '', '2017-03-11 07:57:30', 'Chrome', 'Android', 'Indonesia'),
(176, '192.168.179.230', '', '2017-03-11 15:11:16', 'Chrome', 'Windows 10', 'unknown'),
(177, '66.102.7.131', '', '2017-03-11 20:20:02', 'Chrome', 'Linux', 'United States'),
(178, '112.215.36.143', 'http://wri.polinema.ac.id/admin/Login/process_login', '2017-03-13 06:59:17', 'Chrome', 'Android', 'Indonesia'),
(179, '36.82.102.200', '', '2017-03-13 16:15:27', 'Chrome', 'Windows 10', 'Indonesia'),
(180, '172.16.80.60', '', '2017-03-13 16:29:03', 'Chrome', 'Windows 10', 'unknown'),
(181, '36.79.240.182', '', '2017-03-13 18:55:20', 'Chrome', 'Windows 10', 'Indonesia'),
(182, '192.168.179.227', '', '2017-03-14 10:22:11', 'Chrome', 'Windows 10', 'unknown'),
(183, '172.16.23.23', '', '2017-03-14 13:22:34', 'Firefox', 'Windows 10', 'unknown'),
(184, '36.82.103.150', '', '2017-03-15 13:57:25', 'Chrome', 'Windows 10', 'Indonesia'),
(185, '64.233.173.136', '', '2017-03-16 19:47:09', 'Chrome', 'Android', 'unknown'),
(186, '115.178.255.60', '', '2017-03-23 21:25:47', 'Chrome', 'Windows 10', 'Indonesia'),
(187, '115.178.255.60', 'http://wri.polinema.ac.id/', '2017-03-23 21:25:54', 'Chrome', 'Windows 10', 'Indonesia'),
(188, '64.233.173.137', '', '2017-03-28 10:47:17', 'Chrome', 'Android', 'unknown'),
(189, '107.167.113.33', '', '2017-03-28 10:47:47', 'Opera', 'Android', 'unknown'),
(190, '112.215.173.88', '', '2017-03-28 10:49:07', 'Chrome', 'Android', 'Indonesia'),
(191, '36.82.103.75', '', '2017-04-07 08:41:03', 'Chrome', 'Linux', 'Indonesia'),
(192, '36.82.103.235', '', '2017-04-10 14:18:54', 'Chrome', 'Linux', 'Indonesia'),
(193, '36.82.103.235', '', '2017-04-10 14:18:58', 'Chrome', 'Linux', 'Indonesia'),
(194, '120.188.81.16', '', '2017-04-12 12:15:50', 'Firefox', 'Windows 10', 'Indonesia'),
(195, '172.16.43.161', '', '2017-04-12 13:57:13', 'Chrome', 'Windows 10', 'unknown'),
(196, '64.233.173.135', '', '2017-04-18 18:58:35', 'Chrome', 'Android', 'unknown'),
(197, '172.16.80.61', '', '2017-04-27 16:56:45', 'Chrome', 'Windows 10', 'unknown'),
(198, '192.168.164.40', '', '2017-05-03 16:38:08', 'Firefox', 'Windows 10', 'unknown'),
(199, '112.215.36.145', 'http://wri.polinema.ac.id/admin/Login/process_login', '2017-05-03 16:44:35', 'Chrome', 'Android', 'Indonesia'),
(200, '192.168.22.193', '', '2017-05-05 13:53:47', 'Chrome', 'Windows 8.1', 'unknown'),
(201, '36.74.200.29', '', '2017-05-06 09:05:31', 'Chrome', 'Windows 10', 'Indonesia'),
(202, '180.248.27.84', '', '2017-05-06 18:32:01', 'Chrome', 'Windows 10', 'Indonesia'),
(203, '192.168.233.125', '', '2017-05-08 07:18:17', 'Chrome', 'Windows 10', 'unknown'),
(204, '112.215.172.123', '', '2017-05-10 13:36:44', 'Chrome', 'Windows 8.1', 'Indonesia'),
(205, '112.215.153.59', '', '2017-05-10 13:55:02', 'Safari', 'iOS', 'Indonesia'),
(206, '64.233.173.136', '', '2017-05-10 19:04:56', 'Chrome', 'Windows 10', 'unknown'),
(207, '103.213.128.91', 'http://wri.polinema.ac.id/', '2017-05-12 00:21:44', 'Safari', 'iOS', 'Indonesia'),
(208, '36.78.99.227', '', '2017-05-12 15:13:51', 'Chrome', 'Linux', 'unknown'),
(209, '144.2.2.50', '', '2017-05-12 15:14:06', 'Mozilla', 'Unknown Platfor', 'unknown'),
(210, '144.2.2.50', '', '2017-05-12 15:14:52', 'Mozilla', 'Unknown Platfor', 'United States'),
(211, '64.233.173.136', '', '2017-05-15 13:20:57', 'Chrome', 'Android', 'unknown'),
(212, '180.247.93.66', '', '2017-05-16 06:45:51', 'Chrome', 'Windows 10', 'Indonesia'),
(213, '36.82.102.185', '', '2017-05-17 08:42:01', 'Firefox', 'Windows 10', 'Indonesia'),
(214, '120.188.86.119', '', '2017-05-23 08:47:31', 'Chrome', 'Android', 'Indonesia'),
(215, '::1', '', '2017-07-12 20:37:59', 'Spartan', 'Windows 10', 'unknown'),
(216, '::1', '', '2017-07-12 20:48:22', 'Safari', 'Android', 'unknown'),
(217, '::1', '', '2017-07-12 20:49:06', 'Chrome', 'Windows 10', 'unknown'),
(218, '::1', '', '2017-07-12 22:10:39', 'Chrome', 'Windows 10', 'unknown'),
(219, '::1', '', '2017-07-13 08:35:45', 'Firefox', 'Windows 8.1', 'unknown');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_message` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `readed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `date`, `message`, `readed`) VALUES
('3a0B140717lNwU', 'hilmy', 'hilmy@gmail.com', '2017-07-14 04:12:57', 'libur', 1),
('47LI110717tVwB', 'imam', 'nawawi932@gmail.com', '2017-07-11 15:22:48', 'asl sldhs ls hdlkshld khslkd slkd hslhk', 1),
('hgFi110717ouBf', 'asdfghjkl', 'nawawi932@gmail.com', '2017-07-11 14:50:22', 'qwertyuiopasdfghjklxzxcvbnm sdfghjk', 1),
('HYxt191018lR5s', 'adefajar', 'ade@ade.com', '2018-10-19 21:15:03', 'adqw', 1),
('kr41110717GtCc', 'hhdsdh', 'jasj@hsdj.co', '2017-07-11 15:42:11', 'sdlksdh', 1),
('vQeC210217TsNF', 'naruto', 'naruto@gmail.com', '2017-02-21 11:23:58', 'YOLO', 1),
('Y4ZC2502172m8B', 'naruto', 'naruto@gmail.com', '2017-02-25 11:18:33', 'YOLO', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampul`
--

CREATE TABLE `sampul` (
  `id_sampul` int(11) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sampul`
--

INSERT INTO `sampul` (`id_sampul`, `image`) VALUES
(1, '24853c7ace37da87d91513b8356e71da.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutorial`
--

CREATE TABLE `tutorial` (
  `id_tutorial` varchar(15) NOT NULL,
  `date` datetime NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_division` varchar(15) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tutorial`
--

INSERT INTO `tutorial` (`id_tutorial`, `date`, `title`, `description`, `image`, `id_user`, `id_division`, `publish`) VALUES
('UJ37NK0217lINBQ', '2017-02-08 11:19:54', 'Create Compiler Java in Sublime Text', '<p><iframe allowfullscreen=\"\" frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/L_EEeG4xUQM\" width=\"560\"></iframe></p>\r\n\r\n<p>Sublime Text adalah salah satu text editor yang&nbsp;<em>multi talent. </em>Karena banyak bahasa penrograman yang support dan dapat di tuliskan di editor ini, mungkin ada beberapa bahasa pemrograman yang membutuhkan pengaturan dan pemasangan plugin khusus unuk bisa di gunakan pada bahasa yang akan di gunakann seperti java ini.</p>\r\n', '60c114bc623cf68e4c0d524ffde97fa9.png', '2qYte30302om2Rb', 'jfi39gu89gu20jv', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `gender`, `birth`, `address`, `phone`, `admin`) VALUES
('Ashaq213KH', 'admin', 1, '2017-06-05', 'malang', '23456789', 1),
('pJaK0h1207CUlQx', 'ade', 1, '2017-05-07', 'malang', '0198376437', 1),
('txQRpB06024GJyO', 'qwe', 1, '0000-00-00', 'ewq', '123132', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id_auth`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id_division`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `sampul`
--
ALTER TABLE `sampul`
  ADD PRIMARY KEY (`id_sampul`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id_tutorial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `sampul`
--
ALTER TABLE `sampul`
  MODIFY `id_sampul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
