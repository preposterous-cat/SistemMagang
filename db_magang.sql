-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2020 at 06:14 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `index_laporan` int(30) NOT NULL,
  `no_regis` varchar(30) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`index_laporan`, `no_regis`, `judul`, `author`, `nama_file`, `tanggal`) VALUES
(1, '1770450865', 'XXXX', 'DKK', '59-Article_Text-219-1-10-201705181.pdf', '14-01-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis` enum('Kerja Praktik','Riset/Pengambilan Data') NOT NULL,
  `tingkat` enum('D1','D2','D3','S1','S2','S3') NOT NULL,
  `asal` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`nim`, `nama`, `gender`, `ttl`, `agama`, `no_hp`, `email`, `alamat`, `jenis`, `tingkat`, `asal`, `fakultas`, `jurusan`, `start`, `end`, `skill`, `status`) VALUES
('09021181772077', 'Anisa Rizki Yolanda', 'Perempuan', 'Sumber Harta, 11 Oktober', 'Islam', '081278946514', 'yolandaanisarizki@gmail.com', 'Palembang', 'Kerja Praktik', 'S1', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Teknik Informatika', '2019-12-13', '2020-01-15', 'Php, java, database', 'Tidak Aktif'),
('09021281722043', 'Roger', 'Laki-laki', 'East Blue, 11 Januari Sebelum Masehi', 'Unknown', '098766554444', 'Roger@gmail.com', 'Laugh Tale', 'Kerja Praktik', 'S2', 'Universitas Marineford', 'Ilmu Kelautan', 'Perkapalan', '2020-01-07', '2020-01-31', 'Haki Raja', 'Aktif'),
('09021281722047', 'Arizli', 'Laki-laki', 'Pringsewu, 11 Januari 1999', 'Islam', '098766554xxx', 'Arizli@gmail.com', 'Baker Street', 'Kerja Praktik', 'S1', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Teknik Informatika', '2020-01-14', '2020-01-07', 'Apa aja', 'Aktif'),
('09021281722057', 'Nagisa', 'Perempuan', 'Tokyo, 28 Februari 1911', 'Unknown', '098766554456', 'Nagisa@gmail.com', 'Tokyo', 'Kerja Praktik', 'S1', 'Unpad', 'Ilmu Komputer', 'Keamanan Jaringan', '2019-12-31', '2020-02-04', '- Makan\r\n- Minum\r\n- Mencintai', 'Aktif'),
('090217888273', 'Xebec', 'Laki-laki', 'Marie Joe, 11 januari 1909', 'Unknown', '09876543', 'xebec@gmail.com', 'Marie joe', 'Kerja Praktik', 'D1', 'Universitas Sriwijaya', 'Ilmu Komputer', 'Teknik Informatika', '29-10,1999', '30-12-1990', 'Death', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengisian_mhs`
--

CREATE TABLE `tb_pengisian_mhs` (
  `id` int(100) NOT NULL,
  `no_regis` int(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `checked` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengisian_mhs`
--

INSERT INTO `tb_pengisian_mhs` (`id`, `no_regis`, `nim`, `nama`, `asal`, `checked`) VALUES
(1, 1770450865, '09021281722043', 'Roger', 'Universitas Marineford', 'Checked'),
(2, 1770450865, '09021281722047', 'Arizli', 'Universitas Sriwijaya', 'Checked'),
(3, 1458425378, '09021281722057', 'Nagisa', 'Unpad', 'Checked'),
(5, 1770450865, '09021181772077', 'Anisa Rizki Yolanda', 'Universitas Sriwijaya', 'Checked');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengisian_siswa`
--

CREATE TABLE `tb_pengisian_siswa` (
  `id` int(100) NOT NULL,
  `no_regis` int(30) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `checked` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengisian_siswa`
--

INSERT INTO `tb_pengisian_siswa` (`id`, `no_regis`, `nisn`, `nama`, `asal`, `checked`) VALUES
(3, 1836720519, '999975146', 'Saitou Kaiba', 'SMAN 123 Pyramid', 'Checked'),
(4, 1836720519, '99997654312', 'Boa Hancock', 'SMAN 3 Pyramid', 'Checked'),
(5, 1770450865, '99998236187', 'Eustasss', 'SMAN 23 Raftel', 'Checked'),
(6, 1770450865, '999976543445', 'Fujitora', 'SMAN 73 Wano', 'Unchecked');

-- --------------------------------------------------------

--
-- Table structure for table `tb_projek`
--

CREATE TABLE `tb_projek` (
  `index_projek` int(30) NOT NULL,
  `no_regis` varchar(30) NOT NULL,
  `nama_projek` varchar(50) NOT NULL,
  `kreator` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tanggal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_projek`
--

INSERT INTO `tb_projek` (`index_projek`, `no_regis`, `nama_projek`, `kreator`, `link`, `tanggal`) VALUES
(1, '1770450865', 'Sistem Magang', 'Ariel', 'https://stackoverflow.com/questions/15510732/sql-returning-error-unknown-column-g-in-field-list', '14-01-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nisn` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Tidak Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nisn`, `nama`, `gender`, `ttl`, `agama`, `no_hp`, `email`, `alamat`, `tingkat`, `asal`, `jurusan`, `start`, `end`, `status`) VALUES
('999975146', 'Saitou Kaiba', 'Laki-laki', 'East Blue, 11 Januari Sebelum Masehi', 'Unknown', '098766554444', 'Saitou@yahoo.com', 'Soul Science', 'Kelas 3', 'SMAN 123 Pyramid', 'Keamanan Jaringan', '2020-01-22', '2020-01-31', 'Tidak Aktif'),
('99997654312', 'Boa Hancock', 'Perempuan', 'Amazon Lily, 11 Januari 1999', 'Unknown', '0897654321', 'Hancock@gmail.com', 'Amazon Lily', 'Kelas 3', 'SMAN 3 Pyramid', 'Teknik Informatika', '2020-01-01', '2020-01-29', 'Tidak Aktif'),
('999976543445', 'Fujitora', 'Laki-laki', 'West Blue, 9 November 2017', 'Unknown', '0897654321', 'Fujitora@gmail.com', 'West Blue', 'Kelas 3', 'SMAN 73 Wano', 'Teknik Informatika', '2020-01-31', '2020-02-08', 'Tidak Aktif'),
('99998236187', 'Eustasss', 'Laki-laki', 'Sky Island, 11 21 Februari 1999', 'Unknown', '098766554444', 'Eustass@gmail.com', 'Sky Island', 'Kelas 3', 'SMAN 23 Raftel', 'Manajemen Informatika', '2020-01-01', '2020-01-29', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `no_regis` int(30) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `tanggal_upload` varchar(15) NOT NULL,
  `waktu_upload` varchar(15) NOT NULL,
  `id_surat` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`no_regis`, `no_surat`, `nama_file`, `tanggal_upload`, `waktu_upload`, `id_surat`) VALUES
(1770450865, '', '8092-15476-1-SM3.pdf', '12-01-2020', '23:53:09', 1),
(1770450865, '', '10185-18256-1-PB.pdf', '12-01-2020', '23:55:08', 2),
(1770450865, '', '31608-Article_Text-423928-1-10-20151215.pdf', '12-01-2020', '23:55:08', 3),
(1770450865, '', 'IEEE-MSW_A4_Manuscript-Format.doc', '12-01-2020', '23:55:08', 4),
(1770450865, '', 'Contoh_Format_Perencanaan_Usaha.doc', '15-01-2020', '08:21:57', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `no_regis` int(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`no_regis`, `password`, `nama`, `email`) VALUES
(63093298, 'Silver', 'Rayleigh', 'Rayleigh@email.com'),
(492853565, 'creeb', 'Crebo', 'Crebo@gmail.com'),
(1458425378, 'Scooper', 'Gaban', 'Gaban@gmail.com'),
(1770450865, 'Gold', 'Roger', 'Roger@gmail.com'),
(1836720519, 'amaterasu', 'Uchiha Itachi', 'Uchichaclan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`index_laporan`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_pengisian_mhs`
--
ALTER TABLE `tb_pengisian_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengisian_siswa`
--
ALTER TABLE `tb_pengisian_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_projek`
--
ALTER TABLE `tb_projek`
  ADD PRIMARY KEY (`index_projek`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`no_regis`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `index_laporan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengisian_mhs`
--
ALTER TABLE `tb_pengisian_mhs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengisian_siswa`
--
ALTER TABLE `tb_pengisian_siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_projek`
--
ALTER TABLE `tb_projek`
  MODIFY `index_projek` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
