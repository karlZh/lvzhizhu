#管理员
CREATE TABLE `lzz_admin`(
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

#用户
CREATE TABLE `lzz_member`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `openid` CHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `nickname`
    `sex`
    `language`
    `city`
    `province`
    `country`
    `headimgurl`
    `subscribe_time`
    `unionid`
    `remark`
    `groupid`
    `localgroupid`
    `subscribe`
    `isforbidden` ENUM('0','1'),
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#收货地址表
CREATE TABLE `lzz_receive`(
    `id`
    `receivepeople`
    `receiveaddr`
    `receivetel`
    `email`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#本地用户组
CREATE TABLE `lzz_member_group`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` CHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#微信用户组
CREATE TABLE `lzz_member_wegroup`(
    `groupid` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` CHAR(50) NOT NULL DEFAULT '' UNIQUE,
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品分类
CREATE TABLE `lzz_category`(
    `id`
    `name`
    `pid`
    `propertycateid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品
CREATE TABLE `lzz_product`(
    `id`
    `title`
    `describe`
    `price`
    `originalprice`
    `inventory`
    `ccategoryid`
    `brandid`
    `propertyid`
    `adminid`
    `ishot`
    `isputaway`
    `isonsale`
    `cover`
    `updatetime`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品图片
CREATE TABLE `lzz_product_pics`(
    `id`
    `describe`
    `url`
    `productid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品属性
CREATE TABLE `lzz_property`(
    `id`
    `fieldname`
    `fieldtype`
    `fieldvalues`
    `propertycateid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品属性分类
CREATE TABLE `lzz_property_cate`(
    `id`
    `name`
    `pid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品品牌
CREATE TABLE `lzz_brand`(
    `id`
    `name`
    `picurl`
    `brandcateid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#商品品牌分类
CREATE TABLE `lzz_brand_cate`(
    `id`
    `name`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#支付方式表
CREATE TABLE `lzz_paytype`(
    `id`
    `name`
    `ext`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#快递方式表
CREATE TABLE `lzz_express_type`(
    `id`
    `name`
    `ext`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#订单表
CREATE TABLE `lzz_order`(
    `id`
    `paytypeid`
    `place_order_uid`
    `receiveid`
    `amount`
    `status`
    `productnum`
    `expressno`
    `expresstypeid`
    `updateorder`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#订单详情表
CREATE TABLE `lzz_order_detail`(
    `id`
    `productid`
    `num`
    `price`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#购物车表
CREATE TABLE `lzz_cart`(
    `id`
    `productid`
    `num`
    `price`
    `memberid`
    `createtime`
)ENGINE=InnoDB DEFAULT CHARSET=utf8;