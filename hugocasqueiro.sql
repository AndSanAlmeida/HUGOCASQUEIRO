-- --------------------------------------------------------
-- Anfitrião:                    localhost
-- Versão do servidor:           5.7.27 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hugocasqueiro
DROP DATABASE IF EXISTS `hugocasqueiro`;
CREATE DATABASE IF NOT EXISTS `hugocasqueiro` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hugocasqueiro`;

-- Dumping structure for table hugocasqueiro.abouts
DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `body` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.abouts: ~0 rows (approximately)
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
REPLACE INTO `abouts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"Nome em ingl\\\\u00eas\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Sobre N\\\\u00f3s\\""}', '{"en": "\\"conteudo em ingl\\\\u00eas\\"", "fr": "\\"conteudo em franc\\\\u00eas\\"", "pt": "\\"Somos uma empresa jovem e profissional sediada em Mira de Aire, distrito de Leiria, fundada em 2020. Com mais de 10 anos de experi\\\\u00eancia na conce\\\\u00e7\\\\u00e3o, fabrica\\\\u00e7\\\\u00e3o e montagem de todo o tipo de carpintaria interior e exterior, o nosso principal objetivo \\\\u00e9 a satisfa\\\\u00e7\\\\u00e3o do cliente, oferecendo-lhe servi\\\\u00e7os de carpintaria de grande qualidade e excel\\\\u00eancia!\\""}', '2019-12-21 17:01:32', '2019-12-22 17:59:20');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` json NOT NULL,
  `filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `name`, `filter`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"All\\"", "fr": "\\"Tout\\"", "pt": "\\"Todos\\""}', '*', '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(2, '{"en": "\\"Inside\\"", "fr": "\\"Int\\\\u00e9rieur\\"", "pt": "\\"Interior\\""}', '.interior', '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(3, '{"en": "\\"Outside\\"", "fr": "\\"Ext\\\\u00e9rieur\\"", "pt": "\\"Exterior\\""}', '.exterior', '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(4, '{"en": "\\"Kitchen\\"", "fr": "\\"Cuisine\\"", "pt": "\\"Cozinha\\""}', '.kitchen', '2019-12-21 17:01:32', '2019-12-21 17:01:32');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `body` json NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.comments: ~2 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
REPLACE INTO `comments` (`id`, `body`, `name`, `photo`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "null", "fr": "null", "pt": "\\"\\\\\\"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe nemo iusto quae nobis nam est fugit beatae.\\\\\\"\\""}', 'André Almeida', 'img/comments/user-1.jpg', '2019-12-27 17:33:56', '2019-12-27 17:34:08'),
	(2, '{"en": "null", "fr": "null", "pt": "\\"\\\\\\"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, at. Tempora laudantium saepe nemo iusto quae nobis nam est fugit beatae.\\\\\\"\\""}', 'Bruno Larilas', 'img/comments/user-2.jpg', '2019-12-27 17:43:07', '2019-12-27 17:43:20');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_project_id_foreign` (`project_id`),
  CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.images: ~15 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
