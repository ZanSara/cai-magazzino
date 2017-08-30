-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2017 at 06:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6786_magazzino`
--

-- --------------------------------------------------------

--
-- Table structure for table `Misure`
--

CREATE TABLE `Misure` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Misure`
--

INSERT INTO `Misure` (`id`, `nome`) VALUES
(1, 'Kg'),
(2, 'Bottiglie'),
(5, 'Barattoli');

-- --------------------------------------------------------

--
-- Table structure for table `Oggetti`
--

CREATE TABLE `Oggetti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `misura` int(11) NOT NULL,
  `quantita` int(11) NOT NULL,
  `lastmod` datetime NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Oggetti`
--

INSERT INTO `Oggetti` (`id`, `nome`, `misura`, `quantita`, `lastmod`, `author`) VALUES
(1, 'Mele', 1, 2, '2017-08-31 14:42:24', 'giorgio'),
(2, 'Patate', 1, 5, '2017-08-31 15:42:24', 'sara'),
(3, 'Sugo', 5, 12, '2017-08-31 16:22:24', 'sara');

-- --------------------------------------------------------

--
-- Table structure for table `Utenti`
--

CREATE TABLE `Utenti` (
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `super` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Utenti`
--

INSERT INTO `Utenti` (`username`, `password`, `super`) VALUES
('giorgio', 'giorgio', 1),
('sara', 'sara', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Misure`
--
ALTER TABLE `Misure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Oggetti`
--
ALTER TABLE `Oggetti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Misure` (`misura`);

--
-- Indexes for table `Utenti`
--
ALTER TABLE `Utenti`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Misure`
--
ALTER TABLE `Misure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Oggetti`
--
ALTER TABLE `Oggetti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Oggetti`
--
ALTER TABLE `Oggetti`
  ADD CONSTRAINT `Misure` FOREIGN KEY (`misura`) REFERENCES `Misure` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
