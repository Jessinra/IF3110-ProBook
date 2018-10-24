-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: probook
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `active_users`
--

DROP TABLE IF EXISTS `active_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `active_users` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `active_users`
--

LOCK TABLES `active_users` WRITE;
/*!40000 ALTER TABLE `active_users` DISABLE KEYS */;
INSERT INTO `active_users` VALUES (2);
/*!40000 ALTER TABLE `active_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `amount` int(3) NOT NULL,
  `author` varchar(75) DEFAULT NULL,
  `desc` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=1101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Naruto',15,'Masashi Kishimoto','Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior intellegebat cum. Falli homero id mea.','../View/Src/search_result/naruto.jpg'),(2,'Boruto',20,'Ukyo Kodachi','Lorem ipsum dolor sit amet, populo scripserit eos id, vim probo solum forensibus ei. Autem prompta consequuntur an ius, sint adhuc ex usu. No his tota dicant, vis aeterno suscipiantur no, an assentior intellegebat cum. Falli homero id mea.','../View/Src/search_result/boruto.jpg'),(1001,'Magi: The Kingdom of magic ',1,'Sergey Brin	Alphab','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_001.jpg'),(1002,'Nagi no Asukara',10,'Haruhiko Kuroda	Jap','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_002.jpg'),(1003,'Unbreakable Machine Doll',4,'Tim Cook	App','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_003.jpg'),(1004,'Accel World OVA',8,'Emmanuel Macron	Fran','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_004.jpg'),(1005,'GJ-bu OVA',4,'Bill Gates	Bill & Melinda Gate','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_005.jpg'),(1006,'Sword Art Online - Extra edition',1,'Doug McMillon	Wal-Mart Stor','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_006.jpg'),(1007,'Sword Art Online',9,'Wang Jianlin	Dalian Wanda Gro','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_007.jpg'),(1008,'Servant x Service',4,'Jim Yong Kim	World Ba','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_008.jpg'),(1009,'Boku ha Tomodachi ga Sukunai Next',6,'Shinzo Abe	Jap','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_009.jpg'),(1010,'Ore no Kanojo to osananaji ga Shuraba Sugiru',3,'Stephen Schwarzman	Blackstone ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_010.jpg'),(1011,'Chuunibyou demo Koi ga Shitai - Ren',2,'Tim Cook	App','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_011.jpg'),(1012,'D-Frag',8,'Christine Lagarde	Internationa','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_012.jpg'),(1013,'Love Live 2',8,'Rupert Murdoch	News Co','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_013.jpg'),(1014,'Hanayamata',2,'Lloyd Blankfein	Goldman Sachs ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_014.jpg'),(1015,'Persona 4 Golden the Animation',10,'Mark Zuckerberg	Facebo','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_015.jpg'),(1016,'Gekkan Shoujo Nozaki-kun',1,'Vladimir Putin	Russ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_016.jpg'),(1017,'Sword Art Online II',8,'Jamie Dimon	Cha','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_017.jpg'),(1018,'Selector Spread WIXOSS',4,'Michael Dell	De','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_018.jpg'),(1019,'Trinity Seven',1,'Emmanuel Macron	Fran','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_019.jpg'),(1020,'Fate Stay Night : Unlimited Blade Works',8,'Darren Woods	ExxonMob','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_020.jpg'),(1021,'Shigatsu wa Kimi no Uso',4,'Mary Barra	General Moto','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_021.jpg'),(1022,'Saenai Heroine no Sodatekata',1,'Vladimir Putin	Russ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_022.jpg'),(1023,'The IdolM@ster : Cinderella Girls',7,'Sergey Brin	Alphab','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_023.jpg'),(1024,'Ansatsu Kyoushitsu',2,'Mukesh Ambani	Reliance Industr','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_024.jpg'),(1025,'Plastic Memories',8,'John L. Flannery	General Elect','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_025.jpg'),(1026,'Danmachi',1,'Vladimir Putin	Russ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_026.jpg'),(1027,'Aldnoah Zero 2',9,'Mohammed bin Salman Al Saud	Sa','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_027.jpg'),(1028,'Nisekoi S2',9,'Justin Trudeau	Cana','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_028.jpg'),(1029,'Himouto Umaru-chan',8,'Tim Cook	App','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_029.jpg'),(1030,'Yamada-kun to 7-nin no Majo',10,'Li Keqiang	Chi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_030.jpg'),(1031,'Yamada-kun to 7-nin no Majo OVA',8,'Bernard Arnault	LVMH Moet Henn','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_031.jpg'),(1032,'Fate Stay Night : Unlimited Blade Works II',6,'Justin Trudeau	Cana','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_032.jpg'),(1033,'Shoukugeki no Souma',4,'Ali Hoseini-Khamenei	Ir','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_033.jpg'),(1034,'Working !!!',7,'Masayoshi Son	Softba','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_034.jpg'),(1035,'Gate - Jietai Kanochi nite',8,'Aliko Dangote	Dangote Gro','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_035.jpg'),(1036,'The IdolMaster Cinderella Girls II',7,'Pope Francis	Roman Catholic Ch','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_036.jpg'),(1037,'Gakusen Toshi Asterisk',7,'Gianni Infantino	FI','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_037.jpg'),(1038,'Gakkou Gurashi',2,'Akio Toyoda	Toyota Mot','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_038.jpg'),(1039,'Fate kaleid Liner Prisma Ilya 2wei Herz',5,'Tim Cook	App','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_039.jpg'),(1040,'Nisekoi OVA',3,'Lee Hsien Loong	Singapo','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_040.jpg'),(1041,'Nisekoi S2 OVA',7,'Robert Mueller	United Stat','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_041.jpg'),(1042,'Trinity Seven OVA',7,'Michael Dell	De','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_042.jpg'),(1043,'Charlotte OVA',10,'Jeff Bezos	Amazon.c','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_043.jpg'),(1044,'Himouto Umaru-chan OVA',10,'Michel Temer	Braz','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_044.jpg'),(1045,'Shigatsu wa Kimi no Uso OVA',2,'Larry Fink	BlackRo','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_045.jpg'),(1046,'Taimadou Gakuen 35 Shiken Shoutai',1,'Jim Yong Kim	World Ba','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_046.jpg'),(1047,'Boku dake ga Inai Machi',2,'Satya Nadella	Microso','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_047.jpg'),(1048,'Hai to Gensou no Grimgar',6,'John Roberts	United Stat','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_048.jpg'),(1049,'Hai to Gensou no Grimgar OVA',6,'Theresa May	United Kingd','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_049.jpg'),(1050,'Gate II - Jieitai Kanochi nite, Kaku Tatakaeri',4,'Theresa May	United Kingd','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_050.jpg'),(1051,'Kono Subarashii Sekai ni Shukufuku wo',3,'Vladimir Putin	Russ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_051.jpg'),(1052,'Saijaku Muhai no Bahamut',10,'Stephen Schwarzman	Blackstone ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_052.jpg'),(1053,'Girl Und Panzer Movie - Ova',6,'Bernard Arnault	LVMH Moet Henn','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_053.jpg'),(1054,'Girl Und Panzer movie',6,'Hui Ka Yan	China Evergrande Gr','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_054.jpg'),(1055,'Ansatsu Kyoushitsu II',9,'Mary Barra	General Moto','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_055.jpg'),(1056,'Barakamon',2,'Mary Barra	General Moto','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_056.jpg'),(1057,'Gin no Saji',7,'Emmanuel Macron	Fran','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_057.jpg'),(1058,'Gin no Saji S2',5,'Jim Yong Kim	World Ba','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_058.jpg'),(1059,'Mayoiga',10,'Rodrigo Duterte	Philippin','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_059.jpg'),(1060,'Kimi no Na wa',2,'Abigail Johnson	Fidelity Inves','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_060.jpg'),(1061,'Gakusen Toshi Asterisk II',8,'Abdel Fattah el-Sisi	Egy','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_061.jpg'),(1062,'Re Zero kara Hajimaru Isekai Seikatsu',9,'Li Ka-shing	CK Hutchison Holdi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_062.jpg'),(1063,'Netoge no Yome wa Onnanoko ja Nai to Omotta',5,'Larry Page	Alphab','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_063.jpg'),(1064,'Re Life ',6,'Bashar al-Assad	Syr','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_064.jpg'),(1065,'Shokugeki no Soma Ni no Sara',6,'Bill Gates	Bill & Melinda Gate','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_065.jpg'),(1066,'Fate Kaleid Liner PRISMA ILYA 3rei',9,'Jamie Dimon	Cha','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_066.jpg'),(1067,'Handa-kun',2,'Donald Trump	United Stat','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_067.jpg'),(1068,'Kono Bijutsubu ni wa Mondai ga Aru',4,'Joko Widodo	Indones','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_068.jpg'),(1069,'Zuto Mae kara Suki Deshita',3,'Warren Buffett	Berkshire Hatha','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_069.jpg'),(1070,'Orange',4,'Bernard Arnault	LVMH Moet Henn','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_070.jpg'),(1071,'New Game',2,'Jean-Claude Juncker	European U','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_071.jpg'),(1072,'Shuumatsu no Izetta',5,'Li Ka-shing	CK Hutchison Holdi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_072.jpg'),(1073,'WWW.Working !!',10,'Li Ka-shing	CK Hutchison Holdi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_073.jpg'),(1074,'Kuzu no Honkai',3,'Jean-Claude Juncker	European U','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_074.jpg'),(1075,'Kono Subarashii Sekai ni Shukufuku wo II',6,'Michael Bloomberg	Bloombe','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_075.jpg'),(1076,'Koe no Katachi',6,'Darren Woods	ExxonMob','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_076.jpg'),(1077,'Lostorage Incited WIXOSS ',6,'Michael Dell	De','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_077.jpg'),(1078,'Seiren',1,'Shinzo Abe	Jap','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_078.jpg'),(1079,'Saenai Heroine no Sodatekata â™­',9,'Emmanuel Macron	Fran','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_079.jpg'),(1080,'Shingeki no Kyojin II',2,'Michael Dell	De','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_080.jpg'),(1081,'Masamune-kun no Revenge',7,'Angela Merkel	Germa','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_081.jpg'),(1082,'Danmachi Gaiden: Sword Oratoria',1,'Qamar Javed Bajwa	Pakist','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_082.jpg'),(1083,'Rokudenashi Majutsu Koushi to Akashic Records',9,'Xi Jinping	Chi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_083.jpg'),(1084,'Sword Art Online : Ordinal Scale',9,'Bob Iger	Walt Disn','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_084.jpg'),(1085,'Kuroshitsuji : Book of Atlantis',5,'Reed Hastings','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_085.jpg'),(1086,'Tsuki ga Kirei',2,'Satya Nadella	Microso','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_086.jpg'),(1087,'Zero kara Hajimeru Mahou no Sho',4,'Enrique Pena Nieto	Mexi','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_087.jpg'),(1088,'Sakurada Reset',4,'Pope Francis	Roman Catholic Ch','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_088.jpg'),(1089,'New Game !!',8,'Haruhiko Kuroda	Jap','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_089.jpg'),(1090,'Gamers',7,'Abu Bakr al-Baghdadi	Islamic S','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_090.jpg'),(1091,'Kakegurui',4,'Robert Mueller	United Stat','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_091.jpg'),(1092,'Re:Creators',8,'Ken Griffin	Citadel L','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_092.jpg'),(1093,'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu',9,'Mohammed bin Salman Al Saud	Sa','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_093.jpg'),(1094,'Fate Apocrypha',1,'Lloyd Blankfein	Goldman Sachs ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_094.jpg'),(1095,'Just Because',4,'Abigail Johnson	Fidelity Inves','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_095.jpg'),(1096,'Boku no Kanojo ga Majimesugiru Shojo Bitch na Ken',4,'Mark Zuckerberg	Facebo','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_096.jpg'),(1097,'Ousama Game the Animation',9,'Stephen Schwarzman	Blackstone ','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_097.jpg'),(1098,'Shokugeki no Soma : San no Sara',3,'Emmanuel Macron	Fran','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_098.jpg'),(1099,'Koi to Uso',1,'Shinzo Abe	Jap','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_099.jpg'),(1100,'Blend S',9,'John Roberts	United Stat','lorem itsum dorol dnsnadk','../View/Src/book/thumbnail_100.jpg');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `popularities`
