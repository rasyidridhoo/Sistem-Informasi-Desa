-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 02:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id_warga` int(20) NOT NULL,
  `nokk` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `statuskeluarga` text NOT NULL,
  `jk` text NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `usia` int(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pendidikan` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `statusperkawinan` text NOT NULL,
  `jenisbpjs` text NOT NULL,
  `jenisbansos` text NOT NULL,
  `statusvaksinasi` text NOT NULL,
  `statusrumah` text NOT NULL,
  `ktp` text NOT NULL,
  `nohp` int(100) NOT NULL,
  `namaperusahaan` varchar(100) NOT NULL,
  `daerahasal` varchar(100) NOT NULL,
  `alamatsesuaiktpdesaklari` varchar(100) NOT NULL,
  `dusunorperum` varchar(100) NOT NULL,
  `rt` int(100) NOT NULL,
  `rw` int(100) NOT NULL,
  `domisilisekarang` varchar(100) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id_warga`, `nokk`, `nik`, `nama`, `statuskeluarga`, `jk`, `tempatlahir`, `tanggallahir`, `usia`, `agama`, `pendidikan`, `pekerjaan`, `statusperkawinan`, `jenisbpjs`, `jenisbansos`, `statusvaksinasi`, `statusrumah`, `ktp`, `nohp`, `namaperusahaan`, `daerahasal`, `alamatsesuaiktpdesaklari`, `dusunorperum`, `rt`, `rw`, `domisilisekarang`, `status`) VALUES
(22, '3215051105010012', '3215051105010012', 'Faadlilah Ahmad P', 'Anak', 'Laki-laki', 'karawang', '2022-07-08', 22, 'islam', 'PAUD', '', '', '', '', 'Sudah', 'Pribadi', 'KTP Asal', 2147483647, 'Google', 'Kab. Karawang', 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'sirnabaya', 1, 5, 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'Meninggal'),
(23, '3215051105010012', '3215051105010017', 'Muhamad Taopik', 'Suami', 'Laki-laki', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(24, '3215051105010012', '3215051105010015', 'Intan Permatasari', 'Istri', 'Perempuan', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(27, '', '', 'iman', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(28, '3215025252525', '', '', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Ada'),
(31, '3215051105010012', '321', 'Raisa Andriana', 'Istri', 'Perempuan', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(32, '', '123', 'Faadlilah Ahmad Purwanto', 'Suami', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(33, '', '321', 'Faadlilah Ahmad Purwanto', 'Suami', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(34, '', '', '', 'Suami', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Ada'),
(35, '', '23', 'Faadlilah Ahmad Purwanto', 'Suami', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Pindah'),
(36, '3215022222222', '32', 'Faadlilah Ahmad Purwanto', 'Suami', '', 'karawang', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Ada'),
(37, '321555', '321', 'rick', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Meninggal'),
(38, '321505110501899', '3213123213123212', 'faad', 'Suami', '', '', '0000-00-00', 0, '', '', '', '', '', '', '', '', '', 0, '', '', ' ', '', 0, 0, '', 'Pindah');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga_meninggal`
--

CREATE TABLE `data_warga_meninggal` (
  `id_warga_meninggal` int(10) NOT NULL,
  `id_warga1` int(20) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga_meninggal`
--

INSERT INTO `data_warga_meninggal` (`id_warga_meninggal`, `id_warga1`, `tanggal_meninggal`, `sebab`) VALUES
(17, 32, '2022-06-30', 'kesele455 salak 22'),
(18, 33, '2022-07-09', 'keselek salak 2');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga_mutasi`
--

CREATE TABLE `data_warga_mutasi` (
  `id_warga_mutasi` int(10) NOT NULL,
  `id_warga2` int(20) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga_mutasi`
--

INSERT INTO `data_warga_mutasi` (`id_warga_mutasi`, `id_warga2`, `tanggal_mutasi`, `sebab`) VALUES
(2, 38, '2022-07-09', 'keselek salak 22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nokk` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `nokk`, `email`, `password`, `status_user`) VALUES
(1, 'Mohamad Rasyid Ridho', '3215051105010012', 'edo2340@gmail.com', '110501', 'warga'),
(4, 'Faadlilah', '', 'faadli12@gmail.com', '123456', 'admin'),
(5, 'Raisa Andriana', '321505110501899', 'raisa@gmail.com', '123456', 'warga'),
(6, 'dewa19', '321321321321321', 'dewa19@gmail.com', '123', 'warga'),
(7, 'iman vellani', '3215025252525', 'iman@gmail.com', '123', 'warga'),
(8, 'ahmad purwanto', '3215022222222', 'purwanto@gmail.com', '123', 'warga'),
(9, 'rick and morty', '321555', 'rm@gmail.com', '123', 'warga'),
(10, 'Faadlilah Ahmad Purwanto', '321', 'pfaadlilahahmad@gmail.com', '32132132321', 'warga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `data_warga_meninggal`
--
ALTER TABLE `data_warga_meninggal`
  ADD PRIMARY KEY (`id_warga_meninggal`),
  ADD KEY `id_warga1` (`id_warga1`) USING BTREE;

--
-- Indexes for table `data_warga_mutasi`
--
ALTER TABLE `data_warga_mutasi`
  ADD PRIMARY KEY (`id_warga_mutasi`),
  ADD KEY `id_warga2` (`id_warga2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`,`nokk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id_warga` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `data_warga_meninggal`
--
ALTER TABLE `data_warga_meninggal`
  MODIFY `id_warga_meninggal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_warga_mutasi`
--
ALTER TABLE `data_warga_mutasi`
  MODIFY `id_warga_mutasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_warga_meninggal`
--
ALTER TABLE `data_warga_meninggal`
  ADD CONSTRAINT `data_warga_meninggal_1` FOREIGN KEY (`id_warga1`) REFERENCES `data_warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_warga_mutasi`
--
ALTER TABLE `data_warga_mutasi`
  ADD CONSTRAINT `data_warga_mutasi_1` FOREIGN KEY (`id_warga2`) REFERENCES `data_warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
