/*
 Navicat Premium Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : psgpost

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 29/07/2021 23:14:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for psg_cargo
-- ----------------------------
DROP TABLE IF EXISTS `psg_cargo`;
CREATE TABLE `psg_cargo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apellidos` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `carnet` int(11) NULL DEFAULT NULL,
  `celular` int(11) NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `motivacion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cargo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of psg_cargo
-- ----------------------------
INSERT INTO `psg_cargo` VALUES (1, 'ana', 'ana', 567, 8765, 'ana@hotmail.com', 'competitiva', 'limpieza');
INSERT INTO `psg_cargo` VALUES (2, 'robert', 'levandowski', 8765, 4567, 'robert@gmail.com', 'profesional', 'asesor');

SET FOREIGN_KEY_CHECKS = 1;
