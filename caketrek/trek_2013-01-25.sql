# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.44)
# Database: trek
# Generation Time: 2013-01-25 17:50:21 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `user_id`, `note`, `comment`)
VALUES
	(1,1,5,'C trop de la booooooombe'),
	(2,1,10,'elle est moche mais gentille');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments_guides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_guides`;

CREATE TABLE `comments_guides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `comments_guides` WRITE;
/*!40000 ALTER TABLE `comments_guides` DISABLE KEYS */;

INSERT INTO `comments_guides` (`id`, `comment_id`, `guide_id`)
VALUES
	(2,1,3),
	(3,1,4);

/*!40000 ALTER TABLE `comments_guides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments_journeys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_journeys`;

CREATE TABLE `comments_journeys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `journey_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `comments_journeys` WRITE;
/*!40000 ALTER TABLE `comments_journeys` DISABLE KEYS */;

INSERT INTO `comments_journeys` (`id`, `comment_id`, `journey_id`)
VALUES
	(1,1,1);

/*!40000 ALTER TABLE `comments_journeys` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments_points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_points`;

CREATE TABLE `comments_points` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `point_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `comments_points` WRITE;
/*!40000 ALTER TABLE `comments_points` DISABLE KEYS */;

INSERT INTO `comments_points` (`id`, `comment_id`, `point_id`)
VALUES
	(1,1,1),
	(2,1,2);

/*!40000 ALTER TABLE `comments_points` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments_tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_tourists`;

CREATE TABLE `comments_tourists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `comments_tourists` WRITE;
/*!40000 ALTER TABLE `comments_tourists` DISABLE KEYS */;

INSERT INTO `comments_tourists` (`id`, `tourist_id`, `comment_id`)
VALUES
	(1,1,1),
	(2,2,1),
	(3,3,1),
	(4,4,1);

/*!40000 ALTER TABLE `comments_tourists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments_tracks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments_tracks`;

CREATE TABLE `comments_tracks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `comments_tracks` WRITE;
/*!40000 ALTER TABLE `comments_tracks` DISABLE KEYS */;

INSERT INTO `comments_tracks` (`id`, `comment_id`, `track_id`)
VALUES
	(1,1,1);

/*!40000 ALTER TABLE `comments_tracks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`)
VALUES
	(1,'Touristes');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table guides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guides`;

CREATE TABLE `guides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(10) NOT NULL,
  `zone_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `guides` WRITE;
/*!40000 ALTER TABLE `guides` DISABLE KEYS */;

INSERT INTO `guides` (`id`, `tourist_id`, `zone_id`)
VALUES
	(3,3,1),
	(4,4,2);

/*!40000 ALTER TABLE `guides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table journeys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `journeys`;

CREATE TABLE `journeys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `tourist_id` int(10) NOT NULL,
  `guide_id` int(10) NOT NULL,
  `zone_id` int(10) NOT NULL,
  `track_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `journeys` WRITE;
/*!40000 ALTER TABLE `journeys` DISABLE KEYS */;

INSERT INTO `journeys` (`id`, `name`, `tourist_id`, `guide_id`, `zone_id`, `track_id`)
VALUES
	(1,'Mont-Blanc du 5 au 6',1,1,1,1);

/*!40000 ALTER TABLE `journeys` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table journeys_guides
# ------------------------------------------------------------

DROP TABLE IF EXISTS `journeys_guides`;

CREATE TABLE `journeys_guides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `journey_id` int(11) NOT NULL,
  `guide_id` int(11) NOT NULL,
  `journey_confirmed` tinyint(1) NOT NULL,
  `guide_confirmed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `journeys_guides` WRITE;
/*!40000 ALTER TABLE `journeys_guides` DISABLE KEYS */;

INSERT INTO `journeys_guides` (`id`, `journey_id`, `guide_id`, `journey_confirmed`, `guide_confirmed`)
VALUES
	(2,1,3,0,0);

/*!40000 ALTER TABLE `journeys_guides` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table points
# ------------------------------------------------------------

DROP TABLE IF EXISTS `points`;

CREATE TABLE `points` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `zone_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `points` WRITE;
/*!40000 ALTER TABLE `points` DISABLE KEYS */;

INSERT INTO `points` (`id`, `name`, `zone_id`)
VALUES
	(1,'Sommet 1',1),
	(2,'Sommet 2',1),
	(3,'sommet 3',1);

/*!40000 ALTER TABLE `points` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table points_tracks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `points_tracks`;

CREATE TABLE `points_tracks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `point_id` int(10) NOT NULL,
  `track_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `points_tracks` WRITE;
/*!40000 ALTER TABLE `points_tracks` DISABLE KEYS */;

INSERT INTO `points_tracks` (`id`, `point_id`, `track_id`)
VALUES
	(1,1,1),
	(2,2,1),
	(3,3,1);

/*!40000 ALTER TABLE `points_tracks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists`;

CREATE TABLE `tourists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL DEFAULT '',
  `photo` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tourists` WRITE;
/*!40000 ALTER TABLE `tourists` DISABLE KEYS */;

INSERT INTO `tourists` (`id`, `description`, `photo`, `user_id`)
VALUES
	(1,'grand',X'6464666F746F2E6A7067',2),
	(2,'Bo gosse',X'626F672E6A7067',1),
	(3,'fille',X'70686F746F2E6A7067',3),
	(4,'petit',X'662E6A7067',4);

/*!40000 ALTER TABLE `tourists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tourists_journeys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists_journeys`;

CREATE TABLE `tourists_journeys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id` int(11) NOT NULL,
  `journey_id` int(11) NOT NULL,
  `tourist_confirmed` tinyint(1) NOT NULL,
  `journey_confirmed` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

LOCK TABLES `tourists_journeys` WRITE;
/*!40000 ALTER TABLE `tourists_journeys` DISABLE KEYS */;

INSERT INTO `tourists_journeys` (`id`, `tourist_id`, `journey_id`, `tourist_confirmed`, `journey_confirmed`)
VALUES
	(1,1,1,0,0),
	(2,2,1,0,0),
	(3,3,1,0,0),
	(4,4,1,0,0);

/*!40000 ALTER TABLE `tourists_journeys` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tourists_tourists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tourists_tourists`;

CREATE TABLE `tourists_tourists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tourist_id_1` int(10) NOT NULL,
  `tourist_id_2` int(10) NOT NULL,
  `tourist_confirmed_1` tinyint(1) NOT NULL,
  `tourist_confirmed_2` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;



# Dump of table tracks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tracks`;

CREATE TABLE `tracks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `zone_id` int(10) NOT NULL,
  `durée` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `tracks` WRITE;
/*!40000 ALTER TABLE `tracks` DISABLE KEYS */;

INSERT INTO `tracks` (`id`, `name`, `zone_id`, `durée`)
VALUES
	(1,'Trail du Mont-Blanc',1,0);

/*!40000 ALTER TABLE `tracks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `group_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `group_id`)
VALUES
	(1,'Matthieu','matthieu','msuty@gmail.com',1),
	(2,'Thibault','thibault','thibault.stringat@gmail.com',1),
	(3,'Sam','sam','sam@sam.fr',1),
	(4,'FAb','fab','fab@fab.fab',1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table zones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zones`;

CREATE TABLE `zones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `zones` WRITE;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;

INSERT INTO `zones` (`id`, `name`)
VALUES
	(1,'Alpes'),
	(2,'PyrÃ©nÃ©es');

/*!40000 ALTER TABLE `zones` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
