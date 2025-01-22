-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2025 at 12:48 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `stu_id` bigint UNSIGNED NOT NULL,
  `book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `books_stu_id_foreign` (`stu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employees_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `password`, `address`, `City`, `age`, `photo`, `salary`, `designation`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tarun', 'tarun@gmail.com', '8965828937', '$2y$12$p8TOHFnMU/Sx8qcRVPdnOO9RVf/mA8uF6bDRlBtUREyehWpPkpGDO', 'er', 're', '34', NULL, '34434', 'Frontend Developer', '5', '1', '2025-01-22 06:11:37', '2025-01-22 06:11:37'),
(2, 'rtretr', 'ertre@fdgdf.fgh', '4353453454', '$2y$12$i5PxvAMuDmOBF9g5EBf7Kex/4.0u.FYnujohHz2SWXy5VK3zwApTW', 'fdgfdfdg', 'gfdfgd', '34', 'employee_photos/x4wXiqVD6VgTuy2bVcgAbtzZ3nxhULAgBSog6fNO.png', '333', 'Database Administrator', '5', '1', '2025-01-22 06:19:12', '2025-01-22 06:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_12_30_060133_create_students_table', 1),
(2, '2025_01_07_055105_create_books_table', 1),
(3, '2025_01_07_072643_create_employees_table', 1),
(4, '2025_01_09_050424_create_tasks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `password`, `address`, `City`, `age`, `photo`, `salary`, `designation`, `task_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ross Hyatt', 'kdoyle@gmail.com', '9403325955', '1234', '562 Quitzon Way Suite 243\nPort Muhammad, NV 80601', 'Hyderabad', '19', NULL, '48038', 'Backend Developer', '6', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(2, 'Mrs. Earlene Gorczany', 'kuhic.reanna@gmail.com', '9610012630', '1234', '2281 Bernie Pines\nSouth Dimitri, IA 54873', 'Patna', '72', NULL, '37516', 'Game Developer', '9', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(3, 'Ross Goldner DVM', 'sipes.arlene@gmail.com', '8901518145', '1234', '7572 Everardo Crest\nSouth Tylerview, NJ 93117-3734', 'Lucknow', '65', NULL, '10429', 'Full Stack Developer', '9', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(4, 'Prof. Tevin Swaniawski II', 'nash55@gmail.com', '8831469027', '1234', '996 Jakubowski Wells Suite 723\nJovaniville, MN 50474', 'Delhi', '80', NULL, '27110', 'Backend Developer', '7', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(5, 'Rosendo Dickinson', 'destinee72@gmail.com', '9121593358', '1234', '618 April Parks\nNew Ernest, OK 44970-6674', 'Nagpur', '88', NULL, '27864', 'Technical Lead', '1', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(6, 'Miguel Dibbert', 'langworth.lorine@gmail.com', '9758945250', '1234', '343 Jeffrey Plaza\nSusantown, ND 13233', 'Ahmedabad', '38', NULL, '19443', 'Software Engineer', '8', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(7, 'Luna Keeling', 'otha.feest@gmail.com', '9351881959', '1234', '9133 Iva Pines\nPort Westleyhaven, WV 64947-3120', 'Delhi', '50', NULL, '29376', 'Full Stack Developer', '9', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(8, 'Dr. Destiny Bernhard Sr.', 'gislason.ambrose@gmail.com', '8953083078', '1234', '79420 Rutherford Gateway Apt. 723\nLake Lelahchester, AZ 97363-3946', 'Bhopal', '82', NULL, '18451', 'Technical Support Specialist', '8', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(9, 'Alphonso Wiza', 'tyrique00@gmail.com', '8496294904', '1234', '3917 Krystal Locks\nWintheiserhaven, IL 83541', 'Visakhapatnam', '10', NULL, '33630', 'Technical Lead', '5', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(10, 'Adell Zemlak', 'ledner.hipolito@gmail.com', '9988594119', '1234', '86356 Nitzsche Villages Suite 427\nNew Clovis, CT 17954-3927', 'Bangalore', '19', NULL, '30201', 'Cloud Architect', '10', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `department`, `task`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'UI/UX Design', 'Nam incidunt quia.', 'Necessitatibus et et sapiente non. Sit voluptatem molestiae nesciunt rerum eum qui quibusdam consequuntur. Deleniti suscipit cupiditate quasi in occaecati. Corporis iusto velit illum earum.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(2, 'Technical Support', 'Sed est sit qui.', 'Nostrum qui nostrum iusto doloremque et debitis natus. Molestias reprehenderit aut laudantium pariatur cumque iure. Dolor sed perferendis earum suscipit sit veritatis totam.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(3, 'Networking', 'Temporibus repudiandae praesentium dolor explicabo.', 'Beatae reprehenderit minima quo cumque. Ducimus ex in consectetur est quo. Numquam quo odio pariatur et magnam aut officiis officia. Nam sequi commodi quia molestiae necessitatibus.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(4, 'Database Management', 'Suscipit voluptas saepe.', 'Voluptatem consequatur vel labore minus a. Molestiae recusandae laudantium rem pariatur aliquid similique aut. Minus sed voluptate veritatis qui. Reiciendis non et aut vel nobis cum.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(5, 'Game Development', 'Dolorum sed consequatur amet.', 'Facilis quia earum repellendus et tempora. Aut quisquam dolores molestiae doloremque est eaque ex. Molestias qui voluptatem vel sed incidunt perspiciatis molestias. Non non minus exercitationem.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(6, 'UI/UX Design', 'Et voluptate et facere praesentium.', 'Sit sed in porro sint. Aut ipsam laborum sequi ut. Aut repellendus qui est odio iste iste libero. Consectetur porro nam occaecati harum doloribus in. Aliquam vel commodi sed sed nemo.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(7, 'AI & ML', 'Consequuntur ducimus adipisci.', 'Inventore hic aspernatur qui rerum. Laborum fugiat ab soluta atque iure. Tempora explicabo qui dolorem earum. Non sint doloribus consequatur amet quos quas.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(8, 'Cloud Computing', 'Dolor voluptas atque.', 'Quidem veniam qui eum ratione exercitationem culpa rem nam. Impedit at laboriosam maxime minus asperiores. Nihil sit qui nulla sed.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(9, 'Python', 'Atque et esse earum.', 'Ut sit sunt laborum libero sit. Ad aliquid facere sint distinctio impedit enim. Quasi velit consequuntur quaerat quisquam qui illo ut.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25'),
(10, 'Data Science', 'Voluptatibus ut laboriosam quia.', 'Ratione dolor ex sit eligendi occaecati voluptas aliquid. Ex sunt sequi voluptatem tempore nihil nihil animi.', '1', '2025-01-09 00:30:25', '2025-01-09 00:30:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_stu_id_foreign` FOREIGN KEY (`stu_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
