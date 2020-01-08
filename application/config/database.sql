/*
SQLyog Enterprise v12.4.3 (64 bit)
MySQL - 10.1.24-MariaDB : Database - laporan_csr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `anggaran` bigint(20) NOT NULL,
  `sasaran` varchar(255) NOT NULL,
  `lokasi` text NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `laporan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
