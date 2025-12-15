-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2025 at 10:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `jawaban1` text DEFAULT NULL,
  `jawaban2` text DEFAULT NULL,
  `jawaban3` text DEFAULT NULL,
  `jawaban4` text DEFAULT NULL,
  `jawaban5` text DEFAULT NULL,
  `jawaban6` text DEFAULT NULL,
  `jawaban7` text DEFAULT NULL,
  `jawaban8` text DEFAULT NULL,
  `jawaban9` text DEFAULT NULL,
  `jawaban10` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `siswa_id`, `firstname`, `lastname`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `created_at`) VALUES
(1, 4, 'lilas', 'lilas', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(11) NOT NULL,
  `siswa_id` varchar(250) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `jawaban1` text DEFAULT NULL,
  `jawaban2` text DEFAULT NULL,
  `jawaban3` text DEFAULT NULL,
  `jawaban4` text DEFAULT NULL,
  `jawaban5` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`id`, `siswa_id`, `score`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `submitted_at`, `firstname`, `lastname`) VALUES
(1, '', 3, 'll', 'll', 'll', 'll', 'll', '2025-12-13 08:52:57', NULL, NULL),
(2, '', 3, 'll', 'll', 'll', 'll', 'll', '2025-12-13 08:55:36', NULL, NULL),
(3, '', 3, 'll', 'll', 'll', 'll', 'll', '2025-12-13 08:55:54', NULL, NULL),
(4, '0', 3, 'll', 'll', 'll', 'll', 'll', '2025-12-13 09:07:56', NULL, NULL),
(5, '0', 3, 'll', 'll', 'll', 'll', 'll', '2025-12-13 09:10:45', NULL, NULL),
(6, '4', 3, 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:28:15', NULL, NULL),
(7, '4', 3, 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:35:12', NULL, NULL),
(8, '4', 3, 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:39:04', 'lilas', 'lilas'),
(9, '4', 3, 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:51:04', 'lilas', 'lilas'),
(10, '4', 1, 'ss', 'ss', 'ss', 'ss', 'ss', '2025-12-13 09:59:43', 'lilas', 'lilas');

-- --------------------------------------------------------

--
-- Table structure for table `submit_eksperimen`
--

CREATE TABLE `submit_eksperimen` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `f1` int(11) DEFAULT NULL,
  `t1` int(11) DEFAULT NULL,
  `l1` int(11) DEFAULT NULL,
  `v1` int(11) DEFAULT NULL,
  `f2` int(11) DEFAULT NULL,
  `t2` int(11) DEFAULT NULL,
  `l2` int(11) DEFAULT NULL,
  `v2` int(11) DEFAULT NULL,
  `f3` int(11) DEFAULT NULL,
  `t3` int(11) DEFAULT NULL,
  `l3` int(11) DEFAULT NULL,
  `v3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_eksperimen`
--

INSERT INTO `submit_eksperimen` (`id`, `siswa_id`, `firstname`, `lastname`, `f1`, `t1`, `l1`, `v1`, `f2`, `t2`, `l2`, `v2`, `f3`, `t3`, `l3`, `v3`) VALUES
(1, 4, 'lilas', 'lilas', 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0),
(3, 4, 'lilas', 'lilas', 4, 4, 4, 0, 4, 4, 4, 0, 4, 4, 4, 0),
(4, 4, 'lilas', 'lilas', 2, 1, 3, 0, 2, 1, 3, 0, 2, 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submit_perencanaan`
--

CREATE TABLE `submit_perencanaan` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `jawaban1` text DEFAULT NULL,
  `jawaban2` text DEFAULT NULL,
  `jawaban3` text DEFAULT NULL,
  `jawaban4` text DEFAULT NULL,
  `jawaban5` text DEFAULT NULL,
  `jawaban6` text DEFAULT NULL,
  `jawaban7` text DEFAULT NULL,
  `jawaban8` text DEFAULT NULL,
  `jawaban9` text DEFAULT NULL,
  `jawaban10` text DEFAULT NULL,
  `jawaban11` text DEFAULT NULL,
  `jawaban12` text DEFAULT NULL,
  `jawaban13` text DEFAULT NULL,
  `jawaban14` text DEFAULT NULL,
  `jawaban15` text DEFAULT NULL,
  `jawaban16` text DEFAULT NULL,
  `jawaban17` text DEFAULT NULL,
  `jawaban18` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_perencanaan`
--

INSERT INTO `submit_perencanaan` (`id`, `siswa_id`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `jawaban11`, `jawaban12`, `jawaban13`, `jawaban14`, `jawaban15`, `jawaban16`, `jawaban17`, `jawaban18`, `created_at`, `firstname`, `lastname`) VALUES
(1, 4, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '2025-12-14 17:49:52', 'lilas', 'lilas'),
(2, 4, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '2025-12-14 17:49:57', 'lilas', 'lilas');

-- --------------------------------------------------------

--
-- Table structure for table `submit_solusi`
--

CREATE TABLE `submit_solusi` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `q1a` varchar(100) DEFAULT NULL,
  `q1b` varchar(100) DEFAULT NULL,
  `q1c` varchar(100) DEFAULT NULL,
  `q2a` varchar(100) DEFAULT NULL,
  `q2b` varchar(100) DEFAULT NULL,
  `q3a` varchar(100) DEFAULT NULL,
  `q3b` varchar(100) DEFAULT NULL,
  `q4a` varchar(100) DEFAULT NULL,
  `q4b` varchar(100) DEFAULT NULL,
  `g1` varchar(100) DEFAULT NULL,
  `g2` varchar(100) DEFAULT NULL,
  `g3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `submit_solusi`
--

INSERT INTO `submit_solusi` (`id`, `siswa_id`, `firstname`, `lastname`, `q1a`, `q1b`, `q1c`, `q2a`, `q2b`, `q3a`, `q3b`, `q4a`, `q4b`, `g1`, `g2`, `g3`) VALUES
(1, 4, 'lilas', 'lilas', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, '', '', '', '$2y$10$Gj/pAsBpTfnn.7bhVHw2j./xEgszzBEb9Tot8kvxREpTdJh8CwJ4i'),
(2, '', '', '', '$2y$10$EY61s8XP7q0JP5DCBQJRrOX/IJFW5FjUsxmoG9hD9ICahcZEdBe9e'),
(3, '', '', '', '$2y$10$7ihwogHlp1Vxe0885/2QdONh0pJSloZwGmWjPV6tbvs/1hmfgWYJu'),
(4, 'lilas', 'lilas', 'lilasikuta12@gmail.com', '$2y$10$PURVqJxAl6xn.EmdF1LN2.Jc.LdVh.uEL55R0YBYtKI96Gt.zGunK'),
(5, 'Guru', 'Lilas', 'gurulilas@gmail.com', '$2y$10$JJ55x7ok2qBpuqJNDBAR3eZkXHfeB8F0LbYec5/Jd04B9nZ0brjFW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_eksperimen`
--
ALTER TABLE `submit_eksperimen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_perencanaan`
--
ALTER TABLE `submit_perencanaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `submit_solusi`
--
ALTER TABLE `submit_solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submit_eksperimen`
--
ALTER TABLE `submit_eksperimen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submit_perencanaan`
--
ALTER TABLE `submit_perencanaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submit_solusi`
--
ALTER TABLE `submit_solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submit_perencanaan`
--
ALTER TABLE `submit_perencanaan`
  ADD CONSTRAINT `submit_perencanaan_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
