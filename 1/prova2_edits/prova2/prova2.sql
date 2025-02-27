/*
SQLyog Community
MySQL - 10.4.28-MariaDB : Database - prova2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `paises` */

/*Table structure for table `regioes` */

DROP TABLE IF EXISTS `regioes`;

CREATE TABLE `regioes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_regiao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `regioes` */

insert  into `regioes`(`id`,`nome_regiao`) values (1,'América do Sul');
insert  into `regioes`(`id`,`nome_regiao`) values (2,'Ásia');
insert  into `regioes`(`id`,`nome_regiao`) values (3,'Europa');
insert  into `regioes`(`id`,`nome_regiao`) values (4,'África');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
