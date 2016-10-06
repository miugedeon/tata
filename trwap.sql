-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 05 日 09:42
-- 服务器版本: 5.1.40
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `trwap`
--

-- --------------------------------------------------------

--
-- 表的结构 `lxy_download`
--

CREATE TABLE IF NOT EXISTS `lxy_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FileName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `FileName_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `FileFile` varchar(200) CHARACTER SET utf8 NOT NULL,
  `FileContent` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Admin` varchar(200) CHARACTER SET utf8 NOT NULL,
  `Hzm` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Hist` int(11) NOT NULL,
  `AddDate` varchar(200) CHARACTER SET utf8 NOT NULL,
  `downpwd` varchar(200) CHARACTER SET utf8 NOT NULL,
  `language` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_type_2` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- 导出表中的数据 `lxy_download`
--

INSERT INTO `lxy_download` (`id`, `FileName`, `FileName_en`, `FileFile`, `FileContent`, `Admin`, `Hzm`, `Hist`, `AddDate`, `downpwd`, `language`, `p_type_2`) VALUES
(9, 'T5一体化---IES档', 'T5---IES', '201312040200212752.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 17),
(10, 'CE---LED T8 Tube', 'CE---LED T8 Tube', '201312040204235492.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', 'cn', 18),
(11, 'FCC---LED Tube MT8-120-15', 'FCC---LED Tube MT8-120-15', '201312040213580612.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', 'cn', 18),
(12, 'FCC---LED Tube MT8-60-13', 'FCC---LED Tube MT8-60-13', '201312040218251578.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', 'cn', 18),
(13, 'ROHS---T8英文版', 'T8---ROHS', '201312040218535854.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 18),
(14, 'T8单支---IES档', 'T8---IES', '201312040219147520.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 18),
(8, 'T5一体化---测试报告', 'T5---Test report', '201312041221284266.zip', 'T5一体化---测试报告', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 17),
(48, 'DIALux 在线目录 说明', 'DIALux setup', '201401181210142497.doc', '', 'admin', '.doc', 0, '2014-01-18', '1', '', 0),
(15, 'T8单支---测试报告', 'T8---Test report', '201312040219474619.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 18),
(16, 'UL---T8', 'T8---UL', '201312040219591067.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 18),
(17, 'T8一体化---IES档', 'T8 Integrated---IES', '201312040221067539.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 19),
(18, 'T8一体化---测试报告', 'T8 Integrated---Test report', '201312040221196052.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 19),
(19, '橱柜灯---IES档', '', '201312040221360180.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 20),
(20, '橱柜灯---测试报告', '', '201312040221542053.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 20),
(21, 'UL---3W蜡烛灯', 'LED Candle light---UL', '201312040222172332.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 21),
(22, '蜡烛灯---IES档', 'LED Candle light---IES', '201312040222315947.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 21),
(23, '蜡烛灯---测试报告', 'LED Candle light---Test report', '201312040222441761.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 21),
(24, 'APOLLO---IES档', 'APOLLO---IES', '201312040223013512.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 22),
(25, 'APOLLO---测试报告', 'APOLLO---Test report', '201312040223163154.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 22),
(38, '平板灯---测试报告', 'LED Panel light---Test report', '201312040232265053.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 23),
(37, '平板灯---IES档', 'LED Panel light---IES', '201312040232101768.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 23),
(28, 'CE---EMC球泡 MA03', 'CE---EMC球泡 MA03', '201312040226268454.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(29, 'CE---EMC球泡 MA05', 'CE---EMC球泡 MA05', '201312040226455153.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(30, 'ROHS---A21英文版', 'ROHS---A21英文版', '201312040227163808.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(31, 'UL---6W球泡', 'UL---6W球泡', '201312040227301345.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(32, '球泡---IES档', '球泡---IES档', '201312040227423396.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(33, '球泡---测试报告', '球泡---测试报告', '201312040227566700.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 24),
(34, '筒灯---配光曲线', '筒灯---配光曲线', '201312040228145997.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 25),
(35, '吸顶灯---IES档', '吸顶灯---IES档', '201312040228297925.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 26),
(36, '吸顶灯---测试报告', '吸顶灯---测试报告', '201312040228446296.zip', '', 'admin', '.zip', 0, '2013-12-04', '0', '', 26),
(39, 'CE---EMC球泡 MA03', 'LED Bulb light MA03---CE', '201312040233136017.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(40, 'CE---EMC球泡 MA05', 'LED Bulb light MA05---CE', '201312040233408153.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(41, 'ROHS---A21英文版', 'LED Bulb light---ROHS', '201312040233580339.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(42, 'UL---6W球泡', 'LED Bulb light 6W---UL', '201312040234114166.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(43, '球泡---IES档', 'LED Bulb light---IES', '201312040234259501.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(44, '球泡---测试报告', 'LED Bulb light---Test report', '201312040234429977.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 24),
(45, '筒灯---配光曲线', 'LED Downlight---distribution curve flux', '201312040235141312.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 25),
(46, '吸顶灯---IES档', 'LED Ceiling---IES', '201312040235291146.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 26),
(47, '吸顶灯---测试报告', 'LED Ceiling---Test report', '201312040235455418.zip', '', 'admin', '.zip', 0, '2013-12-12', '0', 'cn', 26),
(49, 'DIALux 在线目录 说明', 'DIALux setup', '201401181212577884.doc', '', 'admin', '.doc', 0, '2014-01-18', '0', 'cn', 27);

-- --------------------------------------------------------

--
-- 表的结构 `p_admin`
--

CREATE TABLE IF NOT EXISTS `p_admin` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_username` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_userpwd` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_adddate` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_lastdate` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_hist` int(11) DEFAULT '0',
  `p_lv` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `p_admin`
--

INSERT INTO `p_admin` (`p_id`, `p_username`, `p_userpwd`, `p_adddate`, `p_lastdate`, `p_hist`, `p_lv`) VALUES
(1, 'admin', '6e75a6fc07caaa04191c4cbe89e9433c', '2012-05-03 01:32:44', '2016-09-09 09:43:27', 764, '1');

-- --------------------------------------------------------

--
-- 表的结构 `p_area`
--

CREATE TABLE IF NOT EXISTS `p_area` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_bigtype` int(11) NOT NULL,
  `p_smalltype` int(11) NOT NULL,
  `p_sort` int(11) NOT NULL,
  `p_productname` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_content2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_content3` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file1` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file2` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file3` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file4` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file5` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file6` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file7` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file8` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file9` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file11` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file12` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file13` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file14` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file15` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_file16` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic3` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic4` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic5` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_index` int(11) NOT NULL,
  `p_vip` int(11) NOT NULL,
  `p_adddate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_hist` int(11) NOT NULL,
  `p_admin` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_area`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_area_type`
--

CREATE TABLE IF NOT EXISTS `p_area_type` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_bigtype` int(11) NOT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_profile` text CHARACTER SET utf8 NOT NULL,
  `p_file` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_index` int(11) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_area_type`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_banner`
--

