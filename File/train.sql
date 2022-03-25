-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 04:04 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Destination_ID` int(11) NOT NULL,
  `Station_ID` int(11) NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Time` time NOT NULL,
  `Distance` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Destination_ID`, `Station_ID`, `Train_ID`, `Time`, `Distance`, `Cost`) VALUES
(1, 1, 3, '46:16:24', 500, 900),
(2, 3, 4, '51:11:15', 800, 700),
(3, 4, 4, '21:21:18', 250, 400);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Ticket_ID` int(11) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Ticket_ID`, `Amount`, `Payment`) VALUES
(1, 1, '800'),
(2, 1, '1500'),
(3, 3, '3200'),
(4, 2, '900'),
(5, 1, '400'),
(6, 1, '250');

-- --------------------------------------------------------

--
-- Table structure for table `seat_status`
--

CREATE TABLE `seat_status` (
  `Train_ID` int(11) NOT NULL,
  `Available_Seat` varchar(30) NOT NULL,
  `Wait_Seat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_status`
--

INSERT INTO `seat_status` (`Train_ID`, `Available_Seat`, `Wait_Seat`) VALUES
(1, 'Pending', 'Booked'),
(2, 'Paid', 'Booked'),
(3, 'Paid', 'Booked'),
(4, 'Pending', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `Station_ID` int(11) NOT NULL,
  `Station_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`Station_ID`, `Station_Name`) VALUES
(1, 'Bangkok'),
(2, 'Chiangmai'),
(3, 'Khon Kaen');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Ticket_ID` int(11) NOT NULL,
  `Train_ID` varchar(30) NOT NULL,
  `Train_Type` varchar(30) NOT NULL,
  `Seat_No` varchar(10) NOT NULL,
  `Customer_Name` varchar(30) NOT NULL,
  `Customer_Date` date NOT NULL,
  `Departure_Date` date NOT NULL,
  `Departure_Time` time NOT NULL,
  `Arrival_Time` time NOT NULL,
  `Departure_Station` varchar(30) NOT NULL,
  `Destination_Station` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`Ticket_ID`, `Train_ID`, `Train_Type`, `Seat_No`, `Customer_Name`, `Customer_Date`, `Departure_Date`, `Departure_Time`, `Arrival_Time`, `Departure_Station`, `Destination_Station`) VALUES
(1, '4', 'Sleep', 'S02', 'Haley Kaison', '2018-10-24', '2018-11-01', '16:17:13', '25:10:00', 'Chiang Mai', 'Roi Et'),
(2, '2', 'Sit', 'S54', 'Anderson Payne', '2018-10-25', '2018-10-30', '20:00:00', '23:00:00', 'Korat', 'Mae Hong Son');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `Timetable_ID` int(11) NOT NULL,
  `Train_ID` int(11) NOT NULL,
  `Departure_Time` time NOT NULL,
  `Arrival_Time` time NOT NULL,
  `Departure_Station` varchar(30) NOT NULL,
  `Destination_Station` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`Timetable_ID`, `Train_ID`, `Departure_Time`, `Arrival_Time`, `Departure_Station`, `Destination_Station`) VALUES
(1, 4, '13:00:00', '22:00:00', 'Chiang Mai', 'Roi Et'),
(2, 1, '07:00:00', '08:00:00', 'Chiang Rai', 'Ubon Ratchathani');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `Train_ID` int(11) NOT NULL,
  `Train_Type` varchar(30) NOT NULL,
  `Seat_No` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Train_ID`, `Train_Type`, `Seat_No`) VALUES
(1, 'Sleep', 'S02'),
(2, 'Sit', 'S03'),
(3, 'Sleep', 'S16'),
(4, 'Sleep', 'S34'),
(5, 'Sit', 'S18'),
(6, 'Sleep', 'S35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Birth_Date` date NOT NULL,
  `National_ID` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `First_Name`, `Last_Name`, `Address`, `Tel`, `Email`, `Gender`, `Birth_Date`, `National_ID`, `Password`) VALUES
(1, 'Derren', 'Mcloughlin', 'Street Address\r\n62 Hillcrest Lane\r\nCity Anaheim State CA State Full California Zipcode 92805\r\n', '951-256-9718', 'der_jj@gmail.com', 'Male', '1996-02-13', '4853266987528', 'der0021'),
(2, 'Carolyn', 'McCloskey', 'Street Address\r\n1608 Armbrester Drive\r\nCity Irvine State CA State Full California Zipcode 92664', '715-868-4723', 'loliye@gmail.com', 'Famale', '1977-10-27', '1154879326587', 'Cizzer87');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Destination_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Ticket_ID`);

--
-- Indexes for table `seat_status`
--
ALTER TABLE `seat_status`
  ADD PRIMARY KEY (`Train_ID`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`Station_ID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`Ticket_ID`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`Timetable_ID`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`Train_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `Destination_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Ticket_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat_status`
--
ALTER TABLE `seat_status`
  MODIFY `Train_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `Station_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `Ticket_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `Timetable_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `Train_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
