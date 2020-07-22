-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 05:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelku`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafes`
--

CREATE TABLE `cafes` (
  `id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah` int(11) NOT NULL,
  `nomor_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` int(11) NOT NULL,
  `barista` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cafes`
--

INSERT INTO `cafes` (`id`, `nama`, `alamat`, `daerah`, `nomor_telpon`, `kategori`, `barista`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
('1', 'UMPAMA', 'Krawitan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55584', 2, '0812-2646-6022', 2, '-', 'Setiap hari jam 10am - 12 pm', '1576392870_umpama.JPG', NULL, NULL),
('10', 'Kalimilk Jogja', 'Kaliurang St No.KM. 4.9, Kocoran, Caturtunggal, Depok Sub-District, Sleman Regency, Aceh 55582', 2, '-', 4, '-', 'Setiap hari 07:30am - 10:45pm', '1576534062_Kalimilk.JPG', NULL, NULL),
('11', 'II Tempo Gelato', 'Jalan Kaliurang KM 5,2 No. 28, Karang Wuni, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55153', 2, '-', 1, '-', 'Setiap hari jam 10am - 11pm', '1576534706_tempo gelato.jpg', NULL, NULL),
('12', 'ICONIC Gelato & Bist', 'Magelang St, Kutu Patran, Sinduadi, Mlati, Sleman Regency, Special Region of Yogyakarta 55284', 2, '0811-2565-600', 1, '--', 'Setiap hari jam 8am - 10pm', '1576543896_iconic.jpg', NULL, NULL),
('2', 'THE PRAJA', 'Boutique & Cafe, Kledokan, 3rd Floor Raminten, Kledokan, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55584', 2, '-', 2, '-', 'Setiap hari 24 jam', '1576393398_The Praja.JPG', NULL, NULL),
('3', 'TOM\'S MILK - Kaliura', 'Kaliurang St No.KM. 14, Tj. Manding, Umbulmartani, Ngemplak, Sleman Regency, Special Region of Yogyakarta 55584', 2, '(0274) 2861407', 4, '-', 'Setiap hari jam 2pm - 12am', '1576393667_Toms Milk.JPG', NULL, NULL),
('4', 'HABITAT', 'Jl. Palagan Tentara Pelajar No.2-33, Karang Moko, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', 2, '0877-6649-7999', 3, '-', 'Setiap hari 24 jam', '1576393997_HABITAT.JPG', NULL, NULL),
('5', 'Mezzanine Jogja', 'Jl. Palagan Tentara Pelajar No.Km. 8 No.30, Karang Moko, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', 2, '0878-2406-3145', 1, '-', 'Setiap hari 9am - 12am', '1576398395_Mezzanine.JPG', NULL, NULL),
('6', 'Kopi Gajah', 'Jl. Gondangan 6, Nglaban, Sinduharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', 2, '(0274) 2837519', 3, '-', 'Setiap hari 6am - 11pm', '1576398654_Kopi Gajah.JPG', NULL, NULL),
('7', 'Bento Kopi Jakal', 'Jl. Kaliurang KM. 12,5, Sardonoharjo, Ngaglik, Candi Karang, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', 2, '0812-1601-8080', 2, '-', 'Setiap hari 24 jam', '1576399009_Bento Kopi Jakal.JPG', NULL, NULL),
('8', 'Kopi Ganja', 'Kaliurang St No.Km, RW.12, Candi, Sardonoharjo, Ngaglik, Sleman Regency, Special Region of Yogyakarta 55581', 2, '0857-2778-4362', 3, '-', 'Setiap hari jam 5pm - 2am', '1576400223_Kopi Ganja.JPG', NULL, NULL),
('9', 'Warung Kopi Klotok', 'Kaliurang St No.KM.16, Area Sawah, Pakembinangun, Pakem, Sleman Regency, Special Region of Yogyakarta 55582', 2, '0822-3131-2004', 1, '-', 'Setiap hari jam 7am - 10pm', '1576401420_Warung Kopi Klotok.JPG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daerahs`
--

CREATE TABLE `daerahs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daerahs`
--

INSERT INTO `daerahs` (`id`, `nama_daerah`, `created_at`, `updated_at`) VALUES
(1, 'Kota Yogyakarta', NULL, NULL),
(2, 'Sleman', NULL, NULL),
(3, 'Bantul', NULL, NULL),
(4, 'Gunungkidul', NULL, NULL),
(5, 'Kulon Progo', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Instagenic', NULL, NULL),
(2, '24 Jam', NULL, NULL),
(3, 'Acara', NULL, NULL),
(4, 'Wifi kencang', NULL, NULL),
(5, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_04_015047_create_cafes_table', 2),
(4, '2019_12_04_102219_create_daerahs_table', 2),
(5, '2019_12_04_110548_create_kategoris_table', 2),
(6, '2019_12_12_095344_create_sewabaristas_table', 3),
(7, '2019_12_13_014312_create_sewakafes_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `harga`) VALUES
(1, '500000'),
(2, '750000'),
(3, '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `pegawai_id` int(50) NOT NULL,
  `pegawai_nama` varchar(100) NOT NULL,
  `pegawai_jabatan` varchar(20) NOT NULL,
  `pegawai_umur` int(8) NOT NULL,
  `pegawai_alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_jabatan`, `pegawai_umur`, `pegawai_alamat`) VALUES
(1, 'Zenta', 'Dosen', 20, 'Jalan Flamboyan');

-- --------------------------------------------------------

--
-- Table structure for table `sewabaristas`
--

CREATE TABLE `sewabaristas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cafe` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewabaristas`
--

INSERT INTO `sewabaristas` (`id`, `cafe`, `nama`, `email`, `nomor_telpon`, `tanggal`, `acara`, `tempat`, `keterangan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'Zenta Hapsari Elfariani', '18523163@students.uii.ac.id', '0811507086', '2019-12-18', 'Keluarga', 'di rumah', 'butuh 1 barista yang dapat menyediakan kopi 50', 1, NULL, NULL),
(2, 1, 'Risca Naquitasia', '18523136@students.uii.ac.id', '-', '2019-12-30', 'Pernikahan', 'Hotel de luna', 'butuh 3 barista', 1, NULL, NULL),
(9, 1, 'Zenta Hapsari Elfariani', 'zenta.thezentazenta', '-', '2020-07-14', 'Pernikahan', 'Hotel de luna', '-', 4, NULL, NULL),
(10, 1, 'Norva', '18523197@students.uii.ac.id', '0812-2646-6021', '2020-07-06', 'Ulang Tahun', 'Hotel de luna', '-', 1, NULL, NULL),
(11, 1, 'Zenta Hapsari Elfariani', '18523163@students.uii.ac.id', '0811507086', '2020-07-06', 'Keluarga', 'Hotel de luna', '-', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sewakafes`
--

CREATE TABLE `sewakafes` (
  `id` int(20) UNSIGNED NOT NULL,
  `cafe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `acara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sewakafes`
--

INSERT INTO `sewakafes` (`id`, `cafe`, `nama`, `email`, `nomor_telpon`, `tanggal`, `acara`, `jumlah_orang`, `keterangan`, `id_paket`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '1', 'Atika Tsamara', '18523197@students.uii.ac.id', '0812-2646-6021', '2020-06-28', 'Pembubaran Panitia INPUT 2019', 84, 'Butuh speaker', '1', 1, NULL, NULL),
(2, '1', 'Cut Husnul Fitri', '18523195@students.uii.ac.id', '(0274) 2861407', '2020-06-28', 'Ulang Tahun', 20, 'akan ada dekorasi pesta', '3', 1, NULL, NULL),
(3, '1', 'Risca Naquitasia', '18523136@students.uii.ac.id', '0812-2646-6021', '2019-12-18', 'Pernikahan', 5, '-', '2', 2, NULL, NULL),
(4, '1', 'sabil', '1852316o@students.uii.ac.id', '-', '2020-06-30', 'Keluarga', 11, '-', '2', 2, NULL, NULL),
(5, '1', 'Zenta Hapsari Elfariani', 'zenta.elfariani@gmail.com', '0811507086', '2020-06-30', 'Pernikahan', 12, '-', '3', 2, NULL, NULL),
(22, '1', 'Zenta Hapsari Elfariani', '18523163@students.uii.ac.id', '0811507086', '2020-07-15', 'Keluarga', 2, 'yey', '1', 1, NULL, NULL),
(23, '1', 'Norva', '18523197@students.uii.ac.id', '0812-2646-6021', '2020-07-13', 'Pernikahan', 2, '-', '1', 1, NULL, NULL),
(24, '1', 'Zenta Hapsari Elfariani', '18523163@students.uii.ac.id', '(0274) 2861407', '2020-07-30', 'Pembubaran Panitia INPUT 2019', 12, '-', '1', 3, NULL, NULL),
(25, '1', 'Zenta Hapsari Elfariani', 'zenta.elfariani@gmail.com', '-', '2020-07-14', 'Ulang Tahun', 15, '-', '1', 1, NULL, NULL),
(26, '1', 'Zenta', 'zenta.elfariani@gmail.com', '0811507086', '2020-04-28', 'Pernikahan', 33, '-', '1', 3, NULL, NULL),
(27, '1', 'Zenta Hapsari Elfariani', 'zenta.elfariani@gmail.com', '0811507086', '2020-07-06', 'Keluarga', 10, '-', '1', 2, NULL, NULL),
(28, '1', 'Norva', 'kafesjogja@gmail.com', '0811507086', '2020-07-06', 'Ulang Tahun', 17, '-', '1', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zenta Hapsari Elfariani', 'umpama_cafe@gmail.com', NULL, '$2y$10$TTBhPRNTljGcJsrDt8bU5OgCv84blr5DxHKyrwPJITiS4aRkNHZoG', NULL, '2020-07-04 07:04:46', '2020-07-04 07:04:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cafes`
--
ALTER TABLE `cafes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `daerahs`
--
ALTER TABLE `daerahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`pegawai_id`);

--
-- Indexes for table `sewabaristas`
--
ALTER TABLE `sewabaristas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewakafes`
--
ALTER TABLE `sewakafes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket` (`id_paket`),
  ADD KEY `cafe_2` (`cafe`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daerahs`
--
ALTER TABLE `daerahs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000002;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `pegawai_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sewabaristas`
--
ALTER TABLE `sewabaristas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sewakafes`
--
ALTER TABLE `sewakafes`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
