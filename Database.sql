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

-- Dumping structure for table kua.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `kode_berita` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `isi` text,
  PRIMARY KEY (`kode_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.berita: ~2 rows (approximately)
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` (`kode_berita`, `nomor`, `foto`, `title`, `isi`) VALUES
	(9, 'Berita ke 2', 'foto6896058.jpg', 'Cara Ternak Lele', 'Cara Ternah Lele yang baik adalah dengan menggunakan metode yang bernama penanaman bibit di mulut nya');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.detail_periode: ~2 rows (approximately)
/*!40000 ALTER TABLE `detail_periode` DISABLE KEYS */;
INSERT INTO `detail_periode` (`kode_detail`, `kode_kepala`, `nomor`, `foto`, `nip`, `ttl`, `kewarganegaraan`, `agama`, `email`, `alamat`, `jabatan`, `prestasi`, `riwayat_pendidikan`) VALUES
	(11, 16, '1', 'foto6203919.jpg', '196809262005011001', '1968-09-26', 'Indonesia', 'Islam', '-', 'Bekasi', 'Kepala KUA Sukakarya', '-', '- MI Anwarul Falah -Mts Anwarul Falah - MA Anwarul Falah - IAIN UIN SGD Bandung');
/*!40000 ALTER TABLE `detail_periode` ENABLE KEYS */;

-- Dumping structure for table kua.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `kode_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `nip` varchar(50) NOT NULL DEFAULT '0',
  `pangkat` varchar(50) NOT NULL DEFAULT '0',
  `jabatan` varchar(50) NOT NULL DEFAULT '0',
  `pend_terakhir` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.karyawan: ~8 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`kode_karyawan`, `nomor`, `nama`, `nip`, `pangkat`, `jabatan`, `pend_terakhir`) VALUES
	(1, 1, 'Drs. H. Nanun Abdillah', '196809262005011001', 'Penata Tk. 1 lll/d', 'Kepala', 'S.1'),
	(2, 2, 'Epih Sartika, SE', '197907102005011006', 'Penata Muda Tk.1 lll/b', 'Pengadministrasi', 'S.1'),
	(3, 3, 'Mimin Munawaroh', '197112181993032001', 'Penata Muda Tk.1 lll/b', 'Pengadministrasi', 'SLTA'),
	(4, 4, 'Nursinah', '196405302014112001', 'Juru l/c', 'Penyuluh Fungsional', 'SLTP'),
	(5, 5, 'Akbar Sobari', '', '', 'Honorer', 'S.1'),
	(6, 6, 'Tono Kartawijaya', '', '', 'Honorer', 'S.1'),
	(7, 7, 'Ratih Sri Rahayu Wulandari', '', '', 'Honorer', 'SLTA'),
	(8, 8, 'Nurlela', '', '', 'OB', 'SD');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table kua.masjid
CREATE TABLE IF NOT EXISTS `masjid` (
  `id_masjid` int(11) NOT NULL AUTO_INCREMENT,
  `desa` varchar(200) DEFAULT NULL,
  `masjid` int(11) DEFAULT '0',
  `langgar` int(11) DEFAULT '0',
  `mushola` int(11) DEFAULT '0',
  `gereja` int(11) DEFAULT '0',
  `vihara` int(11) DEFAULT '0',
  `pura` int(11) DEFAULT '0',
  PRIMARY KEY (`id_masjid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.masjid: ~6 rows (approximately)
/*!40000 ALTER TABLE `masjid` DISABLE KEYS */;
INSERT INTO `masjid` (`id_masjid`, `desa`, `masjid`, `langgar`, `mushola`, `gereja`, `vihara`, `pura`) VALUES
	(1, 'SUKAINDAH', 8, 12, 0, 0, 0, 0),
	(3, 'SUKAMURNI', 10, 20, 0, 0, 0, 0),
	(4, 'SUKAKARYA', 4, 10, 0, 0, 0, 0),
	(5, 'SUKALAKSANA', 6, 19, 0, 0, 0, 0),
	(6, 'SUKAJADI', 4, 16, 0, 0, 0, 0),
	(7, 'SUKAKARSA', 2, 4, 0, 0, 0, 0),
	(8, 'SUKAMAKMUR', 7, 18, 0, 0, 0, 0);
/*!40000 ALTER TABLE `masjid` ENABLE KEYS */;

-- Dumping structure for table kua.penyuluh
CREATE TABLE IF NOT EXISTS `penyuluh` (
  `id_penyuluh` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL DEFAULT '0',
  `jk` enum('L','P') NOT NULL,
  `tmpt_lahir` varchar(200) NOT NULL DEFAULT '0',
  `tgl_lahir` date NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tugas` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_penyuluh`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.penyuluh: ~7 rows (approximately)
/*!40000 ALTER TABLE `penyuluh` DISABLE KEYS */;
INSERT INTO `penyuluh` (`id_penyuluh`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `pendidikan`, `tugas`) VALUES
	(1, 'Akbar Sobari, SHI.', 'L', 'Bekasi', '1982-06-12', 'S1', 'Pemberdayaan Wakaf'),
	(5, 'H. IQTAUFIQ SA`BANY, Lc', 'L', 'Sukatani', '1986-04-27', 'S1', 'Pemberantasan Buta Aksara Al-Qur`an'),
	(6, 'JENAL ABIDIN, S.Sos.l.', 'L', 'Pebayuran', '1972-07-01', 'S1', 'Kerukunan Umat Beragama'),
	(7, 'TONO KARTAWIJAYA, SHI.', 'L', 'Bekasi', '1971-12-15', 'S1', 'Keluarga Sakinah'),
	(8, 'KIKI ZAKIYAH, S.pd.l', 'P', 'Bekasi', '1984-01-28', 'S1', 'Jaminan Produk Halal'),
	(9, 'AHMAD HANAFI, S.Pd.l', 'L', 'Bekasi', '1967-05-16', 'S1', 'Radikalisme Dan Aliran Sempalan'),
	(10, 'FAUZI RIDWANSYAH, S.Sos.L', 'L', 'Bekasi', '1976-05-12', 'S1', 'Penyalahgunaan Narkoba dan HIV/AIDS'),
	(11, 'TATU MUHIMMALIYAH, S.Pd.l', 'P', 'Sukatani', '1989-05-22', 'S1', 'Pengelolaan Zakat');
/*!40000 ALTER TABLE `penyuluh` ENABLE KEYS */;

-- Dumping structure for table kua.periode
CREATE TABLE IF NOT EXISTS `periode` (
  `kode_kepala` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `awal` varchar(50) DEFAULT NULL,
  `akhir` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_kepala`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.periode: ~5 rows (approximately)
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
INSERT INTO `periode` (`kode_kepala`, `nomor`, `nama`, `awal`, `akhir`) VALUES
	(16, 1, 'Drs. H.Bunyamin', 'Juni 2004', 'Mei 2009'),
	(18, 2, 'H. Anas Yazid Fatoni, S.Ag', 'Mei 2009', 'April 2012'),
	(19, 3, 'H. Amir Mahmud, S.Ag', 'Mei 2012', 'April 2016'),
	(20, 4, 'Drs. H. Komarudin, MM', 'Mei 2016', 'September 2019'),
	(21, 5, 'Drs. H. Nanun Abdillah', 'Oktober 2019', 'Sekarang');
/*!40000 ALTER TABLE `periode` ENABLE KEYS */;

-- Dumping structure for table kua.statistik
CREATE TABLE IF NOT EXISTS `statistik` (
  `id_statistik` int(11) NOT NULL AUTO_INCREMENT,
  `total_rt` varchar(50) DEFAULT NULL,
  `total_rw` varchar(50) DEFAULT NULL,
  `total_penduduk` varchar(50) DEFAULT NULL,
  `total_penganut` varchar(50) DEFAULT NULL,
  `total_tmptibadah` varchar(50) DEFAULT NULL,
  `total_pendidikan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_statistik`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.statistik: ~1 rows (approximately)
/*!40000 ALTER TABLE `statistik` DISABLE KEYS */;
INSERT INTO `statistik` (`id_statistik`, `total_rt`, `total_rw`, `total_penduduk`, `total_penganut`, `total_tmptibadah`, `total_pendidikan`) VALUES
	(1, '91', '40', '53211', '63290', '134', '120');
/*!40000 ALTER TABLE `statistik` ENABLE KEYS */;

-- Dumping structure for table kua.struktur_organisasi
CREATE TABLE IF NOT EXISTS `struktur_organisasi` (
  `kode_struktur` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_struktur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table kua.struktur_organisasi: ~2 rows (approximately)
/*!40000 ALTER TABLE `struktur_organisasi` DISABLE KEYS */;
INSERT INTO `struktur_organisasi` (`kode_struktur`, `foto`) VALUES
	(2, 'foto8094788.jpg');
/*!40000 ALTER TABLE `struktur_organisasi` ENABLE KEYS */;

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
