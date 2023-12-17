-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 05:42 AM
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
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_data` longtext NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 active, 0 inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `cart_data`, `student_id`, `txnid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjo5OSwiY291cG9uX2NvZGUiOiJvZmZlcjIwIiwiZGlzY291bnQiOiIyMC4wMCIsImRpc2NvdW50X2Ftb3VudCI6MTkuOCwidGF4IjoxMS44OCwidG90YWxfYW1vdW50Ijo5MS4wOH19', 10, 'SSLCZ_TXN_65769e8f0cf11', 1, '2023-12-10 23:30:55', '2023-12-10 23:30:59', NULL),
(2, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifSwiNyI6eyJ0aXRsZV9lbiI6IkFkb2JlIENyZWF0aXZlIFN1aXRlIE1hc3Rlcnk6IFBob3Rvc2hvcCwgSWxsdXN0cmF0b3IsIEluRGVzaWduIiwicXVhbnRpdHkiOjEsInByaWNlIjoiOTkuMDAiLCJvbGRfcHJpY2UiOm51bGwsImltYWdlIjoiMzc1MTcwMTY2MDg4Ni5wbmciLCJkaWZmaWN1bHR5IjoiaW50ZXJtZWRpYXRlIiwiaW5zdHJ1Y3RvciI6IlJhaWhhbiBTYXp6YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjoxOTgsImNvdXBvbl9jb2RlIjoib2ZmZXIyMCIsImRpc2NvdW50IjoiMjAuMDAiLCJkaXNjb3VudF9hbW91bnQiOjM5LjYsInRheCI6MjMuNzYsInRvdGFsX2Ftb3VudCI6MTgyLjE2fX0=', 10, 'SSLCZ_TXN_65769f2a84099', 1, '2023-12-10 23:33:30', '2023-12-10 23:33:34', NULL),
(3, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjo5OSwidGF4IjoxNC44NSwidG90YWxfYW1vdW50IjoxMTMuODV9fQ==', 14, 'SSLCZ_TXN_6576a5e82a723', 1, '2023-12-11 00:02:16', '2023-12-11 00:02:25', NULL),
(4, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjo5OSwidGF4IjoxNC44NSwidG90YWxfYW1vdW50IjoxMTMuODV9fQ==', 14, 'SSLCZ_TXN_6576a7c21ecb3', 0, '2023-12-11 00:10:10', '2023-12-11 00:10:10', NULL),
(5, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjo5OSwidGF4IjoxNC44NSwidG90YWxfYW1vdW50IjoxMTMuODV9fQ==', 14, 'SSLCZ_TXN_6576a8b00421a', 1, '2023-12-11 00:14:08', '2023-12-11 00:14:48', NULL),
(6, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogRnJvbSBCYXNpY3MgdG8gQWR2YW5jZWQiLCJxdWFudGl0eSI6MSwicHJpY2UiOiI5OS4wMCIsIm9sZF9wcmljZSI6IjEwMC4wMCIsImltYWdlIjoiMzc0MTcwMTY2MDk3Ny5qcGciLCJkaWZmaWN1bHR5IjoiYmVnaW5uZXIiLCJpbnN0cnVjdG9yIjoiQnVyaGFuIFVkZGluIEZ1YWQifX0sImNhcnRfZGV0YWlscyI6eyJjYXJ0X3RvdGFsIjo5OSwidGF4IjoxNC44NSwidG90YWxfYW1vdW50IjoxMTMuODV9fQ==', 14, 'SSLCZ_TXN_6576a8f323604', 1, '2023-12-11 00:15:15', '2023-12-11 00:15:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_until` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `valid_from`, `valid_until`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'offer20', '20.00', '2023-12-09', '2024-03-26', '2023-12-09 09:30:32', '2023-12-09 09:30:32', NULL),
(2, 'el50', '50.00', '2023-12-09', '2024-12-16', '2023-12-09 09:34:18', '2023-12-09 09:34:18', NULL);

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
(6, 'Full-Stack Web Development Bootcamp: From Basics to Advanced', 'ফুল-স্ট্যাক ওয়েব ডেভেলপমেন্ট বুটক্যাম্প: বেসিক থেকে অ্যাডভান্সড পর্যন্ত', 'Dive into the world of web development with a comprehensive bootcamp covering both front-end and back-end technologies. From HTML and CSS to server-side scripting, this course will equip you with the skills to build dynamic and interactive web applications.', 'ফ্রন্ট-এন্ড এবং ব্যাক-এন্ড উভয় প্রযুক্তিকে কভার করে একটি ব্যাপক বুটক্যাম্প সহ ওয়েব ডেভেলপমেন্টের জগতে ডুব দিন। HTML এবং CSS থেকে সার্ভার-সাইড স্ক্রিপ্টিং পর্যন্ত, এই কোর্সটি আপনাকে গতিশীল এবং ইন্টারেক্টিভ ওয়েব অ্যাপ্লিকেশন তৈরি করার দক্ষতা দিয়ে সজ্জিত করবে।', 4, 1, 'free', '99.00', '100.00', NULL, NULL, 3, 35, 'Basic understanding of HTML and CSS; familiarity with programming concepts is beneficial but not required.', 'HTML এবং CSS এর প্রাথমিক ধারণা; প্রোগ্রামিং ধারণার সাথে পরিচিতি উপকারী কিন্তু প্রয়োজনীয় নয়।', 'beginner', NULL, '3741701660977.jpg', '8521701660977.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:30:17', '2023-12-03 21:36:17', NULL),
(7, 'Adobe Creative Suite Mastery: Photoshop, Illustrator, InDesign', 'অ্যাডোব ক্রিয়েটিভ স্যুট মাস্টারি: ফটোশপ, ইলাস্ট্রেটর, ইনডিজাইন', 'Gain proficiency in Adobe Creative Suite\'s powerhouse tools—Photoshop for image editing, Illustrator for vector graphics, and InDesign for layout design. Learn to seamlessly integrate these applications to bring your creative visions to life.', 'Adobe Creative Suite-এর পাওয়ার হাউস টুলস-এ দক্ষতা অর্জন করুন- ছবি সম্পাদনার জন্য ফটোশপ, ভেক্টর গ্রাফিক্সের জন্য ইলাস্ট্রেটর এবং লেআউট ডিজাইনের জন্য InDesign। আপনার সৃজনশীল দৃষ্টিভঙ্গিগুলিকে জীবনে আনতে এই অ্যাপ্লিকেশনগুলিকে নির্বিঘ্নে সংহত করতে শিখুন৷', 2, 3, 'paid', '99.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'intermediate', NULL, '3751701660886.png', '5151701660887.png', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 0, 'en', '2023-11-26 03:32:44', '2023-12-05 10:25:33', NULL),
(8, 'Search Engine Optimization (SEO): Boosting Website Visibility', 'সার্চ ইঞ্জিন অপ্টিমাইজেশান (SEO): ওয়েবসাইট ভিজিবিলিটি বাড়ানো', 'Demystify the world of SEO and discover techniques to improve website visibility in search engine results. Learn keyword research, on-page optimization, and off-page strategies to drive organic traffic and enhance online presence.', 'এসইও-এর জগতকে ডিমিস্টিফাই করুন এবং সার্চ ইঞ্জিন ফলাফলে ওয়েবসাইটের দৃশ্যমানতা উন্নত করার কৌশল আবিষ্কার করুন। জৈব ট্র্যাফিক চালনা করতে এবং অনলাইন উপস্থিতি বাড়াতে কীওয়ার্ড গবেষণা, অন-পৃষ্ঠা অপ্টিমাইজেশান এবং অফ-পৃষ্ঠা কৌশলগুলি শিখুন।', 6, 4, 'subscription', '59.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'advanced', NULL, '4711701660905.png', '6821701660905.png', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:34:25', '2023-12-05 10:25:57', NULL),
(9, '3D Animation Basics: Getting Started with Blender', '3D অ্যানিমেশন বেসিকস: ব্লেন্ডার দিয়ে শুরু করা', 'Delve into the basics of 3D animation using Blender. Learn the fundamentals of modeling, rigging, and animation to bring characters and scenes to life in a three-dimensional space.', 'ব্লেন্ডার ব্যবহার করে 3D অ্যানিমেশনের বুনিয়াদিতে প্রবেশ করুন। একটি ত্রিমাত্রিক স্থানে চরিত্র এবং দৃশ্যগুলিকে প্রাণবন্ত করতে মডেলিং, কারচুপি এবং অ্যানিমেশনের মৌলিক বিষয়গুলি শিখুন৷', 37, 2, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '1141701660945.png', '3001701660945.png', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 1, 'en', '2023-11-26 03:37:43', '2023-12-05 10:25:13', NULL),
(10, 'React.js Fundamentals: Building Modern User Interfaces', 'React.js ফান্ডামেন্টালস: আধুনিক ইউজার ইন্টারফেস তৈরি করা', 'Delve into the fundamentals of React.js and discover how to build modern, component-based user interfaces. From state management to routing, this course guides you through React\'s core concepts, enabling you to create powerful and maintainable front-end applications.', 'React.js-এর মৌলিক বিষয়গুলিকে অধ্যয়ন করুন এবং কীভাবে আধুনিক, উপাদান-ভিত্তিক ব্যবহারকারী ইন্টারফেস তৈরি করতে হয় তা আবিষ্কার করুন। স্টেট ম্যানেজমেন্ট থেকে রাউটিং পর্যন্ত, এই কোর্সটি আপনাকে রিঅ্যাক্টের মূল ধারণার মাধ্যমে গাইড করে, আপনাকে শক্তিশালী এবং রক্ষণাবেক্ষণযোগ্য ফ্রন্ট-এন্ড অ্যাপ্লিকেশন তৈরি করতে সক্ষম করে।', 5, 5, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '2401701660963.png', '9801701660963.png', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 0, 'en', '2023-11-26 03:39:29', '2023-12-05 10:26:13', NULL);

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
(2, 'Graphics Desgin', 1, '3241701795877.jpg', '2023-11-19 00:24:08', '2023-12-05 11:04:37', NULL),
(4, 'Web Design', 1, '1601701795901.jpg', '2023-11-19 01:23:53', '2023-12-05 11:05:01', NULL),
(5, 'App Development', 1, '4441701795922.jpg', '2023-11-19 01:24:44', '2023-12-05 11:05:22', NULL),
(6, 'Digital Marketing', 1, '9691701795938.jpg', '2023-11-19 21:20:48', '2023-12-05 11:05:38', NULL),
(37, 'Video Editing', 1, '3621701795955.jpg', '2023-11-26 03:36:04', '2023-12-05 11:05:55', NULL),
(38, '2D Animation', 1, '8361701795972.jpg', '2023-12-05 10:47:40', '2023-12-05 11:06:12', NULL);

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

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `student_id`, `course_id`, `enrollment_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 6, '2023-12-10 18:00:00', '2023-12-10 23:37:53', '2023-12-10 23:37:53', NULL),
(2, 10, 7, '2023-12-10 18:00:00', '2023-12-10 23:37:53', '2023-12-10 23:37:53', NULL),
(5, 14, 6, '2023-12-10 18:00:00', '2023-12-11 00:02:25', '2023-12-11 00:02:25', NULL),
(6, 14, 6, '2023-12-10 18:00:00', '2023-12-11 00:14:48', '2023-12-11 00:14:48', NULL),
(7, 14, 6, '2023-12-10 18:00:00', '2023-12-11 00:15:26', '2023-12-11 00:15:26', NULL);

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
(1, 'Burhan Uddin Fuad', NULL, '01828543453', NULL, 'fuad@gmail.com', 3, 'Fuad is a highly skilled Full Stack Web Developer with over 10 years of experience. He specializes in front-end and back-end development, bringing a wealth of knowledge in modern web technologies. John is passionate about teaching and enjoys sharing his expertise with aspiring developers.', 'Experienced Full Stack Web Developer passionate about teaching modern web technologies.', 'Senior Instructor', '7651701794492.jpg', 1, '$2y$12$jxbne9KxH0/pS/pz5cW0BunNSQCDZ1ZQwwSICcMd1o7rAENnvmm9a', 'en', NULL, NULL, '2023-11-25 21:35:23', '2023-12-05 10:41:32', NULL),
(2, 'Thouhidul Islam', NULL, '801300029', NULL, 'thouhid@gmail.com', 3, 'Thouhid is an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.', '2D Animation and Short Video Ads Specialist', 'Animation Expert', '4991701794515.jpg', 1, '$2y$12$MhpBKoItHmA.fdUH3Bzi1.YJz/7iW4x1WFO2Gwrr7OiqgHtsIdTJK', 'en', NULL, NULL, '2023-11-26 00:18:45', '2023-12-05 10:41:55', NULL),
(3, 'Raihan Sazzad', NULL, '3218974218', NULL, 'raihan@gmail.com', 3, 'Raihan is an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.', 'Professional Designer Who Loves to Design', 'UI UX Designer', '1381701794537.jpg', 1, '$2y$12$q7C.EXCusmXExPbVEOHeIuWBKi4DYD3XtmeaC1WBLPBSWCwbFxR3W', 'en', NULL, NULL, '2023-12-04 23:25:20', '2023-12-05 10:42:17', NULL),
(4, 'Joshim Uddin', NULL, '675664644', NULL, 'joshim@gmail.com', 3, 'Joshim a passionate and results-oriented Digital Marketer with a knack for navigating the ever-evolving landscape of online promotion. With a strategic mindset, he specialize in crafting data-driven marketing campaigns that elevate brand visibility and engagement.', 'Expert in SMM and Lead Generation', 'Digital Marketer', '1461701794588.jpg', 1, '$2y$12$4sVDlcM9ozR94nm5/jBrH.HOrcMgFAX3qvhu8iMUA1ZZQ.ejAiuJK', 'en', NULL, NULL, '2023-12-04 23:27:57', '2023-12-05 10:43:08', NULL),
(5, 'Asadullah Galib', NULL, '345353452', NULL, 'galib@gmail.com', 3, 'Galib is an experienced Full Stack Web Developer known for her expertise in building scalable and robust web applications. With a background in both front-end and back-end development, Jane is dedicated to helping students master the skills needed for success in the ever-evolving field of web development.', 'Full Stack Web Developer', 'Lead Instructor', '6641701794615.jpg', 1, '$2y$12$hcJLA2OijnGqL/CuvBu.peWesluepYJDwbdR1/Dl1RnHdbaPKkEq2', 'en', NULL, NULL, '2023-12-05 10:18:26', '2023-12-05 10:43:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('video','document','quiz') NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `content_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `course_id`, `title`, `type`, `content`, `content_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 'Module-01', 'video', '8721702788050.mp4', 'www.youtube.com', '2023-11-27 09:26:27', '2023-12-16 22:40:50', NULL);

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
(25, '2023_11_26_153818_create_subscriptions_table', 6),
(26, '2023_11_26_153844_create_progress_table', 6),
(27, '2023_11_26_153902_create_discussions_table', 6),
(28, '2023_11_26_153916_create_messages_table', 6),
(29, '2023_11_26_153660_create_options_table', 7),
(30, '2023_12_09_135359_create_coupons_table', 8),
(32, '2023_12_09_170943_create_checkouts_table', 9),
(33, '2023_11_26_153754_create_payments_table', 10);

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
  `student_id` bigint(20) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency_value` decimal(10,2) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending, 1 successfull, 2 fail',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `currency`, `currency_code`, `amount`, `currency_value`, `method`, `txnid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 'BDT', 'BDT', '182.16', '1.00', 'SSLCommerz', 'SSLCZ_TXN_657699d29ce57', 0, '2023-12-10 23:10:42', '2023-12-10 23:10:42', NULL),
(2, 10, 'BDT', 'BDT', '91.08', '1.00', 'SSLCommerz', 'SSLCZ_TXN_65769ad5411ed', 1, '2023-12-10 23:15:01', '2023-12-10 23:15:05', NULL),
(3, 10, 'BDT', 'BDT', '91.08', '1.00', 'SSLCommerz', 'SSLCZ_TXN_65769e8f0cf11', 1, '2023-12-10 23:30:55', '2023-12-10 23:30:59', NULL),
(4, 10, 'BDT', 'BDT', '182.16', '1.00', 'SSLCommerz', 'SSLCZ_TXN_65769f2a84099', 1, '2023-12-10 23:33:30', '2023-12-10 23:33:34', NULL),
(5, 14, 'BDT', 'BDT', '113.85', '1.00', 'SSLCommerz', 'SSLCZ_TXN_6576a5e82a723', 1, '2023-12-11 00:02:16', '2023-12-11 00:02:25', NULL),
(6, 14, 'BDT', 'BDT', '113.85', '1.00', 'SSLCommerz', 'SSLCZ_TXN_6576a7c21ecb3', 0, '2023-12-11 00:10:10', '2023-12-11 00:10:10', NULL),
(7, 14, 'BDT', 'BDT', '113.85', '1.00', 'SSLCommerz', 'SSLCZ_TXN_6576a8b00421a', 1, '2023-12-11 00:14:08', '2023-12-11 00:14:48', NULL),
(8, 14, 'BDT', 'BDT', '113.85', '1.00', 'SSLCommerz', 'SSLCZ_TXN_6576a8f323604', 1, '2023-12-11 00:15:15', '2023-12-11 00:15:26', NULL);

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
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
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

INSERT INTO `students` (`id`, `name_en`, `name_bn`, `contact_en`, `contact_bn`, `email`, `date_of_birth`, `gender`, `image`, `bio`, `profession`, `nationality`, `address`, `city`, `state`, `postcode`, `country`, `status`, `password`, `language`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Safayet Ullah Azad', NULL, NULL, NULL, 'student@gmail.com', NULL, NULL, '3061702363456.jpg', NULL, NULL, 'Bangladeshi', NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$ban4H0WFobNWv3zCAXy3HesQin0jI191dmVbtmRDPbcFQRQcGAa9i', 'en', NULL, '2023-12-01 23:59:13', '2023-12-12 00:44:16', NULL),
(14, 'Nakib Uddin', NULL, NULL, NULL, 'student@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'Bangladeshi', NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$ifBXreN1UhSc4pMlaZ.UNeNWKJcl8lEMuzO67d78bvx0s3JPcAelu', 'en', NULL, '2023-12-06 00:09:53', '2023-12-11 00:07:31', NULL),
(15, 'Rabiul Islam', NULL, NULL, NULL, 'student2@gmail.com', NULL, NULL, NULL, NULL, NULL, 'Bangladeshi', NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$oQCRT7fJw.ze6/0d/MrFKenHXZ7KfdnAArrF75ww0.GVsjCcHxvyS', 'en', NULL, '2023-12-06 00:22:10', '2023-12-06 00:22:10', NULL),
(16, 'Noman Hossain', NULL, NULL, NULL, 'student2@yahoo.com', NULL, NULL, NULL, NULL, NULL, 'Bangladeshi', NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$SvgP6RCHTvXFy0/qh9ypL.QdpKgRpaKWe0fGrhWF3cq9wIbnsCzBa', 'en', NULL, '2023-12-06 00:25:03', '2023-12-06 00:25:03', NULL);

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
(11, 'Burhan Uddin Fuad', NULL, 'burhan@gmail.com', '0987654321', NULL, 2, '$2y$12$NQlx2gYeStmVCjXEQwsmoejK93e.0Gy59jDLtHPodEM6gYjLc6K7.', 'en', '9231700380051.jpg', 0, 1, NULL, '2023-11-19 01:47:31', '2023-12-06 00:01:45', '2023-12-06 00:01:45'),
(12, 'Ahtesanul Haque Kaiser', NULL, 'kaiser@gmail.com', '0124367894', NULL, 2, '$2y$12$EeSCwBeClyyF7kxJ0cK2KOFmH7aw.ZwjiY96Q/3.cmRrZuLvlb2hm', 'en', '2051701842581.jpg', 0, 1, NULL, '2023-11-19 01:55:47', '2023-12-06 00:03:01', NULL);

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
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

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
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
