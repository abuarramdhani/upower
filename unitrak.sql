-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2017 at 11:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unitrak`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(30) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `pass_admin`, `nama_admin`) VALUES
('dhila', '123456', 'Dhilalova');

-- --------------------------------------------------------

--
-- Table structure for table `compressor`
--

CREATE TABLE `compressor` (
  `id_com` varchar(200) NOT NULL,
  `nama_com` varchar(30) NOT NULL,
  `merk_com` varchar(30) NOT NULL,
  `model_com` varchar(30) NOT NULL,
  `berat_com` varchar(20) NOT NULL,
  `kondisi_com` varchar(20) NOT NULL,
  `harga_com` varchar(30) NOT NULL,
  `des_com` varchar(1000) NOT NULL,
  `img_com` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compressor`
--

INSERT INTO `compressor` (`id_com`, `nama_com`, `merk_com`, `model_com`, `berat_com`, `kondisi_com`, `harga_com`, `des_com`, `img_com`) VALUES
('0001', 'Compressor 90 C', 'Atlas Copco', '-', '-', 'Second', '140 Juta', 'Air Compressor ATLAS COPCO GA 90 c, Tahun Pembuatan 2002', 'c1.jpg'),
('0002', 'Compressor 15 kw', 'Kaesar', '-', '-', 'Second', '29 Juta', 'Compressor 15kw Max Pressure 7.5 bar, Tahun 1996, Harga 29Juta (second)', 'c2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forklift`
--

CREATE TABLE `forklift` (
  `id_forklift` varchar(200) NOT NULL,
  `nama_forklift` varchar(255) NOT NULL,
  `merk_forklift` varchar(255) NOT NULL,
  `tipe_forklift` varchar(255) NOT NULL,
  `tahun_forklift` varchar(10) NOT NULL,
  `berat_forklift` varchar(100) NOT NULL,
  `max_forklift` varchar(100) NOT NULL,
  `kondisi_forklift` varchar(30) NOT NULL,
  `harga_forklift` varchar(100) NOT NULL,
  `des_forklift` varchar(1000) NOT NULL,
  `gambar_forklift` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forklift`
--

INSERT INTO `forklift` (`id_forklift`, `nama_forklift`, `merk_forklift`, `tipe_forklift`, `tahun_forklift`, `berat_forklift`, `max_forklift`, `kondisi_forklift`, `harga_forklift`, `des_forklift`, `gambar_forklift`) VALUES
('0001', 'Forklift Electric ', 'Toyota', '-', '-', '-', '900 Kg', 'Second', '30 Juta', 'Forklift Electric Counter Balance, Kapasitas 900 Kg (24V), Mast 3 Meter, Harga 30 Juta', '1b1.jpg'),
('0002', 'Forklift Toyota 4FD25', 'Toyota', '4FD25', '-', '-', '2.5 Ton', 'Second', '70 Juta', 'Tipe 4FD25, Kapasitas  2.5 ton, Harga 70 Juta (second)', '2a.jpg'),
('0003', 'Forklift ReachTruck', 'Nichyu', '-', '-', '-', '1 Ton', 'Second', '25 Juta', 'Kapasaitas 1 ton, Mast 3 meter, Battery 24 V, Harga 25 Juta (second)', '34.jpg'),
('0004', 'TOYOTA 5FD25', 'Toyota', '5FD25', '1995', '-', '2.5 Ton', 'Second', '65 Juta', 'Kapasitas 2.5 ton, Tahun 1995, Mast 3 meter, Harga 65 juta (second)', '41.jpg'),
('0005', 'Forklift Yale Electric', 'Yale', 'Electric', '2004', '-', '-', 'Second', '30 Juta', 'Electric, Tinggin 6 M,  Tahun 2004, Harga 30 Juta (second)', '5.jpg'),
('0006', 'Forklift Hyster', 'Hyester', '-', '2004', '-', '3 Ton', 'Second', '65 Juta', 'Tinggi 6 M, Tahun 2004, Kapasitas 3 ton, Harga 65 Juta (second)', '6.jpg'),
('0007', 'Forklift Komatsu', 'Komatsu', 'FD 25 INC 11', '1997', '- ', '-', 'Second', '75 Juta', 'Tipe FD 25 INC 11, Mesin Isuzu C240, Mast 3 meter, Tahun 1997, Harga 75 Juta (second)', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genset`
--

CREATE TABLE `genset` (
  `id_genset` varchar(200) NOT NULL,
  `nama_genset` varchar(50) NOT NULL,
  `merk_genset` varchar(30) NOT NULL,
  `tipe_genset` varchar(30) NOT NULL,
  `berat_genset` varchar(30) NOT NULL,
  `kondisi_genset` varchar(20) NOT NULL,
  `harga_genset` varchar(30) NOT NULL,
  `des_genset` varchar(1000) NOT NULL,
  `img_genset` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genset`
--

INSERT INTO `genset` (`id_genset`, `nama_genset`, `merk_genset`, `tipe_genset`, `berat_genset`, `kondisi_genset`, `harga_genset`, `des_genset`, `img_genset`) VALUES
('0001', 'Genset 150 kva', 'Cummins', '-', '-', 'Second', '90 Juta', 'Cummins 150', 'g12.jpg'),
('0002', 'Genset 250 KVA', 'Mitsubishi', '8DC9T', '-', 'Second', '225 Juta', '250 KVA Mitsubishi, Tipe 8DC9T - ADK', 'g2.jpg'),
('0003', 'Genset 150 kva', 'Cummins', '-', '-', 'Second', '185 Juta', 'Genset silent 150 kva, Merk Cummins HARTECH, Generator STAMFORD Ex', 'g31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password_user`, `nama_depan`, `nama_belakang`, `telepon`, `lokasi`) VALUES
('asd@lo', 'a', 'j', 'j', 'j', 'j'),
('belle@gmail.com', 'akucantik', 'belle', 'swan', '081', 'sby'),
('dhila@', '123456', 'dhila', 'belle', '081', 'sby'),
('fgh@DGFH', 'ASD', 'ASD', 'ASDFHG', 'GJ', 'JG'),
('k@k', 'k', 'k', 'k', 'k', 'k');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `compressor`
--
ALTER TABLE `compressor`
  ADD PRIMARY KEY (`id_com`);

--
-- Indexes for table `forklift`
--
ALTER TABLE `forklift`
  ADD PRIMARY KEY (`id_forklift`);

--
-- Indexes for table `genset`
--
ALTER TABLE `genset`
  ADD PRIMARY KEY (`id_genset`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
