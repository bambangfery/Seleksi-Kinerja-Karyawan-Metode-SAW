-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 06. Desember 2014 jam 05:57
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kinerja_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `name`, `password`) VALUES
('2011141250', 'bambang', '123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` int(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jenjang_pendidikan` varchar(20) NOT NULL,
  `C1` int(2) NOT NULL,
  `C2` int(2) NOT NULL,
  `C3` int(2) NOT NULL,
  `C4` int(2) NOT NULL,
  `C5` int(2) NOT NULL,
  `C6` int(2) NOT NULL,
  `n_c1` double NOT NULL,
  `n_c2` double NOT NULL,
  `n_c3` double NOT NULL,
  `n_c4` double NOT NULL,
  `n_c5` double NOT NULL,
  `n_c6` double NOT NULL,
  `V` double NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_karyawan`, `tgl_lahir`, `alamat`, `jabatan`, `jenjang_pendidikan`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `n_c1`, `n_c2`, `n_c3`, `n_c4`, `n_c5`, `n_c6`, `V`) VALUES
(2011141250, 'Bambang', '1993-07-29', 'bsd city', 'staff TI', 'strata 1', 5, 5, 5, 4, 4, 4, 1, 1, 1, 1, 1, 1, 1),
(2011141255, 'HARIS', '1999-04-29', 'TANGSEL', 'REKTOR', 'S3', 3, 4, 4, 3, 3, 3, 0.6, 0.8, 0.8, 0.75, 0.75, 0.75, 0.728),
(2011141259, 'Asep saripudin', '1993-05-11', 'bogor parung', 'OB', 'S2', 3, 2, 3, 3, 3, 3, 0.6, 0.4, 0.6, 0.75, 0.75, 0.75, 0.644),
(2011143113, 'Keris Patih', '1991-06-21', 'BSD City', 'Staff TI', 'S1', 3, 3, 4, 4, 4, 4, 0.6, 0.6, 0.8, 1, 1, 1, 0.82),
(2011145016, 'Sulaiman', '1993-02-15', 'Jonggol', 'Staff TI', 's1', 3, 3, 4, 4, 3, 2, 0.6, 0.6, 0.8, 1, 0.75, 0.5, 0.7),
(2012131214, 'Dini Nur', '1994-06-17', 'Jatinegara', 'Staff TI', 'D3', 3, 3, 4, 4, 2, 3, 0.6, 0.6, 0.8, 1, 0.5, 0.75, 0.7225),
(2012134444, 'Sulam', '1989-01-12', 'Jakarta Pusat', 'OB', 'SMA', 3, 5, 5, 4, 3, 4, 0.6, 1, 1, 1, 0.75, 1, 0.879),
(2013123456, 'Cindvia', '1995-01-14', 'Jakarta Pusat', 'Sekertaris', 'S1', 4, 4, 4, 4, 3, 4, 0.8, 0.8, 0.8, 1, 0.75, 1, 0.871),
(2013141548, 'Galuh Oka Safitri', '1995-10-28', 'Bogor jawa barat', 'direktur', 'S3', 4, 4, 3, 3, 3, 3, 0.8, 0.8, 0.6, 0.75, 0.75, 0.75, 0.748),
(2013151234, 'Lidya', '1996-10-30', 'Jakarta Pusat', 'Staff Ahli', 'S1', 4, 4, 3, 2, 2, 3, 0.8, 0.8, 0.6, 0.5, 0.5, 0.75, 0.6755);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` text NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'Kapasitas Intelektual', 0.24),
(2, 'Aspek Sikap Kerja', 0.14),
(3, 'Aspek perilaku', 0.14),
(4, 'Loyalitas', 0.19),
(5, 'Prestasi', 0.1),
(6, 'Tanggung Jawab', 0.19);
