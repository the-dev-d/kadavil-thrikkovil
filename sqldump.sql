-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: kadavilthrikkovil
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'thirumeni','password',NULL,NULL,'thedevd666@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `offering_id` int NOT NULL,
  `user_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` tinyint NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,1,1,'2023-12-31 07:32:43','2023-12-31 07:32:43','Dhaivath',1,0),(2,1,1,'2023-12-31 09:13:54','2023-12-31 09:13:54','Dhaivath',2,0);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings_ongoing`
--

DROP TABLE IF EXISTS `bookings_ongoing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings_ongoing` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `stripe_session_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `offering_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings_ongoing`
--

LOCK TABLES `bookings_ongoing` WRITE;
/*!40000 ALTER TABLE `bookings_ongoing` DISABLE KEYS */;
/*!40000 ALTER TABLE `bookings_ongoing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_12_24_071517_create_offerings',1),(6,'2023_12_24_091606_create_bookings_ongoing',1),(7,'2023_12_24_091611_create_bookings',1),(8,'2023_12_24_102944_add_fields_to_bookings_ongoing',1),(9,'2023_12_24_103136_add_fields_to_bookings',1),(10,'2023_12_26_144633_add_status_to_user',1),(11,'2023_12_31_132325_create_stars',2),(13,'2023_12_31_135821_add_status_to_booking',3),(14,'2023_12_31_145945_create_admin',4),(15,'2024_01_01_113836_add_email_to_admin',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offerings`
--

DROP TABLE IF EXISTS `offerings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offerings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offerings`
--

LOCK TABLES `offerings` WRITE;
/*!40000 ALTER TABLE `offerings` DISABLE KEYS */;
INSERT INTO `offerings` VALUES (1,'പുഷ്പാഞ്ചലി ',10.00,NULL,NULL),(2,'പുരുഷസൂക്തം അർച്ചന',25.00,NULL,NULL),(3,'ഭാഗ്യസൂക്തം അർച്ചന',25.00,NULL,NULL),(4,'സഹസ്രനാമം അർച്ചന',101.00,NULL,NULL),(5,'അഷ്ടോത്തര അർച്ചന',50.00,NULL,NULL),(104,'ഐക്യമത്യാർച്ചന',25.00,NULL,NULL),(105,'മൃത്യുംഞ്ജയാർച്ചന',25.00,NULL,NULL),(106,'സാരസ്വതാർച്ചന',25.00,NULL,NULL),(107,'വിദ്യാരാജഗോപാലാർച്ചന',25.00,NULL,NULL),(108,'രാജഗോപാലാർച്ചന',25.00,NULL,NULL),(109,'ആയുർഗോപാലാർച്ചന',25.00,NULL,NULL),(110,'സ്വയംവരാർച്ചന',25.00,NULL,NULL),(111,'പാർത്ഥസാരഥി മന്ത്രാർച്ചന',25.00,NULL,NULL),(112,'സുദർശനമന്ത്രാർച്ചന',50.00,NULL,NULL),(113,'ഗുരുതി പുഷ്‌പാഞ്ജലി',50.00,NULL,NULL),(114,'ശത്രുസംഹാര പുഷ്പാഞ്ജലി',50.00,NULL,NULL),(115,'പാൽ അഭിഷേകം',101.00,NULL,NULL),(116,'എണ്ണ അഭിഷേകം',50.00,NULL,NULL),(117,'യക്ഷിക്ക് ധാര',101.00,NULL,NULL),(118,'ശിവന് ധാര',51.00,NULL,NULL),(119,'ശംഖാഭിഷേകം',100.00,NULL,NULL),(120,'തുളസിമാല',50.00,NULL,NULL),(121,'പട്ട് ചാർത്തൽ',250.00,NULL,NULL),(122,'ചരട്, പേന, പുസ്തകം പൂജിക്കൽ',50.00,NULL,NULL),(123,'തിരുമുഖം ചാർത്ത്',300.00,NULL,NULL),(124,'മുഴുക്കാപ്പ്  ചാർത്ത് ',1250.00,NULL,NULL),(125,'എണ്ണ വിളക്ക്',20.00,NULL,NULL),(126,'നെയ്യ് വിളക്ക്',50.00,NULL,NULL),(127,'തൃക്കൈവെണ്ണ ',10.00,NULL,NULL),(128,'വെണ്ണ നിവേദ്യം',50.00,NULL,NULL),(129,'തൃമധുരം',50.00,NULL,NULL),(130,'അവിൽ നിവേദ്യം',250.00,NULL,NULL),(131,'വെള്ള നിവേദ്യം',50.00,NULL,NULL),(132,'പാൽപ്പായസം',100.00,NULL,NULL),(133,'കൂട്ടു പായസം',100.00,NULL,NULL),(134,'നെയ്യ്പ്പായസം',125.00,NULL,NULL),(135,'കടും പായസം ',150.00,NULL,NULL),(136,'പിഴിഞ്ഞുപായസം',250.00,NULL,NULL),(137,'രക്ഷസ്സിന് തിടപ്പിള്ളിയിൽ പത്മമം ഇട്ട് പൂജ',250.00,NULL,NULL),(138,'പിതൃനമസ്കാരം',50.00,NULL,NULL),(139,'കൂട്ടനമസ്ക‌ാരം',100.00,NULL,NULL),(140,'ഉണ്ണിയപ്പം',200.00,NULL,NULL),(141,'ഒറ്റയപ്പം',100.00,NULL,NULL),(142,'പാനകം ',50.00,NULL,NULL),(143,'കൈവട്ടക ഗുരുതി',50.00,NULL,NULL),(144,'ഒരു ദിവസത്തെ പൂജ',750.00,NULL,NULL),(145,'ഒരു നേരത്തെ പൂജ',500.00,NULL,NULL),(146,'വിശേഷാൽ പൂജ',3000.00,NULL,NULL),(147,'ഗണപതിഹോമം ',150.00,NULL,NULL),(148,'യക്ഷിപൂജ',100.00,NULL,NULL),(149,'ത്രികാലപൂജ',2500.00,NULL,NULL),(150,'ലക്ഷ്മി നാരായണപൂജ',500.00,NULL,NULL),(151,'നൂറും പാലും ',200.00,NULL,NULL),(152,'സർപ്പത്തിന് പുഷ്‌പാഞ്ജലി',25.00,NULL,NULL),(153,'ഭഗവതി സേവ ',500.00,NULL,NULL),(154,'നിറമാല വിളക്ക്',1250.00,NULL,NULL),(155,'ചോറൂണ് ',100.00,NULL,NULL),(156,'വാഹനപൂജ',250.00,NULL,NULL),(157,'നടക്കിടാവ് ',50.00,NULL,NULL),(158,'രക്ഷസ്സിന് പാൽപ്പായസം',100.00,NULL,NULL);
/*!40000 ALTER TABLE `offerings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stars`
--

DROP TABLE IF EXISTS `stars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stars`
--

LOCK TABLES `stars` WRITE;
/*!40000 ALTER TABLE `stars` DISABLE KEYS */;
INSERT INTO `stars` VALUES (1,'അശ്വതി'),(2,'ഭരണി	'),(3,'കാർത്തിക'),(4,'രോഹിണി'),(5,'മകയിരം'),(6,'തിരുവാതിര'),(7,'പുണർതം'),(8,'പൂയം'),(9,'ആയില്യം'),(10,'മകം'),(11,'പൂരം'),(12,'ഉത്രം'),(13,'അത്തം'),(14,'ചിത്തിര'),(15,'ചോതി'),(16,'വിശാഖം'),(17,'അനിഴം	'),(18,'തൃക്കേട്ട'),(19,'മൂലം'),(20,'പൂരാടം'),(21,'ഉത്രാടം'),(22,'തിരുവോണം'),(23,'അവിട്ടം'),(24,'ചതയം'),(25,'പൂരുരുട്ടാതി'),(26,'ഉത്രട്ടാതി'),(27,'രേവതി');
/*!40000 ALTER TABLE `stars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dhaivath Lal','dhaivathl@gmail.com','2024-01-01 05:00:30','$2y$12$bmBZoPxLwbeCGfrHq8uCHeXzqBEGJxgmU1hrSFN45OtlPt6g8Y/by',NULL,'2023-12-31 06:52:01','2024-01-01 05:00:30',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-12 11:26:47
