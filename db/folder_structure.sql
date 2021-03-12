# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 8.0.23)
# Database: folder_structure
# Generation Time: 2021-03-12 09:40:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table paths
# ------------------------------------------------------------

DROP TABLE IF EXISTS `paths`;

CREATE TABLE `paths` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `directory` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name_ind` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `paths` WRITE;
/*!40000 ALTER TABLE `paths` DISABLE KEYS */;

INSERT INTO `paths` (`id`, `name`, `directory`, `type`)
VALUES
	(613,'C:','','folder'),
	(614,'Documents','C:','folder'),
	(615,'Images','C:\\Documents','folder'),
	(616,'Image1.jpg','C:\\Documents\\Images','file'),
	(617,'Image2.jpg','C:\\Documents\\Images','file'),
	(618,'Image3.png','C:\\Documents\\Images','file'),
	(619,'Works','C:\\Documents','folder'),
	(620,'Letter.doc','C:\\Documents\\Works','file'),
	(621,'Accountant','C:\\Documents\\Works','folder'),
	(622,'Accounting.xls','C:\\Documents\\Works\\Accountant','file'),
	(623,'AnnualReport.xls','C:\\Documents\\Works\\Accountant','file'),
	(624,'Program Files','C:','folder'),
	(625,'Skype','C:\\Program Files','folder'),
	(626,'Skype.exe','C:\\Program Files\\Skype','file'),
	(627,'Readme.txt','C:\\Program Files\\Skype','file'),
	(628,'Mysql','C:\\Program Files','folder'),
	(629,'Mysql.exe','C:\\Program Files\\Mysql','file'),
	(630,'Mysql.com','C:\\Program Files\\Mysql','file');

/*!40000 ALTER TABLE `paths` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
