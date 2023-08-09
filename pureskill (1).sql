-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 02:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pureskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_details`
--

CREATE TABLE `batch_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `batch_time` varchar(50) DEFAULT NULL,
  `faculty` varchar(50) DEFAULT NULL,
  `module_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `short_term_course` varchar(100) DEFAULT NULL,
  `core_project_course` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `name`, `short_term_course`, `core_project_course`) VALUES
(1, 'SINGH ABHINAV', 'MS Office/CCC', 'Diploma Track- Web Designing, PHP, Asp.Net, VB.Net'),
(2, 'harsh', 'MS Office/CCC', 'Advance Diploma Engineering In Cyber Security Standard');

-- --------------------------------------------------------

--
-- Table structure for table `designation_details`
--

CREATE TABLE `designation_details` (
  `id` int(10) NOT NULL,
  `designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation_details`
--

INSERT INTO `designation_details` (`id`, `designation`) VALUES
(1, 'JR TAINER'),
(2, 'SR TRAINER'),
(3, 'SOFTWARE FACULTY'),
(4, 'VISITING FACULTY'),
(5, 'BUSINESS HEAD'),
(6, 'ADMIN'),
(7, 'TECHNICAL HEAD'),
(8, 'RECEPTIONIST'),
(9, 'TELECALLER');

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `id` int(10) NOT NULL,
  `core_project_course` varchar(100) DEFAULT NULL,
  `exam_marks` int(10) DEFAULT NULL,
  `no_of_questions` int(10) DEFAULT NULL,
  `marks_per_questions` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`id`, `core_project_course`, `exam_marks`, `no_of_questions`, `marks_per_questions`) VALUES
(1, 'Advance Diploma Engineering In Cloud Computing Standard', 100, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `designation`, `email_id`, `phone_no`) VALUES
(1, 'ABDUL SHIEKH', 'JR TAINER', 'pureskilltrainer@gmail.com', '9876543210'),
(2, 'FENNY DESAI', 'JR TAINER', 'pureskilltrainer@gmail.com', '9876543210'),
(3, 'VISHAL PANCHAL', 'JR TAINER', 'pureskilltrainer@gmail.com', '9876543210'),
(4, 'AMRIT PANCHAL', 'SR TRAINER', 'pureskilltrainer@gmail.com', '9876543210'),
(5, 'PARIMAL BARI', 'SR TRAINER', 'pureskilltrainer@gmail.com', '9876543210'),
(6, 'YASH ASTI', 'SOFTWARE FACULTY', 'pureskilltrainer@gmail.com', '9876543210'),
(7, 'AMIT MEHTA', 'BUSINESS HEAD', 'pureskilltrainer@gmail.com', '9876543210'),
(8, 'RAHUL KAYASTH', 'ADMIN', 'pureskilltrainer@gmail.com', '9876543210'),
(9, 'SHAILESH PATEL', 'TECHNICAL HEAD', 'pureskilltrainer@gmail.com', '9876543210'),
(10, 'HEMAXI PATEL', 'RECEPTIONIST', 'pureskilltrainer@gmail.com', '9876543210'),
(11, 'NIMISHA KALIVADA', 'TELECALLER', 'pureskilltrainer@gmail.com', '9876543210'),
(12, 'PINAL SARSAWALA', 'TELECALLER', 'pureskilltrainer@gmail.com', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fees_to_pay` int(100) NOT NULL,
  `total_paid` int(100) DEFAULT NULL,
  `payment_date` varchar(100) DEFAULT NULL,
  `payment_mode` varchar(100) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`id`, `name`, `fees_to_pay`, `total_paid`, `payment_date`, `payment_mode`, `remarks`) VALUES
(1, 'SINGH ABHINAV', 5000, 5000, '2022-11-21', 'Bank', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_details`
--

CREATE TABLE `module_details` (
  `id` int(100) NOT NULL,
  `module_name` varchar(1000) DEFAULT NULL,
  `core_project_course` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_details`
--

INSERT INTO `module_details` (`id`, `module_name`, `core_project_course`) VALUES
(1, 'CAA', 'Advance Diploma Engineering In Cyber Security Standard'),
(2, 'BAA', 'Diploma Track- Java, Advanced Java, Andorid');

-- --------------------------------------------------------

--
-- Table structure for table `pureskill_table`
--

CREATE TABLE `pureskill_table` (
  `id` int(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_` varchar(10) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `birth_date` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `alternate_number` varchar(10) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pureskill_table`
--

INSERT INTO `pureskill_table` (`id`, `name`, `father_name`, `mobile_no`, `gender`, `date_`, `email_id`, `birth_date`, `address`, `pincode`, `telephone`, `alternate_number`, `qualification`, `stream`, `university`, `occupation`, `company_name`) VALUES
(1, 'SINGH ABHINAV', 'ARVIND SINGH', '7623846723', 'Male', '2022-11-21', 'abhinav.sense@gmail.com', '2002-06-30', '268 SHANTA NAGAR NEAR PANDESARA SURAT', '394221', '7623846723', '9913821420', 'BTECH', 'Science', 'IIIT SURAT', 'on', 'NOTHING');

-- --------------------------------------------------------

--
-- Table structure for table `questions_details`
--

CREATE TABLE `questions_details` (
  `id` int(10) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `option_a` varchar(100) DEFAULT NULL,
  `option_b` varchar(100) DEFAULT NULL,
  `option_c` varchar(100) DEFAULT NULL,
  `option_d` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `questions_marks` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` int(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Abhinav', '$2y$10$e/dlz7qORyvK9uEXAlRuJe.jvwvNTT4sKiVbW1eqgnMjmJVnvmAx6', '2022-11-07 18:09:25'),
(2, 'yash', '$2y$10$rfkqMy5IpZCBSWCA7i0YMe2o/WSvFwkCCOaIV5dK10i./4WnmlH0a', '2022-11-23 17:57:30'),
(3, 'jay', '$2y$10$lPHQrdfaE4nvXkKIAaXS1Owd6z0g0ndPTfS7lImGfCy1QEgPoE0ti', '2022-11-23 18:10:16'),
(4, 'Ankit', '$2y$10$/aWOmAy63J6Tn8GAC/VoLu4U2V8ntEpbMFFSX9tWxxHZ34f6vs27m', '2022-11-23 18:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `webcourse_details`
--

CREATE TABLE `webcourse_details` (
  `id` int(100) NOT NULL,
  `course_name` varchar(1000) DEFAULT NULL,
  `course_code` varchar(1000) DEFAULT NULL,
  `course_duration` int(100) DEFAULT NULL,
  `course_description` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webcourse_details`
--

INSERT INTO `webcourse_details` (`id`, `course_name`, `course_code`, `course_duration`, `course_description`) VALUES
(1, 'Cyber', '12', 121, ''),
(2, 'Cyber', 'sdasf', 12, ''),
(5, 'HIIIhello', 'meetooo', 12, 'hshdhsjd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_details`
--
ALTER TABLE `batch_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_details`
--
ALTER TABLE `designation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_details`
--
ALTER TABLE `module_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pureskill_table`
--
ALTER TABLE `pureskill_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_details`
--
ALTER TABLE `questions_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webcourse_details`
--
ALTER TABLE `webcourse_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_details`
--
ALTER TABLE `batch_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designation_details`
--
ALTER TABLE `designation_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fees_details`
--
ALTER TABLE `fees_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `module_details`
--
ALTER TABLE `module_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pureskill_table`
--
ALTER TABLE `pureskill_table`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions_details`
--
ALTER TABLE `questions_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webcourse_details`
--
ALTER TABLE `webcourse_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
