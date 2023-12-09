-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table crud.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table crud.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.migrations: ~7 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_09_21_164355_create_table_buku', 1),
	(6, '2023_09_22_023053_create_table_anggota', 2),
	(7, '2023_09_22_071042_create_table_peminjaman', 3);

-- Dumping structure for table crud.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table crud.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table crud.table_anggota
CREATE TABLE IF NOT EXISTS `table_anggota` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `npm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodegender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.table_anggota: ~7 rows (approximately)
INSERT INTO `table_anggota` (`id`, `npm`, `nama`, `kodegender`, `alamat`, `created_at`, `updated_at`) VALUES
	(1, '2020130001', 'John Bonham', 'L', 'Jl. Dago 96', NULL, NULL),
	(2, '2021210030', 'Bill Cobham', 'L', 'Jl. Ganesha 10', NULL, NULL),
	(3, '2019110090', 'Mary Jane', 'P', 'Jl. Sunda 88', NULL, NULL),
	(4, '2022010010', 'Dave Grohl', 'L', 'Jl. Hasanudin 77', NULL, NULL),
	(5, '2018210021', 'Jojon Tarigan', 'L', 'Jl. Girimekar Manis 22', '2023-10-26 08:04:29', '2023-10-26 08:04:29'),
	(6, '2023010010', 'Maria Deborah', 'P', 'Jl. Dago 96', '2023-10-26 08:05:22', '2023-10-26 08:05:22'),
	(7, '2010210021', 'Kurt Cobain', 'L', 'Jl. Linggawastu 90', '2023-10-26 23:31:34', '2023-10-26 23:31:34');

-- Dumping structure for table crud.table_buku
CREATE TABLE IF NOT EXISTS `table_buku` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodekategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargabuku` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.table_buku: ~7 rows (approximately)
INSERT INTO `table_buku` (`id`, `judul`, `penulis`, `penerbit`, `kodekategori`, `hargabuku`, `created_at`, `updated_at`) VALUES
	(1, 'Database System', 'Robert Redford', 'Oxford Press', 'S', 150000, NULL, NULL),
	(2, 'Web Programming', 'Keanu Reeves ', 'Harvard Press', 'S', 185000, NULL, NULL),
	(3, 'Ghost Hunting', 'Steven Howard', 'Prentice Hall', 'F', 90000, NULL, NULL),
	(4, 'Old House Mystery', 'James Edward', 'Harvard Press', 'F', 79000, NULL, NULL),
	(5, 'Pendekar Kesiangan', 'Martin Setiawan', 'Pustaka Agung', 'F', 24000, '2023-10-26 07:51:22', '2023-10-26 07:51:22'),
	(6, 'Istana Hantu', 'John Horor', 'Pustaka Abadi', 'F', 9000, '2023-10-26 08:07:07', '2023-10-26 08:07:07'),
	(7, 'Bootstrap Bible', 'West Jordan', 'Elex Media', 'S', 92500, '2023-10-26 23:33:13', '2023-10-26 23:33:13'),
	(8, 'Javascript In Depth', 'Rick Wakeman', 'Prentice Hall', 'S', 810000, '2023-10-27 06:50:14', '2023-10-27 06:50:14');

-- Dumping structure for table crud.table_peminjaman
CREATE TABLE IF NOT EXISTS `table_peminjaman` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `id_anggota` bigint unsigned NOT NULL,
  `id_buku` bigint unsigned NOT NULL,
  `lama_pinjam` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_table_peminjaman_table_anggota` (`id_anggota`),
  KEY `FK_table_peminjaman_table_buku` (`id_buku`),
  CONSTRAINT `FK_table_peminjaman_table_anggota` FOREIGN KEY (`id_anggota`) REFERENCES `table_anggota` (`id`),
  CONSTRAINT `FK_table_peminjaman_table_buku` FOREIGN KEY (`id_buku`) REFERENCES `table_buku` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.table_peminjaman: ~7 rows (approximately)
INSERT INTO `table_peminjaman` (`id`, `tgl_pinjam`, `id_anggota`, `id_buku`, `lama_pinjam`, `created_at`, `updated_at`) VALUES
	(1, '2023-01-05', 4, 2, 5, NULL, NULL),
	(2, '2023-01-14', 3, 3, 7, NULL, NULL),
	(3, '2023-02-01', 3, 1, 2, NULL, NULL),
	(4, '2023-02-25', 1, 3, 2, NULL, NULL),
	(5, '2023-02-27', 7, 1, 4, NULL, NULL),
	(6, '2023-03-10', 2, 6, 3, NULL, NULL),
	(7, '2023-03-03', 7, 7, 3, '2023-10-27 00:45:21', '2023-10-27 00:45:21');

-- Dumping structure for table crud.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table crud.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;