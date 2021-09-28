-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 10:39 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'Daily Buses'),
(4, 'Weekly Buses'),
(5, 'Night Buses'),
(6, 'Day buses');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `start` varchar(255) NOT NULL,
  `stopage` varchar(255) NOT NULL,
  `category` int NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`start`, `stopage`, `category`, `cost`) VALUES
('Kanpur', 'Unnao', 5, 100),
('Unnao', 'Lucknow', 5, 152);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `bus_id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_age` int NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `bus_id`, `user_id`, `user_name`, `user_age`, `source`, `destination`, `date`, `cost`) VALUES
(5, 2, 2, 'dheeraj', 20, 'kanpur', 'lucknow', '2018-03-29', 0),
(6, 2, 2, 'manish', 52, 'kanpur', 'lucknow', '2018-03-29', 0),
(7, 2, 2, 'Pratyush', 10, 'kanpur', 'Lucknow', '2018-04-14', 0),
(10, 2, 2, 'Pratyush', 10, 'Kanpur', 'Lucknow', '2018-04-14', 0),
(11, 4, 3, 'Vikas', 52, 'Chennai', 'Chittor', '2018-04-17', 0),
(14, 4, 3, 'Hemant', 45, 'Chennai', 'Chittor', '2018-04-17', 0),
(15, 6, 2, 'Ankit', 45, 'Agra', 'Mathura', '2018-04-17', 0),
(16, 6, 2, 'Pratyush', 12, 'Agra', 'Mathura', '2018-04-17', 0),
(17, 3, 2, 'Prateek', 20, 'Delhi', 'Surat', '2018-04-17', 0),
(21, 7, 3, 'Prateek', 20, 'Tundla', 'Allahabad', '2018-04-17', 0),
(26, 2, 31, 'user', 20, 'kathmandu', 'pokhara', '2021-09-15', 0),
(31, 2, 31, 'user', 70, 'kathmandu', 'pokhara', '2021-09-26', 0),
(32, 2, 31, 'user', 70, 'kathmandu', 'pokhara', '2021-09-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int NOT NULL,
  `post_category_id` int NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_source` varchar(255) NOT NULL,
  `post_destination` varchar(255) NOT NULL,
  `post_via` varchar(255) NOT NULL,
  `post_via_time` varchar(255) NOT NULL,
  `post_query_count` int NOT NULL,
  `max_seats` int NOT NULL,
  `available_seats` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_source`, `post_destination`, `post_via`, `post_via_time`, `post_query_count`, `max_seats`, `available_seats`) VALUES
(12, 3, 'kathmandu to pokhara', 'shsihir', '2021-09-27', 'bus4.jpg', 'dssdfsdfsdfsdf', 'kathmandu', 'pokhara', 'mugling', '6:00 8:00 11:00', 1, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int NOT NULL,
  `query_bus_id` int NOT NULL,
  `query_user` varchar(255) NOT NULL,
  `query_email` varchar(255) NOT NULL,
  `query_date` date NOT NULL,
  `query_content` text NOT NULL,
  `query_replied` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `query_bus_id`, `query_user`, `query_email`, `query_date`, `query_content`, `query_replied`) VALUES
(6, 2, 'Vikas', 'iit2016058@iiita.ac.in', '2018-03-17', 'Great Services', 'no'),
(7, 3, 'Prateek', 'saraswat@gmail.com', '2018-03-19', 'Great Services', 'no'),
(8, 4, 'Saraswat', 'prateek@gmail.com', '2018-03-23', 'Good', 'no'),
(9, 2, 'Parteek', 'saraswat.prateek100@gmail.com', '2018-03-17', 'Good', 'no'),
(10, 2, 'vikas', 'iit2016058@iiita.ac.in', '2018-03-18', 'Keep Going', 'no'),
(11, 3, 'Prateek', 'iit2016058@iiita.ac.in', '2018-03-18', 'Good', 'no'),
(13, 4, '(unknown)', 'iit2016054@iiita.ac.in', '2018-03-18', 'Hello', 'no'),
(14, 2, 'Amit', 'shishir.bhandariii@gmail.com', '2021-09-22', 'ewtrwetwe', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `bus_id` int NOT NULL,
  `max_seats` int NOT NULL,
  `available_seats` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phoneno`, `user_image`, `user_role`) VALUES
(2, 'prateek', 'saraswat', 'prateek', 'saraswat', 'saraswat.prateek100@gmail.com', '9457507662', 'user_default.jpg', 'admin'),
(4, 'manish', '1234567', 'manish', 'ranjan', 'iit2016059@iiita.ac.in', '6475896232', '', 'subscriber'),
(5, 'amit', 'amit', 'Amit', 'Gomi', 'lit2016011@iiila.ac.in', '9784512659', 'user_default.jpg', 'admin'),
(28, 'Hemu', 'heamnt', 'Hemant', 'Singh', 'iit2016070@iiita.ac.in', '9456213654', 'user_default.jpg', 'subscriber'),
(31, 'user', 'user', 'shsihir', 'bhandari', 'shishir.bhandariii@gmail.com', '9861924503', '', 'subscriber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
