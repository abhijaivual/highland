-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 05:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highland`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_proofs`
--

CREATE TABLE `address_proofs` (
  `emp_id` int(11) NOT NULL,
  `address_proof_doc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `attid` int(10) UNSIGNED NOT NULL,
  `empid` int(11) NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `att_date` date NOT NULL,
  `shift` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift_start` time NOT NULL,
  `shift_end` time NOT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `shift_hrs` time NOT NULL,
  `work_hrs` time DEFAULT NULL,
  `ot_hrs` time DEFAULT NULL,
  `early_arival` int(11) DEFAULT NULL,
  `late_arival` int(11) DEFAULT NULL,
  `late_departure` int(11) DEFAULT NULL,
  `early_departure` int(11) DEFAULT NULL,
  `attendance_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`attid`, `empid`, `fname`, `att_date`, `shift`, `shift_start`, `shift_end`, `in_time`, `out_time`, `shift_hrs`, `work_hrs`, `ot_hrs`, `early_arival`, `late_arival`, `late_departure`, `early_departure`, `attendance_status`, `created_at`, `updated_at`) VALUES
(1, 100, 'John', '2018-02-19', 'gen-3', '09:00:00', '05:00:00', '09:11:00', '17:00:00', '08:00:00', '07:49:00', '00:00:00', 0, 11, 5, 0, 'p', '2018-02-21 04:44:20', '2018-02-21 05:45:59'),
(2, 101, 'Mark', '2018-02-19', 'gen1-3', '08:00:00', '04:00:00', NULL, '04:05:00', '07:00:00', '07:54:00', '00:00:00', 0, 10, 4, 0, 'p', '2018-02-21 04:44:20', NULL),
(3, 102, 'Alister', '2018-02-19', 'gen3-3', '07:00:00', '03:00:00', NULL, NULL, '08:00:00', '08:53:00', '00:00:00', 0, 9, 3, 0, 'A', '2018-02-21 04:44:20', NULL),
(4, 103, 'Priyanka', '2018-02-19', 'gen2-3', '09:00:00', '05:00:00', '09:13:00', '05:05:00', '06:00:00', '07:53:00', '00:00:00', 0, 9, 5, 0, 'p', '2018-02-21 04:44:20', NULL),
(5, 104, 'Preethi', '2018-02-19', 'gen2-4', '10:00:00', '06:00:00', '10:13:00', '06:05:00', '07:00:00', '08:53:00', '01:00:00', 0, 9, 5, 0, 'p', '2018-02-21 04:44:20', NULL),
(6, 105, 'Denzil', '2018-02-19', 'gen2-5', '11:00:00', '07:00:00', '11:13:00', NULL, '08:00:00', '09:53:00', '02:00:00', 0, 9, 5, 0, 'p', '2018-02-21 04:44:20', NULL),
(7, 100, 'John', '2018-02-18', 'gen-3', '09:00:00', '05:00:00', '09:12:00', '05:05:00', '08:00:00', '07:53:00', '00:00:00', 0, 12, 5, 0, 'p', '2018-02-21 04:44:20', NULL),
(8, 101, 'Mark', '2018-02-18', 'gen1-3', '08:00:00', '04:00:00', NULL, '04:05:00', '07:00:00', '07:54:00', '00:00:00', 0, 10, 4, 0, 'p', '2018-02-21 04:44:20', NULL),
(9, 102, 'Alister', '2018-02-18', 'gen3-3', '07:00:00', '03:00:00', '09:13:00', '05:20:00', '08:00:00', '08:53:00', '00:00:00', 0, 9, 3, 0, 'p', '2018-02-21 04:44:20', NULL),
(10, 103, 'Priyanka', '2018-02-18', 'gen2-3', '09:00:00', '05:00:00', NULL, NULL, '06:00:00', '07:53:00', '00:00:00', 0, 9, 5, 0, 'a', '2018-02-21 04:44:20', NULL),
(11, 104, 'Preethi', '2018-02-18', 'gen2-4', '10:00:00', '06:00:00', '10:13:00', '06:05:00', '07:00:00', '08:53:00', '01:00:00', 0, 9, 5, 0, 'p', '2018-02-21 04:44:20', NULL),
(12, 105, 'Denzil', '2018-02-18', 'gen2-5', '11:00:00', '07:00:00', '11:13:00', NULL, '08:00:00', '09:53:00', '02:00:00', 0, 9, 5, 0, 'p', '2018-02-21 04:44:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `emp_id` int(11) NOT NULL,
  `certificate_doc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `department_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accounts', 1, '2018-02-21 04:41:12', '2018-02-21 04:41:12'),
(2, 'Administration', 1, '2018-02-21 04:41:12', '2018-02-21 04:41:12'),
(3, 'Front Office', 1, '2018-02-21 04:41:12', '2018-02-21 04:41:12'),
(4, 'Dialsis', 1, '2018-02-21 04:41:12', '2018-02-21 04:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `desig_id` int(10) UNSIGNED NOT NULL,
  `designation_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`desig_id`, `designation_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accountant', 1, '2018-02-21 04:41:19', '2018-02-21 04:41:19'),
(2, 'Reciptionist', 1, '2018-02-21 04:41:19', '2018-02-21 04:41:19'),
(3, 'Manager', 1, '2018-02-21 04:41:19', '2018-02-21 04:41:19'),
(4, 'Nurse', 1, '2018-02-21 04:41:19', '2018-02-21 04:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `expirience_letters`
--

CREATE TABLE `expirience_letters` (
  `emp_id` int(11) NOT NULL,
  `expirience_doc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(68, '2018_01_18_071844_create_roles_table', 1),
(69, '2018_01_18_071856_create_departments_table', 1),
(70, '2018_01_18_071859_create_designations_table', 1),
(71, '2018_01_18_071907_create_users_table', 1),
(72, '2018_01_18_071912_create_address_proofs_table', 1),
(73, '2018_01_18_071914_create_certificates_table', 1),
(74, '2018_01_18_071917_create_expirience_letters_table', 1),
(75, '2018_01_18_071920_create_previous_payslips_table', 1),
(76, '2018_01_24_084823_create_notifications_table', 1),
(77, '2018_02_09_074526_create_attendances_table', 1),
(78, '2018_02_10_054906_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `previous_payslips`
--

CREATE TABLE `previous_payslips` (
  `emp_id` int(11) NOT NULL,
  `payslip_doc` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SUPER ADMIN', 1, '2018-02-21 04:41:03', '2018-02-21 04:41:03'),
(2, 'ADMIN', 1, '2018-02-21 04:41:03', '2018-02-21 04:41:03'),
(3, 'HR', 1, '2018-02-21 04:41:03', '2018-02-21 04:41:03'),
(4, 'HOD', 1, '2018-02-21 04:41:03', '2018-02-21 04:41:03'),
(5, 'EMPLOYEE', 1, '2018-02-21 04:41:03', '2018-02-21 04:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `designation_id` int(10) UNSIGNED DEFAULT NULL,
  `doj` date NOT NULL,
  `employee_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reffered_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `r_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `first_name`, `last_name`, `dob`, `email`, `phone`, `address`, `city`, `age`, `gender`, `profile_image`, `department_id`, `designation_id`, `doj`, `employee_type`, `reffered_by`, `profile_status`, `cv`, `remember_token`, `created_at`, `updated_at`, `r_id`) VALUES
(1, 'vual123321', 'Vual', NULL, NULL, 'support@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2017-02-10', 'temporary', NULL, 'activated', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 1),
(2, 'admin123321', 'Admin', NULL, NULL, 'admin@highlandhospital.in', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2017-02-10', 'temporary', NULL, 'activated', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 2),
(100, '12345', 'John', 'S', NULL, 'john@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, '2017-02-10', 'temporary', NULL, 'activated', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 3),
(101, '12345', 'Mark', 'A', NULL, 'mark@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, '2017-05-10', 'temporary', NULL, 'not_completed', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 3),
(102, '12345', 'Alister', 'B', NULL, 'alister@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 4, 2, '2017-12-10', 'permanent', NULL, 'activated', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 4),
(103, '12345', 'Priyanka', 'C', NULL, 'priyanka@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 3, 4, '2017-08-10', 'temporary', NULL, 'not_completed', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 4),
(104, '12345', 'Preethi', 'D', NULL, 'preethi@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2017-03-10', 'permanent', NULL, 'activated', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 5),
(105, '12345', 'Denzil', 'C', NULL, 'denzil@vual.in', NULL, NULL, NULL, NULL, NULL, NULL, 3, 3, '2017-04-10', 'temporary', NULL, 'not_completed', NULL, NULL, '2018-02-21 04:43:54', '2018-02-21 04:43:54', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_proofs`
--
ALTER TABLE `address_proofs`
  ADD KEY `address_proofs_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`attid`),
  ADD KEY `attendances_empid_foreign` (`empid`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD KEY `certificates_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`desig_id`);

--
-- Indexes for table `expirience_letters`
--
ALTER TABLE `expirience_letters`
  ADD KEY `expirience_letters_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `previous_payslips`
--
ALTER TABLE `previous_payslips`
  ADD KEY `previous_payslips_emp_id_foreign` (`emp_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_department_id_foreign` (`department_id`),
  ADD KEY `users_designation_id_foreign` (`designation_id`),
  ADD KEY `users_r_id_foreign` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `attid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `desig_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_proofs`
--
ALTER TABLE `address_proofs`
  ADD CONSTRAINT `address_proofs_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_empid_foreign` FOREIGN KEY (`empid`) REFERENCES `users` (`id`);

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `expirience_letters`
--
ALTER TABLE `expirience_letters`
  ADD CONSTRAINT `expirience_letters_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `previous_payslips`
--
ALTER TABLE `previous_payslips`
  ADD CONSTRAINT `previous_payslips_emp_id_foreign` FOREIGN KEY (`emp_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `users_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`desig_id`),
  ADD CONSTRAINT `users_r_id_foreign` FOREIGN KEY (`r_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
