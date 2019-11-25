-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2019 pada 02.48
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks2019`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `id` int(11) NOT NULL,
  `pengirim` text NOT NULL,
  `tanggal` text NOT NULL,
  `komentar` text NOT NULL,
  `target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`id`, `pengirim`, `tanggal`, `komentar`, `target`) VALUES
(1, 'shinta', '12 nov 2019', 'saya suka saya suka', 1),
(2, 'tes', '12 Nov 2019', 'haiii', 1),
(3, 'tes', '12 Nov 2019', 'ini saya ', 1),
(4, 'diyas', '12 Nov 2019', 'iyaaa', 1),
(5, 'alendra', '12 Nov 2019', 'halooo', 2),
(6, 'alendra', '12 Nov 2019', 'wow', 7),
(7, 'diyas', '12 Nov 2019', 'enak sekali ini wowowowowowowowowowowowow!!!!!!', 5),
(8, 'surya', '12 Nov 2019', 'ada apa ini rame rame?', 7),
(9, 'diyas', '12 Nov 2019', 'yooyoyoyoy', 7),
(10, 'deo', '14 Nov 2019', 'wiouiwqieuiwqy', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hit`
--

CREATE TABLE `hit` (
  `id` int(11) NOT NULL,
  `kunjungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hit`
--

INSERT INTO `hit` (`id`, `kunjungan`) VALUES
(1, 1039);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` text NOT NULL,
  `kelompok` int(11) NOT NULL,
  `jumlahpasokan` int(11) NOT NULL,
  `satuanpasokan` int(11) NOT NULL,
  `penjual` text NOT NULL,
  `nohp` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `judul`, `deskripsi`, `tanggal`, `kelompok`, `jumlahpasokan`, `satuanpasokan`, `penjual`, `nohp`, `foto`) VALUES
(8, 'Ikan Nila', 'ini adalah ikan nila ditangkap dalam keadan segar di laut selatan\r\n\r\nkuylah beli!', '25 Nov 2019', 2, 1000, 3, 'alendra', 2147483647, 'ikan nila.jpg'),
(9, 'Wortel Purwakarta', 'Ini adalah wrotel ilegan dengan rasa yang manis semua pasti akan menyukainya!', '25 Nov 2019', 1, 80000, 4, 'alendra', 2147483647, 'wortel.jpg'),
(10, 'Tomat Jogja', 'ini adalah tomat lokal yang segar\r\ndi ambil langsung dari pemiliknya di jawa tengah\r\n\r\nkhasiatnya:\r\n\r\nmengandung serat serat bukan optik ya tapi gizi hmm...', '25 Nov 2019', 1, 999999, 4, 'xamarin', 2147483647, 'tomat.jpg'),
(11, 'Pisang Malang', 'ini adalah pisang jogja enak lho pokoknya tinggal di beli saja yuk rasakan manfaatnya!', '25 Nov 2019', 1, 696696969, 4, 'xamarin', 2147483647, 'pisang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `kelompok` int(11) NOT NULL,
  `otorisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `kelompok`, `otorisasi`) VALUES
(1, 'alendra', '123', 1, 1),
(2, 'diyas', '123', 2, 0),
(4, 'surya', '444', 1, 0),
(5, 'deo0ooooooooooo', '123', 2, 0),
(6, 'xamarin', '777', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hit`
--
ALTER TABLE `hit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `hit`
--
ALTER TABLE `hit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
