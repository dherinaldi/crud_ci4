-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for posku
CREATE DATABASE IF NOT EXISTS `posku` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `posku`;


-- Dumping structure for table posku.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table posku.product: ~2 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`product_id`, `product_name`, `product_price`) VALUES
	(1, 'Product 1', 20000),
	(2, 'Product 2', 30000);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Dumping structure for table posku.user
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `u_paswd` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_role` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `catatan_admin` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `id_unit` int(5) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`u_id`, `nama`, `u_name`, `u_paswd`, `id_role`, `catatan_admin`, `id_unit`) VALUES
	(3, 'user_admin', 'user_admin', '21232f297a57a5a743894a0e4a801fc3', '1', NULL, 99),
	(4, 'eindraz', 'eindraz', '21232f297a57a5a743894a0e4a801fc3', '1', NULL, 99),
	(5, 'daniar', 'daniar', '0a3a2bd1be023c1fcb21866bc08dc6ea', '1', NULL, 99),
	(6, 'rinaldi', 'rinaldi', '5cb35744bc37d7c46fd3664a50cb4f95', '2', NULL, 33),
	(7, 'verif', 'verif', '96e79218965eb72c92a549dd5a330112', '2', NULL, 33),
	(8, 'user', 'user', '96e79218965eb72c92a549dd5a330112', '3', '', 33),
	(9, 'sairba', 'sairba', '92fd5abb9667e3eae2b808a7a620267b', '1', NULL, 99),
	(10, 'dewas', 'dewas', 'a6085e40c7689c74ce5d6a8d95b53087', '3', NULL, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
