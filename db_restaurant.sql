-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for it3
CREATE DATABASE IF NOT EXISTS `it3` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `it3`;

-- Dumping structure for table it3.order
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `restaurant_id` int(11) DEFAULT NULL,
  `order_name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  KEY `restaurant_id` (`restaurant_id`) USING BTREE,
  CONSTRAINT `FK1_resto_order` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table it3.order: ~5 rows (approximately)
REPLACE INTO `order` (`id`, `restaurant_id`, `order_name`, `price`, `created_at`) VALUES
	(1, 35, 'doener', 20, '2023-02-09 17:40:53'),
	(2, 34, 'pizza margaretta', 30, '2023-02-09 17:26:49'),
	(3, 35, 'order 5', 45, '2023-02-09 19:44:56'),
	(4, 34, 'order pizza miam', 23, '2023-02-09 20:46:00'),
	(5, 34, 'order pizzeria my first day work ', 13, '2023-02-09 20:48:06');

-- Dumping structure for table it3.restaurant
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `adress` varchar(50) NOT NULL DEFAULT '0',
  `tel_number` varchar(50) NOT NULL DEFAULT '0',
  `type_eat_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `type_eat_id` (`type_eat_id`),
  CONSTRAINT `FK1_eat` FOREIGN KEY (`type_eat_id`) REFERENCES `type_eat` (`id_eat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table it3.restaurant: ~3 rows (approximately)
REPLACE INTO `restaurant` (`id`, `name`, `adress`, `tel_number`, `type_eat_id`) VALUES
	(34, 'pizzeria GOld', 'test', '56', 2),
	(35, 'Doener', 'adress 2', '0156556666', 1),
	(36, 'test', 'test adresse', '017677231478', 4);

-- Dumping structure for table it3.type_eat
CREATE TABLE IF NOT EXISTS `type_eat` (
  `id_eat` int(11) NOT NULL AUTO_INCREMENT,
  `name_eat` varchar(50) NOT NULL DEFAULT '',
  `image_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_eat`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table it3.type_eat: ~5 rows (approximately)
REPLACE INTO `type_eat` (`id_eat`, `name_eat`, `image_url`) VALUES
	(1, 'dönner', 'images/doener.jpg'),
	(2, 'pizza', 'images/pizza.jpg'),
	(3, 'pasta', 'images/pasta.jpg'),
	(4, 'Asiatische', 'images/asiatische.jpg'),
	(5, 'Burger', 'images/burger.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
