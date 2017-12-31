-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2017 at 02:15 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandara`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` enum('event','promo') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `teks`, `gambar`, `jenis`, `updated_at`, `created_at`) VALUES
(8, 'Tiket Murah', '<p></p><div><p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p></div><p></p>', '20171224095400.png', 'promo', '2017-12-24 13:54:01', '2017-12-24 13:54:01'),
(9, 'MNAMNAMAN', '<p></p><div><h2><br>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><br></div><br><p></p>', '20171224095531.png', 'event', '2017-12-24 13:55:31', '2017-12-24 13:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `suka` int(11) DEFAULT NULL,
  `tdk_suka` int(11) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `posisi_kontak` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `teks`, `gambar`, `email`, `telpon`, `suka`, `tdk_suka`, `nama_kontak`, `posisi_kontak`, `fb`, `youtube`, `updated_at`, `created_at`) VALUES
(1, 'Angkasa Pura', 'asdasd jcxj xcj jx cjn xjnx cjncx ncxkjcxnj cxjn cx cnjcx jncx jn cxnjxc jn cxn cxnxc nklcxk jcxnjnxck jnxcjn kxjcnk jnxckjn kxjcn kjxcn kjxnckj nxckj njkcxn xcn kjnxckj ncxj nkxcn kjxncj nxjcn kjxnc kjxcn ,cx', '20171224093538.png', 'angkasapura@aa.com', '0812345678', 9, 2, 'Angkasa Pura', 'Project Manajer', 'https://facebook.com', 'https://youtube.com', '2017-12-24 16:38:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_survey` int(11) NOT NULL,
  `nama_survey` varchar(255) NOT NULL,
  `suka` int(11) NOT NULL,
  `tdk_suka` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_survey`, `nama_survey`, `suka`, `tdk_suka`, `updated_at`, `created_at`) VALUES
(1, 'Kebersihan', 10, 5, '2017-12-24 17:02:57', '0000-00-00 00:00:00'),
(2, 'Keramahan', 4, 1, '2017-12-24 16:57:42', '2017-12-24 13:56:23'),
(3, 'Kenyamanan', 1, 2, '2017-12-24 16:50:14', '2017-12-24 13:56:55'),
(4, 'Keamanan', 2, 0, '2017-12-24 16:58:07', '2017-12-24 13:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `tenan`
--

CREATE TABLE `tenan` (
  `id_tenan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `kategori` enum('rnb','retails','services','support') DEFAULT NULL,
  `logo` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL,
  `lihat` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tenan`
--

INSERT INTO `tenan` (`id_tenan`, `nama`, `status`, `kategori`, `logo`, `map`, `lihat`, `updated_at`, `created_at`) VALUES
(17, 'Gloria Jeans Coffee', 'show', 'rnb', 'default.jpg', '20171224091105.mp4', 0, '2017-12-24 13:11:05', '2017-12-24 13:11:05'),
(18, 'BANGI KOPITIAM', 'show', 'rnb', 'default.jpg', '20171224091137.mp4', 0, '2017-12-24 13:11:37', '2017-12-24 13:11:37'),
(19, 'DUNKIN DONUTS', 'show', 'rnb', 'default.jpg', '20171224091222.mp4', 0, '2017-12-24 13:12:22', '2017-12-24 13:12:22'),
(20, 'Soerabaya Cafe', 'show', 'rnb', 'default.jpg', '20171224091350.mp4', 0, '2017-12-24 13:13:50', '2017-12-24 13:13:50'),
(21, 'Roti Daeng', 'show', 'rnb', 'default.jpg', '20171224091423.mp4', 0, '2017-12-24 13:14:23', '2017-12-24 13:14:23'),
(22, 'OAKLAY', 'show', 'retails', 'default.jpg', '20171224091646.mp4', 0, '2017-12-24 13:16:46', '2017-12-24 13:16:46'),
(23, 'GIFT SHOP SAKTI', 'show', 'retails', 'default.jpg', '20171224091943.mp4', 0, '2017-12-24 13:19:43', '2017-12-24 13:17:58'),
(24, 'MEDIA PLUS', 'show', 'retails', 'default.jpg', '20171224091828.mp4', 0, '2017-12-24 13:18:28', '2017-12-24 13:18:28'),
(25, 'MY INDONESIA JEWELRIES', 'show', 'retails', 'default.jpg', '20171224092024.mp4', 0, '2017-12-24 13:20:24', '2017-12-24 13:20:24'),
(26, 'RUMAH MARKISA', 'show', 'retails', 'default.jpg', '20171224092106.mp4', 0, '2017-12-24 13:21:06', '2017-12-24 13:21:06'),
(27, 'BOOT SERVICES', 'show', 'services', 'default.jpg', '20171224092139.mp4', 0, '2017-12-24 13:21:39', '2017-12-24 13:21:39'),
(28, 'BOOT SERVICES 2', 'show', 'services', 'default.jpg', '20171224092325.mp4', 0, '2017-12-24 13:23:25', '2017-12-24 13:22:14'),
(29, 'BOOT SERVICES 3', 'show', 'services', 'default.jpg', '20171224092240.mp4', 0, '2017-12-24 13:22:40', '2017-12-24 13:22:40'),
(30, 'A & W LANTAI II', 'show', 'rnb', 'default.jpg', '20171224113456.mp4', 0, '2017-12-24 15:34:56', '2017-12-24 15:34:56'),
(31, 'BEBEK HARISA, SOTO WAWAN', 'show', 'rnb', 'default.jpg', '20171224113524.mp4', 0, '2017-12-24 15:35:24', '2017-12-24 15:35:24'),
(32, 'CAFÉ SAKTI', 'show', 'rnb', 'default.jpg', '20171224113601.mp4', 0, '2017-12-24 15:36:01', '2017-12-24 15:36:01'),
(33, 'STARBUCKS COFFEE', 'show', 'rnb', 'default.jpg', '20171224113631.mp4', 0, '2017-12-24 15:36:31', '2017-12-24 15:36:31'),
(34, 'TALLASA RT-2-1 (GATE 2) _ TALLASA RT-2-3 (GATE 5)', 'show', 'retails', 'default.jpg', '20171224113716.mp4', 0, '2017-12-24 15:37:16', '2017-12-24 15:37:16'),
(35, 'POLO   MINI DEPT STORE', 'show', 'retails', 'default.jpg', '20171224113757.mp4', 0, '2017-12-24 15:37:57', '2017-12-24 15:37:57'),
(36, 'CIRCLE K (104)', 'show', 'retails', 'default.jpg', '20171224113828.mp4', 0, '2017-12-24 15:38:28', '2017-12-24 15:38:28'),
(37, 'BATIK KERIS (109)', 'show', 'retails', 'default.jpg', '20171224113900.mp4', 0, '2017-12-24 15:39:00', '2017-12-24 15:39:00'),
(38, 'RICHFIELD', 'show', 'retails', 'default.jpg', '20171224113930.mp4', 0, '2017-12-24 15:39:30', '2017-12-24 15:39:30'),
(39, 'SPA', 'show', 'services', 'default.jpg', '20171224113956.mp4', 0, '2017-12-24 15:39:56', '2017-12-24 15:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'angkasapura1', 'angkasapura1', '$2y$10$gnJ2cYjnYUxGgdWbUjUee.XY0LaVrQq56KHAj88UyYiepaLR1YaIm', '2017-11-22 01:26:01', '2017-11-12 17:29:39', 'c3ECsTPeGBB8nCqVdAO5i0TL3bKE6SYmeyEJe7RQBUDgyB3xFBFYS36dbnlF'),
(2, 'angkasapura2', 'angkasapura2', '$2y$10$/ox3e6BAnPWlR89OA/6LQOG/Awbzgcbd5VFy/iSzcie7Q9j5QxmLu', '2017-11-13 13:29:39', '2017-11-12 17:29:39', '0'),
(3, 'angkasapura3', 'angkasapura3', '$2y$10$MrbhR7UiGMVBBMBO6vN59ehX9xztCdOs7RC27.LLncTzRYw60p2Ae', '2017-11-15 16:47:09', '2017-11-12 17:29:39', 'r3jobPfCfXGaC6TKDSMivgB1cfHQm9Jcewpn55k70tokUKpb6XbfJnOUAVB5'),
(4, 'angkasapura4', 'angkasapura4', '$2y$10$IhehBG1vp4QzREodPokMQeIBtfA7O1RBfefM2ejD2vkQzbzyWX8L2', '2017-11-18 04:56:48', '2017-11-17 20:56:48', NULL),
(5, 'angkasapura5', 'angkasapura5', '$2y$10$5xe4a5tMqRDlvMW21d3PAOij2RnZkanTaWTRVWJVWRnBG0WKCnwJy', '2017-11-18 04:56:48', '2017-11-17 20:56:48', NULL),
(6, 'angkasapura6', 'angkasapura6', '$2y$10$zzFHoQKcVI7KeGbPyYVsc.GKhhRelWAN1RbZUpv1SU8Qd/Tda5STy', '2017-11-18 04:56:49', '2017-11-17 20:56:49', NULL),
(7, 'angkasapura7', 'angkasapura7', '$2y$10$AN8CblE3j/Fghk0fQbr.GuF3fG8U1Mrm6SLrzlk5W78TQEP.nGHh.', '2017-11-18 04:57:07', '2017-11-17 20:56:49', '7YPo3daSM9XME7ClkNZRbR6m5cHZapQYQehVa6rgyHTARpyyrxIOvUElTt7X');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_survey`);

--
-- Indexes for table `tenan`
--
ALTER TABLE `tenan`
  ADD PRIMARY KEY (`id_tenan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tenan`
--
ALTER TABLE `tenan`
  MODIFY `id_tenan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
