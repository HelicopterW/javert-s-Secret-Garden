# Host: localhost  (Version: 5.5.54)
# Date: 2021-12-09 22:24:19
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `now` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (5,'000','000','2021-11-28 16:51:55'),(6,'123','123','2021-11-28 17:51:36'),(8,'wtb','1001',NULL),(9,'Test','test',NULL),(10,'123','123456',NULL),(11,'123','123',NULL);
