-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 09:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `farmasi`
--

CREATE TABLE `farmasi` (
  `id_farmasi` varchar(5) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `telepon` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmasi`
--

INSERT INTO `farmasi` (`id_farmasi`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('f101', 'Novartis Biochemie', 'Jl. Jend. soedirman Kav. 1', 'Jakarta ', 212513251),
('F102', 'Pharos Indonesia', 'Jl. denpasar Raya Kav.D-III', 'Jakarta', 215276263),
('F103', 'Nufarindo Pharm', 'Mangkang Kulon km 16.5 Kec Tugu', 'Semarang', 248660006);

-- --------------------------------------------------------

--
-- Table structure for table `t_obat`
--

CREATE TABLE `t_obat` (
  `id_obat` varchar(5) NOT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `nama_obat` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `farmasi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_obat`
--

INSERT INTO `t_obat` (`id_obat`, `kategori`, `nama_obat`, `harga`, `stok`, `farmasi`) VALUES
('A1001', 'Alergi', 'CTM', 800, 2000, 'Novartis Biochemie'),
('A1002', 'Alergi', 'Orphen', 8581, 100, 'Novartis biochemie'),
('H1001', 'Hipertensi', 'Farmoten', 642, 150, 'Nufarindo Pharm'),
('H1002', 'Hipertensi', 'Forten', 857, 350, 'Nufarindo Pharm'),
('H1003', 'Hipertensi', 'Captopril', 7600, 90, 'Nufarindo Pharm'),
('J1001', 'Jantung', 'Gralixa', 1467, 150, 'Pharos Indonesia'),
('J1002', 'Jantung', 'Digoxin', 2400, 80, 'Pharos Indonesia'),
('P1002', 'Parasit', 'Sufratulle', 905, 120, 'Pharos Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `farmasi`
--
ALTER TABLE `farmasi`
  ADD PRIMARY KEY (`id_farmasi`);

--
-- Indexes for table `t_obat`
--
ALTER TABLE `t_obat`
  ADD PRIMARY KEY (`id_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
