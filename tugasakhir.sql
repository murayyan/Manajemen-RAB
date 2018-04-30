-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Apr 2018 pada 17.13
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `cd` int(11) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`cd`, `id_karyawan`, `tanggal_absen`, `jam_datang`, `jam_pulang`, `created_at`) VALUES
(2, 'DOT02', '2018-01-30', '04:20:53', '17:10:30', '0000-00-00'),
(3, 'DOT11', '2018-02-03', '08:00:00', '17:00:00', '0000-00-00'),
(4, 'DOT02', '2018-02-08', '22:09:38', '00:00:00', '0000-00-00'),
(5, 'DOT02', '2018-02-09', '15:23:03', '00:00:00', '0000-00-00'),
(6, 'DOT02', '2018-02-14', '00:25:21', '13:00:00', '0000-00-00'),
(7, 'DOT02', '2018-02-14', '00:27:12', '00:00:00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` varchar(20) NOT NULL,
  `alamat` char(30) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id_anak` varchar(20) NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `akte_kelahiran` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `audit_trails`
--

CREATE TABLE `audit_trails` (
  `waktu` datetime NOT NULL,
  `content` varchar(100) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `audit_trails`
--

INSERT INTO `audit_trails` (`waktu`, `content`, `id_karyawan`) VALUES
('2018-01-29 12:13:42', 'Login', 'DOT01'),
('2018-01-29 14:15:15', 'Login', 'DOT01'),
('2018-01-29 14:28:48', 'Menuju Halaman Perizinan', 'DOT01'),
('2018-01-29 15:23:30', 'Login', 'DOT01'),
('2018-01-29 16:07:13', 'Login', 'DOT01'),
('2018-01-29 21:22:03', 'Login', 'DOT01'),
('2018-01-29 21:25:22', 'Login', 'DOT01'),
('2018-01-29 21:26:15', 'Login', 'DOT02'),
('2018-01-29 21:39:16', 'Login', 'DOT02'),
('2018-01-29 21:42:05', 'Login', 'DOT02'),
('2018-01-29 21:43:30', 'Login', 'DOT01'),
('2018-01-29 21:53:03', 'Login', 'DOT01'),
('2018-01-29 22:06:13', 'Login', 'DOT02'),
('2018-01-29 22:08:06', 'Login', 'DOT01'),
('2018-01-29 22:08:19', 'Login', 'DOT02'),
('2018-01-29 22:12:39', 'Login', 'DOT02'),
('2018-01-29 22:15:31', 'Login', 'DOT01'),
('2018-01-29 22:50:57', 'Login', 'DOT01'),
('2018-01-29 22:59:30', 'Login', 'DOT01'),
('2018-01-29 23:59:01', 'Login', 'DOT03'),
('2018-01-29 23:59:52', 'Login', 'DOT01'),
('2018-01-30 00:34:08', 'Login', 'DOT02'),
('2018-01-30 00:36:16', 'Login', 'DOT01'),
('2018-01-30 00:42:19', 'Login', 'DOT02'),
('2018-01-30 00:44:35', 'Login', 'DOT01'),
('2018-01-30 00:48:15', 'Login', 'DOT02'),
('2018-01-30 00:50:55', 'Menuju Halaman Perizinan', 'DOT02'),
('2018-01-30 00:51:45', 'Login', 'DOT02'),
('2018-01-30 00:52:10', 'Login', 'DOT01'),
('2018-01-30 00:56:32', 'Login', 'DOT02'),
('2018-01-30 01:06:50', 'Login', 'DOT01'),
('2018-01-30 01:12:13', 'Login', 'DOT02'),
('2018-01-30 06:05:56', 'Login', 'DOT02'),
('2018-01-30 06:06:49', 'Login', 'DOT01'),
('2018-01-30 06:12:50', 'Login', 'DOT02'),
('2018-01-30 06:41:29', 'Login', 'DOT01'),
('2018-01-30 08:28:43', 'Login', 'DOT02'),
('2018-01-30 08:49:27', 'Login', 'DOT01'),
('2018-01-30 09:07:24', 'Login', 'DOT01'),
('2018-01-30 11:03:32', 'Login', 'DOT01'),
('2018-01-30 12:15:46', 'Login', 'DOT01'),
('2018-01-30 17:00:11', 'Login', 'DOT02'),
('2018-01-30 17:05:44', 'Login', 'DOT02'),
('2018-01-30 17:10:05', 'Login', 'DOT01'),
('2018-01-30 17:48:52', 'Login', 'DOT01'),
('2018-01-30 17:50:48', 'Login', 'DOT02'),
('2018-01-30 17:50:50', 'User Menuju Halaman Perizinan', 'DOT02'),
('2018-01-30 17:51:27', 'User Mengajukan Perizinan', 'DOT02'),
('2018-01-30 17:51:28', 'User Menuju Halaman Perizinan', 'DOT02'),
('2018-01-30 17:53:25', 'Login', 'DOT02'),
('2018-01-30 17:53:45', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 17:55:06', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 17:55:09', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 17:59:14', 'Admin Menuju Halaman Absensi', 'DOT01'),
('2018-01-30 17:59:17', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 17:59:20', 'Admin Menuju Detail Perizinan', 'DOT01'),
('2018-01-30 17:59:24', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 17:59:30', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-30 17:59:32', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 17:59:52', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:00:37', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:00:44', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:00:48', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:01:29', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:01:30', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:01:34', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:01:37', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:01:40', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:01:41', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:01:46', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:01:55', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:01:56', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:02:00', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:02:04', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:02:59', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:03:01', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:03:20', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:03:23', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:03:38', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:03:40', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:03:59', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:04:02', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:04:16', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:04:18', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:04:26', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:04:47', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:07:14', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:08:41', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:08:46', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:08:51', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:13:16', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:13:26', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:14:27', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:14:30', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:15:52', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:15:55', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:16:06', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:16:13', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:16:23', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:16:25', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:16:26', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:16:36', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:16:43', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:16:45', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:16:46', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:16:49', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:16:58', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:16:59', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:17:01', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:17:06', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:17:12', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:17:14', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:17:16', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:18:05', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:18:17', 'Login', 'DOT01'),
('2018-01-30 18:18:55', 'Admin Menuju Halaman Absensi', 'DOT01'),
('2018-01-30 18:18:59', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-30 18:19:00', 'Admin Menuju Halaman Absensi', 'DOT01'),
('2018-01-30 18:19:17', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:19:24', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-01-30 18:19:26', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:19:46', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:20:03', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:20:23', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:20:24', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:20:27', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:20:29', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:20:31', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:21:44', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:22:43', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:22:58', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:23:02', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:23:03', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:24:00', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:24:05', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 18:24:06', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:04', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:25:09', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:17', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:25:19', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:21', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:25:24', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:28', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:30', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:25:34', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:25:38', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:25:40', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:26:27', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:26:30', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:26:33', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:26:35', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:26:38', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:28:33', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:29:05', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:33:30', 'Login', 'DOT01'),
('2018-01-30 18:34:44', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:34:46', 'Admin Menuju Detail Perizinan', 'DOT01'),
('2018-01-30 18:34:48', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:35:45', 'Admin Menuju Halaman Perizinan', 'DOT01'),
('2018-01-30 18:36:01', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:40:26', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:41:14', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:41:32', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:41:34', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:42:22', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:42:24', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:44:10', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:44:12', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:48:38', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:48:46', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:53:01', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:53:02', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:53:06', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:53:09', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:53:28', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:53:29', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:53:31', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:54:15', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:54:33', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:54:35', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:55:17', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:56:04', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:56:10', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:56:12', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:56:22', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:56:23', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:56:27', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:56:33', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:56:39', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:56:48', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:56:58', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:57:00', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:57:04', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:57:09', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:57:12', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:57:18', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:57:20', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:58:06', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:58:11', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:58:13', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:58:17', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:58:19', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:58:20', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:58:37', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:58:41', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 18:58:46', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:58:57', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 18:58:59', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 18:59:02', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:01:15', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 19:01:17', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:01:19', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 19:01:20', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:01:22', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 19:01:23', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:01:25', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 19:01:27', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:01:29', 'Admin Menuju Halaman Karyawan', 'DOT01'),
('2018-01-30 19:01:30', 'Admin Menuju Detail Karyawan', 'DOT01'),
('2018-01-30 19:16:48', 'Login', 'DOT02'),
('2018-01-30 19:28:03', 'Login', 'DOT01'),
('2018-01-30 19:38:17', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 19:38:20', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 19:38:26', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 19:39:24', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 19:40:32', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 19:40:44', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 19:41:45', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-30 19:54:41', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-30 19:55:52', 'Admin Menambah Data Perizinan', 'DOT01'),
('2018-01-30 19:56:28', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-30 19:57:07', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-30 19:57:19', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-01-30 21:07:04', 'Admin Menambah Mengunjungi Barang', 'DOT01'),
('2018-01-30 21:09:21', 'Admin Menghapus Barang', 'DOT01'),
('2018-01-30 21:42:04', 'Login', 'DOT01'),
('2018-01-30 21:43:08', 'Login', 'DOT01'),
('2018-01-30 21:44:16', 'Admin Menambah Barang', 'DOT01'),
('2018-01-30 21:45:40', 'Admin Menambah Barang', 'DOT01'),
('2018-01-30 21:49:24', 'Admin Delete Calon Karyawan Baru', 'DOT01'),
('2018-01-30 21:50:25', 'Admin Menambah Calon Karyawan Baru', 'DOT01'),
('2018-01-30 21:51:35', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-01-30 22:18:46', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-01-30 22:20:55', 'Login', 'DOT01'),
('2018-01-30 22:21:24', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-01-30 22:22:30', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-01-30 22:22:52', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-01-30 22:23:14', 'Admin Mengedit Gaji Karyawan', 'DOT01'),
('2018-01-30 22:24:02', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-01-30 22:24:17', 'Admin Mengedit Gaji Karyawan', 'DOT01'),
('2018-01-30 22:24:34', 'Admin Mengedit Gaji Karyawan', 'DOT01'),
('2018-01-30 22:29:04', 'Login', 'DOT02'),
('2018-01-30 22:31:58', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-30 22:31:58', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-30 22:33:47', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-30 22:33:47', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-30 22:40:21', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 22:41:13', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 22:41:31', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 22:42:32', 'Login', 'DOT03'),
('2018-01-30 22:46:34', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-30 22:47:28', 'Login', 'DOT02'),
('2018-01-30 22:48:46', 'Login', 'DOT03'),
('2018-01-30 22:51:19', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 22:51:39', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 22:55:00', 'Admin Menambah Data Perizinan', 'DOT01'),
('2018-01-30 22:55:13', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-30 22:55:28', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-30 23:00:28', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:01:08', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:03:05', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:04:05', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 23:04:21', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-30 23:06:05', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:07:20', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:07:28', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-30 23:10:59', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-30 23:12:08', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:16:36', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:20:32', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 23:20:45', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-30 23:23:10', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:24:12', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:24:41', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:25:49', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-30 23:27:01', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-31 00:13:50', 'Admin Menambah Barang', 'DOT01'),
('2018-01-31 00:14:10', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:14:22', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:15:24', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:16:11', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:16:29', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:27:08', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:27:32', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:37:21', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:37:26', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:37:30', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:37:50', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:37:58', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:38:34', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:38:39', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:39:21', 'Admin Mengunjungi Detail Barang', 'DOT01'),
('2018-01-31 00:39:25', 'Admin Menghapus Barang', 'DOT01'),
('2018-01-31 00:40:58', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:41:05', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:43:43', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:43:54', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:45:47', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:46:49', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:46:54', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:47:59', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:48:05', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:50:55', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:51:03', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:51:06', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:51:26', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:51:31', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:53:29', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:53:34', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:53:52', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:56:19', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:56:26', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:56:33', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:59:12', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 00:59:57', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:00:19', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:00:48', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:01:29', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:04:45', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:04:48', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:04:53', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:05:32', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:05:38', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:05:47', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:06:41', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:06:46', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 01:21:41', 'Login', 'DOT01'),
('2018-01-31 02:55:13', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 02:55:47', 'Admin Mengedit Barang', 'DOT01'),
('2018-01-31 02:55:50', 'Admin Mengunjungi Detail Barang', 'DOT01'),
('2018-01-31 08:10:43', 'Login', 'DOT01'),
('2018-01-31 08:11:32', 'Login', 'DOT02'),
('2018-01-31 08:16:51', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:16:58', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:17:01', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:17:06', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:17:12', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:18:10', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-01-31 08:18:31', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-01-31 08:18:38', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-01-31 08:19:46', 'Admin Delete Calon Karyawan Baru', 'DOT01'),
('2018-01-31 08:20:53', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-01-31 08:21:41', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-01-31 08:22:56', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-31 08:23:18', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-31 08:23:37', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-31 08:23:56', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-31 08:24:18', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-31 08:24:31', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-31 08:24:53', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-31 08:25:02', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-31 08:25:36', 'Admin Menambah Data Perizinan', 'DOT01'),
('2018-01-31 08:25:56', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-01-31 08:25:59', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-01-31 08:27:41', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-01-31 08:28:11', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-01-31 08:28:15', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-01-31 08:29:18', 'Admin Menambah Data Perizinan', 'DOT01'),
('2018-01-31 08:29:34', 'Admin Mengubah Data Perizinan', 'DOT01'),
('2018-01-31 08:29:38', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-01-31 09:41:51', 'Login', 'DOT01'),
('2018-01-31 09:52:05', 'Login', 'DOT02'),
('2018-01-31 09:52:32', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-31 09:52:32', 'Admin Mengubah Data Karyawan', 'DOT02'),
('2018-01-31 09:52:48', 'Login', 'DOT01'),
('2018-02-02 15:46:15', 'Login', 'DOT01'),
('2018-02-02 15:49:44', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-02 15:50:41', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-02-02 15:54:53', 'Admin Menambah Calon Karyawan Baru', 'DOT01'),
('2018-02-02 15:55:10', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 15:58:04', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:02:29', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:11:41', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-02-02 16:12:04', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-02-02 16:13:03', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:13:37', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:13:51', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:15:02', 'Admin Menambah Gaji Pokok', 'DOT01'),
('2018-02-02 16:15:25', 'Admin Mengedit Gaji Pokok', 'DOT01'),
('2018-02-02 16:15:37', 'Admin Mengedit Gaji Pokok', 'DOT01'),
('2018-02-02 16:16:29', 'Admin Menambah Tunjangan', 'DOT01'),
('2018-02-02 16:16:42', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-02 16:17:53', 'Admin Menambah Bonus', 'DOT01'),
('2018-02-02 16:18:01', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-02 16:22:24', 'Admin Mengedit calon Karyawan Baru', 'DOT01'),
('2018-02-02 16:23:49', 'Admin Menambah Gaji Karyawan', 'DOT01'),
('2018-02-02 16:24:48', 'Admin Mengedit Gaji Karyawan', 'DOT01'),
('2018-02-02 16:26:17', 'Admin Delete Gaji Karyawan', 'DOT01'),
('2018-02-02 16:27:14', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-02 16:27:50', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-02 17:18:23', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-04 14:40:25', 'Login', 'DOT01'),
('2018-02-04 15:17:23', 'Login', 'DOT01'),
('2018-02-04 15:21:44', 'Logout', 'DOT01'),
('2018-02-04 15:21:48', 'Login', 'DOT01'),
('2018-02-04 15:25:37', 'Logout', 'DOT01'),
('2018-02-04 15:27:39', 'Login', 'DOT01'),
('2018-02-04 15:29:15', 'Logout', 'DOT01'),
('2018-02-04 15:29:36', 'Login', 'DOT02'),
('2018-02-04 15:35:38', 'Login', 'DOT01'),
('2018-02-04 15:36:03', 'Logout', 'DOT01'),
('2018-02-04 15:36:14', 'Login', 'DOT02'),
('2018-02-04 15:36:32', 'Logout', 'DOT02'),
('2018-02-04 15:36:37', 'Login', 'DOT01'),
('2018-02-04 16:26:55', 'Logout', 'DOT01'),
('2018-02-04 16:27:10', 'Login', 'DOT02'),
('2018-02-04 16:29:13', 'Logout', 'DOT02'),
('2018-02-04 16:29:16', 'Login', 'DOT01'),
('2018-02-05 11:36:44', 'Login', 'DOT01'),
('2018-02-06 16:49:47', 'Login', 'DOT01'),
('2018-02-06 16:53:43', 'Logout', 'DOT01'),
('2018-02-06 16:53:52', 'Login', 'DOT02'),
('2018-02-06 16:56:14', 'Logout', 'DOT02'),
('2018-02-06 16:56:18', 'Login', 'DOT01'),
('2018-02-06 16:57:42', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-06 16:58:02', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-02-06 16:58:10', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-02-06 17:01:36', 'Logout', 'DOT01'),
('2018-02-06 17:01:48', 'Login', 'DOT02'),
('2018-02-06 17:02:23', 'Logout', 'DOT02'),
('2018-02-06 17:02:27', 'Login', 'DOT01'),
('2018-02-06 17:02:53', 'Admin Menambah Data Absensi', 'DOT01'),
('2018-02-06 17:03:06', 'Admin Mengubah Data Absensi', 'DOT01'),
('2018-02-06 17:03:10', 'Admin Menghapus Data Absensi', 'DOT01'),
('2018-02-06 17:04:22', 'Admin Menambah Data Perizinan', 'DOT01'),
('2018-02-06 17:04:43', 'Admin Menghapus Data Perizinan', 'DOT01'),
('2018-02-06 17:04:50', 'Logout', 'DOT01'),
('2018-02-07 14:00:31', 'Login', 'DOT01'),
('2018-02-08 09:45:43', 'Login', 'DOT01'),
('2018-02-08 09:54:53', 'Login', 'DOT01'),
('2018-02-08 10:14:26', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-08 10:14:54', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-02-08 10:15:17', 'Admin Menghapus Data Karyawan', 'DOT01'),
('2018-02-08 10:52:55', 'Logout', 'DOT01'),
('2018-02-08 11:16:13', 'Login', 'DOT01'),
('2018-02-08 11:20:09', 'Logout', 'DOT01'),
('2018-02-08 11:20:20', 'Login', 'DOT02'),
('2018-02-08 11:33:37', 'Logout', 'DOT02'),
('2018-02-08 11:33:41', 'Login', 'DOT01'),
('2018-02-08 12:28:53', 'Logout', 'DOT01'),
('2018-02-08 14:14:11', 'Login', 'DOT01'),
('2018-02-08 21:47:14', 'Login', 'DOT01'),
('2018-02-08 22:09:17', 'Logout', 'DOT01'),
('2018-02-08 22:09:32', 'Login', 'DOT02'),
('2018-02-08 22:09:38', 'User Melakukan Absensi', 'DOT02'),
('2018-02-08 22:10:23', 'Logout', 'DOT02'),
('2018-02-08 22:10:28', 'Login', 'DOT01'),
('2018-02-08 22:20:19', 'Logout', 'DOT01'),
('2018-02-09 08:40:32', 'Login', 'DOT01'),
('2018-02-09 08:43:00', 'Admin Delete Calon Karyawan Baru', 'DOT01'),
('2018-02-09 08:43:04', 'Admin Delete Calon Karyawan Baru', 'DOT01'),
('2018-02-09 08:43:07', 'Admin Delete Calon Karyawan Baru', 'DOT01'),
('2018-02-09 08:50:12', 'Admin Menambah Calon Karyawan Baru', 'DOT01'),
('2018-02-09 09:35:04', 'Login', 'DOT01'),
('2018-02-09 09:48:48', 'Admin Mengunjungi Detail Peminjaman', 'DOT01'),
('2018-02-09 10:07:59', 'Admin Mengunjungi Detail Peminjaman', 'DOT01'),
('2018-02-09 10:08:05', 'Admin Mengedit Peminjaman', 'DOT01'),
('2018-02-09 10:08:24', 'Admin Mengedit Barang', 'DOT01'),
('2018-02-09 10:08:33', 'Admin Mengedit Pengajuan', 'DOT01'),
('2018-02-09 10:08:50', 'Admin Mengunjungi Detail Peminjaman', 'DOT01'),
('2018-02-09 10:10:34', 'Admin Mengedit Peminjaman', 'DOT01'),
('2018-02-09 14:43:36', 'Logout', 'DOT01'),
('2018-02-09 14:53:38', 'Login', 'DOT01'),
('2018-02-09 14:53:44', 'Logout', 'DOT01'),
('2018-02-09 14:54:07', 'Login', 'DOT01'),
('2018-02-09 15:21:46', 'Logout', 'DOT01'),
('2018-02-09 15:22:07', 'Login', 'DOT02'),
('2018-02-09 15:23:03', 'User Melakukan Absensi', 'DOT02'),
('2018-02-09 15:25:14', 'Login', 'DOT01'),
('2018-02-09 15:33:17', 'User Mengajukan Perizinan', 'DOT02'),
('2018-02-14 00:08:07', 'Login', 'DOT01'),
('2018-02-14 00:18:57', 'Logout', 'DOT01'),
('2018-02-14 00:19:10', 'Login', 'DOT02'),
('2018-02-14 00:25:21', 'User Melakukan Absensi', 'DOT02'),
('2018-02-14 00:27:12', 'User Melakukan Absensi', 'DOT02'),
('2018-02-14 00:33:32', 'User Mengajukan Perizinan', 'DOT02'),
('2018-02-14 00:34:02', 'Login', 'DOT01'),
('2018-02-14 10:13:12', 'Login', 'DOT01'),
('2018-02-14 12:26:37', 'Logout', 'DOT01'),
('2018-02-14 12:26:45', 'Login', 'DOT01'),
('2018-02-14 12:37:40', 'Logout', 'DOT01'),
('2018-02-14 12:37:52', 'Login', 'DOT11'),
('2018-02-14 12:40:46', 'Logout', 'DOT11'),
('2018-02-14 12:40:50', 'Login', 'DOT01'),
('2018-02-14 12:41:55', 'Admin Mengubah Data Karyawan', 'DOT01'),
('2018-02-14 12:44:16', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-14 12:48:39', 'Logout', 'DOT01'),
('2018-02-14 12:48:50', 'Login', 'DOT12'),
('2018-02-14 12:49:03', 'Logout', 'DOT12'),
('2018-02-14 12:49:15', 'Login', 'DOT13'),
('2018-02-14 12:49:23', 'Logout', 'DOT13'),
('2018-02-14 12:49:45', 'Login', 'DOT11'),
('2018-02-14 12:50:08', 'Logout', 'DOT11'),
('2018-02-14 12:50:35', 'Login', 'DOT11'),
('2018-02-14 12:59:24', 'Logout', 'DOT11'),
('2018-02-14 12:59:51', 'Login', 'DOT02'),
('2018-02-14 13:00:00', 'User Melakukan Absensi Pulang', 'DOT02'),
('2018-02-14 13:00:32', 'Logout', 'DOT02'),
('2018-02-14 13:00:42', 'Login', 'DOT10'),
('2018-02-14 13:01:44', 'Logout', 'DOT10'),
('2018-02-14 13:02:28', 'Login', 'DOT02'),
('2018-02-14 13:02:46', 'Logout', 'DOT02'),
('2018-02-14 13:02:50', 'Login', 'DOT01'),
('2018-02-14 13:03:58', 'Login', 'DOT10'),
('2018-02-14 13:04:31', 'User Mengajukan Perizinan', 'DOT10'),
('2018-02-14 13:05:23', 'Logout', 'DOT01'),
('2018-02-14 13:05:47', 'Login', 'DOT11'),
('2018-02-14 13:09:06', 'Logout', 'DOT11'),
('2018-02-14 13:09:22', 'Login', 'DOT12'),
('2018-02-14 13:15:41', 'Admin Delete Daftar Persyaratan Recruitment Calon Karyawan', 'DOT12'),
('2018-02-14 13:18:16', 'Admin Delete Daftar Persyaratan Recruitment Calon Karyawan', 'DOT12'),
('2018-02-14 13:22:30', 'Admin Delete Daftar Persyaratan Recruitment Calon Karyawan', 'DOT12'),
('2018-02-14 13:22:34', 'Admin Delete Daftar Persyaratan Recruitment Calon Karyawan', 'DOT12'),
('2018-02-14 13:46:26', 'Logout', 'DOT12'),
('2018-02-14 13:46:38', 'Login', 'DOT01'),
('2018-02-14 13:49:19', 'Logout', 'DOT01'),
('2018-02-14 13:49:36', 'Login', 'DOT12'),
('2018-02-14 13:50:00', 'Logout', 'DOT12'),
('2018-02-14 13:51:36', 'Login', 'DOT01'),
('2018-02-14 14:12:19', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-14 14:15:01', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-14 14:18:22', 'Logout', 'DOT01'),
('2018-02-14 14:22:51', 'Login', 'DOT01'),
('2018-02-14 14:23:26', 'Admin Menambah Data Karyawan', 'DOT01'),
('2018-02-14 14:25:00', 'Logout', 'DOT01'),
('2018-02-14 14:25:10', 'Login', 'D99'),
('2018-02-14 14:26:47', 'Logout', 'D99'),
('2018-02-14 14:28:04', 'Login', 'DOT01'),
('2018-02-14 14:30:21', 'Logout', 'DOT01'),
('2018-02-14 14:42:11', 'Login', 'DOT01'),
('2018-02-14 14:43:17', 'Logout', 'DOT01'),
('2018-02-14 14:43:26', 'Login', 'DOT02'),
('2018-02-14 14:44:13', 'Logout', 'DOT02'),
('2018-02-14 14:44:22', 'Login', 'DOT10'),
('2018-02-14 14:45:11', 'Logout', 'DOT10'),
('2018-02-14 14:46:27', 'Login', 'DOT11'),
('2018-02-14 14:47:20', 'Logout', 'DOT11'),
('2018-02-14 14:47:31', 'Login', 'DOT13'),
('2018-02-14 14:47:59', 'Logout', 'DOT13'),
('2018-02-14 14:48:11', 'Login', 'DOT12'),
('2018-03-26 20:26:04', 'Login', 'DOT11'),
('2018-03-26 20:28:05', 'Login', 'DOT11'),
('2018-03-26 20:30:14', 'Login', 'DOT11'),
('2018-03-26 20:31:44', 'Login', 'DOT11'),
('2018-03-26 20:44:19', 'Logout', 'DOT11'),
('2018-03-27 18:22:00', 'Login', 'DOT11'),
('2018-03-27 18:24:51', 'Logout', 'DOT11'),
('2018-03-27 18:25:02', 'Login', 'DOT02'),
('2018-03-27 18:27:43', 'Logout', 'DOT02'),
('2018-03-27 18:27:51', 'Login', 'DOT02'),
('2018-03-27 18:48:18', 'Logout', 'DOT02'),
('2018-03-27 18:48:29', 'Login', 'DOT11'),
('2018-03-27 20:55:34', 'Login', 'DOT01'),
('2018-03-27 20:55:51', 'Logout', 'DOT01'),
('2018-03-27 20:56:00', 'Login', 'DOT11'),
('2018-03-27 20:56:06', 'Logout', 'DOT11'),
('2018-03-27 20:57:26', 'Login', 'DOT01'),
('2018-03-27 20:58:40', 'Logout', 'DOT01'),
('2018-03-27 20:58:49', 'Login', 'DOT11'),
('2018-03-31 20:13:48', 'Login', 'DOT11'),
('2018-03-31 20:16:29', 'Admin Mengunjungi Detail Barang', 'DOT11'),
('2018-03-31 20:17:24', 'Admin Mengunjungi Detail Barang', 'DOT11'),
('2018-03-31 20:33:21', 'Logout', 'DOT11'),
('2018-03-31 20:33:55', 'Login', 'DOT02'),
('2018-03-31 20:36:58', 'Logout', 'DOT02'),
('2018-03-31 20:37:06', 'Login', 'DOT10'),
('2018-03-31 20:39:31', 'Admin Mengunjungi Detail Barang', 'DOT10'),
('2018-03-31 20:42:30', 'User Menambahkan RAB', 'DOT10'),
('2018-03-31 21:16:21', 'Logout', 'DOT10'),
('2018-03-31 21:17:14', 'Login', 'DOT02'),
('2018-04-01 08:12:07', 'User Menambahkan RAB', 'DOT02'),
('2018-04-01 08:13:28', 'User Menambahkan RAB', 'DOT02'),
('2018-04-01 08:14:30', 'User Menambahkan RAB', 'DOT02'),
('2018-04-01 08:18:32', 'User Menambahkan RAB', 'DOT02'),
('2018-04-02 07:29:45', 'Login', 'DOT02'),
('2018-04-12 13:26:45', 'Login', 'DOT02'),
('2018-04-19 11:06:21', 'Login', 'DOT02'),
('2018-04-19 11:19:36', 'Logout', 'DOT02'),
('2018-04-19 11:19:50', 'Login', 'DOT01'),
('2018-04-19 11:20:40', 'Logout', 'DOT01'),
('2018-04-19 11:20:50', 'Login', 'DOT02'),
('2018-04-20 10:06:49', 'Login', 'DOT02'),
('2018-04-20 10:11:19', 'User Menambahkan RAB', 'DOT02'),
('2018-04-20 10:18:15', 'Logout', 'DOT02'),
('2018-04-20 10:18:24', 'Login', 'DOT01'),
('2018-04-20 10:33:42', 'Logout', 'DOT01'),
('2018-04-20 10:33:50', 'Login', 'DOT02'),
('2018-04-20 10:40:17', 'Logout', 'DOT02'),
('2018-04-20 10:40:28', 'Login', 'DOT01'),
('2018-04-20 17:26:09', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 17:58:18', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 17:59:12', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:01:29', 'Logout', 'DOT01'),
('2018-04-20 18:01:38', 'Login', 'DOT02'),
('2018-04-20 18:18:37', 'Logout', 'DOT02'),
('2018-04-20 18:18:47', 'Login', 'DOT01'),
('2018-04-20 18:19:58', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:20:38', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:34:58', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:35:05', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:37:39', 'Logout', 'DOT01'),
('2018-04-20 18:37:59', 'Login', 'DOT02'),
('2018-04-20 18:39:07', 'User Menambahkan RAB', 'DOT02'),
('2018-04-20 18:39:20', 'Logout', 'DOT02'),
('2018-04-20 18:39:30', 'Login', 'DOT01'),
('2018-04-20 18:39:47', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:40:51', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:41:39', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:43:16', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:44:04', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:46:01', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:46:21', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:50:16', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:55:14', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:57:37', 'User Menambahkan RAB', 'DOT01'),
('2018-04-20 18:58:12', 'Logout', 'DOT01'),
('2018-04-20 18:58:19', 'Login', 'DOT02'),
('2018-04-21 17:32:08', 'Login', 'DOT02'),
('2018-04-21 18:59:16', 'User Menambahkan RAB', 'DOT02'),
('2018-04-21 19:02:16', 'User Menambahkan RAB', 'DOT02'),
('2018-04-21 19:26:35', 'Logout', 'DOT02'),
('2018-04-21 19:26:44', 'Login', 'DOT01'),
('2018-04-21 19:28:57', 'User Menambahkan RAB', 'DOT01'),
('2018-04-21 19:29:03', 'Logout', 'DOT01'),
('2018-04-21 19:29:10', 'Login', 'DOT02'),
('2018-04-22 09:21:59', 'Login', 'DOT02'),
('2018-04-22 20:46:39', 'Logout', ''),
('2018-04-22 20:46:51', 'Login', 'DOT02'),
('2018-04-23 20:16:51', 'Login', 'DOT02'),
('2018-04-24 21:54:16', 'Login', 'DOT02'),
('2018-04-24 22:29:05', 'Logout', 'DOT02'),
('2018-04-24 22:29:28', 'Login', 'DOT01'),
('2018-04-24 23:06:07', 'Logout', 'DOT01'),
('2018-04-24 23:06:13', 'Login', 'DOT02'),
('2018-04-24 23:06:27', 'Logout', 'DOT02'),
('2018-04-24 23:06:37', 'Login', 'DOT01'),
('2018-04-24 23:16:53', 'Logout', 'DOT01'),
('2018-04-25 10:42:40', 'Login', 'DOT02'),
('2018-04-25 11:17:51', 'Login', 'DOT02'),
('2018-04-25 11:19:02', 'User Menambahkan RAB', 'DOT02'),
('2018-04-25 11:19:58', 'Logout', 'DOT02'),
('2018-04-25 11:20:06', 'Login', 'DOT01'),
('2018-04-25 11:20:23', 'User Menambahkan RAB', 'DOT01'),
('2018-04-25 11:20:32', 'User Menambahkan RAB', 'DOT01'),
('2018-04-25 11:20:37', 'Logout', 'DOT01'),
('2018-04-25 11:20:45', 'Login', 'DOT02'),
('2018-04-25 11:22:43', 'Logout', 'DOT02'),
('2018-04-25 11:22:53', 'Login', 'DOT01'),
('2018-04-25 11:23:05', 'Logout', 'DOT01'),
('2018-04-25 11:23:12', 'Login', 'DOT02'),
('2018-04-25 14:54:09', 'Login', 'DOT02'),
('2018-04-25 14:56:13', 'User Menambahkan RAB', 'DOT02'),
('2018-04-25 14:58:20', 'Login', 'DOT01'),
('2018-04-25 15:01:16', 'Logout', 'DOT01'),
('2018-04-25 15:01:58', 'Login', 'DOT01'),
('2018-04-26 13:22:55', 'Login', 'DOT02'),
('2018-04-26 14:24:00', 'Logout', 'DOT02'),
('2018-04-26 14:24:11', 'Login', 'DOT01'),
('2018-04-28 10:56:38', 'Login', 'DOT02'),
('2018-04-29 08:57:02', 'Login', 'DOT02'),
('2018-04-29 08:57:03', 'Login', 'DOT02'),
('2018-04-30 20:20:54', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 20:21:08', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 20:21:19', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 20:21:29', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 20:28:53', 'Logout', 'DOT02'),
('2018-04-30 20:29:02', 'Login', 'DOT01'),
('2018-04-30 21:17:57', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:20:34', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:23:40', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:29:57', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:30:51', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:32:20', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:32:35', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:39:17', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:39:25', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:40:01', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:40:07', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:40:13', 'Logout', 'DOT01'),
('2018-04-30 21:40:21', 'Login', 'DOT02'),
('2018-04-30 21:48:09', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 21:48:54', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 21:49:18', 'Logout', 'DOT02'),
('2018-04-30 21:49:27', 'Login', 'DOT01'),
('2018-04-30 21:50:34', 'Logout', 'DOT01'),
('2018-04-30 21:50:42', 'Login', 'DOT02'),
('2018-04-30 21:50:54', 'Logout', 'DOT02'),
('2018-04-30 21:51:02', 'Login', 'DOT01'),
('2018-04-30 21:52:28', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 21:52:40', 'Logout', 'DOT01'),
('2018-04-30 21:52:48', 'Login', 'DOT02'),
('2018-04-30 22:08:54', 'User Menambahkan RAB', 'DOT02'),
('2018-04-30 22:09:14', 'Logout', 'DOT02'),
('2018-04-30 22:09:25', 'Login', 'DOT01'),
('2018-04-30 22:09:41', 'User Menambahkan RAB', 'DOT01'),
('2018-04-30 22:11:36', 'Logout', 'DOT01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `id_kategoribarang` varchar(20) NOT NULL,
  `id_jenisbarang` varchar(20) NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `merk_barang` varchar(25) NOT NULL,
  `type_barang` varchar(25) NOT NULL,
  `warna_barang` varchar(25) NOT NULL,
  `kondisi_barang` enum('Baik','Rusak') NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `foto_barang` varchar(25) NOT NULL,
  `tgl_beli` date NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategoribarang`, `id_jenisbarang`, `jumlah_barang`, `merk_barang`, `type_barang`, `warna_barang`, `kondisi_barang`, `id_lokasi`, `foto_barang`, `tgl_beli`, `create_at`) VALUES
