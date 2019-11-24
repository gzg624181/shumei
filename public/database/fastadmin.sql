-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?11 �?24 �?14:45
-- 服务器版本: 5.5.53
-- PHP 版本: 7.2.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fastadmin`
--

-- --------------------------------------------------------

--
-- 表的结构 `fa_admin`
--

CREATE TABLE IF NOT EXISTS `fa_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(30) NOT NULL DEFAULT '' COMMENT '密码盐',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  `loginfailure` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '失败次数',
  `logintime` int(10) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(50) DEFAULT NULL COMMENT '登录IP',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `token` varchar(59) NOT NULL DEFAULT '' COMMENT 'Session标识',
  `status` varchar(30) NOT NULL DEFAULT 'normal' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fa_admin`
--

INSERT INTO `fa_admin` (`id`, `username`, `nickname`, `password`, `salt`, `avatar`, `email`, `loginfailure`, `logintime`, `loginip`, `createtime`, `updatetime`, `token`, `status`) VALUES
(1, 'admin', 'Admin', '0f17d5142ffda3ddaa60abfb0451a001', '779b20', '/assets/img/avatar.png', 'admin@admin.com', 0, 1574498135, '127.0.0.1', 1492186163, 1574498135, 'd5beb7c2-ca6a-40d0-8ffd-5102c689f8ac', 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_admin_log`
--

