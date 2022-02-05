-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 17.52
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'anang', 'anangsyah@gmail.com', '2326af735beba37279d41c7f0ab62e73'),
(2, 'zainudin basyar', 'zainudin@gmail.com', '1d0c70bd1e985dcdaf475ae61e7ca5b7'),
(3, 'reza aditya', 'reza@gmail.com', 'bb98b1d0b523d5e783f931550d7702b6'),
(4, 'havis stevano', 'havis33@gmail.com', '67a85fda99d50e5fa3a3f4c08bebf439'),
(17, 'iqshal syafallam', 'iqshall980@gmail.co', '0a3b772468d4558aa76a9e7d489bf225'),
(18, 'muhammad ferdiansyah', 'ferdigus90@gmail.com', '8bf4bb0e2efad01abe522bf314504a49'),
(19, 'Ariandita Hadi Nugroho', 'adit33@gail.com', '1061bb40ea99675d095192c6ea8f9f54'),
(20, 'crishna ramadhan', 'crishna@gmail.com', 'e02fb60a86c686a16519225b10729489'),
(23, 'noor tri afriansyah', 'pigo773@gmail.com', 'db5a15e4d0c2708f1f41ee1be55cdbea'),
(26, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
