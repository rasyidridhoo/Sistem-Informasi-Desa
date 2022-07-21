-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 12:55 PM
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
(41, '3215033009876524', '3215033006548954', 'Faadlilah Ahmad Purwanto', 'Suami', 'Laki-laki', 'Karawang', '2000-05-30', 22, 'Islam', 'DIPLOMA/STRATA 1', 'Programmer & Data Analyst', 'Kawin', 'Ketenagakerjaan', 'Tidak Ada', 'Sudah', 'Pribadi', 'KTP Asal', 2147483647, 'The Walt Disney Company', 'Karawang/Jawa Barat', 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'Sirnabaya', 1, 5, 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'Ada'),
(42, '3215033009876524', '3215033005489654', 'Fauziah Aska', 'Istri', 'Perempuan', 'Karawang', '2000-03-17', 22, 'Islam', 'DIPLOMA/STRATA 1', 'IRT', 'Kawin', 'Mandiri', 'Tidak Ada', 'Sudah', 'Pribadi', 'KTP Asal', 2147483647, '.', 'Kab. Karawang', 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'Sirnabaya', 1, 5, 'SIRNABAYA INDAH BLOK.C4/01, RT/RW 001/005, Kel/Desa SIRNABAYA, Kecamatan TELUKJAMBE TIMUR', 'Ada'),
(43, '3215068974562315', '3215065489565456', 'Raisa Andriana', 'Istri', 'Perempuan', 'Jakarta', '1990-06-06', 32, 'Islam', 'DIPLOMA/STRATA 1', 'Penyanyi', 'Cerai Hidup', 'Ketenagakerjaan', 'BPNT', 'Sudah', 'Sewa', 'KTP Desa Klari', 2147483647, 'Juni Records', 'Komplek Bumi Daya Blok D no.7, Bukit Cinere, Cinere. Depok, Jawa Barat', ' Jl. Lemahmulya, Klari, Karawang, Jawa Barat', 'Klari', 1, 1, ' Jl. Lemahmulya, Klari, Karawang, Jawa Barat', 'Ada'),
(44, '3215068974562315', '0000000000000000', 'Indah Kus', 'Anak', 'Perempuan', 'Jakarta', '2010-02-02', 12, 'Islam', 'Sekolah Dasar(SD)', '.', 'Belum Kawin', 'Tidak Ada', 'Tidak Ada', 'Sudah', 'Numpang(ikut Orangtua/Saudara)', 'KTP Desa Klari', 2147483647, '.', 'Komplek Bumi Daya Blok D no.7, Bukit Cinere, Cinere. Depok, Jawa Barat', ' Jl. Lemahmulya, Klari, Karawang, Jawa Barat', 'Desa Klari', 1, 1, ' Jl. Lemahmulya, Klari, Karawang, Jawa Barat', 'Ada'),
(45, '3215689654000256', '3215689654222658', 'Kanye West', 'Suami', 'Laki-laki', 'Purwakarta', '1994-04-01', 28, 'Kristen', 'DIPLOMA/STRATA 1', 'Rapper', 'Cerai Mati', 'Ketenagakerjaan', 'BPNT', 'Belum', 'Sewa', 'KTP Asal', 2147483647, 'Atlanta .co', 'Chicago, Illinois, A.S', 'Atlanta, Georgia', 'Atlanta', 0, 0, 'Atlanta, Georgia', 'Ada'),
(46, '3215689654000256', '3215656545682666', 'Kim Kardashian', 'Istri', 'Perempuan', 'Los Angeles', '1980-08-06', 41, 'Budha', 'Putus Sekolah', 'Penyanyi', 'Kawin', 'Mandiri', 'BPNT', 'Belum', 'Sewa', 'KTP Asal', 2147483647, 'Keeping Up with the Kardashians .inc', 'Los Angeles, US', ' .', 'Klari', 0, 0, 'Klari', 'Meninggal');

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
(19, 46, '2019-07-10', 'Serangan Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga_mutasi`
--

CREATE TABLE `data_warga_mutasi` (
  `id_warga_mutasi` int(10) NOT NULL,
  `id_warga2` int(20) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `sebab` varchar(20) NOT NULL,
  `alamat_mutasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'Admin Desa Klari', '', 'admin@gmail.com', '12345678', 'admin'),
(11, 'Faadlilah Ahmad Purwanto', '3215033009876524', 'faadlilahahmad@gmail.com', '12345678', 'warga'),
(12, 'Raisa Andriana', '3215068974562315', 'raisa@gmail.com', '12345678', 'warga'),
(13, 'Kanye West', '3215689654000256', 'kanye@gmail.com', '12345678', 'warga');

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
  MODIFY `id_warga` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `data_warga_meninggal`
--
ALTER TABLE `data_warga_meninggal`
  MODIFY `id_warga_meninggal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_warga_mutasi`
--
ALTER TABLE `data_warga_mutasi`
  MODIFY `id_warga_mutasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
