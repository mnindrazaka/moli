-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2018 at 10:33 PM
-- Server version: 5.7.18-1
-- PHP Version: 7.0.20-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` text,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `id_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'berlian', 'cb8335a2e206c1d3b2c279b6bf0761f4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id_akses` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id_akses`, `id_modul`, `id_level`) VALUES
(22, 2, 2),
(23, 4, 2),
(24, 1, 1),
(25, 2, 1),
(26, 3, 1),
(27, 4, 1),
(28, 5, 1),
(29, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama`) VALUES
(1, 'BRI'),
(2, 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_toko`
--

CREATE TABLE `jenis_toko` (
  `id_jenis_toko` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_toko`
--

INSERT INTO `jenis_toko` (`id_jenis_toko`, `nama`, `keterangan`, `gambar`) VALUES
(0, 'Standart', '', ''),
(1, 'Bronze', '', 'bronze.png'),
(2, 'Silver', '', 'silver.png'),
(3, 'Gold', '', 'gold.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `gambar`, `deskripsi`) VALUES
(1, 'ikan air laut', '', ''),
(2, 'ikan air tawar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `jumlah`, `id_pengguna`, `subtotal`) VALUES
(1, 4, 2, 2, 4000000),
(4, 1, 3, 2, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama`) VALUES
(1, 'admin'),
(2, 'kasir'),
(3, 'pembuat laporan');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `label` varchar(45) NOT NULL,
  `icon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama`, `label`, `icon`) VALUES
(1, 'Pengguna', 'Pengguna', 'account-multiple'),
(2, 'Toko', 'Toko', 'store'),
(3, 'Kategori', 'Kategori', 'tag'),
(4, 'Bank', 'Bank', 'bank'),
(5, 'Level', 'Level Admin', 'signal'),
(6, 'Admin', 'Admin', 'account');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `ongkir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `ongkir`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` text,
  `id_toko` int(11) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `telp`, `email`, `password`, `id_toko`, `latitude`, `longitude`, `foto`) VALUES
(2, 'm. nindra zaka', '085331247098', 'mnindrazaka@gmail.com', 'a7f561e744962f5fed246a51067bbd72', 1, -7.95873, 112.638, '8c57cc1c4ad167d01bf26f4581248af8.png'),
(3, 'Moh. Berlian Nusantara', '085463527362', 'berlian@gmail.com', '81373d0406b0661e30de35cfbeb57413', 4, -8.20468, 114.38, ''),
(4, 'eri', '085331247098', 'eri@gmail.com', 'eri', NULL, 0.56789, 0.45678, ''),
(5, 'raka ardianata baida', '085331247098', 'rakaardianata@gmail.com', '38a958280e3602e248b8f341110e6fb3', NULL, NULL, NULL, '95583238b0546ed34cbd9052c1b2243a.png'),
(6, 'ananta', NULL, 'ananta@gmail.com', 'e918c9572cd5f2c9df880ccb8736eecd', NULL, NULL, NULL, NULL),
(7, 'ardhana', '085331247098', 'ardhana@gmail.com', '9d906487acc499108bb12b2889706ec7', NULL, -7.95541, 112.632, '6751c22d4ac1acf68cd2087748ce3d01.png'),
(8, 'aditya', '085331247098', 'aditya@gmail.com', '057829fa5a65fc1ace408f490be486ac', NULL, -7.96277, 112.636, NULL),
(9, 'fannyervan', NULL, 'fannyervan@gmail.com', 'ff7af2c7ac9fd099d81d52dacbe25811', 5, -7.95873, 112.638, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `deskripsi` text,
  `id_toko` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `satuan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `id_toko`, `id_kategori`, `foto`, `harga`, `status`, `satuan`) VALUES
(1, 'ikan mujair', 'ikan mujair segar', 1, 1, 'ikan mujair.png', 5000, 1, 'ekor'),
(2, 'ikan gurami', 'ikan gurami segar', 1, 2, 'ikan gurami.png', 5000, 1, 'ekor'),
(4, 'Ikan Terbang Tinggi', 'Ikan yang bisa terbang di angkasa ini pernah muncul di indosiar tetetet', 1, 2, '9ec5eb77459be22a5e59597382bc4e91.jpg', 2000000, 0, 'buntut'),
(5, 'Ikan tuna', ' Ikan tuna segar dari lautan jepang', 1, 1, '764b6627b6fffda92cafa67631ecd35c.jpg', 100000, 1, 'ekor');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `id_toko` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating`, `id_toko`, `id_pengguna`, `keterangan`) VALUES
(1, 3, 1, 3, 'toko yang terpercaya'),
(2, 5, 1, 4, 'toko yang terpercaya');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `no` varchar(45) DEFAULT NULL,
  `id_bank` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama`, `no`, `id_bank`, `id_toko`) VALUES
(2, 'Wewe', '3456789', 1, 1),
(3, 'Berlian', '567890', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `id_jenis_toko` int(11) NOT NULL DEFAULT '0',
  `nama` varchar(45) DEFAULT NULL,
  `slogan` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `logo` varchar(45) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `id_jenis_toko`, `nama`, `slogan`, `deskripsi`, `logo`, `telp`, `latitude`, `longitude`, `kota`) VALUES
(1, 0, 'pt. ikan sehat', 'ikan sehat untuk kita semua', 'kami bergerak dalam distribusi ikan sehat di seluruh indonesia', 'logo.png', '085331247098', 0.678968, 0.789679, 'Malang'),
(2, 0, 'Barokah buwana', 'wowow', 'wowow', 'b1932576967d9c7a484daa452a755059.png', '09798697', -7.95651, 112.643, 'surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `bukti` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `keterangan` text,
  `id_produk` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `rating`, `keterangan`, `id_produk`, `id_pengguna`) VALUES
(1, 5, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 1, 3),
(2, 5, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id_akses`),
  ADD KEY `id_modul` (`id_modul`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_transaksi`,`id_detail_transaksi`),
  ADD KEY `fk_produk_has_transaksi_transaksi1_idx` (`id_transaksi`),
  ADD KEY `fk_produk_has_transaksi_produk1_idx` (`id_produk`);

--
-- Indexes for table `jenis_toko`
--
ALTER TABLE `jenis_toko`
  ADD PRIMARY KEY (`id_jenis_toko`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `fk_pengguna_usaha_idx` (`id_toko`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`,`id_toko`,`id_kategori`),
  ADD KEY `fk_produk_usaha1_idx` (`id_toko`),
  ADD KEY `fk_produk_kategori1_idx` (`id_kategori`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`,`id_toko`,`id_pengguna`),
  ADD KEY `fk_rating_toko1_idx` (`id_toko`),
  ADD KEY `fk_rating_pengguna1_idx` (`id_pengguna`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`,`id_bank`,`id_toko`),
  ADD KEY `fk_rekening_bank1_idx` (`id_bank`),
  ADD KEY `fk_rekening_toko1_idx` (`id_toko`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_transaksi_pengguna1_idx` (`id_pengguna`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`,`id_produk`,`id_pengguna`),
  ADD KEY `fk_ulasan_produk1_idx` (`id_produk`),
  ADD KEY `fk_ulasan_pengguna1_idx` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_toko`
--
ALTER TABLE `jenis_toko`
  MODIFY `id_jenis_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `akses`
--
ALTER TABLE `akses`
  ADD CONSTRAINT `akses_ibfk_1` FOREIGN KEY (`id_modul`) REFERENCES `modul` (`id_modul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akses_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_produk_has_transaksi_produk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_produk_has_transaksi_transaksi1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `fk_rekening_bank1` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `fk_ulasan_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ulasan_produk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
