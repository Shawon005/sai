-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 07:11 AM
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
(54, 1, 'faq', 'update', '0', '2023-03-20 00:23:46'),
(55, 1, 'news', 'update', '0', '2023-03-20 01:39:56'),
(56, 1, 'news', 'update', '0', '2023-03-20 02:03:09'),
(57, 1, 'news', 'store', '0', '2023-03-20 02:04:08'),
(58, 1, 'blog', 'update', '0', '2023-03-20 02:11:25'),
(59, 1, 'blog', 'update', '0', '2023-03-20 02:11:31'),
(60, 1, 'blog', 'update', '0', '2023-03-20 02:11:36'),
(61, 1, 'blog', 'update', '0', '2023-03-20 02:11:43'),
(62, 1, 'blog', 'update', '0', '2023-03-20 04:19:52'),
(63, 1, 'blog', 'update', '0', '2023-03-20 04:20:51'),
(64, 1, 'news', 'update', '0', '2023-03-20 04:31:06'),
(65, 1, 'news', 'update', '0', '2023-03-20 04:31:44'),
(66, 1, 'setting', 'update', '0', '2023-03-22 01:56:02'),
(67, 1, 'tipspel', 'store', '0', '2023-03-28 03:31:58'),
(68, 1, 'tipspel', 'delete', '0', '2023-03-28 04:18:30'),
(69, 1, 'tipspel', 'store', '0', '2023-03-28 04:20:59'),
(70, 1, 'tipspel', 'update', '0', '2023-03-28 22:17:01'),
(71, 1, 'setting', 'update', '0', '2023-03-28 22:38:05'),
(72, 1, 'tipspel', 'update', '0', '2023-03-28 22:46:12'),
(73, 1, 'tipspel', 'update', '0', '2023-03-28 22:46:45'),
(74, 1, 'tipspel', 'update', '0', '2023-03-28 22:47:26'),
(75, 1, 'tipspel', 'update', '0', '2023-03-28 22:52:46'),
(76, 1, 'tipspel', 'update', '0', '2023-03-28 23:06:32'),
(77, 1, 'andelar', 'store', '0', '2023-03-28 23:50:01'),
(78, 1, 'andelar', 'update', '0', '2023-03-28 23:54:12'),
(79, 1, 'andelar', 'store', '0', '2023-03-28 23:54:36'),
(80, 1, 'andelar', 'store', '0', '2023-03-29 00:45:41'),
(81, 1, 'andelar', 'store', '0', '2023-03-29 00:46:20'),
(82, 1, 'andelar', 'store', '0', '2023-03-29 00:47:57'),
(83, 1, 'andelar', 'delete', '0', '2023-03-29 00:48:11'),
(84, 1, 'sub_andelar', 'delete', '0', '2023-03-29 00:49:02'),
(85, 1, 'andelar', 'update', '0', '2023-03-29 00:55:15'),
(86, 1, 'andelar', 'store', '0', '2023-03-29 01:10:51'),
(87, 1, 'andelar', 'update', '0', '2023-03-29 01:43:48'),
(88, 1, 'ads', 'store', '0', '2023-03-29 02:16:22'),
(89, 1, 'ads', 'delete', '0', '2023-03-29 02:17:06'),
(90, 1, 'ads', 'store', '0', '2023-03-29 02:17:23'),
(91, 1, 'speltip', 'store', '0', '2023-03-29 02:34:48'),
(92, 1, 'speltip', 'update', '0', '2023-03-29 02:35:00'),
(93, 1, 'ads', 'store', '0', '2023-03-29 02:53:13'),
(94, 1, 'speltip', 'store', '0', '2023-03-29 02:55:31'),
(95, 1, 'ads', 'update', '0', '2023-03-29 03:09:47'),
(96, 1, 'speltip', 'store', '0', '2023-03-29 03:14:37'),
(97, 1, 'speltip', 'delete', '0', '2023-03-29 03:14:46'),
(98, 1, 'speltip', 'store', '0', '2023-03-29 03:14:58'),
(99, 1, 'blog', 'update', '0', '2023-03-29 23:58:18'),
(100, 1, 'blog', 'update', '0', '2023-03-30 00:27:11'),
(101, 1, 'blog', 'update', '0', '2023-03-30 00:29:18'),
(102, 1, 'blog', 'update', '0', '2023-03-30 00:29:52'),
(103, 1, 'setting', 'update', '0', '2023-04-06 00:10:46'),
(104, 1, 'news', 'update', '0', '2023-04-06 03:32:34'),
(105, 1, 'setting', 'update', '0', '2023-04-09 01:58:33'),
(106, 1, 'client', 'store', '0', '2023-04-09 02:05:27'),
(107, 1, 'news', 'store', '0', '2023-04-09 02:19:46'),
(108, 1, 'news', 'update', '0', '2023-04-09 02:30:09'),
(109, 1, 'setting', 'update', '0', '2023-04-09 03:44:37'),
(110, 1, 'blog', 'update', '0', '2023-04-14 22:51:18'),
(111, 1, 'blog', 'update', '0', '2023-04-14 22:51:30'),
(112, 1, 'blog', 'update', '0', '2023-04-14 22:52:16'),
(113, 1, 'blog', 'update', '0', '2023-04-14 22:52:27'),
(114, 1, 'ads', 'delete', '0', '2023-04-14 23:12:21');

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
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `link`, `image`, `status`) VALUES
(3, 'http://goggle.com', '/storage/uploads/23/03/1680079993bKynHj4fp1NHNPJpoPyo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `andelar`
--

CREATE TABLE `andelar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `andelar`
--

INSERT INTO `andelar` (`id`, `title`, `image`, `status`) VALUES
(1, 'Game', '/storage/uploads/23/03/1680069001DKS9wQf0nPTlUJVI8wjw.jpg', 1),
(2, 'Game Item', '/storage/uploads/23/03/1680069276p9Pb2VbfsTJAnMIxpP3r.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `blog_category` varchar(255) DEFAULT NULL,
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

INSERT INTO `blogs` (`blog_id`, `user_id`, `blog_name`, `blog_category`, `blog_description`, `blog_image`, `seo_title`, `seo_description`, `seo_keywords`, `is_pin`, `blog_status`, `blog_slug`, `blog_cdt`) VALUES
(64, 1, 'new event', NULL, '<p><span dir=\"ltr\" style=\"left: 24.89%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(1.02769);\" role=\"presentation\">Title</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 24.89%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.924205);\" role=\"presentation\">Consuming API:s</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 59.21%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.900466);\" role=\"presentation\">Date</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 59.21%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">20</span><span dir=\"ltr\" style=\"left: 61.23%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">2</span><span dir=\"ltr\" style=\"left: 62.24%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">2</span><span dir=\"ltr\" style=\"left: 63.25%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 63.92%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">0</span><span dir=\"ltr\" style=\"left: 64.93%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">9</span><span dir=\"ltr\" style=\"left: 65.94%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 66.61%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">1</span><span dir=\"ltr\" style=\"left: 67.62%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">4</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 71.6%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.910169);\" role=\"presentation\">Rev no</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 71.6%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">1</span><span dir=\"ltr\" style=\"left: 72.61%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">4</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 80.19%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.838407);\" role=\"presentation\">Page</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 80.19%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">9</span> <span dir=\"ltr\" style=\"left: 81.7%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">(</span><span dir=\"ltr\" style=\"left: 82.37%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">22</span><span dir=\"ltr\" style=\"left: 84.39%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">)</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 9.83%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(0.902114);\" role=\"presentation\">3.2</span> <span dir=\"ltr\" style=\"left: 16.27%; top: 9.83%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(1.01069);\" role=\"presentation\">What are Topptipset Family, Topptipset Stryk and Topptipset</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 11.74%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(0.989584);\" role=\"presentation\">Europa?</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 14.65%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.910451);\" role=\"presentation\">Topptipset is a product where the idea of the product is to</span> <span dir=\"ltr\" style=\"left: 58.95%; top: 14.65%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913623);\" role=\"presentation\">predict the outcome of eight</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 16.31%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.887112);\" role=\"presentation\">matches. These eight matches can be based upon Stryktipset or Europatipset.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 18.64%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.89244);\" role=\"presentation\">The api:s that concerns Topptipset and are based upon Stryktipset are described under</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.938369);\" role=\"presentation\">Topptipset</span> <span dir=\"ltr\" style=\"left: 21.03%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.951366);\" role=\"presentation\">Stryk</span><span dir=\"ltr\" style=\"left: 25.4%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.903575);\" role=\"presentation\">. An example of these api:s is</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992817);\" role=\"presentation\">https://api.www.sv</span><span dir=\"ltr\" style=\"left: 28.53%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992996);\" role=\"presentation\">enskaspel.se/</span><span dir=\"ltr\" style=\"left: 40.54%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">external/1/</span><span dir=\"ltr\" style=\"left: 50.71%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992674);\" role=\"presentation\">draw/topptipsetstryk/draws</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90476);\" role=\"presentation\">If Topptipset is based on Europatipset, then the api:s</span> <span dir=\"ltr\" style=\"left: 54.8%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.908116);\" role=\"presentation\">concerning</span> <span dir=\"ltr\" style=\"left: 64.27%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.897225);\" role=\"presentation\">this variant are described</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 25.68%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.907609);\" role=\"presentation\">under Topptipset Europa. An example of these api:s is</span></p>', '/storage/uploads/23/03/1678864059BDTFUHHQmwXhiXXTyPde.jpg', 'new event', '<p><span dir=\"ltr\" style=\"left: 24.89%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(1.02769);\" role=\"presentation\">Title</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 24.89%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.924205);\" role=\"presentation\">Consuming API:s</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 59.21%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.900466);\" role=\"presentation\">Date</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 59.21%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">20</span><span dir=\"ltr\" style=\"left: 61.23%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">2</span><span dir=\"ltr\" style=\"left: 62.24%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">2</span><span dir=\"ltr\" style=\"left: 63.25%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 63.92%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">0</span><span dir=\"ltr\" style=\"left: 64.93%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">9</span><span dir=\"ltr\" style=\"left: 65.94%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 66.61%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">1</span><span dir=\"ltr\" style=\"left: 67.62%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">4</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 71.6%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.910169);\" role=\"presentation\">Rev no</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 71.6%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">1</span><span dir=\"ltr\" style=\"left: 72.61%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">4</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 80.19%; top: 3.05%; font-size: calc(var(--scale-factor)*7.92px); font-family: sans-serif; transform: scaleX(0.838407);\" role=\"presentation\">Page</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 80.19%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">9</span> <span dir=\"ltr\" style=\"left: 81.7%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">(</span><span dir=\"ltr\" style=\"left: 82.37%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">22</span><span dir=\"ltr\" style=\"left: 84.39%; top: 4.36%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">)</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 9.83%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(0.902114);\" role=\"presentation\">3.2</span> <span dir=\"ltr\" style=\"left: 16.27%; top: 9.83%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(1.01069);\" role=\"presentation\">What are Topptipset Family, Topptipset Stryk and Topptipset</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 11.74%; font-size: calc(var(--scale-factor)*13.92px); font-family: sans-serif; transform: scaleX(0.989584);\" role=\"presentation\">Europa?</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 14.65%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.910451);\" role=\"presentation\">Topptipset is a product where the idea of the product is to</span> <span dir=\"ltr\" style=\"left: 58.95%; top: 14.65%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913623);\" role=\"presentation\">predict the outcome of eight</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 16.31%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.887112);\" role=\"presentation\">matches. These eight matches can be based upon Stryktipset or Europatipset.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 18.64%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.89244);\" role=\"presentation\">The api:s that concerns Topptipset and are based upon Stryktipset are described under</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.938369);\" role=\"presentation\">Topptipset</span> <span dir=\"ltr\" style=\"left: 21.03%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.951366);\" role=\"presentation\">Stryk</span><span dir=\"ltr\" style=\"left: 25.4%; top: 20.3%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.903575);\" role=\"presentation\">. An example of these api:s is</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992817);\" role=\"presentation\">https://api.www.sv</span><span dir=\"ltr\" style=\"left: 28.53%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992996);\" role=\"presentation\">enskaspel.se/</span><span dir=\"ltr\" style=\"left: 40.54%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">external/1/</span><span dir=\"ltr\" style=\"left: 50.71%; top: 21.89%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992674);\" role=\"presentation\">draw/topptipsetstryk/draws</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90476);\" role=\"presentation\">If Topptipset is based on Europatipset, then the api:s</span> <span dir=\"ltr\" style=\"left: 54.8%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.908116);\" role=\"presentation\">concerning</span> <span dir=\"ltr\" style=\"left: 64.27%; top: 24.03%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.897225);\" role=\"presentation\">this variant are described</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 25.68%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.907609);\" role=\"presentation\">under Topptipset Europa. An example of these api:s is</span></p>', NULL, 0, '1', 'new-event', '2023-03-30 06:29:18'),
(65, 1, 'new event10', NULL, '<p>Externa systemspel &auml;r en funktion p&aring; Svenska Spels sajt d&auml;r kunder kan l&auml;gga spel med hj&auml;lp av text-filer i ett speciellt format eller genom att anropa n&aring;gra av de API:er som Svenska Spel erbjuder. F&ouml;r att komma ig&aring;ng eller om n&aring;gon vill l&auml;sa lite mer &ouml;versiktligt om detta loggar personen in p&aring; Svenska Spel p&aring; n&auml;tet (www.svenskaspel.se), klickar p&aring; Mer och v&auml;ljer Externa systemspel. Vill n&aring;gon person d&aring; skicka in sina spel via text-fil finns utf&ouml;rlig beskrivning d&auml;r.</p>\r\n<p>I detta dokument beskrivs de API:er som finns tillg&auml;ngliga f&ouml;r att l&auml;gga spel p&aring; Svenska Spel. M&aring;lgruppen och d&auml;rmed underf&ouml;rst&aring;dd niv&aring; p&aring; f&ouml;rkunskaper &auml;r i huvudsak systemutvecklare och liknande personer som beh&auml;rskar och f&ouml;rst&aring;r de bakomliggande principer och termer som anv&auml;nds i detta dokument. Uttryckt annorlunda kommer detta dokument till exempel inte f&ouml;rklara principerna bakom hur klienter p&aring; internet h&auml;mtar och skickar data, eller vad https inneb&auml;r.</p>', '/storage/uploads/23/03/1678962467luazz1uCTFXl3LiGNI9y.jpg', 'new event10', '<p>Externa systemspel &auml;r en funktion p&aring; Svenska Spels sajt d&auml;r kunder kan l&auml;gga spel med hj&auml;lp av text-filer i ett speciellt format eller genom att anropa n&aring;gra av de API:er som Svenska Spel erbjuder. F&ouml;r att komma ig&aring;ng eller om n&aring;gon vill l&auml;sa lite mer &ouml;versiktligt om detta loggar personen in p&aring; Svenska Spel p&aring; n&auml;tet (www.svenskaspel.se), klickar p&aring; Mer och v&auml;ljer Externa systemspel. Vill n&aring;gon person d&aring; skicka in sina spel via text-fil finns utf&ouml;rlig beskrivning d&auml;r.</p>\r\n<p>I detta dokument beskrivs de API:er som finns tillg&auml;ngliga f&ouml;r att l&auml;gga spel p&aring; Svenska Spel. M&aring;lgruppen och d&auml;rmed underf&ouml;rst&aring;dd niv&aring; p&aring; f&ouml;rkunskaper &auml;r i huvudsak systemutvecklare och liknande personer som beh&auml;rskar och f&ouml;rst&aring;r de bakomliggande principer och termer som anv&auml;nds i detta dokument. Uttryckt annorlunda kommer detta dokument till exempel inte f&ouml;rklara principerna bakom hur klienter p&aring; internet h&auml;mtar och skickar data, eller vad https inneb&auml;r.</p>', NULL, 0, '1', 'new-event10', '2023-03-30 06:29:52'),
(66, 1, 'neew', 'Spel', '<p><span dir=\"ltr\" style=\"left: 11.9%; top: 18.07%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.923163);\" role=\"presentation\">This document is intended to explain how to fetch information stored in the informatio</span><span dir=\"ltr\" style=\"left: 81.86%; top: 18.07%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">n</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.877102);\" role=\"presentation\">systems used in Svenska Spel.</span> <span dir=\"ltr\" style=\"left: 36.88%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.982029);\" role=\"presentation\">It is</span> <span dir=\"ltr\" style=\"left: 40.47%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.916709);\" role=\"presentation\">possible to fetch information regarding draws,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 21.35%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.875941);\" role=\"presentation\">forecasts</span> <span dir=\"ltr\" style=\"left: 19.57%; top: 21.35%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.9009);\" role=\"presentation\">and results for products provided by Svenska Spel.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 23.72%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913912);\" role=\"presentation\">In order to be able to f</span><span dir=\"ltr\" style=\"left: 29.93%; top: 23.72%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.914155);\" role=\"presentation\">etch information, the consumer of the information is required to use</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.92209);\" role=\"presentation\">the communication protocol</span> <span dir=\"ltr\" style=\"left: 35.14%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.934495);\" role=\"presentation\">Hypertext</span> <span dir=\"ltr\" style=\"left: 43.71%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.902347);\" role=\"presentation\">Transfer Protocol Secure</span> <span dir=\"ltr\" style=\"left: 64.38%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.945786);\" role=\"presentation\">(Wikipedia, HTTPS,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 26.99%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.912318);\" role=\"presentation\">2018)</span> <span dir=\"ltr\" style=\"left: 17.11%; top: 26.99%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.900336);\" role=\"presentation\">and send a GET to the desired url for example</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992687);\" role=\"presentation\">https://api.www.svenskasp</span><span dir=\"ltr\" style=\"left: 35%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993747);\" role=\"presentation\">el.se/</span><span dir=\"ltr\" style=\"left: 40.54%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">external/1/</span><span dir=\"ltr\" style=\"left: 50.71%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992579);\" role=\"presentation\">draw/stryktipset/draws?accesskey=made</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 30.21%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">UpAccessKey</span><span dir=\"ltr\" style=\"left: 22.06%; top: 30.02%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 32.38%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.922454);\" role=\"presentation\">All api:s must include the parameter accesskey. Calls without the parameter will fail with</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.895523);\" role=\"presentation\">error code</span> <span dir=\"ltr\" style=\"left: 20.63%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">100005</span><span dir=\"ltr\" style=\"left: 26.68%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span></p>', '/storage/uploads/23/03/1678969307jroR1HQPv4KZdWkgNTJ1.jpg', 'neew', '<p><span dir=\"ltr\" style=\"left: 11.9%; top: 18.07%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.923163);\" role=\"presentation\">This document is intended to explain how to fetch information stored in the informatio</span><span dir=\"ltr\" style=\"left: 81.86%; top: 18.07%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">n</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.877102);\" role=\"presentation\">systems used in Svenska Spel.</span> <span dir=\"ltr\" style=\"left: 36.88%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.982029);\" role=\"presentation\">It is</span> <span dir=\"ltr\" style=\"left: 40.47%; top: 19.73%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.916709);\" role=\"presentation\">possible to fetch information regarding draws,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 21.35%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.875941);\" role=\"presentation\">forecasts</span> <span dir=\"ltr\" style=\"left: 19.57%; top: 21.35%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.9009);\" role=\"presentation\">and results for products provided by Svenska Spel.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 23.72%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913912);\" role=\"presentation\">In order to be able to f</span><span dir=\"ltr\" style=\"left: 29.93%; top: 23.72%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.914155);\" role=\"presentation\">etch information, the consumer of the information is required to use</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.92209);\" role=\"presentation\">the communication protocol</span> <span dir=\"ltr\" style=\"left: 35.14%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.934495);\" role=\"presentation\">Hypertext</span> <span dir=\"ltr\" style=\"left: 43.71%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.902347);\" role=\"presentation\">Transfer Protocol Secure</span> <span dir=\"ltr\" style=\"left: 64.38%; top: 25.34%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.945786);\" role=\"presentation\">(Wikipedia, HTTPS,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 26.99%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.912318);\" role=\"presentation\">2018)</span> <span dir=\"ltr\" style=\"left: 17.11%; top: 26.99%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.900336);\" role=\"presentation\">and send a GET to the desired url for example</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992687);\" role=\"presentation\">https://api.www.svenskasp</span><span dir=\"ltr\" style=\"left: 35%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993747);\" role=\"presentation\">el.se/</span><span dir=\"ltr\" style=\"left: 40.54%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">external/1/</span><span dir=\"ltr\" style=\"left: 50.71%; top: 28.59%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.992579);\" role=\"presentation\">draw/stryktipset/draws?accesskey=made</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 30.21%; font-size: calc(var(--scale-factor)*10.08px); font-family: monospace; transform: scaleX(0.993113);\" role=\"presentation\">UpAccessKey</span><span dir=\"ltr\" style=\"left: 22.06%; top: 30.02%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 32.38%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.922454);\" role=\"presentation\">All api:s must include the parameter accesskey. Calls without the parameter will fail with</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.895523);\" role=\"presentation\">error code</span> <span dir=\"ltr\" style=\"left: 20.63%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899101);\" role=\"presentation\">100005</span><span dir=\"ltr\" style=\"left: 26.68%; top: 34.01%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span></p>', NULL, 1, '1', 'neew', '2023-04-15 04:52:16'),
(67, 1, 'New Create Blog', 'Sport', '<h1><img src=\"https://sai.mapleshipping.net/storage/uploads/23/03/1678865001WbzSP5DhHmgRbjbQI2L6.jpg\" alt=\"img\" width=\"311\" height=\"175\" /></h1>\r\n<p><span dir=\"ltr\" style=\"left: 11.9%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.929627);\" role=\"presentation\">API is an abbreviation for</span> <span dir=\"ltr\" style=\"left: 33.35%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.930451);\" role=\"presentation\">Application Programming Interface</span> <span dir=\"ltr\" style=\"left: 62.64%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.960778);\" role=\"presentation\">(Wikipedia, Application</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.916698);\" role=\"presentation\">programming interface, 2017)</span> <span dir=\"ltr\" style=\"left: 36.65%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.882203);\" role=\"presentation\">that describes an address on the internet, also called a</span> <span dir=\"ltr\" style=\"left: 80.28%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.999822);\" role=\"presentation\">URL</span><span dir=\"ltr\" style=\"left: 84.31%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 51.22%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90683);\" role=\"presentation\">where mainly computers can fetch stru</span><span dir=\"ltr\" style=\"left: 43.2%; top: 51.22%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.883203);\" role=\"presentation\">ctured data.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913786);\" role=\"presentation\">JSON is an abbreviation for JavaScript Object Notation</span> <span dir=\"ltr\" style=\"left: 57.27%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.928864);\" role=\"presentation\">(Wikipedia, JSON, 2017)</span><span dir=\"ltr\" style=\"left: 77.88%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.960442);\" role=\"presentation\">. It is</span> <span dir=\"ltr\" style=\"left: 82.47%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.848572);\" role=\"presentation\">an</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.873836);\" role=\"presentation\">open</span><span dir=\"ltr\" style=\"left: 15.82%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 16.49%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.898312);\" role=\"presentation\">standard file format that uses human</span><span dir=\"ltr\" style=\"left: 45.89%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 46.57%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.896281);\" role=\"presentation\">readable text to transmit data.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90855);\" role=\"presentation\">A draw defined by Svenska Spel</span> <span dir=\"ltr\" style=\"left: 38.78%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.923262);\" role=\"presentation\">is</span> <span dir=\"ltr\" style=\"left: 40.63%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.910076);\" role=\"presentation\">either</span> <span dir=\"ltr\" style=\"left: 45.73%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">a</span> <span dir=\"ltr\" style=\"left: 47.13%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.929339);\" role=\"presentation\">betting pool</span> <span dir=\"ltr\" style=\"left: 57.32%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.940153);\" role=\"presentation\">(Wikipedia, Betting pool, 2017)</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.9997);\" role=\"presentation\">with</span> <span dir=\"ltr\" style=\"left: 15.99%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.932891);\" role=\"presentation\">a fixed</span> <span dir=\"ltr\" style=\"left: 22.04%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.915684);\" role=\"presentation\">price plan</span> <span dir=\"ltr\" style=\"left: 30.55%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.906542);\" role=\"presentation\">or sports betting</span> <span dir=\"ltr\" style=\"left: 44.16%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.924728);\" role=\"presentation\">(Wikipedia, Sports betting, 2017)</span><span dir=\"ltr\" style=\"left: 71.21%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span> <span dir=\"ltr\" style=\"left: 72.22%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.889089);\" role=\"presentation\">The draw has</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.87847);\" role=\"presentation\">several</span> <span dir=\"ltr\" style=\"left: 18.11%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.833278);\" role=\"presentation\">states</span> <span dir=\"ltr\" style=\"left: 23.1%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.904697);\" role=\"presentation\">and a draw is confined</span> <span dir=\"ltr\" style=\"left: 41.86%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.999583);\" role=\"presentation\">within</span> <span dir=\"ltr\" style=\"left: 47.52%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">a</span> <span dir=\"ltr\" style=\"left: 48.92%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.919105);\" role=\"presentation\">period</span><span dir=\"ltr\" style=\"left: 54.07%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span> <span dir=\"ltr\" style=\"left: 55.08%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.948736);\" role=\"presentation\">Usually</span><span dir=\"ltr\" style=\"left: 61.35%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.921889);\" role=\"presentation\">, the draw is first defined,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.884148);\" role=\"presentation\">then the draw is open and bets can be entered, then the draw is closed and</span> <span dir=\"ltr\" style=\"left: 71.88%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(1.02094);\" role=\"presentation\">finally</span> <span dir=\"ltr\" style=\"left: 77.65%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.949612);\" role=\"presentation\">finalized.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 64.13%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.936355);\" role=\"presentation\">A result is</span> <span dir=\"ltr\" style=\"left: 20.69%; top: 64.13%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913026);\" role=\"presentation\">distributed when the draw is finalized and the outcome of the draw is</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 65.76%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899205);\" role=\"presentation\">determined.</span></p>', '/storage/uploads/23/03/1679202128yHVbmwE4qSrTe9FwWhAm.jpg', 'New Create Blog', '<h1><img src=\"https://sai.mapleshipping.net/storage/uploads/23/03/1678865001WbzSP5DhHmgRbjbQI2L6.jpg\" alt=\"img\" width=\"311\" height=\"175\" /></h1>\r\n<p><span dir=\"ltr\" style=\"left: 11.9%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.929627);\" role=\"presentation\">API is an abbreviation for</span> <span dir=\"ltr\" style=\"left: 33.35%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.930451);\" role=\"presentation\">Application Programming Interface</span> <span dir=\"ltr\" style=\"left: 62.64%; top: 47.94%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.960778);\" role=\"presentation\">(Wikipedia, Application</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.916698);\" role=\"presentation\">programming interface, 2017)</span> <span dir=\"ltr\" style=\"left: 36.65%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.882203);\" role=\"presentation\">that describes an address on the internet, also called a</span> <span dir=\"ltr\" style=\"left: 80.28%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.999822);\" role=\"presentation\">URL</span><span dir=\"ltr\" style=\"left: 84.31%; top: 49.6%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 51.22%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90683);\" role=\"presentation\">where mainly computers can fetch stru</span><span dir=\"ltr\" style=\"left: 43.2%; top: 51.22%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.883203);\" role=\"presentation\">ctured data.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913786);\" role=\"presentation\">JSON is an abbreviation for JavaScript Object Notation</span> <span dir=\"ltr\" style=\"left: 57.27%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.928864);\" role=\"presentation\">(Wikipedia, JSON, 2017)</span><span dir=\"ltr\" style=\"left: 77.88%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.960442);\" role=\"presentation\">. It is</span> <span dir=\"ltr\" style=\"left: 82.47%; top: 53.59%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.848572);\" role=\"presentation\">an</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.873836);\" role=\"presentation\">open</span><span dir=\"ltr\" style=\"left: 15.82%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 16.49%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.898312);\" role=\"presentation\">standard file format that uses human</span><span dir=\"ltr\" style=\"left: 45.89%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">-</span><span dir=\"ltr\" style=\"left: 46.57%; top: 55.21%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.896281);\" role=\"presentation\">readable text to transmit data.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.90855);\" role=\"presentation\">A draw defined by Svenska Spel</span> <span dir=\"ltr\" style=\"left: 38.78%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.923262);\" role=\"presentation\">is</span> <span dir=\"ltr\" style=\"left: 40.63%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.910076);\" role=\"presentation\">either</span> <span dir=\"ltr\" style=\"left: 45.73%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">a</span> <span dir=\"ltr\" style=\"left: 47.13%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.929339);\" role=\"presentation\">betting pool</span> <span dir=\"ltr\" style=\"left: 57.32%; top: 57.58%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.940153);\" role=\"presentation\">(Wikipedia, Betting pool, 2017)</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.9997);\" role=\"presentation\">with</span> <span dir=\"ltr\" style=\"left: 15.99%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.932891);\" role=\"presentation\">a fixed</span> <span dir=\"ltr\" style=\"left: 22.04%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.915684);\" role=\"presentation\">price plan</span> <span dir=\"ltr\" style=\"left: 30.55%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.906542);\" role=\"presentation\">or sports betting</span> <span dir=\"ltr\" style=\"left: 44.16%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.924728);\" role=\"presentation\">(Wikipedia, Sports betting, 2017)</span><span dir=\"ltr\" style=\"left: 71.21%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span> <span dir=\"ltr\" style=\"left: 72.22%; top: 59.2%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.889089);\" role=\"presentation\">The draw has</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.87847);\" role=\"presentation\">several</span> <span dir=\"ltr\" style=\"left: 18.11%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.833278);\" role=\"presentation\">states</span> <span dir=\"ltr\" style=\"left: 23.1%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.904697);\" role=\"presentation\">and a draw is confined</span> <span dir=\"ltr\" style=\"left: 41.86%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.999583);\" role=\"presentation\">within</span> <span dir=\"ltr\" style=\"left: 47.52%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">a</span> <span dir=\"ltr\" style=\"left: 48.92%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.919105);\" role=\"presentation\">period</span><span dir=\"ltr\" style=\"left: 54.07%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif;\" role=\"presentation\">.</span> <span dir=\"ltr\" style=\"left: 55.08%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.948736);\" role=\"presentation\">Usually</span><span dir=\"ltr\" style=\"left: 61.35%; top: 60.86%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.921889);\" role=\"presentation\">, the draw is first defined,</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.884148);\" role=\"presentation\">then the draw is open and bets can be entered, then the draw is closed and</span> <span dir=\"ltr\" style=\"left: 71.88%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(1.02094);\" role=\"presentation\">finally</span> <span dir=\"ltr\" style=\"left: 77.65%; top: 62.48%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.949612);\" role=\"presentation\">finalized.</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 64.13%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.936355);\" role=\"presentation\">A result is</span> <span dir=\"ltr\" style=\"left: 20.69%; top: 64.13%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.913026);\" role=\"presentation\">distributed when the draw is finalized and the outcome of the draw is</span><br role=\"presentation\" /><span dir=\"ltr\" style=\"left: 11.9%; top: 65.76%; font-size: calc(var(--scale-factor)*12.00px); font-family: sans-serif; transform: scaleX(0.899205);\" role=\"presentation\">determined.</span></p>', NULL, 1, '1', 'new-create-blog', '2023-04-15 04:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cdt`) VALUES
(1, 'New Category', '2023-04-05 10:08:15'),
(3, 'try', '2023-04-06 05:58:02');

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
(4, 'ad', '/storage/uploads/23/03/167923079663nuJJJadmxHEqZUTwSq.svg', 'ad', 1, '2023-03-19 06:59:56'),
(5, 'd', '/storage/uploads/23/04/1681027527hyBliDoKjcFMAz3JwH3e.jpg', 'as', 1, '2023-04-09 02:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `header_logo` varchar(255) DEFAULT NULL,
  `header_logo_b` varchar(255) DEFAULT NULL,
  `fav_logo` varchar(255) DEFAULT NULL,
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
  `pt1_option6_text` text DEFAULT NULL,
  `pt1_option6_link` text DEFAULT NULL,
  `pt2_option6_text` text DEFAULT NULL,
  `pt2_option6_link` text DEFAULT NULL,
  `pt3_option6_text` text DEFAULT NULL,
  `pt3_option6_link` text DEFAULT NULL,
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

INSERT INTO `cms` (`id`, `header_logo`, `header_logo_b`, `fav_logo`, `sub_bannar`, `page_banner`, `facebook`, `twitter`, `instragram`, `youtube`, `twich`, `about_title`, `about_description`, `about_image`, `page_contain1`, `page_contain2`, `mobile`, `email`, `whatapp`, `pt1_option1_text`, `pt1_option1_link`, `pt1_option2_text`, `pt1_option2_link`, `pt1_option3_text`, `pt1_option3_link`, `pt1_option4_text`, `pt1_option4_link`, `pt1_option5_text`, `pt1_option5_link`, `pt2_option1_text`, `pt2_option1_link`, `pt2_option2_text`, `pt2_option2_link`, `pt2_option3_text`, `pt2_option3_link`, `pt2_option4_text`, `pt2_option4_link`, `pt2_option5_text`, `pt2_option5_link`, `pt3_option1_text`, `pt3_option1_link`, `pt3_option2_text`, `pt3_option2_link`, `pt3_option3_text`, `pt3_option3_link`, `pt3_option4_text`, `pt3_option4_link`, `pt3_option5_text`, `pt3_option5_link`, `pt1_option6_text`, `pt1_option6_link`, `pt2_option6_text`, `pt2_option6_link`, `pt3_option6_text`, `pt3_option6_link`, `footer_text1`, `footer_text2`, `footer_image1`, `footer_image2`, `footer_image3`, `footer_image4`, `copy_right`, `cdt`) VALUES
(1, '/storage/uploads/23/03/16792892850tPjrT7qts15qUycKW2c.png', '/storage/uploads/23/04/1680761446j6dmyZGqRbfg69UQzdKN.png', '/storage/uploads/23/03/1680064685ljZvpZSGSgBYxD45ik1A.ico', '/storage/uploads/23/03/1679229604sidb3hykckBhkER5KIqt.png', '/storage/uploads/23/03/1679202950N0q3Vbe4qMqStz7hJyMA.jpg', 'https://facebook.com', 'https://twitter.com', 'https://instragram.com', 'https://linkedin.com', 'https://google.com', 'abc', 'ssa', '/storage/uploads/23/03/1679136985dY088U5wCbS3uczm64ij.jpg', NULL, NULL, '23', 'sa@zd', '32e', 'hj', 'as', 'sd', 'ds', 'd', 'sd', 'sd', 'd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 's', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'sd', 'dr', 'dg', NULL, NULL, NULL, NULL, 'sd', 'ds', '/storage/uploads/23/03/1679136920Fpl14Can4u4B9YoAfLwh.jpg', '/storage/uploads/23/03/1679137194kXVB8T0okZBrvXQIRLYK.jpg', '/storage/uploads/23/03/167913692061ajUo4RjrPWQxRKQmDv.jpg', '/storage/uploads/23/03/16791369205hjguPkxPllMc3B5R1Fg.jpg', 'sd', '2023-04-09 09:44:37');

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
-- Table structure for table `game_table`
--

CREATE TABLE `game_table` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_table`
--

INSERT INTO `game_table` (`id`, `category`, `date`, `title`, `image`, `link`, `status`, `cdt`) VALUES
(1, 'Live', 'MÅNDAG', '90s sport', '/storage/uploads/23/04/1681103693mt4YrA1JiABtUq12MAo9.jpg', NULL, 1, '2023-03-21 10:52:04'),
(2, 'Prod', 'ONSDAG', 'asdd', '/storage/uploads/23/04/1681034197FIFYp4LtGjNzz3kb2EJC.jpg', NULL, 1, '2023-03-21 11:19:12'),
(3, 'Magasin', 'LÖRDAG', 'zczc', '/storage/uploads/23/04/1681103734gPgsK1SCjJoDRVgYfu2c.jpg', NULL, 1, '2023-03-21 11:52:40'),
(4, 'Live', 'MÅNDAG', 'try', '/storage/uploads/23/04/1681034142qdyHjvwEIylFgDQ3pi1S.jpg', NULL, 1, '2023-04-09 09:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `match_events`
--

CREATE TABLE `match_events` (
  `id` int(11) NOT NULL,
  `tipstar_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `title` varchar(300) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_link` varchar(255) NOT NULL,
  `company_logo` varchar(355) NOT NULL,
  `slug` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_events`
--

INSERT INTO `match_events` (`id`, `tipstar_id`, `category_id`, `type`, `banner`, `title`, `details`, `company_name`, `company_link`, `company_logo`, `slug`, `status`, `cdt`) VALUES
(1, 2, 1, 'pooltip', '/storage/uploads/23/04/1680755250UTyVQlVLxJEKxN87sZZS.jpg', 'match event1', '<p>sd</p>', 'company', 'https://www.link.com', '/storage/uploads/23/04/16807552500384ecZW4zF60l7jclQV.jpg', 'match-event1', 1, '2023-04-06 04:27:30'),
(4, 2, 1, 'speltip', '/storage/uploads/23/04/16807570620opHg4oxVyanw0ia2kGx.jpg', 'match event 2', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur vero ipsam beatae quisquam eius consectetur esse ea in. Similique vel odit incidunt provident, esse eos ipsum vitae voluptates dignissimos fugiat.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur vero ipsam beatae quisquam eius consectetur esse ea in. Similique vel odit incidunt provident, esse eos ipsum vitae voluptates dignissimos fugiat.</p>\r\n<p>&nbsp;</p>\r\n<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur vero ipsam beatae quisquam eius consectetur esse ea in. Similique vel odit incidunt provident, esse eos ipsum vitae voluptates dignissimos fugiat.</p>', 'company', 'https://www.link.com', '/storage/uploads/23/04/1680757062ty5Qx1UpRwAl6m34H4uK.jpg', 'match-event-2', 1, '2023-04-06 04:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `news_category` varchar(255) DEFAULT NULL,
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

INSERT INTO `news` (`news_id`, `user_id`, `news_category`, `news_title`, `news_description`, `news_image`, `seo_title`, `seo_description`, `seo_keywords`, `news_status`, `news_slug`, `news_cdt`) VALUES
(39, 1, 'Artikel', 'New News 1', '<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\"><strong class=\"ssrcss-hmf8ql-BoldText e5tfeyi3\"><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-sealed.gif\" alt=\"sealed\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" />Police in India\'s Punjab have launched a massive search for Amritpal Singh, a controversial self-styled preacher who has been on the run since Saturday.<img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-kiss.gif\" alt=\"kiss\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-tongue-out.gif\" alt=\"tongue-out\" /></strong></p>\r\n</div>\r\n</div>\r\n<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\">Internet and messaging services in the state have remained suspended since the search began and security has been tightened.</p>\r\n</div>\r\n</div>\r\n<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\">The 30-year-old says he supports the Khalistan movement for a separate Sikh homeland.</p>\r\n</div>\r\n</div>', '/storage/uploads/23/03/1678962484B747YgvzsaAR9qH2drGJ.jpg', 'New News 1', '<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\"><strong class=\"ssrcss-hmf8ql-BoldText e5tfeyi3\"><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-sealed.gif\" alt=\"sealed\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" />Police in India\'s Punjab have launched a massive search for Amritpal Singh, a controversial self-styled preacher who has been on the run since Saturday.<img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-kiss.gif\" alt=\"kiss\" /><img src=\"../../../assets/plugins/tinymce/plugins/emoticons/img/smiley-tongue-out.gif\" alt=\"tongue-out\" /></strong></p>\r\n</div>\r\n</div>\r\n<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\">Internet and messaging services in the state have remained suspended since the search began and security has been tightened.</p>\r\n</div>\r\n</div>\r\n<div class=\"ssrcss-11r1m41-RichTextComponentWrapper ep2nwvo0\" data-component=\"text-block\">\r\n<div class=\"ssrcss-7uxr49-RichTextContainer e5tfeyi1\">\r\n<p class=\"ssrcss-1q0x1qg-Paragraph eq5iqo00\">The 30-year-old says he supports the Khalistan movement for a separate Sikh homeland.</p>\r\n</div>\r\n</div>', NULL, '1', 'new-news-1', '2023-04-06 09:32:34'),
(42, 1, 'Kronika', 'neww', '<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_0\">European bank shares have made some recoveries after tumbling in early trading.</p>\r\n<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_1\">By mid-morning, <strong>Deutsche Bank</strong> was down 4%, after slipping 10% earlier this morning, while<strong> BNP Paribas</strong> was down 3% compared with an earlier fall of more than 8%.</p>\r\n<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_2\"><strong>UBS </strong>- the bank that agreed to buy its troubled rival <strong>Credit Suisse </strong>- is now down 8% compared with an earlier slide of 13%.</p>', '/storage/uploads/23/03/1679299447KA7Co4ENCwXoGnYxevR4.jpg', 'neww', '<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_0\">European bank shares have made some recoveries after tumbling in early trading.</p>\r\n<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_1\">By mid-morning, <strong>Deutsche Bank</strong> was down 4%, after slipping 10% earlier this morning, while<strong> BNP Paribas</strong> was down 3% compared with an earlier fall of more than 8%.</p>\r\n<p data-reactid=\".fipx9mal5i.0.2.0.0.1.0.1.0.$lx-tabs0.0.$lx-commentary.$lx-commentary.2.0.1.1.1:$post-641830ddb0a62a7df8d9ac68.0.6.0.0:$post_2\"><strong>UBS </strong>- the bank that agreed to buy its troubled rival <strong>Credit Suisse </strong>- is now down 8% compared with an earlier slide of 13%.</p>', NULL, '1', 'neww', '2023-03-20 10:31:44'),
(43, 1, 'Kronika', 'edw', '<p>we</p>', '/storage/uploads/23/04/1681029009i2NqmMXk0rf0UI43lMpI.jpg', 'edw', '<p>we</p>', NULL, '1', 'edw', '2023-04-09 08:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `cdt`) VALUES
(1, 'news', 'news', '2023-04-15 06:19:09'),
(2, 'Artikel', 'artikel', '2023-04-15 06:32:40'),
(3, 'Kronika', 'kronika', '2023-04-15 06:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `page_contain`
--

CREATE TABLE `page_contain` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `contain1` varchar(255) DEFAULT NULL,
  `contain2` varchar(255) DEFAULT NULL,
  `contain_image` varchar(255) DEFAULT NULL,
  `page_banner` varchar(255) DEFAULT NULL,
  `banner_text` varchar(255) DEFAULT NULL,
  `text_link` varchar(255) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_contain`
--

INSERT INTO `page_contain` (`id`, `page_name`, `contain1`, `contain2`, `contain_image`, `page_banner`, `banner_text`, `text_link`, `cdt`) VALUES
(1, 'Spelansvar', NULL, NULL, NULL, '/storage/uploads/23/03/1680149179qdLC5LfLcNfYAqgsHKbY.jpg', NULL, NULL, '2023-03-29 22:06:19'),
(2, 'Contact', NULL, NULL, '/storage/uploads/23/03/1680150794Q6lfvF7Q19cxw4CkTtCF.jpg', '/storage/uploads/23/03/1680150794jzp4jiO4yKQ5aXaZ54BD.jpg', NULL, NULL, '2023-03-29 22:33:14'),
(3, 'About', NULL, NULL, NULL, '/storage/uploads/23/03/16801492397sW5fvzgkKxl78yXFnFi.jpg', '<p><strong>$100 bonus for new customers only</strong></p>', NULL, '2023-03-29 22:17:24'),
(4, 'Blog', 'PROGRAM PODDAR MAGAZIN', NULL, NULL, '/storage/uploads/23/03/1680149282Gqg8jP19fdKqONxikC8S.jpg', '<p>$100 bonus for new customers only</p>', NULL, '2023-03-30 00:39:53'),
(5, 'News', NULL, NULL, NULL, '/storage/uploads/23/03/1680149871ruKwoM9aE1FKpOV8Iuhu.jpg', '<p>$100 bonus for new customers only</p>', NULL, '2023-03-29 22:17:51'),
(6, 'Table', NULL, NULL, NULL, '/storage/uploads/23/03/1680150441yCs75tO6GE88OPPvvLBk.jpg', '<p><strong>$100 bonus for new customers only</strong></p>', NULL, '2023-03-29 22:27:21'),
(7, 'Speltips', NULL, NULL, NULL, '/storage/uploads/23/03/1680152742MCmn1pfvshZa5hXpRN0q.jpg', '<p><strong>$100 bonus for new customers only</strong></p>', NULL, '2023-03-29 23:06:22'),
(8, 'TipSpel', NULL, NULL, NULL, '/storage/uploads/23/03/1680152729EbivJ11f2wuYduGLhSoa.jpg', '<p><strong>$100 bonus for new customers only</strong></p>', NULL, '2023-03-29 23:06:30'),
(9, 'Andelar', NULL, NULL, NULL, '/storage/uploads/23/03/1680152706AoCRaLW6BviN9KtqTaMn.jpg', '<p><strong>$100 bonus for new customers only</strong></p>', NULL, '2023-03-29 23:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `poolspel`
--

CREATE TABLE `poolspel` (
  `id` int(11) NOT NULL,
  `tab_name` varchar(255) DEFAULT NULL,
  `tab_image` varchar(255) DEFAULT NULL,
  `contain1` varchar(1500) DEFAULT NULL,
  `contain2` varchar(1500) DEFAULT NULL,
  `contain_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poolspel`
--

INSERT INTO `poolspel` (`id`, `tab_name`, `tab_image`, `contain1`, `contain2`, `contain_image`, `status`, `cdt`) VALUES
(1, 'Football', '/storage/uploads/23/03/1679385266LRBCL3h6GoA2AG1j7J9k.png', 'Ireland paceman Graham Hume followed his 4-60 with 3-58 to spark a mini collapse in the middle order that left Bangladesh 4-190 before Mushfiqur took the charge.  He and Towhid Hridoy, who scored 92 runs in the first match, added 228 off 78 deliveries. Hridoy just missed his second successive half-century after being out for 49.', '\"Mushfiqur has been in good touch and, even in the last game, his 40-plus knock helped us to a 300-plus total,\" Das said.  \"Today, he was at his best. I have never seen any Bangladeshi batter scoring a century, coming after 30 overs. It was a great treat for the eyes.\"', '/storage/uploads/23/03/1679392209AUQyPXvfLk8o1Vl8QkeX.jpg', '1', '2023-03-21 03:51:08'),
(3, 'cricket', '/storage/uploads/23/03/1679393026qDiJr6wEyqevTSaRtFAh.png', 'sdsf', 'sdf', '/storage/uploads/23/03/1679391107aHNiYxNWj9WFwbkcDgzk.jpg', '1', '2023-03-21 04:03:46'),
(4, 'tennis', '/storage/uploads/23/03/1679393003FOHqEZzwEK1Gbm30m43S.png', '\'Total panic\': Tennis icon Martina Navratilova speaks about \'ridiculous\' cancer battle after beautiful news', 'Tennis great Martina Navratilova has revealed she is cancer-free following a dual fight with the disease.  In January, Navratilova announced she had been diagnosed with throat and breast cancer.﻿  \"This double whammy is serious but still fixable, and I\'m hoping for a favourable outcome,\" she said in a statement at the time.', '/storage/uploads/23/03/1679393003hyi0VU1zHU4cetJUZGv9.jpg', '1', '2023-03-21 04:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `review_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `reply` varchar(255) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `review_id`, `name`, `email`, `reply`, `cdt`, `updated_at`, `created_at`) VALUES
(4, 2, 'omar farukd', 'email@gmail', 'rfe', '2023-04-10 04:23:53', '2023-04-09 22:23:53', '2023-04-09 22:23:53'),
(6, 3, 'Mr.x', 'shawonomar@gmail.com', 'try', '2023-04-10 05:01:15', '2023-04-09 23:01:15', '2023-04-09 23:01:15'),
(7, 2, 'Mr.x', 'email@gmail', 'new reply', '2023-04-10 05:27:14', '2023-04-09 23:27:14', '2023-04-09 23:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(244) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cdt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `blog_id`, `name`, `email`, `question`, `answer`, `status`, `cdt`) VALUES
(1, 0, 'sd', NULL, 'ds', NULL, NULL, '2023-04-09 09:02:02'),
(2, 67, 'mr.xy', 'cokebo4484@mustbeit.com', 'comment', NULL, NULL, '2023-04-09 09:12:08'),
(3, 67, 'we', 'wee@gmail.com', 'wew', NULL, NULL, '2023-04-10 04:44:29');

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
-- Table structure for table `speltip`
--

CREATE TABLE `speltip` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` varchar(1500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(1500) DEFAULT NULL,
  `speltip_slug` varchar(255) NOT NULL,
  `speltip_cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speltip`
--

INSERT INTO `speltip` (`id`, `question`, `answer`, `status`, `seo_title`, `seo_description`, `speltip_slug`, `speltip_cdt`) VALUES
(1, 'test question', '<p>test anwser</p>', 1, 'test question', '<p>test anwser</p>', 'test-question', '2023-03-29 02:35:00'),
(3, 'vhj', '<p>hkh</p>', 1, 'vhj', '<p>hkh</p>', 'vhj', '2023-03-29 03:14:37'),
(4, 'klkhj', '<p>jkl</p>', 0, 'klkhj', '<p>jkl</p>', 'klkhj', '2023-03-29 03:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_andelar`
--

CREATE TABLE `sub_andelar` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `andelar` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_andelar`
--

INSERT INTO `sub_andelar` (`id`, `image`, `title`, `color`, `andelar`, `status`) VALUES
(1, '/storage/uploads/23/03/168007234198KXsaYbP47cNCweiSXq.jpg', 'game option11', '#e2ca1d', 1, 1),
(2, '/storage/uploads/23/03/1680072380MCHZlD95LwfOwcQH8U1v.jpg', 'game option', '#5ba465', 1, 1),
(4, '/storage/uploads/23/03/1680073851EfCWTtFFKmJ4wYV3M97X.jpg', 'sdas', '#3710ef', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipspel`
--

CREATE TABLE `tipspel` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `details` varchar(1500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `cdt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipspel`
--

INSERT INTO `tipspel` (`id`, `fullname`, `nickname`, `profile_image`, `banner_image`, `details`, `status`, `slug`, `cdt`) VALUES
(2, 'full name', 'nick name', '/storage/uploads/23/03/1680065246siad2FX3OL4sVfTDmVZQ.jpg', '/storage/uploads/23/03/1680065246RXakZkt45RXvHCrLoBGR.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, 'sd', '2023-03-28 10:20:59');

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
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `andelar`
--
ALTER TABLE `andelar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `game_table`
--
ALTER TABLE `game_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_events`
--
ALTER TABLE `match_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_contain`
--
ALTER TABLE `page_contain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poolspel`
--
ALTER TABLE `poolspel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speltip`
--
ALTER TABLE `speltip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_andelar`
--
ALTER TABLE `sub_andelar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipspel`
--
ALTER TABLE `tipspel`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `andelar`
--
ALTER TABLE `andelar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `game_table`
--
ALTER TABLE `game_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `match_events`
--
ALTER TABLE `match_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_contain`
--
ALTER TABLE `page_contain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `poolspel`
--
ALTER TABLE `poolspel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `speltip`
--
ALTER TABLE `speltip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_andelar`
--
ALTER TABLE `sub_andelar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipspel`
--
ALTER TABLE `tipspel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
