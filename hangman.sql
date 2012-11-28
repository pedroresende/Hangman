-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hangman
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `sl_games`
--

DROP TABLE IF EXISTS `sl_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sl_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) DEFAULT NULL,
  `token` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `word` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `attempts` smallint(6) NOT NULL,
  `tried_letters` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `found_letters` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` smallint(6) NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CF3209855F37A13B` (`token`),
  KEY `IDX_CF32098599E6F5DF` (`player_id`),
  CONSTRAINT `FK_CF32098599E6F5DF` FOREIGN KEY (`player_id`) REFERENCES `sl_players` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sl_games`
--

LOCK TABLES `sl_games` WRITE;
/*!40000 ALTER TABLE `sl_games` DISABLE KEYS */;
/*!40000 ALTER TABLE `sl_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sl_players`
--

DROP TABLE IF EXISTS `sl_players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sl_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_738759EFF85E0677` (`username`),
  UNIQUE KEY `UNIQ_738759EFE7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sl_players`
--

LOCK TABLES `sl_players` WRITE;
/*!40000 ALTER TABLE `sl_players` DISABLE KEYS */;
INSERT INTO `sl_players` VALUES (1,'PedroResende','pedroresende@mail.resende.biz','oko','dshfdjkshaksflaf',1,1,'2017-12-27 16:31:00'),(2,'pmmresende','pedro.resende@ez.no','ItRc5uA2UbS6AlhFT1kn2hPB9+6LN40J+mssTS0iZ57NYyZYegOcoPebRTMwtuP5sobHkXgWqVJClx0iJpptTg==','3f3f99ee5d11e225b27de612621f860de8f59dbe',1,0,'2012-12-28 11:48:51');
/*!40000 ALTER TABLE `sl_players` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-11-28 16:49:24
