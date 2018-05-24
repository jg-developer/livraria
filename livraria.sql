/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.31-MariaDB : Database - livraria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`livraria` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `livraria`;

/*Table structure for table `autor` */

DROP TABLE IF EXISTS `autor`;

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nacionalidade` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `autor` */

insert  into `autor`(`id_autor`,`nome`,`nacionalidade`) values (1,'Stevan','Brasileiro'),(2,'Charles','Canadense');

/*Table structure for table `autor_livro` */

DROP TABLE IF EXISTS `autor_livro`;

CREATE TABLE `autor_livro` (
  `id_autor_livro` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_autor_livro`),
  KEY `id_autor` (`id_autor`),
  KEY `id_livro` (`id_livro`),
  CONSTRAINT `autor_livro_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`),
  CONSTRAINT `autor_livro_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `autor_livro` */

insert  into `autor_livro`(`id_autor_livro`,`id_autor`,`id_livro`) values (1,1,1),(2,2,2),(3,1,2),(4,1,5),(5,2,5),(6,1,6),(7,2,6),(8,1,7),(9,2,7),(10,1,8),(11,2,8),(12,1,9),(13,2,9),(14,1,10),(15,2,10);

/*Table structure for table `editora` */

DROP TABLE IF EXISTS `editora`;

CREATE TABLE `editora` (
  `id_editora` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_editora`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `editora` */

insert  into `editora`(`id_editora`,`nome`) values (1,'Polar'),(2,'Amazon');

/*Table structure for table `genero` */

DROP TABLE IF EXISTS `genero`;

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `genero` */

insert  into `genero`(`id_genero`,`descricao`) values (1,'Ação'),(2,'Comédia'),(3,'Aventura'),(4,'Drama'),(5,'Teste'),(6,'Teste2');

/*Table structure for table `livro` */

DROP TABLE IF EXISTS `livro`;

CREATE TABLE `livro` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `id_editora` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_livro`),
  KEY `id_genero` (`id_genero`),
  KEY `id_editora` (`id_editora`),
  CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  CONSTRAINT `livro_ibfk_2` FOREIGN KEY (`id_editora`) REFERENCES `editora` (`id_editora`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `livro` */

insert  into `livro`(`id_livro`,`titulo`,`id_genero`,`id_editora`) values (1,'Harry Potter',1,1),(2,'Senhor dos Anéis',2,1),(3,'Guardiões da Galáxia',3,1),(4,'Teste',1,1),(5,'Teste',1,1),(6,' TESTE3',1,1),(7,'Teste',1,1),(8,'Teste',1,1),(9,'Teste',1,1),(10,'Teste',1,1);

/*Table structure for table `vw_livros` */

DROP TABLE IF EXISTS `vw_livros`;

/*!50001 DROP VIEW IF EXISTS `vw_livros` */;
/*!50001 DROP TABLE IF EXISTS `vw_livros` */;

/*!50001 CREATE TABLE  `vw_livros`(
 `id_livro` int(11) ,
 `titulo` varchar(30) ,
 `id_genero` int(11) ,
 `genero` varchar(30) ,
 `id_editora` int(11) ,
 `editora` varchar(30) 
)*/;

/*View structure for view vw_livros */

/*!50001 DROP TABLE IF EXISTS `vw_livros` */;
/*!50001 DROP VIEW IF EXISTS `vw_livros` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_livros` AS select `l`.`id_livro` AS `id_livro`,`l`.`titulo` AS `titulo`,`l`.`id_genero` AS `id_genero`,`g`.`descricao` AS `genero`,`l`.`id_editora` AS `id_editora`,`e`.`nome` AS `editora` from ((`livro` `l` join `genero` `g` on((`l`.`id_genero` = `g`.`id_genero`))) join `editora` `e` on((`l`.`id_editora` = `e`.`id_editora`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
