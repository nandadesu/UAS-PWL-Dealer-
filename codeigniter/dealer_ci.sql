-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `harga` int(25) NOT NULL,
  `tahun_mobil` int(25) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `bahan_bakar` varchar(255) NOT NULL,
  `transmisi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama_mobil`, `harga`, `tahun_mobil`, `merek`, `warna`, `bahan_bakar`, `transmisi`, `deskripsi`, `lokasi`, `img`) VALUES
(1, 'Toyota Supra Kijang', 150000000, 2018, 'Toyota', 'Hitam', 'Bensin', 'Automatic', 'mulus\r\nno beret\r\ntanjakan lancar', 'Malang, Indonesia', 'img/ae85.jpg'),
(2, 'AE86 Trueno', 10000000, 1999, 'Honda', 'Putih', 'Bensin', 'Manual', 'pernah dipakai ngedrift', 'Tanjakan Akina', 'img/ae86.jpg'),
(3, 'New Rush 1.5 G ', 259000000, 2020, 'Toyota', 'Putih', 'Bensin', 'Manual', 'murah', 'Malang, Indonesia', 'img/image4.png'),
(4, 'New Brio 1.2 RS CVT', 178000000, 2017, 'Honda', 'Merah', 'Bensin', 'Automatic', 'murah', 'Malang, Indonesia', 'img/image1.png'),
(5, 'New Yaris 1.5 G', 269000000, 2018, 'Toyota', 'Putih', 'Bensin', 'Manual', 'Murah sekali', 'Malang, Indonesia', 'img/image3.png'),
(6, 'New Jass 5', 233000000, 2015, 'Honda', 'Abu-abu', 'Bensin', 'Manual', 'Murah Sekali\r\nNo Lecet\r\nMinus Setir Rusak', 'Malang, Indonesia', 'img/image2.png'),
(7, 'Daihatsu Sigra 1.0 D', 117700000, 2018, 'Daihatsu', 'Merah', 'Bensin', 'Manual', 'Murah sekali', 'Bandung, Indonesia', 'img/image6.jpg'),
(8, 'Daihatsu Sigra 1.2 X', 136600000, 2019, 'Daihatsu', 'Abu-abu', 'Bensin', 'Manual', 'Murah Sekali', 'Yogyakarta, Indonesia', 'img/image5.jpg'),
(9, 'Ertiga Dreza GS AT', 236500000, 2017, 'Suzuki', 'Krem', 'Bensin', 'Automatic', 'No lecet\r\nNego', 'Bandung, Indonesia', 'img/image8.png'),
(10, 'Ertiga Dreza GS MT', 223900000, 2019, 'Suzuki', 'Putih', 'Bensin', 'Automatic', 'No lecet\r\nboleh nego', 'Solo, Indonesia', 'img/image7.jpg'),
(11, 'Mitsubishi Xpander Ultimate', 258900000, 2018, 'Mitsubishi', 'Abu-abu', 'bensin', 'Manual', 'no lecet\r\nboleh nego\r\n', 'Surabaya, Indonesia', 'img/image3.png'),
(12, 'Mitsubishi Pajero', 634000000, 2019, 'Mitsubishi', 'Putih', 'Bensin', 'Manual', 'No lecet\r\nGratis piring cantik', 'Surabaya, Indonesia', 'img/image4.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(25) NOT NULL,
  `mobil_id` int(25) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `kode_pesanan` varchar(255) NOT NULL,
  `no_hp` int(25) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ktp` int(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `kartu_kredit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `mobil_id`, `nama_pemesan`, `kode_pesanan`, `no_hp`, `alamat`, `ktp`, `metode`, `kartu_kredit`) VALUES
(3, 1, 'Haji Dadank', 'Fhwffju2ju', 345345345, 'Jl. Gang Buntu', 2147483647, 'BNI', '1231231232131231'),
(4, 1, 'Haji parman', 'Jjfsfi5f5i', 345345345, 'Jl. Gang Buntu', 2147483647, 'BNI', '1231231232131231'),
(11, 1, 'Haji Dadank', '442k2sj5df', 345345345, 'Jl. Gang Buntu', 2147483647, 'BNI', '1231231232131231'),
(12, 1, 'Haji Dadank', 'Hd3ujfj4h2', 345345345, 'Jl. Gang Buntu', 2147483647, 'BNI', '1231231232131231'),
(13, 1, 'Haji Dadank', 'I252j5f4j4', 345345345, 'Jl. Gang Buntu', 2147483647, 'BNI', '1231231232131231'),
(14, 2, 'asdfsadfsadf', 'J3w432kwju', 2147483647, 'BNI', 2147483647, 'BNI', '456345634564566'),
(15, 2, 'dfgfhfgjdghj', '5ij3du5fu4', 456345634, 'BCA', 2147483647, 'BCA', '23452345235234'),
(16, 2, 'dfgfhfgjdghj', 'H24if2ij2j', 456345634, 'BCA', 2147483647, 'BCA', '23452345235234'),
(17, 2, 'Rizal Abdul Basith', '2e4aff42wi', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '123123123123123123'),
(18, 2, 'Rizal Abdul Basith', '54225uhhs4', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '123123123123123123'),
(19, 2, 'Rizal Abdul Basith', 'Af43j5hw5j', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '123123123123123123'),
(20, 2, 'Rizal Abdul Basith', '25hj5juji4', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '123123123123123123'),
(21, 2, 'Rizal Abdul Basith', '44df5uaj34', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '123123123123123123'),
(22, 2, 'Dadank Sudadank', 'Fsdju2325j', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Mandiri', '2345234523452345'),
(23, 8, 'Mamat', 'Sijfjjju3f', 2147483647, 'Jl. Gang Buntu', 2147483647, 'Cimb Niaga', '4237467467627346');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
