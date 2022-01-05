-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 10:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: ` no.2-quan-ly-tkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `actived_flag` int(1) NOT NULL,
  `reset_password_token` varchar(100) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) NOT NULL,
  `school_year` char(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `week_day` char(10) NOT NULL,
  `lession` char(10) NOT NULL,
  `notes` text NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `school_year` char(10) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `avatar`, `description`, `school_year`, `updated`, `created`) VALUES
(1, 'English', 'english.jpg', 'Ngoại ngữ', '2', '2022-01-04 15:26:52', '2022-01-04 15:26:52'),
(2, 'Literature', 'literature.jpg', 'Mon van hoc', '3', '2022-01-04 15:26:52', '2022-01-04 15:26:52'),
(3, 'Statistics', 'statistic.jpg', 'Xac suat', '3', '2022-01-04 15:26:52', '2022-01-04 15:26:52'),
(4, 'Chemistry', 'chemistry.jpg', 'Mon hoa cho SV', '2', '2022-01-04 15:26:52', '2022-01-04 15:26:52'),
(5, 'Web design', 'mathematics.jpg', 'Thiet ke web', '4', '2022-01-04 15:26:52', '2022-01-04 15:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `specialized` char(10) NOT NULL,
  `degree` char(10) NOT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `avatar`, `description`, `specialized`, `degree`, `updated`, `created`) VALUES
(1, 'Nguyễn Văn A', 'nva.jpg', 'Tiến sỹ khoa toán', 'MAT', 'TS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(2, 'Trần Thị B', 'ttb.jpg', 'Tiến sỹ khoa lý', 'GEO', 'TS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(3, 'Hoàng Kim T', 'hkt.jpg', 'Thạc sỹ', 'AST', 'ThS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(4, 'Nguyễn Khắc Q', 'nkq.jpg', 'Phó giáo sư mời giảng', 'CHE', 'PGS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(5, 'Trần Văn C', 'tvc.jpg', 'Giáo Sư khoa Toán', 'MAT', 'GS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(6, 'Nguyễn Thanh V', 'ntv.jpg', 'Tiến sỹ khoa Sinh', 'BIO', 'TS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(7, 'Vũ Thu H', 'vth.jpg', 'Tiến sỹ mời giảng', 'CHE', 'TS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(8, 'Nguyễn Thị D', 'ntd.jpg', 'Thạc sỹ khoa sinh', 'BIO', 'ThS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(9, 'Nguyễn Cẩm V', 'ncv.jpg', 'Tiến sỹ khoa lý', 'GEO', 'TS', '2022-01-05 16:03:55', '2022-01-05 16:03:55'),
(10, 'Nguyễn Hữu H', 'nhh.jpg', 'Phó giáo sư mời giảng', 'AST', 'PGS', '2022-01-05 16:03:55', '2022-01-05 16:03:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
