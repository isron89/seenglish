-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 08:30 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seenglish_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE `aktifitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detailsoals`
--

CREATE TABLE `detailsoals` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jenis` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pila` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilb` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pild` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kunci` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sesi` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailsoals`
--

INSERT INTO `detailsoals` (`id`, `id_soal`, `jenis`, `soal`, `audio`, `pila`, `pilb`, `pilc`, `pild`, `pile`, `kunci`, `score`, `id_user`, `status`, `sesi`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '<p>Soal 1</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:01:38', '2022-02-19 01:01:38'),
(2, 1, '1', '<p>Soal 2</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:01:42', '2022-02-21 05:45:30'),
(3, 1, '1', '<p>Soal 3</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:02:13', '2022-02-21 05:45:44'),
(4, 1, '1', '<p>Soal 4</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:02:14', '2022-02-21 05:45:53'),
(5, 1, '1', '<p>Soal 5</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:02:15', '2022-02-21 05:46:01'),
(6, 1, '1', '<p>Soal 6</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:02:16', '2022-02-21 05:46:10'),
(7, 1, '1', '<p>Soal 7</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '50.00', 1, 'Y', 'f0cab6b1c737781a860b45372932dc4f', '2022-02-19 01:02:16', '2022-02-21 05:45:14'),
(8, 2, '1', '<p>Soal 1</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', '1325aac1b3df3f539e672bec7e3b0d63', '2022-02-19 23:34:57', '2022-02-20 00:25:15'),
(9, 2, '1', '<p>Soal 2</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'D', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:25:07', '2022-02-20 00:25:07'),
(10, 2, '1', '<p>Soal 3</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:25:34', '2022-02-20 00:25:34'),
(11, 2, '1', '<p>Soal 4</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:25:43', '2022-02-20 00:25:43'),
(12, 2, '1', '<p>Soal 5</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'E', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:25:51', '2022-02-20 00:25:51'),
(13, 2, '1', '<p>Soal 6</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:25:58', '2022-02-20 00:25:58'),
(14, 2, '1', '<p>Soal 7</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:05', '2022-02-20 00:26:05'),
(15, 2, '1', '<p>Soal 8</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'D', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:12', '2022-02-20 00:26:12'),
(16, 2, '1', '<p>Soal 9</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:21', '2022-02-20 00:26:21'),
(17, 2, '1', '<p>Soal 10</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:28', '2022-02-20 00:26:28'),
(18, 2, '1', '<p>Soal 11</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:35', '2022-02-20 00:26:35'),
(19, 2, '1', '<p>Soal 12</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:40', '2022-02-20 00:26:40'),
(20, 2, '1', '<p>Soal 13</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:44', '2022-02-20 00:26:44'),
(21, 2, '1', '<p>Soal 14</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:26:53', '2022-02-20 00:26:53'),
(22, 2, '1', '<p>Soal 15</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:01', '2022-02-20 06:18:30'),
(23, 2, '1', '<p>Soal 16</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'E', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:07', '2022-02-20 00:27:07'),
(24, 2, '1', '<p>Soal 17</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:12', '2022-02-20 00:27:12'),
(25, 2, '1', '<p>Soal 18</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:17', '2022-02-20 00:27:17'),
(26, 2, '1', '<p>Soal 19</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:21', '2022-02-20 00:27:21'),
(27, 2, '1', '<p>Soal 20</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'E', '25.00', 1, 'Y', 'a5ace2935a8d4422b5c9a2ba25479553', '2022-02-20 00:27:28', '2022-02-20 00:27:28'),
(28, 3, '1', '<p>Soal 1&nbsp;&nbsp;&nbsp;&nbsp;</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'C', '100.00', 1, 'Y', 'fef02df46a58c0cd84371c06e44e7dce', '2022-02-23 08:42:02', '2022-02-23 08:42:02'),
(29, 3, '1', '<p>Soal 2</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'B', '100.00', 1, 'Y', 'fef02df46a58c0cd84371c06e44e7dce', '2022-02-23 08:42:11', '2022-02-23 08:42:11'),
(30, 3, '1', '<p>Soal 3</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'A', '100.00', 1, 'Y', 'fef02df46a58c0cd84371c06e44e7dce', '2022-02-23 08:42:19', '2022-02-23 08:42:19'),
(31, 3, '1', '<p>Soal 4</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'D', '100.00', 1, 'Y', 'fef02df46a58c0cd84371c06e44e7dce', '2022-02-23 08:42:25', '2022-02-23 08:42:25'),
(32, 3, '1', '<p>Soal 5</p>', NULL, '<p>A</p>', '<p>B</p>', '<p>C</p>', '<p>D</p>', '<p>E</p>', 'E', '100.00', 1, 'Y', 'fef02df46a58c0cd84371c06e44e7dce', '2022-02-23 08:42:30', '2022-02-23 08:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `detail_soal_esays`
--

CREATE TABLE `detail_soal_esays` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_soal` int(11) NOT NULL,
  `soal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribusisoals`
--

