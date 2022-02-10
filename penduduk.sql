-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `NIK` int(16) NOT NULL,
  `Jalan` varchar(30) NOT NULL,
  `Desa` varchar(30) NOT NULL,
  `Kabupaten` varchar(30) NOT NULL,
  `Provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `NIK` int(16) NOT NULL,
  `Nomor KK` int(20) NOT NULL,
  `Nama lengkap` varchar(50) NOT NULL,
  `Nama panggilan` varchar(20) NOT NULL,
  `Kedudukan dalam keluarga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `NIK` int(16) NOT NULL,
  `Nomor urut` int(10) NOT NULL,
  `Jenis kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `Status perkawinan` varchar(20) NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Pendidikan terakhir` varchar(10) NOT NULL,
  `Pekerjaan` varchar(20) NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Keterangan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ttl`
--

CREATE TABLE `ttl` (
  `NIK` int(16) NOT NULL,
  `Tempat lahir` int(30) NOT NULL,
  `Tanggal lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`NIK`,`Nomor urut`);

--
-- Indexes for table `ttl`
--
ALTER TABLE `ttl`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
