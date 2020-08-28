-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for dbavilla
CREATE DATABASE IF NOT EXISTS `dbavilla` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbavilla`;

-- Dumping structure for table dbavilla.about
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(50) DEFAULT '0',
  `meta_description` text,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `fdelete` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.about: ~6 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `meta_title`, `meta_description`, `title`, `description`, `fdelete`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
	(1, '0', NULL, 'fasfsa', '<p>asfsdfds</p>', 1, '2020-01-16 11:52:55', '', '2020-01-16 11:53:03', ''),
	(2, '0', NULL, 'fasfasfsd', '<p>fasdfadsfdsf</p>', 1, '2020-01-16 13:47:09', '', '2020-01-16 13:48:16', ''),
	(3, '0', NULL, 'ABOUT', '<p><span style="font-size: 10pt; font-family: Arial; font-style: normal;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;BA Princeton; Economics \\nMasters in Fine Art Otis College \\nWorked in New York Gallery World \\nAsst to boutique hotelier Ian Schraeger \\nWorked for Getty furniture designer Roy McMakin \\nOne time Hotel owner: Hotel Oloffson, Port-au-Prince, \\nHaiti (Hotel from Graham Greene book, The Comedians) \\nwhich still exists. \\nAll custom furniture and interior design for producer \\nBarry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house \\nworking under Larry Totah.&quot;}" data-sheets-userformat="{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}">BA Princeton; Economics <br />Masters in Fine Art Otis College <br />Worked in New York Gallery World <br />Asst to boutique hotelier Ian Schraeger <br />Worked for Getty furniture designer Roy McMakin <br />One time Hotel owner: Hotel Oloffson, Port-au-Prince, <br />Haiti (Hotel from Graham Greene book, The Comedians) <br />which still exists. <br />All custom furniture and interior design for producer <br />Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house <br />working under Larry Totah.</span></p>', 1, '2020-01-16 16:41:01', '', '2020-01-16 19:47:00', ''),
	(4, '0', NULL, 'ABOUT BLAIR TOWNSEND', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', 1, '2020-01-17 01:39:38', '', '2020-01-20 14:11:54', ''),
	(5, '0', NULL, 'About', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', 1, '2020-01-20 14:16:21', '', '2020-01-21 09:08:11', ''),
	(6, 'maintenence genset dan menyediakan sparepark gense', 'maintenence genset dan menyediakan sparepark genset', 'ABOUT Avilla Jaya Teknik', '<p style="text-align: justify;"><strong>PT. Avilla Jaya Teknik</strong> is a company founded with the purpose of providing top quality products and service to each of our customer.</p>\r\n<p style="text-align: justify;">We are focused on providing products and services maintenance related to diesel backup power system.</p>\r\n<p style="text-align: justify;"><strong>PT. Avilla Jaya Teknik</strong> is filled by high dedication and integrity human resources that put our customer satisfaction as our top priority.</p>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<p style="text-align: justify;"><span style="font-size: 14pt;"><strong>VISION &amp; MISION&nbsp;</strong></span></p>\r\n<p style="text-align: justify;"><strong>Our Vision :</strong><br />Bring high satisfaction to every products and services that our company provide.</p>\r\n<p style="text-align: justify;"><strong>Our Mission:</strong></p>\r\n<ul>\r\n<li style="text-align: justify;">To provide product quality with the best value</li>\r\n<li style="text-align: justify;">To delivers service on time</li>\r\n<li style="text-align: justify;">To support our customer business growth</li>\r\n</ul>', 0, '2020-01-21 09:08:57', '', '2020-05-02 12:16:00', '');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table dbavilla.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) DEFAULT NULL,
  `description` text,
  `orderby` int(11) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.banner: ~0 rows (approximately)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;

-- Dumping structure for table dbavilla.client
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `description` text,
  `alt` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `order_by` tinyint(4) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.client: ~0 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `title`, `logo_path`, `description`, `alt`, `meta_description`, `order_by`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'hoka hoka bento', 'client_5ead0be900b90.jpg', '<p>dasd</p>', 'hoka hoka bento', 'hoka hoka bento client', 1, 0, '2020-05-02 12:58:01', 'adminavilla', '2020-05-02 13:04:20', 'adminavilla');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Dumping structure for table dbavilla.contactus
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `description` text,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(30) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.contactus: ~0 rows (approximately)
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` (`id`, `title`, `description`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'CONTACT US', '<p><strong>PT. Avilla Jaya Teknik</strong><br />Ruko Sedayu Square Blok J No 6<br />Jl. Outer Ring Road Lingkar Luar Cengkareng<br />Jakarta Barat 11730</p>\r\n<p><br /><strong>Mobile</strong> : 0813-9041-1533 (Marketing)<br /><strong>Phone</strong>&nbsp; : 021 - 52394859<br /><strong>Email</strong>&nbsp; &nbsp; : marketing.avillajayateknik@gmail.com</p>', 0, '2020-05-01 17:34:58', 'adminavilla', '2020-05-02 12:07:23', 'adminavilla');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;

