-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Mar 2024 pada 20.02
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternative` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `d_min` double NOT NULL DEFAULT 0,
  `d_plus` double NOT NULL DEFAULT 0,
  `v` double NOT NULL DEFAULT 0,
  `rank` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatives`
--

INSERT INTO `alternatives` (`id`, `nama_alternative`, `deskripsi`, `d_min`, `d_plus`, `v`, `rank`, `created_at`, `updated_at`) VALUES
(41, 'Shopee', NULL, 2.1354156504063, 3.2695565448544, 0.39508355885322, 5, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(42, 'Lazada', NULL, 2.2912878474779, 3.0594117081557, 0.42822210883911, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(43, 'TiktokShop', NULL, 3.1701734968295, 2.7856776554368, 0.53227883232494, 3, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(44, 'Tokopedia', NULL, 3.2372828112477, 2.308679276123, 0.58371888596564, 2, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(45, 'Bukalapak', NULL, 3.7429934544426, 2.4083189157585, 0.60848697467793, 1, '2024-03-21 11:56:26', '2024-03-21 12:01:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_awals`
--

CREATE TABLE `data_awals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marketplace` varchar(255) DEFAULT NULL,
  `id_alternative` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `nilai` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keputusans`
--

CREATE TABLE `keputusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` int(10) UNSIGNED NOT NULL,
  `kriteria_id` int(10) UNSIGNED NOT NULL,
  `sub_kriteria_id` int(10) UNSIGNED NOT NULL,
  `bobot_kriteria` double NOT NULL DEFAULT 0,
  `bobot_sub_kriteria` double NOT NULL DEFAULT 0,
  `r_hasil` double NOT NULL DEFAULT 0,
  `normalisasi_berbobot_hasil` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keputusans`
--

INSERT INTO `keputusans` (`id`, `alternative_id`, `kriteria_id`, `sub_kriteria_id`, `bobot_kriteria`, `bobot_sub_kriteria`, `r_hasil`, `normalisasi_berbobot_hasil`, `created_at`, `updated_at`) VALUES
(505, 41, 1, 2, 4, 4, 0.8, 3.2, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(506, 41, 2, 7, 2, 2, 1, 2, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(507, 41, 3, 12, 4, 3, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(508, 41, 4, 17, 4, 3, 0.75, 3, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(509, 41, 5, 21, 3, 2, 0.66666666666667, 2, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(510, 41, 6, 25, 3, 1, 0.5, 1.5, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(511, 41, 7, 31, 3, 2, 0.4, 1.2, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(512, 41, 8, 39, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(513, 41, 9, 43, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(514, 41, 10, 48, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(515, 41, 11, 53, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(516, 41, 12, 58, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(517, 41, 13, 63, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(518, 41, 14, 67, 4, 5, 1, 4, '2024-03-21 11:33:10', '2024-03-21 12:01:58'),
(519, 42, 1, 4, 4, 3, 0.6, 2.4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(520, 42, 2, 7, 2, 2, 1, 2, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(521, 42, 3, 11, 4, 4, 0.75, 3, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(522, 42, 4, 16, 4, 2, 0.5, 2, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(523, 42, 5, 21, 3, 2, 0.66666666666667, 2, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(524, 42, 6, 26, 3, 2, 1, 3, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(525, 42, 7, 32, 3, 3, 0.6, 1.8, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(526, 42, 8, 39, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(527, 42, 9, 43, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(528, 42, 10, 48, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(529, 42, 11, 53, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(530, 42, 12, 58, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(531, 42, 13, 63, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(532, 42, 14, 67, 4, 5, 1, 4, '2024-03-21 11:53:06', '2024-03-21 12:01:58'),
(533, 43, 1, 3, 4, 2, 0.4, 1.6, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(534, 43, 2, 6, 2, 1, 0.5, 1, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(535, 43, 3, 10, 4, 5, 0.6, 2.4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(536, 43, 4, 17, 4, 3, 0.75, 3, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(537, 43, 5, 22, 3, 3, 1, 3, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(538, 43, 6, 26, 3, 2, 1, 3, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(539, 43, 7, 34, 3, 5, 1, 3, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(540, 43, 8, 39, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(541, 43, 9, 43, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(542, 43, 10, 48, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(543, 43, 11, 53, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(544, 43, 12, 58, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(545, 43, 13, 63, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(546, 43, 14, 67, 4, 5, 1, 4, '2024-03-21 11:54:09', '2024-03-21 12:01:58'),
(547, 44, 1, 2, 4, 4, 0.8, 3.2, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(548, 44, 2, 7, 2, 2, 1, 2, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(549, 44, 3, 10, 4, 5, 0.6, 2.4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(550, 44, 4, 18, 4, 4, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(551, 44, 5, 21, 3, 2, 0.66666666666667, 2, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(552, 44, 6, 25, 3, 1, 0.5, 1.5, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(553, 44, 7, 32, 3, 3, 0.6, 1.8, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(554, 44, 8, 39, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(555, 44, 9, 43, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(556, 44, 10, 48, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(557, 44, 11, 53, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(558, 44, 12, 58, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(559, 44, 13, 63, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(560, 44, 14, 67, 4, 5, 1, 4, '2024-03-21 11:55:11', '2024-03-21 12:01:58'),
(561, 45, 1, 1, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(562, 45, 2, 7, 2, 2, 1, 2, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(563, 45, 3, 12, 4, 3, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(564, 45, 4, 18, 4, 4, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(565, 45, 5, 22, 3, 3, 1, 3, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(566, 45, 6, 26, 3, 2, 1, 3, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(567, 45, 7, 31, 3, 2, 0.4, 1.2, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(568, 45, 8, 39, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(569, 45, 9, 43, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(570, 45, 10, 48, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(571, 45, 11, 53, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(572, 45, 12, 58, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(573, 45, 13, 63, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58'),
(574, 45, 14, 67, 4, 5, 1, 4, '2024-03-21 11:56:26', '2024-03-21 12:01:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kinerjas`
--

CREATE TABLE `kinerjas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_alternative` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `nilai` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `id_alternative` varchar(255) DEFAULT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `attribute` varchar(255) NOT NULL,
  `bobot_normalisasi` double NOT NULL DEFAULT 0,
  `a_plus` double NOT NULL DEFAULT 0,
  `a_min` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `kode`, `id_alternative`, `nama_kriteria`, `bobot`, `attribute`, `bobot_normalisasi`, `a_plus`, `a_min`, `created_at`, `updated_at`) VALUES
(1, 'K1', NULL, 'Berapa lama Anda sudah menggunakan e-commerce untuk berbelanja online?', '4', 'Benefit', 8.3666002653408, 4, 1.6, '2024-03-19 06:06:35', '2024-03-21 12:01:58'),
(2, 'K2', NULL, 'Berapa kali dalam sebulan Anda melakukan transaksi di e-commerce?', '2', 'Benefit', 4.1231056256177, 2, 1, '2024-03-21 06:01:22', '2024-03-21 12:01:58'),
(3, 'K3', NULL, 'Seberapa mudah Anda menemukan produk yang Anda cari di platform e-commerce tersebut?', '4', 'Cost', 9.1651513899117, 2.4, 4, '2024-03-21 06:02:08', '2024-03-21 12:01:58'),
(4, 'K4', NULL, 'Sejauh mana Anda mempertimbangkan ulasan produk dari pengguna sebelumnya dalam pengambilan keputusan untuk membeli produk? (Q5)', '4', 'Benefit', 7.3484692283495, 4, 2, '2024-03-21 06:02:46', '2024-03-21 12:01:58'),
(5, 'K5', NULL, 'Seberapa penting bagi Anda ketersediaan diskon dan promosi saat berbelanja di e-commerce tersebut?', '3', 'Benefit', 5.4772255750517, 3, 2, '2024-03-21 06:03:18', '2024-03-21 12:01:58'),
(6, 'K6', NULL, 'Seberapa mudah Anda menemukan produk yang Anda cari di platform e-commerce tersebut?', '3', 'Benefit', 3.7416573867739, 3, 1.5, '2024-03-21 06:03:59', '2024-03-21 12:01:58'),
(7, 'K7', NULL, 'Seberapa penting ketersediaan berbagai metode pembayaran yang sesuai dengan preferensi Anda', '3', 'Benefit', 7.1414284285429, 3, 1.2, '2024-03-21 06:04:47', '2024-03-21 12:01:58'),
(8, 'K8', NULL, 'Seberapa sering Anda menggunakan pusat bantuan online e-commerce untuk memecahkan masalah atau mendapatkan informasi?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:05:22', '2024-03-21 12:01:58'),
(9, 'K9', NULL, 'Sejauh mana e-commerce mampu menyelesaikan masalah atau keluhan Anda dengan cepat dan efektif?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:05:49', '2024-03-21 12:01:58'),
(10, 'K10', NULL, 'Bagaimana penilaian Anda terhadap kecepatan pengiriman aktual dari e-commerce tersebut?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:06:06', '2024-03-21 12:01:58'),
(11, 'K11', NULL, 'Seberapa penting bagi Anda bahwa e-commerce memiliki sertifikat keamanan situs web (SSL)', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:06:23', '2024-03-21 12:01:58'),
(12, 'K12', NULL, 'Seberapa yakin Anda terhadap keamanan data pribadi yang Anda berikan saat bertransaksi di e-commerce tersebut?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:07:38', '2024-03-21 12:01:58'),
(13, 'K13', NULL, 'Sejauh mana tampilan visual dari platform e-commerce memengaruhi pengalaman berbelanja Anda?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:07:52', '2024-03-21 12:01:58'),
(14, 'K14', NULL, 'Seberapa sering Anda menggunakan aplikasi mobile e-commerce, dan seberapa penting aplikasi ini bagi Anda?', '4', 'Benefit', 11.180339887499, 4, 4, '2024-03-21 06:08:10', '2024-03-21 12:01:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_01_162125_create_permission_tables', 1),
(6, '2024_03_01_163557_create_alternatives_table', 1),
(7, '2024_03_01_163849_create_kriterias_table', 1),
(8, '2024_03_01_164353_create_data_awals_table', 1),
(9, '2024_03_15_162235_create_normalisasis_table', 1),
(10, '2024_03_15_162442_create_kinerjas_table', 1),
(11, '2024_03_15_162941_create_pembantus_table', 1),
(12, '2024_03_16_042855_create_sub_kriterias_table', 1),
(13, '2024_03_16_070023_create_keputusans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `normalisasis`
--

CREATE TABLE `normalisasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_alternative` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `nilai` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembantus`
--

CREATE TABLE `pembantus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_alternative` varchar(255) NOT NULL,
  `id_kriteria` varchar(255) NOT NULL,
  `nilai` double NOT NULL DEFAULT 0,
  `jenis` varchar(255) DEFAULT NULL,
  `format` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2024-03-19 06:04:13', '2024-03-19 06:04:13'),
(2, 'admin', 'web', '2024-03-19 06:04:13', '2024-03-19 06:04:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriterias`
--

CREATE TABLE `sub_kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bobot` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_kriterias`
--

INSERT INTO `sub_kriterias` (`id`, `kriteria_id`, `nama`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lebih dari 3 tahun', 5, '2024-03-21 06:09:29', '2024-03-21 06:09:29'),
(2, 1, '2-3 tahun', 4, '2024-03-21 06:09:37', '2024-03-21 06:09:37'),
(3, 1, '6 bulan - 1 tahun', 2, '2024-03-21 06:10:35', '2024-03-21 06:10:35'),
(4, 1, 'Kurang dari 6 bulan', 3, '2024-03-21 06:10:47', '2024-03-21 06:10:47'),
(5, 1, '1-2 tahun', 1, '2024-03-21 06:10:58', '2024-03-21 06:10:58'),
(6, 2, '1-5 kali', 1, '2024-03-21 06:11:14', '2024-03-21 06:11:14'),
(7, 2, '6-10 kali', 2, '2024-03-21 06:11:23', '2024-03-21 06:11:41'),
(8, 2, '11-15 kali', 3, '2024-03-21 06:11:57', '2024-03-21 06:11:57'),
(9, 2, 'Lebih dari 15 kali', 4, '2024-03-21 06:12:08', '2024-03-21 06:12:22'),
(10, 3, 'Tidak Penting', 5, '2024-03-21 06:12:52', '2024-03-21 06:12:52'),
(11, 3, 'Kurang Penting', 4, '2024-03-21 06:13:22', '2024-03-21 06:13:47'),
(12, 3, 'Netral', 3, '2024-03-21 06:13:35', '2024-03-21 06:13:35'),
(13, 3, 'Penting', 2, '2024-03-21 06:14:09', '2024-03-21 06:14:09'),
(14, 3, 'Sangat Penting', 1, '2024-03-21 06:14:19', '2024-03-21 06:14:19'),
(15, 4, 'Tidak Penting', 1, '2024-03-21 06:14:41', '2024-03-21 06:14:41'),
(16, 4, 'Kurang Penting', 2, '2024-03-21 06:14:51', '2024-03-21 06:14:51'),
(17, 4, 'Netral', 3, '2024-03-21 06:15:25', '2024-03-21 06:15:25'),
(18, 4, 'Penting', 4, '2024-03-21 06:15:35', '2024-03-21 06:15:35'),
(19, 4, 'Sangat Penting', 5, '2024-03-21 06:15:45', '2024-03-21 06:16:20'),
(20, 5, 'Tidak Penting', 1, '2024-03-21 06:16:07', '2024-03-21 06:16:07'),
(21, 5, 'Kurang Penting', 2, '2024-03-21 06:16:30', '2024-03-21 06:16:30'),
(22, 5, 'Netral', 3, '2024-03-21 06:16:41', '2024-03-21 06:16:41'),
(23, 5, 'Penting', 4, '2024-03-21 06:16:52', '2024-03-21 06:16:52'),
(24, 5, 'Sangat Penting', 5, '2024-03-21 06:17:06', '2024-03-21 06:17:06'),
(25, 6, 'Tidak Penting', 1, '2024-03-21 06:17:15', '2024-03-21 06:17:15'),
(26, 6, 'Kurang Penting', 2, '2024-03-21 06:17:24', '2024-03-21 06:17:24'),
(27, 6, 'Netral', 3, '2024-03-21 06:17:36', '2024-03-21 06:17:36'),
(28, 6, 'Penting', 4, '2024-03-21 06:17:47', '2024-03-21 06:17:47'),
(29, 6, 'Sangat Penting', 5, '2024-03-21 06:18:05', '2024-03-21 06:18:05'),
(30, 7, 'Tidak Penting', 1, '2024-03-21 06:18:34', '2024-03-21 06:18:34'),
(31, 7, 'Kurang Penting', 2, '2024-03-21 06:18:42', '2024-03-21 06:18:42'),
(32, 7, 'Netral', 3, '2024-03-21 06:18:53', '2024-03-21 06:18:53'),
(33, 7, 'Penting', 4, '2024-03-21 06:19:07', '2024-03-21 06:19:07'),
(34, 7, 'Sangat Penting', 5, '2024-03-21 06:19:17', '2024-03-21 06:19:17'),
(35, 8, 'Tidak Penting', 1, '2024-03-21 06:19:33', '2024-03-21 06:19:33'),
(36, 8, 'Kurang Penting', 2, '2024-03-21 06:19:43', '2024-03-21 06:19:43'),
(37, 8, 'Netral', 3, '2024-03-21 06:20:01', '2024-03-21 06:20:01'),
(38, 8, 'Penting', 4, '2024-03-21 06:20:17', '2024-03-21 06:20:17'),
(39, 8, 'Sangat Penting', 5, '2024-03-21 06:20:28', '2024-03-21 06:20:28'),
(40, 9, 'Tidak Penting', 1, '2024-03-21 06:24:56', '2024-03-21 06:24:56'),
(41, 9, 'Netral', 3, '2024-03-21 06:25:22', '2024-03-21 06:25:22'),
(42, 9, 'Penting', 4, '2024-03-21 06:25:33', '2024-03-21 06:25:33'),
(43, 9, 'Sangat Penting', 5, '2024-03-21 06:25:44', '2024-03-21 06:25:44'),
(44, 10, 'Tidak Penting', 1, '2024-03-21 06:26:47', '2024-03-21 06:26:47'),
(45, 10, 'Kurang Penting', 2, '2024-03-21 06:27:03', '2024-03-21 06:27:03'),
(46, 10, 'Netral', 3, '2024-03-21 06:27:21', '2024-03-21 06:27:21'),
(47, 10, 'Penting', 4, '2024-03-21 06:27:35', '2024-03-21 06:27:35'),
(48, 10, 'Sangat Penting', 5, '2024-03-21 06:27:47', '2024-03-21 06:27:47'),
(49, 11, 'Tidak Penting', 1, '2024-03-21 06:28:05', '2024-03-21 06:28:21'),
(50, 11, 'Kurang Penting', 2, '2024-03-21 06:28:38', '2024-03-21 06:28:38'),
(51, 11, 'Netral', 3, '2024-03-21 06:28:48', '2024-03-21 06:28:48'),
(52, 11, 'Penting', 4, '2024-03-21 06:29:04', '2024-03-21 06:29:04'),
(53, 11, 'Sangat Penting', 5, '2024-03-21 06:29:14', '2024-03-21 06:29:14'),
(54, 12, 'Tidak Penting', 1, '2024-03-21 06:29:50', '2024-03-21 06:29:50'),
(55, 12, 'Kurang Penting', 2, '2024-03-21 06:30:04', '2024-03-21 06:30:04'),
(56, 12, 'Netral', 3, '2024-03-21 06:30:14', '2024-03-21 06:30:14'),
(57, 12, 'Penting', 4, '2024-03-21 06:30:24', '2024-03-21 06:30:24'),
(58, 12, 'Sangat Penting', 5, '2024-03-21 06:30:34', '2024-03-21 06:30:34'),
(59, 13, 'Tidak Penting', 1, '2024-03-21 06:30:43', '2024-03-21 06:30:43'),
(60, 13, 'Kurang Penting', 2, '2024-03-21 06:31:00', '2024-03-21 06:31:00'),
(61, 13, 'Netral', 3, '2024-03-21 06:31:14', '2024-03-21 06:31:14'),
(62, 13, 'Penting', 4, '2024-03-21 06:31:33', '2024-03-21 06:31:33'),
(63, 13, 'Sangat Penting', 5, '2024-03-21 06:31:46', '2024-03-21 06:31:46'),
(64, 14, 'Tidak Penting', 1, '2024-03-21 06:32:12', '2024-03-21 06:32:12'),
(65, 14, 'Kurang Penting', 2, '2024-03-21 06:32:22', '2024-03-21 06:32:22'),
(66, 14, 'Netral', 3, '2024-03-21 06:33:17', '2024-03-21 06:39:04'),
(67, 14, 'Sangat Penting', 5, '2024-03-21 06:33:43', '2024-03-21 06:33:43'),
(68, 14, 'Penting', 4, '2024-03-21 06:34:35', '2024-03-21 06:34:35'),
(69, 9, 'Kurang Penting', 2, '2024-03-21 06:55:33', '2024-03-21 06:55:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hi Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$Ne6bb4unA1TLl3qXufb5I.B325CSCRk6PCsJV/k7ds6XciZAGUVRi', NULL, '2024-03-19 06:04:13', '2024-03-19 06:04:13'),
(2, 'Hi User', 'user', 'user@user.com', NULL, '$2y$10$iuP0ehtBICyEUkq..2kuxu.Sg0AOSTUgy6nlk.yS0z2.ZxMMFjJEu', NULL, '2024-03-19 06:04:13', '2024-03-19 06:04:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_awals`
--
ALTER TABLE `data_awals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `keputusans`
--
ALTER TABLE `keputusans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kinerjas`
--
ALTER TABLE `kinerjas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `normalisasis`
--
ALTER TABLE `normalisasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembantus`
--
ALTER TABLE `pembantus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `sub_kriterias`
--
ALTER TABLE `sub_kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `data_awals`
--
ALTER TABLE `data_awals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keputusans`
--
ALTER TABLE `keputusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=575;

--
-- AUTO_INCREMENT untuk tabel `kinerjas`
--
ALTER TABLE `kinerjas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `normalisasis`
--
ALTER TABLE `normalisasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembantus`
--
ALTER TABLE `pembantus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_kriterias`
--
ALTER TABLE `sub_kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
