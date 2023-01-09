-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 09:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `id_user` int(10) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `akta` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nisn` int(10) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `akta` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `ijazah` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `tgl_pendaftaran`, `asal_sekolah`, `nama`, `nisn`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_tlp`, `alamat`, `foto`, `akta`, `kk`, `ijazah`, `nama_ortu`) VALUES
(19, '2022-06-04', 'MTS Bahrul Ulum', 'Rudi Habibi', 12121712, 'Laki-Laki', 'Surabaya', '2007-06-13', '089872637162', 'Jl. Pogot 679', '16243040922765.jpg', '', '', '', 'Joko'),
(22, '2022-06-07', 'MTS Jawa', 'Rido', 2147483647, 'Laki-Laki', 'Surabaya', '2022-06-07', '087162172127621', 'Jl. Solo', '16243040922762.jpg', '', '', '', 'Joko'),
(23, '2022-06-07', 'MTS Solo', 'Budi', 1827176217, 'Laki-Laki', 'Solo', '2022-06-07', '082738238726424', 'Jl. solo', '16243040922763.jpg', '', '', '', 'joko');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','visitor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(2, 'Hasan Basri', 'ismailhasan1337@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'admin'),
(3, 'Basuki Rachman', 'basuki@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor'),
(6, 'budi', 'budi@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'admin'),
(7, 'rudi habibi', 'rudi@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor'),
(8, 'Yadi', 'yadi@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor'),
(9, 'Hasan Basri', 'hasan@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor'),
(10, 'Hasan Basri', 'basri@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor'),
(11, 'Budi', 'budi123@gmail.com', '32f96b3220c08d39fa4c595b4195776d', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