-- Dumping structure for table dbavilla.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `img_path` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.product: ~0 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `description`, `img_path`, `alt`, `meta_description`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'spare park', '<p>asdadasda</p>', 'product_5eabccc6174e2.jpg', 'spare park genset', 'spare park genset dan', 0, '2020-05-01 14:16:22', NULL, '2020-05-01 14:31:45', 'adminavilla');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table dbavilla.service
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(30) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(30) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.service: ~0 rows (approximately)
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` (`id`, `meta_title`, `img_path`, `meta_description`, `title`, `description`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'maintenance genset', 'service_5eaa23feb61e5.jpg', 'maintenance genset dengan garansi 5th', 'test service ', '<p>asdasdasdasd adsasdasd</p>', 0, '2020-04-30 07:31:04', 'adminavilla', '2020-04-30 08:03:58', 'adminavilla');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;

-- Dumping structure for table dbavilla.taccess
CREATE TABLE IF NOT EXISTS `taccess` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roleId` int(11) NOT NULL DEFAULT '0',
  `menuId` int(11) NOT NULL,
  `action` enum('R','W','X') NOT NULL DEFAULT 'X',
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` varchar(50) NOT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `isDeleted` (`isDeleted`),
  KEY `roleId` (`roleId`),
  KEY `menuId` (`menuId`),
  CONSTRAINT `FK_taccess_tmenu` FOREIGN KEY (`menuId`) REFERENCES `tmenu` (`menuId`),
  CONSTRAINT `FK_taccess_troles` FOREIGN KEY (`roleId`) REFERENCES `troles` (`roleId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.taccess: ~0 rows (approximately)
/*!40000 ALTER TABLE `taccess` DISABLE KEYS */;
/*!40000 ALTER TABLE `taccess` ENABLE KEYS */;

-- Dumping structure for table dbavilla.tmenu
CREATE TABLE IF NOT EXISTS `tmenu` (
  `menuId` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(50) NOT NULL,
  `controllerName` varchar(30) NOT NULL,
  `orderBy` int(11) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdBy` varchar(50) NOT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`menuId`),
  KEY `isDeleted` (`isDeleted`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.tmenu: ~0 rows (approximately)
/*!40000 ALTER TABLE `tmenu` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmenu` ENABLE KEYS */;

-- Dumping structure for table dbavilla.troles
CREATE TABLE IF NOT EXISTS `troles` (
  `roleId` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(50) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(30) NOT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.troles: ~2 rows (approximately)
/*!40000 ALTER TABLE `troles` DISABLE KEYS */;
INSERT INTO `troles` (`roleId`, `roleName`, `isDeleted`, `createdDate`, `createdby`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'Superadmin', 0, '2020-05-02 13:50:04', 'system', NULL, NULL),
	(2, 'Admin', 0, '2020-05-02 13:50:31', 'system', NULL, NULL);
/*!40000 ALTER TABLE `troles` ENABLE KEYS */;

-- Dumping structure for table dbavilla.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(200) DEFAULT NULL,
  `roleId` int(11) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user_troles` (`roleId`),
  CONSTRAINT `FK_user_troles` FOREIGN KEY (`roleId`) REFERENCES `troles` (`roleId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `created_date`, `created_by`, `modified_date`, `modified_by`, `roleId`, `fdelete`) VALUES
	(1, 'administratorAvilla', '5c960b9f6b61143a48ab85c512d52b17', '2020-01-06 00:00:00', '', '2020-05-07 14:20:29', 'adminavilla', 2, 0),
	(2, 'adminweb', '$2y$10$eF.QiaVTpYQQYY9FQPXvael5nVVAeXVV4seaq7KDeAX36wIA/sbOS', '2020-05-07 13:31:59', 'adminavilla', '2020-05-07 14:29:20', 'adminavilla', 2, 0),
	(3, 'superadmin', '$2y$10$WkiCprWcJkHqmRJVIEq3IeQYZ5r4fLN29S1WTl2Y4eV./TPh5tGNS', '2020-05-07 13:56:00', 'adminavilla', NULL, NULL, 2, 0),
	(4, '', '$2y$10$YEc68/K/qD4VA8/Xb7PnPOANrKtCarNiF6ttinRF.msEtLPycHeha', '2020-05-07 14:08:42', 'adminavilla', '2020-05-07 14:15:19', 'adminavilla', 2, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for table dbavilla.visitlog
CREATE TABLE IF NOT EXISTS `visitlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ipAddress` varchar(50) DEFAULT '0',
  `visit_page` varchar(50) DEFAULT '0',
  `description` text,
  `fdelete` tinyint(4) DEFAULT '0',
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.visitlog: ~0 rows (approximately)
/*!40000 ALTER TABLE `visitlog` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitlog` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
