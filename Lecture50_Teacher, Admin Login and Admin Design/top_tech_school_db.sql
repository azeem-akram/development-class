-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 11:23 PM
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
-- Database: `top_tech_school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Top Tech School', 'Admin', 'admin@toptechschooledu.com', '$2y$10$gh/0P/okxLl8sf5QP9/UOOmWIRXEXSMgN3EjnbuQIqXp6442ei3Fy');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `course_starts` date NOT NULL,
  `duration` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `curriculum_file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `image`, `description`, `course_starts`, `duration`, `timing`, `curriculum_file`, `created_at`, `updated_at`) VALUES
(1, 'Web Developement', 'web.png', 'This is a test', '2024-09-01', '6 Months', '1:00 PM to 3:00 PM EST', 'curriculum.pdf', '2024-08-16 19:57:32', '2024-08-16 19:57:32'),
(2, 'Software Testing Program', 'teacher_1715299155br.jpeg', 'If you love to build a professional career in tech then you are on the right path!\r\n\r\nBy joining our SDET program you’ll learn all about the followings:\r\n\r\nLearn about software and types of software.\r\nLearn about how software is developed and how it is validated and tested.\r\nLearn how to use databases.\r\nLearn how to write coding and debug a code.\r\nLearn software testing automation using automation tools.\r\nLearn how to test software in different types of frameworks.\r\nLearn the difference between front-end and practical use of back-end (API) Testing\r\nLearn how to share your code and collaborate with the team members.\r\nLearn how to work in a team and manage your test documents &prepare test reports.\r\nLearn how to use test management and test documentation tools.\r\nLearn how to crack a tech interview and land your dream job.\r\n ', '2024-10-01', '6 Months', '2:00 - 4:00 PM EST', '', '2024-08-16 20:16:27', '2024-08-16 20:16:27'),
(3, 'Islamic Program', 'teacher_17168728141aacf128-6b8f-422f-9586-4ae6616f6f9a.jpeg', 'Test', '2024-09-01', '3 Months', '5:00 to 7:00 PM EST', '', '2024-08-16 20:22:37', '2024-08-16 20:22:37'),
(4, 'Graphics Designing', 'teacher_17168727837e5208f5-9905-4871-8579-5dfdcb8c20fc.jpeg', 'Want to learn how to create amazing designs?\r\n\r\nJoin us and become a skilled designer ready for any project!\r\n\r\nYou\'ll learn through practical projects:\r\n\r\nAdobe Photoshop\r\n\r\n Adobe Illustrator\r\n\r\n Adobe InDesign\r\n\r\n Branding\r\n\r\nGenerative AI\r\n\r\nWho this Class is for:\r\n\r\n● If you\'re keen on creating captivating designs,\r\n\r\n● If you\'re interested in mastering Photoshop, Illustrator, InDesign, and Generative AI design,\r\n\r\n● If you love to learn professional graphic designing in live and real-world projects,\r\n\r\n● If you\'re eager to learn creating logo design, branding techniques, and execution,\r\n\r\n● If you aim to become a professional graphic designer, or enhance your current career with design skills, \r\n\r\nThen welcome on board with us!', '2024-09-16', '6 Months', '2:00 PM - 4:00 PM', '', '2024-08-30 19:39:06', '2024-08-30 19:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Fauzia', 'Ameri', 'fauziaameri@gmail.com', '$2y$10$xAX1rNAMFvJ5adUXhz7auOLBq7kfWVK5U3.zSLBLYg7Q5PbGbMU4u');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Azeem', 'Akram', 'azeemakram126@gmail.com', '$2y$10$gh/0P/okxLl8sf5QP9/UOOmWIRXEXSMgN3EjnbuQIqXp6442ei3Fy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