CREATE TABLE IF NOT EXISTS `fa_admin_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '管理员名字',
  `url` varchar(1500) NOT NULL DEFAULT '' COMMENT '操作页面',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '日志标题',
  `content` text NOT NULL COMMENT '内容',
  `ip` varchar(50) NOT NULL DEFAULT '' COMMENT 'IP',
  `useragent` varchar(255) NOT NULL DEFAULT '' COMMENT 'User-Agent',
  `createtime` int(10) DEFAULT NULL COMMENT '操作时间',
  PRIMARY KEY (`id`),
  KEY `name` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='管理员日志表' AUTO_INCREMENT=62 ;

--
-- 转存表中的数据 `fa_admin_log`
--

INSERT INTO `fa_admin_log` (`id`, `admin_id`, `username`, `url`, `title`, `content`, `ip`, `useragent`, `createtime`) VALUES
(1, 1, 'admin', '/fa/public/OztrVoqw0h.php/index/login?url=%2Ffa%2Fpublic%2FOztrVoqw0h.php', '登录', '{"url":"\\/fa\\/public\\/OztrVoqw0h.php","__token__":"95ef3a69595bc126231b995ab87fc32f","username":"admin","captcha":"r53g"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574497636),
(2, 1, 'admin', '/fa/public/OztrVoqw0h.php/index/login?url=%2Ffa%2Fpublic%2FOztrVoqw0h.php', '', '{"url":"\\/fa\\/public\\/OztrVoqw0h.php","__token__":"95ef3a69595bc126231b995ab87fc32f","username":"admin","captcha":"r53g"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574497636),
(3, 1, 'admin', '/fa/public/OztrVoqw0h.php/index/login', '登录', '{"__token__":"ba792698003c72ab03fefd20d7916f0e","username":"admin","captcha":"uvaq"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574498135),
(4, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"1f654e327cd0fc8f2398e5e3de03df60","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574498184),
(5, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"title"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574501843),
(6, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"5216a29f00e05b0b2d73d4145e30cce0","row":{"type":"string","group":"basic","name":"title","title":"\\u7f51\\u7ad9\\u6807\\u9898","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"\\u8bf7\\u8f93\\u5165\\u7f51\\u7ad9\\u9996\\u9875\\u6807\\u9898","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574501964),
(7, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"bd76cb03c69d2b0c55f2c227b0ec3ec5","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard","title":"\\u73a2\\u7f8e\\u670d\\u52a1"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574501979),
(8, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"keyword"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502006),
(9, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"ef47566768e5eb35897e0f13926cc145","row":{"type":"string","group":"basic","name":"keyword","title":"\\u7f51\\u7ad9\\u5173\\u952e\\u5b57","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"\\u8bf7\\u8f93\\u5165\\u7f51\\u7ad9\\u9996\\u9875\\u5173\\u952e\\u5b57","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502025),
(10, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"58c200f4c13ed7e5c7d16873629ded6a","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"700\\u5ea6\\u4fdd\\u9669\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502084),
(11, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"13d884c4a7ef5501e6135cf1b0ebfdec","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502209),
(12, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"description"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502234),
(13, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"f8d7df6010c6863f2cb3f5501584db5a","row":{"type":"string","group":"basic","name":"description","title":"\\u7f51\\u7ad9\\u63cf\\u8ff0","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"\\u8bf7\\u8f93\\u5165\\u7f51\\u7ad9\\u9996\\u9875\\u63cf\\u8ff0","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502257),
(14, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"df9c3eeea547072a4b5eae6d8195d0f0","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502334),
(15, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"af939a2d1c129bf5838481390d7beeca","row":{"name":"\\u73a2\\u7f8e\\u670d\\u52a1","beian":"","cdnurl":"","version":"1.0.1","timezone":"Asia\\/Shanghai","forbiddenip":"","languages":"{&quot;backend&quot;:&quot;zh-cn&quot;,&quot;frontend&quot;:&quot;zh-cn&quot;}","fixedpage":"dashboard","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502339),
(16, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"b05837076d0203a1ae90369103f0af50"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502369),
(17, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"139d50a83ce6a0bff043f867f3e9a1b8"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502375),
(18, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"c4f67fe56f2ea632c679f9ec133752b4"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502398),
(19, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"e6f34b5475aa536613f2a2c6462239cf","row":{"categorytype":"{&quot;default&quot;:&quot;Default&quot;,&quot;page&quot;:&quot;Page&quot;,&quot;article&quot;:&quot;Article&quot;,&quot;test&quot;:&quot;Test&quot;}","configgroup":"{&quot;basic&quot;:&quot;Basic&quot;,&quot;email&quot;:&quot;Email&quot;,&quot;dictionary&quot;:&quot;Dictionary&quot;,&quot;user&quot;:&quot;User&quot;,&quot;example&quot;:&quot;Example&quot;,&quot;pay&quot;:&quot;\\u652f\\u4ed8\\u8bbe\\u7f6e&quot;}"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502563),
(20, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"b6b63cb74fdf7620d895aeb55f2cd072","row":{"categorytype":"{&quot;default&quot;:&quot;Default&quot;,&quot;page&quot;:&quot;Page&quot;,&quot;article&quot;:&quot;Article&quot;,&quot;test&quot;:&quot;Test&quot;}","configgroup":"{&quot;basic&quot;:&quot;Basic&quot;,&quot;email&quot;:&quot;Email&quot;,&quot;dictionary&quot;:&quot;Dictionary&quot;,&quot;user&quot;:&quot;User&quot;,&quot;pay&quot;:&quot;\\u652f\\u4ed8\\u8bbe\\u7f6e&quot;}"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502637),
(21, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"f6316c814f56ca329f3d889730ac3392","row":{"categorytype":"{&quot;default&quot;:&quot;Default&quot;,&quot;page&quot;:&quot;Page&quot;,&quot;article&quot;:&quot;Article&quot;,&quot;test&quot;:&quot;Test&quot;}","configgroup":"{&quot;basic&quot;:&quot;Basic&quot;,&quot;email&quot;:&quot;Email&quot;,&quot;dictionary&quot;:&quot;Dictionary&quot;,&quot;user&quot;:&quot;User&quot;,&quot;pay&quot;:&quot;\\u652f\\u4ed8\\u8bbe\\u7f6e&quot;,&quot;website&quot;:&quot;\\u7f51\\u7ad9\\u914d\\u7f6e&quot;}"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502749),
(22, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"4f4258d20e7033a0b5850824cbf4770f","row":{"categorytype":"{&quot;default&quot;:&quot;Default&quot;,&quot;page&quot;:&quot;Page&quot;,&quot;article&quot;:&quot;Article&quot;,&quot;test&quot;:&quot;Test&quot;}","configgroup":"{&quot;basic&quot;:&quot;Basic&quot;,&quot;website&quot;:&quot;\\u7f51\\u7ad9\\u914d\\u7f6e&quot;,&quot;pay&quot;:&quot;\\u652f\\u4ed8\\u8bbe\\u7f6e&quot;,&quot;email&quot;:&quot;Email&quot;,&quot;dictionary&quot;:&quot;Dictionary&quot;,&quot;user&quot;:&quot;User&quot;}"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574502759),
(23, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"weburl"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503077),
(24, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"8a6b88e00269c5063ed8a8bbc15735a1","row":{"type":"string","group":"basic","name":"weburl","title":"\\u7f51\\u7ad9\\u5730\\u5740","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503096),
(25, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"1d59d849c45e5ecf369a5b24e816f4b8","row":{"weburl":"","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503292),
(26, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"webpath"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503370),
(27, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"0205b239bf20321508ab045d17a83ab2","row":{"type":"string","group":"basic","name":"webpath","title":"\\u7f51\\u7ad9\\u76ee\\u5f55","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503429),
(28, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"c4e282d362c8f47626fa1541ca8a26b1","row":{"type":"string","group":"website","name":"webpath","title":"\\u7f51\\u7ad9\\u76ee\\u5f55","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503452),
(29, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"1f69acfde2d995eddf1197f75c775971","row":{"type":"string","group":"website","name":"webpath","title":"\\u7f51\\u7ad9\\u76ee\\u5f55","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503492),
(30, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"author"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503570),
(31, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"9cc4b8f4aacd1fbdfc3f62e9e8b1fabd","row":{"type":"string","group":"website","name":"author","title":"\\u7f51\\u7ad9\\u4f5c\\u8005","value":"SHUMEI","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503590),
(32, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"generator"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503619),
(33, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"857b0a8c69aaa65e114bd1a2404f10c2","row":{"type":"string","group":"website","name":"generator","title":"\\u7a0b\\u5e8f\\u5f15\\u64ce","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503629),
(34, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"3166d0d8aeece54072329c5711e03375","row":{"weburl":"","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","webpath":"1","author":"SHUMEI","generator":"FastAdmin"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503644),
(35, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"d7a9d2b25d0c7efbd323c938935fb1b2","row":{"weburl":"","webpath":"","author":"SHUMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503797),
(36, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"03a0d866c673cf1b522fd0fa3ea8ae97","row":{"weburl":"","webpath":"","author":"SHUMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keyword":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574503806),
(37, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"copyright"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520802),
(38, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"06dc1038891f587c1b7ed94b80b90cfb","row":{"type":"string","group":"website","name":"copyright","title":"\\u7248\\u6743\\u4fe1\\u606f","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520835),
(39, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"05c43fe46f20f2bd1ff3d9776263c5f6","row":{"type":"string","group":"website","name":"copyright","title":"\\u7248\\u6743\\u4fe1\\u606f","value":"1","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520867),
(40, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"e59dde7c131ffea69183f4bcbb0f09ee","row":{"weburl":"","webpath":"","author":"SHUMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520908),
(41, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"hotline"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520951),
(42, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"f9f2dc5f0254c63e50ea626b7544ecc4","row":{"type":"string","group":"website","name":"hotline","title":"\\u5ba2\\u670d\\u70ed\\u7ebf","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520971),
(43, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"icp"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520998),
(44, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"887a893aece783db2e1c7eedc07ab0df","row":{"type":"string","group":"website","name":"icp","title":"\\u5907\\u6848\\u7f16\\u53f7","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574520998),
(45, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"shortname"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521029),
(46, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"fbbcde55f8304ec1bc3c95378822b5d5","row":{"type":"string","group":"website","name":"shortname","title":"\\u7cfb\\u7edf\\u7b80\\u79f0","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521034),
(47, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"7897f062e8b518e06f2f3707f2c26452","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"","icp":"","shortname":"FMFW"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521053),
(48, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"jishu"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521088),
(49, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"b39ca30b33939c22bf496759389400db","row":{"type":"string","group":"website","name":"jishu","title":"\\u6280\\u672f\\u652f\\u6301","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521096),
(50, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"a398ece7be30d2f38591e1d98c3e8009","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"","icp":"","shortname":"FMFW","jishu":"\\u6b66\\u6c49\\u73a2\\u7f8e\\u670d\\u52a1"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521108),
(51, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"ico"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521165),
(52, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"4967f5129e0c86f6f935f256b3c5aa9f","row":{"type":"image","group":"website","name":"ico","title":"\\u7cfb\\u7edfico\\u56fe\\u6807","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574521182),
(53, 1, 'admin', '/fa/public/OztrVoqw0h.php/ajax/upload', '', '{"name":"timg.jpg"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574522175),
(54, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"88987e59545023662a95a54dc7214b7f","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"","icp":"","shortname":"FMFW","jishu":"\\u6b66\\u6c49\\u73a2\\u7f8e\\u670d\\u52a1","ico":"\\/uploads\\/20191123\\/d999bf29704c5868d168befc866c5216.jpg"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574522181),
(55, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/attachment/del/ids/2', '常规管理 附件管理 删除', '{"action":"del","ids":"2","params":""}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574522187),
(56, 1, 'admin', '/fa/public/OztrVoqw0h.php/general/config/check', '', '{"row":{"name":"logo"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600693),
(57, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/add', '常规管理 系统配置 添加', '{"__token__":"8b59c470ef7de1987da27cc78cbac457","row":{"type":"image","group":"basic","name":"logo","title":"\\u9996\\u9875logo","value":"","content":"value1|title1\\r\\nvalue2|title2","tip":"","rule":"","extend":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600713),
(58, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"555dbb844935ba80ced51e3ee37791f4","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"400-101-1136","icp":"","shortname":"FMFW","jishu":"\\u6b66\\u6c49\\u73a2\\u7f8e\\u670d\\u52a1","logo":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600796),
(59, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"21d3bdaf83a5d4c1231553777fdac39c","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"400-800-8888","icp":"","shortname":"FMFW","jishu":"\\u6b66\\u6c49\\u73a2\\u7f8e\\u670d\\u52a1","logo":""}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600808),
(60, 1, 'admin', '/fa/public/OztrVoqw0h.php/ajax/upload', '', '{"name":"0000020092.fid.png"}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600850),
(61, 1, 'admin', '/fa/public/OztrVoqw0h.php/general.config/edit', '常规管理 系统配置 编辑', '{"__token__":"40f059402dbed8f2b351f18c0ed681f9","row":{"weburl":"","webpath":"","author":"FENMEI","generator":"FastAdmin","title":"\\u73a2\\u7f8e\\u670d\\u52a1","keywords":"\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51\\u662f\\u6700\\u4e13\\u4e1a\\u7684\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70\\u7f51\\u7ad9,\\u6c47\\u96c6\\u77e5\\u540d\\u4fdd\\u9669\\u516c\\u53f8\\u7684\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669\\u7b49\\u4fdd\\u9669\\u4ea7\\u54c1\\u3002","description":"\\u4fdd\\u9669\\u5728\\u7ebf\\u8d2d\\u4e70,\\u4fdd\\u9669\\u7f51,\\u4eba\\u5bff\\u4fdd\\u9669,\\u5065\\u5eb7\\u4fdd\\u9669,\\u5e74\\u91d1\\u4fdd\\u9669,\\u610f\\u5916\\u4fdd\\u9669,\\u65c5\\u6e38\\u4fdd\\u9669,\\u5883\\u5185\\u65c5\\u6e38,\\u5883\\u5916\\u65c5\\u6e38,\\u7533\\u6839\\u7b7e\\u8bc1,\\u7559\\u5b66\\u4fdd\\u9669,\\u4e07\\u80fd\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669\\u4fdd\\u9669,\\u5b9a\\u671f\\u5bff\\u9669,\\u5bb6\\u8d22\\u9669,\\u7cbe\\u5fc3\\u4f18\\u9009,\\u73a2\\u7f8e\\u670d\\u52a1\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u4fdd\\u9669\\u7f51,\\u73a2\\u7f8e\\u670d\\u52a1\\u5546\\u57ce","copyright":"Copyright \\u00a9 2015 - 2020 700\\u5ea6\\u7248\\u6743\\u6240\\u6709 \\u4eacICP\\u8bc1150775\\u53f7\\r\\n\\u4eac\\u516c\\u7f51\\u5b89\\u5907 11010502031698\\u53f7 | \\u672a\\u7ecf\\u8bb8\\u53ef\\u4e0d\\u5f97\\u8f6c\\u8f7d","hotline":"400-800-8888","icp":"","shortname":"FMFW","jishu":"\\u6b66\\u6c49\\u73a2\\u7f8e\\u670d\\u52a1","logo":"\\/uploads\\/20191124\\/defacbea50bc827539f2c597911b9116.png"}}', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:70.0) Gecko/20100101 Firefox/70.0', 1574600853);

-- --------------------------------------------------------

--
-- 表的结构 `fa_attachment`
--

CREATE TABLE IF NOT EXISTS `fa_attachment` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '物理路径',
  `imagewidth` varchar(30) NOT NULL DEFAULT '' COMMENT '宽度',
  `imageheight` varchar(30) NOT NULL DEFAULT '' COMMENT '高度',
  `imagetype` varchar(30) NOT NULL DEFAULT '' COMMENT '图片类型',
  `imageframes` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '图片帧数',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小',
  `mimetype` varchar(100) NOT NULL DEFAULT '' COMMENT 'mime类型',
  `extparam` varchar(255) NOT NULL DEFAULT '' COMMENT '透传数据',
  `createtime` int(10) DEFAULT NULL COMMENT '创建日期',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `uploadtime` int(10) DEFAULT NULL COMMENT '上传时间',
  `storage` varchar(100) NOT NULL DEFAULT 'local' COMMENT '存储位置',
  `sha1` varchar(40) NOT NULL DEFAULT '' COMMENT '文件 sha1编码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='附件表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `fa_attachment`
--

INSERT INTO `fa_attachment` (`id`, `admin_id`, `user_id`, `url`, `imagewidth`, `imageheight`, `imagetype`, `imageframes`, `filesize`, `mimetype`, `extparam`, `createtime`, `updatetime`, `uploadtime`, `storage`, `sha1`) VALUES
(1, 1, 0, '/assets/img/qrcode.png', '150', '150', 'png', 0, 21859, 'image/png', '', 1499681848, 1499681848, 1499681848, 'local', '17163603d0263e4838b9387ff2cd4877e8b018f6'),
(2, 1, 0, '/uploads/20191124/defacbea50bc827539f2c597911b9116.png', '120', '78', 'png', 0, 15612, 'image/png', '{"name":"0000020092.fid.png"}', 1574600850, 1574600850, 1574600850, 'local', 'f712a4bc7e53a7737438878cd9f7f53601b26f4f');

-- --------------------------------------------------------

--
-- 表的结构 `fa_auth_group`
--

CREATE TABLE IF NOT EXISTS `fa_auth_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父组别',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '组名',
  `rules` text NOT NULL COMMENT '规则ID',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='分组表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `fa_auth_group`
