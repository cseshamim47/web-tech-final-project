-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 09:08 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blockchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `publicKey` varchar(100) NOT NULL,
  `privateKey` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `profilePicture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `email`, `gender`, `dob`, `publicKey`, `privateKey`, `balance`, `profilePicture`) VALUES
('Ahmed Md Shamim ', 'shamim', '123', 'darrkyshanto@gmail.com', 'Male', '1998-04-26', 'cseshamim478123', 'cseshamim478000', '0', 'Cp-04.jpg'),
('Shakil Ahmed', 'shakil', '123asf.', 'shakil@123gmail.com', 'Male', '1998-04-12', 'shakil123', 'shakil000', '100011', 'profile.jpg'),
('Jessica Jessy', 'jessy', 'asdf', 'jessy@yahoo.com', 'Female', '1998-04-20', 'jessy123', 'jessy000', '1000', 'profile.jpg'),
('Messu', 'jesasdfsy', 'aa', 'asdf@yahoo.com', 'Other', '1998-04-20', 'jesasdfsy123', 'jesasdfsy000', '1000', 'profile.jpg'),
('asdfasdf', 'jeasdfsasdfsy', 'zz', 'aasdfsdf@yahoo.com', 'Other', '1998-04-20', 'jeasdfsasdfsy123', 'jeasdfsasdfsy000', '1000', 'profile.jpg'),
('asdasdffasdf', 'jeadsfasdfsasdfsy', 'pp', 'aasdasdfsdf@yahoo.com', 'Male', '1998-04-20', 'jeadsfasdfsasdfsy123', 'jeadsfasdfsasdfsy000', '1000', 'profile.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
