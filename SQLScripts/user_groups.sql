-- MySQL dump 10.13  Distrib 5.7.38, for Win64 (x86_64)
--
-- Host: localhost    Database: esmuriwn_award_original
-- ------------------------------------------------------
-- Server version	5.7.38

--
-- Dumping data for table `user_groups`
--

LOCK TABLES `user_groups` WRITE;
/*!40000 ALTER TABLE `user_groups` DISABLE KEYS */;
INSERT INTO `user_groups` VALUES (1,'Обычный','user',NULL,NULL),(2,'Админ','admin',NULL,NULL),(3,'Эксперт','expert',NULL,NULL),(4,'Член жюри','jury',NULL,NULL),(5,'Менеджер','manager',NULL,NULL),(6,'Проверка экспертов','expert.checker','2021-11-17 10:56:03','2021-11-17 10:56:03');
/*!40000 ALTER TABLE `user_groups` ENABLE KEYS */;
UNLOCK TABLES;

