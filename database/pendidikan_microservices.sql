-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2025 at 04:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendidikan_microservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `credits` int(2) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `day`, `start_time`, `duration`, `credits`, `semester`) VALUES
(1, 'II3160 Teknologi Sistem Terintegrasi', 'Senin', '07:00:00', 100, 2, 5),
(2, 'II2221 Analisis Kebutuhan Enterprise', 'Senin', '09:00:00', 100, 2, 5),
(3, 'II3070 Dasar Inteligensi Artifisial', 'Senin', '11:00:00', 50, 1, 5),
(4, 'II3131 Interaksi Manusia Komputer', 'Selasa', '07:00:00', 100, 2, 5),
(5, 'II3140 Pengembangan Aplikasi Web dan Mobile', 'Selasa', '09:00:00', 50, 1, 5),
(6, 'II3170 Hukum dan Etika Teknologi Informasi', 'Selasa', '10:00:00', 100, 2, 5),
(7, 'II3131 Interaksi Manusia Komputer', 'Rabu', '07:00:00', 50, 1, 5),
(8, 'II3120 Layanan Sistem dan Teknologi Informasi', 'Rabu', '08:00:00', 100, 2, 5),
(9, 'II2221 Analisis Kebutuhan Enterprise', 'Rabu', '10:00:00', 50, 1, 5),
(10, 'II3160 Teknologi Sistem Terintegrasi', 'Rabu', '11:00:00', 50, 1, 5),
(11, 'II3070 Dasar Inteligensi Artifisial', 'Kamis', '07:00:00', 100, 2, 5),
(12, 'II3120 Layanan Sistem dan Teknologi Informasi', 'Kamis', '09:00:00', 50, 1, 5),
(13, 'DK3014 Psikologi Persepsi', 'Kamis', '13:00:00', 100, 2, 5),
(14, 'II2100 Komunikasi Interpersonal dan Publik', 'Kamis', '16:00:00', 100, 2, 5),
(15, 'II3140 Pengembangan Aplikasi Web dan Mobile', 'Jumat', '07:00:00', 100, 2, 5),
(26, 'II2230 Jaringan Komputer', 'Senin', '07:00:00', 50, 1, 4),
(27, 'II2260 Sistem Embedded', 'Senin', '13:00:00', 100, 2, 4),
(28, 'II2240 Analisis Kebutuhan Sistem', 'Selasa', '14:00:00', 100, 2, 4),
(29, 'IF2212 Pemrograman Berorientasi Objek STI', 'Selasa', '08:00:00', 100, 2, 4),
(30, 'KU4095 Kewirausahaan', 'Rabu', '11:00:00', 100, 2, 4),
(31, 'II2220 Manajemen Sumber Daya STI', 'Kamis', '11:00:00', 100, 2, 4),
(32, 'II2250 Manajemen Basis Data', 'Jumat', '13:00:00', 100, 2, 4),
(33, 'TI3005 Organisasi & Manajemen Perusahaan Industri', 'Senin', '07:00:00', 100, 2, 3),
(34, 'II2111 Probabilitas dan Statistik', 'Senin', '13:00:00', 100, 2, 3),
(35, 'II2110 Matematika STI', 'Selasa', '12:00:00', 50, 1, 3),
(36, 'IF2140 Pemodelan Basis Data', 'Selasa', '13:00:00', 100, 2, 3),
(37, 'II2130 Sistem dan Arsitektur Komputer', 'Selasa', '15:00:00', 100, 2, 3),
(38, 'IF2111 Algoritma dan Struktur Data STI', 'Rabu', '14:00:00', 100, 2, 3),
(39, 'IF2140 Pemodelan Basis Data', 'Rabu', '17:00:00', 50, 1, 3),
(40, 'II2110 Matematika STI', 'Kamis', '15:00:00', 100, 2, 3),
(41, 'IF2111 Algoritma dan Struktur Data STI', 'Jumat', '16:00:00', 100, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` int(11) NOT NULL,
  `semester` int(2) NOT NULL,
  `ip_sem1` float NOT NULL,
  `ip_sem2` float NOT NULL,
  `ip_sem3` float NOT NULL,
  `ip_sem4` float NOT NULL,
  `ip_sem5` float NOT NULL,
  `ip_sem6` float NOT NULL,
  `ip_sem7` float NOT NULL,
  `ip_sem8` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`no`, `id`, `nama`, `nim`, `semester`, `ip_sem1`, `ip_sem2`, `ip_sem3`, `ip_sem4`, `ip_sem5`, `ip_sem6`, `ip_sem7`, `ip_sem8`) VALUES
(18222026, 18222026, 'Tamara', 18222026, 3, 3.4, 3, 3.6, 0, 0, 0, 0, 0),
(18222074, 18222074, 'Kayla', 18222074, 5, 3.6, 3.8, 3, 2.5, 4, 0, 0, 0),
(18222078, 18222078, 'Monica', 18222078, 5, 3.25, 3.8, 4, 3.4, 3.7, 0, 0, 0),
(18222090, 18222090, 'Kerlyn', 18222090, 4, 4, 2.3, 3.4, 0, 0, 0, 0, 0),
(18222094, 18222094, 'Yovanka', 18222094, 4, 2.5, 3.5, 3.8, 3, 0, 0, 0, 0);

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `auto_fill_no` BEFORE INSERT ON `students` FOR EACH ROW BEGIN
    SET NEW.no = NEW.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `students_courses`
--

CREATE TABLE `students_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_courses`
--

INSERT INTO `students_courses` (`id`, `student_id`, `course_id`, `semester`, `grade`) VALUES
(19, 18222078, 1, 5, ''),
(20, 18222078, 2, 5, ''),
(21, 18222078, 3, 5, ''),
(22, 18222078, 4, 5, ''),
(23, 18222078, 5, 5, ''),
(24, 18222078, 6, 5, ''),
(25, 18222078, 7, 5, ''),
(26, 18222078, 8, 5, ''),
(27, 18222078, 9, 5, ''),
(28, 18222078, 10, 5, ''),
(29, 18222078, 11, 5, ''),
(30, 18222078, 12, 5, ''),
(31, 18222078, 13, 5, ''),
(32, 18222078, 14, 5, ''),
(33, 18222078, 15, 5, ''),
(34, 18222074, 1, 5, ''),
(35, 18222074, 3, 5, ''),
(36, 18222074, 5, 5, ''),
(37, 18222074, 7, 5, ''),
(38, 18222074, 9, 5, ''),
(39, 18222074, 11, 5, ''),
(40, 18222074, 13, 5, ''),
(41, 18222074, 15, 5, ''),
(42, 18222094, 26, 4, ''),
(43, 18222094, 27, 4, ''),
(44, 18222094, 28, 4, ''),
(45, 18222094, 29, 4, ''),
(46, 18222094, 30, 4, ''),
(47, 18222094, 31, 4, ''),
(48, 18222094, 32, 4, ''),
(49, 18222026, 33, 3, ''),
(50, 18222026, 34, 3, ''),
(51, 18222026, 35, 3, ''),
(52, 18222026, 36, 3, ''),
(53, 18222026, 37, 3, ''),
(54, 18222026, 38, 3, ''),
(55, 18222026, 39, 3, ''),
(56, 18222026, 40, 3, ''),
(57, 18222026, 41, 3, ''),
(58, 18222090, 26, 4, ''),
(59, 18222090, 27, 4, ''),
(60, 18222090, 28, 4, ''),
(61, 18222090, 29, 4, ''),
(62, 18222090, 30, 4, ''),
(63, 18222090, 31, 4, ''),
(64, 18222090, 32, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`no`, `id`, `nama`) VALUES
(1, 1, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','teacher','student','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `id`, `username`, `password`, `role`) VALUES
(5, 2, 'admin', '$2y$10$Pn8VaKRjzFJbYKVPp0Ov3u0goxl6SJXDCMfqdoA3PHRH6nLwyk21a', 'admin'),
(8, 10, 'teacher', '$2y$10$Em1oR8BcU1iyuiWtkH8utuIcuBbwxAnr/1h0G3.LRrfViNXSb.tBG', 'teacher'),
(25, 18222078, 'Monica', '$2y$10$uL750R4l8kPGaUeK5JMc2OOdyGjfBObU3s31xYKr5y/zhMwQQdQgm', 'student'),
(26, 18222074, 'Kayla', '$2y$10$hLMgX29.sCYx/VRv1/RlVO2Ued76s2ikZhvDl8553eCoPigq37ezW', 'student'),
(27, 18222094, 'Yovanka', '$2y$10$HOVQquKv9onfqk..brp0ve0aZ2/pMO/8EJvqO6XOOi5JRAnTLWC/m', 'student'),
(28, 18222026, 'Tamara', '$2y$10$F/KieR1pJjADunknRT65Se5I71CV6uBxn/Z9HFUw8RB0QqoIb0FA2', 'student'),
(29, 18222090, 'Kerlyn', '$2y$10$oYljklDLZfedDhCH8tKA5eGZQEktaL9W0.g10fX/Z8Eo1NBSlHQDC', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `students_courses`
--
ALTER TABLE `students_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18222115;

--
-- AUTO_INCREMENT for table `students_courses`
--
ALTER TABLE `students_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students_courses`
--
ALTER TABLE `students_courses`
  ADD CONSTRAINT `students_courses_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `students_courses_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
