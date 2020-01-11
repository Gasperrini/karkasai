-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 10:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_11_25_083010_create_darbuotojai_table', 1),
(12, '2019_11_25_084936_create_mokytojai_table', 1),
(13, '2019_11_25_091049_create_questions_table', 1),
(14, '2019_11_25_092041_create_klientu_registracijos_table', 2),
(15, '2019_11_25_093207_create_prisijungimai_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mokytojais`
--

CREATE TABLE `mokytojais` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pavarde` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mokytojais`
--

INSERT INTO `mokytojais` (`id`, `vardas`, `pavarde`, `updated_at`, `created_at`) VALUES
(1, 'Petras', 'Petraitis', '2019-12-03 13:54:07', '2019-12-03 13:54:07'),
(2, 'Andrius', 'Rimiškis', '2019-12-03 13:54:07', '2019-12-03 13:54:07'),
(3, 'Virgis', 'Stakėnas', '2019-12-03 13:54:07', '2019-12-03 13:54:07'),
(7, 'naujas', 'ketvirtas', '2019-12-03 12:24:55', '2019-12-03 12:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `el_pastas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klausimas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `fk_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `el_pastas`, `klausimas`, `updated_at`, `created_at`, `fk_user`) VALUES
(1, 'testas@testas.com', 'klausimas', NULL, NULL, NULL),
(2, 'klausimas@quiz.com', 'kodel taip?', NULL, NULL, NULL),
(3, 'ignas84@gmail.com', 'klausimas hey', '2019-11-26 10:32:24', '2019-11-26 10:32:24', NULL),
(4, 'ignas84@gmail.com', 'dfhfdgh', '2019-11-26 10:58:41', '2019-11-26 10:58:41', NULL),
(5, 'ignas84@gmail.com', 'hdrhfddfh', '2019-11-26 10:59:43', '2019-11-26 10:59:43', NULL),
(6, '245235', 'wewet', '2019-11-26 11:00:20', '2019-11-26 11:00:20', NULL),
(7, 'sdg', 'sdg', '2019-11-26 11:07:03', '2019-11-26 11:07:03', NULL),
(8, 'ignas84@gmail.com', 'sdfgsdg', '2019-11-26 11:07:41', '2019-11-26 11:07:41', NULL),
(9, 'sdg', 'ghkkgj', '2019-11-26 11:08:56', '2019-11-26 11:08:56', NULL),
(10, 'dsg', 'sdg', '2019-11-26 11:10:47', '2019-11-26 11:10:47', NULL),
(11, 'sdg', 'ghkhjl', '2019-11-26 11:11:26', '2019-11-26 11:11:26', NULL),
(12, '34', 'dwsaef', '2019-11-26 11:11:52', '2019-11-26 11:11:52', NULL),
(13, 'sfhg', 'sfh', '2019-11-26 11:12:19', '2019-11-26 11:12:19', NULL),
(14, 'edgdh', 'dfhdfh', '2019-11-27 15:07:36', '2019-11-27 15:07:36', NULL),
(15, 'nesakysiu@sakysiu.com', 'koks virgio numeris?', '2019-11-29 15:28:34', '2019-11-29 15:28:34', NULL),
(16, 'sdf@sdg.lt', 'asdg', '2019-12-03 07:38:10', '2019-12-03 07:38:10', NULL),
(17, 'sdf@sdg', 'sdfdsf', '2019-12-03 11:24:54', '2019-12-03 11:24:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `vardas` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pavarde` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `el_pastas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_nr` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mokytojas_id` int(10) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `fk_user1` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `vardas`, `pavarde`, `el_pastas`, `tel_nr`, `mokytojas_id`, `updated_at`, `created_at`, `fk_user1`) VALUES
(3, '2Klientas', '2Klientauskas', 'client@business.biz', '95959', 3, '2019-11-29 15:01:04', NULL, NULL),
(4, 'bebebbeebvv', 'sadgsdg', 'bebe@beb.lt', '7454777', 1, '2019-11-29 14:36:03', '2019-11-27 15:15:13', NULL),
(8, 'Vardas', 'Pavarde', 'el@pastas.com', '234732472', 2, '2019-12-01 08:29:24', '2019-12-01 08:29:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ignas', 'ignas@test.com', NULL, '$2y$10$946Jxc79jkPjPtSI7XEsP.u9A2goG7HmzawMUHPutPMXD5IxfajVa', NULL, '2019-11-25 11:50:20', '2019-11-25 11:50:20'),
(3, 'Admin', 'admin@test.com', NULL, '$2y$10$uH990abFdc2AlARZ3C82B.RIlyfUnlhRKEF19VDnyeMenNXF7xRli', NULL, '2019-11-25 17:24:17', '2019-11-25 17:24:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mokytojais`
--
ALTER TABLE `mokytojais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`fk_user`) USING BTREE;

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mokytojai_id` (`mokytojas_id`),
  ADD KEY `fk_users_id1` (`fk_user1`) USING BTREE;

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mokytojais`
--
ALTER TABLE `mokytojais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fkc_users_id` FOREIGN KEY (`fk_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `registrations`
--
ALTER TABLE `registrations`
  ADD CONSTRAINT `fkc_mokytojai_id` FOREIGN KEY (`mokytojas_id`) REFERENCES `mokytojais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fkc_users_id1` FOREIGN KEY (`fk_user1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
