-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 01:21 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccw`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `roll_no` int(6) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `acc_status` enum('not activated','activated') NOT NULL DEFAULT 'not activated',
  `activation_id` varchar(128) DEFAULT NULL,
  `acc_act_time` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`roll_no`, `email`, `password`, `created_on`, `acc_status`, `activation_id`, `acc_act_time`, `last_login`) VALUES
(501549, 'hr68.official@gmail.com', '$2y$10$irKF4QWFVCBfLIBEVd2hU.hD2t4Bz9RBDjr1qH5l0QIAg9a4ccMiu', '2018-01-11 20:36:05', 'activated', NULL, '2018-01-11 20:37:50', NULL),
(501550, 'harshitrai68@gmail.com', '$2y$10$Kl7biv1fshQ8MIZ8F3eeguebaOOx/RzfhluP7JTQpUnKE/1lgJQgK', '2018-01-09 16:53:54', 'activated', NULL, '2018-01-09 16:55:35', '2018-01-11 17:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) NOT NULL,
  `roll_no` int(6) NOT NULL,
  `blog_timestamp` datetime NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_author` varchar(32) NOT NULL,
  `blog_content` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `roll_no`, `blog_timestamp`, `blog_title`, `blog_author`, `blog_content`) VALUES
(101, 501550, '2018-01-12 07:23:30', 'First Blog', 'Harshit Rai', 'This is my First Blog'),
(102, 501549, '2018-01-24 08:00:40', 'Second Blog', 'Akash Phalke', 'This is Phalke\'s First Blog'),
(103, 501550, '2018-01-12 16:14:42', 'ghjagdjhgad', 'Harshit Rai', 'iyuiyadyidaadadada'),
(104, 501550, '2018-01-12 16:15:21', 'fkjsfhyerieyrwi', 'Harshit Rai', 'qriyqieyqie68368768');

-- --------------------------------------------------------

--
-- Table structure for table `bug_reports`
--

CREATE TABLE `bug_reports` (
  `report_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `bug_info` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bug_reports`
--

INSERT INTO `bug_reports` (`report_id`, `name`, `email`, `bug_info`) VALUES
(1, 'Harshit Rai', 'harshitrai68@gmail.com', '532432424');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `roll_no` int(6) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `github` varchar(128) DEFAULT NULL,
  `linkedin` varchar(128) DEFAULT NULL,
  `hobbies` varchar(256) DEFAULT NULL,
  `languages_known` varchar(256) DEFAULT NULL,
  `previous_works` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`roll_no`, `first_name`, `last_name`, `gender`, `contact`, `dob`, `github`, `linkedin`, `hobbies`, `languages_known`, `previous_works`) VALUES
(543, 'Harshit', 'Rai', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3131, 'Harshit', 'Rai', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501549, 'akash', 'phalke', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501550, 'Harshit', 'Rai', 'male', NULL, NULL, NULL, NULL, 'coding,hacking', 'c,Java,PHP,Python,HTML,CSS,JavaScript', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_requests`
--

CREATE TABLE `project_requests` (
  `request_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `contact` varchar(10) NOT NULL,
  `profession` varchar(32) NOT NULL,
  `organization` varchar(64) NOT NULL,
  `project_type` varchar(10) NOT NULL,
  `project_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_requests`
--

INSERT INTO `project_requests` (`request_id`, `name`, `email`, `contact`, `profession`, `organization`, `project_type`, `project_description`) VALUES
(2, 'Harshit Rai', 'harshitrai68@gmail.com', '8452904404', 'Student', 'FCRIT, Vashi', 'hardware', '		Some random shit here	'),
(3, 'Harshit Rai', 'harshitrai68@gmail.com', '8452904404', 'Student', 'FCRIT, Vashi', 'hardware', '		Some random shit here	'),
(4, 'Nathan Nunes', 'nanu@gmail.com', '9679679678', 'Fuck Boy', 'PornHub', 'software', 'Design a new porn website with Desktop VR feature enabled.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD UNIQUE KEY `blog_title` (`blog_title`);

--
-- Indexes for table `bug_reports`
--
ALTER TABLE `bug_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`roll_no`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `github` (`github`),
  ADD UNIQUE KEY `linkedin` (`linkedin`);

--
-- Indexes for table `project_requests`
--
ALTER TABLE `project_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `bug_reports`
--
ALTER TABLE `bug_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project_requests`
--
ALTER TABLE `project_requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
