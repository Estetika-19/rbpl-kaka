-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3306
-- Waktu pembuatan: 18 Jun 2024 pada 12.03
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` enum('Owner','Operator') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `roles`) VALUES
(12, 'kaka04', '$2y$10$z0ODtQpkRmKae.pTvq/TVueJAV67O5EOl2Q3AVlTseyuD/oLmvxxK', ''),
(13, 'estetika19', '$2y$10$JlLIQ0VrjV5nJ6X6Ia4EEOCW1fvz0miSekQqQLs.Aw.7M2/jtjcQi', 'Operator'),
(14, 'kaka19', '$2y$10$Xh1pxC.LRc.MRpngdj.3uOrDEaHA3YIOtgUs7O4FxWpxaB9diq0QO', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('Kosong','Terisi') NOT NULL,
  `penghuni_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `no_kamar`, `harga`, `status`, `penghuni_id`) VALUES
(1, 1, 500000, 'Terisi', 2),
(2, 2, 500000, 'Terisi', 1),
(3, 3, 500000, 'Terisi', 3),
(4, 4, 500000, 'Terisi', 6),
(5, 5, 500000, 'Kosong', NULL),
(6, 6, 500000, 'Kosong', NULL),
(7, 7, 500000, 'Kosong', NULL),
(8, 8, 500000, 'Kosong', NULL),
(9, 9, 500000, 'Kosong', NULL),
(10, 10, 500000, 'Kosong', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_penghuni` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_penghuni`, `tgl_bayar`, `jumlah`) VALUES
(1, 2, '2024-05-20', 200000),
(2, 2, '2024-05-21', 200000),
(3, 3, '2024-05-30', 200000),
(7, 6, '2024-04-16', 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penghuni`
--

INSERT INTO `penghuni` (`id`, `nama`, `no_kamar`, `nik`, `tgl_masuk`, `tgl_keluar`) VALUES
(1, 'Budi', 2, '1234567890', '2024-05-01', '0000-00-00'),
(2, 'Andi', 1, '1234567891', '2024-05-01', '0000-00-00'),
(3, 'Caca', 3, '1234567892', '2024-05-03', '0000-00-00'),
(6, 'Estetika Nusantara Yutardo', 4, '12345678', '2024-05-01', '0000-00-00'),
(11, 'Lovely Nusantara Yutardo', 4, '0987654321', '2024-05-01', '0000-00-00'),
(12, 'Melinda', 10, '0987654321', '2024-06-22', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penghuni_id` (`penghuni_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penghuni` (`id_penghuni`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`penghuni_id`) REFERENCES `penghuni` (`id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id`);

--
-- Ketidakleluasaan untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
