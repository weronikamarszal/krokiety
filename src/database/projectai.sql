/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `devices` */

DROP TABLE IF EXISTS `devices`;

CREATE TABLE `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchaseDate` date NOT NULL,
  `deviceName` text NOT NULL,
  `inventoryNumber` int(11) NOT NULL,
  `serialNumber` int(11) NOT NULL,
  `notes` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `netValue` float NOT NULL,
  `inPossessionOf` int(11) DEFAULT NULL,
  `purchaseInvNum` int(11) NOT NULL,
  `warrExpiryDate` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_documents_1` (`inPossessionOf`),
  KEY `FK_documents_2` (`purchaseInvNum`),
  CONSTRAINT `FK_documents_1` FOREIGN KEY (`inPossessionOf`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_documents_2` FOREIGN KEY (`purchaseInvNum`) REFERENCES `purchaseinvoices` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `devices` */

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documentDate` date NOT NULL,
  `notes` text DEFAULT NULL,
  `pagesNumber` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=dec8;

/*Data for the table `documents` */

/*Table structure for table `licenses` */

DROP TABLE IF EXISTS `licenses`;

CREATE TABLE `licenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchaseInvoiceId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `serialNumber` varchar(255) NOT NULL,
  `inventoryNumber` varchar(255) NOT NULL,
  `purchaseDate` date NOT NULL,
  `licenseValidTill` date DEFAULT NULL,
  `technicalSupportValid_till` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `note` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `purchaseInvoiceId` (`purchaseInvoiceId`),
  CONSTRAINT `licenses_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  CONSTRAINT `licenses_ibfk_2` FOREIGN KEY (`purchaseInvoiceId`) REFERENCES `purchaseinvoices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `licenses` */

/*Table structure for table `purchaseinvoices` */

DROP TABLE IF EXISTS `purchaseinvoices`;

CREATE TABLE `purchaseinvoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceNumber` varchar(255) NOT NULL,
  `grossAmount` float NOT NULL,
  `VATTaxAmount` float NOT NULL,
  `netAmount` float NOT NULL,
  `contractorsName` varchar(255) NOT NULL,
  `contractorsVatId` varchar(255) NOT NULL,
  `netAmountInCurrency` float NOT NULL,
  `currencyName` varchar(128) NOT NULL,
  `invoiceDate` date NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `purchaseinvoices` */

/*Table structure for table `salesinvoices` */

DROP TABLE IF EXISTS `salesinvoices`;

CREATE TABLE `salesinvoices` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `invoiceNumber` varchar(255) NOT NULL,
  `grossAmount` float NOT NULL,
  `VATTaxAmount` float NOT NULL,
  `netAmount` float NOT NULL,
  `contractorsName` varchar(128) NOT NULL,
  `contractorsVatId` varchar(255) NOT NULL,
  `netAmountInCurrency` float NOT NULL,
  `currencyName` varchar(128) NOT NULL,
  `invoiceDate` date NOT NULL,
  `path` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `salesinvoices` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(128) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `phoneNumber` varchar(128) DEFAULT NULL,
  `role` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`login`,`firstName`,`surname`,`password`,`phoneNumber`,`role`,`email`) values 
(15,'jkowalski1','Jan','Kowalski','123','123-456-789','owner','jkowalski2@company.com'),
(16,'amarcinowski2','Andrzej','Marcinowski','123','124-568-891','owner','amarcinowski2@company.com'),
(17,'mkalinowska3','Małgorzata','Kalinowska','123','356-632-563','auditor','mkalinowska3@audits.com'),
(18,'zcerber4','Zygmunt','Cerber','123','456-432-531','employee','zcerber4@company.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
