# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     minisistemaabm-session
# Server version:               5.1.53-community-log
# Server OS:                    Win64
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    2012-08-16 18:01:13
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'minisistemaabm-session'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "minisistemaabm-session" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "minisistemaabm-session";


#
# Table structure for table 'departamentos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "departamentos" (
  "idDTO" int(5) unsigned NOT NULL AUTO_INCREMENT,
  "nomDTO" varchar(30) NOT NULL,
  PRIMARY KEY ("idDTO"),
  UNIQUE KEY "idDTO" ("idDTO")
) AUTO_INCREMENT=10;



#
# Dumping data for table 'departamentos'
#

LOCK TABLES "departamentos" WRITE;
/*!40000 ALTER TABLE "departamentos" DISABLE KEYS;*/
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('1','Montevideo');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('2','Canelones');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('3','Maldonado');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('4','Colonia');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('5','Rocha');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('6','Salto');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('7','Paysandú');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('8','Durazno');
INSERT INTO "departamentos" ("idDTO", "nomDTO") VALUES
	('9','Cerro Largo');
/*!40000 ALTER TABLE "departamentos" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'personas'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "personas" (
  "idPERS" int(5) unsigned NOT NULL AUTO_INCREMENT,
  "nomPERS" varchar(30) NOT NULL,
  "dirPERS" varchar(50) DEFAULT NULL,
  "telPERS" varchar(12) DEFAULT NULL,
  "dtoPERS" int(5) NOT NULL,
  PRIMARY KEY ("idPERS"),
  UNIQUE KEY "idPERS" ("idPERS")
) AUTO_INCREMENT=11;



#
# Dumping data for table 'personas'
#

LOCK TABLES "personas" WRITE;
/*!40000 ALTER TABLE "personas" DISABLE KEYS;*/
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('1','Ana Clara','Canal 12','0992011',1);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('2','Carlos','Av. Italia 7888','789909',2);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('3','Verónica','Mamboretá 888','67899087',2);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('4','Santiago','Av. Park 8878','89000890',1);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('5','Pedro','Salta 878','883830932',3);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('6','Luis','Yi 1234','290938979',4);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('7','Pablo','San josé 777','77899087',1);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('8','Carlos','Silicon Valey 345','8978675',2);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('9','Claudio','Silicon Valey 345','8978675',10);
INSERT INTO "personas" ("idPERS", "nomPERS", "dirPERS", "telPERS", "dtoPERS") VALUES
	('10','Mafalda','Av. San Juan 88988','898988888888',9);
/*!40000 ALTER TABLE "personas" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'usuarios'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "usuarios" (
  "idUSER" int(11) NOT NULL AUTO_INCREMENT,
  "nomUSER" varchar(30) DEFAULT NULL,
  "usrUSER" varchar(30) DEFAULT NULL,
  "pssUSER" varchar(30) DEFAULT NULL,
  PRIMARY KEY ("idUSER")
) AUTO_INCREMENT=2;



#
# Dumping data for table 'usuarios'
#

LOCK TABLES "usuarios" WRITE;
/*!40000 ALTER TABLE "usuarios" DISABLE KEYS;*/
INSERT INTO "usuarios" ("idUSER", "nomUSER", "usrUSER", "pssUSER") VALUES
	(1,'Don Peteko','peteko','soy yo');
/*!40000 ALTER TABLE "usuarios" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
