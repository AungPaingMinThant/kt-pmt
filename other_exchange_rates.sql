-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 01:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayabank`
--

-- --------------------------------------------------------

--
-- Table structure for table `other_exchange_rates`
--

CREATE TABLE `other_exchange_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `worker_remittance_currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_remittance_MMK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_purpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_exchange_rates`
--

INSERT INTO `other_exchange_rates` (`id`, `worker_remittance_currency`, `worker_remittance_MMK`, `special_purpose`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'USD', '2900', 'file/exchange_rate/Record_of_Currency_Exchange_Special Purpose_by_AYA_Bank.pdf', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_exchange_rates`
--
ALTER TABLE `other_exchange_rates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_exchange_rates`
--
ALTER TABLE `other_exchange_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
