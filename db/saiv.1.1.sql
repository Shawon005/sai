-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 07:26 AM
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
-- Table structure for table `activices`
--

CREATE TABLE `activices` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `cdt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activices`
--

INSERT INTO `activices` (`id`, `user_id`, `page`, `type`, `ip`, `cdt`) VALUES
(1, 1, 'blog', 'store', '0', '2023-03-16 06:21:47'),
(2, 1, 'news', 'store', '0', '2023-03-16 06:45:56'),
(3, 1, 'news', 'delete', '0', '2023-03-16 06:46:08'),
(4, 1, 'faq', 'update', '0', '2023-03-16 06:46:27'),
(5, 1, 'faq', 'update', '0', '2023-03-16 07:06:00'),
(6, 1, 'slider', 'store', '0', '2023-03-17 23:46:41'),
(7, 1, 'slider', 'update', '0', '2023-03-17 23:56:19'),
(8, 1, 'slider', 'update', '0', '2023-03-17 23:57:06'),
(9, 1, 'setting', 'update', '0', '2023-03-18 04:02:18'),
(10, 1, 'setting', 'update', '0', '2023-03-18 04:07:54'),
(11, 1, 'setting', 'update', '0', '2023-03-18 04:08:01'),
(12, 1, 'setting', 'update', '0', '2023-03-18 04:08:11'),
(13, 1, 'setting', 'update', '0', '2023-03-18 04:28:16'),
(14, 1, 'setting', 'update', '0', '2023-03-18 04:28:29'),
(15, 1, 'setting', 'update', '0', '2023-03-18 04:29:48'),
(16, 1, 'setting', 'update', '0', '2023-03-18 04:54:45'),
(17, 1, 'setting', 'update', '0', '2023-03-18 04:55:20'),
(18, 1, 'setting', 'update', '0', '2023-03-18 04:56:11'),
(19, 1, 'setting', 'update', '0', '2023-03-18 04:56:25'),
(20, 1, 'setting', 'update', '0', '2023-03-18 04:59:54'),
(21, 1, 'setting', 'update', '0', '2023-03-18 05:11:36'),
(22, 1, 'link', 'store', '0', '2023-03-18 05:31:19'),
(23, 1, 'link', 'update', '0', '2023-03-18 05:34:42'),
(24, 1, 'setting', 'update', '0', '2023-03-18 06:02:24'),
(25, 1, 'blog', 'store', '0', '2023-03-18 23:02:09'),
(26, 1, 'setting', 'update', '0', '2023-03-18 23:15:50'),
(27, 1, 'client', 'store', '0', '2023-03-18 23:33:01'),
(28, 1, 'client', 'update', '0', '2023-03-18 23:36:00'),
(29, 1, 'client', 'delete', '0', '2023-03-18 23:38:19'),
(30, 1, 'slider', 'store', '0', '2023-03-19 05:42:11'),
(31, 1, 'link', 'update', '0', '2023-03-19 06:08:45'),
(32, 1, 'link', 'store', '0', '2023-03-19 06:29:46'),
(33, 1, 'link', 'store', '0', '2023-03-19 06:31:02'),
(34, 1, 'link', 'update', '0', '2023-03-19 06:32:13'),
(35, 1, 'link', 'update', '0', '2023-03-19 06:32:20'),
(36, 1, 'link', 'store', '0', '2023-03-19 06:32:51'),
(37, 1, 'link', 'update', '0', '2023-03-19 06:35:36'),
(38, 1, 'link', 'update', '0', '2023-03-19 06:36:07'),
(39, 1, 'link', 'update', '0', '2023-03-19 06:36:36'),
(40, 1, 'link', 'update', '0', '2023-03-19 06:37:06'),
(41, 1, 'link', 'store', '0', '2023-03-19 06:37:43'),
(42, 1, 'link', 'update', '0', '2023-03-19 06:38:05'),
(43, 1, 'slider', 'update', '0', '2023-03-19 06:39:04'),
(44, 1, 'slider', 'update', '0', '2023-03-19 06:39:23'),
(45, 1, 'setting', 'update', '0', '2023-03-19 06:40:04'),
(46, 1, 'client', 'store', '0', '2023-03-19 06:59:31'),
(47, 1, 'client', 'store', '0', '2023-03-19 06:59:43'),
(48, 1, 'client', 'store', '0', '2023-03-19 06:59:56'),
(49, 1, 'blog', 'update', '0', '2023-03-19 07:16:36'),
(50, 1, 'blog', 'update', '0', '2023-03-19 07:16:47'),
(51, 1, 'setting', 'update', '0', '2023-03-19 23:14:16'),
(52, 1, 'setting', 'update', '0', '2023-03-19 23:14:45'),
(53, 1, 'setting', 'update', '0', '2023-03-20 00:00:19'),
(54, 1, 'faq', 'update', '0', '2023-03-20 00:23:46');

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
(1, 'Admin', 'admin@admin.com', NULL, 'password', NULL, NULL, NULL);

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
  `is_pin` int(11) NOT NULL DEFAULT 0,
  `blog_status` varchar(20) DEFAULT NULL,
  `blog_slug` varchar(100) DEFAULT NULL,
  `blog_cdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_description`, `blog_image`, `seo_title`, `seo_description`, `seo_keywords`, `is_pin`, `blog_status`, `blog_slug`, `blog_cdt`) VALUES