CREATE TABLE IF NOT EXISTS `p_banner` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_mark` varchar(100) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic` varchar(222) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_url` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(222) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `p_banner`
--

INSERT INTO `p_banner` (`p_id`, `p_mark`, `p_pic`, `language`, `p_url`, `p_pic2`, `p_title`, `p_sort`) VALUES
(6, 'wapindex', '../upload/picture/201609070929505.jpg', '', '', '../upload/picture/201609070929500.jpg', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `p_baoming`
--

CREATE TABLE IF NOT EXISTS `p_baoming` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_specialty` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_specialty2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_userName` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_sex` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_birthDate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_Nation` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_IDnumber` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_tel` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_maxEdu` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_address` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_content` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_state` int(11) NOT NULL,
  `p_addDate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_index` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_baoming`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_case`
--

CREATE TABLE IF NOT EXISTS `p_case` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_type` int(11) NOT NULL,
  `p_typelist` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_area` int(200) NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_content` text CHARACTER SET utf8 NOT NULL,
  `p_content_en` text CHARACTER SET utf8 NOT NULL,
  `p_pic_s1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic3` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic4` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s4` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_index` int(11) NOT NULL,
  `p_hist` int(11) NOT NULL,
  `p_adddate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_admin` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- 导出表中的数据 `p_case`
--

INSERT INTO `p_case` (`p_id`, `p_type`, `p_typelist`, `p_title`, `p_area`, `p_title_en`, `p_content`, `p_content_en`, `p_pic_s1`, `p_pic1`, `p_pic2`, `p_pic_s2`, `p_pic3`, `p_pic_s3`, `p_pic4`, `p_pic_s4`, `p_index`, `p_hist`, `p_adddate`, `p_admin`, `language`) VALUES
(11, 3, 'case', '6', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080608_17619.png" /></p>', '', '../upload/case/201311010406143_s.jpg', '../upload/case/201311010406143_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(12, 3, 'case', '5', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080625_10942.png" /></p>', '', '../upload/case/201311010406316_s.jpg', '../upload/case/201311010406316_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(13, 3, 'case', '4', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080644_57999.png" /></p>', '', '../upload/case/201311010406513_s.jpg', '../upload/case/201311010406513_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(14, 3, 'case', '3', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080709_95201.png" /></p>', '', '../upload/case/201311010407162_s.jpg', '../upload/case/201311010407162_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(15, 3, 'case', '2', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080725_98862.png" /></p>', '', '../upload/case/201311010407321_s.jpg', '../upload/case/201311010407321_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(16, 3, 'case', '1', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101080741_74651.png" /></p>', '', '../upload/case/201311010407472_s.jpg', '../upload/case/201311010407472_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(17, 4, 'case', '北环高速路灯照明改造示范', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101081203_63069.jpg" /></p>', '', '../upload/case/201311010412067_s.jpg', '../upload/case/201311010412067_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(18, 4, 'case', '广东武警消防训练大队LED路灯改造工程', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101081219_99414.jpg" /></p>', '', '../upload/case/201311010412269_s.jpg', '../upload/case/201311010412269_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(19, 4, 'case', '湖南湘乡石坝村太阳能LED路灯照明项目', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101081258_88420.jpg" /></p>', '', '../upload/case/201311010413048_s.jpg', '../upload/case/201311010413048_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(20, 4, 'case', '怀集火车站路段LED路灯改造工程', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101081321_30481.jpg" /></p>', '', '../upload/case/201311010413246_s.jpg', '../upload/case/201311010413246_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-01', 'admin', 'cn'),
(21, 4, 'case', '小榄路灯', 0, '', '<p align="center"><img alt="" src="/editor/attached/20131101/20131101081336_36207.jpg" /></p>', '', '../upload/case/201311010413421_s.jpg', '../upload/case/201311010413421_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-22', 'admin', 'cn'),
(22, 2, 'case', '红旗大厦', 9, 'The red mansion', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020833_85014.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年10月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">红旗大厦&nbsp;</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">内蒙古赤峰市红旗南路&nbsp;</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020833_85014.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年10月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">红旗大厦&nbsp;</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">内蒙古赤峰市红旗南路&nbsp;</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">&nbsp;</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311220414380_s.jpg', '../upload/case/201311220414380_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(23, 2, 'case', '超市发超市', 9, 'Chao Shi Fa Super market', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020734_64808.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年10月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">超市发超市</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:北京市海定区毛纺路</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020734_64808.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年10月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">超市发超市</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:北京市海定区毛纺路</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311220419392_s.jpg', '../upload/case/201311220419392_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(24, 2, 'case', '韩国大使馆', 9, 'korean embassy', '<p align="center"><img alt="" src="/editor/attached/20131122/20131122143116_31343.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年12月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">韩国大使馆</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:北京市朝阳区东方东路20号</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131122/20131122143116_31343.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:北京市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年12月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">韩国大使馆</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:北京市朝阳区东方东路20号</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8 Tube</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311220428087_s.jpg', '../upload/case/201311220428087_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(25, 2, 'case', '康师傅工厂', 10, 'Kangshifu factory', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020500_29107.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:天津市</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年11月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">康师傅工厂</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:天津市塘沽区新塘路</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123020500_29107.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">Regional：TianJin</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">Time：</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012.11</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">Project:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">康师傅工厂</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">Add：天津市塘沽区新塘路</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">Introductio</span><span style="font-family:SimSun;color:#666666;font-size:14px;">：Energy saving</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">Products</span><span style="font-family:SimSun;color:#666666;font-size:14px;">：</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8 Tube</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231003306_s.jpg', '../upload/case/201311231003306_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(26, 2, 'case', '菏泽巨野北城医院', 11, 'North City Hospital', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123021259_49852.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年5月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">菏泽巨野北城医院</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东菏泽巨野</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">巨野北城医院项目建筑面积大约30000平方米，建筑楼层6层</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123021259_49852.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年5月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">菏泽巨野北城医院</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东菏泽巨野</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">巨野北城医院项目建筑面积大约30000平方米，建筑楼层6层</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231016505_s.jpg', '../upload/case/201311231016505_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(27, 2, 'case', '凤凰山庄', 11, 'The Phoenix Hill', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123021910_32879.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">烟台凤凰山庄地下停车场</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东 烟台</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">烟台凤凰山庄项目占地面积：139710平方米，建筑面积：88000平方米</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123021910_32879.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">烟台凤凰山庄地下停车场</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东 烟台</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">烟台凤凰山庄项目占地面积：139710平方米，建筑面积：88000平方米</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231022213_s.jpg', '../upload/case/201311231022213_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(28, 2, 'case', '淄博市地方税务局', 11, 'Tax Bureau', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123022348_26158.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">淄博市地方税务局</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东淄博临淄</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">临淄地税局新盖办公楼项目建筑面积大约1000平方米，建筑楼层3层</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123022348_26158.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></td>\r\n<td><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">淄博市地方税务局</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东淄博临淄</span></td>\r\n</tr>\r\n<tr>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">临淄地税局新盖办公楼项目建筑面积大约1000平方米，建筑楼层3层</span></td>\r\n<td><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231028000_s.jpg', '../upload/case/201311231028000_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(29, 2, 'case', '青岛宝龙城市广场', 11, 'Qingdao Powerlong City Plaza', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123024606_90925.jpg" width="650" height="488" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">青岛宝龙城市广场</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:青岛李沧区青山路689号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123024606_90925.jpg" width="650" height="488" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">青岛宝龙城市广场</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:青岛李沧区青山路689号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311241006041_s.jpg', '../upload/case/201311241006041_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-24', 'admin', 'cn'),
(30, 2, 'case', '沂源新区医院', 11, 'Yiyuan Hospital', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123024827_11013.jpg" width="800" height="544" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">青岛宝龙城市广场</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:青岛李沧区青山路689号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123024827_11013.jpg" width="800" height="544" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">沂源新区医院</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东省淄博市沂源县胜利路21号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311241006538_s.jpg', '../upload/case/201311241006538_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-24', 'admin', 'cn'),
(31, 2, 'case', '泰安中心医院', 11, 'Tai''an Central Hospital', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025113_51720.jpg" width="709" height="472" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年7月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">泰安中心医院</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东省泰安市龙潭路29号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025113_51720.jpg" width="709" height="472" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:山东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年7月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">泰安中心医院</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东省泰安市龙潭路29号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311241007213_s.jpg', '../upload/case/201311241007213_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-24', 'admin', 'cn'),
(32, 2, 'case', '贵州 都匀市第三中学', 13, 'Guizhou third middle school of Tuyun City', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025255_38012.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;">贵州</span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">贵州 都匀市第三中学</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东省泰安市龙潭路29号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">都匀三中办公室和教室照明灯具改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025255_38012.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;">贵州</span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">贵州 都匀市第三中学</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:山东省泰安市龙潭路29号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">都匀三中办公室和教室照明灯具改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311241008333_s.jpg', '../upload/case/201311241008333_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-24', 'admin', 'cn'),
(33, 2, 'case', '安徽大学逸夫图书馆', 14, 'The Yi Fu Library of Anhui University', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025604_38663.jpg" width="800" height="524" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽</span></span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽大学逸夫图书馆</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:合肥市</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">图书馆光源LED光源替换</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025604_38663.jpg" width="800" height="524" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽</span></span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽大学逸夫图书馆</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:合肥市</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">图书馆光源LED光源替换</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231057345_s.jpg', '../upload/case/201311231057345_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn');
INSERT INTO `p_case` (`p_id`, `p_type`, `p_typelist`, `p_title`, `p_area`, `p_title_en`, `p_content`, `p_content_en`, `p_pic_s1`, `p_pic1`, `p_pic2`, `p_pic_s2`, `p_pic3`, `p_pic_s3`, `p_pic4`, `p_pic_s4`, `p_index`, `p_hist`, `p_adddate`, `p_admin`, `language`) VALUES
(34, 2, 'case', '合肥两淮豪生大酒店', 14, 'Hefei Liang HUai Hao Sheng Hotel', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025802_57584.jpg" width="800" height="577" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽</span></span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">合肥两淮豪生大酒店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:合肥市</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">对筒灯花灯的光源进行LED光源替换，并用LEDT8管跟换部分背景光源</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管、球泡灯、蜡烛泡</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123025802_57584.jpg" width="800" height="577" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">安徽</span></span>省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">合肥两淮豪生大酒店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:合肥市</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">对筒灯花灯的光源进行LED光源替换，并用LEDT8管跟换部分背景光源</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管、球泡灯、蜡烛泡</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231101216_s.jpg', '../upload/case/201311231101216_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(35, 2, 'case', '重庆市十分利连锁超市', 15, 'Chongqing ShiFenLi supermarket chain', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123030229_48589.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">重庆市</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">重庆市十分利连锁超市</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:重庆市南岸区南坪东路11号星宇花园C2栋0104号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123030229_48589.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">重庆市</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">重庆市十分利连锁超市</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:重庆市南岸区南坪东路11号星宇花园C2栋0104号</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231104494_s.jpg', '../upload/case/201311231104494_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(36, 2, 'case', '江西省中国建设银行站前路营业厅', 16, 'China Construction Bank business hall', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123030540_29357.jpg" width="800" height="476" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">中国建设银行站前路营业厅</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市站前西路</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">银行网点改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123030540_29357.jpg" width="800" height="476" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">中国建设银行站前路营业厅</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市站前西路</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">银行网点改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231111405_s.jpg', '../upload/case/201311231111405_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(37, 2, 'case', '江西省汉庭酒店连锁', 16, 'Jiangxi Hanting express', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031233_72668.jpg" width="904" height="595" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年12月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省汉庭酒店连锁</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市洪城路</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">连锁酒店新装修工程</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管、球泡灯</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031233_72668.jpg" width="904" height="595" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年12月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省汉庭酒店连锁</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市洪城路</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">连锁酒店新装修工程</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管、球泡灯</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231114250_s.jpg', '../upload/case/201311231114250_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(38, 2, 'case', '腾达电器旗舰店', 16, 'TENGDA DIANQI', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031457_44645.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">腾达电器旗舰店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市老福山</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省最大的家电卖场</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031457_44645.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">腾达电器旗舰店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:南昌市老福山</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">江西省最大的家电卖场</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231117238_s.jpg', '../upload/case/201311231117238_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(39, 2, 'case', '河南省财政厅', 17, 'Henan Provincial Department of Finance', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031814_99316.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省财政厅</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">政府工程节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123031814_99316.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年9月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省财政厅</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">政府工程节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231119503_s.jpg', '../upload/case/201311231119503_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(40, 2, 'case', '郑州市五州幼儿园', 17, 'Zhengzhou WUZHOU Kindergarten', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032150_83267.jpg" width="800" height="555" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">郑州市五州幼儿园</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">郑州市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">幼儿园节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032150_83267.jpg" width="800" height="555" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">河南省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">郑州市五州幼儿园</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">郑州市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">幼儿园节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231123523_s.jpg', '../upload/case/201311231123523_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(41, 2, 'case', '中防百诚地下商业街', 18, 'Underground Commercial street', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032416_81974.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">湖北省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年6月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">中防百诚地下商业街</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">武汉汉阳区</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">商场节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">球泡灯</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032416_81974.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">湖北省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年6月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">中防百诚地下商业街</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">武汉汉阳区</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">商场节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">球泡灯</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231126493_s.jpg', '../upload/case/201311231126493_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(42, 2, 'case', '新江南医院', 18, 'Xin JiangNan Hospital', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032725_29561.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">湖北省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">新江南医院</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">武汉青山区</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">医院节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123032725_29561.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">湖北省</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年8月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">新江南医院</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">武汉青山区</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">医院节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231131124_s.jpg', '../upload/case/201311231131124_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(43, 2, 'case', '西安大学食堂', 19, 'Xi''an University canteens', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033147_13260.jpg" width="599" height="800" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">西安市</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">西安大学食堂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">西安市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033147_13260.jpg" width="599" height="800" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:<span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;"><span style="font-family:SimSun;color:#666666;font-size:14px;">西安市</span></span></span></span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年3月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">西安大学食堂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">西安市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231133584_s.jpg', '../upload/case/201311231133584_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(44, 2, 'case', '鳌江镇中学', 20, 'Aojiang Town Middle School', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033711_26331.jpg" width="788" height="589" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:浙江省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">鳌江镇中学</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">温州市鳌江镇</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033711_26331.jpg" width="788" height="589" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:浙江省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年5月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">鳌江镇中学</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">温州市鳌江镇</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231137388_s.jpg', '../upload/case/201311231137388_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn');
INSERT INTO `p_case` (`p_id`, `p_type`, `p_typelist`, `p_title`, `p_area`, `p_title_en`, `p_content`, `p_content_en`, `p_pic_s1`, `p_pic1`, `p_pic2`, `p_pic_s2`, `p_pic3`, `p_pic_s3`, `p_pic4`, `p_pic_s4`, `p_index`, `p_hist`, `p_adddate`, `p_admin`, `language`) VALUES
(45, 2, 'case', '泉州市悦华酒店', 21, 'Mandarin Hotel', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033930_54942.jpg" width="600" height="879" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:福建省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年7月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">泉州市悦华酒店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">泉州市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:蜡烛泡</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123033930_54942.jpg" width="600" height="879" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:福建省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年7月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">泉州市悦华酒店</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">泉州市</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:蜡烛泡</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231143293_s.jpg', '../upload/case/201311231143293_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(46, 2, 'case', '石家庄市缘合名墅地下停车厂', 12, 'Shijiazhuang underground parking lot', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123034909_10900.jpg" width="800" height="534" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:河北省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年12月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">石家庄市缘合名墅地下停车厂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">河北省</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:T灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123034909_10900.jpg" width="800" height="534" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:河北省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2012年12月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">石家庄市缘合名墅地下停车厂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">河北省</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:T灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231151040_s.jpg', '../upload/case/201311231151040_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(47, 2, 'case', '深圳市富迪娜皮具厂', 22, 'Shenzhen Fudi Na leather factory', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123035455_40852.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:广东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">深圳市富迪娜皮具厂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">广东省<span style="font-family:SimSun;color:#666666;font-size:14px;">深圳市</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">工厂节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '<p align="center"><img alt="" src="/editor/attached/20131123/20131123035455_40852.jpg" width="800" height="600" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-family:SimSun;color:#666666;font-size:14px;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table style="width:100%;" class="ke-zeroborder" border="0" cellspacing="0" cellpadding="2">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">统计区域:广东省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-family:SimSun;color:#666666;font-size:14px;">完成时间:</span></span><span style="font-family:SimSun;color:#666666;font-size:14px;">2013年1月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">项目名称</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">深圳市富迪娜皮具厂</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">地点:<span style="font-family:SimSun;color:#666666;font-size:14px;">广东省<span style="font-family:SimSun;color:#666666;font-size:14px;">深圳市</span></span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">工程概述</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:</span><span style="font-family:SimSun;color:#666666;font-size:14px;">工厂节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:SimSun;color:#666666;font-size:14px;">使用产品</span><span style="font-family:SimSun;color:#666666;font-size:14px;">:T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '../upload/case/201311231156271_s.jpg', '../upload/case/201311231156271_b.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 'admin', 'cn'),
(48, 2, 'case', '新沂市江苏远大前程牧业有限公司 ', 23, '', '<p align="center"><img alt="" src="/editor/attached/20140903/20140903005322_70336.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-size:14px;font-family:SimSun;color:#666666;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table class="ke-zeroborder" style="width:100%;" cellspacing="0" cellpadding="2" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">统计区域:江苏省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-size:14px;font-family:SimSun;color:#666666;">完成时间:</span></span><span style="font-size:14px;font-family:SimSun;color:#666666;">2014年4月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">项目名称</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:</span><span style="font-size:14px;font-family:SimSun;color:#666666;">新沂市江苏远大前程牧业有限公司</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">地点:江苏 徐州 新沂市双塘镇</span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">工程概述</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:</span><span style="font-size:14px;font-family:SimSun;color:#666666;">工厂节能替换改造</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">使用产品</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:球泡</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '', '../upload/case/201409030856473_s.jpg', '../upload/case/201409030856473_b.jpg', '', '', '', '', '', '', 0, 0, '2014-09-03', 'admin', 'cn'),
(49, 2, 'case', '新沂市第一中学 ', 23, '', '<p align="center"><img alt="" src="/editor/attached/20140903/20140903005939_28130.jpg" /></p>\r\n<p align="center">&nbsp;</p>\r\n<span style="font-size:14px;font-family:SimSun;color:#666666;"> <p style="margin-right:0px;" dir="ltr" align="center">\r\n<table class="ke-zeroborder" style="width:100%;" cellspacing="0" cellpadding="2" border="0">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">统计区域:江苏省</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-family:宋体;"><span style="color:#666666;"><span style="font-size:14px;font-family:SimSun;color:#666666;">完成时间:</span></span><span style="font-size:14px;font-family:SimSun;color:#666666;">2014年6月</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">项目名称</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:</span><span style="font-size:14px;font-family:SimSun;color:#666666;">新沂市第一中学</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">地点:<span style="font-size:14px;font-family:SimSun;color:#666666;">江苏省新沂市北京西路1号</span></span></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">工程概述</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:</span><span style="font-size:14px;font-family:SimSun;color:#666666;">对教室里的传统荧光灯管用LED T8单灯管1.2米进行光源替换</span></p>\r\n</td>\r\n<td>\r\n<p align="left"><span style="font-size:14px;font-family:SimSun;color:#666666;">使用产品</span><span style="font-size:14px;font-family:SimSun;color:#666666;">:T8灯管</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</p>\r\n</span>', '', '../upload/case/201409030859495_s.jpg', '../upload/case/201409030859495_b.jpg', '', '', '', '', '', '', 0, 0, '2014-09-03', 'admin', 'cn');

-- --------------------------------------------------------

--
-- 表的结构 `p_content`
--

CREATE TABLE IF NOT EXISTS `p_content` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_file1` text CHARACTER SET utf8 NOT NULL,
  `p_file2` text CHARACTER SET utf8 NOT NULL,
  `p_file3` text CHARACTER SET utf8 NOT NULL,
  `language` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_content`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_contry`
