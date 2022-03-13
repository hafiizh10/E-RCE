-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2022 at 02:59 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_rce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nopol_calon` varchar(12) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_sim` varchar(100) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id`, `nama`, `nopol_calon`, `nik`, `no_sim`, `jk`, `ttl`, `alamat`, `pekerjaan`, `no_tlp`, `email`, `is_active`) VALUES
(11, 'Hafiizh Zoelva', 'DA 6654 A', '3271046504931234', '123456789012', 'Laki-laki', 'Banjarbaru, 2000/05/09', 'Komplek Saadah 2, Jl.Muslimin No.21A Rt.15 Rw.04, Sungai Paring, Martapura Kota', 'Mahasiswa', '08214623542', 'zoelva@mail.com', 0),
(16, 'Zoelva Khairani', 'DA 6654 A', '3271046504931234', '123456789012', 'Laki-laki', 'Banjarbaru, 2000/05/10', 'Komplek Saadah 2, Jl.Muslimin No.21A Rt.15 Rw.04, Sungai Paring, Martapura Kota', 'Mahasiswa', '08214623542', 'email@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int NOT NULL,
  `nama` varchar(128) NOT NULL,
  `ket` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `nama`, `ket`, `image`, `created_at`) VALUES
(1, 'Hafiizh Zoelva Khairani', 'Giat Donasi Korban Kebakaran IEA Wilayah Banjarbaru', '123.jpg.webp', '19-06-2021 23:47:58'),
(2, 'Hafiizh Zoelva Khairani', 'Giat Donasi Korban Kebakaran IEA Wilayah Banjarbaru', '321.jpg.webp', '19-06-2021 23:50:58'),
(3, 'Hafiizh Zoelva Khairani', 'Giat Donasi Korban Kebakaran IEA Wilayah Banjarbaru', 'InShot_20210517_104342247.jpg.webp', '19-06-2021 23:59:19'),
(4, 'Khairani', 'Giat IEA Wilayah Banjarbaru', 'InShot_20210517_104422157.jpg.webp', '20-06-2021 00:00:57'),
(5, 'Khairani', 'Giat IEA Wilayah Banjarbaru', 'InShot_20210517_104850645.jpg.webp', '20-06-2021 00:01:19'),
(6, 'Khairani', 'Giat IEA Wilayah Banjarbaru', 'InShot_20210517_104732969.jpg.webp', '20-06-2021 00:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_giat`
--

