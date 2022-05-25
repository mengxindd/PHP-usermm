-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 02 月 12 日 14:28
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `usermm`
--

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_estonian_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_estonian_ci DEFAULT NULL,
  `question` varchar(50) COLLATE utf8_estonian_ci DEFAULT NULL,
  `answer` varchar(50) COLLATE utf8_estonian_ci DEFAULT NULL,
  `truename` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_estonian_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `QQ` varchar(20) COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_estonian_ci NOT NULL,
  `authority` char(1) COLLATE utf8_estonian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `question`, `answer`, `truename`, `sex`, `address`, `tel`, `QQ`, `email`, `authority`) VALUES
(1, 'admin', '123', '2', '清华大学', '蒙面超人', '男', '五道口1001号', '13570516666', '473704087', '473704087@qq.com', '0'),
(2, '大麻袋', '888', '3', '广雅中学', '李嘉诚', '男', '太平山顶', '999666', '12345008', '123008@163.com', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
