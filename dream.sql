/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream
Target Host: localhost
Target Database: dream
<<<<<<< HEAD
Date: 2016/1/1 11:27:47
=======
Date: 2015/12/31 19:54:23
>>>>>>> origin/master
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
<<<<<<< HEAD
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
=======
-- Table structure for basket
-- ----------------------------
CREATE TABLE `basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(4) CHARACTER SET utf8 NOT NULL COMMENT '据单状态',
  `flag` varchar(4) CHARACTER SET utf8 DEFAULT NULL COMMENT '货退标志',
  `number` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '据号单',
  `supplier` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '应商供',
  `department` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '采购部门',
  `buyer` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '购采员',
  `amount` float DEFAULT '0' COMMENT '购采金额',
  `maker` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '制单人',
  `obsolete_people` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '作废人',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`,`number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for bm-setup
-- ----------------------------
CREATE TABLE `bm-setup` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '门部编码',
  `name` varchar(10) NOT NULL COMMENT '部门名称',
  `higher` varchar(20) DEFAULT NULL COMMENT '级上部门',
  `charge` varchar(10) NOT NULL COMMENT '门部负责人',
  `phone` varchar(20) DEFAULT NULL COMMENT '话电',
  `note` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL COMMENT '真传',
  `change_person` varchar(10) DEFAULT NULL,
  `create_person` varchar(10) DEFAULT NULL,
  `state` varchar(4) NOT NULL DEFAULT '0' COMMENT '态状',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ck-setup
-- ----------------------------
CREATE TABLE `ck-setup` (
  `name` varchar(15) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `default` varchar(2) NOT NULL DEFAULT '否' COMMENT '否是默认仓库',
  `pic` varchar(10) DEFAULT NULL COMMENT '责人负',
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `note` varchar(30) DEFAULT NULL COMMENT '注备',
  `state` varchar(10) DEFAULT NULL COMMENT '状态',
  `help` varchar(20) DEFAULT NULL COMMENT '助记码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for intercourse unit
-- ----------------------------
CREATE TABLE `intercourse unit` (
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `category` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '位单类别',
  `classification` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '单位分类',
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `p_contact` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '首要联系人',
  `note` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '注备',
  `salesman` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '业务员',
  `state` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '态状',
  `help` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `c_department` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '分管部门',
  `salesmen` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '业务员',
  `tax` float(10,0) DEFAULT NULL COMMENT '税率',
  `t_number` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `bank` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '户行开',
  `b_number` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '行银账号',
  `discount` float(10,0) DEFAULT NULL COMMENT '扣率折',
  `credit` float(10,0) DEFAULT NULL COMMENT '信用额度',
  `create_person` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `create_time` datetime DEFAULT '0000-00-00 00:00:00',
  `change_person` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `change_time` datetime DEFAULT NULL,
  `stop_person` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `stop_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for inventory category
-- ----------------------------
CREATE TABLE `inventory category` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类编码',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '类分名称',
  `higher` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '级上分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for locale
