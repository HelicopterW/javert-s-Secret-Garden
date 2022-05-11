# Host: localhost  (Version: 5.5.54)
# Date: 2021-12-09 22:24:49
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "news"
#

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻编号',
  `title` varchar(60) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `author` text NOT NULL COMMENT '作者',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "news"
#

INSERT INTO `news` VALUES (4,'对于“台独”问题应当如何看待？','.......','xxx','2021-11-29 20:46:45'),(5,'高校放假时间安排','......','J.D.swift','2021-12-05 22:00:54'),(10,'kkkk','kkkkk','hh','2021-12-07 17:02:53');
