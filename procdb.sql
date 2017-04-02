-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: procdb
-- ------------------------------------------------------
-- Server version	5.5.49-0+deb8u1

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
-- Table structure for table `activite`
--

DROP TABLE IF EXISTS `activite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleActivite` varchar(76) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B87555158F0D2744` (`libelleActivite`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activite`
--

LOCK TABLES `activite` WRITE;
/*!40000 ALTER TABLE `activite` DISABLE KEYS */;
INSERT INTO `activite` VALUES (3,'activite3');
/*!40000 ALTER TABLE `activite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activite_composante`
--

DROP TABLE IF EXISTS `activite_composante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activite_composante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `composante_id` int(11) DEFAULT NULL,
  `libelleActivite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `codeActivite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_517E1ABDAC12F1AD` (`composante_id`),
  CONSTRAINT `FK_517E1ABDAC12F1AD` FOREIGN KEY (`composante_id`) REFERENCES `composante` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activite_composante`
--

LOCK TABLES `activite_composante` WRITE;
/*!40000 ALTER TABLE `activite_composante` DISABLE KEYS */;
/*!40000 ALTER TABLE `activite_composante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `prenom_user` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_agent` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_agent` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `fonction_user` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_user` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direction_user` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_user` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_268B9C9D92FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_268B9C9DA0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent`
--

LOCK TABLES `agent` WRITE;
/*!40000 ALTER TABLE `agent` DISABLE KEYS */;
INSERT INTO `agent` VALUES (3,'admin','admin','admin@gmail.com','admin@gmail.com',1,'mbnvqfhzcsg0404g0c4g0owo0w88wss','$2y$13$mbnvqfhzcsg0404g0c4g0enGYgrOIGktmCRu/SZSMclbPzKKiEIIG','2017-03-30 03:31:10',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1),(4,'tojo','tojo','tojo@gmail.com','tojo@gmail.com',1,'5eab0rmf76ccgowcwgw4w8800c0ww8o','$2y$13$5eab0rmf76ccgowcwgw4wujkPR1XKBpCAQ0obzJU7Xe/drGmBlwDi','2017-03-30 03:51:12',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'rivo','0342172100',NULL,NULL,NULL,'fonction1','service1','direction1',1),(5,'mahefa','mahefa','mahefa@gmail.com','mahefa@gmail.com',1,'cqwwn7md9bcogkw84sow8k8g4occ4o8','$2y$13$cqwwn7md9bcogkw84sow8eLWPo/uMT8psaKvLULeOSgNFJJmwMeYG',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Ny aina','0340235630',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'root','root','root@gmail.com','root@gmail.com',1,'dpzw4ryb4oowk0s0ksco084ggkcsco4','$2y$13$dpzw4ryb4oowk0s0ksco0u6hpD0FjNA8pD8oBXwujWmA.WAZFKWDy','2017-03-29 20:27:50',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'doda','doda','doda@gmail.com','doda@gmail.com',1,'59u22yhyha4g8kw8kkc8gwgocccg84k','$2y$13$59u22yhyha4g8kw8kkc8gu4GB1itiHdbH6jt9K1nEZU.eSspIxwTm','2017-03-29 20:37:57',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `agent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agent_entite`
--

DROP TABLE IF EXISTS `agent_entite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agent_entite` (
  `agent_id` int(11) NOT NULL,
  `entite_id` int(11) NOT NULL,
  PRIMARY KEY (`agent_id`,`entite_id`),
  KEY `IDX_44CE4F013414710B` (`agent_id`),
  KEY `IDX_44CE4F019BEA957A` (`entite_id`),
  CONSTRAINT `FK_44CE4F013414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_44CE4F019BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agent_entite`
--

LOCK TABLES `agent_entite` WRITE;
/*!40000 ALTER TABLE `agent_entite` DISABLE KEYS */;
INSERT INTO `agent_entite` VALUES (4,1),(5,2);
/*!40000 ALTER TABLE `agent_entite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commune`
--

DROP TABLE IF EXISTS `commune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commune` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district_id` int(11) NOT NULL,
  `commune_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `commune_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E2E2D1EEB08FA272` (`district_id`),
  CONSTRAINT `FK_E2E2D1EEB08FA272` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commune`
--

LOCK TABLES `commune` WRITE;
/*!40000 ALTER TABLE `commune` DISABLE KEYS */;
INSERT INTO `commune` VALUES (3,1,'commune1','c1'),(4,1,'commune2','c2');
/*!40000 ALTER TABLE `commune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `composante`
--

DROP TABLE IF EXISTS `composante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `composante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projet_id` int(11) NOT NULL,
  `code_composante` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `libelle_composante` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D8E84C8C18272` (`projet_id`),
  CONSTRAINT `FK_D8E84C8C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `composante`
--

LOCK TABLES `composante` WRITE;
/*!40000 ALTER TABLE `composante` DISABLE KEYS */;
INSERT INTO `composante` VALUES (1,2,'cp1','composante1');
/*!40000 ALTER TABLE `composante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptif_par_ui`
--

DROP TABLE IF EXISTS `descriptif_par_ui`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptif_par_ui` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indicateur_id` int(11) NOT NULL,
  `explication_desc_par_ui` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `baseline_desc_par_ui` int(11) NOT NULL DEFAULT '0',
  `objectif_desc_par_ui` int(11) NOT NULL DEFAULT '0',
  `real_cumul_par_ui` int(11) NOT NULL DEFAULT '0',
  `activite_id` int(11) DEFAULT NULL,
  `descriptif_projet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F0D22F9DA3B8F3D` (`indicateur_id`),
  KEY `IDX_5F0D22F99B0F88B1` (`activite_id`),
  KEY `IDX_5F0D22F9674EF2B5` (`descriptif_projet_id`),
  CONSTRAINT `FK_5F0D22F9674EF2B5` FOREIGN KEY (`descriptif_projet_id`) REFERENCES `descriptif_projet` (`id`),
  CONSTRAINT `FK_5F0D22F99B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite_composante` (`id`),
  CONSTRAINT `FK_5F0D22F9DA3B8F3D` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptif_par_ui`
--

LOCK TABLES `descriptif_par_ui` WRITE;
/*!40000 ALTER TABLE `descriptif_par_ui` DISABLE KEYS */;
/*!40000 ALTER TABLE `descriptif_par_ui` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptif_par_ui_commune`
--

DROP TABLE IF EXISTS `descriptif_par_ui_commune`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptif_par_ui_commune` (
  `descriptif_par_ui_id` int(11) NOT NULL,
  `commune_id` int(11) NOT NULL,
  PRIMARY KEY (`descriptif_par_ui_id`,`commune_id`),
  KEY `IDX_28715C83557B7AD` (`descriptif_par_ui_id`),
  KEY `IDX_28715C83131A4F72` (`commune_id`),
  CONSTRAINT `FK_28715C83131A4F72` FOREIGN KEY (`commune_id`) REFERENCES `commune` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_28715C83557B7AD` FOREIGN KEY (`descriptif_par_ui_id`) REFERENCES `descriptif_par_ui` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptif_par_ui_commune`
--

LOCK TABLES `descriptif_par_ui_commune` WRITE;
/*!40000 ALTER TABLE `descriptif_par_ui_commune` DISABLE KEYS */;
/*!40000 ALTER TABLE `descriptif_par_ui_commune` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptif_par_ui_unite`
--

DROP TABLE IF EXISTS `descriptif_par_ui_unite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptif_par_ui_unite` (
  `descriptif_par_ui_id` int(11) NOT NULL,
  `unite_id` int(11) NOT NULL,
  PRIMARY KEY (`descriptif_par_ui_id`,`unite_id`),
  KEY `IDX_8B4AA861557B7AD` (`descriptif_par_ui_id`),
  KEY `IDX_8B4AA861EC4A74AB` (`unite_id`),
  CONSTRAINT `FK_8B4AA861557B7AD` FOREIGN KEY (`descriptif_par_ui_id`) REFERENCES `descriptif_par_ui` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8B4AA861EC4A74AB` FOREIGN KEY (`unite_id`) REFERENCES `unite` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptif_par_ui_unite`
--

LOCK TABLES `descriptif_par_ui_unite` WRITE;
/*!40000 ALTER TABLE `descriptif_par_ui_unite` DISABLE KEYS */;
/*!40000 ALTER TABLE `descriptif_par_ui_unite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descriptif_projet`
--

DROP TABLE IF EXISTS `descriptif_projet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descriptif_projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D15A191AC18272` (`projet_id`),
  CONSTRAINT `FK_D15A191AC18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descriptif_projet`
--

LOCK TABLES `descriptif_projet` WRITE;
/*!40000 ALTER TABLE `descriptif_projet` DISABLE KEYS */;
/*!40000 ALTER TABLE `descriptif_projet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_id` int(11) NOT NULL,
  `district_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `district_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_31C1548798260155` (`region_id`),
  CONSTRAINT `FK_31C1548798260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

LOCK TABLES `district` WRITE;
/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` VALUES (1,1,'districtr1','dr1'),(2,1,'distric2tr1','dr2');
/*!40000 ALTER TABLE `district` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entite`
--

DROP TABLE IF EXISTS `entite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupe_id` int(11) NOT NULL,
  `codeEntite` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `libelleEntite` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID_ENTIE_GROUP` (`codeEntite`,`groupe_id`),
  KEY `IDX_1A2918277A45358C` (`groupe_id`),
  CONSTRAINT `FK_1A2918277A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `group_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entite`
--

LOCK TABLES `entite` WRITE;
/*!40000 ALTER TABLE `entite` DISABLE KEYS */;
INSERT INTO `entite` VALUES (1,1,'DR itasy','DR itasy [DRAE]'),(2,1,'DR V7V','DR V7V [DRAE]'),(3,2,'PAPARIZ','PAPARIZ [PP]'),(4,2,'PHARMAPROD','PHARMAPROD [PP]');
/*!40000 ALTER TABLE `entite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_user`
--

DROP TABLE IF EXISTS `group_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeGroupUser` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A4C98D39B6E8371C` (`codeGroupUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_user`
--

LOCK TABLES `group_user` WRITE;
/*!40000 ALTER TABLE `group_user` DISABLE KEYS */;
INSERT INTO `group_user` VALUES (1,'DRAE'),(3,'OR'),(2,'PP');
/*!40000 ALTER TABLE `group_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicateur`
--

DROP TABLE IF EXISTS `indicateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite_id` int(11) DEFAULT NULL,
  `nature_id` int(11) DEFAULT NULL,
  `mode_calcul_id` int(11) DEFAULT NULL,
  `periodicite_id` int(11) DEFAULT NULL,
  `sous_secteur_id` int(11) DEFAULT NULL,
  `libelleIndicateur` varchar(92) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionIndicateur` tinytext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7C663A2761CD715A` (`libelleIndicateur`),
  KEY `IDX_7C663A279B0F88B1` (`activite_id`),
  KEY `IDX_7C663A273BCB2E4B` (`nature_id`),
  KEY `IDX_7C663A27E3CC4411` (`mode_calcul_id`),
  KEY `IDX_7C663A272928752A` (`periodicite_id`),
  KEY `IDX_7C663A27790611EF` (`sous_secteur_id`),
  CONSTRAINT `FK_7C663A272928752A` FOREIGN KEY (`periodicite_id`) REFERENCES `periodicite` (`id`),
  CONSTRAINT `FK_7C663A273BCB2E4B` FOREIGN KEY (`nature_id`) REFERENCES `nature` (`id`),
  CONSTRAINT `FK_7C663A27790611EF` FOREIGN KEY (`sous_secteur_id`) REFERENCES `sous_secteur` (`id`),
  CONSTRAINT `FK_7C663A279B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`),
  CONSTRAINT `FK_7C663A27E3CC4411` FOREIGN KEY (`mode_calcul_id`) REFERENCES `mode_calcul` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicateur`
--

LOCK TABLES `indicateur` WRITE;
/*!40000 ALTER TABLE `indicateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicateur_subdivision`
--

DROP TABLE IF EXISTS `indicateur_subdivision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicateur_subdivision` (
  `indicateur_id` int(11) NOT NULL,
  `subdivision_id` int(11) NOT NULL,
  PRIMARY KEY (`indicateur_id`,`subdivision_id`),
  KEY `IDX_29382D7ADA3B8F3D` (`indicateur_id`),
  KEY `IDX_29382D7AE05F13C` (`subdivision_id`),
  CONSTRAINT `FK_29382D7ADA3B8F3D` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateur` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_29382D7AE05F13C` FOREIGN KEY (`subdivision_id`) REFERENCES `subdivision` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicateur_subdivision`
--

LOCK TABLES `indicateur_subdivision` WRITE;
/*!40000 ALTER TABLE `indicateur_subdivision` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicateur_subdivision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indicateur_type`
--

DROP TABLE IF EXISTS `indicateur_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicateur_type` (
  `indicateur_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`indicateur_id`,`type_id`),
  KEY `IDX_F25C4D8BDA3B8F3D` (`indicateur_id`),
  KEY `IDX_F25C4D8BC54C8C93` (`type_id`),
  CONSTRAINT `FK_F25C4D8BC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F25C4D8BDA3B8F3D` FOREIGN KEY (`indicateur_id`) REFERENCES `indicateur` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicateur_type`
--

LOCK TABLES `indicateur_type` WRITE;
/*!40000 ALTER TABLE `indicateur_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `indicateur_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mode_calcul`
--

DROP TABLE IF EXISTS `mode_calcul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mode_calcul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_Mode_calcul` varchar(88) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9B2D6C0C20A208D5` (`libelle_Mode_calcul`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mode_calcul`
--

LOCK TABLES `mode_calcul` WRITE;
/*!40000 ALTER TABLE `mode_calcul` DISABLE KEYS */;
INSERT INTO `mode_calcul` VALUES (1,'modeCalcul1'),(2,'modeCalcul2'),(3,'modeCalcul3'),(4,'modeCalcul4');
/*!40000 ALTER TABLE `mode_calcul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nature`
--

DROP TABLE IF EXISTS `nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleNature` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B1D882A7F29B1147` (`libelleNature`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nature`
--

LOCK TABLES `nature` WRITE;
/*!40000 ALTER TABLE `nature` DISABLE KEYS */;
INSERT INTO `nature` VALUES (1,'nature1'),(2,'nature2'),(3,'nature3'),(5,'nature4');
/*!40000 ALTER TABLE `nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objectif_trimestre`
--

DROP TABLE IF EXISTS `objectif_trimestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objectif_trimestre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situation_annuelle_id` int(11) NOT NULL,
  `valeur` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_10466B5E9357F5E9` (`situation_annuelle_id`),
  CONSTRAINT `FK_10466B5E9357F5E9` FOREIGN KEY (`situation_annuelle_id`) REFERENCES `situation_annuelle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objectif_trimestre`
--

LOCK TABLES `objectif_trimestre` WRITE;
/*!40000 ALTER TABLE `objectif_trimestre` DISABLE KEYS */;
/*!40000 ALTER TABLE `objectif_trimestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periodicite`
--

DROP TABLE IF EXISTS `periodicite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periodicite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libellePeriodicite` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D13D99F3FF943F39` (`libellePeriodicite`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periodicite`
--

LOCK TABLES `periodicite` WRITE;
/*!40000 ALTER TABLE `periodicite` DISABLE KEYS */;
INSERT INTO `periodicite` VALUES (2,'periodicite2'),(3,'periodicite3'),(4,'periodicite4');
/*!40000 ALTER TABLE `periodicite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet`
--

DROP TABLE IF EXISTS `projet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_projet` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `objectif_projet` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date_projet` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet`
--

LOCK TABLES `projet` WRITE;
/*!40000 ALTER TABLE `projet` DISABLE KEYS */;
INSERT INTO `projet` VALUES (1,'Projet 1','objectif_projet1','2017-03-25 19:31:15'),(2,'projet 2','Objectif general','2017-03-29 08:28:43');
/*!40000 ALTER TABLE `projet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet_entite`
--

DROP TABLE IF EXISTS `projet_entite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet_entite` (
  `projet_id` int(11) NOT NULL,
  `entite_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_id`,`entite_id`),
  KEY `IDX_3880A871C18272` (`projet_id`),
  KEY `IDX_3880A8719BEA957A` (`entite_id`),
  CONSTRAINT `FK_3880A8719BEA957A` FOREIGN KEY (`entite_id`) REFERENCES `entite` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3880A871C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet_entite`
--

LOCK TABLES `projet_entite` WRITE;
/*!40000 ALTER TABLE `projet_entite` DISABLE KEYS */;
INSERT INTO `projet_entite` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `projet_entite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projet_region`
--

DROP TABLE IF EXISTS `projet_region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projet_region` (
  `projet_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_id`,`region_id`),
  KEY `IDX_2DCB4120C18272` (`projet_id`),
  KEY `IDX_2DCB412098260155` (`region_id`),
  CONSTRAINT `FK_2DCB412098260155` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2DCB4120C18272` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projet_region`
--

LOCK TABLES `projet_region` WRITE;
/*!40000 ALTER TABLE `projet_region` DISABLE KEYS */;
INSERT INTO `projet_region` VALUES (1,1),(2,1);
/*!40000 ALTER TABLE `projet_region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realisation_trimestre`
--

DROP TABLE IF EXISTS `realisation_trimestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realisation_trimestre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `situation_annuelle_id` int(11) NOT NULL,
  `valeur` decimal(10,0) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_936A8B09357F5E9` (`situation_annuelle_id`),
  CONSTRAINT `FK_936A8B09357F5E9` FOREIGN KEY (`situation_annuelle_id`) REFERENCES `situation_annuelle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realisation_trimestre`
--

LOCK TABLES `realisation_trimestre` WRITE;
/*!40000 ALTER TABLE `realisation_trimestre` DISABLE KEYS */;
/*!40000 ALTER TABLE `realisation_trimestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Region1','r1'),(2,'region2','r2'),(3,'region3','r3');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situation_annuelle`
--

DROP TABLE IF EXISTS `situation_annuelle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situation_annuelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descriptif_par_ui_id` int(11) NOT NULL,
  `annee_sit_an_par_ui` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `valeur_cible` decimal(10,0) NOT NULL,
  `real_glob_sit_an_par_ui` decimal(10,0) NOT NULL,
  `realisation_cumule` decimal(10,0) NOT NULL,
  `ecart_annee` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6A062A42557B7AD` (`descriptif_par_ui_id`),
  CONSTRAINT `FK_6A062A42557B7AD` FOREIGN KEY (`descriptif_par_ui_id`) REFERENCES `descriptif_par_ui` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situation_annuelle`
--

LOCK TABLES `situation_annuelle` WRITE;
/*!40000 ALTER TABLE `situation_annuelle` DISABLE KEYS */;
/*!40000 ALTER TABLE `situation_annuelle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sous_secteur`
--

DROP TABLE IF EXISTS `sous_secteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sous_secteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSousSecteur` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A34C5D52487DAF3D` (`libelleSousSecteur`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sous_secteur`
--

LOCK TABLES `sous_secteur` WRITE;
/*!40000 ALTER TABLE `sous_secteur` DISABLE KEYS */;
INSERT INTO `sous_secteur` VALUES (1,'sous secteur1'),(2,'sous secteur2'),(3,'sous secteur3');
/*!40000 ALTER TABLE `sous_secteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subdivision`
--

DROP TABLE IF EXISTS `subdivision`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subdivision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleSubdivision` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B87FA9D352E5C57` (`libelleSubdivision`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subdivision`
--

LOCK TABLES `subdivision` WRITE;
/*!40000 ALTER TABLE `subdivision` DISABLE KEYS */;
INSERT INTO `subdivision` VALUES (3,'subdivision3');
/*!40000 ALTER TABLE `subdivision` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleType` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8CDE5729997FABD2` (`libelleType`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (2,'type2'),(4,'type4');
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unite`
--

DROP TABLE IF EXISTS `unite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleUnite` varchar(53) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1D64C118371E4B70` (`libelleUnite`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unite`
--

LOCK TABLES `unite` WRITE;
/*!40000 ALTER TABLE `unite` DISABLE KEYS */;
INSERT INTO `unite` VALUES (4,'unite1'),(5,'unite2'),(6,'unite3');
/*!40000 ALTER TABLE `unite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-30  4:52:26
