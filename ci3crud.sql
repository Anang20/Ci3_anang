-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2022 pada 11.37
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
(1, 'anang syah amirul haqim', 'anang@gmail.com', 'anang7887'),
(2, 'zainudin basyar', 'zainudin@gmail.com', 'zainudin5472'),
(3, 'reza aditya', 'reza@gmail.com', 'reza93030'),
(4, 'havis ', 'havis33@gmail.com', 'hhhfhei939'),
(16, 'muhammad reza nur aditya', 'rezanur798@gmail.com', 'reza90990'),
(17, 'iqshal syafallam', 'iqshall980@gmail.co', 'hruhhrhur'),
(18, 'muhammad ferdiansyah', 'ferdigus90@gmail.com', 'duhuhhuf'),
(19, 'Ariandita Hadi Nugroho', 'adit33@gail.com', 'adithfhfduf'),
(20, 'crishna ramadhan', 'crishna@gmail.com', 'crishnaiejie'),
(21, 'Muhammad Reyka Fatahillah', 'reyka@gmail.com', 'fheufhuh'),
(22, 'bayu', 'bayu@gmail.com', 'rrhrugojo9i893'),
(23, 'noor tri afriansyah', 'pigo773@gmail.com', 'ijfirjjfew'),
(24, 'ferdiansyah', 'ferdi79@gmail.com', 'fefefe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
