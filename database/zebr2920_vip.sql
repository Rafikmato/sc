-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 09:47 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zebr2920_vip`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `nama_rekening`) VALUES
(1, 'BCA - 6260264417 ANTON MULYANA'),
(2, 'BRI - 001901076456501 - FUZZI ANDRI YANTI'),
(3, 'MANDIRI - 1680002671020 - DWI AGUSTEN'),
(4, 'LINK AJA - 081355319580 - FITRIAH'),
(5, 'OVO - 081389161150 - ALDHAN LATIEF MAULANA');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `provider` enum('pragmaticplay','pgsoft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `gambar`, `link`, `provider`) VALUES
(1, 'zeus.jpg', 'vs20olympgate', 'pragmaticplay'),
(2, 'inces.png', 'vs20starlight', 'pragmaticplay'),
(3, 'bonanza.png', 'vs20fruitsw', 'pragmaticplay'),
(4, 'xmas.png', 'vs20sbxmas', 'pragmaticplay'),
(5, 'gatot_kaca.png', 'vs20gatotgates', 'pragmaticplay'),
(6, 'wwg.png', 'vs40wildwest', 'pragmaticplay'),
(7, 'aztec.jpeg', 'vs5aztecgems', 'pragmaticplay'),
(8, 'bonanza_gold.jpeg', 'vs20bonzgold', 'pragmaticplay'),
(9, 'great_rhino.jpeg', 'vswaysrhino', 'pragmaticplay'),
(10, 'thor.jpeg', 'vswayshammthor', 'pragmaticplay'),
(11, 'PyramidBonanza.png', 'vs20pbonanza', 'pragmaticplay'),
(12, 'mahjong-ways.png', 'https://bit.ly/demopg2', 'pgsoft'),
(13, 'mahjong-ways2.png', 'https://bit.ly/demopg1', 'pgsoft'),
(14, 'lucky-neko.webp', 'https://bit.ly/demopg3', 'pgsoft'),
(15, 'Wild Bandito.png', 'https://bit.ly/demopg5', 'pgsoft'),
(16, 'Treasures of Aztec.png', 'https://bit.ly/demopg6', 'pgsoft'),
(17, 'ways-of-qilin.webp', 'https://bit.ly/demopg-29', 'pgsoft'),
(18, 'jurassic-kdm.webp', 'https://bit.ly/demopg8', 'pgsoft'),
(19, 'honey.jpg', 'https://bit.ly/demopg7', 'pgsoft'),
(20, 'ganesha-gold.webp', 'https://bit.ly/demopg10', 'pgsoft'),
(21, 'oriental-pros.webp', 'https://bit.ly/demopg12', 'pgsoft'),
(22, 'sprmkt-spree.webp', 'https://bit.ly/demopg14', 'pgsoft'),
(23, 'candy.jpg', 'https://bit.ly/demopg21', 'pgsoft'),
(24, 'tree.jpg', 'https://bit.ly/demopg27', 'pgsoft'),
(25, 'candy-bonanza.png', 'https://bit.ly/demopg-20', 'pgsoft'),
(26, 'butterfly-blossom.webp', 'https://bit.ly/demopg33', 'pgsoft'),
(27, 'desty.jpg', 'https://bit.ly/demopg19', 'pgsoft'),
(28, 'garuda.jpg', 'https://bit.ly/demopg11', 'pgsoft'),
(29, 'dragon.jpg', 'https://bit.ly/demopg28', 'pgsoft'),
(30, 'mahjong-panda.jpg', 'vs1024mahjpanda', 'pragmaticplay'),
(31, 'cofee.jpg', 'vs10coffee', 'pragmaticplay'),
(32, 'samurai.webp', 'vs40samurai3', 'pragmaticplay'),
(33, 'joker.png', 'vs5joker', 'pragmaticplay'),
(34, 'the-hand-of-midas-dw.png', 'vs20midas', 'pragmaticplay'),
(35, 'candy vilagge.jpg', 'vs20candvil', 'pragmaticplay'),
(36, 'lucky-lightning.webp', 'vswayslight', 'pragmaticplay'),
(37, '900x900_Queenie.png', 'vs243queenie', 'pragmaticplay'),
(38, '1681223981.webp', 'vs243empcaishen', 'pragmaticplay'),
(39, 'mask.jpg', 'https://bit.ly/demopg34', 'pgsoft'),
(40, 'Dreams_of_Macau.webp', 'https://bit.ly/demopg13', 'pgsoft'),
(41, 'bc9b72d1-63ae-4813-a989-3fa09b57f6ec.png', 'https://bit.ly/demopg43', 'pgsoft'),
(42, 'ShaolinSoccer.jpg', 'https://bit.ly/demopg22', 'pgsoft');

-- --------------------------------------------------------

--
-- Table structure for table `live_chat`
--

CREATE TABLE `live_chat` (
  `id` int(11) NOT NULL,
  `live_chat` varchar(255) NOT NULL,
  `live_chat_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_chat`
--

INSERT INTO `live_chat` (`id`, `live_chat`, `live_chat_wa`) VALUES
(1, 'https://direct.lc.chat/15636144/', '6285882530021');

-- --------------------------------------------------------

--
-- Table structure for table `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama_website`, `logo`) VALUES
(1, 'MANGGA138', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `depo_wd` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `bank`, `depo_wd`, `jumlah`, `status`, `email`) VALUES
(2, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 100000, 'berhasil', 'riskikeju45@gmail.com'),
(3, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 10000, 'berhasil', 'ahmads@gmail.com'),
(4, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 50000, 'berhasil', 'bowojp@gmail.com'),
(6, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 10000, 'Pending', 'bowojp@gmail.com'),
(7, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'bshshs@hshshsh'),
(8, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'bshshs@hshshsh'),
(9, 'DANA - 081389161150 - SULEHA', 'Deposit', 50662, 'Pending', 'bshshs@hshshsh'),
(10, 'LINK AJA - 081355319580 - FITRIAH', 'Deposit', 1000000, 'Pending', 'bshshs@hshshsh'),
(11, 'DANA - 081389161150 - SULEHA', 'Deposit', 100000, 'Pending', 'bshshs@hshshsh'),
(12, 'DANA - 081389161150 - SULEHA', 'Deposit', 1800000, 'berhasil', 'bshshs@hshshsh'),
(13, 'DANA - 2147483647 - Frendi dwi firmansah', 'Withdraw', 1800000, 'Pending', 'bshshs@hshshsh'),
(14, 'DANA - 2147483647 - Frendi dwi firmansah', 'Withdraw', 1800000, 'Pending', 'bshshs@hshshsh'),
(15, 'DANA - 2147483647 - Frendi dwi firmansah', 'Withdraw', 1800000, 'Pending', 'bshshs@hshshsh'),
(16, 'BCA - 2147483647 - Rizqi', 'Withdraw', 100000, 'Pending', 'riskikeju45@gmail.com'),
(17, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 500888, 'berhasil', 'TjiuAgusharyanto@gmail.com'),
(18, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 500888, 'berhasil', 'TjiuAgusharyanto@gmail.com'),
(19, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 3000000, 'berhasil', 'TjiuAgusharyanto@gmail.com'),
(20, 'DANA - 081389161150 - SULEHA', 'Deposit', 200000, 'Pending', 'didojustine2@gmail.com'),
(21, 'DANA - 081389161150 - SULEHA', 'Deposit', 200000, 'Pending', 'didojustine2@gmail.com'),
(22, 'DANA - 081389161150 - SULEHA', 'Deposit', 200000, 'Pending', 'hsrtgsr@gmail.com'),
(23, 'DANA - 081389161150 - SULEHA', 'Deposit', 100000, 'Pending', 'Ridagaorid@gmail.com'),
(24, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 4000000, 'berhasil', 'maxwin3838378@gmail.com'),
(25, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 3000000, 'berhasil', 'Ridagaorid@gmail.com'),
(26, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 3000000, 'berhasil', 'hsrtgsr@gmail.com'),
(27, 'DANA - 081389161150 - SULEHA', 'Deposit', 3000000, 'berhasil', 'Ridagaorid@gmail.com'),
(28, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 200000, 'Pending', 'sawpudin@gmail.com'),
(29, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 200000, 'Pending', 'sawpudin@gmail.com'),
(30, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'jajsjwiis@gmail.com'),
(31, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'jajsjwiis@gmail.com'),
(32, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'jajsjwiis@gmail.com'),
(33, 'DANA - 2147483647 - Dwi Romelah', 'Withdraw', 100000, 'Pending', 'didojustine2@gmail.com'),
(34, 'DANA - 081389161150 - SULEHA', 'Deposit', 400000, 'berhasil', 'ansoriputrasulung@gmail.com'),
(35, 'DANA - 081389161150 - SULEHA', 'Deposit', 400000, 'berhasil', 'parhansahreza61@gmail.com'),
(36, 'DANA - 2147483647 - Ansori', 'Withdraw', 300000, 'Pending', 'parhansahreza61@gmail.com'),
(37, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'parhansahreza61@gmail.com'),
(38, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'parhansahreza61@gmail.com'),
(39, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'parhansahreza61@gmail.com'),
(40, 'DANA - 081389161150 - SULEHA', 'Deposit', 150000, 'Pending', 'parhansahreza61@gmail.com'),
(41, 'DANA - 2147483647 - Ansori', 'Withdraw', 350000, 'Pending', 'parhansahreza61@gmail.com'),
(42, 'DANA - 2147483647 - Ansori', 'Withdraw', 2600000, 'Pending', 'parhansahreza61@gmail.com'),
(43, 'DANA - 081389161150 - SULEHA', 'Deposit', 2600000, 'berhasil', 'parhansahreza61@gmail.com'),
(44, 'DANA - 2147483647 - Ansori', 'Withdraw', 2500000, 'Pending', 'parhansahreza61@gmail.com'),
(45, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 4000000, 'berhasil', 'maxwin38381138@gmail.com'),
(46, 'DANA - 088291713533 - Riski', 'Withdraw', 4000000, 'berhasil', 'maxwin38381138@gmail.com'),
(47, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'berhasil', 'maxwin2jt@gmail.com'),
(48, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'berhasil', 'maxwin2jt@gmail.com'),
(49, 'DANA - 081389161150 - SULEHA', 'Deposit', 100999, 'berhasil', 'maxwin2jt@gmail.com'),
(50, 'DANA - 081389161150 - SULEHA', 'Deposit', 1300000, 'berhasil', 'maxwin2jt@gmail.com'),
(51, 'DANA - 2147483647 - Ansori', 'Withdraw', 2500000, 'Pending', 'parhansahreza61@gmail.com'),
(52, 'DANA - 082139103800 - nico taufan asmoro ', 'Withdraw', 1500000, 'Pending', 'maxwin2jt@gmail.com'),
(53, 'DANA - 082139103800 - nico taufan asmoro ', 'Withdraw', 100000, 'Pending', 'maxwin2jt@gmail.com'),
(54, 'DANA - 081389161150 - SULEHA', 'Deposit', 50999, 'Pending', 'jajsjwiis@gmail.com'),
(55, 'DANA - 081389161150 - SULEHA', 'Deposit', 50999, 'Pending', 'jajsjwiis@gmail.com'),
(56, 'DANA - 081389161150 - SULEHA', 'Deposit', 1450000, 'berhasil', 'jajsjwiis@gmail.com'),
(57, 'DANA - 081389161150 - SULEHA', 'Deposit', 50999, 'berhasil', 'jajsjwiis@gmail.com'),
(58, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 100000, 'berhasil', 'maxwin38381138@gmail.com'),
(59, 'DANA - 0895385814627 - Frendi dwi firmansah', 'Withdraw', 1800000, 'Pending', 'bshshs@hshshsh'),
(60, '', 'Deposit', 2000000, 'berhasil', 'acildas@gmail.com'),
(61, 'LINK AJA - 081355319580 - FITRIAH', 'Deposit', 400000, 'Pending', 'acildas@gmail.com'),
(62, 'DANA - Ynny - 08897552735', 'Withdraw', 1500000, 'Pending', 'acildas@gmail.com'),
(63, 'LINK AJA - 081355319580 - FITRIAH', 'Deposit', 3000000, 'berhasil', 'entise580@gmail.com'),
(64, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'entise580@gmail.com'),
(65, 'DANA - 081389161150 - SULEHA', 'Deposit', 50334, 'Pending', 'entise580@gmail.com'),
(66, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 2000000, 'berhasil', 'maxwin38371838@gmail.com'),
(67, 'BCA - 0947129834 - Sumarto', 'Withdraw', 2000000, 'berhasil', 'maxwin38371838@gmail.com'),
(68, 'DANA - 081389161150 - SULEHA', 'Deposit', 50334, 'Pending', 'entise580@gmail.com'),
(69, 'DANA - 081389161150 - SULEHA', 'Deposit', 100999, 'Pending', 'entise580@gmail.com'),
(70, 'DANA - 081389161150 - SULEHA', 'Deposit', 100999, 'Pending', 'entise580@gmail.com'),
(71, 'DANA - 081389161150 - SULEHA', 'Deposit', 100999, 'Pending', 'entise580@gmail.com'),
(72, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 2000000, 'berhasil', 'antoni@gmail.com'),
(73, 'BCA - 5311011139 - ROBBY MANDALA PUTRA', 'Deposit', 100000, 'berhasil', 'merciano@gmail.com'),
(74, 'DANA - 081389161150 - SULEHA', 'Deposit', 50000, 'Pending', 'yulfitra.yunis@gmail.com'),
(75, 'DANA - 081389161150 - SULEHA', 'Deposit', 350000, 'berhasil', 'yulfitra.yunis@gmail.com'),
(76, 'OVO - 081389161150 - ALDHAN LATIEF MAULANA', 'Deposit', 100000, 'berhasil', 'anas@gmail.com'),
(77, 'DANA - 081389161150 - SULEHA', 'Deposit', 350000, 'Pending', 'yulfitra.yunis@gmail.com'),
(78, 'OVO - 081389161150 - ALDHAN LATIEF MAULANA', 'Deposit', 500000, 'berhasil', 'anas.safii30@gmail.com'),
(79, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 500000, 'Pending', 'anas.safii30@gmail.com'),
(80, 'OVO - 081389161150 - ALDHAN LATIEF MAULANA', 'Deposit', 2400000, 'berhasil', 'anas.safii30@gmail.com'),
(81, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 300000, 'Pending', 'anas.safii30@gmail.com'),
(82, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 300000, 'Pending', 'anas.safii30@gmail.com'),
(83, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 300000, 'Pending', 'anas.safii30@gmail.com'),
(84, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 300000, 'Pending', 'anas.safii30@gmail.com'),
(85, 'OVO - 081808432623 - Anas Safii', 'Withdraw', 300000, 'Pending', 'anas.safii30@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_kontak` varchar(15) NOT NULL,
  `no_whatsapp` varchar(15) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_pengguna`, `kata_sandi`, `nama_lengkap`, `email`, `no_kontak`, `no_whatsapp`, `pembayaran`, `nama_rekening`, `no_rekening`, `level`, `saldo`) VALUES
(3, 'roli3131', '828fd9255753432d51df95eb62d61722', 'Yandri rolian', 'dfgdfgdf@grrtyrty', '2147483647', '2147483647', 'DANA', 'Yandri rolian', '2147483647', 'pengguna', 0),
(4, 'skin363', '37189efa36d76512a10d33cf89a60807', 'Robby Mandala Putra', 'admin@gmail.com', '2147483647', '2147483647', 'BCA', 'Robby Mandala Putra', '2147483647', 'admin', 35913774),
(5, 'riski21', '221f9c22ad86e5e3aa997183f24ba1dc', 'Riski', 'riskikeju45@gmail.com', '2147483647', '2147483647', 'BCA', 'Rizqi', '2147483647', 'pengguna', 100000),
(6, 'palde2003', '221f9c22ad86e5e3aa997183f24ba1dc', 'Palde', 'riskikeju4775@gmail.com', '2147483647', '2147483647', 'BCA', 'Riskiii', '2147483647', 'pengguna', 0),
(7, 'ahmad', '8de13959395270bf9d6819f818ab1a00', 'Ahmad Sobirin', 'ahmads@gmail.com', '2147483647', '2147483647', 'BCA', 'Ahmad Sobirin', '326817372', 'pengguna', 10000),
(8, 'lita12', '1cd8e7658bb6db26fed1ce17940b7dbd', 'lita', 'lita@gmail.com', '2147483647', '2147483647', 'DANA', 'lita', '2147483647', 'pengguna', 0),
(9, 'Gaccor12', '594ab1a0127dbcd0faeb65cf36221d45', 'Rudi Rahman', 'rahmanrudi255@gmail.com', '2147483647', '2147483647', 'BCA', 'Rudi rahman', '2147483647', 'pengguna', 0),
(10, 'bowojp', '0cd980e00f4b1ae35f4d78b6fca7fa9c', 'Arie wibowo', 'bowojp@gmail.com', '2147483647', '2147483647', 'BCA', 'Arie wibowo', '2147483647', 'pengguna', 50000),
(11, 'Pollo1109', '828fd9255753432d51df95eb62d61722', 'Gilbert', 'jsnxkdjn@gmail.com', '812884938', '2147483647', 'BCA', 'Jdjxnsj', '0', 'pengguna', 0),
(12, 'rizaekas17', '1cc33b911d67af68701b5db330a71cc7', 'Riza Eka Satria', 'maxwin3482842@gmail.com', '2147483647', '2147483647', 'MANDIRI', 'Riza Eka Satria', '2147483647', 'pengguna', 0),
(13, 'komitmen345', '1cc33b911d67af68701b5db330a71cc7', 'heri iskandar', 'maxwin324828@gmail.com', '2147483647', '2147483647', 'DANA', 'heri iskandar', '2147483647', 'pengguna', 0),
(14, 'riyan21', '1cc33b911d67af68701b5db330a71cc7', 'Riyan febriyansyah', 'maxwin123332@gmail.com', '2147483647', '2147483647', 'OVO', 'Riyan febriyansyah', '2147483647', 'pengguna', 0),
(15, 'dadanVIP63', '1cd8e7658bb6db26fed1ce17940b7dbd', 'tahat', 'dadan@gmail.com', '2147483647', '2147483647', 'DANA', 'tahat', '2147483647', 'pengguna', 0),
(16, 'dwi3131', 'dd98387ed267a552735e867bda5e7dbb', 'Frendi dwi firmansah', 'bshshs@hshshsh', '2147483647', '2147483647', 'DANA', 'Frendi dwi firmansah', '0895385814627', 'pengguna', 1800000),
(17, 'Gibran2015', 'c6325deef8f7788bc58ffe610638e2c8', 'Nanik Susanti', 'Nanik363@gmail.com', '2147483647', '2147483647', 'BRI', 'Nanik Susanti', '2147483647', 'pengguna', 0),
(18, 'tarifal22', '828fd9255753432d51df95eb62d61722', 'Ariestarifal ', 'smvllvenom@gmail.com', '2147483647', '085320957174', 'DANA', 'Ariestarifal ', '2147483647', 'pengguna', 3000000),
(19, 'didojustine', '111ca7d3f7ccb46b1e844889c972115e', 'Dido Justine', 'didojustine2@gmail.com', '2147483647', '2147483647', 'DANA', 'Dwi Romelah', '2147483647', 'pengguna', 0),
(20, '99magic99', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'Tjiu Agus haryanto', 'TjiuAgusharyanto@gmail.com', '2147483647', '2147483647', 'BCA', 'Tjiu Agus haryanto', '2147483647', 'pengguna', 4001776),
(21, 'Indrainiesta', '939528fce23140ff5032300d1bcf8094', 'Indrainiesta', 'gid095481@gmail.com', '2147483647', '2147483647', 'DANA', '082153559721', '2147483647', 'pengguna', 0),
(22, 'Maxwin', '1adbb3178591fd5bb0c248518f39bf6d', 'Indra neista', 'jajsjwiis@gmail.com', '2147483647', '2147483647', 'DANA', 'Indra niesta', '2147483647', 'pengguna', 1500999),
(23, 'rida88', '828fd9255753432d51df95eb62d61722', 'Rida gaorid', 'Ridagaorid@gmail.com', '2147483647', '2147483647', 'DANA', 'Rida gaorid', '2147483647', 'pengguna', 6000000),
(24, '88magic88', '1cc33b911d67af68701b5db330a71cc7', 'Tiju agus haryanto', 'maxwin3838378@gmail.com', '2147483647', '2147483647', 'BCA', 'Tijiu agus haruanto', '2147483647', 'pengguna', 4000000),
(25, 'mamah0123', '1cd8e7658bb6db26fed1ce17940b7dbd', 'saepudin', 'sawpudin@gmail.com', '2147483647', '2147483647', 'BCA', 'saepudin', '2147483647', 'pengguna', 0),
(26, 'Bima', '47e560e3a5f5f817fa8cabd7e3c0a9cb', 'BIMAADITRA', 'progian916@gmail.com', '2147483647', '2147483647', 'DANA', 'BIMAADITRA', '2147483647', 'pengguna', 0),
(27, 'syah3131', 'dd98387ed267a552735e867bda5e7dbb', ' fajar syah', 'zczdf@gfhfgh', '2147483647', '2147483647', 'DANA', 'fajar syah', '2147483647', 'pengguna', 0),
(28, 'Citra 0cit76', '122373a5b88c174216d7a302f6084496', 'Citra nur andayana', 'andayanacitranur@gmail.com', '2147483647', '2147483647', 'BNI', 'Citra nur andayana', '280048837', 'pengguna', 0),
(29, 'Citraocit76', '4744e08db6e28cdc08adffec87c96344', 'Citra nur andayana ', 'citraocit76@gmail.com', '2147483647', '2147483647', 'BNI', 'Citra nur andayana ', '280048837', 'pengguna', 0),
(30, 'hardi887', 'e3bbaeed97c42d832caf41c2207d9a01', 'Dian hardiansyah', 'dian.strez@gmail.com', '2147483647', '2147483647', 'MANDIRI', 'Dian Hardiansyah', '2147483647', 'pengguna', 0),
(31, 'Adjo0707', '5bff3cd3f85c00355e90f7c231ad6340', 'Ansori', 'ansoriputrasulung@gmail.com', '2147483647', '085384878276', 'DANA', 'Ansori', '2147483647', 'pengguna', 400000),
(32, 'Ansori07', '4b322f2053b7cf19ad5c087e428eeac4', 'Ansori', 'parhansahreza61@gmail.com', '2147483647', '085384878276', 'DANA', 'Ansori', '2147483647', 'pengguna', 3000000),
(33, 'woles21', '221f9c22ad86e5e3aa997183f24ba1dc', 'Riski', 'maxwin3838838@gmail.com', '2147483647', '087377838278377', 'BCA', 'RIZQI', '2147483647', 'pengguna', 0),
(34, 'Polo21', '221f9c22ad86e5e3aa997183f24ba1dc', 'Riski', 'maxwin38381138@gmail.com', '2147483647', '088291713533', 'DANA', 'Riski', '088291713533', 'pengguna', 100000),
(35, 'danil21', '1cc33b911d67af68701b5db330a71cc7', 'Abdul Rojak', 'maxwinbet400@gmail.com', '085765079001', '085765079001', 'DANA', 'Abdul Rojak', '085765079001', 'pengguna', 0),
(36, 'Jeckdanil', '2e044ed1b65bcb7eb1101ab52e74fd04', 'Abdul Rojak', 'gunungjeruk@gemail.com', '085765079001', '085765079001', 'DANA', 'Abdul Rojak', '085765079001', 'pengguna', 0),
(37, 'Asmoro99', '196bba95e2f9ecd5879749fe5f8d9cb7', 'nico taufan asmoro', 'maxwin2jt@gmail.com', '082139103800', '082139103800', 'DANA', 'nico taufan asmoro ', '082139103800', 'pengguna', 1500999),
(38, 'Maxswin21', '1cc33b911d67af68701b5db330a71cc7', 'ALPIN WAHID ABDUL AZIZ', 'maxwinjadi2jt@gmail.com', '087785464607', '087785464607', 'DANA', 'ALPIN WAHID ABDUL AZIZ', '087785464607', 'pengguna', 0),
(39, 'Ocean77', '0447104ba26523bc3e2f534418ee2921', 'yulfitra', 'yulfitra.yunis@gmail.com', '081378117949', '081378117949', 'OVO', 'Yulfitra Yunis', '081378117949', 'pengguna', 350000),
(40, 'Acilia', '1cd8e7658bb6db26fed1ce17940b7dbd', 'Acilno', 'acildas@gmail.com', '08580935635', '085892066182', 'DANA', '08897552735', 'Ynny', 'pengguna', 2000000),
(41, 'Aceng94', '6c70572852f50fa3114fd77549ee3a00', 'Aceng', 'entise580@gmail.com', '085693135161', '085693135160', 'DANA', 'Ertinahin', '081279713904', 'pengguna', 3000000),
(42, 'maxwin12', '221f9c22ad86e5e3aa997183f24ba1dc', 'Sumarto', 'maxwin38371838@gmail.com', '087466336733', '087377383733', 'BCA', 'Sumarto', '0947129834', 'pengguna', 0),
(43, 'antoni', '4f6c54339728d1bee424d5b2e460314c', 'antoni', 'antoni@gmail.com', '081919829191', '081919829191', 'BCA', 'muhammad antoni', '8895304430', 'pengguna', 2000000),
(44, 'electrovoice', '7d8a6e45349ac56650314d701c2df9f8', 'Merciano pergi kakisina', 'merciano@gmail.com', '082124302787', '082124302787', 'OVO', 'Mercianon pegi kakisina', '082124302787', 'pengguna', 100000),
(45, 'ankart', '4b320e793aa761e73bc8bdd7416fb042', 'Anas Safii', 'anas.safii30@gmail.com', '081808432623', '081808432623', 'OVO', 'Anas Safii', '081808432623', 'pengguna', 3000000),
(46, 'membervip77', 'b144ef4a51d09eb8878c77bdc4ee8e6e', 'muhamad ali', 'wfhviona@gmail.com', '087887441085', '087887441085', 'BRI', 'Muahamad ali', '483301011469505', 'pengguna', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_chat`
--
ALTER TABLE `live_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `live_chat`
--
ALTER TABLE `live_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
