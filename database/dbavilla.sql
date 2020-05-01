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
	(6, '0', NULL, 'ABOUT BLAIR TOWNSEND', '<ul>\r\n<li>BA Princeton; Economics</li>\r\n<li>Masters in Fine Art Otis College</li>\r\n<li style="text-align: justify;">Worked in New York gallery scene</li>\r\n<li>Asst to boutique hotelier Ian Schraeger</li>\r\n<li>Worked for Getty furniture designer Roy McMakin</li>\r\n<li>One time Hotel owner: Hotel Oloffson, Port-au-Prince, Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</li>\r\n<li>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</li>\r\n</ul>', 0, '2020-01-21 09:08:57', '', '2020-02-27 07:49:05', '');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.client: ~0 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
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
	(1, 'fsfsdf', '<p>fsdfsdf</p>', 0, '2020-05-01 17:34:58', 'adminavilla', NULL, NULL);
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

-- Dumping structure for table dbavilla.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
	(1, 'adminavilla', '5c960b9f6b61143a48ab85c512d52b17', '2020-01-06 00:00:00', '', '2020-01-06 00:00:00', '');
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