REPLACE INTO `images` (`id`, `path`, `project_id`, `created_at`, `updated_at`) VALUES
	(1, 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 1, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(2, 'https://images.pexels.com/photos/1684915/pexels-photo-1684915.jpeg', 1, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(3, 'https://images.pexels.com/photos/245535/pexels-photo-245535.jpeg', 1, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(4, 'https://images.pexels.com/photos/3395709/pexels-photo-3395709.jpeg', 1, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(5, 'https://images.pexels.com/photos/2881281/pexels-photo-2881281.jpeg', 1, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(6, 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(7, 'https://images.pexels.com/photos/1684915/pexels-photo-1684915.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(8, 'https://images.pexels.com/photos/245535/pexels-photo-245535.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(9, 'https://images.pexels.com/photos/3395709/pexels-photo-3395709.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(10, 'https://images.pexels.com/photos/2881281/pexels-photo-2881281.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(11, 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(12, 'https://images.pexels.com/photos/1684915/pexels-photo-1684915.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(13, 'https://images.pexels.com/photos/245535/pexels-photo-245535.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(14, 'https://images.pexels.com/photos/3395709/pexels-photo-3395709.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(15, 'https://images.pexels.com/photos/2881281/pexels-photo-2881281.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_12_07_203838_create_abouts_table', 1),
	(4, '2019_12_07_204003_create_missions_table', 1),
	(5, '2019_12_07_221226_create_sliders_table', 1),
	(6, '2019_12_08_174815_create_services_table', 1),
	(7, '2019_12_11_134003_create_comments_table', 1),
	(8, '2019_12_17_185330_create_categories_table', 1),
	(9, '2019_12_21_095530_create_projects_table', 1),
	(10, '2019_12_21_100953_create_images_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.missions
DROP TABLE IF EXISTS `missions`;
CREATE TABLE IF NOT EXISTS `missions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `body` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.missions: ~0 rows (approximately)
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
REPLACE INTO `missions` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"Our Mission\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Nossa Miss\\\\u00e3o\\""}', '{"en": "\\"Our mission is to produce the highest quality work for every client, on every project.\\"", "fr": "\\"conteudo em franc\\\\u00eas\\"", "pt": "\\"A nossa miss\\\\u00e3o \\\\u00e9 produzir a maior qualidade de trabalho para todos os clientes, em todos os projectos.\\""}', '2019-12-21 17:01:32', '2019-12-22 17:58:35');
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.projects
DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `family` json NOT NULL,
  `main_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_category_id_foreign` (`category_id`),
  CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.projects: ~3 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
REPLACE INTO `projects` (`id`, `title`, `family`, `main_photo`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"Nome em ingl\\\\u00eas\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Nome em portugu\\\\u00eas\\""}', '{"en": "\\"teste,quatro\\"", "fr": "\\"teste,quatro\\"", "pt": "\\"teste,quatro\\""}', 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 2, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(2, '{"en": "\\"Nome em ingl\\\\u00eas\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Nome em portugu\\\\u00eas\\""}', '{"en": "\\"teste,quatro\\"", "fr": "\\"teste,quatro\\"", "pt": "\\"teste,quatro\\""}', 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 3, '2019-12-21 17:01:32', '2019-12-21 17:01:32'),
	(3, '{"en": "\\"Nome em ingl\\\\u00eas\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Nome em portugu\\\\u00eas\\""}', '{"en": "\\"teste,quatro\\"", "fr": "\\"teste,quatro\\"", "pt": "\\"teste,quatro\\""}', 'https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg', 4, '2019-12-21 17:01:32', '2019-12-21 17:01:32');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.services
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `body` json NOT NULL,
  `identifier` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.services: ~6 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
REPLACE INTO `services` (`id`, `title`, `body`, `identifier`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"Nome em ingl\\\\u00eas\\"", "fr": "\\"Nome em franc\\\\u00eas\\"", "pt": "\\"Carpintaria Interior\\""}', '{"en": "\\"%3Cp%3Econteudo+em+ingl%C3%AAs%3C%2Fp%3E\\"", "fr": "\\"%3Cp%3Econteudo+em+franc%C3%AAs%3C%2Fp%3E\\"", "pt": "\\"%3Cul%3E%3Cli%3EPortas+de+interior+e+portas+de+entrada%3C%2Fli%3E%3Cli%3EJanelas+em+madeira+e+PVC%3C%2Fli%3E%3Cli%3ERoupeiros%2C+arm%C3%A1rios+e+closets%3C%2Fli%3E%3Cli%3EM%C3%B3veis+de+casa+de+banho%3C%2Fli%3E%3Cli%3ETodo+o+tipo+de+mobili%C3%A1rio+sobre+medida+%28mesas%2C+camas%2C+entre+outros%E2%80%A6%29%3C%2Fli%3E%3C%2Ful%3E%3Cp%3E%3Cbr%3E%3C%2Fp%3E\\""}', 1, '2019-12-21 17:01:32', '2019-12-26 03:25:58'),
	(2, '{"en": "null", "fr": "null", "pt": "\\"Carpintaria Exterior\\""}', '{"en": "\\"\\"", "fr": "\\"\\"", "pt": "\\"%3Cul%3E%3Cli%3ERevestimento+de+paredes%2C+fachadas+em+madeira+maci%C3%A7a+e+aglomerados%3C%2Fli%3E%3Cli%3ETerra%C3%A7os+em+deck+comp%C3%B3sito+e+madeira%3C%2Fli%3E%3Cli%3EAlpendres+e+cobertos+em+madeira%3C%2Fli%3E%3Cli%3ECabanas+de+jardim%3C%2Fli%3E%3Cli%3ERevestimento+de+Jacuzzis+e+piscinas+exteriores%3C%2Fli%3E%3C%2Ful%3E\\""}', 2, '2019-12-27 17:22:05', '2019-12-27 17:22:05'),
	(3, '{"en": "null", "fr": "null", "pt": "\\"Escadaria Interior e Exterior\\""}', '{"en": "\\"\\"", "fr": "\\"\\"", "pt": "\\"%3Cul%3E%3Cli%3ETodo+o+tipo+de+escadaria+em+madeira+com+acabamento+em+verniz+ou+velatura%3C%2Fli%3E%3C%2Ful%3E\\""}', 3, '2019-12-27 17:23:09', '2019-12-27 17:23:09'),
	(4, '{"en": "null", "fr": "null", "pt": "\\"Pavimentos\\""}', '{"en": "\\"\\"", "fr": "\\"\\"", "pt": "\\"%3Cul%3E%3Cli%3EPiso+flutuante+em+madeira+e+estratificado+laminado%3C%2Fli%3E%3Cli%3ELamparquet+colado+ao+ch%C3%A3o+em+madeira+maci%C3%A7a%3C%2Fli%3E%3Cli%3ESoalhos+em+madeira%3C%2Fli%3E%3Cli%3ERodap%C3%A9s+em+madeira+e+laminados%3C%2Fli%3E%3C%2Ful%3E\\""}', 4, '2019-12-27 17:23:45', '2019-12-27 17:23:45'),
	(5, '{"en": "null", "fr": "null", "pt": "\\"Cozinhas\\""}', '{"en": "\\"\\"", "fr": "\\"\\"", "pt": "\\"%3Cul%3E%3Cli%3EConce%C3%A7%C3%A3o+com+projeto+em+3D%2C+fabrica%C3%A7%C3%A3o+e+montagem+de+cozinhas+modernas+e+tradicionais+com+um+vasto+leque+de+cores+e+padr%C3%B5es+em+melamina%2C+termolaminado%2C+madeira+maci%C3%A7a+e+lacado+MDF%3C%2Fli%3E%3C%2Ful%3E\\""}', 5, '2019-12-27 17:24:06', '2019-12-27 17:24:45'),
	(6, '{"en": "null", "fr": "null", "pt": "\\"Renova\\\\u00e7\\\\u00e3o e Restaura\\\\u00e7\\\\u00e3o\\""}', '{"en": "\\"\\"", "fr": "\\"\\"", "pt": "\\"%3Cul%3E%3Cli%3ETodo+o+tipo+de+renova%C3%A7%C3%A3o+e+tratamento+de+madeira+maci%C3%A7a+em+m%C3%B3veis%2C+fachadas+e+pisos%3C%2Fli%3E%3C%2Ful%3E\\""}', 6, '2019-12-27 17:24:28', '2019-12-27 17:24:28');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.sliders
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.sliders: ~2 rows (approximately)
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
REPLACE INTO `sliders` (`id`, `title`, `path`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "\\"Slider 1 en\\"", "fr": "\\"Slider 1 fr\\"", "pt": "\\"Lorem ipsum.\\""}', 'img/slider/slide-1.jpg', '2019-12-21 17:01:32', '2019-12-27 17:49:18'),
	(2, '{"en": "\\"Slider 2 en\\"", "fr": "\\"Slider 2 fr\\"", "pt": "\\"Lorem ipsum dolor.\\""}', 'img/slider/slide-2.jpg', '2019-12-21 17:01:32', '2019-12-27 17:49:53');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;

-- Dumping structure for table hugocasqueiro.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hugocasqueiro.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@admin.com', NULL, '$2y$10$T9rPTdrkSEkNMbeyM8ooNu/m1WUYrCLcbWZWaBl8B6KJqyycRI8mK', NULL, '2019-12-21 17:01:32', '2019-12-21 17:01:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
