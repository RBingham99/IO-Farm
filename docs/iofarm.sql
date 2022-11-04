# ************************************************************
# Sequel Ace SQL dump
# Version 20039
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: iofarm2
# Generation Time: 2022-11-03 01:56:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pigs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pigs`;

CREATE TABLE `pigs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `weight` float DEFAULT NULL,
  `colour` varchar(255) DEFAULT NULL,
  `species` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_pigs_species` FOREIGN KEY (`species`) REFERENCES `species` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `pigs` WRITE;
/*!40000 ALTER TABLE `pigs` DISABLE KEYS */;

INSERT INTO `pigs` (`id`, `name`, `weight`, `colour`, `species`)
VALUES
	(1,'Sally',280.5,'yellow',1),
	(2,'Fred',300,'pink',2),
	(3,'Cuthbert',210.5,'yellow',1),
	(4,'Spider',300,'black',3),
	(5,'Rosalie',295,'pink',4);

/*!40000 ALTER TABLE `pigs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table species
# ------------------------------------------------------------

DROP TABLE IF EXISTS `species`;

CREATE TABLE `species` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `species` WRITE;
/*!40000 ALTER TABLE `species` DISABLE KEYS */;

INSERT INTO `species` (`id`, `name`)
VALUES
	(1,'Bornean Bearded'),
	(2,'Giant Forest Hog'),
	(3,'Palawan Bearded'),
	(4,'Pygmy Hog');

/*!40000 ALTER TABLE `species` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
