-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2021 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siat3`
--

-- --------------------------------------------------------

--
-- Table structure for table `t00_customer`
--

CREATE TABLE `t00_customer` (
  `idcustomer` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t00_customer`
--

INSERT INTO `t00_customer` (`idcustomer`, `nama`, `alamat`, `kota`, `contact_person`, `telepon`) VALUES
(1, 'PT. KUTAI TIMBER INDONESIA', 'JL. SIMPANG DUKUH', 'SURABAYA', 'RUDI HERMAWAN', '08123456789'),
(2, 'PT. BUANA SAMUDERA WASESA', 'JL. LAKSDA M. NASIR', 'SURABAYA', 'ERICK', '08123456790'),
(3, 'PT. ALTOFLEX INDONESIA', '1', '1', '1', '1'),
(4, 'CV. ALTON KARUNIA', '2', '2', '2', '2'),
(5, 'CV. MANGGAR CIPTA ANUGERAH', '3', '3', '3', '3'),
(6, 'PT. PLENGKUNG INDAH WISATA', '4', '4', '4', '4'),
(7, 'PT. LINTECH DUTA PRATAMA', '5', '5', '5', '5'),
(8, 'PT. GELORA DJAJA', '6', '6', '6', '6'),
(9, 'PT. SUPA SARANA WISATA', '7', '7', '7', '7'),
(10, 'PT. JATIM SARANA STEEL', '8', '8', '8', '8'),
(11, 'PT. WIRAJATIM', '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `t90_users`
--

CREATE TABLE `t90_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t90_users`
--

INSERT INTO `t90_users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$N6mf5BouXofAjV5EllKGa.leXW6NrNK0xvhSD.FCr5RVgDg9W0zYW', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1624838240, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t91_groups`
--

CREATE TABLE `t91_groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t91_groups`
--

INSERT INTO `t91_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `t92_users_groups`
--

CREATE TABLE `t92_users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t92_users_groups`
--

INSERT INTO `t92_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `t93_login_attempts`
--

CREATE TABLE `t93_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `t99_company`
--

CREATE TABLE `t99_company` (
  `idcompany` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t99_company`
--

INSERT INTO `t99_company` (`idcompany`, `nama`, `alamat`, `kota`) VALUES
(1, 'PT. LTS', 'JL. SIMPANG DUKUH 38 - 40', 'SURABAYA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t00_customer`
--
ALTER TABLE `t00_customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `t90_users`
--
ALTER TABLE `t90_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_username` (`username`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `t91_groups`
--
ALTER TABLE `t91_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t92_users_groups`
--
ALTER TABLE `t92_users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `t93_login_attempts`
--
ALTER TABLE `t93_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t99_company`
--
ALTER TABLE `t99_company`
  ADD PRIMARY KEY (`idcompany`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t00_customer`
--
ALTER TABLE `t00_customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t90_users`
--
ALTER TABLE `t90_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t91_groups`
--
ALTER TABLE `t91_groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t92_users_groups`
--
ALTER TABLE `t92_users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t93_login_attempts`
--
ALTER TABLE `t93_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t99_company`
--
ALTER TABLE `t99_company`
  MODIFY `idcompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t92_users_groups`
--
ALTER TABLE `t92_users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `t91_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `t90_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
