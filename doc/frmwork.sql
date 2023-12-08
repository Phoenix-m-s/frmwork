-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 08:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frmwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) UNSIGNED NOT NULL,
  `comp_id` int(11) UNSIGNED NOT NULL,
  `compid` int(11) NOT NULL DEFAULT 0,
  `username` varchar(64) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` text COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_persian_ci DEFAULT NULL,
  `family` varchar(64) COLLATE utf8_persian_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `member_id` int(11) DEFAULT NULL,
  `permission_pbx` text COLLATE utf8_persian_ci DEFAULT NULL,
  `cell_phone` bigint(20) UNSIGNED DEFAULT NULL,
  `creation_date` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `comp_id`, `compid`, `username`, `password`, `name`, `family`, `status`, `member_id`, `permission_pbx`, `cell_phone`, `creation_date`, `last_login`, `type`) VALUES
(116, 1, 1, 'javad', 'e10adc3949ba59abbe56e057f20f883e', 'javad', 'movahedi', 1, NULL, '111111111111110000001111110111111100000011111101111111000000011111011111110000001111011111111100000011111111011111000000111101110111110000001111110101111100000001111110011111000000110111100111110000000111111001111100000001111111111111100000111111111111111000001111111111111110000011111111111111100000111111111111111000001111111111111110000011111111111111100000111111111111111000000', 9375320230, NULL, NULL, 1),
(118, 1, 1, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 1, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(120, 1, 1, 'amir', '01ffbcf51d870a122246d963b57524e5', 'amir', 'amir ', 1, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(121, 1, 1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'admin  ', 1, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) UNSIGNED NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `action` varchar(30) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_as`
--

CREATE TABLE `login_as` (
  `session_id` int(11) NOT NULL,
  `ascomp_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `admin_id` int(11) UNSIGNED DEFAULT NULL,
  `comp_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `remote_addr` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `last_access_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `issue_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `brief_desc` text COLLATE utf8_persian_ci NOT NULL,
  `priority` int(2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `desc` text COLLATE utf8_persian_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE `web_config` (
  `id` int(11) NOT NULL,
  `config` char(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `value` char(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `task` char(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=FIXED;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `config`, `value`, `task`) VALUES
(31, '', '', 'System Control'),
(32, 'website_language', 'en', 'System Control'),
(33, 'site_title', 'Test', 'System Control'),
(34, 'phone', '', 'System Control'),
(35, 'website_copyright', 'Copyright ???? 2012 by Spino Group. All rights are reserved .', 'System Control'),
(36, 'page_size', '10', 'System Control'),
(37, 'system_status', '0', 'System Control'),
(38, 'support_email', 'info@sitename.com', 'System Control'),
(39, 'last_sync', 'NULL', 'System Control'),
(40, 'component', 'index', 'System Control'),
(41, 'user_type', '000000', 'System Control'),
(42, 'total_channel', '20', 'System Control'),
(43, 'vat', '9', 'Null'),
(44, 'one_ring_time', '4', ''),
(45, 'PERMISSION_BASE', '20', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `comp_id_2` (`comp_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `login_as`
--
ALTER TABLE `login_as`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `ascomp_id` (`ascomp_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `web_config`
--
ALTER TABLE `web_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_as`
--
ALTER TABLE `login_as`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_config`
--
ALTER TABLE `web_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_as`
--
ALTER TABLE `login_as`
  ADD CONSTRAINT `login_as_admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_as_comp_id` FOREIGN KEY (`comp_id`) REFERENCES `tbl_company` (`comp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
