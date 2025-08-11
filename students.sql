-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2025 at 12:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(255) NOT NULL,
  `rollno` int(11) NOT NULL,
  `marathi` int(3) NOT NULL,
  `hindi` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `maths` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `social_science` int(3) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rollno`, `marathi`, `hindi`, `english`, `maths`, `science`, `social_science`, `percentage`) VALUES
('Aarav Sharma', 2501, 78, 88, 65, 90, 76, 82, 79.8333),
('Ishaan Patel', 2502, 55, 66, 70, 80, 75, 68, 69),
('Rohan Mehta', 2503, 90, 80, 85, 95, 88, 91, 88.1667),
('Ananya Gupta', 2504, 60, 58, 62, 70, 65, 64, 63.1667),
('Priya Nair', 2505, 88, 92, 76, 85, 90, 89, 86.6667),
('Karan Singh', 2506, 45, 60, 55, 50, 48, 52, 51.6667),
('Neha Reddy', 2507, 68, 80, 75, 72, 70, 74, 73.1667),
('Siddharth Das', 2508, 95, 88, 92, 94, 90, 96, 92.5),
('Meera Iyer', 2509, 50, 55, 60, 65, 58, 62, 58.3333),
('Arjun Verma', 2510, 85, 78, 80, 82, 88, 84, 82.8333),
('Simran Kaur', 2511, 66, 72, 70, 74, 68, 69, 69.8333),
('Rahul Joshi', 2512, 91, 87, 85, 89, 90, 93, 89.1667),
('Tanvi Bansal', 2513, 58, 65, 62, 60, 55, 59, 59.8333),
('Vikram Malhotra', 2514, 77, 80, 79, 75, 78, 81, 78.3333),
('Sneha Kulkarni', 2515, 88, 94, 92, 90, 93, 95, 92),
('Manish Goyal', 2516, 45, 48, 50, 52, 55, 49, 49.8333),
('Aditi Saxena', 2517, 70, 75, 72, 78, 74, 77, 74.3333),
('Devansh Kapoor', 2518, 94, 98, 96, 92, 95, 97, 95.3333),
('Ritika Chawla', 2519, 60, 65, 62, 67, 63, 66, 63.8333),
('Aditya Menon', 2520, 85, 82, 88, 90, 87, 89, 86.8333),
('Kavya Sinha', 2521, 50, 60, 55, 65, 58, 61, 58.1667),
('Yash Thakur', 2522, 78, 82, 80, 76, 79, 81, 79.3333),
('Pooja Mishra', 2523, 92, 96, 94, 90, 93, 95, 93.3333),
('Varun Chauhan', 2524, 55, 60, 58, 62, 59, 57, 58.5),
('Shreya Pandey', 2525, 88, 90, 86, 85, 89, 87, 87.5),
('Rahul Deshmukh', 2526, 25, 28, 30, 20, 18, 22, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `rollno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2527;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
