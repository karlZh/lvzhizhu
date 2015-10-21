#CREATE DATABASE `shop`;
#use `shop`;
#管理员
CREATE TABLE IF NOT EXISTS `lzz_admin`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `adminuser` VARCHAR(32) NOT NULL DEFAULT '' UNIQUE,
    `adminpass` CHAR(32) NOT NULL DEFAULT '',
    `admintname` VARCHAR(32) NOT NULL DEFAULT '',
    `admintel` VARCHAR(20) NOT NULL DEFAULT '',
    `adminemail` VARCHAR(32) NOT NULL DEFAULT '',
    `logintime` INT UNSIGNED NOT NULL DEFAULT 0,
    `loginip` BIGINT NOT NULL DEFAULT 0,
    `isforbidden` ENUM('0','1'),
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0,
    KEY `lzz_admin_adminuser_adminpass`(`adminuser`,`adminpass`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `lzz_admin` VALUES(1,'admin',md5('admin888'),'超级管理员','13888888888','admin@admin.com','0','0','0','0');

#用户
CREATE TABLE IF NOT EXISTS `lzz_member`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `openid` CHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `nickname` VARCHAR(50) NOT NULL DEFAULT '',
    `sex` ENUM('0','1','2') NOT NULL DEFAULT '0',
    `language` VARCHAR(10) NOT NULL DEFAULT '',
    `city` VARCHAR(20) NOT NULL DEFAULT '',
    `province` VARCHAR(20) NOT NULL DEFAULT '',
    `country` VARCHAR(20) NOT NULL DEFAULT '',
    `headimgurl` VARCHAR(100) NOT NULL DEFAULT '',
    `subscribe_time` INT UNSIGNED NOT NULL DEFAULT 0,
    `unionid` VARCHAR(50) NOT NULL DEFAULT '',
    `remark` VARCHAR(100) NOT NULL DEFAULT '',
    `groupid` TINYINT UNSIGNED NOT NULL DEFAULT 0,
    `localgroupid` TINYINT UNSIGNED NOT NULL DEFAULT 0,
    `subscribe` ENUM('0','1') NOT NULL DEFAULT '0',
    `isforbidden` ENUM('0','1') NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0,
    KEY `lzz_member_groupid`(`groupid`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#收货地址表
CREATE TABLE IF NOT EXISTS `lzz_receive`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `receivepeople` VARCHAR(50) NOT NULL DEFAULT '',
    `receiveaddr` VARCHAR(100) NOT NULL DEFAULT '',
    `receivetel` VARCHAR(20) NOT NULL DEFAULT '',
    `email` VARCHAR(30) NOT NULL DEFAULT '',
    `postcode` VARCHAR(6) NOT NULL DEFAULT '100000',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#本地用户组
CREATE TABLE IF NOT EXISTS `lzz_member_group`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#微信用户组
CREATE TABLE IF NOT EXISTS `lzz_member_wegroup`(
    `groupid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品分类
CREATE TABLE IF NOT EXISTS `lzz_category`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `pid` BIGINT UNSIGNED NOT NULL DEFAULT 0,
    `propertycateid` BIGINT UNSIGNED NOT NULL DEFAULT 0,
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品
CREATE TABLE IF NOT EXISTS `lzz_product`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` CHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `describe` VARCHAR(1000) NOT NULL DEFAULT '',
    `price` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `originalprice` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `inventory` INT UNSIGNED NOT NULL DEFAULT '0',
    `categoryid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `brandid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `adminid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `ishot` ENUM('0','1') NOT NULL DEFAULT '0',
    `isputaway` ENUM('0','1') NOT NULL DEFAULT '1',
    `isonsale` ENUM('0','1') NOT NULL DEFAULT '0',
    `onsaleprice` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `cover` VARCHAR(50) NOT NULL DEFAULT '',
    `updatetime`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品图片
CREATE TABLE IF NOT EXISTS `lzz_product_pics`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `describe` VARCHAR(1000) NOT NULL DEFAULT '',
    `url` VARCHAR(100) NOT NULL DEFAULT '',
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品属性
CREATE TABLE IF NOT EXISTS `lzz_property`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fieldname` VARCHAR(100) NOT NULL DEFAULT '',
    `fieldtype` ENUM('text','radio','select','checkbox'),
    `categoryid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品属性对应表
CREATE TABLE IF NOT EXISTS `lzz_product_property`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `value` VARCHAR(5000) NOT NULL DEFAULT '',
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `propertyid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
	`isshow` ENUM('0','1') NOT NULL DEFAULT '1',
	`ischoice` ENUM('0','1') NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品品牌
CREATE TABLE IF NOT EXISTS `lzz_brand`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `picurl` VARCHAR(100) NOT NULL DEFAULT '',
    `brandcateid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品品牌分类
CREATE TABLE IF NOT EXISTS `lzz_brand_cate`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#支付方式表
CREATE TABLE IF NOT EXISTS `lzz_paytype`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `ext` VARCHAR(500) NOT NULL DEFAULT '',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#快递方式表
CREATE TABLE IF NOT EXISTS `lzz_express_type`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `ext` VARCHAR(500) NOT NULL DEFAULT '',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#订单表
CREATE TABLE IF NOT EXISTS `lzz_order`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `paytypeid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `place_order_uid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `receiveid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `amount` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `status` TINYINT UNSIGNED NOT NULL DEFAULT '0',
    `productnum` TINYINT UNSIGNED NOT NULL DEFAULT '0',
    `expressno` VARCHAR(200) NOT NULL DEFAULT '',
    `expresstypeid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `updatetime`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#订单详情表
CREATE TABLE IF NOT EXISTS `lzz_order_detail`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `orderid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `num` INT UNSIGNED NOT NULL DEFAULT '0',
    `price` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#购物车表
CREATE TABLE IF NOT EXISTS `lzz_cart`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `productid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `num` INT UNSIGNED NOT NULL DEFAULT '0',
    `price` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `amount` FLOAT(10,2) NOT NULL DEFAULT '0.00',
    `memberid` BIGINT UNSIGNED NOT NULL DEFAULT '0',
    `createtime` INT UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB DEFAULT CHARSET=utf8;