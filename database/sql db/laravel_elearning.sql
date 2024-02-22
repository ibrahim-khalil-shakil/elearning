-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 06:59 PM
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
(18, 'eyJjYXJ0Ijp7IjYiOnsidGl0bGVfZW4iOiJGdWxsLVN0YWNrIFdlYiBEZXZlbG9wbWVudCBCb290Y2FtcDogQmFzaWNzIHRvIEFkdmFuY2VkIiwicXVhbnRpdHkiOjEsInByaWNlIjoiNTAwMC4wMCIsIm9sZF9wcmljZSI6IjkwMDAuMDAiLCJpbWFnZSI6IjE0MDE3MDQxMjY5NzIuanBnIiwiZGlmZmljdWx0eSI6ImJlZ2lubmVyIiwiaW5zdHJ1Y3RvciI6IkJ1cmhhbiBVZGRpbiBGdWFkIn19LCJjYXJ0X2RldGFpbHMiOnsiY2FydF90b3RhbCI6NTAwMCwiY291cG9uX2NvZGUiOiJvZmZlcjIwIiwiZGlzY291bnQiOiIyMC4wMCIsImRpc2NvdW50X2Ftb3VudCI6MTAwMCwidGF4Ijo2MDAsInRvdGFsX2Ftb3VudCI6NDYwMH19', 17, 'SSLCZ_TXN_6592f9adf2b79', 1, '2024-01-01 11:43:09', '2024-01-01 11:43:52', NULL);

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
(1, 'offer20', 20.00, '2023-12-09', '2024-03-26', '2023-12-09 09:30:32', '2023-12-09 09:30:32', NULL),
(2, 'el50', 50.00, '2023-12-09', '2024-12-16', '2023-12-09 09:34:18', '2023-12-09 09:34:18', NULL);

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
  `course_category_id` bigint(20) UNSIGNED NOT NULL,
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
  `tag` enum('popular','featured','upcoming') DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0 pending, 1 inactive, 2 active,',
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title_en`, `title_bn`, `description_en`, `description_bn`, `course_category_id`, `instructor_id`, `type`, `price`, `old_price`, `subscription_price`, `start_from`, `duration`, `lesson`, `prerequisites_en`, `prerequisites_bn`, `difficulty`, `course_code`, `image`, `thumbnail_image`, `thumbnail_video`, `tag`, `status`, `language`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Full-Stack Web Development Bootcamp: Basics to Advanced', 'ফুল-স্ট্যাক ওয়েব ডেভেলপমেন্ট বুটক্যাম্প: বেসিক থেকে অ্যাডভান্সড পর্যন্ত', 'Dive into the world of web development with a comprehensive bootcamp covering both front-end and back-end technologies. From HTML and CSS to server-side scripting, this course will equip you with the skills to build dynamic and interactive web applications.', 'ফ্রন্ট-এন্ড এবং ব্যাক-এন্ড উভয় প্রযুক্তিকে কভার করে একটি ব্যাপক বুটক্যাম্প সহ ওয়েব ডেভেলপমেন্টের জগতে ডুব দিন। HTML এবং CSS থেকে সার্ভার-সাইড স্ক্রিপ্টিং পর্যন্ত, এই কোর্সটি আপনাকে গতিশীল এবং ইন্টারেক্টিভ ওয়েব অ্যাপ্লিকেশন তৈরি করার দক্ষতা দিয়ে সজ্জিত করবে।', 5, 1, 'paid', 5000.00, 9000.00, NULL, NULL, 3, 35, 'Basic understanding of HTML and CSS; familiarity with programming concepts is beneficial but not required.', 'HTML এবং CSS এর প্রাথমিক ধারণা; প্রোগ্রামিং ধারণার সাথে পরিচিতি উপকারী কিন্তু প্রয়োজনীয় নয়।', 'beginner', NULL, '1401704126972.jpg', '8191704126972.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 'popular', 2, 'en', '2023-11-26 03:30:17', '2024-01-09 09:15:25', NULL),
(7, 'Adobe Creative Suite Mastery: Photoshop, Illustrator, InDesign', 'অ্যাডোব ক্রিয়েটিভ স্যুট মাস্টারি: ফটোশপ, ইলাস্ট্রেটর, ইনডিজাইন', 'Gain proficiency in Adobe Creative Suite\'s powerhouse tools—Photoshop for image editing, Illustrator for vector graphics, and InDesign for layout design. Learn to seamlessly integrate these applications to bring your creative visions to life.', 'Adobe Creative Suite-এর পাওয়ার হাউস টুলস-এ দক্ষতা অর্জন করুন- ছবি সম্পাদনার জন্য ফটোশপ, ভেক্টর গ্রাফিক্সের জন্য ইলাস্ট্রেটর এবং লেআউট ডিজাইনের জন্য InDesign। আপনার সৃজনশীল দৃষ্টিভঙ্গিগুলিকে জীবনে আনতে এই অ্যাপ্লিকেশনগুলিকে নির্বিঘ্নে সংহত করতে শিখুন৷', 2, 3, 'paid', 4500.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'intermediate', NULL, '4091704127086.jpg', '3521704127086.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 'popular', 2, 'en', '2023-11-26 03:32:44', '2024-01-09 07:49:25', NULL),
(8, 'Search Engine Optimization (SEO): Boosting Website Visibility', 'সার্চ ইঞ্জিন অপ্টিমাইজেশান (SEO): ওয়েবসাইট ভিজিবিলিটি বাড়ানো', 'Demystify the world of SEO and discover techniques to improve website visibility in search engine results. Learn keyword research, on-page optimization, and off-page strategies to drive organic traffic and enhance online presence.', 'এসইও-এর জগতকে ডিমিস্টিফাই করুন এবং সার্চ ইঞ্জিন ফলাফলে ওয়েবসাইটের দৃশ্যমানতা উন্নত করার কৌশল আবিষ্কার করুন। জৈব ট্র্যাফিক চালনা করতে এবং অনলাইন উপস্থিতি বাড়াতে কীওয়ার্ড গবেষণা, অন-পৃষ্ঠা অপ্টিমাইজেশান এবং অফ-পৃষ্ঠা কৌশলগুলি শিখুন।', 6, 4, 'paid', 3000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'advanced', NULL, '6891704127114.jpg', '8491704127114.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 'popular', 2, 'en', '2023-11-26 03:34:25', '2024-01-09 09:19:39', NULL),
(9, '3D Animation Basics: Getting Started with Blender', '3D অ্যানিমেশন বেসিকস: ব্লেন্ডার দিয়ে শুরু করা', 'Delve into the basics of 3D animation using Blender. Learn the fundamentals of modeling, rigging, and animation to bring characters and scenes to life in a three-dimensional space.', 'ব্লেন্ডার ব্যবহার করে 3D অ্যানিমেশনের বুনিয়াদিতে প্রবেশ করুন। একটি ত্রিমাত্রিক স্থানে চরিত্র এবং দৃশ্যগুলিকে প্রাণবন্ত করতে মডেলিং, কারচুপি এবং অ্যানিমেশনের মৌলিক বিষয়গুলি শিখুন৷', 39, 2, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '6781704127193.jpg', '7821704127193.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 'popular', 2, 'en', '2023-11-26 03:37:43', '2024-01-09 09:20:01', NULL),
(10, 'React.js Fundamentals: Building Modern User Interfaces', 'React.js ফান্ডামেন্টালস: আধুনিক ইউজার ইন্টারফেস তৈরি করা', 'Delve into the fundamentals of React.js and discover how to build modern, component-based user interfaces. From state management to routing, this course guides you through React\'s core concepts, enabling you to create powerful and maintainable front-end applications.', 'React.js-এর মৌলিক বিষয়গুলিকে অধ্যয়ন করুন এবং কীভাবে আধুনিক, উপাদান-ভিত্তিক ব্যবহারকারী ইন্টারফেস তৈরি করতে হয় তা আবিষ্কার করুন। স্টেট ম্যানেজমেন্ট থেকে রাউটিং পর্যন্ত, এই কোর্সটি আপনাকে রিঅ্যাক্টের মূল ধারণার মাধ্যমে গাইড করে, আপনাকে শক্তিশালী এবং রক্ষণাবেক্ষণযোগ্য ফ্রন্ট-এন্ড অ্যাপ্লিকেশন তৈরি করতে সক্ষম করে।', 5, 5, 'free', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'beginner', NULL, '4341704127229.jpg', '6681704127229.jpg', 'https://www.youtube.com/watch?v=lw6IVgb-omg', 'popular', 2, 'en', '2023-11-26 03:39:29', '2024-01-09 09:29:35', NULL);

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
(5, 'Web Development', 1, '4441701795922.jpg', '2023-11-19 01:24:44', '2023-12-05 11:05:22', NULL),
(6, 'Digital Marketing', 1, '9691701795938.jpg', '2023-11-19 21:20:48', '2023-12-05 11:05:38', NULL),
(37, 'Video Editing', 1, '3621701795955.jpg', '2023-11-26 03:36:04', '2023-12-05 11:05:55', NULL),
(38, '2D Animation', 1, '8361701795972.jpg', '2023-12-05 10:47:40', '2023-12-05 11:06:12', NULL),
(39, '3D Animation', 1, '3241701795877.jpg', '2023-11-19 00:24:08', '2023-12-05 11:04:37', NULL),
(40, 'Mobile Development', 1, '1601701795901.jpg', '2023-11-19 01:23:53', '2023-12-05 11:05:01', NULL),
(41, 'Game Development', 1, '4441701795922.jpg', '2023-11-19 01:24:44', '2023-12-05 11:05:22', NULL),
(42, 'Database Design & Development', 1, '9691701795938.jpg', '2023-11-19 21:20:48', '2023-12-05 11:05:38', NULL),
(43, 'Data Science', 1, '3621701795955.jpg', '2023-11-26 03:36:04', '2023-12-05 11:05:55', NULL),
(44, 'Entrepreneurship', 1, '8361701795972.jpg', '2023-12-05 10:47:40', '2023-12-05 11:06:12', NULL),
(45, 'Network Technology', 1, '3241701795877.jpg', '2023-11-19 00:24:08', '2023-12-05 11:04:37', NULL),
(46, 'Hardware', 1, '1601701795901.jpg', '2023-11-19 01:23:53', '2023-12-05 11:05:01', NULL),
(47, 'Software & Security', 1, '4441701795922.jpg', '2023-11-19 01:24:44', '2023-12-05 11:05:22', NULL),
(48, 'Operating System & Server', 1, '9691701795938.jpg', '2023-11-19 21:20:48', '2023-12-05 11:05:38', NULL);

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
(14, 17, 6, '2023-12-31 18:00:00', '2024-01-01 11:43:52', '2024-01-01 11:43:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `topic` text DEFAULT NULL,
  `goal` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `hosted_by` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `image`, `topic`, `goal`, `location`, `hosted_by`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'TechTalk Series: Exploring the Future of Artificial Intelligence', 'Join us for an immersive exploration into the fascinating world of Artificial Intelligence. In this TechTalk series, our expert panelists will delve deep into the latest trends, breakthroughs, and real-world applications of AI. From machine learning to natural language processing, discover how AI is reshaping industries and influencing our daily lives. This virtual event is designed for both enthusiasts and professionals seeking a comprehensive understanding of the future possibilities that AI holds. Do not miss out on this opportunity to engage with thought leaders and expand your knowledge in the realm of Artificial Intelligence.', '1.jpg', 'Artificial Intelligence', 'Enhance understanding of AI current landscape and its potential future impact.', 'Virtual Event', 'Your Platform Team', '2024-01-10 00:00:00', NULL, NULL, NULL),
(12, 'Mastering Web Design and Development: A Hands-On Workshop', 'Embark on a journey to master the art of web development with our intensive hands-on workshop. Whether you are a beginner or an experienced developer, this event is designed to elevate your skills to new heights. Join industry professionals as they guide you through essential coding techniques, best practices, and the latest trends in web development. Bring your laptop and get ready to code alongside experts in a collaborative virtual environment. This workshop promises an interactive and enriching experience for all participants.', '2.jpg', 'Web Development', 'Equip participants with practical skills to excel in web development.', 'On Site Classroom', 'Your Platform Team', '2024-02-15 00:00:00', NULL, NULL, NULL),
(13, 'Digital Marketing Trends: Navigating the Ever-Changing Landscape', 'Stay ahead of the curve in the dynamic world of digital marketing. Our in-depth webinar explores the latest trends, tools, and strategies that are shaping the digital marketing landscape. Led by seasoned marketing professionals, this event is a must-attend for anyone looking to enhance their online presence and stay competitive in the digital realm. From social media marketing to SEO best practices, gain actionable insights to elevate your digital marketing game.', '3.jpg', 'Digital Marketing', 'Provide an overview of current digital marketing trends and effective implementation strategies.', 'Online Webinar', 'Your Platform Team', '2024-03-20 00:00:00', NULL, NULL, NULL),
(14, 'Multicultural Language Learning Fiesta: A Global Celebration', 'Embark on a linguistic and cultural journey with our Language Learning Fiesta. Immerse yourself in a multicultural celebration where language enthusiasts can explore diverse languages, traditions, and cuisines from around the world. This virtual event is designed to foster cultural appreciation and language diversity. Join us for a fun-filled experience that transcends borders, connecting people through the universal language of curiosity and understanding.', '4.jpg', 'Language Learning and Cultural Exchange', 'Foster cultural appreciation and language diversity.', 'Virtual Cultural Hub', 'Your Platform Team', '2024-04-25 00:00:00', NULL, NULL, NULL),
(15, 'Finance Masterclass: Navigating the Stock Market', 'Unlock the secrets of successful investing with our comprehensive finance masterclass. Led by seasoned financial experts, this event goes beyond the basics, guiding participants through the intricacies of the stock market. From investment strategies to risk management, gain valuable insights that will empower both beginners and seasoned investors. Whether you are looking to build a solid investment portfolio or enhance your financial literacy, this online seminar is a must-attend for anyone seeking success in the world of finance.', '5.jpg', 'Finance and Stock Market', 'Empower participants with knowledge and strategies for successful investing.', 'Online Seminar', 'Your Platform Team', '2024-05-30 00:00:00', NULL, NULL, NULL),
(16, 'Innovate & Inspire: Tech Entrepreneurship Summit', 'Embark on a transformative journey into the realm of tech entrepreneurship. Our summit brings together visionaries, successful entrepreneurs, and industry experts to share insights, strategies, and stories of innovation. From startup success stories to navigating challenges in the tech industry, this event is a goldmine for aspiring and seasoned entrepreneurs alike. Join us in this virtual summit to ignite your entrepreneurial spirit and discover the keys to building successful tech ventures.', '6.jpg', 'Tech Entrepreneurship', 'Inspire and educate participants on the principles and challenges of tech entrepreneurship.', 'Virtual Summit', 'Your Platform Team', '2024-06-15 00:00:00', NULL, NULL, NULL),
(17, 'Environmental Sustainability Symposium: Shaping a Greener Future', 'Join us for a thought-provoking symposium on environmental sustainability. In this gathering of eco-conscious minds, we will explore the pressing issues facing our planet and discuss innovative solutions for a sustainable future. From renewable energy to waste reduction strategies, this event aims to raise awareness and inspire action towards a greener and more sustainable world. Be part of the change, and let us shape a future that prioritizes the well-being of our planet.', '7.jpg', 'Environmental Sustainability', 'Raise awareness and inspire action for a more sustainable future.', 'Online Symposium', 'Your Platform Team', '2024-07-20 00:00:00', NULL, NULL, NULL),
(18, 'Wellness and Mindfulness Retreat: Nurturing Your Mind and Body', 'Take a break from the hustle and join us for a virtual wellness retreat focused on nurturing your mind and body. In this rejuvenating experience, we will explore mindfulness practices, relaxation techniques, and holistic wellness approaches. Led by experienced wellness practitioners, this retreat is designed to help you unwind, de-stress, and foster a healthy work-life balance. Prioritize your well-being and join us for a day of self-care and mindfulness.', '8.jpg', 'Wellness and Mindfulness', 'Promote well-being by providing participants with tools and practices for mindfulness and self-care.', 'Virtual Retreat', 'Your Platform Team', '2024-08-25 00:00:00', NULL, NULL, NULL);

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
(1, 'Burhan Uddin Fuad', NULL, '01828543453', NULL, 'fuad@gmail.com', 3, 'Fuad is a highly skilled Full Stack Web Developer with over 10 years of experience. He specializes in front-end and back-end development, bringing a wealth of knowledge in modern web technologies. John is passionate about teaching and enjoys sharing his expertise with aspiring developers.', 'Experienced Full Stack Web Developer passionate about teaching modern web technologies.', 'Senior Instructor', 'Instructor_Burhan Uddin Fuad_137.jpg', 1, '$2y$12$ZsGZnJfm4sKnDmH/nzDdf.3/ZthTEmY99rA9m/rPAXHx1UE6QhJCG', 'en', NULL, NULL, '2023-11-25 15:35:23', '2024-02-21 14:15:36', NULL),
(2, 'Thouhidul Islam', NULL, '801300029', NULL, 'thouhid@gmail.com', 3, 'Thouhid is an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.', '2D Animation and Short Video Ads Specialist', 'Animation Expert', 'Instructor_Thouhidul Islam_766.jpg', 1, '$2y$12$FNBov.CIK58wPQcSSKRToOMru6xabDZvdY34wpOH4Y/PCLZ4VyOLu', 'en', NULL, NULL, '2023-11-25 18:18:45', '2024-02-21 14:17:18', NULL),
(3, 'Raihan Sazzad', NULL, '3218974218', NULL, 'raihan@gmail.com', 3, 'Raihan is an Animation Expert and Video/Graphics Instructor known for her innovative approach to storytelling through animation. With a background in both 2D and 3D animation, Emily guides students through the world of visual storytelling, helping them unleash their creative potential.', 'Professional Designer Who Loves to Design', 'UI UX Designer', 'Instructor_Raihan Sazzad_662.jpg', 1, '$2y$12$1x1.vxwZaewnKtRrl4Ieh.8sMHFgz8DFsR5SeAdjPPwQiAiCEEGR6', 'en', NULL, NULL, '2023-12-04 17:25:20', '2024-02-21 14:18:56', NULL),
(4, 'Joshim Uddin', NULL, '675664644', NULL, 'joshim@gmail.com', 3, 'Joshim a passionate and results-oriented Digital Marketer with a knack for navigating the ever-evolving landscape of online promotion. With a strategic mindset, he specialize in crafting data-driven marketing campaigns that elevate brand visibility and engagement.', 'Expert in SMM and Lead Generation', 'Digital Marketer', 'Instructor_Joshim Uddin_155.jpg', 1, '$2y$12$t3XmqNf9miC7kaBXYTsAXuBWOZ.ySxQViaaUjh9W78f9DRQhrUvhm', 'en', NULL, NULL, '2023-12-04 17:27:57', '2024-02-21 14:19:51', NULL),
(5, 'Asadullah Galib', NULL, '3453534521', NULL, 'galib@gmail.com', 3, 'Galib is an experienced Full Stack Web Developer known for her expertise in building scalable and robust web applications. With a background in both front-end and back-end development, Jane is dedicated to helping students master the skills needed for success in the ever-evolving field of web development.', 'Full Stack Web Developer', 'Lead Instructor', 'Instructor_Asadullah Galib_310.jpg', 1, '$2y$12$rVB66yb.OKaVj0HKcilFweoK5nOx.dJ4e2GHvyaITMvs0DPGgLEpm', 'en', NULL, NULL, '2023-12-05 04:18:26', '2024-02-21 14:20:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `course_id`, `description`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Introduction to HTML', 6, 'In this lesson, students will be introduced to the fundamental structure of web development with HTML (Hypertext Markup Language). They will learn about the basic syntax of HTML tags, the document structure, and how to create a simple webpage. Emphasis will be placed on understanding the purpose of common HTML elements such as headings, paragraphs, lists, and links.', 'Introduction to HTML:\r\n\r\nHTML stands for Hypertext Markup Language.\r\nIt is the standard markup language for creating web pages.\r\nHTML tags are used to define and structure content on a webpage.\r\nDocument Structure:\r\n\r\nExplain the basic structure of an HTML document: !DOCTYPE html, html, head, and body tags.\r\nDiscuss the purpose of the head section for meta-information and the body section for content.\r\nCommon HTML Elements:\r\n\r\nIntroduce essential HTML tags such as h1, p, ul, li, and a.\r\nDemonstrate how to create hyperlinks using the a tag.\r\nHands-on Activity:\r\n\r\nHave students create a simple webpage with a heading, paragraphs, a list, and a hyperlink.\r\nEncourage them to experiment with different HTML elements.', '2023-12-17 12:28:08', '2023-12-21 00:14:51', NULL),
(2, 'Introduction to CSS', 6, 'This lesson focuses on Cascading Style Sheets (CSS) and how it is used to enhance the presentation of HTML documents. Students will learn about selectors, properties, and values. The goal is for students to understand how to apply styles to HTML elements and gain insight into the concept of styling cascades.', 'Introduction to CSS:\r\n\r\nCSS stands for Cascading Style Sheets.\r\nIt is used to style the layout and presentation of HTML documents.\r\nSelectors and Properties:\r\n\r\nIntroduce CSS selectors and how they target HTML elements.\r\nDiscuss common CSS properties such as color, font-size, margin, and padding.\r\nBox Model:\r\n\r\nExplain the CSS box model: margin, border, padding, and content.\r\nDemonstrate how to use the box model to control spacing and layout.\r\nStyling Cascades:\r\n\r\nDiscuss the concept of cascading styles and how conflicting styles are resolved.\r\nIntroduce specificity and the importance of understanding the order of styles.\r\nHands-on Activity:\r\n\r\nHave students apply styles to the HTML webpage created in Lesson 1.\r\nExperiment with changing colors, fonts, and layout properties.', '2023-12-17 21:21:51', '2023-12-21 00:16:54', NULL),
(3, 'JavaScript Tutorial', 6, 'This lesson introduces students to the basics of JavaScript, a programming language that enables dynamic and interactive web pages. Students will learn about variables, data types, and basic control structures. The lesson culminates in a simple interactive program.', 'Introduction to JavaScript:\r\n\r\nJavaScript is a scripting language that enables client-side interactivity in web browsers.\r\nIt is used to manipulate the content and behavior of HTML documents.\r\nVariables and Data Types:\r\n\r\nIntroduce the concept of variables and how they are used to store data.\r\nCover basic data types: strings, numbers, and booleans.\r\nBasic Control Structures:\r\n\r\nExplain control structures such as if statements for conditional logic.\r\nIntroduce loops, specifically the for loop, for repetitive tasks.\r\nDOM Manipulation:\r\n\r\nDiscuss the Document Object Model (DOM) and how JavaScript can be used to manipulate HTML elements dynamically.\r\nShow examples of changing text, styles, and adding/removing elements.\r\nHands-on Activity:\r\n\r\nGuide students in creating a simple interactive program using JavaScript.\r\nEncourage them to modify the HTML and CSS based on user interactions.', '2023-12-19 21:51:36', '2023-12-21 00:17:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `materials` (`id`, `lesson_id`, `title`, `type`, `content`, `content_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'HTML Attributes', 'video', '5971703138819.mp4', NULL, '2023-12-17 21:16:21', '2023-12-21 00:05:53', NULL),
(2, 1, 'HTML Tables', 'video', '5971703138819.mp4', NULL, '2023-12-17 21:23:30', '2023-12-21 00:06:07', NULL),
(3, 2, 'CSS Syntax', 'video', '5971703138819.mp4', NULL, '2023-12-19 21:45:05', '2023-12-21 00:06:25', NULL),
(4, 2, 'CSS Selectors', 'document', '3971703138919.jpg', NULL, '2023-12-19 21:46:44', '2023-12-21 00:09:25', NULL),
(5, 2, 'CSS Colors', 'video', '5971703138819.mp4', NULL, '2023-12-19 21:52:59', '2023-12-21 00:06:39', NULL),
(6, 3, 'JavaScript Statements', 'video', '5971703138819.mp4', NULL, '2023-12-19 21:56:54', '2023-12-21 00:06:59', NULL),
(7, 3, 'JavaScript Variables', 'document', '3971703138919.jpg', NULL, '2023-12-19 21:59:01', '2023-12-21 00:08:39', NULL),
(8, 3, 'JavaScript Data Types', 'video', '5971703138819.mp4', NULL, '2023-12-21 00:07:50', '2023-12-21 00:07:50', NULL);

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
(9, '2023_11_19_053448_create_course_categories_table', 2),
(10, '2023_11_22_143059_create_permissions_table', 3),
(14, '2023_11_25_034933_create_students_table', 4),
(17, '2023_11_26_034558_create_courses_table', 5),
(18, '2023_11_26_153556_create_enrollments_table', 6),
(20, '2023_11_26_153639_create_quizzes_table', 6),
(21, '2023_11_26_153659_create_questions_table', 6),
(22, '2023_11_26_153719_create_answers_table', 6),
(23, '2023_11_26_153735_create_reviews_table', 6),
(25, '2023_11_26_153818_create_subscriptions_table', 6),
(27, '2023_11_26_153902_create_discussions_table', 6),
(28, '2023_11_26_153916_create_messages_table', 6),
(29, '2023_11_26_153660_create_options_table', 7),
(30, '2023_12_09_135359_create_coupons_table', 8),
(32, '2023_12_09_170943_create_checkouts_table', 9),
(33, '2023_11_26_153754_create_payments_table', 10),
(34, '2023_11_26_153557_create_lessons_table', 11),
(35, '2023_11_26_153620_create_materials_table', 12),
(36, '2023_11_26_153844_create_progress_table', 12),
(37, '2023_12_20_031354_create_watchlists_table', 13),
(38, '2023_12_23_070253_add_tag_to_courses_table', 14),
(41, '2023_11_12_031401_create_instructors_table', 15),
(42, '2023_11_12_031402_create_users_table', 15),
(43, '2024_01_01_121113_add_column_to_user_table', 15),
(44, '2024_01_03_073449_create_events_table', 16);

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
(1, 10, 'BDT', 'BDT', 182.16, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657699d29ce57', 0, '2023-12-10 23:10:42', '2023-12-10 23:10:42', NULL),
(2, 10, 'BDT', 'BDT', 91.08, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65769ad5411ed', 1, '2023-12-10 23:15:01', '2023-12-10 23:15:05', NULL),
(3, 10, 'BDT', 'BDT', 91.08, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65769e8f0cf11', 1, '2023-12-10 23:30:55', '2023-12-10 23:30:59', NULL),
(4, 10, 'BDT', 'BDT', 182.16, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65769f2a84099', 1, '2023-12-10 23:33:30', '2023-12-10 23:33:34', NULL),
(5, 14, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_6576a5e82a723', 1, '2023-12-11 00:02:16', '2023-12-11 00:02:25', NULL),
(6, 14, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_6576a7c21ecb3', 0, '2023-12-11 00:10:10', '2023-12-11 00:10:10', NULL),
(7, 14, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_6576a8b00421a', 1, '2023-12-11 00:14:08', '2023-12-11 00:14:48', NULL),
(8, 14, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_6576a8f323604', 1, '2023-12-11 00:15:15', '2023-12-11 00:15:26', NULL),
(9, 17, 'BDT', 'BDT', 145.36, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657fea661d5b3', 0, '2023-12-18 00:44:54', '2023-12-18 00:44:54', NULL),
(10, 17, 'BDT', 'BDT', 145.36, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657feb1853ccc', 0, '2023-12-18 00:47:52', '2023-12-18 00:47:52', NULL),
(11, 17, 'BDT', 'BDT', 91.08, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657fee632397d', 0, '2023-12-18 01:01:55', '2023-12-18 01:01:55', NULL),
(12, 17, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657fef18a049e', 0, '2023-12-18 01:04:56', '2023-12-18 01:04:56', NULL),
(13, 17, 'BDT', 'BDT', 113.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_657ff023049f9', 1, '2023-12-18 01:09:23', '2023-12-18 01:09:26', NULL),
(14, 17, 'BDT', 'BDT', 0.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65810ee5590a9', 0, '2023-12-18 21:32:53', '2023-12-18 21:32:53', NULL),
(15, 17, 'BDT', 'BDT', 0.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65810eeaba3cd', 0, '2023-12-18 21:32:58', '2023-12-18 21:32:58', NULL),
(16, 17, 'BDT', 'BDT', 67.85, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65810efe527f4', 1, '2023-12-18 21:33:18', '2023-12-18 21:33:25', NULL),
(17, 17, 'BDT', 'BDT', 4600.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_65829556dfd67', 1, '2023-12-20 01:18:46', '2023-12-20 01:18:53', NULL),
(18, 17, 'BDT', 'BDT', 4600.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_658412e42bb29', 1, '2023-12-21 04:26:44', '2023-12-21 04:26:50', NULL),
(19, 17, 'BDT', 'BDT', 5750.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_658676a7d8af0', 1, '2023-12-22 23:56:55', '2023-12-22 23:57:02', NULL),
(20, 17, 'BDT', 'BDT', 4600.00, 1.00, 'SSLCommerz', 'SSLCZ_TXN_6592f9adf2b79', 1, '2024-01-01 11:43:10', '2024-01-01 11:43:52', NULL);

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
(315, 2, 'message.destroy', '2023-11-29 00:38:43', '2023-11-29 00:38:43'),
(345, 3, 'user.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(346, 3, 'role.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(347, 3, 'student.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(348, 3, 'instructor.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(349, 3, 'courseCategory.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(350, 3, 'courseCategory.create', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(351, 3, 'courseCategory.show', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(352, 3, 'courseCategory.edit', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(353, 3, 'courseCategory.destroy', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(354, 3, 'course.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(355, 3, 'course.create', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(356, 3, 'course.show', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(357, 3, 'course.edit', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(358, 3, 'course.destroy', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(359, 3, 'material.index', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(360, 3, 'material.create', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(361, 3, 'material.show', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(362, 3, 'material.edit', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(363, 3, 'material.destroy', '2024-01-02 00:45:52', '2024-01-02 00:45:52'),
(364, 3, 'lesson.index', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(365, 3, 'lesson.create', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(366, 3, 'lesson.show', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(367, 3, 'lesson.edit', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(368, 3, 'lesson.destroy', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(369, 3, 'coupon.index', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(370, 3, 'coupon.create', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(371, 3, 'coupon.show', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(372, 3, 'coupon.edit', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(373, 3, 'coupon.destroy', '2024-01-02 00:45:53', '2024-01-02 00:45:53'),
(374, 3, 'enrollment.index', '2024-01-02 00:45:53', '2024-01-02 00:45:53');

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
(17, 'Safayet Ullah', NULL, '0183478963', NULL, 'student@gmail.com', '2000-02-01', NULL, '3291704130747.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Web Developer', 'Bangladeshi', NULL, NULL, NULL, NULL, NULL, 1, '$2y$12$rUxi5wAuMt/u9jG46La/h.rva.37gFo6invimj.kjxQEOiRyL7os.', 'en', NULL, '2023-12-18 00:13:14', '2024-01-01 11:40:25', NULL);

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `instructor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_en`, `contact_bn`, `role_id`, `password`, `language`, `image`, `full_access`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `instructor_id`) VALUES
(2, 'Ibrahim Khalil', NULL, 'admin@gmail.com', '+8801300025229', NULL, 1, '$2y$12$RDPYtmf4JJwoQ4sEMuVYse6kg.Xnv1vcJ86sZhT63uaL5vrMje69W', 'en', '7741704114296.png', 1, 1, NULL, '2024-01-01 06:47:43', '2024-01-01 07:04:57', NULL, NULL),
(4, 'Asadullah Galib', NULL, 'galib@gmail.com', '3453534521', NULL, 3, '$2y$12$CgGd2qfI/1nRHDyzYBUq3.nuw/vWV.e9hP/Ze6T6tEzpgng.Dyl6m', 'en', 'Instructor_Asadullah Galib_310.jpg', 0, 1, NULL, '2024-01-01 07:49:40', '2024-02-21 14:20:18', NULL, 5),
(5, 'Joshim Uddin', NULL, 'joshim@gmail.com', '675664644', NULL, 3, '$2y$12$1l18cpPxU4M2zZgMxECs6ezwQKGM/ton5GsztDIiFz0keVvmVsX4O', 'en', 'Instructor_Joshim Uddin_155.jpg', 0, 1, NULL, '2024-01-01 07:50:08', '2024-02-21 14:19:51', NULL, 4),
(6, 'Raihan Sazzad', NULL, 'raihan@gmail.com', '3218974218', NULL, 3, '$2y$12$slth2axx..G1Nz.3jFSa4eHOfBzJybSrjSY3ocZCOQSx10KEcdqtO', 'en', 'Instructor_Raihan Sazzad_662.jpg', 0, 1, NULL, '2024-01-01 07:50:18', '2024-02-21 14:18:57', NULL, 3),
(7, 'Thouhidul Islam', NULL, 'thouhid@gmail.com', '801300029', NULL, 3, '$2y$12$ua2TYVVOxnQWxa2RFnD1euGL8rRUwzFZ2m/uWOw8V/pFfNI3K8Qxa', 'en', 'Instructor_Thouhidul Islam_766.jpg', 0, 1, NULL, '2024-01-01 07:50:28', '2024-02-21 14:17:19', NULL, 2),
(8, 'Burhan Uddin Fuad', NULL, 'fuad@gmail.com', '01828543453', NULL, 3, '$2y$12$uTGQ75wrj/r/2wZgWe8tVeetckNkgGaqMczxzGhRTbxLWvAfpADp6', 'en', 'Instructor_Burhan Uddin Fuad_137.jpg', 0, 1, NULL, '2024-01-01 07:50:43', '2024-02-21 14:15:37', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `watchlists`
--

CREATE TABLE `watchlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD KEY `courses_category_id_index` (`course_category_id`),
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
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lessons_course_id_index` (`course_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materials_lesson_id_index` (`lesson_id`);

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
  ADD KEY `users_role_id_index` (`role_id`),
  ADD KEY `users_instructor_id_index` (`instructor_id`);

--
-- Indexes for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchlists_student_id_index` (`student_id`),
  ADD KEY `watchlists_course_id_index` (`course_id`),
  ADD KEY `watchlists_lesson_id_index` (`lesson_id`),
  ADD KEY `watchlists_material_id_index` (`material_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `watchlists`
--
ALTER TABLE `watchlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`course_category_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE,
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
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `users_instructor_id_foreign` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `watchlists`
--
ALTER TABLE `watchlists`
  ADD CONSTRAINT `watchlists_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watchlists_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watchlists_material_id_foreign` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watchlists_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
