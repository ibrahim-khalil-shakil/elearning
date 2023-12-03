-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 06:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `old_price` decimal(10,2) DEFAULT NULL,
  `subscription_price` decimal(10,2) DEFAULT NULL,
  `start_from` timestamp NULL DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `lesson` int(11) DEFAULT NULL,
  `prerequisites_en` text DEFAULT NULL,
  `prerequisites_bn` text DEFAULT NULL,
  `difficulty` enum('beginner','intermediate','advanced') DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail_image` varchar(255) DEFAULT NULL,
  `thumbnail_video` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title_en`, `title_bn`, `description_en`, `description_bn`, `category_id`, `instructor_id`, `type`, `price`, `old_price`, `subscription_price`, `start_from`, `duration`, `lesson`, `prerequisites_en`, `prerequisites_bn`, `difficulty`, `course_code`, `image`, `thumbnail_image`, `thumbnail_video`, `status`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Full-Stack Web Development Bootcamp: From Basics to Advanced', 'ফুল-স্ট্যাক ওয়েব ডেভেলপমেন্ট বুটক্যাম্প: বেসিক থেকে অ্যাডভান্সড পর্যন্ত', 'Dive into the world of web development with a comprehensive bootcamp covering both front-end and back-end technologies. From HTML and CSS to server-side scripting, this course will equip you with the skills to build dynamic and interactive web applications.', 'ফ্রন্ট-এন্ড এবং ব্যাক-এন্ড উভয় প্রযুক্তিকে কভার করে একটি ব্যাপক বুটক্যাম্প সহ ওয়েব ডেভেলপমেন্টের জগতে ডুব দিন। HTML এবং CSS থেকে সার্ভার-সাইড স্ক্রিপ্টিং পর্যন্ত, এই কোর্সটি আপনাকে গতিশীল এবং ইন্টারেক্টিভ ওয়েব অ্যাপ্লিকেশন তৈরি করার দক্ষতা দিয়ে সজ্জিত করবে।', 4, 1, 'free', 99.00, 100.00, NULL, NULL, 3, 35, 'Basic understanding of HTML and CSS; familiarity with programming concepts is beneficial but not required.', 'HTML এবং CSS এর প্রাথমিক ধারণা; প্রোগ্রামিং ধারণার সাথে পরিচিতি উপকারী কিন্তু প্রয়োজনীয় নয়।', 'beginner', NULL, '5331700991017.jpg', '2481701588826.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:30:17', '2023-12-03 11:10:13', NULL),
