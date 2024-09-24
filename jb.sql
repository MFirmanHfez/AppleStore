/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : jb

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 24/09/2024 13:18:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pembelian
-- ----------------------------
DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE `pembelian`  (
  `id_pembeli` int NOT NULL,
  `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_barang` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembelian
-- ----------------------------

-- ----------------------------
-- Table structure for pesanan
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan`  (
  `id_pesanan` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL,
  `foto` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES (1, 'MacBook', 8000000, 0, 0, 'amc.jpg');
INSERT INTO `pesanan` VALUES (2, 'IPhone 8', 2000000, 0, 0, 'a8.jpg');
INSERT INTO `pesanan` VALUES (3, 'IPhone X', 3500000, 0, 0, 'f9.jpg');
INSERT INTO `pesanan` VALUES (4, 'IPhone XS', 4500000, 0, 0, 'axs.jpg');
INSERT INTO `pesanan` VALUES (5, 'IPhone XR', 5000000, 0, 0, 'xr.jpg');
INSERT INTO `pesanan` VALUES (6, 'IPhone 11', 6000000, 0, 0, 'a11.jpg');
INSERT INTO `pesanan` VALUES (7, 'IPhone 12', 7500000, 0, 0, 'a12.jpg');
INSERT INTO `pesanan` VALUES (8, 'IPhone 13', 9500000, 0, 0, 'b13.jpg');
INSERT INTO `pesanan` VALUES (9, 'IPhone 14', 12500000, 0, 0, 'a14.jpg');
INSERT INTO `pesanan` VALUES (10, 'IPhone 15', 14000000, 0, 0, 'z15.jpg');
INSERT INTO `pesanan` VALUES (11, 'IPhone 16 Pre Order', 18000000, 0, 0, 'az.jpg');
INSERT INTO `pesanan` VALUES (13, 'Adaptor', 100000, 0, 0, 'adptr.jpg');
INSERT INTO `pesanan` VALUES (14, 'Kabel Lighning', 500000, 0, 0, 'ligt.jpg');
INSERT INTO `pesanan` VALUES (15, 'Apple Watch', 3500000, 0, 0, 'wat.png');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'hafiz', '1', 'admin');
INSERT INTO `user` VALUES (2, 'diyon', '000', 'user');
INSERT INTO `user` VALUES (5, 'zeke', '00', 'admin');
INSERT INTO `user` VALUES (6, 'salim', '123', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
