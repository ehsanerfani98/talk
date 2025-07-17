-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2025 at 09:53 AM
-- Server version: 8.4.5
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talk`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `link`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'آموزش بازاریابی', 'banners/Lv7uWnVmEWElTaX4EQDsReNUeblUeiqiMHlglWOR.png', 'https://webcomco.com/', 0, 1, '2025-06-03 06:34:04', '2025-06-03 06:34:04'),
(2, 'دوره تبلیغ نویسی', 'banners/JtEhvC2d5E5qhZStP0agsndYlaVjToaWPFDRDr0B.png', 'http://127.0.0.1:8000/user/edit/profile', 0, 1, '2025-06-03 06:39:20', '2025-06-03 06:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advisor_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_id`, `advisor_id`, `status`, `created_at`, `updated_at`) VALUES
('9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'active', '2025-07-16 06:50:26', '2025-07-16 06:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `conversation_user_statuses`
--

CREATE TABLE `conversation_user_statuses` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversation_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_room` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversation_user_statuses`
--

INSERT INTO `conversation_user_statuses` (`id`, `conversation_id`, `user_id`, `in_room`, `created_at`, `updated_at`) VALUES
('9f676862-345a-4c5d-9aa0-d4a881ac96bc', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 0, '2025-07-16 11:20:17', '2025-07-16 15:36:45'),
('9f676980-fd7a-4410-a154-12a8c6177244', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 0, '2025-07-16 11:23:25', '2025-07-16 15:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` int UNSIGNED DEFAULT NULL,
  `type` enum('amount','percent') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percent',
  `expiration` date DEFAULT NULL,
  `status` enum('disable','enable') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `access` enum('public','private') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'private',
  `limitdiscount` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `user_ids`, `title`, `code`, `amount`, `percent`, `type`, `expiration`, `status`, `access`, `limitdiscount`, `created_at`, `updated_at`) VALUES
('9f1e76f9-633f-4db4-a1d0-6bdc742f2d89', NULL, 'تست', 'test', '100000', 20, 'amount', '2025-06-11', 'enable', 'public', 2, '2025-06-10 05:05:39', '2025-06-10 06:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `document_files`
--

CREATE TABLE `document_files` (
  `id` bigint UNSIGNED NOT NULL,
  `user_document_id` bigint UNSIGNED NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversation_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `sender_id`, `message`, `seen`, `created_at`, `updated_at`) VALUES
('9f67081f-7d24-449c-9461-96f1d908b7b2', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام خوبی', 1, '2025-07-16 06:51:07', '2025-07-16 07:15:01'),
('9f67082a-d61d-419d-a0f4-b84ba6ce33bd', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'مرسی', 1, '2025-07-16 06:51:14', '2025-07-16 12:33:54'),
('9f6759dd-889e-40eb-89f9-4df73b351997', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'iyiyui', 1, '2025-07-16 10:39:41', '2025-07-16 10:42:13'),
('9f6759ea-6164-4d21-b8ca-c7856265f016', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'opip', 1, '2025-07-16 10:39:49', '2025-07-16 12:33:54'),
('9f676fee-ea07-4477-b5ca-8e61c9429bea', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سلام', 1, '2025-07-16 11:41:23', '2025-07-16 11:41:23'),
('9f67724e-56ac-4578-bfff-cb3cd6af5cc0', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'خوبی', 1, '2025-07-16 11:48:01', '2025-07-16 11:48:01'),
('9f677263-62ff-4784-9c33-7d17224e1c96', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'چه خبر', 1, '2025-07-16 11:48:15', '2025-07-16 12:33:54'),
('9f677277-7538-42e8-98df-8e36dfbf0e38', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'خوبی', 1, '2025-07-16 11:48:28', '2025-07-16 11:48:28'),
('9f677453-560a-41d4-8ca0-a7455b30e45a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام', 1, '2025-07-16 11:53:40', '2025-07-16 11:54:47'),
('9f6774ee-50ca-4310-a910-badd1ec50ece', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام', 1, '2025-07-16 11:55:22', '2025-07-16 11:55:22'),
('9f6775c5-ce94-4f58-8883-0524c0ad3ebf', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام', 1, '2025-07-16 11:57:43', '2025-07-16 11:57:58'),
('9f6775ef-233c-4bfd-a760-2f4db7ed6393', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام', 1, '2025-07-16 11:58:10', '2025-07-16 11:58:10'),
('9f6775f8-1a00-4e8a-83cc-f5fb919e7c0e', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'خوبی', 1, '2025-07-16 11:58:16', '2025-07-16 11:58:16'),
('9f677609-9bde-445a-8def-2161fbc6a7f8', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'یبسیب', 1, '2025-07-16 11:58:27', '2025-07-16 12:33:54'),
('9f677611-36dd-40d5-b18f-5977c59908c2', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سیبسیب', 1, '2025-07-16 11:58:32', '2025-07-16 12:33:54'),
('9f67761a-635c-4785-8505-e42d03ef24cf', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'یسیبیب', 1, '2025-07-16 11:58:38', '2025-07-16 11:58:38'),
('9f677620-7771-48e4-9846-d342c4547f0a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'بلیلب', 1, '2025-07-16 11:58:42', '2025-07-16 11:58:42'),
('9f67763c-493f-49b6-8db7-ff67e9ad312f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'یبلبیلیل', 1, '2025-07-16 11:59:01', '2025-07-16 12:00:02'),
('9f677989-36a9-45cd-b68e-5b4d1f43642f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سلام', 1, '2025-07-16 12:08:14', '2025-07-16 12:08:14'),
('9f6779a1-e950-4bd6-b0c9-ecb3dbcf65a7', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سلام', 1, '2025-07-16 12:08:31', '2025-07-16 12:33:54'),
('9f6779b1-d9d7-4c52-8697-b9ed6c74952a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سلام', 1, '2025-07-16 12:08:41', '2025-07-16 12:08:41'),
('9f6779be-90ea-4f6f-9f1d-db173e9a9834', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'خوبی', 1, '2025-07-16 12:08:49', '2025-07-16 12:08:49'),
('9f677beb-a8ff-4750-8601-2bc430bf7d5d', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سلام خوبی', 1, '2025-07-16 12:14:54', '2025-07-16 12:33:54'),
('9f677bf2-3ef2-4383-9160-6754cc878838', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'چه خبر', 1, '2025-07-16 12:14:59', '2025-07-16 12:33:54'),
('9f677c06-e345-4a49-8aea-bac8d95cb4b0', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ممنون تو خوبی', 1, '2025-07-16 12:15:12', '2025-07-16 12:15:12'),
('9f677c12-0aa0-42ae-a8cf-d97cd1dc97bc', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'مرسی', 1, '2025-07-16 12:15:20', '2025-07-16 12:15:20'),
('9f677c24-79e4-4b5f-b69f-26895a24cc54', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'رفتی؟', 1, '2025-07-16 12:15:32', '2025-07-16 12:15:57'),
('9f677c34-5001-4dc4-9a65-7f0ba1a1e9d2', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'الو؟!!', 1, '2025-07-16 12:15:42', '2025-07-16 12:15:57'),
('9f677c56-7152-4fc0-ba16-6d0466f2365d', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'نه هستم', 1, '2025-07-16 12:16:04', '2025-07-16 12:16:04'),
('9f677c68-0ef5-477f-b4f3-32567f64da40', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'مثل اینکه تو رفتی', 1, '2025-07-16 12:16:16', '2025-07-16 12:33:54'),
('9f677c7e-4d38-4034-abf8-388a5ec885e6', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'نه من اینجام', 1, '2025-07-16 12:16:31', '2025-07-16 12:16:41'),
('9f677c9c-81be-4cad-8ea0-7580f1475ab7', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'آهان', 1, '2025-07-16 12:16:50', '2025-07-16 12:16:50'),
('9f677ca7-63a6-428d-9f4b-3f4cdb469dc6', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'یعنی چی آهان؟', 1, '2025-07-16 12:16:57', '2025-07-16 12:16:57'),
('9f677cb9-2a58-4522-bf20-56adde629e51', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'یسبیسبیس', 1, '2025-07-16 12:17:09', '2025-07-16 12:33:54'),
('9f677cbc-038c-448c-8a6a-37a1a5eb468d', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سبسیبیسب', 1, '2025-07-16 12:17:11', '2025-07-16 12:33:54'),
('9f677cbf-3739-43e5-b007-b36e0ff57cf1', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'لابلالا', 1, '2025-07-16 12:17:13', '2025-07-16 12:33:54'),
('9f677cd2-db39-4e77-9419-e98a5fa5830f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'لبالبالا', 1, '2025-07-16 12:17:26', '2025-07-16 12:17:32'),
('9f677cd5-c94f-41b6-87df-0d3f568a6c11', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'لیلی', 1, '2025-07-16 12:17:28', '2025-07-16 12:17:32'),
('9f677cd8-3c17-42dc-8d93-429363862524', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'اتالتلات', 1, '2025-07-16 12:17:29', '2025-07-16 12:17:32'),
('9f677ce3-9946-4c07-9381-529160f6b487', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'یبیسبیسب', 1, '2025-07-16 12:17:37', '2025-07-16 12:17:37'),
('9f677ce6-bb9c-4a86-9484-35c05f98ee45', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'لابلالبا', 1, '2025-07-16 12:17:39', '2025-07-16 12:17:39'),
('9f677ce9-4c63-4ec1-9c7c-00a5f1b36ab9', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'اتالتلات', 1, '2025-07-16 12:17:41', '2025-07-16 12:17:41'),
('9f677ceb-ebde-4b5c-a365-feba2ca7bfc1', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'تنتاناتنت', 1, '2025-07-16 12:17:42', '2025-07-16 12:17:42'),
('9f677cee-72ea-441d-acbb-dd55ad99f242', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'نمتنتنم', 1, '2025-07-16 12:17:44', '2025-07-16 12:17:44'),
('9f677d32-6ad0-4c2f-8f21-17014936fa54', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'بلبلل', 1, '2025-07-16 12:18:29', '2025-07-16 12:18:29'),
('9f67809c-c0ab-42cf-8242-7bde84e11726', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'dsdfdsf', 1, '2025-07-16 12:28:02', '2025-07-16 12:28:02'),
('9f6780a5-ae22-40f9-afe7-725f9a60ca69', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ggdfg', 1, '2025-07-16 12:28:07', '2025-07-16 12:28:12'),
('9f6780a8-9474-44ac-b54f-e7aa9d10e526', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ghfgh', 1, '2025-07-16 12:28:09', '2025-07-16 12:28:12'),
('9f6780c9-6300-4bcd-ae8d-886bd3901223', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'fgdgf', 1, '2025-07-16 12:28:31', '2025-07-16 12:33:54'),
('9f6780cc-a5d7-4d88-ae66-b8f5a1926179', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'lkjljkll', 1, '2025-07-16 12:28:33', '2025-07-16 12:33:54'),
('9f6782ce-bf4b-40d8-9d7c-c2e8e6abd68c', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'eerer', 1, '2025-07-16 12:34:10', '2025-07-16 12:34:18'),
('9f6782d1-e988-4db1-a0d5-7cf635cea329', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'tyty', 1, '2025-07-16 12:34:12', '2025-07-16 12:34:18'),
('9f6782d4-8733-4727-b759-d9a6832340d8', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'tytyy', 1, '2025-07-16 12:34:14', '2025-07-16 12:34:18'),
('9f67959d-0631-4715-8b1d-f595d373a038', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', '۵۶۷۶۵۷۶۵۷', 1, '2025-07-16 13:26:45', '2025-07-16 13:27:04'),
('9f6795a0-a24c-455f-8aa6-1ece8186ee4e', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'عفغعغ', 1, '2025-07-16 13:26:47', '2025-07-16 13:27:04'),
('9f6795a3-d44b-49f5-8003-fa86e3b1d43e', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'عهغعه', 1, '2025-07-16 13:26:49', '2025-07-16 13:27:04'),
('9f6795cc-da70-4283-aee4-25c1bcff8d9c', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', '۴۶۴۵۶', 1, '2025-07-16 13:27:16', '2025-07-16 13:30:41'),
('9f6795d6-0e3d-4664-a357-d110efda25ff', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'غعفع', 1, '2025-07-16 13:27:22', '2025-07-16 13:30:41'),
('9f6795df-5964-4ca1-b82e-93d609e73693', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'فع', 1, '2025-07-16 13:27:28', '2025-07-16 13:30:41'),
('9f679721-fa3e-4c78-a96e-bbb6228f0c68', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'trgd', 1, '2025-07-16 13:31:00', '2025-07-16 13:31:59'),
('9f67975f-16de-49c7-8d49-5886e192194b', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'dsfsd', 1, '2025-07-16 13:31:40', '2025-07-16 13:31:59'),
('9f679786-f6d5-4dd9-bb74-f30339019487', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'uyi', 1, '2025-07-16 13:32:06', '2025-07-16 13:32:06'),
('9f6797b4-fbb6-4991-9dd8-923d623054e8', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', '567567', 1, '2025-07-16 13:32:36', '2025-07-16 13:32:36'),
('9f679960-0207-41e3-979b-41d9b8251938', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'قفقثفث', 1, '2025-07-16 13:37:16', '2025-07-16 13:42:12'),
('9f679983-46a4-445d-8939-b9e9c264aade', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'عغهعهعغ', 1, '2025-07-16 13:37:39', '2025-07-16 13:42:12'),
('9f679aee-fd97-4928-bc60-f76542ad1417', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'عفغعفغ', 1, '2025-07-16 13:41:38', '2025-07-16 13:42:12'),
('9f679b1e-3e55-4cf3-b516-3e3b051d9196', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'فغقغ', 1, '2025-07-16 13:42:08', '2025-07-16 13:42:12'),
('9f679b29-37a1-4ad0-958e-a0440f5a40c9', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'خخهعخ', 1, '2025-07-16 13:42:16', '2025-07-16 13:42:16'),
('9f679b35-314f-4702-b80d-5d8a1ab1c7a3', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ععتغع', 1, '2025-07-16 13:42:24', '2025-07-16 13:42:24'),
('9f679cc2-302f-4f6a-aac4-6bad3f3e4a24', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'عغهفعغ', 1, '2025-07-16 13:46:44', '2025-07-16 14:51:38'),
('9f679d00-bdec-4783-90ca-9f0e772ec248', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'فغعفع', 1, '2025-07-16 13:47:25', '2025-07-16 14:51:38'),
('9f679d61-30a4-42b7-baa7-217735b00b5a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'فهعغع', 1, '2025-07-16 13:48:28', '2025-07-16 14:51:38'),
('9f679da3-77bd-4ca7-9b9e-c07b40ebc8b2', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'iyuiyu', 1, '2025-07-16 13:49:11', '2025-07-16 14:51:38'),
('9f67a17c-f280-4669-b5da-cb3bf6ad6b87', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'uyuytutu', 1, '2025-07-16 13:59:57', '2025-07-16 14:51:38'),
('9f67a417-b275-4246-a7da-23042127b6bf', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'utuyu', 1, '2025-07-16 14:07:14', '2025-07-16 14:51:38'),
('9f67a42b-6681-42c9-99e8-c9ed51547be3', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'utuyu', 1, '2025-07-16 14:07:27', '2025-07-16 14:51:38'),
('9f67a4a2-9db4-46c3-b1e0-c4eff43944c9', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'fdgfdg', 1, '2025-07-16 14:08:45', '2025-07-16 14:51:38'),
('9f67a5dc-4992-4788-9291-1fe10637c761', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'yyrty', 1, '2025-07-16 14:12:11', '2025-07-16 14:51:38'),
('9f67a6ff-00af-4ed8-9ba7-0f980a9414bc', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'lkjlj', 1, '2025-07-16 14:15:21', '2025-07-16 14:51:38'),
('9f67a748-3cfb-4dfc-852a-a17c7ecbb622', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'ojoij', 1, '2025-07-16 14:16:09', '2025-07-16 14:51:38'),
('9f67a827-e855-42e9-89b1-95282f686838', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'ddff', 1, '2025-07-16 14:18:36', '2025-07-16 14:51:38'),
('9f67a854-8c84-4d88-8877-256b87caa3cf', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'dfdfsdf', 1, '2025-07-16 14:19:05', '2025-07-16 14:51:38'),
('9f67a8ed-d16d-46de-b36d-47ffa2a05006', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'dfdfdf', 1, '2025-07-16 14:20:46', '2025-07-16 14:51:38'),
('9f67a932-5557-48a1-96eb-81b349895f01', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'fgf', 1, '2025-07-16 14:21:30', '2025-07-16 14:51:38'),
('9f67a970-03f1-42eb-adaa-72bfcb1cc9e6', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'dfsdfd', 1, '2025-07-16 14:22:11', '2025-07-16 14:51:38'),
('9f67aa1d-db55-4a96-a362-1751d2280bdb', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'ghfghgh', 1, '2025-07-16 14:24:05', '2025-07-16 14:51:38'),
('9f67aa46-770f-433d-89c9-054825830fc5', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'hgfhf', 1, '2025-07-16 14:24:31', '2025-07-16 14:51:38'),
('9f67abe6-9b0f-4083-9704-3992a76877f8', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'gfg', 1, '2025-07-16 14:29:04', '2025-07-16 14:51:38'),
('9f67b0c3-19f3-405a-a99b-687406a1db0c', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سیبسبیس', 1, '2025-07-16 14:42:40', '2025-07-16 14:51:38'),
('9f67b171-4ab2-4b62-bd84-1489a1fda997', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'سسیسیب', 1, '2025-07-16 14:44:34', '2025-07-16 14:51:38'),
('9f67b19c-5615-4ff8-b991-1d782ae4ffea', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9f65637c-2a5c-4d77-85d1-132609779fea', 'قفثقفقثف', 1, '2025-07-16 14:45:02', '2025-07-16 14:51:38'),
('9f67b3fc-624e-4c94-8b16-ad93577bb0fb', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'یسبیسبیسبسیب', 1, '2025-07-16 14:51:41', '2025-07-16 15:36:17'),
('9f67b405-abb1-47c2-9a85-c83c98ef693e', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'بلبیلبی', 1, '2025-07-16 14:51:47', '2025-07-16 15:36:17'),
('9f67b607-b333-43d4-a411-3428a3a0fc17', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'یبیسبیسب', 1, '2025-07-16 14:57:24', '2025-07-16 15:36:17'),
('9f67b658-841b-43de-9a78-784614b4c7d7', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'لیبلبیلبیل', 1, '2025-07-16 14:58:17', '2025-07-16 15:36:17'),
('9f67b778-9ef5-4b7a-b880-16f7b332034f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'سیبیسبی', 1, '2025-07-16 15:01:25', '2025-07-16 15:36:17'),
('9f67b782-83ea-493c-b849-88b5bc62ca0f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'بیسبسیب', 1, '2025-07-16 15:01:32', '2025-07-16 15:36:17'),
('9f67b7ff-68f4-4246-a47d-c9d6e7d24df8', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'sdsadsa', 1, '2025-07-16 15:02:54', '2025-07-16 15:36:17'),
('9f67b805-49bc-4fbe-a4f1-dc337ffaa27f', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'dfdsfd', 1, '2025-07-16 15:02:58', '2025-07-16 15:36:17'),
('9f67b809-ce0d-4b67-8e6a-f639e47ef802', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'dfsdfd', 1, '2025-07-16 15:03:00', '2025-07-16 15:36:17'),
('9f67b878-e945-4269-a1e9-77feea9a97aa', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'yuiyiy', 1, '2025-07-16 15:04:13', '2025-07-16 15:36:17'),
('9f67b87f-0019-4e17-99ed-22262ba6e50a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'piopio', 1, '2025-07-16 15:04:17', '2025-07-16 15:36:17'),
('9f67b9ba-ca4f-44cf-aeaf-02a4bdf7230a', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'بیلبیل', 1, '2025-07-16 15:07:44', '2025-07-16 15:36:17'),
('9f67bb0d-a089-4067-8074-58f747fc70af', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'عهعغه', 1, '2025-07-16 15:11:26', '2025-07-16 15:36:17'),
('9f67bb16-e5fd-4752-aa23-0ed97ee85b64', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ککم', 1, '2025-07-16 15:11:32', '2025-07-16 15:36:17'),
('9f67bc45-8a30-4270-8e5c-0696a40443a4', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'uiouio', 1, '2025-07-16 15:14:51', '2025-07-16 15:36:17'),
('9f67c3d7-68c0-48fe-92e5-091fc60e6cd0', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'عهخع', 1, '2025-07-16 15:36:01', '2025-07-16 15:36:17'),
('9f67c3e0-8f06-418b-b418-1a04bf7e7e65', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'تدذپذ', 1, '2025-07-16 15:36:07', '2025-07-16 15:36:17'),
('9f67c408-8ff0-4d5d-b5c9-5f0e46376956', '9f6707e0-29bc-4d2a-af8e-1f8d1b67a353', '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'تا', 0, '2025-07-16 15:36:33', '2025-07-16 15:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_10_11_074803_create_permission_tables', 1),
(9, '2024_11_28_175715_create_settings_table', 1),
(10, '2025_05_22_100023_create_services_table', 1),
(11, '2025_05_22_100034_create_user_documents_table', 1),
(12, '2025_05_22_100040_create_subscriptions_table', 1),
(13, '2025_05_22_100045_create_user_subscriptions_table', 1),
(14, '2025_05_22_100050_create_user_services_table', 1),
(16, '2025_05_22_100059_create_wallets_table', 1),
(18, '2025_05_22_100054_create_payments_table', 2),
(19, '2025_05_22_100104_create_wallet_transactions_table', 2),
(20, '2025_05_26_152325_create_document_files_table', 3),
(21, '2025_06_03_081001_create_sliders_table', 4),
(22, '2025_06_03_082001_create_banners_table', 5),
(23, '2025_06_09_124521_create_discounts_table', 6),
(24, '2025_06_09_140235_create_useddiscounts_table', 7),
(25, '2025_06_15_092537_create_service_requests_table', 8),
(26, '2025_07_12_100058_add_service_limit_to_subscriptions_table', 9),
(27, '2025_07_12_101142_create_user_subscription_usage_table', 9),
(28, '2025_07_13_083809_add_is_online_to_users_table', 9),
(29, '2025_07_13_083841_create_conversations_table', 9),
(30, '2025_07_13_083945_create_messages_table', 9),
(31, '2025_07_14_142246_add_is_online_to_users_table', 10),
(33, '2025_07_16_093844_add_seen_to_messages_table', 11),
(34, '2025_07_16_142435_create_conversation_user_statuses_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(8, 'App\\Models\\User', '9efc463a-7c58-4f5b-a649-cc59dc48b599'),
(7, 'App\\Models\\User', '9f61d659-2507-49b2-9e14-6bf56e98b9d4'),
(7, 'App\\Models\\User', '9f634456-868d-4a3c-b2b3-61fa0f293795'),
(8, 'App\\Models\\User', '9f655a1e-a5a6-4796-86a9-fecffacff4ee'),
(7, 'App\\Models\\User', '9f65637c-2a5c-4d77-85d1-132609779fea');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subscription_id` bigint UNSIGNED DEFAULT NULL,
  `type` enum('wallet_topup','subscription_direct','subscription_wallet') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` float NOT NULL,
  `discount_amount` float DEFAULT NULL,
  `discount_code` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `authority` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','paid','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'لیست کاربران', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(2, 'user-create', 'ایجاد کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(3, 'user-edit', 'ویرایش کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(4, 'user-delete', 'حذف کاربر', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(5, 'role-list', 'لیست نقش ها', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(6, 'role-create', 'ایجاد نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(7, 'role-edit', 'ویرایش نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(8, 'role-delete', 'حذف نقش', 'web', '2025-05-24 05:11:11', '2025-05-24 05:11:11'),
(9, 'setting-list', 'لیست تنظیمات', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(10, 'setting-edit', 'ویرایش تنظیمات', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(11, 'dashboard', 'پیشخوان', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(12, 'user-login-mobile', 'ورود با موبایل', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12'),
(13, 'service-list', 'لیست خدمات', 'web', '2025-05-24 09:40:19', '2025-05-24 09:40:19'),
(14, 'service-create', 'ایجاد خدمات جدید', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(15, 'service-edit', 'ویرایش خدمت', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(16, 'service-delete', 'حذف خدمت', 'web', '2025-05-24 09:40:20', '2025-05-24 09:40:20'),
(17, 'subscrib-list', 'لیست اشتراک ها', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(18, 'subscrib-create', 'ایجاد اشتراک جدید', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(19, 'subscrib-edit', 'ویرایش اشتراک', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(20, 'subscrib-delete', 'حذف اشتراک', 'web', '2025-05-24 10:09:05', '2025-05-24 10:09:05'),
(21, 'slider-list', 'لیست اسلایدر ها', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(22, 'slider-create', 'ایجاد اسلایدر جدید', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(23, 'slider-edit', 'ویرایش اسلایدر', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(24, 'slider-delete', 'حذف اسلایدر', 'web', '2025-06-03 04:53:20', '2025-06-03 04:53:20'),
(29, 'banner-list', 'لیست بنر ها', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(30, 'banner-create', 'ایجاد بنر جدید', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(31, 'banner-edit', 'ویرایش بنر', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(32, 'banner-delete', 'حذف بنر', 'web', '2025-06-03 06:31:03', '2025-06-03 06:31:03'),
(33, 'discount-list', 'لیست تخفیف ها', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(34, 'discount-create', 'ایجاد تخفیف جدید', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(35, 'discount-edit', 'ویرایش تخفیف', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(36, 'discount-delete', 'حذف تخفیف', 'web', '2025-06-09 10:00:30', '2025-06-09 10:00:30'),
(37, 'service-requests-list', 'لیست درخواست ها', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(38, 'service-requests-create', 'ایجاد درخواست جدید', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(39, 'service-requests-edit', 'ویرایش درخواست', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(40, 'service-requests-delete', 'حذف درخواست', 'web', '2025-06-15 06:05:22', '2025-06-15 06:05:22'),
(41, 'advisor-list', 'مشاوره آنلاین', 'web', '2025-07-15 06:15:51', '2025-07-15 06:15:51'),
(42, 'advisor-create', 'ایجاد گفتگو', 'web', '2025-07-15 06:15:51', '2025-07-15 06:15:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `title`) VALUES
(1, 'Admin', 'web', '2025-05-24 05:11:12', '2025-05-24 05:11:12', 'ادمین'),
(7, 'User', 'web', '2025-06-03 05:34:15', '2025-06-03 05:34:15', 'کاربر'),
(8, 'advisor', 'web', '2025-07-14 07:11:02', '2025-07-14 07:11:02', 'مشاور');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(11, 7),
(1, 8),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 8),
(16, 8),
(17, 8),
(18, 8),
(19, 8),
(20, 8),
(21, 8),
(22, 8),
(23, 8),
(24, 8),
(29, 8),
(30, 8),
(31, 8),
(32, 8),
(33, 8),
(34, 8),
(35, 8),
(36, 8),
(37, 8),
(38, 8),
(39, 8),
(40, 8),
(41, 8),
(42, 8);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `description`, `is_active`, `created_at`, `updated_at`) VALUES
('9f20749b-e770-41ce-b413-caf3335f996f', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 9a3 3 0 0 1 3-3m-2 15h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 6 9c0 4 4 5 4 9h4Z\"/>\r\n</svg>', 'مشاوره و توسعه واحدها', '<p>مشاوره مدیریت و توسعه کسب و کار مشاوره</p><p> ارتقا سطح نیروی انسانی</p><p> پرورش مدیران بر اساس مدل های اقتصادی</p><p> استقرار در پارک های نوآوری</p><p> استعدادیابی و پرورش کارکنان</p><p> عارضه یابی و هدایت مدیران حرفه ای</p><p> ارائه استراتژی کسب وکار</p><p> اجرای بیزنس پلن و بیزنس مدل</p>', 1, '2025-06-11 04:50:41', '2025-06-11 05:50:45'),
('9f2077f6-3723-4c4a-b732-29169e752322', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M3 21h18M4 18h16M6 10v8m4-8v8m4-8v8m4-8v8M4 9.5v-.955a1 1 0 0 1 .458-.84l7-4.52a1 1 0 0 1 1.084 0l7 4.52a1 1 0 0 1 .458.84V9.5a.5.5 0 0 1-.5.5h-15a.5.5 0 0 1-.5-.5Z\"/>\r\n</svg>', 'کانون ارزیابی شایستگی مدیران', NULL, 1, '2025-06-11 05:00:03', '2025-06-11 05:00:03'),
('9f207829-adab-4a28-bdf1-f6eddce7c07a', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M20 14H4m6.5 3L8 20m5.5-3 2.5 3M4.88889 17H19.1111c.4909 0 .8889-.4157.8889-.9286V4.92857C20 4.41574 19.602 4 19.1111 4H4.88889C4.39797 4 4 4.41574 4 4.92857V16.0714c0 .5129.39797.9286.88889.9286ZM13 14v-3h4v3h-4Z\"/>\r\n</svg>', 'آموزش', NULL, 1, '2025-06-11 05:00:37', '2025-06-11 05:00:52'),
('9f20794a-0dbd-4cf4-be1d-87651571840a', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z\"/>\r\n</svg>', 'برگزاری رویداد', NULL, 1, '2025-06-11 05:03:46', '2025-06-11 05:03:51'),
('9f207a2e-c774-4345-aa4b-6452b1cc679d', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z\"/>\r\n</svg>', 'کانون تبلیغاتی', NULL, 1, '2025-06-11 05:06:16', '2025-06-11 05:06:21'),
('9f207a77-e862-4d55-aef6-64dad24c9294', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z\"/>\r\n</svg>', 'خدمات بین الملل', NULL, 1, '2025-06-11 05:07:04', '2025-06-11 05:07:04'),
('9f207bb1-2bb2-43f0-8ff5-95b72061b78f', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M13.5713 5h7v9h-7m-6.00001-4-3 4.5m3-4.5v5m0-5h3.00001m0 0h5m-5 0v5m-3.00001 0h3.00001m-3.00001 0v5m3.00001-5v5m6-6 2.5 6m-3-6-2.5 6m-3-14.5c0 .82843-.67158 1.5-1.50001 1.5-.82843 0-1.5-.67157-1.5-1.5s.67157-1.5 1.5-1.5 1.50001.67157 1.50001 1.5Z\"/>\r\n</svg>', 'مشاوره های تخصصی', NULL, 1, '2025-06-11 05:10:29', '2025-06-11 05:10:39'),
('9f207cbc-e0a7-4a18-b872-786ab014c47e', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M7.99999 10.8571 12 13.1428m-4.00001-2.2857L4 13.1428m3.99999-2.2857.00004-4.57139M12 13.1428v4.5715m0-4.5715-4.00001 2.2857M12 13.1428l4-2.2857m-4 2.2857V8.57143m0 4.57137 4 2.2858m-4 2.2857L7.99999 20M12 17.7143 16 20m-8.00001 0L4 17.7143v-4.5715M7.99999 20v-4.5715M4 13.1428l3.99999 2.2857M16 6.28571 12 4 8.00003 6.28571m7.99997 0v4.57139m0-4.57139-4 2.28572m4 2.28567 4 2.2858M8.00003 6.28571 12 8.57143m8 4.57147v4.5714L16 20m4-6.8571-4 2.2857M16 20v-4.5714\"/>\r\n</svg>', 'صادرات و واردات', NULL, 1, '2025-06-11 05:13:25', '2025-06-11 05:13:25'),
('9f207d0f-08eb-445c-903a-a0d21768a6f2', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3.78552 9.5 12.7855 14l9-4.5-9-4.5-8.99998 4.5Zm0 0V17m3-6v6.2222c0 .3483 2 1.7778 5.99998 1.7778 4 0 6-1.3738 6-1.7778V11\"/>\r\n</svg>', 'دانش بنیان', NULL, 1, '2025-06-11 05:14:19', '2025-06-11 05:14:19'),
('9f207d71-3759-41ff-a267-2d6439f43f00', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"2\" d=\"M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z\"/>\r\n</svg>', 'سرمایه گذاری', '<p><br></p>', 1, '2025-06-11 05:15:23', '2025-06-11 05:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','in_progress','approved','rejected','completed','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `admin_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `rejection_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
('9efcd74a-ed25-47db-ad3e-35f8e72640d7', 'payment_gateway_type', 'zarinpal', '2025-05-24 11:56:49', '2025-05-24 12:15:34'),
('9efcd8db-779e-4633-a6c4-33c52beb454b', 'payment_gateway_status', '1', '2025-05-24 12:01:12', '2025-05-25 05:50:37'),
('9efcdb88-8418-4f33-9a67-c28e2c3cfafb', 'merchantId', '5d89df5c-42cf-42b1-ad90-9d528ec1be7f', '2025-05-24 12:08:41', '2025-05-24 12:09:13'),
('9efcdfbd-6e67-4633-90ed-90ec388f6c6d', 'payment_gateway_unit', 'IRR', '2025-05-24 12:20:26', '2025-05-24 12:21:48'),
('9efe48ef-0b53-44c9-8b00-2d37e8e3f18e', 'apiKey', 'Bearer 5NLyGLqcrFO7PiTFgvvygkRL0QcCd9kDaDVVMJcoXQE=', '2025-05-25 05:10:25', '2025-06-15 11:46:11'),
('9efe49da-01e4-4a31-b271-79665eec440b', 'originator', '+983000505', '2025-05-25 05:12:59', '2025-05-25 05:13:22'),
('9efe49da-08ae-48b3-b051-7148672fdc97', 'patternCode', '802819', '2025-05-25 05:12:59', '2025-06-15 11:46:11'),
('9efe4b37-a212-459a-9292-41c88ef7756d', 'sms_status', '1', '2025-05-25 05:16:48', '2025-05-25 05:51:19'),
('9f1c955f-a64c-4996-8c8c-b0a22052d3ab', 'company_name', 'سامانه تاک', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-ab47-41de-b341-383f8f44511b', 'company_content', 'راه حل هوشمند شما', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-acae-4567-9057-fec857f04904', 'company_address', 'تهران ، بلوار نلسون ماندلا ، پایینتر از چهارراه جهان کودک نرسیده به میدان آرژانتین ، روبروی وزارت راه و‌شهرسازی ، کوچه حکمت پلاک ۲', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-add7-48e5-86ae-4963a4e598d7', 'company_phone', '02188871006-8', '2025-06-09 06:38:59', '2025-06-09 06:46:28'),
('9f1c955f-aef3-4023-81d6-d699f0973951', 'company_fax', '02188640230', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-afda-466e-a9c4-b8ac85b5bc68', 'company_mobile', '09121234567', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f1c955f-b0be-4b1d-bb2a-1cf01d338e29', 'company_email', 'info@emigroup.ir', '2025-06-09 06:38:59', '2025-06-09 06:38:59'),
('9f208fb2-5507-4c18-9821-c6a2d980adfb', 'login_type', 'mobile', '2025-06-11 06:06:25', '2025-06-11 10:54:33'),
('9f209f58-d9ff-4ca2-bb53-2b8ff3b18557', 'mail_mailer', 'smtp', '2025-06-11 06:50:11', '2025-06-11 10:54:07'),
('9f209f58-e134-4da8-8425-c7ed7d08b6aa', 'mail_host', 'sandbox.smtp.mailtrap.io', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e26f-45fb-95bc-488826624d11', 'mail_port', '2525', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e382-4b2f-8388-c0dd89c4e03d', 'mail_encryption', 'tls', '2025-06-11 06:50:11', '2025-06-11 06:50:11'),
('9f209f58-e492-40e6-8fc8-2449a0e09340', 'mail_username', '474606e0f2e747', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e5f7-43bb-a6ae-44f67bbc041c', 'mail_password', '72a2a5c98c6eb5', '2025-06-11 06:50:11', '2025-06-11 10:52:12'),
('9f209f58-e729-4920-bd28-1597ad9d63c4', 'mail_from_address', 'test@gmail.com', '2025-06-11 06:50:11', '2025-06-11 06:50:11'),
('9f209f58-e842-479b-a106-422938d4bf49', 'mail_from_name', 'تاک', '2025-06-11 06:50:11', '2025-06-11 06:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `link`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'شارژ کیف پول', 'sliders/GYAHl1oMQdWoYmx8o6524dB5TdJvmbTyG2uWIixZ.jpg', 'http://127.0.0.1:8000/user/wallet', 0, 1, '2025-06-03 05:12:51', '2025-06-08 05:51:28'),
(4, 'فراخوان ثبت نام', 'sliders/Evet8Cz1Ob2efMZ1R0EAYtGsQWeJ8QbBMOMzRDgj.png', 'http://127.0.0.1:8000/user/edit/profile', 0, 1, '2025-06-03 05:15:30', '2025-06-03 05:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `duration_days` int NOT NULL,
  `service_limit` int NOT NULL DEFAULT '0',
  `is_active` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `icon`, `name`, `price`, `duration_days`, `service_limit`, `is_active`, `created_at`, `updated_at`) VALUES
('9efcb3e7-2f53-4ca8-952e-02230802a6fe', '<svg class=\"w-6 h-6 text-gray-800 dark:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"none\" viewBox=\"0 0 24 24\">\r\n  <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z\"/>\r\n</svg>', 'عضویت طلایی', 2000000, 180, 5, 1, '2025-05-24 10:17:52', '2025-07-13 16:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `useddiscounts`
--

CREATE TABLE `useddiscounts` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `used` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`, `is_online`) VALUES
('9efc463a-7c58-4f5b-a649-cc59dc48b599', 'ehsan.bavaghar1989@gmail.com', '09191816172', '$2y$10$wXNeYM/vHMOoha7ydYmTEeosKAuSDJw6UsXW8Q8VlgLbUvVlWdDK2', NULL, '2025-05-24 05:11:11', '2025-07-16 15:36:46', 1),
('9f634456-868d-4a3c-b2b3-61fa0f293795', NULL, '09121234567', NULL, NULL, '2025-07-14 09:56:11', '2025-07-16 06:29:46', 0),
('9f655a1e-a5a6-4796-86a9-fecffacff4ee', NULL, '09191816171', NULL, NULL, '2025-07-15 10:48:44', '2025-07-15 11:35:44', 0),
('9f65637c-2a5c-4d77-85d1-132609779fea', NULL, '09121234568', NULL, NULL, '2025-07-15 11:14:55', '2025-07-16 15:36:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('real','legal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `needs_correction` tinyint NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `type`, `first_name`, `last_name`, `mobile`, `company_name`, `national_id`, `company_address`, `is_verified`, `needs_correction`, `description`, `created_at`, `updated_at`) VALUES
(12, '9efc463a-7c58-4f5b-a649-cc59dc48b599', 'real', 'احسان', 'باوقار', '09191816172', NULL, '4310155901', NULL, 1, 0, NULL, '2025-07-14 11:36:02', '2025-07-14 11:36:19'),
(13, '9f655a1e-a5a6-4796-86a9-fecffacff4ee', 'real', 'علی', 'محمدی', '09191816171', NULL, '4310155902', NULL, 0, 0, NULL, '2025-07-15 10:49:24', '2025-07-15 10:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_services`
--

CREATE TABLE `user_services` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscriptions`
--

CREATE TABLE `user_subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts_at` timestamp NOT NULL,
  `ends_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscription_usages`
--

CREATE TABLE `user_subscription_usages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_subscription_id` bigint UNSIGNED NOT NULL,
  `used_services` int NOT NULL DEFAULT '0',
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transactions`
--

CREATE TABLE `wallet_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `wallet_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('credit','debit') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conversations_user_id_advisor_id_unique` (`user_id`,`advisor_id`),
  ADD KEY `conversations_advisor_id_foreign` (`advisor_id`);

--
-- Indexes for table `conversation_user_statuses`
--
ALTER TABLE `conversation_user_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_user_statuses_conversation_id_foreign` (`conversation_id`),
  ADD KEY `conversation_user_statuses_user_id_foreign` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_files`
--
ALTER TABLE `document_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_files_user_document_id_foreign` (`user_document_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_conversation_id_foreign` (`conversation_id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_transaction_id_unique` (`transaction_id`),
  ADD UNIQUE KEY `authority` (`authority`),
  ADD UNIQUE KEY `factor_id` (`invoice_number`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_user_subscription_id_foreign` (`user_subscription_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_requests_user_id_foreign` (`user_id`),
  ADD KEY `service_requests_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useddiscounts`
--
ALTER TABLE `useddiscounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_services`
--
ALTER TABLE `user_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_services_user_id_foreign` (`user_id`),
  ADD KEY `user_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `user_subscriptions_subscription_id_foreign` (`subscription_id`);

--
-- Indexes for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_subscription_usages_user_id_foreign` (`user_id`),
  ADD KEY `user_subscription_usages_user_subscription_id_foreign` (`user_subscription_id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_user_id_foreign` (`user_id`);

--
-- Indexes for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallet_transactions_wallet_id_foreign` (`wallet_id`),
  ADD KEY `wallet_transactions_payment_id_foreign` (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_files`
--
ALTER TABLE `document_files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_services`
--
ALTER TABLE `user_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_advisor_id_foreign` FOREIGN KEY (`advisor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversation_user_statuses`
--
ALTER TABLE `conversation_user_statuses`
  ADD CONSTRAINT `conversation_user_statuses_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversation_user_statuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `document_files`
--
ALTER TABLE `document_files`
  ADD CONSTRAINT `document_files_user_document_id_foreign` FOREIGN KEY (`user_document_id`) REFERENCES `user_documents` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_subscription_id_foreign` FOREIGN KEY (`user_subscription_id`) REFERENCES `user_subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_requests`
--
ALTER TABLE `service_requests`
  ADD CONSTRAINT `service_requests_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_requests_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD CONSTRAINT `user_documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_services`
--
ALTER TABLE `user_services`
  ADD CONSTRAINT `user_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_subscriptions`
--
ALTER TABLE `user_subscriptions`
  ADD CONSTRAINT `user_subscriptions_subscription_id_foreign` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_subscription_usages`
--
ALTER TABLE `user_subscription_usages`
  ADD CONSTRAINT `user_subscription_usages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_subscription_usages_user_subscription_id_foreign` FOREIGN KEY (`user_subscription_id`) REFERENCES `user_subscriptions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  ADD CONSTRAINT `wallet_transactions_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `wallet_transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
