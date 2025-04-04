-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: my_store
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES (1,'hoan@gmail.com','Hoan Nguyen','$2a$12$WPq2z6uuBcARtznLTvE6ZOoK8LOcIp.s39YIn8PJumYgNF.jGsL7u','admin'),(3,'BaoGia','BaoGia','$2y$10$6QWXoInKYBdWcaLOG0oS4OtuaAewEqpYMVwDj4wyvjf7HUexomcGe','user'),(4,'hoan','NguyenHoan','$2a$12$tKD79nLHKqQwYgZJGcapTuGB95f6tqHaQcb1mfKEMcxWgEyCh6JQW','user'),(5,'admin','admin','$2a$12$tKD79nLHKqQwYgZJGcapTuGB95f6tqHaQcb1mfKEMcxWgEyCh6JQW','admin');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Áo sơ mi nam','Danh mục các loại sơ mi nam'),(2,'Áo  sơ mi nữ','Danh mục các loại sơ mi nữ đẹp'),(3,'Đầm nữ','Danh mục các loại đầm'),(4,'Phụ kiện','Danh mục phụ kiện '),(5,'Đầm thức nữ','Danh mục sẹt xi'),(6,'Áo nữ','Danh mục áo nữ ');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,9,4,3.00),(2,2,9,1,3.00),(3,3,12,1,590750.00),(4,3,10,1,700000.00),(5,4,9,1,399000.00),(6,5,10,1,700000.00),(7,6,9,2,399000.00),(8,6,11,1,399000.01),(9,6,10,3,700000.00),(10,6,13,1,120.00);
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Hoan Nguyen','0862590442','Quan9, TpHCM','2025-03-20 15:10:48'),(2,'1','1','1','2025-03-20 15:12:39'),(3,'Hoan Nguyen','0862590442','Quan9, TpHCM','2025-03-21 03:19:13'),(4,'Hoan Nguyen','0862590442','Quan9, TpHCM','2025-03-21 03:19:31'),(5,'2','2','2','2025-03-21 03:43:12'),(6,'Hoan Nguyen','0862590442','Quan9, TpHCM','2025-03-21 04:13:26');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (15,'Quần Ngắn Nữ Tiny Short RR24QN04','Thiết Kế Nữ Form Cơ Bản (có size M, L): cổ tròn và tay ngắn, thiết kế form basic nhấn eo nhẹ tạo nên sự nhẹ nhàng để dễ phối hợp với nhiều trang phục khác nhau.\nThiết kế Nữ Form Unisex rộng tay ngắn (size F): phiên bản form rộng hơn\nBạn có thể kết hợp nó với quần jeans bình thường hoặc chân váy để tạo nên phong cách đời thường hoặc có thể dễ dàng phối với nhiều items, phụ kiện khác nhau tạo nên phong cách riêng.',450.00,'',4),(16,'Áo Thun Nữ Sera Top RR24AT71','Thời gian đổi hàng: 3 ngày tính từ thời điểm giao hàng thành công.\r\n- Hỗ trợ đổi size/ đổi mẫu 1 lần cho một đơn hàng.\r\n- Sản phẩm chưa qua sử dụng; không dính bẩn, hư hỏng; sản phẩm còn nguyên tag mạc.\r\n- Khách hàng vui lòng đổi sản phẩm bằng giá hoặc cao giá hơn và thanh toán tiền chênh lệch, nếu sản phẩm đổi giá thấp hơn shop không hoàn tiền thừa.\r\n- Khách hàng vui lòng thanh toán phí ship 2 chiều khi có nhu cầu đổi hàng. Nếu khách hàng đổi tại cửa hàng vui lòng ghé sau 16h mỗi ngày, khi đến đổi đem theo mã đơn hàng.',240.00,'uploads/6-bbfc0520-6782-489c-91d3-ec5f1c.jpg',6),(32,'Quần Dài Nữ Calia Pants RR25QD02','- Rubies xin phép không chịu trách nhiệm với lí do NHÂN VIÊN TƯ VẤN SAI vì toàn bộ tư vấn về sản phẩm chỉ mang tính chất tham khảo, nên không thể chính xác tuyệt đối. Mỗi sản phẩm đều có số đo 3 vòng cụ thể, tuy nhiên việc chọn size phụ thuộc nhiều vào form dáng của người mặc và cảm giác mặc của mỗi khách hàng.',100.00,'uploads/6-24cb3cdf-a1f9-4daa-8b83-6dd323.jpg',1),(33,'Jumpsuit Ngắn Misa RR25JN01','- Khách hàng vui lòng thanh toán phí ship 2 chiều khi có nhu cầu đổi hàng. Nếu khách hàng đổi tại cửa hàng vui lòng ghé sau 16h mỗi ngày, khi đến đổi đem theo mã đơn hàng.',330.00,'uploads/2-a83f06e3-9f5b-4a53-a170-b782ad.jpg',3),(34,'Áo Thun Nữ Vie Top RR25AT03','Chất liệu: Thun cá sấu cao cấp để đảm bảo áo luôn mềm mịn và thoải mái trên da. Với khả năng co dãn tốt, áo luôn giữ form và màu sắc sau nhiều lần giặt.',149.00,'uploads/15-3c6ef6f1-50de-4f97-8dac-68757.jpg',1),(57,'Áo Thun Nữ Kina Top RR24AT65','Không có',360.00,'uploads/10-ae3e161a-5a96-4df5-95b1-4e4f5.jpg',2);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-04 13:10:26
