-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2023 pada 08.04
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftokos`
--

CREATE TABLE `daftokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftokos`
--

INSERT INTO `daftokos` (`id`, `title`, `deskripsi`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Ayo Daftarkan Tokomu Sekarang', 'Mari Bergabung dengan Aplikasi GAS', 'laptop.png', 'https://zaportfolio.vercel.app/', NULL, '2023-04-16 23:02:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiturs`
--

CREATE TABLE `fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fiturs`
--

INSERT INTO `fiturs` (`id`, `title`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Mesin Kasir', 'Deskripsi Mesin Kasir', 'pngwing.com.png', NULL, '2023-04-16 22:57:58'),
(2, 'Scan Barkode', 'Deskripsi Scan Barkode', 'istockphoto-1207281531-170667a.jpg', '2023-04-16 22:58:18', '2023-04-16 22:58:18'),
(3, 'Daftar Kurir', 'Deskripsi Daftar Kurir', 'pngwing.com (1).png', '2023-04-16 22:58:32', '2023-04-16 22:58:32'),
(4, 'Stok Opname', 'Deskripsi Stok Opname', '8-Langkah-Stock-Opname-yang-Tidak-Boleh-Dilewatkan-01.png', '2023-04-16 22:58:48', '2023-04-16 22:58:48'),
(5, 'Print Thermal', 'Deskripsi Print Thermal', '117-1179281_picture-transparent-download-clipart-thermal-big-image-thermal.png', '2023-04-16 22:59:10', '2023-04-16 22:59:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `heros`
--

CREATE TABLE `heros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `heros`
--

INSERT INTO `heros` (`id`, `title`, `subtitle`, `deskripsi`, `gambar`, `link`, `created_at`, `updated_at`) VALUES
(1, '#Aplikasi Pemantau Stok Produk Terbaik', 'Bergabung dengan GAS', 'Aplikasi GAS akan membantumu dalam memantau stok produk tokomu dan menjangkau customer lebih luas', 'girl.png', 'https://zaportfolio.vercel.app/', NULL, '2023-04-16 22:55:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `title`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Toko Pakaian', 'Deskripsi Toko Pakaian', 'Highlight_local-brand-fashion-merek-clothing-asli-indonesia-populer-terbaik-model-koleksi-terbaru_16-640x384.jpg', NULL, '2023-04-16 22:59:53'),
(2, 'Toko Elektronik', 'Deskripsi Toko Elektronik', 'B110669-cover-scaled.jpg', '2023-04-16 22:59:40', '2023-04-16 22:59:40'),
(3, 'Toko Bangunan', 'Deskripsi Toko Bangunan', 'toko bahan bangunan online.jpg', '2023-04-16 23:00:25', '2023-04-16 23:00:25'),
(4, 'Toko Kelontong', 'Deskripsi Toko Kelontong', 'DSC05577-1024x683.jpg', '2023-04-16 23:00:38', '2023-04-16 23:00:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`id`, `title`, `deskripsi`, `gambar1`, `gambar2`, `created_at`, `updated_at`) VALUES
(1, 'Fitur MAPS', 'Aplikasi GAS akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas', 'dashboard-img.png', 'dashboard-sm.png', NULL, '2023-04-16 23:01:40');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_04_16_132031_create_heros_table', 1),
(4, '2023_04_16_132235_create_tentangs_table', 1),
(5, '2023_04_16_133249_create_fiturs_table', 1),
(6, '2023_04_16_133316_create_kategoris_table', 1),
(7, '2023_04_16_133450_create_maps_table', 1),
(8, '2023_04_16_133821_create_daftokos_table', 1);

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
-- Struktur dari tabel `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentangs`
--

INSERT INTO `tentangs` (`id`, `title`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kenalan Lebih Lanjut Dengan Kami', 'GAS adalah Aplikasi untuk memudahkan pelaku usaha dalam menjangkau calon pembeli lebih luas. melalui gerakan #AyoBelanjaTokoTetangga\r\nGAS mengajak untuk menjajah dan mendukung usaha sekitarmu', 'hero-girl.png', NULL, '2023-04-16 22:57:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Reza', 'example12@email.com', '$2y$10$.gJY8mrRmN9nVDp1yDjGmew1VZEgAESGBYLpx.EeuF9SaSx6gVcZe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftokos`
--
ALTER TABLE `daftokos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
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
-- AUTO_INCREMENT untuk tabel `daftokos`
--
ALTER TABLE `daftokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `heros`
--
ALTER TABLE `heros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
