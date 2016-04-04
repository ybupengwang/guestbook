-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 04 月 04 日 04:58
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `testguest`
--

-- --------------------------------------------------------

--
-- 表的结构 `wp_user`
--

CREATE TABLE IF NOT EXISTS `wp_user` (
  `wp_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户注册编码',
  `wp_uniqid` char(40) NOT NULL COMMENT '用户唯一标识符',
  `wp_active` char(40) NOT NULL COMMENT '激活唯一标识符',
  `wp_username` varchar(20) NOT NULL COMMENT '用户名',
  `wp_password` char(40) NOT NULL COMMENT '密码',
  `wp_question` varchar(20) NOT NULL COMMENT '问题',
  `wp_answer` char(40) NOT NULL COMMENT '答案',
  `wp_email` char(40) DEFAULT NULL COMMENT '邮箱',
  `wp_qq` varchar(10) DEFAULT NULL COMMENT 'qq',
  `wp_sex` varchar(1) NOT NULL COMMENT '性别',
  `wp_face` varchar(12) NOT NULL COMMENT '头像',
  `wp_url` varchar(40) DEFAULT NULL COMMENT '网址',
  `wp_reg_time` datetime NOT NULL COMMENT '注册时间',
  `wp_last_time` datetime NOT NULL COMMENT '最后登陆时间',
  `wp_last_ip` varchar(20) NOT NULL COMMENT 'ip',
  PRIMARY KEY (`wp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 导出表中的数据 `wp_user`
--

INSERT INTO `wp_user` (`wp_id`, `wp_uniqid`, `wp_active`, `wp_username`, `wp_password`, `wp_question`, `wp_answer`, `wp_email`, `wp_qq`, `wp_sex`, `wp_face`, `wp_url`, `wp_reg_time`, `wp_last_time`, `wp_last_ip`) VALUES
(24, 'd20b50473eedd2765c02645e3cff596989f37659', 'e4e23b313351402a4e830255782a29a1c19e206c', '极美科技', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'jimei@163.com', '5258658', '男', '', 'http://jimeikeji.cn', '2016-04-04 12:23:41', '2016-04-04 12:23:41', '127.0.0.1'),
(25, '38ec24fb8d23811417919f48657fb0a3c489193d', '42384ab2d2d2b59ef6d391a3a0b712add2b09887', 'wangpeng', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '', '', '男', '', '', '2016-04-04 12:24:53', '2016-04-04 12:24:53', '127.0.0.1'),
(26, '810cb6620700f955db541409cc4338e2194051fc', '1a176323f02d10fcc9a02d3643993d668b85a9d6', '揭秘', '7c4a8d09ca3762af61e59520943dc26494f8941b', '12345689', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '男', '', '', '2016-04-04 12:33:45', '2016-04-04 12:33:45', '127.0.0.1'),
(27, 'dbb9177dc4d94dc577669d522dd89b24062f475d', '2f88e582dd3aebdfe91acba60c44d1d397f096bb', '极美科技1', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', '20eabe5d64b0e216796e834f52d61fd0b70332fc', '', '', '男', '', '', '2016-04-04 12:52:33', '2016-04-04 12:52:33', '127.0.0.1');
