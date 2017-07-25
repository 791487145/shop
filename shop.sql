/*
Navicat MySQL Data Transfer

Source Server         : 1233
Source Server Version : 50554
Source Host           : 192.168.48.128:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2017-07-25 22:02:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menu_base`
-- ----------------------------
DROP TABLE IF EXISTS `menu_base`;
CREATE TABLE `menu_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(255) NOT NULL COMMENT '图标',
  `path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1：删除；1：正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu_base
-- ----------------------------
INSERT INTO `menu_base` VALUES ('1', '0', '&#xe62d;', '', '用户管理', '', '10', '1');
INSERT INTO `menu_base` VALUES ('2', '1', '', 'user/menu/list', '菜单管理', '', '11', '1');
INSERT INTO `menu_base` VALUES ('4', '1', '', '', '权限管理', '功能', '12', '1');
INSERT INTO `menu_base` VALUES ('5', '1', '', '', '角色管理', '角色', '13', '1');

-- ----------------------------
-- Table structure for `menu_power`
-- ----------------------------
DROP TABLE IF EXISTS `menu_power`;
CREATE TABLE `menu_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu_power
-- ----------------------------

-- ----------------------------
-- Table structure for `power`
-- ----------------------------
DROP TABLE IF EXISTS `power`;
CREATE TABLE `power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1:删除；1：正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of power
-- ----------------------------

-- ----------------------------
-- Table structure for `role`
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '-1：删除；1：正常',
  `display_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role
-- ----------------------------

-- ----------------------------
-- Table structure for `role_menu`
-- ----------------------------
DROP TABLE IF EXISTS `role_menu`;
CREATE TABLE `role_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of role_menu
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '姓名',
  `rid` int(11) NOT NULL COMMENT '角色ID',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0:禁用；1；正常；-1删除',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:boy;1;girl',
  `mobile` varchar(255) NOT NULL,
  `old` int(11) NOT NULL COMMENT '年龄',
  `email` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL COMMENT '排序',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
