-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 09:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `londri_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `cucian`
--

CREATE TABLE `cucian` (
  `id` int(11) NOT NULL,
  `pelanggan` int(11) NOT NULL,
  `masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `keluar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('proses','siap','diambil') NOT NULL,
  `jumlah` decimal(5,2) NOT NULL,
  `paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cucian`
--

INSERT INTO `cucian` (`id`, `pelanggan`, `masuk`, `selesai`, `keluar`, `status`, `jumlah`, `paket`) VALUES
(1, 10, '2019-07-19 22:20:23', '2019-07-21 07:19:36', '2019-07-24 04:17:03', 'diambil', '4.14', 1),
(2, 8, '2019-09-26 20:54:52', '2019-09-29 07:49:31', '2019-10-01 06:43:47', 'diambil', '3.11', 2),
(3, 19, '2019-10-02 13:06:58', '2019-10-03 20:53:24', '2019-10-06 12:37:34', 'diambil', '2.50', 1),
(4, 17, '2019-10-14 00:05:59', '2019-10-14 18:01:12', '2019-10-14 23:42:35', 'diambil', '6.47', 2),
(5, 11, '2019-10-26 00:10:11', '2019-10-27 02:13:24', '2019-10-29 08:58:54', 'diambil', '6.96', 2),
(6, 18, '2019-07-03 18:13:23', '2019-07-03 20:55:06', '2019-07-05 15:05:18', 'diambil', '2.85', 2),
(7, 11, '2019-08-06 22:31:17', '2019-08-09 10:03:33', '2019-08-10 23:43:29', 'diambil', '7.35', 1),
(8, 19, '2019-11-05 13:56:33', '2019-11-06 00:32:09', '2019-11-08 01:20:26', 'diambil', '2.19', 1),
(10, 8, '2019-08-17 07:17:18', '2019-08-18 14:19:16', '2019-08-20 22:01:35', 'diambil', '0.18', 2),
(11, 11, '2019-06-26 04:18:05', '2019-06-28 02:29:18', '2019-06-30 21:44:14', 'diambil', '7.72', 1),
(12, 5, '2019-10-25 18:01:44', '2019-10-26 23:33:32', '2019-10-29 04:13:39', 'diambil', '9.16', 1),
(13, 8, '2019-06-03 08:01:09', '2019-06-04 00:47:31', '2019-06-06 08:05:29', 'diambil', '0.68', 1),
(14, 14, '2019-11-20 11:51:17', '2019-11-22 03:54:05', '2019-11-22 13:17:07', 'diambil', '2.35', 2),
(15, 19, '2019-11-29 16:57:29', '2019-11-23 02:14:17', '2019-11-29 16:57:29', 'diambil', '9.02', 1),
(16, 17, '2019-08-13 02:06:26', '2019-08-15 15:31:23', '2019-08-17 03:32:51', 'diambil', '2.93', 1),
(17, 11, '2019-11-09 21:55:17', '2019-11-11 14:50:57', '2019-11-14 05:30:06', 'diambil', '3.05', 1),
(18, 10, '2019-08-21 20:11:31', '2019-08-21 21:14:24', '2019-08-21 21:44:56', 'diambil', '3.94', 1),
(19, 14, '2019-09-04 07:44:29', '2019-09-06 18:55:44', '2019-09-08 06:22:12', 'diambil', '4.16', 2),
(20, 14, '2019-10-20 06:55:51', '2019-10-21 08:15:14', '2019-10-22 18:04:59', 'diambil', '4.31', 1),
(21, 17, '2019-08-15 20:13:41', '2019-08-17 11:29:52', '2019-08-18 22:02:02', 'diambil', '2.73', 1),
(22, 13, '2019-07-03 01:37:09', '2019-07-03 10:59:38', '2019-07-06 00:34:27', 'diambil', '4.33', 1),
(23, 12, '2019-07-19 06:35:03', '2019-07-21 17:53:43', '2019-07-23 22:10:36', 'diambil', '5.36', 1),
(24, 7, '2019-08-22 19:19:11', '2019-08-23 23:54:17', '2019-08-24 15:49:43', 'diambil', '7.45', 1),
(25, 2, '2019-11-21 17:33:01', '2019-11-24 02:47:56', '2019-11-25 04:07:01', 'diambil', '7.76', 2),
(26, 16, '2019-08-10 09:30:29', '2019-08-13 07:36:34', '2019-08-14 10:01:59', 'diambil', '8.40', 2),
(27, 11, '2019-10-13 10:22:43', '2019-10-14 17:09:40', '2019-10-15 23:13:53', 'diambil', '3.60', 1),
(28, 12, '2019-06-21 20:28:46', '2019-06-23 19:44:53', '2019-06-23 22:34:29', 'diambil', '9.56', 2),
(29, 19, '2019-08-08 04:40:46', '2019-08-08 22:15:17', '2019-08-10 02:44:45', 'diambil', '7.52', 2),
(30, 19, '2019-08-18 01:26:15', '2019-08-19 11:55:07', '2019-08-21 12:04:44', 'diambil', '3.60', 1),
(31, 16, '2019-09-28 20:25:42', '2019-09-30 07:05:51', '2019-10-02 21:01:00', 'diambil', '2.61', 1),
(32, 10, '2019-06-14 13:28:49', '2019-06-15 13:53:12', '2019-06-15 20:45:03', 'diambil', '5.98', 2),
(33, 10, '2019-11-18 09:25:39', '2019-11-19 18:01:05', '2019-11-21 14:52:42', 'diambil', '4.95', 1),
(34, 10, '2019-08-02 13:55:20', '2019-08-04 06:29:22', '2019-08-04 08:58:26', 'diambil', '0.16', 2),
(35, 8, '2019-11-29 16:57:43', '2019-11-29 16:56:06', '2019-11-29 16:57:43', 'diambil', '5.82', 2),
(36, 1, '2019-09-22 00:04:56', '2019-09-24 16:29:40', '2019-09-26 08:07:52', 'diambil', '5.84', 2),
(37, 7, '2019-09-25 07:03:23', '2019-09-27 11:27:06', '2019-09-30 05:20:37', 'diambil', '7.27', 1),
(38, 3, '2019-07-04 11:18:59', '2019-07-06 03:59:16', '2019-07-06 18:24:22', 'diambil', '9.76', 2),
(39, 15, '2019-09-02 13:50:40', '2019-09-02 20:02:43', '2019-09-05 05:27:49', 'diambil', '7.65', 2),
(40, 12, '2019-08-25 13:01:22', '2019-08-27 12:05:10', '2019-08-28 22:26:14', 'diambil', '1.72', 1),
(41, 12, '2019-06-25 02:56:16', '2019-06-25 09:03:20', '2019-06-27 15:29:47', 'diambil', '9.48', 2),
(42, 3, '2019-10-12 08:30:53', '2019-10-13 02:04:13', '2019-10-15 05:40:30', 'diambil', '5.34', 2),
(43, 18, '2019-11-16 04:13:12', '2019-11-17 10:08:27', '2019-11-17 13:12:25', 'diambil', '4.20', 1),
(44, 15, '2019-05-31 06:36:06', '2019-06-02 05:37:18', '2019-06-02 12:52:05', 'diambil', '4.67', 2),
(45, 1, '2019-06-07 23:23:07', '2019-06-10 00:07:52', '2019-06-12 19:01:39', 'diambil', '5.55', 1),
(46, 9, '2019-11-21 15:45:51', '2019-11-22 15:51:57', '2019-11-24 19:09:55', 'diambil', '0.45', 2),
(47, 18, '2019-11-29 16:57:44', '2019-11-29 16:57:35', '2019-11-29 16:57:44', 'diambil', '4.11', 2),
(48, 10, '2019-10-29 00:03:28', '2019-10-30 07:49:04', '2019-10-31 15:16:38', 'diambil', '5.18', 2),
(49, 11, '2019-09-02 07:12:36', '2019-09-03 19:08:26', '2019-09-04 16:20:54', 'diambil', '7.19', 2),
(50, 1, '2019-06-22 17:20:19', '2019-06-24 22:16:23', '2019-06-27 11:53:53', 'diambil', '1.81', 1),
(51, 2, '2019-09-24 06:22:44', '2019-09-26 00:30:22', '2019-09-27 06:39:14', 'diambil', '2.15', 2),
(52, 11, '2019-10-19 16:54:57', '2019-10-21 18:22:11', '2019-10-23 23:08:13', 'diambil', '3.57', 2),
(53, 19, '2019-10-04 20:21:05', '2019-10-07 00:50:37', '2019-10-07 03:26:56', 'diambil', '4.91', 1),
(54, 7, '2019-10-19 13:18:59', '2019-10-20 07:24:26', '2019-10-22 11:51:33', 'diambil', '7.35', 1),
(55, 18, '2019-08-14 06:56:48', '2019-08-16 11:06:12', '2019-08-18 00:11:05', 'diambil', '7.80', 1),
(56, 7, '2019-07-25 20:59:07', '2019-07-27 21:41:18', '2019-07-30 18:50:49', 'diambil', '0.55', 2),
(57, 15, '2019-10-17 16:38:01', '2019-10-18 15:33:06', '2019-10-21 03:49:04', 'diambil', '4.16', 2),
(58, 12, '2019-09-21 02:58:12', '2019-09-22 18:45:39', '2019-09-23 15:37:11', 'diambil', '9.20', 1),
(59, 4, '2019-09-21 12:57:51', '2019-09-22 22:26:13', '2019-09-24 10:02:15', 'diambil', '6.19', 1),
(60, 17, '2019-11-02 02:09:40', '2019-11-04 21:47:01', '2019-11-06 04:42:42', 'diambil', '7.20', 2),
(61, 10, '2019-09-30 10:51:12', '2019-09-30 23:26:17', '2019-10-03 21:35:29', 'diambil', '2.95', 2),
(62, 3, '2019-11-29 16:57:46', '2019-11-25 21:23:11', '2019-11-29 16:57:46', 'diambil', '9.54', 1),
(63, 13, '2019-11-18 05:29:12', '2019-11-18 08:00:11', '2019-11-20 19:48:58', 'diambil', '7.07', 2),
(64, 2, '2019-09-14 03:49:56', '2019-09-16 09:45:49', '2019-09-18 01:07:56', 'diambil', '7.74', 2),
(65, 12, '2019-10-18 01:56:43', '2019-10-19 16:23:09', '2019-10-20 07:26:54', 'diambil', '0.37', 2),
(66, 6, '2019-06-23 15:54:55', '2019-06-25 07:05:02', '2019-06-27 02:30:47', 'diambil', '0.55', 2),
(67, 13, '2019-05-28 11:23:56', '2019-05-29 15:37:30', '2019-05-31 02:27:30', 'diambil', '2.93', 1),
(68, 8, '2019-11-11 18:35:21', '2019-11-13 15:02:58', '2019-11-15 02:08:11', 'diambil', '3.02', 2),
(69, 7, '2019-10-04 18:41:31', '2019-10-07 13:15:50', '2019-10-07 17:24:12', 'diambil', '9.34', 1),
(70, 11, '2019-06-12 09:01:50', '2019-06-12 23:29:30', '2019-06-14 05:53:25', 'diambil', '8.95', 2),
(71, 1, '2019-07-30 05:03:06', '2019-08-01 08:49:17', '2019-08-02 20:42:09', 'diambil', '2.81', 2),
(72, 12, '2019-08-27 20:06:50', '2019-08-28 06:41:40', '2019-08-28 15:16:49', 'diambil', '0.65', 2),
(73, 16, '2019-10-24 12:03:43', '2019-10-27 05:27:00', '2019-10-28 16:29:12', 'diambil', '7.98', 2),
(74, 9, '2019-06-21 08:19:56', '2019-06-23 11:36:13', '2019-06-24 07:57:05', 'diambil', '7.06', 1),
(75, 2, '2019-06-10 11:57:03', '2019-06-13 09:40:13', '2019-06-13 18:43:41', 'diambil', '6.31', 1),
(76, 13, '2019-07-19 02:38:24', '2019-07-20 13:15:16', '2019-07-20 15:54:51', 'diambil', '4.48', 1),
(77, 16, '2019-06-28 13:31:48', '2019-06-30 01:38:48', '2019-07-02 13:46:03', 'diambil', '0.23', 1),
(79, 15, '2019-09-17 08:51:00', '2019-09-18 01:26:21', '2019-09-20 07:05:06', 'diambil', '8.49', 1),
(80, 8, '2019-09-08 17:48:49', '2019-09-09 18:04:59', '2019-09-11 12:20:24', 'diambil', '6.20', 1),
(81, 5, '2019-09-27 02:05:15', '2019-09-29 01:17:20', '2019-09-30 14:43:52', 'diambil', '2.48', 1),
(82, 2, '2019-08-21 02:33:52', '2019-08-23 19:17:11', '2019-08-25 00:53:30', 'diambil', '0.92', 1),
(83, 7, '2019-07-08 16:04:25', '2019-07-11 13:00:02', '2019-07-12 23:49:31', 'diambil', '7.88', 2),
(84, 16, '2019-07-06 04:00:16', '2019-07-07 15:04:24', '2019-07-10 00:41:36', 'diambil', '2.45', 1),
(85, 5, '2019-07-25 02:25:59', '2019-07-27 08:22:01', '2019-07-29 00:16:33', 'diambil', '9.03', 2),
(86, 3, '2019-08-08 23:42:29', '2019-08-11 09:13:33', '2019-08-13 22:57:03', 'diambil', '7.34', 2),
(87, 5, '2019-10-20 07:28:25', '2019-10-22 23:43:51', '2019-10-25 07:18:28', 'diambil', '7.70', 2),
(88, 2, '2019-11-01 22:06:29', '2019-11-02 06:12:22', '2019-11-03 18:43:06', 'diambil', '5.54', 1),
(89, 3, '2019-09-03 20:04:37', '2019-09-06 15:51:41', '2019-09-09 07:41:17', 'diambil', '1.51', 1),
(90, 6, '2019-10-17 05:19:49', '2019-10-19 23:35:33', '2019-10-22 05:17:37', 'diambil', '6.98', 1),
(91, 7, '2019-09-04 13:49:24', '2019-09-04 14:31:09', '2019-09-06 11:06:58', 'diambil', '6.20', 1),
(92, 5, '2019-09-18 00:34:27', '2019-09-19 15:39:41', '2019-09-22 07:00:55', 'diambil', '3.50', 2),
(93, 8, '2019-10-08 19:47:49', '2019-10-10 14:04:53', '2019-10-11 19:23:08', 'diambil', '5.13', 2),
(94, 18, '2019-08-09 19:51:04', '2019-08-12 07:06:30', '2019-08-13 04:45:17', 'diambil', '6.12', 2),
(95, 12, '2019-08-27 18:44:43', '2019-08-29 19:17:33', '2019-09-01 15:38:21', 'diambil', '3.90', 2),
(96, 11, '2019-09-05 02:56:07', '2019-09-07 17:34:02', '2019-09-10 01:05:56', 'diambil', '8.71', 1),
(97, 10, '2019-11-14 21:09:22', '2019-11-15 14:38:47', '2019-11-16 14:32:00', 'diambil', '5.02', 2),
(99, 17, '2019-09-09 22:30:53', '2019-09-10 11:16:05', '2019-09-13 07:16:21', 'diambil', '0.33', 2),
(100, 9, '2019-11-13 23:18:05', '2019-11-15 02:35:37', '2019-11-15 07:28:50', 'diambil', '4.05', 1),
(101, 5, '2019-07-02 04:36:34', '2019-07-03 16:41:38', '2019-07-05 18:36:20', 'diambil', '7.82', 2),
(102, 19, '2019-11-22 13:39:50', '2019-11-25 06:21:21', '2019-11-27 11:59:02', 'diambil', '8.48', 1),
(103, 13, '2019-06-10 23:21:41', '2019-06-11 20:44:34', '2019-06-13 05:54:34', 'diambil', '3.08', 2),
(104, 1, '2019-09-27 07:32:58', '2019-09-27 19:23:27', '2019-09-29 00:41:34', 'diambil', '0.62', 2),
(105, 18, '2019-06-21 07:23:55', '2019-06-23 09:38:08', '2019-06-24 23:50:25', 'diambil', '6.18', 2),
(107, 11, '2019-10-02 01:33:29', '2019-10-04 03:15:02', '2019-10-05 05:10:49', 'diambil', '2.32', 1),
(108, 1, '2019-08-13 23:02:50', '2019-08-15 02:05:18', '2019-08-15 13:19:26', 'diambil', '5.94', 1),
(109, 11, '2019-09-07 22:27:13', '2019-09-10 06:46:22', '2019-09-12 21:22:51', 'diambil', '1.16', 2),
(110, 17, '2019-09-29 01:39:42', '2019-10-01 00:09:23', '2019-10-03 22:47:04', 'diambil', '2.34', 1),
(111, 14, '2019-06-15 00:30:38', '2019-06-15 04:46:55', '2019-06-16 10:21:32', 'diambil', '4.80', 1),
(112, 13, '2019-06-20 13:57:33', '2019-06-21 19:41:12', '2019-06-22 11:25:42', 'diambil', '2.91', 1),
(113, 7, '2019-10-03 06:36:36', '2019-10-04 16:17:40', '2019-10-07 14:42:55', 'diambil', '3.86', 2),
(114, 9, '2019-11-20 20:56:28', '2019-11-21 13:56:54', '2019-11-23 00:48:26', 'diambil', '7.25', 2),
(115, 8, '2019-11-10 10:27:15', '2019-11-10 12:09:24', '2019-11-10 19:50:21', 'diambil', '4.73', 1),
(116, 8, '2019-06-11 00:46:19', '2019-06-12 22:31:51', '2019-06-15 05:02:43', 'diambil', '0.77', 2),
(117, 9, '2019-06-17 17:30:17', '2019-06-19 12:29:47', '2019-06-20 21:30:46', 'diambil', '8.12', 2),
(118, 7, '2019-08-29 20:24:16', '2019-09-01 10:30:48', '2019-09-03 19:27:09', 'diambil', '5.75', 1),
(119, 8, '2019-09-03 14:30:26', '2019-09-05 20:13:37', '2019-09-08 00:11:28', 'diambil', '2.92', 2),
(120, 18, '2019-07-02 13:36:58', '2019-07-05 12:28:27', '2019-07-07 19:01:18', 'diambil', '9.54', 2),
(121, 7, '2019-08-04 16:52:11', '2019-08-07 03:22:25', '2019-08-08 09:22:40', 'diambil', '4.72', 2),
(123, 7, '2019-08-21 05:23:10', '2019-08-21 23:15:45', '2019-08-23 07:45:06', 'diambil', '2.03', 1),
(124, 4, '2019-11-03 17:19:24', '2019-11-04 21:14:48', '2019-11-06 04:54:35', 'diambil', '2.84', 1),
(125, 13, '2019-08-25 03:11:53', '2019-08-27 18:32:42', '2019-08-29 22:04:38', 'diambil', '2.61', 2),
(126, 2, '2019-06-12 14:28:03', '2019-06-15 00:38:54', '2019-06-17 19:11:27', 'diambil', '2.06', 1),
(127, 10, '2019-09-13 18:55:12', '2019-09-14 22:38:22', '2019-09-17 20:53:25', 'diambil', '7.25', 2),
(128, 12, '2019-07-31 18:33:00', '2019-07-31 22:34:25', '2019-08-01 05:38:52', 'diambil', '9.99', 2),
(129, 16, '2019-10-10 09:16:35', '2019-10-11 11:37:14', '2019-10-11 22:05:53', 'diambil', '0.46', 2),
(130, 5, '2019-08-06 01:34:00', '2019-08-07 07:17:29', '2019-08-09 20:22:58', 'diambil', '3.39', 1),
(131, 10, '2019-10-03 18:43:22', '2019-10-04 03:00:15', '2019-10-04 07:37:49', 'diambil', '9.23', 1),
(132, 13, '2019-08-26 05:35:04', '2019-08-28 22:09:47', '2019-08-30 13:14:50', 'diambil', '5.38', 2),
(133, 6, '2019-06-19 18:22:43', '2019-06-22 01:45:25', '2019-06-22 19:50:18', 'diambil', '7.06', 1),
(134, 5, '2019-06-18 11:42:52', '2019-06-20 04:01:30', '2019-06-22 22:02:49', 'diambil', '7.14', 2),
(135, 13, '2019-09-16 07:51:13', '2019-09-18 02:32:32', '2019-09-19 22:03:44', 'diambil', '2.68', 2),
(136, 14, '2019-08-17 07:09:53', '2019-08-20 01:16:42', '2019-08-20 04:14:30', 'diambil', '8.24', 2),
(137, 12, '2019-08-10 12:44:09', '2019-08-12 16:27:18', '2019-08-14 04:55:12', 'diambil', '4.37', 1),
(138, 7, '2019-08-27 17:42:12', '2019-08-28 07:17:47', '2019-08-28 09:20:23', 'diambil', '8.40', 1),
(139, 15, '2019-07-09 01:02:47', '2019-07-11 01:34:17', '2019-07-12 07:44:42', 'diambil', '8.08', 1),
(140, 4, '2019-06-24 23:12:10', '2019-06-26 03:30:12', '2019-06-28 01:52:49', 'diambil', '5.99', 1),
(141, 11, '2019-10-28 09:48:52', '2019-10-28 13:21:20', '2019-10-31 11:23:28', 'diambil', '3.27', 1),
(142, 14, '2019-11-08 02:09:44', '2019-11-10 05:32:09', '2019-11-10 05:55:30', 'diambil', '0.54', 2),
(143, 17, '2019-07-21 00:20:19', '2019-07-23 17:52:19', '2019-07-24 09:18:26', 'diambil', '1.21', 1),
(144, 18, '2019-06-07 00:23:34', '2019-06-07 02:15:32', '2019-06-07 08:49:07', 'diambil', '8.67', 2),
(145, 13, '2019-08-08 04:26:13', '2019-08-08 08:42:31', '2019-08-10 16:33:50', 'diambil', '7.44', 1),
(146, 4, '2019-10-02 10:05:22', '2019-10-02 10:16:53', '2019-10-03 02:10:21', 'diambil', '4.10', 2),
(147, 6, '2019-07-10 09:52:21', '2019-07-12 00:43:03', '2019-07-14 09:45:22', 'diambil', '9.94', 1),
(148, 2, '2019-11-07 21:49:56', '2019-11-09 21:59:44', '2019-11-11 22:18:28', 'diambil', '4.64', 1),
(149, 3, '2019-08-13 15:31:14', '2019-08-15 00:58:11', '2019-08-15 10:21:04', 'diambil', '8.59', 2),
(150, 20, '2019-11-29 16:57:38', '2019-11-29 16:57:38', '0000-00-00 00:00:00', 'siap', '5.00', 2),
(151, 22, '2019-11-29 17:37:58', '2019-11-29 16:57:40', '2019-11-29 17:37:58', 'diambil', '2.00', 1),
(152, 21, '2019-11-29 16:57:49', '2019-11-29 16:56:17', '2019-11-29 16:57:49', 'diambil', '2.45', 1),
(153, 9, '2019-11-29 17:41:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proses', '2.25', 2),
(154, 21, '2019-11-30 05:21:14', '2019-11-30 05:21:14', '0000-00-00 00:00:00', 'siap', '4.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `drive` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(6) NOT NULL COMMENT 'per Kg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`) VALUES
(1, 'Cuci Biasa', 2500),
(2, 'Cuci + Setrika', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `hp`, `email`) VALUES
(1, 'Harsana Natsir', '0525 1724 000', 'Ella.Wulandari@gmail.co.id'),
(2, 'Cawisono Wasita', '(+62) 592 7584 ', 'Amelia.Mustofa@yahoo.com'),
(3, 'Ridwan Wibisono', '0589 3892 814', 'Jinawi.Rahimah@gmail.com'),
(4, 'Jarwadi Maulana', '(+62) 981 4755 ', 'Cakrabirawa.Laksita48@gmail.com'),
(5, 'Febi Hartati', '(+62) 931 8686 ', 'Erik45@gmail.com'),
(6, 'Harto Sirait', '0633 8492 7271', 'Martana_Haryanti75@gmail.com'),
(7, 'Taswir Jailani', '0963 9863 705', 'Farah_Tampubolon49@gmail.com'),
(8, 'Asirwada Kusumo', '0607 2856 883', 'Balangga_Megantara@gmail.co.id'),
(9, 'Dalima Maryati', '(+62) 887 505 3', 'Banawi_Latupono35@gmail.com'),
(10, 'Estiono Marpaung', '(+62) 598 4021 ', 'Latika.Pangestu91@yahoo.com'),
(11, 'Gamanto Utama S.Gz', '0968 9259 537', 'Malika32@gmail.com'),
(12, 'Nadia Hassanah', '0530 9586 006', 'Wasis.Nugroho22@gmail.co.id'),
(13, 'Ina Kuswandari', '027 2745 7328', 'Eman_Permadi15@yahoo.com'),
(14, 'Azalea Hartati', '(+62) 921 8830 ', 'Mahfud_Kuswandari@yahoo.com'),
(15, 'Yoga Dongoran M.Pd', '0881 2494 8652', 'Luthfi.Gunawan@yahoo.com'),
(16, 'Hamzah Lazuardi S.Sos', '(+62) 26 8679 6', 'Faizah47@gmail.com'),
(17, 'Bakidin Hakim', '0699 2334 6435', 'Yulia52@yahoo.co.id'),
(18, 'Banawa Firmansyah', '0201 2518 717', 'Ade42@yahoo.co.id'),
(19, 'Melinda Laksita', '(+62) 807 3056 ', 'Karen53@gmail.com'),
(20, 'Wirda Kuswandari', '0799 2545 080', 'Elma70@yahoo.com'),
(21, 'Wafa', '+6282281199234', 'wafax.4@gmail.com'),
(22, 'Jokowi', '082211212312', 'loremipsum@mail.co');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `avatar`) VALUES
(0, 'admin', 'wafax.4@gmail.com', '2d480d985c7b5530f548215eb377c3b3', 'admin1574717985.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cucian`
--
ALTER TABLE `cucian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelanggan` (`pelanggan`),
  ADD KEY `paket` (`paket`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cucian`
--
ALTER TABLE `cucian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cucian`
--
ALTER TABLE `cucian`
  ADD CONSTRAINT `cucian_ibfk_1` FOREIGN KEY (`pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `cucian_ibfk_2` FOREIGN KEY (`paket`) REFERENCES `paket` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;