-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2024 at 02:26 PM
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
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `agency_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `appointment_date` datetime DEFAULT NULL,
  `appointment_time` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `notes` varchar(600) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `client_type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `feature` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leases`
--

CREATE TABLE `leases` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `monthly_rent` varchar(20) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(6, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'createrole-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(2, 'viewrole-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(3, 'updaterole-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(4, 'deleterole-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(5, 'createcategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(6, 'viewcategory-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(7, 'updatecategory-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(8, 'deletecategory-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(9, 'createpermission-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(10, 'viewpermission-create', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(11, 'updatepermission-edit', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(12, 'deletepermission-delete', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(13, 'casecategory-list', 'web', '2024-11-08 23:31:32', '2024-11-08 23:31:32'),
(14, 'casecategory-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(15, 'casecategory-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(16, 'casecategory-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(17, 'casefile-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(18, 'casefile-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(19, 'casefile-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(20, 'casefile-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(21, 'casefolder-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(22, 'casefolder-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(23, 'casefolder-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(24, 'casefolder-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(25, 'document-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(26, 'document-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(27, 'document-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(28, 'document-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(29, 'documentpagecount-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(30, 'documentpagecount-create', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(31, 'documentpagecount-edit', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(32, 'documentpagecount-delete', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(33, 'documenttype-list', 'web', '2024-11-08 23:31:33', '2024-11-08 23:31:33'),
(34, 'documenttype-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(35, 'documenttype-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(36, 'documenttype-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(37, 'field-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(38, 'field-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(39, 'field-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(40, 'field-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(41, 'fieldcategory-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(42, 'fieldcategory-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(43, 'fieldcategory-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(44, 'fieldcategory-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(45, 'fileretention-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(46, 'fileretention-create', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(47, 'fileretention-edit', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(48, 'fileretention-delete', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(49, 'fileretentiondate-list', 'web', '2024-11-08 23:31:34', '2024-11-08 23:31:34'),
(50, 'fieldcategorydate-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(51, 'fileretentiondate-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(52, 'fileretentiondate-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(53, 'form-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(54, 'form-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(55, 'form-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(56, 'form-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(57, 'log-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(58, 'log-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(59, 'log-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(60, 'log-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(61, 'metadatadefinition-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(62, 'metadatadefinition-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(63, 'metadatadefinition-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(64, 'metadatadefinition-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(65, 'metadatavalue-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(66, 'metadatavalue-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(67, 'metadatavalue-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(68, 'metadatavalue-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(69, 'permission-list', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(70, 'permission-create', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(71, 'permission-edit', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(72, 'permission-delete', 'web', '2024-11-08 23:31:35', '2024-11-08 23:31:35'),
(73, 'role-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(74, 'role-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(75, 'role-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(76, 'role-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(77, 'user-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(78, 'user-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(79, 'user-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(80, 'user-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(81, 'workflow-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(82, 'workflow-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(83, 'workflow-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(84, 'workflow-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(85, 'workflowrule-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(86, 'workflowrule-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(87, 'workflowrule-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(88, 'workflowrule-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(89, 'workflowstep-list', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(90, 'workflowstep-create', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(91, 'workflowstep-edit', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(92, 'workflowstep-delete', 'web', '2024-11-08 23:31:36', '2024-11-08 23:31:36'),
(93, 'documentrequirement-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(94, 'documentrequirement-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(95, 'documentrequirement-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(96, 'documentrequirement-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(97, 'documentsignature-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(98, 'documentsignature-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(99, 'documentsignature-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(100, 'documentsignature-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(101, 'duplicatedocument-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(102, 'duplicatedocument-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(103, 'duplicatedocument-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(104, 'duplicatedocument-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(105, 'file-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(106, 'file-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(107, 'file-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(108, 'file-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(109, 'filestore-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(110, 'filestore-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(111, 'filestore-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(112, 'filestore-delete', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(113, 'license-list', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(114, 'license-create', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(115, 'license-edit', 'web', '2024-11-08 23:31:37', '2024-11-08 23:31:37'),
(116, 'license-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(117, 'licensesession-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(118, 'licensesession-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(119, 'licensesession-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(120, 'licensesession-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(121, 'mfacode-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(122, 'mfacode-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(123, 'mfacode-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(124, 'mfacode-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(125, 'smsconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(126, 'smsconfiguration-create', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(127, 'smsconfiguration-edit', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(128, 'smsconfiguration-delete', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(129, 'smtpconfiguration-list', 'web', '2024-11-08 23:31:38', '2024-11-08 23:31:38'),
(130, 'smtpconfiguration-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(131, 'smtpconfiguration-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(132, 'smtpconfiguration-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(133, 'userkey-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(134, 'userkey-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(135, 'userkey-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(136, 'userkey-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(137, 'workflowdocument-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(138, 'workflowdocument-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(139, 'workflowdocument-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(140, 'workflowdocument-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(141, 'workflowinstance-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(142, 'workflowinstance-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(143, 'workflowinstance-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(144, 'workflowinstance-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(145, 'workflowstepaction-list', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(146, 'workflowstepaction-create', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(147, 'workflowstepaction-edit', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(148, 'workflowstepaction-delete', 'web', '2024-11-08 23:31:39', '2024-11-08 23:31:39'),
(149, 'workflowstepcomment-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(150, 'workflowstepcomment-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(151, 'workflowstepcomment-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(152, 'workflowstepcomment-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(153, 'workflowsteprequirement-list', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(154, 'workflowsteprequirement-create', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(155, 'workflowsteprequirement-edit', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40'),
(156, 'workflowsteprequirement-delete', 'web', '2024-11-08 23:31:40', '2024-11-08 23:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `property_type` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `agent_id` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2024-11-12 02:05:03', '2024-11-12 02:05:03'),
(3, 'admin', 'web', '2024-11-12 02:05:20', '2024-11-12 02:05:20'),
(4, 'financial accountant', 'web', '2024-11-12 02:05:25', '2024-11-12 02:05:25'),
(6, 'Intern', 'web', '2024-12-04 10:55:09', '2024-12-04 10:56:32'),
(7, 'head of department', 'web', '2024-12-10 15:46:24', '2024-12-10 15:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 7),
(2, 1),
(2, 3),
(2, 7),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(5, 1),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(13, 1),
(13, 3),
(14, 1),
(14, 3),
(15, 1),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(36, 3),
(37, 1),
(37, 3),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(86, 6),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 1),
(91, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(95, 6),
(96, 1),
(96, 3),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(98, 6),
(99, 1),
(99, 3),
(100, 1),
(100, 3),
(101, 1),
(101, 3),
(101, 6),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(104, 3),
(105, 1),
(105, 3),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(110, 6),
(111, 1),
(111, 3),
(112, 1),
(112, 3),
(113, 1),
(113, 3),
(113, 6),
(114, 1),
(114, 3),
(115, 1),
(115, 3),
(116, 1),
(116, 3),
(117, 1),
(117, 3),
(118, 1),
(118, 3),
(119, 1),
(119, 3),
(119, 6),
(120, 1),
(120, 3),
(121, 1),
(121, 3),
(122, 1),
(122, 3),
(123, 1),
(123, 3),
(124, 1),
(124, 3),
(125, 1),
(125, 3),
(126, 1),
(126, 3),
(127, 1),
(127, 3),
(128, 1),
(128, 3),
(129, 1),
(129, 3),
(129, 6),
(130, 1),
(130, 3),
(131, 1),
(131, 3),
(132, 1),
(132, 3),
(133, 1),
(133, 3),
(134, 1),
(134, 3),
(135, 1),
(135, 3),
(136, 1),
(136, 3),
(137, 1),
(137, 3),
(138, 1),
(138, 3),
(139, 1),
(139, 3),
(140, 1),
(140, 3),
(141, 1),
(141, 3),
(142, 1),
(142, 3),
(143, 1),
(143, 3),
(144, 1),
(144, 3),
(145, 1),
(145, 3),
(146, 1),
(146, 3),
(147, 1),
(147, 3),
(148, 1),
(148, 3),
(149, 1),
(149, 3),
(150, 1),
(150, 3),
(151, 1),
(151, 3),
(152, 1),
(152, 3),
(153, 1),
(153, 3),
(154, 1),
(154, 3),
(155, 1),
(155, 3),
(156, 1),
(156, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `transaction_type` varchar(30) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `transaction_date` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agents_properties` (`property_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_appointments_properties` (`property_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_features_properties` (`property_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `fk_images_properties` (`property_id`);

--
-- Indexes for table `leases`
--
ALTER TABLE `leases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_leases_properties` (`property_id`),
  ADD KEY `fk_leases_clients` (`client_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transactions_properties` (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leases`
--
ALTER TABLE `leases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `fk_agents_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `fk_features_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `leases`
--
ALTER TABLE `leases`
  ADD CONSTRAINT `fk_leases_clients` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_leases_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_transactions_properties` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
