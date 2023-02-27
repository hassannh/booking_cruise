-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 03:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_cruise`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruise`
--

CREATE TABLE `cruise` (
  `ID_cruise` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ship` int(11) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `nights_number` int(255) NOT NULL,
  `start_port` varchar(255) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cruise`
--

INSERT INTO `cruise` (`ID_cruise`, `name`, `ship`, `price`, `picture`, `nights_number`, `start_port`, `start_date`) VALUES
(75, 'aurop_tour', 1, 1277, 'OIP.jpeg', 2, 'marsaille-france', '2023-02-01'),
(78, 'nourth_korea', 1, 4000, 'OIP (4).jpeg', 12, 'tanger-morroco', '2023-02-01'),
(79, 'huawie', 2, 233, 'OIP (5).jpeg', 2, 'tanger-morroco', '2023-02-01'),
(80, 'spain_to_morroco', 3, 600, 'OIP (7).jpeg', 2, 'madrid-spain', '2023-02-01'),
(81, 'jhgfds', 1, 5432, 'OIP (6).jpeg', 3, 'madrid-spain', '2023-02-09'),
(82, 'rabat', 1, 467, 'download.jpeg', 2, 'madrid-spain', '2023-02-09'),
(83, 'kobaa', 1, 567, 'download.jpeg', 7, 'madrid-spain', '2023-02-09'),
(84, 'argentina', 1, 234, 'OIP (1).jpeg', 4, 'madrid-spain', '2023-02-09'),
(85, 'dfghjklm', 1, 123456, 'contry.jpg', 3, 'spain_madrid', '2023-02-16'),
(86, 'hhhhhhhhhhhh', 3, 5432, 'OIP (5).jpeg', 3, 'spain_madrid', '2023-02-17'),
(87, 'iconic_tour', 2, 2000, 'home_ship.png', 5, 'spain_madrid', '2023-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `navire`
--

CREATE TABLE `navire` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rooms_number` int(50) NOT NULL,
  `places_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navire`
--

INSERT INTO `navire` (`id`, `name`, `rooms_number`, `places_number`) VALUES
(1, 'titanik', 1000, 20),
(2, 'shipMaroc', 30, 350),
(3, 'spain_icon', 60, 370);

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`id`, `name`) VALUES
(1, 'aaaaaa'),
(2, 'spain_madrid'),
(3, 'france_marsaille');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `ID_user` int(200) NOT NULL,
  `date_reservation` date NOT NULL,
  `price_reservation` varchar(255) NOT NULL,
  `id_Room` int(200) NOT NULL,
  `ID_cruise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `ID_user`, `date_reservation`, `price_reservation`, `id_Room`, `ID_cruise`) VALUES
(56, 19, '2023-02-17', '4200', 75, 78);

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `ID_cruise` int(11) NOT NULL,
  `ID_port` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(200) NOT NULL,
  `id_room_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `id_room_type`) VALUES
(1, 1),
(24, 1),
(35, 1),
(53, 1),
(2, 3),
(3, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(31, 3),
(34, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3),
(50, 3),
(51, 3),
(52, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 3),
(64, 3),
(65, 3),
(66, 3),
(67, 3),
(68, 3),
(70, 3),
(72, 3),
(75, 3),
(76, 3),
(77, 3),
(33, 4),
(36, 4),
(62, 4),
(63, 4),
(71, 4),
(73, 4),
(74, 4),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(23, 5),
(25, 5),
(26, 5),
(29, 5),
(37, 5),
(38, 5),
(39, 5),
(69, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `capacity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `name`, `price`, `capacity`) VALUES
(1, 'without room', 0, 0),
(3, 'solo', 200, 1),
(4, '2 persons', 350, 2),
(5, '3 to 6', 500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '1',
  `ID_cruise` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `password`, `email`, `role`, `ID_cruise`) VALUES
(18, 'hassan', '$2y$10$pN9MfKRom6dacknpBvUE8O2DJIjIKkw465txwco7imM.Cq3uCSlQa', 'user@gmail.com', '0', NULL),
(19, 'xoxo', '$2y$10$8WEWBDJMBOSfcOkYwe4tzezqhYC9lLq7ebJBpe3g4FXeSfbOFQhAG', 'admin@gmail.com', '1', NULL),
(20, 'xoxo', '$2y$10$deSBCUUFfQWG6wRoX5FCxubdEktW0T7jz0eQxEQVo5NeQCigk5Ybm', 'admin@gmail.com', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cruise`
--
ALTER TABLE `cruise`
  ADD PRIMARY KEY (`ID_cruise`),
  ADD KEY `cruise_ibfk_1` (`ship`);

--
-- Indexes for table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `reservation_ibfk_1` (`id_Room`),
  ADD KEY `user_reserv` (`ID_user`),
  ADD KEY `id_reserve_cruise` (`ID_cruise`);

--
-- Indexes for table `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`ID_cruise`),
  ADD KEY `ID_port` (`ID_port`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_room_type` (`id_room_type`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ID_cruise` (`ID_cruise`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cruise`
--
ALTER TABLE `cruise`
  MODIFY `ID_cruise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `navire`
--
ALTER TABLE `navire`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cruise`
--
ALTER TABLE `cruise`
  ADD CONSTRAINT `cruise_ibfk_1` FOREIGN KEY (`ship`) REFERENCES `navire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `id_reserve_cruise` FOREIGN KEY (`ID_cruise`) REFERENCES `cruise` (`ID_cruise`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_Room`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_reserv` FOREIGN KEY (`ID_user`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `road`
--
ALTER TABLE `road`
  ADD CONSTRAINT `road_ibfk_1` FOREIGN KEY (`ID_cruise`) REFERENCES `cruise` (`ID_cruise`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `road_ibfk_2` FOREIGN KEY (`ID_port`) REFERENCES `port` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`id_room_type`) REFERENCES `room_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ID_cruise`) REFERENCES `cruise` (`ID_cruise`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
