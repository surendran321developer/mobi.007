-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 01:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobill_world_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin123@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE `login_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'anbuan12345@gmail.com', 'Anbu13092002', '2025-04-06 19:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id VARCHAR(20) NOT NULL UNIQUE,
    product_id INT NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(10,2) DEFAULT 0.00,
    customer_name VARCHAR(150) NOT NULL,
    phone_number VARCHAR(30) NOT NULL,
    customer_address TEXT NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `phone_number`, `order_product`, `user_address`, `created_at`, `status`, `payment_method`) VALUES
(1, 'Anbarasan', '8682832943', 'loptop', 'trichy', '2025-04-11 16:41:22', 0, 'cod'),
(2, 'db', '8682832943', 'cumputer', 'tirchy', '2025-04-17 18:00:24', 0, 'cod'),
(3, 'anbu', '0875489574305', 'dell', 'hudfuisegf', '2025-04-23 19:40:03', 0, 'cod'),
(4, 'wefef', '324234ewfwef', 'fewfwef', 'efewf', '2025-04-25 19:42:01', 0, 'cod'),
(5, 'vewv', '3423', 'ds', 'fdfsdsd', '2025-04-25 19:42:44', 0, 'cod'),
(6, 'ANANANNAAN', '34234ANNANANANNAAMAN', 'cumputer', 'dsddsd', '2025-04-26 17:24:22', 0, 'cod'),
(7, 'qqqq', '111', 'qqqq', 'qqqq', '2025-04-26 17:27:46', 1, 'online'),
(8, 'wwww', '22222', 'wwww', 'wwwww', '2025-04-26 17:31:20', 1, 'cod'),
(9, 'wewqe', '1224214', '232eqwe', '23werqw', '2025-04-26 17:32:21', 1, 'cod'),
(10, '222', 'www', 'www', 'www', '2025-04-26 17:32:59', 1, 'online'),
(11, 'aaaaa', '1111', '1111', '111', '2025-04-26 17:39:05', 0, 'cod'),
(12, 'Anbarasan', '8682832943', 'cumputer', 'pudukkottai', '2025-04-26 17:40:19', 0, 'cod'),
(13, 'qqqq', '11111', 'cumputer', 'pudukkottai', '2025-04-26 17:41:13', 0, 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) DEFAULT 0.00,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `customer_name` varchar(120) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `customer_address` text NOT NULL,
  `payment_method` varchar(20) NOT NULL DEFAULT 'cod',
  `order_note` text DEFAULT NULL,
  `order_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `idx_customer_orders_created_at` (`created_at`),
  KEY `idx_customer_orders_status` (`order_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1=Active, 0=Deleted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `brand`, `price`, `quantity`, `description`, `image_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Buds', 'Circuit Protection', 'Legrand', 2000.00, 5, 'hi i am Anbu', '[\"uploads/products/6808ccd7139f6_1745407191.png\"]', 0, '2025-04-23 11:19:51', '2025-05-10 07:22:09'),
(2, 'Buds', 'Circuit Protection', 'Legrand', 2000.00, 5, 'hi i am Anbu', '[\"uploads/products/6808cd16781d0_1745407254.png\"]', 0, '2025-04-23 11:20:54', '2025-05-10 07:22:21'),
(3, 'Buds', 'Circuit Protection', 'Legrand', 34734.00, 44, 'ergerg', '[\"uploads/products/6808cd37c0ec1_1745407287.png\"]', 0, '2025-04-23 11:21:27', '2025-06-04 10:04:35'),
(4, 'Buds', 'Wires & Cables', 'Anchor', 2323.00, 4, 'hi', '[\"uploads/products/6808db98311c3_1745410968.png\"]', 0, '2025-04-23 12:22:48', '2025-06-04 10:04:30'),
(5, 'Anbu', 'Lighting', 'Legrand', 10000000.00, 333, 'Hi I am Anbu', '[\"uploads/products/6808f44d49563_1745417293.jpg\"]', 0, '2025-04-23 14:08:13', '2025-05-18 14:37:06'),
(6, 'Lop Top', 'Circuit Protection', 'Finolex', 1000000.00, 40, 'hikbhfwehifbwejfbewf', '[\"uploads/products/680c76b8bf6e8_1745647288.jpg\"]', 0, '2025-04-26 06:01:28', '2025-05-14 07:42:55'),
(7, 'Lop Top', 'Circuit Protection', 'Legrand', 99999999.99, 3434, 'hjtiioj', '[\"uploads/products/681078c722767_1745909959.png\"]', 0, '2025-04-29 06:59:19', '2025-05-10 07:21:48'),
(8, 'new', 'Lighting', 'Anchor', 99999999.99, 33, '3434t', '[\"uploads/products/681f00119cb16_1746862097.jpeg\"]', 0, '2025-05-10 07:28:17', '2025-05-10 07:28:27'),
(9, 'efef', 'Circuit Protection', 'Legrand', 24123.00, 2321, 'rqwdqwd', '[\"uploads/products/682b7ce949a61_1747680489.jpg\"]', 0, '2025-05-19 18:48:09', '2025-06-04 10:04:40'),
(10, 'eqweqwe', 'Circuit Protection', 'Anchor', 99999999.99, 323532, '5vtqttq3t', '[\"uploads/products/682b7d0cc94e0_1747680524.jpg\"]', 1, '2025-05-19 18:48:44', '2025-05-19 18:48:44'),
(11, 'tt4t4t', 'Lighting', 'Finolex', 22222.00, 4555, 'hihii', '[\"uploads/products/682b7d2a9b889_1747680554.jpg\"]', 1, '2025-05-19 18:49:14', '2025-05-19 18:49:14'),
(12, '3432432', 'Switches & Sockets', 'Legrand', 6.00, 6, 'h', '[\"uploads/products/682b7d3ebcd4a_1747680574.jpg\"]', 1, '2025-05-19 18:49:34', '2025-05-19 18:49:34'),
(13, 'oo', 'Wires & Cables', 'Legrand', 4.00, 5, 'hhh', '[\"uploads/products/682b7d597d94f_1747680601.jpg\"]', 1, '2025-05-19 18:50:01', '2025-05-19 18:50:01'),
(14, 'anbu', 'Circuit Protection', 'Legrand', 355.00, 34, 'hi', '[\"uploads/products/682dd66c27b8e_1747834476.jpg\"]', 1, '2025-05-21 13:34:36', '2025-05-21 13:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `order_product` varchar(255) DEFAULT NULL,
  `user_address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `phone_number`, `user_email`, `order_product`, `user_address`, `created_at`) VALUES
(1, 'fbuwq', '73025530', NULL, NULL, NULL, '2025-04-08 04:52:14'),
(2, 'Anbu', NULL, NULL, NULL, 'pdk', '2025-04-08 04:57:16'),
(3, 'Anarasan K', NULL, NULL, NULL, NULL, '2025-04-08 04:57:44'),
(4, 'Anarasan K', NULL, NULL, NULL, NULL, '2025-04-08 04:58:19'),
(5, 'dyg', NULL, NULL, NULL, NULL, '2025-04-08 05:00:56'),
(6, 'Anarasan K', NULL, NULL, NULL, 'chthram', '2025-04-08 05:01:26'),
(7, 'eofihref', '323533442', NULL, NULL, 'tirchy', '2025-04-08 05:02:57'),
(8, 'Anbu1', '8682832943', NULL, NULL, 'chennai', '2025-04-08 07:32:48'),
(9, 'Anbarasan k', '8682832943', NULL, NULL, 'pudukkottai', '2025-04-09 10:52:40'),
(10, 'Arun ', '32423434', NULL, NULL, 'tirchy', '2025-04-09 14:12:36'),
(11, 'Anbu', '8682832943', NULL, 'key', 'pdk', '2025-04-11 11:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);