-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 09:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_qualification`
--

CREATE TABLE `academic_qualification` (
  `academic_qualification_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `course_name` varchar(400) NOT NULL,
  `course_branch` varchar(400) NOT NULL,
  `course_board` varchar(400) NOT NULL,
  `course_passing_year` varchar(10) NOT NULL,
  `course_percentage` varchar(65) NOT NULL,
  `10_board` varchar(20) DEFAULT NULL,
  `10_passing_year` int(11) DEFAULT NULL,
  `10_percentage` varchar(15) DEFAULT NULL,
  `12_board` varchar(20) NOT NULL,
  `12_passing_year` int(11) NOT NULL,
  `12_percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_qualification`
--

INSERT INTO `academic_qualification` (`academic_qualification_id`, `user_id`, `course_name`, `course_branch`, `course_board`, `course_passing_year`, `course_percentage`, `10_board`, `10_passing_year`, `10_percentage`, `12_board`, `12_passing_year`, `12_percentage`) VALUES
(1, '2017bcs1046', 'MCA', 'CSE', 'jsbjk', '0000', '89.00', 'nkwns', 9877, '96', 'jkwnk', 0, '90');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `achievemrnt_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `achievement_1` mediumtext NOT NULL,
  `achievement_2` mediumtext NOT NULL,
  `achievement_3` mediumtext NOT NULL,
  `achievement_4` mediumtext DEFAULT NULL,
  `achievement_5` mediumtext DEFAULT NULL,
  `achievement_6` mediumtext DEFAULT NULL,
  `achievement_7` mediumtext DEFAULT NULL,
  `achievement_8` mediumtext DEFAULT NULL,
  `achievement_9` mediumtext DEFAULT NULL,
  `achievement_10` mediumtext DEFAULT NULL,
  `skill_1` varchar(100) NOT NULL,
  `skill_2` varchar(100) NOT NULL,
  `skill_3` varchar(100) NOT NULL,
  `skill_4` varchar(100) DEFAULT NULL,
  `skill_5` varchar(100) DEFAULT NULL,
  `skill_6` varchar(100) DEFAULT NULL,
  `skill_7` varchar(100) DEFAULT NULL,
  `skill_8` varchar(100) DEFAULT NULL,
  `skill_9` varchar(100) DEFAULT NULL,
  `skill_10` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievemrnt_id`, `user_id`, `achievement_1`, `achievement_2`, `achievement_3`, `achievement_4`, `achievement_5`, `achievement_6`, `achievement_7`, `achievement_8`, `achievement_9`, `achievement_10`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `skill_9`, `skill_10`) VALUES
