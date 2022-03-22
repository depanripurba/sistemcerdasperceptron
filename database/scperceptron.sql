-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2022 at 09:14 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scperceptron`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `username`, `password`) VALUES
('depanripurba@gmail.com', 'DEPANRI PURBA', '$2y$10$KjITgrWUmokWX2Sn4iMDdO8JweH9kM8jleiZwSkemFKmEMZ3PcTZi');

-- --------------------------------------------------------

--
-- Table structure for table `datapelatihan`
--

CREATE TABLE `datapelatihan` (
  `id` int NOT NULL,
  `kodeKerusakan` varchar(10) NOT NULL,
  `x1` int NOT NULL DEFAULT '-1',
  `x2` int NOT NULL DEFAULT '-1',
  `x3` int NOT NULL DEFAULT '-1',
  `x4` int NOT NULL DEFAULT '-1',
  `x5` int NOT NULL DEFAULT '-1',
  `x6` int NOT NULL DEFAULT '-1',
  `x7` int NOT NULL DEFAULT '-1',
  `x8` int NOT NULL DEFAULT '-1',
  `x9` int NOT NULL DEFAULT '-1',
  `x10` int NOT NULL DEFAULT '-1',
  `x11` int NOT NULL DEFAULT '-1',
  `x12` int NOT NULL DEFAULT '-1',
  `x13` int NOT NULL DEFAULT '-1',
  `x14` int NOT NULL DEFAULT '-1',
  `x15` int NOT NULL DEFAULT '-1',
  `x16` int NOT NULL DEFAULT '-1',
  `x17` int NOT NULL DEFAULT '-1',
  `x18` int NOT NULL DEFAULT '-1',
  `x19` int NOT NULL DEFAULT '-1',
  `x20` int NOT NULL DEFAULT '-1',
  `x21` int NOT NULL DEFAULT '-1',
  `x22` int NOT NULL DEFAULT '-1',
  `x23` int NOT NULL DEFAULT '-1',
  `x24` int NOT NULL DEFAULT '-1',
  `x25` int NOT NULL DEFAULT '-1',
  `x26` int NOT NULL DEFAULT '-1',
  `x27` int NOT NULL DEFAULT '-1',
  `x28` int NOT NULL DEFAULT '-1',
  `x29` int NOT NULL DEFAULT '-1',
  `x30` int NOT NULL DEFAULT '-1',
  `x31` int NOT NULL DEFAULT '-1',
  `x32` int NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datapelatihan`
--

