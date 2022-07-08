-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 07:55 AM
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
-- Database: `test_itg`
--

-- --------------------------------------------------------

--
-- Table structure for table `devisi`
--

CREATE TABLE `devisi` (
  `id` int(11) NOT NULL,
  `devisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devisi`
--

INSERT INTO `devisi` (`id`, `devisi`) VALUES
(1, 'Produksi'),
(2, 'Accounting'),
(3, 'Programmer'),
(4, 'Project Manager'),
(5, 'Web Designer'),
(6, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-07-04-075032', 'App\\Database\\Migrations\\Staff', 'default', 'App', 1656954392, 1),
(6, '2022-07-04-160621', 'App\\Database\\Migrations\\Devisi', 'default', 'App', 1656954392, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `id_devisi` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama`, `kota`, `id_devisi`, `alamat`) VALUES
(1, 'Abdurahman Jaelani', 'Garut', '6', 'Kp. Cikenceh 2/ Desa Harumansari/ Kec. Kadungora'),
(2, 'Agung Wira', 'Garut', '2', 'Kp. Nangka Bongkok/ Desa Cihuni/ Kec. Kadungora'),
(3, 'Yoga Nugraha', 'Garut', '5', 'Kp. Cihaur/ Desa Harumansari/ Kec. Kadungora'),
(4, 'Rahmayanti', 'Garut', '3', 'Kp. Haurkuning/ Kec. Kadungora'),
(5, 'Siti Setiawati', 'Garut', '5', 'Kp. Cikenceh 1/ Desa Harumansari/ Kec. Kadungora'),
(6, 'Ridwan Maulana', 'Garut', '2', 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'),
(7, 'Andi Permana', 'Garut', '3', 'Kp. Patrol/ Desa Harumansari/ Kec. Kadungora'),
(8, 'Adityan Budiman', 'Garut', '2', 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'),
(9, 'Putri Aini Azzahra', 'Garut', '5', 'Kp. Haruman/ Desa Harumansari/ Kec. Kadungora'),
(10, 'Fahmi Budiansyah', 'Garut', '3', 'Kp. Cikenceh 2/ Desa Harumansari/ Kec. Kadungora');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devisi`
--
ALTER TABLE `devisi`
  ADD KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD KEY `id_staff` (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devisi`
--
ALTER TABLE `devisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
