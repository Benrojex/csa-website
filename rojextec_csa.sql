-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2021 at 10:58 AM
-- Server version: 5.7.35-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rojextec_csa`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `name`, `surname`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(4, 'chidiebere', 'ogwe', 'chidiogwe@gmail.com', '08093938083', '2020-02-21 03:54:36', '2020-02-21 06:31:40'),
(2, 'Benjamin', 'Ezugwu', 'benjamin.obinna@yahoo.com', '08036928135', '2019-09-23 12:33:02', '2020-02-18 10:19:45'),
(5, 'Ikechukwu', 'Anyaogu', 'ikeanyaogu@gmail.com', '08056612557', '2020-02-21 04:23:22', '2020-02-21 20:33:34'),
(6, 'Babatunde k', 'Sanusi', 'tunde4jah@gmail.com', '07038378750', '2020-02-21 04:30:09', '2020-02-21 04:30:09'),
(7, 'Duke', 'Igbokwe', 'deslog@live.com', '07030544531', '2020-02-21 05:54:33', '2020-02-21 05:54:33'),
(8, 'Michael', 'Ezugwu', 'econnectcafe@gmail.com', '08035912612', '2020-02-23 18:43:50', '2020-02-23 18:43:50'),
(9, 'Benjamin', 'Ezugwu', 'denextcsa@gmail.com', '08036914767', '2020-02-29 08:36:57', '2020-02-29 08:36:57'),
(10, 'Moses', 'Stephen', 'stivo_onyx@yahoo.co.uk', '08054448423', '2020-03-05 07:45:01', '2020-03-05 07:45:01'),
(11, 'Eliezer', 'Onyema', 'elly4cheers2020@gmail.com', '08035971283', '2020-11-30 12:42:48', '2020-11-30 12:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `app_versions`
--

CREATE TABLE `app_versions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_versions`
--

INSERT INTO `app_versions` (`id`, `version`, `created_at`, `updated_at`) VALUES
(1, '2.3.30', '2020-02-20 23:00:00', '2020-02-20 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_user_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `app_user_id`, `ip_address`, `version`, `created_at`, `updated_at`) VALUES
(42, 2, '197.210.174.169', '2.3.30', '2020-03-09 06:05:18', '2020-03-09 06:05:18'),
(41, 10, '105.112.114.152', '2.3.30', '2020-03-05 07:45:15', '2020-03-05 07:45:15'),
(40, 10, '105.112.114.152', '2.3.30', '2020-03-05 07:45:13', '2020-03-05 07:45:13'),
(39, 10, '105.112.114.152', '2.3.30', '2020-03-05 07:45:08', '2020-03-05 07:45:08'),
(38, 9, '105.112.112.215', '2.3.30', '2020-02-29 08:37:07', '2020-02-29 08:37:07'),
(37, 2, '197.210.53.100', '2.3.30', '2020-02-26 21:35:09', '2020-02-26 21:35:09'),
(36, 2, '197.210.53.100', '2.3.30', '2020-02-26 21:34:50', '2020-02-26 21:34:50'),
(30, 2, '105.112.123.186', '2.3.30', '2020-02-20 19:25:25', '2020-02-20 19:25:25'),
(31, 4, '41.190.12.180', '2.3.30', '2020-02-21 03:54:46', '2020-02-21 03:54:46'),
(32, 5, '197.210.45.193', '2.3.30', '2020-02-21 04:23:31', '2020-02-21 04:23:31'),
(33, 6, '105.112.114.207', '2.3.30', '2020-02-21 04:30:18', '2020-02-21 04:30:18'),
(34, 7, '129.205.113.111', '2.3.30', '2020-02-21 05:54:42', '2020-02-21 05:54:42'),
(35, 4, '154.66.31.162', '2.3.30', '2020-02-21 06:31:48', '2020-02-21 06:31:48'),
(43, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:43:25', '2020-11-29 12:43:25'),
(44, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:50:03', '2020-11-29 12:50:03'),
(45, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:50:43', '2020-11-29 12:50:43'),
(46, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:51:04', '2020-11-29 12:51:04'),
(47, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:51:42', '2020-11-29 12:51:42'),
(48, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:53:02', '2020-11-29 12:53:02'),
(49, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:53:15', '2020-11-29 12:53:15'),
(50, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:55:34', '2020-11-29 12:55:34'),
(51, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:56:08', '2020-11-29 12:56:08'),
(52, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:56:56', '2020-11-29 12:56:56'),
(53, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:58:20', '2020-11-29 12:58:20'),
(54, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:59:03', '2020-11-29 12:59:03'),
(55, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:59:36', '2020-11-29 12:59:36'),
(56, 11, '197.210.55.43', '2.3.30', '2020-11-29 12:59:48', '2020-11-29 12:59:48'),
(57, 11, '197.210.55.43', '2.3.30', '2020-11-29 13:04:55', '2020-11-29 13:04:55'),
(58, 11, '197.210.55.43', '2.3.30', '2020-11-29 13:07:42', '2020-11-29 13:07:42'),
(59, 11, '197.210.55.43', '2.3.30', '2020-11-29 13:08:24', '2020-11-29 13:08:24'),
(60, 2, '197.210.70.161', '2.3.30', '2020-11-29 18:54:36', '2020-11-29 18:54:36'),
(61, 2, '197.210.70.161', '2.3.30', '2020-11-29 18:54:50', '2020-11-29 18:54:50'),
(62, 2, '197.210.70.161', '2.3.30', '2020-11-29 18:54:57', '2020-11-29 18:54:57'),
(63, 2, '197.210.70.161', '2.3.30', '2020-11-29 18:55:26', '2020-11-29 18:55:26'),
(64, 2, '197.210.70.141', '2.3.30', '2020-11-29 19:33:36', '2020-11-29 19:33:36'),
(65, 2, '105.112.123.51', '2.3.30', '2021-07-09 19:05:43', '2021-07-09 19:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_05_181616_create_app_users_table', 1),
(4, '2019_09_05_182147_create_downloads_table', 1),
(5, '2019_09_18_142125_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `email`, `info`, `created_at`, `updated_at`) VALUES
(49, 'Claudia Clement', 'claudiauclement@yahoo.com', 'Hi, We are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to rojextech.com?\r\n\r\nThe price is just $67 per link, via Paypal.\r\n\r\nTo explain what DA is and the benefit for your website, along with a sample of an existing link, please read here: https://justpaste.it/6jp87\r\n\r\nIf you\'d be interested in learning more, reply to this email but please make sure you include the word INTERESTED in the subject line field, so we can get to your reply sooner.\r\n\r\nKind Regards,\r\nClaudia', '2020-04-22 15:23:56', '2020-04-22 15:23:56'),
(48, 'Oliva Turner', 'oliva.turner@gmail.com', 'Hi,\r\n\r\nWe\'re wondering if you\'ve ever considered taking the content from rojextech.com and converting it into videos to promote on Youtube using Content Samurai? You simply add the text and it converts it into scenes that make up a full video. No special skills are needed, and there\'s access to over 1 million images/clips that can be used.\r\n\r\nYou can read more about the software here: https://turntextintovideo.com - there\'s also a link to a totally free guide called the \'Youtube SEO Cheat Sheet\', full of fantastic advice on how to help your site rank higher in Youtube and in Google.\r\n\r\nKind Regards,\r\nOliva', '2020-04-08 03:15:45', '2020-04-08 03:15:45'),
(46, 'Benjamin Ezugwu', 'benjamin.obinna@yahoo.com', 'This is to test mail again like she or He did', '2020-04-06 12:56:28', '2020-04-06 12:56:28'),
(45, 'Barbara Atyson', 'barbaratysonhw@yahoo.com', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service which we feel can benefit your site rojextech.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=oYoUQjxvhA0\r\nhttps://www.youtube.com/watch?v=NKY4a3hvmUc\r\nhttps://www.youtube.com/watch?v=Ut6Wq3cjRys\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n0-1 minutes = $169\r\n1-2 minutes = $299\r\n\r\n*All prices include a custom video, full script and a voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to get in touch.\r\nIf you are not interested, simply delete this message and we won\'t contact you again.\r\n\r\nKind Regards,\r\nBarbara', '2020-04-05 05:50:37', '2020-04-05 05:50:37'),
(44, 'Ikechukwu Anyaogu', 'ikeanyaogu@gmail.com', 'after installation of the updated version through a link sent to me and successful restoration of back up from the previous version the software hangs each time I tried to generate s-21 for publishers.  I  uninstalled to fix but couldn\'t find the downloaded installation package again.  I tried re-downloading through the link but got the message that link has expired. please help.', '2020-02-21 20:07:10', '2020-02-21 20:07:10'),
(50, 'Obinna Ezugwu', 'benjaminezugwu0@gmail.com', 'Sufficient information that will help us understand you will be appreciated.', '2020-09-18 18:19:56', '2020-09-18 18:19:56'),
(51, 'Obinna Ezugwu', 'benjaminezugwu0@gmail.com', 'Sufficient information that will help us understand you will be appreciated.', '2020-09-18 18:20:13', '2020-09-18 18:20:13'),
(52, 'Obinna Ezugwu', 'benjaminezugwu0@gmail.com', 'Sufficient information that will help us understand you will be appreciated.', '2020-09-18 18:28:28', '2020-09-18 18:28:28'),
(53, 'Obinna Ezugwu', 'benjamin.ob@gmail.com', 'Sghvhh\r\nJgfyuh\r\nKjvhuu\r\nHhh', '2020-10-27 19:50:25', '2020-10-27 19:50:25'),
(54, 'Obinna Ezugwu', 'benjaminezugwu0@gmail.com', 'The information must be at least 20 characters', '2021-01-02 09:34:32', '2021-01-02 09:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `app_user_id` bigint(20) UNSIGNED NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Ikechukwu', 'Anyaogu', 'ikeanyaogu@gmail.com', NULL, '$2y$10$mSLiPgrxyAWWPNuN1XiGiOVZlQTv2tUnaswf5B0JiEpz5FgPj/VwS', '8uirU5cb0NnT1tavjUAHui7sFytb1Qi9uzavzZ0yFCv0VYAmjHKfPssB2ViU', NULL, '2020-02-21 04:23:22', '2020-02-27 08:49:36'),
(2, 'Benjamin', 'Ezugwu', 'benjamin.obinna@yahoo.com', NULL, '$2y$10$KXOiqurb4VF5fKQ3.B0SQ.LlAimmsQGun45NT1xzCIWLhvnFrya/C', 'OK04PY9lsDVwyQ8rATpj4KLhZVID3a04DCGg5XkXWB6ozpvHtTkRJ2lrwnMC', 'eoUwMmsHbY8thOA1MDXpSUDE8DqHo8qmYtj5mPwQ7VYLmlNFMkwQlIOolnea', '2019-09-23 12:33:02', '2020-03-09 06:03:38'),
(4, 'Chidiebere', 'Ogwe', 'chidiogwe@gmail.com', NULL, '$2y$10$Zf30OiHNR2FuBR1YXZGyJuQZI0JzsZeA9XY5n6yLqa5d9MB827bMK', 'Y2iQOFvtj1PI4oXNhAIHoBXQJahx96F1RyodYnL5FnWjjggIpBVCGImszlse', NULL, '2020-02-21 03:54:36', '2020-02-27 08:49:36'),
(6, 'Babatunde k', 'Sanusi', 'tunde4jah@gmail.com', NULL, '$2y$10$3bQuVO6/HIqYe8J55pEt3uQy3NDA.Saljsnq5aO6b0sk.eTKVHBCu', 'Pwn5ts0PZlnRbZU7wnqiAxIPQTwz9zYkc1dSQHMPQUCf3ZRqakVMzgEAO9tP', NULL, '2020-02-21 04:30:09', '2020-02-27 08:49:36'),
(7, 'Duke', 'Igbokwe', 'deslog@live.com', NULL, '$2y$10$sOszoVHTJJqbLkSK1DeIneVsFx5rfyV9/KV2AWOpFfCIPaC40faae', 'gPYUYg4vICX8B9Ndq2Q0eekjQpya8vyFasmuEdelxKbvvlZgCzuEHmJnzSdV', NULL, '2020-02-21 05:54:33', '2020-02-27 08:49:36'),
(8, 'Michael', 'Ezugwu', 'econnectcafe@gmail.com', NULL, '$2y$10$ad7T4tePkQQvFTO0y/8Sz.PMuQEq72aAGqbPHb.CUy0MP5vVPsK.i', 'W5Wg8a7UAt80Q4iOOzF5gMr2cXg0iFgXml8cuzpWfM2cIzc6W3KpgOV2WhCU', NULL, '2020-02-23 18:43:50', '2020-02-27 08:49:36'),
(9, 'Benjamin', 'Ezugwu', 'denextcsa@gmail.com', NULL, '$2y$10$5ntHfrnP9scWcPIgZrr9POpt8022qCDP63qLcPJn4kwkFU.twt0QS', NULL, NULL, '2020-02-29 08:36:57', '2020-02-29 08:36:57'),
(10, 'Moses', 'Stephen', 'stivo_onyx@yahoo.co.uk', NULL, '$2y$10$C0/hMnKogE1lwdPgfDktHebn3gZdpziiFD7X2Fr7LLLC.dH/vc056', '6W6IfuAVZlDTZMHHEDs29JwlGJDiWGe7V8pb5b1uXmeIaCVYx3BF1NgCl8ju', NULL, '2020-03-05 07:45:01', '2020-03-05 07:45:01'),
(11, 'Awele', 'Ezugwu', 'benjaminezugwu0@gmail.com', NULL, '$2y$10$8GAU4uvOUFomLfbCkeiVKup710yF48Z6orb1UbQSGESf.4LVmgNa.', 'mDYqQHU2SrfCnZ6shsd2UfXfS6KtfnEtnKT6mGO2xYzEJU1rBTIZ7INTC7Bj', NULL, '2020-11-29 12:42:49', '2020-11-29 12:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `app_users_phone_unique` (`phone`),
  ADD UNIQUE KEY `app_users_email_unique` (`email`);

--
-- Indexes for table `app_versions`
--
ALTER TABLE `app_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `downloads_app_user_id_foreign` (`app_user_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_app_user_id_foreign` (`app_user_id`);

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
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `app_versions`
--
ALTER TABLE `app_versions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