CREATE TABLE `tb_giat` (
  `id` int NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `penanganan` varchar(500) NOT NULL,
  `koordinator` varchar(100) NOT NULL,
  `kendaraan` varchar(100) NOT NULL,
  `rs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_giat`
--

INSERT INTO `tb_giat` (`id`, `kegiatan`, `waktu`, `lokasi`, `penanganan`, `koordinator`, `kendaraan`, `rs`) VALUES
(1, 'Laka Tunggal R2', '27-05-2021 00:47:59', 'Jl. A Yani Depan Marta Jaya', 'Setelah dilakukan pemeriksaan fisik dan pertolongan pertama berupa pembersihan perawatan pada luka, korban melanjutkan perjalanan kembali', 'Hafiizh Zoelva Khairani', 'DA 323 BA', '-'),
(2, 'Laka Lantas R2 Vs R4', '27-05-2021 00:49:48', 'Depan Noor Aida, Antasan Senor', 'setelah dilakukan pemeriksaan fisik dan pertolongan pertama,berupa pembersihan dan perawatan pada luka, korban melanjutkan perjalanan kembali.', 'Zoelva Khairani', 'DA 323 BA', '-'),
(3, 'Laka Tunggal', '27-05-2021 00:50:59', 'Jl. A Yani. Jembatan Sungai Pering', 'Setelah dilakukan pemeriksaan fisik dan pertolongan pertama berupa pembersihan perawatan pada luka, korban di antar pulang.', 'Hafiizh Zoelva Khairani', 'DA 323 BA', '-'),
(4, 'Laka Lantas R2 vs R2', '28-05-2021 00:52:27', 'Jl. Pendidikan', 'Setelah dilakukan pemeriksaan fisik dan pertolongan pertama berupa pembersihan perawatan pada luka, korban melanjutkan perjalanan kembali.', 'Khairani', 'DA 323 BA', '-'),
(5, 'Laka Tunggal', '29-05-2021 00:55:09', 'Honda surya motor', 'pemeriksaan Tanda-tanda vital ,mengajarkan teknik relaksasi dan ditraksi.', 'Hafiizh Zoelva Khairani', 'DA 323 BA', '-'),
(7, 'Laka Lantas R2 vs R2', '28-05-2021 14:24:02', 'Jl. Kertak Baru Desa pekauman', 'Setelah dilakukan pemeriksaan fisik dan pertolongan pertama berupa pembersihan perawatan pada luka, korban di evakuasi ke markas PSC119 Intan Banjar untuk mendapat perawatan lebih lanjut.', 'Hafiizh Zoelva Khairani', 'DA 323 BA', '-'),
(10, 'Lakalantas', '30-05-2021 15:31:28', 'Komplek permata indah', 'Korban dibawah kerumah sakit', 'Khairani', 'DA 323 BA', 'RSU Syifa Medika, Banjarbaru'),
(11, 'Layanan Ambulans', '30-05-2021 15:33:50', 'Komplek Citra Graha', 'Korban di bawa kerumah sakit', 'Hafiizh Zoelva Khairani', 'DA 323 BA', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE `tb_kendaraan` (
  `id` int NOT NULL,
  `nopol` varchar(13) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `no_rangka` varchar(50) NOT NULL,
  `no_mesin` varchar(50) NOT NULL,
  `fungsi` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`id`, `nopol`, `merk`, `jenis`, `no_rangka`, `no_mesin`, `fungsi`, `ket`) VALUES
(5, 'DA 323 BA', 'Suzuki APV', 'Mobil', 'WDB1240306B542342', 'MHRGD38506J423453', 'Giat Emergency, Antar Jemput Pasien', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `tb_korban`
--

CREATE TABLE `tb_korban` (
  `id` int NOT NULL,
  `id_giat` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kondisi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_korban`
--

INSERT INTO `tb_korban` (`id`, `id_giat`, `nama`, `umur`, `alamat`, `kondisi`) VALUES
(1, 1, 'Semani', '51', 'Jl. Perambani Sei. Ulin', 'Mengalami luka lecet dibagian kaki kanan.'),
(2, 2, 'Mandiansyah', '27', 'Jl. Kenanga, Landasan Ulin Timur', 'Mengalami luka Sobek di jari manis dan jari kelingking.'),
(3, 2, 'Noor Yulita Sari', '21', 'Jl. Kenanga, Landasan Ulin Timur', 'Mengalami Syok'),
(4, 3, 'Herlina Wati', '40', 'Pematan Baru', 'Mengalami memar pelipis mata kanan, lecet punggung kaki kanan dan lecet lutut kiri.'),
(5, 3, 'Bahruddin', '50', 'Pematang Baru', 'Mengalami syok, lecet punggung tangan dan lecet tangan kiri, lecet punggun kaki kiri.'),
(6, 4, 'Dayat', '35', 'Komp. Citra Graha Indah.', 'Mengalami luka lecet dibagian lengan kiri dan luka lecet pada punggung tangan kiri'),
(7, 4, 'Maysarah', '33', 'Jl. Pendidikan Sekumpul', 'Mengalami Syok dan mengalami benjolan dikepala'),
(8, 4, 'Fahri', '25', 'Jl. Kenanga', 'Syok'),
(9, 5, 'Tn.F', '34', 'pasar jati', 'composmentis'),
(11, 7, 'Abdul Ghalib', '55', 'Kampung Melayu Mtp', 'Mengalami luka lecet dibagian dahi, lecet bagian bawah pelipis mata kanan, lecet dibagian bawah hidung bibir atas, lecet punggung tangan kanan dan kiri, lecet lutut kanan dan kiri'),
(12, 7, 'Hadri', '33', 'Simpang Lima', 'Mengalami luka lecet punggung tangan kiri dan luka robek telapak tangan kiri, luka lecet lutut kiri.'),
(16, 10, 'Budi', '29', 'Kandangan', 'Baik'),
(17, 10, 'Sari', '20', 'Rantau', 'Sakit'),
(18, 11, 'Anuu', '31', 'Martapura', 'Aman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id` int NOT NULL,
  `laporan` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id`, `laporan`, `waktu`, `latitude`, `longitude`, `lokasi`, `ket`) VALUES
(1, 'Ambulans', '23-May-2021, 16:34:38', '-3.43012890', '114.84735420', 'Dari rumah pasien menuju RSUD Ratu Zalecha', 'Ambulan tolong'),
(3, 'Kebakaran', '23-May-2021, 16:36:07', '-3.43012890', '114.84735420', 'Komplek Melati dekat indomaret km 15', 'Api masih menyala dan semakin membesar, sumber air sulit'),
(5, 'Kebakaran', '23-May-2021, 20:14:59', '-3.44272816', '114.81985398', 'Komplek Melati dekat', 'Api masih menyala'),
(7, 'Kecelakaan', '24-May-2021, 14:18:22', '-3.41926165', '114.84460255', 'Dari Komplek Pramuka Martapura menuju RSUD Ulin Banjarmasin', 'Dibutuhkan ambulance untuk membawa pasien sesak napas'),
(8, 'Ambulans', '24-May-2021, 14:48:11', '-3.45132797', '114.84664693', 'Dari saadah 2 jl.tomat samping alfamart 22km', 'Minta tolong datangkan ambulans'),
(9, 'Ambulans', '30-May-2021, 15:25:16', '-3.42363784', '114.85022130', 'Dari komplek Saadah 2 Jl.Muslimin menuju RS Ratu Zalecha Martapura', 'Minta Tolong PMI datangkan kerumah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id` int NOT NULL,
  `nama_aplikasi` varchar(255) DEFAULT NULL,
  `title_aplikasi` varchar(255) DEFAULT NULL,
  `logo_menu` varchar(255) DEFAULT NULL,
  `footer_aplikasi` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rekrutmen` int DEFAULT NULL,
  `chat_id` varchar(100) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `bot_active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`id`, `nama_aplikasi`, `title_aplikasi`, `logo_menu`, `footer_aplikasi`, `favicon`, `image`, `rekrutmen`, `chat_id`, `token`, `bot_active`) VALUES
(1, 'INDONESIAN ESCORTING AMBULANCE WILAYAH BANJARBARU', 'Aplikasi IEA Banjarbaru', 'IEA BJB', 'Copyright © 2021 <a href=\'https://zoelva.ieabjb.my.id/\'>TIM IT IEA Banjarbaru</a>.', 'logo1.ico', 'lambang.png', 1, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'id chat telegram', 'token bot telegram', 0),
(3, NULL, NULL, NULL, NULL, NULL, 'https://sawit.wablas.com', NULL, '082157254820', 'token wablas anda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan_website`
--

CREATE TABLE `tb_pengaturan_website` (
  `id` int NOT NULL,
  `informasi_1` longtext,
  `title_1` varchar(100) DEFAULT NULL,
  `informasi_2` longtext,
  `title_2` varchar(100) DEFAULT NULL,
  `alamat` longtext,
  `text_1` varchar(100) DEFAULT NULL,
  `text_2` varchar(100) DEFAULT NULL,
  `text_3` varchar(100) DEFAULT NULL,
  `slideshow_1` varchar(100) DEFAULT NULL,
  `slideshow_2` varchar(100) DEFAULT NULL,
  `slideshow_3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengaturan_website`
--

INSERT INTO `tb_pengaturan_website` (`id`, `informasi_1`, `title_1`, `informasi_2`, `title_2`, `alamat`, `text_1`, `text_2`, `text_3`, `slideshow_1`, `slideshow_2`, `slideshow_3`) VALUES
(1, '<p>Merupakan website organisasi yang dimiliki oleh IEA Wilayah Banjarbaru sebagai media informasi dan pelayanan kepada masyarakat luas. Website ini mempunyai banyak fitur yang digunakan untuk memudahkan anggota IEA dalam menjalankan tugasnya.<br></p>', 'WEBSITE IEA BANJARBARU', '<p>WhatsApp : Humas 081645498629 / Korlap 082255535822<br>Instagram DM : @iea.banjarbaru <br>Facebook : official.iea.bjb <br>Email : ieabanjarbaru@gmail.com<br></p>', 'KONTAK INFORMASI', 'Jl. Guntung Manggis No.02 Posko Guntung Manggis Fire Rescue Banjarbaru Jl. Trikora Kota Banjarbaru, Kalimantan Selatan.', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, 'Selamat Datang Di Website IEA Wilayah Banjarbaru', '#Berbuat Tanpa Berharap', '#Waktu Adalah Nyawa', 'gambar_1.jpg.webp', 'gambar_2.jpg.webp', 'gambar_3.jpg.webp'),
(3, '<p>1. Menjadi relawan siap siaga bagi masyarakat yang membutuhkan pertolongan gawat darurat<br>2. Secara Sukarela membantu masyarakat yang membutuhkan pertolongan gawat darurat<br>3. Menumbuhkan jiwa kesosialan dan kemanusiaan kepada seluruh masyarakat Indonesia</p>', 'Tugas IEA Wilayah Banjarbaru', '<p>4. Menyuarakan kesadaran masyarakat Indonesia untuk memprioritaskan kendaraan gawat darurat/emergency (ambulans, pemadam kebakaran, SAR, dll)<br>5. Melakukan kerjasama dengan instansi terkait dalam pelayanan kegawatdaruratan<br>6. Memperlancar jalur ambulans agar terhindar dari berbagai macam hambatan<br>7. Membantu ambulans agar cepat sampai ke rumah sakit dengan selamat tanpa membahayakan diri sendiri, ambulans, dan pengendara lain</p>', 'Fungsi IEA Wilayah Banjarbaru', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, '6281251206812', 'https://www.instagram.com/iea.banjarbaru', 'https://www.facebook.com/ieabjb.official', 'ieabanjarbaru@gmail.com', NULL, NULL),
(5, 'Jl. Trikora Komp Wengga Kuda Trikora Kuda Tahap 5 No 123 RT. 048 RW. 07 Banjarbaru, Kalimantan Selatan. Email : ieabanjarbaru@gmail.com, Telp. 082157254820', 'INDONESIAN ESCORTING AMBULANCE WILAYAH BANJARBARU', 'Bersama ini kami selaku pengurus Indonesian Escorting Ambulance Wilayah Banjarbaru memberikan tugas kepada saudara kami sebagai berikut :', 'Ketua IEA Wilayah Banjarbaru', 'Demikian surat tugas ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya, mohon agar dapat terlaksana kami ucapkan terima kasih.', 'M. Hendriani Ihsan, S.kep., Ns', 'logo-nasional.png', 'logo-organisasi.png', 'ttd.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_postingan`
--

CREATE TABLE `tb_postingan` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_postingan`
--

INSERT INTO `tb_postingan` (`id`, `judul`, `slug`, `isi`, `kategori`, `image`, `created_at`) VALUES
(1, 'Prioritaskan Kendaraan Emergency', 'prioritaskan-kendaraan-emergency', '<p><strong>Salah satu tugas kami mengingatkan masyarakat untuk memprioritaskan kendaraan gawat darurat saat di jalan raya. Edukasi dan meningkatkan kesadaran kepada pengguna jalan untuk memberikan prioritas kepada mobil ambulans adalah PR bagi kita bersama.</strong></p>\r\n', 'Informasi', 'foto_1.jpg.webp', '14 Juni 2021'),
(13, 'Launching Website IEA Banjarbaru', 'launching-website-iea-banjarbaru', '<p>Launching Website Wilayah Banjarbaru (Version 0.1) Website ini akan terus dikembangkan agar nantinya berguna bagi masyarakat yang membutuhkan. Serta menjadi media informasi untuk masyarakat yang ingin mengenal IEA Banjarbaru Kunjungi Website kami di www.ieabjb.my.id atau klik link di bio @iea.banjarbaru</p>\r\n', 'Informasi', 'InShot_20210517_104422157-min.jpg.webp', '14 Juni 2021'),
(14, 'IEA Wilayah Banjarbaru', 'iea-wilayah-banjarbaru', '<p>Menjadi relawan siap siaga bagi masyarakat yang membutuhkan pertolongan gawat darurat 2. Secara Sukarela membantu masyarakat yang membutuhkan pertolongan gawat darurat 3. Menumbuhkan jiwa kesosialan dan kemanusiaan kepada seluruh masyarakat Indonesia&nbsp;Menyuarakan kesadaran masyarakat Indonesia untuk memprioritaskan kendaraan gawat darurat/emergency (ambulans, pemadam kebakaran, SAR, dll)</p>\r\n', 'Informasi', 'InShot_20210517_104850645-min.jpg.webp', '14 Juni 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rs`
--

CREATE TABLE `tb_rs` (
  `id` int NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `link_maps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_rs`
--

INSERT INTO `tb_rs` (`id`, `nama_rs`, `link_maps`) VALUES
(1, 'RSUD H.Boejasin, Tanah Laut', 'https://maps.app.goo.gl/tzk4A'),
(2, 'RS Ibu dan Anak Ainun, Tanah Laut', 'https://maps.app.goo.gl/mhcSv'),
(3, 'RS Borneo Citra Medika, Tanah Laut', 'https://maps.app.goo.gl/99o83'),
(4, 'RS Bersalin Ibunda, Tanah Laut', 'https://maps.app.goo.gl/hV7rn'),
(5, 'RSUD Ratu Zalecha, Banjar', 'https://maps.app.goo.gl/YM9BU'),
(6, 'RSU Danau Salak, Banjar', 'https://maps.app.goo.gl/jFnJp'),
(7, 'RSJ Sambang Lihum, Banjar', 'https://maps.app.goo.gl/nbznn'),
(8, 'RSU Pelita Insani, Banjar', 'https://maps.app.goo.gl/XzRF4'),
(9, 'RS Ibu dan Anak Mutiara Bunda, Banjar', 'https://maps.app.goo.gl/ohAzh'),
(10, 'RSU Aveciena Medika, Banjar', 'https://maps.app.goo.gl/Q6Yz3'),
(11, 'RSU Ciputra Mitra Hospital, Banjar', 'https://maps.app.goo.gl/GLq77'),
(12, 'RSUD Balangan, Balangan', 'https://maps.app.goo.gl/eERbj'),
(13, 'RSUD H. Abdul Aziz Marabahan, Barito Kuala', 'https://maps.app.goo.gl/MvZpV'),
(14, 'RSUD Brigjed H. Hasan Basry Kandangan', 'https://maps.app.goo.gl/DwNaV'),
(15, 'RSU Ceria, Hulu Sungai Selatan', 'https://maps.app.goo.gl/j7C1D'),
(16, 'RSUD Daha Sejahtera, Hulu Sungai Selatan', 'https://maps.app.goo.gl/HW3rC'),
(17, 'RSUD H Damanhuri Barabai', 'https://maps.app.goo.gl/1DSUK'),
(18, 'RSUD Pambalah Batung, Hulu Sungai Utara', 'https://maps.app.goo.gl/BXE9b'),
(19, 'RS Mulia Amuntai. Hulu Sungai Utara', 'https://maps.app.goo.gl/BXE9b'),
(20, 'RSUD Kotabaru', 'https://maps.app.goo.gl/gJKHk'),
(21, 'RSUD dr. H. Andi Abdurrahman Noor, Tanah Bumbu', 'https://maps.app.goo.gl/8iFV4'),
(22, 'RS Bersalin Paradise, Tanah Bumbu', 'https://maps.app.goo.gl/vAFKB'),
(23, 'RSU Marina Permata, Tanah Bumbu', 'https://maps.app.goo.gl/D72iH'),
(24, 'RSUD H. Badaruddin Tanjung, Tabalong', 'https://maps.app.goo.gl/1ED1E'),
(25, 'RSU Pertamina Tanjung, Tabalong', 'https://maps.app.goo.gl/kiFoA'),
(26, 'RSU Handayati, Tapin', 'https://maps.app.goo.gl/zTesz'),
(27, 'RSUD Datu Sanggul Rantau, Tapin', 'https://maps.app.goo.gl/YDbTj'),
(28, 'RSU TNI-AU Tk.IV Syamsudin Noor, Banjarbaru', 'https://maps.app.goo.gl/tQsdZ'),
(29, 'RSUD Idaman Banjarbaru, Banjarbaru', 'https://maps.app.goo.gl/2ZtvP'),
(30, 'RS Ibu dan Anak Lembayung Husada, Banjarbaru', 'https://maps.app.goo.gl/5brfX'),
(31, 'RSU TK IV Guntung Payung, Banjarbaru', 'https://maps.app.goo.gl/yBMt2'),
(32, 'RSU Syifa Medika, Banjarbaru', 'https://maps.app.goo.gl/JJaVw'),
(33, 'RSU Mawar, Banjarbaru', 'https://maps.app.goo.gl/wTRju'),
(34, 'RSUD Ulin Banjarmasin, Banjarmasin', 'https://maps.app.goo.gl/PVx2d'),
(35, 'RSU Islam Banjarmasin, Banjarmasin', 'https://maps.app.goo.gl/ZhKoS'),
(36, 'RSU Suaka Insan, Banjarmasin', 'https://maps.app.goo.gl/9sugR'),
(37, 'RSU Sari Mulia, Banjarmasin', 'https://maps.app.goo.gl/sYqX9'),
(38, 'RSU Tk.III Dr. R.Soeharsono, Banjarmasin', 'https://maps.app.goo.gl/HYQcx'),
(39, 'RSUD Dr. H. Moch. Ansari Saleh, Banjarmasin', 'https://maps.app.goo.gl/Hyt6A'),
(40, 'RSU Bhayangkara Tk. III Banjarmasin, Banjarmasin', 'https://maps.app.goo.gl/t6Qc9'),
(41, 'RSK Bedah Banjarmasin Siaga, Banjarmasin', 'https://maps.app.goo.gl/UuBaw'),
(42, 'RS Ibu dan Anak Annisa, Banjarmasin', 'https://maps.app.goo.gl/sjRo1'),
(43, 'RSB Ibunda Siti, Banjarmasin', 'https://maps.app.goo.gl/tGyo2'),
(44, 'RSUD H. Boejasin Pelaihari (baru), Tanah Laut', 'https://maps.app.goo.gl/rrwrtuHGTKEeME3E8'),
(47, 'Rumah Sakit Islam Sultan Agung, Banjarbaru', 'https://goo.gl/maps/G1QhfUz7Cvyyc1tE6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nopol_user` varchar(12) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tlp_user` varchar(13) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `nra` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `nopol_user`, `jk`, `alamat`, `tlp_user`, `jabatan`, `nra`, `email`, `username`, `password`, `level`, `image`, `role_id`) VALUES
(1, 'Admin', 'DA 6420 BBD', 'Laki-laki', 'Komplek Saadah 2, Jl.Muslimin No.21A Rt.15 Rw.04, Sungai Paring, Martapura Kota', '082157254820', 'Anggota', 'BB-305-012', 'hafiizh10@gmail.com', 'admin', '$2y$10$PjUtP/M2SPuN8h3niJYFxeTixbFO88GfGWLcH57gHghjm8ioRqn5O', 'Admin', 'default.jpg', 1),
(17, 'Pengguna', 'DA 8364 BA', 'Laki-laki', 'Komplek Citra Graha Banjarbaru KM.9 Kalimantan Selatan', '08212534273', 'Anggota', 'BB-305-112', 'hafiizh10@gmail.com', 'pengguna', '$2y$10$czq4TfYbBTJImGxBi.7hLOotLEQBK8wAC9T9ZNFNISJ3qIoz9YNIy', 'User', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int NOT NULL,
  `role_id` int NOT NULL,
  `menu_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 1, 3),
(11, 5, 2),
(14, 1, 10),
(15, 2, 10),
(17, 1, 12),
(18, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Menu'),
(10, 'Fitur'),
(11, 'Surat'),
(12, 'Pengaturan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int NOT NULL,
  `menu_id` int NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(5, 3, 'Pengaturan Menu', 'menu', 1),
(6, 3, 'Pengaturan Submenu', 'menu/submenu', 1),
(7, 1, 'Halaman Utama', 'user/dashboard', 1),
(8, 1, 'Profil Saya', 'user', 1),
(10, 3, 'Pengaturan Level', 'admin/role', 1),
(12, 1, 'Ganti Password', 'user/ganti_password', 1),
(14, 2, 'Tambah Rumah Sakit', 'admin/tambah_rs', 1),
(15, 10, 'Daftar Rumah Sakit', 'user/rs', 1),
(16, 2, 'Data Calon Anggota', 'admin/calon_anggota', 1),
(17, 2, 'Data Anggota', 'admin/user', 1),
(18, 10, 'Laporan Kecelakaan', 'fitur/kecelakaan', 1),
(19, 10, 'Laporan Kebakaran', 'fitur/kebakaran', 1),
(20, 10, 'Pelayanan Ambulans', 'fitur/ambulans', 1),
(21, 2, 'Kendaraan Operasional', 'admin/kendaraan', 1),
(22, 10, 'Laporan Giat', 'fitur/giat', 1),
(23, 10, 'Data Kegiatan', 'fitur/data_giat', 1),
(24, 11, 'Buat Surat Tugas', 'surat', 1),
(25, 12, 'Pengaturan Aplikasi', 'pengaturan/aplikasi', 1),
(26, 12, 'Pengaturan API', 'pengaturan/api', 1),
(28, 12, 'Pengaturan Website', 'pengaturan/website', 1),
(29, 2, 'Berita & Postingan', 'admin/postingan', 1),
(30, 1, 'Galeri Kegiatan', 'user/galeri', 1),
(31, 11, 'Pengaturan Surat', 'surat/pengaturan_surat', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_giat`
--
ALTER TABLE `tb_giat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_korban`
--
ALTER TABLE `tb_korban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengaturan_website`
--
ALTER TABLE `tb_pengaturan_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_postingan`
--
ALTER TABLE `tb_postingan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rs`
--
ALTER TABLE `tb_rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kendaraan`
--
ALTER TABLE `tb_kendaraan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_korban`
--
ALTER TABLE `tb_korban`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengaturan_website`
--
ALTER TABLE `tb_pengaturan_website`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_postingan`
--
ALTER TABLE `tb_postingan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_rs`
--
ALTER TABLE `tb_rs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
