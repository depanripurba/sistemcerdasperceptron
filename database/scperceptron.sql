-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2022 at 09:37 AM
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
('depanripurba@gmail.com', 'Depanri Purba', '$2y$10$KjITgrWUmokWX2Sn4iMDdO8JweH9kM8jleiZwSkemFKmEMZ3PcTZi');

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
(15, 'K015', -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1),
(32, 'K001', 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(34, 'K001', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(36, 'K001', 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1),
(38, 'K001', 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, -1, -1, -1, -1, -1),
(42, 'K015', -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, 1, 1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1),
(43, 'K009', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1);

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
-- Table structure for table `hasildiagnosa`
--

CREATE TABLE `hasildiagnosa` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
  `x32` int NOT NULL DEFAULT '-1',
  `kodeKerusakan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hasildiagnosa`
--

INSERT INTO `hasildiagnosa` (`id`, `tanggal`, `email`, `x1`, `x2`, `x3`, `x4`, `x5`, `x6`, `x7`, `x8`, `x9`, `x10`, `x11`, `x12`, `x13`, `x14`, `x15`, `x16`, `x17`, `x18`, `x19`, `x20`, `x21`, `x22`, `x23`, `x24`, `x25`, `x26`, `x27`, `x28`, `x29`, `x30`, `x31`, `x32`, `kodeKerusakan`) VALUES
(2, '2022-03-29', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 'K014'),
(3, '2022-03-30', 'depanripurba@gmail.com', 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 'K001'),
(4, '2022-03-30', 'depanripurba@gmail.com', 1, 1, 1, 1, 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(6, '2022-03-30', 'depanripurba@gmail.com', 1, 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(7, '2022-03-30', 'depanripurba@gmail.com', 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(8, '2022-03-30', 'depanripurba@gmail.com', 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 'K001 K002 K013 K014'),
(9, '2022-03-31', 'antonipurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, 'K012'),
(11, '2022-03-31', 'antonipurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, -1, -1, -1, -1, 1, -1, 'K012'),
(12, '2022-03-31', 'antonipurba@gmail.com', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(13, '2022-03-31', 'antonipurba@gmail.com', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001 K003 K004 K006 K009 K016 K018 K019 K020 K021 K022'),
(14, '2022-03-31', 'antonipurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(15, '2022-03-31', 'antonipurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(17, '2022-03-31', 'depanripurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, ''),
(18, '2022-03-31', 'depanripurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, ''),
(19, '2022-03-31', 'depanripurba@gmail.com', 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(20, '2022-03-31', 'depanripurba@gmail.com', 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, ''),
(22, '2022-04-01', 'depanripurba@gmail.com', 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(23, '2022-04-01', 'depanripurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(24, '2022-04-01', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, -1, -1, -1, 'K024'),
(25, '2022-04-01', 'depanripurba@gmail.com', 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K023'),
(26, '2022-04-01', 'antonipurba@gmail.com', 1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001'),
(27, '2022-04-02', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, ''),
(28, '2022-04-02', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K009'),
(29, '2022-04-02', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K009'),
(30, '2022-04-02', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, ''),
(31, '2022-04-02', 'depanripurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K009'),
(32, '2022-04-02', 'antonipurba@gmail.com', -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K009'),
(33, '2022-04-02', 'antonipurba@gmail.com', 1, 1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 'K001');

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
('K015', 'Cleaning blade kotor/habis');

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
  `bias` int NOT NULL,
  `totaldata` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembobotan`
--

INSERT INTO `pembobotan` (`kodeKerusakan`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `w12`, `w13`, `w14`, `w15`, `w16`, `w17`, `w18`, `w19`, `w20`, `w21`, `w22`, `w23`, `w24`, `w25`, `w26`, `w27`, `w28`, `w29`, `w30`, `w31`, `w32`, `bias`, `totaldata`) VALUES
('K001', 2, 2, 2, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20),
('K002', -1, -1, -1, 9, 7, -5, -1, -1, -3, -3, 1, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, 20),
('K003', 0, 0, 0, -2, -2, 2, 6, 2, 0, 0, -4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20),
('K004', 0, 0, 0, -2, 4, 4, -2, -2, 6, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -2, 0, 20),
('K005', 1, 1, 1, -1, -1, 3, -5, 3, 1, -1, 7, 1, 1, 1, 1, -1, -1, 1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, 1, 1, 1, -1, 20),
('K006', 1, 1, 1, -1, -1, -1, -1, -1, 1, 1, 1, 7, 7, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, -1, 20),
('K007', 0, 2, 2, -2, -2, -2, -2, -2, 2, 0, 0, 0, -2, 12, 2, -2, 0, 0, -2, 0, 2, 2, 2, 0, 0, 0, 0, 2, 0, 2, 2, 2, -2, 20),
('K008', 1, 1, 1, -1, -1, -1, -1, -1, 1, -1, -1, 1, 1, 1, 7, 3, 5, 1, -1, 1, 1, 1, 1, 1, -1, -1, 1, 1, -1, 1, 1, 1, -1, 20),
('K009', 1, 1, 1, -1, -1, -1, -1, -1, 1, -1, -1, -1, -1, 1, 1, -1, -1, 7, 5, 5, 1, 1, 1, 1, 1, 1, 1, 1, -1, 1, 1, 1, -1, 20),
('K010', 0, 0, 0, -2, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 2, 4, -2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20),
('K011', 1, 1, 1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 9, 1, 9, 1, 1, 1, 1, 1, 1, 1, 1, -1, 20),
('K012', -1, 1, 1, -3, -3, 1, 1, 1, 1, 1, 1, 1, -1, -1, -1, 3, -1, 1, 1, 1, 1, 1, 1, -1, 5, 5, -1, 1, 1, 1, 1, 1, -1, 20),
('K013', -1, 1, 1, -3, -3, 1, 1, 1, 1, 1, 1, 1, -1, -1, 1, -1, 1, 1, 1, 1, 1, 1, 1, -1, -1, -1, 3, 5, 5, 1, 1, 1, -1, 20),
('K014', 1, 1, 1, -1, -1, -1, -1, -1, 1, 1, 1, -1, -1, -1, -1, -1, -1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 9, 9, 1, -1, 20),
('K015', 1, 1, 1, -1, -3, -3, -1, -1, -1, 9, 3, -1, -1, -1, -1, 1, 1, 1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 1, 1, 9, -1, 20);

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
(68, 'K001', 1, 'Periksa kondisi karet delivery/Sponge roll, jika permukaan karet \r\ndelivery/Sponge roll sudah tidak kasar, cuci permukaan karet \r\ndelivery/ Sponge roll dengan kain lembab. Kemudian sesuaikan \r\nposisi pemasangan karet delivery/Sponge roll. Jika kerusakan \r\nmasih berlanjut, ganti karet delivery/Sponge roll.\r\nCara Mengganti karet delivery/Sponge roll :'),
(69, 'K001', 2, 'Lepaskan cover samping ADF, kemudian akan terlihat baut \r\nkecil dengan kuncian bewarna putih, lepaskan baut dan tarik \r\nkuncinya'),
(70, 'K001', 2, 'Lepaskan tutup ADF nya'),
(71, 'K001', 2, 'Lepaskan 4 baut pengunci as Roll ADF.'),
(72, 'K001', 2, 'Lepaskan kedua spy plastik.'),
(73, 'K001', 2, 'Angkat keatas as Roll ADF.'),
(74, 'K001', 2, 'Ada 2 spy plastik diatas dan dibawah, lepaskan.'),
(75, 'K001', 2, 'Tarik spy plastik berwarna putih dari Roll as.'),
(76, 'K001', 2, 'Maka Roll sudah dapat dilepas.'),
(77, 'K001', 2, 'Ganti Sponge Roll yang baru.'),
(78, 'K001', 2, 'Pasang kembali semua unit yang tadi dilepas (pastikan tidak \r\nada baut dan spy yang tidak terpasang\r\n'),
(79, 'K001', 3, 'Penggantian ini hanya dilakukan oleh profesional.'),
(80, 'K002', 1, 'Periksa kondisi dinamo laser, jika terdapat kotoran/debu, \r\nbersihkan dinamo laser, bersihkan mirror laser, perbaiki board\r\nlaser, Jika kerusakan masih berlanjut, ganti unit laser baru.\r\nCara mengganti laser :\r\n'),
(81, 'K002', 2, 'Lepaskan Hopper dan Toner dish.\r\n'),
(82, 'K002', 2, ' Buka pintu samping dan lepas develope.'),
(83, 'K002', 2, 'Lepas cover scanner unit.'),
(84, 'K002', 2, 'Lepaskan soket dan baut pengikat 2 buah, kemudian tarik \r\nkeluar scanner unit'),
(85, 'K002', 2, 'Lepaskan baut pengunci laser unit.'),
(86, 'K002', 2, 'Secara perlahan dan berhati-hati, tarik keluar laser unit.'),
(87, 'K002', 2, 'Pasang laser unit yang baru.'),
(88, 'K002', 2, 'Pasang kembali semua unit yang tadi dilepas (pastikan tidak \r\nada baut dan unit lainnya yang tidak terpasang.'),
(89, 'K002', 3, 'Penggantian ini hanya dilakukan oleh profesional.'),
(90, 'K003', 1, 'Periksa sambungan arus 12 volt, ganti batu transfer, ganti IC HVT \r\nunit. Jika kerusakan masih berlanjut, ganti HVT unit baru.\r\nCara mengganti HVT Unit.\r\n'),
(91, 'K003', 2, 'Buka cover belakang fotocopy.\r\n'),
(92, 'K003', 2, 'Tampak HVT Unit, lepaskan semua kabel yang terhubung pada \r\nHVT Unit secara perlahan (Disarankan perlahan karena HVT \r\nUnit harganya mahal)'),
(93, 'K003', 2, 'Pasang HVT Unit yang baru'),
(94, 'K003', 2, 'Pasang kembali semua kabel yang tadi dicabut.'),
(95, 'K003', 2, 'Tutup cover belakang mesin fotocopy.'),
(96, 'K003', 3, ' Penggantian ini hanya dilakukan oleh profesional'),
(97, 'K004', 1, 'Periksa kondisi Corona Wire/primary carge,bila permukaannya \r\nkotor dan berwarna hitam, bersihkan dengan alkohol, Jika \r\nkerusakan masih berlanjut dan jika Corona Wire/primary carge \r\nputus, ganti tali corona wire.\r\nCara mengganti tali corona wire :\r\n'),
(98, 'K004', 2, 'Siapkan tali corona wire, cutter, gunting dan kunci L ukuran 8.'),
(99, 'K004', 2, ' Buka unit 1 fotocopy.'),
(100, 'K004', 2, 'Lepaskan Corona wire dari unit 1.'),
(101, 'K004', 2, 'Ambil ujung wire dan kaitkan ke kunci L untuk membentuk \r\nsebuah lingkaran kecil yang akan kita kaitkan kepada ujung \r\ncorona, putar-putarkan sampai wire benar-benar melilit lalu \r\npotong sisa wire agak pendek.\r\n'),
(102, 'K004', 2, 'Kaitkan ujung wire yang telah berbentuk lingkaran, lalu \r\nsesuaikan panjang wire, jangan terlalu dekat dan jangan terlalu \r\njauh.\r\n'),
(103, 'K004', 2, 'Ambil per kecil dan kaitkan ke wire hingga melilit dengan kuat \r\nlalu potong sisanya.'),
(104, 'K004', 2, 'Ambil cutter dan tancapkan ke per, tarik perlahan per dengan \r\nkekuatan cutter sampai pada dudukan per.'),
(105, 'K004', 2, 'Setelah tali wire diganti, Pasang kembali Corona wire ke Unit \r\n1 (satu).'),
(106, 'K004', 2, 'Tutup unit 1.'),
(107, 'K004', 3, ' Penggantian ini hanya dilakukan oleh profesional.'),
(108, 'K005', 1, 'Periksa kondisi Primary transfer/separation, jika terdapat kotoran \r\nberupa serbuk, bersihkan tali primary transfer dengan alkohol, \r\nnamun jika tali primary putus, ganti tali primary baru.\r\nCara mengganti tali Primary transfer :\r\n'),
(109, 'K005', 2, 'Buka unit 1 mesin fotocopy.'),
(110, 'K005', 2, 'Buka kipas unit pada bagian depan mesin fotocopy.'),
(111, 'K005', 2, 'Lepas baut pengunci primary transfer, lalu secara perlahan \r\ntarik primary keluar.'),
(112, 'K005', 2, 'Buka penutup plat besi pada bagian samping primary'),
(113, 'K005', 2, 'Bersihkan bagian-bagian primary yang terbuat dari besi \r\ndengan tissue dan cairan sampoly.'),
(114, 'K005', 2, 'Secara perlahan lepaskan tali primary yang sudah rusak/hitam \r\ndengan obeng kecil atau pengait sejenisnya.\r\n'),
(115, 'K005', 2, 'Pasang tali primary baru dengan obeng kecil atau pengait \r\nlainnya (jangan terlalu kencang).'),
(116, 'K005', 2, 'Pasang kembali primary ke unit 1, lalu pasang kipas unit dan \r\ntutup unit 1 fotocopy.\r\n'),
(117, 'K005', 3, 'Penggantian ini hanya dilakukan oleh profesional.\r\n'),
(118, 'K006', 1, 'Periksa kondisi Gear 52/45, jika masih utuh, berikan minyak WD \r\npada permukaan lahar motor. Jika Gear pecah, ganti unit Gear \r\n52/24 baru.\r\nCara mengganti Gear 52/45 :'),
(119, 'K006', 2, 'Buka unit 1 mesin fotocopy.'),
(120, 'K006', 2, 'Ikuti langkah cara membuka roll pemanas pada K10 (karena \r\nGear 52/45 melekat pada roll pemanas)'),
(121, 'K006', 2, 'Lepaskan Gear 52/45 yang telah rusak'),
(122, 'K006', 2, 'Pasang Gear 52/45 yang baru'),
(123, 'K006', 2, 'Pasang kembali roll pemanas ke unit 1 dan pasang kabel yang \r\ntadi dilepas pada roll pemanas.'),
(124, 'K006', 2, 'Pasang penutup roll yang tadi dibuka.'),
(125, 'K006', 2, 'Tutup unit 1 fotocopy'),
(126, 'K006', 3, 'Penggantian ini hanya dilakukan oleh profesional.'),
(127, 'K007', 1, 'Untuk sementara, balik posisi cleaning web, namun jika hasil \r\ncopyan menjadi kotor, ganti cleaning web baru.\r\nCara mengganti cleaning web :'),
(128, 'K007', 2, 'Matikan mesin fotocopy terlebih dahulu.'),
(129, 'K007', 2, 'Buka pitu dek mesin fotocopy (unit 1).'),
(130, 'K007', 2, 'Tarik unit 1 lalu buka penutup pemanas dengan cara membuka \r\nbaut yang ada.'),
(131, 'K007', 2, 'Buka 2 baut pengunci unit cleaning web'),
(132, 'K007', 2, 'Secara perlahan, buka penutup cleaning web (gunakan kain \r\nuntuk membuka karena cleaning web biasanya panas).\r\n'),
(133, 'K007', 2, 'Ambil webnya dengan cara mendorongnya ke arah per.'),
(134, 'K007', 2, 'Setelah web yang lama terlepas, lalu pasang web yang baru \r\ndengan cara yang banyak dibagian kanan, sedangkan yang \r\nsedikit ada dibagian kiri dan membentuk seperti huruf “S”.\r\n'),
(135, 'K007', 2, 'Kembalikan semua penutup yang telah dibuka'),
(136, 'K007', 3, ' Penggantian ini hanya dilakukan oleh profesional.'),
(137, 'K008', 1, 'Bersihkan lahar magnet pada developping dengan WD, sesuaikan \r\nketebalan tinta pada pada roll developping, jika kode error 020 \r\ntiba-tiba muncul, ganti unit sensor developping baru. \r\nCara mengganti Developping unit :\r\n'),
(138, 'K008', 2, 'Buka bagian samping kanan fotocopy (dibawah kaset free size).\r\n'),
(139, 'K008', 2, 'Tekan dan geser kekanan besi penutup developping unit.'),
(140, 'K008', 2, 'Lepaskan kabel yang tersambung pada developping unit.'),
(141, 'K008', 2, 'Secara perlahan tarik developping unit keluar.'),
(142, 'K008', 2, 'Masukkan developping unit yang baru.\r\n'),
(143, 'K008', 2, 'Pasang kabel dan penutup yang tadi dilepas.\r\n'),
(144, 'K008', 2, 'Tutup kembali bagian samping mesin fotocopy'),
(145, 'K008', 3, 'Penggantian ini hanya dilakukan oleh profesional'),
(146, 'K009', 1, 'Periksa bagian memori counter, Bersihkan bagian RAM, Jika \r\nkerusakan terus berlanjut, ganti unit motherboard baru.\r\nCara ganti motherboard :'),
(147, 'K009', 2, 'Buka bagian belakang mesin fotocopy'),
(148, 'K009', 2, 'Buka baut besi penutup motherboard, lalu tarik keluar besi \r\npenutup'),
(149, 'K009', 2, 'Lepaskan kabel yang tersambung ke motherboard.'),
(150, 'K009', 2, 'Lepaskan kabel yang tersambung ke motherboard.'),
(151, 'K009', 2, 'Tarik keluar motherboard yang sudah rusak.'),
(152, 'K009', 2, 'Masukkan motherboard yang baru.'),
(153, 'K009', 2, 'Pasang kembali kabel, penutup dan baut penutup yang tadi \r\ndilepas'),
(154, 'K009', 2, 'Tutup kembali bagian belakang mesin fotocopy.'),
(155, 'K009', 3, 'Penggantian ini hanya dilakukan oleh profesional'),
(156, 'K010', 1, 'Periksa kondisi drum, jika terdapat goresan, poles permukaan \r\ndrum dengan cairan brasso, periksa elemen heater pada drum, Jika \r\nmasih normal, sesusaikan kembali dengan pemasangan normal, \r\njika tidak berfungsi ganti elemen heater yang baru.\r\nCara mengganti Drum :'),
(157, 'K010', 2, 'Buka bagian depan mesin fotocopy.\r\n'),
(158, 'K010', 2, 'Buka waste toner.'),
(159, 'K010', 2, ' Lepas baut lock dan tarik tuas ke arah kiri.'),
(160, 'K010', 2, 'Lepaskan baut pengunci drum unit, kemudian tarik keluar unit \r\ndrum.'),
(161, 'K010', 2, 'Lepas baut pengunci drum, tarik per dan penutup gear toner\r\nbekas.'),
(162, 'K010', 2, 'Cabut platnya kemudian drum sudah terbebas lalu angkat \r\nkeatas'),
(163, 'K010', 2, 'Pasang drum unit yang baru'),
(164, 'K010', 2, 'Pasang kembali semua baut dan pengunci yang tadi dilepas'),
(165, 'K010', 2, 'Tutup waste toner dan bagian depan mesin fotocopy.\r\n'),
(166, 'K010', 3, ' Penggantian ini hanya dilakukan oleh profesional.\r\n'),
(167, 'K011', 1, 'Periksa kondisi permukaan Pemanas/ heater roll, bila posisi \r\nPemanas/ heater roll longgar, rapatkan kembali baut pengunci \r\nroll, jika terdapat luka pada permukaan roll, lapisi permukaan roll, \r\nnamun jika luka pada permukaan roll sudah meluas, sebaiknya \r\nganti unit heater roll baru.\r\nCara ganti Roll Pemanas :'),
(168, 'K011', 2, 'Buka unit 1 lalu tarik keluar.'),
(169, 'K011', 2, 'Buka cassing pada motor fixing unit, lalu bukalah fixing motor \r\nunitnya dengan melepas tiga baut, kemudian lepas 2 set kabel \r\ndari konektornya'),
(170, 'K011', 2, 'Lepaskan plat pelindung panas yang berwarna kuning, lalu \r\nbuka 2 baut pengunci pada unit pemanasnya.'),
(171, 'K011', 2, 'Cabut semua kabel konektor yang menempel pada unit \r\npemanas, lalu angkat unit pemanas keluar'),
(172, 'K011', 2, 'Buka ring disebelah kiri dan kanan roll atas, lalu buka juga \r\nbushing, bearing, gear penggerak dan lampu pemanas.'),
(173, 'K011', 2, 'Pasang ring, bushing, bearing, gear penggerak dan lampu \r\npemanas pada unit pemanas yang baru.'),
(174, 'K011', 2, 'Pasang kembali kabel, plat pelindung dan baut yang tadi \r\ndibuka.\r\n'),
(175, 'K011', 2, 'Pasang kembali cassing fixing motor unit.'),
(176, 'K011', 2, 'Dorong kedalam unit 1 dan tutup bagian depan mesin fotocopy.\r\n'),
(177, 'K011', 3, ' Penggantian ini hanya dilakukan oleh profesional.'),
(188, 'K013', 1, 'Berikan minyak WD pada lahar duplex, jika kondisi karet duplex\r\nsudah tidak kasar, bersihkan permukaan karet dengan kain \r\nlembab. Sesuaikan setelan swing pada duplex. Pada permukaan \r\nsensor, bersihkan dengan kain lembab'),
(189, 'K013', 2, ''),
(190, 'K013', 3, ''),
(191, 'K014', 1, 'Periksa kondisi transistor dan IC. Periksa kondisi kipas power, jika \r\nterdapat debu dan sejenisnya, bersihkan kipas power dengan WD.\r\n'),
(192, 'K014', 2, ''),
(193, 'K014', 3, ''),
(194, 'K012', 1, 'Periksa permukaan karet pada ADF Unit, jika terdapat kotoran \r\nberupa debu dan semacamnya, bersihkan karet dengan kain \r\nlembab. Sesuaikan ketinggian ADF pada mesin. Namun jika \r\nkerusakan terus berlanjut, disarankan untuk mengatur program \r\nADF mesin fotocopy.\r\nCara mengatur program ADF :'),
(195, 'K012', 2, 'Masuk Service Mode dengan cara menekan *28*.'),
(196, 'K012', 2, 'Pilih FEEDER.\r\n'),
(197, 'K012', 2, 'Geser pejepit kertas pada ADF ke posisi ukuran A4 kemudian \r\ntekan TRY-A4 → OK.\r\n'),
(198, 'K012', 2, 'Geser pejepit kertas pada ADF ke posisi ukuran A5R \r\nkemudian tekan TRY-A5R → OK.\r\n'),
(199, 'K012', 2, 'Geser pejepit kertas pada ADF ke posisi ukuran LTR \r\nkemudian tekan TRY-LTR → OK.'),
(200, 'K012', 2, 'Geser pejepit kertas pada ADF ke posisi ukuran LTRR \r\nkemudian tekan TRY-LTRR → OK.'),
(201, 'K012', 2, 'Kemudian masukkan selembar kertas, boleh ukuran A4 \r\nkedalam ADF atau Feeder.'),
(202, 'K012', 2, 'Tekan FEED ON'),
(203, 'K012', 2, 'Matikan mesin fotocopy dari saklar On / Off beri jeda waktu \r\nkemudian nyalakan kembali.'),
(204, 'K012', 3, ''),
(205, 'K015', 1, 'Periksa kondisi Cleaning Blade, jika permukaan Cleaning Blade \r\nkotor, bersihkan dengan cairan brasso/bedak. Jika tidak \r\nmemungkinkan, cobalah membalik posisi permukaan Cleaning \r\nBlade, namun jika kedua permukaan tetap kotor, sebaiknya ganti \r\nsaja unit Cleaning Blade baru.\r\nCara mengganti cleaning blade '),
(206, 'K015', 2, 'Buka drum unit fotocopy (ikuti langkah KS10), karena \r\ncleaning blade melekat pada drum unit.'),
(207, 'K015', 2, 'Keluarkan charger roller dari drum.'),
(208, 'K015', 2, 'Tarik secara perlahan cleaning blade yang sudah rusak.'),
(209, 'K015', 2, 'Pasang cleaning blade yang baru'),
(210, 'K015', 2, 'Pasang kembali charger roller.'),
(211, 'K015', 2, 'Pasang kembali drum unit.'),
(212, 'K015', 3, 'Penggantian ini hanya dilakukan oleh profesional.');

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
('mariopurba@gmail.com', 'mario ', '$2y$10$Ftc2vhqfyVe.iPeNcbX9Ru1VTTSAFDSBR1xQaV3GpkvN55H48ZGnq'),
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
-- Indexes for table `hasildiagnosa`
--
ALTER TABLE `hasildiagnosa`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hasildiagnosa`
--
ALTER TABLE `hasildiagnosa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
