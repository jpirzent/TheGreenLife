-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 06, 2018 at 10:05 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(256) NOT NULL,
  `pr_description` varchar(256) NOT NULL,
  `pr_price` varchar(256) NOT NULL,
  `pr_picture` varchar(256) NOT NULL,
  `pr_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `pr_description`, `pr_price`, `pr_picture`, `pr_type`) VALUES
(0, 'Sour Diesel', 'Sour Diesel, sometimes called Sour D, is an invigorating sativa-dominant strain named after its pungent, diesel-like aroma. This fast-acting strain delivers energizing, dreamy cerebral effects that have pushed Sour Diesel to its legendary status.', 'R91,52 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/sour-diesel.jpg', 'sativa'),
(1, 'Lemon Haze', 'With an intense flavor of sweet lemons slices, Lemon Haze is one of the most popular sativa strains. It\'s known for its potency, ability to help you mellow out, and for producing flowers with a yellow hue.', 'R192,09 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Super-Lemon-Haze-drgreenseeds.jpg', 'sativa'),
(2, 'Green Crack', 'One of the most popular strains of cannabis sativa is Green Crack which is well-loved for its ability to help sharpen focus, energize the mind, and banish fatigue. Green Crack, sometimes called Green Cush, has a tropical aroma and tangy flavor.', 'R156,92 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Screen-Shot-2016-05-11-at-7.52.23-AM.png', 'sativa'),
(3, 'Strawberry Cough', 'Strawberry Cough is a sativa-dominant strain that\'s wildly popular and sought out for its ability to help you improve your mood and manage stress. True to its name, this strain smells and tastes of strawberries.', 'R122,67 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/strawberry-kush-600x450.jpg', 'sativa'),
(4, 'Swazi Gold', 'Swazi Gold is a sativa landrace strain from Africa known for its sweet, citrus flavor and fast-acting effects. Designed to withstand the harsh conditions of its mountainous homeland, Swazi Gold grows with ease and resilience', 'R50 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/Swazi-Gold-Marijuana-Strain.jpg', 'sativa'),
(5, 'Granddaddy Purple', 'For a dreamy buzz that will leave you in a pain-free state of euphoria, look no further than Granddaddy Purple!', 'R369,40 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/lf_kens_gdp_6201-773x900.jpg', 'indica'),
(6, 'Northern Lights', 'Northern Lights will leave you in a dreamy euphoria that works throughout your mind and body for a blissfully lazy feeling that is likely to last sometime.', 'R118,21 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/northern-lights-fem-marijuana-seeds-1_large.jpg', 'indica'),
(7, 'Girl Scout Cookies', 'Famous for its sweet and earthy aroma and flavour.', 'R147,76 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/cookie_9093.jpg', 'indica'),
(8, 'Afghani', 'Named after its geographic origin, Afghani grows in the Hindu Kush mountains, which is where cannabis was first discovered over 1000 years ago! With its earthy aroma and sweet flavor, Afghani is one of the most popular marijuana strains available!', 'R465,44 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/afghan-kush-cannabis.jpg', 'indica'),
(9, 'G-13', 'Boasting a strong aroma of oranges, this strain is perfect for anybody looking to benefit from multiple medicinal benefits.', 'R280,74 per gram', 'https://raw.githubusercontent.com/jpirzent/img/master/g13-haze_2458_1_.jpg', 'indica');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(8, 'James', 'Pirzenthal', 'pirzenthaljames@gmail.com', 'jpirzent', '$2y$10$fMrRj/sgsEkkZ/z0dlO1W.yuaj9pvmTk/isNMvqCnP0/iYRZpqFO6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
