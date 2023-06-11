-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 11.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arektv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `level`) VALUES
(1, 'Arek TV', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(20) NOT NULL,
  `judul_berita` text DEFAULT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `id_kategori` int(20) DEFAULT NULL,
  `reporter` varchar(225) DEFAULT NULL,
  `tgl` date NOT NULL,
  `gambar` varchar(225) DEFAULT NULL,
  `sumber_gambar` varchar(225) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `slug_berita`, `id_kategori`, `reporter`, `tgl`, `gambar`, `sumber_gambar`, `keterangan`) VALUES
(6, 'Presiden Jokowi Ungkap Isi Pertemuan dengan Putin, Bahas Perdamaian hingga Pasokan Pangan', 'presiden-jokowi-ungkap-isi-pertemuan-dengan-putin-bahas-perdamaian-hingga-pasokan-pangan', 10, 'ADMIN', '2023-05-15', 'jokowi_pertemuan.jpg', 'Presiden Joko Widodo dengan Presiden Rusia Vladimir Putin (foto: Sekretariat Presiden)', '<p>Presiden Joko Widodo (Jokowi) akhirnya bertemu langsung Presiden Rusia Vladimir Putin di di Istana Kremlin, Moskow, Rusia, Kamis (30/6/2022). Jokowi pun mengungkapkan hal-hal yang dibahas dalam pertemuan dengan Putin.</p>\r\n\r\n<p>&quot;Beberapa hal yang saya bahas dan saya sampaikan dalam pertemuan. Yang pertama, bahwa isu perdamaian dan kemanusiaan selalu menjadi prioritas politik luar negeri indonesia,&quot; ujar Jokowi, dikutip dari YouTube Sekretariat Presiden, Jumat (1/7/2022).</p>\r\n\r\n<p>Jokowi mengatakan konstitusi mengamanatkan agar Indonesia selalu berusaha berkontribusi bagi terciptanya perdamaian dunia. &quot;Dalam konteks inilah saya melakukan kunjungan ke Kiev dan ke Moskow,&quot; katanya.</p>\r\n\r\n<p>Dia mengatakan kepada Putin bahwa walaupun situasi saat ini masih sulit, namun penyelesaian damai sangat penting serta harus mengedepankan juga ruang-ruang dialog. Jokowi juga mengaku telah menyampaikan pesan Presiden Ukraina Volodymyr Zelensky ke Putin.</p>\r\n\r\n<p>&quot;Saya telah menyampaikan pesan Presiden Zelensky untuk Presiden Putin dan saya sampaikan kesiapan saya untuk menjadi jembatan komunikasi antara kedua pemimpin tersebut,&quot; kata Jokowi.</p>\r\n\r\n<p>Hal lain yang dibahas adalah terkait masalah pangan dan pupuk yang menjadi permasalahan kemanusiaan dan kepentingan masyarakat dunia. Banyak orang terdampak akibat rantai pasokan pangan dan pupuk yang terganggu terutama di negara-negara berkembang akibat konflik Rusia dengan Ukraina.</p>\r\n\r\n<p>&quot;Saya sangat menghargai Presiden Putin yang tadi menyampaikan bahwa memberikan jaminan keamanan untuk pasokan pangan dan pupuk baik dari Rusia dan juga Ukraina. Ini sebuah berita yang baik,&quot; ungkapnya.</p>\r\n\r\n<p>Jokowi juga mendukung upaya PBB untuk reintegrasi komoditas pangan dan pupuk Rusia serta komoditas pangan Ukraina untuk masuk lagi dalam rantai pasok dunia. Hal tersebut dilakukan demi kepentingan kemanusiaan.</p>\r\n\r\n<p>&quot;Dan khusus untuk jalur ekspor produk pangan Ukraina, terutama melalui jalur laut, tadi sekali lagi Presiden Putin sudah memberikan jaminannya,&quot; kata Jokowi.</p>\r\n\r\n<p>Selain itu, Jokowi dan Putin juga berdiskusi mengenai kerja sama Rusia dan Indonesia baik di bidang investasi hingga bidang perdagangan. Keduanya akan menindaklanjuti dengan membentuk tim agar bisa membahasnya secara detail.</p>\r\n\r\n<p>Jokowi pun menegaskan Indonesia tidak memiliki kepentingan apa pun kecuali ingin melihat perang dapat segera selesai dan rantai pasok pangan, pupuk, energi dapat segera diperbaiki. &quot;Karena ini menyangkut kehidupan ratusan juta orang, bahkan miliaran manusia,&quot; katanya.</p>\r\n\r\n<p>Artikel ini telah tayang di&nbsp;<a href=\"https://www.inews.id/\">www.inews.id</a>&nbsp;dengan judul &quot;<a href=\"https://www.inews.id/news/nasional/presiden-jokowi-ungkap-isi-pertemuan-dengan-putin-bahas-perdamaian-hingga-pasokan-pangan\">Presiden Jokowi Ungkap Isi Pertemuan dengan Putin, Bahas Perdamaian hingga Pasokan Pangan.</a>&quot;</p>\r\n\r\n<p>Download aplikasi Inews.id untuk akses berita lebih mudah dan cepat:&nbsp;<a href=\"https://www.inews.id/apps\">https://www.inews.id/apps</a></p>\r\n'),
(7, 'Rekomendasi 5 Game Horror untuk Menemani Malam Jumat Kamu', 'rekomendasi-5-game-horror-untuk-menemani-malam-jumat-kamu', 12, 'ADMIN', '2023-05-28', 'horror_game.jpg', 'Back in 1995, game horor dengan tampilan grafik sederhana akan hadir di PS4 dan PS Vita', '<p>Game merupakan salah satu pilihan ketika kita ingin refreshing atau menemani diri di kala bosan. Banyak sekali genre dari game pada saat ini dan tentunya semuanya menyenangkan serta menghibur kita.</p>\r\n\r\n<p>Namun, ada juga game yang dapat membuat jantung kita berdetak kencang dan mungkin dibuat penasaran ketika memainkannya yaitu game dengan genre horor.</p>\r\n\r\n<p>Game horor merupakan genre permainan yang cocok untuk kalian yang senang untuk menguji nyali ataupun yang suka sesuatu yang menantang diri sendiri. Ada banyak sekali jenis game horor yang dapat kita mainkan baik sendiri ataupun bermain dengan teman-teman yang lain secara online.</p>\r\n\r\n<p>Berikut adalah lima rekomendasi permainan horror yang dapat kamu mainkan di PC baik untuk berpetualang sendiri hingga bermain bersama teman yang l</p>\r\n\r\n<p>Artikel ini telah tayang di&nbsp;<a href=\"https://www.liputan6.com/\">www.liputan6.com</a>&nbsp;dengan judul &quot;<a href=\"https://www.liputan6.com/regional/read/5020003/rekomendasi-5-game-horror-untuk-menemani-malam-jumat-kamu\">Rekomendasi 5 Game Horror untuk Menemani Malam Jumat Kamu.</a>&quot;</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biro`
--

CREATE TABLE `biro` (
  `id_biro` int(11) NOT NULL,
  `biro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biro`
--

INSERT INTO `biro` (`id_biro`, `biro`) VALUES
(2, 'Surabaya'),
(3, 'Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id_hubungi_kami` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(400) DEFAULT NULL,
  `pesan` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`id_hubungi_kami`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'dewa', 'dewa@gmail.com', 'selamat', 'mencoba'),
(5, 'Dewa', 'dewa@gmail.com', 'mencoba', 'sqsqsqs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan_program`
--

CREATE TABLE `iklan_program` (
  `id_iklan_program` int(20) NOT NULL,
  `program` varchar(30) DEFAULT NULL,
  `link_program` varchar(600) DEFAULT NULL,
  `thumbnail` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iklan_program`
--

INSERT INTO `iklan_program` (`id_iklan_program`, `program`, `link_program`, `thumbnail`) VALUES
(2, 'Mata Indonesia', 'https://youtu.be/AMrByeuz0Hg', 'acara_mata_indonesia4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Kriminal'),
(10, 'Politik'),
(12, 'Game'),
(14, 'Olahraga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program`
--

CREATE TABLE `program` (
  `id_program` int(50) NOT NULL,
  `nama_program` varchar(225) DEFAULT NULL,
  `sesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `program`
--

INSERT INTO `program` (`id_program`, `nama_program`, `sesi`) VALUES
(3, 'Klasika', '07.00 - 08.00'),
(5, 'Mata Indonesia', '09.00 - 10.00'),
(6, 'klasika', '07.00 - 08.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(100) NOT NULL,
  `judul_video` text DEFAULT NULL,
  `slug_video` varchar(225) NOT NULL,
  `id_biro` int(25) DEFAULT NULL,
  `link_video` varchar(225) DEFAULT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `slug_video`, `id_biro`, `link_video`, `tgl`, `thumbnail`) VALUES
(5, 'TUBAN - OPTIMALISASI MEDSOS, KPU TUBAN GELAR BIMTEK KEHUMASAN', 'tuban-optimalisasi-medsos-kpu-tuban-gelar-bimtek-kehumasan', 3, 'VNEKmGwkL4s', '2023-06-01', 'Capture.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `biro`
--
ALTER TABLE `biro`
  ADD PRIMARY KEY (`id_biro`);

--
-- Indeks untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id_hubungi_kami`);

--
-- Indeks untuk tabel `iklan_program`
--
ALTER TABLE `iklan_program`
  ADD PRIMARY KEY (`id_iklan_program`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `biro`
--
ALTER TABLE `biro`
  MODIFY `id_biro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id_hubungi_kami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `iklan_program`
--
ALTER TABLE `iklan_program`
  MODIFY `id_iklan_program` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
