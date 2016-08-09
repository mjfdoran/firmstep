# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.19-1~exp1ubuntu2)
# Database: firmstep
# Generation Time: 2016-08-09 21:19:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `title`, `first_name`, `last_name`, `type`, `services`, `created_at`, `updated_at`)
VALUES
	(33,'mr','adf','adsf','organisation','missed-bin','2016-08-09 20:58:45','2016-08-09 20:58:45'),
	(34,'mr','asdf','adsf','organisation','missed-bin','2016-08-09 20:58:52','2016-08-09 20:58:52'),
	(35,'mr','asdf333','adsf333','organisation','missed-bin','2016-08-09 20:59:07','2016-08-09 20:59:07'),
	(36,'mr','asdf','asdf','organisation','council-tax','2016-08-09 20:59:55','2016-08-09 20:59:55'),
	(37,'mr','aa','dd','organisation','missed-bin','2016-08-09 21:02:40','2016-08-09 21:02:40'),
	(38,'mr','aa','aa','organisation','housing','2016-08-09 21:03:22','2016-08-09 21:03:22'),
	(39,'mr','a','sad','organisation','missed-bin','2016-08-09 21:03:42','2016-08-09 21:03:42'),
	(40,'mr','a','sad','organisation','missed-bin','2016-08-09 21:03:44','2016-08-09 21:03:44'),
	(41,'mr','a','sad','organisation','missed-bin','2016-08-09 21:03:45','2016-08-09 21:03:45'),
	(42,'mr','a','sad','organisation','missed-bin','2016-08-09 21:03:47','2016-08-09 21:03:47'),
	(43,'mr','a','sad','organisation','missed-bin','2016-08-09 21:03:49','2016-08-09 21:03:49');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
