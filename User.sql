-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2017 at 01:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Demo_Invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fp_no` int(11) NOT NULL,
  `serial_no` int(200) NOT NULL,
  `function_date` varchar(100) NOT NULL,
  `function_name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `hall_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sessions` varchar(100) NOT NULL,
  `pax` varchar(100) NOT NULL,
  `rate_per_pax` varchar(100) NOT NULL,
  `ammount` varchar(100) NOT NULL,
  `guest_name` varchar(200) NOT NULL,
  `guest_phone_no` varchar(100) NOT NULL,
  `guest_email` varchar(200) NOT NULL,
  `guest_city` varchar(100) NOT NULL,
  `guest_company_name` varchar(100) NOT NULL,
  `guest_gst_no` varchar(100) NOT NULL,
  `guest_address` varchar(200) NOT NULL,
  `decoration_charge` int(200) NOT NULL,
  `tv_dvd_charge` int(200) NOT NULL,
  `computer_system` int(200) NOT NULL,
  `food_charges` int(200) NOT NULL,
  `beverage_charges` int(200) NOT NULL,
  `service_charges` int(200) NOT NULL,
  `cgst_charges` int(200) NOT NULL,
  `sound_sytem_charge` int(200) NOT NULL,
  `lcd_projector` int(200) NOT NULL,
  `screen` int(200) NOT NULL,
  `other_charges` int(200) NOT NULL,
  `advance_ammount` int(200) NOT NULL,
  `hall_charges` int(200) NOT NULL,
  `sgst_charges` int(200) NOT NULL,
  `grant_amount` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `email`, `password`, `fp_no`, `serial_no`, `function_date`, `function_name`, `start_time`, `end_time`, `payment_mode`, `hall_type`, `status`, `sessions`, `pax`, `rate_per_pax`, `ammount`, `guest_name`, `guest_phone_no`, `guest_email`, `guest_city`, `guest_company_name`, `guest_gst_no`, `guest_address`, `decoration_charge`, `tv_dvd_charge`, `computer_system`, `food_charges`, `beverage_charges`, `service_charges`, `cgst_charges`, `sound_sytem_charge`, `lcd_projector`, `screen`, `other_charges`, `advance_ammount`, `hall_charges`, `sgst_charges`, `grant_amount`) VALUES
(1, 'Rishikesh', 'kumarrishikesh12@gmail.com', '12345', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
