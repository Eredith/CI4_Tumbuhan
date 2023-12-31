-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 08:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tamanelektro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `is_admin`) VALUES
(1, 'aero', 'aerotimorence@gmail.com', 'test', '0000-00-00 00:00:00', 0),
(2, 'lion', 'lionhtmanukoa@gmail.com', 'aerolion01', '2023-12-26 17:00:00', 0),
(3, '', 'zacktimorence@gmail.com', '$2y$10$5wim8gpKbgw23OA6Ldb9eOZkXEB6kRek/HO2AmgMHTev9oFYejb/u', NULL, 0),
(4, '', 'aerojacques@gmail.com', '$2y$10$bppVcoCJkEUHkLkGz4zDvex3zSIXr1msUUSVfxL6OY3uu5.Th.Iru', NULL, 0),
(5, '', 'admin_taman@gmail.com', '$2y$10$gO04AJ0sIDPnvLgnah61C.RhYcpiA1huAQ8xU9xFjlA1Sul/Eo2BW', NULL, 1),
(6, '', 'lala@gmail.com', '$2y$10$c8U1hNeQO.YpAiqe/juclOJh4UExmscdXZjI5L1/lPeolWdEV3qoK', '2023-12-31 19:37:42', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
