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
  `vision_mission` text NOT NULL,
  `fdelete` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.about: ~6 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`id`, `meta_title`, `meta_description`, `title`, `description`, `vision_mission`, `fdelete`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
	(1, '0', NULL, 'fasfsa', '<p>asfsdfds</p>', '', 1, '2020-01-16 11:52:55', '', '2020-01-16 11:53:03', ''),
	(2, '0', NULL, 'fasfasfsd', '<p>fasdfadsfdsf</p>', '', 1, '2020-01-16 13:47:09', '', '2020-01-16 13:48:16', ''),
	(3, '0', NULL, 'ABOUT', '<p><span style="font-size: 10pt; font-family: Arial; font-style: normal;" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;BA Princeton; Economics \\nMasters in Fine Art Otis College \\nWorked in New York Gallery World \\nAsst to boutique hotelier Ian Schraeger \\nWorked for Getty furniture designer Roy McMakin \\nOne time Hotel owner: Hotel Oloffson, Port-au-Prince, \\nHaiti (Hotel from Graham Greene book, The Comedians) \\nwhich still exists. \\nAll custom furniture and interior design for producer \\nBarry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house \\nworking under Larry Totah.&quot;}" data-sheets-userformat="{&quot;2&quot;:513,&quot;3&quot;:{&quot;1&quot;:0},&quot;12&quot;:0}">BA Princeton; Economics <br />Masters in Fine Art Otis College <br />Worked in New York Gallery World <br />Asst to boutique hotelier Ian Schraeger <br />Worked for Getty furniture designer Roy McMakin <br />One time Hotel owner: Hotel Oloffson, Port-au-Prince, <br />Haiti (Hotel from Graham Greene book, The Comedians) <br />which still exists. <br />All custom furniture and interior design for producer <br />Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house <br />working under Larry Totah.</span></p>', '', 1, '2020-01-16 16:41:01', '', '2020-01-16 19:47:00', ''),
	(4, '0', NULL, 'ABOUT BLAIR TOWNSEND', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', '', 1, '2020-01-17 01:39:38', '', '2020-01-20 14:11:54', ''),
	(5, '0', NULL, 'About', '<p>BA Princeton; Economics</p>\r\n<p>Masters in Fine Art Otis College</p>\r\n<p>Worked in New York Gallery World</p>\r\n<p>Asst to boutique hotelier Ian Schraeger</p>\r\n<p>Worked for Getty furniture designer Roy McMakin</p>\r\n<p>One time Hotel owner: Hotel Oloffson, Port-au-Prince,</p>\r\n<p>Haiti (Hotel from Graham Greene book, The Comedians) which still exists.</p>\r\n<p>All custom furniture and interior design for producer Barry Levinson&rsquo;s house and Vidal Sassoon&rsquo;s house working under Larry Totah.</p>', '', 1, '2020-01-20 14:16:21', '', '2020-01-21 09:08:11', ''),
	(6, 'PT. Avilla Jaya Teknik is a company founded with t', 'PT. Avilla Jaya Teknik is a company founded with the purpose of providing top quality products and service to each of our customer', 'ABOUT', '<p>PT. Avilla Jaya Teknik is a company founded with the purpose of providing top quality<br />products and service to each of our customer.</p>\r\n<p>We are focused on providing products and services maintenance related to diesel backup power system.</p>\r\n<p>PT. Avilla Jaya Teknik is filled by high dedication and integrity human resources that put our customer satisfaction as our top priority.</p>', '<p><span class="fontstyle0">Our Vision :</span></p>\r\n<p><span class="fontstyle2">Bring high satisfaction to every products and services that our company provide.</span></p>\r\n<p><span class="fontstyle2"><span class="fontstyle0">Our Mision:</span></span></p>\r\n<ul>\r\n<li><span class="fontstyle0">To provide product quality with the best value</span></li>\r\n<li><span class="fontstyle0">To delivers service on time</span></li>\r\n<li style="text-align: justify;"><span class="fontstyle0">To support our customer business growth</span></li>\r\n</ul>', 0, '2020-01-21 09:08:57', '', '2020-05-10 13:19:48', '');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.banner: ~0 rows (approximately)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`id`, `img_path`, `description`, `orderby`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'banner_5ead7f5551a9c.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 0, '2020-05-02 21:09:32', 'adminputra', '2020-05-02 21:25:57', 'adminputra');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.client: ~5 rows (approximately)
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`id`, `title`, `logo_path`, `description`, `alt`, `meta_description`, `order_by`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'PT. Bank Mandiri', 'client_5ead9093e21a2.png', '<p>bank mandiri</p>', 'bank mandiri', 'bank mandiri', 1, 0, '2020-05-02 22:24:03', 'adminputra', NULL, NULL),
	(2, 'Hoka Hoka Bento', 'client_5ead90dfa937b.png', '<p>Hoka Hoka Bento</p>', 'hoka hoka bento', 'hoka hoka bento', 2, 0, '2020-05-02 22:25:19', 'adminputra', NULL, NULL),
	(3, 'Kementerian Kesehatan', 'client_5ead9101afffb.png', '<p>Kementerian Kesehatan</p>', 'Kementerian Kesehatan', 'Kementerian Kesehatan', 1, 0, '2020-05-02 22:25:53', 'adminputra', NULL, NULL),
	(4, 'Ibis Hotels', 'client_5ead91275dd05.png', '<p>Ibis Hotels</p>', 'Ibis Hotels', 'Ibis Hotels', 4, 0, '2020-05-02 22:26:31', 'adminputra', NULL, NULL),
	(5, 'Maxone', 'client_5ead914cc5121.png', '<p>Maxone</p>', 'Maxone', 'Maxone', 3, 0, '2020-05-02 22:27:08', 'adminputra', NULL, NULL);
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
	(1, 'fsfsdf', '<table style="border-collapse: collapse; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td style="width: 100%;"><span class="fontstyle2"><span class="fontstyle0">PT. Avilla Jaya Teknik 2</span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="border-collapse: collapse; width: 100%;" border="0">\r\n<tbody>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Ruko Sedayu Square Blok J No 6</span></td>\r\n</tr>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Jl. Outer Ring Road Lingkar Luar Cengkareng</span></td>\r\n</tr>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Jakarta Barat 11730</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table class="NormalTable" style="border-collapse: collapse; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Mobile </span></td>\r\n<td width="550"><span class="fontstyle2">: 0813 - 9041 - 1533 (Marketing)</span></td>\r\n</tr>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Phone </span></td>\r\n<td width="550"><span class="fontstyle2">: 021 - 52394859</span></td>\r\n</tr>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Email </span></td>\r\n<td width="550"><span class="fontstyle2">: marketing.avillajayateknik@gmail.com</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 0, '2020-05-01 17:34:58', 'adminavilla', '2020-05-07 18:24:13', 'adminweb');
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
	(1, 'spare park genset', '<p>asdadasda</p>', '', 'spare park genset', 'spare park genset dan accesoris', 0, '2020-05-01 14:16:22', NULL, '2020-05-10 15:32:51', 'adminweb');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table dbavilla.productdetail
CREATE TABLE IF NOT EXISTS `productdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `path_img` varchar(255) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `path_logo` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `path_spec` varchar(255) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime NOT NULL,
  `createdby` varchar(50) NOT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.productdetail: ~0 rows (approximately)
/*!40000 ALTER TABLE `productdetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `productdetail` ENABLE KEYS */;

-- Dumping structure for table dbavilla.productspecifikasi
CREATE TABLE IF NOT EXISTS `productspecifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produkdetail_id` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `outputKvaPrp` int(11) DEFAULT NULL,
  `outputKvaEsp` int(11) DEFAULT NULL,
  `outputKwPrp` int(11) DEFAULT NULL,
  `outputKwEsp` int(11) DEFAULT NULL,
  `loadFuel` decimal(10,0) DEFAULT NULL,
  `ot_l` int(11) DEFAULT NULL COMMENT 'ot= Open Type',
  `ot_w` int(11) DEFAULT NULL COMMENT 'LxWxH(mm)',
  `ot_h` int(11) DEFAULT NULL,
  `ot_weight` int(11) DEFAULT NULL COMMENT ' Weight*  (Kg) ',
  `st_l` int(11) DEFAULT NULL COMMENT 'st=Silent Type',
  `st_w` int(11) DEFAULT NULL,
  `st_h` int(11) DEFAULT NULL,
  `st_weight` int(11) DEFAULT NULL COMMENT ' Weight*  (Kg) ',
  `path_img` varchar(255) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime NOT NULL,
  `createdBy` varchar(50) NOT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.productspecifikasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `productspecifikasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `productspecifikasi` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.service: ~2 rows (approximately)
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` (`id`, `meta_title`, `img_path`, `meta_description`, `title`, `description`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'preventive maintenance', 'service_5ead8594a03d1.png', 'maintenance genset dengan garansi 5th', 'Preventive Maintenance', '<p><span class="fontstyle0">Scheduled planned maintenance to prevent any breakdown or failures that can result in loss of operation and opportunity cost.</span> </p>', 0, '2020-04-30 07:31:04', 'adminavilla', '2020-05-02 21:37:08', 'adminputra'),
	(2, 'corrective maintenance', 'service_5ead8628cfcb0.png', 'corrective maintenance', 'Corrective Maintenance', '<p><span class="fontstyle0">Identify problem and repair failure generator set to be able to operate as soon as possible</span> </p>', 0, '2020-05-02 21:39:36', 'adminputra', NULL, NULL);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;

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

-- Dumping data for table dbavilla.user: ~4 rows (approximately)
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
