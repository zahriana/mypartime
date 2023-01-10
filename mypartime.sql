-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypartime`
--

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_tlp` bigint(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `user_id`, `nama`, `no_tlp`, `email`, `username`, `alamat`, `tgl_daftar`) VALUES
(6, 'zy2e8xc', 'salsa', 82272944022, 'salsa@gmail.com', 'nurinas', '', '2022-03-30'),
(7, '55k8d7w2', 'Aida Afira', 82343718211, 'aaiiii@gmail.com', 'aiiii', 'Darussalam', '2022-03-31'),
(8, '4ma9usg', 'Nana', 82361857719, 'nana1@gmail.com', 'nana123', 'Lambaro', '2022-03-31'),
(9, '4w8915ax', 'Radha SS', 82213335429, 'radhass@gmail.com', 'radha_ss', 'jl.geuce', '2022-04-05'),
(10, 'leueews', 'Dian Hermayanti', 85288990021, 'dian25@gmail.com', 'Dianmuty', '', '2022-04-05'),
(11, '1v397zgv', 'Ulfa Maghfirah', 81345666771, 'ulfa@gmail.com', 'ulfamgh', 'Geuceu Komplek', '2022-04-05'),
(12, '8o93mmpvs', 'Fachrurrazi', 85159199866, 'fachrurraziib@gmail.com', 'fchrurrazi', 'Cot Irie', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `skill` varchar(500) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `waktu_posting` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `user_id`, `judul`, `kategori`, `tipe`, `lokasi`, `deskripsi`, `skill`, `harga`, `waktu_posting`) VALUES
(3, '55k8d7w2', 'Video Editor', 'Desain', 'Remote', 'Banda Aceh', 'Membuat intro video yang bertemakan lagu anak-anak berdurasi 50 detik, video berupa animasi seperti kartun upin&ipin harus botak dan ada lalatnya seperti intro coco melon.', 'Adobe priemer, Animasi, Desain grafis', '100.000 - 250.000', '2022-03-27 18:28:02'),
(4, 'zy2e8xc', 'Perbaikan AC', 'Teknisi', 'Langsung ditempat', 'Lueng Bata', 'Saya sedang mencari teknisi AC yang berpengalaman dibidangnya dan bersedia langsung ketempat secepatnya', 'Teknisi AC, Listrik', '200.000 - 400.000', '2022-03-28 09:34:59'),
(6, '55k8d7w2', 'Wedding Photografer ', 'Desain', 'Langsung ditempat', 'Darussalam', 'Saya sedang mencari fotografer untuk acara pernikahan saya.', 'Berpengalaman dalam dunia fotografi minimal 5 tahun, Menguasai software editing seperti Photoshop, Bisa editing video', '1.000.000', '2022-03-31 00:00:00'),
(8, '4ma9usg', 'Back End Developer', 'Desain', 'Remote', 'Remote', 'Saya ingin merekrut backend developer untuk project Mypartime', 'Memahami logika pemrograman, Berpengalaman menggunakan database minimal MySQL', '5.000.000', '2022-04-01 05:43:12'),
(9, 'zy2e8xc', 'Desain Poster', 'Desain', 'Remote', 'Remote', 'desain', 'Desain Grafis, Photoshop', '200.000 - 400.000', '2022-04-01 06:14:46'),
(11, '4w8915ax', 'Marketing Research', 'Sales & Marketing', 'Remote', 'Banda aceh', 'menganalisis produk', 'S1 Umum, diutamakan 1 tahun kerja di bidang yang sesuai', '3000.000 - 4500.000', '2022-04-05 07:09:00'),
(12, '4w8915ax', 'Wedding Photografer ', 'Desain', 'Langsung ditempat', 'Darussalam', 'Mendesain acara nikahan', 'kreatif, jujur, :)', '3.000.000', '2022-04-05 07:11:04'),
(14, 'leueews', 'Analis pangan', 'Content Writer', 'Langsung ditempat', 'Jepang', 'Mau bikin donat rencana sih biar pangan donat aman', 'pande pegang mixer, bisa menimbang adonan, pande rounding, pande mencara nafkah, pande dalam segala hal', '12.000.000', '2022-04-05 07:31:10'),
(15, '1v397zgv', 'Junior Data Science', 'Teknisi', 'Remote', 'Aceh', 'Urgently needed!!!!!!', 'sabar, mau belajar, rajin', '4.099.999', '2022-04-05 07:38:32'),
(16, '8o93mmpvs', 'Content Creator', 'Sales & Marketing', 'Remote', 'Banda aceh', 'Hi saya ingin masuk ke pekerjaan ini', 'Videographer', '5.000.000', '2022-04-05 09:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_akses` enum('admin','klien') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_akses`) VALUES
('1v397zgv', 'ulfamgh', '$2y$10$/QkTBkjq1vydM1P5Gi7NKO5ahliJzR0lLN8Y7uOTDgycjTqhJiwj.', 'klien'),
('4ma9usg', 'nana123', '$2y$10$oe6qQIwa.P2heHMLNlFZWu8aI5W183oqdJ0fZqzKjh/Ih3dk4G7UO', 'klien'),
('4w8915ax', 'radha_ss', '$2y$10$9HOGDHX8.wU57BexsHGPwe2d3ehSh499TAGIQ5juuB3v4IL5FWMVC', 'klien'),
('55k8d7w2', 'aiiii', '$2y$10$VbUTodbigz0lxMpywHaWXONb2u5DkHroIslIMIbA3SWoYPjqY1S5m', 'klien'),
('60iqmtmms', 'maop', '$2y$10$8cSLtqS7Af9xvR3.Q65xqOL2yVwdYJc9K4tMlv4zrbyjDTQbY20Gm', 'admin'),
('8o93mmpvs', 'fchrurrazi', '$2y$10$OE9uYVADHN7xUWeozwvEVe/DLXENJqei0jYaQVTs9I9FGQCTOPbFO', 'klien'),
('leueews', 'Dianmuty', '$2y$10$hGQJ9yI41fuaikpqfdlrRe4o/3BnhN/PYEDZiCgTu8FbOmPTf7o/a', 'klien'),
('zy2e8xc', 'nurinas', '$2y$10$cKcej5wcrio4bJyP7dCzCuyncxvRBo1mfs786DGFDp2mXcOfPccNG', 'klien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_useridKlien` (`user_id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `FK_userid` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `klien`
--
ALTER TABLE `klien`
  ADD CONSTRAINT `FK_useridKlien` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `FK_userid` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
