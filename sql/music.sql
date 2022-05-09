/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : music

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 01/07/2021 10:22:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for album
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album`  (
  `Aid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Aname` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Ainfo` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Adate` date NULL DEFAULT NULL,
  `adress` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Aid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('A001', '欧美', '好听的欧美歌曲', '2021-01-01', 'img/tj2.png');
INSERT INTO `album` VALUES ('A002', 'BGM', '循环一天的BGM', '2021-02-01', 'img/tj6.jpg');
INSERT INTO `album` VALUES ('A003', '华语', '好听的华语歌曲', '2021-03-01', 'img/tj4.png');
INSERT INTO `album` VALUES ('A004', '日语', '熟悉的动漫歌曲', '2020-04-01', 'img/tj3.png');
INSERT INTO `album` VALUES ('A005', 'game', '热血的游戏歌曲', '2021-05-01', 'img/tj1.jpg');
INSERT INTO `album` VALUES ('A006', '金曲', '华语金曲', '2021-06-01', 'img/tj5.jpg');
INSERT INTO `album` VALUES ('A007', '老歌', '经典老歌', '2021-07-01', 'img/tj7.jpg');
INSERT INTO `album` VALUES ('A008', '单曲', '精品单曲', '2021-08-01', 'img/tj8.jpg');

-- ----------------------------
-- Table structure for collect
-- ----------------------------
DROP TABLE IF EXISTS `collect`;
CREATE TABLE `collect`  (
  `Sid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Uid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Ctime` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`Sid`, `Uid`) USING BTREE,
  INDEX `Uid`(`Uid`) USING BTREE,
  CONSTRAINT `collect_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `songs` (`Sid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `collect_ibfk_2` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of collect
-- ----------------------------
INSERT INTO `collect` VALUES ('S001', 'U001', NULL);
INSERT INTO `collect` VALUES ('S001', 'U002', '0000-00-00 00:00:00');
INSERT INTO `collect` VALUES ('S002', 'U003', '0000-00-00 00:00:00');
INSERT INTO `collect` VALUES ('S003', 'U002', '0000-00-00 00:00:00');
INSERT INTO `collect` VALUES ('S005', 'U001', NULL);
INSERT INTO `collect` VALUES ('S006', 'U001', NULL);

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `Uid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Sid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Cdate` datetime(0) NULL DEFAULT NULL,
  `Cinfo` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Uid`, `Sid`) USING BTREE,
  INDEX `Sid`(`Sid`) USING BTREE,
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`Uid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`Sid`) REFERENCES `songs` (`Sid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('U001', 'S001', '0000-00-00 00:00:00', '好听！');
INSERT INTO `comment` VALUES ('U001', 'S002', '0000-00-00 00:00:00', '巨好听！');
INSERT INTO `comment` VALUES ('U002', 'S003', '0000-00-00 00:00:00', '感觉来了');
INSERT INTO `comment` VALUES ('U003', 'S001', '0000-00-00 00:00:00', '就是这个感觉');

-- ----------------------------
-- Table structure for songs
-- ----------------------------
DROP TABLE IF EXISTS `songs`;
CREATE TABLE `songs`  (
  `Sid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Sname` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `singer` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Slink` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Stime` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Ssort` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Aid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `iadress` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Sid`) USING BTREE,
  INDEX `Aid`(`Aid`) USING BTREE,
  CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`Aid`) REFERENCES `album` (`Aid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of songs
-- ----------------------------
INSERT INTO `songs` VALUES ('S001', 'Legends Never die', 'Against the Current', 'https://music.163.com/outchain/player?type=2&id=506196018&auto=0&height=66', '3:55', '欧美', 'A001', 'img/tj2.jpg');
INSERT INTO `songs` VALUES ('S002', 'It\'s My Life', 'Bon Jovi', 'https://music.163.com/outchain/player?type=2&id=27318021&auto=0&height=66', '4:02', '欧美', 'A001', 'img/tj2.jpg');
INSERT INTO `songs` VALUES ('S003', '打上花火', 'DAOKO,米津玄師', 'https://music.163.com/outchain/player?type=2&id=496869422&auto=0&height=66', '4:49', '民族风', 'A004', 'img/tj3.jpg');
INSERT INTO `songs` VALUES ('S004', '相思', '毛阿敏', 'https://music.163.com/outchain/player?type=2&id=276294&auto=0&height=66', '3:01', '流行乐', 'A003', 'img/tj9.jpg');
INSERT INTO `songs` VALUES ('S005', '小孩', '薛之谦', 'https://music.163.com/outchain/player?type=2&id=35288183&auto=0&height=66', '5:21', NULL, 'A003', 'img/tj10.jpg');
INSERT INTO `songs` VALUES ('S006', 'Brainiac Maniac', 'Laura Shigihara', 'https://music.163.com/outchain/player?type=2&id=3019814&auto=0&height=66', '1:51', NULL, 'A005', 'img/tj1.jpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `Uid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Uname` char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Upassword` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Usex` char(2) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `Udate` datetime(0) NULL DEFAULT NULL,
  `Uleve` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Uid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('U001', '雷欧', 'a123', '男', '0000-00-00 00:00:00', 3);
INSERT INTO `users` VALUES ('U002', '迪迦', 'a111', '男', '0000-00-00 00:00:00', 5);
INSERT INTO `users` VALUES ('U003', '塞罗', 'a222', '男', '0000-00-00 00:00:00', 3);

SET FOREIGN_KEY_CHECKS = 1;
