-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 11:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `name`, `email`, `mobile`, `password`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', '01956038517', '123', 'assets/img/user/tushar.jpg'),
(2, 'riaz', 'riaz@gmail.com', '01869949823', '123123', 'assets/img/user/baby.JPG'),
(3, 'tuser', 'admin@gmail.com', '01212312', '121212', 'assets/img/user/e.JPG'),
(4, 'hamd', 'hamad@gamil.com', '64646', '1221', 'assets/img/user/baby.JPG'),
(5, 'hashem', 'hashem@gmail.com', '01303064689', '321321', 'assets/img/user/baby.JPG'),
(6, 'masum', 'masum@gmail.com', '6161616161', '321321', 'assets/img/user/Logo_of_DC.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_req`
--

CREATE TABLE `appointment_req` (
  `dmail` varchar(50) NOT NULL,
  `umail` varchar(50) NOT NULL,
  `text` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_req`
--

INSERT INTO `appointment_req` (`dmail`, `umail`, `text`, `date`) VALUES
('polash@gmail.com', 'nadim@gmail.com', 'asdfasdfasdf', ''),
('polash@gmail.com', 'nadim@gmail.com', 'asdfasdfasdf', ''),
('polash@gmail.com', 'nadim@gmail.com', 'asdfasdfasdf', ''),
('rashed@gmail.com', 'nadim@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/11'),
('raihan@gmail.com', 'tuser@gamil.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/11'),
('raihan@gmail.com', 'khalid@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/11'),
('polash@gmail.com', 'tuser@gamil.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/12'),
('polash@gmail.com', 'nadim@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/12'),
('raihan@gmail.com', 'tuser@gamil.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/16'),
('polash@gmail.com', 'nadim@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/21'),
('polash@gmail.com', 'duli@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/21'),
('polash@gmail.com', 'nadim@gmail.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/21'),
('polash@gmail.com', 'tuser@gamil.com', 'hello sir, i am suffering with fiber form last two days.', '2021/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `apporved_appointment`
--

CREATE TABLE `apporved_appointment` (
  `dmail` varchar(50) NOT NULL,
  `umail` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `text` varchar(200) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apporved_appointment`
--

INSERT INTO `apporved_appointment` (`dmail`, `umail`, `date`, `text`, `time`) VALUES
('0', '0', '2021-04-12', 'please be prepared in that time..', '23:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE `doctor_reg` (
  `title` varchar(25) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `bmdc` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`title`, `specialist`, `birthdate`, `nid`, `bmdc`, `mobile`, `email`, `password`, `address`, `gender`, `image`, `name`) VALUES
('dr', 'Allergists', '1998-06-06', '61919194', '91919195', 161651615, 'polash@gmail.com', '1231212', 'feni', 'Male', 'assets/img/user/43593.jpg', 'polash'),
('Prof', 'Neurologists ', '1996-06-06', '41651616', '46416616', 1834606008, 'raihan@gmail.com', '1112222', 'feni', 'Male', 'assets/img/user/img.png', 'raihan');

-- --------------------------------------------------------

--
-- Table structure for table `doucument`
--

CREATE TABLE `doucument` (
  `id` int(5) NOT NULL,
  `doc_type` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doucument`
--

INSERT INTO `doucument` (`id`, `doc_type`, `date`, `email`, `image`) VALUES
(0, 'report', '2021-05-06', 'nadim@gmail.com', 'assets/img/user/2.JPG'),
(0, 'report', '2021-05-06', 'nadim@gmail.com', 'assets/img/user/e.JPG'),
(0, 'Report', '2021-03-31', 'nadim@gmail.com', 'assets/img/user/nobel.jpg'),
(0, 'Report', '2021-03-31', 'nadim@gmail.com', 'assets/img/user/nobel.jpg'),
(0, 'report', '2021-03-12', 'najip@gmail.com', 'assets/img/user/2.jpg'),
(0, 'Report', '2021-03-31', 'tuser@gamil.com', 'assets/img/user/cb.png'),
(1, 'report', '2021-05-06', 'nadim@gmail.com	', ''),
(1, 'report', '2021-05-06', 'nadim@gmail.com	', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `user`) VALUES
('hashem@gmail.com', '321321', 'user'),
('rashed@gmail.com', '121221', 'Doctor'),
('najip@gmail.com', '010101', 'user'),
('masum@gmail.com', '321321', 'admin'),
('mahim@gamil.com', '020202', 'user'),
('nasir@gmail.com', '112233', 'user'),
('nadim@gmail.com', '2211', 'user'),
('khalid@gmail.com', '121212', 'user'),
('tuser@gamil.com', '12312', 'user'),
('duli@gmail.com', '332211', 'user'),
('kasim@gmail.com', '1414', 'doctor'),
('polash@gmail.com', '1231212', 'doctor'),
('raihan@gmail.com', '1112222', 'doctor'),
('khalid@gmail.com', '0606', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(30) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `image`, `address`, `age`, `gender`) VALUES
(1, 'Tushar', 'tushar@gmail.com', '01956038514', '1253', 'assets/img/user/tushar.jpg', '', 0, ''),
(3, 'tomal', 'tomal@gmail.com', '01956038514', '123', 'assets/img/user/tushar.jpg', '', 0, ''),
(4, 'Dua', 'dua@gmail.com', '01546558868', '1253', 'assets/img/user/dua.jpg', '', 0, ''),
(9, 'user', 'user@gmail.com', '01956038514', '123', 'assets/img/user/tushar.jpg', '', 0, ''),
(10, 'najip', 'najip@gmail.com', '01303064589', '010101', 'assets/img/user/profile.png', '', 0, ''),
(11, 'mahim', 'mahim@gamil.com', '01303064869', '020202', 'assets/img/user/profile.png', '', 0, ''),
(12, 'nasir', '11', '01893346823', '112233', 'assets/img/user/profile.png', '', 0, ''),
(14, 'khalid', 'khalid@gmail.com', '01030232', '121212', 'assets/img/user/CORE.JPG', '', 0, ''),
(15, 'Tuser', 'tuser@gamil.com', '019560385', '12312', 'assets/img/user/lagji.jpg', '', 0, ''),
(16, 'duli', 'duli@gmail.com', '01627373584', '332211', 'assets/img/user/shakilk2.jpg', '', 0, ''),
(17, 'khalid', 'khalid@gmail.com', '061616616', '0606', 'assets/img/user/43593.jpg', 'Nowakhali', 1996, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_helth_status`
--

CREATE TABLE `user_helth_status` (
  `email` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `temperature` int(3) NOT NULL,
  `pulse` int(4) NOT NULL,
  `suger` int(4) NOT NULL,
  `systolic` int(3) NOT NULL,
  `diastolic` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_helth_status`
--

INSERT INTO `user_helth_status` (`email`, `date`, `temperature`, `pulse`, `suger`, `systolic`, `diastolic`) VALUES
('nadim@gmail.com', '2021-04-03', 102, 90, 15, 132, 90),
('tuser@gamil.com', '2021-06-04', 100, 96, 10, 140, 85),
('khalid@gmail.com', '2021-06-04', 97, 100, 12, 180, 70),
('duli@gmail.com', '2021-07-04', 97, 128, 5, 110, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
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
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
