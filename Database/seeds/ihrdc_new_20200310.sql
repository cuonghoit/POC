-- MySQL dump 10.13  Distrib 5.7.27, for osx10.14 (x86_64)
--
-- Host: localhost    Database: ihrdc_new
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_objectives` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_outline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (1,'Certificaed Scrum Master','1 year working for company','CSM','1 month','Know About Scrum','N/A','Scrum.org',0,'',NULL,NULL),(2,'Project Manager Professional','3 year working for company','PMP','3 month','Know About PMP','N/A','PMI',0,'',NULL,NULL);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disneypluses`
--

DROP TABLE IF EXISTS `disneypluses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disneypluses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disneypluses`
--

LOCK TABLES `disneypluses` WRITE;
/*!40000 ALTER TABLE `disneypluses` DISABLE KEYS */;
/*!40000 ALTER TABLE `disneypluses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_department_link`
--

DROP TABLE IF EXISTS `employee_department_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_department_link` (
  `employee_id` bigint(20) unsigned NOT NULL,
  `department_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `employee_department_link_department_id_foreign` (`department_id`),
  CONSTRAINT `employee_department_link_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `employee_department_link_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_department_link`
--

LOCK TABLES `employee_department_link` WRITE;
/*!40000 ALTER TABLE `employee_department_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_department_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `excel_mscs`
--

DROP TABLE IF EXISTS `excel_mscs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `excel_mscs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `excel_mscs`
--

LOCK TABLES `excel_mscs` WRITE;
/*!40000 ALTER TABLE `excel_mscs` DISABLE KEYS */;
/*!40000 ALTER TABLE `excel_mscs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2019_08_19_000000_create_failed_jobs_table',1),(11,'2020_01_07_144508_create_permission_tables',1),(12,'2020_01_10_030613_create_personal_info_tables',1),(13,'2020_01_10_073817_create_course_table',1),(14,'2020_01_10_081924_create_training_record_table',1),(15,'2020_02_14_151926_create_columns_note_status',2),(16,'2020_02_19_110638_create_status_table',3),(17,'2020_02_19_111026_create_trainning_implementation_table',3),(18,'2020_02_19_145310_create_registration_list_table',3),(19,'2020_02_22_023530_create_msc_performance_table',4),(20,'2020_02_22_025430_create_rate_annual_performance_table',4),(21,'2020_02_22_145751_create_rate_monthly_performance_table',4),(22,'2020_02_23_145632_employee_department_link',5),(23,'2020_03_01_150529_update_rate_monthly_performance_table',5),(24,'2020_03_09_154537_personal_info_update',6),(25,'2020_03_05_130109_create_disneypluses_table',7),(26,'2020_03_05_130212_create_excel_mscs_table',7),(27,'2020_03_10_052543_create_training_request_table',7),(28,'2020_03_10_053849_create_training_employee_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Model\\User',1),(1,'App\\Model\\User',2),(2,'App\\Model\\User',2),(3,'App\\Model\\User',3),(1,'App\\Model\\User',4),(4,'App\\Model\\User',4),(1,'App\\Model\\User',5),(5,'App\\Model\\User',5),(1,'App\\Model\\User',6),(6,'App\\Model\\User',6),(2,'App\\Model\\User',7),(2,'App\\Model\\User',8),(2,'App\\Model\\User',9),(3,'App\\Model\\User',9),(2,'App\\Model\\User',10),(1,'App\\Model\\User',11),(2,'App\\Model\\User',12),(2,'App\\Model\\User',13),(2,'App\\Model\\User',14),(3,'App\\Model\\User',14),(5,'App\\Model\\User',14),(2,'App\\Model\\User',15),(3,'App\\Model\\User',15),(5,'App\\Model\\User',15),(2,'App\\Model\\User',16),(3,'App\\Model\\User',16),(2,'App\\Model\\User',17),(3,'App\\Model\\User',17),(2,'App\\Model\\User',18),(3,'App\\Model\\User',18),(2,'App\\Model\\User',19),(3,'App\\Model\\User',20),(2,'App\\Model\\User',21),(1,'App\\Model\\User',22),(2,'App\\Model\\User',23),(2,'App\\Model\\User',24),(3,'App\\Model\\User',24),(2,'App\\Model\\User',25),(3,'App\\Model\\User',25),(5,'App\\Model\\User',25),(1,'App\\Model\\User',26),(1,'App\\Model\\User',27),(1,'App\\Model\\User',28),(1,'App\\Model\\User',29),(1,'App\\Model\\User',30),(1,'App\\Model\\User',31),(1,'App\\Model\\User',32),(1,'App\\Model\\User',33),(1,'App\\Model\\User',34),(1,'App\\Model\\User',35),(2,'App\\Model\\User',36),(1,'App\\Model\\User',37),(1,'App\\Model\\User',38),(1,'App\\Model\\User',39),(1,'App\\Model\\User',40),(1,'App\\Model\\User',41),(1,'App\\Model\\User',42),(1,'App\\Model\\User',43),(1,'App\\Model\\User',44),(1,'App\\Model\\User',45),(1,'App\\Model\\User',46),(2,'App\\Model\\User',47),(1,'App\\Model\\User',48),(1,'App\\Model\\User',49),(1,'App\\Model\\User',50),(1,'App\\Model\\User',51),(2,'App\\Model\\User',52),(3,'App\\Model\\User',52),(1,'App\\Model\\User',53),(1,'App\\Model\\User',54),(2,'App\\Model\\User',55),(3,'App\\Model\\User',55),(5,'App\\Model\\User',55),(2,'App\\Model\\User',56),(1,'App\\Model\\User',57),(2,'App\\Model\\User',58),(3,'App\\Model\\User',58),(1,'App\\Model\\User',59),(1,'App\\Model\\User',60),(1,'App\\Model\\User',61),(1,'App\\Model\\User',62),(1,'App\\Model\\User',63),(1,'App\\Model\\User',64),(1,'App\\Model\\User',65),(1,'App\\Model\\User',66),(1,'App\\Model\\User',67),(1,'App\\Model\\User',68),(1,'App\\Model\\User',69),(1,'App\\Model\\User',70),(1,'App\\Model\\User',71),(2,'App\\Model\\User',72),(1,'App\\Model\\User',73),(1,'App\\Model\\User',74),(1,'App\\Model\\User',75),(1,'App\\Model\\User',76),(2,'App\\Model\\User',77),(3,'App\\Model\\User',77),(1,'App\\Model\\User',78),(1,'App\\Model\\User',79),(1,'App\\Model\\User',80),(2,'App\\Model\\User',81),(2,'App\\Model\\User',82),(1,'App\\Model\\User',83),(1,'App\\Model\\User',84),(1,'App\\Model\\User',85),(1,'App\\Model\\User',86),(2,'App\\Model\\User',87),(1,'App\\Model\\User',88),(1,'App\\Model\\User',89),(1,'App\\Model\\User',90),(1,'App\\Model\\User',91),(1,'App\\Model\\User',92),(1,'App\\Model\\User',93),(1,'App\\Model\\User',94),(1,'App\\Model\\User',95),(1,'App\\Model\\User',96),(1,'App\\Model\\User',97);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msc_performance`
--

DROP TABLE IF EXISTS `msc_performance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msc_performance` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `objective_category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `milestone_behavior` text COLLATE utf8mb4_unicode_ci,
  `target_to_archive` text COLLATE utf8mb4_unicode_ci,
  `year` date NOT NULL,
  `month_year` date NOT NULL,
  `jan` text COLLATE utf8mb4_unicode_ci,
  `feb` text COLLATE utf8mb4_unicode_ci,
  `mar` text COLLATE utf8mb4_unicode_ci,
  `apr` text COLLATE utf8mb4_unicode_ci,
  `may` text COLLATE utf8mb4_unicode_ci,
  `jun` text COLLATE utf8mb4_unicode_ci,
  `jul` text COLLATE utf8mb4_unicode_ci,
  `aug` text COLLATE utf8mb4_unicode_ci,
  `sep` text COLLATE utf8mb4_unicode_ci,
  `oct` text COLLATE utf8mb4_unicode_ci,
  `nov` text COLLATE utf8mb4_unicode_ci,
  `dec` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `action_to_chieve` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `msc_performance_user_id_foreign` (`user_id`),
  CONSTRAINT `msc_performance_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msc_performance`
--

LOCK TABLES `msc_performance` WRITE;
/*!40000 ALTER TABLE `msc_performance` DISABLE KEYS */;
INSERT INTO `msc_performance` VALUES (22,1,'Must-Do 1','Build the Training Procedures','Get approval','2020-02-26','2020-02-26','Complete ouline','Complete first draft','Complete review','Complete final version','Get approval','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(23,1,'Must-Do 2','Implement approved recruitement plan','Staff Recruitment meeting line department requirements','2020-02-26','2020-02-26','Get approval of Q1 recruitment plan ','Implement Q1 recruitment plan','Staff report duties','Get approval of Q2 recruitment plan ','Implement Q2 recruitment plan','Staff report duties','Get approval of Q2 recruitment plan ','Implement Q3 recruitment plan','Staff report duties','Get approval of Q4 recruitment plan ','Implement Q4 recruitment plan','Staff report duties','',0,1,'',NULL,'2020-03-05 07:18:58'),(24,1,'Must-Do 3','SMART Objectives 3',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(25,1,'Must-Do 4','SMART Objectives 4',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(26,1,'Should-Do 1','SMART Objectives 5',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(27,1,'Should-Do 2','SMART Objectives 6',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(28,1,'Could-Do 1','SMART Objectives 7',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,1,'',NULL,'2020-03-05 07:18:58'),(29,3,'Must-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,NULL),(30,3,'Must-Do 2','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(31,3,'Must-Do 3','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,NULL),(32,3,'Must-Do 4','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(33,3,'Should-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,'',NULL,'2020-02-26 23:13:12'),(34,3,'Should-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,'',NULL,'2020-02-26 23:13:12'),(35,3,'Could-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(36,1,'Must-Do 1','MART Objectives 1','Target Monthy1','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(37,1,'Must-Do 2','MART Objectives 2','Target Monthy 2','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(38,1,'Must-Do 3',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(39,1,'Must-Do 4',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(40,1,'Should-Do 1',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(41,1,'Should-Do 2',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58'),(42,1,'Could-Do 1',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,NULL,NULL,'2020-03-05 07:18:58');
/*!40000 ALTER TABLE `msc_performance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'create','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(2,'edit','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(3,'delete','web','2020-01-20 18:42:26','2020-01-20 18:42:26');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `department_id` bigint(20) unsigned DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_hire` date NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labor_contact_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labor_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labor_contact_effective_date` date DEFAULT NULL,
  `date_in_current_job_title` date DEFAULT NULL,
  `in_charge_of_training` tinyint(4) DEFAULT NULL,
  `internal_trainer` tinyint(4) DEFAULT NULL,
  `training_discipline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foreign_language_proficiency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor_job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` bigint(20) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `direct_supervisor_id` bigint(20) unsigned DEFAULT NULL,
  `bod_id` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_info_email_unique` (`email`),
  KEY `personal_info_user_id_foreign` (`user_id`),
  CONSTRAINT `personal_info_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_info`
--

LOCK TABLES `personal_info` WRITE;
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` VALUES (1,5,NULL,'Ho','Thanh','Tung','male','1998-09-29','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','healer@gmail.com','0981912638','291998','3 years','91998','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Thanh Tung','thanhtungld@gmail.com','CEO','1',0,'',NULL,NULL,NULL,NULL),(4,3,NULL,'PFS','','Software','male','1998-02-20','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','hovanthitbh@gmail.com','0981912638','291998','3 years','91998','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Van Thi','hovanthitbh@gmail.com','CEO','1',1,NULL,NULL,NULL,NULL,NULL),(5,1,3,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','cuong251099@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','cuong251099@gmail.com','CEO','1',1,'note',NULL,NULL,NULL,NULL),(8,2,NULL,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','test1@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','test1@gmail.com','CEO','1',1,'note',NULL,NULL,NULL,NULL),(9,4,NULL,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','test2@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','test2@gmail.com','CEO','1',1,'note',NULL,NULL,NULL,NULL),(98,7,9,'Dũng','Trung','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-20','Lead Process Engineer','dungnt@phuquocpoc.vn',NULL,'C0004',NULL,NULL,NULL,'2015-07-20',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',8,15),(99,8,9,'Dũng','Công Anh ','Bùi',NULL,NULL,NULL,NULL,NULL,NULL,'2016-06-21','Deputy Engineering Manager EPCI#1','dungbca@phuquocpoc.vn',NULL,'C0008',NULL,NULL,NULL,'2017-06-01',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(100,9,15,'Brad','Wetzel','Robert',NULL,NULL,NULL,NULL,NULL,NULL,'2017-02-22','DEV General Manager','bradrw@phuquocpoc.vn',NULL,'C0009',NULL,NULL,NULL,'2017-02-22',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',15,15),(101,10,9,'Shaun','Watson','Michael',NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-13','Project Control Manager','michaelsw@phuquocpoc.vn',NULL,'C0010',NULL,NULL,NULL,'2017-03-13',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(102,11,9,'Liêm','Thanh','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-01','Deputy Engineering Manager EPCI#2','liemtt@phuquocpoc.vn',NULL,'C0013',NULL,NULL,NULL,'2017-06-01',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(103,12,52,'Lance',NULL,'Brunsvold',NULL,NULL,NULL,NULL,NULL,NULL,'2017-07-24','Chief Geoscientist','lanceb@phuquocpoc.vn',NULL,'C0019',NULL,NULL,NULL,'2017-07-24',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',52,25),(104,13,55,'Yến','Phạm Hải','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-13','Senior Legal Advisor','yennph@phuquocpoc.vn',NULL,'S0001',NULL,NULL,NULL,'2017-06-13',NULL,NULL,NULL,NULL,'TP. HCM','LCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(105,14,55,'Quế','Văn','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-05-12','Deputy General Director','quenv@phuquocpoc.vn',NULL,'V0003',NULL,NULL,NULL,'2015-05-12',NULL,NULL,NULL,NULL,'TP. HCM','BOD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(106,15,55,'Trí','Mạnh','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-05-12','Deputy General Director','trinm@phuquocpoc.vn',NULL,'V0005',NULL,NULL,NULL,'2015-05-12',NULL,NULL,NULL,NULL,'TP. HCM','BOD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(107,16,55,'Thiện','Đức','Phan',NULL,NULL,NULL,NULL,NULL,NULL,'2015-05-12','Chief Accountant','thienpd@phuquocpoc.vn',NULL,'V0006',NULL,NULL,NULL,'2016-03-06',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(108,17,14,'Tân','Duy','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2015-05-25','Administration General Manager','tantd@phuquocpoc.vn',NULL,'V0007',NULL,NULL,NULL,'2015-05-25',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',14,14),(109,18,55,'Kiên','Trung','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','HRM General Manager','kiennt@phuquocpoc.vn',NULL,'V0008',NULL,NULL,NULL,'2015-06-18',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(110,19,17,'Vinh','Quang','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Admin Supervisor','vinhnq@phuquocpoc.vn',NULL,'V0009',NULL,NULL,NULL,'2019-10-30',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,14),(111,20,55,'Lan','Ngọc','Dương',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','L&C General Manager/Person-in-charge','landn@phuquocpoc.vn',NULL,'V0010',NULL,NULL,NULL,'2018-02-09',NULL,NULL,NULL,NULL,'TP. HCM','LCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(112,21,16,'Hòa','Thị Thanh','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Budget and Treasury Control Team Leader/Drilling Accounting and Treasury Team Leader','hoantt@phuquocpoc.vn',NULL,'V0011',NULL,NULL,NULL,'2018-02-09',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',16,55),(113,22,9,'Long','Đình','Dương',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Construction Manager','longdd@phuquocpoc.vn',NULL,'V0012',NULL,NULL,NULL,'2015-06-18',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(114,23,17,'Lâm','Mai','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-01','IT Team Leader','lamnm@phuquocpoc.vn',NULL,'V0013',NULL,NULL,NULL,'2018-02-09',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,14),(115,24,14,'Nhơn','Thành','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-12','BRM Person-In-Charge','nhonnt@phuquocpoc.vn',NULL,'V0014',NULL,NULL,NULL,'2018-02-09',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',14,14),(116,25,55,'Trí','Trần Minh','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2016-03-06','Deputy General Director','triltm@phuquocpoc.vn',NULL,'V0017',NULL,NULL,NULL,'2019-06-11',NULL,NULL,NULL,NULL,'TP. HCM','BOD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(117,26,17,'Hạnh','Đức','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-03','Senior Executive, Admin','hanhnd@phuquocpoc.vn',NULL,'V0019',NULL,NULL,NULL,'2019-10-30',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',19,14),(118,27,52,'Phong','Đức','Lương',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-08','Sr. Petrophysicist','phongld@phuquocpoc.vn',NULL,'V0022',NULL,NULL,NULL,'2015-06-08',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',52,25),(119,28,9,'Tuấn','Văn','Đặng',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Senior Planner','tuandv@phuquocpoc.vn',NULL,'V0023',NULL,NULL,NULL,'2015-06-18',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',10,15),(120,29,9,'Linh','Tuấn','Phạm',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Sr. Cost Controller','linhpt@phuquocpoc.vn',NULL,'V0025',NULL,NULL,NULL,'2015-06-18',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',10,15),(121,30,17,'Ngọc','Thị Lan','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Public Relation Specialist','ngocntl@phuquocpoc.vn',NULL,'V0027',NULL,NULL,NULL,'2018-05-01',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,14),(122,31,77,'Nam','Thanh','Đinh',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-18','Sr. Procurement Coordinator','namdt@phuquocpoc.vn',NULL,'V0028',NULL,NULL,NULL,'2015-06-18',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',77,14),(123,32,17,'Tâm','Văn','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-23','Admin Expert','tamnv@phuquocpoc.vn',NULL,'V0029',NULL,NULL,NULL,'2015-06-23',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',19,14),(124,33,17,'Giang','Thu','Kiều',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-24','DGD Secretary','giangkt@phuquocpoc.vn',NULL,'V0030',NULL,NULL,NULL,'2015-06-24',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,14),(125,34,9,'Trình','Vân','Hoàng',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-24','Instrument & Control Engineer','trinhhv@phuquocpoc.vn',NULL,'V0031',NULL,NULL,NULL,'2015-06-24',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(126,35,16,'Thảo','Nguyễn Phương','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2015-06-26','General cost Accoutant and Document controller','thaolnp@phuquocpoc.vn',NULL,'V0033',NULL,NULL,NULL,'2015-06-26',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',56,55),(127,36,77,'Mi','Thị Trà','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-01','Procurement Team Leader','mintt@phuquocpoc.vn',NULL,'V0035',NULL,NULL,NULL,'2018-05-11',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',77,14),(128,37,16,'Hoa','Thị Thanh','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-01','Sr. Banking and Payroll Accountant','hoattt@phuquocpoc.vn',NULL,'V0037',NULL,NULL,NULL,'2015-07-01',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',21,55),(129,38,52,'Duy','Thế','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-01','Sr. Reservoir Engineer','duynt@phuquocpoc.vn',NULL,'V0038',NULL,NULL,NULL,'2015-07-01',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',47,25),(130,39,52,'Thành','Quang','Đinh',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-01','Sr. Geological Modeler/ Sr. Geologist','thanhdq@phuquocpoc.vn',NULL,'V0039',NULL,NULL,NULL,'2015-07-01',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(131,40,52,'Hân','Ngọc','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-03','SR. Geophysicist','hantn@phuquocpoc.vn',NULL,'V0040',NULL,NULL,NULL,'2015-07-03',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(132,41,52,'Nguyên','Bảo','Lâm',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-07','Geologist','nguyenlb@phuquocpoc.vn',NULL,'V0041',NULL,NULL,NULL,'2015-07-07',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(133,42,9,'Thảo','Phương','Châu',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-10','Project Secretary','thaocp@phuquocpoc.vn',NULL,'V0043',NULL,NULL,NULL,'2015-07-10',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(134,43,52,'Thái','Minh','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-13','Sr. Petroleum Engineer','thailm@phuquocpoc.vn',NULL,'V0044',NULL,NULL,NULL,'2015-07-13',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',72,25),(135,44,9,'Tùng','Như Quốc','Ngô',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-13','EDMS Coordinator','tungnnq@phuquocpoc.vn',NULL,'V0046',NULL,NULL,NULL,'2015-07-13',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',10,15),(136,45,25,'Hiếu','Văn','Trịnh',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-15','Senior Drilling Engineer ','hieutv@phuquocpoc.vn',NULL,'V0048',NULL,NULL,NULL,'2015-07-15',NULL,NULL,NULL,NULL,'TP. HCM','DCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(137,46,52,'Việt','Mạnh','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-07-31','SR. Geophysicist','vietnm@phuquocpoc.vn',NULL,'V0050',NULL,NULL,NULL,'2015-07-31',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(138,47,52,'Hưng','Quốc','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-08','Lead Reservoir Engineer','hungnq@phuquocpoc.vn',NULL,'V0053',NULL,NULL,NULL,'2018-02-08',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',52,25),(139,48,24,'Anh','Nguyễn Ngọc','Bùi',NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-21','Executive, Corporate Planning','anhbnn@phuquocpoc.vn',NULL,'V0054',NULL,NULL,NULL,'2015-09-21',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',81,14),(140,49,9,'Long','Thanh','Huỳnh',NULL,NULL,NULL,NULL,NULL,NULL,'2015-10-09','Project Assurance Manager','longht2@phuquocpoc.vn',NULL,'V0055',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(141,50,25,'Cường','Kiên','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2015-10-12','Senior Drilling Engineer ','cuongnk@phuquocpoc.vn',NULL,'V0056',NULL,NULL,NULL,'2015-10-12',NULL,NULL,NULL,NULL,'TP. HCM','DCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(142,51,77,'Hùng','Việt','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2016-01-15','Logistic Coordinator','hungnv@phuquocpoc.vn',NULL,'V0057',NULL,NULL,NULL,'2018-03-01',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',77,NULL),(143,52,25,'Cảnh','Viết','Đào',NULL,NULL,NULL,NULL,NULL,NULL,'2016-03-01','SSF General Manager','canhdv@phuquocpoc.vn',NULL,'V0058',NULL,NULL,NULL,'2016-03-01',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(144,53,16,'Tiến','Như','Đỗ',NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-01','Tax and Project cost Accountant','tiendn@phuquocpoc.vn',NULL,'V0059',NULL,NULL,NULL,'2016-07-01',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',21,55),(145,54,52,'Huy','Duy','Đinh',NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-01','SR. Geophysicist','huydd@phuquocpoc.vn',NULL,'V0060',NULL,NULL,NULL,'2017-09-01',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(146,55,55,'Sơn','Ngọc','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2016-08-10','General Director','sonln@phuquocpoc.vn',NULL,'V0061',NULL,NULL,NULL,'2016-08-10',NULL,NULL,NULL,NULL,'TP. HCM','BOD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',55,55),(147,56,16,'Hương','Thu','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2016-08-15','Reporting & Cashcall Accountant Team Leader','huongtt@phuquocpoc.vn',NULL,'V0062',NULL,NULL,NULL,'2016-08-15',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',16,55),(148,57,9,'Tiến','Minh','Đỗ',NULL,NULL,NULL,NULL,NULL,NULL,'2016-11-16','Sr. Instrument & Control Engineer','tiendm@phuquocpoc.vn',NULL,'V0063',NULL,NULL,NULL,'2016-11-16',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',8,15),(149,58,25,'Lan','Vi','Đinh',NULL,NULL,NULL,NULL,NULL,NULL,'2016-12-01','HSE Person-in-charge','landv@phuquocpoc.vn',NULL,'V0064',NULL,NULL,NULL,'2016-12-01',NULL,NULL,NULL,NULL,'TP. HCM','HSE',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(150,59,18,'Thanh','Phương','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-03','Training Coordinator','thanhnp@phuquocpoc.vn',NULL,'V0065',NULL,NULL,NULL,'2017-01-03',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',82,55),(151,60,9,'Dũng','Thành','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-17','DEV Deputy General Manager','dungnt2@phuquocpoc.vn',NULL,'V0066',NULL,NULL,NULL,'2017-01-17',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(152,61,9,'Bách','Tiến','Phạm',NULL,NULL,NULL,NULL,NULL,NULL,'2017-03-07','Structural Engineer','bachpt@phuquocpoc.vn',NULL,'V0067',NULL,NULL,NULL,'2017-03-07',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',8,15),(153,62,9,'Tiến','Hồng','Đỗ',NULL,NULL,NULL,NULL,NULL,NULL,'2017-05-03','Senior Structural Engineer','tiendh@phuquocpoc.vn',NULL,'V0068',NULL,NULL,NULL,'2017-05-03',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',8,15),(154,63,52,'Thắm','Thị','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-01','Sr. Geoscientist','thamnt@phuquocpoc.vn',NULL,'V0069',NULL,NULL,NULL,'2017-06-01',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(155,64,9,'Hải','Hồng','Phan',NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-01','CPP QA/QC Lead','haiph@phuquocpoc.vn',NULL,'V0070',NULL,NULL,NULL,'2017-06-01',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(156,65,77,'Anh','Thái','Đỗ',NULL,NULL,NULL,NULL,NULL,NULL,'2017-06-01','Project Services Team Leader','anhdt@phuquocpoc.vn',NULL,'V0071',NULL,NULL,NULL,'2018-02-09',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',77,14),(157,66,16,'Nga','Ngọc','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-07-10','Sr. Project Accountant','ngann@phuquocpoc.vn',NULL,'V0073',NULL,NULL,NULL,'2017-07-10',NULL,NULL,NULL,NULL,'TP. HCM','FAD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',16,55),(158,67,52,'Tấn','Đăng','Trịnh',NULL,NULL,NULL,NULL,NULL,NULL,'2017-07-10','Technical Assistant','tantd3@phuquocpoc.vn',NULL,'V0075',NULL,NULL,NULL,'2017-07-10',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',52,25),(159,68,58,'Thụ','Đình','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-01','Snior Safety Advisor','thuld@phuquocpoc.vn',NULL,'V0076',NULL,NULL,NULL,'2017-08-01',NULL,NULL,NULL,NULL,'TP. HCM','HSE',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',58,25),(160,69,17,'Quynh','Văn','Trịnh',NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-01','Senior Executive, IT Security, technology Risk Management & Governance','quynhtv@phuquocpoc.vn',NULL,'V0077',NULL,NULL,NULL,'2019-11-01',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',23,14),(161,70,25,'Tuấn','Anh','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2017-08-07','Senior Drilling Engineer ','tuanna@phuquocpoc.vn',NULL,'V0078',NULL,NULL,NULL,'2017-08-07',NULL,NULL,NULL,NULL,'TP. HCM','DCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(162,71,20,'Tùng','Ngô Thanh','Trương',NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-05','Legal Advisor','tungtnt@phuquocpoc.vn',NULL,'V0079',NULL,NULL,NULL,'2017-09-05',NULL,NULL,NULL,NULL,'TP. HCM','LCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',13,55),(163,72,52,'Nhã','Thanh','Huỳnh',NULL,NULL,NULL,NULL,NULL,NULL,'2017-09-11','Lead Petroleum Engineer','nhaht@phuquocpoc.vn',NULL,'V0080',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',52,25),(164,73,52,'Duy','Lê','Cao',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02','Sr. Geologist','duycl@phuquocpoc.vn',NULL,'V0083',NULL,NULL,NULL,'2017-10-02',NULL,NULL,NULL,NULL,'TP. HCM','SSF',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',12,25),(165,74,9,'Phương','Minh','Lê',NULL,NULL,NULL,NULL,NULL,NULL,'2017-10-02','Senior Mechanical Static Engineer ','phuonglm@phuquocpoc.vn',NULL,'V0084',NULL,NULL,NULL,'2017-10-02',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',8,15),(166,75,9,'Kiệt','Tuấn','Đinh',NULL,NULL,NULL,NULL,NULL,NULL,'2018-04-02','Lead Pre-Operations','kietdt@phuquocpoc.vn',NULL,'V0086',NULL,NULL,NULL,'2018-04-02',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',9,15),(167,76,9,'Nam','Hoa','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2018-05-15','Process Engineer','namth@phuquocpoc.vn',NULL,'V0087',NULL,NULL,NULL,'2018-05-15',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',7,15),(168,77,14,'Nam','Hoàng','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2018-06-05','PSCM Person-in-charge','namnh@phuquocpoc.vn',NULL,'V0088',NULL,NULL,NULL,'2018-06-07',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',14,14),(169,78,24,'Tú','Công','Tống',NULL,NULL,NULL,NULL,NULL,NULL,'2018-06-11','Senior Executive, Corporate Planning','tutc@phuquocpoc.vn',NULL,'V0089',NULL,NULL,NULL,'2018-06-11',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',81,14),(170,79,24,'Chung','Thu','Hoàng',NULL,NULL,NULL,NULL,NULL,NULL,'2018-06-21','Executive, Risk Coordinating','chunght@phuquocpoc.vn',NULL,'V0090',NULL,NULL,NULL,'2018-06-21',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',87,14),(171,80,18,'An','Thị Thúy','Phạm',NULL,NULL,NULL,NULL,NULL,NULL,'2018-06-26','Sr. Human Resources Expert ','anptt@phuquocpoc.vn',NULL,'V0091',NULL,NULL,NULL,'2018-06-26',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',18,55),(172,81,24,'Huyền','Thị Thanh','Lương',NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-02','Team Leader, Corporate Strategy & Performance','huyenltt@phuquocpoc.vn',NULL,'V0092',NULL,NULL,NULL,'2020-01-15',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',24,14),(173,82,18,'Hương','Lan','Vũ',NULL,NULL,NULL,NULL,NULL,NULL,'2018-08-15','Team Leader, HR Development','huongvl@phuquocpoc.vn',NULL,'V0093',NULL,NULL,NULL,'2020-01-15',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',18,55),(174,83,9,'Ngọc','Văn','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2018-09-10','Lead Project Coordinator','ngocnv@phuquocpoc.vn',NULL,'V0094',NULL,NULL,NULL,'2018-09-10',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',10,15),(175,84,9,'Thơm','Thị','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2018-12-03','Document Controller','thomtt@phuquocpoc.vn',NULL,'V0096',NULL,NULL,NULL,'2018-12-03',NULL,NULL,NULL,NULL,'TP. HCM','DEV',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',10,15),(176,85,17,'Dũng','Anh','Võ',NULL,NULL,NULL,NULL,NULL,NULL,'2018-12-17','GD Secretary','dungva@phuquocpoc.vn',NULL,'V0097',NULL,NULL,NULL,'2018-12-17',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,14),(177,86,77,'Việt','Hoàng','Ngô',NULL,NULL,NULL,NULL,NULL,NULL,'2019-01-08','Senior Digitalized System Engineer','vietnh@phuquocpoc.vn',NULL,'V0098',NULL,NULL,NULL,'2020-01-08',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',36,14),(178,87,24,'Hạnh','Mỹ','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2019-04-12','Team Leader, Risk & Insurance Administrative','hanhnm@phuquocpoc.vn',NULL,'V0100',NULL,NULL,NULL,'2020-01-15',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',24,14),(179,88,18,'Khoa','Anh','Bùi',NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-06','CMS Administrator','khoaba@phuquocpoc.vn',NULL,'V0101',NULL,NULL,NULL,'2019-05-06',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',82,55),(180,89,77,'Tuấn','Anh','Trần',NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-13','Senior Strategic Sourcing Specialist','tuanta@phuquocpoc.vn',NULL,'V0102',NULL,NULL,NULL,'2019-05-13',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',36,14),(181,90,24,'Hưng','Trọng','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2019-10-15','Executive, Insurance Administrative','hungnt@phuquocpoc.vn',NULL,'V0103',NULL,NULL,NULL,'2019-10-15',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',87,14),(182,91,24,'Anh','Đức','Phạm',NULL,NULL,NULL,NULL,NULL,NULL,'2019-11-01','Executive, AFE','anhpd@phuquocpoc.vn',NULL,'V0104',NULL,NULL,NULL,'2019-11-01',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',81,14),(183,92,24,'Vũ','Xuân','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2019-12-01','Senior Executive, Commercial','vunx@phuquocpoc.vn',NULL,'V0105',NULL,NULL,NULL,'2019-12-01',NULL,NULL,NULL,NULL,'TP. HCM','BRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',24,14),(184,93,25,'Phương','Thị Yến','Đặng',NULL,NULL,NULL,NULL,NULL,NULL,'2020-01-01','DCD Secretary','phuongdty@phuquocpoc.vn',NULL,'V0106',NULL,NULL,NULL,'2020-01-01',NULL,NULL,NULL,NULL,'TP. HCM','DCD',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',25,25),(185,94,17,'Phong','Quốc','Đặng',NULL,NULL,NULL,NULL,NULL,NULL,'2020-02-01','Executive, IT Application & Support','phongdq@phuquocpoc.vn',NULL,'V0107',NULL,NULL,NULL,'2020-02-01',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',23,14),(186,95,17,'Tâm','Hồng','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2020-02-01','GD Assistant','tamnh@phuquocpoc.vn',NULL,'V0108',NULL,NULL,NULL,'2020-02-01',NULL,NULL,NULL,NULL,'TP. HCM','ADM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',17,55),(187,96,77,'Duyệt','Văn','Phạm',NULL,NULL,NULL,NULL,NULL,NULL,'2020-02-01','Senior Executive, Procurement ','duyetpv@phuquocpoc.vn',NULL,'V0109',NULL,NULL,NULL,'2020-02-01',NULL,NULL,NULL,NULL,'TP. HCM','PSCM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',36,14),(188,97,18,'Như','Huỳnh','Nguyễn',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-01','HRM Assistant','nhunh@phuquocpoc.vn',NULL,'V0110',NULL,NULL,NULL,'2020-03-01',NULL,NULL,NULL,NULL,'TP. HCM','HRM',NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-10 09:10:36','2020-03-10 09:10:36',18,55);
/*!40000 ALTER TABLE `personal_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate_annual_performance`
--

DROP TABLE IF EXISTS `rate_annual_performance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rate_annual_performance` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `date` date DEFAULT NULL,
  `must_do_1` int(11) DEFAULT NULL,
  `must_do_2` int(11) DEFAULT NULL,
  `must_do_3` int(11) DEFAULT NULL,
  `must_do_4` int(11) DEFAULT NULL,
  `should_do_1` int(11) DEFAULT NULL,
  `should_do_2` int(11) DEFAULT NULL,
  `could_do_1` int(11) DEFAULT NULL,
  `monthly_rate` float DEFAULT NULL,
  `monthly_performance_level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) unsigned NOT NULL,
  `year` date DEFAULT NULL,
  `type` bigint(20) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rate_annual_performance_user_id_foreign` (`user_id`),
  KEY `rate_annual_performance_status_foreign` (`status`),
  CONSTRAINT `rate_annual_performance_status_foreign` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rate_annual_performance_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate_annual_performance`
--

LOCK TABLES `rate_annual_performance` WRITE;
/*!40000 ALTER TABLE `rate_annual_performance` DISABLE KEYS */;
INSERT INTO `rate_annual_performance` VALUES (1,1,'2020-01-01',0,1,1,1,1,1,1,2,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(2,1,'2020-02-01',0,1,0,0,0,0,0,2,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(3,1,'2020-03-01',0,0,1,0,0,0,0,2,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(7,1,'2020-04-01',0,0,0,1,0,0,0,2,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(8,1,'2020-05-01',0,0,0,0,1,0,0,5,'Outstanding',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(9,1,'2020-06-01',0,0,0,0,0,1,0,3,'Good',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(10,1,'2020-07-01',0,0,0,0,0,0,1,4,'Outstanding',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(11,1,'2020-08-01',0,0,0,0,0,1,0,1,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(12,1,'2020-09-01',0,0,0,0,1,0,1,3,'Good',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(13,1,'2020-10-01',0,0,0,1,0,0,0,1,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(14,1,'2020-11-01',0,0,1,0,0,0,0,1,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(15,1,'2020-12-01',0,1,0,0,0,0,1,1,'Poor',3,'2020-02-01',1,NULL,NULL,'2020-03-05 07:19:28'),(16,3,'2020-01-01',0,0,0,0,0,0,1,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(17,3,'2020-02-01',0,0,0,0,0,1,0,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(18,3,'2020-03-01',0,0,0,0,1,0,0,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(19,3,'2020-04-01',0,0,0,1,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(20,3,'2020-05-01',0,0,1,0,0,0,0,5,'Outstanding',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(21,3,'2020-06-01',0,1,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(22,3,'2020-07-01',1,0,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(23,3,'2020-08-01',0,1,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(24,3,'2020-09-01',0,0,1,0,0,0,0,1,'Poor',1,'2020-02-01',1,'good',NULL,'2020-02-26 19:31:38'),(25,3,'2020-10-01',0,0,0,1,0,0,0,5,'Outstanding',1,'2020-02-01',1,'employees',NULL,'2020-02-26 22:43:34'),(26,3,'2020-11-01',0,0,0,0,1,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(27,3,'2020-12-01',0,0,0,0,0,1,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38');
/*!40000 ALTER TABLE `rate_annual_performance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate_monthly_performance`
--

DROP TABLE IF EXISTS `rate_monthly_performance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rate_monthly_performance` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `objective_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective_and_milestone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achieve` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` bigint(20) unsigned DEFAULT NULL,
  `month_year` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monthly_rate` bigint(20) NOT NULL,
  `monthly_performance_level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rate_monthly_performance_user_id_foreign` (`user_id`),
  KEY `rate_monthly_performance_status_foreign` (`status`),
  CONSTRAINT `rate_monthly_performance_status_foreign` FOREIGN KEY (`status`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  CONSTRAINT `rate_monthly_performance_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate_monthly_performance`
--

LOCK TABLES `rate_monthly_performance` WRITE;
/*!40000 ALTER TABLE `rate_monthly_performance` DISABLE KEYS */;
INSERT INTO `rate_monthly_performance` VALUES (2,1,'Must-Do 1','thi','bo doi','1',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',1,'Poor'),(3,1,'Must-Do 2','Cach_mang_thang_8','Success','0',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',2,'Poor'),(6,1,'Must-Do 3','Cach_mang_thang_8','Success','1',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',3,'Good'),(7,1,'Must-Do 4','Cach_mang_thang_8','Success','0',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',4,'Outstanding'),(8,1,'Should-Do 1','Cach_mang_thang_6','falses','1',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',5,'Outstanding'),(9,1,'Should-Do 2','Cach_mang_thang_8','Success','0',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',6,'Outstanding'),(10,1,'Could-Do 1','Cach_mang_thang_8','Success','1',NULL,1,'2020-02-01',NULL,'2020-03-05 07:18:58',7,'Outstanding'),(11,3,'Must-Do 1','th bo doi qua','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(12,3,'Must-Do 2','Cach_mang_thang_8','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(13,3,'Must-Do 3','Cach_mang_thang_9','thi','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(14,3,'Must-Do 4','Cach_mang_thang_8','Success','1','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(15,3,'Should-Do 1','Cach_mang_thang_8','Success','1','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(16,3,'Should-Do 2','Cach_mang_thang_8','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(17,3,'Could-Do 1','thi','Success','1','departmnet',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,'');
/*!40000 ALTER TABLE `rate_monthly_performance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration_list`
--

DROP TABLE IF EXISTS `registration_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration_list` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `training_implementation_id` bigint(20) unsigned NOT NULL,
  `personal_info_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registration_list_training_implementation_id_foreign` (`training_implementation_id`),
  KEY `registration_list_personal_info_id_foreign` (`personal_info_id`),
  CONSTRAINT `registration_list_personal_info_id_foreign` FOREIGN KEY (`personal_info_id`) REFERENCES `personal_info` (`id`) ON DELETE CASCADE,
  CONSTRAINT `registration_list_training_implementation_id_foreign` FOREIGN KEY (`training_implementation_id`) REFERENCES `training_implementation` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration_list`
--

LOCK TABLES `registration_list` WRITE;
/*!40000 ALTER TABLE `registration_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `registration_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(1,2),(2,2),(3,2),(1,3),(2,3),(3,3),(1,4),(2,4),(3,4),(1,5),(2,5),(3,5),(1,6),(2,6),(3,6);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'employees','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(2,'supervisors','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(3,'department_managers','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(4,'director','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(5,'general_director','web','2020-01-20 18:42:26','2020-01-20 18:42:26'),(6,'super-admin','web','2020-01-20 18:42:26','2020-01-20 18:42:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Pending'),(2,'Submited'),(3,'Approved'),(4,'Rejected'),(5,'Completed');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_employee`
--

DROP TABLE IF EXISTS `training_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_employee` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_department` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_pax` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_signature` date NOT NULL,
  `supervisor_approval` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_employee`
--

LOCK TABLES `training_employee` WRITE;
/*!40000 ALTER TABLE `training_employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_implementation`
--

DROP TABLE IF EXISTS `training_implementation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_implementation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supporting_document` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_estimated_cost` double NOT NULL,
  `budget_cost_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuition_fee` double NOT NULL,
  `taxes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logistic_fee` double NOT NULL,
  `other_fees` double NOT NULL,
  `commitment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_implementation`
--

LOCK TABLES `training_implementation` WRITE;
/*!40000 ALTER TABLE `training_implementation` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_implementation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_record`
--

DROP TABLE IF EXISTS `training_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_record` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `course_id` bigint(20) unsigned NOT NULL,
  `training_purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_time_from` date NOT NULL,
  `training_time_to` date NOT NULL,
  `training_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` double NOT NULL,
  `traveling_cost` double NOT NULL,
  `accommodation_cost` double NOT NULL,
  `training_approval_status` tinyint(4) NOT NULL,
  `training_progress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_budget_resources` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_assignment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training_assignment_date` date DEFAULT NULL,
  `training_cost_estimation_number` int(11) DEFAULT NULL,
  `training_cost_estimation_date` date DEFAULT NULL,
  `training_tost_for_rerund` double DEFAULT NULL,
  `status` bigint(20) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `training_record_user_id_foreign` (`user_id`),
  KEY `training_record_course_id_foreign` (`course_id`),
  CONSTRAINT `training_record_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE CASCADE,
  CONSTRAINT `training_record_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_record`
--

LOCK TABLES `training_record` WRITE;
/*!40000 ALTER TABLE `training_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_record` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_request`
--

DROP TABLE IF EXISTS `training_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training_request` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `program_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_purpose` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_participant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_provider` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `supporting_document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_estimated_cost` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuition_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logistic_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commitment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `training_request_user_id_foreign` (`user_id`),
  CONSTRAINT `training_request_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_request`
--

LOCK TABLES `training_request` WRITE;
/*!40000 ALTER TABLE `training_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `training_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Employees User','employees@ihrdc.com',NULL,'$2y$10$pqI/CkW8Vqd3N3LajlwxjOI98zToerhZtScqMSU1TLJngXR5rRq6a',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(2,'Supervisors User','supervisors@ihrdc.com',NULL,'$2y$10$mdQT07pPjmtoSHeW9QAGu.srgYf4Ce1/TkZva4nLsWoRAfRAK/TP6',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(3,'Department Managers User','department_managers@ihrdc.com',NULL,'$2y$10$6ty/Y10Ddnb3/SkWoz4HQOkPRKVqzBwvJzoiyIaeUmzNh5hb2Wphi',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(4,'Director User','director@ihrdc.com',NULL,'$2y$10$FJ4ZcPsLuk3.vW7sQASIZO2mFJnES..AQTpVMG9ZLbj8ZfCANKUnW',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(5,'General Director User','general_director@ihrdc.com',NULL,'$2y$10$TOpbIhTh73Bg7Cw3xVNdfezZ890Pw6ImOkusPheaQFPxer3Ur21Bm',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(6,'SuperAdmin User','super-admin@ihrdc.com',NULL,'$2y$10$D18MrCh5JdrkhXq/aWpWqOwm4CVO6g6NuEZZTMH3Gr9/DylLM8nsu',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(7,'Dũng Trung Nguyễn','dungnt@phuquocpoc.vn',NULL,'$2y$10$6SJLuJagW38q6MyQPR/au.gamABy5D99e2.m9KKKUGiR9fIeKpBby',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(8,'Dũng Công Anh  Bùi','dungbca@phuquocpoc.vn',NULL,'$2y$10$Ar.SX0XchBgIb6WksRg./OK6D3mYLQcbHjpDsCE5MDtyDToHvTdTC',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(9,'Brad Wetzel Robert','bradrw@phuquocpoc.vn',NULL,'$2y$10$hUQKoxJaDp8idQdD4bOT9.Is9vL9lvW95rbkZEu4YMlofptxDYGNq',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(10,'Shaun Watson Michael','michaelsw@phuquocpoc.vn',NULL,'$2y$10$kUD7cRb6RSnG32I86IoYjeKAXzx/P1bRvjvQHlumohz2f3HPb0ZTa',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(11,'Liêm Thanh Trần','liemtt@phuquocpoc.vn',NULL,'$2y$10$HMi.u0.YT2hLxw9VG7JK2.dnH4rTfZ/viTtSwi/XQSlmU0oxghACi',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(12,'Lance  Brunsvold','lanceb@phuquocpoc.vn',NULL,'$2y$10$ab/iYWQZpzKkoQdjNVCuquegdSjQrLxsq48baeZEkFulvdL5qhcMS',NULL,'2020-03-10 08:45:12','2020-03-10 08:45:12'),(13,'Yến Phạm Hải Nguyễn','yennph@phuquocpoc.vn',NULL,'$2y$10$MKRF6OojBOHuy0BigooJqevxHhdXURpfDxbpaCuu2j4PMlrLGbCfC',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(14,'Quế Văn Nguyễn','quenv@phuquocpoc.vn',NULL,'$2y$10$5l3tKh/RwZ0JdCuVmlABDeVSxmU/e.N56vVfEgB9bOifgQwCPtoNi',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(15,'Trí Mạnh Nguyễn','trinm@phuquocpoc.vn',NULL,'$2y$10$JTHWEvbzDLswmY5d/.72Je5UXUg0jAW505lgw8c4K6aKraY8igX36',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(16,'Thiện Đức Phan','thienpd@phuquocpoc.vn',NULL,'$2y$10$MqGZpGqjeT6MNuNx8p2xxuFAHwixxAXME9gDGr7aZm8tonQ7HnDni',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(17,'Tân Duy Trần','tantd@phuquocpoc.vn',NULL,'$2y$10$s9Khcl52YWl.F4Bg1pB5z.JKZzKBgv632DmPY9eoiIm.asX2P/1/O',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(18,'Kiên Trung Nguyễn','kiennt@phuquocpoc.vn',NULL,'$2y$10$Z52.K76lRKMbodV6Ee237u.9Cy1W9Y7ecSuWe31ABVKvyWgbs54UO',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(19,'Vinh Quang Nguyễn','vinhnq@phuquocpoc.vn',NULL,'$2y$10$xNdzb4hkv2/MwiDHU4DkDuSLhl3.DKhpVY/6XnZYiG3JXPGA99QaK',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(20,'Lan Ngọc Dương','landn@phuquocpoc.vn',NULL,'$2y$10$ZAf6gqfX.f43s8lnMmXhf.TwF1KEXmYxZHLpuVB3Jo0oQhOA8XQaG',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(21,'Hòa Thị Thanh Nguyễn','hoantt@phuquocpoc.vn',NULL,'$2y$10$ojAgmJvuRO5SpsNoGEwk1.PVLsnmnAI5ExcuDX3hnhcWoYrM6ZvTm',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(22,'Long Đình Dương','longdd@phuquocpoc.vn',NULL,'$2y$10$Q0j2TeByd0lnDK/BBSk2UeK2LNxq5Sc3IO03KuWrbcYzo0bR5Q8tG',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(23,'Lâm Mai Nguyễn','lamnm@phuquocpoc.vn',NULL,'$2y$10$gSJYbaMwM6N0YWY0oM8a2ubC3KGGuxjtxWt3mVKJ2ULClNCn.jewC',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(24,'Nhơn Thành Nguyễn','nhonnt@phuquocpoc.vn',NULL,'$2y$10$x394a56vA18umyucQKUZluuWbWKEbc28lvlt7ZeJXejfh5wRf2sQC',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(25,'Trí Trần Minh Lê','triltm@phuquocpoc.vn',NULL,'$2y$10$qHrBtnoSESbj3Pix9X7bAOp728V0OoVtZ8B.xjl3S4UAagiZU/3hy',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(26,'Hạnh Đức Nguyễn','hanhnd@phuquocpoc.vn',NULL,'$2y$10$rIBXbTJDcaDt1dvoGdCX8.20DWjouRqXaNQ44c9xqWouooDpLWCB2',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(27,'Phong Đức Lương','phongld@phuquocpoc.vn',NULL,'$2y$10$F4t4d6Cy7kCBTPB2B2hkR.uwDCMT6Odk6qvXJhZ3lucAJ1kl10XXm',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(28,'Tuấn Văn Đặng','tuandv@phuquocpoc.vn',NULL,'$2y$10$d2F9HO2t1ezhWme1Xunu4OWlEcbRUvFmxdXMo9YDS.E/UNk.4k0Ry',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(29,'Linh Tuấn Phạm','linhpt@phuquocpoc.vn',NULL,'$2y$10$g1KQ0ccIpqv8.31M5/SLYO0e81X5UyvNJf5BwebMEJfcVHxE6PTbu',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(30,'Ngọc Thị Lan Nguyễn','ngocntl@phuquocpoc.vn',NULL,'$2y$10$mShISvhbUz8jKYV7I8UTbO2yDBEqF4SfAbUnc4jf8yrWD5Q0wwRBm',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(31,'Nam Thanh Đinh','namdt@phuquocpoc.vn',NULL,'$2y$10$zLKYDAomzeg.eEU2yhlc8ODiytUJzp5X87Ta.vLqhFJBknSvUuHva',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(32,'Tâm Văn Nguyễn','tamnv@phuquocpoc.vn',NULL,'$2y$10$5uSni3h0DOYcu7N97Je5v.AWWmN8LRllK6.aKLHSolXVGCQ16XiGa',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(33,'Giang Thu Kiều','giangkt@phuquocpoc.vn',NULL,'$2y$10$65QYoB.N4xSqXsNLWOVAzuqw1HtWBdrYhMjfniURCJQxxmyfQLray',NULL,'2020-03-10 08:45:13','2020-03-10 08:45:13'),(34,'Trình Vân Hoàng','trinhhv@phuquocpoc.vn',NULL,'$2y$10$LtlozSa4MGEZusqtDVR02.tHt.rzOPTt3u2UEuQPmGU3h9mPeEUhe',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(35,'Thảo Nguyễn Phương Lê','thaolnp@phuquocpoc.vn',NULL,'$2y$10$vVqLClyEs2bMHM2zwSXIY./kKu4cAaIfDuELhp4b79I1k1tODO9dO',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(36,'Mi Thị Trà Nguyễn','mintt@phuquocpoc.vn',NULL,'$2y$10$8js1mf1MQBAXu6oR98BA9ONuRO14zXdBrlvdbsK1Qem.LsG5JyDna',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(37,'Hoa Thị Thanh Trần','hoattt@phuquocpoc.vn',NULL,'$2y$10$KWSFB4ngYZ9KxxZU0YTv2.R7Uqn/7de5c38mz9mAqAjohu04As73.',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(38,'Duy Thế Nguyễn','duynt@phuquocpoc.vn',NULL,'$2y$10$WPqOtv.J2GoJ4CeNUQMaj..fmoZEL4APFlR9Pk2MqsW8vnney2VEi',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(39,'Thành Quang Đinh','thanhdq@phuquocpoc.vn',NULL,'$2y$10$igvIYSmHRPeqoSv.O663N.SXA1H6Tr19DQYqkav8PKTcVPtaJRplW',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(40,'Hân Ngọc Trần','hantn@phuquocpoc.vn',NULL,'$2y$10$djKULD.gfNCxegCIvtDAceCjBJ6ouTd8vqTirptyYg8AhzTD0EEzG',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(41,'Nguyên Bảo Lâm','nguyenlb@phuquocpoc.vn',NULL,'$2y$10$2FOAf6WkVxjvaaviUO9pb.OVEKOwCDiK3V/2NCEvw/2kpG94cCOs.',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(42,'Thảo Phương Châu','thaocp@phuquocpoc.vn',NULL,'$2y$10$eUDUy4FNCB0LDg78NHN9XeXsdzM2jsf/ONNRY0Wl9MPDowt0FB/zq',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(43,'Thái Minh Lê','thailm@phuquocpoc.vn',NULL,'$2y$10$hBN6.CR.2OI.dq2lm90zNeC/Iz6rWWT.XWTv5AJ/RAI3CabrYLy1m',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(44,'Tùng Như Quốc Ngô','tungnnq@phuquocpoc.vn',NULL,'$2y$10$NmhFXkC6v6V4qxe8KRetKOAegEUxbGhIlQsBsOCQD/mxwPY8MAS2y',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(45,'Hiếu Văn Trịnh','hieutv@phuquocpoc.vn',NULL,'$2y$10$OYuazUOO03wpZr1ks/UZ4ejWWermjKQkPas7aMSqMss0VsKN3sqKi',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(46,'Việt Mạnh Nguyễn','vietnm@phuquocpoc.vn',NULL,'$2y$10$d2DdogbmAiIlSdiiZ5KG9OTVt7gziNO2ehyrv4ZbykH4LVwR38cC.',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(47,'Hưng Quốc Nguyễn','hungnq@phuquocpoc.vn',NULL,'$2y$10$XzvMCcyjtAGYdYIskO1i3ebSQkPcOtQC6FnD14oRBtkaRu0DWExAm',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(48,'Anh Nguyễn Ngọc Bùi','anhbnn@phuquocpoc.vn',NULL,'$2y$10$QIp/Wf7.WUBzb/rVNjAj2O8sA2ZeZY.lc.JwXn.5U0rAkZXIP2egG',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(49,'Long Thanh Huỳnh','longht2@phuquocpoc.vn',NULL,'$2y$10$HeZ0yV2D9AHcWVPctptt4umOUtJRKhAcCsLYUzYqQxBfNpfDBAYG2',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(50,'Cường Kiên Nguyễn','cuongnk@phuquocpoc.vn',NULL,'$2y$10$Xpq1lax853nGcTxZayuBtOne0uZs.t37EsFDegmSMaTfsNO9/uzr6',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(51,'Hùng Việt Nguyễn','hungnv@phuquocpoc.vn',NULL,'$2y$10$HkN8yOxFbBdv2O0IKfZh/ObSCl4IQMtrd7OwOUbgYKSTgwOWL3ib.',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(52,'Cảnh Viết Đào','canhdv@phuquocpoc.vn',NULL,'$2y$10$WEx4ty2LpqhGqK3OE.U3aecdfYoEOWNACYJ5tVn8f2e2OXJEQnzbq',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(53,'Tiến Như Đỗ','tiendn@phuquocpoc.vn',NULL,'$2y$10$oZjo5ftq6KUI9psu9Dlw1./OIACQfI6nAy6q.aDdc4fxt0a6Q.3E.',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(54,'Huy Duy Đinh','huydd@phuquocpoc.vn',NULL,'$2y$10$oiD3vjUCHPxZ2n4J393mTeedHNpWMT8/wE8XguWrm3nCk6AvswdmG',NULL,'2020-03-10 08:45:14','2020-03-10 08:45:14'),(55,'Sơn Ngọc Lê','sonln@phuquocpoc.vn',NULL,'$2y$10$cG5/wH0r5UOg36AcAqBcY.NIFhxnImX67GfaT4TZEq6B8WV7Y5K/u',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(56,'Hương Thu Trần','huongtt@phuquocpoc.vn',NULL,'$2y$10$whpS/shPWlBsoJ.0DE8gS.gewmZKVEx8RTednkSUVBmgO8hpOfosa',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(57,'Tiến Minh Đỗ','tiendm@phuquocpoc.vn',NULL,'$2y$10$n70lF3zuMelUHHqY.lDY2uaTX1fKFoVO8FQOlzS9kPrcFXb.5st6u',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(58,'Lan Vi Đinh','landv@phuquocpoc.vn',NULL,'$2y$10$mGZeE1/eTiFig0LTZ7FoMuE7vRFRmbFN3vUvhZGuoOoRF0ymACB9O',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(59,'Thanh Phương Nguyễn','thanhnp@phuquocpoc.vn',NULL,'$2y$10$l2kEgpOVcFyb5Py.EmomEum57U9oH5Nfs4.lN3cqdGSiYNu/nzE4.',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(60,'Dũng Thành Nguyễn','dungnt2@phuquocpoc.vn',NULL,'$2y$10$My1NcD5eV8Y5aSanAIy8E.VtqSYLrWOaaIesvbX6w6VBu4FpforYa',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(61,'Bách Tiến Phạm','bachpt@phuquocpoc.vn',NULL,'$2y$10$EbTtRmloBW17RA1PWREMa.YG3a5NeYTDcuZPj/2MzsePSezQGlKB6',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(62,'Tiến Hồng Đỗ','tiendh@phuquocpoc.vn',NULL,'$2y$10$Y8B0.FIK9qfiEWdbxtzauONUIBRBBdRNsHSTKmxEj8aljOwBHbUsq',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(63,'Thắm Thị Nguyễn','thamnt@phuquocpoc.vn',NULL,'$2y$10$OBNaQWd7bN8yDuhZQtvqJeYmuwHePoZNfwTxLaMFfzQ2CNb/MYuqu',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(64,'Hải Hồng Phan','haiph@phuquocpoc.vn',NULL,'$2y$10$aWg.ID4NvBZ1o1S18rvBo.qMHP4q6RwuD3/i6bkrwHfJAb9AhGALG',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(65,'Anh Thái Đỗ','anhdt@phuquocpoc.vn',NULL,'$2y$10$mPiWsf3ok02rAY9jgqi3wu7mQlng8hEeRTW2jZvesnzHNbzw45Q0q',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(66,'Nga Ngọc Nguyễn','ngann@phuquocpoc.vn',NULL,'$2y$10$YlgGvlfP/xXXxHcJYXAAQ.vopS7.VUyA8mfErz2Sfxuk0NrB6p5Zu',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(67,'Tấn Đăng Trịnh','tantd3@phuquocpoc.vn',NULL,'$2y$10$2j/.SfGqlt6eotysLVZ2neP9cjFFTXvommNz3u.D9HAICOdePdpVW',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(68,'Thụ Đình Lê','thuld@phuquocpoc.vn',NULL,'$2y$10$O0j1ZDiIW0dgM2gryZqxbe/xJTwIkkuhoDjzhfJI3pQUNYZzNzIbC',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(69,'Quynh Văn Trịnh','quynhtv@phuquocpoc.vn',NULL,'$2y$10$be0w1bc0om/hkdbeCA1LKe4MAnaxTq7IYDzEeICP.wVYpw9wLmI1e',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(70,'Tuấn Anh Nguyễn','tuanna@phuquocpoc.vn',NULL,'$2y$10$FGYWYyWV41wjE8tZV4yrAujn.uzzAeL2zgXw22AB2OYTIb3WiIt1O',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(71,'Tùng Ngô Thanh Trương','tungtnt@phuquocpoc.vn',NULL,'$2y$10$akFFrIf4APUAfInkLeKlD.h1SjUJNZcmVoPB00ZotYnKR9s23/k5O',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(72,'Nhã Thanh Huỳnh','nhaht@phuquocpoc.vn',NULL,'$2y$10$RiBcG68DrYWzD0rCNH/I7.mGQTHnQ6UzgAsdfN2ArwZv1OaZyaQsS',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(73,'Duy Lê Cao','duycl@phuquocpoc.vn',NULL,'$2y$10$AGbLGORI7IRdQHbf0LwIF.XsP.hMyosui6ho0Gz9bwWkjRMWSgz6a',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(74,'Phương Minh Lê','phuonglm@phuquocpoc.vn',NULL,'$2y$10$YkxdyZEJvMRXWB9WDqMOsOxGkD.B/ASdRjg7dBlxlQn3NaMHt5bXy',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(75,'Kiệt Tuấn Đinh','kietdt@phuquocpoc.vn',NULL,'$2y$10$Pj55DRbhdLTj.xWAlo5j2OebHDnKYa.H1JmSh11MQFst5kB8Dn9sG',NULL,'2020-03-10 08:45:15','2020-03-10 08:45:15'),(76,'Nam Hoa Trần','namth@phuquocpoc.vn',NULL,'$2y$10$vNstjuKyTims0aG/AODkJOpzrcgKkd7kqE0OoFNHBpjbj4T5o6jxW',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(77,'Nam Hoàng Nguyễn','namnh@phuquocpoc.vn',NULL,'$2y$10$t9Ddm5yktB6lf.do8a0j7exoajWouGu6L4Xg/P93yANMOtEzptxuK',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(78,'Tú Công Tống','tutc@phuquocpoc.vn',NULL,'$2y$10$Y.DGQbPtekyJv0s560hGMuX5eZ51Kv0PTla4joGUhEJed9mgxxH3K',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(79,'Chung Thu Hoàng','chunght@phuquocpoc.vn',NULL,'$2y$10$Zz9pQDUAKiwSuPJIY.sgoOTVFI9XEFVdNpgB/X5tGGxI/ksf.0PIC',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(80,'An Thị Thúy Phạm','anptt@phuquocpoc.vn',NULL,'$2y$10$9POGpmWeOcwf/pBI4OKPBuCXeSAqHoJjfSbaYPR5hdnRfSQzCyHB2',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(81,'Huyền Thị Thanh Lương','huyenltt@phuquocpoc.vn',NULL,'$2y$10$b7OVh3DQ1ZK//9Z4M7yvz.YgnYiWtW81.4LRlqtzbq3tHoVTSmDci',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(82,'Hương Lan Vũ','huongvl@phuquocpoc.vn',NULL,'$2y$10$CjeoYYqfa2hChVELDK2vN.QVT253HtTd4Oak4H9hhW7iU26Y24yW2',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(83,'Ngọc Văn Nguyễn','ngocnv@phuquocpoc.vn',NULL,'$2y$10$wlbDsK5QTxpxSdBKtwx3E.pVf5Eqr9GI6voMEtRSWT6rhQvYxqWmW',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(84,'Thơm Thị Trần','thomtt@phuquocpoc.vn',NULL,'$2y$10$0shIxSdNHIdn3O/YChJM.uB0L1Em05foC3btJZkdx.Aux.CVtKG8i',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(85,'Dũng Anh Võ','dungva@phuquocpoc.vn',NULL,'$2y$10$JTcBk3ZzvqrRr7l97ddkMehLk3H2wRyF./xZlsas82SvgSZyh982C',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(86,'Việt Hoàng Ngô','vietnh@phuquocpoc.vn',NULL,'$2y$10$VEAQU8SlTErYqDnao1lMdOpKn5K.PwNKuTH1igc.i6fuYEHnjkNxa',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(87,'Hạnh Mỹ Nguyễn','hanhnm@phuquocpoc.vn',NULL,'$2y$10$V7ka/tj9PkLywSpdZjaV3OpEmGpTTUrQ2jojpAdi9XwDIAaQnhUf6',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(88,'Khoa Anh Bùi','khoaba@phuquocpoc.vn',NULL,'$2y$10$9gko.RSoCLukE.kBQ9bKUOtGUpYHYhd8N6WIkfWMFTqQHK5xcL6Ym',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(89,'Tuấn Anh Trần','tuanta@phuquocpoc.vn',NULL,'$2y$10$bDD0Ipr32HKeB5uOIOEByO3aFMVw79R04SVEfmyiyPUHJrdQyyvWi',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(90,'Hưng Trọng Nguyễn','hungnt@phuquocpoc.vn',NULL,'$2y$10$iqnIulLEzeZ4FtcSQwDB.eUX0yJdYw7rqqWYpDnKMRBkhbGlWpz7O',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(91,'Anh Đức Phạm','anhpd@phuquocpoc.vn',NULL,'$2y$10$q.uNI/N5e3pFG0SiERNiIOTWpNms.L576qK.zFEdhpeI3iMUkxYWq',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(92,'Vũ Xuân Nguyễn','vunx@phuquocpoc.vn',NULL,'$2y$10$gkSrlBIH9c2m6RZ6pjozM.NkgyuIDJz0Ui5lFQLDIMwNT2X8DEUAS',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(93,'Phương Thị Yến Đặng','phuongdty@phuquocpoc.vn',NULL,'$2y$10$g8EbXx1u.9PZculVhQeT1OAOgWtWrwEf/AJleuPsKH/atOYyyoWlm',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(94,'Phong Quốc Đặng','phongdq@phuquocpoc.vn',NULL,'$2y$10$IsNs/VMNb06.dgZ498dd3.zm5qNTyuH4jTtHuZ55FCXGU2pNQKceu',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(95,'Tâm Hồng Nguyễn','tamnh@phuquocpoc.vn',NULL,'$2y$10$n9a8MO.Z3OfG6IdbvOh4be3H1KuwBQHbcwiRFP3poMizAh3oVYisi',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(96,'Duyệt Văn Phạm','duyetpv@phuquocpoc.vn',NULL,'$2y$10$44cpY7DmtyIlMv0BnLKsPeGVVQy9sBKmRULDdzFOPTWIoO592u1Fa',NULL,'2020-03-10 08:45:16','2020-03-10 08:45:16'),(97,'Như Huỳnh Nguyễn','nhunh@phuquocpoc.vn',NULL,'$2y$10$K3sPWRtpW2pr8pQg3QaIlu7LdxxZkLkkgOmpnO3LKNcfQ.sX9DltW',NULL,'2020-03-10 08:45:17','2020-03-10 08:45:17');
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

-- Dump completed on 2020-03-11  0:00:02
