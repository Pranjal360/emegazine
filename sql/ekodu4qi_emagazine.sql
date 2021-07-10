-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2021 at 10:57 AM
-- Server version: 5.6.41-84.1
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
-- Database: `ekodu4qi_emagazine`
--

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `issue_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emag_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_pic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issue_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `issue_no`, `emag_slug`, `cover_pic`, `pdf_url`, `issue_summary`, `created_at`, `updated_at`) VALUES
(1, 'November - December 2019', 'Dmmvbo', 'uploads/emagazine/Dmmvbo/1578900126.jpg', 'uploads/emagazine/Dmmvbo/1578900126.pdf', 'A magazine is something that includes a variety of ideas and thoughts; in your further reading, you will be experiencing this. We\'ve been exploring how to build a successful team, how to ensure workplace health and safety. We also have some technology-related things like Android\'s revolution, tech and biology, and the impact of the Internet on our everyday lives. Besides these, there is also a subject of social concern regarding food waste and the experience of the employee with Ekodus.', '2019-12-23 01:52:06', '2020-01-13 01:52:06'),
(2, 'September - October 2019', 'Settrb', 'uploads/emagazine/Settrb/1579001689.jpg', 'uploads/emagazine/Settrb/1579001689.pdf', 'Inside you will become more acquainted with the wear and tear of a team leader\'s day by day work schedule. With progression of new advances in this digitalization period we get to know how digitally restaurants are changing by YMOC.COM. Furthermore you will get to know the running head of Salesforce CRM of Ekodus Inc. As this edition focuses more on the employees, their experience notes will make people realize Why Ekodus? We have some extraordinary articles from our employees about some trending technologies and how it works in the digital platforms.', '2019-10-02 06:04:49', '2020-01-14 06:04:49'),
(3, 'May - June 2019', 'yeanum', 'uploads/emagazine/yeanum/1579163531.jpg', 'uploads/emagazine/yeanum/1579163531.pdf', 'EKODUS’s first ever e-Magazine is here! From messages by H.O.D.s to achievements, yearly events and festivals and many more, we have penned down something of everything in this e-Magazine. It summarizes the journey of Ekodus from different perspectives to the talents of company’s employees in different activities.', '2019-06-16 03:02:11', '2020-01-16 03:02:11'),
(4, 'July - August 2019', 'uluutg', 'uploads/emagazine/uluutg/1579164225.jpg', 'uploads/emagazine/uluutg/1579164225.pdf', 'Inside you will find a mixture of interviews, features about our CSR activities, a column on the future of Mobile Phones, and a topic on Women Empowerment and more. The interviews with our Production Manager and our CEO drives a hint on the traits needed to succeed in today\'s corporate world. One of our experienced members from YMOC team gives her first-hand account of the journey so far.', '2019-08-16 03:13:45', '2020-01-16 03:13:45'),
(5, 'January - February 2020', 'ujynua', 'uploads/emagazine/ujynua/1579168064.jpg', 'uploads/emagazine/ujynua/1579168064.pdf', 'In this 5th edition of our e-Magazine, we have covered some informative and inspirational articles along with a throwback to our CSR activities of the year, the Growth of Ekodus, the Client of the Month and an article from a guest writer. In our Gallery Section, we have a wide range of photographs captured in the last year that strive diverse developments in the respective departments of Ekodus. Energetic wishes from our CEO and MD drive a hint on the traits needed to succeed in today’s corporate world with amazing qualities of leadership and teamwork. Our ‘Vision-2020’ article will enhance your knowledge and interpersonal skills.', '2020-01-16 04:17:44', '2020-01-16 04:17:44'),
(6, 'March - April 2020', 'acalrr', 'uploads/emagazine/acalrr/1584000972.jpg', 'uploads/emagazine/acalrr/1584000972.pdf', 'In this 6th edition of our e-Magazine, we have covered some informative and very inspiring\r\narticles both from US and Guwahati headquarters derivative of their tread in Ekodus and the\r\nhardworking team who have brought to life YMOC from scratch, in addition we have an article\r\nenlightening the company’s educational envision as Ekodus Knowledge Centre and the candid\r\nphoto gallery quoting the healthy office day-to-day lives. Also, we have the energetic employees\r\nwho have shared their valuable experience and are the kith and keen of the Ekodus family. This\r\nissue has been enriched by the thoughts and words of our Senior Vice President, and inspiring\r\nwords from our President under whose shed and flamboyant leadership Ekodus is shining in the\r\nspotlight.', '2020-03-12 13:16:12', '2020-03-12 13:16:12'),
(7, 'May - June 2020', 'mnujya', 'uploads/emagazine/mnujya/1591365776.jpg', 'uploads/emagazine/mnujya/1591365776.pdf', 'The 7th Edition of Ekodus E-magazine is quite a special one. Not simply because our comrades have contributed some of the best articles, but also because it is an Anniversary Special! Ekodus is turning 3 this June 5th 2020. As we become a year older, I would like to take a moment to thank each and everyone in the Ekodus Family for making everything possible by far.This edition consists of some of the best and most informative articles by our team members from both US and Guwahati divisions. Our honorable President sends us a very inspiring message on tackling the pandemic and how to welcome changes to our lives. On the other hand, our Global Sales Director’s piece on COVID-19 enlightens us on how to cope with the work-from-home situation and be productive.', '2020-06-05 19:02:56', '2020-06-05 19:02:56');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_01_13_064432_create_magazines_table', 2),
(6, '2020_01_14_111123_add_fields_2_magazine', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$10$wd7p8JyiPATqIHqQh63k0ef6hINTpMS73SqAlJTNSiVlsUuGSw2bG', 'oTnVDHgaI591Vr5jDTWdtrke3cGM9HwDKdwNfUy5fPfR9pre6uYKQjTZ5o6n', '2020-01-13 00:29:18', '2020-01-13 00:29:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `magazines_issue_no_unique` (`issue_no`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
