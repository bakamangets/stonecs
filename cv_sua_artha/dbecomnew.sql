/*
SQLyog Community v8.82 
MySQL - 5.5.5-10.4.20-MariaDB : Database - dbecomnew
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbecomnew` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbecomnew`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_26_140131_create_permission_tables',1);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values (1,'App\\User',1),(2,'App\\User',15);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (3,'jenis-admin','web','2019-12-28 13:07:38','2019-12-28 13:07:38'),(4,'produk-admin','web','2019-12-28 13:45:40','2019-12-28 13:45:40'),(5,'stok-admin','web','2020-10-06 12:25:49','2020-10-06 12:25:49'),(7,'lapor-owner','web','2020-10-06 12:30:28','2020-10-06 12:30:28');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values (3,1),(4,1),(5,1),(7,2);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values (1,'admin','web','2019-12-27 05:49:09','2019-12-27 05:49:09'),(2,'owner','web','2020-10-05 12:08:10','2020-10-05 12:08:10');

/*Table structure for table `tbbahan` */

DROP TABLE IF EXISTS `tbbahan`;

CREATE TABLE `tbbahan` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `KodeJenis` varchar(50) DEFAULT NULL,
  `NamaBahan` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbbahan` */

insert  into `tbbahan`(`Id`,`KodeJenis`,`NamaBahan`,`Gambar`) values (1,'Lemari','Kayu','1632972733_lemari.jpg'),(2,'Lemari','Besi','1632977719_kulkas.jpg');

/*Table structure for table `tbjenis` */

DROP TABLE IF EXISTS `tbjenis`;

CREATE TABLE `tbjenis` (
  `KodeJenis` int(10) NOT NULL AUTO_INCREMENT,
  `NamaJenis` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Custom` enum('0','1') DEFAULT NULL,
  `HargaPerMeter` double(10,0) DEFAULT NULL,
  PRIMARY KEY (`KodeJenis`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbjenis` */

insert  into `tbjenis`(`KodeJenis`,`NamaJenis`,`Deskripsi`,`Custom`,`HargaPerMeter`) values (1,'Kulkas','Barang kualitas terjamin','0',NULL),(2,'Lemari','Terbuat dari bahan pilihan','1',100000),(3,'Televisi','Gambar jernih','0',NULL),(4,'Meja','Bisa pilih sesuai keinginan','1',150000),(5,'AC','Cepat Dingin','0',NULL);

/*Table structure for table `tbmodel` */

DROP TABLE IF EXISTS `tbmodel`;

CREATE TABLE `tbmodel` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `KodeJenis` varchar(50) DEFAULT NULL,
  `NamaModel` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbmodel` */

insert  into `tbmodel`(`Id`,`KodeJenis`,`NamaModel`,`Gambar`) values (1,'Lemari','Kuno','1632976305_lemari.jpg'),(2,'Lemari','Modern','1632977751_kulkas.jpg');

/*Table structure for table `tbmotif` */

DROP TABLE IF EXISTS `tbmotif`;

CREATE TABLE `tbmotif` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `KodeJenis` varchar(50) DEFAULT NULL,
  `NamaMotif` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbmotif` */

insert  into `tbmotif`(`Id`,`KodeJenis`,`NamaMotif`,`Gambar`) values (1,'Lemari','Loreng','1632973923_lemari.jpg'),(2,'Lemari','Belang','1632977736_kulkas.jpg');

/*Table structure for table `tbpesan` */

DROP TABLE IF EXISTS `tbpesan`;

CREATE TABLE `tbpesan` (
  `KodePesan` int(10) NOT NULL AUTO_INCREMENT,
  `JenisFurniture` varchar(25) NOT NULL,
  `Bahan` varchar(50) NOT NULL,
  `Motif` varchar(50) NOT NULL,
  `Ukuran` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Komentar` varchar(150) NOT NULL,
  `DP` double(10,0) NOT NULL,
  `AlamatKirim` varchar(255) NOT NULL,
  `StatusPesan` varchar(20) NOT NULL,
  `TglPesan` date NOT NULL,
  `KodePelanggan` varchar(50) NOT NULL,
  `TelpPelanggan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`KodePesan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbpesan` */

insert  into `tbpesan`(`KodePesan`,`JenisFurniture`,`Bahan`,`Motif`,`Ukuran`,`Model`,`Gambar`,`Komentar`,`DP`,`AlamatKirim`,`StatusPesan`,`TglPesan`,`KodePelanggan`,`TelpPelanggan`) values (1,'Lemari','Karbon','Batik','1 x 3 meter','Klasik','1631523400_lemari.jpg','Segera',200000,'Denpasar','Menunggu diproses','2021-09-13','Wira Antara',NULL),(2,'Lemari','Kayu','Motif B','1 x 3 meter','Model A','1632813436_lemari.jpg','Tolong dibantu',200000,'Padang Sambian','Sedang Diproses','2021-09-28','Trian','123456789'),(3,'Lemari','Kayu','Loreng','2x3','Kuno','1632981926_lemari.jpg','Tolong dibantu',200000,'Denpasar','Menunggu diproses','2021-09-30','Wira Antara','081976543988');

/*Table structure for table `tbproduk` */

DROP TABLE IF EXISTS `tbproduk`;

CREATE TABLE `tbproduk` (
  `KodeProduk` int(10) NOT NULL AUTO_INCREMENT,
  `KodeJenis` varchar(50) NOT NULL,
  `NamaProduk` varchar(50) NOT NULL,
  `Harga` double(10,0) NOT NULL,
  `HargaPokok` double(10,0) NOT NULL,
  `Stok` int(10) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`KodeProduk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbproduk` */

insert  into `tbproduk`(`KodeProduk`,`KodeJenis`,`NamaProduk`,`Harga`,`HargaPokok`,`Stok`,`Gambar`,`Deskripsi`) values (1,'Kulkas','Kulkas 2 pintu Sharp',1875000,1500000,1,'1631523209_kulkas.jpg','Pasti dingin .....'),(2,'Lemari','Lemari Olimpyc',350000,200000,3,'1631523270_lemari.jpg','Terbuat dari bahan pilihan');

/*Table structure for table `tbtransaksi` */

DROP TABLE IF EXISTS `tbtransaksi`;

CREATE TABLE `tbtransaksi` (
  `KodeTransaksi` int(10) NOT NULL AUTO_INCREMENT,
  `KodePelanggan` varchar(20) NOT NULL,
  `KodeProduk` varchar(50) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `TotalBayar` double(10,0) NOT NULL,
  `AlamatKirim` varchar(255) NOT NULL,
  `TglOrder` date NOT NULL,
  `StatusTransaksi` varchar(20) NOT NULL,
  `TelpPelanggan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`KodeTransaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbtransaksi` */

insert  into `tbtransaksi`(`KodeTransaksi`,`KodePelanggan`,`KodeProduk`,`Jumlah`,`TotalBayar`,`AlamatKirim`,`TglOrder`,`StatusTransaksi`,`TelpPelanggan`) values (1,'Wira Antara','Kulkas 2 pintu Sharp',1,1875000,'Denpasar','2021-09-13','Sedang diproses',NULL),(2,'Wira Antara','Lemari Olimpyc',1,350000,'Denpasar','2021-09-13','Sedang diproses',NULL),(3,'Wira Antara','Lemari Olimpyc',1,350000,'Denpasar','2021-09-28','Sedang diproses','081976543988'),(4,'Trian','Kulkas 2 pintu Sharp',1,1875000,'Padang Sambian','2021-09-28','Dalam pengiriman','123456789');

/*Table structure for table `tbukuran` */

DROP TABLE IF EXISTS `tbukuran`;

CREATE TABLE `tbukuran` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `KodeJenis` varchar(50) DEFAULT NULL,
  `NamaUkuran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbukuran` */

insert  into `tbukuran`(`Id`,`KodeJenis`,`NamaUkuran`) values (1,'Lemari','2x3'),(2,'Lemari','2x4');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`telp`,`alamat`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','admin@gmail.com',NULL,'$2y$10$nV4uqlo9eY8mwp8CeKHf2OSZKPd7ZNPgAhq3pJluuceP5ntwYKgye','0363 420 420','Denpasar',NULL,NULL,NULL),(2,'Wira Antara','wira@gmail.com',NULL,'$2y$10$gbLXx3c5WaxYAqU/c0wRXu1DFeEdFf4ZiC8u10buta9wRoiEdadHe','081976543988','Denpasar',NULL,'2021-09-13 08:50:36','2021-09-13 08:50:36'),(3,'Trian','trian@gmail.com',NULL,'$2y$10$RlvMkEiI/XYjzO2Oe5GE6O9T7YaMIMklSPl1oSo5XQHulRNPEgnHm','123456789','Padang Sambian',NULL,'2021-09-28 07:12:55','2021-09-28 07:12:55');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
