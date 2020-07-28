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

-- Dumping data for table dbavilla.banner: ~1 rows (approximately)
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` (`id`, `img_path`, `description`, `orderby`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'banner_5ead7f5551a9c.png', '<p>&nbsp;test</p>', 1, 0, '2020-05-02 21:09:32', 'adminputra', '2020-07-27 18:40:26', 'adminweb');
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;

-- Dumping structure for table dbavilla.client
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `logo_path` varchar(255) DEFAULT NULL,
  `img_path` varchar(255) DEFAULT NULL,
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
INSERT INTO `client` (`id`, `title`, `logo_path`, `img_path`, `description`, `alt`, `meta_description`, `order_by`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'PT. Bank Mandiri', 'client_5ead9093e21a2.png', NULL, '<p>bank mandiri</p>', 'bank mandiri', 'bank mandiri', 1, 0, '2020-05-02 22:24:03', 'adminputra', NULL, NULL),
	(2, 'Hoka Hoka Bento', 'client_5ead90dfa937b.png', NULL, '<p>Hoka Hoka Bento</p>', 'hoka hoka bento', 'hoka hoka bento', 2, 0, '2020-05-02 22:25:19', 'adminputra', NULL, NULL),
	(3, 'Kementerian Kesehatan', 'client_5ead9101afffb.png', NULL, '<p>Kementerian Kesehatan</p>', 'Kementerian Kesehatan', 'Kementerian Kesehatan', 1, 0, '2020-05-02 22:25:53', 'adminputra', NULL, NULL),
	(4, 'Ibis Hotels', 'client_5ead91275dd05.png', NULL, '<p>Ibis Hotels</p>', 'Ibis Hotels', 'Ibis Hotels', 4, 0, '2020-05-02 22:26:31', 'adminputra', NULL, NULL),
	(5, 'Maxone', 'client_5ead914cc5121.png', NULL, '<p>Maxone</p>', 'Maxone', 'Maxone', 3, 0, '2020-05-02 22:27:08', 'adminputra', NULL, NULL);
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

-- Dumping data for table dbavilla.contactus: ~1 rows (approximately)
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
INSERT INTO `contactus` (`id`, `title`, `description`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'fsfsdf', '<table style="border-collapse: collapse; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td style="width: 100%;"><span class="fontstyle2"><span class="fontstyle0">PT. Avilla Jaya Teknik</span></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<table style="border-collapse: collapse; width: 100%;" border="0">\r\n<tbody>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Ruko Sedayu Square Blok J No 6</span></td>\r\n</tr>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Jl. Outer Ring Road Lingkar Luar Cengkareng</span></td>\r\n</tr>\r\n<tr style="height: 22px;">\r\n<td style="width: 100%; height: 22px;"><span class="fontstyle2">Jakarta Barat 11730</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<table class="NormalTable" style="border-collapse: collapse; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Mobile </span></td>\r\n<td width="550"><span class="fontstyle2">: 0813 - 9041 - 1533 (Marketing)</span></td>\r\n</tr>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Phone </span></td>\r\n<td width="550"><span class="fontstyle2">: 021 - 52394859</span></td>\r\n</tr>\r\n<tr>\r\n<td width="108"><span class="fontstyle2">Email </span></td>\r\n<td width="550"><span class="fontstyle2">: marketing.avillajayateknik@gmail.com</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 0, '2020-05-01 17:34:58', 'adminavilla', '2020-07-26 17:55:05', 'adminweb');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;

-- Dumping structure for table dbavilla.pictureproduct
CREATE TABLE IF NOT EXISTS `pictureproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `path_img` varchar(255) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  `fdeleted` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.pictureproduct: ~0 rows (approximately)
/*!40000 ALTER TABLE `pictureproduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `pictureproduct` ENABLE KEYS */;

