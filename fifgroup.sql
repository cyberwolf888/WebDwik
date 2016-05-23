-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2016 pada 07.35
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fifgroup`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(100) NOT NULL,
  `nm_admin` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `pass`) VALUES
('27560', 'DWI KRISTINA', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `beban`
--

CREATE TABLE IF NOT EXISTS `beban` (
  `no_beban` int(11) NOT NULL AUTO_INCREMENT,
  `id_kolektor` varchar(100) NOT NULL,
  `kd_daerah` varchar(100) NOT NULL,
  `bulan` int(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`no_beban`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data untuk tabel `beban`
--

INSERT INTO `beban` (`no_beban`, `id_kolektor`, `kd_daerah`, `bulan`, `tahun`) VALUES
(51, '27560', '8642', 4, 2016),
(52, '5782', '8656', 4, 2016);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cst`
--

CREATE TABLE IF NOT EXISTS `cst` (
  `no_kontrak` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_daerah` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `warganegara` varchar(100) NOT NULL,
  `tmpat_tagih` varchar(100) NOT NULL,
  `daerah_tagih` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `pokok_hutang` varchar(100) NOT NULL,
  `telah_bayar` varchar(100) NOT NULL,
  `angsuran` float NOT NULL,
  `tgl_jth_tempo` varchar(100) NOT NULL,
  `komen` text NOT NULL,
  `top` float NOT NULL,
  PRIMARY KEY (`no_kontrak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cst`
--

INSERT INTO `cst` (`no_kontrak`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `kd_daerah`, `agama`, `status`, `warganegara`, `tmpat_tagih`, `daerah_tagih`, `tlp`, `pokok_hutang`, `telah_bayar`, `angsuran`, `tgl_jth_tempo`, `komen`, `top`) VALUES
('701000028374', 'krisna narendra', 'Denpasar', '04/01/2015', 'Jl. Gn Agung gg. IV l.10 No.2', '8642', 'hindu', 'menikah', 'wni', 'Jl. Gn Agung gg. IV l.10 No.2', '8642', '09267828939', '12500000', '8500000', 500000, '04/01/2016', 'Cust RO1 FIF', 12),
('701000028879', 'I Nyoman Sugita', 'Denpasar', '11/18/2015', 'Jl. Gn Agung gg. IV l.10 No.2', '8648', 'hindu', 'menikah', 'wni', 'Jl. Gn Agung gg. IV l.10 No.2', '8654', '08736373736', '8000000', '3000000', 300000, '06/01/2016', 'Cust RO2 FIF', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE IF NOT EXISTS `daerah` (
  `kd_daerah` int(100) NOT NULL AUTO_INCREMENT,
  `kecamatan` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `prov` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_daerah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8662 ;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`kd_daerah`, `kecamatan`, `desa`, `prov`) VALUES
(8642, 'denpasar utara', 'pemecutan kaja', 'bali'),
(8643, 'denpasar utara', 'ubung kaja', 'bali'),
(8644, 'denpasar utara', 'peguyangan', 'bali'),
(8645, 'denpasar utara', 'dauh puri', 'bali'),
(8646, 'denpasar utara', 'tonja', 'bali'),
(8647, 'denpasar selatan', 'panjer', 'bali'),
(8648, 'denpasar selatan', 'renon', 'bali'),
(8649, 'denpasar selatan', 'sesetan', 'bali'),
(8650, 'denpasar selatan', 'pedungan', 'bali'),
(8651, 'denpasar selatan', 'serangan', 'bali'),
(8652, 'denpasar selatan', 'pemogan', 'bali'),
(8653, 'denpasar barat', 'padangsambian', 'bali'),
(8654, 'denpasar barat', 'dauh puri', 'bali'),
(8655, 'denpasar barat', 'pemecutan kelod', 'bali'),
(8656, 'denpasar barat', 'tegal kerta', 'bali'),
(8657, 'denpasar barat', 'tegal harum', 'bali'),
(8658, 'denpasar timur', 'sumerta', 'bali'),
(8659, 'denpasar timur', 'kesiman', 'bali'),
(8660, 'denpasar timur', 'penatih', 'bali'),
(8661, 'denpasar timur', 'dangin puri', 'bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kolektor`
--

CREATE TABLE IF NOT EXISTS `kolektor` (
  `id_kolektor` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kolektor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kolektor`
--

INSERT INTO `kolektor` (`id_kolektor`, `nama`, `pass`) VALUES
('27560', 'dwi kristina', '123456'),
('5782', 'Komang Sri Wahyuni', '5782');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `id_laporan` varchar(100) NOT NULL,
  `no_kontrak` bigint(20) NOT NULL,
  `laporan` text NOT NULL,
  `waktu` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `angsuran` int(2) NOT NULL,
  `id_kolektor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `no_kontrak`, `laporan`, `waktu`, `status`, `angsuran`, `id_kolektor`) VALUES
('3', 701000028374, 'diinputkan admin', '2016-04-20 21:01:42', '1', 6, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
