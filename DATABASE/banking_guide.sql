-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 11:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `bens_accounts`
--

CREATE TABLE `bens_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bens_accounts`
--

INSERT INTO `bens_accounts` (`id`, `name`, `type`, `user_id`) VALUES
(1, 'Amr Mohamed Ahmed', 0, 5),
(6, 'Abd Elrahman Mohamed Halim', 0, 5),
(16, 'mhmd sakr', 0, 9),
(18, 'Bahgat', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `user_id`, `company_id`, `number`) VALUES
(2, 9, 1, '0012222'),
(3, 9, 2, '01286721270'),
(4, 9, 4, '6666'),
(5, 9, 4, '1'),
(6, 9, 3, '111'),
(7, 9, 4, '55'),
(8, 9, 3, '01000002922'),
(9, 9, 1, '01111237382'),
(10, 9, 4, '123'),
(11, 9, 3, '1232222'),
(12, 9, 4, '1234'),
(13, 9, 4, '123'),
(14, 9, 2, '100200838'),
(15, 9, 2, '56789'),
(16, 9, 3, '800100'),
(17, 9, 2, '12345556'),
(18, 9, 2, '11'),
(19, 9, 3, '1222'),
(20, 9, 12, '1221221'),
(21, 9, 8, '122333444455555'),
(22, 9, 2, '1111'),
(23, 9, 4, '01286721270'),
(24, 9, 7, '11112344');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `holder` int(11) NOT NULL,
  `num_card` varchar(255) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `exp_year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `holder`, `num_card`, `exp_month`, `exp_year`, `cvv`) VALUES
(3, 5, '11112222333344', 21, 2030, 123),
(7, 9, '7487 1624 2308 1090', 6, 29, 807),
(8, 10, '9626 4958 2997 2725', 3, 30, 660);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pro_id`, `quantity`) VALUES
(34, 9, 3, 3),
(38, 9, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kind` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `kind`) VALUES
(1, 'Etisalat', 'tele'),
(2, 'Orange', 'tele'),
(3, 'Vodafone', 'tele'),
(4, 'WE', 'tele'),
(5, 'North Cairo Electricity', 'elec'),
(6, 'South Cairo Electricity', 'elec'),
(7, 'Canal Electricity', 'elec'),
(8, 'Cairo Water', 'wat'),
(9, 'Alex Water', 'wat'),
(10, 'Petro trade', 'gas'),
(11, 'Nat Gas', 'gas'),
(12, 'TAQA Gas', 'gas'),
(13, 'South Delta Electricity', 'elec');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`) VALUES
(1, 'Kui Ye Chen’s AirPods', 'product-1.jpg', 250),
(2, 'Air Jordan 12 gym red', 'product-2.jpg', 300),
(3, 'Cyan cotton t-shirt', 'product-3.jpg', 25),
(4, 'Timex Unisex Originals', 'product-4.jpg', 351),
(5, 'Red digital smartwatch', 'product-5.jpg', 250),
(6, 'Nike air max 95', 'product-6.jpg', 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `otp`) VALUES
(5, 'Amr Halim', 'amr203010504060@gmail.com', 12131415, 'aaa111', 0),
(9, 'Mhmd Sakr', 'm7mdsakr2002@gmail.com', 1286721270, 'aaa111', 258421),
(10, 'Aasmaa Hamdy', 'asmaarageh244@gmail.com', 1284806903, 'aaa111', 149321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bens_accounts`
--
ALTER TABLE `bens_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`holder`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bens_accounts`
--
ALTER TABLE `bens_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bens_accounts`
--
ALTER TABLE `bens_accounts`
  ADD CONSTRAINT `bens_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`);

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`holder`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
