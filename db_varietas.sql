-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 05:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_varietas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bentuks`
--

CREATE TABLE `bentuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bentuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bentuks`
--

INSERT INTO `bentuks` (`id`, `bentuk`, `created_at`, `updated_at`) VALUES
(1, 'Bulat', '2022-01-23 19:03:18', '2022-01-23 19:03:18'),
(2, 'Bulat Sedikit Pipih', '2022-01-23 19:03:35', '2022-01-23 19:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_14_024627_create_ukuran_table', 1),
(5, '2022_01_15_171451_create_bentuks_table', 1),
(6, '2022_01_15_171620_create_warna_kulits_table', 1),
(7, '2022_01_15_171645_create_warna_dagings_table', 1),
(8, '2022_01_23_150054_create_varietas_table', 1);

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
-- Table structure for table `ukurans`
--

CREATE TABLE `ukurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ukurans`
--

INSERT INTO `ukurans` (`id`, `ukuran`, `created_at`, `updated_at`) VALUES
(1, 'Sedang', '2022-01-23 19:03:49', '2022-01-23 19:03:49'),
(2, 'Sedang-Besar', '2022-01-23 19:04:04', '2022-01-23 19:04:04');

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
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$8fGzGBAbY5NZ100yXbHyTeyKQLvmECjDKWCCMxTj68Kxzy.K30TQW', 'Admin', NULL, NULL, NULL),
(2, 'Umi', 'umi12345@gmail.com', NULL, '$2y$10$jEV0H2fixIqJmWuAZfYequsnRDHc1UlX2msGYLwWOMNF6iADD1tcu', 'User', '3ZfHrZCm1k014bXlklg3f9YMMarMxDBdK3dYTU3r0q4GM5TVk1yd1UKeqbNU', '2022-01-23 20:43:25', '2022-01-23 20:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `varietas`
--

CREATE TABLE `varietas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `varietas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_id` bigint(20) UNSIGNED NOT NULL,
  `bentuk_id` bigint(20) UNSIGNED NOT NULL,
  `warna_kulit_id` bigint(20) UNSIGNED NOT NULL,
  `warna_daging_id` bigint(20) UNSIGNED NOT NULL,
  `cita_rasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produktivitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_pengembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketinggian_awal` int(11) NOT NULL,
  `ketinggian_akhir` int(11) NOT NULL,
  `asal_pohon_induk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sentra_produksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_pelepasan` year(4) NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varietas`
--

INSERT INTO `varietas` (`id`, `varietas`, `ukuran_id`, `bentuk_id`, `warna_kulit_id`, `warna_daging_id`, `cita_rasa`, `produktivitas`, `area_pengembangan`, `ketinggian_awal`, `ketinggian_akhir`, `asal_pohon_induk`, `sentra_produksi`, `tahun_pelepasan`, `imageUrl`, `created_at`, `updated_at`) VALUES
(1, 'Keprok Batu 55', 1, 1, 3, 1, 'Manis', '40-60kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Batu', 'Batu', 2006, 'img/eJZr6FBEihS1EtkBMPPLpJW2TTiJ3jyYIKLZ57c8.jpg', '2022-01-24 23:19:40', '2022-01-27 20:10:12'),
(2, 'Keprok Brastepu', 1, 2, 3, 1, 'Manis', '20-30kg/pohon/tahun', 'Dataran Tinggi', 800, 1400, 'Kab Karo', 'Kab Karo', 2008, 'img/asaq4im901RM7M4L3movwhVD6zFyPChwE97zhYM2.jpg', '2022-01-24 23:29:46', '2022-01-26 19:37:28'),
(4, 'Keprok SoE', 1, 2, 4, 1, 'Manis, sedikit masam dan segar dengan tingkat kemanisan 9-10brix', '20-40kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Kec Mollo Utara, Kab.TTS, NTT', 'TTS dan TTU, NTT', 1998, 'img/TsdNApfqfZRBNcbMVFa2W408D98fM2yTbEdTA6Nk.jpg', '2022-01-26 19:59:14', '2022-01-26 19:59:14'),
(5, 'Keprok RGL', 2, 2, 2, 1, 'Manis, asam dan segar', '100-150kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Kec. Rimbo Penghadang, Kab. Lebong', 'Kab. Lebong', 2012, 'img/5yxzCsbfdcVK3iAynneR1tvczLBXMOtsge4EONzk.jpg', '2022-01-26 20:06:27', '2022-01-26 20:06:27'),
(6, 'Siam Madu', 1, 2, 3, 1, 'Manis dan segar', '40-60kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Kab. Karo, Sumut', 'Kab. Karo, Simalungun, Sumut', 1999, 'img/R6mebao2MS5rKUigTjEbnXqp6vxsvEagRJJoFALT.jpg', '2022-01-26 20:10:22', '2022-01-26 20:10:22'),
(7, 'Keprok Tejakula', 1, 1, 5, 1, 'Manis, asam dan segar', '30-70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kec Tejakula, Kab.Buleleng, Bali', 'Kab. Buleleng', 1997, 'img/6Yd0FjBgIrupl356tEttle42xJUiEIOHdqdXY9iq.jpg', '2022-01-26 20:21:23', '2022-01-26 20:21:23'),
(8, 'Keprok Pulung', 1, 2, 5, 1, 'Manis, asam dan segar', '70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kec. Pulung, Kab. Ponorogo', 'Kab. Ponorogo', 2006, 'img/RtT1xcF6a6RfYGz9ddCXdxP0LDKyryV4cmZH0fFS.jpg', '2022-01-26 20:23:35', '2022-01-26 20:23:35'),
(9, 'Siam Pontianak', 1, 1, 5, 1, 'Manis', '70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kalimantan Barat', 'Klaimantan Barat', 2003, 'img/jhim5aM2OtJPq9bUhgjUwKdqqkx2fOok43qMCzUC.jpg', '2022-01-26 20:25:02', '2022-01-26 20:25:02'),
(10, 'Keprok Kacang Solok', 1, 2, 6, 1, 'Manis, sedikit asam dan segar', '25-40kg/pohon/tahun', 'Dataran Rendah', 0, 1200, 'Kec. Sepuluh Koto, Kab. Solok, Sumbar', 'Kab. Solok', 2008, 'img/alJshIcWrQp8s6ujyrKaQkR2RawuW4afhcCX1fmE.jpg', '2022-01-26 20:28:20', '2022-01-26 20:30:33'),
(11, 'Keprok Selayar', 1, 2, 6, 1, 'Manis dan segar', '40-60kg/pohon/tahun', 'Dataran Rendah', 0, 800, 'Pulau Selayar, Sulsel', 'Pulau Selayar, Jeneponto, Bulukumba, Bantaeng, Sulsel', 1995, 'img/yMv65wAtAj4HsdqrFuqVTjvw4MSLUQoS8XKKIwWj.jpg', '2022-01-26 20:32:43', '2022-01-26 20:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `warna_dagings`
--

CREATE TABLE `warna_dagings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna_daging` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warna_dagings`
--

