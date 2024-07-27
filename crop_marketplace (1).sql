-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2024 at 03:50 AM
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
-- Database: `crop_marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) NOT NULL,
  `crop_type` varchar(255) NOT NULL,
  `crop_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `harvest_date` date NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`id`, `crop_type`, `crop_name`, `quantity`, `price`, `harvest_date`, `description`, `image_path`, `contact_no`) VALUES
(1, 'Cereals', 'Paddy', 50, 2000.00, '2024-07-25', '0', 'uploads/Screenshot 2023-04-24 223840.png', ''),
(2, 'Pulses', 'Arhar', 500, 6500.00, '2024-05-05', '0', 'uploads/Screenshot 2023-04-16 173657.png', ''),
(3, 'Oilseeds', 'Sunflower', 500, 6500.00, '2024-05-05', '0', 'uploads/Screenshot 2023-06-23 002234.png', ''),
(4, 'Pulses', 'Arhar', 500, 6500.00, '2024-05-05', '0', 'uploads/Screenshot 2023-07-01 185826.png', ''),
(5, 'Commercial Crops', 'Cotton', 500, 6500.00, '2024-05-05', '0', 'uploads/Screenshot 2023-07-06 021252.png', ''),
(6, 'Pulses', 'Arhar', 50, 6500.00, '2024-07-02', '0', 'uploads/Screenshot 2023-04-24 223840.png', ''),
(7, 'Cereals', 'Maize', 60, 2000.00, '2024-07-17', '0', 'uploads/Screenshot 2023-04-16 173657.png', ''),
(8, 'Cereals', 'Maize', 45, 2000.00, '2024-07-10', '0', 'uploads/Screenshot 2023-08-03 165600.png', ''),
(9, 'Cereals', 'Maize', 23341, 2000.00, '5000-03-05', '0', NULL, ''),
(10, 'Cereals', 'Wheat', 123, 12345.00, '2024-07-18', '0', '../uploads/mildstrings.jpeg', ''),
(11, 'Cereals', 'Maize', 50, 5000.00, '2022-03-05', '0', '../uploads/anz.jpeg', '9978888946');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('farmer','distributor') NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `state` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `name`, `age`, `gender`, `state`, `district`, `village`, `contact_number`) VALUES
(3, '1@gmail.com', '$2y$10$o8jxRPnJdRC.gpn5o9tl/u8dkdCwmkd2e6OJwSKRu/dM8NN0gPO5a', 'distributor', 'dhai', 20, 'male', 'arsff', 'fwfef', 'awf', '9898889999'),
(4, 'qwerty@gmail.com', '$2y$10$JLGKvY7OM5xxo1Jm6R3i6ubsOj7uyn0ijrtOhxZNe5HELqGXQgziO', 'farmer', 'qwerty', 25, 'male', 'gujarat', 'vadodara', 'vadodada', '6656588558');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
