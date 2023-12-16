-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 05:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ase230`
--

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `license_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `expiration_date` date NOT NULL,
  `license_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license_requests`
--

CREATE TABLE `license_requests` (
  `request_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(3) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_limit_per_purchase` int(3) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `account_type` varchar(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `account_type`, `email`, `password`) VALUES
(6, 'Ethan', 'Fossmeyer', '', 'ethan@fossmeyer.com', '$2y$10$L6DeHrSYFHzh6HPcYDachOZISBBxwvbb1Q.6yEPIXn5s5/M/uwu4a'),
(7, 'asfasf', 'asfasf', '', 'monkey@gmail.com', '$2y$10$3bPFvVjv3MM87kIUkufUseEB1LV5qsCXwbMwSw2G1qEjxEX69FTHq'),
(8, 'ethan', 'ff', 'business', 'kinkala@e.com', '$2y$10$CPYl4JyDYAQ3XNOTQwoJQOgyolLAP0zcTHF4z3.zFz77OqfGHzxcG'),
(9, 'ethan', 'ff', 'customer', 'monkala@e.com', '$2y$10$4LlJWTexu5D0PUmPtsgivOt6GH3dYlj1DAM1s96QyjfSR06sHEBnG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`license_id`),
  ADD KEY `licenses_FK` (`user_id`),
  ADD KEY `licenses_FK_1` (`product_id`);

--
-- Indexes for table `license_requests`
--
ALTER TABLE `license_requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `license_requests_FK` (`user_id`),
  ADD KEY `license_requests_FK_1` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_FK` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_UN` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `license_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `license_requests`
--
ALTER TABLE `license_requests`
  MODIFY `request_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `licenses_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `licenses_FK_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `license_requests`
--
ALTER TABLE `license_requests`
  ADD CONSTRAINT `license_requests_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `license_requests_FK_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