(7, 'Adobe Creative Suite Mastery: Photoshop, Illustrator, InDesign', 'অ্যাডোব ক্রিয়েটিভ স্যুট মাস্টারি: ফটোশপ, ইলাস্ট্রেটর, ইনডিজাইন', 'Gain proficiency in Adobe Creative Suite\'s powerhouse tools—Photoshop for image editing, Illustrator for vector graphics, and InDesign for layout design. Learn to seamlessly integrate these applications to bring your creative visions to life.', 'Adobe Creative Suite-এর পাওয়ার হাউস টুলস-এ দক্ষতা অর্জন করুন- ছবি সম্পাদনার জন্য ফটোশপ, ভেক্টর গ্রাফিক্সের জন্য ইলাস্ট্রেটর এবং লেআউট ডিজাইনের জন্য InDesign। আপনার সৃজনশীল দৃষ্টিভঙ্গিগুলিকে জীবনে আনতে এই অ্যাপ্লিকেশনগুলিকে নির্বিঘ্নে সংহত করতে শিখুন৷', 2, 2, 'paid', 99.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'intermediate', NULL, '7331700991164.jpg', '6181701622471.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 0, 'en', '2023-11-26 03:32:44', '2023-12-03 10:59:10', NULL),
(8, 'Search Engine Optimization (SEO): Boosting Website Visibility', 'সার্চ ইঞ্জিন অপ্টিমাইজেশান (SEO): ওয়েবসাইট ভিজিবিলিটি বাড়ানো', 'Demystify the world of SEO and discover techniques to improve website visibility in search engine results. Learn keyword research, on-page optimization, and off-page strategies to drive organic traffic and enhance online presence.', 'এসইও-এর জগতকে ডিমিস্টিফাই করুন এবং সার্চ ইঞ্জিন ফলাফলে ওয়েবসাইটের দৃশ্যমানতা উন্নত করার কৌশল আবিষ্কার করুন। জৈব ট্র্যাফিক চালনা করতে এবং অনলাইন উপস্থিতি বাড়াতে কীওয়ার্ড গবেষণা, অন-পৃষ্ঠা অপ্টিমাইজেশান এবং অফ-পৃষ্ঠা কৌশলগুলি শিখুন।', 6, 1, 'subscription', 59.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'advanced', NULL, '7791700991265.jpg', '6081701622497.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:34:25', '2023-12-03 11:00:46', NULL),
(9, '3D Animation Basics: Getting Started with Blender', '3D অ্যানিমেশন বেসিকস: ব্লেন্ডার দিয়ে শুরু করা', 'Delve into the basics of 3D animation using Blender. Learn the fundamentals of modeling, rigging, and animation to bring characters and scenes to life in a three-dimensional space.', 'ব্লেন্ডার ব্যবহার করে 3D অ্যানিমেশনের বুনিয়াদিতে প্রবেশ করুন। একটি ত্রিমাত্রিক স্থানে চরিত্র এবং দৃশ্যগুলিকে প্রাণবন্ত করতে মডেলিং, কারচুপি এবং অ্যানিমেশনের মৌলিক বিষয়গুলি শিখুন৷', 37, 1, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '3531700991463.jpg', '7991701622520.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:37:43', '2023-12-03 11:01:15', NULL),
(10, 'React.js Fundamentals: Building Modern User Interfaces', 'React.js ফান্ডামেন্টালস: আধুনিক ইউজার ইন্টারফেস তৈরি করা', 'Delve into the fundamentals of React.js and discover how to build modern, component-based user interfaces. From state management to routing, this course guides you through React\'s core concepts, enabling you to create powerful and maintainable front-end applications.', 'React.js-এর মৌলিক বিষয়গুলিকে অধ্যয়ন করুন এবং কীভাবে আধুনিক, উপাদান-ভিত্তিক ব্যবহারকারী ইন্টারফেস তৈরি করতে হয় তা আবিষ্কার করুন। স্টেট ম্যানেজমেন্ট থেকে রাউটিং পর্যন্ত, এই কোর্সটি আপনাকে রিঅ্যাক্টের মূল ধারণার মাধ্যমে গাইড করে, আপনাকে শক্তিশালী এবং রক্ষণাবেক্ষণযোগ্য ফ্রন্ট-এন্ড অ্যাপ্লিকেশন তৈরি করতে সক্ষম করে।', 5, 1, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '5191700991569.jpg', '1651701622539.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 0, 'en', '2023-11-26 03:39:29', '2023-12-03 11:02:35', NULL);

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
(4, 'Web Design', 1, '4101701095328.jpg', '2023-11-19 01:23:53', '2023-11-27 08:28:49', NULL),
(5, 'App Development', 1, '6091701095366.jpg', '2023-11-19 01:24:44', '2023-11-27 08:29:26', NULL),
(6, 'Digital Marketing', 1, '9051700450448.jpg', '2023-11-19 21:20:48', '2023-11-19 21:20:48', NULL),
(37, 'Video and Animation', 1, '6601700991393.jpg', '2023-11-26 03:36:04', '2023-11-26 03:36:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_date` timestamp NOT NULL DEFAULT '2023-11-27 09:13:29',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `title` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
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

INSERT INTO `instructors` (`id`, `name_en`, `name_bn`, `contact_en`, `contact_bn`, `email`, `role_id`, `bio`, `title`, `designation`, `image`, `status`, `password`, `language`, `access_block`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Burhan Uddin Fuad', NULL, '01828543453', NULL, 'fuad@gmail.com', 3, 'Fuad is a highly skilled Full Stack Web Developer with over 10 years of experience. He specializes in front-end and back-end development, bringing a wealth of knowledge in modern web technologies. John is passionate about teaching and enjoys sharing his expertise with aspiring developers.', 'Experienced Full Stack Web Developer passionate about teaching modern web technologies.', 'Senior Instructor', '5371700969723.jpg', 1, '$2y$12$9wKowT3FRkNRbhr8H3EHqeFfB42uP2sR.ACK9TCx8dm3DShul.CrS', 'en', NULL, NULL, '2023-11-25 21:35:23', '2023-12-03 10:45:57', NULL),
(2, 'Ibrahim Khalil', NULL, '+8801300025229', NULL, 'ibrahim@gmail.com', 3, 'Ibrahim is an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.', '2D Animation and Short Video Ads Specialist', 'Animation Expert', '7141700979525.jpg', 1, '$2y$12$XqMNiBNht2EBZeDJs1GLR.TcxIPVs9WNYaPmClunATT/wibIpglZG', 'en', NULL, NULL, '2023-11-26 00:18:45', '2023-12-03 10:51:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('video','document','quiz') NOT NULL,
  `content_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `course_id`, `title`, `type`, `content_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 'Module-01', 'video', 'www.youtube.com', '2023-11-27 09:26:27', '2023-11-27 09:38:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(17, '2023_11_26_034558_create_courses_table', 5),
(18, '2023_11_26_153556_create_enrollments_table', 6),
(19, '2023_11_26_153620_create_materials_table', 6),
(20, '2023_11_26_153639_create_quizzes_table', 6),
(21, '2023_11_26_153659_create_questions_table', 6),
(22, '2023_11_26_153719_create_answers_table', 6),
(23, '2023_11_26_153735_create_reviews_table', 6),
(24, '2023_11_26_153754_create_payments_table', 6),
(25, '2023_11_26_153818_create_subscriptions_table', 6),
(26, '2023_11_26_153844_create_progress_table', 6),
(27, '2023_11_26_153902_create_discussions_table', 6),
(28, '2023_11_26_153916_create_messages_table', 6),
(29, '2023_11_26_153660_create_options_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option_text` varchar(255) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_id`, `option_text`, `is_correct`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Hyper Text Markup Language', 1, '2023-11-28 07:56:46', '2023-11-28 07:56:46', NULL),
(2, 1, 'Hyperlinks and Text Markup Language', 0, '2023-11-28 07:58:01', '2023-11-28 07:58:01', NULL),
(3, 1, 'Home Tool Markup Languages', 0, '2023-11-28 07:58:24', '2023-11-28 08:01:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_method` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `status` enum('success','pending','failed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(185, 1, 'user.index', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(186, 1, 'user.create', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(187, 1, 'user.show', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(188, 1, 'user.edit', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(189, 1, 'user.destroy', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(190, 1, 'role.index', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(191, 1, 'role.create', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(192, 1, 'role.show', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(193, 1, 'role.edit', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(194, 1, 'role.destroy', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(195, 1, 'student.index', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(196, 1, 'student.create', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(197, 1, 'student.show', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(198, 1, 'student.edit', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(199, 1, 'student.destroy', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(200, 1, 'instructor.index', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(201, 1, 'instructor.create', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(202, 1, 'instructor.show', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(203, 1, 'instructor.edit', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(204, 1, 'instructor.destroy', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(205, 1, 'courseCategory.index', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(206, 1, 'courseCategory.create', '2023-11-29 00:37:43', '2023-11-29 00:37:43'),
(207, 1, 'courseCategory.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(208, 1, 'courseCategory.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(209, 1, 'courseCategory.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(210, 1, 'course.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(211, 1, 'course.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(212, 1, 'course.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(213, 1, 'course.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(214, 1, 'course.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(215, 1, 'material.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(216, 1, 'material.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(217, 1, 'material.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(218, 1, 'material.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(219, 1, 'material.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(220, 1, 'quiz.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(221, 1, 'quiz.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(222, 1, 'quiz.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(223, 1, 'quiz.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(224, 1, 'quiz.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(225, 1, 'question.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(226, 1, 'question.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(227, 1, 'question.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(228, 1, 'question.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(229, 1, 'question.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(230, 1, 'option.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(231, 1, 'option.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(232, 1, 'option.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(233, 1, 'option.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(234, 1, 'option.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(235, 1, 'answer.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(236, 1, 'answer.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(237, 1, 'answer.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(238, 1, 'answer.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(239, 1, 'answer.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(240, 1, 'review.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(241, 1, 'review.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(242, 1, 'review.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(243, 1, 'review.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(244, 1, 'review.destroy', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(245, 1, 'discussion.index', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(246, 1, 'discussion.create', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(247, 1, 'discussion.show', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(248, 1, 'discussion.edit', '2023-11-29 00:37:44', '2023-11-29 00:37:44'),
(249, 1, 'discussion.destroy', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(250, 1, 'message.index', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(251, 1, 'message.create', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(252, 1, 'message.show', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(253, 1, 'message.edit', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(254, 1, 'message.destroy', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(255, 1, 'permission.list', '2023-11-29 00:37:45', '2023-11-29 00:37:45'),
(256, 2, 'student.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(257, 2, 'student.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(258, 2, 'student.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(259, 2, 'student.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(260, 2, 'student.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(261, 2, 'instructor.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(262, 2, 'instructor.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(263, 2, 'instructor.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(264, 2, 'instructor.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(265, 2, 'instructor.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(266, 2, 'courseCategory.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(267, 2, 'courseCategory.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(268, 2, 'courseCategory.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(269, 2, 'courseCategory.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(270, 2, 'courseCategory.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(271, 2, 'course.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(272, 2, 'course.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(273, 2, 'course.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(274, 2, 'course.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(275, 2, 'course.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(276, 2, 'material.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(277, 2, 'material.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(278, 2, 'material.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(279, 2, 'material.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(280, 2, 'material.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(281, 2, 'quiz.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(282, 2, 'quiz.create', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(283, 2, 'quiz.show', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(284, 2, 'quiz.edit', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(285, 2, 'quiz.destroy', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(286, 2, 'question.index', '2023-11-29 00:38:42', '2023-11-29 00:38:42'),
(287, 2, 'question.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(288, 2, 'question.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(289, 2, 'question.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(290, 2, 'question.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(291, 2, 'option.index', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(292, 2, 'option.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(293, 2, 'option.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(294, 2, 'option.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(295, 2, 'option.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(296, 2, 'answer.index', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(297, 2, 'answer.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(298, 2, 'answer.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(299, 2, 'answer.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(300, 2, 'answer.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(301, 2, 'review.index', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(302, 2, 'review.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(303, 2, 'review.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(304, 2, 'review.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(305, 2, 'review.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(306, 2, 'discussion.index', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(307, 2, 'discussion.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(308, 2, 'discussion.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(309, 2, 'discussion.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(310, 2, 'discussion.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(311, 2, 'message.index', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(312, 2, 'message.create', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(313, 2, 'message.show', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(314, 2, 'message.edit', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(315, 2, 'message.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43');

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
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `progress_percentage` int(11) NOT NULL DEFAULT 0,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `last_viewed_material_id` bigint(20) UNSIGNED DEFAULT NULL,
  `last_viewed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `type` enum('multiple_choice','true_false','short_answer') NOT NULL,
  `option_a` varchar(255) DEFAULT NULL,
  `option_b` varchar(255) DEFAULT NULL,
  `option_c` varchar(255) DEFAULT NULL,
  `option_d` varchar(255) DEFAULT NULL,
  `correct_answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `content`, `type`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'What does HTML stand for?', 'multiple_choice', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Languages', 'Home Text Making Language', 'a', '2023-11-28 06:04:51', '2023-11-28 23:39:14', NULL),
(2, 1, 'Which tag is used to display bold text?', 'multiple_choice', '<a>', '<bold>', '<b>', '<abbr>', 'c', '2023-11-28 06:05:24', '2023-11-28 23:40:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `course_id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 'Introduction to HTML', '2023-11-28 06:01:21', '2023-11-28 06:16:31', NULL),
(2, 8, 'Necessity of Keywords and Tags', '2023-11-28 06:01:49', '2023-11-28 06:18:33', NULL),
(3, 10, 'Get Started with JSX', '2023-11-28 06:02:04', '2023-11-28 06:20:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(1, 'Super Admin', 'superadmin', '2023-11-16 12:16:34', NULL),
(2, 'Admin', 'admin', '2023-11-16 12:16:34', NULL),
(3, 'Instructor', 'instructor', '2023-11-16 12:16:34', NULL),
(4, 'Student', 'student', '2023-11-16 12:16:34', NULL),
(5, 'Visitor', 'visitor', '2023-11-23 09:13:19', '2023-11-23 09:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `contact_en` varchar(255) DEFAULT NULL,
  `contact_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT 'Bangladeshi',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name_en`, `name_bn`, `contact_en`, `contact_bn`, `email`, `date_of_birth`, `gender`, `image`, `bio`, `profession`, `nationality`, `status`, `password`, `language`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'Ibrahim', 'Khalil', NULL, NULL, 'admin@gmail.com', '2023-11-13', 'male', '3121700899569.jpg', NULL, NULL, 'Bangladeshi', 0, '$2y$12$sxR8A0DZR6FnrAUlEhLACeChJP5FQUSvYbjlMReUwJrMsIUPh74Im', 'en', NULL, '2023-11-25 02:06:09', '2023-11-25 02:06:09', NULL),
(9, 'ergdfgdf', NULL, NULL, NULL, 'sdjfhsd@gmail.com', '2023-11-13', 'male', '9161700900054.jpg', NULL, NULL, 'Bangladeshi', 1, '$2y$12$Yo0DrMY8NliB.zxJoVmFte1KVzKHPgqtZ2ERkSjb3DB.ks9Cr1vS6', 'en', NULL, '2023-11-25 02:14:14', '2023-11-25 02:14:14', NULL),
(10, 'Safayet Ullah', NULL, NULL, NULL, 'student@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Bangladeshi', 1, '$2y$12$ban4H0WFobNWv3zCAXy3HesQin0jI191dmVbtmRDPbcFQRQcGAa9i', 'en', NULL, '2023-12-01 23:59:13', '2023-12-01 23:59:13', NULL),
(12, 'Ibrahim Khalil', 'Ibrahim Khalil', '+8801300025229', NULL, 'admin@gmail.com2', NULL, NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$LBgg7dwGRJOWKtpGHQdb/O0g8vXlQMp2mjYRxyM/TBw/HJyLEG7te', 'en', NULL, '2023-12-03 08:43:36', '2023-12-03 08:43:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `plan` enum('monthly','yearly') NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NULL DEFAULT NULL,
  `status` enum('active','canceled','expired') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, 'Burhan Uddin Fuad', NULL, 'burhan@gmail.com', '0987654321', NULL, 2, '$2y$12$NQlx2gYeStmVCjXEQwsmoejK93e.0Gy59jDLtHPodEM6gYjLc6K7.', 'en', '9231700380051.jpg', 0, 1, NULL, '2023-11-19 01:47:31', '2023-11-29 00:40:12', NULL),
(12, 'Sarah Taylor', NULL, 'sarah@gmail.com', '0124367894', NULL, 3, '$2y$12$EeSCwBeClyyF7kxJ0cK2KOFmH7aw.ZwjiY96Q/3.cmRrZuLvlb2hm', 'en', '4251700380547.jpg', 0, 1, NULL, '2023-11-19 01:55:47', '2023-11-19 21:21:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_student_id_index` (`student_id`),
  ADD KEY `answers_question_id_index` (`question_id`);

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
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discussions_user_id_index` (`user_id`),
  ADD KEY `discussions_course_id_index` (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollments_student_id_index` (`student_id`),
  ADD KEY `enrollments_course_id_index` (`course_id`);

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
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_course_id_index` (`course_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_index` (`sender_id`),
  ADD KEY `messages_receiver_id_index` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_index` (`question_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_student_id_index` (`student_id`),
  ADD KEY `payments_course_id_index` (`course_id`);

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
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `progress_student_id_index` (`student_id`),
  ADD KEY `progress_course_id_index` (`course_id`),
  ADD KEY `progress_last_viewed_material_id_index` (`last_viewed_material_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_index` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_course_id_index` (`course_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_student_id_index` (`student_id`),
  ADD KEY `reviews_course_id_index` (`course_id`);

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
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_student_id_index` (`student_id`),
  ADD KEY `subscriptions_course_id_index` (`course_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `discussions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrollments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `progress_last_viewed_material_id_foreign` FOREIGN KEY (`last_viewed_material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `progress_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscriptions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
