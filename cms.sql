-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Ara 2018, 13:03:09
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mahalleler`
--

DROP TABLE IF EXISTS `mahalleler`;
CREATE TABLE IF NOT EXISTS `mahalleler` (
  `mahalle_id` int(11) NOT NULL AUTO_INCREMENT,
  `mahalle_name` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `bolge` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`mahalle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mahalleler`
--

INSERT INTO `mahalleler` (`mahalle_id`, `mahalle_name`, `bolge`) VALUES
(1, 'Kemaliye', 'Merkez'),
(2, 'İkbaliye', 'Köyler'),
(3, 'Sivritepe', 'Köyler'),
(4, 'Çamlıca', 'Köyler'),
(5, 'Kahraman', 'Köyler'),
(6, 'Dereboğazı', 'Merkez'),
(7, 'Pınarlı', 'Köyler'),
(8, 'Çağlayan', 'Köyler'),
(9, 'Yeni Mah.', 'Merkez'),
(10, 'Akova', 'Köyler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mahalle_gorevli`
--

DROP TABLE IF EXISTS `mahalle_gorevli`;
CREATE TABLE IF NOT EXISTS `mahalle_gorevli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `soyisim` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `tel_no` varchar(13) COLLATE utf8_turkish_ci NOT NULL,
  `tc_no` bigint(11) NOT NULL,
  `mahalle_id` int(11) NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `sandik_no` int(5) NOT NULL,
  `bolge` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci NOT NULL,
  `gorev` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mahalle_gorevli`
--

INSERT INTO `mahalle_gorevli` (`id`, `isim`, `soyisim`, `tel_no`, `tc_no`, `mahalle_id`, `adres`, `sandik_no`, `bolge`, `durum`, `gorev`, `tarih`) VALUES
(1, 'Mehmet', 'Temizce', '+905455449088', 27971241126, 5, 'Hendek Anadolu Lisesi', 3, 'Merkez', 'Asil', '', NULL),
(2, 'Mert', 'Temizce', '+905422926292', 27971241126, 3, 'Merkezi Camii', 11, 'Köyler', 'Asil', '', NULL),
(3, 'Serkan', 'Şenler', '+901111111111', 11111111111, 10, 'Hendek Tekn. ve End. Lisesi', 29, 'Köyler', 'Asil', '', NULL),
(4, 'Ahmet', 'İnan', '+905555555555', 11111111111, 9, 'Gaffar Okkan İ.Ö.O', 35, 'Merkez', 'Asil', '', NULL),
(5, 'Gökhan Emre', 'Uzun', '+905555555555', 11111111111, 8, 'Merkez Camii', 15, 'Köyler', 'Asil', '', NULL),
(6, 'Süleyman', 'Kalk', '+905555555555', 11111111111, 7, 'Pınarlı Camii', 7, 'Köyler', 'Asil', '', NULL),
(7, 'Sıtkı', 'Yaz', '+905555555555', 11111111111, 4, 'Eski Beld. Binası', 24, 'Köyler', 'Asil', '', NULL),
(8, 'Mevlüt', 'Örnek', '+905555555555', 11111111111, 7, 'Eski Beld. Binası', 24, 'Köy', 'Yedek', '', NULL),
(9, 'Tarık', 'Temizce', '+901111111111', 11111111111, 3, 'Merkez Camii', 3, 'Köyler', 'Yedek', '', NULL),
(10, 'Oğuzhan Efe', 'Keleş', '+901111111111', 11111111111, 5, 'Köy Camii', 52, 'Köyler', 'Asil', '', NULL),
(11, 'Uğur', 'Kahveci', '+901111111111', 11111111111, 3, 'Köy Camii', 53, 'Köyler', 'Asil', '', NULL),
(12, 'Yiğit', 'Temizce', '05455449088', 27971241126, 0, 'Prof. Dr. Ayhan Kızıl Cad. No:44', 23, 'Merkez', 'Asil', 'Sandık Görevlisi', '2018-12-04'),
(13, 'Emre', 'Malçok', '5555555555', 55555555555, 0, 'deneme adres', 22, 'Merkez', 'Asil', 'Sandık Görevlisi', NULL),
(14, 'Halil Hakan', 'Oturak', '5555555565', 54658695847, 0, 'deneme adres', 12, 'Merkez', 'Asil', 'Sandık Görevlisi', NULL),
(15, '11', '1', '1', 1, 0, '1', 1, 'Merkez', 'Asil', 'Sandık Görevlisi', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `usergroup`
--

DROP TABLE IF EXISTS `usergroup`;
CREATE TABLE IF NOT EXISTS `usergroup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `usergroup`
--

INSERT INTO `usergroup` (`id`, `group_id`, `group_name`) VALUES
(1, 1, 'Administrator'),
(2, 2, 'Poll Master');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` tinyint(1) NOT NULL,
  `username` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `yetki`, `username`) VALUES
(1, 'Mehmet Temizce', 'mehmettemizce@hotmail.com.tr', 1, 'mtemizce'),
(2, 'Mert Temizce', 'mert.temizce@hotmail.com.tr', 1, 'mrtemizce'),
(3, 'Tarık Temizce', 'tarik.temizce@hotmail.com.tr', 1, 'ttemizce');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
