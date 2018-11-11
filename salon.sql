-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 04:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `activation_token` varchar(255) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `remember_token`, `activation_token`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'kursuswebid@gmail.com', '$2y$10$EQvdODCF1FDb9TGIum.2wOFD9fDQjD8gomu442n0cySeqS1wMqcIC', 'smyXhpKXw4s33OnruRQ6VwPLoa7VqVHNGmymRhxEMi82qiXzbv5alJC1GCRj', 'vZwBGQlTl7bx2sUBu64UewKOUZUlkucRu6RjIM23GSTLjxGi4f8E1J8rZYVscr1hYx5uwSyxG2IFjPPXOu8hwyKYgp0JAamjcuNHfECPk9HlTgCCjKYtJhdPqxsPCm94Gw9C1ekvhfwdJ53iOpjhcxofluTCoxR2N5Vw2qXKzsCxxERCJL2Zq2YPJxdDT1UejkB6WqFlf17PwfsuBGZ4YiUwWBRI5OXQVfc75oNtpQiqwMTS7moZyLl1e2c3nH2', NULL, 1, '2018-09-20 03:00:00', '2018-09-27 21:17:46'),
(2, 'Lola Lemots', 'lola@mail.com', '$2y$10$35aXETKkbi9NUrnHrKVH4OgU8huDS2C0VCrNmUBl/6j7qycfhjsSS', 'Cht1dGoLSvauHmiATKJshlo060sgXli0KKmE1g9tO53bpMoyC7Yb3Pdl6evP', 'A1KXiK2tQurNDonL4nSQgGfsQZ8JA8T0InleLKeWCAJgTfszaKlmhYBYdgvSTJw537lcBnKqj8KgNOvKPpaSEJSdbCWXEwLzptlDAJrfReciUOYGhiiYIbnGx7kY9oFm34EwtxgYKjWWKv5lYQQeDBqRJAIxGrIOD4ovbFTMjs8fw3n9YWip9ROUw09bCpWAZv5BglEDZ5aMdjZRVwHbjq8XMfw8Yg6HvgnjyCnSKSgcTtN7R0bFthICTGHIoE9', 'Lola Lemots.jpg', 1, '2018-09-27 18:50:06', '2018-11-08 18:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `parent` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `link`, `parent`) VALUES
(1, 'Creambat', 'creambat', 0),
(4, 'tes tes', 'tes-tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pelanggan`
--

CREATE TABLE `konfirmasi_pelanggan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `tanggal_konfirmasi` timestamp NULL DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pemesanan_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pelapak`
--

CREATE TABLE `konfirmasi_pelapak` (
  `id` int(11) NOT NULL,
  `teks` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pemilik_salon_id` int(11) NOT NULL,
  `pemesanan_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `link` varchar(110) DEFAULT NULL,
  `kategori_id` int(11) NOT NULL,
  `deskripsi` text,
  `teks` text,
  `harga` int(11) NOT NULL,
  `gambar` varchar(110) DEFAULT NULL,
  `dilihat` int(11) DEFAULT '0',
  `tampil` int(1) DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `pelapak_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `link`, `kategori_id`, `deskripsi`, `teks`, `harga`, `gambar`, `dilihat`, `tampil`, `created_at`, `updated_at`, `pelapak_id`) VALUES
(1, 'Rias Manten', 'rias-manten', 4, 'Rias manten 1 pasang, untuk acara pengantenan dengan memakai baju adat manten jawa. Rias lengkap dengan baju.', '<p><img alt="" src="/salon/public/upload/kcfinder/images/1.%20mysql.PNG" style="height:410px; width:584px" /></p>\r\n\r\n<p>Rias manten 1 pasang, untuk acara pengantenan dengan memakai baju adat manten jawa. Rias lengkap dengan baju.</p>\r\n', 0, 'rias-manten.jpg', 0, 2, '2018-09-28', '2018-11-10', 1),
(2, 'Manten hijab', 'manten-hijab', 4, 'Rias untuk manten putri menggunakan hijab. Tema kostum jawa dan masih berbau adat.', '<p>Rias untuk manten putri menggunakan hijab. Tema kostum jawa dan masih berbau adat.</p>\r\n', 500000, 'manten-hijab.jpg', 0, 1, '2018-10-08', '2018-10-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pelanggan@mail.com', '6590eeaaf3b9abf4655b903c4ca36e5f7fcc0d94c52417744c429243d96de7df', '2018-09-20 01:38:24'),
('kursuswebid@gmail.com', '46dee23e6d2a662ac305ce6dccaa220259adcf3bd3dfe5ed9715bc0cb14c4559', '2018-09-27 21:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `activation_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `email`, `password`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `gambar`, `status`, `remember_token`, `activation_token`, `created_at`, `updated_at`) VALUES
(1, 'Pelanggan', 'pelanggan@mail.com', '$2y$10$EQvdODCF1FDb9TGIum.2wOFD9fDQjD8gomu442n0cySeqS1wMqcIC', '081123456789', 'Banyuwangi', '1990-09-20', NULL, NULL, 1, 'hHBk6GjPu6CsiMvA5CplFWaFKB5QdNqq8gYs8FjqzN65yeFwIq2nQOT8lOlQ', NULL, '2018-09-19 17:00:00', '2018-09-25 04:43:02'),
(2, 'Edi Siswanto', 'edisiswanto.ti8.poliwangi@gmail.com', '$2y$10$OH0NWZqrfhMSY8wRcKkvTOEH0xfgpLUMGqbFcACQQArfXcm0GMD.y', '082302002407', NULL, NULL, 'jember\r\njember', NULL, 1, NULL, 'BrQcejrnTkeTO3JJ79fLyb0sUlfrWRYsAvMvAVAYY9B86VcjUb4IS9z4DYoSflJRevHIIiUJER7iKvxafe5Z8BEZhCkeSslZlm9cZLSTG2AvsvqaBCiDaaPXBhsVM7A2jQuU5OGqoDAhuDlNeD8oZPq2fehPAfZGbFwDYPU9kd2RmXMJcTAJcf1E3EMglxzBKCD7KTBi8tXc3Irw0rMwIjQZVKlcynqPI0tIxey9cHZd8YvifwPMsk1EMxtyLmb', '2018-10-30 20:04:00', '2018-10-30 20:04:00'),
(3, 'Edi Siswanto', 'kursuswebid@gmail.com', '$2y$10$cGS/stBaiqW2j.5YM0Ic3eP2EaMk.0MuAQigFNJyQzoKjo22PhGhu', '082302002407', NULL, NULL, 'jember\r\njember', NULL, 1, 'OYgEP4PlSzJ8uraSG0tSZCQgdnfcDBQPWf4QCxNyOFmkOKUoHF6IRM0Vu6PW', 'WvIoskCFMQJLcMcWI6VudzQNBaWVkV9N59q09GXFt1NQ9rjq6fHzeo8Th61ccuQRwi25E8GAwdsxQnOkKCpQCcrISDcB1m6KLkClGCGIJbdk8tzffUQTMTIXk8QL46A1eCG0N5HybkZiVgBuH7gVPTZnYN6NhpCXo9iTMOzp9G6S2a8eFOcQDeK6LJChUCdS9otqQMRqx1dfz8hvpB8hhUvUW1G1inMw0MmWePj0Mh39UnSCGcsAQTUgGWDDpCk', '2018-11-06 06:59:29', '2018-11-06 07:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `pelapak`
--

CREATE TABLE `pelapak` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `gambar` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `activation_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelapak`
--

INSERT INTO `pelapak` (`id`, `nik`, `nama`, `email`, `password`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `gambar`, `status`, `remember_token`, `activation_token`, `created_at`, `updated_at`) VALUES
(1, '1234567891234567', 'Pelapak', 'pelapak@mail.com', '$2y$10$EQvdODCF1FDb9TGIum.2wOFD9fDQjD8gomu442n0cySeqS1wMqcIC', '081123456789', 'Banyuwangi', '1997-11-02', 'Banyuwangi desa baru', 'Pelapak.jpeg', 1, 'Zs9De494zk061CAuCjwhHZj19XWofv2rxAmbLqRfXpl3itT2w10vDHZ0z3oJ', NULL, '2018-09-19 17:00:00', '2018-10-08 00:53:20'),
(2, NULL, 'tes ', 'tes@mail.com', '$2y$10$PhBosU/TDCBfBXssxnWDnuyYjbZNJFQ6J5r.eN2tPKfx/u0ocKeru', '08123456789', NULL, NULL, 'ds wringin rejo banyuwangi', NULL, 1, NULL, 'VZSPWDbqYoAYB3jL9EEkRIN8tBjSXzgraFGNKXOUFTyYUxvW8LVHeJZ0FT8a4IIeiDaIi8o4fDiULN4JEYXsdfjv2HrHvGxyIk4wiZ7qjcKr9lfijgpc6O9cKcC2nF80eePzG5kc044P0OHBmOzD1TXbTTN75DiY4RPryeNNClPs72QpIRdlxeAZsmBYhyBOzaMe2bVyvKwmXPN0XbJ0873RGM7gdKfLZ3i4DiFmfx0PWGJMpCbxgjKzjRsIYCd', '2018-11-08 06:52:12', '2018-11-08 06:52:12'),
(3, '123456789', 'Edi Siswanto', 'kursuswebid@gmail.com', '$2y$10$w5bApHIv7BZpQ8Jk11rkLOefJFxpDegb1HvLPtMGF2GL2sKp8AvS2', '082302002407', 'jember', '1997-06-24', 'jember\r\njember', NULL, 1, NULL, 'SmYQeKnthd5vvFc1oHQpydMvmM0ZmALHEULGCQHFUuy2gsEcjmmvXS8mXPJQRfs6gS3zYpU5TsFrkHsHlwKHl7GJ9V2sdGPvT1deshdJNyO794NQxMAY0qjNdZCFHpwNfwlcmCFJZATunv7jeAaTSNFwl64jKNIpyQAb0ux6itHhOfRsPKuJ7eXsGlcAMWwFk0YwK7NEgbRfPbysZLUoPqb421uvyOEUNjEfpCfucIdWp2KJ3y4qKoBv3VvYOsk', '2018-11-08 07:01:29', '2018-11-08 07:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `tanggal_transfer` timestamp NULL DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `keterangan` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `pemilik_salon_id` int(11) NOT NULL,
  `pemesanan_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `kode` varchar(10) NOT NULL,
  `tanggal_rias` timestamp NULL DEFAULT NULL,
  `j_orang` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` text,
  `status` int(1) DEFAULT NULL,
  `lokasi_rias` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `paket_rias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_pelapak`
--

CREATE TABLE `profil_pelapak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `teks` text,
  `gambar` varchar(60) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `pelapak_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_pelapak`
--

INSERT INTO `profil_pelapak` (`id`, `nama`, `alamat`, `telepon`, `email`, `teks`, `gambar`, `created_at`, `updated_at`, `pelapak_id`) VALUES
(1, 'Salon Lola', 'Jl. Sudirman, Srono, kab. Banyuwangi - Jawa Timur', '081123456789', 'salonlola@gmail.com', '<p>Deskripsi Toko</p>\r\n', 'Salon Lola.jpg', NULL, '2018-09-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil_web`
--

CREATE TABLE `profil_web` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `link` varchar(110) DEFAULT NULL,
  `deskripsi` text,
  `teks` text,
  `gambar` varchar(110) DEFAULT NULL,
  `dilihat` int(11) DEFAULT NULL,
  `tampil` int(1) DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_web`
--

INSERT INTO `profil_web` (`id`, `nama`, `link`, `deskripsi`, `teks`, `gambar`, `dilihat`, `tampil`, `created_at`, `updated_at`, `admin_id`) VALUES
(3, 'Tentang Aplikasi', 'tentang-aplikasi', 'Apa itu SALINE APP ?', '<p style="text-align:justify">Aplikasi yang terdiri dari banyak pemilik salon. Dengan adanya aplikasi ini diharapkan pelanggan dapat mendapatkan Jasa rias yang sesuai dengan kebutuhan secara online melalui aplikasi ini. Aplikasi ini telah diminati para pemilik salon karena mampu menyediakan media promosi secara online dengan biaya yang sangat terjangkau. Pelanggan juga dapat dengan mudah memilih Jasa rias. <strong>Segera coba aplikasi ini ! <u>Gratis</u></strong></p>\r\n', 'tentang-aplikasi.jpg', NULL, 1, '2018-09-23', '2018-10-08', 2),
(4, 'Mari Gabung', 'mari-bergabung', 'Yuk gabung ke aplikasi, Silahkan daftar sesuai dengan kebutuhan anda.', '<p>Yuk gabung ke aplikasi, Silahkan daftar sesuai dengan kebutuhan anda. apakah anda ingin mencari jasa rias terbaik ? atau anda sebagai pemilik jasa rias ingin mempromosikan usaha anda ?</p>\r\n\r\n<p><strong><span style="font-size:18px">Saline APP adalah aplikasi yang tepat untuk mewujudkan pertanyaan-pertanyaan diatas.</span></strong></p>\r\n', 'mari-bergabung.jpg', NULL, 1, '2018-10-08', '2018-10-08', 2),
(5, 'Kontak Kami', 'kontak-kami', 'Informasi Kantor Saline APP', '<p style="text-align:justify">Saline APP berlokasi di kota Banyuwangi - Srono. Hubungi atau kunjungi kami dengan detail kontak seperti dibawah ini. Anda juga dapat menghubungi kami via Email melalui <strong>form hubungi</strong> kami di samping kiri.</p>\r\n', NULL, NULL, 1, '2018-10-08', '2018-10-08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `teks` varchar(45) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pemesanan_kode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting_web`
--

CREATE TABLE `setting_web` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `teks` text,
  `gambar` varchar(50) DEFAULT NULL,
  `tahun` varchar(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_web`
--

INSERT INTO `setting_web` (`id`, `nama`, `alamat`, `telepon`, `email`, `teks`, `gambar`, `tahun`, `created_at`, `updated_at`, `admin_id`) VALUES
(1, 'Saline APP', 'ds. Srono kec. Srono 68411 kab. Banyuwangi - Jawa Timur', '081123456789', 'saline.app@mail.com', '', 'Saline APP.jpeg', NULL, '2018-02-23', '2018-09-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `gambar`, `status`, `activation_token`) VALUES
(1, 'Edi Siswanto', 'edisiswanto.ti8.poliwangi@gmail.com', '$2y$10$EQvdODCF1FDb9TGIum.2wOFD9fDQjD8gomu442n0cySeqS1wMqcIC', 'hHBk6GjPu6CsiMvA5CplFWaFKB5QdNqq8gYs8FjqzN65yeFwIq2nQOT8lOlQ', '2018-03-27 23:30:15', '2018-06-02 20:21:12', 'edi-siswanto.jpg', 1, 'vZwBGQlTl7bx2sUBu64UewKOUZUlkucRu6RjIM23GSTLjxGi4f8E1J8rZYVscr1hYx5uwSyxG2IFjPPXOu8hwyKYgp0JAamjcuNHfECPk9HlTgCCjKYtJhdPqxsPCm94Gw9C1ekvhfwdJ53iOpjhcxofluTCoxR2N5Vw2qXKzsCxxERCJL2Zq2YPJxdDT1UejkB6WqFlf17PwfsuBGZ4YiUwWBRI5OXQVfc75oNtpQiqwMTS7moZyLl1e2c3nH2'),
(2, 'Antonio', 'kursuswebid@gmail.com', '$2y$10$uOaLwZMfdpSmQOjvbGKIDuPoO4000s0f1ydM73Sw0C.Xjvk4tcnF2', 's5ZG7ELslmisYMsPGkepliLjMQmWHTr9WAtPzvumv82HVzapyVN8D5TQNMeT', '2018-05-25 15:20:45', '2018-09-19 21:04:38', NULL, 1, 'wR8WRtLcUwSy4Cqu6VJzEdnoNF7ix4ZEXXNKVIOOddW28d690Tg6dnPoDDRFJlgCZLA3IuBjK4OGltQhouAbVvK6fti5UyZWRV346yEisOyJhrJPqs2ZsI3SiRQMVDCKhZiwVfjoER11wjQtGONF5Ja2Ehff0bDAzQUimjaLbLEJEQBaFyxDwJrmc1yeyf1whFlNJdPNDDSpSbvlKvaG3N0mI4Fj87cHJm5AQRXIS74LXr3V4gQz7sYQdaQN26Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirmasi_pelanggan`
--
ALTER TABLE `konfirmasi_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_konfirmasi_pelanggan_pemesanan1` (`pemesanan_kode`);

--
-- Indexes for table `konfirmasi_pelapak`
--
ALTER TABLE `konfirmasi_pelapak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_konfirmasi_ps_pemilik_salon1` (`pemilik_salon_id`),
  ADD KEY `fk_konfirmasi_ps_pemesanan1` (`pemesanan_kode`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_UNIQUE` (`link`),
  ADD KEY `fk_paket_rias_pemilik_salon1` (`pelapak_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `pelapak`
--
ALTER TABLE `pelapak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `nik_UNIQUE` (`nik`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembayaran_admin1` (`admin_id`),
  ADD KEY `fk_pembayaran_pemilik_salon1` (`pemilik_salon_id`),
  ADD KEY `fk_pembayaran_pemesanan1` (`pemesanan_kode`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_pemesanan_pelanggan1` (`pelanggan_id`),
  ADD KEY `fk_pemesanan_paket_rias1` (`paket_rias_id`);

--
-- Indexes for table `profil_pelapak`
--
ALTER TABLE `profil_pelapak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`),
  ADD KEY `fk_profil_salon_pemilik_salon1` (`pelapak_id`);

--
-- Indexes for table `profil_web`
--
ALTER TABLE `profil_web`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_UNIQUE` (`link`),
  ADD KEY `fk_profil_web_admin1` (`admin_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_review_pemesanan1` (`pemesanan_kode`);

--
-- Indexes for table `setting_web`
--
ALTER TABLE `setting_web`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_setting_web_admin` (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konfirmasi_pelanggan`
--
ALTER TABLE `konfirmasi_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelapak`
--
ALTER TABLE `pelapak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_pelapak`
--
ALTER TABLE `profil_pelapak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil_web`
--
ALTER TABLE `profil_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting_web`
--
ALTER TABLE `setting_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `konfirmasi_pelanggan`
--
ALTER TABLE `konfirmasi_pelanggan`
  ADD CONSTRAINT `fk_konfirmasi_pelanggan_pemesanan1` FOREIGN KEY (`pemesanan_kode`) REFERENCES `pemesanan` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `konfirmasi_pelapak`
--
ALTER TABLE `konfirmasi_pelapak`
  ADD CONSTRAINT `fk_konfirmasi_ps_pemesanan1` FOREIGN KEY (`pemesanan_kode`) REFERENCES `pemesanan` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_konfirmasi_ps_pemilik_salon1` FOREIGN KEY (`pemilik_salon_id`) REFERENCES `pelapak` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `fk_paket_rias_pemilik_salon1` FOREIGN KEY (`pelapak_id`) REFERENCES `pelapak` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembayaran_pemesanan1` FOREIGN KEY (`pemesanan_kode`) REFERENCES `pemesanan` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembayaran_pemilik_salon1` FOREIGN KEY (`pemilik_salon_id`) REFERENCES `pelapak` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_paket_rias1` FOREIGN KEY (`paket_rias_id`) REFERENCES `paket` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemesanan_pelanggan1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profil_pelapak`
--
ALTER TABLE `profil_pelapak`
  ADD CONSTRAINT `fk_profil_salon_pemilik_salon1` FOREIGN KEY (`pelapak_id`) REFERENCES `pelapak` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profil_web`
--
ALTER TABLE `profil_web`
  ADD CONSTRAINT `fk_profil_web_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_pemesanan1` FOREIGN KEY (`pemesanan_kode`) REFERENCES `pemesanan` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `setting_web`
--
ALTER TABLE `setting_web`
  ADD CONSTRAINT `fk_setting_web_admin` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
