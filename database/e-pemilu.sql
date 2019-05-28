-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 11:07 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_rt`
--

CREATE TABLE `calon_rt` (
  `id_calonrt` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `id_dpt` int(10) NOT NULL,
  `no_urut` int(10) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `visi` varchar(50) NOT NULL,
  `misi` varchar(150) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_rt`
--

INSERT INTO `calon_rt` (`id_calonrt`, `nama`, `id_dpt`, `no_urut`, `alamat`, `visi`, `misi`, `foto`) VALUES
(1, 'Aditia Wardani, M.Kom', 1, 1, 'cianjur', 'rt yang disiplin maju dan tak kenal lelah', 'mengembangkan unit rt dengan maksimal', 'rt_adit.png'),
(2, 'Prof,. Muhammad Rizki Aditia, M.T', 2, 1, 'pwk', 'rt kasih sayang', 'Membangun keluarga lingkungan RT menjadi penuh kasih sayang', 'rt_rizki.png'),
(3, 'Muhammad Lutfi Arrasyid., M.Kom', 1, 2, 'tasik', 'Integrasi RT', 'Membangun RT yang berintegritas Tinggi', 'rt_lutfi.png'),
(4, 'Dr.Raka Iqbal Sy, ST. MT', 2, 2, 'Purwakarta', 'E-Smart RT', 'Mebuat RT menjadi pintar', 'rt_raka.png'),
(5, 'Dean Ramadhan Eka Putra, ST', 3, 1, 'Gg Beringin', 'RT sehat cerdas dan visioner', 'membangun desa yang sehat dan berintegritas', 'rt_dean.png'),
(6, 'Heri Hermawan, S.Sos', 3, 2, 'Gg Beringin ', 'RT yang berjiwa Sosial', 'Menjadikan RT yang memiliki jiwa sosial tinggi', 'rt_heri.png');

-- --------------------------------------------------------

--
-- Table structure for table `dpt`
--

CREATE TABLE `dpt` (
  `id_dpt` int(10) NOT NULL,
  `nama_dpt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpt`
--

INSERT INTO `dpt` (`id_dpt`, `nama_dpt`) VALUES
(1, 'RT 01'),
(2, 'RT 02'),
(3, 'RT 03'),
(4, 'RT 04'),
(5, 'RT 05');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id_pilihan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `pilihan_rw` varchar(20) NOT NULL,
  `status_rw` int(11) NOT NULL,
  `pilihan_rt` varchar(20) NOT NULL,
  `status_rt` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `id_user`, `pilihan_rw`, `status_rw`, `pilihan_rt`, `status_rt`, `created_at`) VALUES
(1, 3, '2', 0, '1', 1, '2019-05-27 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_finger` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL,
  `id_dpt` int(11) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_finger`, `nama`, `username`, `password`, `nik`, `id_dpt`, `alamat`, `level`) VALUES
(1, 1, 'Administrator', 'administrator', 'administrator', 0, 0, '0', 'admin'),
(2, 2, 'Raka Iqbal', 'rakaiqbal', '9683bbdd16089b948d9043cc36f483a1', 1167050128, 1, 'Jl Raya Sadang', 'pemilih'),
(3, 3, 'Lutfi', 'lutfi', 'cdb0b6889f4def26f43951b2d5b7a9e3', 1167050106, 1, 'Bogor', 'pemilih'),
(4, 4, 'Aditia Wardani', 'aditia', '486b6c6b267bc61677367eb6b6458764', 1167050005, 2, 'Jl Cianjur', 'pemilih'),
(5, 0, 'Rina Anjari', 'rina', '3aea9516d222934e35dd30f142fda18c', 1167050140, 2, 'Jl Cilengkrang', 'pemilih'),
(6, 0, 'Rizka Alawiyah', 'rizka', 'aef2c231d5e776c0e0656eaf68767848', 1167050144, 3, 'Wanayasa', 'pemilih');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_rt`
--
ALTER TABLE `calon_rt`
  ADD PRIMARY KEY (`id_calonrt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_rt`
--
ALTER TABLE `calon_rt`
  MODIFY `id_calonrt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