(1, '2017bcs1046', 'kjdwnkj', 'sbdjbwkj', 'wbqdjbkwjqdjk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dwndknwlk', 'wkjnswjsharsh', 'wndqwojosjw', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'y', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular`
--

CREATE TABLE `co_curricular` (
  `co_curricular_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `co_curricular_activity_1` mediumtext NOT NULL,
  `co_curricular_activity_2` mediumtext NOT NULL,
  `co_curricular_activity_3` mediumtext NOT NULL,
  `co_curricular_activity_4` mediumtext DEFAULT NULL,
  `co_curricular_activity_5` mediumtext DEFAULT NULL,
  `co_curricular_activity_6` mediumtext DEFAULT NULL,
  `co_curricular_activity_7` mediumtext DEFAULT NULL,
  `co_curricular_activity_8` mediumtext DEFAULT NULL,
  `co_curricular_activity_9` mediumtext DEFAULT NULL,
  `co_curricular_activity_10` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_curricular`
--

INSERT INTO `co_curricular` (`co_curricular_id`, `user_id`, `co_curricular_activity_1`, `co_curricular_activity_2`, `co_curricular_activity_3`, `co_curricular_activity_4`, `co_curricular_activity_5`, `co_curricular_activity_6`, `co_curricular_activity_7`, `co_curricular_activity_8`, `co_curricular_activity_9`, `co_curricular_activity_10`) VALUES
(1, '2017bcs1046', 'skskjjs', 'jkwskhkskwtyagi', 'qskwqnskwqkharsh', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'y', 'aaa', 'aaa', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interpersonal_skills`
--

CREATE TABLE `interpersonal_skills` (
  `interpersonal_skill_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `skill_1` mediumtext NOT NULL,
  `skill_2` mediumtext NOT NULL,
  `skill_3` mediumtext DEFAULT NULL,
  `skill_4` mediumtext DEFAULT NULL,
  `skill_5` mediumtext DEFAULT NULL,
  `skill_6` mediumtext DEFAULT NULL,
  `skill_7` mediumtext DEFAULT NULL,
  `skill_8` mediumtext DEFAULT NULL,
  `skill_9` mediumtext DEFAULT NULL,
  `skill_10` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interpersonal_skills`
--

INSERT INTO `interpersonal_skills` (`interpersonal_skill_id`, `user_id`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `skill_9`, `skill_10`) VALUES
(1, '2017bcs1046', 'C,c++', 'HTML,CSS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `others_graduation`
--

CREATE TABLE `others_graduation` (
  `other_graduation_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `other_graduation_course` varchar(300) DEFAULT NULL,
  `other_university` varchar(200) DEFAULT NULL,
  `other_passing_year` varchar(10) DEFAULT NULL,
  `other_percentage` varchar(65) DEFAULT NULL,
  `diploma_university` varchar(100) DEFAULT NULL,
  `diploma_passing_year` varchar(10) DEFAULT NULL,
  `diploma_percentage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others_graduation`
--

INSERT INTO `others_graduation` (`other_graduation_id`, `user_id`, `other_graduation_course`, `other_university`, `other_passing_year`, `other_percentage`, `diploma_university`, `diploma_passing_year`, `diploma_percentage`) VALUES
(1, '2017bcs1046', 'edjdebjked', 'wdw,kd,m', '8900', '89', 'ndsndnsnd', '8900', '891');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `address_1` mediumtext NOT NULL,
  `address_2` mediumtext NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`user_id`, `name`, `mobile_no`, `email_id`, `linkedin`, `address_1`, `address_2`, `city`, `state`, `zip`) VALUES
('2017', 'kanak', 12345678, 'kanakgoel36@gmail.com', 'kanakgoel36', 'sdfghj', 'fghjk', 'fgfhj', 'hjkl', 456788),
('2017bcs1042', 'harsh harshty', 0, 'harsh@gna', '', 'tgujg, cgcfhg, cgcfhg, cgcfhg, cgcfhg, cgcfhg, cgcfhg, cgcfhg', 'cgcfhg', 'dghfhgf', 'ghfjhg', 1222),
('2017bcs1044', 'Harsh Tyagi', 0, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2017bcs1045', 'Harsh Tyagi', 0, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2017bcs1046', 'Harsh Tyagi', 2147483647, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2017bcs1048', 'Harsh Tyagi', 0, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2017bcs1050', 'Harsh Tyagi', 2147483647, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2017bcs1099', 'Harsh Tyagi', 100000011, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', 'Mahagun mascot crossing republik', 'Ghaziabad', 'UP', 201009),
('2017bcs1111', 'Harsh Tyagi', 2147483647, 'harshtyagimdr@gmail.com', 'https://www.linkedin.com/in/harsh-tyagi-115019179/', 'Crossings Republik', 'cgcfhg', 'Ghaziabad', 'UP', 201009),
('2018bcs1046', 'Harsh Tyagi', 0, 'harshtyagimdr@gmail.com', '', 'Crossings Republik', '', 'Ghaziabad', 'UP', 201009),
('2019bcs1046', 'Harsh Tyagi', 0, 'harshtyagimdr@gmail.com', '', 'village kakra', 'Muradnagar, Ghaziabad', 'Muradnagar', 'UttarPradesh', 201206),
('2020bcs1046', 'Harsh', 0, 'harshtyagimdr@gmail.com', '', 'village kakra', 'Muradnagar, Ghaziabad', 'Muradnagar', 'UttarPradesh', 201206),
('y', 'y', 0, 'y@gmIL.COM', 'y', 'y', 'y', 'y', 'y', 0);

-- --------------------------------------------------------

--
-- Table structure for table `refrence`
--

CREATE TABLE `refrence` (
  `reference_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `reference_name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `from_date_to_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refrence`
--

INSERT INTO `refrence` (`reference_id`, `user_id`, `reference_name`, `designation`, `from_date_to_date`) VALUES
(1, '2017bcs1046', 'edkjenkd', 'kjendkjnharsh', 'nwedlk');

-- --------------------------------------------------------

--
-- Table structure for table `technical_certification_info`
--

CREATE TABLE `technical_certification_info` (
  `tecnical_certification_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `project_title` varchar(400) NOT NULL,
  `duration` varchar(400) NOT NULL,
  `project_description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_certification_info`
--

INSERT INTO `technical_certification_info` (`tecnical_certification_id`, `user_id`, `company_name`, `project_title`, `duration`, `project_description`) VALUES
(1, '2017bcs1046', 'Harroxx', 'Harroxx_App', '1 year', 'Hii I am Harsh Tyagi (Coder and Web Developer)');

-- --------------------------------------------------------

--
-- Table structure for table `technical_skills`
--

CREATE TABLE `technical_skills` (
  `technical_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `career_objective_description` longtext NOT NULL,
  `skill_1` longtext NOT NULL,
  `skill_2` longtext NOT NULL,
  `skill_3` longtext DEFAULT NULL,
  `skill_4` longtext DEFAULT NULL,
  `skill_5` longtext DEFAULT NULL,
  `skill_6` longtext DEFAULT NULL,
  `skill_7` longtext DEFAULT NULL,
  `skill_8` longtext DEFAULT NULL,
  `skill_9` longtext DEFAULT NULL,
  `skill_10` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_skills`
--

INSERT INTO `technical_skills` (`technical_id`, `user_id`, `career_objective_description`, `skill_1`, `skill_2`, `skill_3`, `skill_4`, `skill_5`, `skill_6`, `skill_7`, `skill_8`, `skill_9`, `skill_10`) VALUES
(1, '2017bcs1111', 'Hiii', 'C++, C', 'HTML, JAVA Script', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2017bcs1046', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an harshunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'C++, C,python,jjkkk', 'HTML, JAVA Script', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', 'bye', 'C++, C', 'HTML, JAVA Script', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'y', 'aaa', 'aa', 'aaa', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `status`) VALUES
('2017bcs1046', 'Harsh Tyagi', 1234, 1),
('2020bcs1046', 'Harsh', 2020, 0),
('y', 'y', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_qualification`
--
ALTER TABLE `academic_qualification`
  ADD PRIMARY KEY (`academic_qualification_id`),
  ADD UNIQUE KEY `FK` (`user_id`) USING BTREE;

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`achievemrnt_id`),
  ADD UNIQUE KEY `fk` (`user_id`);

--
-- Indexes for table `co_curricular`
--
ALTER TABLE `co_curricular`
  ADD PRIMARY KEY (`co_curricular_id`),
  ADD UNIQUE KEY `fk` (`user_id`);

--
-- Indexes for table `interpersonal_skills`
--
ALTER TABLE `interpersonal_skills`
  ADD PRIMARY KEY (`interpersonal_skill_id`),
  ADD UNIQUE KEY `fk` (`user_id`);

--
-- Indexes for table `others_graduation`
--
ALTER TABLE `others_graduation`
  ADD PRIMARY KEY (`other_graduation_id`),
  ADD UNIQUE KEY `fk` (`user_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `refrence`
--
ALTER TABLE `refrence`
  ADD PRIMARY KEY (`reference_id`),
  ADD UNIQUE KEY `fk` (`user_id`);

--
-- Indexes for table `technical_certification_info`
--
ALTER TABLE `technical_certification_info`
  ADD PRIMARY KEY (`tecnical_certification_id`),
  ADD UNIQUE KEY `fk` (`user_id`) USING BTREE;

--
-- Indexes for table `technical_skills`
--
ALTER TABLE `technical_skills`
  ADD PRIMARY KEY (`technical_id`),
  ADD UNIQUE KEY `fk` (`user_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_qualification`
--
ALTER TABLE `academic_qualification`
  MODIFY `academic_qualification_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `achievemrnt_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `co_curricular`
--
ALTER TABLE `co_curricular`
  MODIFY `co_curricular_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interpersonal_skills`
--
ALTER TABLE `interpersonal_skills`
  MODIFY `interpersonal_skill_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `others_graduation`
--
ALTER TABLE `others_graduation`
  MODIFY `other_graduation_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `refrence`
--
ALTER TABLE `refrence`
  MODIFY `reference_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technical_certification_info`
--
ALTER TABLE `technical_certification_info`
  MODIFY `tecnical_certification_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `technical_skills`
--
ALTER TABLE `technical_skills`
  MODIFY `technical_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
