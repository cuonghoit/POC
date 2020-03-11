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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (8,'2014_10_12_000000_create_users_table',1),(9,'2014_10_12_100000_create_password_resets_table',1),(10,'2019_08_19_000000_create_failed_jobs_table',1),(11,'2020_01_07_144508_create_permission_tables',1),(12,'2020_01_10_030613_create_personal_info_tables',1),(13,'2020_01_10_073817_create_course_table',1),(14,'2020_01_10_081924_create_training_record_table',1),(15,'2020_02_14_151926_create_columns_note_status',2),(16,'2020_02_19_110638_create_status_table',3),(17,'2020_02_19_111026_create_trainning_implementation_table',3),(18,'2020_02_19_145310_create_registration_list_table',3),(19,'2020_02_22_023530_create_msc_performance_table',4),(20,'2020_02_22_025430_create_rate_annual_performance_table',4),(21,'2020_02_22_145751_create_rate_monthly_performance_table',4),(22,'2020_02_23_145632_employee_department_link',5),(23,'2020_03_01_150529_update_rate_monthly_performance_table',5);
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
INSERT INTO `model_has_roles` VALUES (1,'App\\Model\\User',1),(2,'App\\Model\\User',2),(3,'App\\Model\\User',3),(4,'App\\Model\\User',4),(5,'App\\Model\\User',5),(6,'App\\Model\\User',6);
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
INSERT INTO `msc_performance` VALUES (22,1,'Must-Do 1','Build the Training Procedures','Get approval','2020-02-26','2020-02-26','Complete ouline','Complete first draft','Complete review','Complete final version','Get approval','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(23,1,'Must-Do 2','Implement approved recruitement plan','Staff Recruitment meeting line department requirements','2020-02-26','2020-02-26','Get approval of Q1 recruitment plan ','Implement Q1 recruitment plan','Staff report duties','Get approval of Q2 recruitment plan ','Implement Q2 recruitment plan','Staff report duties','Get approval of Q2 recruitment plan ','Implement Q3 recruitment plan','Staff report duties','Get approval of Q4 recruitment plan ','Implement Q4 recruitment plan','Staff report duties','',0,4,'',NULL,'2020-03-01 07:44:33'),(24,1,'Must-Do 3','SMART Objectives 3',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(25,1,'Must-Do 4','SMART Objectives 4',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(26,1,'Should-Do 1','SMART Objectives 5',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(27,1,'Should-Do 2','SMART Objectives 6',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(28,1,'Could-Do 1','SMART Objectives 7',NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',0,4,'',NULL,'2020-03-01 07:44:33'),(29,3,'Must-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,NULL),(30,3,'Must-Do 2','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(31,3,'Must-Do 3','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,NULL),(32,3,'Must-Do 4','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(33,3,'Should-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,'',NULL,'2020-02-26 23:13:12'),(34,3,'Should-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,1,'',NULL,'2020-02-26 23:13:12'),(35,3,'Could-Do 1','','','2020-02-26','2020-02-26','','','','','','','','','','','','','Note',1,1,'',NULL,'2020-02-26 23:13:12'),(36,1,'Must-Do 1','MART Objectives 1','Target Monthy1','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(37,1,'Must-Do 2','MART Objectives 2','Target Monthy 2','2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(38,1,'Must-Do 3',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(39,1,'Must-Do 4',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(40,1,'Should-Do 1',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(41,1,'Should-Do 2',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41'),(42,1,'Could-Do 1',NULL,NULL,'2020-02-26','2020-02-26','','','','','','','','','','','','','',1,4,NULL,NULL,'2020-03-01 07:44:41');
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
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_hire` date NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labor_contact_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labor_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labor_contact_effective_date` date NOT NULL,
  `date_in_current_job_title` date NOT NULL,
  `in_charge_of_training` tinyint(4) NOT NULL,
  `internal_trainer` tinyint(4) NOT NULL,
  `training_discipline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_language_proficiency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor_job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_info_email_unique` (`email`),
  KEY `personal_info_user_id_foreign` (`user_id`),
  CONSTRAINT `personal_info_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_info`
--

LOCK TABLES `personal_info` WRITE;
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` VALUES (1,5,NULL,'Ho','Thanh','Tung','male','1998-09-29','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','healer@gmail.com','0981912638','291998','3 years','91998','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Thanh Tung','thanhtungld@gmail.com','CEO','1',0,'',NULL,NULL),(4,3,NULL,'PFS','','Software','male','1998-02-20','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','hovanthitbh@gmail.com','0981912638','291998','3 years','91998','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Van Thi','hovanthitbh@gmail.com','CEO','1',1,NULL,NULL,NULL),(5,1,3,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','cuong251099@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','cuong251099@gmail.com','CEO','1',1,'note',NULL,NULL),(8,2,NULL,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','test1@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','test1@gmail.com','CEO','1',1,'note',NULL,NULL),(9,4,NULL,'Ho','Bien','Cuong','male','1999-10-25','PSF01','Viet Nam','IT','HCMUS','2020-01-10','CEO','test2@gmail.com','0981961802','251999','3 years','101999','2020-01-10','2020-01-15',1,1,'N/A','Eng','HCM','PFS-Software','Cuong Ken','test2@gmail.com','CEO','1',1,'note',NULL,NULL);
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
INSERT INTO `rate_annual_performance` VALUES (1,1,'2020-01-01',0,1,1,1,1,1,1,2,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(2,1,'2020-02-01',0,1,0,0,0,0,0,2,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(3,1,'2020-03-01',0,0,1,0,0,0,0,2,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(7,1,'2020-04-01',0,0,0,1,0,0,0,2,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(8,1,'2020-05-01',0,0,0,0,1,0,0,5,'Outstanding',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(9,1,'2020-06-01',0,0,0,0,0,1,0,3,'Good',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(10,1,'2020-07-01',0,0,0,0,0,0,1,4,'Outstanding',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(11,1,'2020-08-01',0,0,0,0,0,1,0,1,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(12,1,'2020-09-01',0,0,0,0,1,0,1,3,'Good',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(13,1,'2020-10-01',0,0,0,1,0,0,0,1,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(14,1,'2020-11-01',0,0,1,0,0,0,0,1,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(15,1,'2020-12-01',0,1,0,0,0,0,1,1,'Poor',4,'2020-02-01',1,NULL,NULL,'2020-03-01 07:44:56'),(16,3,'2020-01-01',0,0,0,0,0,0,1,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(17,3,'2020-02-01',0,0,0,0,0,1,0,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(18,3,'2020-03-01',0,0,0,0,1,0,0,2,'Poor',1,'2020-02-01',1,'Note',NULL,'2020-02-26 19:31:38'),(19,3,'2020-04-01',0,0,0,1,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(20,3,'2020-05-01',0,0,1,0,0,0,0,5,'Outstanding',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(21,3,'2020-06-01',0,1,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(22,3,'2020-07-01',1,0,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(23,3,'2020-08-01',0,1,0,0,0,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(24,3,'2020-09-01',0,0,1,0,0,0,0,1,'Poor',1,'2020-02-01',1,'good',NULL,'2020-02-26 19:31:38'),(25,3,'2020-10-01',0,0,0,1,0,0,0,5,'Outstanding',1,'2020-02-01',1,'employees',NULL,'2020-02-26 22:43:34'),(26,3,'2020-11-01',0,0,0,0,1,0,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38'),(27,3,'2020-12-01',0,0,0,0,0,1,0,1,'Poor',1,'2020-02-01',1,'employees',NULL,'2020-02-26 19:31:38');
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
INSERT INTO `rate_monthly_performance` VALUES (2,1,'Must-Do 1','thi','bo doi','1',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',1,'Poor'),(3,1,'Must-Do 2','Cach_mang_thang_8','Success','0',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',2,'Poor'),(6,1,'Must-Do 3','Cach_mang_thang_8','Success','1',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',3,'Good'),(7,1,'Must-Do 4','Cach_mang_thang_8','Success','0',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',4,'Outstanding'),(8,1,'Should-Do 1','Cach_mang_thang_6','falses','1',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',5,'Outstanding'),(9,1,'Should-Do 2','Cach_mang_thang_8','Success','0',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',6,'Outstanding'),(10,1,'Could-Do 1','Cach_mang_thang_8','Success','1',NULL,4,'2020-02-01',NULL,'2020-03-01 08:22:43',7,'Outstanding'),(11,3,'Must-Do 1','th bo doi qua','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(12,3,'Must-Do 2','Cach_mang_thang_8','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(13,3,'Must-Do 3','Cach_mang_thang_9','thi','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(14,3,'Must-Do 4','Cach_mang_thang_8','Success','1','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(15,3,'Should-Do 1','Cach_mang_thang_8','Success','1','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(16,3,'Should-Do 2','Cach_mang_thang_8','Success','0','department',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,''),(17,3,'Could-Do 1','thi','Success','1','departmnet',1,'2020-02-01',NULL,'2020-02-27 07:39:33',0,'');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Employees User','employees@ihrdc.com',NULL,'$2y$10$pqI/CkW8Vqd3N3LajlwxjOI98zToerhZtScqMSU1TLJngXR5rRq6a',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(2,'Supervisors User','supervisors@ihrdc.com',NULL,'$2y$10$mdQT07pPjmtoSHeW9QAGu.srgYf4Ce1/TkZva4nLsWoRAfRAK/TP6',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(3,'Department Managers User','department_managers@ihrdc.com',NULL,'$2y$10$6ty/Y10Ddnb3/SkWoz4HQOkPRKVqzBwvJzoiyIaeUmzNh5hb2Wphi',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(4,'Director User','director@ihrdc.com',NULL,'$2y$10$FJ4ZcPsLuk3.vW7sQASIZO2mFJnES..AQTpVMG9ZLbj8ZfCANKUnW',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(5,'General Director User','general_director@ihrdc.com',NULL,'$2y$10$TOpbIhTh73Bg7Cw3xVNdfezZ890Pw6ImOkusPheaQFPxer3Ur21Bm',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27'),(6,'SuperAdmin User','super-admin@ihrdc.com',NULL,'$2y$10$D18MrCh5JdrkhXq/aWpWqOwm4CVO6g6NuEZZTMH3Gr9/DylLM8nsu',NULL,'2020-01-20 18:42:27','2020-01-20 18:42:27');
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

-- Dump completed on 2020-03-02  9:22:22