CREATE TABLE `distribusisoals` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distribusisoals`
--

INSERT INTO `distribusisoals` (`id`, `id_soal`, `id_kelas`, `created_at`, `updated_at`) VALUES
(10, 1, 2, '2022-02-20 06:18:52', '2022-02-20 06:18:52'),
(12, 2, 1, '2022-02-20 06:20:02', '2022-02-20 06:20:02'),
(17, 2, 2, '2022-02-20 06:32:38', '2022-02-20 06:32:38'),
(21, 3, 3, '2022-02-23 08:41:40', '2022-02-23 08:41:40'),
(23, 1, 1, '2022-02-24 02:14:18', '2022-02-24 02:14:18'),
(24, 1, 3, '2022-02-24 02:14:27', '2022-02-24 02:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `informasis`
--

CREATE TABLE `informasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('A','N') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasis`
--

INSERT INTO `informasis` (`id`, `judul`, `isi`, `tanggal`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tes Info', 'CrudController', '2022-02-23', '', 'A', '2022-02-22 02:52:12', '2022-02-22 02:52:12'),
(2, 'Tes Info Dua 5', 'Isi info dua 5', '2022-02-25', 'GambarInfo__1348221623.png', 'A', '2022-02-22 04:36:14', '2022-02-23 02:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `jawabs`
--

CREATE TABLE `jawabs` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_soal_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pilihan` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(8,2) NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawab_esays`
--

CREATE TABLE `jawab_esays` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_detail_soal_esay` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jawab` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_wali` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `id_wali`, `nama`, `created_at`, `updated_at`, `tanggal`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, 'Sesi 1, Selasa 20 Februari 2022', '2022-02-19 01:03:17', '2022-02-19 05:07:30', '2022-02-20', '10:00:00', '12:00:00'),
(2, 1, 'Sesi 1, Rabu 21 Februari 2022', '2022-02-19 05:15:42', '2022-02-19 05:16:12', '2022-02-21', '09:00:00', '11:00:00'),
(3, 1, 'Sesi 2, Jum\'at 25 Februari 2022', '2022-02-20 06:37:32', '2022-02-24 10:54:20', '2022-02-25', '00:00:00', '01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `keuangans`
--

CREATE TABLE `keuangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `posisi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `sesi` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_12_20_005232_create_schools_table', 1),
(4, '2018_12_20_010114_create_aktifitas_table', 1),
(5, '2018_12_20_010319_create_detailsoals_table', 1),
(6, '2018_12_20_010716_create_distribusisoals_table', 1),
(7, '2018_12_20_010836_create_jawabs_table', 1),
(8, '2018_12_20_011157_create_kelas_table', 1),
(9, '2018_12_20_011323_create_materis_table', 1),
(10, '2018_12_20_011523_create_soals_table', 1),
(11, '2020_05_24_073243_create_detail_soal_essays', 1),
(12, '2020_05_24_073408_create_jawab_essays', 1),
(13, '2022_02_19_115117_add_tanggal_jam_mulai_jam_selesai_to_kelas_table', 2),
(14, '2022_02_19_123322_add_username_pendidikan_no_hp_alamat_bukti_transfer_to_users_table', 3),
(15, '2022_02_21_073840_add_token_ujian_status_ujian_to_users_table', 4),
(16, '2022_02_21_081425_create_keuangan_table', 5),
(17, '2022_02_22_064621_create_informasis_table', 6),
(18, '2022_02_22_100009_add_status_to_informasis_table', 7),
(19, '2022_02_24_155848_add_status_validasi_to_users_table', 8);

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
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motto` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi` int(11) DEFAULT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kkm` decimal(8,2) DEFAULT NULL,
  `waktu` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tampil` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id`, `id_user`, `jenis`, `materi`, `paket`, `deskripsi`, `kkm`, `waktu`, `tampil`, `created_at`, `updated_at`) VALUES
(1, 1, '1', NULL, 'PAKET 1', 'DESKRIPSI', NULL, '7', NULL, '2022-02-19 01:00:05', '2022-02-21 05:46:31'),
(2, 1, '1', NULL, 'PAKET A', 'Deskripsi Paket A', NULL, '20', NULL, '2022-02-19 23:25:11', '2022-02-21 05:46:48'),
(3, 1, '1', NULL, 'PAKET B, Sesi 2 (Selasa)', 'Tes Paket B', '425.00', '10', NULL, '2022-02-23 08:41:11', '2022-02-23 08:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kelas` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_ujian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_induk` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jk` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bukti_transfer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_ujian` enum('Belum Mulai','Tidak Terdaftar') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_validasi` enum('Y','N') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sekolah` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekolah_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_kelas`, `token_ujian`, `username`, `password`, `nama`, `email`, `pendidikan`, `no_induk`, `nisn`, `jk`, `alamat`, `no_hp`, `status`, `gambar`, `bukti_transfer`, `status_ujian`, `status_validasi`, `status_sekolah`, `sekolah_asal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin', '$2y$10$j/aIUVkMm4xIoTQ2934Fz.SVu/Oc4V1Bjw1W1Huw5fPDCAAQSsHP2', 'Administrator', 'admin@seenglish.com', 'S1', NULL, NULL, 'L', '', '', 'A', '1d86146f730d87915b5a1d56f9ce3848_avatar2.png', NULL, NULL, NULL, 'Y', NULL, 'PzYbvlIiz8hYNJuH9DDX56i3WmYySaP7zk6pfVVBs6ojggVfzlRBHxHaYB9Z', NULL, '2022-02-21 23:32:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktifitas`
--
ALTER TABLE `aktifitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailsoals`
--
ALTER TABLE `detailsoals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_soal_esays`
--
ALTER TABLE `detail_soal_esays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribusisoals`
--
ALTER TABLE `distribusisoals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawabs`
--
ALTER TABLE `jawabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawab_esays`
--
ALTER TABLE `jawab_esays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangans`
--
ALTER TABLE `keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktifitas`
--
ALTER TABLE `aktifitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detailsoals`
--
ALTER TABLE `detailsoals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `detail_soal_esays`
--
ALTER TABLE `detail_soal_esays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distribusisoals`
--
ALTER TABLE `distribusisoals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jawabs`
--
ALTER TABLE `jawabs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawab_esays`
--
ALTER TABLE `jawab_esays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keuangans`
--
ALTER TABLE `keuangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
