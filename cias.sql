-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 01:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE `tbl_leaves` (
  `id` int(11) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `comment` varchar(225) CHARACTER SET utf8 NOT NULL,
  `status_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`id`, `startdate`, `enddate`, `duration`, `comment`, `status_id`, `type_id`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '0', 2, 6),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '0', 2, 6),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '0', 1, 2),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '0', 3, 1),
(5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '0', 3, 1),
(6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '0', 3, 1),
(7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '0', 3, 1),
(8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '0', 3, 1),
(9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '0', 2, 5),
(10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '0', 2, 5),
(11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '0', 2, 3),
(12, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 40, 'Hellosdfghjkl;', 2, 4),
(13, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 'sick', 2, 2),
(14, '1970-01-01 01:00:07', '0000-00-00 00:00:00', 8, 'Comments (optional)', 3, 5),
(15, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 5, 'Hello sick leaves', 2, 2),
(16, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 8, '', 2, 1),
(17, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 1, '', 2, 3),
(18, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 8, 'testing', 2, 2),
(19, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 1, 'testing', 3, 2),
(20, '1970-01-01 01:00:07', '1970-01-01 01:00:07', 1, 'sick', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leavetypes`
--

CREATE TABLE `tbl_leavetypes` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leavetypes`
--

INSERT INTO `tbl_leavetypes` (`id`, `name`) VALUES
(1, 'compensate'),
(2, 'paid leave	\r\n'),
(3, 'maternity leave'),
(4, 'paternity leave'),
(5, 'special leave'),
(6, 'Sick leave'),
(7, 'Annual Leave');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `name`) VALUES
(1, 'Accepted'),
(2, 'Requested'),
(3, 'Rejected'),
(4, 'Planed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(7, 'user@gmail.com', '$2y$10$WsRiymA/VCF7auy17RIXpeFC4VdUJbx5O2/SZLhLDgF3OUVVC9CUG', 'Sarethorn', '0964457575', 3, 0, 4, '2017-07-22 21:04:48', NULL, NULL),
(5, 'employee@gmail.com', '$2y$10$gPGi01VnQkX827JS/BgM2OoaTafY9t/yKMChUEDHnW6uQJtshpKOy', 'Tochpheak', '0964457575', 3, 0, 4, '2017-07-20 15:27:56', NULL, NULL),
(6, 'manager@gmail.com', '$2y$10$nHH7pJ5qsTfNzBibUNCN8O6HhemVYyG2XurJ/X4J7gHKtxGSOvyl.', 'Ny Reaksmey', '0109107562', 2, 0, 4, '2017-07-20 15:29:10', NULL, NULL),
(4, 'admin@gmail.com', '$2y$10$LYSlLIqczb.l.tfBrY9X/Ondvke4ugCqAqfpCALpHpGm/.ICkWRDi', 'Bunsintoeng', '0964457575', 1, 0, 1, '2017-07-20 11:55:35', NULL, NULL),
(8, 'user1@gmail.com', '$2y$10$3WMLKAy1zBBA5nmVV9L7gu.EriL8.YtwBZbhu3HFFvr00Xi39q5yq', 'User', '0964457575', 3, 0, 4, '2017-07-24 12:55:58', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leavetypes`
--
ALTER TABLE `tbl_leavetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_leavetypes`
--
ALTER TABLE `tbl_leavetypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
