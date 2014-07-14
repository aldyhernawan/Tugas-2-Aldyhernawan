-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 07:47 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aldy_toko_roti`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE IF NOT EXISTS `gudang` (
  `id_gudang` varchar(5) NOT NULL,
  `kd_roti` varchar(5) NOT NULL,
  `stok_roti` int(10) NOT NULL,
  PRIMARY KEY (`id_gudang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `kd_roti`, `stok_roti`) VALUES
('GD01', 'ROT01', 100),
('GD02', 'ROT02', 10);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(11) NOT NULL,
  `nama_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_id`) VALUES
(1, 'Admin'),
(2, 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `master_bahan`
--

CREATE TABLE IF NOT EXISTS `master_bahan` (
  `kd_bahan` varchar(5) NOT NULL,
  `nama_bahan` varchar(20) NOT NULL,
  `satuan_bahan` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_bahan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_bahan`
--

INSERT INTO `master_bahan` (`kd_bahan`, `nama_bahan`, `satuan_bahan`) VALUES
('BH01', 'Gula', 'KG');

-- --------------------------------------------------------

--
-- Table structure for table `master_pegawai`
--

CREATE TABLE IF NOT EXISTS `master_pegawai` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pegawai`
--

INSERT INTO `master_pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `telepon`) VALUES
('PG01', 'Aldy Hernawan', 'L', '1994-07-07', 'Gombel Lama 13 RT02/05 Semarang', '085640937357');

-- --------------------------------------------------------

--
-- Table structure for table `master_pembelian`
--

CREATE TABLE IF NOT EXISTS `master_pembelian` (
  `id_beli` varchar(5) NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `kd_bahan` varchar(5) NOT NULL,
  `harga_beli` int(15) NOT NULL,
  `banyak_beli` int(15) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `tanggal_expired` date NOT NULL,
  PRIMARY KEY (`id_beli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_pembelian`
--

INSERT INTO `master_pembelian` (`id_beli`, `id_pegawai`, `kd_bahan`, `harga_beli`, `banyak_beli`, `tanggal_beli`, `tanggal_expired`) VALUES
('BL01', 'PG01', 'BH01', 5000, 50, '2012-06-14', '2014-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `master_penjualan`
--

CREATE TABLE IF NOT EXISTS `master_penjualan` (
  `id_jual` varchar(5) NOT NULL,
  `id_peg` varchar(5) NOT NULL,
  `kd_roti` varchar(5) NOT NULL,
  `harga_jual` int(15) NOT NULL,
  `banyak_jual` int(15) NOT NULL,
  PRIMARY KEY (`id_jual`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_penjualan`
--

INSERT INTO `master_penjualan` (`id_jual`, `id_peg`, `kd_roti`, `harga_jual`, `banyak_jual`) VALUES
('J01', 'PG01', 'ROT01', 5000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `master_roti`
--

CREATE TABLE IF NOT EXISTS `master_roti` (
  `kd_roti` varchar(5) NOT NULL,
  `nama_roti` varchar(20) NOT NULL,
  `jenis_roti` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_roti`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_roti`
--

INSERT INTO `master_roti` (`kd_roti`, `nama_roti`, `jenis_roti`) VALUES
('ROT02', 'Swiss Coklat Keju', 'Roti_Basah'),
('ROT01', 'Sari Roti Keju', 'Roti_Basah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Nomor` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  PRIMARY KEY (`Nomor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Nomor`, `username`, `password`, `level_id`) VALUES
('id1', 'Admin', 'Admin', 1),
('id2', 'Aldy', 'Aldy', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
