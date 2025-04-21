-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 03:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocknetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `public` tinyint(1) NOT NULL DEFAULT 0,
  `free` tinyint(1) NOT NULL DEFAULT 0,
  `genre` varchar(50) DEFAULT NULL,
  `itemtype` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`id`, `name`, `approved`, `public`, `free`, `genre`, `itemtype`, `created_at`) VALUES
(47433, 'Classic Sword', 1, 1, 1, 'Weapons', 'model', '2025-04-17 21:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ROBLOSECURITY` varchar(255) DEFAULT NULL,
  `head_color` varchar(20) DEFAULT NULL,
  `left_arm_color` varchar(20) DEFAULT NULL,
  `right_arm_color` varchar(20) DEFAULT NULL,
  `left_leg_color` varchar(20) DEFAULT NULL,
  `right_leg_color` varchar(20) DEFAULT NULL,
  `torso_color` varchar(20) DEFAULT NULL,
  `hat1` int(11) DEFAULT 0,
  `hat2` int(11) DEFAULT 0,
  `hat3` int(11) DEFAULT 0,
  `tshirt` int(11) DEFAULT 0,
  `shirt` int(11) DEFAULT 0,
  `pants` int(11) DEFAULT 0,
  `trn_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `verification` int(11) DEFAULT 0,
  `randomGuestId` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gametime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `inJobId` int(11) DEFAULT 0,
  `about` text DEFAULT NULL,
  `banreason` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ROBLOSECURITY`, `head_color`, `left_arm_color`, `right_arm_color`, `left_leg_color`, `right_leg_color`, `torso_color`, `hat1`, `hat2`, `hat3`, `tshirt`, `shirt`, `pants`, `trn_date`, `email`, `verification`, `randomGuestId`, `time`, `gametime`, `inJobId`, `about`, `banreason`) VALUES
(-1, 'rocknettest', 'bcrypt-encoded-here', 'rocknet', '21', '21', '21', '21', '21', '21', NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-10 23:07:55', 'example@example.com', 0, '123123', '2025-04-11 04:00:00', '2025-04-11 04:00:00', 123, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
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
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125013770;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
