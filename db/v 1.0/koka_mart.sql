-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 04.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koka_mart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(2) NOT NULL,
  `admin_nama` varchar(50) NOT NULL,
  `admin_telp` varchar(15) NOT NULL,
  `admin_alamat` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(5) NOT NULL,
  `customer_nama` varchar(100) NOT NULL,
  `customer_nohp` varchar(15) NOT NULL,
  `customer_email` text NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_alamat` text NOT NULL,
  `customer_provinsi_id` int(2) NOT NULL,
  `customer_provinsi` varchar(100) NOT NULL,
  `customer_kota_id` int(5) NOT NULL,
  `customer_kota` varchar(100) NOT NULL,
  `customer_kodepos` int(10) NOT NULL,
  `customer_status` int(1) NOT NULL,
  `customer_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_token`
--

CREATE TABLE `customer_token` (
  `token_id` int(5) NOT NULL,
  `token_email` text NOT NULL,
  `token` text NOT NULL,
  `token_created` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(3) NOT NULL,
  `kategori_nama` varchar(150) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `keranjang_id` int(5) NOT NULL,
  `keranjang_customer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang_detail`
--

CREATE TABLE `keranjang_detail` (
  `kdetail_id` int(10) NOT NULL,
  `kdetail_keranjang_id` int(5) NOT NULL,
  `kdetail_produk_id` varchar(15) NOT NULL,
  `kdetail_jumlah` int(3) NOT NULL,
  `kdetail_subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(5) NOT NULL,
  `pembayaran_customer_id` int(5) NOT NULL,
  `pembayaran_penjualan_id` varchar(15) NOT NULL,
  `pembayaran_norek` text NOT NULL,
  `pembayaran_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` varchar(15) NOT NULL,
  `penjualan_customer_id` int(5) NOT NULL,
  `penjualan_keranjang_total` double NOT NULL,
  `penjualan_penerima` varchar(150) NOT NULL,
  `penjualan_telp` varchar(15) NOT NULL,
  `penjualan_kurir` varchar(150) NOT NULL,
  `penjualan_layanan` varchar(150) NOT NULL,
  `penjualan_biaya` double NOT NULL,
  `penjualan_alamat` text NOT NULL,
  `penjualan_status` int(50) NOT NULL,
  `penjualan_resi` text NOT NULL,
  `penjualan_tgl` varchar(30) NOT NULL,
  `penjualan_tgl_expired` varchar(30) NOT NULL,
  `penjualan_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `pdetail_id` int(10) NOT NULL,
  `pdetail_penjualan_id` int(5) NOT NULL,
  `pdetail_produk_id` varchar(15) NOT NULL,
  `pdetail_jumlah` int(3) NOT NULL,
  `pdetail_subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` varchar(15) NOT NULL,
  `produk_nama` varchar(150) NOT NULL,
  `produk_kategori_id` int(3) NOT NULL,
  `produk_img` text NOT NULL,
  `produk_deskripsi` varchar(255) NOT NULL,
  `produk_harga` double NOT NULL,
  `produk_stok` int(3) NOT NULL,
  `produk_input` varchar(30) NOT NULL,
  `produk_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `customer_token`
--
ALTER TABLE `customer_token`
  ADD PRIMARY KEY (`token_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`keranjang_id`);

--
-- Indeks untuk tabel `keranjang_detail`
--
ALTER TABLE `keranjang_detail`
  ADD PRIMARY KEY (`kdetail_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer_token`
--
ALTER TABLE `customer_token`
  MODIFY `token_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `keranjang_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang_detail`
--
ALTER TABLE `keranjang_detail`
  MODIFY `kdetail_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
