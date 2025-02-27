/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - prova2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `paises` */

CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(60) DEFAULT NULL,
  `idioma` varchar(60) DEFAULT NULL,
  `populacao` int(60) DEFAULT NULL,
  `religiao` varchar(60) DEFAULT NULL,
  `espaco_geografico` int(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

/*Data for the table `paises` */

insert  into `paises`(`id`,`pais`,`idioma`,`populacao`,`religiao`,`espaco_geografico`) values (1,'Japão','japonês',125300000,'xintoismo',377973);
insert  into `paises`(`id`,`pais`,`idioma`,`populacao`,`religiao`,`espaco_geografico`) values (2,'Mônaco','francês',36686,'cristianismo',2);
insert  into `paises`(`id`,`pais`,`idioma`,`populacao`,`religiao`,`espaco_geografico`) values (3,'Vaticano','ítaliano',990,'católicismo',1);
insert  into `paises`(`id`,`pais`,`idioma`,`populacao`,`religiao`,`espaco_geografico`) values (4,'Inglaterra','inglês',55980000,'anglicanismo',130279);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
