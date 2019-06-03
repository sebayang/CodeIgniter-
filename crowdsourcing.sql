-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 07:46 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowdsourcing`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `jawaban1` text NOT NULL,
  `jawaban2` text NOT NULL,
  `jawaban3` text NOT NULL,
  `jawaban4` text NOT NULL,
  `jawaban5` text NOT NULL,
  `jawaban6` text NOT NULL,
  `jawaban7` text NOT NULL,
  `jawaban8` text NOT NULL,
  `jawaban9` text NOT NULL,
  `jawaban10` text NOT NULL,
  `nilai` int(3) NOT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `nama_website`, `username`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `nilai`, `like`, `dislike`, `timestamp`) VALUES
(53, 'Kompas TV', '123', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 90, 0, 1, '2019-06-03 17:05:53'),
(56, 'Liputan6', '123', 'bagus', 'cukup baik', '', '', '', '', '', '', 'baik', 'ya', 50, 1, 0, '2019-06-02 10:43:57'),
(57, 'Kompas TV', 'user', 'bagus', '', '', '', '', '', '', '', 'baik', 'ya', 65, 1, 0, '2019-06-02 10:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `komentar` text NOT NULL,
  `timestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_jawaban`, `username`, `komentar`, `timestamp`) VALUES
(1, 57, '123', 'Hallo Andy', '2019-06-03 16:13:29'),
(2, 57, 'user', 'Haha bagus kok', '2019-06-03 16:13:29'),
(3, 57, 'user', 'Cukup bagus kok sangat keren malahan, ini untuk ditest ya.', '2019-06-03 16:31:38'),
(4, 56, 'user', 'Ini komentar pertama kalinya aku loh', '2019-06-03 16:32:39'),
(5, 56, 'user', 'Goodlah', '2019-06-03 16:32:53'),
(6, 56, 'user', 'Ya tester lagi ya say', '2019-06-03 16:38:06'),
(7, 57, 'user', 'good ya', '2019-06-03 16:46:55'),
(8, 57, 'user', 'Ya cukup baiklah', '2019-06-03 16:48:29'),
(9, 57, '123', 'Iya dong harus itu. Lorem ipsum dollar lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar  lorem ipsum dollar ', '2019-06-03 16:49:35'),
(10, 56, '123', 'bagus kok', '2019-06-03 16:51:18'),
(11, 53, '123', 'Hallo gan', '2019-06-03 16:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `thumbs`
--

CREATE TABLE `thumbs` (
  `id_thumbs` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama_website` varchar(50) NOT NULL,
  `is_like` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumbs`
--

INSERT INTO `thumbs` (`id_thumbs`, `id_jawaban`, `username`, `nama_website`, `is_like`, `timestamp`) VALUES
(23, 57, '123', 'Kompas TV', 1, '2019-06-02 16:06:44'),
(25, 53, '123', 'Kompas TV', 0, '2019-06-02 17:29:46'),
(35, 56, '123', 'Liputan6', 1, '2019-06-03 17:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `type`) VALUES
('123', 'e10adc3949ba59abbe56e057f20f883e', 'rio', 'ibrahim.sebayang@gmail.com', 2),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'admin@admin.com', 1),
('user', 'e10adc3949ba59abbe56e057f20f883e', 'Febrio Ibrahim S', 'ibrahim.sebayang@gmail.com', 2),
('user1', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'user@user.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `nama_website` varchar(25) NOT NULL,
  `nilai` int(3) NOT NULL,
  `total` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`nama_website`, `nilai`, `total`, `jumlah`) VALUES
('Kompas TV', 78, 155, 2),
('Liputan6', 50, 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thumbs`
--
ALTER TABLE `thumbs`
  ADD PRIMARY KEY (`id_thumbs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`nama_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `thumbs`
--
ALTER TABLE `thumbs`
  MODIFY `id_thumbs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
