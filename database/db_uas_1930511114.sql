-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2021 pada 14.35
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_1930511114`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pendaftar`
--

CREATE TABLE `tbl_pendaftar` (
  `id_daftar` int(255) NOT NULL,
  `kode_pendaftaran` varchar(26) NOT NULL,
  `nik` varchar(26) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(105) NOT NULL,
  `no_hp` varchar(26) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `kampung` varchar(250) NOT NULL,
  `desa` varchar(150) NOT NULL,
  `kecamatan` varchar(150) NOT NULL,
  `ayah` varchar(155) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `pend_ayah` varchar(50) NOT NULL,
  `pek_ayah` varchar(150) NOT NULL,
  `no_ayah` varchar(50) NOT NULL,
  `ibu` varchar(155) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `pend_ibu` varchar(50) NOT NULL,
  `pek_ibu` varchar(150) NOT NULL,
  `no_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`id_daftar`, `kode_pendaftaran`, `nik`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jekel`, `agama`, `no_hp`, `email`, `sekolah_asal`, `kampung`, `desa`, `kecamatan`, `ayah`, `nik_ayah`, `pend_ayah`, `pek_ayah`, `no_ayah`, `ibu`, `nik_ibu`, `pend_ibu`, `pek_ibu`, `no_ibu`) VALUES
