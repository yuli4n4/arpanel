-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2017 at 09:46 AM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'seller', 'Seller Account');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.png',
  `saldo` int(12) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `photo`, `saldo`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$cdnobgWYzjRtp2McfTC7euacd7e1lJUIdePz/77NROg06.SULv.Lm', '', 'admin@admin.com', '', 'l5KHiX-F.t9OWDkjgNZKUea05ca31a05b3d06a29', 1497199620, 'm54vZJHUvnw6U7PdsfyHlu', 1268889823, 1497546318, 1, 'Adipati', 'Arya', 'ADMIN', '081391138430', 'profile-1.png', NULL),
(2, '192.168.122.1', 'andika@gmail.com', '$2y$08$UWdpCN44HltoWdn8gAeclOoNslJjzGlT1pHUiUgfxaloO7aslWGPW', NULL, 'andika@gmail.com', NULL, NULL, NULL, NULL, 1497147196, NULL, 1, 'andika', 'sudan', 'Sendiri', 'kirunnnnnnnnnnnnnnnn', 'default.png', NULL),
(3, '192.168.122.1', 'aryaadipati2@fgmail.com', '$2y$08$waeGOxAIpB2aA6Tx5uVfOOLLYwPoDIUTHuoM/71f/d2yrXwsKSS0y', NULL, 'aryaadipati2@fgmail.com', NULL, NULL, NULL, NULL, 1497224856, NULL, 1, 'ariana', 'adsa', 'sendiri', '08127344', 'default.png', NULL),
(4, '192.168.122.1', 'jawircodes@gmail.com', '$2y$08$HeEIBvw47HhOCsB67z7q5.E9MhPS/1ZBkj3Fy.8tMToN5uzU6T8wa', NULL, 'jawircodes@gmail.com', NULL, NULL, NULL, 'gabP6UYX4.v3mqyOzOwEie', 1497225039, 1497548201, 1, 'jarworrer', 'tejo', 'sujarwo', '333333333333', 'profile-4.png', 2147483647),
(5, '192.168.122.1', 'jawrwo@jarwo.com', '$2y$08$gY9FcJvxtZHJ9foBXL/AOek4dicJqbwmndg1j521iCHgVWeiSKs0K', NULL, 'jawrwo@jarwo.com', NULL, NULL, NULL, NULL, 1497225304, NULL, 1, 'jarwo22', '123456', 'SESDNMFF', '123333', 'default.png', NULL),
(6, '192.168.122.1', 'ddd@afss.com', '$2y$08$cKRAUcuiApNCEp1dNYB0e.aLBWtQ.Q7af0lsfLwraj7hw1tmoJ3di', NULL, 'ddd@afss.com', NULL, NULL, NULL, NULL, 1497225947, NULL, 1, 'ariana', 'aaaaaa', 'aaaaaaaa', '989822', 'default.png', NULL),
(7, '192.168.122.1', 'aryaadipasti2@fgmail.com', '$2y$08$a0MzJEORwho7dCG7ZHCP5.XWxEJ.pTOLpHezZUppV2JDuUhjWrYy.', NULL, 'aryaadipasti2@fgmail.com', NULL, NULL, NULL, NULL, 1497227760, NULL, 1, 'ariana', 'sambalang', '1kjfss', '1000222', 'default.png', NULL),
(8, '192.168.122.1', 'jawircodeshff@gmail.com', '$2y$08$7oxLrmo1RHHuA1TNPosqNe3WjbXCamCawSWxJ7sY9HWgPzUcLpkIC', NULL, 'jawircodeshff@gmail.com', NULL, NULL, NULL, NULL, 1497228514, NULL, 1, 'arya adipati', 'arya2', 'sendiri', '0987676555', 'default.png', NULL),
(9, '192.168.122.1', 'jarrwircodes@gmail.com', '$2y$08$PvtVwL1kdqhozAOkgcsoLOq2AJN6sLBMjSu3kGdM5j9PIruZNpMCy', NULL, 'jarrwircodes@gmail.com', NULL, NULL, NULL, NULL, 1497229001, NULL, 1, 'testeee', '12ede', 'eeeeeeew', '1233444', 'default.png', 15555),
(10, '192.168.122.1', 'jawdes@gmail.com', '$2y$08$iNCqd8M8ZOnM4DZpws8.QuwX/dsIcDNdFgAiIWLMo5pM6yyzfMVLe', NULL, 'jawdes@gmail.com', NULL, NULL, NULL, NULL, 1497229158, NULL, 1, 'jarwo22', 'jhhh', 'jkjjhh', '6767777', 'default.png', 2000),
(11, '192.168.122.1', 'jajkwdes@gmail.com', '$2y$08$A/3Twhxzgld3kzNqh4V5Y.2pIy4AEfSg5i5oi7IksanJ/aXkSsfFC', NULL, 'jajkwdes@gmail.com', NULL, NULL, NULL, NULL, 1497229254, NULL, 1, 'jarwo22', 'jhhh', 'jkjjhh', '6767777', 'default.png', NULL),
(12, '192.168.122.1', 'jajksswdes@gmail.com', '$2y$08$sBfUCrWCwI7SK986C10JZe02.TPrDVMpvNgK2crS00Q9qzxiB0u6O', NULL, 'jajksswdes@gmail.com', NULL, NULL, NULL, NULL, 1497229449, NULL, 1, 'jarwo22', 'asda', 'aaaaaaass', '1233455', 'default.png', NULL),
(13, '192.168.122.1', 'jaw55des@gmail.com', '$2y$08$LlWJ9FNJcaeFyBaYpkdDtO5vVXsTE8p6lYnUsNT9Ak24/zPpLb52K', NULL, 'jaw55des@gmail.com', NULL, NULL, NULL, NULL, 1497229757, NULL, 1, 'jarwo225', 'yyyy', '12334', '783455', 'default.png', NULL),
(14, '192.168.122.1', 'jajksshhhwdes@gmail.com', '$2y$08$q3aRrCRzjxIg/smll32gwu8s9IyKx0cScL1YoTNvpYDkBxAuskYsa', NULL, 'jajksshhhwdes@gmail.com', NULL, NULL, NULL, NULL, 1497229856, NULL, 1, 'arianadd', 'jhhhr', '12334', '0342111', 'default.png', NULL),
(15, '192.168.122.1', 'jajksswd6666es@gmail.com', '$2y$08$YjL/bPYCaVNDxRnjlO10NurkflcVWsRt6J3sRxir5jQYgQhj9.KvS', NULL, 'jajksswd6666es@gmail.com', NULL, NULL, NULL, NULL, 1497230169, NULL, 1, 'jarwo22ff', 'ddddd', 'fgsssdd', '422222', 'default.png', NULL),
(16, '192.168.122.1', '12232343@dd.com', '$2y$08$lwjGeDUEFrIafs3IidfNUOgRGbWYjIZA.u6cxvkYTJO7/x6MSnaXy', NULL, '12232343@dd.com', NULL, NULL, NULL, NULL, 1497399817, NULL, 1, 'jkjjjj', 'asukoe', 'sendiri', '0998877', 'default.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(18, 16, 2),
(17, 1, 1),
(30, 2, 1),
(4, 3, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(41, 9, 2),
(40, 10, 2),
(12, 11, 2),
(13, 12, 2),
(14, 13, 2),
(15, 14, 2),
(16, 15, 2),
(39, 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
