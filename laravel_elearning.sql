-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_bn` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `instructor_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('free','paid','subscription') NOT NULL DEFAULT 'paid',
  `price` decimal(10,2) DEFAULT 0.00,
  `subscription_price` decimal(10,2) DEFAULT NULL,
  `start_from` timestamp NULL DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `prerequisites_en` text DEFAULT NULL,
  `prerequisites_bn` text DEFAULT NULL,
  `difficulty` enum('beginner','intermediate','advanced') DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title_en`, `title_bn`, `description_en`, `description_bn`, `category_id`, `instructor_id`, `type`, `price`, `subscription_price`, `start_from`, `duration`, `prerequisites_en`, `prerequisites_bn`, `difficulty`, `course_code`, `image`, `status`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Full-Stack Web Development Bootcamp: From Basics to Advanced', 'ফুল-স্ট্যাক ওয়েব ডেভেলপমেন্ট বুটক্যাম্প: বেসিক থেকে অ্যাডভান্সড পর্যন্ত', 'Dive into the world of web development with a comprehensive bootcamp covering both front-end and back-end technologies. From HTML and CSS to server-side scripting, this course will equip you with the skills to build dynamic and interactive web applications.', 'ফ্রন্ট-এন্ড এবং ব্যাক-এন্ড উভয় প্রযুক্তিকে কভার করে একটি ব্যাপক বুটক্যাম্প সহ ওয়েব ডেভেলপমেন্টের জগতে ডুব দিন। HTML এবং CSS থেকে সার্ভার-সাইড স্ক্রিপ্টিং পর্যন্ত, এই কোর্সটি আপনাকে গতিশীল এবং ইন্টারেক্টিভ ওয়েব অ্যাপ্লিকেশন তৈরি করার দক্ষতা দিয়ে সজ্জিত করবে।', 4, 1, 'free', NULL, NULL, NULL, NULL, 'Basic understanding of HTML and CSS; familiarity with programming concepts is beneficial but not required.', 'HTML এবং CSS এর প্রাথমিক ধারণা; প্রোগ্রামিং ধারণার সাথে পরিচিতি উপকারী কিন্তু প্রয়োজনীয় নয়।', 'beginner', NULL, '5331700991017.jpg', 1, 'en', '2023-11-26 03:30:17', '2023-11-26 03:30:17', NULL),
(7, 'Adobe Creative Suite Mastery: Photoshop, Illustrator, InDesign', 'অ্যাডোব ক্রিয়েটিভ স্যুট মাস্টারি: ফটোশপ, ইলাস্ট্রেটর, ইনডিজাইন', 'Gain proficiency in Adobe Creative Suite\'s powerhouse tools—Photoshop for image editing, Illustrator for vector graphics, and InDesign for layout design. Learn to seamlessly integrate these applications to bring your creative visions to life.', 'Adobe Creative Suite-এর পাওয়ার হাউস টুলস-এ দক্ষতা অর্জন করুন- ছবি সম্পাদনার জন্য ফটোশপ, ভেক্টর গ্রাফিক্সের জন্য ইলাস্ট্রেটর এবং লেআউট ডিজাইনের জন্য InDesign। আপনার সৃজনশীল দৃষ্টিভঙ্গিগুলিকে জীবনে আনতে এই অ্যাপ্লিকেশনগুলিকে নির্বিঘ্নে সংহত করতে শিখুন৷', 2, 1, 'paid', '99.00', NULL, NULL, NULL, NULL, NULL, 'intermediate', NULL, '7331700991164.jpg', 0, 'en', '2023-11-26 03:32:44', '2023-11-26 21:40:28', NULL),
(8, 'Search Engine Optimization (SEO): Boosting Website Visibility', 'সার্চ ইঞ্জিন অপ্টিমাইজেশান (SEO): ওয়েবসাইট ভিজিবিলিটি বাড়ানো', 'Demystify the world of SEO and discover techniques to improve website visibility in search engine results. Learn keyword research, on-page optimization, and off-page strategies to drive organic traffic and enhance online presence.', 'এসইও-এর জগতকে ডিমিস্টিফাই করুন এবং সার্চ ইঞ্জিন ফলাফলে ওয়েবসাইটের দৃশ্যমানতা উন্নত করার কৌশল আবিষ্কার করুন। জৈব ট্র্যাফিক চালনা করতে এবং অনলাইন উপস্থিতি বাড়াতে কীওয়ার্ড গবেষণা, অন-পৃষ্ঠা অপ্টিমাইজেশান এবং অফ-পৃষ্ঠা কৌশলগুলি শিখুন।', 6, 1, 'subscription', '59.00', NULL, NULL, NULL, NULL, NULL, 'advanced', NULL, '7791700991265.jpg', 1, 'en', '2023-11-26 03:34:25', '2023-11-26 21:40:54', NULL),
(9, '3D Animation Basics: Getting Started with Blender', '3D অ্যানিমেশন বেসিকস: ব্লেন্ডার দিয়ে শুরু করা', 'Delve into the basics of 3D animation using Blender. Learn the fundamentals of modeling, rigging, and animation to bring characters and scenes to life in a three-dimensional space.', 'ব্লেন্ডার ব্যবহার করে 3D অ্যানিমেশনের বুনিয়াদিতে প্রবেশ করুন। একটি ত্রিমাত্রিক স্থানে চরিত্র এবং দৃশ্যগুলিকে প্রাণবন্ত করতে মডেলিং, কারচুপি এবং অ্যানিমেশনের মৌলিক বিষয়গুলি শিখুন৷', 37, 1, 'free', NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '3531700991463.jpg', 1, 'en', '2023-11-26 03:37:43', '2023-11-26 03:37:43', NULL),
(10, 'React.js Fundamentals: Building Modern User Interfaces', 'React.js ফান্ডামেন্টালস: আধুনিক ইউজার ইন্টারফেস তৈরি করা', 'Delve into the fundamentals of React.js and discover how to build modern, component-based user interfaces. From state management to routing, this course guides you through React\'s core concepts, enabling you to create powerful and maintainable front-end applications.', 'React.js-এর মৌলিক বিষয়গুলিকে অধ্যয়ন করুন এবং কীভাবে আধুনিক, উপাদান-ভিত্তিক ব্যবহারকারী ইন্টারফেস তৈরি করতে হয় তা আবিষ্কার করুন। স্টেট ম্যানেজমেন্ট থেকে রাউটিং পর্যন্ত, এই কোর্সটি আপনাকে রিঅ্যাক্টের মূল ধারণার মাধ্যমে গাইড করে, আপনাকে শক্তিশালী এবং রক্ষণাবেক্ষণযোগ্য ফ্রন্ট-এন্ড অ্যাপ্লিকেশন তৈরি করতে সক্ষম করে।', 5, 1, 'free', NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '5191700991569.jpg', 0, 'en', '2023-11-26 03:39:29', '2023-11-26 03:39:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `category_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `category_name`, `category_status`, `category_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Graphics Desgin', 0, '6171700375048.jpg', '2023-11-19 00:24:08', '2023-11-20 01:59:58', NULL),
(4, 'Web Design', 1, '9341700378633.jpg', '2023-11-19 01:23:53', '2023-11-19 01:23:53', NULL),
(5, 'App Development', 1, '5771700378684.jpg', '2023-11-19 01:24:44', '2023-11-21 21:14:54', NULL),
(6, 'Digital Marketing', 1, '9051700450448.jpg', '2023-11-19 21:20:48', '2023-11-19 21:20:48', NULL),
(37, 'Video and Animation', 1, '6601700991393.jpg', '2023-11-26 03:36:04', '2023-11-26 03:36:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `contact_en` varchar(255) NOT NULL,
  `contact_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `access_block` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name_en`, `name_bn`, `contact_en`, `contact_bn`, `email`, `role_id`, `bio`, `image`, `status`, `password`, `language`, `access_block`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fuad', 'Khalil', '543453', NULL, 'admindfgd@gmail.com', 3, 'dfsvd bvvvvvvvvfff', '5371700969723.jpg', 1, '$2y$12$bFygMGVHbEFcVOqYgk.iMOUvkszaGKj5auzFO0kXKURs9iCSPxrcu', 'en', NULL, NULL, '2023-11-25 21:35:23', '2023-11-25 21:50:43', NULL),
(2, 'Ibrahim', 'Khalil', '+8801300025229', NULL, 'admin@gmail.com', 1, NULL, '7141700979525.jpg', 0, '$2y$12$qVEBmUMwLETftKXLoFgLQ.OHGEEDwZhvKKPhrdpAEFM2SdxsIYiLG', 'en', NULL, NULL, '2023-11-26 00:18:45', '2023-11-26 00:18:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_12_031415_create_roles_table', 1),
(6, '2023_11_12_031402_create_users_table', 1),
(9, '2023_11_19_053448_create_course_categories_table', 2),
(10, '2023_11_22_143059_create_permissions_table', 3),
(14, '2023_11_25_034933_create_students_table', 4),
(15, '2023_11_25_034955_create_instructors_table', 4),
(17, '2023_11_26_034558_create_courses_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(43, 2, 'user.index', '2023-11-23 01:02:46', '2023-11-23 01:02:46'),
(44, 2, 'permission.list', '2023-11-23 01:02:47', '2023-11-23 01:02:47'),
(108, 1, 'user.index', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(109, 1, 'user.create', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(110, 1, 'user.show', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(111, 1, 'user.edit', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(112, 1, 'user.destroy', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(113, 1, 'role.index', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(114, 1, 'role.create', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(115, 1, 'role.show', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(116, 1, 'role.edit', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(117, 1, 'role.destroy', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(118, 1, 'permission.list', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(119, 1, 'courseCategory.index', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(120, 1, 'courseCategory.create', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(121, 1, 'courseCategory.show', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(122, 1, 'courseCategory.edit', '2023-11-24 22:53:28', '2023-11-24 22:53:28'),
(123, 1, 'courseCategory.destroy', '2023-11-24 22:53:28', '2023-11-24 22:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-15 22:26:53', NULL),
(2, 'Admin', 'admin', '2023-11-15 22:26:53', NULL),
(3, 'Instructor', 'instructor', '2023-11-15 22:26:53', NULL),
(4, 'Student', 'student', '2023-11-15 22:26:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `contact_en` varchar(255) NOT NULL,
  `contact_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `access_block` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name_en`, `name_bn`, `contact_en`, `contact_bn`, `email`, `role_id`, `date_of_birth`, `gender`, `image`, `status`, `password`, `language`, `access_block`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Ibrahim', 'Khalil', '+8801300025229', NULL, 'admin@gmail.com', 3, '2023-11-13', 'male', '3121700899569.jpg', 0, '$2y$12$sxR8A0DZR6FnrAUlEhLACeChJP5FQUSvYbjlMReUwJrMsIUPh74Im', 'en', NULL, NULL, '2023-11-25 02:06:09', '2023-11-25 02:06:09', NULL),
(9, 'ergdfgdf', NULL, '453443', NULL, 'sdjfhsd@gmail.com', 1, '2023-11-13', 'male', '9161700900054.jpg', 1, '$2y$12$Yo0DrMY8NliB.zxJoVmFte1KVzKHPgqtZ2ERkSjb3DB.ks9Cr1vS6', 'en', NULL, NULL, '2023-11-25 02:14:14', '2023-11-25 02:14:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact_en` varchar(255) NOT NULL,
  `contact_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes, 0=>no',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_en`, `contact_bn`, `role_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Ibrahim Khalil', NULL, 'admin@gmail.com', '01867655403', NULL, 1, '$2y$12$LdTowbF2MhpiaZLjn8Y/2ecrcjWqcT5VU26aM3J2bv5uN6AeiepaC', 'en', '6161700367047.png', 1, 1, NULL, '2023-11-18 22:01:49', '2023-11-19 01:44:41', NULL),
(11, 'Burhan Uddin Fuad', NULL, 'burhan@gmail.com', '0987654321', NULL, 2, '$2y$12$NQlx2gYeStmVCjXEQwsmoejK93e.0Gy59jDLtHPodEM6gYjLc6K7.', 'en', '9231700380051.jpg', 0, 1, NULL, '2023-11-19 01:47:31', '2023-11-23 00:38:16', NULL),
(12, 'Sarah Taylor', NULL, 'sarah@gmail.com', '0124367894', NULL, 3, '$2y$12$EeSCwBeClyyF7kxJ0cK2KOFmH7aw.ZwjiY96Q/3.cmRrZuLvlb2hm', 'en', '4251700380547.jpg', 0, 1, NULL, '2023-11-19 01:55:47', '2023-11-19 21:21:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_index` (`category_id`),
  ADD KEY `courses_instructor_id_index` (`instructor_id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `instructors_contact_en_unique` (`contact_en`),
  ADD UNIQUE KEY `instructors_email_unique` (`email`),
  ADD UNIQUE KEY `instructors_contact_bn_unique` (`contact_bn`),
  ADD KEY `instructors_role_id_index` (`role_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

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
  ADD UNIQUE KEY `roles_type_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_contact_en_unique` (`contact_en`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_contact_bn_unique` (`contact_bn`),
  ADD KEY `students_role_id_index` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_en_unique` (`contact_en`),
  ADD UNIQUE KEY `users_contact_bn_unique` (`contact_bn`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
