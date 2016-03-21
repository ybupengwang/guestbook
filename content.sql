-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2016 年 03 月 21 日 05:58
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `guestbook`
--

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `content`
--

INSERT INTO `content` (`id`, `name`, `email`, `content`) VALUES
(1, '测试', '测试', '王朋'),
(2, '测试', '测试', '测试');