--

INSERT INTO `fa_auth_group` (`id`, `pid`, `name`, `rules`, `createtime`, `updatetime`, `status`) VALUES
(1, 0, 'Admin group', '*', 1490883540, 149088354, 'normal'),
(2, 1, 'Second group', '13,14,16,15,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,1,9,10,11,7,6,8,2,4,5', 1490883540, 1505465692, 'normal'),
(3, 2, 'Third group', '1,4,9,10,11,13,14,15,16,17,40,41,42,43,44,45,46,47,48,49,50,55,56,57,58,59,60,61,62,63,64,65,5', 1490883540, 1502205322, 'normal'),
(4, 1, 'Second group 2', '1,4,13,14,15,16,17,55,56,57,58,59,60,61,62,63,64,65', 1490883540, 1502205350, 'normal'),
(5, 2, 'Third group 2', '1,2,6,7,8,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34', 1490883540, 1502205344, 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `fa_auth_group_access` (
  `uid` int(10) unsigned NOT NULL COMMENT '会员ID',
  `group_id` int(10) unsigned NOT NULL COMMENT '级别ID',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='权限分组表';

--
-- 转存表中的数据 `fa_auth_group_access`
--

INSERT INTO `fa_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `fa_auth_rule`
--

CREATE TABLE IF NOT EXISTS `fa_auth_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('menu','file') NOT NULL DEFAULT 'file' COMMENT 'menu为菜单,file为权限节点',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '规则名称',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '规则名称',
  `icon` varchar(50) NOT NULL DEFAULT '' COMMENT '图标',
  `condition` varchar(255) NOT NULL DEFAULT '' COMMENT '条件',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `ismenu` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否为菜单',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT '0' COMMENT '权重',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `pid` (`pid`),
  KEY `weigh` (`weigh`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='节点表' AUTO_INCREMENT=85 ;

--
-- 转存表中的数据 `fa_auth_rule`
--

INSERT INTO `fa_auth_rule` (`id`, `type`, `pid`, `name`, `title`, `icon`, `condition`, `remark`, `ismenu`, `createtime`, `updatetime`, `weigh`, `status`) VALUES
(1, 'file', 0, 'dashboard', 'Dashboard', 'fa fa-dashboard', '', 'Dashboard tips', 1, 1497429920, 1497429920, 143, 'normal'),
(2, 'file', 0, 'general', 'General', 'fa fa-cogs', '', '', 1, 1497429920, 1497430169, 137, 'normal'),
(3, 'file', 0, 'category', 'Category', 'fa fa-leaf', '', 'Category tips', 1, 1497429920, 1497429920, 119, 'normal'),
(4, 'file', 0, 'addon', 'Addon', 'fa fa-rocket', '', 'Addon tips', 1, 1502035509, 1502035509, 0, 'normal'),
(5, 'file', 0, 'auth', 'Auth', 'fa fa-group', '', '', 1, 1497429920, 1497430092, 99, 'normal'),
(6, 'file', 2, 'general/config', 'Config', 'fa fa-cog', '', 'Config tips', 1, 1497429920, 1497430683, 60, 'normal'),
(7, 'file', 2, 'general/attachment', 'Attachment', 'fa fa-file-image-o', '', 'Attachment tips', 1, 1497429920, 1497430699, 53, 'normal'),
(8, 'file', 2, 'general/profile', 'Profile', 'fa fa-user', '', '', 1, 1497429920, 1497429920, 34, 'normal'),
(9, 'file', 5, 'auth/admin', 'Admin', 'fa fa-user', '', 'Admin tips', 1, 1497429920, 1497430320, 118, 'normal'),
(10, 'file', 5, 'auth/adminlog', 'Admin log', 'fa fa-list-alt', '', 'Admin log tips', 1, 1497429920, 1497430307, 113, 'normal'),
(11, 'file', 5, 'auth/group', 'Group', 'fa fa-group', '', 'Group tips', 1, 1497429920, 1497429920, 109, 'normal'),
(12, 'file', 5, 'auth/rule', 'Rule', 'fa fa-bars', '', 'Rule tips', 1, 1497429920, 1497430581, 104, 'normal'),
(13, 'file', 1, 'dashboard/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 136, 'normal'),
(14, 'file', 1, 'dashboard/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 135, 'normal'),
(15, 'file', 1, 'dashboard/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 133, 'normal'),
(16, 'file', 1, 'dashboard/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 134, 'normal'),
(17, 'file', 1, 'dashboard/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 132, 'normal'),
(18, 'file', 6, 'general/config/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 52, 'normal'),
(19, 'file', 6, 'general/config/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 51, 'normal'),
(20, 'file', 6, 'general/config/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 50, 'normal'),
(21, 'file', 6, 'general/config/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 49, 'normal'),
(22, 'file', 6, 'general/config/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 48, 'normal'),
(23, 'file', 7, 'general/attachment/index', 'View', 'fa fa-circle-o', '', 'Attachment tips', 0, 1497429920, 1497429920, 59, 'normal'),
(24, 'file', 7, 'general/attachment/select', 'Select attachment', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 58, 'normal'),
(25, 'file', 7, 'general/attachment/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 57, 'normal'),
(26, 'file', 7, 'general/attachment/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 56, 'normal'),
(27, 'file', 7, 'general/attachment/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 55, 'normal'),
(28, 'file', 7, 'general/attachment/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 54, 'normal'),
(29, 'file', 8, 'general/profile/index', 'View', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 33, 'normal'),
(30, 'file', 8, 'general/profile/update', 'Update profile', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 32, 'normal'),
(31, 'file', 8, 'general/profile/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 31, 'normal'),
(32, 'file', 8, 'general/profile/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 30, 'normal'),
(33, 'file', 8, 'general/profile/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 29, 'normal'),
(34, 'file', 8, 'general/profile/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 28, 'normal'),
(35, 'file', 3, 'category/index', 'View', 'fa fa-circle-o', '', 'Category tips', 0, 1497429920, 1497429920, 142, 'normal'),
(36, 'file', 3, 'category/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 141, 'normal'),
(37, 'file', 3, 'category/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 140, 'normal'),
(38, 'file', 3, 'category/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 139, 'normal'),
(39, 'file', 3, 'category/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 138, 'normal'),
(40, 'file', 9, 'auth/admin/index', 'View', 'fa fa-circle-o', '', 'Admin tips', 0, 1497429920, 1497429920, 117, 'normal'),
(41, 'file', 9, 'auth/admin/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 116, 'normal'),
(42, 'file', 9, 'auth/admin/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 115, 'normal'),
(43, 'file', 9, 'auth/admin/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 114, 'normal'),
(44, 'file', 10, 'auth/adminlog/index', 'View', 'fa fa-circle-o', '', 'Admin log tips', 0, 1497429920, 1497429920, 112, 'normal'),
(45, 'file', 10, 'auth/adminlog/detail', 'Detail', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 111, 'normal'),
(46, 'file', 10, 'auth/adminlog/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 110, 'normal'),
(47, 'file', 11, 'auth/group/index', 'View', 'fa fa-circle-o', '', 'Group tips', 0, 1497429920, 1497429920, 108, 'normal'),
(48, 'file', 11, 'auth/group/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 107, 'normal'),
(49, 'file', 11, 'auth/group/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 106, 'normal'),
(50, 'file', 11, 'auth/group/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 105, 'normal'),
(51, 'file', 12, 'auth/rule/index', 'View', 'fa fa-circle-o', '', 'Rule tips', 0, 1497429920, 1497429920, 103, 'normal'),
(52, 'file', 12, 'auth/rule/add', 'Add', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 102, 'normal'),
(53, 'file', 12, 'auth/rule/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 101, 'normal'),
(54, 'file', 12, 'auth/rule/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1497429920, 1497429920, 100, 'normal'),
(55, 'file', 4, 'addon/index', 'View', 'fa fa-circle-o', '', 'Addon tips', 0, 1502035509, 1502035509, 0, 'normal'),
(56, 'file', 4, 'addon/add', 'Add', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(57, 'file', 4, 'addon/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(58, 'file', 4, 'addon/del', 'Delete', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(59, 'file', 4, 'addon/local', 'Local install', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(60, 'file', 4, 'addon/state', 'Update state', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(61, 'file', 4, 'addon/install', 'Install', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(62, 'file', 4, 'addon/uninstall', 'Uninstall', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(63, 'file', 4, 'addon/config', 'Setting', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(64, 'file', 4, 'addon/refresh', 'Refresh', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(65, 'file', 4, 'addon/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1502035509, 1502035509, 0, 'normal'),
(66, 'file', 0, 'user', 'User', 'fa fa-list', '', '', 1, 1516374729, 1516374729, 0, 'normal'),
(67, 'file', 66, 'user/user', 'User', 'fa fa-user', '', '', 1, 1516374729, 1516374729, 0, 'normal'),
(68, 'file', 67, 'user/user/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(69, 'file', 67, 'user/user/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(70, 'file', 67, 'user/user/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(71, 'file', 67, 'user/user/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(72, 'file', 67, 'user/user/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(73, 'file', 66, 'user/group', 'User group', 'fa fa-users', '', '', 1, 1516374729, 1516374729, 0, 'normal'),
(74, 'file', 73, 'user/group/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(75, 'file', 73, 'user/group/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(76, 'file', 73, 'user/group/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(77, 'file', 73, 'user/group/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(78, 'file', 73, 'user/group/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(79, 'file', 66, 'user/rule', 'User rule', 'fa fa-circle-o', '', '', 1, 1516374729, 1516374729, 0, 'normal'),
(80, 'file', 79, 'user/rule/index', 'View', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(81, 'file', 79, 'user/rule/del', 'Del', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(82, 'file', 79, 'user/rule/add', 'Add', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(83, 'file', 79, 'user/rule/edit', 'Edit', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal'),
(84, 'file', 79, 'user/rule/multi', 'Multi', 'fa fa-circle-o', '', '', 0, 1516374729, 1516374729, 0, 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_category`
--

CREATE TABLE IF NOT EXISTS `fa_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `type` varchar(30) NOT NULL DEFAULT '' COMMENT '栏目类型',
  `name` varchar(30) NOT NULL DEFAULT '',
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `flag` set('hot','index','recommend') NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `diyname` varchar(30) NOT NULL DEFAULT '' COMMENT '自定义名称',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT '0' COMMENT '权重',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`),
  KEY `weigh` (`weigh`,`id`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='分类表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `fa_category`
--

INSERT INTO `fa_category` (`id`, `pid`, `type`, `name`, `nickname`, `flag`, `image`, `keywords`, `description`, `diyname`, `createtime`, `updatetime`, `weigh`, `status`) VALUES
(1, 0, 'page', '官方新闻', 'news', 'recommend', '/assets/img/qrcode.png', '', '', 'news', 1495262190, 1495262190, 1, 'normal'),
(2, 0, 'page', '移动应用', 'mobileapp', 'hot', '/assets/img/qrcode.png', '', '', 'mobileapp', 1495262244, 1495262244, 2, 'normal'),
(3, 2, 'page', '微信公众号', 'wechatpublic', 'index', '/assets/img/qrcode.png', '', '', 'wechatpublic', 1495262288, 1495262288, 3, 'normal'),
(4, 2, 'page', 'Android开发', 'android', 'recommend', '/assets/img/qrcode.png', '', '', 'android', 1495262317, 1495262317, 4, 'normal'),
(5, 0, 'page', '软件产品', 'software', 'recommend', '/assets/img/qrcode.png', '', '', 'software', 1495262336, 1499681850, 5, 'normal'),
(6, 5, 'page', '网站建站', 'website', 'recommend', '/assets/img/qrcode.png', '', '', 'website', 1495262357, 1495262357, 6, 'normal'),
(7, 5, 'page', '企业管理软件', 'company', 'index', '/assets/img/qrcode.png', '', '', 'company', 1495262391, 1495262391, 7, 'normal'),
(8, 6, 'page', 'PC端', 'website-pc', 'recommend', '/assets/img/qrcode.png', '', '', 'website-pc', 1495262424, 1495262424, 8, 'normal'),
(9, 6, 'page', '移动端', 'website-mobile', 'recommend', '/assets/img/qrcode.png', '', '', 'website-mobile', 1495262456, 1495262456, 9, 'normal'),
(10, 7, 'page', 'CRM系统 ', 'company-crm', 'recommend', '/assets/img/qrcode.png', '', '', 'company-crm', 1495262487, 1495262487, 10, 'normal'),
(11, 7, 'page', 'SASS平台软件', 'company-sass', 'recommend', '/assets/img/qrcode.png', '', '', 'company-sass', 1495262515, 1495262515, 11, 'normal'),
(12, 0, 'test', '测试1', 'test1', 'recommend', '/assets/img/qrcode.png', '', '', 'test1', 1497015727, 1497015727, 12, 'normal'),
(13, 0, 'test', '测试2', 'test2', 'recommend', '/assets/img/qrcode.png', '', '', 'test2', 1497015738, 1497015738, 13, 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_config`
--

CREATE TABLE IF NOT EXISTS `fa_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '变量名',
  `group` varchar(30) NOT NULL DEFAULT '' COMMENT '分组',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '变量标题',
  `tip` varchar(100) NOT NULL DEFAULT '' COMMENT '变量描述',
  `type` varchar(30) NOT NULL DEFAULT '' COMMENT '类型:string,text,int,bool,array,datetime,date,file',
  `value` text NOT NULL COMMENT '变量值',
  `content` text NOT NULL COMMENT '变量字典数据',
  `rule` varchar(100) NOT NULL DEFAULT '' COMMENT '验证规则',
  `extend` varchar(255) NOT NULL DEFAULT '' COMMENT '扩展属性',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='系统配置' AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `fa_config`
--

INSERT INTO `fa_config` (`id`, `name`, `group`, `title`, `tip`, `type`, `value`, `content`, `rule`, `extend`) VALUES
(1, 'name', 'basic', 'Site name', '请填写站点名称', 'string', '玢美服务', '', 'required', ''),
(3, 'cdnurl', 'basic', 'Cdn url', '如果静态资源使用第三方云储存请配置该值', 'string', '', '', '', ''),
(4, 'version', 'basic', 'Version', '如果静态资源有变动请重新配置该值', 'string', '1.0.1', '', 'required', ''),
(5, 'timezone', 'basic', 'Timezone', '', 'string', 'Asia/Shanghai', '', 'required', ''),
(6, 'forbiddenip', 'basic', 'Forbidden ip', '一行一条记录', 'text', '', '', '', ''),
(7, 'languages', 'basic', 'Languages', '', 'array', '{"backend":"zh-cn","frontend":"zh-cn"}', '', 'required', ''),
(8, 'fixedpage', 'basic', 'Fixed page', '请尽量输入左侧菜单栏存在的链接', 'string', 'dashboard', '', 'required', ''),
(9, 'categorytype', 'dictionary', 'Category type', '', 'array', '{"default":"Default","page":"Page","article":"Article","test":"Test"}', '', '', ''),
(10, 'configgroup', 'dictionary', 'Config group', '', 'array', '{"basic":"Basic","website":"网站配置","pay":"支付设置","email":"Email","dictionary":"Dictionary","user":"User"}', '', '', ''),
(11, 'mail_type', 'email', 'Mail type', '选择邮件发送方式', 'select', '1', '["Please select","SMTP","Mail"]', '', ''),
(12, 'mail_smtp_host', 'email', 'Mail smtp host', '错误的配置发送邮件会导致服务器超时', 'string', 'smtp.qq.com', '', '', ''),
(13, 'mail_smtp_port', 'email', 'Mail smtp port', '(不加密默认25,SSL默认465,TLS默认587)', 'string', '465', '', '', ''),
(14, 'mail_smtp_user', 'email', 'Mail smtp user', '（填写完整用户名）', 'string', '10000', '', '', ''),
(15, 'mail_smtp_pass', 'email', 'Mail smtp password', '（填写您的密码）', 'string', 'password', '', '', ''),
(16, 'mail_verify_type', 'email', 'Mail vertify type', '（SMTP验证方式[推荐SSL]）', 'select', '2', '["None","TLS","SSL"]', '', ''),
(17, 'mail_from', 'email', 'Mail from', '', 'string', '10000@qq.com', '', '', ''),
(18, 'weburl', 'website', '网站地址', '', 'string', '', '', '', ''),
(19, 'webpath', 'website', '网站目录', '', 'string', '', '', '', ''),
(20, 'author', 'website', '网站作者', '', 'string', 'FENMEI', '', '', ''),
(21, 'generator', 'website', '程序引擎', '', 'string', 'FastAdmin', '', '', ''),
(22, 'title', 'website', 'SEO标题', '请输入网站首页标题', 'string', '玢美服务', '', '', ''),
(23, 'keywords', 'website', '网站关键字', '请输入网站首页关键字', 'text', '玢美服务网是最专业的保险在线购买网站,汇集知名保险公司的人寿保险,健康保险,年金保险,意外保险,旅游保险,留学保险,万能保险等保险产品。', '', '', ''),
(24, 'description', 'website', '网站描述', '请输入网站首页描述', 'text', '保险在线购买,保险网,人寿保险,健康保险,年金保险,意外保险,旅游保险,境内旅游,境外旅游,申根签证,留学保险,万能保险,定期寿险保险,定期寿险,家财险,精心优选,玢美服务网,玢美服务保险网,玢美服务商城', '', '', ''),
(28, 'copyright', 'website', '版权信息', '', 'text', 'Copyright © 2015 - 2020 700度版权所有 京ICP证150775号\r\n京公网安备 11010502031698号 | 未经许可不得转载', '', '', ''),
(29, 'hotline', 'website', '客服热线', '', 'string', '400-800-8888', '', '', ''),
(30, 'icp', 'website', '备案编号', '', 'string', '', '', '', ''),
(31, 'shortname', 'website', '系统简称', '', 'string', 'FMFW', '', '', ''),
(32, 'jishu', 'website', '技术支持', '', 'string', '武汉玢美服务', '', '', ''),
(33, 'logo', 'website', '首页logo', 'logo宽120 高78', 'image', '/uploads/20191124/defacbea50bc827539f2c597911b9116.png', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `fa_ems`
--

CREATE TABLE IF NOT EXISTS `fa_ems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `event` varchar(30) NOT NULL DEFAULT '' COMMENT '事件',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `code` varchar(10) NOT NULL DEFAULT '' COMMENT '验证码',
  `times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '验证次数',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'IP',
  `createtime` int(10) unsigned DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='邮箱验证码表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fa_sms`
--

CREATE TABLE IF NOT EXISTS `fa_sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `event` varchar(30) NOT NULL DEFAULT '' COMMENT '事件',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `code` varchar(10) NOT NULL DEFAULT '' COMMENT '验证码',
  `times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '验证次数',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'IP',
  `createtime` int(10) unsigned DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='短信验证码表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fa_test`
--

CREATE TABLE IF NOT EXISTS `fa_test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `admin_id` int(10) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `category_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类ID(单选)',
  `category_ids` varchar(100) NOT NULL COMMENT '分类ID(多选)',
  `week` enum('monday','tuesday','wednesday') NOT NULL COMMENT '星期(单选):monday=星期一,tuesday=星期二,wednesday=星期三',
  `flag` set('hot','index','recommend') NOT NULL DEFAULT '' COMMENT '标志(多选):hot=热门,index=首页,recommend=推荐',
  `genderdata` enum('male','female') NOT NULL DEFAULT 'male' COMMENT '性别(单选):male=男,female=女',
  `hobbydata` set('music','reading','swimming') NOT NULL COMMENT '爱好(多选):music=音乐,reading=读书,swimming=游泳',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `images` varchar(1500) NOT NULL DEFAULT '' COMMENT '图片组',
  `attachfile` varchar(100) NOT NULL DEFAULT '' COMMENT '附件',
  `keywords` varchar(100) NOT NULL DEFAULT '' COMMENT '关键字',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `city` varchar(100) NOT NULL DEFAULT '' COMMENT '省市',
  `json` varchar(255) DEFAULT NULL COMMENT '配置:key=名称,value=值',
  `price` float(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '价格',
  `views` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击',
  `startdate` date DEFAULT NULL COMMENT '开始日期',
  `activitytime` datetime DEFAULT NULL COMMENT '活动时间(datetime)',
  `year` year(4) DEFAULT NULL COMMENT '年',
  `times` time DEFAULT NULL COMMENT '时间',
  `refreshtime` int(10) DEFAULT NULL COMMENT '刷新时间(int)',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `deletetime` int(10) DEFAULT NULL COMMENT '删除时间',
  `weigh` int(10) NOT NULL DEFAULT '0' COMMENT '权重',
  `switch` tinyint(1) NOT NULL DEFAULT '0' COMMENT '开关',
  `status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
  `state` enum('0','1','2') NOT NULL DEFAULT '1' COMMENT '状态值:0=禁用,1=正常,2=推荐',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='测试表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fa_test`
--

INSERT INTO `fa_test` (`id`, `admin_id`, `category_id`, `category_ids`, `week`, `flag`, `genderdata`, `hobbydata`, `title`, `content`, `image`, `images`, `attachfile`, `keywords`, `description`, `city`, `json`, `price`, `views`, `startdate`, `activitytime`, `year`, `times`, `refreshtime`, `createtime`, `updatetime`, `deletetime`, `weigh`, `switch`, `status`, `state`) VALUES
(1, 0, 12, '12,13', 'monday', 'hot,index', 'male', 'music,reading', '我是一篇测试文章', '<p>我是测试内容</p>', '/assets/img/avatar.png', '/assets/img/avatar.png,/assets/img/qrcode.png', '/assets/img/avatar.png', '关键字', '描述', '广西壮族自治区/百色市/平果县', '{"a":"1","b":"2"}', 0.00, 0, '2017-07-10', '2017-07-10 18:24:45', 2017, '18:24:45', 1499682285, 1499682526, 1499682526, NULL, 0, 1, 'normal', '1');

-- --------------------------------------------------------

--
-- 表的结构 `fa_user`
--

CREATE TABLE IF NOT EXISTS `fa_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `group_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '组别ID',
  `username` varchar(32) NOT NULL DEFAULT '' COMMENT '用户名',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(30) NOT NULL DEFAULT '' COMMENT '密码盐',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '等级',
  `gender` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '性别',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `bio` varchar(100) NOT NULL DEFAULT '' COMMENT '格言',
  `money` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '余额',
  `score` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '积分',
  `successions` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '连续登录天数',
  `maxsuccessions` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '最大连续登录天数',
  `prevtime` int(10) DEFAULT NULL COMMENT '上次登录时间',
  `logintime` int(10) DEFAULT NULL COMMENT '登录时间',
  `loginip` varchar(50) NOT NULL DEFAULT '' COMMENT '登录IP',
  `loginfailure` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '失败次数',
  `joinip` varchar(50) NOT NULL DEFAULT '' COMMENT '加入IP',
  `jointime` int(10) DEFAULT NULL COMMENT '加入时间',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `token` varchar(50) NOT NULL DEFAULT '' COMMENT 'Token',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  `verification` varchar(255) NOT NULL DEFAULT '' COMMENT '验证',
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `mobile` (`mobile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fa_user`
--

INSERT INTO `fa_user` (`id`, `group_id`, `username`, `nickname`, `password`, `salt`, `email`, `mobile`, `avatar`, `level`, `gender`, `birthday`, `bio`, `money`, `score`, `successions`, `maxsuccessions`, `prevtime`, `logintime`, `loginip`, `loginfailure`, `joinip`, `jointime`, `createtime`, `updatetime`, `token`, `status`, `verification`) VALUES
(1, 1, 'admin', 'admin', 'c13f62012fd6a8fdf06b3452a94430e5', 'rpR6Bv', 'admin@163.com', '13888888888', '', 0, 0, '2017-04-15', '', '0.00', 0, 1, 1, 1516170492, 1516171614, '127.0.0.1', 0, '127.0.0.1', 1491461418, 0, 1516171614, '', 'normal', '');

-- --------------------------------------------------------

--
-- 表的结构 `fa_user_group`
--

CREATE TABLE IF NOT EXISTS `fa_user_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '' COMMENT '组名',
  `rules` text COMMENT '权限节点',
  `createtime` int(10) DEFAULT NULL COMMENT '添加时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `status` enum('normal','hidden') DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员组表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fa_user_group`
--

INSERT INTO `fa_user_group` (`id`, `name`, `rules`, `createtime`, `updatetime`, `status`) VALUES
(1, '默认组', '1,2,3,4,5,6,7,8,9,10,11,12', 1515386468, 1516168298, 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_user_money_log`
--

CREATE TABLE IF NOT EXISTS `fa_user_money_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `money` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '变更余额',
  `before` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '变更前余额',
  `after` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '变更后余额',
  `memo` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员余额变动表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fa_user_rule`
--

CREATE TABLE IF NOT EXISTS `fa_user_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) DEFAULT NULL COMMENT '父ID',
  `name` varchar(50) DEFAULT NULL COMMENT '名称',
  `title` varchar(50) DEFAULT '' COMMENT '标题',
  `remark` varchar(100) DEFAULT NULL COMMENT '备注',
  `ismenu` tinyint(1) DEFAULT NULL COMMENT '是否菜单',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '更新时间',
  `weigh` int(10) DEFAULT '0' COMMENT '权重',
  `status` enum('normal','hidden') DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员规则表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `fa_user_rule`
--

INSERT INTO `fa_user_rule` (`id`, `pid`, `name`, `title`, `remark`, `ismenu`, `createtime`, `updatetime`, `weigh`, `status`) VALUES
(1, 0, 'index', '前台', '', 1, 1516168079, 1516168079, 1, 'normal'),
(2, 0, 'api', 'API接口', '', 1, 1516168062, 1516168062, 2, 'normal'),
(3, 1, 'user', '会员模块', '', 1, 1515386221, 1516168103, 12, 'normal'),
(4, 2, 'user', '会员模块', '', 1, 1515386221, 1516168092, 11, 'normal'),
(5, 3, 'index/user/login', '登录', '', 0, 1515386247, 1515386247, 5, 'normal'),
(6, 3, 'index/user/register', '注册', '', 0, 1515386262, 1516015236, 7, 'normal'),
(7, 3, 'index/user/index', '会员中心', '', 0, 1516015012, 1516015012, 9, 'normal'),
(8, 3, 'index/user/profile', '个人资料', '', 0, 1516015012, 1516015012, 4, 'normal'),
(9, 4, 'api/user/login', '登录', '', 0, 1515386247, 1515386247, 6, 'normal'),
(10, 4, 'api/user/register', '注册', '', 0, 1515386262, 1516015236, 8, 'normal'),
(11, 4, 'api/user/index', '会员中心', '', 0, 1516015012, 1516015012, 10, 'normal'),
(12, 4, 'api/user/profile', '个人资料', '', 0, 1516015012, 1516015012, 3, 'normal');

-- --------------------------------------------------------

--
-- 表的结构 `fa_user_score_log`
--

CREATE TABLE IF NOT EXISTS `fa_user_score_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `score` int(10) NOT NULL DEFAULT '0' COMMENT '变更积分',
  `before` int(10) NOT NULL DEFAULT '0' COMMENT '变更前积分',
  `after` int(10) NOT NULL DEFAULT '0' COMMENT '变更后积分',
  `memo` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员积分变动表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `fa_user_token`
--

CREATE TABLE IF NOT EXISTS `fa_user_token` (
  `token` varchar(50) NOT NULL COMMENT 'Token',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '会员ID',
  `createtime` int(10) DEFAULT NULL COMMENT '创建时间',
  `expiretime` int(10) DEFAULT NULL COMMENT '过期时间',
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='会员Token表';

-- --------------------------------------------------------

--
-- 表的结构 `fa_version`
--

CREATE TABLE IF NOT EXISTS `fa_version` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `oldversion` varchar(30) NOT NULL DEFAULT '' COMMENT '旧版本号',
  `newversion` varchar(30) NOT NULL DEFAULT '' COMMENT '新版本号',
  `packagesize` varchar(30) NOT NULL DEFAULT '' COMMENT '包大小',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '升级内容',
  `downloadurl` varchar(255) NOT NULL DEFAULT '' COMMENT '下载地址',
  `enforce` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '强制更新',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `weigh` int(10) NOT NULL DEFAULT '0' COMMENT '权重',
  `status` varchar(30) NOT NULL DEFAULT '' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='版本表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `fa_version`
--

INSERT INTO `fa_version` (`id`, `oldversion`, `newversion`, `packagesize`, `content`, `downloadurl`, `enforce`, `createtime`, `updatetime`, `weigh`, `status`) VALUES
(1, '1.1.1,2', '1.2.1', '20M', '更新内容', 'https://www.fastadmin.net/download.html', 1, 1520425318, 0, 0, 'normal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
