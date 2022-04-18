-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-04-18 22:06:18
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `store`
--

-- --------------------------------------------------------

--
-- 表的结构 `dingdan`
--

CREATE TABLE `dingdan` (
  `orderid` int(30) NOT NULL,
  `userid` int(30) NOT NULL,
  `jiage` int(30) NOT NULL,
  `shouhuoxinxibianhao` int(30) NOT NULL,
  `zhifufangshi` int(30) NOT NULL,
  `zhifuzhuangtai` int(30) NOT NULL,
  `yunfei` int(30) NOT NULL,
  `zhifushijian` int(30) NOT NULL,
  `fahuoshijian` int(30) NOT NULL,
  `dingdanwangchengshijian` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `productid` int(30) NOT NULL,
  `productname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `productjiage` int(30) NOT NULL,
  `productshuliang` int(30) NOT NULL,
  `productzhuangtai` int(30) NOT NULL,
  `shangjiashijian` date NOT NULL,
  `gengxinshijian` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `purchaseproduct`
--

CREATE TABLE `purchaseproduct` (
  `purchaseid` int(30) NOT NULL,
  `userid` int(30) NOT NULL,
  `productid` int(30) NOT NULL,
  `purchaseproductshuliang` int(30) NOT NULL,
  `purchasetime` int(30) NOT NULL,
  `purchasejiage` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userid` int(30) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `phone`) VALUES
(1, '1234556', '20030526xj', '17691568477');

--
-- 转储表的索引
--

--
-- 表的索引 `dingdan`
--
ALTER TABLE `dingdan`
  ADD PRIMARY KEY (`orderid`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- 表的索引 `purchaseproduct`
--
ALTER TABLE `purchaseproduct`
  ADD PRIMARY KEY (`purchaseid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `dingdan`
--
ALTER TABLE `dingdan`
  MODIFY `orderid` int(30) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(30) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `purchaseproduct`
--
ALTER TABLE `purchaseproduct`
  MODIFY `purchaseid` int(30) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