INSERT INTO `warna_dagings` (`id`, `warna_daging`, `created_at`, `updated_at`) VALUES
(1, 'Oranye', '2022-01-23 19:06:20', '2022-01-23 19:06:20'),
(2, 'Kuning-Oranye', '2022-01-23 19:06:36', '2022-01-23 19:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `warna_kulits`
--

CREATE TABLE `warna_kulits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna_kulit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warna_kulits`
--

INSERT INTO `warna_kulits` (`id`, `warna_kulit`, `created_at`, `updated_at`) VALUES
(1, 'Kuning', '2022-01-23 19:04:31', '2022-01-23 19:04:31'),
(2, 'Oranye', '2022-01-23 19:04:44', '2022-01-23 19:04:44'),
(3, 'Kuning-Oranye', '2022-01-23 19:04:53', '2022-01-23 19:04:53'),
(4, 'Oranye-Kemerahan', '2022-01-23 19:05:08', '2022-01-23 19:05:08'),
(5, 'Kuning Kehijauan', '2022-01-23 19:05:24', '2022-01-23 19:05:24'),
(6, 'Hijau Kekuningan', '2022-01-23 19:05:51', '2022-01-23 19:05:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bentuks`
--
ALTER TABLE `bentuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `ukurans`
--
ALTER TABLE `ukurans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varietas_ukuran_id_foreign` (`ukuran_id`),
  ADD KEY `varietas_bentuk_id_foreign` (`bentuk_id`),
  ADD KEY `varietas_warna_kulit_id_foreign` (`warna_kulit_id`),
  ADD KEY `varietas_warna_daging_id_foreign` (`warna_daging_id`);

--
-- Indexes for table `warna_dagings`
--
ALTER TABLE `warna_dagings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warna_kulits`
--
ALTER TABLE `warna_kulits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bentuks`
--
ALTER TABLE `bentuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ukurans`
--
ALTER TABLE `ukurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `varietas`
--
ALTER TABLE `varietas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `warna_dagings`
--
ALTER TABLE `warna_dagings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warna_kulits`
--
ALTER TABLE `warna_kulits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `varietas`
--
ALTER TABLE `varietas`
  ADD CONSTRAINT `varietas_bentuk_id_foreign` FOREIGN KEY (`bentuk_id`) REFERENCES `bentuks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `varietas_ukuran_id_foreign` FOREIGN KEY (`ukuran_id`) REFERENCES `ukurans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `varietas_warna_daging_id_foreign` FOREIGN KEY (`warna_daging_id`) REFERENCES `warna_dagings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `varietas_warna_kulit_id_foreign` FOREIGN KEY (`warna_kulit_id`) REFERENCES `warna_kulits` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
