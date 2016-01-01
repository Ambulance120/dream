/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream
Target Host: localhost
Target Database: dream
Date: 2015/12/11 15:42:46
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for adjustment
-- ----------------------------
CREATE TABLE `adjustment` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for allocation
-- ----------------------------
CREATE TABLE `allocation` (
  `status` varchar(4) NOT NULL COMMENT '据单状态',
  `number` varchar(20) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '单据日期',
  `handled` varchar(10) DEFAULT NULL COMMENT '经手人',
  `note` varchar(30) DEFAULT NULL COMMENT '备注',
  `maker` varchar(10) DEFAULT NULL COMMENT '制单人',
  `create_at` date DEFAULT '0000-00-00',
  `obsolete peopl` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for basket
-- ----------------------------
CREATE TABLE `basket` (
  `state` varchar(4) NOT NULL COMMENT '据单状态',
  `flag` varchar(4) NOT NULL COMMENT '货退标志',
  `number` varchar(15) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '据单日期',
  `supplier` varchar(10) DEFAULT NULL COMMENT '应商供',
  `department` varchar(10) DEFAULT NULL COMMENT '采购部门',
  `buyer` varchar(10) DEFAULT NULL COMMENT '购采员',
  `amount` float DEFAULT '0' COMMENT '购采金额',
  `person` varchar(20) NOT NULL COMMENT '制单人',
  `create_at` date NOT NULL DEFAULT '0000-00-00' COMMENT '创建时间',
  `obsolete people` varchar(10) NOT NULL COMMENT '作废人',
  `contacts` varchar(10) DEFAULT NULL COMMENT '系人联',
  `Custom1` varchar(30) DEFAULT NULL COMMENT '自定义项1',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for basket_copy
-- ----------------------------
CREATE TABLE `basket_copy` (
  `state` varchar(4) NOT NULL COMMENT '据单状态',
  `flag` varchar(4) NOT NULL COMMENT '货退标志',
  `number` varchar(15) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '据单日期',
  `supplier` varchar(10) DEFAULT NULL COMMENT '应商供',
  `department` varchar(10) DEFAULT NULL COMMENT '采购部门',
  `buyer` varchar(10) DEFAULT NULL COMMENT '购采员',
  `amount` float DEFAULT '0' COMMENT '购采金额',
  `person` varchar(20) NOT NULL COMMENT '制单人',
  `create_at` date NOT NULL DEFAULT '0000-00-00' COMMENT '创建时间',
  `obsolete people` varchar(10) NOT NULL COMMENT '作废人',
  `contacts` varchar(10) DEFAULT NULL COMMENT '系人联',
  `Custom1` varchar(30) DEFAULT NULL COMMENT '自定义项1',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for beginning stocks
-- ----------------------------
CREATE TABLE `beginning stocks` (
  `name` varchar(10) NOT NULL COMMENT '货存名称',
  `number` varchar(20) NOT NULL COMMENT '存货编码',
  `specifications model` varchar(10) DEFAULT NULL COMMENT '规格型号',
  `warehouse` varchar(20) DEFAULT NULL COMMENT '库仓名称',
  `unit` varchar(20) DEFAULT NULL COMMENT '单位',
  `quantity` int(10) DEFAULT NULL COMMENT '量数',
  `cost` float DEFAULT '0' COMMENT '本成单价',
  `money` float DEFAULT '0' COMMENT '期初金额',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for bm-setup
-- ----------------------------
CREATE TABLE `bm-setup` (
  `id` int(2) NOT NULL AUTO_INCREMENT COMMENT '门部编码',
  `name` varchar(10) NOT NULL COMMENT '部门名称',
  `higher` varchar(20) DEFAULT NULL COMMENT '级上部门',
  `charge` varchar(10) NOT NULL COMMENT '门部负责人',
  `phone` varchar(20) DEFAULT NULL COMMENT '话电',
  `fax` varchar(50) DEFAULT NULL COMMENT '真传',
  `state` varchar(255) NOT NULL COMMENT '态状',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for check
-- ----------------------------
CREATE TABLE `check` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ck-setup
-- ----------------------------
CREATE TABLE `ck-setup` (
  `name` varchar(15) NOT NULL,
  `number` int(5) NOT NULL AUTO_INCREMENT,
  `default` varchar(2) NOT NULL COMMENT '否是默认仓库',
  `pic` varchar(10) DEFAULT NULL COMMENT '责人负',
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `note` varchar(30) DEFAULT NULL COMMENT '注备',
  `state` varchar(10) DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for encode_rules
-- ----------------------------
CREATE TABLE `encode_rules` (
  `number` int(10) NOT NULL COMMENT '对象编码',
  `name` varchar(15) NOT NULL COMMENT '对象名称',
  `preview` int(10) NOT NULL COMMENT '码编预览',
  `way` varchar(20) NOT NULL COMMENT '码编方式',
  `first prefix` varchar(10) DEFAULT NULL COMMENT '一第前缀',
  `format1` varchar(20) DEFAULT NULL COMMENT '式格1',
  `length1` varchar(10) DEFAULT NULL COMMENT '度长1',
  `second prefix` varchar(10) DEFAULT NULL COMMENT '第二前缀',
  `format2` varchar(20) DEFAULT NULL,
  `length2` varchar(10) DEFAULT NULL,
  `third prefix` varchar(10) DEFAULT NULL COMMENT '三第前缀',
  `format3` varchar(20) DEFAULT NULL,
  `length3` varchar(10) DEFAULT NULL,
  `snumber_basis` varchar(10) NOT NULL COMMENT '水号流依据',
  `snumber_length` int(5) NOT NULL COMMENT '水号流长度',
  `snumber_start` int(5) NOT NULL COMMENT '水号流起始',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for intercourse unit
-- ----------------------------
CREATE TABLE `intercourse unit` (
  `name` varchar(20) NOT NULL,
  `number` int(6) NOT NULL,
  `category` varchar(10) NOT NULL COMMENT '位单类别',
  `classification` varchar(10) NOT NULL COMMENT '单位分类',
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `primary contact` varchar(10) DEFAULT NULL COMMENT '首要联系人',
  `note` varchar(30) DEFAULT NULL COMMENT '注备',
  `salesman` varchar(10) DEFAULT NULL COMMENT '业务员',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for inventory category
-- ----------------------------
CREATE TABLE `inventory category` (
  `number` int(10) NOT NULL COMMENT '分类编码',
  `name` varchar(20) DEFAULT NULL COMMENT '类分名称',
  `parent` varchar(20) DEFAULT NULL COMMENT '级上分类',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for inventory file
-- ----------------------------
CREATE TABLE `inventory file` (
  `number` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `Manufacturer` varchar(20) DEFAULT NULL COMMENT '生产厂家',
  `model` varchar(15) DEFAULT NULL COMMENT '规格型号',
  `unit` varchar(4) DEFAULT NULL COMMENT '计量单位',
  `purchase` float DEFAULT '0' COMMENT '参考进价',
  `price` float DEFAULT '0' COMMENT '参考售价',
  `classify` varchar(10) DEFAULT NULL COMMENT '存货分类',
  `retail price` int(5) DEFAULT NULL COMMENT '零售价',
  `image` binary(100) DEFAULT NULL,
  `custom4` varchar(20) DEFAULT NULL COMMENT '定义自4',
  `custom5` varchar(20) DEFAULT NULL COMMENT '定义自5',
  `custom number1` varchar(5) DEFAULT NULL COMMENT '定义自数值1',
  `custom number2` varchar(5) DEFAULT NULL COMMENT '定义自数值2',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for locale
-- ----------------------------
CREATE TABLE `locale` (
  `number` int(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  `parent` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for other instorage
-- ----------------------------
CREATE TABLE `other instorage` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `category` varchar(10) DEFAULT NULL COMMENT '入库类别',
  `supplier` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for other outstorag
-- ----------------------------
CREATE TABLE `other outstorag` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `category` varchar(10) DEFAULT NULL COMMENT '入库类别',
  `client` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for personnel category
-- ----------------------------
CREATE TABLE `personnel category` (
  `name` varchar(10) DEFAULT NULL COMMENT '别类名称',
  `number` int(5) NOT NULL COMMENT '别类编码',
  `parent` varchar(10) DEFAULT NULL COMMENT '上级类别',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for personnel file
-- ----------------------------
CREATE TABLE `personnel file` (
  `number` int(11) NOT NULL AUTO_INCREMENT COMMENT '编码 ',
  `name` varchar(10) DEFAULT NULL COMMENT '名姓',
  `department` varchar(10) DEFAULT NULL COMMENT '属所部门',
  `sex` varchar(4) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL COMMENT '职务',
  `phone` varchar(15) DEFAULT NULL,
  `telphone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL COMMENT '注备',
  `title` varchar(10) DEFAULT NULL COMMENT '称职',
  `bank` varchar(10) DEFAULT NULL COMMENT '行银',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for purchase type
-- ----------------------------
CREATE TABLE `purchase type` (
  `number` int(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for purchase type_copy
-- ----------------------------
CREATE TABLE `purchase type_copy` (
  `number` int(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for shipping methods
-- ----------------------------
CREATE TABLE `shipping methods` (
  `number` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for staff property
-- ----------------------------
CREATE TABLE `staff property` (
  `number` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for title
-- ----------------------------
CREATE TABLE `title` (
  `number` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for unit classification
-- ----------------------------
CREATE TABLE `unit classification` (
  `number` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `parent` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL COMMENT '单位类别',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for unit conversion
-- ----------------------------
CREATE TABLE `unit conversion` (
  `name` varchar(10) NOT NULL COMMENT '算组换名称',
  `Main Unit` varchar(6) NOT NULL COMMENT '主计量单位',
  `Aid Unit` varchar(6) NOT NULL COMMENT '辅计量单位',
  `Conversion Rate` float(10,0) NOT NULL COMMENT '换算率',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for vocabulary
-- ----------------------------
CREATE TABLE `vocabulary` (
  `number` int(6) NOT NULL,
  `content` varchar(20) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for warehousing category
-- ----------------------------
CREATE TABLE `warehousing category` (
  `name` varchar(10) NOT NULL,
  `sys  preferences` varchar(2) NOT NULL COMMENT '统系预置',
  `sequence` int(10) NOT NULL AUTO_INCREMENT COMMENT '序排',
  PRIMARY KEY (`sequence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `bm-setup` VALUES ('1', '行政部', '', '厂长', '', '', '正常');
INSERT INTO `bm-setup` VALUES ('2', '采购部', null, '李进杰', null, null, '正常');
INSERT INTO `bm-setup` VALUES ('3', '销售部', null, '李进杰', null, null, '正常');
INSERT INTO `bm-setup` VALUES ('4', '采购部', null, '张三', null, null, '正常');
INSERT INTO `bm-setup` VALUES ('5', '秘书部', null, '李四 ', null, null, '正常');
