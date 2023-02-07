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

-- Dumping structure for table it3.restaurant
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `adress` varchar(50) NOT NULL DEFAULT '0',
  `tel_number` varchar(50) NOT NULL DEFAULT '0',
  `type_eat` varchar(50) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table it3.restaurant: ~1 rows (approximately)
REPLACE INTO `restaurant` (`id`, `name`, `adress`, `tel_number`, `type_eat`, `price`) VALUES
	(1, 'Giovannis Pizza Wiesbaden Klarenthaler Straße', 'Klarenthaler Str. 20, 65197 Wiesbaden', '0611 51016872', 'pizza', 15),
	(2, 'Alina\'s Döner', 'Ostring 7, 65205 Wiesbaden', '061229329257', 'doener', 20),
	(3, 'Cetiners Chicken&Burger', ' Herderstraße 9-19, 65239 Hochheim am Main', '01632035306', 'Burger', 20),
	(4, 'Joker Service Wiesbaden', 'Hasengartenstraße 15, 65189 Wiesbaden', '01544545412', 'Burger', 20),
	(5, 'test', 'test', '0154656545', 'Asiatisch', 20),
	(6, 'test2', 'test2', '0123', 'Burger', 123);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
