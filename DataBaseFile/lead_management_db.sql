-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 05:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lead_management_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$RTPOyvkmIXY/1jbJShFb2.J9pARyvwmoui5UJfb8Ky4QUwo4CzM/K', NULL, '2022-11-26 11:34:34', '2022-11-26 11:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('new','accepted','completed','rejected','invalid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `email`, `mobile`, `description`, `source`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arun', 'arun@gmail.com', '9818212276', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(2, 'Dheeru', 'dheeru@gmail.com', '9818212278', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(3, 'Tej', 'tej@gmail.com', '9818212279', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(4, 'Tej Prakash', 'tejprakash@gmail.com', '9818212270', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(5, 'Ayush Chopra', 'ayush@gmail.com', '9818212210', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(6, 'Anshu', 'anshu@gmail.com', '9818212212', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(7, 'Sapna', 'sapna@gmail.com', '9818212213', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(8, 'Sona', 'sona@gmail.com', '9818212214', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(9, 'Sona Singh', 'sonasingh@gmail.com', '9818212215', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(10, 'Naveen', 'naveen@gmail.com', '9818212216', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(11, 'Varun', 'varun@gmail.com', '9818212217', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(12, 'Neeraj', 'neeraj@gmail.com', '9818212218', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(13, 'Sudhir Singh', 'sudhir@gmail.com', '9818212219', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(14, 'Ashish', 'ashish@gmail.com', '9818212221', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(15, 'Manoj', 'manoj@gmail.com', '9818212221', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(16, 'Rohit', 'rohit@gmail.com', '9818212222', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(17, 'Annu', 'annu@gmail.com', '9818212223', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(18, 'Rahul Singh', 'rahul@gmail.com', '9818212224', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(19, 'Jyoti', 'jyoti@gmail.com', '9818212225', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(20, 'Satvik', 'satvik@gmail.com', '9818212226', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(21, 'Satvik', 'satvik@gmail.com', '9818212226', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(22, 'Himanshu', 'himanshu@gmail.com', '9818212227', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(23, 'Vivek', 'vivek@gmail.com', '9818212228', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(24, 'Munna', 'munna@gmail.com', '9818212229', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(25, 'Sachin', 'sachin@gmail.com', '9818212230', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(26, 'Dushyant', 'dushyant@gmail.com', '9818212231', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(27, 'Prince', 'prince@gmail.com', '9818212232', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(28, 'Mukesh', 'mukesh@gmail.com', '9818212233', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 01:08:48'),
(29, 'Lokesh', 'lokesh@gmail.com', '9818212234', 'This is a good product i want to more.', 'Website', 'new', '2022-11-26 01:08:48', '2022-11-26 13:26:43'),
(30, 'Nitin', 'nitin@gmail.com', '9818212235', 'This is a good product i want to more.', 'Website', 'accepted', '2022-11-27 10:49:55', '2022-11-27 10:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `lead_updates`
--

CREATE TABLE `lead_updates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_updates`
--

INSERT INTO `lead_updates` (`id`, `user_name`, `lead_message`, `lead_status`, `leads_id`, `created_at`, `updated_at`) VALUES
(1, 'Maharaj Singh', 'This is a good lead', 'accepted', 30, '2022-11-26 14:20:07', '2022-11-26 14:20:07'),
(2, 'Nitin Singh', 'This is a good product i want to more.', 'new', 30, '2022-11-27 02:33:06', '2022-11-27 02:33:06'),
(3, 'Nitin Singh', 'This is a good product i want to more.', 'accepted', 30, '2022-11-27 02:33:54', '2022-11-27 02:33:54'),
(4, 'Nitin', 'This is a good product i want to more.', 'accepted', 30, '2022-11-27 02:34:16', '2022-11-27 02:34:16'),
(5, 'By Nitin', 'This is a test Leads', 'accepted', 30, '2022-11-27 11:02:37', '2022-11-27 11:02:37'),
(6, 'By Nitin', 'This is a test Leads', 'accepted', 30, '2022-11-27 11:02:41', '2022-11-27 11:02:41'),
(7, 'By Nitin', 'This is a test Leads', 'accepted', 30, '2022-11-27 11:02:45', '2022-11-27 11:02:45'),
(8, 'By Mukesh', 'This is a test Lead', 'accepted', 28, '2022-11-27 11:04:40', '2022-11-27 11:04:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_11_25_042652_create_leads_table', 1),
(4, '2022_11_25_044330_create_lead_updates_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2022_11_26_165126_create_admin_table', 3);

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
(1, 'Ayush Chopra', 'ayush@gmail.com', NULL, '$2y$10$bbCr6e4eN2jyTPpY./2dreBcMrQnRLBT15Cy3QfXplW6aTT8K.UBm', NULL, '2022-11-26 02:29:24', '2022-11-26 02:29:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_updates`
--
ALTER TABLE `lead_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lead_updates`
--
ALTER TABLE `lead_updates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