INSERT INTO `datapelatihan` (`id`, `kodeKerusakan`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `x7`, `x8`, `x9`, `x10`, `x11`, `x12`, `x13`, `x14`, `x15`, `x16`, `x17`, `x18`, `x19`, `x20`, `x21`, `x22`, `x23`, `x24`, `x25`, `x26`, `x27`, `x28`, `x29`, `x30`, `x31`, `x32`) VALUES
(1, 'K001', 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(2, 'K002', -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(3, 'K003', -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(4, 'K004', -1, -1, -1, -1, 1, 1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(5, 'K005', -1, -1, -1, -1, -1, 1, -1, 1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(6, 'K006', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(7, 'K007', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(8, 'K008', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(9, 'K009', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(10, 'K010', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(11, 'K011', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1),
(12, 'K012', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1),
(13, 'K013', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1),
(14, 'K014', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1),
(15, 'K015', -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kodeGejala` varchar(10) NOT NULL,
  `namaGejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kodeGejala`, `namaGejala`) VALUES
('x1', 'Kertas tidak jalan dari kaset kertas'),
('x10', 'Hasil Buram Sebagian/Hasil Buram Membentuk Garis Lurus'),
('x11', 'Background Bintik-Bintik Pada Permukaan Kertas'),
('x12', 'Kertas Tidak Lewat dari Roll'),
('x13', 'Muncul Kode Error 014-005'),
('x14', 'Muncul Kode Error 005-001'),
('x15', 'Muncul Kode Error 020-001'),
('x16', 'Hasil Duplikasi Bergelombang'),
('x17', 'Hasil Duplikasi Tidak Rata/Buram Pada Sebagian Hasil Copyan'),
('x18', 'Muncul Kode Error 315-001'),
('x19', 'Layar Pada Monitor Tidak Tampil'),
('x2', 'Kertas ditarik double'),
('x20', 'Mesin Tidak Terdeteksi Arus'),
('x21', 'Hasil Duplikasi Bintik-Bintik'),
('x22', 'Hasil Duplikasi Bergaris Panjang'),
('x23', 'Hasil Duplikasi Buram Merata'),
('x24', 'Hasil Duplikasi Tidak Melekat Pada Kertas'),
('x25', 'Muncul Kode Error 350-002'),
('x26', 'Kertas Tidak Lewat dari Try ADF'),
('x27', 'Kertas Nyangkut di Karet Delivery'),
('x28', 'Swing Duplex Tidak Berfungsi'),
('x29', 'Muncul Kode Jamed Paper'),
('x3', 'Perjalanan Continue/Berangkap Tidak Stabil'),
('x30', 'Mesin Tidak Hidup/Mati Total'),
('x31', 'Muncul Kode Error 064-002'),
('x32', 'Muncul Beberapa Garis Pada Hasil Duplikasi'),
('x4', 'Muncul Kode Error 100-002'),
('x5', 'Hasil Blank Hitam'),
('x6', 'Hasil Putih Polos'),
('x7', 'Muncul Kode Error 061-002'),
('x8', 'Kertas Berlipat di Bawah Drum'),
('x9', 'Muncul Kode Error 061-004');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kodeKerusakan` varchar(10) NOT NULL,
  `namaKerusakan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kodeKerusakan`, `namaKerusakan`) VALUES
('K001', 'Karet delivery/sponge roll sudah tidak kasar'),
('K002', 'Laser Bermasalah'),
('K003', 'HVT unit tidak normal'),
('K004', 'Corona wire kotor atau putus'),
('K005', 'Primary transfer/seperation kotor atau putus'),
('K006', 'Gear 52/45 kotor atau pecah'),
('K007', 'Cleaning Web habis'),
('K008', 'Developing Unit tidak normal'),
('K009', 'Motherboard kotor/tidak normal'),
('K010', 'Permukaan drum bergaris'),
('K011', 'Pemanas longgar atau terkelupas'),
('K012', 'ADF Unit kotor/tidak normal'),
('K013', 'Duplex unit sudah tidak kasar/tidak normal'),
('K014', 'Power suplay unit kotor/tidak normal'),
('K015', 'Cleaning blade kotor/habis'),
('K017', 'Kerusakan ketujuh belas'),
('K018', 'kerusakan delapan belas'),
('K019', 'Kerusakan ke sembilan belas'),
('K020', 'Kerusakan dua puluh'),
('K021', 'kerusakan dua puluh satu');

-- --------------------------------------------------------

--
-- Table structure for table `pembobotan`
--

CREATE TABLE `pembobotan` (
  `kodeKerusakan` varchar(10) NOT NULL,
  `w1` int NOT NULL,
  `w2` int NOT NULL,
  `w3` int NOT NULL,
  `w4` int NOT NULL,
  `w5` int NOT NULL,
  `w6` int NOT NULL,
  `w7` int NOT NULL,
  `w8` int NOT NULL,
  `w9` int NOT NULL,
  `w10` int NOT NULL,
  `w11` int NOT NULL,
  `w12` int NOT NULL,
  `w13` int NOT NULL,
  `w14` int NOT NULL,
  `w15` int NOT NULL,
  `w16` int NOT NULL,
  `w17` int NOT NULL,
  `w18` int NOT NULL,
  `w19` int NOT NULL,
  `w20` int NOT NULL,
  `w21` int NOT NULL,
  `w22` int NOT NULL,
  `w23` int NOT NULL,
  `w24` int NOT NULL,
  `w25` int NOT NULL,
  `w26` int NOT NULL,
  `w27` int NOT NULL,
  `w28` int NOT NULL,
  `w29` int NOT NULL,
  `w30` int NOT NULL,
  `w31` int NOT NULL,
  `w32` int NOT NULL,
  `bias` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembobotan`
--

INSERT INTO `pembobotan` (`kodeKerusakan`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `w12`, `w13`, `w14`, `w15`, `w16`, `w17`, `w18`, `w19`, `w20`, `w21`, `w22`, `w23`, `w24`, `w25`, `w26`, `w27`, `w28`, `w29`, `w30`, `w31`, `w32`, `bias`) VALUES
('K001', 2, 2, 2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('K002', -1, -1, -1, 7, 3, -5, -1, -1, -3, -3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K003', -1, -1, -1, -1, -3, 3, 7, 5, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K004', -1, -1, -1, -1, 5, 5, -1, -1, 7, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, -1),
('K005', -1, -1, -1, -1, -1, 3, -5, 3, 1, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K006', -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 7, 7, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K007', -3, -3, -3, -3, -3, -1, -1, -1, 1, 1, 1, 1, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K008', -2, -2, -2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 4, 6, 0, 0, 0, 0, 0, 0, 0, -2, -2, 0, 0, 0, 0, 0, 0, 0),
('K009', -2, -2, -2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('K010', -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 7, 3, 7, -3, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K011', -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 7, 1, 7, 1, 1, 1, 1, 1, 1, 1, 1, -1),
('K012', -2, -2, -2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, -2, 4, -2, 0, 0, 0, 0, 0, 0, 0, 6, 6, 0, 0, 0, 0, 0, 0, 0),
('K013', -2, -2, -2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 4, 4, 0, 0, 0, 0),
('K014', -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 7, 7, 1, -1),
('K015', -1, -1, -1, -1, -3, -3, -1, -1, -1, 5, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 7, -1);

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int NOT NULL,
  `kodeKerusakan` varchar(10) NOT NULL,
  `jenis` int NOT NULL,
  `aksi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `kodeKerusakan`, `jenis`, `aksi`) VALUES
(1, 'K001', 1, ''),
(2, 'K001', 2, ''),
(3, 'K001', 2, ''),
(4, 'K001', 2, ''),
(5, 'K001', 2, ''),
(6, 'K001', 2, ''),
(7, 'K001', 2, ''),
(8, 'K001', 2, ''),
(9, 'K001', 2, ''),
(10, 'K001', 2, ''),
(11, 'K001', 2, ''),
(12, 'K001', 3, ''),
(13, 'K002', 1, 'Periksa kondisi dinamo laser, jika terdapat kotoran/debu, \r\nbersihkan dinamo laser, bersihkan mirror laser, perbaiki board\r\nlaser, Jika kerusakan masih berlanjut, ganti unit laser baru.\r\nCara mengganti laser'),
(14, 'K002', 2, 'Lepaskan Hopper dan Toner dish'),
(15, 'K002', 2, 'Buka pintu samping dan lepas develope.'),
(16, 'K002', 2, 'Lepas cover scanner unit.'),
(17, 'K002', 2, 'Lepaskan soket dan baut pengikat 2 buah, kemudian tarik \r\nkeluar scanner unit.'),
(18, 'K002', 2, 'Lepaskan baut pengunci laser unit'),
(19, 'K002', 2, 'Secara perlahan dan berhati-hati, tarik keluar laser unit.\r\n'),
(20, 'K002', 2, 'Pasang laser unit yang baru.'),
(21, 'K002', 2, 'Pasang kembali semua unit yang tadi dilepas (pastikan tidak \r\nada baut dan unit lainnya yang tidak terpasang.'),
(22, 'K001', 3, 'Penggantian ini hanya dilakukan oleh profesional');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `username`, `password`) VALUES
('antonipurba@gmail.com', 'Antoni Purba', '$2y$10$yamoI3ImbKJBCPxnQdL9uuA6IPvt0USrRFPxtKFPpc9/r1mdDA7Ke'),
('feriandonipurba@gmail.com', 'FERIAN DONI PURBA', '$2y$10$6kgQVnVP8CHx4NObBCKlc.Mu3LjkKEeK6b9UeBhaxYUGcQBUOHcp.'),
('jackma@gmail.com', 'Jack', '$2y$10$f0MN.eVZftDXr7JE67Ufq.jkSQ4lB7akh/kEtsXpLgUf0eVpiAgLu'),
('janripurba@gmail.com', 'sdfsdfa', '$2y$10$qz8Szx0oCvIut7S19l2sSua4gISGfF1iT7NLeenAIrflv5Kb1YZ/6'),
('martinpurba@gmail.com', 'Martin Purba', '$2y$10$w5M.EuszB0FGHjEvVqP0ruKA8pZnEj3hFO/t1EV4CC7Dtb.Rqn3ra'),
('minaldapurba@gmail.com', 'MINALDA PURBA', '$2y$10$IWo1kwERiptN6/C1itzvBu8LVmjPp4zU9t3YTuJMiU23mNJaDFKae'),
('sakapurba@gmail.com', 'Saka Purba', '$2y$10$bVUOsUxpRJ/H4qAf0q2paeCAsrkcs0oreNvIBqhs7mGjhIJV2b3au'),
('sarlespurba@gmail.com', 'Sarles', '$2y$10$qcHp3/OEz5/hMDlR9pv2QePsW3zEqPiL9GO5vI7KYNfTlPW2zFaE2'),
('wirmansyah@gmail.com', 'Parna Purba', '$2y$10$1FrkfJJPAZJ2bG8DaMbbpO733VIdk7uAUFIeYt8VTh0sMtWRs4EKS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `datapelatihan`
--
ALTER TABLE `datapelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kodeGejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kodeKerusakan`);

--
-- Indexes for table `pembobotan`
--
ALTER TABLE `pembobotan`
  ADD PRIMARY KEY (`kodeKerusakan`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapelatihan`
--
ALTER TABLE `datapelatihan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
