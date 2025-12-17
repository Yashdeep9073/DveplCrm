-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dvplcrm
-- ------------------------------------------------------
-- Server version	8.0.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `navigation_menu_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (26,3,1),(27,14,2),(28,14,3),(29,14,4),(30,14,5),(37,15,1),(40,19,2),(41,19,3),(58,20,2),(59,20,3),(99,1,1),(100,2,1),(104,23,2),(105,23,3),(118,25,1),(141,28,2),(142,28,4),(143,28,13),(144,28,19),(145,26,1),(146,26,18),(147,34,1),(148,21,1);
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_account_details`
--

DROP TABLE IF EXISTS `bank_account_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_account_details` (
  `bank_id` int NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_account_details`
--

LOCK TABLES `bank_account_details` WRITE;
/*!40000 ALTER TABLE `bank_account_details` DISABLE KEYS */;
INSERT INTO `bank_account_details` VALUES (1,'simran','1111111111','bank','jandiala','121211','1');
/*!40000 ALTER TABLE `bank_account_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloudflare_turnstile`
--

DROP TABLE IF EXISTS `cloudflare_turnstile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cloudflare_turnstile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloudflare_turnstile`
--

LOCK TABLES `cloudflare_turnstile` WRITE;
/*!40000 ALTER TABLE `cloudflare_turnstile` DISABLE KEYS */;
INSERT INTO `cloudflare_turnstile` VALUES (1,'0x4AAAAAAA4eC__h6eOYAIky','0x4AAAAAAA4eC24IkKM0feSRZyV3pLFyz4w',1);
/*!40000 ALTER TABLE `cloudflare_turnstile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `about_us` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_info`
--

LOCK TABLES `company_info` WRITE;
/*!40000 ALTER TABLE `company_info` DISABLE KEYS */;
INSERT INTO `company_info` VALUES (1,'Dvepl Jobs Control System','info@electroworldfze.com','+147785455669','343235','https://electroworldfze.com/','');
/*!40000 ALTER TABLE `company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency_details`
--

DROP TABLE IF EXISTS `currency_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currency_details` (
  `currency_id` int NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `exchange_rate` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_on` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency_details`
--

LOCK TABLES `currency_details` WRITE;
/*!40000 ALTER TABLE `currency_details` DISABLE KEYS */;
INSERT INTO `currency_details` VALUES (2,'England Pound','GBP','£','Default','2024-03-28 ');
/*!40000 ALTER TABLE `currency_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email` (
  `email_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `from_email_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES (1,'simranjit@gmail.com','1233223',''),(2,'pinki@gmail.com','1233333','simranjit'),(3,'SiblingDiscount@gmail.com','1234','sss'),(4,'pinki@gmail.com','12233','111'),(5,'simranji_kaur@gmail.com','1111111','sss');
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `google_captcha`
--

DROP TABLE IF EXISTS `google_captcha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `google_captcha` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `google_captcha`
--

LOCK TABLES `google_captcha` WRITE;
/*!40000 ALTER TABLE `google_captcha` DISABLE KEYS */;
INSERT INTO `google_captcha` VALUES (1,'6LdmP4oqAAAAAN9AI1e5XT75665SZ5Nc_6Hacavs','6LdmP4oqAAAAAHTruxBQbA_nV7rGhDumbBHKFmgo','1');
/*!40000 ALTER TABLE `google_captcha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localization`
--

DROP TABLE IF EXISTS `localization`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `localization` (
  `id` int NOT NULL AUTO_INCREMENT,
  `website_language` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `website_timezone` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `website_date_format` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `website_time_format` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `website_starting_month` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `website_financial_year` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localization`
--

LOCK TABLES `localization` WRITE;
/*!40000 ALTER TABLE `localization` DISABLE KEYS */;
INSERT INTO `localization` VALUES (1,'English','UTC+04:00','DD-MM-YYYY','12 Hours','April','2024','1');
/*!40000 ALTER TABLE `localization` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigation_menus`
--

DROP TABLE IF EXISTS `navigation_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `navigation_menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigation_menus`
--

LOCK TABLES `navigation_menus` WRITE;
/*!40000 ALTER TABLE `navigation_menus` DISABLE KEYS */;
INSERT INTO `navigation_menus` VALUES (1,'All'),(2,'Add Job'),(3,'Manage Job'),(4,'Check Feasibility'),(5,'Drawing And Design'),(6,'Fabrication And Coating'),(7,'Testing Report'),(8,'Add Brand'),(9,'Manage Brand'),(10,'Add Category'),(11,'Manage Category'),(12,'Add Staff'),(13,'Manage Staff'),(14,'Suspend Account'),(15,'Suspend Jobs'),(16,'General Settings'),(18,'Completed Jobs'),(19,'Billing');
/*!40000 ALTER TABLE `navigation_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_gateway`
--

DROP TABLE IF EXISTS `payment_gateway`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_gateway` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `payment_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_gateway`
--

LOCK TABLES `payment_gateway` WRITE;
/*!40000 ALTER TABLE `payment_gateway` DISABLE KEYS */;
INSERT INTO `payment_gateway` VALUES (1,'sk@gmail.com','asddsdfsds','dsscsdsv'),(2,'ad@gmail.com','w22','222'),(3,'a@gmail.com','a','a');
/*!40000 ALTER TABLE `payment_gateway` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms_gateway`
--

DROP TABLE IF EXISTS `sms_gateway`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sms_gateway` (
  `sms_id` int NOT NULL AUTO_INCREMENT,
  `api_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `api_secret_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`sms_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms_gateway`
--

LOCK TABLES `sms_gateway` WRITE;
/*!40000 ALTER TABLE `sms_gateway` DISABLE KEYS */;
INSERT INTO `sms_gateway` VALUES (1,'sss','ssss','ss'),(2,'sss','ssss','ss'),(3,'sss','ssss','ss'),(4,'a','a','a');
/*!40000 ALTER TABLE `sms_gateway` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smtp_email`
--

DROP TABLE IF EXISTS `smtp_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `smtp_email` (
  `smtp_id` int NOT NULL AUTO_INCREMENT,
  `smtp_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `host` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `port` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`smtp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtp_email`
--

LOCK TABLES `smtp_email` WRITE;
/*!40000 ALTER TABLE `smtp_email` DISABLE KEYS */;
INSERT INTO `smtp_email` VALUES (1,'sk@gmail.com','123344','smtp','567');
/*!40000 ALTER TABLE `smtp_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tax`
--

DROP TABLE IF EXISTS `tax`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tax` (
  `tax_id` int NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `tax_value` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tax_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tax`
--

LOCK TABLES `tax` WRITE;
/*!40000 ALTER TABLE `tax` DISABLE KEYS */;
INSERT INTO `tax` VALUES (4,'GST','18','1','2025-01-03 14:57:20'),(5,'IGST','9','1','2025-01-03 14:57:32');
/*!40000 ALTER TABLE `tax` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_admin` (
  `_id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `created_date` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `token_key` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `completed_jobs` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uploaded_file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `admin_role` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin`
--

LOCK TABLES `tbl_admin` WRITE;
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` VALUES (21,'Abhisheks','abhi@gmail.com','202cb962ac59075b964b07152d234b70','7836929288','1','2025-08-13 23:24:42 PM','','','676901e920d55_meteor_2.png','Accountant'),(25,'Dvepl','dvepl@gmail.com','d5eeab490bd6213ee3853021f0bf9980','9873214560','1','2025-08-20 10:39:44 AM','','','68cc3ebbbdb79_66b21af1bc02f_meteor_2.png','Admin'),(26,'Vibrantick','vibrantick@gmail.com','202cb962ac59075b964b07152d234b70','7865654455','0','2024-12-26 18:29:17 PM','','','','Engineer'),(30,'Arun','arun@dvepl.com','45dfbf2aaac79ce144e818d4c133b0e7','9464100344','1','2025-06-18 17:30:02 PM',NULL,NULL,NULL,'Engineer'),(32,'Iqbal singh','office@dvepl.com','5c2fb951458b57e8e049d48a55cdddad','9257217609','1','2025-06-19 10:12:00 AM',NULL,NULL,NULL,'Engineer'),(33,'Akshay ','mechdesign1@dvepl.com','50977d6b4d7d7b056427ae04b90b251d','7837393355','1','2025-06-19 10:20:03 AM',NULL,NULL,NULL,'Engineer');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_brand`
--

LOCK TABLES `tbl_brand` WRITE;
/*!40000 ALTER TABLE `tbl_brand` DISABLE KEYS */;
INSERT INTO `tbl_brand` VALUES (1,'Havells',0),(2,'DVEPL',1),(3,'Bajaj Electricals',1),(5,'Tata',1),(6,'Bosch',1),(10,'JSW',0);
/*!40000 ALTER TABLE `tbl_brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'Starter Meter','1'),(2,'Meter Pannel','1'),(3,'Control and Relay Pannel','1'),(4,'Feeder Piller','0'),(9,'Starter Pannel','1');
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `serial_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_gst` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_total` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_total_amount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_id` int DEFAULT NULL,
  `concern_engineers` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `costing_engineers` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tbl_product_date` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tbl_product_remarks` longtext COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (75,'OUTDOOR','8','47000','25','18',NULL,'443680.00',101,'Yash','Vibrantick','',''),(76,'OUTDOOR','18','13000','26','18',NULL,'276120.00',101,'Yash','Vibrantick','',''),(77,'anmsd','78','1250','as db ','18',NULL,'115050.00',102,'Yash','Yash',NULL,NULL),(78,'WIRE','10','100','312313','18',NULL,'1180.00',103,'Akshay ','Yash',NULL,NULL),(79,'WIRES ','5','50','312313','18',NULL,'295.00',103,'Akshay ','Yash',NULL,NULL),(80,'msab d','12','1200','2312j','18',NULL,'16992.00',104,'Suvi Shrestha','Abhisheks',NULL,NULL),(81,'cct','4','1000','1111','18',NULL,'4720.00',105,'Yash','Dvepl',NULL,NULL),(82,'engine','15','1500','car123','18',NULL,'26550.00',106,'Suvi Shrestha','Dvepl',NULL,NULL),(83,'brake','10','15000','bike1234','18',NULL,'177000.00',106,'Suvi Shrestha','Dvepl',NULL,NULL),(84,'312312','31','111','31231','18',NULL,'4060.38',107,'Dvepl','Arun',NULL,NULL),(85,'234234','1','1290','100','18',NULL,'1522.20',108,'Arun','Arun',NULL,NULL),(86,'31231','1','1121','123','18',NULL,'1323.16',109,'Dvepl','Abhisheks',NULL,NULL),(87,'1212','1','212','12121','18',NULL,'2503.16',109,'Dvepl','Abhisheks',NULL,NULL),(88,'321231','11','123','1313123','18',NULL,'1598.54',109,'Dvepl','Abhisheks',NULL,NULL),(89,'lt panel','2','50000','20','18',NULL,'118000.00',110,'Arun','Iqbal singh',NULL,NULL);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_setting`
--

DROP TABLE IF EXISTS `tbl_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_setting` (
  `logo_id` int NOT NULL AUTO_INCREMENT,
  `uploaded_file` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `backpanel_image` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_setting`
--

LOCK TABLES `tbl_setting` WRITE;
/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
INSERT INTO `tbl_setting` VALUES (1,'68d3d64dc16b6_dvepl-logo.png','68cc3d63bc4de_icon.png','68d3d73150812_admin 2.jpg');
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_job_request`
--

DROP TABLE IF EXISTS `user_job_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_job_request` (
  `job_id` int NOT NULL AUTO_INCREMENT,
  `j_id` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `devel_code` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_confirm_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_taken_by` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ca_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_amount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_gst` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_general_ci,
  `po_payment_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_excel` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `total_amount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `advance` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_placed_to_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_payment` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_no` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `feb` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `powder_coating` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `elect` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_date` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uploaded_file` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `modify_date` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_done_date` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alloted_date` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `job_status` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dispatch` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_generate_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name1` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_received_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `billing_gst` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shipping_gst` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `po_placed_to` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `drawing_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `vendor_phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `vendor_email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `material_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_job_requestcol` varchar(45) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `costing_engineer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `concerned_engineer` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `billing_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`job_id`),
  UNIQUE KEY `uniq_jid` (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_job_request`
--

LOCK TABLES `user_job_request` WRITE;
/*!40000 ALTER TABLE `user_job_request` DISABLE KEYS */;
INSERT INTO `user_job_request` VALUES (115,'2025_MES_723807_1','Repair/Maintenance of starter and control panels for pumping system in AOR of GE (U) Udhampur.','MES','2025-12-14 09:37:13','Naresh',NULL,'Naresh','rohit@dvepl.com','8872969700',NULL,NULL,'accepted',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2025-12-17 12:38:43','ACTIVE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SYSTEM','SYSTEM','PENDING');
/*!40000 ALTER TABLE `user_job_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_status` (
  `user_status_id` int NOT NULL AUTO_INCREMENT,
  `user_status_name` varchar(45) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_status`
--

LOCK TABLES `user_status` WRITE;
/*!40000 ALTER TABLE `user_status` DISABLE KEYS */;
INSERT INTO `user_status` VALUES (1,'Request','2024-12-22 19:08:00'),(3,'Alloted','2024-12-18 14:16:33'),(4,'Fabrication','2024-12-18 14:16:49'),(5,'Testing','2024-12-18 14:17:18'),(6,'Completed','2024-12-18 14:17:35');
/*!40000 ALTER TABLE `user_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-17 18:11:15
