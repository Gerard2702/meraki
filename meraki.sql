-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for miraki
CREATE DATABASE IF NOT EXISTS `miraki` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `miraki`;

-- Dumping structure for table miraki.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.categorias: ~2 rows (approximately)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nombre`) VALUES
	(1, 'ejemplo'),
	(2, 'categoria2');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Dumping structure for table miraki.entradas
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `texto` longtext,
  `img` varchar(50) DEFAULT NULL,
  `categoria` int(11) NOT NULL DEFAULT '0',
  `fecha-creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_entradas_categorias` (`categoria`),
  CONSTRAINT `FK_entradas_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.entradas: ~7 rows (approximately)
/*!40000 ALTER TABLE `entradas` DISABLE KEYS */;
INSERT INTO `entradas` (`id`, `titulo`, `descripcion`, `texto`, `img`, `categoria`, `fecha-creacion`) VALUES
	(3, 'El despertar de la furia 22', 'esta es la entrada 2222', '<p>esta es la entada 1 ndansdnasdasdasd</p>\r\n\r\n<p style="text-align:center"><strong>Algo es algo</strong></p>\r\n\r\n<p style="text-align:center"><strong>asdadsasd</strong></p>\r\n\r\n<p>asda</p>\r\n\r\n<p>sd</p>\r\n\r\n<p>&nbsp;</p>\r\n', '003.jpg', 1, '2017-09-23 17:44:32'),
	(4, 'entrada 2', 'asdasdasdasdasdad', 'sdasdasdsd', '004.jpg', 1, '2017-09-23 17:51:52'),
	(5, 'Working 3', 'easdad ajsdjasdj', 'jasjjdjasd asjdjasdja djasjdajsd ajsdjasjdajsdj', '002.jpg', 1, '2017-09-23 23:28:24'),
	(7, 'hshshsh', 'shdhshd', '<p>dasdhahsd</p>\r\n\r\n<p>asdasda</p>\r\n\r\n<p>asdasdasdd</p>\r\n\r\n<p><img alt="" src="https://cdn-pro.elsalvador.com/wp-content/uploads/2017/01/30182002/1476896384419.jpg" style="height:576px; width:1024px" /></p>\r\n', 'promo.jpg', 2, '2017-09-24 12:15:00'),
	(8, 'dsd', 'asdasd', '<p>asdasdasdd</p>\r\n', '010.jpg', 2, '2017-09-26 17:49:31'),
	(9, 'Nueva entrada 20', 'asdasdasdasd ajhashd hshdahsdh hhsdhash ashdhasdh ashdhshd ahahsdhasdh ahsdh', '<p>asdasdasdasd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>das</p>\r\n\r\n<p>da</p>\r\n\r\n<p>sd</p>\r\n\r\n<p>as</p>\r\n\r\n<p>da</p>\r\n\r\n<p>d</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asdasdasdasd</p>\r\n\r\n<p>asdasdasd</p>\r\n', 'home3.jpg', 1, '2017-09-26 19:48:36'),
	(10, 'Nueva Entrada de ejemplo', 'asdha hashdahsdha ahsdhashah ahdahsdhasd ahsdhashdahd ahsdhasd', '<p>asdasdasdasd asdhagsdgasd agsgdagsgagd sgdag</p>\r\n\r\n<p>asdasduajsd a</p>\r\n\r\n<p>asdjasdjasd ajdjas dajsdjasd asjdja dandajsad</p>\r\n', 'home10.jpg', 2, '2017-09-26 19:49:10');
/*!40000 ALTER TABLE `entradas` ENABLE KEYS */;

-- Dumping structure for table miraki.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.galeria: ~9 rows (approximately)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `titulo`, `descripcion`, `imagen`, `categoria`) VALUES
	(1, 'turismo', 'asdasdasdasda', 'turismoA.jpg', 'lugares_turisticos'),
	(2, 'turismo2', 'nueva imagen', 'turismoC.jpg', 'lugares_turisticos'),
	(3, 'innovacion', 'nueva imagen', 'InnovacionD.jpg', ' tecnologia innovacion'),
	(4, 'restaurante 1', 'nueva imagen', 'restauranteA.jpg', ' restaurantes'),
	(5, 'restaurante 2', 'nueva imagen', 'restauranteB.jpg', ' restaurantes'),
	(6, 'emprendedor', 'nueva imagen', 'emprendedorC.jpg', ' emprendedurismo entrevistas'),
	(7, 'entrevista', 'ssasda', 'entrevistaA.jpg', ' entrevistas'),
	(8, 'tecnogia', 'nueva imagen', 'tecnologiaC.jpg', ' tecnologia innovacion'),
	(9, 'Algo', 'Algo3', 'landscapes-dark-houses-bridges-fantasy-art-artwork-waterfalls-high-resolution.jpg', 'lugares_turisticos innovacion');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Dumping structure for table miraki.revista