--

CREATE TABLE IF NOT EXISTS `p_contry` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_link` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title_cn` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_alt` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_contry`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_counter`
--

CREATE TABLE IF NOT EXISTS `p_counter` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_num` varchar(200) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_counter`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_cs`
--

CREATE TABLE IF NOT EXISTS `p_cs` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_sq` varchar(100) NOT NULL,
  `p_ww` varchar(100) NOT NULL,
  `p_type` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_cs`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_cy`
--

CREATE TABLE IF NOT EXISTS `p_cy` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cf` varchar(250) DEFAULT NULL,
  `md` varchar(250) DEFAULT NULL,
  `sort` varchar(250) DEFAULT NULL,
  `zg` varchar(50) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `linkman` varchar(10) DEFAULT NULL,
  `xzs` varchar(100) DEFAULT NULL,
  `hcph` varchar(20) DEFAULT NULL,
  `carlength` varchar(10) DEFAULT NULL,
  `carstate` varchar(10) DEFAULT NULL,
  `xc` varchar(20) DEFAULT NULL,
  `zj` varchar(20) DEFAULT NULL,
  `cztel` varchar(15) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `viewflag` tinyint(1) DEFAULT NULL,
  `addtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 导出表中的数据 `p_cy`
--

INSERT INTO `p_cy` (`id`, `cf`, `md`, `sort`, `zg`, `name`, `linkman`, `xzs`, `hcph`, `carlength`, `carstate`, `xc`, `zj`, `cztel`, `tel`, `email`, `viewflag`, `addtime`) VALUES
(10, '甘肃-->白银-->白银市', '广东-->潮州-->潮安县', NULL, NULL, NULL, '333', NULL, NULL, '222', NULL, NULL, NULL, '111', NULL, NULL, 1, '2016-04-01'),
(11, '省份-->地级市-->市、县级市、县', '省份-->地级市-->市、县级市、县', NULL, NULL, NULL, 'zzz', NULL, NULL, 'zzz', NULL, NULL, NULL, 'zzz', NULL, NULL, 1, '2016-04-05'),
(14, '省份-->地级市-->市、县级市、县', '省份-->地级市-->市、县级市、县', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, 1, '2016-04-05'),
(17, '甘肃-->白银-->白银市', '湖北-->鄂州-->鄂州市', NULL, NULL, NULL, '', NULL, NULL, '', NULL, NULL, NULL, '111111111', NULL, NULL, 1, '2016-04-05');

-- --------------------------------------------------------

--
-- 表的结构 `p_emil`
--

CREATE TABLE IF NOT EXISTS `p_emil` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_from` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `p_formPwd` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `p_to` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `p_toPwd` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `p_prot` varchar(10) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `p_smtp` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  `email2` varchar(200) CHARACTER SET gbk COLLATE gbk_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `p_emil`
--

INSERT INTO `p_emil` (`p_id`, `p_from`, `p_formPwd`, `p_to`, `p_toPwd`, `p_prot`, `p_smtp`, `email2`) VALUES
(1, '1753460039@qq.com', 'kenny123456', '125828424@qq.com', '', '25', 'smtp.qq.com', '');

-- --------------------------------------------------------

--
-- 表的结构 `p_fck`
--

CREATE TABLE IF NOT EXISTS `p_fck` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_type` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_contact` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_tel` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_fax` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_sex` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_email` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_company` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_content` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_date` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_hhdate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_hhcontent` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_index` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_fck`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_fitting`
--

CREATE TABLE IF NOT EXISTS `p_fitting` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_productname` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_content` text CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_fitting`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_flink`
--

CREATE TABLE IF NOT EXISTS `p_flink` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_link` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title_cn` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_alt` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_ordering` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_flink`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_indexpic`
--

CREATE TABLE IF NOT EXISTS `p_indexpic` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_description` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_link` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_timer` int(11) NOT NULL DEFAULT '5',
  `p_ordering` int(11) NOT NULL,
  `language` varchar(50) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_indexpic`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_job`
--

CREATE TABLE IF NOT EXISTS `p_job` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_file1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file3` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file4` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file5` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file6` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_content` text CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_wrok` text CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_addDate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_admin` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `p_job`
--

INSERT INTO `p_job` (`p_id`, `p_file1`, `p_file2`, `p_file3`, `p_file4`, `p_file5`, `p_file6`, `p_content`, `p_wrok`, `p_addDate`, `p_admin`, `language`) VALUES
(1, '', '程序员', '不限', '5K', '3', '广东中山', 0xe788b1e4b88ae79a84e59296e595a1e69cbae788b1e4b9a6e6b395e5aeb6617364266e6273703b266e6273703b266e6273703b266e6273703b266e6273703b, 0x3131313131313131313131313131313131, '2016-04-06', 'admin', 'cn'),
(3, '', '文员', '不限', '3K', '3', '广东中山', 0xe6b395e5b888e68993e58f91e696afe89282e88aac, 0xe998bfe696afe9a1bfe58f91, '2016-04-06', 'admin', 'cn');

-- --------------------------------------------------------

--
-- 表的结构 `p_jobfrom`
--

CREATE TABLE IF NOT EXISTS `p_jobfrom` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `JobID` int(20) DEFAULT NULL,
  `TalentsName` varchar(50) DEFAULT NULL,
  `MemID` varchar(10) DEFAULT NULL,
  `Linkman` varchar(50) DEFAULT NULL,
  `Sex` varchar(10) DEFAULT NULL,
  `BirthDate` varchar(20) DEFAULT NULL,
  `Stature` varchar(10) DEFAULT NULL,
  `Marriage` varchar(10) DEFAULT NULL,
  `RegResidence` varchar(100) DEFAULT NULL,
  `EduResume` varchar(250) DEFAULT NULL,
  `JobResume` varchar(250) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `AddTime` datetime DEFAULT NULL,
  `ReplyContent` varchar(200) DEFAULT NULL,
  `ReplyTime` datetime DEFAULT NULL,
  `State` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `p_jobfrom`
--

INSERT INTO `p_jobfrom` (`ID`, `JobID`, `TalentsName`, `MemID`, `Linkman`, `Sex`, `BirthDate`, `Stature`, `Marriage`, `RegResidence`, `EduResume`, `JobResume`, `Address`, `ZipCode`, `Telephone`, `Mobile`, `Email`, `AddTime`, `ReplyContent`, `ReplyTime`, `State`) VALUES
(7, NULL, '文员', NULL, '陈文琴', '女士', '1978-08-18', '170', '未婚', '广东省中山市石岐区南路', '本科           2007-2011       电子信息工程        本科          广州大学', '2011-2014              程序员                 写程序            百度', '广东省中山市石岐区民生路', NULL, '15915915910', NULL, '15135@qq.com', '2016-04-06 13:47:13', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `p_jobyp`
--

CREATE TABLE IF NOT EXISTS `p_jobyp` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_file1` varchar(50) NOT NULL,
  `p_file2` varchar(50) NOT NULL,
  `p_file3` varchar(50) NOT NULL,
  `p_file4` varchar(50) NOT NULL,
  `p_file5` varchar(50) NOT NULL,
  `p_file6` varchar(50) NOT NULL,
  `p_file7` varchar(50) NOT NULL,
  `p_file8` varchar(50) NOT NULL,
  `p_file9` varchar(50) NOT NULL,
  `p_file10` varchar(50) NOT NULL,
  `p_file11` varchar(50) NOT NULL,
  `p_file12` varchar(50) NOT NULL,
  `p_file13` varchar(50) NOT NULL,
  `p_file14` varchar(50) NOT NULL,
  `state` int(50) NOT NULL,
  `p_adddate` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_jobyp`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_join`
--

CREATE TABLE IF NOT EXISTS `p_join` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) DEFAULT NULL,
  `linkman` varchar(50) DEFAULT NULL,
  `sort` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `ViewFlag` tinyint(1) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `p_join`
--

INSERT INTO `p_join` (`id`, `company`, `linkman`, `sort`, `tel`, `email`, `address`, `remark`, `ViewFlag`, `addtime`) VALUES
(3, '天天物流', '好好', NULL, '13413413411', '15135@qq.com', '中国的地爱妃啊发我发阿斯顿发', '卡拉是放假昂科威的机房卡世纪东方看s ', 1, '2016-04-06 09:51:45'),
(6, '一起物流', '大家', NULL, '12312312312312', '4651234654@qq.com', '啊点饭噶', '阿萨', 1, '2016-04-06 10:41:11'),
(7, '发送到', 'asdfa阿斯顿发', NULL, 'asdf发', '爱妃', '发威', '案范围f', 0, '2016-04-06 11:05:38');

-- --------------------------------------------------------

--
-- 表的结构 `p_link`
--

CREATE TABLE IF NOT EXISTS `p_link` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_linkName` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL DEFAULT '',
  `p_linkUrl` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL DEFAULT '',
  `p_linkImg` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_link`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_list`
--

CREATE TABLE IF NOT EXISTS `p_list` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_typelist` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin DEFAULT NULL,
  `p_title` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin DEFAULT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `p_mark` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- 导出表中的数据 `p_list`
--

INSERT INTO `p_list` (`p_id`, `p_typelist`, `p_title`, `p_title_en`, `p_mark`, `language`) VALUES
(1, 'pic', '首页轮播图', '', 'index', 'cn'),
(5, 'news', '公司新闻', 'Company news', '', 'cn'),
(6, 'download', '产品规格书2', '', '', 'cn'),
(7, 'download', '照明知识分享', '', '', 'cn'),
(8, 'news', '活动信息', 'Activity ', '', 'cn'),
(9, 'area', '北京市', 'BeiJing', '', 'cn'),
(10, 'area', '天津市', 'TianJin', '', 'cn'),
(11, 'area', '山东省', 'Shandong', '', 'cn'),
(12, 'area', '河北省', 'Hebei', '', 'cn'),
(13, 'area', '贵州省', 'Guizhou', '', 'cn'),
(14, 'area', '安徽省', 'Anhui ', '', 'cn'),
(15, 'area', '川渝', 'Chuanyu', '', 'cn'),
(16, 'area', '江西省', 'Jiangxi', '', 'cn'),
(17, 'area', '河南省', 'Henan', '', 'cn'),
(18, 'area', '湖北省', 'Hubei', '', 'cn'),
(19, 'area', '陕西省', 'Shanxi', '', 'cn'),
(20, 'area', '浙江省', 'Zhejiang', '', 'cn'),
(21, 'area', '福建省', 'Fujian', '', 'cn'),
(22, 'area', '广东省', 'Guangdong', '', 'cn'),
(23, 'area', '江苏省', '', '', 'cn'),
(24, 'pic', '手机首页图', '', 'wapindex', 'cn');

-- --------------------------------------------------------

--
-- 表的结构 `p_members`
--

CREATE TABLE IF NOT EXISTS `p_members` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `MemName` varchar(50) DEFAULT NULL,
  `RealName` varchar(50) DEFAULT NULL,
  `Password` varchar(16) DEFAULT NULL,
  `Sex` varchar(4) DEFAULT NULL,
  `Question` varchar(100) DEFAULT NULL,
  `Answer` varchar(100) DEFAULT NULL,
  `GroupID` varchar(18) DEFAULT NULL,
  `GroupName` varchar(50) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `ZipCode` varchar(20) DEFAULT NULL,
  `Telephone` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `yy` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `HomePage` varchar(50) DEFAULT NULL,
  `AddTime` datetime DEFAULT NULL,
  `Working` tinyint(2) DEFAULT NULL,
  `LastLoginTime` datetime DEFAULT NULL,
  `LastLoginIP` varchar(16) DEFAULT NULL,
  `LoginTimes` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `p_members`
--

