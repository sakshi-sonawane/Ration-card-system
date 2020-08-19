-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 02:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rationcard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Name` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `contact_number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Name`, `admin_id`, `admin_email`, `admin_password`, `contact_number`) VALUES
('Admin', 1, 'admin@gmail.com', 'admin123', 875709876);

-- --------------------------------------------------------

--
-- Table structure for table `assign_to_shop`
--

CREATE TABLE `assign_to_shop` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `avialable_quantity_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assign_to_user`
--

CREATE TABLE `assign_to_user` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_registeration`
--

CREATE TABLE `customer_registeration` (
  `customer_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `c_mobile_no` bigint(20) NOT NULL,
  `ration_number` double NOT NULL,
  `aadhar_number` bigint(20) NOT NULL,
  `c_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_registeration`
--

INSERT INTO `customer_registeration` (`customer_id`, `c_name`, `c_email`, `c_password`, `c_mobile_no`, `ration_number`, `aadhar_number`, `c_city`) VALUES
(35, 'Santosh  Patil', 'santoshpatil@gmail.com', 'Santosh@80', 8087761543, 987809765432, 690867894523, 'Pune'),
(36, 'Sandeep Pawar', 'sandeeppawar@gmail.com', 'Sandeep@97', 9789675876, 980978675675, 590978965456, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_img` text NOT NULL,
  `product_mrp` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `permonth_allocation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `product_img`, `product_mrp`, `product_quantity`, `permonth_allocation`) VALUES
(11, 'Wheat', 'wheat1.jpg', 10, 500, ''),
(12, 'Sugar', 'Sugar.jpg', 10, 400, ''),
(13, 'Rice', 'ricegrain.jpg', 12, 450, ''),
(15, 'Kerosene', 'kerosene.jpg', 10, 500, '');

-- --------------------------------------------------------

--
-- Table structure for table `shop_registeration`
--

CREATE TABLE `shop_registeration` (
  `shop_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_mobile_no` bigint(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `aadhar_number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_registeration`
--

INSERT INTO `shop_registeration` (`shop_id`, `s_name`, `s_email`, `s_password`, `s_mobile_no`, `city`, `address`, `aadhar_number`) VALUES
(17, 'Prakash Kale', 'prakashkale@gmail.com', 'Prakash@98', 9807654675, 'Pune', 'Pune', 789067545678),
(19, 'Suresh Mane', 'sureshmanegmail.com', 'Suresh@76', 7689120567, 'Pune', 'pune', 839856765432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assign_to_shop`
--
ALTER TABLE `assign_to_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_to_user`
--
ALTER TABLE `assign_to_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_registeration`
--
ALTER TABLE `customer_registeration`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop_registeration`
--
ALTER TABLE `shop_registeration`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign_to_shop`
--
ALTER TABLE `assign_to_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `assign_to_user`
--
ALTER TABLE `assign_to_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer_registeration`
--
ALTER TABLE `customer_registeration`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `shop_registeration`
--
ALTER TABLE `shop_registeration`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
