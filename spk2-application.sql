-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2023 pada 15.41
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-application`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatives`
--

CREATE TABLE `alternatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatives`
--

INSERT INTO `alternatives` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A1', '2023-06-22 08:36:49', '2023-06-22 08:36:49'),
(2, 'A2', '2023-06-22 08:39:59', '2023-06-22 08:39:59'),
(3, 'A3', '2023-06-22 08:41:04', '2023-06-22 08:41:04'),
(4, 'A4', '2023-06-23 05:20:09', '2023-06-23 05:20:09'),
(5, 'A5', '2023-06-23 05:21:45', '2023-06-23 05:21:45'),
(6, 'A6', '2023-06-23 05:23:28', '2023-06-23 05:23:28'),
(7, 'A7', '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(8, 'A8', '2023-06-23 05:25:56', '2023-06-23 05:25:56'),
(9, 'A9', '2023-06-23 05:27:24', '2023-06-23 05:27:24'),
(10, 'A10', '2023-06-23 05:29:02', '2023-06-23 05:29:02'),
(11, 'A11', '2023-06-23 05:30:07', '2023-06-23 05:30:07'),
(12, 'A12', '2023-06-23 05:30:54', '2023-06-23 05:30:54'),
(13, 'A13', '2023-06-23 05:31:57', '2023-06-23 05:31:57'),
(14, 'A14', '2023-06-23 05:32:58', '2023-06-23 05:32:58'),
(15, 'A15', '2023-06-23 05:33:47', '2023-06-23 05:33:47'),
(16, 'A16', '2023-06-23 05:34:35', '2023-06-23 05:34:35'),
(17, 'A17', '2023-06-23 05:35:20', '2023-06-23 05:35:20'),
(18, 'A18', '2023-06-23 05:36:11', '2023-06-23 05:36:11'),
(19, 'A19', '2023-06-23 05:37:12', '2023-06-23 05:37:12'),
(20, 'A20', '2023-06-23 05:37:51', '2023-06-23 05:37:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternativescores`
--

CREATE TABLE `alternativescores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternative_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `rating_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternativescores`
--

INSERT INTO `alternativescores` (`id`, `alternative_id`, `criteria_id`, `rating_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, '2023-06-22 08:36:49', '2023-06-24 05:47:41'),
(2, 1, 2, 7, '2023-06-22 08:36:49', '2023-06-22 08:36:49'),
(3, 1, 3, 13, '2023-06-22 08:36:49', '2023-06-24 05:47:41'),
(4, 1, 4, 16, '2023-06-22 08:36:50', '2023-06-24 05:47:41'),
(5, 1, 5, 22, '2023-06-22 08:36:50', '2023-06-22 08:36:50'),
(6, 1, 6, 27, '2023-06-22 08:36:50', '2023-06-22 08:36:50'),
(7, 1, 7, 32, '2023-06-22 08:36:50', '2023-06-24 05:47:41'),
(8, 1, 8, 37, '2023-06-22 08:36:50', '2023-06-22 08:36:50'),
(9, 1, 9, 43, '2023-06-22 08:36:50', '2023-06-24 05:47:41'),
(10, 1, 10, 47, '2023-06-22 08:36:50', '2023-06-24 05:47:41'),
(11, 2, 1, 1, '2023-06-22 08:40:00', '2023-06-24 05:48:42'),
(12, 2, 2, 7, '2023-06-22 08:40:00', '2023-06-22 08:40:00'),
(13, 2, 3, 12, '2023-06-22 08:40:01', '2023-06-22 08:40:01'),
(14, 2, 4, 16, '2023-06-22 08:40:01', '2023-06-24 05:48:42'),
(15, 2, 5, 22, '2023-06-22 08:40:02', '2023-06-22 08:40:02'),
(16, 2, 6, 27, '2023-06-22 08:40:03', '2023-06-24 05:48:42'),
(17, 2, 7, 33, '2023-06-22 08:40:03', '2023-06-24 05:48:42'),
(18, 2, 8, 36, '2023-06-22 08:40:04', '2023-06-22 08:40:04'),
(19, 2, 9, 43, '2023-06-22 08:40:04', '2023-06-24 05:48:42'),
(20, 2, 10, 47, '2023-06-22 08:40:04', '2023-06-24 05:48:42'),
(21, 3, 1, 2, '2023-06-22 08:41:04', '2023-06-22 08:41:04'),
(22, 3, 2, 8, '2023-06-22 08:41:04', '2023-06-24 05:49:37'),
(23, 3, 3, 12, '2023-06-22 08:41:04', '2023-06-22 08:41:04'),
(24, 3, 4, 17, '2023-06-22 08:41:05', '2023-06-22 08:41:05'),
(25, 3, 5, 21, '2023-06-22 08:41:05', '2023-06-24 05:49:37'),
(26, 3, 6, 27, '2023-06-22 08:41:05', '2023-06-22 08:41:05'),
(27, 3, 7, 33, '2023-06-22 08:41:05', '2023-06-24 05:49:37'),
(28, 3, 8, 38, '2023-06-22 08:41:05', '2023-06-24 05:49:37'),
(29, 3, 9, 43, '2023-06-22 08:41:05', '2023-06-24 05:49:38'),
(30, 3, 10, 46, '2023-06-22 08:41:05', '2023-06-24 05:49:38'),
(31, 4, 1, 2, '2023-06-23 05:20:09', '2023-06-23 05:20:09'),
(32, 4, 2, 7, '2023-06-23 05:20:10', '2023-06-24 05:50:35'),
(33, 4, 3, 13, '2023-06-23 05:20:10', '2023-06-24 05:50:35'),
(34, 4, 4, 16, '2023-06-23 05:20:10', '2023-06-24 05:50:35'),
(35, 4, 5, 22, '2023-06-23 05:20:10', '2023-06-24 05:50:35'),
(36, 4, 6, 27, '2023-06-23 05:20:10', '2023-06-23 05:20:10'),
(37, 4, 7, 32, '2023-06-23 05:20:10', '2023-06-24 05:50:35'),
(38, 4, 8, 38, '2023-06-23 05:20:10', '2023-06-23 05:20:10'),
(39, 4, 9, 42, '2023-06-23 05:20:10', '2023-06-23 05:20:10'),
(40, 4, 10, 46, '2023-06-23 05:20:11', '2023-06-24 05:50:35'),
(41, 5, 1, 2, '2023-06-23 05:21:45', '2023-06-23 05:21:45'),
(42, 5, 2, 7, '2023-06-23 05:21:45', '2023-06-23 05:21:45'),
(43, 5, 3, 12, '2023-06-23 05:21:46', '2023-06-23 05:21:46'),
(44, 5, 4, 17, '2023-06-23 05:21:46', '2023-06-24 05:51:23'),
(45, 5, 5, 21, '2023-06-23 05:21:46', '2023-06-24 05:51:23'),
(46, 5, 6, 27, '2023-06-23 05:21:46', '2023-06-23 05:21:46'),
(47, 5, 7, 32, '2023-06-23 05:21:46', '2023-06-23 05:21:46'),
(48, 5, 8, 37, '2023-06-23 05:21:46', '2023-06-23 05:21:46'),
(49, 5, 9, 42, '2023-06-23 05:21:46', '2023-06-23 05:21:46'),
(50, 5, 10, 46, '2023-06-23 05:21:47', '2023-06-24 05:51:23'),
(51, 6, 1, 2, '2023-06-23 05:23:28', '2023-06-23 05:23:28'),
(52, 6, 2, 8, '2023-06-23 05:23:29', '2023-06-24 05:52:27'),
(53, 6, 3, 11, '2023-06-23 05:23:29', '2023-06-23 05:23:29'),
(54, 6, 4, 16, '2023-06-23 05:23:29', '2023-06-23 05:23:29'),
(55, 6, 5, 21, '2023-06-23 05:23:29', '2023-06-24 05:52:27'),
(56, 6, 6, 27, '2023-06-23 05:23:29', '2023-06-24 05:52:27'),
(57, 6, 7, 31, '2023-06-23 05:23:29', '2023-06-24 05:52:27'),
(58, 6, 8, 37, '2023-06-23 05:23:29', '2023-06-23 05:23:29'),
(59, 6, 9, 42, '2023-06-23 05:23:29', '2023-06-24 05:52:27'),
(60, 6, 10, 46, '2023-06-23 05:23:30', '2023-06-24 05:52:27'),
(61, 7, 1, 1, '2023-06-23 05:24:42', '2023-06-24 05:53:12'),
(62, 7, 2, 8, '2023-06-23 05:24:42', '2023-06-24 05:53:12'),
(63, 7, 3, 12, '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(64, 7, 4, 17, '2023-06-23 05:24:42', '2023-06-24 05:53:12'),
(65, 7, 5, 22, '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(66, 7, 6, 27, '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(67, 7, 7, 32, '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(68, 7, 8, 36, '2023-06-23 05:24:42', '2023-06-23 05:24:42'),
(69, 7, 9, 43, '2023-06-23 05:24:42', '2023-06-24 05:53:13'),
(70, 7, 10, 48, '2023-06-23 05:24:44', '2023-06-23 05:24:44'),
(71, 8, 1, 2, '2023-06-23 05:25:56', '2023-06-23 05:25:56'),
(72, 8, 2, 8, '2023-06-23 05:25:56', '2023-06-24 05:54:34'),
(73, 8, 3, 13, '2023-06-23 05:25:56', '2023-06-24 05:54:34'),
(74, 8, 4, 17, '2023-06-23 05:25:56', '2023-06-24 05:54:34'),
(75, 8, 5, 22, '2023-06-23 05:25:56', '2023-06-23 05:25:56'),
(76, 8, 6, 28, '2023-06-23 05:25:56', '2023-06-24 05:54:34'),
(77, 8, 7, 33, '2023-06-23 05:25:57', '2023-06-24 05:54:34'),
(78, 8, 8, 38, '2023-06-23 05:25:57', '2023-06-24 05:54:34'),
(79, 8, 9, 42, '2023-06-23 05:25:57', '2023-06-23 05:25:57'),
(80, 8, 10, 47, '2023-06-23 05:25:57', '2023-06-24 05:54:35'),
(81, 9, 1, 2, '2023-06-23 05:27:24', '2023-06-23 05:27:24'),
(82, 9, 2, 8, '2023-06-23 05:27:24', '2023-06-24 05:56:14'),
(83, 9, 3, 13, '2023-06-23 05:27:24', '2023-06-24 05:56:14'),
(84, 9, 4, 17, '2023-06-23 05:27:24', '2023-06-24 05:56:14'),
(85, 9, 5, 22, '2023-06-23 05:27:25', '2023-06-24 05:56:14'),
(86, 9, 6, 28, '2023-06-23 05:27:25', '2023-06-24 05:56:14'),
(87, 9, 7, 32, '2023-06-23 05:27:25', '2023-06-23 05:27:25'),
(88, 9, 8, 38, '2023-06-23 05:27:25', '2023-06-24 05:56:14'),
(89, 9, 9, 43, '2023-06-23 05:27:25', '2023-06-24 05:56:14'),
(90, 9, 10, 46, '2023-06-23 05:27:25', '2023-06-24 05:56:14'),
(91, 10, 1, 2, '2023-06-23 05:29:03', '2023-06-24 05:57:45'),
(92, 10, 2, 8, '2023-06-23 05:29:03', '2023-06-24 05:57:45'),
(93, 10, 3, 12, '2023-06-23 05:29:03', '2023-06-24 05:57:45'),
(94, 10, 4, 17, '2023-06-23 05:29:03', '2023-06-23 05:29:03'),
(95, 10, 5, 22, '2023-06-23 05:29:04', '2023-06-23 05:29:04'),
(96, 10, 6, 28, '2023-06-23 05:29:04', '2023-06-24 05:57:45'),
(97, 10, 7, 32, '2023-06-23 05:29:04', '2023-06-23 05:29:04'),
(98, 10, 8, 38, '2023-06-23 05:29:05', '2023-06-24 05:57:45'),
(99, 10, 9, 43, '2023-06-23 05:29:06', '2023-06-24 05:57:45'),
(100, 10, 10, 46, '2023-06-23 05:29:07', '2023-06-24 05:57:45'),
(101, 11, 1, 2, '2023-06-23 05:30:07', '2023-06-23 05:30:07'),
(102, 11, 2, 8, '2023-06-23 05:30:07', '2023-06-24 05:59:49'),
(103, 11, 3, 13, '2023-06-23 05:30:07', '2023-06-24 05:59:49'),
(104, 11, 4, 17, '2023-06-23 05:30:07', '2023-06-23 05:30:07'),
(105, 11, 5, 22, '2023-06-23 05:30:08', '2023-06-23 05:30:08'),
(106, 11, 6, 28, '2023-06-23 05:30:08', '2023-06-24 05:59:49'),
(107, 11, 7, 33, '2023-06-23 05:30:08', '2023-06-24 05:59:50'),
(108, 11, 8, 37, '2023-06-23 05:30:08', '2023-06-23 05:30:08'),
(109, 11, 9, 43, '2023-06-23 05:30:08', '2023-06-24 05:59:50'),
(110, 11, 10, 47, '2023-06-23 05:30:08', '2023-06-23 05:30:08'),
(111, 12, 1, 2, '2023-06-23 05:30:54', '2023-06-23 05:30:54'),
(112, 12, 2, 8, '2023-06-23 05:30:54', '2023-06-24 06:01:37'),
(113, 12, 3, 12, '2023-06-23 05:30:54', '2023-06-23 05:30:54'),
(114, 12, 4, 17, '2023-06-23 05:30:54', '2023-06-23 05:30:54'),
(115, 12, 5, 21, '2023-06-23 05:30:54', '2023-06-24 06:01:37'),
(116, 12, 6, 28, '2023-06-23 05:30:54', '2023-06-24 06:01:37'),
(117, 12, 7, 32, '2023-06-23 05:30:55', '2023-06-23 05:30:55'),
(118, 12, 8, 38, '2023-06-23 05:30:55', '2023-06-24 06:01:37'),
(119, 12, 9, 43, '2023-06-23 05:30:55', '2023-06-24 06:01:37'),
(120, 12, 10, 47, '2023-06-23 05:30:55', '2023-06-24 06:01:37'),
(121, 13, 1, 2, '2023-06-23 05:31:57', '2023-06-23 05:31:57'),
(122, 13, 2, 7, '2023-06-23 05:31:57', '2023-06-24 06:03:45'),
(123, 13, 3, 12, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(124, 13, 4, 17, '2023-06-23 05:31:58', '2023-06-23 05:31:58'),
(125, 13, 5, 22, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(126, 13, 6, 27, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(127, 13, 7, 33, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(128, 13, 8, 38, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(129, 13, 9, 44, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(130, 13, 10, 48, '2023-06-23 05:31:58', '2023-06-24 06:03:45'),
(131, 14, 1, 3, '2023-06-23 05:32:58', '2023-06-24 06:05:11'),
(132, 14, 2, 9, '2023-06-23 05:32:58', '2023-06-24 06:05:11'),
(133, 14, 3, 13, '2023-06-23 05:32:59', '2023-06-24 06:05:11'),
(134, 14, 4, 17, '2023-06-23 05:32:59', '2023-06-23 05:32:59'),
(135, 14, 5, 22, '2023-06-23 05:32:59', '2023-06-23 05:32:59'),
(136, 14, 6, 27, '2023-06-23 05:32:59', '2023-06-23 05:32:59'),
(137, 14, 7, 33, '2023-06-23 05:32:59', '2023-06-24 06:05:11'),
(138, 14, 8, 38, '2023-06-23 05:32:59', '2023-06-24 06:05:11'),
(139, 14, 9, 43, '2023-06-23 05:32:59', '2023-06-24 06:05:11'),
(140, 14, 10, 47, '2023-06-23 05:32:59', '2023-06-23 05:32:59'),
(141, 15, 1, 3, '2023-06-23 05:33:47', '2023-06-24 06:06:15'),
(142, 15, 2, 9, '2023-06-23 05:33:47', '2023-06-24 06:06:15'),
(143, 15, 3, 13, '2023-06-23 05:33:47', '2023-06-24 06:06:15'),
(144, 15, 4, 17, '2023-06-23 05:33:47', '2023-06-23 05:33:47'),
(145, 15, 5, 22, '2023-06-23 05:33:47', '2023-06-24 06:06:15'),
(146, 15, 6, 27, '2023-06-23 05:33:47', '2023-06-23 05:33:47'),
(147, 15, 7, 33, '2023-06-23 05:33:48', '2023-06-24 06:06:15'),
(148, 15, 8, 38, '2023-06-23 05:33:48', '2023-06-24 06:06:15'),
(149, 15, 9, 43, '2023-06-23 05:33:48', '2023-06-24 06:06:15'),
(150, 15, 10, 48, '2023-06-23 05:33:48', '2023-06-23 05:33:48'),
(151, 16, 1, 3, '2023-06-23 05:34:35', '2023-06-24 06:08:33'),
(152, 16, 2, 9, '2023-06-23 05:34:35', '2023-06-24 06:08:33'),
(153, 16, 3, 12, '2023-06-23 05:34:35', '2023-06-24 06:08:33'),
(154, 16, 4, 17, '2023-06-23 05:34:35', '2023-06-23 05:34:35'),
(155, 16, 5, 23, '2023-06-23 05:34:36', '2023-06-24 06:08:33'),
(156, 16, 6, 28, '2023-06-23 05:34:36', '2023-06-24 06:08:33'),
(157, 16, 7, 33, '2023-06-23 05:34:36', '2023-06-24 06:08:33'),
(158, 16, 8, 38, '2023-06-23 05:34:36', '2023-06-24 06:08:33'),
(159, 16, 9, 44, '2023-06-23 05:34:36', '2023-06-24 06:08:33'),
(160, 16, 10, 48, '2023-06-23 05:34:36', '2023-06-23 05:34:36'),
(161, 17, 1, 4, '2023-06-23 05:35:20', '2023-06-24 06:10:42'),
(162, 17, 2, 9, '2023-06-23 05:35:20', '2023-06-24 06:10:42'),
(163, 17, 3, 13, '2023-06-23 05:35:20', '2023-06-23 05:35:20'),
(164, 17, 4, 18, '2023-06-23 05:35:20', '2023-06-24 06:10:42'),
(165, 17, 5, 22, '2023-06-23 05:35:21', '2023-06-23 05:35:21'),
(166, 17, 6, 28, '2023-06-23 05:35:21', '2023-06-24 06:10:42'),
(167, 17, 7, 33, '2023-06-23 05:35:21', '2023-06-24 06:10:42'),
(168, 17, 8, 38, '2023-06-23 05:35:21', '2023-06-24 06:10:42'),
(169, 17, 9, 43, '2023-06-23 05:35:21', '2023-06-24 06:10:42'),
(170, 17, 10, 48, '2023-06-23 05:35:21', '2023-06-24 06:10:42'),
(171, 18, 1, 3, '2023-06-23 05:36:12', '2023-06-24 06:12:08'),
(172, 18, 2, 8, '2023-06-23 05:36:13', '2023-06-24 06:12:08'),
(173, 18, 3, 13, '2023-06-23 05:36:13', '2023-06-23 05:36:13'),
(174, 18, 4, 18, '2023-06-23 05:36:14', '2023-06-24 06:12:08'),
(175, 18, 5, 23, '2023-06-23 05:36:15', '2023-06-24 06:12:08'),
(176, 18, 6, 27, '2023-06-23 05:36:16', '2023-06-23 05:36:16'),
(177, 18, 7, 33, '2023-06-23 05:36:16', '2023-06-24 06:12:08'),
(178, 18, 8, 38, '2023-06-23 05:36:16', '2023-06-24 06:12:08'),
(179, 18, 9, 43, '2023-06-23 05:36:16', '2023-06-24 06:12:08'),
(180, 18, 10, 48, '2023-06-23 05:36:16', '2023-06-23 05:36:16'),
(181, 19, 1, 3, '2023-06-23 05:37:13', '2023-06-24 06:13:34'),
(182, 19, 2, 9, '2023-06-23 05:37:13', '2023-06-24 06:13:34'),
(183, 19, 3, 13, '2023-06-23 05:37:13', '2023-06-24 06:13:34'),
(184, 19, 4, 17, '2023-06-23 05:37:14', '2023-06-23 05:37:14'),
(185, 19, 5, 21, '2023-06-23 05:37:14', '2023-06-24 06:13:35'),
(186, 19, 6, 28, '2023-06-23 05:37:14', '2023-06-24 06:13:35'),
(187, 19, 7, 33, '2023-06-23 05:37:14', '2023-06-24 06:13:35'),
(188, 19, 8, 37, '2023-06-23 05:37:14', '2023-06-23 05:37:14'),
(189, 19, 9, 43, '2023-06-23 05:37:14', '2023-06-24 06:13:35'),
(190, 19, 10, 48, '2023-06-23 05:37:14', '2023-06-24 06:13:35'),
(191, 20, 1, 3, '2023-06-23 05:37:51', '2023-06-24 06:15:04'),
(192, 20, 2, 9, '2023-06-23 05:37:51', '2023-06-24 06:15:04'),
(193, 20, 3, 12, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(194, 20, 4, 18, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(195, 20, 5, 22, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(196, 20, 6, 28, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(197, 20, 7, 33, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(198, 20, 8, 37, '2023-06-23 05:37:52', '2023-06-23 05:37:52'),
(199, 20, 9, 43, '2023-06-23 05:37:52', '2023-06-24 06:15:04'),
(200, 20, 10, 47, '2023-06-23 05:37:52', '2023-06-23 05:37:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteriaratings`
--

CREATE TABLE `criteriaratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(8,2) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criteriaratings`
--

INSERT INTO `criteriaratings` (`id`, `criteria_id`, `rating`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1.00, 'Sangat Baik', '2023-06-22 08:20:56', '2023-06-24 05:24:44'),
(2, 1, 0.75, 'Baik', '2023-06-22 08:21:12', '2023-06-24 05:25:19'),
(3, 1, 0.50, 'Cukup Baik', '2023-06-22 08:21:24', '2023-06-24 05:25:39'),
(4, 1, 0.25, 'Kurang Baik', '2023-06-22 08:21:34', '2023-06-24 05:25:54'),
(5, 1, 0.00, 'Tidak Baik', '2023-06-22 08:21:48', '2023-06-24 05:26:16'),
(6, 2, 1.00, 'Sangat Baik', '2023-06-22 08:22:24', '2023-06-24 05:26:38'),
(7, 2, 0.75, 'Baik', '2023-06-22 08:22:41', '2023-06-24 05:26:50'),
(8, 2, 0.50, 'Cukup Baik', '2023-06-22 08:22:58', '2023-06-24 05:27:12'),
(9, 2, 0.25, 'Kurang Baik', '2023-06-22 08:23:19', '2023-06-24 05:27:29'),
(10, 2, 0.00, 'Tidak Baik', '2023-06-22 08:23:35', '2023-06-24 05:27:44'),
(11, 3, 1.00, 'Sangat Baik', '2023-06-22 08:24:05', '2023-06-24 05:27:59'),
(12, 3, 0.75, 'Baik', '2023-06-22 08:24:39', '2023-06-24 05:28:09'),
(13, 3, 0.50, 'Cukup Baik', '2023-06-22 08:25:30', '2023-06-24 05:28:24'),
(14, 3, 0.25, 'Kurang Baik', '2023-06-22 08:25:55', '2023-06-24 05:28:36'),
(16, 4, 1.00, 'Sangat Baik', '2023-06-22 08:27:42', '2023-06-24 05:29:51'),
(17, 4, 0.75, 'Baik', '2023-06-22 08:28:12', '2023-06-24 05:30:01'),
(18, 4, 0.50, 'Cukup Baik', '2023-06-22 08:28:26', '2023-06-24 05:30:38'),
(21, 5, 1.00, 'Sangat Baik', '2023-06-22 08:28:59', '2023-06-24 05:31:47'),
(22, 5, 0.75, 'Baik', '2023-06-22 08:29:08', '2023-06-24 05:31:57'),
(23, 5, 0.50, 'Cukup Baik', '2023-06-22 08:29:17', '2023-06-24 05:32:10'),
(26, 6, 1.00, 'Sangat Baik', '2023-06-22 08:29:47', '2023-06-24 05:32:44'),
(27, 6, 0.75, 'Baik', '2023-06-22 08:29:54', '2023-06-24 05:32:52'),
(28, 6, 0.50, 'Cukup Baik', '2023-06-22 08:30:00', '2023-06-24 05:33:12'),
(30, 6, 0.00, 'Tidak Baik', '2023-06-22 08:30:15', '2023-06-24 05:33:42'),
(31, 7, 1.00, 'Sangat Baik', '2023-06-22 08:30:26', '2023-06-24 05:34:13'),
(32, 7, 0.75, 'Baik', '2023-06-22 08:30:35', '2023-06-24 05:34:24'),
(33, 7, 0.50, 'Cukup Baik', '2023-06-22 08:30:44', '2023-06-24 05:34:35'),
(34, 7, 0.25, 'Kurang Baik', '2023-06-22 08:30:50', '2023-06-24 05:34:57'),
(36, 8, 1.00, 'Sangat Baik', '2023-06-22 08:31:09', '2023-06-24 05:35:24'),
(37, 8, 0.75, 'Baik', '2023-06-22 08:31:15', '2023-06-24 05:35:34'),
(38, 8, 0.50, 'Cukup Baik', '2023-06-22 08:31:22', '2023-06-24 05:35:43'),
(39, 8, 0.25, 'Kurang Baik', '2023-06-22 08:31:28', '2023-06-24 05:35:54'),
(41, 9, 1.00, 'Sangat Baik', '2023-06-22 08:31:47', '2023-06-24 05:36:45'),
(42, 9, 0.75, 'Baik', '2023-06-22 08:31:53', '2023-06-24 05:36:59'),
(43, 9, 0.50, 'Cukup Baik', '2023-06-22 08:31:59', '2023-06-24 05:37:16'),
(44, 9, 0.25, 'Kurang Baik', '2023-06-22 08:32:10', '2023-06-24 05:37:29'),
(46, 10, 1.00, 'Sangat Baik', '2023-06-22 08:32:47', '2023-06-24 05:38:10'),
(47, 10, 0.75, 'Baik', '2023-06-22 08:32:57', '2023-06-24 05:38:22'),
(48, 10, 0.50, 'Cukup Baik', '2023-06-22 08:33:08', '2023-06-24 05:38:38'),
(49, 10, 0.25, 'Kurang Baik', '2023-06-22 08:33:41', '2023-06-24 05:38:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteriaweights`
--

CREATE TABLE `criteriaweights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('benefit','cost') COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double(8,2) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criteriaweights`
--

INSERT INTO `criteriaweights` (`id`, `name`, `type`, `weight`, `description`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'benefit', 0.25, 'Usia', '2023-06-22 08:14:54', '2023-06-24 05:18:51'),
(2, 'C2', 'benefit', 1.00, 'Pendidikan', '2023-06-22 08:15:48', '2023-06-24 05:19:36'),
(3, 'C3', 'benefit', 0.50, 'Jabatan', '2023-06-22 08:16:11', '2023-06-24 05:20:10'),
(4, 'C4', 'benefit', 0.50, 'Pangkat/Golongan', '2023-06-22 08:16:42', '2023-06-24 05:20:59'),
(5, 'C5', 'benefit', 1.00, 'Jumlah Simpanan Wajib', '2023-06-22 08:17:07', '2023-06-24 05:21:28'),
(6, 'C6', 'benefit', 0.75, 'Jumlah Simpanan Sukarela', '2023-06-22 08:17:30', '2023-06-24 05:22:06'),
(7, 'C7', 'cost', 1.00, 'Jumlah Utang Unit', '2023-06-22 08:17:49', '2023-06-24 05:22:45'),
(8, 'C8', 'cost', 0.75, 'Jumlah Utang Faktur', '2023-06-22 08:18:10', '2023-06-24 05:23:21'),
(9, 'C9', 'cost', 1.00, 'Sisa Angsuran Utang Unit', '2023-06-22 08:18:31', '2023-06-24 05:23:43'),
(10, 'C10', 'cost', 0.75, 'Sisa Angsuran Utang Faktur', '2023-06-22 08:18:49', '2023-06-24 05:24:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_11_082211_create_users_table', 1),
(2, '2020_10_11_082307_create_alternatives_table', 1),
(3, '2020_10_11_082343_create_criteriaweights_table', 1),
(4, '2020_10_11_082354_create_criteriaratings_table', 1),
(5, '2020_10_11_082442_create_alternativescores_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternativescores`
--
ALTER TABLE `alternativescores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternativescores_alternative_id_foreign` (`alternative_id`),
  ADD KEY `alternativescores_criteria_id_foreign` (`criteria_id`),
  ADD KEY `alternativescores_rating_id_foreign` (`rating_id`);

--
-- Indeks untuk tabel `criteriaratings`
--
ALTER TABLE `criteriaratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteriaratings_criteria_id_foreign` (`criteria_id`);

--
-- Indeks untuk tabel `criteriaweights`
--
ALTER TABLE `criteriaweights`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatives`
--
ALTER TABLE `alternatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `alternativescores`
--
ALTER TABLE `alternativescores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `criteriaratings`
--
ALTER TABLE `criteriaratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `criteriaweights`
--
ALTER TABLE `criteriaweights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alternativescores`
--
ALTER TABLE `alternativescores`
  ADD CONSTRAINT `alternativescores_alternative_id_foreign` FOREIGN KEY (`alternative_id`) REFERENCES `alternatives` (`id`),
  ADD CONSTRAINT `alternativescores_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criteriaweights` (`id`),
  ADD CONSTRAINT `alternativescores_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `criteriaratings` (`id`);

--
-- Ketidakleluasaan untuk tabel `criteriaratings`
--
ALTER TABLE `criteriaratings`
  ADD CONSTRAINT `criteriaratings_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criteriaweights` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
