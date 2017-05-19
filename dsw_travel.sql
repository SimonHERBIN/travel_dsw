-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2017 at 11:30 AM
-- Server version: 10.1.22-MariaDB-
-- PHP Version: 7.0.16-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsw_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `actus`
--

CREATE TABLE `actus` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `textpreview` text NOT NULL,
  `image` text NOT NULL,
  `imgalt` varchar(50) NOT NULL DEFAULT 'image DSW Travel',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actus`
--

INSERT INTO `actus` (`id`, `title`, `text`, `textpreview`, `image`, `imgalt`, `created_at`, `created_by`, `private`) VALUES
(1, 'Actu1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'assets/img/first.jpg', 'Eiffel Tower', '2017-05-18 12:55:43', 'admin', 0),
(2, 'Actu 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'assets/img/first.jpg', 'image DSW Travel', '2017-05-18 13:29:45', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coms`
--

CREATE TABLE `coms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `actu_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(40) NOT NULL,
  `infos` text,
  `image` text NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `pseudo`, `email`, `password`, `infos`, `image`, `admin`) VALUES
(1, '', '', 'admin', '', '', NULL, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actus`
--
ALTER TABLE `actus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coms`
--
ALTER TABLE `coms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actus`
--
ALTER TABLE `actus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coms`
--
ALTER TABLE `coms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
