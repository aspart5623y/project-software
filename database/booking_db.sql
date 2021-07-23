-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 02:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appt_slip`
--

CREATE TABLE `appt_slip` (
  `id` int(100) NOT NULL,
  `slip_id` varchar(255) NOT NULL,
  `slip_time` varchar(255) NOT NULL,
  `slip_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appt_slip`
--

INSERT INTO `appt_slip` (`id`, `slip_id`, `slip_time`, `slip_date`, `status`) VALUES
(22, 'fpno/slip/1207211626076854', '08:00am', '2021-07-19', 'unavailable'),
(23, 'fpno/slip/1207211626076940', '09:00am', '2021-07-19', 'unavailable'),
(24, 'fpno/slip/1907211626689141', '09:00am', '2021-07-26', 'unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `appt_table`
--

CREATE TABLE `appt_table` (
  `id` int(11) NOT NULL,
  `appt_id` varchar(255) NOT NULL,
  `senders_id` varchar(255) NOT NULL,
  `appt_title` varchar(255) NOT NULL,
  `appt_desc` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `appt_status` varchar(255) NOT NULL DEFAULT 'pending',
  `appt_msg` varchar(1000) NOT NULL,
  `booking_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appt_table`
--

INSERT INTO `appt_table` (`id`, `appt_id`, `senders_id`, `appt_title`, `appt_desc`, `slot`, `appt_status`, `appt_msg`, `booking_date`) VALUES
(48, 'fpn/appt-id/2021-07-121626076867', 'fpno/cs/hod/1506211623738594', 'ss', 'sss', 'fpno/slip/1207211626076854', 'rejected', '', '2021-07-12, 10:07am'),
(49, 'fpn/appt-id/2021-07-121626076950', 'fpno/cs/hod/1506211623738594', 'backwards', 'eee', 'fpno/slip/1207211626076940', 'confirmed', '', '2021-07-12, 10:07am'),
(50, 'fpn/appt-id/2021-07-191626689171', 'fpno/cs/hod/1506211623738594', 'My first appointment with the HOD', 'This is my first appointe=ment ma', 'fpno/slip/1907211626689141', 'confirmed', '', '2021-07-19, 12:07pm');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(255) NOT NULL,
  `user_id_num` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `user_id_num`, `full_name`, `email`, `phone`, `image`, `user_type`, `password`) VALUES
(27, 'fpno/cs/hod/1506211623738405', 'Williams Williams', 'willemzy2002@gmail.com', '07062465404', '', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(28, 'fpno/cs/hod/1506211623738594', 'Victor Abraham', 'victor@gmail.com', '07062465404', '', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, 'fpno/cs/hod/2206211624366899', 'Ebube Ricky', 'ebube@gmail.com', '07062465404', '', 'user', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appt_slip`
--
ALTER TABLE `appt_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appt_table`
--
ALTER TABLE `appt_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appt_slip`
--
ALTER TABLE `appt_slip`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `appt_table`
--
ALTER TABLE `appt_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
