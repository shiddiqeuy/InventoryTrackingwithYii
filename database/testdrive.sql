-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2012 at 10:16 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritaacara`
--

CREATE TABLE IF NOT EXISTS `beritaacara` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_order` date NOT NULL,
  `no_tlp` int(12) NOT NULL,
  `no_speedy` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `tgl_bon_modem` date NOT NULL,
  `mac` varchar(20) NOT NULL,
  `sn_modem` varchar(20) NOT NULL,
  `tipe_modem` varchar(20) NOT NULL,
  `tgl_psg` date NOT NULL,
  `tgl_cabut` date NOT NULL,
  `kode_agen` varchar(10) NOT NULL,
  `paket` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `beritaacara`
--

INSERT INTO `beritaacara` (`id`, `tgl_order`, `no_tlp`, `no_speedy`, `nama_pelanggan`, `tgl_bon_modem`, `mac`, `sn_modem`, `tipe_modem`, `tgl_psg`, `tgl_cabut`, `kode_agen`, `paket`, `keterangan`) VALUES
(5, '2013-04-12', 2147483647, '083829724514', 'ahmad hakim', '2012-03-12', 'asdfg123', '113100100', 'TPLINK', '0001-01-12', '2014-05-12', 'SUY', 'groovia', 'paketan groovia dan speedy pre wired'),
(6, '0001-01-12', 1124124124, '121412', 'shiddiq', '0002-02-12', 'qweqwe12412412', '1212124wqee', 'TP-LINK Ready', '0003-03-12', '0003-04-12', 'SWN', 'lite', 'asddsa'),
(7, '0001-01-01', 7307013, '7406777', 'ginggi', '0002-02-12', '12345ee', 'q113100103', 'TP-LINK', '2012-02-12', '0004-02-12', 'SWN', 'groovia', 'belum bayar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
