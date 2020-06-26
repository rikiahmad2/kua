-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kua
CREATE DATABASE IF NOT EXISTS `kua` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `kua`;

-- Dumping structure for table kua.detail_periode
CREATE TABLE IF NOT EXISTS `detail_periode` (
  `kode_detail` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kepala` int(11) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `ttl` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `prestasi` varchar(50) DEFAULT NULL,
  `riwayat_pendidikan` text,
  PRIMARY KEY (`kode_detail`),
  KEY `FK_detail_periode_periode` (`kode_kepala`),
  CONSTRAINT `FK_detail_periode_periode` FOREIGN KEY (`kode_kepala`) REFERENCES `periode` (`kode_kepala`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.detail_periode: ~0 rows (approximately)
/*!40000 ALTER TABLE `detail_periode` DISABLE KEYS */;
INSERT INTO `detail_periode` (`kode_detail`, `kode_kepala`, `nomor`, `foto`, `nip`, `ttl`, `kewarganegaraan`, `agama`, `email`, `alamat`, `jabatan`, `prestasi`, `riwayat_pendidikan`) VALUES
	(11, 16, '666667777777', 'foto7810059.jpg', '123123', '1231-03-12', '123123123', '12312311', '23123123', '1231312', '123123', '123123', '123123');
/*!40000 ALTER TABLE `detail_periode` ENABLE KEYS */;

-- Dumping structure for table kua.periode
CREATE TABLE IF NOT EXISTS `periode` (
  `kode_kepala` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `awal` varchar(50) DEFAULT NULL,
  `akhir` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_kepala`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.periode: ~2 rows (approximately)
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
INSERT INTO `periode` (`kode_kepala`, `nomor`, `nama`, `awal`, `akhir`) VALUES
	(16, 1, 'BERAT', 'Mei 2020', 'Januari 2021'),
	(18, 2, 'PRIA', 'Mei 2019', 'Januari 2021');
/*!40000 ALTER TABLE `periode` ENABLE KEYS */;

-- Dumping structure for table kua.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
	(1, 'Sirah Nabi', 'ahmadriki9512@gmail.com', 'admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
