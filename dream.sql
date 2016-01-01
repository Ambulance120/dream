/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream
Target Host: localhost
Target Database: dream
Date: 2016/1/1 11:27:47
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for bfile
-- ----------------------------
CREATE TABLE `bfile` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `yulan` varchar(255) NOT NULL,
  `way` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for cgmanage
-- ----------------------------
CREATE TABLE `cgmanage` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `way` varchar(255) DEFAULT NULL,
  `first` char(255) DEFAULT NULL,
  `style1` varchar(255) DEFAULT NULL,
  `length1` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for journel
-- ----------------------------
CREATE TABLE `journel` (
  `time` time NOT NULL,
  `user` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ip` text CHARACTER SET utf8,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for sale
-- ----------------------------
CREATE TABLE `sale` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `yulan` varchar(255) DEFAULT NULL,
  `way` varchar(255) DEFAULT NULL,
  `first` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `bfile` VALUES ('0102', '组织机构', '01', '自动编码可更改');
INSERT INTO `bfile` VALUES ('0103', '部门设置', '01', '自动编码可更改');
INSERT INTO `bfile` VALUES ('0104', '人员类别', '01', '自动编码');
INSERT INTO `bfile` VALUES ('0105', '人员属性', '01', '自动编码');
INSERT INTO `bfile` VALUES ('0106', '职称', '01', '自动编码');
INSERT INTO `bfile` VALUES ('0107', '人员档案', '01', '自动编码可更改');
INSERT INTO `bfile` VALUES ('0109', '仓库设置', '00001', '自动编码');
INSERT INTO `cgmanage` VALUES ('202', '采购类型', '自动编码', null, null, null);
INSERT INTO `cgmanage` VALUES ('205', '采购订单', '自动编码', 'CD', null, null);
INSERT INTO `cgmanage` VALUES ('206', '进货单', '自动编码', 'JH', null, null);
INSERT INTO `journel` VALUES ('08:47:47', '基础版体验用户', '用户登录', '183.6.66.105', '1');
INSERT INTO `journel` VALUES ('09:02:45', '基础版体验用户', '用户登录', '123.130.112.67', '2');
INSERT INTO `journel` VALUES ('17:50:49', '基础版体验用户', '新增销售单：XS15120009', '123.121.89.2', '3');
INSERT INTO `journel` VALUES ('20:40:02', '基础版体验用户', '用户登录', '183.6.66.107', '4');
INSERT INTO `journel` VALUES ('23:57:54', '基础版体验用户', '用户登录', '111.10.234.233', '5');
INSERT INTO `sale` VALUES ('0301', '销售类型', '01', '自动编码', null, null);
INSERT INTO `sale` VALUES ('0302', '销售订单', 'XD15120001', '自动编码', 'XD', null);
INSERT INTO `sale` VALUES ('0303', '销售单', 'XS15120001', '自动编码', 'XS', null);
INSERT INTO `sale` VALUES ('0310', '前台收银', 'LS1512290001', '自动编码', 'LS', null);
