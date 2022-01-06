-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 14.36
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
-- Database: `prakgis_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'tes123', 'tes123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smk`
--

CREATE TABLE `smk` (
  `id_sekolah` int(8) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(500) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smk`
--

INSERT INTO `smk` (`id_sekolah`, `nama_sekolah`, `kategori`, `website`, `no_telp`, `alamat`, `jurusan`, `kelurahan`, `latitude`, `longitude`) VALUES
(1, 'SMKN 13 MALANG', 'NEGERI', 'https://www.smkn13malang.sch.id/', '0341-5023939', 'Perum. Vila Bukit Tidar Blok A2/13 Lowokwaru Kota Malang (65144)', 'Nautika Kapal Niaga,Keperawatan, Teknologi Pengolahan Hasil Pertanian', 'Jawa Timur', '-7.9424864', '112.5791551'),
(2, 'SMKN 2 MALANG', 'NEGERI', 'http://www.smkn2malang.sch.id/', '0341-551504', 'Alamat: Jl. Veteran No.17 Malang, Jawa Timur, Indonesia', 'Perawatan Sosial, Usaha Perjalanan dan Wisata, Akomodasi Perhotelan, Jasa Boga,\r\nKeperawatan, Teknik Komputer dan Jaringan', 'Jawa Timur', '-7.9564117', '112.6134092'),
(3, 'SMKN 5 MALANG', 'NEGERI', 'https://www.smkn5malang.sch.id/', '0341-478195', 'Jl. Ikan Piranha Atas Keluarahan Tunjungsekar Kecamatan Lowokwaru Kota Malang', 'Kriya Kayu, Kriya Keramik, Kriya Tekstil, Tata Busana, Animasi, Rekayasa Perangkat Lunak, Teknik Komputer Jaringan, Multimedia', 'Jawa Timur', '-7.929387', '112.6335993'),
(4, 'SMK NATIONAL MEDIA CENTER ', 'SWASTA', 'http://smknmc.sch.id/ ', '(0341) 492444', 'Jl. Simpang Candi Panggung NO.133 Kelurahan Mojolangu Kecamatan Lowokwaru Kota Malang ', 'Multimedia, Animasi, Desain Komunikasi Visual, Rekayasa Perangkat Lunak, Teknik Komputer Jaringan, Administrasi Perkantoran, Akuntansi, Pemasaran, Perbankan ', 'Jawa Timur', '-7.934883', '112.6112286'),
(5, 'SMK WIDYAGAMA ', 'SWASTA', ' https://smkwidya gama.sch.id/ ', '(0341) 473500', 'Jl. Borobudur 12 Kelurahan Mojolangu Kecamatan Lowokwaru Kota Malang ', 'Rekayasa Perangkat Lunak, Teknik Komputer Jaringan, Teknik dan Bisnis Sepeda Montor ', 'Jawa Timur', '-7.9397562', '112.6354265'),
(6, 'SMKS BINA MANDIRI MALANG ', 'SWASTA', 'https://smkbinam andiri.sch.id/ ', '0838-3484-8737', 'Jl. Anjasmoro No 22 Kelurahan Ketawanggede Kecamatan Lowokwaru Kota Malang ', 'Keperawatan, Farmasi ', 'Jawa Timur', '-7.9668604', '112.6261904'),
(7, 'SMKS FARMASI MAHARANI  MALANG ', 'SWASTA', 'http://smkfarmasimaharanimalang.sch.id/', '(0341) 479686', 'Jl. Simpang Candi Panggung No 133 Kelurahan Tunggulwulung Kecamatan Lowokwaru Kota Malang ', 'Farmasi', 'Jawa Timur', '-7.9350824', '112.6079769'),
(8, 'SMK KERTHA WISATA MALANG', 'SWASTA', 'http://smkkerthawisatamalang.blogs pot.com/ ', '-', 'Jl. Ikan Tombro No.15, Tunjungsekar, Kec. Lowokwaru, Kota Malang', 'Akomodasi Perhotelan, Pelaksana Sarana Akomodasi Perhotelan, Front Office,  Housekeeping ', 'Jawa Timur', '-7.927829', '112.6301073'),
(9, 'SMKS MUHAMMADIYAH 2 MALANG ', 'SWASTA', 'https://www.smkm2malang.sch.id/', '(0341) 552857', 'Jl. Baiduri Sepah 27 Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang ', 'Multimedia, Teknik Kompuer dan Jaringan  , Bisnis Daring Pemasaran, Otoatisasi dan Tata Kelola Perkantoran, Akuntansi dan Keuangan Lembaga, Perbankan Syariah , Usaha Jasa Pariwisata ', 'Jawa Timur', '-7.9295357', '112.6025679'),
(10, 'SMKS MUHAMMADIYAH 3 MALANG ', 'SWASTA', '-', '(0341) 557448', 'Jl. Raya Sumbersari II/142 Kelurahan Sumbersari Kecamatan Lowokwaru Kota Malang ', 'Teknik Sepeda Motor, Teknik Kendaraan Ringan (TKR), Teknik Komputer Jaringan (TKJ) ', 'Jawa Timur', '-7.9248119', '112.6030709'),
(11, 'SMKS PGRI 3 MALANG ', 'SWASTA', ' http://smkpgri3malang.sch.id/ ', '-', 'Jl. Raya Tlogomas No 29 Kelurahan Tlogomas Kecamatan Lowokwaru Kota Malang ', 'Managemen Bisnis, Teknik Audio Video - Arduino, Robotik, 3D Printing, Teknik Pembangkit Tenaga Listrik, Teknik Kimia, Kimia Pembangkit, Teknik Pemesinan, Teknik Pengelasan \r\nTeknik Otomatif, Perbaikan Body Otomotif, Teknik Kendaraan Ringan, Teknik Bisnis Sepeda Motor, Animasi, Multimedia, Rekayasa Perangkat Lunak, Teknik Komputer Jaringan ', 'Jawa Timur', '-7.9274244', '112.5997561'),
(12, 'SMKS TARUNA BHAKTI ', 'SWASTA', 'https://www.smpbhakti.sch.id/', '(0341) 4345404', 'Jl.Kedawung 72 Kelurahan Tulusrejo Kecamatan Lowokwaru Kota Malang ', 'Akuntansi,Teknik Komputer dan Jaringan (TKJ) ', 'Jawa Timur', '-7.951195', '112.6314253'),
(13, 'SMKS YP 17 2 MALANG ', 'SWASTA', 'http://smkyp172mlg.blogspot.com/ ', '(0341) 7700735', 'Jl.Melati Utara No 65 Kelurahan Jatimulyo Kecamatan Lowokwaru Kota Malang ', 'Teknik Komputer & Jaringan, Pemasaran/Bisnis Manajemen, Usaha Perjalanan Wisata ', 'Jawa Timur', '-7.951359', '112.6290563'),
(21, 'asdsasdasda', 'NEGERI', 'asdadasd', '3213', 'adasda', 'sada', 'dadsa', '546', '645');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `smk`
--
ALTER TABLE `smk`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `smk`
--
ALTER TABLE `smk`
  MODIFY `id_sekolah` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
