-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('dosen','mahasiswa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(11, 'Devafilla', 'Devafilla', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(12, 'Rizqy Santosa', 'Rizqy Santosa', '5787be38ee03a9ae5360f54d9026465f', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tmahasiswa`
--

CREATE TABLE `tmahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ftugas` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmahasiswa`
--

INSERT INTO `tmahasiswa` (`id`, `mahasiswa`, `kelas`, `judul`, `ftugas`, `nilai`, `tanggal`) VALUES
(4, 'das', 'ma', 'xcv', '3120600026_Devafilla Rizqy S_Tugas Basis Data 6.pptx', '0', '2021-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tugas` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `dosen`, `judul`, `deskripsi`, `tugas`, `deadline`, `created`) VALUES
(15, 'asd', 'sda', 'asd', '3120600026_Devafilla Rizqy S_Tugas Basis Data 5.pdf', '2021-06-30', '2021-06-03 23:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ujian` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujian`
--

INSERT INTO `ujian` (`id`, `dosen`, `judul`, `deskripsi`, `ujian`, `deadline`, `created`) VALUES
(8, 'Deva', 'asd', 'asd', '1622819023ce2fdad0-546f-49a2-9e37-f9b5758e19c6_200x200 (1).png', '2021-06-25', '2021-06-04 22:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `umahasiswa`
--

CREATE TABLE `umahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `fujian` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umahasiswa`
--

INSERT INTO `umahasiswa` (`id`, `mahasiswa`, `kelas`, `judul`, `fujian`, `nilai`, `tanggal`) VALUES
(2, 'sad', 'asd', 'ASD', 'ce2fdad0-546f-49a2-9e37-f9b5758e19c6_200x200 (1).png', '100', '2021-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmahasiswa`
--
ALTER TABLE `tmahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umahasiswa`
--
ALTER TABLE `umahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tmahasiswa`
--
ALTER TABLE `tmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `umahasiswa`
--
ALTER TABLE `umahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