-- ----------------------------
CREATE TABLE `locale` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `higher` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for personnel category
-- ----------------------------
CREATE TABLE `personnel category` (
  `name` varchar(10) NOT NULL COMMENT '别类名称',
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '别类编码',
  `higher` varchar(10) DEFAULT NULL COMMENT '上级类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for personnel file
-- ----------------------------
CREATE TABLE `personnel file` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编码 ',
  `name` varchar(10) NOT NULL COMMENT '名姓',
  `department` varchar(10) DEFAULT NULL COMMENT '属所部门',
  `sex` varchar(4) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL COMMENT '职务',
  `phone` varchar(15) DEFAULT NULL,
  `telphone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL COMMENT '注备',
  `title` varchar(10) DEFAULT NULL COMMENT '称职',
  `bank` varchar(30) DEFAULT NULL COMMENT '行银',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  `img` binary(50) DEFAULT NULL COMMENT '用户头像',
  `d_number` int(30) DEFAULT NULL COMMENT '证件号码',
  `d_type` varchar(15) DEFAULT NULL COMMENT '件证类型',
  `bank_number` int(20) DEFAULT NULL COMMENT '银行账号',
  `p_category` varchar(10) DEFAULT NULL COMMENT '人员类别',
  `birthday` date DEFAULT NULL COMMENT '出生日期',
  `help_number` varchar(255) DEFAULT NULL COMMENT '助记码',
  `p_attribute` varchar(20) DEFAULT NULL COMMENT '员人属性',
  `major` varchar(20) DEFAULT NULL COMMENT '专业',
  `home_number` int(20) DEFAULT NULL COMMENT '庭家电话',
  `urgent_call` int(20) DEFAULT NULL COMMENT '紧急电话',
  `urgent_contact` varchar(10) DEFAULT NULL COMMENT '紧急联系人',
  `bank2` varchar(30) DEFAULT NULL COMMENT '银行2',
  `bank_number2` int(20) DEFAULT NULL COMMENT '银行账号2',
  `create_time` date DEFAULT NULL COMMENT '创建时间',
  `create_person` varchar(10) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL COMMENT '职业',
  `place` varchar(30) DEFAULT NULL COMMENT '籍贯',
  `address` varchar(50) DEFAULT NULL COMMENT '通讯地址',
  `fund_number` varchar(30) DEFAULT NULL COMMENT '公积金编号',
  `insurance_number` varchar(30) DEFAULT NULL COMMENT '社保编号',
  `change_time` date DEFAULT NULL COMMENT '修改时间',
  `change_person` varchar(10) DEFAULT NULL COMMENT '修改人',
  `stop_time` date DEFAULT NULL COMMENT '用停时间',
  `stop_person` varchar(10) DEFAULT NULL COMMENT '用停人',
  `start_time` date DEFAULT NULL COMMENT '用启时间',
  `start_person` varchar(10) DEFAULT NULL COMMENT '用启人',
  `education` varchar(20) DEFAULT NULL COMMENT '学历',
  `zip_code` int(10) DEFAULT NULL COMMENT '邮编',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for personnel property
-- ----------------------------
CREATE TABLE `personnel property` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for purchase type
-- ----------------------------
CREATE TABLE `purchase type` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales order
-- ----------------------------
CREATE TABLE `sales order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(4) CHARACTER SET utf8 DEFAULT NULL COMMENT '据单状态',
  `flag` varchar(4) CHARACTER SET utf8 DEFAULT NULL COMMENT '货退标志',
  `number` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '据号单',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `department` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '销售部门',
  `client` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '客户',
  `seller` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '销售员',
  `amount` float DEFAULT '0' COMMENT '销售金额',
  `maker` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '制单人',
  `obsolete_people` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '作废人',
  `craeted_at` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`,`number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales type
-- ----------------------------
CREATE TABLE `sales type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for shipping methods
-- ----------------------------
CREATE TABLE `shipping methods` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for title
-- ----------------------------
CREATE TABLE `title` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for unit classification
-- ----------------------------
CREATE TABLE `unit classification` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `higher` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `category` varchar(10) CHARACTER SET utf8 DEFAULT NULL COMMENT '单位类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for unit conversion
-- ----------------------------
CREATE TABLE `unit conversion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '算组换名称',
  `m_unit` varchar(6) NOT NULL COMMENT '主计量单位',
  `a_unit` varchar(6) NOT NULL COMMENT '辅计量单位',
  `rate` double(6,3) NOT NULL DEFAULT '0.000' COMMENT '换算率',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) unsigned DEFAULT NULL,
  `industry` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `qq` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `cnumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`,`number`),
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_number_unique` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Table structure for vocabulary
-- ----------------------------
CREATE TABLE `vocabulary` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `content` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
>>>>>>> origin/master

-- ----------------------------
-- Records 
-- ----------------------------
<<<<<<< HEAD
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
=======
INSERT INTO `basket` VALUES ('1', '作废', '进货', 'JH151200004', '吴任', null, null, '3150', '体验版用户', '基础用户', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `basket` VALUES ('2', '正常', '进货', 'JH151200005', '仪化公司', null, null, '9800', '体验版用户', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `basket` VALUES ('3', '正常', '进货', 'JH151200006', '吴任', null, null, null, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `bm-setup` VALUES ('1', '采购部', '', '厂长', '', null, '', null, null, '正常', '2015-12-28 14:48:43', '2015-12-28 14:48:43');
INSERT INTO `bm-setup` VALUES ('2', '销售部', '', '李进杰', '', null, '', null, null, '正常', '2015-12-28 14:48:45', '2015-12-28 14:48:45');
INSERT INTO `bm-setup` VALUES ('3', '采购部', null, '李进杰', null, null, null, null, null, '正常', '2015-12-28 14:49:40', '2015-12-28 14:49:40');
INSERT INTO `ck-setup` VALUES ('礼品库', '1', '否', '', '', '', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('华中库', '2', '否', '', '', '', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('北方库', '3', '否', '', '', '', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('仓库厨房冷藏', '4', '否', '', '', '', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('仓库厨房冷冻', '5', '否', '', '', '', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('闰土仓库', '6', '否', '林佑镇', '', '仓库地址:11', '', '正常', null);
INSERT INTO `ck-setup` VALUES ('一键通', '7', '否', '孙翔宇', '1300000000', '', '', '正常', null);
INSERT INTO `intercourse unit` VALUES ('吴任', '1001', '供货商', '供货商', '', '', null, '', null, null, '', '', '', '0', '', '', '', '0', null, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `intercourse unit` VALUES ('淘宝', '1002', '供应商', '供货商', '', '', null, '', null, null, '', '', '', '0', '', '', '', '0', null, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `intercourse unit` VALUES ('个人', '1003', '客户', '客户', '', '', null, '', null, null, '', '', '', '0', '', '', '', '0', null, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `intercourse unit` VALUES ('严狗狗', '1004', '供应商', '供货商', '54835483', '地狱路天堂街23号', null, '', null, null, '', '', '', '0', '', '', '', '0', null, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `intercourse unit` VALUES ('唐人', '1005', '客户', '客户', '13933333333', '', null, '', null, null, '', '', '', '0', '', '', '', '0', null, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');
INSERT INTO `inventory category` VALUES ('1', '文具', '');
INSERT INTO `inventory category` VALUES ('2', '安居宝', '');
INSERT INTO `inventory category` VALUES ('3', '电子产品类', '');
INSERT INTO `inventory category` VALUES ('4', '五金建材类', '');
INSERT INTO `inventory category` VALUES ('5', '汽车配件', '');
INSERT INTO `inventory category` VALUES ('6', '食品类', '');
INSERT INTO `inventory category` VALUES ('7', '医药类', '');
INSERT INTO `inventory category` VALUES ('8', '服装类', '');
INSERT INTO `inventory category` VALUES ('9', '半成品', '');
INSERT INTO `inventory category` VALUES ('10', '成品', '');
INSERT INTO `inventory category` VALUES ('11', '羽绒服', '');
INSERT INTO `locale` VALUES ('1', '华北', '');
INSERT INTO `locale` VALUES ('2', '湛江', '华北');
INSERT INTO `locale` VALUES ('3', '华东', '');
INSERT INTO `locale` VALUES ('4', '华南', '');
INSERT INTO `locale` VALUES ('5', '00', '华东');
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `personnel category` VALUES ('管理人员', '1', '');
INSERT INTO `personnel category` VALUES ('技术人员', '2', null);
INSERT INTO `personnel category` VALUES ('销售人员', '3', '');
INSERT INTO `personnel category` VALUES ('采购人员', '4', null);
INSERT INTO `personnel file` VALUES ('1', '梁刚', '采购部', '男', '', '', '', '', '', null, '', '正常', null, null, null, '0', null, '0000-00-00', null, null, '', '0', null, null, '', '0', '0000-00-00', '', '', '', '', null, null, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', null, '0');
INSERT INTO `personnel file` VALUES ('2', '夏婉婷', '销售部', '女', '', '', '', '', '', '', '', '正常', null, null, '', '0', '', '0000-00-00', null, '', '', '0', null, null, '', '0', '0000-00-00', '', '', '', '', null, null, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0');
INSERT INTO `personnel file` VALUES ('3', '马佳静', '销售部', '女', '', '', '', '', '', null, '', '正常', null, null, null, '0', null, '0000-00-00', null, null, '', '0', null, null, '', '0', '0000-00-00', '', '', '', '', null, null, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', null, '0');
INSERT INTO `personnel file` VALUES ('4', '肖大海', '销售部', '男', null, null, null, null, null, null, null, '正常', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `personnel file` VALUES ('5', '梁珊', '行政部', '', '总经理', '134188635001', '', 'Soydani@163.com', '', '高级', '', '', null, null, '', '0', '', '0000-00-00', null, '', '', '0', null, null, '', '0', '0000-00-00', '', '', '', '', null, null, '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '0');
INSERT INTO `personnel property` VALUES ('1', '正式工');
INSERT INTO `personnel property` VALUES ('2', '临时工');
INSERT INTO `personnel property` VALUES ('3', '试用工');
INSERT INTO `purchase type` VALUES ('6', '鸡胸');
INSERT INTO `purchase type` VALUES ('7', '彩金');
INSERT INTO `purchase type` VALUES ('8', '打印机');
INSERT INTO `purchase type` VALUES ('9', '墨盒');
INSERT INTO `purchase type` VALUES ('11', 'computer');
INSERT INTO `purchase type` VALUES ('12', 'notebook');
INSERT INTO `purchase type` VALUES ('13', 'phone');
INSERT INTO `purchase type` VALUES ('14', '上市');
INSERT INTO `purchase type` VALUES ('16', '添加');
INSERT INTO `purchase type` VALUES ('17', '的说法地方');
INSERT INTO `purchase type` VALUES ('18', '888');
INSERT INTO `purchase type` VALUES ('19', '4464');
INSERT INTO `purchase type` VALUES ('20', 'yvgh');
INSERT INTO `purchase type` VALUES ('21', '大白菜');
INSERT INTO `purchase type` VALUES ('22', 'IPA');
INSERT INTO `purchase type` VALUES ('23', '');
INSERT INTO `sales order` VALUES ('1', '作废', '销售', 'XS151200001', '0000-00-00 00:00:00', '', '黄胜华', '严狗狗', '3150', '体验版用户', '基础用户', '0000-00-00');
INSERT INTO `sales order` VALUES ('2', '正常', '销售', 'XS151200002', '0000-00-00 00:00:00', null, '李长荣', null, '9800', '体验版用户', '', '0000-00-00');
INSERT INTO `sales order` VALUES ('3', '正常', '销售', 'XS151200003', '0000-00-00 00:00:00', '', '吴任', '', '3450', '', '', '0000-00-00');
INSERT INTO `sales type` VALUES ('1', '经销商');
INSERT INTO `sales type` VALUES ('2', '代销商');
INSERT INTO `sales type` VALUES ('4', '和GV就');
INSERT INTO `sales type` VALUES ('5', '华为 P8（移动版）');
INSERT INTO `sales type` VALUES ('6', '华为 MATE7（电信版）');
INSERT INTO `sales type` VALUES ('7', '华为 MATE7（电信版高配）');
INSERT INTO `sales type` VALUES ('8', '华为 MATE7（电信版标配）');
INSERT INTO `sales type` VALUES ('9', '华为 荣耀畅玩4X');
INSERT INTO `sales type` VALUES ('10', '华为 P7（电信版）');
INSERT INTO `shipping methods` VALUES ('1', '自提');
INSERT INTO `shipping methods` VALUES ('2', '快递');
INSERT INTO `shipping methods` VALUES ('3', '货运');
INSERT INTO `title` VALUES ('1', '初级');
INSERT INTO `title` VALUES ('2', '中级');
INSERT INTO `title` VALUES ('3', '高级');
INSERT INTO `unit classification` VALUES ('1', '供货商', '', '供应商');
INSERT INTO `unit classification` VALUES ('2', '客户', '', '客户');
INSERT INTO `unit classification` VALUES ('3', '大客户', '', '客户');
INSERT INTO `unit classification` VALUES ('4', '小客户', '', '客户');
INSERT INTO `unit conversion` VALUES ('2', 'kg包', 'kg', '包', '25.000');
INSERT INTO `unit conversion` VALUES ('3', '件', '板/件', '板', '0.083');
INSERT INTO `unit conversion` VALUES ('4', '箱', '包/箱', '包', '100.000');
INSERT INTO `unit conversion` VALUES ('5', '升', '吨/升', '吨', '0.745');
INSERT INTO `unit conversion` VALUES ('6', '箱', '个/箱', '个', '5.000');
INSERT INTO `unit conversion` VALUES ('7', '板', '件/12板', '件/12', '12.000');
INSERT INTO `unit conversion` VALUES ('8', '个', '件/24个', '件/24', '24.000');
INSERT INTO `unit conversion` VALUES ('9', '包', '条/包', '条', '10.000');
INSERT INTO `users` VALUES ('1', '111', '111', null, '$2y$10$aXL9R8kcDALnrEysh0tAjOPydkitYVY3oKie6KeY0K4kaL/NTu/Cq', '111', '', '', '', '', '', '', '5Oo4JrcOP53qFnjb96tTvRxeS32Fpp0MqBg4VH5Sfhiph6GTsyZrMzeTpzCq', '2015-12-25 15:12:38', '2015-12-27 16:29:38');
INSERT INTO `users` VALUES ('2', '222', '222', null, '$2y$10$4REg1QHMlfFsiDHHiEZAiu1wgWTK31rB8xk2FQCs4sOrq4FrzZRXS', '0', '', '', '', '', '', '', '1YxllA2THj0o6RU1lGmOW177ivqVKi4MiXqgkwyxPKYturNfn3USKejY5wqQ', '2015-12-26 08:48:56', '2015-12-27 16:53:41');
INSERT INTO `users` VALUES ('3', '333', '333', null, '$2y$10$WO74SRW8GQU453ialEI5WehuU07ycNBR8S9Z16hfBSJzov9nKfxW.', '0', '', '', '', '', '', '', null, '2015-12-26 08:49:34', '2015-12-26 08:49:34');
INSERT INTO `users` VALUES ('4', '444', '444', null, '$2y$10$ehimBuZgg16ym5Y.ua0gNu6f7Y6TPh2rRiXLwA5ALl.9uKY7HdXGe', '444', '', '', '', '', '', '', null, '2015-12-26 08:57:49', '2015-12-26 08:57:49');
INSERT INTO `users` VALUES ('5', 'chen', 'chen', null, '$2y$10$2Yy4Qr7w8e8k9rdT4YNYauLft2nED27vY2OxJUM2Flv4asvdwiMRK', '0', '', '', '', '', '', '', null, '2015-12-26 09:46:09', '2015-12-26 09:46:09');
INSERT INTO `users` VALUES ('6', '555', '555', null, '$2y$10$AWqmCaUzXhhhNFPLiBNxQOYDGoL78r4X3zuUdWbtsgOE4QJtGUwtu', '0', '', '', '', '', '', '', null, '2015-12-26 09:55:49', '2015-12-26 09:55:49');
INSERT INTO `users` VALUES ('7', 'ting', 'ting', null, '$2y$10$sEbaswPr3sSb4ZLlroW4fuMUUhDfSgkaLJaQ9GnPczRBNpg0nvfhm', null, '', '', '', '', '', '', null, '2015-12-26 13:08:47', '2015-12-26 13:08:47');
INSERT INTO `users` VALUES ('8', 'chenchen', 'chenchen', null, '$2y$10$MnbXh3fM97rRyjRrGGF3e.xNwXW8p9TmJtctlz4EOmn.01wCbZ3F.', null, '', '', '', '', '', '', null, '2015-12-26 13:23:09', '2015-12-26 13:23:09');
INSERT INTO `users` VALUES ('9', 'tingting', 'ting', null, '$2y$10$zpI1J4QB4GDRnOLKhlZvZecvHpe8qEhNJNAO7NILJ0MCLTcMROzlW', null, '', '', '', '', '', '', null, '2015-12-26 13:24:31', '2015-12-26 13:24:31');
INSERT INTO `users` VALUES ('10', 'chenting', 'chenting', null, '$2y$10$AKY2Zy6gMAHLG99oJQt7AuWpUGNfJSCg2iHSOkmqNdeasatQTYqsG', null, '', '', '', '', '', '', null, '2015-12-26 13:26:27', '2015-12-26 13:26:27');
INSERT INTO `users` VALUES ('11', 'momo', 'momo', null, '$2y$10$Oemx5btUdTv/lQUjPiuSPugSoi69Wh4xAaRCIsnjQHcoWZU8yZcH6', '0', '', '', '', '', '', '', null, '2015-12-27 03:43:34', '2015-12-27 03:43:34');
INSERT INTO `users` VALUES ('12', '用户', 'chen', null, '$2y$10$FXqyLLox3agazz30Ddpg2Og8DWi8yCIjw/Lo/IyoWgbsBsWq90NvW', '0', '', '', '', '', '', '', 'evDBNulNoD9ivOQpUyNG3C5B45guuVWZYESM0lCLGOWbWKNZ6U16o2L8rJUk', '2015-12-29 18:09:39', '2015-12-29 18:25:25');
INSERT INTO `users` VALUES ('13', '梦想云', 'chen', null, '$2y$10$IfOaPxewQhYIF7zW61QsjOVBVEJLUSe6H5/0OjhJzbYd.veW313sO', '0', '', '', '', '', '', '', null, '2015-12-29 18:25:51', '2015-12-29 18:25:51');
INSERT INTO `vocabulary` VALUES ('1', '货到付款');
INSERT INTO `vocabulary` VALUES ('2', '收货后检查包装');
>>>>>>> origin/master