INSERT INTO `p_members` (`id`, `MemName`, `RealName`, `Password`, `Sex`, `Question`, `Answer`, `GroupID`, `GroupName`, `Company`, `Address`, `ZipCode`, `Telephone`, `Fax`, `Mobile`, `yy`, `Email`, `HomePage`, `AddTime`, `Working`, `LastLoginTime`, `LastLoginIP`, `LoginTimes`) VALUES
(1, 'jufengbang', '黄玲', 'eb2af79b6be9d722', '女士', '巨丰公司生产什么', '4d3dfcc71e640e00', '2010551421107236', '车辆会员', '巨丰金属板业有限公司', '中山市南头镇升辉北工业区晋源路', NULL, '15207604039', '0760-89732175', '15207604039', 'linda649423326', 'linda649423326', NULL, '2016-04-05 11:58:15', 1, '2016-04-05 11:58:21', '59.33.96.11', '2016-04-05 11:58:23'),
(5, 'miugedeon', '缪志勇', '780795', '女士', NULL, NULL, NULL, '车辆会员', '阿萨无法', '安慰范围发发发安慰我发完发', '528400', '0760-88888888', '0760-11234568', NULL, '15665454654', '71426301@qq.com', 'www.baidu.com', '2016-04-05 14:10:00', NULL, '2016-04-05 17:19:36', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `p_news`
--

CREATE TABLE IF NOT EXISTS `p_news` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_type` int(11) NOT NULL,
  `p_title` varchar(200) NOT NULL,
  `p_title_en` varchar(500) NOT NULL,
  `p_simple` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_key` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_label` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `p_content` text NOT NULL,
  `p_content_en` text NOT NULL,
  `p_pic` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_index` int(11) NOT NULL,
  `p_emphasis` int(11) NOT NULL,
  `p_adddate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_hist` int(11) NOT NULL,
  `p_admin` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 导出表中的数据 `p_news`
--

INSERT INTO `p_news` (`p_id`, `p_type`, `p_title`, `p_title_en`, `p_simple`, `p_key`, `p_label`, `p_content`, `p_content_en`, `p_pic`, `p_index`, `p_emphasis`, `p_adddate`, `p_hist`, `p_admin`, `language`) VALUES
(33, 5, '2016高工LED金球奖十大照明品牌出炉 “流通渠道渠道十大照明品牌”', '', '', '', '', '<p>&nbsp;&nbsp;&nbsp; &nbsp; 备受LED业界人士关注的高工LED金球奖十大照明品牌评选结果于11月26日晚揭晓。照明、雷士照明、三雄·极光等多家照明品牌收获此荣誉。</p>\r\n<p>&nbsp;</p>\r\n<p>　　本次评选活动历经近半年的时间，在这几个月的时间里，高工不间断地对其进行了宣传报道，也受到业内人士的认可，尤其是从9月开始的第二阶段网络实名投票开始，活动得到了企业和各地经销商的积极响应和支持。</p>\r\n<p>&nbsp;</p>\r\n<p>　　本次2013高工LED金球奖十大照明品牌评选包括了中国十大流通渠道LED照明品牌以及十大工程渠道LED照明品牌评选。</p>\r\n<p>&nbsp;</p>\r\n<p>　　十大照明品牌从第二阶段入选的四十大照明品牌中，评选开始为每家入围企业播放30秒的拉票视频短片，然后通过晚会现场500名CEO现场投票选出。</p>\r\n<p>&nbsp;</p>\r\n<p>　　从商业化的角度来说，品牌也是一种产品，它卖的是影响力，同时需要借助强有力的“销售渠道”来达到推广目的。而高工LED作为行业权威研究咨询和传媒平台的优势，正在为LED照明企业承担起品牌资源整合者的角色。</p>\r\n<p>&nbsp;</p>\r\n<p>　　2013高工LED金球奖特设中国十大流通渠道LED照明品牌以及十大工程渠道LED照明品牌评选，正是希望通过企业与渠道的互动，重构LED时代的照明品牌新力量。</p>\r\n<p>&nbsp;</p>\r\n<p>　　同时，围绕评选的全年推广活动来培育LED照明品牌，树立行业标杆，向全社会及终端渠道推荐具有公信力的LED照明好品牌。</p>\r\n<p>&nbsp;</p>\r\n<p><img alt="" src="http://www.gg-led.com/uploadFile/upload_news/201311/20131127SP1385519838.jpg" /><br />\r\n<br />\r\n<br />\r\n<img alt="" src="http://www.gg-led.com/uploadFile/upload_news/201311/20131127SP1385515819.jpg" /></p>', '', '../upload/news/201609091026156.jpg', 0, 0, '2015-11-28', 0, 'admin', 'cn'),
(36, 5, 'SSL论坛开幕 木照明探析置换式LED光源规格', '', '', '', '', '近日，第十届中国国际半导体照明论坛(CHINASSL2013)各分论坛在北京相继展开。股份有限公司照明事业部总经理林纪良受邀出席“LED产品与照明工程设计”分论坛，并发表了题为“置换式LED光源规格探析”的演讲。<p style="text-align:center;"></p>\r\n<p>　　与会者在论坛现场相互交流</p>\r\n<p>　　从2000年开始，LED在不同的应用领域逐渐扩展，现已进入商用照明和家居照明，林纪良对此说道：“2013，LED的照明时代来临了!”。LED光源效率成长快速，从2011年的135lm/W，预计到2015年将达到200 lm/W。从2010年至2015年中国LED照明总体市场渗透率的分析来看，将会从8.5%增长至38.4%，增长率达5倍之高。</p>\r\n<p>　　既然LED照明的时代来了，那么我们可以做些什么?首先，完善规格。从安全性、性能等方面看，LED室内照明规范和规格渐次完善，LED照明巨头企业早已磨刀霍霍，而主要的国际认证也是打开室内照明市场必不可少的敲门砖。</p>\r\n<p>　　在演讲中，林纪良重点介绍了LED灯管单端接电的优点，单端接电不仅符合国际电气安全需求，更重要的是排除了维护时触电的可能性，同时节省灯具配电线路材料。据悉，双端接电是引发直管LED灯触电的原因之一，电源有火线、地线之分，错误的配电方式将开关装在电源与负载之间，保险丝在电器与开关之间，开关off时，操作电极(刀板)不可带电。</p>\r\n<p>　　最后，林纪良总结道，LED性价比在逐年上升，照明应用市场逐渐活，LED性能发展神速，对于共同规格的制定应凝聚共识，LED灯管采PC塑料管具有多方特点，并可凸显灯具效率优势，由于LED光效仍逐步成长，现阶段应以光通量做为主要界定规格，LED灯管采单端接电可提供安全特性并符合国际电气规格，LED球泡灯应针对其定向与全周发光型式给予适当应用。</p>', '', '', 0, 0, '2013-12-02', 0, 'admin', 'cn'),
(37, 5, '狼来了—布局浙江市场引起鲶鱼效应', '', '', '', '', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 有人发现自家羊圈里的羊每天吃了睡，睡了吃，可羊群还是无精打采，食欲不振，体质明显地下降。那人想了个办法，放了只未成年的幼狼进来，羊群顿时炸锅了，幼狼的野性也在羊群炸锅的瞬间激发了出来，它朝着疯狂逃窜的羊群扑咬上去。所有的羊只为了不被幼狼追上，成为狼的猎物，撒开蹄子四散逃窜。过了一段时间，羊群发生了变化，整个群体变得精神了，食欲也好了，体格也健壮了，幼狼在他们面前没有当初的那么可怕了，生态得到了应有的平衡。<p>　　对照于照明行业，大多数业内人士对于木林森的出现与作为常常是以羊和狼的关系来对视。</p>\r\n<p sizset="71" sizcache03979556183128871="3">　　N年来，木的电子元器件向以价格杀手而纵横四海，剑指之处，狼烟四起，哀鸿遍野；的家居应用产品投放市场，市场又是一片恐慌，人心惶惶。木林森T8 <span class="hrefStyle"><a title="LED" href="http://lights.ofweek.com/" target="_blank">LED</a></span>一体化灯管二十余元的低廉价格所向无敌。</p>\r\n<p>　　奉化明扬电子有限公司、天擎实业携手中山木公司共同成立浙江运营中心，12月份起将重拳发力浙江封装市场和家居户外应用市场，毫无置疑的，狼来了！狼现身东海之滨，狼将扑入浙江大地，掀起一股血雨腥风。</p>\r\n<p>　　狼抑或羊，在某一时刻，某一角度，呈现给大众的不尽然是对立的角色。羊抑或狼，随着生存环境的变化而变化，存在着的合理的生存空间与生存价值。</p>\r\n<p sizset="72" sizcache03979556183128871="3">　　中山市股份有限公司成立于1997年，注册资金1.3亿元，以生产高附加值的蓝光、白光、大功率、红外线产品和应用产品为主。公司现已设立中山小榄、江西吉安两大生产基地，销售网络遍布全球。集团公司员工总人数近万人。2012年实现利润2亿元人民币。目前，木林森总产量位居中国<span class="hrefStyle">LED市场</span>第一霸主地位。木林森从“木”到“林”，从“林”到“森”，生产自动化程度的疾步提高，产销量的突飞猛进，促进了公司不断的跨越式发展。如今企业占地面积300多亩，厂房面积50万平方米，LED月产能120亿只，日产能4亿只。2013年计划完成产值30亿元。2014年计划月产能提高到200亿只，产值50亿元人民币。木林森产能的飙升，直接的好处就是拉动成本的大幅度下降，竞争力大幅上升，企业赢得发展，同时赢得强人一步甚至强人数步的先机。</p>\r\n<p>　　品质与品牌战略并驱齐驾，相继赢得“广东省名牌产品”、“广东省著名商标”、“广东省战略性新兴产业培育企业”、“广东省高新技术企业”等荣誉称号。</p>\r\n<p>　　布局浙江市场是公司扩张国内市场的一大战略举措。浙江有着丰富的战略资源，就宁波地区而言，LED企业高达2700余家，集群相对集中，电子元器件采购量庞大，林森产品高度契合这一市场的需求要素。木本身在浙江市场的表现可圈可点，市场反响不俗，其圣诞灯浙江市场稳稳占据主导地位，其木林森应急照明在浙江市场占有一定份额，木林森浙江省年销售额突破5亿元大关。借助各方面的决胜先机，此番挟电子元器件、家居户外等产品，强势进驻浙江市场，必将引发行业的震撼和新一轮的LED洗牌高潮。</p>', '', '', 0, 0, '2013-12-02', 0, 'admin', 'cn'),
(38, 5, 'LED金球奖十大品牌评选揭晓 斩获两殊荣', '', '', '', '', '<p style="text-align:center;"><img alt="LED金球奖十大品牌评选揭晓 木林森斩获两殊荣" src="http://img003.21cnimg.com/photos/album/20131204/m600/18938D186BFD33F4F69FA633EA90860E.jpeg" width="436" height="265" /></p>\r\n<p style="text-align:center;">　　2013高工LED金球奖颁奖现场</p>\r\n<p><strong>　　</strong>近日，备受业界关注的高工LED金球奖十大照明品牌评选落下帷幕，历时近半年角逐，木林森照明、雷士等知名企业获此殊荣。</p>\r\n<p><strong>　　百家角逐争显公信力</strong></p>\r\n<p>　　近年来，一批新兴的LED照明企业在市场竞争中迅速抢位，而传统照明企业凭借得天独厚的渠道和品牌优势，纷纷加码LED。此外，除了主营内销市场的品牌，一批原本在海外市场争战的照明企业也正在逐步转向内销市场，从原有的代工模式转向自有品牌模式。LED照明行业鱼龙混杂，究竟哪些品牌才真正经得起考验?</p>\r\n<p>&nbsp;</p>', '', '', 0, 0, '2013-12-04', 0, 'admin', 'cn'),
(41, 5, '创想2016LED 打造百亿级LED照明企业', '', '', '', '', '<div><img alt="" src="/editor/attached/20131214/20131214020847_84619.jpg" width="720" height="476" /></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 如何打造百亿级led照明企业。<span style="border-bottom:#ccc 1px dashed;" times="" t="5">2013年12月10日</span><span style="font-family:隶书;color:gray;font-size:12pt;mso-bidi-font-family:Arial;mso-hansi-font-family:Arial;mso-font-kerning:0pt;">中国照明学会半导体照明技术与应用专业委员会</span>在上海灯具城举办的：“创想2014LED”论坛上，，做出这样的报告似乎是有点超前，因为，2013年，中国灯具照明市场的整体体量是，2400亿而飞利浦可能也只占到最多5%不到，大家都说，相对低调的木也开始有了180度的转变。</div>\r\n<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;但是反观的过去，从去年的18亿，到今年完成超过30亿，的销售额，在2016年很有可能突破销售额100亿的大关。</div>\r\n<div>&nbsp; 无论是建立一个品牌还是完成100亿的销量，都是需要付出极大的心血的，的林纪良总经理的总结就是</div>', '', '', 0, 0, '2016-12-14', 0, 'admin', 'cn'),
(42, 5, '复旦助力 打造百亿级照明企业', '', '', '', '', '<div><img alt="" src="/editor/attached/20131214/20131214023718_32392.jpg" width="720" height="540" />&nbsp;</div>\r\n<div>&nbsp;&nbsp;&nbsp;&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>\r\n<p style="padding-bottom:0px;text-transform:none;background-color:#ffffff;text-indent:0px;margin:0px 0px 12px;padding-left:0px;padding-right:0px;font:14px/24px 宋体, Tahoma, Helvetica, Arial, 宋体, sans-serif;white-space:normal;letter-spacing:normal;color:#333333;word-spacing:0px;padding-top:0px;-webkit-text-size-adjust:none;-webkit-text-stroke-width:0px;" align="center"><strong><span style="font-size:12px;">复旦大学光源与照明工程系暨电光源研究所</span></strong></p>\r\n<p style="padding-bottom:0px;text-transform:none;background-color:#ffffff;text-indent:0px;margin:0px 0px 12px;padding-left:0px;padding-right:0px;font:14px/24px 宋体, Tahoma, Helvetica, Arial, 宋体, sans-serif;white-space:normal;letter-spacing:normal;color:#333333;word-spacing:0px;padding-top:0px;-webkit-text-size-adjust:none;-webkit-text-stroke-width:0px;" align="left"><strong><span style="font-size:10px;">简介：</span></strong></p>\r\n<p style="padding-bottom:0px;text-transform:none;background-color:#ffffff;text-indent:0px;margin:0px 0px 12px;padding-left:0px;padding-right:0px;font:14px/24px 宋体, Tahoma, Helvetica, Arial, 宋体, sans-serif;white-space:normal;letter-spacing:normal;color:#333333;word-spacing:0px;padding-top:0px;-webkit-text-size-adjust:none;-webkit-text-stroke-width:0px;"><span style="font-size:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 复旦大学光源与照明工程系暨电光源研究所是我国从事这一领域教学和科研的专门机构。同时，又是中国照明电器协会的人才培训中心。复旦大学光源与照明工程和国内外学术界有着广泛的联系和交流,被公认为我国光源与照明领域的权威研究单位之一。建系十多年来，已经培养和造就了一支较强的教学和科研师资队伍。全系副教授以上高级职称占全体教师50%以上。其中，有硕士生导师10名，包括叁名博士生导师。共为国家培养了六百多名(包括博士、硕士、本科、大专)高层次的照明电器人才，并为国内近4000名在职科技人员举办了各种类型的以知识更新和科技交流为目的的研讨会和培训班。</span></p>\r\n<p style="padding-bottom:0px;text-transform:none;background-color:#ffffff;text-indent:0px;margin:0px 0px 12px;padding-left:0px;padding-right:0px;font:14px/24px 宋体, Tahoma, Helvetica, Arial, 宋体, sans-serif;white-space:normal;letter-spacing:normal;color:#333333;word-spacing:0px;padding-top:0px;-webkit-text-size-adjust:none;-webkit-text-stroke-width:0px;"><span style="font-size:10px;">　　“八五”、“九五”期间，该系承担了国家照明电器的开发任务，取得了突出成绩，在照明电器领域的开发研究一直处于国内领先地位。尤其是在绿色照明领域取得了杰出的成就，先后完成了几十项重大项目，获国家级、省部级的发明奖和科技进步奖15项，并出版了20多部专著和译著，在国内外重要刊物上发表论文百余篇。该研究的各种节能光源，尤其是紧凑型荧光灯在国内大量推广使用，产生了显著的经济效益和社会效益。为此，荣获国家教委科技进步一等奖和国家科技进步(推广类)三等奖。最近又成功地开发出最新的节能光源--微波流灯。2003年，在紧凑型荧光灯光衰机理的研究，荣获国家科技进步二等奖。2004年，LED显示屏显示单元罩壳结构的研究，荣获上海市优秀发明二等奖。2004年，集成化紧凑型高效节能气体放电灯管及其灯的研究，荣获国家知识产权认证委员会专利技术发明一等奖。在教学科研方面的成就不仅在国内产生较大影响，而且在国际照明领域的学术界和工业界素享盛名。为了适应我国经济建设和科技发展的需要,推动"绿色照明工程"的深入实施,本着拓宽专业口径。培养复合人材,增强学生工程技术和工程实践能力的目的, 教育部于2003年3月批准将"光源与照明专业拓宽为"电气工程与自动化专业".并保留光源与照明工程研究方向的特色。</span></p>\r\n<span style="font-size:10px;">&nbsp;</span></div>', '', '', 0, 0, '2013-12-14', 0, 'admin', 'cn');

-- --------------------------------------------------------

--
-- 表的结构 `p_product`
--

CREATE TABLE IF NOT EXISTS `p_product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_bigtype` int(11) NOT NULL,
  `p_smalltype` int(11) NOT NULL,
  `p_ssmalltype` int(11) NOT NULL,
  `p_sort` int(11) NOT NULL,
  `p_productname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_productname_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_content` text CHARACTER SET utf8 NOT NULL,
  `p_content_en` text CHARACTER SET utf8 NOT NULL,
  `p_content2` text CHARACTER SET utf8 NOT NULL,
  `p_content2_en` text CHARACTER SET utf8 NOT NULL,
  `p_file1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file3` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file4` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file5` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file6` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file7` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file8` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file9` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file11` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file12` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file13` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file14` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file15` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_file16` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic1` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic2` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic3` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic4` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s4` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic5` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_pic_s5` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_index` int(11) NOT NULL,
  `p_vip` int(11) NOT NULL,
  `p_adddate` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `p_hist` int(11) NOT NULL,
  `p_admin` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- 导出表中的数据 `p_product`
--

INSERT INTO `p_product` (`p_id`, `p_bigtype`, `p_smalltype`, `p_ssmalltype`, `p_sort`, `p_productname`, `p_productname_en`, `p_content`, `p_content_en`, `p_content2`, `p_content2_en`, `p_file1`, `p_file2`, `p_file3`, `p_file4`, `p_file5`, `p_file6`, `p_file7`, `p_file8`, `p_file9`, `p_file11`, `p_file12`, `p_file13`, `p_file14`, `p_file15`, `p_file16`, `p_pic1`, `p_pic_s1`, `p_pic2`, `p_pic_s2`, `p_pic3`, `p_pic_s3`, `p_pic4`, `p_pic_s4`, `p_pic5`, `p_pic_s5`, `p_index`, `p_vip`, `p_adddate`, `p_hist`, `p_admin`, `language`) VALUES
(42, 2, 17, 0, 31, 'MA5', 'MA5', '<p><strong>型号：</strong>MA5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>300 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ60x104.5</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>300 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ60x104.5</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903010041_b.jpg', '../upload/product/2014061903010041_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(43, 2, 17, 0, 32, 'MA7', 'MA7', '<p><strong>型号：</strong>MA7</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>300 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ75x140</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>100 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA7</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>300 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ75x140</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903124551_b.jpg', '../upload/product/2014061903124551_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(44, 2, 17, 0, 30, 'MA3-3', 'MA3-3', '<p><strong>型号：</strong>MA3-3</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>2.5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>150 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ45x76.5</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>300 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA3-3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>2.5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>150 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ45x76.5</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061902570291_b.jpg', '../upload/product/2014061902570291_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(45, 2, 17, 0, 33, 'MA2-5', 'MA2-5', '<p><strong>型号：</strong>MA2-5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>300 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ60x109.5</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>300 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ60x109.5</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903394751_b.jpg', '../upload/product/2014061903394751_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(46, 2, 16, 0, 34, 'MC1-3', 'MC1-3', '<p><strong>型号：</strong>MA1-3</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>3W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>180 lm</p>\r\n<p><strong>显指：</strong>65</p>\r\n<p><strong>灯头规格：</strong>E14</p>\r\n<p><strong>灯体材料：</strong>铝合金+PC罩</p>\r\n<p><strong>灯体尺寸：</strong>Φ35x107</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MC1-3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>3W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>180 lm</p>\r\n<p><strong>CRI：</strong>65</p>\r\n<p><strong>Size：</strong>Φ35x107</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061904022261_b.jpg', '../upload/product/2014061904022261_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(47, 2, 16, 0, 35, 'MC2-3', 'MC2-3', '<p><strong>型号：</strong>MC2-3</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>3W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>180 lm</p>\r\n<p><strong>显指：</strong>65</p>\r\n<p><strong>灯头规格：</strong>E14</p>\r\n<p><strong>灯体材料：</strong>铝合金+PC罩</p>\r\n<p><strong>灯体尺寸：</strong>Φ35x107</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MC2-3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>3W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>180 lm</p>\r\n<p><strong>CRI：</strong>65</p>\r\n<p><strong>Size：</strong>Φ35x107</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061904054171_b.jpg', '../upload/product/2014061904054171_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(48, 2, 16, 0, 36, 'MC1-4.5', 'MC1-4.5', '<p><strong>型号：</strong>MA1-4.5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>4.5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>300 lm</p>\r\n<p><strong>显指：</strong>65</p>\r\n<p><strong>灯头规格：</strong>E14</p>\r\n<p><strong>灯体材料：</strong>铝合金+PC罩</p>\r\n<p><strong>灯体尺寸：</strong>Φ35x110</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MC1-4.5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>4.5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>300 lm</p>\r\n<p><strong>CRI：</strong>65</p>\r\n<p><strong>Size：</strong>Φ35x110</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061904080151_b.jpg', '../upload/product/2014061904080151_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(49, 2, 16, 0, 37, 'MC2-4.5', 'MC2-4.5', '<p><strong>型号：</strong>MA1-4.5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>4.5W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>300 lm</p>\r\n<p><strong>显指：</strong>65</p>\r\n<p><strong>灯头规格：</strong>E14</p>\r\n<p><strong>灯体材料：</strong>铝合金+PC罩</p>\r\n<p><strong>灯体尺寸：</strong>Φ35x133</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MC1-4.5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>4.5W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>300 lm</p>\r\n<p><strong>CRI：</strong>65</p>\r\n<p><strong>Size：</strong>Φ35x133</p>\r\n<p><strong>olor Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061904095311_b.jpg', '../upload/product/2014061904095311_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(54, 2, 18, 0, 42, 'T5 一体化灯管', 'T5 Integrated', '<p><strong>型号：</strong>MT5</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>5W / 8W / 12W / 16W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>≥250lm / 500lm / 700lm / 1000lm</p>\r\n<p><strong>显指：</strong>＞65</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>22x30x300 / 22x30x570 / 22x30x875 / 22x30x1180</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>100 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MT5</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：</strong><strong>：</strong>5W / 8W / 12W / 16W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>≥250lm / 500lm / 700lm / 1000lm</p>\r\n<p><strong>CRI：</strong>＞65</p>\r\n<p><strong>Size：</strong>22x30x300 / 22x30x570 / 22x30x875 / 22x30x1180</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403154221_b.jpg', '../upload/product/2014080403154221_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(55, 2, 18, 0, 43, 'T8 CE灯管', 'T8 CE Tubes', '<p><strong>型号：</strong>MT8</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>8W / 12W / 16W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>≥500lm /&nbsp;700lm / 1000lm</p>\r\n<p><strong>显指：</strong>＞65</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>33x33x600 / 33x33x904 / 33x33x1210</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>50 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MT8</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>8W / 12W / 16W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux</strong><strong>：</strong>≥500lm /&nbsp;700lm / 1000lm</p>\r\n<p><strong>CRI：</strong>＞65</p>\r\n<p><strong>Size：</strong>33x33x600 / 33x33x904 / 33x33x1210</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403310751_b.jpg', '../upload/product/2014080403310751_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(56, 2, 18, 0, 44, 'T8 UL灯管', 'T8 UL Tubes', '<p><strong>型号：</strong>MT8</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W / 14W / 18W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量</strong><strong>：</strong>≥700lm / 1000lm / 1400lm</p>\r\n<p><strong>显指：</strong>＞80</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>33x33x600 / 33x33x904 / 33x33x1210</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>50 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MT8</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：</strong><strong>：</strong>9W / 14W / 18W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>≥700lm / 1000lm / 1400lm</p>\r\n<p><strong>CRI：</strong>＞80</p>\r\n<p><strong>Size：</strong>33x33x600 / 33x33x904 / 33x33x1210</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403300801_b.jpg', '../upload/product/2014080403300801_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(57, 2, 18, 0, 45, 'T8 DLC灯管', 'T8 DLC Tubes', '<p><strong>型号：</strong>MT8</p>\r\n<p><strong>输入电压：</strong>100-277V</p>\r\n<p><strong>功率：</strong>12W / 18W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量</strong><strong>：</strong>1200lm / 1900lm</p>\r\n<p><strong>显指：</strong>＞80</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>33x33x600 / 33x33x1210</p>\r\n<p><strong>色温：</strong>3500/4100K</p>\r\n<p><strong>寿命：</strong>35000h</p>', '<p><strong>P/N：</strong>MT8</p>\r\n<p><strong>Input Voltage：</strong>100-277V</p>\r\n<p><strong>Power：：</strong>12W / 18W</p>\r\n<p><strong>Vottage Frequency：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>1200lm / 1900lm</p>\r\n<p><strong>CRI：</strong>＞80</p>\r\n<p><strong>Size：</strong>33x33x600 / 33x33x1210</p>\r\n<p><strong>Color Temperature：</strong>3500/4100K</p>\r\n<p><strong>Lifetime：</strong>35000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403354651_b.jpg', '../upload/product/2014080403354651_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(58, 2, 15, 0, 46, '3W LED 筒灯', '3W Down light', '<p><strong>型号：</strong>MD2-3</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>3W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞150lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ102x69</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD2-3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>3W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞150lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ102x69</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404024861_b.jpg', '../upload/product/2014080404024861_s.jpg', '../upload/product/2014080404025022_b.jpg', '../upload/product/2014080404025022_s.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(59, 2, 15, 0, 47, '5W LED 筒灯', '5W Down light', '<p><strong>型号：</strong>MD2-5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ102x69</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD2-5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ102x69</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404071931_b.jpg', '../upload/product/2014080404071931_s.jpg', '../upload/product/2014080404072132_b.jpg', '../upload/product/2014080404072132_s.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(60, 2, 15, 0, 48, '7W LED 筒灯', '7W Down light', '<p><strong>型号：</strong>MD3-7</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>7W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞400lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ126x77</p>\r\n<p><strong>色温：</strong>3000/4000/6000</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD3-7</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>7W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞400lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ126x77</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '<hr />\r\n&nbsp;', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404105011_b.jpg', '../upload/product/2014080404105011_s.jpg', '../upload/product/2014080404105202_b.jpg', '../upload/product/2014080404105202_s.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(61, 2, 15, 0, 49, '9W LED 筒灯', '9W Down light', '<p><strong>型号：</strong>MD4-9</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>9W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ150x80</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD4-9</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>9W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ150x80</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404141271_b.jpg', '../upload/product/2014080404141271_s.jpg', '../upload/product/2014080404141392_b.jpg', '../upload/product/2014080404141392_s.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(62, 2, 15, 0, 50, '15W LED 筒灯', '15W Down light', '<p><strong>型号：</strong>MD6-15</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>15W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞9000lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ190x92</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD6-15</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>15W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞900lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ190x92</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404163871_b.jpg', '../upload/product/2014080404163871_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(63, 2, 11, 0, 51, '3W LED 天花灯', '3W Ceiling light', '<p><strong>型号：</strong>ME1-3 / ME2-3</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>3W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞150lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金&nbsp;/ 塑料（PC）</p>\r\n<p><strong>灯体尺寸：</strong>Φ92x60</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD2-3 / ME2-3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>3W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞150lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ92x60</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404264901_b.jpg', '../upload/product/2014080404264901_s.jpg', '../upload/product/2014080404265122_b.jpg', '../upload/product/2014080404265122_s.jpg', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(64, 2, 11, 0, 52, '6W LED 天花灯', '6W Ceiling light', '<p><strong>型号：</strong>ME1-6 / ME2-6</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>6W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金 / 塑料（PC）</p>\r\n<p><strong>灯体尺寸：</strong>Φ92x56</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD1-6 / ME2-6</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>6W</p>\r\n<p><strong>Vottage Frequency：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ92x56</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404310601_b.jpg', '../upload/product/2014080404310601_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(65, 2, 11, 0, 53, '9W LED 天花灯', '9W Ceiling light', '<p><strong>型号：</strong>ME1-9 / ME2-9</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金&nbsp;/ 塑料（PC）</p>\r\n<p><strong>灯体尺寸：</strong>Φ92x66</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD1-9 / ME2-9</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>9W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ92x60</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404343841_b.jpg', '../upload/product/2014080404343841_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(66, 2, 11, 0, 54, '3W LED 天花灯', '3W Ceiling light', '<p><strong>型号：</strong>WE1</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>3W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞150lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ86x45</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE1</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>3W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞150lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ86x45</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404390681_b.jpg', '../upload/product/2014080404390681_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(67, 2, 11, 0, 55, '5W LED 天花灯', '5W Ceiling light', '<p><strong>型号：</strong>WE3</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞240lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ108x70</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE3</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞240lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ108x70</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404422611_b.jpg', '../upload/product/2014080404422611_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(68, 2, 11, 0, 56, '7W LED 天花灯', '7W Ceiling light', '<p><strong>型号：</strong>WE3</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>7W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ108x70</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE3</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>7W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ108x70</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404450531_b.jpg', '../upload/product/2014080404450531_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(69, 2, 12, 0, 57, 'LED 吸顶灯 (月白)', 'Flush mount （Bluish white ）', '<p><strong>型号：</strong>MX1-9 / MX1-12 / MX1-18 / MX1-25</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>亚克力</p>\r\n<p><strong>灯体尺寸：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MX1-9 / MX1-12 / MX1-18 / MX1-25</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404572701_b.jpg', '../upload/product/2014080404572701_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(70, 2, 12, 0, 58, 'LED 吸顶灯 (凤尾)', 'Flush mount （Pteris）', '<p><strong>型号：</strong>MX2-9 / MX2-12 / MX2-18 / MX2-25</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>亚克力</p>\r\n<p><strong>灯体尺寸：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MX2-9 / MX2-12 / MX2-18 / MX2-25</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405100321_b.jpg', '../upload/product/2014080405100321_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(71, 2, 12, 0, 59, 'LED 吸顶灯 (亮白)', 'Flush mount （Bright white）', '<p><strong>型号：</strong>MX3-9 / MX3-12 / MX3-18 / MX3-25</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>亚克力</p>\r\n<p><strong>灯体尺寸：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MX3-9 / MX3-12 / MX3-18 / MX3-25</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405133721_b.jpg', '../upload/product/2014080405133721_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(72, 2, 12, 0, 60, 'LED 吸顶灯 (银边)', 'Flush mount （Silver edge）', '<p><strong>型号：</strong>MX4-9 / MX4-12 / MX4-18 / MX4-25</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>亚克力</p>\r\n<p><strong>灯体尺寸：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MX4-9 / MX4-12 / MX4-18 / MX4-25</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>9W /12W /18W / 25W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm / 800lm / 1000lm / 1500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ220x82 / Φ220x92 / Φ340x103 / Φ400x118</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405155981_b.jpg', '../upload/product/2014080405155981_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(75, 2, 13, 0, 63, 'LED 二模组 路灯', 'LED street Light', '', '', '<img alt="" src="/editor/attached/20131123/20131123082329_70960.jpg" width="380" height="616" />', '<img alt="" src="/editor/attached/20131123/20131123082343_34878.jpg" width="380" height="616" />', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2013112304235371_b.jpg', '../upload/product/2013112304235371_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(76, 2, 13, 0, 64, 'LED 三模组 路灯', 'LED street Light', '', '', '<img alt="" src="/editor/attached/20131123/20131123082425_30354.jpg" width="380" height="616" />', '<img alt="" src="/editor/attached/20131123/20131123082437_19624.jpg" width="380" height="616" />', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2013112304244451_b.jpg', '../upload/product/2013112304244451_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(77, 2, 13, 0, 65, 'LED 四模组 路灯', '-28- -29-', '', '', '<img alt="" src="/editor/attached/20131123/20131123082515_35425.jpg" width="380" height="616" />', '<img alt="" src="/editor/attached/20131123/20131123082529_23837.jpg" width="380" height="616" />', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2013112304254121_b.jpg', '../upload/product/2013112304254121_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(78, 2, 13, 0, 66, 'LED 五模组 路灯', '-28- -29-', '', '', '<img alt="" src="/editor/attached/20131123/20131123082615_24982.jpg" width="380" height="616" />', '<img alt="" src="/editor/attached/20131123/20131123082628_69666.jpg" width="380" height="616" />', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2013112304263741_b.jpg', '../upload/product/2013112304263741_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(79, 2, 13, 0, 67, 'LED 六模组 路灯', 'LED street Light', '', '', '<img alt="" src="/editor/attached/20131123/20131123082713_73207.jpg" width="380" height="616" />', '<img alt="" src="/editor/attached/20131123/20131123082726_52698.jpg" width="380" height="616" />', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2013112304273551_b.jpg', '../upload/product/2013112304273551_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2013-11-23', 0, 'admin', 'cn'),
(86, 2, 17, 0, 73, 'MA2-7', 'MA2-7', '<p><strong>型号：</strong>MA2-5</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>7W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>450 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ60x109.5</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-7</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>7W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>450 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ60x109.5</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903415741_b.jpg', '../upload/product/2014061903415741_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(87, 2, 17, 0, 74, 'MA2-9', '', '<p><strong>型号：</strong>MA2-9</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>9W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>600 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ60x109.5</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-9</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>9W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>600 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ60x109.5</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903435901_b.jpg', '../upload/product/2014061903435901_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(88, 2, 17, 0, 75, 'MA2-12', 'MA2-12', '<p><strong>型号：</strong>MA2-12</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>12W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>800 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ75x145</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>100 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-12</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>12W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>800 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ75x145</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903483891_b.jpg', '../upload/product/2014061903483891_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(89, 2, 17, 0, 76, 'MA2-18', 'MA2-18', '<p><strong>型号：</strong>MA2-18</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>18W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>1200 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ75x145</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>200 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-18</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>18W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>1200 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ75x145</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903500741_b.jpg', '../upload/product/2014061903500741_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(90, 2, 17, 0, 77, 'MA2-24', 'MA2-24', '<p><strong>型号：</strong>MA2-24</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>24W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>1600 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ95x170</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>100 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '', '', '<p><strong>P/N：</strong>MA2-24</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>24W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>1600 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ95x170</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903523091_b.jpg', '../upload/product/2014061903523091_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(91, 2, 17, 0, 78, 'MA2-36', 'MA2-36', '<p><strong>型号：</strong>MA2-36</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>36W</p>\r\n<p><strong>频率：</strong>50 Hz</p>\r\n<p><strong>光通量：</strong>2400 lm</p>\r\n<p><strong>显指：</strong>70</p>\r\n<p><strong>灯头规格：</strong>E27</p>\r\n<p><strong>灯体材料：</strong>导热塑料</p>\r\n<p><strong>灯体尺寸：</strong>Φ95x170</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>装箱数量：</strong>100 PCS</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MA2-36</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：</strong>36W</p>\r\n<p><strong>Vottage Frequency：</strong>50 Hz</p>\r\n<p><strong>Luminous Flux：</strong>2400 lm</p>\r\n<p><strong>CRI：</strong>70</p>\r\n<p><strong>Size：</strong>Φ95x170</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014061903541381_b.jpg', '../upload/product/2014061903541381_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-06-19', 0, 'admin', 'cn'),
(92, 2, 18, 0, 79, 'T8 一体化灯管 (UL)', 'T8 Integrated Tubes (UL)', '<p><strong>型号：</strong>MT8X03</p>\r\n<p><strong>输入电压：</strong>100-277V</p>\r\n<p><strong>功率：</strong>12W / 18W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量</strong><strong>：</strong>800lm / 1600lm</p>\r\n<p><strong>显指：</strong>＞80</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>33x33x600 / 33x33x1210</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>30000h</p>', '<p><strong>P/N：</strong>MT8X03</p>\r\n<p><strong>Input Voltage：</strong>100-277V</p>\r\n<p><strong>Power：：</strong>12W / 18W</p>\r\n<p><strong>Vottage Frequency：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>800lm / 1600lm</p>\r\n<p><strong>CRI：</strong>＞80</p>\r\n<p><strong>Size：</strong>33x33x600 / 33x33x1210</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>30000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403491341_b.jpg', '../upload/product/2014080403491341_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(93, 2, 18, 0, 80, 'T5 一体化灯管 (UL)', 'T5 Integrated Tube (UL)', '<p><strong>型号：</strong>MT5X02</p>\r\n<p><strong>输入电压：</strong>100-277V</p>\r\n<p><strong>功率：</strong>12W / 19W</p>\r\n<p><strong>频率：</strong>50/60 Hz</p>\r\n<p><strong>光通量：</strong>900lm / 1600lm</p>\r\n<p><strong>显指：</strong>＞80</p>\r\n<p><strong>灯体材料：</strong>PC+铝材</p>\r\n<p><strong>灯体尺寸：</strong>22x30x570 / 22x30x1180</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>30000h</p>', '<p><strong>P/N：</strong>MT5X02</p>\r\n<p><strong>Input Voltage：</strong>100-277V</p>\r\n<p><strong>Power：：</strong>12W / 19W</p>\r\n<p><strong>Vottage Frequency：</strong>50/60 Hz</p>\r\n<p><strong>Luminous Flux：</strong>900lm / 1600lm</p>\r\n<p><strong>CRI：</strong>＞80</p>\r\n<p><strong>Size：</strong>22x30x570 / 22x30x1180</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>30000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080403535361_b.jpg', '../upload/product/2014080403535361_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(94, 2, 15, 0, 81, '20W LED 筒灯', '20W Down light', '<p><strong>型号：</strong>MD8-20</p>\r\n<p><strong>输入电压：</strong>220-240V</p>\r\n<p><strong>功率：</strong>20W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞1200lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ236x111</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MD8-20</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>3W</p>\r\n<p><strong>Vottage Fre20uency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞1200lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ236x111</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404202571_b.jpg', '../upload/product/2014080404202571_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn');
INSERT INTO `p_product` (`p_id`, `p_bigtype`, `p_smalltype`, `p_ssmalltype`, `p_sort`, `p_productname`, `p_productname_en`, `p_content`, `p_content_en`, `p_content2`, `p_content2_en`, `p_file1`, `p_file2`, `p_file3`, `p_file4`, `p_file5`, `p_file6`, `p_file7`, `p_file8`, `p_file9`, `p_file11`, `p_file12`, `p_file13`, `p_file14`, `p_file15`, `p_file16`, `p_pic1`, `p_pic_s1`, `p_pic2`, `p_pic_s2`, `p_pic3`, `p_pic_s3`, `p_pic4`, `p_pic_s4`, `p_pic5`, `p_pic_s5`, `p_index`, `p_vip`, `p_adddate`, `p_hist`, `p_admin`, `language`) VALUES
(95, 2, 11, 0, 82, '9W LED 天花灯', '9W Ceiling light', '<p><strong>型号：</strong>WE5</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>9W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞500lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ138x65</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE5</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>9W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞500lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ138x65</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404474971_b.jpg', '../upload/product/2014080404474971_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(96, 2, 11, 0, 83, '12W LED 天花灯', '12W Ceiling light', '<p><strong>型号：</strong>WE5</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>12W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞600lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ138x65</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE5</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>12W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞600lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ138x65</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404501631_b.jpg', '../upload/product/2014080404501631_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(97, 2, 11, 0, 84, '18W LED 天花灯', '18W Ceiling light', '<p><strong>型号：</strong>WE7</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>18W</p>\r\n<p><strong>频率：</strong>50&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞850lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>Φ160x110</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>WE7</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>18W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞850lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>Φ160x110</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080404522351_b.jpg', '../upload/product/2014080404522351_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(98, 2, 14, 0, 85, 'MV1-8', 'MV1-8', '<p><strong>型号：</strong>MX1-8 / MX1-12 / MX1-16</p>\r\n<p><strong>输入电压：</strong>180-264V</p>\r\n<p><strong>功率：</strong>8W /12W /16W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞400lm / 550lm / 700lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>塑料（PC）</p>\r\n<p><strong>灯体尺寸：</strong>150x150x35 / 200x200x40 / 300x300x40</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MX1-8 / MX1-12 / MX1-16</p>\r\n<p><strong>Input Voltage：</strong>180-264V</p>\r\n<p><strong>Power：：</strong>8W /12W /16W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞400lm / 550lm / 700lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>150x150x35 / 200x200x40 / 300x300x40</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405324431_b.jpg', '../upload/product/2014080405324431_b_s.jpg', '../upload/product/2014080405324612_b.jpg', '../upload/product/2014080405324612_b_s.jpg', '../upload/product/2014080405324873_b.jpg', '../upload/product/2014080405324873_b_s.jpg', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(99, 2, 30, 0, 86, 'MG1-20', 'MG1-20', '<p><strong>型号：</strong>MG1-20</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>20W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞1200lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>95.5x138</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MG1-20</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>20W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞1200lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>95.5x138</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405383331_b.jpg', '../upload/product/2014080405383331_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(100, 2, 30, 0, 87, 'MG1-40', 'MG1-40', '<p><strong>型号：</strong>MG1-40</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>40W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞2400lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝合金</p>\r\n<p><strong>灯体尺寸：</strong>97.5x158</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MG1-40</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>40W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞2400lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>97.5x158</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405413811_b.jpg', '../upload/product/2014080405413811_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(101, 2, 31, 0, 88, 'MS1-5', 'MS1-5', '<p><strong>型号：</strong>MS1-5</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>5W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>130x130</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS1-5</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>5W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>130x130</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405464421_b.jpg', '../upload/product/2014080405464421_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(102, 2, 31, 0, 89, 'MS2-10', 'MS2-10', '<p><strong>型号：</strong>MS2-10</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>10W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>205x105</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS2-10</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>10W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>205x105</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405533231_b.jpg', '../upload/product/2014080405533231_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(103, 2, 31, 0, 90, 'MS3-15', 'MS3-15', '<p><strong>型号：</strong>MS3-15</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>15W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞300lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>303x130</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS3-15</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>15W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞300lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>303x130</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405552831_b.jpg', '../upload/product/2014080405552831_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(104, 2, 31, 0, 91, 'MS4-10', 'MS4-10', '<p><strong>型号：</strong>MS4-10</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>10W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞600lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>135x135</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS4-10</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>10W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞600lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>135x135</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405571831_b.jpg', '../upload/product/2014080405571831_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(105, 2, 31, 0, 92, 'MS5-20', 'MS5-20', '<p><strong>型号：</strong>MS5-20</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>20W</p>\r\n<p><strong>频率：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>光通量：</strong>＞600lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>135x265</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS5-20</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>20W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞600lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>135x265</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080405583611_b.jpg', '../upload/product/2014080405583611_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(106, 2, 31, 0, 93, 'MS6-30', '', '<p><strong>型号：</strong>MS6-30</p>\r\n<p><strong>输入电压：</strong>100-240V</p>\r\n<p><strong>功率：</strong>30W</p>\r\n<p><strong>频率：</strong>50/60 Hz</p>\r\n<p><strong>光通量：</strong>＞600lm</p>\r\n<p><strong>显指：</strong>＞70</p>\r\n<p><strong>灯体材料：</strong>铝框+铁皮环</p>\r\n<p><strong>灯体尺寸：</strong>395x145</p>\r\n<p><strong>色温：</strong>3000/4000/6000K</p>\r\n<p><strong>寿命：</strong>15000h</p>', '<p><strong>P/N：</strong>MS6-30</p>\r\n<p><strong>Input Voltage：</strong>100-240V</p>\r\n<p><strong>Power：：</strong>30W</p>\r\n<p><strong>Vottage Frequency：</strong>50/60&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞600lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>395x145</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080406011351_b.jpg', '../upload/product/2014080406011351_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(107, 2, 32, 0, 94, 'MS5', 'MS5', '<p>型号：MS5</p>\r\n<p>输入电压：220-240V</p>\r\n<p>功率：15W</p>\r\n<p>频率：50 Hz</p>\r\n<p>光通量：＞900lm</p>\r\n<p>显指：＞64</p>\r\n<p>灯体材料：PVC</p>\r\n<p>灯体颜色：透明色</p>\r\n<p>色温：3000/4000/6000K</p>\r\n<p>寿命：15000h<br />\r\n</p>', '<p><strong>P/N：</strong>MS5</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>15W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞900lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>18x8</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080406091401_b.jpg', '../upload/product/2014080406091401_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn'),
(108, 2, 32, 0, 95, 'MS3', 'MS3', '<p>型号：MS3</p>\r\n<p>输入电压：220-240V</p>\r\n<p>功率：7W</p>\r\n<p>频率：50 Hz</p>\r\n<p>光通量：＞450lm</p>\r\n<p>显指：＞64</p>\r\n<p>灯体材料：PVC</p>\r\n<p>灯体颜色：透明色</p>\r\n<p>色温：3000/4000/6000K</p>\r\n<p>寿命：15000h<br />\r\n</p>', '<p><strong>P/N：</strong>MS3</p>\r\n<p><strong>Input Voltage：</strong>220-240V</p>\r\n<p><strong>Power：：</strong>7W</p>\r\n<p><strong>Vottage Frequency：</strong>50&nbsp;Hz</p>\r\n<p><strong>Luminous Flux：</strong>＞450lm</p>\r\n<p><strong>CRI：</strong>＞70</p>\r\n<p><strong>Size：</strong>10x7</p>\r\n<p><strong>Color Temperature：</strong>3000/4000/6000K</p>\r\n<p><strong>Lifetime：</strong>15000h</p>', '', '', 'http://', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '../upload/product/2014080406105161_b.jpg', '../upload/product/2014080406105161_b_s.jpg', '', '', '', '', '', '', '', '', 0, 0, '2014-08-04', 0, 'admin', 'cn');

-- --------------------------------------------------------

--
-- 表的结构 `p_product_function`
--

CREATE TABLE IF NOT EXISTS `p_product_function` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(200) NOT NULL,
  `language` varchar(10) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_product_function`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_product_type`
--

CREATE TABLE IF NOT EXISTS `p_product_type` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_bigtype` int(11) NOT NULL,
  `p_secondtype` int(11) NOT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_profile` text CHARACTER SET utf8 NOT NULL,
  `p_file` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_file2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `language` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_index` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- 导出表中的数据 `p_product_type`
--

INSERT INTO `p_product_type` (`p_id`, `p_bigtype`, `p_secondtype`, `p_title`, `p_profile`, `p_file`, `p_file2`, `language`, `p_title_en`, `p_index`) VALUES
(2, 0, 0, 'LED照明', '', '', '', 'cn', 'LED Lighting', 0),
(11, 2, 0, 'LED天花灯', '', '', '', 'cn', 'LED Downlight', 0),
(12, 2, 0, 'LED吸顶灯', '', '', '', 'cn', 'LED Ceiling', 0),
(13, 2, 0, 'LED路灯', '', '', '', 'cn', 'LED Road light', 0),
(14, 2, 0, 'LED厨卫灯', '', '', '', 'cn', 'LED Kitchen lamp', 0),
(15, 2, 0, 'LED筒灯', '', '', '', 'cn', 'LED Downlight', 0),
(16, 2, 0, 'LED蜡烛灯', '', '', '', 'cn', 'LED Candle light', 0),
(17, 2, 0, 'LED球泡灯', '', '', '', 'cn', 'LED Bulb light', 0),
(18, 2, 0, 'LED灯管', '', '', '', 'cn', 'LED Tube light', 0),
(20, 0, 0, 'LED二极管', '', '', '', 'cn', 'LED Diodes', 0),
(22, 20, 0, '大功率系列', '', '', '', 'cn', 'Power series', 0),
(23, 20, 0, '贴片系列', '', '', '', 'cn', 'SMD series', 0),
(24, 20, 0, 'DIP系列', '', '', '', 'cn', 'DIP series', 0),
(25, 20, 21, '2835', '<p><img src="/editor/attached/20140207/20140207061528_75728.jpg" width="500" height="500" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>光通量：10LM</p>\r\n<p>电压：2.8-3.8V</p>\r\n<p>色温：6200K</p>\r\n<p>电流：30mA</p>\r\n<p>发光角度：120°</p>', '../upload/product/2014020702123371.jpg', '../upload/product/2014020702123351.jpg', 'cn', 'E2835UW00', 0),
(26, 20, 0, '数码管系列', '', '', '', 'cn', '', 0),
(30, 2, 0, 'LED导轨射灯', '', '', '', 'cn', 'LED Rail lamp', 0),
(31, 2, 0, 'LED格栅灯', '', '', '', 'cn', 'LED Grille lamp', 0),
(32, 2, 0, 'LED灯带', '', '', '', 'cn', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `p_shop`
--

CREATE TABLE IF NOT EXISTS `p_shop` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_piclink` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_price1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `p_price2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `p_link` varchar(200) NOT NULL,
  `p_ordering` int(11) NOT NULL,
  `language` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_shop`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_special`
--

CREATE TABLE IF NOT EXISTS `p_special` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(200) NOT NULL,
  `p_newsId` int(11) NOT NULL,
  `p_newsLink` varchar(200) NOT NULL,
  `p_station_1` varchar(50) NOT NULL,
  `p_station_2` varchar(50) NOT NULL,
  `p_content1` text NOT NULL,
  `p_content2` text NOT NULL,
  `p_content3` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_special`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_title`
--

CREATE TABLE IF NOT EXISTS `p_title` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(200) NOT NULL,
  `p_keyword` varchar(200) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `p_copyright` varchar(200) NOT NULL,
  `p_author` varchar(200) NOT NULL,
  `p_idc` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `p_title`
--

INSERT INTO `p_title` (`p_id`, `p_title`, `p_keyword`, `p_description`, `p_copyright`, `p_author`, `p_idc`, `language`) VALUES
(1, '古镇物流', '古镇物流', '古镇物流', '古镇物流', '古镇物流', '古镇物流', 'cn'),
(2, 'MLS CO.,LTD.', '木林森,照明,LED,木林森股份有限公司,木林森照明,二极管,LED照明,MLS LIGHTING,MLS', '木林森股份有限公司（下简称“木林森”或“公司”）是一家国内领先的LED封装及LED应用产品为一体的综合性光电LED新技术产业公司。公司成立于1997年，注册资金1.3亿元，生产基地占地面积18万平方米，以生产高附加值的蓝光、白光、大功率、红外线产品和对新产品进行导入为主。', '木林森股份有限公司', '木林森股份有限公司', '木林森股份有限公司', 'en');

-- --------------------------------------------------------

--
-- 表的结构 `p_type`
--

CREATE TABLE IF NOT EXISTS `p_type` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_bigtype` int(11) DEFAULT NULL,
  `p_lvl` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `p_deep` int(11) DEFAULT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `p_content` text CHARACTER SET utf8,
  `p_content_en` text CHARACTER SET utf8,
  `p_pic` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `p_mark` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `language` varchar(200) CHARACTER SET gb2312 COLLATE gb2312_bin DEFAULT NULL,
  `display` int(11) DEFAULT '0',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- 导出表中的数据 `p_type`
--

INSERT INTO `p_type` (`p_id`, `p_bigtype`, `p_lvl`, `p_deep`, `p_title`, `p_title_en`, `p_content`, `p_content_en`, `p_pic`, `p_mark`, `language`, `display`) VALUES
(1, 0, '', 0, '关于我们', 'About us', '走进益佳', '', '', 'about', 'cn', 0),
(2, 1, '', 1, '公司简介', 'Company', '<p class="MsoNormal"><span style="mso-spacerun:''yes'';font-family:宋体;font-size:16.0000pt;mso-font-kerning:1.0000pt;">&nbsp;&nbsp;&nbsp;&nbsp;中山市古镇国际物流园由中山市政府立项隶属琪朗集团名下企业，地处黄金地带，交通便利，周边接镶广开高速，南二环高速，广珠西线及中江高速，毗邻江门，佛山，顺德，三市中心地带。可快速到达珠三角各城市区域。完善的标准物流设施及高端的网络信息化系统，配备电子交易平台，信息发布中心的严密及电子安防监控。物流园区匹配了餐饮住宿，娱乐休闲，汽车维修，金融终端等综合便利性服务。物流园全国名优物流专线，干线运输辐射全国，真正集物流，商流，信息流，资金流于一体化专业现代物流园区。专业化服务理念，管家式的服务模式，倡导零距离的贴心服务，在这里邀您加盟，共创辉煌。</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>', '', '', 'about', 'cn', 0),
(3, 1, '', 1, '企业文化', 'Culture', '<p><span style="widows:2;text-transform:none;background-color:#ffffff;text-indent:0px;display:inline !important;font:16px/18px Microsoft YaHei;white-space:normal;orphans:2;float:none;letter-spacing:normal;color:#337fe5;word-spacing:0px;-webkit-text-size-adjust:auto;-webkit-text-stroke-width:0px;">企业文化</span></p>', '', '', 'about', 'cn', 0),
(4, 1, '', 1, '荣誉资质', 'Honors', '<p align="center">资格荣誉</p>', '', '', 'about', 'cn', 0),
(6, 0, '', 0, '联系我们', '', '销售中心', '', '', 'contact', 'cn', 0),
(7, 6, '', 1, '联系方式', '', '<p>&nbsp;</p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><strong><span style="color:#e53333;"><span style="font-size:16px;font-family:Microsoft YaHei;"><span style="color:#337fe5;">服务热线：400-697-0303</span></span></span></strong></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">地&nbsp;&nbsp; 址：</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xxx大道1号</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">邮&nbsp;&nbsp; 编：528415</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">电&nbsp;&nbsp; 话：+86-760-8xx5 xxxx</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="font-size:14px;font-family:Microsoft YaHei;color:#666666;">传&nbsp;&nbsp; 真：+86-760-2xx2 xxxx</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p>&nbsp;<span style="line-height:1.5;">&nbsp;</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><strong style="font-size:14px;color:#e53333;font-family:''Microsoft YaHei'';line-height:1.5;">xxx台湾分公司</strong></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="color:#666666;font-family:''Microsoft YaHei'';font-size:14px;line-height:21px;">电&nbsp;&nbsp; 话：</span><span style="color:#666666;"><span style="font-family:''Microsoft YaHei'';"><span style="font-size:14px;">(886)+</span></span></span><span style="color:#666666;font-family:''Microsoft YaHei'';"><span style="font-size:14px;line-height:21px;">3 xx0 xxxx</span></span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="color:#666666;font-family:''Microsoft YaHei'';font-size:14px;line-height:21px;">传&nbsp;&nbsp; 真：</span><span style="color:#666666;"><span style="font-family:''Microsoft YaHei'';"><span style="font-size:14px;">(886)+</span></span></span><span style="color:#666666;font-family:''Microsoft YaHei'';"><span style="font-size:14px;line-height:21px;">3 xx0 xxxx</span></span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="color:#666666;"><span style="font-family:''Microsoft YaHei'';"><span style="font-size:14px;"> E-mail:&nbsp;</span></span></span><span style="color:#337fe5;font-family:''Microsoft YaHei'';"><span style="font-size:14px;line-height:21px;"><u>annie.hsu@mlstw.com</u></span></span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;"><p><span style="color:#666666;font-family:''Microsoft YaHei'';font-size:14px;line-height:21px;">地&nbsp;&nbsp; 址：</span></p>\r\n<blockquote style="margin:0 0 0 40px;border:none;padding:0px;">\r\n</blockquote>\r\n</blockquote>\r\n</blockquote>\r\n<p></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div style="margin:0 auto;width:650px;">\r\n<meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具"> <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图"><!--引用百度地图API-->\r\n<style type="text/css">\r\n    html,body{margin:0;padding:0;}\r\n    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}\r\n    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}\r\n</style>\r\n<script type="text/javascript" src="http://api.map.baidu.com/api?key=&amp;v=1.1&amp;services=true"></script>\r\n<!--百度地图容器--><div align="left">\r\n<div id="dituContent" style="border-top:#ccc 1px solid;height:480px;border-right:#ccc 1px solid;width:610px;border-bottom:#ccc 1px solid;border-left:#ccc 1px solid;">\r\n<div align="left">&nbsp;</div>\r\n</div>\r\n</div>\r\n<script type="text/javascript">\r\n    //创建和初始化地图函数：\r\n    function initMap(){\r\n        createMap();//创建地图\r\n        setMapEvent();//设置地图事件\r\n        addMapControl();//向地图添加控件\r\n        addMarker();//向地图中添加marker\r\n    }\r\n    \r\n    //创建地图函数：\r\n    function createMap(){\r\n        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图\r\n        var point = new BMap.Point(113.265899,22.592357);//定义一个中心点坐标\r\n        map.centerAndZoom(point,16);//设定地图的中心点和坐标并将地图显示在地图容器中\r\n        window.map = map;//将map变量存储在全局\r\n    }\r\n    \r\n    //地图事件设置函数：\r\n    function setMapEvent(){\r\n        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)\r\n        map.enableScrollWheelZoom();//启用地图滚轮放大缩小\r\n        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)\r\n        map.enableKeyboard();//启用键盘上下左右键移动地图\r\n    }\r\n    \r\n    //地图控件添加函数：\r\n    function addMapControl(){\r\n        //向地图中添加缩放控件\r\n	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});\r\n	map.addControl(ctrl_nav);\r\n        //向地图中添加缩略图控件\r\n	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:0});\r\n	map.addControl(ctrl_ove);\r\n        //向地图中添加比例尺控件\r\n	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});\r\n	map.addControl(ctrl_sca);\r\n    }\r\n    \r\n    //标注点数组\r\n    var markerArr = [{title:"古镇物流",content:"中国广东省中山市古镇",point:"113.268648|22.584515",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}\r\n		 ];\r\n    //创建marker\r\n    function addMarker(){\r\n        for(var i=0;i<markerArr.length;i++){\r\n            var json = markerArr[i];\r\n            var p0 = json.point.split("|")[0];\r\n            var p1 = json.point.split("|")[1];\r\n            var point = new BMap.Point(p0,p1);\r\n			var iconImg = createIcon(json.icon);\r\n            var marker = new BMap.Marker(point,{icon:iconImg});\r\n			var iw = createInfoWindow(i);\r\n			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});\r\n			marker.setLabel(label);\r\n            map.addOverlay(marker);\r\n            label.setStyle({\r\n                        borderColor:"#808080",\r\n                        color:"#333",\r\n                        cursor:"pointer"\r\n            });\r\n			\r\n			(function(){\r\n				var index = i;\r\n				var _iw = createInfoWindow(i);\r\n				var _marker = marker;\r\n				_marker.addEventListener("click",function(){\r\n				    this.openInfoWindow(_iw);\r\n			    });\r\n			    _iw.addEventListener("open",function(){\r\n				    _marker.getLabel().hide();\r\n			    })\r\n			    _iw.addEventListener("close",function(){\r\n				    _marker.getLabel().show();\r\n			    })\r\n				label.addEventListener("click",function(){\r\n				    _marker.openInfoWindow(_iw);\r\n			    })\r\n				if(!!json.isOpen){\r\n					label.hide();\r\n					_marker.openInfoWindow(_iw);\r\n				}\r\n			})()\r\n        }\r\n    }\r\n    //创建InfoWindow\r\n    function createInfoWindow(i){\r\n        var json = markerArr[i];\r\n        var iw = new BMap.InfoWindow("<b class=''iw_poi_title'' title=''" + json.title + "''>" + json.title + "</b><div class=''iw_poi_content''>"+json.content+"</div>");\r\n        return iw;\r\n    }\r\n    //创建一个Icon\r\n    function createIcon(json){\r\n        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})\r\n        return icon;\r\n    }\r\n    \r\n    initMap();//创建和初始化地图\r\n</script>\r\n</div>', '', '', 'contact', 'cn', 0),
(12, 0, '', 0, '招商加盟', 'join', '其它信息', '', '', 'join', 'cn', 0),
(13, 12, '', 1, '招商简介', 'join', '招商简介.......', '', '', 'join', 'cn', 0),
(16, 0, '', 0, '人力资源', '', '规格书分类', '', '', 'job', 'cn', 0),
(17, 16, '', 1, '人才战略', '', '<ul class="ne" style="margin:0px;padding:8px;line-height:24px;text-indent:2em;list-style-type:none;color:#666666;font-family:'''';"><li><p><span style="font-size:medium;">成功的企业离不开优秀的人才，“有德有才重用，有德无才留用，有才无德放弃使用”是广东天润物流市场发展有限公司的人才战略，以“想干事的给机会，能干事的给岗位，干成事的给地位”为原则，并以培养、引进高素质的经营管理人才为重点，建立一支一流的管理人才队伍，为天润的发展保驾护航。</span></p>\r\n</li>\r\n</ul>', '', '', 'job', 'cn', 0),
(18, 16, '', 1, '招聘列表', '', 'T8灯管', '', '', 'job', 'cn', 0),
(19, 16, '', 1, '提交简历', '', 'T8一体化', '', '', 'job', 'cn', 0),
(28, 12, NULL, 1, '招商登记', 'from', '招商登记', NULL, NULL, 'join', 'cn', 0),
(29, 12, NULL, 1, '加盟企业', '', '进驻企业', NULL, NULL, 'join', 'cn', 0),
(30, 1, NULL, 1, '物流园公告', '', '物流园公告', NULL, NULL, 'about', 'cn', 0);

-- --------------------------------------------------------

--
-- 表的结构 `p_user`
--

CREATE TABLE IF NOT EXISTS `p_user` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_userName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_userPwd` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_sex` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_RealName` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_tel` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_fax` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_other` varchar(500) CHARACTER SET utf8 NOT NULL,
  `language` varchar(200) CHARACTER SET utf8 NOT NULL,
  `date` varchar(200) CHARACTER SET utf8 NOT NULL,
  `is_vip` int(11) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_userName` (`p_userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_user`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_video`
--

CREATE TABLE IF NOT EXISTS `p_video` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_filepath` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_title_en` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_simple` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_pic` varchar(200) CHARACTER SET utf8 NOT NULL,
  `p_ordering` int(11) NOT NULL,
  `p_adddate` varchar(100) CHARACTER SET utf8 NOT NULL,
  `p_hist` int(11) NOT NULL,
  `p_index` int(11) NOT NULL,
  `language` varchar(20) CHARACTER SET gb2312 COLLATE gb2312_bin NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `p_video`
--


-- --------------------------------------------------------

--
-- 表的结构 `p_way`
--

CREATE TABLE IF NOT EXISTS `p_way` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `way` varchar(250) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `linkman` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `lm` varchar(20) DEFAULT NULL,
  `bz` varchar(20) DEFAULT NULL,
  `jb` varchar(20) DEFAULT NULL,
  `addtime` date DEFAULT NULL,
  `sequence` varchar(20) DEFAULT NULL,
  `content` varchar(20) DEFAULT NULL,
  `viewflag` varchar(2) DEFAULT NULL,
  `clicknumber` varchar(20) DEFAULT NULL,
  `yx` varchar(20) DEFAULT NULL,
  `nr` varchar(20) DEFAULT NULL,
  `kf` varchar(20) DEFAULT NULL,
  `cityy` varchar(250) DEFAULT NULL,
  `userID` varchar(20) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `sort` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 导出表中的数据 `p_way`
--

INSERT INTO `p_way` (`id`, `way`, `company`, `tel`, `address`, `linkman`, `email`, `lm`, `bz`, `jb`, `addtime`, `sequence`, `content`, `viewflag`, `clicknumber`, `yx`, `nr`, `kf`, `cityy`, `userID`, `logo`, `sort`) VALUES
(7, '【中国北京】【中国上海】', '京广物流', '15915915911', '第1栋02档', NULL, NULL, NULL, NULL, NULL, '2016-04-05', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖北京〗〖天津〗〖上海〗〖杭州〗 〖石家庄〗', NULL, NULL, NULL),
(8, '【湖北武汉】【河南郑州】', '祥龙三正', '22781144', '第1栋01档 ', NULL, NULL, NULL, NULL, NULL, '2016-04-05', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖武汉〗〖郑州〗〖沈阳〗〖济南〗 〖广州〗〖深圳〗〖花都〗〖新塘〗 〖佛山〗〖番禺〗〖东莞〗 〖哈尔滨〗', NULL, NULL, NULL),
(9, '【浙江义乌】【浙江温州】', '佳捷物流', '22620586 ', '第1栋03-04档 ', NULL, NULL, NULL, NULL, NULL, '2016-04-05', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖义乌〗〖温州〗〖台州〗〖永康〗 〖临海〗〖仙居〗〖瑞安〗〖乐清〗 ', NULL, NULL, NULL),
(10, '【江苏徐州】【江苏宿迁】 ', '徐广物流 ', '22620058', '第1栋06-07档 ', NULL, NULL, NULL, NULL, NULL, '2016-04-05', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖徐州〗〖宿迁〗〖新沂〗〖邳州〗 〖沛县〗〖宿州〗〖淮北〗〖淮安〗 〖泗阳〗〖萧县〗〖滕州〗 〖连云港〗 ', NULL, NULL, NULL),
(11, '【中国北京】【中国上海】', '中山物流', '123456789', '0301', NULL, NULL, NULL, NULL, NULL, '2016-09-09', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖北京〗〖天津〗〖上海〗〖杭州〗 〖石家庄〗', NULL, '../upload/way/201609091038466.jpg', 123),
(12, '【中国北京】【中国上海】', '中山物流', '123456789', '0301', NULL, NULL, NULL, NULL, NULL, '2016-09-08', NULL, NULL, '1', NULL, NULL, NULL, NULL, '〖北京〗〖天津〗〖上海〗〖杭州〗 〖石家庄〗', NULL, '../upload/way/201609080515578.jpg', 91),
(14, '北京上海', '手机物流2', '0751-1745544', 'A懂101', '陈先生', NULL, '经理', '广东省中山市河源镇12号', NULL, '2016-09-09', NULL, NULL, '1', NULL, NULL, NULL, NULL, '中山，山东，河北', NULL, '../upload/way/201609090221560.jpg', 11111111);