(64, 'new event', '<p>text event</p>', '/storage/uploads/23/03/1678864059BDTFUHHQmwXhiXXTyPde.jpg', 'new event', '<p>text event</p>', NULL, 0, '1', 'new-event', '2023-03-15 07:07:39'),
(65, 'new event10', '<p>da</p>', '/storage/uploads/23/03/1678962467luazz1uCTFXl3LiGNI9y.jpg', 'new event10', '<p>da</p>', NULL, 0, '1', 'new-event10', '2023-03-16 10:27:47'),
(66, 'neew', '<p>sed</p>', '/storage/uploads/23/03/1678969307jroR1HQPv4KZdWkgNTJ1.jpg', 'neew', '<p>sed</p>', NULL, 1, '1', 'neew', '2023-03-19 13:16:36'),
(67, 'New Create Blog', '<h1><img src=\"https://sai.mapleshipping.net/storage/uploads/23/03/1678865001WbzSP5DhHmgRbjbQI2L6.jpg\" alt=\"img\" width=\"311\" height=\"175\" /></h1>\r\n<p>New Image Blog</p>', '/storage/uploads/23/03/1679202128yHVbmwE4qSrTe9FwWhAm.jpg', 'New Create Blog', '<h1><img src=\"https://sai.mapleshipping.net/storage/uploads/23/03/1678865001WbzSP5DhHmgRbjbQI2L6.jpg\" alt=\"img\" width=\"311\" height=\"175\" /></h1>\r\n<p>New Image Blog</p>', NULL, 1, '1', 'new-create-blog', '2023-03-19 13:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `link`, `status`, `cdt`) VALUES
(2, 'name', '/storage/uploads/23/03/1679230771cYJKs9biiDqOo3D7vTcd.svg', 'link', 1, '2023-03-19 06:59:31'),
(3, 'ad', '/storage/uploads/23/03/1679230783mVjlMuUHuVUKOtTMTD6U.svg', 'ad', 1, '2023-03-19 06:59:43'),
(4, 'ad', '/storage/uploads/23/03/167923079663nuJJJadmxHEqZUTwSq.svg', 'ad', 1, '2023-03-19 06:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `header_logo` varchar(255) DEFAULT NULL,
  `sub_bannar` varchar(255) DEFAULT NULL,
  `page_banner` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instragram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twich` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `about_description` varchar(255) DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `page_contain1` varchar(555) DEFAULT NULL,
  `page_contain2` varchar(1500) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatapp` varchar(255) DEFAULT NULL,
  `pt1_option1_text` varchar(255) DEFAULT NULL,
  `pt1_option1_link` varchar(255) DEFAULT NULL,
  `pt1_option2_text` varchar(255) DEFAULT NULL,
  `pt1_option2_link` varchar(255) DEFAULT NULL,
  `pt1_option3_text` varchar(255) DEFAULT NULL,
  `pt1_option3_link` varchar(255) DEFAULT NULL,
  `pt1_option4_text` varchar(255) DEFAULT NULL,
  `pt1_option4_link` varchar(255) DEFAULT NULL,
  `pt1_option5_text` varchar(255) DEFAULT NULL,
  `pt1_option5_link` varchar(255) DEFAULT NULL,
  `pt2_option1_text` varchar(255) DEFAULT NULL,
  `pt2_option1_link` varchar(255) DEFAULT NULL,
  `pt2_option2_text` varchar(255) DEFAULT NULL,
  `pt2_option2_link` varchar(255) DEFAULT NULL,
  `pt2_option3_text` varchar(255) DEFAULT NULL,
  `pt2_option3_link` varchar(255) DEFAULT NULL,
  `pt2_option4_text` varchar(255) DEFAULT NULL,
  `pt2_option4_link` varchar(255) DEFAULT NULL,
  `pt2_option5_text` varchar(255) DEFAULT NULL,
  `pt2_option5_link` varchar(255) DEFAULT NULL,
  `pt3_option1_text` varchar(255) DEFAULT NULL,
  `pt3_option1_link` varchar(255) DEFAULT NULL,
  `pt3_option2_text` varchar(255) DEFAULT NULL,
  `pt3_option2_link` varchar(255) DEFAULT NULL,
  `pt3_option3_text` varchar(255) DEFAULT NULL,
  `pt3_option3_link` varchar(255) DEFAULT NULL,
  `pt3_option4_text` varchar(255) DEFAULT NULL,
  `pt3_option4_link` varchar(255) DEFAULT NULL,
  `pt3_option5_text` varchar(255) DEFAULT NULL,
  `pt3_option5_link` varchar(255) DEFAULT NULL,
  `footer_text1` varchar(255) DEFAULT NULL,
  `footer_text2` varchar(255) DEFAULT NULL,
  `footer_image1` varchar(255) DEFAULT NULL,
  `footer_image2` varchar(255) DEFAULT NULL,
  `footer_image3` varchar(255) DEFAULT NULL,
  `footer_image4` varchar(255) DEFAULT NULL,
  `copy_right` varchar(255) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `header_logo`, `sub_bannar`, `page_banner`, `facebook`, `twitter`, `instragram`, `youtube`, `twich`, `about_title`, `about_description`, `about_image`, `page_contain1`, `page_contain2`, `mobile`, `email`, `whatapp`, `pt1_option1_text`, `pt1_option1_link`, `pt1_option2_text`, `pt1_option2_link`, `pt1_option3_text`, `pt1_option3_link`, `pt1_option4_text`, `pt1_option4_link`, `pt1_option5_text`, `pt1_option5_link`, `pt2_option1_text`, `pt2_option1_link`, `pt2_option2_text`, `pt2_option2_link`, `pt2_option3_text`, `pt2_option3_link`, `pt2_option4_text`, `pt2_option4_link`, `pt2_option5_text`, `pt2_option5_link`, `pt3_option1_text`, `pt3_option1_link`, `pt3_option2_text`, `pt3_option2_link`, `pt3_option3_text`, `pt3_option3_link`, `pt3_option4_text`, `pt3_option4_link`, `pt3_option5_text`, `pt3_option5_link`, `footer_text1`, `footer_text2`, `footer_image1`, `footer_image2`, `footer_image3`, `footer_image4`, `copy_right`, `cdt`) VALUES
(1, '/storage/uploads/23/03/16792892850tPjrT7qts15qUycKW2c.png', '/storage/uploads/23/03/1679229604sidb3hykckBhkER5KIqt.png', '/storage/uploads/23/03/1679202950N0q3Vbe4qMqStz7hJyMA.jpg', 'asd', 'asd', 'asd', 'ads', 'asd', 'abc', 'ssa', '/storage/uploads/23/03/1679136985dY088U5wCbS3uczm64ij.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est LLaborum.', '23', 'sa@zd', '32e', 'hj', 'as', 'sd', 'ds', 'd', 'sd', 'sd', 'd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 's', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'ds', '/storage/uploads/23/03/1679136920Fpl14Can4u4B9YoAfLwh.jpg', '/storage/uploads/23/03/1679137194kXVB8T0okZBrvXQIRLYK.jpg', '/storage/uploads/23/03/167913692061ajUo4RjrPWQxRKQmDv.jpg', '/storage/uploads/23/03/16791369205hjguPkxPllMc3B5R1Fg.jpg', 'sd', '2023-03-20 06:00:19');

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
(1, 'New Question1', '<p><strong>Answer : </strong>Is not <span style=\"color: #339966;\">Post<img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cry.gif\" alt=\"cry\" /></span><br /></p>', 1, 'New Question1', '<p><strong>Answer : </strong>Is not <span style=\"color: #339966;\">Post<img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cry.gif\" alt=\"cry\" /></span><br /></p>', 'new-question1', '2023-03-20 00:23:46'),
(3, 'my question', 'my ans', 1, 'my question', 'my ans', 'my-question', '2023-03-16 07:06:00');

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
(39, 'New News 1', '<p>abcde</p>', '/storage/uploads/23/03/1678962484B747YgvzsaAR9qH2drGJ.jpg', 'New News 1', '<p>abcde</p>', NULL, '1', 'new-news-1', '2023-03-16 10:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `btn_text` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `is_pin` int(11) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `btn_text`, `btn_link`, `type`, `is_pin`, `image`, `status`, `cdt`) VALUES
(1, 'Slider', 'Slider_description', 'join us', 'link', 0, 0, '/storage/uploads/23/03/1679229563ETdOmOFl2t1zXingkcaq.jpg', 1, '2023-03-19 06:39:23'),
(2, 'Link 3', 'Link3 description', 'Share', 'link', 1, 0, '/storage/uploads/23/03/1679229485M31Odz2Y2lZnRAXG70QH.jpg', 1, '2023-03-19 06:38:05'),
(3, 'ds', 'sd', 'jon', 'sf', 0, 0, '/storage/uploads/23/03/1679229544ukf7ua78dktjDKQE8LeU.jpg', 1, '2023-03-19 06:39:04'),
(4, 'Link1', 'Link1 description', 'Join', 'link', 1, 0, '/storage/uploads/23/03/1679228986gJyk8UfBInOsB7ZAW2jz.jpg', 1, '2023-03-19 06:35:36'),
(5, 'Link2', 'Link2 description', 'Join', 'limk', 1, 0, '/storage/uploads/23/03/1679229062HiySQLwca8Sb1VPJsSf5.jpg', 1, '2023-03-19 06:36:07'),
(6, 'PIN LInk', 'Pin Link Desciption', 'join', 'd', 1, 1, '/storage/uploads/23/03/1679229171enFlx11bDlDx2eIkfTgV.jpg', 1, '2023-03-19 06:37:06'),
(7, 'Pin Link 2', 'Pin Link Desciption', 'More', 'lik', 1, 1, '/storage/uploads/23/03/1679229463nLBRkdfKA1LGXiIUr3tJ.jpg', 1, '2023-03-19 06:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `user_address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `profile_image` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_slug` text NOT NULL,
  `verification_code` varchar(20) NOT NULL DEFAULT '0',
  `verification_link` text NOT NULL DEFAULT '0',
  `verification_status` int(11) NOT NULL DEFAULT 0,
  `user_cdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email_id`, `mobile_number`, `user_address`, `password`, `date_of_birth`, `profile_image`, `status`, `user_slug`, `verification_code`, `verification_link`, `verification_status`, `user_cdt`) VALUES
(541, 'Mr.x', 'admin@gmail.com', '1422533424', 'dhaka', '1234', '2023-03-24', '/storage/uploads/23/03/1678949988F0Z98M1ne5RUuWJyzjjj.jpg', '1', 'mrxKAQqV', '0', '0', 0, '2023-03-16 09:10:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activices`
--
ALTER TABLE `activices`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activices`
--
ALTER TABLE `activices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
