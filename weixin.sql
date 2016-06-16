/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : weixin

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-16 16:25:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for meeting
-- ----------------------------
DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `meeting_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `meeting_title` varchar(255) NOT NULL,
  `meeting_content` text NOT NULL,
  `meeting_start_time` int(11) NOT NULL,
  `meeting_end_time` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `remind` int(11) NOT NULL,
  `shake_sign` tinyint(4) NOT NULL,
  `see_join` tinyint(4) DEFAULT '0',
  `adjunct` varchar(255) DEFAULT NULL,
  `adjunct_path` varchar(255) DEFAULT NULL,
  `add_time` int(11) DEFAULT NULL,
  `meeting_status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`meeting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meeting
-- ----------------------------

-- ----------------------------
-- Table structure for meeting_img
-- ----------------------------
DROP TABLE IF EXISTS `meeting_img`;
CREATE TABLE `meeting_img` (
  `img_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meeting_img
-- ----------------------------

-- ----------------------------
-- Table structure for meeting_room
-- ----------------------------
DROP TABLE IF EXISTS `meeting_room`;
CREATE TABLE `meeting_room` (
  `room_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_name` varchar(255) NOT NULL,
  `room_address` varchar(255) NOT NULL,
  `room_status` tinyint(4) NOT NULL,
  `facility` text NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of meeting_room
-- ----------------------------

-- ----------------------------
-- Table structure for sponsor_meeting
-- ----------------------------
DROP TABLE IF EXISTS `sponsor_meeting`;
CREATE TABLE `sponsor_meeting` (
  `sum_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`sum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sponsor_meeting
-- ----------------------------

-- ----------------------------
-- Table structure for staff
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `staff_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `staff_name` char(255) NOT NULL,
  `staff_depart` char(255) NOT NULL,
  `account_number` char(255) NOT NULL,
  `job` char(255) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` char(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of staff
-- ----------------------------

-- ----------------------------
-- Table structure for user_meeting
-- ----------------------------
DROP TABLE IF EXISTS `user_meeting`;
CREATE TABLE `user_meeting` (
  `um_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `um_status` tinyint(4) NOT NULL,
  `is_sign` tinyint(4) NOT NULL,
  `append_msg` varchar(255) NOT NULL,
  `read_time` int(11) NOT NULL,
  PRIMARY KEY (`um_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_meeting
-- ----------------------------
