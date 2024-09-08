-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 10:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `facebook`, `twitter`, `whatsapp`) VALUES
(1, NULL, 'admin@admin.com', NULL, 'password', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `blog_description` text CHARACTER SET utf8 NOT NULL,
  `blog_image` text NOT NULL,
  `seo_title` text CHARACTER SET utf8 NOT NULL,
  `seo_description` text CHARACTER SET utf8 NOT NULL,
  `seo_keywords` text CHARACTER SET utf8 DEFAULT NULL,
  `blog_status` varchar(20) DEFAULT NULL,
  `blog_slug` varchar(100) DEFAULT NULL,
  `blog_cdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_description`, `blog_image`, `seo_title`, `seo_description`, `seo_keywords`, `blog_status`, `blog_slug`, `blog_cdt`) VALUES
(64, 'new event', '<p>text event</p>', '/storage/uploads/23/03/1678864059BDTFUHHQmwXhiXXTyPde.jpg', 'new event', '<p>text event</p>', NULL, '1', 'new-event', '2023-03-15 07:07:39'),
(65, 'new event10', '<p>da</p>', '/storage/uploads/23/03/1678865001WbzSP5DhHmgRbjbQI2L6.jpg', 'new event10', '<p>da</p>', NULL, '1', 'new-event10', '2023-03-15 07:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `seo_description` varchar(255) NOT NULL,
  `faq_slug` varchar(255) NOT NULL,
  `faq_cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `status`, `seo_title`, `seo_description`, `faq_slug`, `faq_cdt`) VALUES
(1, 'New Question1', 'Answer', 1, 'New Question1', 'Answer', 'new-question1', '2023-03-15 03:27:38'),
(3, 'my question', 'my ans', 0, 'my question', 'my ans', 'my-question', '2023-03-15 03:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `news_description` text CHARACTER SET utf8 NOT NULL,
  `news_image` text NOT NULL,
  `seo_title` text CHARACTER SET utf8 NOT NULL,
  `seo_description` text CHARACTER SET utf8 NOT NULL,
  `seo_keywords` text CHARACTER SET utf8 DEFAULT NULL,
  `news_status` varchar(20) NOT NULL,
  `news_slug` varchar(100) CHARACTER SET utf8 NOT NULL,
  `news_cdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_description`, `news_image`, `seo_title`, `seo_description`, `seo_keywords`, `news_status`, `news_slug`, `news_cdt`) VALUES
(39, 'New News 1', '<p>abcde</p>', '/storage/uploads/23/03/1678866565Ji8shm7JmAGg329NsU8X.jpg', 'New News 1', '<p>abcde</p>', NULL, '1', 'new-news-1', '2023-03-15 07:52:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
