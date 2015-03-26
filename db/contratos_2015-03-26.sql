/*
Navicat MySQL Data Transfer

Source Server         : Dino
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : contratos

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-03-26 15:37:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `area`
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `estatus_did` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area_estatus` (`estatus_did`),
  CONSTRAINT `area_estatus` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('1', 'Juridico Interno', '1');
INSERT INTO `area` VALUES ('2', 'Juridico Externo', '1');
INSERT INTO `area` VALUES ('3', 'Tesorería', '1');
INSERT INTO `area` VALUES ('4', 'Area Generadora', '1');
INSERT INTO `area` VALUES ('5', 'Tesorería', '1');
INSERT INTO `area` VALUES ('6', 'Presidencia', '1');
INSERT INTO `area` VALUES ('7', 'Tesorería', '1');
INSERT INTO `area` VALUES ('8', 'Síndico Procurador', '1');
INSERT INTO `area` VALUES ('9', 'Tesorería', '1');
INSERT INTO `area` VALUES ('10', 'Proveedor', '1');
INSERT INTO `area` VALUES ('11', 'Terminado', '1');

-- ----------------------------
-- Table structure for `areageneradora`
-- ----------------------------
DROP TABLE IF EXISTS `areageneradora`;
CREATE TABLE `areageneradora` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `responsable` varchar(50) NOT NULL,
  `estatus_did` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `areageneradora_estatus` (`estatus_did`),
  CONSTRAINT `areageneradora_estatus` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of areageneradora
-- ----------------------------
INSERT INTO `areageneradora` VALUES ('1', 'Desarrollo Tecnologico', 'Zama', '1');

-- ----------------------------
-- Table structure for `doctoenproceso`
-- ----------------------------
DROP TABLE IF EXISTS `doctoenproceso`;
CREATE TABLE `doctoenproceso` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `documento_did` int(11) unsigned NOT NULL,
  `fecha_ft` datetime NOT NULL,
  `estatus_did` int(11) unsigned NOT NULL,
  `area_did` int(11) unsigned NOT NULL,
  `tiempo` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `doctosenproceso_documento` (`documento_did`),
  KEY `doctosentproces_estatus` (`estatus_did`),
  KEY `doctosentproces_area` (`area_did`),
  CONSTRAINT `doctosenproceso_documento` FOREIGN KEY (`documento_did`) REFERENCES `documento` (`id`),
  CONSTRAINT `doctosentproces_area` FOREIGN KEY (`area_did`) REFERENCES `area` (`id`),
  CONSTRAINT `doctosentproces_estatus` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of doctoenproceso
-- ----------------------------

-- ----------------------------
-- Table structure for `documento`
-- ----------------------------
DROP TABLE IF EXISTS `documento`;
CREATE TABLE `documento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_f` datetime NOT NULL,
  `proveedor` varchar(30) NOT NULL,
  `areaGeneradora_did` int(11) unsigned NOT NULL,
  `estatus_did` int(11) unsigned NOT NULL,
  `tiempoValidez` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `documento_aregeneradora` (`areaGeneradora_did`),
  KEY `documento_estatus` (`estatus_did`),
  CONSTRAINT `documento_aregeneradora` FOREIGN KEY (`areaGeneradora_did`) REFERENCES `areageneradora` (`id`),
  CONSTRAINT `documento_estatus` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of documento
-- ----------------------------

-- ----------------------------
-- Table structure for `estatus`
-- ----------------------------
DROP TABLE IF EXISTS `estatus`;
CREATE TABLE `estatus` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT '',
  `tipo` varchar(100) DEFAULT NULL,
  `fechaCreacion_f` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estatus
-- ----------------------------
INSERT INTO `estatus` VALUES ('1', 'Activo', 'Pendiente', '2014-01-02 00:48:50');
INSERT INTO `estatus` VALUES ('2', 'Inactivo', 'Realizada', '2014-01-02 00:48:53');
INSERT INTO `estatus` VALUES ('3', '', 'Urgente', '2014-08-18 11:22:19');

-- ----------------------------
-- Table structure for `tipousuario`
-- ----------------------------
DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE `tipousuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `estatus_did` int(11) unsigned NOT NULL,
  `fechaCreacion_f` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `tipoUsuario_estatus` (`estatus_did`),
  CONSTRAINT `tipousuario_ibfk_1` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipousuario
-- ----------------------------
INSERT INTO `tipousuario` VALUES ('1', 'Administrador', '1', '2014-01-02 02:14:40');
INSERT INTO `tipousuario` VALUES ('2', 'Guest', '1', '2014-01-02 02:14:54');
INSERT INTO `tipousuario` VALUES ('3', 'Proyecto', '1', '2014-01-02 02:15:03');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL DEFAULT '',
  `nombre` varchar(100) DEFAULT NULL,
  `contrasena` varchar(200) NOT NULL DEFAULT '',
  `foto` varchar(200) DEFAULT NULL,
  `tipoUsuario_did` int(11) unsigned NOT NULL,
  `estatus_did` int(11) unsigned NOT NULL,
  `fechaCreacion_f` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `usuario_estatus` (`estatus_did`),
  KEY `usuario_tipoUsuario` (`tipoUsuario_did`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`estatus_did`) REFERENCES `estatus` (`id`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`tipoUsuario_did`) REFERENCES `tipousuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'Guest', 'Invitado', '123', null, '2', '1', '2014-01-02 02:18:04');
INSERT INTO `usuario` VALUES ('11', 'edgar', 'Edgar Kelly', '123', null, '1', '1', '2014-02-12 09:37:41');
INSERT INTO `usuario` VALUES ('12', 'ycastro', 'Yoli Castro', '123', '20140815_2140_20140722_1425__Captura_de_pantalla_2014-07-02_a_la(s)_22.56.54.png', '1', '1', '2014-05-20 19:45:23');
INSERT INTO `usuario` VALUES ('16', 'otro', 'Otro', '123', null, '3', '2', '2014-05-30 04:41:39');
INSERT INTO `usuario` VALUES ('17', 'zama', 'Roberto Zamarripa', '123', null, '1', '1', '2014-06-04 06:12:01');

-- ----------------------------
-- Table structure for `yiilog`
-- ----------------------------
DROP TABLE IF EXISTS `yiilog`;
CREATE TABLE `yiilog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(128) DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `logtime` int(11) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yiilog
-- ----------------------------
