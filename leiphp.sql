/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : leiphp

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-08 19:39:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `ctime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', 'php', '1559750257');
INSERT INTO `article` VALUES ('2', 'mysql', '1559750457');
INSERT INTO `article` VALUES ('3', 'java', '1559833565');
INSERT INTO `article` VALUES ('5', 'pip', '1559834646');

-- ----------------------------
-- Table structure for guestbook
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '',
  `content` text,
  `createtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------
INSERT INTO `guestbook` VALUES ('3', '第三个留言', '第三个留言第三个留言第三个留言第三个留言第三个留言', '1559993900');
INSERT INTO `guestbook` VALUES ('2', '再来留个言', '再来留个言再来留个言再来留个言再来留个言再来留个言再来留个言', '1559992656');
INSERT INTO `guestbook` VALUES ('4', '第四个留言', '第四个留言第四个留言第四个留言第四个留言第四个留言第四个留言第四个留言第四个留言第四个留言第四个留言', '1559993913');
INSERT INTO `guestbook` VALUES ('5', '第五个留言', '第五个留言第五个留言第五个留言第五个留言第五个留言第五个留言', '1559993928');
