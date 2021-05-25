-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prabhu100_amnesty`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `did` int(10) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `pid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `districts` (`id`, `district`, `provience_id`) VALUES
(1, 'Bhojpur', 1),
(2, 'Dhankuta', 1),
(3, 'Illam', 1),
(4, 'Jhapa', 1),
(5, 'Khotang', 1),
(6, 'Morang', 1),
(7, 'Okhaldhunga', 1),
(8, 'Panchthar', 1),
(9, 'Sankhuwasabha', 1),
(10, 'Solukhumbu', 1),
(11, 'Sunsari', 1),
(12, 'Taplejung', 1),
(13, 'Tehrathum', 1),
(14, 'Udayapur', 1),
(15, 'Bara', 2),
(16, 'Dhanusa', 2),
(17, 'Mohottari', 2),
(18, 'Parsa', 2),
(19, 'Rautahat', 2),
(20, 'Saptari', 2),
(21, 'Sarlahi', 2),
(22, 'Siraha', 2),
(23, 'Bhaktapur', 3),
(24, 'Chitwan', 3),
(25, 'Dhading', 3),
(26, 'Dolakha', 3),
(27, 'Kavrepalanchok', 3),
(28, 'Kathmandu', 3),
(29, 'Lalitpur', 3),
(30, 'Makwanpur', 3),
(31, 'Nuwakot', 3),
(32, 'Ramechhap', 3),
(33, 'Rasuwa', 3),
(34, 'Sindhuli', 3),
(35, 'Sindupalchok', 3),
(36, 'Baglung', 4),
(37, 'Gorkha', 4),
(38, 'Kaski', 4),
(39, 'Lamjung', 4),
(40, 'Manang', 4),
(41, 'Mustang', 4),
(42, 'Myagdi', 4),
(43, 'Nawalpur', 4),
(44, 'Parbat', 4),
(45, 'Syangja', 4),
(46, 'Tanahun', 4),
(47, 'Arghakhanchi', 5),
(48, 'Banke', 5),
(49, 'Bardiya', 5),
(50, 'Dang Deukhuri', 5),
(51, 'Gulmi', 5),
(52, 'Kapilvastu', 5),
(53, 'Parasi', 5),
(54, 'Palpa', 5),
(55, 'Pyuthan', 5),
(56, 'Rolpa', 5),
(57, 'Rukum West', 5),
(58, 'Rupandehi', 5),
(59, 'Dailekh', 6),
(60, 'Dolpa', 6),
(61, 'Humla', 6),
(62, 'Jajarkot', 6),
(63, 'Jumla', 6),
(64, 'Kalikot', 6),
(65, 'Mugu', 6),
(66, 'Rukum West', 6),
(67, 'Salyan', 6),
(68, 'Surkhet', 6),
(69, 'Achham', 7),
(70, 'Baitadi', 7),
(71, 'Bajhang', 7),
(72, 'Bajura', 7),
(73, 'Dadeldhura', 7),
(74, 'Darchula', 7),
(75, 'Doti', 7),
(76, 'Kailali', 7),
(77, 'Kanchanpur', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