CREATE TABLE IF NOT EXISTS `revista` (
  `idEdicion` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `pag22` varchar(50) DEFAULT NULL,
  `portada` varchar(50) DEFAULT NULL,
  `pag1` varchar(50) DEFAULT NULL,
  `pag2` varchar(50) DEFAULT NULL,
  `pag3` varchar(50) DEFAULT NULL,
  `pag4` varchar(50) DEFAULT NULL,
  `pag5` varchar(50) DEFAULT NULL,
  `pag6` varchar(50) DEFAULT NULL,
  `pag7` varchar(50) DEFAULT NULL,
  `pag8` varchar(50) DEFAULT NULL,
  `pag9` varchar(50) DEFAULT NULL,
  `pag10` varchar(50) DEFAULT NULL,
  `pag11` varchar(50) DEFAULT NULL,
  `pag12` varchar(50) DEFAULT NULL,
  `pag13` varchar(50) DEFAULT NULL,
  `pag14` varchar(50) DEFAULT NULL,
  `pag15` varchar(50) DEFAULT NULL,
  `pag16` varchar(50) DEFAULT NULL,
  `pag17` varchar(50) DEFAULT NULL,
  `pag18` varchar(50) DEFAULT NULL,
  `pag19` varchar(50) DEFAULT NULL,
  `pag20` varchar(50) DEFAULT NULL,
  `pag21` varchar(50) DEFAULT NULL,
  `contraportada` varchar(50) DEFAULT NULL,
  `fechadecreacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idEdicion`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.revista: 0 rows
/*!40000 ALTER TABLE `revista` DISABLE KEYS */;
/*!40000 ALTER TABLE `revista` ENABLE KEYS */;

-- Dumping structure for table miraki.tipo_user
CREATE TABLE IF NOT EXISTS `tipo_user` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.tipo_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tipo_user` DISABLE KEYS */;
INSERT INTO `tipo_user` (`id_tipo`, `nombre`) VALUES
	(1, 'admin'),
	(2, 'suscriptores');
/*!40000 ALTER TABLE `tipo_user` ENABLE KEYS */;

-- Dumping structure for table miraki.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forgotpasswordid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_tipo_user` (`id_tipo`),
  CONSTRAINT `FK_users_tipo_user` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_user` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `id_tipo`, `nombre`, `email`, `pass`, `created`, `updated`, `forgotpasswordid`) VALUES
	(19, 2, 'Gerard Orellana', 'gerard_gt2009@hotmail.com', NULL, '2017-09-16 03:18:16', '2017-09-16 03:18:16', NULL),
	(20, 2, 'Gerard Orellana', 'gerard.gt2015@gmail.com', NULL, '2017-09-17 01:03:16', '2017-09-17 01:03:16', NULL),
	(22, 2, 'Gerardo orellana', 'gerard.gt2009@gmail.com', NULL, '2017-09-17 01:12:54', '2017-09-17 01:12:54', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table miraki.users_social
CREATE TABLE IF NOT EXISTS `users_social` (
  `id_user_social` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `social_id` varchar(250) NOT NULL,
  `service` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user_social`),
  KEY `FK1_id_user` (`id_user`),
  CONSTRAINT `FK1_id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table miraki.users_social: ~4 rows (approximately)
/*!40000 ALTER TABLE `users_social` DISABLE KEYS */;
INSERT INTO `users_social` (`id_user_social`, `id_user`, `social_id`, `service`) VALUES
	(6, 19, '10203793667718013', 'facebook'),
	(9, 19, '104325539112408929703', 's'),
	(10, 20, '599619043762258', 'facebook'),
	(11, 20, '102026507868483013764', 'google'),
	(12, 22, '104325539112408929703', 'google');
/*!40000 ALTER TABLE `users_social` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
