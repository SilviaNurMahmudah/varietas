-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Agu 2022 pada 17.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_varietas2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bentuks`
--

CREATE TABLE `bentuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bentuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bentuks`
--

INSERT INTO `bentuks` (`id`, `bentuk`, `created_at`, `updated_at`) VALUES
(1, 'Bulat', '2022-08-02 08:04:43', '2022-08-02 08:04:43'),
(2, 'Bulat Sedikit Pipih', '2022-08-02 08:05:11', '2022-08-02 08:05:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukurans`
--

CREATE TABLE `ukurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ukurans`
--

INSERT INTO `ukurans` (`id`, `ukuran`, `created_at`, `updated_at`) VALUES
(1, 'Sedang', '2022-08-02 08:05:32', '2022-08-02 08:08:55'),
(2, 'Sedang-Besar', '2022-08-02 08:07:09', '2022-08-02 08:07:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$O2gTpaMbuNMeSbvQ6VXMH.3vAmGpXcH2H7P8jXZm2iTorWFl3uwF.', 'Admin', NULL, '2022-08-02 08:03:29', '2022-08-02 08:03:29'),
(2, 'Operator', 'operator@gmail.com', NULL, '$2y$10$nw9TyZ4dn5VfuEThTDtvjuTilB9RoF4zt5d4iWK7zxuCEMHAO7CFC', 'Operator', NULL, '2022-08-02 08:03:30', '2022-08-02 08:03:30'),
(3, 'Silvia', 'silvia.mahmudah@gmail.com', NULL, '$2y$10$Ktu0u4Zsf8u5zuge6sF3Fujs75jJ/fwGNt2dlhhGaU3VvNdMJ7yp.', 'User', NULL, '2022-08-02 08:40:42', '2022-08-02 08:40:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `varietas`
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
-- Dumping data untuk tabel `varietas`
--

INSERT INTO `varietas` (`id`, `varietas`, `ukuran_id`, `bentuk_id`, `warna_kulit_id`, `warna_daging_id`, `cita_rasa`, `produktivitas`, `area_pengembangan`, `ketinggian_awal`, `ketinggian_akhir`, `asal_pohon_induk`, `sentra_produksi`, `tahun_pelepasan`, `imageUrl`, `created_at`, `updated_at`) VALUES
(1, 'Keprok Batu 55', 1, 1, 3, 1, 'Manis', '40-60kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Batu', 'Batu', 2006, 'img/naDMQQn1Pd7engpHjnyATLgAMAeCs2wx7n3QBm9w.jpg', '2022-08-02 08:18:07', '2022-08-02 08:18:07'),
(2, 'Keprok Brastepu', 1, 2, 3, 1, 'Manis', '20-30kg/pohon/tahun', 'Dataran Tinggi', 800, 1400, 'Kab. Karo', 'Kab. Karo', 2008, 'img/Ws8mlAbLQeOCmMW4cBhDB9OjBLcZyJgyCuelb3Jm.jpg', '2022-08-02 08:20:55', '2022-08-02 08:20:55'),
(3, 'Keprok SoE', 1, 2, 4, 1, 'Manis, sedikit masam dan segar dengan tingkat kemanisan 9-10brix', '20-40kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Kec Mollo Utara, Kab.TTS, NTT', 'TTS dan TTU, NTT', 1998, 'img/4cuNhN1bDOYvhtqW9WEIz5do5ZqEu86zOgAnRb9c.jpg', '2022-08-02 08:23:20', '2022-08-02 08:23:20'),
(4, 'Keprok RGL', 2, 2, 2, 1, 'Manis, asam dan segar', '100-150kg/pohon/tahun', 'Dataran Tinggi', 800, 1200, 'Kec. Rimbo Penghadang, Kab. Lebong', 'Kab. Lebong', 2012, 'img/CryBRCbvA8NnzQMf0Jyzzuedwvxu5tsgNgxnN3l4.jpg', '2022-08-02 08:25:20', '2022-08-02 08:25:20'),
(5, 'Keprok Tejakula', 1, 1, 5, 1, 'Manis, asam dan segar', '30-70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kec. Tejakula, Kab.Buleleng, Bali', 'Kab. Buleleng', 1997, 'img/Ym71VDisxorBw9nb9P0AlpDTPD6JvGnQu3YDAjsN.jpg', '2022-08-02 08:32:13', '2022-08-02 08:32:13'),
(6, 'Keprok Pulung', 1, 2, 5, 1, 'Manis, asam dan segar', '70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kec. Pulung, Kab. Ponorogo', 'Kab. Ponorogo', 2006, 'img/ab9dajhUEqIOwM3LldBXxj9FYfWz3uSAFruN3DiD.jpg', '2022-08-02 08:34:28', '2022-08-02 08:34:28'),
(7, 'Siam Pontianak', 1, 1, 5, 1, 'Manis', '70kg/pohon/tahun', 'Dataran Rendah', 0, 700, 'Kalimantan Barat', 'Kalimantan Barat', 2003, 'img/IgUislmDQicAsMGERxKANSELiurrdyOntoI0obHT.jpg', '2022-08-02 08:36:48', '2022-08-02 08:36:48'),
(8, 'Keprok Kacang Solok', 1, 2, 6, 1, 'Manis, sedikit asam dan segar', '25-40kg/pohon/tahun', 'Dataran Rendah', 0, 1200, 'Kec. Sepuluh Koto, Kab. Solok, Sumbar', 'Kab. Solok', 2008, 'img/7xSfYkuyxpi9ugh7jd2e8cce3nwn7ZLcXwpBQy3a.jpg', '2022-08-02 08:39:26', '2022-08-02 08:39:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna_dagings`
--

CREATE TABLE `warna_dagings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna_daging` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warna_dagings`
--

INSERT INTO `warna_dagings` (`id`, `warna_daging`, `created_at`, `updated_at`) VALUES
(1, 'Oranye', '2022-08-02 08:09:30', '2022-08-02 08:09:30'),
(2, 'Kuning-Oranye', '2022-08-02 08:09:46', '2022-08-02 08:09:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna_kulits`
--

CREATE TABLE `warna_kulits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warna_kulit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warna_kulits`
--

INSERT INTO `warna_kulits` (`id`, `warna_kulit`, `created_at`, `updated_at`) VALUES
(1, 'Kuning', '2022-08-02 08:10:17', '2022-08-02 08:10:17'),
(2, 'Oranye', '2022-08-02 08:10:38', '2022-08-02 08:10:38'),
(3, 'Kuning-Oranye', '2022-08-02 08:10:57', '2022-08-02 08:10:57'),
(4, 'Oranye-Kemerahan', '2022-08-02 08:11:15', '2022-08-02 08:11:15'),
(5, 'Kuning Kehijauan', '2022-08-02 08:11:42', '2022-08-02 08:11:42'),
(6, 'Kuning Kehijauan', '2022-08-02 08:11:46', '2022-08-02 08:11:46'),
(7, 'Hijau Kekuningan', '2022-08-02 08:12:41', '2022-08-02 08:12:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bentuks`
--
ALTER TABLE `bentuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `ukurans`
--
ALTER TABLE `ukurans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varietas_ukuran_id_foreign` (`ukuran_id`),
  ADD KEY `varietas_bentuk_id_foreign` (`bentuk_id`),
  ADD KEY `varietas_warna_kulit_id_foreign` (`warna_kulit_id`),
  ADD KEY `varietas_warna_daging_id_foreign` (`warna_daging_id`);

--
-- Indeks untuk tabel `warna_dagings`
--
ALTER TABLE `warna_dagings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warna_kulits`
--
ALTER TABLE `warna_kulits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bentuks`
--
ALTER TABLE `bentuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ukurans`
--
ALTER TABLE `ukurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `varietas`
--
ALTER TABLE `varietas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `warna_dagings`
--
ALTER TABLE `warna_dagings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warna_kulits`
--
ALTER TABLE `warna_kulits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `varietas`
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
