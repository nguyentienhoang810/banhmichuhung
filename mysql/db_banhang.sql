-- mysqldump: [Warning] Using a password on the command line interface can be insecure.
-- MySQL dump 10.13  Distrib 8.0.18, for Linux (x86_64)
--
-- Host: localhost    Database: db_banhang_docker
-- ------------------------------------------------------
-- Server version	8.0.18

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
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `bill_detail_ibfk_2` (`id_product`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_detail`
--

LOCK TABLES `bill_detail` WRITE;
/*!40000 ALTER TABLE `bill_detail` DISABLE KEYS */;
INSERT INTO `bill_detail` VALUES (18,15,62,5,220000,'2017-03-24 07:14:32','2017-03-24 07:14:32'),(17,14,2,1,160000,'2017-03-23 04:46:05','2017-03-23 04:46:05'),(16,13,60,1,200000,'2017-03-21 07:29:31','2017-03-21 07:29:31'),(15,13,59,1,200000,'2017-03-21 07:29:31','2017-03-21 07:29:31'),(14,12,60,2,200000,'2017-03-21 07:20:07','2017-03-21 07:20:07'),(13,12,61,1,120000,'2017-03-21 07:20:07','2017-03-21 07:20:07'),(12,11,61,1,120000,'2017-03-21 07:16:09','2017-03-21 07:16:09'),(11,11,57,2,150000,'2017-03-21 07:16:09','2017-03-21 07:16:09'),(19,16,2,2,160000,'2019-12-17 23:10:51','2019-12-17 23:10:51'),(20,16,1,1,120000,'2019-12-17 23:10:51','2019-12-17 23:10:51'),(21,16,8,1,150000,'2019-12-17 23:10:51','2019-12-17 23:10:51'),(22,17,1,1,120000,'2019-12-17 23:15:27','2019-12-17 23:15:27'),(23,17,7,1,160000,'2019-12-17 23:15:27','2019-12-17 23:15:27'),(24,18,7,1,160000,'2019-12-17 23:16:42','2019-12-17 23:16:42'),(25,18,6,1,180000,'2019-12-17 23:16:42','2019-12-17 23:16:42'),(26,19,1,1,120000,'2019-12-17 23:20:13','2019-12-17 23:20:13'),(27,19,9,1,150000,'2019-12-17 23:20:13','2019-12-17 23:20:13'),(28,20,2,37,160000,'2019-12-18 00:02:43','2019-12-18 00:02:43'),(29,20,13,1,280000,'2019-12-18 00:02:43','2019-12-18 00:02:43'),(30,21,2,1,160000,'2019-12-26 06:48:17','2019-12-26 06:48:17');
/*!40000 ALTER TABLE `bill_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bills_ibfk_1` (`id_customer`),
  KEY `bills_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bills`
--

LOCK TABLES `bills` WRITE;
/*!40000 ALTER TABLE `bills` DISABLE KEYS */;
INSERT INTO `bills` VALUES (14,14,'2017-03-23',160000,'COD','k','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(13,13,'2017-03-21',400000,'ATM','Vui lòng giao hàng trước 5h','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(12,12,'2017-03-21',520000,'COD','Vui lòng chuyển đúng hạn','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(11,11,'2017-03-21',420000,'COD','không chú','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(15,15,'2017-03-24',220000,'COD','e','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(16,16,'2019-12-18',590000,'COD','123123123','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(17,17,'2019-12-18',280000,'COD','hahahahahahaaa','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(18,18,'2019-12-18',340000,'ATM','速く出せ','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(19,19,'2019-12-18',270000,'COD','221323','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(20,20,'2019-12-18',6200000,'COD','wwwwwwwwww','2019-12-26 08:05:00','2019-12-26 08:05:00',10),(21,21,'2019-12-26',160000,'COD','2222222222222','2019-12-26 08:05:00','2019-12-26 08:05:00',10);
/*!40000 ALTER TABLE `bills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (15,'ê','Nữ','huongnguyen@gmail.com','e','e','e','2017-03-24 07:14:32','2017-03-24 07:14:32'),(14,'hhh','nam','huongnguyen@gmail.com','Lê thị riêng','99999999999999999','k','2017-03-23 04:46:05','2017-03-23 04:46:05'),(13,'Hương Hương','Nữ','huongnguyenak96@gmail.com','Lê Thị Riêng, Quận 1','23456789','Vui lòng giao hàng trước 5h','2017-03-21 07:29:31','2017-03-21 07:29:31'),(12,'Khoa phạm','Nam','khoapham@gmail.com','Lê thị riêng','1234567890','Vui lòng chuyển đúng hạn','2017-03-21 07:20:07','2017-03-21 07:20:07'),(11,'Hương Hương','Nữ','huongnguyenak96@gmail.com','Lê Thị Riêng, Quận 1','234567890-','không chú','2017-03-21 07:16:09','2017-03-21 07:16:09'),(16,'Hoang Nguyen','nam','tsuyoshiyamanashi+shift@gmail.com','鷹番1-15-20 ハリーズプレイス 3B','9067451469','123123123','2019-12-17 23:10:51','2019-12-17 23:10:51'),(17,'Hoang Nguyen','nam','ptthuyen0109@gmail.com','鷹番1-15-20 ハリーズプレイス 3B','9067451469','hahahahahahaaa','2019-12-17 23:15:27','2019-12-17 23:15:27'),(18,'ホアン','nam','takemoto.teruyoshi@gmail.com','麻布台3-2-9, 第二エイルビル401','9067451469','速く出せ','2019-12-17 23:16:42','2019-12-17 23:16:42'),(19,'Hoang Nguyen','nam','uno.test@yopmail.com','鷹番1-15-20 ハリーズプレイス 3B','9067451469','221323','2019-12-17 23:20:13','2019-12-17 23:20:13'),(20,'Hoang Nguyen','nam','takemoto.teruyoshi@gmail.com','鷹番1-15-20 ハリーズプレイス 3B','9067451469','wwwwwwwwww','2019-12-18 00:02:43','2019-12-18 00:02:43'),(21,'Hoang Nguyen','nam','nguyentienhoang810@gmail.com','鷹番1-15-20 ハリーズプレイス 3B','9067451469','2222222222222','2019-12-26 06:48:17','2019-12-26 06:48:17');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_13_051608_create_sampleuser_table',1),(2,'2019_12_13_052359_create_info_table',2),(3,'2019_12_13_053221_add_column',3),(4,'2019_12_26_070522_edit_bills_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".','Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ','sample1.jpg','2017-03-11 06:20:23','0000-00-00 00:00:00'),(2,'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát','Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ','sample2.jpg','2016-10-20 02:07:14','0000-00-00 00:00:00'),(3,'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng','Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ','sample3.jpg','2016-10-20 02:07:14','0000-00-00 00:00:00'),(4,'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.','Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ','sample4.jpg','2016-10-20 02:07:14','0000-00-00 00:00:00'),(5,'Phong cách mới trong sử dụng đồ gỗ nội thất gia đình','Đồ gỗ nội thất gia đình ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Phong cách sử dụng đồ gỗ hiện nay của các gia đình hầu h ','sample5.jpg','2016-10-20 02:07:14','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) unsigned DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_id_type_foreign` (`id_type`),
  CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Bánh Crepe Sầu riêng',5,'Bánh crepe sầu riêng nhà làm',150000,120000,'1430967449-pancake-sau-rieng-6.jpg','hộp',1,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(2,'Bánh Crepe Chocolate',6,'',180000,160000,'crepe-chocolate.jpg','hộp',1,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(3,'Bánh Crepe Sầu riêng - Chuối',5,'',150000,120000,'crepe-chuoi.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(4,'Bánh Crepe Đào',5,'',160000,0,'crepe-dao.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(5,'Bánh Crepe Dâu',5,'',160000,0,'crepedau.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(6,'Bánh Crepe Pháp',5,'',200000,180000,'crepe-phap.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(7,'Bánh Crepe Táo',5,'',160000,0,'crepe-tao.jpg','hộp',1,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(8,'Bánh Crepe Trà xanh',5,'',160000,150000,'crepe-traxanh.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(9,'Bánh Crepe Sầu riêng và Dứa',5,'',160000,150000,'saurieng-dua.jpg','hộp',0,'2016-10-26 03:00:16','2016-10-24 22:11:00'),(11,'Bánh Gato Trái cây Việt Quất',3,'',250000,0,'544bc48782741.png','cái',0,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(12,'Bánh sinh nhật rau câu trái cây',3,'',200000,180000,'210215-banh-sinh-nhat-rau-cau-body- (6).jpg','cái',0,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(13,'Bánh kem Chocolate Dâu',3,'',300000,280000,'banh kem sinh nhat.jpg','cái',1,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(14,'Bánh kem Dâu III',3,'',300000,280000,'Banh-kem (6).jpg','cái',0,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(15,'Bánh kem Dâu I',3,'',350000,320000,'banhkem-dau.jpg','cái',1,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(16,'Bánh trái cây II',3,'',150000,120000,'banhtraicay.jpg','hộp',0,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(17,'Apple Cake',3,'',250000,240000,'Fruit-Cake_7979.jpg','cai',0,'2016-10-12 02:00:00','2016-10-27 02:24:00'),(18,'Bánh ngọt nhân cream táo',2,'',180000,0,'20131108144733.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(19,'Bánh Chocolate Trái cây',2,'',150000,0,'Fruit-Cake_7976.jpg','hộp',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(20,'Bánh Chocolate Trái cây II',2,'',150000,0,'Fruit-Cake_7981.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(21,'Peach Cake',2,'',160000,150000,'Peach-Cake_3294.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(22,'Bánh bông lan trứng muối I',1,'',160000,150000,'banhbonglantrung.jpg','hộp',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(23,'Bánh bông lan trứng muối II',1,'',180000,0,'banhbonglantrungmuoi.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(24,'Bánh French',1,'',180000,0,'banh-man-thu-vi-nhat-1.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(25,'Bánh mì Australia',1,'',80000,70000,'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(26,'Bánh mặn thập cẩm',1,'',50000,0,'Fruit-Cake.png','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(27,'Bánh Muffins trứng',1,'',100000,80000,'maxresdefault.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(28,'Bánh Scone Peach Cake',1,'',120000,0,'Peach-Cake_3300.jpg','hộp',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(29,'Bánh mì Loaf I',1,'',100000,0,'sli12.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(30,'Bánh kem Chocolate Dâu I',4,'',380000,350000,'sli12.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(31,'Bánh kem Trái cây I',4,'',380000,350000,'Fruit-Cake.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(32,'Bánh kem Trái cây II',4,'',380000,350000,'Fruit-Cake_7971.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(33,'Bánh kem Doraemon',4,'',280000,250000,'p1392962167_banh74.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(34,'Bánh kem Caramen Pudding',4,'',280000,0,'Caramen-pudding636099031482099583.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(35,'Bánh kem Chocolate Fruit',4,'',320000,300000,'chocolate-fruit636098975917921990.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(36,'Bánh kem Coffee Chocolate GH6',4,'',320000,300000,'COFFE-CHOCOLATE636098977566220885.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(37,'Bánh kem Mango Mouse',4,'',320000,300000,'mango-mousse-cake.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(38,'Bánh kem Matcha Mouse',4,'',350000,330000,'MATCHA-MOUSSE.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(39,'Bánh kem Flower Fruit',4,'',350000,330000,'flower-fruits636102461981788938.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(40,'Bánh kem Strawberry Delight',4,'',350000,330000,'strawberry-delight636102445035635173.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(41,'Bánh kem Raspberry Delight',4,'',350000,330000,'raspberry.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(42,'Beefy Pizza',6,'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella',150000,130000,'40819_food_pizza.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(43,'Hawaii Pizza',6,'Sốt cà chua, ham , dứa, pho mai mozzarella',120000,0,'hawaiian paradise_large-900x900.jpg','cái',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(44,'Smoke Chicken Pizza',6,'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.',120000,0,'chicken black pepper_large-900x900.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(45,'Sausage Pizza',6,'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.',120000,0,'pizza-miami.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(46,'Ocean Pizza',6,'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.',120000,0,'seafood curry_large-900x900.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(47,'All Meaty Pizza',6,'Ham, bacon, chorizo, pho mai mozzarella.',140000,0,'all1).jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(48,'Tuna Pizza',6,'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella',140000,0,'54eaf93713081_-_07-germany-tuna.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(49,'Bánh su kem nhân dừa',7,'',120000,100000,'maxresdefault.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(50,'Bánh su kem sữa tươi',7,'',120000,100000,'sukem.jpg','cái',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(51,'Bánh su kem sữa tươi chiên giòn',7,'',150000,0,'1434429117-banh-su-kem-chien-20.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(52,'Bánh su kem dâu sữa tươi',7,'',150000,0,'sukemdau.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(53,'Bánh su kem bơ sữa tươi',7,'',150000,0,'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(54,'Bánh su kem nhân trái cây sữa tươi',7,'',150000,0,'foody-banh-su-que-635930347896369908.jpg','hộp',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(55,'Bánh su kem cà phê',7,'',150000,0,'banh-su-kem-ca-phe-1.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(56,'Bánh su kem phô mai',7,'',150000,0,'50020041-combo-20-banh-su-que-pho-mai-9.jpg','hộp',0,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(57,'Bánh su kem sữa tươi chocolate',7,'',150000,0,'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg','hộp',1,'2016-10-13 02:20:00','2016-10-19 03:20:00'),(58,'Bánh Macaron Pháp',2,'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.',200000,180000,'Macaron9.jpg','',0,'2016-10-26 17:00:00','2016-10-11 17:00:00'),(59,'Bánh Tiramisu - Italia',2,'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn',200000,0,'234.jpg','',0,'2016-10-26 17:00:00','2016-10-11 17:00:00'),(60,'Bánh Táo - Mỹ',2,'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.',200000,0,'1234.jpg','',0,'2016-10-26 17:00:00','2016-10-11 17:00:00'),(61,'Bánh Cupcake - Anh Quốc',6,'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.',150000,120000,'cupcake.jpg','cái',1,NULL,NULL),(62,'Bánh Sachertorte',6,'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm',250000,220000,'111.jpg','cái',0,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` VALUES (1,'','banner1.jpg'),(2,'','banner2.jpg'),(3,'','banner3.jpg'),(4,'','banner4.jpg');
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_products`
--

DROP TABLE IF EXISTS `type_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_products`
--

LOCK TABLES `type_products` WRITE;
/*!40000 ALTER TABLE `type_products` DISABLE KEYS */;
INSERT INTO `type_products` VALUES (1,'Bánh mặn','Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.','banh-man-thu-vi-nhat-1.jpg',NULL,NULL),(2,'Bánh ngọt','Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..','20131108144733.jpg','2016-10-12 02:16:15','2016-10-13 01:38:35'),(3,'Bánh trái cây','Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.','banhtraicay.jpg','2016-10-18 00:33:33','2016-10-15 07:25:27'),(4,'Bánh kem','Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!','banhkem.jpg','2016-10-26 03:29:19','2016-10-26 02:22:22'),(5,'Bánh crepe','Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”','crepe.jpg','2016-10-28 04:00:00','2016-10-27 04:00:23'),(6,'Bánh Pizza','Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.','pizza.jpg','2016-10-25 17:19:00',NULL),(7,'Bánh su kem','Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.','sukemdau.jpg','2016-10-25 17:19:00',NULL);
/*!40000 ALTER TABLE `type_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'Hương Hương','huonghuong08.php@gmail.com','$2y$10$rGY4KT6ZSMmLnxIbmTXrsu2xdgRxm8x0UTwCyYCAzrJ320kYheSRq','23456789','Hoàng Diệu 2',NULL,'2017-03-23 07:17:33','2017-03-23 07:17:33'),(7,'Hoang Nguyen','huonghuo222ng08.php@gmail.com','$2y$10$kqrs.pptVmm2NgSvjY8LEuuXGEwKI8NwzJm4XetqO0igVfjqO/iS6','9067451469','鷹番1-15-20 ハリーズプレイス 3B',NULL,'2019-12-18 00:31:49','2019-12-18 00:31:49'),(8,'Hoang Nguyen','huo2jdhng08.php@gmail.com','$2y$10$eTa5YARFzlNPzgOC8WjNZ.0kIA8zzkHsqueLBYfuuJ1Kfq.Oqe0iW','9067451469','鷹番1-15-20 ハリーズプレイス 3B',NULL,'2019-12-18 00:32:19','2019-12-18 00:32:19'),(9,'123123','12123@mail.com','$2y$10$TRemE73CoiGhKgyzh3KmT.m1DC3IkrD0dZFGRnlVkre23.Ja8CPGK','1231231','123123',NULL,'2019-12-18 00:37:11','2019-12-18 00:37:11'),(10,'admin name','admin@admin.com','$2y$10$sKWBx6wy/7IrRA4KGRB.R.SwBiud0TlIWY8bsq858Cbi1PO7KoAXC','123123123','address admin',NULL,'2019-12-18 01:10:27','2019-12-18 01:10:27'),(11,'user ZERO','zero@mail.com','$2y$10$kq4P4bac9jxcwzIcDXDA7.Bh/5yNnx/LEiWScUR20LIf5yKJuKk9.','99999999','zero address',NULL,NULL,NULL);
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

-- Dump completed on 2019-12-26  8:15:51
