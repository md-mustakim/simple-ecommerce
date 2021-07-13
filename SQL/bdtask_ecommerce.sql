-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 09:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtask_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `details`, `price`, `image`, `time`) VALUES
(16, 'Electronics', 'Red Winter Pot - Winter Warm Black Puffer Jacket Red Sleeveless Coat Women Men\'s Vest Bomber Cotton Jacket', 'Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique…', '20000', 'a252630e83bb3d5c7dc93c6f94b946c8.jpg', '2021-07-12 05:03:28'),
(17, 'Electronics', 'IOT Box -Safety 1st Outlet Cover with Cord Shortener, 3 Pack', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec…', '300', 'a5f0b094c9df81248e1830fa8ec30243.jpg', '2021-07-12 06:16:45'),
(18, 'Electronics', 'DSLR GPS Tracker - GPS Tracker Car Magnetic Mini GPS Real Time Tracking Locator Tracking Device kids Pets Vehicle Tracking Locator Tracking Device', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec…', '900', '3d63c54f396735ad04f89941f8297ee1.png', '2021-07-12 06:17:32'),
(19, 'Electronics', 'Ip Camera - provide SDK 10MP HD Industrial Rolling Shutter CMOS Sensor GigE color Camera For Visual inspection', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec…', '80', '2afc319102030756f14919a0c180c88b.jpg', '2021-07-12 06:18:28'),
(20, 'Electronics', 'VR Gear - Samsung Earphones EHS64 Headsets With Built-in Microphone 3.5mm In-Ear Wired Earphone For Smartphones with free gift', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. PhaselluLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet magna erat. Nullam at ex ex. Donec convallis pulvinar lorem, finibus rutrum ante tincidunt nec. Phasellus quam ex, venenatis nec…s quam ex, venenatis nec…', '150', '1c6e8bcc8a75b92a4aee73431677a681.png', '2021-07-12 06:19:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
