-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 03:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis-pemukiman`
--

-- --------------------------------------------------------

--
-- Table structure for table `biayapembangunan`
--

CREATE TABLE `biayapembangunan` (
  `id_biaya` int(11) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `volume` varchar(255) NOT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `harga_satuan` varchar(255) DEFAULT NULL,
  `jumlah_harga` varchar(255) DEFAULT NULL,
  `ket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biayapembangunan`
--

INSERT INTO `biayapembangunan` (`id_biaya`, `jenis`, `volume`, `satuan`, `harga_satuan`, `jumlah_harga`, `ket`) VALUES
(2, 'Fasilitas Umum (pilah, kumpul)', '62,99', '-', '2.500.000', '157.475.000', 'terdiri atas PD, Kuburan, Tanah Bengkok, & test farm'),
(3, 'Fasilitas Umum (tebas, tebang, potong)', '62,99', '-', '2.950.000', '185.820.500', 'terdiri atas PD, Kuburan, Tanah Bengkok, & test farm'),
(4, 'Lahan Pekarangan & LU I (tebas, tebang, potong)', '354', '-', '2.950.000', '1.044.300.000', 'biaya pembukaan lahan sp.10 (354 KK)'),
(5, 'Lahan Pekarangan & LU I (pilah, kumpul)', '354', '-', '2.500.000', '885.000.000', 'biaya pembukaan lahan sp.10 (354 KK)');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `bidang_kode` int(11) NOT NULL,
  `bidang_nama` varchar(200) DEFAULT NULL,
  `bidang_keterangan` text NOT NULL,
  `bidang_gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`bidang_kode`, `bidang_nama`, `bidang_keterangan`, `bidang_gambar`) VALUES
