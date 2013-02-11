-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2013 at 01:34 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rakip_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `takmaAd` varchar(32) NOT NULL,
  `isim` varchar(32) NOT NULL,
  `soyisim` varchar(32) NOT NULL,
  `eposta` varchar(128) NOT NULL,
  `sifre` varchar(128) NOT NULL,
  `KayitTarihi` date NOT NULL,
  `last_login_ip` varchar(128) NOT NULL,
  `last_login_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `xmUrl` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kullanici_site_iliski`
--

CREATE TABLE IF NOT EXISTS `kullanici_site_iliski` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `siteler`
--

CREATE TABLE IF NOT EXISTS `siteler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(128) NOT NULL COMMENT 'sitenin başlık ( title ) bilgisi',
  `url` varchar(256) NOT NULL,
  `alanAdiKayitTarih` int(11) NOT NULL,
  `alanAdiGuncellemeTarih` int(11) NOT NULL,
  `alanAdiBitisTarih` int(11) NOT NULL,
  `alexaGlobal` int(11) NOT NULL,
  `alexaUlke` int(11) NOT NULL,
  `alexaLink` int(11) NOT NULL,
  `googleIndex` int(11) NOT NULL,
  `googlePageRank` int(11) NOT NULL,
  `dmozKaydi` int(11) NOT NULL,
  `yahooIndex` int(11) NOT NULL,
  `bingIndex` int(11) NOT NULL,
  `xmUrl` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_etiket`
--

CREATE TABLE IF NOT EXISTS `site_etiket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL DEFAULT '0' COMMENT 'sıfır olursa sistem tarafından atanmış demek oluyor',
  `adi` varchar(32) NOT NULL,
  `kayit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `xmUrl` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site_grup_takip`
--

CREATE TABLE IF NOT EXISTS `site_grup_takip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` int(11) NOT NULL,
  `takip_grup_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `takip_grup`
--

CREATE TABLE IF NOT EXISTS `takip_grup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_id` int(11) NOT NULL,
  `takipAdi` varchar(64) NOT NULL COMMENT 'takip ettiği siteleri kategorilendirmesi için',
  `kayitTarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `takipAciklama` varchar(2048) NOT NULL,
  `ozel` tinyint(1) NOT NULL DEFAULT '0',
  `xmUrl` varchar(674) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