--

DROP TABLE IF EXISTS `popularities`;
/*!50001 DROP VIEW IF EXISTS `popularities`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `popularities` (
  `book_id` tinyint NOT NULL,
  `rating` tinyint NOT NULL,
  `total` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` text NOT NULL,
  KEY `book_id` (`book_id`),
  KEY `user_id` (`user_id`),
  KEY `transaction_id` (`transaction_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(3) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'harry','harry','Harry Setiawan Hamjaya','harry@gmail,com','08123456789',NULL,'Jl satu no 1'),(2,'tony','tony','Tony Tony','tony@gmail,com','08234567891',NULL,'Jl dua no 2'),(3,'jessin','jessin','Jessin Donnyson','jessin@gmail,com','08345678912',NULL,'Jl tiga no 3'),(4,'jeffry','jeffry','Jeffry Jeffry','jeffry@gmail,com','08456789123',NULL,'Jl empat no 4'),(5,'habibi','habibi','Habibi Haidir','habibi@gmail,com','08567891234',NULL,'Jl lima no 5');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `popularities`
--

/*!50001 DROP TABLE IF EXISTS `popularities`*/;
/*!50001 DROP VIEW IF EXISTS `popularities`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `popularities` AS select `books`.`id` AS `book_id`,avg(`reviews`.`rating`) AS `rating`,count(`reviews`.`rating`) AS `total` from (`books` left join `reviews` on((`books`.`id` = `reviews`.`book_id`))) group by `books`.`id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-24 22:41:18
