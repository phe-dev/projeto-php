/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - prova2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prova2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;

USE `prova2`;

/*Table structure for table `paises` */

DROP TABLE IF EXISTS `paises`;

CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(60) DEFAULT NULL,
  `idioma` varchar(60) DEFAULT NULL,
  `populacao` int(60) DEFAULT NULL,
  `religiao` varchar(60) DEFAULT NULL,
  `espaco_geografico` int(60) DEFAULT NULL,
  `id_regiao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `paises` */

insert  into `paises`(`id`,`pais`,`idioma`,`populacao`,`religiao`,`espaco_geografico`,`id_regiao`) values 
(1,'Brasil','Português',21300000,'Cristã Católica ',8515767,1),
(2,'China','Mandarim',14000000,'Budismo, Taoísmo e Confucionismo',9596960,2),
(3,'Inglaterra','ingles',58000000,' Cristianismo',130279,3),
(4,'Índia','Hindi, Inglês ',1300000000,'Hinduísmo, Islamismo, Sikhismo, Cristianismo',3287590,2),
(5,'Estados Unidos','Inglês',14600000,'Cristianismo, Judaísmo, Islamismo',9631418,1),
(6,'Rússia','Russo',146000000,'Cristianismo Ortodoxo, Islamismo, Budismo',17098242,2);

/*Table structure for table `regioes` */

DROP TABLE IF EXISTS `regioes`;

CREATE TABLE `regioes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_regiao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `regioes` */

insert  into `regioes`(`id`,`nome_regiao`) values 
(1,'Américas'),
(2,'Ásia'),
(3,'Europa'),
(4,'África'),
(5,'Oceania'),
(6,'Antártica');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
