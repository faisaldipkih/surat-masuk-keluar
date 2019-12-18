-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 03:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_masuk_keluar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `email`, `username`, `password`) VALUES
(2, 'subbagumum', 'subbagumum@gmail', 'subumum', 'password'),
(9, 'uno', 'uno@gmail', 'uno', 'password'),
(10, 'subkeuangan', 'subkeuangan@gmail', 'subkeuangan', 'password'),
(11, 'ano', 'ano@gmail', 'ano', 'password'),
(12, 'kadis', 'kadis@gmail', 'kadis', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `id_surat_masuk` int(100) NOT NULL,
  `id_akun` int(50) NOT NULL,
  `no_index` int(100) NOT NULL,
  `tgl_penyelesaian` date NOT NULL,
  `intruksi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_surat_masuk`, `id_akun`, `no_index`, `tgl_penyelesaian`, `intruksi`) VALUES
(1, 1, 2, 1, '2019-12-13', '<p>asdsadasd</p>');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `id_akun` int(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `id_akun`, `jabatan`) VALUES
(2, 2, 'SUBBAG Umum & Kepegawaian'),
(3, 10, 'SUBBAG Keuangan & BMD'),
(4, 12, 'Kepala Dinas Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_jabatan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `id_akun`, `id_jabatan`) VALUES
(1, 9, 2),
(2, 11, 3);

-- --------------------------------------------------------

--
-- Table structure for table `surat_izin_penelitian`
--

CREATE TABLE `surat_izin_penelitian` (
  `id_izin_penelitian` int(11) NOT NULL,
  `id_jabatan` int(100) NOT NULL,
  `no_klasifikasi` varchar(100) NOT NULL,
  `no_urut` int(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `isi_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_izin_penelitian`
--

INSERT INTO `surat_izin_penelitian` (`id_izin_penelitian`, `id_jabatan`, `no_klasifikasi`, `no_urut`, `lampiran`, `tgl_surat`, `kepada`, `isi_surat`) VALUES
(3, 2, '888', 2, '-', '2019-12-16', 'jdjasja', '<p>adsasda</p>');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat` int(10) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `asal_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `file_surat` varchar(250) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `no_surat`, `perihal`, `sifat`, `asal_surat`, `tgl_surat`, `file_surat`, `keterangan`) VALUES
(1, 1, 'dsf', 'sdfs', 'dsfs', '2019-12-05', 'asfdsaf', 'afdsasdf'),
(2, 1234, 'sadas', 'Biasa', 'adas', '2019-12-13', 'broken.jpg', '<p>adasdsad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `surat_nota_dinas`
--

CREATE TABLE `surat_nota_dinas` (
  `id_nota_dinas` int(11) NOT NULL,
  `id_jabatan` int(100) NOT NULL,
  `no_klasifikasi` varchar(100) NOT NULL,
  `no_urut` int(100) NOT NULL,
  `kepada` varchar(250) NOT NULL,
  `dari` varchar(250) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `isi_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_perintah_tugas`
--

CREATE TABLE `surat_perintah_tugas` (
  `id_perintah_tugas` int(11) NOT NULL,
  `id_jabatan` int(100) NOT NULL,
  `no_klasifikasi` varchar(100) NOT NULL,
  `no_urut` int(100) NOT NULL,
  `dasar` text NOT NULL,
  `nama` varchar(250) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `pangkat_gol` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `untuk` mediumtext NOT NULL,
  `hari_pelaksanaan` varchar(100) NOT NULL,
  `tgl_pelaksanaan` varchar(100) NOT NULL,
  `pembukaan` varchar(250) NOT NULL,
  `tempat_pelaksanaan` varchar(250) NOT NULL,
  `tgl_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`id_perintah_tugas`, `id_jabatan`, `no_klasifikasi`, `no_urut`, `dasar`, `nama`, `NIP`, `pangkat_gol`, `jabatan`, `untuk`, `hari_pelaksanaan`, `tgl_pelaksanaan`, `pembukaan`, `tempat_pelaksanaan`, `tgl_surat`) VALUES
(1, 2, '19', 3, '<p>sdasdasd</p>', 'hjaddsa', '8213819', 'ksdjakd', 'sjkkadj', '<p>ksdajdksajdkaj</p>', 'sdjadks', '9293', '12829', 'jksadja', '2019-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `surat_rekomendasi`
--

CREATE TABLE `surat_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL,
  `id_jabatan` int(50) NOT NULL,
  `no_klasifikasi` varchar(100) NOT NULL,
  `no_urut` int(100) DEFAULT NULL,
  `sifat` varchar(100) NOT NULL,
  `lampiran` varchar(200) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `tgl_surat` date NOT NULL,
  `isi_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_rekomendasi`
--

INSERT INTO `surat_rekomendasi` (`id_rekomendasi`, `id_jabatan`, `no_klasifikasi`, `no_urut`, `sifat`, `lampiran`, `kepada`, `tgl_surat`, `isi_surat`) VALUES
(1, 3, '123', 1, 'Biasa', 'asda', 'asdasd', '2019-12-05', '<p>sadadasdasd</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_surat_masuk` (`id_surat_masuk`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD KEY `jabatan_ibfk_1` (`id_akun`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `surat_izin_penelitian`
--
ALTER TABLE `surat_izin_penelitian`
  ADD PRIMARY KEY (`id_izin_penelitian`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `surat_nota_dinas`
--
ALTER TABLE `surat_nota_dinas`
  ADD PRIMARY KEY (`id_nota_dinas`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  ADD PRIMARY KEY (`id_perintah_tugas`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  ADD PRIMARY KEY (`id_rekomendasi`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_izin_penelitian`
--
ALTER TABLE `surat_izin_penelitian`
  MODIFY `id_izin_penelitian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_nota_dinas`
--
ALTER TABLE `surat_nota_dinas`
  MODIFY `id_nota_dinas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  MODIFY `id_perintah_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  MODIFY `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`id_surat_masuk`) REFERENCES `surat_masuk` (`id_surat_masuk`),
  ADD CONSTRAINT `disposisi_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

--
-- Constraints for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE;

--
-- Constraints for table `posisi`
--
ALTER TABLE `posisi`
  ADD CONSTRAINT `posisi_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE,
  ADD CONSTRAINT `posisi_ibfk_3` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `surat_izin_penelitian`
--
ALTER TABLE `surat_izin_penelitian`
  ADD CONSTRAINT `surat_izin_penelitian_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `surat_nota_dinas`
--
ALTER TABLE `surat_nota_dinas`
  ADD CONSTRAINT `surat_nota_dinas_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  ADD CONSTRAINT `surat_perintah_tugas_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `surat_rekomendasi`
--
ALTER TABLE `surat_rekomendasi`
  ADD CONSTRAINT `surat_rekomendasi_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
