-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 02:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airliness`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `aid` varchar(12) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL,
  `aphone` varchar(100) NOT NULL,
  `acity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `aid`, `aname`, `aemail`, `apassword`, `aphone`, `acity`) VALUES
(1, 'PEQ185246957', 'Gandhi', 'gandhi@gmail.com', 'gandhi', '7865376358', 'Delhi'),
(2, 'PEQ182567957', 'Arunodhaya', 'arunodhaya06@gmail.com', 'arunodhaya', '9898988909', 'Ballari'),
(3, 'DRE985446957', 'Kamal', 'kamal12@gmail.com', 'asia47', '080616156262', 'Bengaluru'),
(4, 'DRE185244893', 'Binod', 'binod474@gmail.com', 'apollo247', '04428293333', 'Chennai'),
(5, 'FGH185246415', 'Dev', 'dev123@gmail.com', 'amaravathi', '09441432567', 'Amaravathi'),
(8, 'ZES123456789', 'ASRS', 'bcd@gmail.com', 'bcde1234', '8945612307', 'NYC');

-- --------------------------------------------------------

--
-- Table structure for table `flight_booking`
--

CREATE TABLE `flight_booking` (
  `flight_booking_id` int(100) NOT NULL,
  `flight_id` int(100) NOT NULL,
  `seats` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight_booking`
--

INSERT INTO `flight_booking` (`flight_booking_id`, `flight_id`, `seats`) VALUES
(70, 108, '9A,2A');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `p_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `p_pnr` varchar(25) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_age` varchar(3) NOT NULL,
  `p_sex` varchar(10) NOT NULL,
  `p_fno` varchar(10) NOT NULL,
  `p_from` varchar(10) NOT NULL,
  `p_to` varchar(10) NOT NULL,
  `p_dedate` varchar(20) NOT NULL,
  `p_ardate` varchar(20) NOT NULL,
  `p_detime` varchar(20) NOT NULL,
  `p_artime` varchar(20) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `p_class` varchar(10) NOT NULL,
  `p_passtype` varchar(1) NOT NULL,
  `p_fid` varchar(5) NOT NULL,
  `p_seats` mediumtext NOT NULL,
  `p_extra` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`p_id`, `uid`, `p_pnr`, `p_name`, `p_age`, `p_sex`, `p_fno`, `p_from`, `p_to`, `p_dedate`, `p_ardate`, `p_detime`, `p_artime`, `p_status`, `p_class`, `p_passtype`, `p_fid`, `p_seats`, `p_extra`) VALUES
(1, 1, '15332114092015', 'reza', '55', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Booked', 'Business', 'A', '108', '9A', 'Rs.2000'),
(2, 2, '13691004112019', 'Revanth', '43', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Economy', 'A', '108', '', NULL),
(3, 3, '15332368092015', 'Charan', '34', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Business', 'A', '108', '', NULL),
(4, 4, '13485004112258', 'Kiran', '33', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Economy', 'A', '108', '', NULL),
(5, 5, '15332114752015', 'Ritu', '55', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Business', 'A', '108', '', NULL),
(6, 1, '13485048512019', 'Varun', '27', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Booked', 'Economy', 'A', '108', '2A', 'Rs.1500'),
(7, 2, '15334894092015', 'Naina', '55', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Business', 'A', '108', '', NULL),
(8, 3, '13481584112019', 'Sharma', '23', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Economy', 'A', '108', '', NULL),
(9, 4, '15331474092015', 'Akshara', '33', 'F', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Business', 'A', '108', '', NULL),
(10, 5, '13436904112019', 'Nithwik', '23', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Economy', 'A', '108', '', NULL),
(11, 1, '15312514092015', 'Rithish', '21', 'M', 'S3-MINI', 'Delhi', 'Chennai', '10-05-2021', '10-05-2021', '05:00', '09:00', 'Pending', 'Business', 'A', '108', '', NULL),
(12, 2, '13401404112019', 'Krishna', '23', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(13, 3, '15332101892015', 'Rina', '25', 'F', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Business', 'A', '106', '', NULL),
(14, 4, '13485001212019', 'Yogesh', '23', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(15, 5, '15332146992015', 'Anjali', '22', 'F', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Business', 'A', '106', '', NULL),
(16, 1, '13485017812019', 'Akash', '23', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(17, 2, '15332117492015', 'Priya', '23', 'F', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Business', 'A', '106', '', NULL),
(18, 3, '13485253612019', 'Karthik', '23', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(19, 4, '15332117892015', 'Chandana', '22', 'F', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(20, 5, '13485013512019', 'Mahesh', '23', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL),
(21, 1, '15330014092015', 'Subash', '21', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Business', 'A', '106', '', NULL),
(22, 2, '13411104112019', 'Mounish', '29', 'M', '', 'Banglore', 'Delhi', '30-05-2021', '30-05-2021', '06:00', '09:00', 'Pending', 'Economy', 'A', '106', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `uphone` varchar(100) NOT NULL,
  `ucity` varchar(100) NOT NULL,
  `pdf_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `uemail`, `upassword`, `uphone`, `ucity`, `pdf_file`) VALUES
