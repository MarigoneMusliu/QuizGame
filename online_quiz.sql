-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 04:28 PM
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
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `exam_category`
--

CREATE TABLE `exam_category` (
  `id` int(5) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pershkrimi` mediumtext NOT NULL,
  `exam_time_in_minutes` varchar(5) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_category`
--

INSERT INTO `exam_category` (`id`, `category`, `pershkrimi`, `exam_time_in_minutes`, `image_path`) VALUES
(80, 'C', 'Gjuha programuese C është e thjeshtë përdoret gjerësisht për zhvillimin e programeve të performancës së lartë.', '45', 'uploads/2c.jpeg'),
(81, 'Java', 'Java është një gjuhë programimi e orientuar nga objekti, e përdorur për zhvillimin e aplikacioneve të internetit.', '45', 'uploads/jj.jpg'),
(82, 'Python', 'Gjuhë programimi e orientuar nga objekti, përdorur gjerësisht për zhvillimin e aplikacioneve të internetit.', '45', 'uploads/1python.jpg'),
(83, 'JavaScript', 'JavaScript është gjuha kryesore për zhvillimin e aplikacioneve në internet, ndërveprim të shpejtë etj.', '45', 'uploads/js.png'),
(84, 'PHP', 'Gjuha kryesore për zhvillimin e faqeve të internetit, ofron ndërveprim të lehtë me bazën e të dhënave.', '45', 'uploads/php.png'),
(85, 'HTML', 'HTML është gjuhë shënimesh për strukturimin e faqeve të internetit me tekst, imazhe dhe lidhje.', '45', 'uploads/html.png'),
(86, 'CSS', 'CSS përdoret për stilizimin e faqeve të internetit, përfshirë ngjyra, fonte dhe pozicionim të elementëve.', '45', 'uploads/css.jpg'),
(87, 'MySql', 'MySQL është bazë e të dhënave për ruajtjen dhe manipulimin e të dhënave në aplikacione dhe faqe interneti.', '45', 'uploads/sqlmy.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `exam_type` varchar(100) NOT NULL,
  `total_question` varchar(10) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(3, 'olamorina', 'python', '3', '1', '2', '2023-12-16'),
(4, 'test', 'python', '3', '1', '2', '2023-12-16'),
(5, 'test', 'python', '3', '1', '2', '2023-12-16'),
(6, 'ooo', 'python', '3', '1', '2', '2023-12-16'),
(7, 'ooo', 'python', '3', '1', '2', '2023-12-16'),
(8, 'ooo', 'python', '3', '0', '3', '2023-12-16'),
(9, 'ooo', 'python', '3', '2', '1', '2023-12-17'),
(10, 'test', 'python', '3', '0', '3', '2023-12-17'),
(11, 'test123', 'python', '3', '1', '2', '2023-12-21'),
(12, 'test123', 'python', '3', '1', '2', '2023-12-21'),
(13, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(14, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(15, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(16, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(17, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(18, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(19, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(20, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(21, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(22, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(23, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(24, 'test123', 'python', '3', '0', '3', '2023-12-21'),
(25, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(26, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(27, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(28, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(29, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(30, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(31, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(32, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(33, 'test123', 'Test', '1', '0', '1', '2023-12-23'),
(34, 'test123', 'Test', '1', '0', '1', '2023-12-23'),
(35, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(36, 'test123', 'Test', '3', '2', '1', '2023-12-23'),
(37, 'test123', 'Test', '3', '2', '1', '2023-12-23'),
(38, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(39, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(40, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(41, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(42, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(43, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(44, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(45, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(46, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(47, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(48, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(49, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(50, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(51, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(52, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(53, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(54, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(55, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(56, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(57, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(58, 'test123', 'Test', '3', '0', '3', '2023-12-23'),
(59, 'test123', 'Test', '3', '1', '2', '2023-12-23'),
(60, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(61, 'test123', 'Test', '3', '1', '2', '2023-12-23'),
(62, 'test123', 'Test', '3', '1', '2', '2023-12-23'),
(63, 'test123', 'python', '3', '0', '3', '2023-12-23'),
(64, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(65, 'test123', 'python', '3', '1', '2', '2023-12-23'),
(66, 'test123', 'Test', '3', '1', '2', '2023-12-23'),
(67, 'test123', 'python', '3', '0', '3', '2023-12-24'),
(68, 'test', 'python', '3', '0', '3', '2024-01-07'),
(69, 'test', 'python', '3', '0', '3', '2024-01-07'),
(70, 'test', 'Test', '3', '0', '3', '2024-01-07'),
(71, 'test', 'python', '3', '1', '2', '2024-01-07'),
(72, 'test', 'python', '3', '1', '2', '2024-01-07'),
(73, 'test', 'Test', '3', '0', '3', '2024-01-07'),
(74, 'test', 'Test', '3', '0', '3', '2024-01-07'),
(75, 'test', 'python', '3', '1', '2', '2024-01-07'),
(76, 'test', 'python', '3', '0', '3', '2024-01-10'),
(77, 'test', 'python', '3', '0', '3', '2024-01-10'),
(78, 'test', 'python', '3', '0', '3', '2024-01-10'),
(79, 'test', 'python', '3', '0', '3', '2024-01-10'),
(80, 'test', 'python', '3', '0', '3', '2024-01-10'),
(81, 'test', 'python', '3', '1', '2', '2024-01-12'),
(82, 'test', 'python', '3', '0', '3', '2024-01-13'),
(83, 'test', 'python', '3', '1', '2', '2024-01-13'),
(84, 'test', 'python', '3', '0', '3', '2024-01-13'),
(85, 'test', 'python', '3', '0', '3', '2024-01-13'),
(86, 'test', 'python', '3', '0', '3', '2024-01-13'),
(87, 'test', 'Test', '3', '2', '1', '2024-01-13'),
(88, 'test', 'Test', '3', '2', '1', '2024-01-13'),
(89, 'test', 'Test', '3', '2', '1', '2024-01-13'),
(90, 'test', 'Test', '3', '2', '1', '2024-01-13'),
(91, 'test', 'Test', '3', '2', '1', '2024-01-13'),
(92, 'test', 'Test', '3', '1', '2', '2024-01-13'),
(93, 'test', 'Test', '3', '1', '2', '2024-01-13'),
(94, 'test', 'Test', '3', '1', '2', '2024-01-13'),
(95, 'test', 'Test', '3', '1', '2', '2024-01-13'),
(96, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(97, 'test', 'python', '3', '0', '3', '2024-01-14'),
(98, 'test', 'python', '3', '0', '3', '2024-01-14'),
(99, 'test', 'python', '3', '0', '3', '2024-01-14'),
(100, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(101, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(102, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(103, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(104, 'test', 'Test', '3', '1', '2', '2024-01-14'),
(105, 'test', 'Test', '3', '1', '2', '2024-01-14'),
(106, 'test', 'Test', '3', '0', '3', '2024-01-14'),
(107, 'test', 'Test', '3', '2', '1', '2024-01-14'),
(108, 'test', 'Java', '3', '3', '0', '2024-01-14'),
(109, 'test', 'Java', '3', '2', '1', '2024-01-14'),
(110, 'test', 'Java', '3', '3', '0', '2024-01-14'),
(111, 'test', 'Java', '3', '3', '0', '2024-01-14'),
(112, 'test', 'Java', '3', '3', '0', '2024-01-14'),
(113, 'test', 'python', '3', '1', '2', '2024-01-14'),
(114, 'test', 'Test', '3', '1', '2', '2024-01-14'),
(115, 'test', 'Test', '3', '2', '1', '2024-01-17'),
(116, 'test', 'python', '3', '1', '2', '2024-01-17'),
(117, 'test', 'Test', '3', '1', '2', '2024-01-17'),
(118, 'test', 'HTML', '0', '0', '0', '2024-01-18'),
(119, 'test', 'HTML', '0', '0', '0', '2024-01-18'),
(120, 'test', 'CSS', '0', '0', '0', '2024-01-18'),
(121, 'test', 'CSS', '0', '0', '0', '2024-01-18'),
(122, 'test', 'HTML', '0', '0', '0', '2024-01-19'),
(123, 'test', 'HTML', '2', '0', '2', '2024-01-19'),
(124, 'test', 'HTML', '2', '0', '2', '2024-01-19'),
(125, 'test', 'HTML', '2', '0', '2', '2024-01-19'),
(126, 'test', 'HTML', '2', '0', '2', '2024-01-19'),
(127, 'altina1', 'JavaScript', '0', '0', '0', '2024-01-19'),
(128, 'altina1', 'CSS', '0', '0', '0', '2024-01-19'),
(129, 'altina1', 'C', '0', '0', '0', '2024-01-19'),
(130, 'altina1', 'CSS', '0', '0', '0', '2024-01-19'),
(131, 'altina1', 'CSS', '0', '0', '0', '2024-01-19'),
(132, 'altina1', 'HTML', '1', '0', '1', '2024-01-19'),
(133, 'altina1', 'HTML', '1', '1', '0', '2024-01-19'),
(134, 'altina1', 'HTML', '1', '1', '0', '2024-01-19'),
(135, 'altina1', 'CSS', '0', '0', '0', '2024-01-19'),
(136, 'altina1', 'CSS', '0', '0', '0', '2024-01-19'),
(137, 'altina1', 'CSS', '0', '0', '0', '2024-01-20'),
(138, 'altina1', 'JavaScript', '0', '0', '0', '2024-01-20'),
(139, 'altina1', 'Python', '2', '0', '2', '2024-01-20'),
(140, 'altina1', 'SQL', '1', '1', '0', '2024-01-20'),
(141, 'altina1', 'PhP', '1', '0', '1', '2024-01-20'),
(142, 'altina1', 'Python', '2', '0', '2', '2024-01-20'),
(143, 'altina1', 'SQL', '1', '1', '0', '2024-01-20'),
(144, 'altina1', 'Python', '2', '0', '2', '2024-01-20'),
(145, 'test', 'JavaScript', '0', '0', '0', '2024-01-20'),
(146, 'test', 'Python', '2', '0', '2', '2024-01-20'),
(147, 'test', 'Python', '2', '0', '2', '2024-01-20'),
(148, 'test', 'C', '0', '0', '0', '2024-01-20'),
(149, 'test', 'PhP', '1', '0', '1', '2024-01-20'),
(150, 'test', 'CSS', '0', '0', '0', '2024-01-21'),
(151, 'test', 'JavaScript', '0', '0', '0', '2024-01-21'),
(152, 'test', 'Python', '2', '0', '2', '2024-01-21'),
(153, 'test', 's', '0', '0', '0', '2024-01-21'),
(154, 'altina1', 's', '0', '0', '0', '2024-01-21'),
(155, 'test', 'SQL', '1', '1', '0', '2024-01-22'),
(156, 'test', 'g', '0', '0', '0', '2024-01-22'),
(157, 'test', 'C  ', '0', '0', '0', '2024-01-22'),
(158, 'test', 'asdasd', '0', '0', '0', '2024-01-22'),
(159, 'test', 'asd', '0', '0', '0', '2024-01-22'),
(160, 'test', 'C  ', '0', '0', '0', '2024-01-22'),
(161, 'test', 'C  ', '0', '0', '0', '2024-01-22'),
(162, 'test', 'C  ', '0', '0', '0', '2024-01-22'),
(163, 'test', 'C  ', '0', '0', '0', '2024-01-23'),
(164, 'test', 'C  ', '0', '0', '0', '2024-01-23'),
(165, 'test', 'Java', '3', '0', '3', '2024-01-23'),
(166, 'test', 'C  ', '0', '0', '0', '2024-01-23'),
(167, 'test', 'C', '0', '0', '0', '2024-01-23'),
(168, 'test', 'PhP', '2', '1', '1', '2024-01-23'),
(169, 'test', 'MySql', '1', '0', '1', '2024-01-23'),
(170, 'test', 'CSS', '1', '0', '1', '2024-01-23'),
(171, 'test', 'JavaScript', '1', '1', '0', '2024-01-23'),
(172, 'test', 'HTML', '1', '1', '0', '2024-01-23'),
(173, 'test', 'C', '2', '0', '2', '2024-01-23'),
(174, 'test', 'Html', '1', '0', '1', '2024-01-23'),
(175, 'test', 'Html', '2', '1', '1', '2024-01-23'),
(176, 'test', 'Html', '2', '1', '1', '2024-01-23'),
(177, 'test', 'Html', '2', '1', '1', '2024-01-23'),
(178, 'test', 'CSS', '1', '1', '0', '2024-01-23'),
(179, 'test', 'CSS', '2', '2', '0', '2024-01-23'),
(180, 'test', 'CSS', '2', '2', '0', '2024-01-23'),
(181, 'test', 'CSS', '10', '7', '3', '2024-01-23'),
(182, 'test', 'JavaScript', '6', '1', '5', '2024-01-23'),
(183, 'test', 'JavaScript', '10', '3', '7', '2024-01-23'),
(184, 'test', 'Python', '2', '0', '2', '2024-01-23'),
(185, 'test', 'Python', '2', '0', '2', '2024-01-23'),
(186, 'test', 'Python', '2', '0', '2', '2024-01-23'),
(187, 'test', 'Python', '1', '0', '1', '2024-01-23'),
(188, 'test', 'Java', '4', '0', '4', '2024-01-23'),
(189, 'test', 'Java', '10', '3', '7', '2024-01-23'),
(190, 'test', 'Php', '8', '2', '6', '2024-01-23'),
(191, 'test', 'Php', '10', '0', '10', '2024-01-23'),
(192, 'test', 'My Sql', '1', '2', '-1', '2024-01-23'),
(193, 'test', 'My Sql', '10', '3', '7', '2024-01-23'),
(194, 'test', 'C', '10', '3', '7', '2024-01-23'),
(195, 'test', 'CSS', '0', '0', '0', '2024-01-24'),
(196, 'test', 'CSS', '10', '0', '10', '2024-01-24'),
(197, 'test', 'JavaScript', '10', '0', '10', '2024-01-24'),
(198, 'test', 'Python', '10', '0', '10', '2024-01-24'),
(199, 'test', 'Java', '10', '0', '10', '2024-01-24'),
(200, 'test', 'Php', '10', '0', '10', '2024-01-24'),
(201, 'test', 'My Sql', '10', '0', '10', '2024-01-24'),
(202, 'test', 'My Sql', '10', '0', '10', '2024-01-24'),
(203, 'test', 'C', '10', '3', '7', '2024-01-24'),
(204, 'test', 'html', '2', '0', '2', '2024-01-24'),
(205, 'test', 'CSS', '10', '1', '9', '2024-01-24'),
(206, 'test', 'JavaScript', '10', '1', '9', '2024-01-24'),
(207, 'test', 'CSS', '10', '0', '10', '2024-01-24'),
(208, 'test', 'C', '10', '3', '7', '2024-01-24'),
(209, 'test', 'C', '10', '3', '7', '2024-01-24'),
(210, 'olamorina', 'C', '10', '3', '7', '2024-01-24'),
(211, 'test', 'Java Script', '0', '1', '-1', '2024-01-24'),
(212, 'test', 'JavaScript', '10', '2', '8', '2024-01-24'),
(213, 'test', 'C', '10', '3', '7', '2024-01-24'),
(214, 'test', 'Java', '10', '1', '9', '2024-01-24'),
(215, 'test', 'Python', '10', '2', '8', '2024-01-24'),
(216, 'test', 'JavaScript', '10', '4', '6', '2024-01-24'),
(217, 'test', 'PHP', '10', '3', '7', '2024-01-24'),
(218, 'test', 'MySql', '10', '1', '9', '2024-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(20, 'eriola', 'eriola@eriola.com', 'Shume mire', '2024-01-24 14:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(5) NOT NULL,
  `question_no` varchar(5) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category`) VALUES
(81, '2', 'asda', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asda', 'Test'),
(82, '3', 'asdasdas', 'asdasdas', 'asddasd', 'asdasdas', 'asdasdasd', 'asdasdasd', 'Test'),
(83, '1', 'Cila është një sintaksë e saktë për të nxjerrë \"Hello World\" në Java?', 'System.out.println(\"Hello World\");', 'print (\"Hello World\");', 'echo(\"Hello World\");', 'Console.WriteLine(\"Hello World\");', 'System.out.println(\"Hello World\");', 'Java'),
(84, '2', 'Cili lloj i të dhënave përdoret për të krijuar një variabël që duhet të ruajë tekstin?', 'Txt', 'myString', 'String', 'string', 'String', 'Java'),
(85, '3', 'Si të krijoni një ndryshore me vlerën numerike 5?', 'num x = 5', 'float x = 5;', 'int x = 5;', 'x = 5;', 'int x = 5;', 'Java'),
(92, '1', 'Si e shkruani \"Hello World\" në PHP', 'echo \"Hello World\";', '\"Hello World\";', 'Document.Write(\"Hello World\");', 'print \"Hello World\";', 'echo \"Hello World\";', 'PhP'),
(94, '1', 's', 's', 's', 's', 's', 's', 'SQL'),
(95, '1', 'prova', 'p', 'w', 'c', 'd', 'p', 'C#'),
(96, '1', 'ppp', 'p', 's', 'd', 'v', 'p', 'C++'),
(97, '4', 'Cila metodë mund të përdoret për të gjetur gjatësinë e një vargu?', 'length()', 'getLength()', 'getSize()', 'len()', 'length()', 'Java'),
(98, '2', 'Të gjitha variablat në PHP fillojnë me cilin simbol?', '&', '$', '!', '#', '$', 'PhP'),
(99, '1', 'Çfarë është MySQL?', 'Zhvilluar, shpërndarë dhe mbështetur nga Oracle Corporation', 'Të gjitha opsionet janë të sakta', 'Një sistem i menaxhimit të bazës së të dhënave relacionale', 'Ndër-platformë, me burim të hapur dhe falas', 'Të gjitha opsionet janë të sakta', 'MySql'),
(100, '1', 'Çfarë përfaqëson CSS?', 'Colorful Style Sheets', 'Creative Style Sheets', 'Cascading Style Sheets', ' Computer Style Sheets', 'Cascading Style Sheets', 'CSS'),
(101, '1', 'Si të krijoni një funksion në JavaScript?', 'function = myFunction()', 'function myFunction()', 'function:myFunction()', 'myFunction(function) ', 'function myFunction()', 'JavaScript'),
(103, '1', 'Cila është një sintaksë e saktë për të nxjerrë \"Hello World\" në C?', 'Console.WriteLine(\"Hello World\");', 'cout << \"Hello World\";', 'System.out.printline(\"Hello World\");', 'printf(\"Hello World\");  ', 'printf(\"Hello World\");  ', 'C'),
(104, '2', 'Si i futni KOMENTE në kodin C?', '-- This is a comment', '# This is a comment', '* This is a comment', '// This is a comment', '// This is a comment', 'C'),
(105, '1', 'Zgjidhni elementin e duhur HTML për titullin më të madh:', 'h1', 'head', 'heading', 'h6', 'h1', 'Html'),
(108, '2', 'Cili atribut HTML përdoret për të përcaktuar stilet inline?', 'class', 'styles', 'style', 'font', 'style', 'CSS'),
(109, '3', 'Cila veti përdoret për të ndryshuar ngjyrën e sfondit?', 'bgcolor', 'color', 'background-color', 'color-background', 'background-color', 'CSS'),
(110, '4', 'Cila veti CSS përdoret për të ndryshuar ngjyrën e tekstit të një elementi?', 'text-color', 'color', 'fgcolor', 'fcolor', 'color', 'CSS'),
(111, '5', 'Cila pronë CSS kontrollon madhësinë e tekstit?', 'text-size', 'font-size', 'font-style', 'text-style', 'font-size', 'CSS'),
(112, '6', 'Si e bëni që çdo fjalë në një tekst të fillojë me shkronjë të madhe?', 'text-transform:capitalize', 'text-style:capitalize', 'transform:capitalize', 'Ju nuk mund ta bëni këtë me CSS', 'text-transform:capitalize', 'CSS'),
(113, '7', 'Cila veti përdoret për të ndryshuar fontin e një elementi?', 'font-family', 'font-weight', 'font-style', 'font-style', 'font-family', 'CSS'),
(114, '8', 'Si e bëni tekstin të bold?', 'style:bold;', 'font-weight:bold;', 'font:bold;', 'font - \"bold\"', 'font-weight:bold;', 'CSS'),
(115, '9', 'Si i gruponi përzgjedhësit?', 'Ndani çdo përzgjedhës me presje', 'Ndani secilin përzgjedhës me një shenjë plus', 'Ndani çdo përzgjedhës me një hapësirë', 'Ndani çdo përzgjedhës me pikë', 'Ndani çdo përzgjedhës me presje', 'CSS'),
(116, '10', 'Cila është vlera e paracaktuar e vetive të pozicionit?', 'fixed', 'absolute', 'static', 'relative', 'static', 'CSS'),
(117, '2', 'Si e shkruani \"Hello World\" në një aler box?', 'alertBox(\"Hello World\");', 'alert(\"Hello World\");', 'msg(\"Hello World\");', 'msgBox(\"Hello World\");', 'alert(\"Hello World\");', 'JavaScript'),
(118, '3', 'Si e quani një funksion të quajtur \"myFunction\"?', 'myFunction()', 'call myFunction()', 'call function myFunction()', 'function myFunction()', 'myFunction()', 'JavaScript'),
(119, '4', 'Si të shkruani një deklaratë IF në JavaScript?', 'if i == 5 then', 'if i = 5', 'if i = 5 then', 'if (i == 5)', 'if (i == 5)', 'JavaScript'),
(120, '5', 'Si fillon një WHILE loop?', 'while (i <= 10; i++)', 'while (i <= 10)', 'while i = 1 to 10', 'while i = 1 < 10', 'while (i <= 10)', 'JavaScript'),
(121, '6', 'Si të futni një koment që ka më shumë se një rresht?', '//Ky koment ka më shumë se një rresht//', '/*Ky koment ka më shumë se një rresht*/', '=Ky koment ka më shumë se një rresht=', '...Ky koment ka më shumë se një rresht...', '/*Ky koment ka më shumë se një rresht*/', 'JavaScript'),
(122, '7', 'Cila është mënyra e duhur për të shkruar një grup JavaScript?', 'var colors = [\"red\", \"green\", \"blue\"]', 'var colors = 1 = (\"red\"), 2 = (\"green\"), 3 = (\"blue\")', 'var colors = \"red\", \"green\", \"blue\"', 'var colors = (1:\"red\", 2:\"green\", 3:\"blue\")', 'var colors = [\"red\", \"green\", \"blue\"]', 'JavaScript'),
(123, '8', 'Si e gjeni numrin me vlerën më të madh të x dhe y?', 'Math.ceil(x, y)', 'ceil(x, y)', 'Math.max(x, y)', 'top(x, y)', 'Math.max(x, y)', 'JavaScript'),
(124, '9', 'Si fillon një loop FOR?', 'for (i = 0; i <= 5; i++)  ', 'for (i = 0; i <= 5)', 'for i = 1 to 5', 'for (i <= 5; i++)', 'for (i = 0; i <= 5; i++)  ', 'JavaScript'),
(125, '10', 'Çfarë do të kthejë kodi i mëposhtëm: Boolean(10 > 9)', 'NaN', 'false', 'true', 'not', 'true', 'JavaScript'),
(126, '1', 'Si futni KOMENTE në kodin Python?', '//Ky është një koment', '#Ky është një koment', '/*Ky është një koment*/', '*Ky është një koment*', '#Ky është një koment', 'Python'),
(127, '2', 'Si futni KOMENTE në kodin Python?', 'print(\"Hello World\")', 'echo(\"Hello World\");', 'echo \"Hello World\"', 'p(\"Hello World\")', 'print(\"Hello World\")', 'Python'),
(128, '3', 'Si të krijoni një ndryshore me vlerën numerike 5?', 'x = int(5)', 'x = 5', 'Asnjëra nuk është e saktë', 'Të dyja përgjigjet e tjera janë të sakta', 'Të dyja përgjigjet e tjera janë të sakta', 'Python'),
(129, '4', 'Cila është zgjedhja e saktë e files për Python files?', '.py', '.pyt', '.pt', '.pyth', '.py', 'Python'),
(130, '5', 'Cila është sintaksa e saktë për të nxjerrë llojin e një ndryshoreje ose objekti në Python?', 'print(typeof x)', 'print(typeOf(x))', 'print(typeof(x))', 'print(type(x))', 'print(type(x))', 'Python'),
(131, '6', 'Cila metodë mund të përdoret për të hequr çdo hapësirë të bardhë si nga fillimi ashtu edhe nga fundi i një vargu?', 'strip()', 'ptrim()', 'trim()', 'len()', 'strip()', 'Python'),
(132, '7', 'Cila metodë mund të përdoret për të kthyer një varg me shkronja të mëdha?', 'uppercase()', 'toUpperCase()', 'upper()', 'upperCase()', 'upper()', 'Python'),
(133, '8', 'Cili nga këto koleksione përcakton një LISTË?', '{\"apple\", \"banana\", \"cherry\"}', '[\"apple\", \"banana\", \"cherry\"]', '{\"name\": \"apple\", \"color\": \"green\"}', '(\"apple\", \"banana\", \"cherry\")', '[\"apple\", \"banana\", \"cherry\"]', 'Python'),
(134, '9', 'Cili nga këto koleksione përcakton një FJALOR?', '[\"apple\", \"banana\", \"cherry\"]', '{\"name\": \"apple\", \"color\": \"green\"}', '(\"apple\", \"banana\", \"cherry\")', '{\"apple\", \"banana\", \"cherry\"}', '{\"name\": \"apple\", \"color\": \"green\"}', 'Python'),
(135, '10', 'Si filloni të shkruani një for loop në Python?', 'for each x in y:', 'for x > y:', 'for x in y:', 'for each x < y:', 'for x in y:', 'Python'),
(136, '5', 'Cili operator përdoret për të mbledhur dy vlera?', 'The * sign', 'The + sign', 'The & sign', 'The = sign', 'The + sign', 'Java'),
(137, '6', 'Cili operator mund të përdoret për të krahasuar dy vlera?', '><', '<>', '=', '==', '==', 'Java'),
(138, '7', 'Cila fjalë kyçe përdoret për të krijuar një klasë në Java?', 'class()', 'className', 'class', 'MyClass', 'class', 'Java'),
(139, '8', 'Cila fjalë kyçe përdoret për të importuar një paketë nga biblioteka Java API?', 'package', 'getlib', 'lib', 'import', 'import', 'Java'),
(140, '9', 'Si filloni të shkruani një deklaratë if në Java?', 'if x > y then:', 'if (x > y)', 'if x > y:', 'if x > y', 'if (x > y)', 'Java'),
(141, '10', 'Cili pohim përdoret për të ndaluar një loop?', 'exit', 'break', 'return', 'stop', 'break', 'Java'),
(142, '3', 'Çfarë do të thotë PHP?', 'Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor ', 'Personal Hypertext Page', 'PHP: Hypertext Preprocessor ', 'Php'),
(143, '4', 'Cila është mënyra e duhur për të përfunduar një deklaratë PHP?', 'New line', ':', ';', '.', ';', 'Php'),
(144, '5', 'Si e merrni informacionin nga një formular që dorëzohet duke përdorur metodën \"GET\"?', 'Request.Form;', 'Request.QueryString;', '$_GET[];', 'GET[]', '$_GET[];', 'Php'),
(145, '6', 'Cila është mënyra e duhur për të krijuar një funksion në PHP?', 'new_function myFunction()', 'function myFunction()', 'create myFunction()', 'myFunction()', 'function myFunction()', 'Php'),
(146, '7', 'Cila është mënyra e duhur për të shtuar 1 në ndryshoren $count?', '$count++;', '++count', 'count++;', '$count =+1', '$count++;', 'Php'),
(147, '8', 'Si të krijoni një grup në PHP?', '$cars = array(\"Volvo\", \"BMW\", \"Toyota\");', '$cars = \"Volvo\", \"BMW\", \"Toyota\";', '$cars = array[\"Volvo\", \"BMW\", \"Toyota\"];', '$cars = [\"Volvo\", \"BMW\", \"Toyota\"];', '$cars = array(\"Volvo\", \"BMW\", \"Toyota\");', 'Php'),
(148, '9', 'Si krijoni një cookie në PHP?', 'makecookie()', 'createcookie', 'setcookie()', 'getcookie', 'setcookie()', 'Php'),
(149, '10', 'Cili operator përdoret për të kontrolluar nëse dy vlera janë të barabarta dhe të të njëjtit lloj të dhënash?', '==', '!=', '===  ', '=', '===  ', 'Php'),
(150, '1', 'Çfarë është MySQL?', 'Cross-platform, open-source dhe falas', 'Të gjitha opsionet janë të sakta', 'Një sistem i menaxhimit të bazës së të dhënave relacionale', 'Zhvilluar, shpërndarë dhe mbështetur nga Oracle Corporation', 'Të gjitha opsionet janë të sakta', 'My Sql'),
(151, '2', 'Cili deklaratë MySQL përdoret për të zgjedhur të dhënat nga një bazë të dhënash?', 'GET', 'OPEN', 'SELECT', 'EXTRACT', 'SELECT', 'My Sql'),
(152, '3', 'Cila deklaratë MySQL përdoret për të përditësuar të dhënat në një bazë të dhënash?', 'MODIFY', 'UPDATE', 'SAVE', 'INSERT', 'UPDATE', 'My Sql'),
(153, '4', 'Cili deklaratë MYSQL përdoret për të futur të dhëna të reja në një bazë të dhënash?', 'INSERT NEW', 'ADD NEW', 'INSERT INTO', 'ADD RECORD', 'INSERT INTO', 'My Sql'),
(154, '5', 'Me MySQL, si i zgjidhni të gjitha kolonat nga një tabelë me emrin \"Persons\"?', 'SELECT * FROM Persons', 'SELECT Persons', 'SELECT [all] FROM Persons', 'SELECT *.Persons', 'SELECT * FROM Persons', 'My Sql'),
(155, '6', 'Cili deklaratë MySQL përdoret për të kthyer vetëm vlera të ndryshme?', 'SELECT UNIQUE', 'SELECT DIFFERENT', 'SELECT DISTINCT ', 'DISTINCT ', 'SELECT DISTINCT ', 'My Sql'),
(156, '7', 'Cila fjalë kyçe MySQL përdoret për të renditur grupin e rezultateve?', 'SORT', 'SORT BY', 'ORDER', 'ORDER BY', 'ORDER BY', 'My Sql'),
(157, '8', 'Si mund të ktheni numrin e regjistrimeve në tabelën Persons?', 'SELECT LEN(*) FROM Persons', 'SELECT COLUMNS(*) FROM Persons', 'SELECT COUNT(*) FROM Persons ', 'SELECT NO(*) FROM Persons', 'SELECT COUNT(*) FROM Persons ', 'My Sql'),
(158, '9', 'Cili operator përdoret për të zgjedhur vlerat brenda një diapazoni të caktuar?', 'UNION', 'IN', 'RANGE', 'BETWEEN', 'BETWEEN', 'My Sql'),
(159, '10', 'Cilat janë llojet e bashkimeve të mbështetura në MySQL?', 'INNER JOIN, OUTER JOIN, LEFT JOIN, RIGHT JOIN', 'INNER JOIN, OUTER JOIN', 'INNER JOIN, LEFT JOIN, RIGHT JOIN, CROSS JOIN  ', 'RIGHT JOIN, CROSS JOIN  ', 'INNER JOIN, LEFT JOIN, RIGHT JOIN, CROSS JOIN  ', 'My Sql'),
(160, '3', 'Si mund të krijoni një ndryshore me vlerën numerike 5?', 'int num = 5; ', 'val num = 5;', 'num = 5 int;', 'num = 5;', 'int num = 5; ', 'C'),
(161, '4', 'Cili operator përdoret për të mbledhur dy vlera?', 'The & sign', 'The + sign', 'The ADD keyword', 'The * sign', 'The + sign', 'C'),
(162, '5', 'Cili funksion përdoret shpesh për të nxjerrë vlera dhe për të printuar tekst?', 'output()', 'write()', 'printword()', 'printf()', 'printf()', 'C'),
(163, '6', 'Cila fjalë kyçe mund të përdoret për ta bërë një ndryshore të pandryshueshme/vetëm për lexim?', 'final', 'const', 'readonly', 'constant', 'const', 'C'),
(164, '7', 'Si e thërrisni një funksion në C?', 'myFunction();', '(myFunction);', 'myFunction;', 'myFunction[];', 'myFunction();', 'C'),
(165, '8', 'Si filloni të shkruani një deklaratë if në C?', 'if x > y then', 'if (x > y)', 'if x > y', 'if x > y()', 'if (x > y)', 'C'),
(166, '9', 'Si filloni të shkruani një cikli while në C?', 'while x < y', 'while x < y then', 'if x > y while', 'while (x < y)', 'while (x < y)', 'C'),
(167, '10', 'Si filloni të shkruani një cikli for në C?', 'for (int i = 0; i < 5; i++)', 'for (int i = 0; while < 5; i++)', 'for (x in y)', 'for (int i = 0; switch < 5; i++)', 'for (int i = 0; i < 5; i++)', 'C'),
(168, '2', 'Çfarë do të thotë HTML?', 'Hyper Text Markup Language', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Hyperlinks Text Markup Language', 'Hyper Text Markup Language', 'HTML'),
(169, '3', 'Si mund të bëni një listë të numëruar?', 'dl', 'list', 'ol', 'ul', 'ol', 'html'),
(170, '4', 'Si mund të bëni një listë me pika?', 'dl', 'ol', 'ul', 'list', 'ul', 'html'),
(171, '5', 'Cili është HTML-ja e duhur për të krijuar një drop-down list?', 'select', 'input type=\"list\"', 'input type=\"dropdown\"', 'list', 'select', 'html'),
(172, '6', 'Cili element HTML përcakton titullin e një dokumenti?', 'head', 'meta', 'title', 'style', 'title', 'html'),
(173, '7', 'Cili atribut HTML specifikon një tekst alternativ për një imazh, nëse imazhi nuk mund të shfaqet?', 'alt', 'src', 'title', 'longdesc', 'alt', 'html'),
(174, '8', 'Cili element HTML përdoret për të specifikuar një fund për një dokument ose seksion?', 'bottom', 'section', 'footer', 'header', 'footer', 'html'),
(175, '9', 'Cili element HTML përcakton lidhjet e navigimit?', 'navigation', 'navigate', 'nav', 'n', 'nav', 'html'),
(176, '10', 'Cili element HTML përdoret për të specifikuar një kokë për një dokument ose seksion?', 'section', 'top', 'header', 'head', 'header', 'html'),
(177, '2', 'Cili deklaratë MySQL përdoret për të zgjedhur të dhënat nga një bazë të dhënash?', 'GET', 'OPEN', 'SELECT', 'EXTRACT', 'SELECT', 'MySql'),
(178, '3', 'Cila deklaratë MySQL përdoret për të përditësuar të dhënat në një bazë të dhënash?', 'INSERT', 'UPDATE', 'MODIFY', 'SAVE', 'UPDATE', 'MySql'),
(179, '4', 'Cili deklaratë MYSQL përdoret për të futur të dhëna të reja në një bazë të dhënash?', 'ADD RECORD', 'ADD NEW', 'INSERT INTO', 'INSERT NEW', 'INSERT INTO', 'MySql'),
(180, '5', 'Me MySQL, si i zgjidhni të gjitha kolonat nga një tabelë me emrin \"Persons\"?', 'SELECT [all] FROM Persons', 'SELECT Persons', 'SELECT * FROM Persons', 'SELECT *.Persons', 'SELECT * FROM Persons ', 'MySql'),
(181, '6', 'Cili deklaratë MySQL përdoret për të kthyer vetëm vlera të ndryshme?', 'SELECT DISTINCT', 'SELECT UNIQUE', 'SELECT DIFFERENT', 'SELECT ALTER TABLE', 'SELECT DISTINCT', 'MySql'),
(182, '7', 'Cili operator përdoret për të zgjedhur vlerat brenda një diapazoni të caktuar?', 'BETWEEN', 'RANGE', 'UNION', 'IN', 'BETWEEN', 'MySql'),
(183, '8', 'Cili operator përdoret për të kërkuar një model të caktuar në një kolonë?', 'FROM', 'GET', 'LIKE', 'ASLIKE', 'LIKE', 'MySql'),
(184, '9', 'Cila deklaratë MySQL përdoret për të krijuar një tabelë bazë të dhënash të quajtur Klientë?', 'CREATE TABLE Customers', 'CREATE DATABASE TABLE Customers', 'CREATE DATABASE TAB Customers', 'CREATE DB Customers', 'CREATE TABLE Customers', 'MySql'),
(185, '10', 'Me MySQL, si mund të fshini të dhënat ku FirstName është Peter në Tabelën e Personave?', 'DELETE FROM Persons WHERE FirstName = Peter', 'DELETE ROW FirstName=Peter FROM Persons', 'DELETE FirstName=Peter FROM Persons', 'DELETE FirstName=Peter', 'DELETE FROM Persons WHERE FirstName = Peter', 'MySql');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(4, 'test', 'test', 'test', 'test', 'test', '6666'),
(7, 'ola', 'morina', 'olamorina', '123', 'ola@gmail.com', '22222222'),
(8, 'ooo', 'ooo', 'ooo', '111', 'ooo@gmail.com', '33333'),
(9, 'test123', 'test123', 'test123', 'test123', 'test@test.test', 'testet'),
(10, 'asd', 'asd', 'asd', 'asd', 'asd@a.a', 'asd'),
(11, 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'asdasd@asda.asda', 'asdasd'),
(14, 'asdasd', 'asdasd', 'asdasd', 'asdaasdasd', '', ''),
(15, 'altina', 'avdyli', 'altina1', '111111111', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_category`
--
ALTER TABLE `exam_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_category`
--
ALTER TABLE `exam_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
