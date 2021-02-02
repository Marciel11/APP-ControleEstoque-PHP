/*
 Navicat Premium Data Transfer

 Source Server         : locahost
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : 127.0.0.1:3306
 Source Schema         : usuarios

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 02/02/2021 14:57:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for nivel_acesso
-- ----------------------------
DROP TABLE IF EXISTS `nivel_acesso`;
CREATE TABLE `nivel_acesso`  (
  `id` int NOT NULL,
  `acesso` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `perfil` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_user` int NOT NULL,
  `estoque_id` int NOT NULL,
  `cadastro_id` int NOT NULL,
  `lista_estoque_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `for_key_id_idx`(`id_user`) USING BTREE,
  CONSTRAINT `for_key_id` FOREIGN KEY (`id_user`) REFERENCES `nivel_acesso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nivel_acesso
-- ----------------------------
INSERT INTO `nivel_acesso` VALUES (1, 'universal', 'admin', 1, 1, 2, 3);
INSERT INTO `nivel_acesso` VALUES (2, 'cadastro', 'gerente', 2, 1, 0, 0);

-- ----------------------------
-- Table structure for produtos
-- ----------------------------
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos`  (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `produto` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descricao` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fabricante` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `valor_aquisicao` double NOT NULL,
  `codigo` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  PRIMARY KEY (`id_produto`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of produtos
-- ----------------------------
INSERT INTO `produtos` VALUES (1, 'notebook', 'gamer', 'philco', 2000, 'i34j8u3', '2020-01-22', '0000-00-00');
INSERT INTO `produtos` VALUES (2, 'teclado', 'gamer', 'HP', 100, 'jeij8', '2020-01-22', '0000-00-00');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'paulo', 1234);
INSERT INTO `usuario` VALUES (2, 'rafael', 1020);

SET FOREIGN_KEY_CHECKS = 1;