-- Dumping structure for table dbavilla.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `img_path` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `slug` text NOT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.product: ~2 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `title`, `description`, `img_path`, `alt`, `meta_description`, `fdelete`, `slug`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'Genset', '<p>Genset model Silent Type</p>', 'product_5f1d69b8d58f8.jpg', 'genset', 'macam macam genset', 0, 'Genset', '2020-05-01 14:16:22', NULL, '2020-07-26 18:38:04', 'adminweb'),
	(2, 'Portable Genset', '<p>adsadas</p>', 'product_5f0c04609eaca.png', 'portable genset', 'portable genset', 0, 'Portable-Genset', '2020-07-13 13:51:12', 'adminweb', NULL, NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table dbavilla.productdetail
CREATE TABLE IF NOT EXISTS `productdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `meta_title` varchar(50) NOT NULL,
  `path_img` varchar(255) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `path_logo` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `path_spec` varchar(255) DEFAULT NULL,
  `orderby` smallint(6) DEFAULT NULL,
  `fdelete` tinyint(4) DEFAULT NULL,
  `createdDate` datetime NOT NULL,
  `createdby` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.productdetail: ~21 rows (approximately)
/*!40000 ALTER TABLE `productdetail` DISABLE KEYS */;
INSERT INTO `productdetail` (`id`, `product_id`, `meta_title`, `path_img`, `title`, `path_logo`, `slug`, `description`, `path_spec`, `orderby`, `fdelete`, `createdDate`, `createdby`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 1, 'perkins genset', '', 'PERKINS', 'logo_5f1d51cbe47d3.png', 'PERKINS', '', '', 1, 0, '2020-07-15 16:57:23', 'adminweb', '2020-07-26 16:50:03', 'adminweb'),
	(2, 1, 'genset_kubota', '', 'KUBOTA', 'logo_5f1d5b495efcb.jpeg', 'KUBOTA', '', '', 3, 0, '2020-07-15 17:03:44', 'adminweb', '2020-07-26 17:30:33', 'adminweb'),
	(3, 1, 'genset himuinsa mitsubishi', '', 'HIMUINSA MITSUBISHI', 'logo_5f1e573884df8.jpeg', 'HIMUINSA-MITSUBISHI', '', '', 4, 0, '2020-07-15 17:10:31', 'adminweb', '2020-07-27 11:25:28', 'adminweb'),
	(4, 1, 'genset cummins usa', '', 'CUMMINS USA', 'logo_5f1d5476b3401.jpeg', 'CUMMINS-USA', '', '', NULL, 1, '2020-07-15 17:17:03', 'adminweb', '2020-07-26 17:01:26', 'adminweb'),
	(5, 1, 'genset cummins', '', 'CUMMINS', 'logo_5f1e54f253bc6.jpeg', 'CUMMINS', '', '', 2, 0, '2020-07-15 21:26:09', 'adminweb', '2020-07-27 11:15:46', 'adminweb'),
	(6, 2, 'Launtop Gasoline Generator LT1200CL', 'LT1200CL.png', 'Launtop Gasoline Generator LT1200CL', '', 'Launtop-Gasoline-Generator-LT1200CL', '<p>Launtop Gasoline Generator<br />Max. AC Output: 1000 Watts<br />Engine Speed: 3000 rpm<br />Voltage: 240V<br />Frequency: 50 Hz<br />Fuel Tank Capacity: 5 Liter<br />Engine Starting System: Coil Start<br />Power :900-1000 watt</p>', '', NULL, 0, '2020-07-16 14:21:57', NULL, '2020-07-27 09:53:58', 'adminweb'),
	(11, 2, 'Launtop Gasoline Generator LT3000LBE', 'LT3000LBE.png', 'Launtop Gasoline Generator LT3000LBE', '', 'Launtop-Gasoline-Generator-LT3000LBE', '<p>Launtop Gasoline Generator<br />Kapasitas maksimum: 2.5 kW/2500 Watt<br />Kapasitas rata-rata: 2.2 kW/2200 Watt<br />Sistem starter: Elektrik dan tarik<br />Phase: 1<br />Phase Konsumsi bahan bakar: 1.34 liter/jam<br />Kapasitas tangki bahan bakar: 15 liter<br />Dimensi: 62 x 47 x 53 cm<br />Power :2300-2500 watt</p>', '', NULL, 0, '2020-07-16 14:27:52', NULL, '2020-07-27 09:42:21', 'adminweb'),
	(12, 2, 'Launtop Gasoline Generator LT5000LBE', 'LT5000LBE.png', 'Launtop Gasoline Generator LT5000LBE', '', 'Launtop-Gasoline-Generator-LT5000LBE', '<p>Launtop Gasoline Generator <br />Kapasitas maksimum: 5 kW/5000 Watt <br />Kapasitas rata -rata: 4.5 kW/4500 Watt <br />Sistem starter: elektrik dan tarik <br />Phase: 1 <br />Phase Konsumsi bahan bakar: 2.61 liter/jam <br />Kapasitas tangki bahan bakar: 25 liter <br />Dimensi: 72 x 53 x 61 cm <br />Power :4000-4500 watt</p>', '', NULL, 0, '2020-07-16 14:27:52', NULL, '2020-07-27 09:55:37', 'adminweb'),
	(13, 2, 'Launtop Gasoline Generator LT6500LBE', 'LT6500LBE.png', 'Launtop Gasoline Generator LT6500LBE', '', 'Launtop-Gasoline-Generator-LT6500LBE', '<p>Launtop Gasoline Generator <br />Kapasitas maksimum: 6 kW/6000 Watt <br />Kapasitas rata-rata : 5.5 kW/5500 Watt <br />Sistem starter: elektrik dan tarik <br />Phase: 1 Phase <br />Konsumsi bahan bakar: 2.86 liter/jam <br />Kapasitas tangki bahan bakar: 25 liter <br />Dimensi: 72 x 53 x 61 cm <br />Power : 5000-5500 watt</p>', '', NULL, 0, '2020-07-16 14:27:52', NULL, '2020-07-27 10:02:38', 'adminweb'),
	(14, 2, 'Launtop Gasoline Generator LT7500LBE', 'LT7500LBE.png', 'Launtop Gasoline Generator LT7500LBE', '', 'Launtop-Gasoline-Generator-LT7500LBE', '<p>Launtop Gasoline Generator <br />Kapasitas maksimum: 7 kW/7000 Watt <br />Kapasitas rata-rata : 6 5 kW/6500 Watt <br />Sistem starter: elektrik dan tarik <br />Phase: 1 Phase <br />Konsumsi bahan bakar: 2.99 liter/jam<br />Kapasitas tangki bahan bakar: 25 liter <br />Dimensi: 72 x 53 x 61 cm <br />Power :6000-6500 watt</p>', '', NULL, 0, '2020-07-16 14:27:52', NULL, '2020-07-27 09:59:48', 'adminweb'),
	(15, 2, 'Launtop Gasoline Generator LT7500S', 'LT7500S.png', 'Launtop Gasoline Generator LT7500S', '', 'Launtop-Gasoline-Generator-LT7500S', '<p>Launtop Gasoline Generator<br />Kapasitas maksimum: 6.6 kW/6600 Watt<br />Kapasitas rata-rata: 6 kW/6000 Watt<br />Sistem starter: elektrik<br />Phase: 1 Phase<br />Konsumsi bahan bakar: 2.94 liter/jam<br />Kapasitas tangki bahan bakar: 15 liter<br />Dimensi: 100 x 52 x 74 cm<br />Power :5500-6000 watt</p>', '', NULL, 0, '2020-07-16 14:42:35', NULL, '2020-07-27 10:08:58', 'adminweb'),
	(16, 2, 'Launtop Gasoline Generator LT11000S', 'LT11000S.png', 'Launtop Gasoline Generator LT11000S', '', 'Launtop-Gasoline-Generator-LT11000S', '<p>Sistem starter: elektrik <br />Phase: 1 Phase <br />Konsumsi bahan bakar: 4.33 liter/jam <br />Kapasitas tangki bahan bakar: 25 liter <br />Power :8500-9000 watt</p>', '', NULL, 0, '2020-07-16 14:42:35', NULL, '2020-07-27 10:07:35', 'adminweb'),
	(17, 2, 'Launtop Gasoline Generator LT11000S-3', 'LT11000S-3.png', 'Launtop Gasoline Generator LT11000S-3', NULL, 'Launtop-Gasoline-Generator-LT11000S-3', 'Launtop Gasoline Generator                       Sistem starter: elektrik Phase: 3 Phase Konsumsi bahan bakar: 4.33 liter/jam Kapasitas tangki bahan bakar: 25 liter Dimensi: 99 x 65 x 94.5 cm Power :8500-9000 watt', NULL, NULL, 0, '2020-07-16 14:42:35', NULL, NULL, NULL),
	(18, 2, 'Launtop Gasoline Generator LT13000S', 'LT13000S.png', 'Launtop Gasoline Generator LT13000S', NULL, 'Launtop-Gasoline-Generator-LT13000S', 'Launtop Gasoline Generator                   Kapasitas maksimum: 11 kW/11000 Watt Kapasitas rata-rata : 10.5 kW/10500 Watt Sistem starter: elektrik  Phase: 1 Phase Konsumsi bahan bakar: 4.72 liter/jam Kapasitas tangki bahan bakar: 25 liter Dimensi: 99 x 65 x 94.5 cm Power :10000-11000 watt', NULL, NULL, 0, '2020-07-16 14:42:35', NULL, NULL, NULL),
	(22, 2, 'Launtop Gasoline Generator LDG7500S', 'LDG7500S.png', 'Launtop Gasoline Generator LDG7500S', NULL, 'Launtop-Gasoline-Generator-LDG7500S', 'Launtop Diesel Generator Voltage: 240V Frequency: 50 Hz Max. AC Output: 5.5 kW Starting System: Electric Displacement: 474cc Engine Speed: 3000rpm Fuel Tank Capacity: 25L Power :5500-6000 watt', NULL, NULL, 0, '2020-07-16 14:42:35', NULL, NULL, NULL),
	(23, 2, 'Launtop Gasoline Generator LDG12SA', 'LDG12SA.png', 'Launtop Gasoline Generator LDG12SA', NULL, 'Launtop-Gasoline-Generator-LDG12SA', 'Launtop Diesel Generator Engine Displacement: 954cc Engine Starting System: Electric Voltage: 380V Frequency: 50 Hz Max. AC Output: 11000 watts Fuel Tank Capacity: 53 Liter Power :10000-11000 watt', NULL, NULL, 0, '2020-07-16 14:42:35', NULL, NULL, NULL),
	(24, 2, 'Launtop Gasoline Generator LDG12SA-3', 'LDG12SA-3.png', 'Launtop Gasoline Generator LDG12SA-3', '', 'Launtop-Gasoline-Generator-LDG12SA-3', '<p>Launtop Diesel Generator<br />Engine Displacement: 954cc<br />Engine Starting System: Electric<br />Voltage: 380 V<br />Frequency: 50 Hz Max. AC<br />Output: 11000 Watts<br />Fuel Tank Capacity: 53 Liter<br />Power :10000-11000 watt</p>', '', NULL, 0, '2020-07-16 14:42:35', NULL, '2020-07-27 10:11:52', 'adminweb'),
	(25, 2, 'Launtop Gasoline Generator LT13000S-3', 'LT13000S-3.png', 'Launtop Gasoline Generator LT13000S-3', NULL, 'Launtop-Gasoline-Generator-LT13000S-3', 'Launtop Gasoline Generator                         Sistem starter: elektrik  Phase: 3 Phase Konsumsi bahan bakar: 4.72 liter/jam Kapasitas tangki bahan bakar: 25 liter Dimensi: 99 x 65 x 94.5 cm Power :10000-10500 watt', NULL, NULL, 0, '2020-07-16 14:44:52', NULL, NULL, NULL),
	(26, 2, 'Launtop Gasoline Generator LH13000S', 'LH13000S.png', 'Launtop Gasoline Generator LH13000S', NULL, 'Launtop-Gasoline-Generator-LH13000S', 'Launtop Gasoline Generator  Kapasitas maksimum: 13.75 kVA/11 kW Phase: 1 Phase Kapasitas tangki bahan bakar: 25 liter Power :10000-11000 watt', NULL, NULL, 0, '2020-07-16 14:44:52', NULL, NULL, NULL),
	(27, 2, 'Launtop Gasoline Generator LH13000S-3', 'LH13000S-3.png', 'Launtop Gasoline Generator LH13000S-3', NULL, 'Launtop-Gasoline-Generator-LH13000S-3', 'Launtop Gasoline Generator              Phase: 3 Phase Kapasitas tangki bahan bakar: 25 liter Power :10000-11000 watt', NULL, NULL, 0, '2020-07-16 14:44:52', NULL, NULL, NULL),
	(28, 1, 'testmesta', 'product_5f12cf1bb63061.png', 'test', 'logo_5f12d77608748.png', 'test', '<p>dadad</p>', '', NULL, 1, '2020-07-18 16:58:31', 'adminweb', '2020-07-18 18:15:11', 'adminweb');
/*!40000 ALTER TABLE `productdetail` ENABLE KEYS */;

-- Dumping structure for table dbavilla.productspecifikasi
CREATE TABLE IF NOT EXISTS `productspecifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produkdetail_id` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `engine` varchar(50) NOT NULL,
  `outputKvaPrp` decimal(10,2) DEFAULT NULL,
  `outputKvaEsp` decimal(10,2) DEFAULT NULL,
  `outputKwPrp` decimal(10,2) DEFAULT NULL,
  `outputKwEsp` decimal(10,2) DEFAULT NULL,
  `loadFuel` decimal(10,2) DEFAULT NULL,
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
  `createdBy` varchar(50) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.productspecifikasi: ~103 rows (approximately)
/*!40000 ALTER TABLE `productspecifikasi` DISABLE KEYS */;
INSERT INTO `productspecifikasi` (`id`, `produkdetail_id`, `model`, `engine`, `outputKvaPrp`, `outputKvaEsp`, `outputKwPrp`, `outputKwEsp`, `loadFuel`, `ot_l`, `ot_w`, `ot_h`, `ot_weight`, `st_l`, `st_w`, `st_h`, `st_weight`, `path_img`, `fdelete`, `createdDate`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(2, 5, 'TC30', '4B3.9-G2', 27.00, 30.00, 22.00, 24.00, 6.70, 1800, 820, 1355, 805, 2396, 1056, 1700, 1171, NULL, 0, '2020-07-16 07:31:39', NULL, NULL, NULL),
	(3, 5, 'TC44', '4BT3.9-G2', 40.00, 44.00, 32.00, 35.00, 9.30, 1800, 820, 1355, 840, 2706, 1106, 1700, 1402, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(4, 5, 'TC55', '4BTA3.9-G2', 50.00, 55.00, 40.00, 44.00, 11.50, 1800, 820, 1355, 936, 2706, 1106, 1700, 1446, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(5, 5, 'TC66', '4BTA3.9-G2', 60.00, 66.00, 48.00, 53.00, 12.90, 1800, 820, 1355, 968, 2706, 1106, 1700, 1478, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(6, 5, 'TC80', '6BT5.9-G2', 72.00, 80.00, 58.00, 64.00, 22.00, 2185, 880, 1415, 1200, 3146, 1056, 1850, 1685, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(7, 5, 'TC93', '6BT5.9-G2', 85.00, 93.00, 68.00, 75.00, 22.00, 2185, 880, 1415, 1184, 3146, 1106, 1770, 2010, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(8, 5, 'TC110', '6BT5.9-G2', 100.00, 110.00, 80.00, 88.00, 22.00, 2170, 880, 1415, 1242, 3146, 1106, 1770, 2036, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(9, 5, 'TC125', '6BTA5.9-G2', 114.00, 125.00, 90.00, 100.00, 27.00, 2170, 880, 1415, 1290, 3146, 1056, 1850, 1775, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(10, 5, 'TC145', '6BTAA5.9-G2', 131.00, 145.00, 105.00, 116.00, 30.00, 2350, 950, 1430, 1392, 3436, 1106, 1968, 1971, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(11, 5, 'TC175', '6CTA8.3-G2', 160.00, 175.00, 128.00, 140.00, 42.00, 2350, 950, 1540, 1659, 3436, 1106, 1968, 2238, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(12, 5, 'TC200', '6CTA8.3-G2', 180.00, 200.00, 144.00, 160.00, 42.00, 2370, 950, 1540, 1754, 3436, 1106, 1968, 2333, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(13, 5, 'TC220', '6CTAA8.3-G2', 200.00, 220.00, 160.00, 176.00, 45.00, 2550, 980, 1585, 1866, 3686, 1256, 2068, 2523, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(14, 5, 'TC250', '6LTAA8.9-G2', 227.00, 250.00, 180.00, 200.00, 53.00, 2550, 980, 1585, 1954, 3686, 1256, 2068, 2611, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(15, 5, 'TC275', '6LTAA8.9-G2', 250.00, 275.00, 200.00, 220.00, 53.00, 2550, 980, 1585, 2022, 3686, 1256, 2068, 2679, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(16, 5, 'TC315', 'NTA855-G1A', 288.00, 315.00, 230.00, 253.00, 61.30, 3050, 1100, 1900, 3009, 4186, 1406, 2181, 4504, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(17, 5, 'TC345', 'MTAA11-G3 ', 313.00, 345.00, 250.00, 276.00, 62.00, 3050, 1100, 1720, 2742, 4366, 1406, 2260, 3867, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(18, 5, 'TC360', 'QSM11-G2', 325.00, 358.00, 260.00, 286.00, 69.00, 3050, 1100, 1780, 2730, 4366, 1406, 2260, 3855, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(19, 5, 'TC375', 'NTA855-G2A', 344.00, 375.00, 275.00, 300.00, 71.90, 3050, 1100, 1900, 3082, 4186, 1406, 2181, 4590, NULL, 0, '2020-07-16 07:33:49', NULL, NULL, NULL),
	(20, 5, 'TC450', 'NTAA855-G7A', 400.00, 450.00, 320.00, 360.00, 89.20, 3365, 1120, 1916, 3396, 4786, 1356, 2537, 4571, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(21, 5, 'TC500', 'KTA19-G3', 450.00, 500.00, 360.00, 400.00, 97.00, 3455, 1360, 2135, 4320, 5306, 1566, 2585, 5570, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(22, 5, 'TC550', 'KTA19-G4', 500.00, 550.00, 400.00, 440.00, 107.00, 3455, 1360, 2135, 4218, 5306, 1566, 2585, 5468, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(23, 5, 'TC625', 'KTAA19-G5', 568.00, 625.00, 455.00, 500.00, 122.00, 3630, 1460, 2050, 4448, 5456, 1706, 3013, 6208, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(24, 5, 'TC690', 'KTAA19-G6A', 625.00, 690.00, 500.00, 550.00, 157.00, 3650, 1460, 2050, 4556, 5456, 1706, 3013, 6316, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(25, 5, 'TC715', 'QSKTAA19-G4', 650.00, 715.00, 520.00, 572.00, 145.00, 3665, 1460, 2150, 4730, 5456, 1706, 3013, 6490, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(26, 5, 'TC825', 'KTA38-G2', 750.00, 825.00, 600.00, 660.00, 167.00, 4325, 2060, 2208, 7214, 6058, 2438, 2591, 10392, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(27, 5, 'TC880', 'KTA38-G2B', 800.00, 880.00, 640.00, 704.00, 191.00, 4325, 2060, 2208, 7224, 6058, 2438, 2591, 10402, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(28, 5, 'TC1000', 'KTA38-G2A', 909.00, 1000.00, 727.00, 800.00, 190.00, 4325, 2060, 2208, 7532, 6058, 2438, 2896, 10710, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(29, 5, 'TC1100', 'KTA38-G5', 1000.00, 1100.00, 800.00, 880.00, 209.00, 4325, 2060, 2208, 7580, 6058, 2438, 2591, 10758, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(30, 5, 'TC1250', 'KTA38-G9', 1125.00, 1250.00, 900.00, 1000.00, 250.00, 4410, 2070, 2375, 7992, 12192, 2438, 2896, 14942, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(31, 5, 'TC1375', 'KTA50-G3', 1250.00, 1375.00, 1000.00, 1100.00, 261.00, 4980, 2060, 2400, 8795, 12192, 2438, 2896, 15745, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(32, 5, 'TC1650', 'KTA50-G8', 1500.00, 1650.00, 1200.00, 1320.00, 300.00, 5470, 2020, 2445, 11408, 12192, 2438, 2896, 18358, NULL, 0, '2020-07-16 07:33:50', NULL, NULL, NULL),
	(33, 4, 'TU700', 'VTA28-G5', 625.00, 687.00, 500.00, 550.00, 140.00, 3750, 1720, 2225, 5510, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:55:27', NULL, NULL, NULL),
	(34, 5, 'TU715', 'QSK19-G4', 650.00, 715.00, 520.00, 572.00, 145.00, 3645, 1460, 2105, 4480, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(35, 6, 'TU800', 'QSK23-G2', 750.00, 800.00, 600.00, 640.00, 151.00, 4135, 1665, 2110, 5740, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(36, 7, 'TU825', 'VTA28-G6', 750.00, 825.00, 600.00, 660.00, 195.00, 3985, 1720, 2225, 5910, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(37, 8, 'TU880', 'QSK23-G3', 810.00, 880.00, 648.00, 704.00, 161.00, 4135, 1665, 2110, 5720, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(38, 9, 'TU1000', 'QST30-G3', 910.00, 1000.00, 728.00, 800.00, 184.00, 4055, 1760, 2340, 6040, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(39, 10, 'TU1100', 'QST30-G4', 1000.00, 1100.00, 800.00, 880.00, 202.00, 4250, 1760, 2340, 6390, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(40, 11, 'TU1100', 'KTA38-G5', 1000.00, 1100.00, 800.00, 880.00, 209.00, 4300, 2070, 2180, 7650, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(41, 12, 'TU1240', 'KTA38-G9', 1125.00, 1250.00, 900.00, 1000.00, 256.00, 4355, 2070, 2180, 7900, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(42, 13, 'TU1250', 'QSK38-G2', 1135.00, 1250.00, 908.00, 1000.00, 242.00, 4715, 2140, 2405, 7940, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(43, 14, 'TU1375', 'QSK38-G5', 1250.00, 1375.00, 1000.00, 1100.00, 274.00, 4720, 2140, 2405, 8200, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(44, 15, 'TU1375', 'KTA50-G3', 1250.00, 1375.00, 1000.00, 1100.00, 274.00, 4965, 2060, 2440, 9250, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(45, 16, 'TU1500', 'QSK50-G3', 1400.00, 1500.00, 1120.00, 1200.00, 301.00, 5665, 2200, 2555, 10200, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:30', NULL, NULL, NULL),
	(46, 17, 'TU1660', 'KTA50-G8', 1400.00, 1660.00, 1120.00, 1328.00, 289.00, 5495, 2200, 2625, 10640, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(47, 18, 'TU1660', 'KTA50-G58', 1500.00, 1660.00, 1200.00, 1328.00, 309.00, 5495, 2200, 2625, 10640, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(48, 19, 'TU1660', 'QSK50-G4', 1540.00, 1660.00, 1232.00, 1328.00, 330.00, 5665, 2200, 2555, 10650, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(49, 20, 'TU1800', 'QSK50-G7', 1640.00, 1800.00, 1312.00, 1440.00, 341.00, 5780, 2200, 2555, 10960, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(50, 21, 'TU2000', 'QSK60-G3', 1875.00, 2000.00, 1500.00, 1600.00, 363.00, 5775, 2200, 2665, 12950, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(51, 22, 'TU2250', 'QSK60-G4', 2045.00, 2250.00, 1636.00, 1800.00, 394.00, 5860, 2200, 2665, 13240, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(52, 23, 'TU2500', 'QSK60-G13', 2000.00, 2420.00, 1600.00, 1936.00, 399.00, 5945, 2220, 3160, 14500, NULL, NULL, NULL, NULL, NULL, 0, '2020-07-16 07:56:31', NULL, NULL, NULL),
	(53, 3, 'HTW-670 T5', 'S6R2 PTA', 670.00, 738.00, 536.00, 590.00, 136.40, 3700, 1686, 2272, 6012, 6058, 2438, 2896, 10050, NULL, 0, '2020-07-16 08:12:52', NULL, NULL, NULL),
	(54, 3, 'HTW-765 T5', 'S6R2 PTAA', 761.00, 836.00, 609.00, 669.00, 157.08, 4100, 1773, 2125, 6475, 6058, 2438, 2896, 10150, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(55, 3, 'HTW-780 T5', 'S12A2 PTA', 775.00, 853.00, 620.00, 682.00, 166.24, 4150, 1763, 2077, 7350, 6058, 2438, 2896, 11750, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(56, 3, 'HTW-790 T5', 'S6R2 A2PTAW2-5', 788.00, 860.00, 631.00, 688.00, 177.90, 4150, 1763, 2077, 7550, 6058, 2438, 2896, 10371, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(57, 3, 'HTW-920 T5', 'S12A2 PTA2', 881.00, 968.00, 705.00, 775.00, 195.00, 4270, 2022, 2150, 7500, 6058, 2438, 2896, 11800, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(58, 3, 'HTW-1030 T5', 'S12H PTA', 1030.00, 1110.00, 824.00, 888.00, 216.75, 4500, 1773, 2391, 8505, 6058, 2438, 2896, 12000, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(59, 3, 'HTW-1260 T5', 'S12R PTA', 1260.00, 1350.00, 1008.00, 1080.00, 261.31, 4457, 2050, 2348, 11000, 12192, 2438, 2896, 20000, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(60, 3, 'HTW-1390 T5', 'S12R PTA2', 1382.00, 1500.00, 1106.00, 1200.00, 280.03, 4457, 2050, 2328, 11160, 12192, 2438, 2896, 20250, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(61, 3, 'HTW-1530 T5', 'S12R PTAA2', 1523.00, 1660.00, 1218.00, 1328.00, 308.97, 5300, 2098, 2597, 11840, 12192, 2438, 2896, 20745, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(62, 3, 'HTW-1550 T5', 'S12R F1PTAW2', 1549.00, 1660.00, 1239.00, 1328.00, 323.00, 5086, 2330, 2796, 12120, 12192, 2438, 2896, 22385, NULL, 0, '2020-07-16 08:13:33', NULL, NULL, NULL),
	(63, 3, 'HTW-1745 T5', 'S16R PTA', 1736.00, 1900.00, 1389.00, 1520.00, 341.66, 5283, 2043, 2600, 12840, 12192, 2438, 2896, 22160, NULL, 0, '2020-07-16 08:13:34', NULL, NULL, NULL),
	(64, 3, 'HTW-1900 T5', 'S16R PTA2', 1892.00, 2035.00, 1514.00, 1628.00, 387.28, 5338, 2042, 2602, 13600, 12192, 2438, 2896, 22230, NULL, 0, '2020-07-16 08:13:34', NULL, NULL, NULL),
	(65, 3, 'HTW-2030 T5', 'S16R PTAA2', 2021.00, 2250.00, 1617.00, 1800.00, 402.12, 6120, 2190, 2700, 14820, 12192, 2438, 2896, 22960, NULL, 0, '2020-07-16 08:13:34', NULL, NULL, NULL),
	(66, 3, 'HTW-2080 T5', 'S16R F1PTAW2', 2080.00, 2250.00, 1664.00, 1800.00, 438.00, 5877, 2330, 3531, 14830, 0, 0, 0, 0, NULL, 0, '2020-07-16 08:16:26', NULL, NULL, NULL),
	(67, 3, 'HTW-2295 T5', 'S16R2 PTAW', 2284.00, 2525.00, 1827.00, 2020.00, 500.20, 6664, 2200, 2519, 16440, 0, 0, 0, 0, NULL, 0, '2020-07-16 08:16:26', NULL, NULL, NULL),
	(68, 1, 'TP10', '403A-11G1/403D-11G', 9.00, 10.00, 7.00, 8.00, 2.60, 1320, 700, 1160, 420, 1856, 826, 1415, 640, NULL, 0, '2020-07-16 09:24:23', NULL, NULL, NULL),
	(69, 1, 'TP15', '403A-15G1/403D-15G', 13.00, 15.00, 10.00, 12.00, 3.67, 1320, 700, 1015, 448, 2116, 956, 1390, 794, NULL, 0, '2020-07-16 09:25:07', NULL, NULL, NULL),
	(70, 1, 'TP22', '404A-22G1/404D-22G', 20.00, 22.00, 16.00, 18.00, 5.40, 1320, 700, 1155, 544, 2116, 956, 1390, 830, NULL, 0, '2020-07-16 09:25:07', NULL, NULL, NULL),
	(71, 1, 'TP33', '1103A-33G', 30.00, 33.00, 24.00, 26.00, 7.10, 1650, 770, 1254, 752, 2706, 1106, 1700, 802, NULL, 0, '2020-07-16 09:25:07', NULL, NULL, NULL),
	(72, 1, 'TP50', '1103A-33TG1', 45.00, 50.00, 36.00, 40.00, 10.70, 1650, 770, 1256, 850, 2706, 1106, 1700, 950, NULL, 0, '2020-07-16 09:25:07', NULL, NULL, NULL),
	(73, 1, 'TP66', '1103A-33TG2', 60.00, 66.00, 48.00, 53.00, 13.90, 1735, 770, 1256, 888, 2706, 1106, 1700, 988, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(74, 1, 'TP88', '1104A-44TG2', 80.00, 88.00, 64.00, 70.00, 18.70, 1900, 815, 1295, 1043, 3146, 1106, 1700, 1890, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(75, 1, 'TP110', '1104C-44TAG2', 100.00, 110.00, 80.00, 88.00, 22.60, 1935, 815, 1310, 1148, 3146, 1106, 1700, 1960, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(76, 1, 'TP150', '1106A-70TG1', 135.00, 150.00, 108.00, 120.00, 35.00, 2450, 950, 1535, 1412, 3456, 1126, 1900, 2416, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(77, 1, 'TP165', '1106A-70TAG2', 150.00, 165.00, 120.00, 132.00, 45.80, 2450, 950, 1535, 1492, 3456, 1126, 1900, 2492, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(78, 1, 'TP200', '1106A-70TAG3', 180.00, 200.00, 144.00, 160.00, 41.60, 2450, 950, 1535, 1652, 3456, 1126, 1900, 2712, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(79, 1, 'TP220', '1106A-70TAG4', 200.00, 220.00, 160.00, 176.00, 44.90, 2485, 950, 1535, 1726, 3456, 1126, 1900, 2848, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(80, 1, 'TP250', '1506A-E88TAG2', 227.00, 250.00, 184.00, 200.00, 48.60, 3000, 1150, 1800, 1992, 3686, 1406, 1900, 3042, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(81, 1, 'TP275', '1506A-E88TAG3', 250.00, 275.00, 200.00, 220.00, 55.50, 3000, 1150, 1800, 1992, 3686, 1406, 1900, 3098, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(82, 1, 'TP300', '1506A-E88TAG4', 275.00, 300.00, 220.00, 240.00, 60.20, 3150, 1150, 1800, 2360, 4366, 1306, 2150, 3220, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(83, 1, 'TP330', '1506A-E88TAG5', 300.00, 330.00, 240.00, 264.00, 64.90, 3150, 1150, 1800, 2360, 3906, 1456, 2010, 3596, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(84, 1, 'TP385', '2206A-E13TAG2', 350.00, 385.00, 280.00, 308.00, 71.00, 3200, 1150, 1990, 3058, 4506, 1506, 2443, 4578, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(85, 1, 'TP440', '2206A-E13TAG3', 400.00, 440.00, 320.00, 352.00, 81.00, 3370, 1150, 1990, 3686, 4506, 1506, 2443, 4742, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(86, 1, 'TP500', '2506A-E15TAG1', 454.00, 500.00, 360.00, 400.00, 95.00, 3440, 1150, 1990, 3686, 5306, 1566, 2585, 4936, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(87, 1, 'TP550', '2506A-E15TAG2', 500.00, 550.00, 400.00, 440.00, 100.00, 3440, 1150, 1990, 3738, 4809, 1506, 2590, 5990, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(88, 1, 'TP660', '2806C-E18TAG1A', 600.00, 660.00, 480.00, 528.00, 129.00, 3350, 1536, 1957, 4004, 5306, 1706, 2935, 5299, NULL, 0, '2020-07-16 09:25:08', NULL, NULL, NULL),
	(89, 1, 'TP700', '2806A-E18TAG2', 650.00, 700.00, 520.00, 560.00, 132.00, 3390, 1536, 1957, 4160, 5306, 1706, 2935, 5455, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(90, 1, 'TP825', '4006-23TAG2A', 750.00, 825.00, 600.00, 660.00, 157.00, 4320, 1720, 2172, 5730, 6058, 2438, 2591, 8908, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(91, 1, 'TP880', '4006-23TAG3A', 800.00, 880.00, 640.00, 704.00, 172.00, 4320, 1720, 2172, 5744, 6058, 2438, 2591, 8922, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(92, 1, 'TP1100', '4008TAG2', 1000.00, 1100.00, 800.00, 880.00, 194.00, 4690, 2070, 2269, 7280, 12192, 2438, 2896, 14230, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(93, 1, 'TP1375', '4012-46TWG2A', 1250.00, 1375.00, 1000.00, 1100.00, 259.00, 4810, 1977, 2450, 9234, 12192, 2438, 2896, 16184, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(94, 1, 'TP1650', '4012-46TAG2A', 1505.00, 1656.00, 1204.00, 1325.00, 301.00, 4980, 2192, 2501, 10261, 12192, 2438, 2896, 17211, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(95, 1, 'TP1875', '4012-46TAG3A', 1705.00, 1875.00, 1364.00, 1500.00, 370.00, 5070, 2192, 2570, 13664, 12192, 2438, 2896, 20614, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(96, 1, 'TP2000', '4016TAG1A', 1844.00, 2028.00, 1476.00, 1622.00, 383.00, 5900, 2145, 2545, 13808, 12000, 3200, 3670, 21388, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(97, 1, 'TP2250', '4016TAG2A', 2058.00, 2250.00, 1646.00, 1800.00, 434.00, 5985, 2145, 2545, 14361, 12000, 3200, 3670, 21941, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(98, 1, 'TP2500', '4016-61TRG3', 2200.00, 2420.00, 1760.00, 1936.00, 473.00, 6010, 2200, 2785, 13621, 12000, 3200, 3670, 21201, NULL, 0, '2020-07-16 09:25:09', NULL, NULL, NULL),
	(100, 2, 'APK7', 'D905-BG', 6.60, 7.00, 5.20, 5.60, 2.10, NULL, NULL, NULL, NULL, 1450, 630, 950, 515, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL),
	(101, 2, 'APK10', 'D1105-BG', 10.00, 11.00, 8.00, 8.80, 2.70, NULL, NULL, NULL, NULL, 1450, 680, 1065, 515, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL),
	(102, 2, 'APK15', 'D1703-BG', 15.00, 17.00, 12.00, 13.60, 3.40, NULL, NULL, NULL, NULL, 1600, 750, 1066, 647, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL),
	(103, 2, 'APK20', 'V2203-BG', 20.00, 22.00, 16.00, 18.00, 4.70, NULL, NULL, NULL, NULL, 1700, 750, 1066, 709, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL),
	(104, 2, 'APK30', 'V3300-BG', 30.00, 33.00, 24.00, 26.40, 6.80, NULL, NULL, NULL, NULL, 1850, 815, 1010, 750, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL),
	(105, 2, 'APK37', 'V300-T-E2BG2', 37.00, 40.00, 29.60, 32.00, 5.80, NULL, NULL, NULL, NULL, 1850, 815, 1010, 750, NULL, 0, '2020-07-16 09:34:22', NULL, NULL, NULL);
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
  `slug` text NOT NULL,
  `createdBy` varchar(30) DEFAULT NULL,
  `modifiedDate` datetime DEFAULT NULL,
  `modifiedBy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table dbavilla.service: ~3 rows (approximately)
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` (`id`, `meta_title`, `img_path`, `meta_description`, `title`, `description`, `fdelete`, `createdDate`, `slug`, `createdBy`, `modifiedDate`, `modifiedBy`) VALUES
	(1, 'preventive maintenance', 'service_5ead8594a03d1.png', 'maintenance genset dengan garansi 5th', 'Preventive Maintenance', '<p><span class="fontstyle0">Scheduled planned maintenance to prevent any breakdown or failures that can result in loss of operation and opportunity cost.</span> </p>', 0, '2020-04-30 07:31:04', '', 'adminavilla', '2020-05-02 21:37:08', 'adminputra'),
	(2, 'corrective maintenance', 'service_5ead8628cfcb0.png', 'corrective maintenance', 'Corrective Maintenance', '<p><span class="fontstyle0">Identify problem and repair failure generator set to be able to operate as soon as possible</span> </p>', 0, '2020-05-02 21:39:36', '', 'adminputra', NULL, NULL),
	(3, 'maintenance genset', 'service_5f0c003631cdd.png', 'maintenance genset dengan garansi 5th', 'test service 1', '<p>dasdjasdjas</p>', 0, '2020-07-13 13:33:26', 'test-service-1', 'adminweb', NULL, NULL);
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