(1, 'test', 'test@gmail.com', 'test', '8875643456', 'lucknow', NULL),
(2, 'Chandana', 'xyz@gmail.com', 'xyz@47', '9902477355', 'Ballari', NULL),
(3, 'Rithish', 'abcd@gmail.com', 'rithish@123', '9380073433', 'Tirupathiii', 'Chapter_5_V6.01.pdf'),
(4, 'Akshay', 'klmn@gmail.com', 'akshay74', '8106298053', 'Hyderabad', NULL),
(5, 'Nandhini', 'nandhu@gmail.com', 'nandhu989', '9849492206', 'Bengaluru', NULL),
(6, 'nag', 'nag@gmail.com', 'nag0123', '8254963080', 'singapore', NULL),
(8, 'Rohith', 'abc@gmail.com', 'qwerty', '85462578925', 'kurnool', NULL),
(9, 'Rakshith', 'abcde@gmail.com', 'qwerty666', '98462578925', 'kurnool', NULL),
(10, 'rishith', 'naga@gmail.edu', '1234567', '8547521583', 'chdye', NULL),
(11, 'xyz', 'pqrs@gmail.com', 'pqrs1234', '9587462820', 'xyz', NULL),
(15, 'abcd', 'zyx@gmail.com', '123456', '8547521583', 'xyz', 'CV_2021-03-31-093537.pdf'),
(19, 'gxc yr', 'bgt@gmail.com', '25587432', '9587462820', 'gv yctf', 'localhost _ 127.0.0.1 _ airliness _ passenger_details _ phpMyAdmin 5.0.3.pdf'),
(22, 'ASRS', 'bcde@gmail.com', 'bcde1234', '8965412305', 'NYC', 'Marks_T2_23_3_2021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_bookings`
--

CREATE TABLE `user_bookings` (
  `ubid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `p_pnr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bookings`
--

INSERT INTO `user_bookings` (`ubid`, `uid`, `p_pnr`) VALUES
(10, 1, '13485017812019'),
(11, 1, '13485048512019'),
(12, 4, '15331474092015'),
(13, 4, '15332117892015'),
(14, 5, '13485013512019'),
(28, 2, '13691004112019'),
(29, 2, '15334894092015'),
(30, 5, '15332114752015'),
(36, 3, '15332101892015'),
(37, 3, '13481584112019'),
(38, 1, '15332114092015'),
(39, 3, '15332368092015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_booking`
--
ALTER TABLE `flight_booking`
  ADD PRIMARY KEY (`flight_booking_id`);

--
-- Indexes for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `passenger_details_ibfk_2` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bookings`
--
ALTER TABLE `user_bookings`
  ADD PRIMARY KEY (`ubid`),
  ADD KEY `user_bookings_ibfk_1` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flight_booking`
--
ALTER TABLE `flight_booking`
  MODIFY `flight_booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `passenger_details`
--
ALTER TABLE `passenger_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_bookings`
--
ALTER TABLE `user_bookings`
  MODIFY `ubid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD CONSTRAINT `passenger_details_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_bookings`
--
ALTER TABLE `user_bookings`
  ADD CONSTRAINT `user_bookings_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
