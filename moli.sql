-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14 Mei 2018 pada 15.16
-- Versi Server: 5.7.18-1
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id_bank`, `nama`) VALUES
(1, 'BRI'),
(2, 'BCA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `gambar`, `deskripsi`) VALUES
(1, 'ikan air laut', '', ''),
(2, 'ikan air tawar', '', 'wowo'),
(6, 'ikan air payau', '275d7e3a65339afeb0cc0bf6f851e82a.jpg', 'ikan yang dapat hidup diair dengan campuran air laut dan air tawar atau memiliki kadar garam yang tidak terlau pekat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `ongkir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id_pengaturan`, `ongkir`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `telp`, `email`, `password`, `id_toko`, `latitude`, `longitude`, `foto`) VALUES
(2, 'm. nindra zaka', '085331247098', 'mnindrazaka@gmail.com', 'a7f561e744962f5fed246a51067bbd72', 1, 0.05678, 0.6789, ''),
(3, 'Moh. Berlian Nusantara', '085463527362', 'berlian@gmail.com', 'cb8335a2e206c1d3b2c279b6bf0761f4', NULL, 0.56789, 0.234568, ''),
(4, 'eri', '085331247098', 'eri@gmail.com', 'eri', NULL, 0.56789, 0.45678, ''),
(5, 'Moh. Berlian Nusantara', '082324588523', 'liannusantara1158@gmail.com', '2616c763893e5d2618389f8c98d8bf25', NULL, NULL, NULL, 'a57a81db64c2f7b897b78c52ec1c46d4.jpg'),
(6, 'WOWOWO', NULL, 'wowo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, -7.95873, 112.638, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
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
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `id_toko`, `id_kategori`, `foto`, `harga`, `status`, `satuan`) VALUES
(1, 'ikan mujair', 'ikan mujair segar', 1, 1, 'ikan mujair.png', 5000, 1, 'ekor'),
(2, 'ikan gurami', 'ikan gurami segar', 1, 2, 'ikan gurami.png', 5000, 1, 'ekor'),
(3, 'ikan lele', 'ikan lele segar', 1, 2, 'ikan lele.png', 5000, 1, 'ekor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `id_toko` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id_rating`, `rating`, `id_toko`, `id_pengguna`, `keterangan`) VALUES
(1, 3, 1, 3, 'toko yang terpercaya'),
(2, 5, 1, 4, 'toko yang terpercaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `no` varchar(45) DEFAULT NULL,
  `id_bank` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama`, `no`, `id_bank`, `id_toko`) VALUES
(1, 'm. nindra zaka', '567822467', 1, 1),
(2, 'wowo', '989898', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
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
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama`, `slogan`, `deskripsi`, `logo`, `telp`, `latitude`, `longitude`, `kota`) VALUES
(1, 'pt. ikan sehat', 'ikan sehat untuk kita semua', 'kami bergerak dalam distribusi ikan sehat di seluruh indonesia', 'logo.png', '085331247098', 0.678968, 0.789679, 'Malang'),
(2, 'wowo', 'wowow', 'wowow', 'b1932576967d9c7a484daa452a755059.png', '09798697', -7.95651, 112.643, 'beqwww');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `keterangan` text,
  `id_produk` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `rating`, `keterangan`, `id_produk`, `id_pengguna`) VALUES
(1, 5, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 1, 3),
(2, 5, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 2, 3),
(3, 5, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 3, 3),
(4, 2, 'Lorem Ipsum Dolor Sit Amet, consectur adipiscing elit. Maecanas Fermentum laoreet', 3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_produk_has_transaksi_produk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_produk_has_transaksi_transaksi1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `fk_pengguna_usaha` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_produk_usaha1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rating_toko1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `fk_rekening_bank1` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rekening_toko1` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `fk_ulasan_pengguna1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ulasan_produk1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
