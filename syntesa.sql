-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
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

-- Dumping structure for table syntesa.biayas
CREATE TABLE IF NOT EXISTS `biayas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_biaya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.biayas: ~3 rows (approximately)
INSERT INTO `biayas` (`id`, `project_id`, `kategori`, `item`, `jumlah`, `waktu`, `biaya_satuan`, `total_biaya`, `created_at`, `updated_at`) VALUES
	(7, 1, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(8, 1, 'Hotel', '11', '22', '33', '44', '31944', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(9, 1, 'Transport', '55', '66', '77', '88', '447216', '2022-09-13 12:46:08', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.biaya_histories
CREATE TABLE IF NOT EXISTS `biaya_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_history_id` int(11) DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biaya_satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_biaya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.biaya_histories: ~6 rows (approximately)
INSERT INTO `biaya_histories` (`id`, `project_history_id`, `kategori`, `item`, `jumlah`, `waktu`, `biaya_satuan`, `total_biaya`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(2, 2, 'Hotel', '5', '6', '7', '8', '336', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(3, 2, 'Transport', '9', '10', '11', '12', '1320', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(4, 3, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(5, 3, 'Hotel', '5', '6', '7', '8', '336', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(6, 3, 'Transport', '9', '10', '11', '12', '1320', '2022-09-13 12:46:08', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table syntesa.kategoris
CREATE TABLE IF NOT EXISTS `kategoris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.kategoris: ~0 rows (approximately)

-- Dumping structure for table syntesa.lampirans
CREATE TABLE IF NOT EXISTS `lampirans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.lampirans: ~3 rows (approximately)
INSERT INTO `lampirans` (`id`, `project_id`, `kategori`, `dokumen`, `keterangan`, `created_at`, `updated_at`) VALUES
	(1, '1', 'Tiket', '["public\\/dokumen_project\\/rjE6JN8s9NHxEoFHIRbhXnAfT7GpIYjFj4LKaoDd.jpg","public\\/dokumen_project\\/k5QDkx1mbxRytBFJOybgZFI1JZLbzvb1V8V8qgT4.pdf"]', 'tiket', '2022-09-13 12:20:26', '2022-09-13 12:46:08'),
	(2, '1', 'Hotel', '["public\\/dokumen_project\\/GzOn3gjvoPkIA8dFAcy9c6Q5vLC3p8U0wVkd0PAi.jpg"]', 'hotel', '2022-09-13 12:20:26', '2022-09-13 12:46:08'),
	(3, '1', 'Transport', '["public\\/dokumen_project\\/RKuotHfY87jEjBF0qR1O3mrLWgdXt1tli6vNyT9z.jpg"]', 'transport', '2022-09-13 12:20:26', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.migrations: ~14 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_08_05_070219_create_penerima_projects_table', 1),
	(6, '2022_08_05_070235_create_pengaju_projects_table', 1),
	(7, '2022_08_15_125826_create_projects_table', 1),
	(8, '2022_08_15_130048_create_biayas_table', 1),
	(9, '2022_08_15_130103_create_pendapatans_table', 1),
	(10, '2022_08_15_130119_create_lampirans_table', 1),
	(11, '2022_08_17_040619_create_kategoris_table', 1),
	(12, '2022_09_13_094653_create_pendapatan_histories_table', 1),
	(13, '2022_09_13_094826_create_biaya_histories_table', 1),
	(14, '2022_09_13_191423_create_project_histories_table', 1);

-- Dumping structure for table syntesa.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.password_resets: ~0 rows (approximately)

-- Dumping structure for table syntesa.pendapatans
CREATE TABLE IF NOT EXISTS `pendapatans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendapatan_satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_pendapatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.pendapatans: ~3 rows (approximately)
INSERT INTO `pendapatans` (`id`, `project_id`, `kategori`, `item`, `jumlah`, `waktu`, `pendapatan_satuan`, `total_pendapatan`, `created_at`, `updated_at`) VALUES
	(7, 1, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(8, 1, 'Hotel', '22', '44', '55', '66', '159720', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(9, 1, 'Transport', '77', '77', '77', '77', '456533', '2022-09-13 12:46:08', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.pendapatan_histories
CREATE TABLE IF NOT EXISTS `pendapatan_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_history_id` int(11) DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendapatan_satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_pendapatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.pendapatan_histories: ~6 rows (approximately)
INSERT INTO `pendapatan_histories` (`id`, `project_history_id`, `kategori`, `item`, `jumlah`, `waktu`, `pendapatan_satuan`, `total_pendapatan`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(2, 2, 'Hotel', '5', '6', '7', '8', '336', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(3, 2, 'Transport', '9', '10', '11', '12', '1320', '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(4, 3, 'Tiket', '1', '2', '3', '4', '24', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(5, 3, 'Hotel', '5', '6', '7', '8', '336', '2022-09-13 12:46:08', '2022-09-13 12:46:08'),
	(6, 3, 'Transport', '9', '10', '11', '12', '1320', '2022-09-13 12:46:08', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.penerima_projects
CREATE TABLE IF NOT EXISTS `penerima_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pengaju_id` int(11) DEFAULT NULL,
  `tingkatan_penerima` int(11) NOT NULL,
  `jabatan_penerima_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.penerima_projects: ~0 rows (approximately)

-- Dumping structure for table syntesa.pengaju_projects
CREATE TABLE IF NOT EXISTS `pengaju_projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jabatan_pengaju_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.pengaju_projects: ~0 rows (approximately)

-- Dumping structure for table syntesa.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table syntesa.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `no_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemegang_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.projects: ~1 rows (approximately)
INSERT INTO `projects` (`id`, `no_project`, `pemegang_project`, `tgl_project`, `nama_project`, `sales_order`, `status`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, '22.1', 'Rizky Fauzi', '2022-09-13', 'project tes edited', 'public/sales_order_project/Ywxwpk51LLRBccAvDQu3A1tzY17wxmzTCQMncLRG.pdf', 'Normal', 'testing', '2022-09-13 12:20:26', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.project_histories
CREATE TABLE IF NOT EXISTS `project_histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.project_histories: ~2 rows (approximately)
INSERT INTO `project_histories` (`id`, `project_id`, `created_at`, `updated_at`) VALUES
	(2, 1, '2022-09-13 12:26:49', '2022-09-13 12:26:49'),
	(3, 1, '2022-09-13 12:46:08', '2022-09-13 12:46:08');

-- Dumping structure for table syntesa.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table syntesa.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