(1, '5fdc254c1c04', '0987654345676571', 'Muhammad Zay', 'Sukabumi', '2021-01-30', 'Islam', 'Islam', '08569329766', 'cnb@xyz.com', 'SDN 1 Sukabumi', 'Bojong', 'Kalapanunggal', 'Sika', 'Gobang', '098765434567654', 'Strata 1', 'Polisi', '08776543234', 'Tika Santika', '0987654345676532', 'Strata 1', 'Ibu Rumah Tangga', '0867543214'),
(2, '6002a1cc3228f', '0987654345676574', 'Muhammad Zaynurroyhan', 'Sukabumi', '2021-01-01', 'Laki-Laki', 'Islam', '08569329766', 'wadawdwd@kiyowo.com', 'SDN 1 Sukabumi', 'Bojong', 'Parung', 'Cidahu', 'ted', '0987654345676545', 'Starata 2', 'PNS', '087654345657', 'Susi', '0987654345676574', 'SD/Sederajat', 'Ibu Rumah Tangga', '0897654231'),
(3, '60083a59e9dec', '1234567891012345', 'Muhammad', 'Sukabumi', '2021-01-14', 'Laki-Laki', 'Islam', '667777', 'royhanm35@gmail.coh', 'SDN 1 Pagi', 'Sukajaya', 'Parungseah', 'Sunda Kelapa', 'Kaku', '0987654345676570', 'SMP/Sederajat', 'Wirausaha', '089789876543', 'Tini', '0987654345676590', 'SMP/Sederajat', 'Ibu Rumah Tangga', '0876542314'),
(4, '600975d2b690e', '0987654345676567', 'Zayhaki', 'Sukabumi', '2021-01-07', 'Laki-Laki', 'Islam', '085693287544', 'zay@xyz.com', 'SDN 1 Sukabumi', 'Sukajaya', 'Parungseah', 'Sunda Kelapa', 'Kaku', '0987654345676577', 'SMP/Sederajat', 'Buruh Lepas', '089765437657', 'Komariah', '0987654345676575', 'Strata 1', 'Ibu Rumah Tangga', '08976554721'),
(5, '5fdc254c1c', '0987654345676579', 'Muhammad Latif', 'Sukabumi', '2021-01-30', 'Laki-Laki', 'Islam', '08569329766', 'royhanm35@gmail.cod', 'SDN 7 Sukabumi', 'Jagal', 'Bojong Jagal', 'Cibadak', 'Wawan', '098765434567650', 'Tidak/Belum Sekolah', 'Buruh Lepas', '0897653452', 'Siti Maemunah', '0987654345676532', 'Strata 1', 'Ibu Rumah Tangga', '089976543214'),
(6, '6002a1cc3228u', '0987654345676537', 'Muhammad Zaynuri', 'Bandung', '2001-01-01', 'Laki-Laki', 'Islam', '08569329766', 'wadawdwd@kiyowo.com', 'SDN 9 Sukabumi', 'Bojong', 'Bojonggemteng', 'Bojonggenteng', 'Wahyu', '0987654345676509', 'Tidak/Belum Sekolah', 'Wiraswasta', '089876543452', 'Susan', '0987654345676512', 'SD/Sederajat', 'Ibu Rumah Tangga', '088765433421'),
(7, '60083a59e9des', '1234567891012309', 'Muhammad Salman', 'Cirebon', '2006-01-14', 'Laki-Laki', 'Islam', '667777', 'salman@yahoo.com', 'SDN 1 Pakuhaji', 'Pakuhaji', 'Sundawenang', 'Parungkuda', 'Ikhsan', '0987654345676509', 'SMP/Sederajat', 'Wirausaha', '085643241256', 'Tini', '0987654345676356', 'SMP/Sederajat', 'Ibu Rumah Tangga', '089765435465'),
(8, '600975d2b69re', '0987654345676578', 'Hikam ', 'Sukabumi', '2006-01-07', 'Laki-Laki', 'Islam', '08569328876', 'hik@xyz.com', 'SDN 90 Pagi', 'Sinaresmi', 'Sinaresmi', 'Leuwiliang', 'Bambang', '0987654345676590', 'SMP/Sederajat', 'Buruh Lepas', '089877654321', 'Ratu Siyam', '0987654345676567', 'Strata 1', 'Ibu Rumah Tangga', '08967465321'),
(9, '5fdc254c1c03', '0987654345676590', 'Muhammad Zakiri', 'Sukabumi', '2021-01-30', 'Islam', 'Islam', '08569329766', 'royhanm35@gmail.cod', 'SDN 1 Sukabumi', 'Sukabagi', 'Bojong Jagal', 'Sukabagi', 'Ikram', '098765434567654', 'Tidak/Belum Sekolah', 'Wirausaha', '086543212343', 'Dian', '0987654345676532', 'Strata 1', 'Ibu Rumah Tangga', '08984325678'),
(10, '6002a1cc3228r', '0987654345676589', 'Zaki Zainuddin', 'Sukabumi', '2021-01-01', 'Laki-Laki', 'Islam', '08569329766', 'wadawdwd@kiyowo.com', 'SDN 1 Sukabumi', 'Cicantayan', 'Bojong Jagal', 'Cicantayan', 'Sulistyo', '0987654345676545', 'Tidak/Belum Sekolah', 'Wirausaha', '0897654321', 'Dea', '0987654345676574', 'SD/Sederajat', 'Ibu Rumah Tangga', '0897654123'),
(11, '60083a59e9ghr', '1234567891012365', 'Muhammad Sika', 'Sukabumi', '2021-01-14', 'Laki-Laki', 'Islam', '667777', 'royhanm35@gmail.coh', 'SDN 1 Pagi', 'Sukajaya', 'Parungseah', 'Sundaempire', 'Fauzi', '0987654345676570', 'SMP/Sederajat', 'Wirausaha', '32434324', 'Putri', '0987654345676590', 'SMP/Sederajat', 'Ibu Rumah Tangga', '0897653426'),
(12, '600975d2b690jkl', '0987654345676590', 'Hamish', 'Sukabumi', '2021-01-07', 'Laki-Laki', 'Islam', '085693287544', 'zay@xyz.com', 'SDN 1 Sukabumi', 'Sukajaya', 'Bolang', 'Parungkuda', 'Daud', '0987654345676577', 'SMP/Sederajat', 'Wirausaha', '32434324', 'Tiara', '0987654345676575', 'Strata 1', 'Ibu Rumah Tangga', '08976544211'),
(13, '5fdc254c1chgjh', '0987654345676908', 'Hakimul Akbar', 'Sukabumi', '2021-01-30', 'Laki-Laki', 'Islam', '08569329766', 'xcn@gmaii.com', 'SDN 7 Sukabumi', 'Bojong', 'Bojong Jagal', 'Cibadak', 'Wawan', '098765434567650', 'Tidak/Belum Sekolah', 'Buruh Lepas', '0897653452', 'Salma Dwi Anita', '0987654345676532', 'Strata 1', 'Ibu Rumah Tangga', '089976543214'),
(14, '6002a1cc3228utuii', '5647653567898765', 'Muhammad Zaynuri', 'Bandung', '2001-01-01', 'Laki-Laki', 'Islam', '08569329766', 'wadawdwd@kiyowo.com', 'SDN 9 Sukabumi', 'Bojong', 'Bojonggemteng', 'Bojonggenteng', 'Wahyu', '0987654345676509', 'Tidak/Belum Sekolah', 'Wiraswasta', '089876543452', 'Susan', '0987654345676512', 'SD/Sederajat', 'Ibu Rumah Tangga', '088765433421'),
(15, '60083a59e67543', '1234567891012332', 'Rizqy Firdaus', 'Cirebon', '2006-01-14', 'Laki-Laki', 'Islam', '087654324123', 'salman@yahoo.com', 'SDN 1 Pakuhaji', 'Pakuhaji', 'Sundawenang', 'Parungkuda', 'Ikhsan', '0987654345676509', 'SMP/Sederajat', 'Wirausaha', '085643241256', 'Mutmainah', '0987654345676356', 'SMP/Sederajat', 'Ibu Rumah Tangga', '089765435465'),
(16, '600975d2b69mkiy', '0987654345676578', 'Kamillun Jabbar', 'Sukabumi', '2006-01-07', 'Laki-Laki', 'Islam', '08569328876', 'hik@xyz.com', 'SDN 90 Pagi', 'Sinaresmi', 'Sinaresmi', 'Leuwiliang', 'Bambang', '0987654345676590', 'SMP/Sederajat', 'Buruh Lepas', '089877654321', 'Ratu Siyam', '0987654345676567', 'Strata 1', 'Ibu Rumah Tangga', '08967465321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cek_password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama`, `email`, `password`, `cek_password`, `is_active`) VALUES
(1, 'Admin Kece', 'royhan@coba.com', '$2y$10$tonZkQrnGnp9n38rWeMTieLPNxtDfvy4Z/35Q4rlFObsm/xFnSae.', '', 1),
(2, 'Muhammad Zaynurroyhan', 'admin@coba.com', '$2y$10$j075V8U8TcMYNXeLK7s4MuLGUVBghJpn9XsjozxEHRZLHQ2imttxG', '', 1),
(3, 'Fatwa', 'aweng@coba.com', '$2y$10$juw8O4h8GsutDJ0pqVaKHuObPA7vl2.ppAXvT5N1m8XhY3PwYO9ye', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  MODIFY `id_daftar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
