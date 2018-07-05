-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2018 pada 09.55
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nipg` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `grade` varchar(20) NOT NULL,
  `division` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban_quisioner`
--

CREATE TABLE `tb_jawaban_quisioner` (
  `id_jq` int(11) NOT NULL,
  `id_sq` int(11) NOT NULL,
  `jawaban` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_quisioner`
--

CREATE TABLE `tb_quisioner` (
  `id_quisioner` int(11) NOT NULL,
  `judul_quisioner` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_quisioner`
--

INSERT INTO `tb_quisioner` (`id_quisioner`, `judul_quisioner`) VALUES
(1, 'Judul satu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_respon_quisioner`
--

CREATE TABLE `tb_respon_quisioner` (
  `id_rq` int(11) NOT NULL,
  `nipg` varchar(15) NOT NULL,
  `id_quisioner` int(11) NOT NULL,
  `id_sq` int(11) NOT NULL,
  `id_jq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_kuisioner`
--

CREATE TABLE `tb_soal_kuisioner` (
  `id_sq` int(11) NOT NULL,
  `id_quisioner` int(11) NOT NULL,
  `soal_quisioner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_kuisioner`
--

INSERT INTO `tb_soal_kuisioner` (`id_sq`, `id_quisioner`, `soal_quisioner`) VALUES
(1, 1, 'What?'),
(2, 1, 'Where?');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nipg`);

--
-- Indeks untuk tabel `tb_jawaban_quisioner`
--
ALTER TABLE `tb_jawaban_quisioner`
  ADD PRIMARY KEY (`id_jq`),
  ADD KEY `tb_jawaban_quisioner_ibfk_1` (`id_sq`);

--
-- Indeks untuk tabel `tb_quisioner`
--
ALTER TABLE `tb_quisioner`
  ADD PRIMARY KEY (`id_quisioner`);

--
-- Indeks untuk tabel `tb_respon_quisioner`
--
ALTER TABLE `tb_respon_quisioner`
  ADD PRIMARY KEY (`id_rq`),
  ADD KEY `tb_respon_quisioner_ibfk_1` (`nipg`),
  ADD KEY `id_quisioner` (`id_quisioner`),
  ADD KEY `id_sq` (`id_sq`),
  ADD KEY `id_jq` (`id_jq`);

--
-- Indeks untuk tabel `tb_soal_kuisioner`
--
ALTER TABLE `tb_soal_kuisioner`
  ADD PRIMARY KEY (`id_sq`),
  ADD KEY `tb_soal_kuisioner_ibfk_1` (`id_quisioner`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jawaban_quisioner`
--
ALTER TABLE `tb_jawaban_quisioner`
  MODIFY `id_jq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_quisioner`
--
ALTER TABLE `tb_quisioner`
  MODIFY `id_quisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_respon_quisioner`
--
ALTER TABLE `tb_respon_quisioner`
  MODIFY `id_rq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_kuisioner`
--
ALTER TABLE `tb_soal_kuisioner`
  MODIFY `id_sq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jawaban_quisioner`
--
ALTER TABLE `tb_jawaban_quisioner`
  ADD CONSTRAINT `tb_jawaban_quisioner_ibfk_1` FOREIGN KEY (`id_sq`) REFERENCES `tb_soal_kuisioner` (`id_sq`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_respon_quisioner`
--
ALTER TABLE `tb_respon_quisioner`
  ADD CONSTRAINT `tb_respon_quisioner_ibfk_1` FOREIGN KEY (`nipg`) REFERENCES `karyawan` (`nipg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_respon_quisioner_ibfk_2` FOREIGN KEY (`id_quisioner`) REFERENCES `tb_quisioner` (`id_quisioner`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_respon_quisioner_ibfk_3` FOREIGN KEY (`id_sq`) REFERENCES `tb_soal_kuisioner` (`id_sq`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_respon_quisioner_ibfk_4` FOREIGN KEY (`id_jq`) REFERENCES `tb_jawaban_quisioner` (`id_jq`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_soal_kuisioner`
--
ALTER TABLE `tb_soal_kuisioner`
  ADD CONSTRAINT `tb_soal_kuisioner_ibfk_1` FOREIGN KEY (`id_quisioner`) REFERENCES `tb_quisioner` (`id_quisioner`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