('BRG01', 'Android', 'KB1', 'JB2', 1, 'Samsung', 'J3', 'Putih', 'Baik', 'LOK1', '0', '2018-01-09', '0000-00-00 00:00:00'),
('BRG02', 'Laptop', 'KB1', 'JB2', 1, 'Asus', 'G40', 'Hitam', 'Baik', 'LOK2', 'laptop.jpg', '2018-01-13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_barangkeluar` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `jumlah_barang` int(20) NOT NULL,
  `merk_barang` varchar(25) NOT NULL,
  `type_barang` varchar(25) NOT NULL,
  `warna_barang` varchar(25) NOT NULL,
  `kondisi_barang` varchar(25) NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_barangkeluar`, `id_barang`, `jumlah_barang`, `merk_barang`, `type_barang`, `warna_barang`, `kondisi_barang`, `id_lokasi`, `tgl_keluar`, `keterangan`) VALUES
('BK02', 'BRG02', 1, 'Samsung', 'Android - J3', 'Putih', 'Baik', 'LOK1', '2018-01-31', 'pecah'),
('BK03', 'BRG02', 1, 'Asus', 'G40', 'Hitam', 'Rusak', 'LOK1', '2018-01-31', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bonus`
--

CREATE TABLE `bonus` (
  `id_bonus` varchar(20) NOT NULL,
  `keterangan` char(30) NOT NULL,
  `gaji_bonus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bonus`
--

INSERT INTO `bonus` (`id_bonus`, `keterangan`, `gaji_bonus`) VALUES
('BON1', 'Launching', 500000),
('BON2', 'Luar Kota', 1000000),
('BON3', '-', 0),
('BON4', 'oyi', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonkaryawanbaru`
--

CREATE TABLE `calonkaryawanbaru` (
  `id_pendaftar` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_menikah` enum('Menikah','Belum Menikah') NOT NULL,
  `no_hp` char(15) NOT NULL,
  `keahlian` varchar(20) NOT NULL,
  `pengalaman_kerja` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `surat_lamaran` varchar(30) NOT NULL,
  `status_pegawai` varchar(20) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calonkaryawanbaru`
--

INSERT INTO `calonkaryawanbaru` (`id_pendaftar`, `nama`, `alamat`, `jenis_kelamin`, `pendidikan`, `tempat_lahir`, `tanggal_lahir`, `status_menikah`, `no_hp`, `keahlian`, `pengalaman_kerja`, `jabatan`, `surat_lamaran`, `status_pegawai`, `foto`) VALUES
('PENDOT1', 'A. Dhiyaul Asikin', 'kel.kurotejo gg 1 no 7 Tuban', 'Laki-laki', 'PEN03', 'Tuban', '1996-10-24', 'Belum Menikah', '085707766742', 'Web Developer', 'Frontend Developer', 'JAB03', 'Niken-Administrasi.en.id.pdf', 'STA01', '1472206885829.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_bonus`
--

CREATE TABLE `detail_bonus` (
  `id_karyawan` varchar(20) NOT NULL,
  `id_bonus` varchar(20) NOT NULL,
  `tanggal_penurunanbonus` date NOT NULL,
  `karyawan_id_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_gaji_pokok`
--

CREATE TABLE `detail_gaji_pokok` (
  `id_gajipokok` varchar(20) NOT NULL,
  `tanggal_penururnangaji` date NOT NULL,
  `id_karyawan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_gaji_tunjangan`
--

CREATE TABLE `detail_gaji_tunjangan` (
  `id_karyawan` varchar(20) NOT NULL,
  `id_tunjangan` varchar(20) NOT NULL,
  `tanggal_penurunantunjangan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_gaji_tunjangan`
--

INSERT INTO `detail_gaji_tunjangan` (`id_karyawan`, `id_tunjangan`, `tanggal_penurunantunjangan`) VALUES
('DO03', 'TUN02', '0000-00-00'),
('DO03', 'TUN01', '0000-00-00'),
('DOT05', 'TUN02', '0000-00-00'),
('DO04', 'TUN01', '0000-00-00'),
('KD059', 'TUN02', '0000-00-00'),
('DOT01', 'TUN3', '0000-00-00'),
('DOT01', 'TUN3', '0000-00-00'),
('DOT01', 'TUN3', '0000-00-00'),
('DOT03', 'TUN3', '0000-00-00'),
('DOT06', 'TUN3', '0000-00-00'),
('DOT01', 'TUN3', '0000-00-00'),
('DOT01', 'TUN3', '0000-00-00'),
('DOT10', 'TUN02', '0000-00-00'),
('DOT10', 'TUN3', '0000-00-00'),
('DOT11', 'TUN02', '0000-00-00'),
('DOT01', 'TUN02', '0000-00-00'),
('DOT01', 'TUN02', '0000-00-00'),
('DOT01', 'TUN02', '0000-00-00'),
('dsdsddsdsdsasdsdsd', 'TUN02', '0000-00-00'),
('asdf', 'TUN02', '0000-00-00'),
('123', 'TUN3', '0000-00-00'),
('DOT02', 'TUN3', '0000-00-00'),
('DOT12', 'TUN02', '0000-00-00'),
('002', 'TUN02', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_menikah`
--

CREATE TABLE `detail_menikah` (
  `id_pasangan` varchar(20) NOT NULL,
  `id_anak` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `total_pasangan` char(30) NOT NULL,
  `total_anak` char(30) NOT NULL,
  `kartu_keluarga` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tunjanganmakan`
--

CREATE TABLE `detail_tunjanganmakan` (
  `cd` int(11) NOT NULL,
  `id_tunjangan` varchar(20) NOT NULL,
  `gaji_tunjangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` varchar(5) NOT NULL,
  `id_proyek` varchar(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `attachment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_proyek`, `judul`, `attachment`) VALUES
('DOK01', 'PRO01', 'FSD Dokumen', '9k.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_kontrak`
--

CREATE TABLE `dokumen_kontrak` (
  `id_kontrak` varchar(20) NOT NULL,
  `id_pendaftar` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `tanda_terima_kontrak` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` varchar(5) NOT NULL,
  `id_proyek` varchar(5) NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_pengerjaan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_gaji` varchar(20) NOT NULL,
  `tanggalperiode` date NOT NULL,
  `tanggal_periode` date NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_gajipokok` varchar(20) NOT NULL,
  `id_tunjangan` varchar(20) NOT NULL,
  `id_bonus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji_karyawan`
--

INSERT INTO `gaji_karyawan` (`id_gaji`, `tanggalperiode`, `tanggal_periode`, `id_karyawan`, `id_gajipokok`, `id_tunjangan`, `id_bonus`) VALUES
('GK02', '2018-01-01', '2018-01-31', 'DOT01', 'GAPD01', 'TUN02', 'BON3'),
('GK04', '2018-01-01', '2018-01-31', 'DOT02', 'GAPD01', 'TUN02', 'BON3'),
('GK07', '2018-02-01', '2018-02-28', 'DOT10', 'GAPD01', 'TUN02', 'BON1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji_pokok`
--

CREATE TABLE `gaji_pokok` (
  `id_gajipokok` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `lama_kerja` varchar(30) NOT NULL,
  `waktu` enum('Bulan','Tahun') NOT NULL,
  `status_karyawan` enum('Kontrak','Tetap') NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji_pokok`
--

INSERT INTO `gaji_pokok` (`id_gajipokok`, `jabatan`, `pendidikan_terakhir`, `lama_kerja`, `waktu`, `status_karyawan`, `gaji`) VALUES
('GAPD01', 'JAB04', 'PEN03', '1', 'Bulan', 'Kontrak', 2000000),
('GAPD02', 'JAB03', 'PEN04', '1', 'Tahun', 'Kontrak', 2000000),
('GAPS01', 'JAB01', 'PEN01', '1', 'Bulan', 'Kontrak', 2000000),
('GP1', 'JAB01', 'D3', '2', '', 'Kontrak', 4000000),
('GP2', 'JAB02', 'D3', '2', 'Tahun', 'Kontrak', 3500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `garansi`
--

CREATE TABLE `garansi` (
  `id_proyek` varchar(5) NOT NULL,
  `waktu_garansi` varchar(50) NOT NULL,
  `akhir_garansi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `garansi`
--

INSERT INTO `garansi` (`id_proyek`, `waktu_garansi`, `akhir_garansi`) VALUES
('PRO01', '1 Tahun', '2019-01-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(20) NOT NULL,
  `nama_jabatan` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
('JAB01', 'Backend Developer'),
('JAB02', 'Quality Assurance'),
('JAB03', 'Frontend Developer'),
('JAB04', 'Android Developer'),
('JAB05', 'IOS Developer'),
('JAB06', 'Project Manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenisbarang` varchar(20) NOT NULL,
  `nama_jenisbarang` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenisbarang`, `nama_jenisbarang`, `keterangan`) VALUES
('JB1', 'Habis Pakai', ''),
('JB2', 'Tidak Habis Pakai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pengajuan`
--

CREATE TABLE `jenis_pengajuan` (
  `id_jenispengajuan` varchar(20) NOT NULL,
  `nama_jenispengajuan` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pengajuan`
--

INSERT INTO `jenis_pengajuan` (`id_jenispengajuan`, `nama_jenispengajuan`, `keterangan`) VALUES
('JP01', 'Individu', ''),
('JP02', 'Proyek', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` varchar(20) NOT NULL,
  `nama_kabupaten` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` varchar(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_jabatan` varchar(20) NOT NULL,
  `id_tunjangan` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL,
  `status_menikah` enum('Menikah','Belum Menikah') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `username`, `password`, `id_role`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `alamat`, `email`, `id_jabatan`, `id_tunjangan`, `pendidikan`, `tanggal_mulai_kerja`, `status_menikah`, `created_at`) VALUES
('D99', 'dinung', '1bc29b36f623ba82aaf6724fd3b16718', 'Role2', 'Dinung', '', '0000-00-00', 'Laki-laki', '', '', '', 'JAB04', '', 'PEN01', '0000-00-00', 'Menikah', '0000-00-00 00:00:00'),
('DOT01', 'nikenwp', '7c7b92ced09c7523d9403bb8c023bbae', 'Role4', 'Niken Widowati Putri', 'Purworejo', '1997-06-21', 'Perempuan', '081252687352', 'Purworejo', 'nikenwidowatiputri@gmail.com', 'JAB02', '', 'PEN03', '2018-01-01', 'Belum Menikah', '0000-00-00 00:00:00'),
('DOT02', 'toni', 'f0404aa57b818a46187eb9019eba07f1', 'Role3', 'Ahmad Fatoni', 'Probolinggo', '1994-09-15', 'Laki-laki', '085745853563', 'Paiton, Probolinggo', 'fatoniahmad.mail@gmail.com', 'JAB01', '', 'PEN03', '2017-10-15', 'Belum Menikah', '0000-00-00 00:00:00'),
('DOT10', 'iskakp', '500ff5a990ecd0ddba491470b1b9d61f', 'Role2', 'Iskak Purnomo', 'Batu', '2018-01-19', 'Laki-laki', '123456765432', 'Batu', 'iskakpurnomo@gmail.com', 'JAB03', '', 'PEN01', '2018-01-23', 'Belum Menikah', '0000-00-00 00:00:00'),
('DOT11', 'richap', '148e3ef7d9623118d9c8ae3f93705d8f', 'Role1', 'Richa Purbi', 'Malang', '2018-07-30', 'Perempuan', '087654321456', 'Malang', 'richapurbi@gmail.com', 'JAB02', '', 'PEN03', '2018-01-04', 'Belum Menikah', '0000-00-00 00:00:00'),
('DOT12', 'asikin', 'dcc584da2ae1776c7954e12e2acc3204', 'Role1', 'A Dhiyaul Asikin', 'Tuban', '1996-10-24', 'Laki-laki', '085707766742', 'Tuban', 'asikinaul@gmail.com', 'JAB04', '', 'PEN03', '2018-02-01', 'Menikah', '0000-00-00 00:00:00'),
('DOT13', 'nafil', '7d135391b7de3c6ecef6d7eeff2cab49', 'Role1', 'Moch Nafilul Mubin', 'Malang', '1997-07-30', 'Laki-laki', '085655580017', 'Jalan Akordion', 'mnafilul@gmail.com', 'JAB04', '', 'PEN01', '2018-02-01', 'Menikah', '0000-00-00 00:00:00'),
('DOT14', 'igga', '4a5af073a89befc171282bbe5970cb', '', 'Hanifa Igga', 'Tulungagung', '2018-01-01', 'Perempuan', '123456789', 'Malang', 'igga', 'JAB04', '', 'PEN08', '2018-02-15', 'Menikah', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategoribarang` varchar(20) NOT NULL,
  `nama_kategoribarang` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategoribarang`, `nama_kategoribarang`, `keterangan`) VALUES
('KB1', 'Elektronik', ''),
('KB2', 'Non-Elektronik', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_perizinan`
--

CREATE TABLE `kategori_perizinan` (
  `id_kategori` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_perizinan`
--

INSERT INTO `kategori_perizinan` (`id_kategori`, `kategori`) VALUES
('KAT1', 'Izin'),
('KAT2', 'Cuti'),
('KAT3', 'Remote');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` varchar(20) NOT NULL,
  `nama_kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` varchar(20) NOT NULL,
  `nama_lokasi` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `keterangan`) VALUES
('LOK1', 'Ruang Meeting', ''),
('LOK2', 'Ruang Tengah', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasangan`
--

CREATE TABLE `pasangan` (
  `id_pasangan` varchar(20) NOT NULL,
  `nama_pasangan` char(30) NOT NULL,
  `akte_kelahiran` varchar(30) NOT NULL,
  `surat_nikah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(20) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `qty_peminjaman` int(20) NOT NULL,
  `kondisi_barang` enum('Baik','Rusak') NOT NULL,
  `merk_barang` varchar(25) NOT NULL,
  `type_barang` varchar(25) NOT NULL,
  `warna_barang` varchar(25) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `status` enum('Dipinjam','Dikembalikan') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_karyawan`, `tgl_peminjaman`, `qty_peminjaman`, `kondisi_barang`, `merk_barang`, `type_barang`, `warna_barang`, `id_barang`, `status`, `created_at`) VALUES
('PMJ02', 'DOT03', '2018-01-03', 1, 'Baik', 'Samsung', 'J3', 'Putih', 'BRG01', '', '0000-00-00 00:00:00'),
('PMJ04', 'DOT10', '2018-01-31', 1, 'Baik', 'Asus', 'G40', 'Hitam', 'BRG01', 'Dipinjam', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` varchar(20) NOT NULL,
  `graduate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `graduate`) VALUES
('PEN01', 'D1'),
('PEN02', 'D2'),
('PEN03', 'D3'),
('PEN04', 'S1'),
('PEN05', 'S2'),
('PEN06', 'S3'),
('PEN07', 'SMA'),
('PEN08', 'SMK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` varchar(20) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_rab` varchar(20) NOT NULL,
  `nama_pengajuan` varchar(25) NOT NULL,
  `biaya` int(20) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `status_pengajuan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_karyawan`, `id_rab`, `nama_pengajuan`, `biaya`, `alasan`, `tgl_pengajuan`, `status_pengajuan`) VALUES
('PGN01', 'DOT02', 'RAB3', 'bensin', 10000, 'urgent bos', '2018-04-25', 'Dicairkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(20) NOT NULL,
  `id_peminjaman` varchar(20) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `qty_pengembalian` int(20) NOT NULL,
  `kondisi_barang` enum('Baik','Rusak') NOT NULL,
  `id_lokasi` varchar(20) NOT NULL,
  `merk_barang` varchar(25) NOT NULL,
  `type_barang` varchar(25) NOT NULL,
  `warna_barang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `id_karyawan`, `id_barang`, `tgl_pengembalian`, `qty_pengembalian`, `kondisi_barang`, `id_lokasi`, `merk_barang`, `type_barang`, `warna_barang`) VALUES
('PGN01', 'PMJ04', 'DOT10', 'BRG01', '2018-02-03', 1, 'Baik', 'LOK1', 'Asus', 'G40', 'Hitam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengerjaan`
--

CREATE TABLE `pengerjaan` (
  `id_proyek` varchar(5) NOT NULL,
  `tim` varchar(500) NOT NULL,
  `mulai_pengerjaan` datetime NOT NULL,
  `akhir_pengerjaan` datetime NOT NULL,
  `id_status` varchar(5) NOT NULL,
  `progress` varchar(500) NOT NULL,
  `hambatan` varchar(500) NOT NULL,
  `id_pengerjaan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perizinan`
--

CREATE TABLE `perizinan` (
  `idp` int(11) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `lama` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perizinan`
--

INSERT INTO `perizinan` (`idp`, `id_karyawan`, `id_kategori`, `tanggal_pengajuan`, `tanggal_mulai`, `tanggal_selesai`, `lama`, `keterangan`, `attachment`, `status`, `created_at`) VALUES
(2, 'DOT03', 'KAT2', '2018-01-30', '2018-01-31', '2018-01-31', '1', 'Menikah', '', 'pending', '0000-00-00 00:00:00'),
(3, 'DOT02', 'KAT3', '2018-01-01', '2018-01-02', '2018-01-03', '1', '1', '1466176673651.jpg', 'approved', '0000-00-00 00:00:00'),
(4, 'DOT02', 'KAT1', '2018-02-01', '2018-02-02', '2018-02-03', '1', 'Sakit', '1472207627488.png', 'pending', '0000-00-00 00:00:00'),
(5, 'DOT02', 'KAT1', '2018-02-15', '2018-02-16', '2018-02-17', '1', 'Nikah', 'laptop.jpg', 'pending', '0000-00-00 00:00:00'),
(6, 'DOT10', 'KAT1', '2018-02-07', '2018-02-08', '2018-02-09', '1', 'rabi', '', 'pending', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratanrekruitmen`
--

CREATE TABLE `persyaratanrekruitmen` (
  `id_recruitment` char(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persyaratanrekruitmen`
--

INSERT INTO `persyaratanrekruitmen` (`id_recruitment`, `keterangan`, `attachment`, `created_at`) VALUES
('as', 'sdd', '', '2018-02-14 13:25:33'),
('sa', 'asa', '', '2018-02-14 13:26:24'),
('sasa', 'asa', '', '2018-02-14 13:27:01'),
('sd', 'dsds', '', '2018-02-14 13:29:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `progress`
--

CREATE TABLE `progress` (
  `id_proyek` varchar(5) NOT NULL,
  `nama_fitur` varchar(50) NOT NULL,
  `id_status` varchar(5) NOT NULL,
  `prosentase` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(20) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` varchar(5) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `report` varchar(100) NOT NULL,
  `beban` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `nama_proyek`, `report`, `beban`) VALUES
('PRO01', 'Emas Digi', 'aa', 2),
('PRO02', 'KPI Online', 'rr', 56),
('PRO03', 'SMI-KMS', '', 0),
('PRO04', 'Raja Pindah', '', 52);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rab`
--

CREATE TABLE `rab` (
  `id_rab` varchar(20) NOT NULL,
  `id_proyek` varchar(5) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `attachment` varchar(250) NOT NULL,
  `jumlah_pengajuan` int(20) NOT NULL,
  `jumlah_disetujui` int(20) NOT NULL,
  `periode` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rab`
--

INSERT INTO `rab` (`id_rab`, `id_proyek`, `id_karyawan`, `attachment`, `jumlah_pengajuan`, `jumlah_disetujui`, `periode`, `keterangan`) VALUES
('RAB1', 'PRO03', 'DOT02', '', 10010000, 0, '2018-04-20', 'Approved'),
('RAB2', 'PRO01', 'DOT02', '', 1000000, 0, '2018-04-18', 'Approved'),
('RAB3', 'PRO04', 'DOT02', '', 15000, 0, '2018-04-17', 'Draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rab_detail`
--

CREATE TABLE `rab_detail` (
  `id_det` int(20) NOT NULL,
  `id_rab` varchar(20) NOT NULL,
  `nama_anggaran` varchar(50) NOT NULL,
  `nominal` int(20) NOT NULL,
  `status` varchar(25) NOT NULL,
  `catatan` text,
  `keterangan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rab_detail`
--

INSERT INTO `rab_detail` (`id_det`, `id_rab`, `nama_anggaran`, `nominal`, `status`, `catatan`, `keterangan`) VALUES
(41, 'RAB1', 'tv', 12345, 'Disetujui', '', '-'),
(42, 'RAB2', 'awdawda', 1312313, 'Disetujui', 'asaacad', '-'),
(43, 'RAB1', 'hp', 12345, 'Disetujui', '', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana`
--

CREATE TABLE `rencana` (
  `id_rencana` varchar(5) NOT NULL,
  `id_proyek` varchar(5) NOT NULL,
  `lingkup` varchar(255) NOT NULL,
  `sasaran` varchar(255) NOT NULL,
  `permasalahan` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `biaya` int(50) NOT NULL,
  `pelaksanaan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rencana`
--

INSERT INTO `rencana` (`id_rencana`, `id_proyek`, `lingkup`, `sasaran`, `permasalahan`, `metode`, `biaya`, `pelaksanaan`) VALUES
('REN01', 'PRO01', 'Membuat sistem aplikasi jual beli emas berbasis web dan mobile', 'Memudahkan jual beli emas', 'Harga emas jarang diketahui', 'Scrum', 900000000, 9),
('REN02', 'PRO04', 'Membuat aplikasi pindah barang berbasis mobile', 'Memudahkan dalam memindahkan barang', 'Kesulitan meminjam jasa untuk pindah barang', 'Scrum', 500000000, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id_role` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id_role`, `name`) VALUES
('Role1', 'Admin'),
('Role2', 'Karyawan'),
('Role3', 'Project Manager'),
('Role4', 'Manajemen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id_satuan` varchar(20) NOT NULL,
  `nama_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id_satuan`, `nama_satuan`) VALUES
('SAT01', 'buah'),
('SAT02', 'Rupiah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` varchar(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `prosentase` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`, `prosentase`) VALUES
('STA01', 'Backlog', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pegawai`
--

CREATE TABLE `status_pegawai` (
  `id_statusp` varchar(20) NOT NULL,
  `keterangan` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pegawai`
--

INSERT INTO `status_pegawai` (`id_statusp`, `keterangan`) VALUES
('STA01', 'Pengecekan Data/cv'),
('STA02', 'Pre Test'),
('STA03', 'TPA test'),
('STA04', 'User Interview+Technical Test'),
('STA05', 'Interview Direksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id_test` varchar(20) NOT NULL,
  `id_pendaftar` varchar(20) NOT NULL,
  `id_statusp` varchar(20) NOT NULL,
  `jenis_test` varchar(20) NOT NULL,
  `point_test` char(30) NOT NULL,
  `pengumuman` varchar(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id_proyek` varchar(5) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `beban` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id_proyek`, `id_karyawan`, `beban`) VALUES
('PRO01', 'DOT02', 0),
('PRO04', 'DOT10', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tunjangan`
--

CREATE TABLE `tunjangan` (
  `id_tunjangan` varchar(20) NOT NULL,
  `jenis_tunjangan` varchar(30) NOT NULL,
  `gaji_tunjangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tunjangan`
--

INSERT INTO `tunjangan` (`id_tunjangan`, `jenis_tunjangan`, `gaji_tunjangan`) VALUES
('TUN02', 'Keluarga', 1000000),
('TUN09', 'mamam', 30000),
('TUN3', 'Tidak Ada', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`cd`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD KEY `kota` (`kota`,`kabupaten`,`provinsi`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `kabupaten` (`kabupaten`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `audit_trails`
--
ALTER TABLE `audit_trails`
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategoribarang` (`id_kategoribarang`),
  ADD KEY `id_jenisbarang` (`id_jenisbarang`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_barangkeluar`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`id_bonus`);

--
-- Indexes for table `calonkaryawanbaru`
--
ALTER TABLE `calonkaryawanbaru`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `jabatan` (`jabatan`),
  ADD KEY `status_menikah` (`status_menikah`,`status_pegawai`),
  ADD KEY `status_pegawai` (`status_pegawai`),
  ADD KEY `pendidikan` (`pendidikan`);

--
-- Indexes for table `detail_bonus`
--
ALTER TABLE `detail_bonus`
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_bonus` (`id_bonus`);

--
-- Indexes for table `detail_gaji_pokok`
--
ALTER TABLE `detail_gaji_pokok`
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_gajipokok` (`id_gajipokok`);

--
-- Indexes for table `detail_gaji_tunjangan`
--
ALTER TABLE `detail_gaji_tunjangan`
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_tunjangan` (`id_tunjangan`);

--
-- Indexes for table `detail_menikah`
--
ALTER TABLE `detail_menikah`
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `total_pasangan` (`total_pasangan`),
  ADD KEY `total_anak` (`total_anak`),
  ADD KEY `id_pasangan` (`id_pasangan`);

--
-- Indexes for table `detail_tunjanganmakan`
--
ALTER TABLE `detail_tunjanganmakan`
  ADD KEY `id_absensi` (`cd`),
  ADD KEY `id_tunjangan` (`id_tunjangan`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `dokumen_kontrak`
--
ALTER TABLE `dokumen_kontrak`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `id_pendaftar` (`id_pendaftar`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`),
  ADD KEY `id_proyek` (`id_proyek`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_gajipokok` (`id_gajipokok`),
  ADD KEY `id_tunjangan` (`id_tunjangan`),
  ADD KEY `id_bonus` (`id_bonus`);

--
-- Indexes for table `gaji_pokok`
--
ALTER TABLE `gaji_pokok`
  ADD PRIMARY KEY (`id_gajipokok`),
  ADD KEY `jabatan` (`jabatan`);

--
-- Indexes for table `garansi`
--
ALTER TABLE `garansi`
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD UNIQUE KEY `id_jenisbarang` (`id_jenisbarang`);

--
-- Indexes for table `jenis_pengajuan`
--
ALTER TABLE `jenis_pengajuan`
  ADD PRIMARY KEY (`id_jenispengajuan`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_tunjangan` (`id_tunjangan`),
  ADD KEY `pendidikan` (`pendidikan`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategoribarang`);

--
-- Indexes for table `kategori_perizinan`
--
ALTER TABLE `kategori_perizinan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pasangan`
--
ALTER TABLE `pasangan`
  ADD PRIMARY KEY (`id_pasangan`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_rab` (`id_rab`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  ADD PRIMARY KEY (`id_pengerjaan`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_status_2` (`id_status`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`idp`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD KEY `id_proyek` (`id_proyek`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `rab`
--
ALTER TABLE `rab`
  ADD PRIMARY KEY (`id_rab`),
  ADD KEY `id_proyek` (`id_proyek`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `rab_detail`
--
ALTER TABLE `rab_detail`
  ADD PRIMARY KEY (`id_det`);

--
-- Indexes for table `rencana`
--
ALTER TABLE `rencana`
  ADD PRIMARY KEY (`id_rencana`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_pegawai`
--
ALTER TABLE `status_pegawai`
  ADD PRIMARY KEY (`id_statusp`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_statusp` (`id_statusp`),
  ADD KEY `id_karyawan` (`id_pendaftar`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD KEY `id_proyek` (`id_proyek`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `tunjangan`
--
ALTER TABLE `tunjangan`
  ADD PRIMARY KEY (`id_tunjangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rab_detail`
--
ALTER TABLE `rab_detail`
  MODIFY `id_det` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`id_provinsi`),
  ADD CONSTRAINT `alamat_ibfk_2` FOREIGN KEY (`kota`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `alamat_ibfk_3` FOREIGN KEY (`kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
