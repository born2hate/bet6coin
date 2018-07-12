-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 11:22 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `betcoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `bets`
--

CREATE TABLE `bets` (
  `id` int(11) NOT NULL,
  `user` varchar(16) COLLATE utf8_bin NOT NULL,
  `amount` varchar(22) COLLATE utf8_bin NOT NULL,
  `bets_w` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `bets_l` varchar(21) COLLATE utf8_bin DEFAULT NULL,
  `roll_w` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `roll_l` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `amount_init` varchar(22) COLLATE utf8_bin DEFAULT NULL,
  `wallet` varchar(45) COLLATE utf8_bin NOT NULL,
  `deposits` varchar(22) COLLATE utf8_bin NOT NULL,
  `withdraw` varchar(22) COLLATE utf8_bin NOT NULL,
  `profits` varchar(22) COLLATE utf8_bin NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ip` varchar(22) COLLATE utf8_bin NOT NULL,
  `seed` varchar(32) COLLATE utf8_bin NOT NULL,
  `mod` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `bets`
--

INSERT INTO `bets` (`id`, `user`, `amount`, `bets_w`, `bets_l`, `roll_w`, `roll_l`, `amount_init`, `wallet`, `deposits`, `withdraw`, `profits`, `status`, `ip`, `seed`, `mod`) VALUES
(1, 'betadmin', '1.1773287', '0', '0', '0', '0', '0', 'Bk21kfKoW1F3f3FLGoe321caT1', '2', '3', '2.04003290', 0, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