(100, 'Lahan Pekarangan A', 'Ket Lahan Pekarangan A', 'gambar_1.jpg'),
(200, 'Lahan Pertanian B', 'Ket Lahan Pertanian B', 'gambar_2.jpg'),
(300, 'Lahan Hutan C', 'Ket Lahan Hutan C', 'gambar_3.jpg'),
(400, 'Lahan Fasum D', 'Ket Lahan Fasum D', 'gambar_4.jpeg'),
(500, 'Lahan Pemukiman E', 'Ket Lahan Pemukiman E', 'gambar_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `judul_website` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `judul_website`, `alamat`, `email`, `telp`) VALUES
(1, 'SISFO-GIS KAWASAN TRANSMIGRASI', 'Jl. TMP. Kalibata ', 'kawasantransmigrasi@gmail.com', '02179172244');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(5000) NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`, `id_sessions`) VALUES
(4, 'fas fa-fw fa-folder', 'Satuan luas permukiman SP.10', '112kk', '');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_fisik_lahan`
--

CREATE TABLE `kondisi_fisik_lahan` (
  `id_tabelmiring` int(11) NOT NULL,
  `simbol` varchar(100) NOT NULL,
  `kemiringan_lahan` varchar(50) NOT NULL,
  `bentuk_lahan` varchar(100) NOT NULL,
  `luas_Ha` varchar(100) NOT NULL,
  `luas_persen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_fisik_lahan`
--

INSERT INTO `kondisi_fisik_lahan` (`id_tabelmiring`, `simbol`, `kemiringan_lahan`, `bentuk_lahan`, `luas_Ha`, `luas_persen`) VALUES
(1, 'A', '0 - 3', 'Datar', '1,357,156', '100,00');

-- --------------------------------------------------------

--
-- Table structure for table `pilok_tanjungbuka`
--

CREATE TABLE `pilok_tanjungbuka` (
  `id_lokasi` int(11) NOT NULL,
  `letak_lokasi` varchar(1000) NOT NULL,
  `batas_lokasi` varchar(1000) NOT NULL,
  `pencapaian_lokasi` varchar(5000) NOT NULL,
  `alokasi_lahan` varchar(1000) NOT NULL,
  `pembangunan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilok_tanjungbuka`
--

INSERT INTO `pilok_tanjungbuka` (`id_lokasi`, `letak_lokasi`, `batas_lokasi`, `pencapaian_lokasi`, `alokasi_lahan`, `pembangunan`) VALUES
(2, 'Desa  : Tanjung Buka', 'Sebelah Utara  : Sungai Bulungan', 'Route Samarinda-Sangatta menempuh jarak 200km dengan waktu 4 jam menggunakan sarana transportasi kendaraan roda 4, kondisi jalan aspal dan beberapa ruas jalan rusak', 'Luas Areal Survei  : 1.357,156 Ha', 'Panjang Jalan Poros/Penghubung  : 3,839 km'),
(3, 'Kecamatan :  Tanjung Palas Hilir ', 'Sebelah Selatan  :  Sungai Selimau ', 'Route Sangatta-Tanjung Redeb menempuh jarak 349km dengan waktu 9 jam menggunakan sarana transportasi kendaraan roda 4, kondisi jalan aspal dan beberapa ruas jalan rusak', 'Lahan Pekarangan (LP)  : 0,50 Ha/KK ', 'Panjang Jalan Desa    : 16,164 km '),
(4, ' Kabupaten  :  Bulungan ', 'Sebelah Barat  :  Sungai Meretas/ Lokasi Transmigrasi SP.2 ', 'Route Tanjung Redeb-Tanjung Selor menempuh jarak 138km dengan waktu 2 jam menggunakan sarana transportasi kendaraan roda 4, kondisi jalan aspal dan beberapa ruas jalan rusak', ' Lahan Usaha I (LU I)   : 0,50 Ha/KK ', 'Gorong-gorong : Jalan Poros  : 54 m / 6 bh  dan Jalan Desa  : 133 m / 19 bh '),
(5, ' Provinsi :  Kalimantan Utara ', 'Sebelah Timur  :  Sungai Sebiabau ', 'Route Samarinda-Tanjung Selor  dengan waktu 90 menit menggunakan kendaraan pesawat terbang ', 'Lahan Usaha II (LU II)   : 1,00 Ha/KK ', 'Panjang Jembatan    : 156 m dengan jumlah      : 11 buah'),
(6, ' WPP/ SKP/ SP : VII/ H/ X   ', '-', 'Route Tanjung Selor-Desa Tanjung Buka dengan waktu 30 menit menggunakan kendaraan klotok, kondisi jalan menyebrangi sungai bulungan', ' Luas Lahan Pusat Desa/ FU  : - FU Blok A    : 6,69 Ha - FU Blok B    : 2,99 Ha - FU Blok C    : 3,00 Ha ', 'Dermaga      : 5 bh ( 5 x 15 m ) '),
(7, 'Luas Areal :  1.357.156 Ha ', '-', '-', ' Luas Lahan untuk Jalan Penghubung.:  - Jalan Poros, dan   : 4,32 Ha - Jalan Desa    : 15,42 Ha ', 'Jaringan Drainase    : 16,359 Km '),
(8, ' Pola Usaha :  TPLB dan Daya Tampung :  354 KK ', '-', '-', '-', 'Sumber Material (batu, pasir)   : Tanjung Palas '),
(9, ' Model :  Desa Baru + Penataan Desa ', '-', '-', '-', 'Jarak      : 12 Km ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `ket_foto` varchar(255) DEFAULT NULL,
  `foto_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `id_kegiatan`, `ket_foto`, `foto_kegiatan`) VALUES
(1, 1, 'Masjid', 'Masjid_SP__10.jpg'),
(3, 3, 'Rumah Transmigran', 'rumah.jpeg'),
(4, 3, 'pembangunan rumah transmigran', 'slider1.jpeg'),
(7, 13, 'Dermaga Standar 5x15m', 'dermaga_standar.jpg'),
(9, 12, 'Jalan Desa', 'jalan_desa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_kegiatan` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `jenis_kegiatan`, `icon`) VALUES
(6, 'Masjid', 'pembangunan_masjid.png'),
(7, 'Balai Desa', 'balai_desa2.png'),
(8, 'Rumah dan Jamban Keluarga', 'mck2.png'),
(9, 'Kantor Unit', 'kantor_unit1.png'),
(10, 'Rumah Kepala UPT', 'RTLH2.png'),
(11, 'Rumah Petugas UPT', 'RTLH11.png'),
(12, 'Gudang', 'paving2.png'),
(13, 'Puskesmas Pembantu', '154-1547138_villa-clipart-property-home-icon-green-small-png2.png'),
(14, 'Jalan Penghubung', 'jembatan2.png'),
(15, 'Gorong- Gorong', 'lapen2.png'),
(16, 'Jalan Desa', 'hotmix2.png'),
(17, 'Dermaga Standar (5x15m)', 'drainase2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `id_jenis` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_sumberdana` int(11) NOT NULL,
  `anggaran` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `pelaksana` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `id_jenis`, `alamat`, `id_sumberdana`, `anggaran`, `tahun`, `volume`, `pelaksana`, `deskripsi`, `latitude`, `longitude`, `sampul`) VALUES
(1, 'Pembangunan Fasum', 6, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 1, 190000000, '2019', '1', 'Kementerian Transmigrasi', 'sudah diselesaikan', '2.794086281707189', '117.52799519499192', 'WhatsApp_Image_2020-03-27_at_11_20_02.jpeg'),
(2, 'Pembangunan Fasum', 7, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 2, 180000000, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah diselesaikan', '2.7925967453874314', '117.52678187356007', 'Balai_Desa_SP_10.jpg'),
(3, 'Pembangunan Fasum', 8, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 3, 45900000, '2019', '300', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikann', '2.7956401124043677', '117.52950668334962', 'rumahtransmigran.jpg'),
(5, 'Pembangunan Fasum', 9, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 4, 195000000, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.7947399624182547', '117.52504232247637', 'Kantor_Unit_SP_10.jpg'),
(6, 'Pembangunan Fasum', 10, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 5, 150000000, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.79328257526291', '117.52538545881866', 'slider11.jpeg'),
(7, 'Pembangunan Fasum', 11, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 6, 200000000, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.795983026503153', '117.5274886136052', 'rumah.jpeg'),
(8, 'Pembangunan Fasum', 12, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 7, 145903500, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.7954472231797545', '117.52525678269032', 'Gudang_Unit_SP__10.jpg'),
(9, 'Pembangunan Fasum', 13, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 8, 210000000, '2019', '1', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.7953400624857245', '117.52298350442253', 'Puskesmas_Pembantu_SP__10-1.jpg'),
(10, 'Pembangunan Jalan dan Dermaga', 14, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 9, 863775000, '2019', '3.839 km', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.7957847793020143', '117.5250005722046', 'jalan_penghubung.jpeg'),
(11, 'Pembangunan Jalan dan Dermaga', 15, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 10, 108000000, '2019', '54 m', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.798233397788655', '117.52697246440187', 'gorong_gorong.jpg'),
(12, 'Pembangunan Jalan dan Dermaga', 16, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 11, 2101320000, '2019', '16.164 km', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.7934111683199725', '117.52662932805951', 'jalan_desa.jpg'),
(13, 'Pembangunan Jalan dan Dermaga', 17, 'SP.10, Tj. buka, Kabupaten Bulungan, Kalimantan Utara', 12, 660000000, '2019', '5 bh', 'Kementerian Desa dan Transmigrasi', 'sudah terselesaikan', '2.8003123083754917', '117.52942047983794', 'dermaga.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sumberdana`
--

CREATE TABLE `tbl_sumberdana` (
  `id_sumberdana` int(11) NOT NULL,
  `sumber_dana` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sumberdana`
--

INSERT INTO `tbl_sumberdana` (`id_sumberdana`, `sumber_dana`, `icon`) VALUES
(1, 'APBN (masjid)', 'pembangunan_masjid1.png'),
(2, 'APBN (balai desa)', 'balai_desa1.png'),
(3, 'APBN (rumah &jamban kelurga)', 'mck1.png'),
(4, 'APBN (kantor unit)', 'kantor_unit2.png'),
(5, 'APBN(rumah kepala UPT)', 'RTLH1.png'),
(6, 'APBN(rumah petugas UPT)', 'RTLH21.png'),
(7, 'APBN (gudang)', 'paving1.png'),
(8, 'APBN (puskesmas pembantu)', '154-1547138_villa-clipart-property-home-icon-green-small-png1.png'),
(9, 'APBN (jalan penghubung)', 'jembatan1.png'),
(10, 'APBN (gorong-gorong)', 'lapen1.png'),
(11, 'APBN (jalan desa)', 'hotmix1.png'),
(12, 'APBN (dermaga standar)', 'drainase1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `tahun`) VALUES
(1, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Shahnaz', 'admin', 'admin'),
(2, 'fachriyanthy', 'yanthy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_transmigrasi`
--

CREATE TABLE `tentang_transmigrasi` (
  `id_transmigrasi` int(11) NOT NULL,
  `transmigrasi` text NOT NULL,
  `sejarah` text NOT NULL,
  `tujuan` text NOT NULL,
  `syarat_transmigran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_transmigrasi`
--

INSERT INTO `tentang_transmigrasi` (`id_transmigrasi`, `transmigrasi`, `sejarah`, `tujuan`, `syarat_transmigran`) VALUES
(1, 'Transmigrasi (dari bahasa Belanda: transmigratie) adalah suatu program yang dibuat oleh pemerintah Indonesia untuk memindahkan penduduk dari suatu daerah yang padat penduduk (kota) ke daerah lain (desa) di dalam wilayah Indonesia. Penduduk yang melakukan transmigrasi disebut Transmigran. ', ' Setelah kemerdekaan Indonesia diakui oleh Belanda tahun 1949 di bawah pemerintahan Soekarno, program transmigrasi dilanjutkan dan diperluas cakupannya sampai Papua. Pada puncaknya antara tahun 1979 dan 1984, 535.000 keluarga (hampir 2,5 juta jiwa) pindah tempat tinggal melalui program transmigrasi. Dampak demografisnya sangat besar di sejumlah daerah; misalnya, pada tahun 1981, 60% dari 3 juta penduduk provinsi Lampung adalah transmigran.', 'Menurut pemerintah Indonesia dan komunitas pembangunan, tujuan program ini adalah memindahkan jutaan orang Indonesia dari pulau Jawa, Bali, dan Madura yang padat ke pulau-pulau luar yang penduduknya sedikit demi menciptakan kepadatan penduduk yang merata. Transmigrasi akan mengentaskan kemiskinan dengan memberikan lahan dan kesempatan baru bagi para pendatang miskin. Transmigrasi juga akan menguntungkan Indonesia dengan meningkatkan pemanfaatan sumber daya alam di pulau-pulau yang kurang padat penduduk. Program ini juga bertujuan untuk menyatukan seluruh bangsa dengan menciptakan identitas nasional Indonesia yang tunggal yang menggantikan identitas daerah. Pemerintah Indonesia secara resmi menyatakan bahwa tidak ada pemisahan ', 'Syarat untuk menjadi Transmigran: 1.Warga Negara Indonesia adalah setiap warga negara yang berdomisili di wilayah Negara Republik Indonesia.                                2.Berkeluarga dibuktikan dengan Surat Nikah dan Kartu Keluarga.                                                                3.Memiliki Kartu Tanda Penduduk (KTP) yang masih berlaku.                                 4.Berusia antara 18 sampai dengan 50 tahun sesuai dengan Kartu Tanda Penduduk (KTP), kecuali diatur lain dalam perjanjian kerja sama antar daerah.                                5.Belum pernah bertransmigrasi yang dibuktikan dengan Surat Keterangan dari Kepala Desa/Lurah di mana pendaftar berdomisili.                                6.Berbadan sehat yang dibuktikan dengan Surat Keterangan Dokter.                                7.	Memiliki keterampilan sesuai kebutuhan untuk mengembangkan potensi sumber daya yang tersedia di lokasi tujuan sebagaimana diatur dalam perjanjian kerja sama antar daerah.                                8.Menandatangani Surat Pernyataan kesanggupan melaksanakan kewajiban sebagai transmigran.                                9.Lulus seleksi yang dibuktikan dengan Surat Keterangan Lulus dari Tim yang diberikan wewenang untuk melaksanakan seleksi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biayapembangunan`
--
ALTER TABLE `biayapembangunan`
  ADD PRIMARY KEY (`id_biaya`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`bidang_kode`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `kondisi_fisik_lahan`
--
ALTER TABLE `kondisi_fisik_lahan`
  ADD PRIMARY KEY (`id_tabelmiring`);

--
-- Indexes for table `pilok_tanjungbuka`
--
ALTER TABLE `pilok_tanjungbuka`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_sumberdana`
--
ALTER TABLE `tbl_sumberdana`
  ADD PRIMARY KEY (`id_sumberdana`);

--
-- Indexes for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tentang_transmigrasi`
--
ALTER TABLE `tentang_transmigrasi`
  ADD PRIMARY KEY (`id_transmigrasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biayapembangunan`
--
ALTER TABLE `biayapembangunan`
  MODIFY `id_biaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `bidang_kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kondisi_fisik_lahan`
--
ALTER TABLE `kondisi_fisik_lahan`
  MODIFY `id_tabelmiring` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pilok_tanjungbuka`
--
ALTER TABLE `pilok_tanjungbuka`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_sumberdana`
--
ALTER TABLE `tbl_sumberdana`
  MODIFY `id_sumberdana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tentang_transmigrasi`
--
ALTER TABLE `tentang_transmigrasi`
  MODIFY `id_transmigrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
