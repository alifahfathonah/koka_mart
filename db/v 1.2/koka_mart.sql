-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2021 pada 16.30
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

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_telp`, `admin_alamat`, `admin_email`, `admin_username`, `admin_password`) VALUES
(1, 'Roki Prasetyo Adi', '089608560667', 'Sempusari - Jember', 'rokiprasetyoadi@gmail.com', 'roxx', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` varchar(15) NOT NULL,
  `artikel_judul` varchar(255) NOT NULL,
  `artikel_gambar` varchar(255) NOT NULL,
  `artikel_deskripsi` text NOT NULL,
  `artikel_penulis` varchar(255) NOT NULL,
  `artikel_created` varchar(15) NOT NULL,
  `artikel_update` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_judul`, `artikel_gambar`, `artikel_deskripsi`, `artikel_penulis`, `artikel_created`, `artikel_update`) VALUES
('A210120210001', 'Tes 1', 'A210120210001.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.&lt;/p&gt;\r\n', 'roxxx', '2021-01-21 20:0', '2021-01-21 20:2'),
('A210120210002', 'Tes 2', 'A210120210002.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.&lt;/p&gt;\r\n', 'roxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxx xxxxx', '2021-01-21 20:0', ''),
('A210120210003', 'Tes 3 roxxxxxxxxx xdsdsf cdscdsfdsf dsfsdfsd', 'A210120210003.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.&lt;/p&gt;\r\n', 'roxx', '2021-01-21 20:0', ''),
('A210120210004', 'Tes 4', 'A210120210004.jpg', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n', 'roxx', '2021-01-21 20:1', ''),
('A210120210005', 'Tes 5', 'A210120210005.jpg', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n', 'roxx', '2021-01-21 20:1', ''),
('A210120210006', 'tes 6', 'A210120210006.jpg', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n', 'roxx', '2021-01-21 20:1', ''),
('A210120210007', 'Tes 7', 'A210120210007.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.&lt;/p&gt;\r\n\r\n&lt;p&gt;Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah &quot;de Finibus Bonorum et Malorum&quot; (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, berasal dari sebuah baris di bagian 1.10.32.&lt;/p&gt;\r\n', 'rocc', '2021-01-21 21:2', '');

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(3) NOT NULL,
  `kategori_nama` varchar(150) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(1, 'Premium', 'Produk ini merupakan produk asli dari PUSLIT KOKA Indonesia'),
(2, 'UKM', 'Produk ini merupakan produk binaan UKM dari PUSLIT KOKA Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` int(5) NOT NULL,
  `pembayaran_customer_id` int(5) NOT NULL,
  `pembayaran_penjualan_id` varchar(30) NOT NULL,
  `pembayaran_norek` text NOT NULL,
  `pembayaran_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` varchar(30) NOT NULL,
  `penjualan_penerima` varchar(100) NOT NULL,
  `penjualan_email` varchar(150) NOT NULL,
  `penjualan_telp` varchar(15) NOT NULL,
  `penjualan_alamat` text NOT NULL,
  `penjualan_keranjang_total` int(11) NOT NULL,
  `penjualan_kurir` varchar(150) NOT NULL,
  `penjualan_layanan` varchar(150) NOT NULL,
  `penjualan_biaya` int(11) NOT NULL,
  `penjualan_status` enum('Waiting for Payment','Process','On The Way','Rejected','Canceled','Arrived') NOT NULL DEFAULT 'Waiting for Payment',
  `penjualan_resi` text NOT NULL,
  `penjualan_tgl` varchar(30) NOT NULL,
  `penjualan_tgl_expired` varchar(30) NOT NULL,
  `penjualan_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `penjualan_penerima`, `penjualan_email`, `penjualan_telp`, `penjualan_alamat`, `penjualan_keranjang_total`, `penjualan_kurir`, `penjualan_layanan`, `penjualan_biaya`, `penjualan_status`, `penjualan_resi`, `penjualan_tgl`, `penjualan_tgl_expired`, `penjualan_total`) VALUES
('TR080120210002', 'TESS', '', '089608560667', 'JBR - Demak - Jawa Tengah', 51000, 'jne', 'OKE', 16000, 'Arrived', '34567875', '2021-01-08 10:19:13', '', 67000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `pdetail_id` int(10) NOT NULL,
  `pdetail_penjualan_id` varchar(30) NOT NULL,
  `pdetail_produk_id` varchar(15) NOT NULL,
  `pdetail_jumlah` int(3) NOT NULL,
  `pdetail_subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`pdetail_id`, `pdetail_penjualan_id`, `pdetail_produk_id`, `pdetail_jumlah`, `pdetail_subtotal`) VALUES
(19, 'TR040120210001', 'P161220200001', 1, 3444),
(20, 'TR040120210001', 'P171220200002', 1, 35000),
(61, 'TR060120210002', 'P161220200001', 1, 3444),
(62, 'TR060120210002', 'P171220200007', 1, 15000),
(63, 'TR060120210002', 'P171220200002', 1, 35000),
(64, 'TR060120210003', 'P171220200002', 1, 35000),
(65, 'TR060120210004', 'P171220200003', 1, 56777),
(66, 'TR060120210005', 'P171220200003', 1, 56777),
(67, 'TR060120210005', 'P171220200007', 1, 15000),
(68, 'TR060120210006', 'P171220200004', 1, 12333),
(69, 'TR060120210007', 'P171220200004', 1, 12333),
(72, 'TR070120210002', 'P171220200006', 1, 34000),
(73, 'TR070120210002', 'P171220200007', 1, 15000),
(74, 'TR070120210003', 'P171220200002', 1, 35000),
(75, 'TR070120210003', 'P171220200007', 1, 15000),
(78, 'TR080120210002', 'P171220200004', 3, 51000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` varchar(15) NOT NULL,
  `produk_nama` varchar(150) NOT NULL,
  `produk_kategori_id` int(3) NOT NULL,
  `produk_img` text NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_harga` double NOT NULL,
  `produk_input` varchar(30) NOT NULL,
  `produk_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_kategori_id`, `produk_img`, `produk_deskripsi`, `produk_harga`, `produk_input`, `produk_update`) VALUES
('P161220200001', 'Vicco Chocholate Bar', 1, 'P161220200001.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 20000, '2020-12-16 09:40:24', '2021-01-07 22:00:08'),
('P171220200002', 'Vicco Dalgona Taro', 1, 'P171220200002.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 35000, '2020-12-17 11:00:38', '2021-01-07 18:59:11'),
('P171220200003', 'Vicco Kopi gingseng', 1, 'P171220200003.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 15000, '2020-12-17 11:01:13', '2021-01-07 21:59:43'),
('P171220200004', 'Vicco chocho gingseng', 1, 'P171220200004.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 17000, '2020-12-17 11:01:54', '2021-01-07 21:59:55'),
('P171220200005', 'UKM A', 2, 'P171220200005.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 20000, '2020-12-17 11:02:24', '2021-01-07 22:00:31'),
('P171220200006', 'UKM B', 2, 'P171220200006.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 10000, '2020-12-17 11:05:59', '2021-01-07 22:00:41'),
('P171220200007', 'UKM C', 2, 'P171220200007.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 15000, '2020-12-17 11:06:15', '2021-01-07 22:00:48'),
('P171220200008', 'UKM D', 2, 'P171220200008.jpg', '&lt;p&gt;&lt;strong&gt;     Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&amp;#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;\r\n\r\n&lt;p&gt;     It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/p&gt;\r\n', 50000, '2020-12-17 11:06:31', '2021-01-07 22:00:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indeks untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`pdetail_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `pembayaran_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  MODIFY `pdetail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
