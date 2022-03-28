/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.20-MariaDB : Database - kearsipan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kearsipan` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kearsipann`;

/*Table structure for table `arsip` */

DROP TABLE IF EXISTS `arsip`;

CREATE TABLE `arsip` (
  `ID_ARSIP` int(11) NOT NULL AUTO_INCREMENT,
  `KODE_KLAS` varchar(5) NOT NULL,
  `INDEKS` varchar(12) NOT NULL,
  `JENIS_ARSIP` varchar(120) NOT NULL,
  `KURUN_WAKTU` varchar(4) NOT NULL,
  `TINGKAT_PERKEMBANGAN` varchar(30) NOT NULL,
  `JUMLAH` varchar(12) NOT NULL,
  `KETERANGAN_ARSIP` varchar(100) NOT NULL,
  `NO_DEF_FOLDER` int(11) NOT NULL,
  `NO_DEF_BLOK` int(11) NOT NULL,
  `LOKASI_SIMPAN` varchar(12) NOT NULL,
  `JANGKA_WAKTU` int(11) NOT NULL,
  `NASIB_AKHIR` varchar(30) NOT NULL,
  `KATEGORI_ARSIP` varchar(30) NOT NULL,
  `TAHUN_PEMINDAHAN` varchar(4) NOT NULL,
  `UNIT_PENGOLAH` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_ARSIP`),
  UNIQUE KEY `ARSIP_PK` (`ID_ARSIP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `arsip` */

insert  into `arsip`(`ID_ARSIP`,`KODE_KLAS`,`INDEKS`,`JENIS_ARSIP`,`KURUN_WAKTU`,`TINGKAT_PERKEMBANGAN`,`JUMLAH`,`KETERANGAN_ARSIP`,`NO_DEF_FOLDER`,`NO_DEF_BLOK`,`LOKASI_SIMPAN`,`JANGKA_WAKTU`,`NASIB_AKHIR`,`KATEGORI_ARSIP`,`TAHUN_PEMINDAHAN`,`UNIT_PENGOLAH`) values 
(1,'700','NHP-KKA','NHP Pemeriksaan Regular SMAN 1 Sidoarjo','2012','Asli - Copy','1 Berkas','Baik',1,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020','Kesekretariatan'),
(2,'700','NHP-KKA','NHP - KKA Pemeriksaan Reguler SMAN 2 Sidoarjo','2012','Asli - Copy','1 Berkas','Baik',2,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020','Kesekretariatan'),
(3,'700','NHP-KKA','NHP - KKA Pemeriksaan Reguler SMAN 1 Porong','2012','Asli - Copy','1 Berkas','Baik',3,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020','Kesekretariatan'),
(4,'700','NHP-KKA','NHP Pemeriksaan Regular SMAN 2 Sidoarjo','2013','Asli - Copy','1 Berkas','Baik',1,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020','Kesekretariatan');

/*Table structure for table `barang_inventaris` */

DROP TABLE IF EXISTS `barang_inventaris`;

CREATE TABLE `barang_inventaris` (
  `ID_BARANG_INV` int(11) NOT NULL AUTO_INCREMENT,
  `KODE_BARANG_INV` varchar(30) NOT NULL,
  `NAMA_BARANG_INV` varchar(50) NOT NULL,
  `NOMOR_REG` varchar(30) NOT NULL,
  `MERK` varchar(50) NOT NULL,
  `TYPE` varchar(30) DEFAULT NULL,
  `UKURAN` varchar(30) DEFAULT NULL,
  `BAHAN` varchar(50) NOT NULL,
  `TAHUN_PEROLEHAN` varchar(4) NOT NULL,
  `NO_PABRIK` varchar(30) DEFAULT NULL,
  `NO_RANGKA` varchar(30) DEFAULT NULL,
  `NO_MESIN` varchar(30) DEFAULT NULL,
  `NO_POLISI` varchar(30) DEFAULT NULL,
  `NO_BPKB` varchar(30) DEFAULT NULL,
  `HARGA_PEROLEHAN` int(11) NOT NULL,
  `KETERANGAN_INV` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_BARANG_INV`),
  UNIQUE KEY `BARANG_INVENTARIS_PK` (`ID_BARANG_INV`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_inventaris` */

insert  into `barang_inventaris`(`ID_BARANG_INV`,`KODE_BARANG_INV`,`NAMA_BARANG_INV`,`NOMOR_REG`,`MERK`,`TYPE`,`UKURAN`,`BAHAN`,`TAHUN_PEROLEHAN`,`NO_PABRIK`,`NO_RANGKA`,`NO_MESIN`,`NO_POLISI`,`NO_BPKB`,`HARGA_PEROLEHAN`,`KETERANGAN_INV`) values 
(1,'1.3.2.01.03.05.010','Pompa Air','1122','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum'),
(2,'1.3.2.01.03.05.010','Pompa Air','1123','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum'),
(3,'1.3.2.01.03.05.010','Pompa Air','1124','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum'),
(4,'1.3.2.02.01.01.003','Station Wagon','157','Toyota Kijang','KF52/80','1781','Campuran','2000','-','MHF11KF80Y0062175','7K0355115','W 725 NP','A-9569014J',75000000,'Operasional Sekretariat');

/*Table structure for table `barang_pakai_habis` */

DROP TABLE IF EXISTS `barang_pakai_habis`;

CREATE TABLE `barang_pakai_habis` (
  `ID_BARANG_HABIS_PAKAI` int(11) NOT NULL AUTO_INCREMENT,
  `URAIAN_RINCIAN` varchar(100) NOT NULL,
  `SALDO_AWAL` int(11) NOT NULL,
  `PENAMBAHAN` int(11) NOT NULL,
  `PENGURANGAN` int(11) NOT NULL,
  `SALDO_AKHIR` int(11) NOT NULL,
  `HARGA_PEMBELIAN` int(11) NOT NULL,
  `SALDO_AKHIR_PERSEDIAAN` int(11) NOT NULL,
  PRIMARY KEY (`ID_BARANG_HABIS_PAKAI`),
  UNIQUE KEY `BARANG_PAKAI_HABIS_PK` (`ID_BARANG_HABIS_PAKAI`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_pakai_habis` */

insert  into `barang_pakai_habis`(`ID_BARANG_HABIS_PAKAI`,`URAIAN_RINCIAN`,`SALDO_AWAL`,`PENAMBAHAN`,`PENGURANGAN`,`SALDO_AKHIR`,`HARGA_PEMBELIAN`,`SALDO_AKHIR_PERSEDIAAN`) values 
(1,'Alat kebersihan dan bahan pembersih',6,0,6,0,62000,0),
(2,'Cairan Pencuci Piring',3,0,3,0,41500,0),
(3,'handsanitizer 5 liter',1,0,1,0,150000,0),
(4,'Kapur barus kamar mandi',12,0,12,0,30000,0),
(11,'kertas HVS A4',5,0,5,0,50000,0);

/*Table structure for table `detail_peminjaman_arsip` */

DROP TABLE IF EXISTS `detail_peminjaman_arsip`;

CREATE TABLE `detail_peminjaman_arsip` (
  `ID_ARSIP` int(11) NOT NULL,
  `ID_PEMINJAMAN_ARSIP` int(11) NOT NULL,
  `TANGGAL_PENGEMBALIAN_ARSIP` date NOT NULL,
  `STATUS_PENGEMBALIAN_ARSIP` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_ARSIP`,`ID_PEMINJAMAN_ARSIP`),
  KEY `FK_ARSIP` (`ID_ARSIP`),
  KEY `FK_PEMINJAMAN_ARSIP` (`ID_PEMINJAMAN_ARSIP`),
  CONSTRAINT `FK_ARSIP` FOREIGN KEY (`ID_ARSIP`) REFERENCES `arsip` (`ID_ARSIP`),
  CONSTRAINT `FK_PEMINJAMAN_ARSIP` FOREIGN KEY (`ID_PEMINJAMAN_ARSIP`) REFERENCES `peminjaman_arsip` (`ID_PEMINJAMAN_ARSIP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_peminjaman_arsip` */

/*Table structure for table `detail_peminjaman_inventaris` */

DROP TABLE IF EXISTS `detail_peminjaman_inventaris`;

CREATE TABLE `detail_peminjaman_inventaris` (
  `ID_BARANG_INV` int(11) NOT NULL,
  `ID_PEMINJAMAN_INV` int(11) NOT NULL,
  `TANGGAL_PENGEMBALIAN_BARANG` date NOT NULL,
  `STATUS_PENGEMBALIAN_BARANG` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_BARANG_INV`,`ID_PEMINJAMAN_INV`),
  KEY `10_FK` (`ID_BARANG_INV`),
  KEY `11_FK` (`ID_PEMINJAMAN_INV`),
  CONSTRAINT `FK_INVENTARIS` FOREIGN KEY (`ID_BARANG_INV`) REFERENCES `barang_inventaris` (`ID_BARANG_INV`),
  CONSTRAINT `FK_PEMINJAMAN_INV` FOREIGN KEY (`ID_PEMINJAMAN_INV`) REFERENCES `peminjaman_barang_inv` (`ID_PEMINJAMAN_INV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_peminjaman_inventaris` */

/*Table structure for table `detail_pengadaan_barang` */

DROP TABLE IF EXISTS `detail_pengadaan_barang`;

CREATE TABLE `detail_pengadaan_barang` (
  `ID_BARANG_HABIS_PAKAI` int(11) NOT NULL,
  `ID_PEGADAAN` int(11) NOT NULL,
  `TANGGAL_PENGADAAN` date NOT NULL,
  PRIMARY KEY (`ID_BARANG_HABIS_PAKAI`,`ID_PEGADAAN`),
  KEY `FK_BARANG` (`ID_BARANG_HABIS_PAKAI`),
  CONSTRAINT `FK_BARANG` FOREIGN KEY (`ID_BARANG_HABIS_PAKAI`) REFERENCES `barang_pakai_habis` (`ID_BARANG_HABIS_PAKAI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_pengadaan_barang` */

/*Table structure for table `peminjaman_arsip` */

DROP TABLE IF EXISTS `peminjaman_arsip`;

CREATE TABLE `peminjaman_arsip` (
  `ID_PEMINJAMAN_ARSIP` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` char(18) NOT NULL,
  `ID_ARSIP` int(11) NOT NULL,
  `JUMLAH_ARSIP` int(11) NOT NULL,
  `TANGGAL_PINJAM_ARSIP` date NOT NULL,
  PRIMARY KEY (`ID_PEMINJAMAN_ARSIP`),
  KEY `8_FK` (`NIP`),
  KEY `FK_ARSIP2` (`ID_ARSIP`),
  CONSTRAINT `FK_ARSIP2` FOREIGN KEY (`ID_ARSIP`) REFERENCES `arsip` (`ID_ARSIP`),
  CONSTRAINT `FK_PEMINJAM_7_USER` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman_arsip` */

/*Table structure for table `peminjaman_barang_inv` */

DROP TABLE IF EXISTS `peminjaman_barang_inv`;

CREATE TABLE `peminjaman_barang_inv` (
  `ID_PEMINJAMAN_INV` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` char(18) NOT NULL,
  `ID_BARANG_INV` int(11) NOT NULL,
  `JUMLAH_INV` int(11) NOT NULL,
  `TANGGAL_PINJAM_INV` date NOT NULL,
  PRIMARY KEY (`ID_PEMINJAMAN_INV`),
  UNIQUE KEY `PEMINJAMAN_BARANG_INV_PK` (`ID_PEMINJAMAN_INV`),
  KEY `4_FK` (`NIP`),
  KEY `ID_BARANG_INV` (`ID_BARANG_INV`),
  CONSTRAINT `FK_PEMINJAM_10_USER` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`),
  CONSTRAINT `ID_BARANG_INV` FOREIGN KEY (`ID_BARANG_INV`) REFERENCES `barang_inventaris` (`ID_BARANG_INV`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman_barang_inv` */

/*Table structure for table `pengadaan_barang` */

DROP TABLE IF EXISTS `pengadaan_barang`;

CREATE TABLE `pengadaan_barang` (
  `ID_PENGADAAN1` int(11) NOT NULL AUTO_INCREMENT,
  `URAIAN_PENGADAAN1` varchar(100) NOT NULL,
  `VOLUME1` int(11) NOT NULL,
  `SATUAN1` varchar(30) NOT NULL,
  `PAGU1` int(11) NOT NULL,
  `REALISASI1` int(11) NOT NULL,
  `KETERANGAN_RPB1` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PENGADAAN1`),
  UNIQUE KEY `PENGADAAN_BARANG_PK1` (`ID_PENGADAAN1`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pengadaan_barang` */

/*Table structure for table `permintaan_barang` */

DROP TABLE IF EXISTS `permintaan_barang`;

CREATE TABLE `permintaan_barang` (
  `ID_PERMINTAAN` int(11) NOT NULL AUTO_INCREMENT,
  `URAIAN_PERMINTAAN` varchar(100) NOT NULL,
  `VOLUME2` int(11) NOT NULL,
  `SATUAN2` varchar(30) NOT NULL,
  `REALISASI2` int(11) NOT NULL,
  `KETERANGAN_RPB2` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PERMINTAAN`),
  UNIQUE KEY `PERMINTAAN_BARANG_PK1` (`ID_PERMINTAAN`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `permintaan_barang` */

/*Table structure for table `rencana_pengadaan_barang` */

DROP TABLE IF EXISTS `rencana_pengadaan_barang`;

CREATE TABLE `rencana_pengadaan_barang` (
  `ID_PENGADAAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_BARANG_HABIS_PAKAI` int(11) NOT NULL,
  `VOLUME` int(11) NOT NULL,
  `SATUAN` varchar(30) NOT NULL,
  `PAGU` int(11) NOT NULL,
  `REALISASI` int(11) NOT NULL,
  `KETERANGAN_RPB` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_PENGADAAN`),
  UNIQUE KEY `RENCANA_PENGADAAN_BARANG_PK` (`ID_PENGADAAN`),
  KEY `ID_BARANG_HABIS_PAKAI` (`ID_BARANG_HABIS_PAKAI`),
  CONSTRAINT `ID_BARANG_HABIS_PAKAI` FOREIGN KEY (`ID_BARANG_HABIS_PAKAI`) REFERENCES `barang_pakai_habis` (`ID_BARANG_HABIS_PAKAI`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rencana_pengadaan_barang` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `ID_ROLE` char(2) NOT NULL,
  `NAMA_ROLE` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_ROLE`),
  UNIQUE KEY `ROLE_PK` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `role` */

insert  into `role`(`ID_ROLE`,`NAMA_ROLE`) values 
('0','Super Admin'),
('1','Admin'),
('2','User');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `NIP` char(18) NOT NULL,
  `ID_ROLE` char(2) NOT NULL,
  `NAMA_USER` varchar(100) NOT NULL,
  `PASSWORD_USER` varchar(100) NOT NULL,
  PRIMARY KEY (`NIP`),
  KEY `FK_USER_3_ROLE` (`ID_ROLE`),
  CONSTRAINT `FK_USER_3_ROLE` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`NIP`,`ID_ROLE`,`NAMA_USER`,`PASSWORD_USER`) values 
('151911513050','1','SRI LESTARI','12345');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
