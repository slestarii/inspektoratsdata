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

USE `kearsipan`;

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
  PRIMARY KEY (`ID_ARSIP`),
  UNIQUE KEY `ARSIP_PK` (`ID_ARSIP`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `arsip` */

insert  into `arsip`(`ID_ARSIP`,`KODE_KLAS`,`INDEKS`,`JENIS_ARSIP`,`KURUN_WAKTU`,`TINGKAT_PERKEMBANGAN`,`JUMLAH`,`KETERANGAN_ARSIP`,`NO_DEF_FOLDER`,`NO_DEF_BLOK`,`LOKASI_SIMPAN`,`JANGKA_WAKTU`,`NASIB_AKHIR`,`KATEGORI_ARSIP`,`TAHUN_PEMINDAHAN`) values 
(1,'700','NHP-KKA','NHP Pemeriksaan Regular SMAN 1 Sidoarjo','2012','Asli - Copy','1 Berkas','Baik',1,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020'),
(2,'700','NHP-KKA','NHP - KKA Pemeriksaan Reguler SMAN 2 Sidoarjo','2012','Asli - Copy','1 Berkas','Baik',2,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020'),
(3,'700','NHP-KKA','NHP - KKA Pemeriksaan Reguler SMAN 1 Porong','2012','Asli - Copy','1 Berkas','Baik',3,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020'),
(4,'700','NHP-KKA','NHP Pemeriksaan Regular SMAN 2 Sidoarjo','2013','Asli - Copy','1 Berkas','Baik',1,1,'Rak 1',8,'Dinilai Kembali','terbatas','2020');

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
  `TAHUN_INPUT` varchar(4) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_inventaris` */

insert  into `barang_inventaris`(`ID_BARANG_INV`,`KODE_BARANG_INV`,`NAMA_BARANG_INV`,`NOMOR_REG`,`MERK`,`TYPE`,`UKURAN`,`BAHAN`,`TAHUN_INPUT`,`TAHUN_PEROLEHAN`,`NO_PABRIK`,`NO_RANGKA`,`NO_MESIN`,`NO_POLISI`,`NO_BPKB`,`HARGA_PEROLEHAN`,`KETERANGAN_INV`) values 
(1,'1.3.2.01.03.05.010','Pompa Air','1122','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum'),
(2,'1.3.2.01.03.05.010','','1123','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum'),
(3,'1.3.2.01.03.05.010','','1124','Jetpump 40M','-','-','Campuran','2019','-','-','-','-','-','-',3489529,'Ruang Sub Bagian Administrasi dan Umum');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_pakai_habis` */

insert  into `barang_pakai_habis`(`ID_BARANG_HABIS_PAKAI`,`URAIAN_RINCIAN`,`SALDO_AWAL`,`PENAMBAHAN`,`PENGURANGAN`,`SALDO_AKHIR`,`HARGA_PEMBELIAN`,`SALDO_AKHIR_PERSEDIAAN`) values 
(1,'Alat kebersihan dan bahan pembersih',6,0,6,0,62000,0),
(2,'Cairan Pencuci Piring',3,0,3,0,41500,0),
(3,'handsanitizer 5 liter',1,0,1,0,150000,0),
(4,'Kapur barus kamar mandi',12,0,12,0,30000,0);

/*Table structure for table `barang_pakai_habis1` */

DROP TABLE IF EXISTS `barang_pakai_habis1`;

CREATE TABLE `barang_pakai_habis1` (
  `ID_BARANG_HABIS_PAKAI` int(11) NOT NULL AUTO_INCREMENT,
  `URAIAN_RINCIAN1` varchar(100) NOT NULL,
  `SALDO_AWAL1` int(11) NOT NULL,
  `PENAMBAHAN1` int(11) NOT NULL,
  `PENGURANGAN1` int(11) NOT NULL,
  `HARGA_PEMBELIAN1` int(11) NOT NULL,
  PRIMARY KEY (`ID_BARANG_HABIS_PAKAI`),
  UNIQUE KEY `BARANG_PAKAI_HABIS_PK1` (`ID_BARANG_HABIS_PAKAI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_pakai_habis1` */

/*Table structure for table `barang_pakai_habis2` */

DROP TABLE IF EXISTS `barang_pakai_habis2`;

CREATE TABLE `barang_pakai_habis2` (
  `ID_BARANG_HABIS_PAKAI` int(11) NOT NULL AUTO_INCREMENT,
  `SALDO_AKHIR` int(11) NOT NULL,
  `SALDO_AKHIR_PERSEDIAAN` int(11) NOT NULL,
  PRIMARY KEY (`ID_BARANG_HABIS_PAKAI`),
  UNIQUE KEY `BARANG_PAKAI_HABIS_PK` (`ID_BARANG_HABIS_PAKAI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang_pakai_habis2` */

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
  KEY `FK_PENGADAAN` (`ID_PEGADAAN`),
  KEY `FK_BARANG` (`ID_BARANG_HABIS_PAKAI`),
  CONSTRAINT `FK_BARANG` FOREIGN KEY (`ID_BARANG_HABIS_PAKAI`) REFERENCES `barang_pakai_habis` (`ID_BARANG_HABIS_PAKAI`),
  CONSTRAINT `FK_PENGADAAN` FOREIGN KEY (`ID_PEGADAAN`) REFERENCES `rencana_pengadaan_barang` (`ID_PEGADAAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_pengadaan_barang` */

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `ID_JABATAN` int(11) NOT NULL,
  `NAMA_JABATAN` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_JABATAN`),
  UNIQUE KEY `JABATAN_PK` (`ID_JABATAN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `jabatan` */

insert  into `jabatan`(`ID_JABATAN`,`NAMA_JABATAN`) values 
(23,'2edsssadf');

/*Table structure for table `pangkat` */

DROP TABLE IF EXISTS `pangkat`;

CREATE TABLE `pangkat` (
  `ID_PAGKAT` int(11) NOT NULL,
  `NAMA_PANGKAT` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_PAGKAT`),
  UNIQUE KEY `PANGKAT_PK` (`ID_PAGKAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pangkat` */

insert  into `pangkat`(`ID_PAGKAT`,`NAMA_PANGKAT`) values 
(12,'aasdfg');

/*Table structure for table `peminjaman_arsip` */

DROP TABLE IF EXISTS `peminjaman_arsip`;

CREATE TABLE `peminjaman_arsip` (
  `ID_PEMINJAMAN_ARSIP` int(11) NOT NULL AUTO_INCREMENT,
  `NIP` char(18) NOT NULL,
  `ID_ARSIP` int(11) NOT NULL,
  `TANGGAL_PINJAM_ARSIP` date NOT NULL,
  PRIMARY KEY (`ID_PEMINJAMAN_ARSIP`),
  KEY `8_FK` (`NIP`),
  KEY `FK_ARSIP2` (`ID_ARSIP`),
  CONSTRAINT `FK_ARSIP2` FOREIGN KEY (`ID_ARSIP`) REFERENCES `arsip` (`ID_ARSIP`),
  CONSTRAINT `FK_PEMINJAM_7_USER` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman_barang_inv` */

/*Table structure for table `rencana_pengadaan_barang` */

DROP TABLE IF EXISTS `rencana_pengadaan_barang`;

CREATE TABLE `rencana_pengadaan_barang` (
  `ID_PEGADAAN` int(11) NOT NULL AUTO_INCREMENT,
  `URAIAN_R_PENGADAAN` varchar(100) NOT NULL,
  `VOLUME` int(11) NOT NULL,
  `SATUAN` int(11) NOT NULL,
  `HARGA` int(11) NOT NULL,
  PRIMARY KEY (`ID_PEGADAAN`),
  UNIQUE KEY `PENGADAAN_BARANG_PK` (`ID_PEGADAAN`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rencana_pengadaan_barang` */

insert  into `rencana_pengadaan_barang`(`ID_PEGADAAN`,`URAIAN_R_PENGADAAN`,`VOLUME`,`SATUAN`,`HARGA`) values 
(2,'asdfghjkl',2,0,12);

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
  `ID_JABATAN` int(11) NOT NULL,
  `ID_PAGKAT` int(11) NOT NULL,
  `ID_ROLE` char(2) NOT NULL,
  `NAMA_USER` varchar(100) NOT NULL,
  `PASSWORD_USER` varchar(100) NOT NULL,
  `EMAIL_USER` varchar(100) NOT NULL,
  PRIMARY KEY (`NIP`),
  KEY `FK_USER_1_PANGKAT` (`ID_PAGKAT`),
  KEY `FK_USER_2_JABATAN` (`ID_JABATAN`),
  KEY `FK_USER_3_ROLE` (`ID_ROLE`),
  CONSTRAINT `FK_USER_1_PANGKAT` FOREIGN KEY (`ID_PAGKAT`) REFERENCES `pangkat` (`ID_PAGKAT`),
  CONSTRAINT `FK_USER_2_JABATAN` FOREIGN KEY (`ID_JABATAN`) REFERENCES `jabatan` (`ID_JABATAN`),
  CONSTRAINT `FK_USER_3_ROLE` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
