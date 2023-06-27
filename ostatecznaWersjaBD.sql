-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 05:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcategory` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcategory`, `name`, `description`) VALUES
('filmy-i-seriale', 'Filmy i Seriale', 'Pochwal się co teraz oglądasz'),
('kuchnia', 'Kuchnia', 'mniam mniam mniam'),
('literatura', 'Literatura', 'Kategoria poświęcona literaturze'),
('muzyka-i-sztuka-itp', 'Muzyka i Sztuka itp', 'Tutaj może porozmawiać z innymi o wszelkich utworach i dziełachs&#13;&#10;s&#13;&#10;'),
('nauka-i-technologia', 'Nauka i Technologia', 'Skomplikowane rzeczy'),
('podróże', 'Podróże', 'Do odległych krain');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `content` varchar(180) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`idmessage`, `creation_date`, `content`, `thread_id`, `user_id`) VALUES
(88, '2023-06-26 20:57:29', '123', 63, 2),
(89, '2023-06-27 08:49:26', 'uśmiech', 64, 2),
(90, '2023-06-27 08:49:59', 'uśmiech', 65, 2),
(91, '2023-06-27 08:53:35', 'fdsfsd', 66, 2),
(92, '2023-06-27 08:54:01', 'pop', 67, 2),
(93, '2023-06-27 08:56:32', 'Bruh', 46, 2),
(94, '2023-06-27 08:57:04', 'ziom musimy zrabowć tego chłopa', 68, 2),
(95, '2023-06-27 08:57:50', 'asda', 69, 2),
(96, '2023-06-27 08:59:32', 'sadge', 70, 2),
(97, '2023-06-27 09:01:50', 'das', 71, 2),
(98, '2023-06-27 09:05:06', '123', 72, 2),
(99, '2023-06-27 09:11:02', 'sad', 73, 2),
(100, '2023-06-27 09:12:28', 'c', 74, 2),
(101, '2023-06-27 09:12:38', 'sda', 75, 2),
(102, '2023-06-27 09:13:36', '3', 76, 2),
(103, '2023-06-27 09:13:50', '3', 77, 2),
(104, '2023-06-27 09:18:47', '222', 78, 2),
(105, '2023-06-27 09:23:43', '11', 79, 2),
(106, '2023-06-27 09:23:57', '222', 80, 2),
(107, '2023-06-27 09:43:59', '222', 81, 2),
(108, '2023-06-27 09:44:57', 'dsa', 53, 2),
(109, '2023-06-27 09:45:03', 'sad', 53, 2),
(110, '2023-06-27 09:45:05', 'sda', 53, 2),
(111, '2023-06-27 09:45:56', 'dsa', 53, 2),
(112, '2023-06-27 09:46:06', 'ds', 53, 2),
(113, '2023-06-27 09:46:26', 'a', 82, 2),
(114, '2023-06-27 09:47:19', 'asad', 83, 2),
(115, '2023-06-27 09:51:39', 's', 83, 2),
(116, '2023-06-27 09:52:08', 'h', 84, 2),
(117, '2023-06-27 10:49:15', 'sda', 40, 1),
(118, '2023-06-27 10:49:17', '232', 40, 1),
(119, '2023-06-27 10:49:40', 'dsad', 40, 2),
(120, '2023-06-27 10:49:43', '2313', 40, 2),
(121, '2023-06-27 10:49:46', '321', 40, 1),
(122, '2023-06-27 10:49:48', '23', 40, 1),
(123, '2023-06-27 10:49:49', '12', 40, 1),
(124, '2023-06-27 10:49:52', '32', 40, 2),
(125, '2023-06-27 10:49:54', '3213', 40, 2),
(126, '2023-06-27 10:49:56', '1', 40, 2),
(127, '2023-06-27 10:49:57', '31', 40, 2),
(128, '2023-06-27 10:49:59', '2', 40, 1),
(129, '2023-06-27 10:50:01', 'fs', 40, 1),
(130, '2023-06-27 10:50:04', 'http://localhost/projekt/public/thread/40', 40, 1),
(131, '2023-06-27 10:50:10', 'fs', 40, 1),
(132, '2023-06-27 10:50:12', 'fs', 40, 1),
(133, '2023-06-27 10:50:14', 'fs', 40, 1),
(134, '2023-06-27 10:50:15', 'fs', 40, 1),
(135, '2023-06-27 10:50:17', 'fs', 40, 1),
(136, '2023-06-27 10:50:18', 'fs', 40, 1),
(137, '2023-06-27 10:50:23', 'as', 40, 2),
(138, '2023-06-27 10:50:26', 'as', 40, 2),
(139, '2023-06-27 12:37:35', 'a', 85, 1),
(140, '2023-06-27 12:37:40', 'a', 86, 1),
(141, '2023-06-27 12:37:42', 'a', 87, 1),
(142, '2023-06-27 12:37:44', 'a', 88, 1),
(143, '2023-06-27 12:37:46', 'a', 89, 1),
(144, '2023-06-27 12:37:47', 'a', 90, 1),
(145, '2023-06-27 12:37:49', 'a', 91, 1),
(146, '2023-06-27 12:37:51', 'a', 92, 1),
(147, '2023-06-27 12:38:03', 'a', 93, 1),
(148, '2023-06-27 12:38:07', 'a&#13;&#10;', 93, 1),
(149, '2023-06-27 12:38:10', 'a', 94, 1),
(150, '2023-06-27 12:38:17', 'a', 95, 1),
(151, '2023-06-27 12:38:21', 'a', 96, 1),
(152, '2023-06-27 12:38:23', 'a', 97, 1),
(153, '2023-06-27 12:38:25', 'a', 98, 1),
(154, '2023-06-27 12:38:26', 'a', 99, 1),
(155, '2023-06-27 12:38:27', 'a', 100, 1),
(156, '2023-06-27 12:38:28', 'a', 101, 1),
(157, '2023-06-27 12:38:28', 'a', 101, 1),
(158, '2023-06-27 12:38:29', 'a', 103, 1),
(159, '2023-06-27 12:38:44', 'd', 104, 1),
(160, '2023-06-27 12:38:46', 'd', 105, 1),
(161, '2023-06-27 12:38:48', 'd', 106, 1),
(162, '2023-06-27 12:39:01', 'sdf', 107, 1),
(163, '2023-06-27 12:39:22', 'f', 108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `private_message`
--

CREATE TABLE `private_message` (
  `idmessage` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `content` varchar(180) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `idthread` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `category_id` varchar(45) NOT NULL,
  `message_count` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`idthread`, `topic`, `creation_date`, `update_date`, `category_id`, `message_count`, `user_id`) VALUES
(1, 'Gloryhammer nowy album', '2023-06-17 14:13:18', '2023-06-17 14:13:18', 'muzyka-i-sztuka-itp', 0, 2),
(2, 'Co sądzicie o breakcore, czy można jeszcze na', '2023-06-18 19:28:31', '2023-06-18 19:28:31', 'muzyka-i-sztuka-itp', 0, 1),
(3, 'Najnowszy singiel Arctic Monkeys', '2023-06-19 10:45:22', '2023-06-19 10:45:22', 'muzyka-i-sztuka-itp', 0, 3),
(4, 'Ostatnia wystawa malarstwa abstrakcyjnego', '2023-06-19 16:57:10', '2023-06-19 16:57:10', 'muzyka-i-sztuka-itp', 0, 4),
(5, 'Recital pianistyczny Chopina', '2023-06-19 20:12:45', '2023-06-19 20:12:45', 'muzyka-i-sztuka-itp', 0, 5),
(6, 'Najlepsze miejsca do zwiedzania w Paryżu', '2023-06-20 09:23:14', '2023-06-20 09:23:14', 'podróże', 0, 2),
(7, 'Filmowe premiery tego miesiąca', '2023-06-20 14:45:29', '2023-06-20 14:45:29', 'filmy-i-seriale', 0, 1),
(8, 'Co sądzicie o teatrze eksperymentalnym?', '2023-06-21 11:36:08', '2023-06-21 11:36:08', 'muzyka-i-sztuka-itp', 0, 3),
(9, 'Najlepsze książki fantasy ostatnich lat', '2023-06-21 18:09:52', '2023-06-21 18:09:52', 'literatura', 0, 4),
(10, 'Najnowszy album Ed Sheeran', '2023-06-22 15:28:07', '2023-06-22 15:28:07', 'muzyka-i-sztuka-itp', 0, 5),
(11, 'Najlepsze plaże na Costa Brava', '2023-06-23 10:55:41', '2023-06-23 10:55:41', 'podróże', 0, 2),
(12, 'Nowy sezon serialu \"The Witcher\"', '2023-06-23 16:40:19', '2023-06-23 16:40:19', 'filmy-i-seriale', 0, 1),
(13, 'Sztuka uliczna w Nowym Jorku', '2023-06-24 13:15:56', '2023-06-24 13:15:56', 'muzyka-i-sztuka-itp', 0, 3),
(14, 'Najlepsze powieści kryminalne', '2023-06-24 19:57:34', '2023-06-24 19:57:34', 'literatura', 0, 4),
(15, 'Koncert Beyoncé w Madison Square Garden', '2023-06-25 17:30:21', '2023-06-25 17:30:21', 'muzyka-i-sztuka-itp', 0, 5),
(16, 'Najpiękniejsze zamki w Europie', '2023-06-26 12:48:56', '2023-06-26 12:48:56', 'podróże', 0, 2),
(17, 'Najlepsze seriale dramatyczne', '2023-06-26 18:22:42', '2023-06-26 18:22:42', 'filmy-i-seriale', 0, 1),
(18, 'Wystawa sztuki współczesnej w Muzeum Guggenhe', '2023-06-27 15:39:18', '2023-06-27 15:39:18', 'muzyka-i-sztuka-itp', 0, 3),
(19, 'Najlepsze powieści science fiction', '2023-06-27 21:11:59', '2023-06-27 21:11:59', 'literatura', 0, 4),
(20, 'Koncert Coldplay w Londynie', '2023-06-28 17:56:33', '2023-06-28 17:56:33', 'muzyka-i-sztuka-itp', 0, 5),
(21, 'Wyprawa w góry Alpy', '2023-06-29 14:27:19', '2023-06-29 14:27:19', 'podróże', 0, 2),
(22, 'Nowy sezon serialu \"Breaking Bad\"', '2023-06-29 20:08:45', '2023-06-29 20:08:45', 'filmy-i-seriale', 0, 1),
(23, 'Wystawa fotografii Anselma Adamsa', '2023-06-30 16:40:22', '2023-06-30 16:40:22', 'muzyka-i-sztuka-itp', 0, 3),
(24, 'Najlepsze thrillery psychologiczne', '2023-06-30 22:15:09', '2023-06-30 22:15:09', 'literatura', 0, 4),
(25, 'Koncert Taylor Swift w Staples Center', '2023-07-01 19:08:37', '2023-07-01 19:08:37', 'muzyka-i-sztuka-itp', 0, 5),
(26, 'Najlepsze przepisy kulinarne z całego świata', '2023-07-02 15:51:24', '2023-07-02 15:51:24', 'kuchnia', 0, 2),
(27, 'Ranking najlepszych filmów komediowych', '2023-07-02 21:37:59', '2023-07-02 21:37:59', 'filmy-i-seriale', 0, 1),
(28, 'Wystawa malarstwa renesansowego w Luwrze', '2023-07-03 17:59:08', '2023-07-03 17:59:08', 'muzyka-i-sztuka-itp', 0, 3),
(29, 'Najlepsze powieści romantyczne', '2023-07-03 23:44:56', '2023-07-03 23:44:56', 'literatura', 0, 4),
(31, 'Najpiękniejsze plaże na Hawajach', '2023-07-05 16:28:47', '2023-07-05 16:28:47', 'podróże', 0, 2),
(32, 'Nowy sezon serialu \"Friends\"', '2023-07-05 22:13:14', '2023-07-05 22:13:14', 'filmy-i-seriale', 0, 1),
(36, 'Najlepsze miejsca na kemping', '2023-07-02 15:40:55', '2023-07-02 15:40:55', 'podróże', 0, 2),
(37, 'Najlepsze filmy komediowe', '2023-07-02 21:17:33', '2023-07-02 21:17:33', 'filmy-i-seriale', 0, 1),
(38, 'Nowa wystawa w Muzeum Historii Naturalnej', '2023-07-03 18:30:41', '2023-07-03 18:30:41', 'nauka-i-technologia', 0, 3),
(39, 'Najlepsze powieści romantyczne', '2023-07-03 23:59:16', '2023-07-03 23:59:16', 'literatura', 0, 4),
(40, 'Koncert Queen + Adam Lambert', '2023-07-04 20:45:29', '2023-06-27 10:50:26', 'muzyka-i-sztuka-itp', 22, 5),
(41, 'Najlepsze miejsca na nurkowanie', '2023-07-05 17:30:52', '2023-07-05 17:30:52', 'podróże', 0, 2),
(42, 'Najlepsze seriale fantasy', '2023-07-05 23:08:14', '2023-07-05 23:08:14', 'filmy-i-seriale', 0, 1),
(46, 'Najlepsze restauracje w Rzymie', '2023-07-02 16:53:15', '2023-06-27 08:56:32', 'kuchnia', 1, 2),
(47, 'Ranking najlepszych filmów komediowych', '2023-07-02 22:41:09', '2023-07-02 22:41:09', 'filmy-i-seriale', 0, 1),
(48, 'Wystawa rzeźby nowoczesnej w Tate Modern', '2023-07-03 18:29:56', '2023-07-03 18:29:56', 'muzyka-i-sztuka-itp', 0, 3),
(49, 'Najlepsze powieści romantyczne', '2023-07-03 23:57:41', '2023-07-03 23:57:41', 'literatura', 0, 4),
(51, 'Najlepsze miejsca do nurkowania na Karaibach', '2023-07-05 17:48:19', '2023-07-05 17:48:19', 'podróże', 0, 2),
(52, 'Nowy sezon serialu \"Friends\"', '2023-07-05 23:35:06', '2023-07-05 23:35:06', 'filmy-i-seriale', 0, 1),
(53, 'Wystawa malarstwa impresjonistycznego', '2023-07-06 19:22:53', '2023-06-27 09:46:06', 'muzyka-i-sztuka-itp', 5, 3),
(56, 'Witam wszystkich', '2023-06-26 20:43:47', '2023-06-26 20:43:47', 'muzyka-i-sztuka-itp', 1, 1),
(57, 'Witam wszystkich', '2023-06-26 20:45:36', '2023-06-26 20:45:36', 'muzyka-i-sztuka-itp', 1, 1),
(58, 'Witam wszystkich', '2023-06-26 20:46:24', '2023-06-26 20:46:24', 'muzyka-i-sztuka-itp', 1, 1),
(59, 'Witam', '2023-06-26 20:48:13', '2023-06-26 20:48:13', 'muzyka-i-sztuka-itp', 1, 2),
(60, 'Witam', '2023-06-26 20:48:26', '2023-06-26 20:48:26', 'muzyka-i-sztuka-itp', 1, 2),
(61, 'nowy watek', '2023-06-26 20:50:01', '2023-06-26 20:50:01', 'muzyka-i-sztuka-itp', 1, 2),
(62, 'nowy watek', '2023-06-26 20:56:21', '2023-06-26 20:56:21', 'muzyka-i-sztuka-itp', 1, 2),
(63, 'nowy watek', '2023-06-26 20:57:29', '2023-06-26 20:57:29', 'muzyka-i-sztuka-itp', 1, 2),
(64, 'Siemka', '2023-06-27 08:49:26', '2023-06-27 08:49:26', 'muzyka-i-sztuka-itp', 1, 2),
(65, 'Siemka', '2023-06-27 08:49:59', '2023-06-27 08:49:59', 'muzyka-i-sztuka-itp', 1, 2),
(66, 'asdsa', '2023-06-27 08:53:35', '2023-06-27 08:53:35', 'muzyka-i-sztuka-itp', 1, 2),
(67, 'lbkbj', '2023-06-27 08:54:01', '2023-06-27 08:54:01', 'muzyka-i-sztuka-itp', 1, 2),
(68, 'Ja rabuje człowieka', '2023-06-27 08:57:04', '2023-06-27 08:57:04', 'kuchnia', 1, 2),
(69, 'dasd', '2023-06-27 08:57:50', '2023-06-27 08:57:50', 'kuchnia', 1, 2),
(70, 'dead by dawn', '2023-06-27 08:59:32', '2023-06-27 08:59:32', 'muzyka-i-sztuka-itp', 1, 2),
(71, 'dasd', '2023-06-27 09:01:50', '2023-06-27 09:01:50', 'muzyka-i-sztuka-itp', 1, 2),
(72, '123', '2023-06-27 09:05:06', '2023-06-27 09:05:06', 'kuchnia', 1, 2),
(73, 'dsadas', '2023-06-27 09:11:02', '2023-06-27 09:11:02', 'kuchnia', 1, 2),
(74, 'w', '2023-06-27 09:12:28', '2023-06-27 09:12:28', 'kuchnia', 1, 2),
(75, 'asd', '2023-06-27 09:12:38', '2023-06-27 09:12:38', 'kuchnia', 1, 2),
(76, '132', '2023-06-27 09:13:36', '2023-06-27 09:13:36', 'kuchnia', 1, 2),
(77, '132', '2023-06-27 09:13:50', '2023-06-27 09:13:50', 'kuchnia', 1, 2),
(78, '111', '2023-06-27 09:18:47', '2023-06-27 09:18:47', 'kuchnia', 1, 2),
(79, '21', '2023-06-27 09:23:43', '2023-06-27 09:23:43', 'kuchnia', 1, 2),
(80, '111a', '2023-06-27 09:23:57', '2023-06-27 09:23:57', 'kuchnia', 1, 2),
(81, '111a', '2023-06-27 09:43:59', '2023-06-27 09:43:59', 'kuchnia', 1, 2),
(82, 'dsads', '2023-06-27 09:46:26', '2023-06-27 09:46:26', 'muzyka-i-sztuka-itp', 1, 2),
(83, 'dsads', '2023-06-27 09:47:19', '2023-06-27 09:51:39', 'muzyka-i-sztuka-itp', 2, 2),
(84, 'klj', '2023-06-27 09:52:08', '2023-06-27 09:52:08', 'muzyka-i-sztuka-itp', 1, 2),
(85, 'a', '2023-06-27 12:37:35', '2023-06-27 12:37:35', 'literatura', 1, 1),
(86, 'a', '2023-06-27 12:37:40', '2023-06-27 12:37:40', 'literatura', 1, 1),
(87, 'a', '2023-06-27 12:37:42', '2023-06-27 12:37:42', 'literatura', 1, 1),
(88, 'a', '2023-06-27 12:37:44', '2023-06-27 12:37:44', 'literatura', 1, 1),
(89, 'a', '2023-06-27 12:37:46', '2023-06-27 12:37:46', 'literatura', 1, 1),
(90, 'a', '2023-06-27 12:37:47', '2023-06-27 12:37:47', 'literatura', 1, 1),
(91, 'a', '2023-06-27 12:37:49', '2023-06-27 12:37:49', 'literatura', 1, 1),
(92, 'a', '2023-06-27 12:37:51', '2023-06-27 12:37:51', 'literatura', 1, 1),
(93, 'a', '2023-06-27 12:38:03', '2023-06-27 12:38:07', 'literatura', 2, 1),
(94, 'a', '2023-06-27 12:38:10', '2023-06-27 12:38:10', 'literatura', 1, 1),
(95, 'a', '2023-06-27 12:38:17', '2023-06-27 12:38:17', 'literatura', 1, 1),
(96, 'a', '2023-06-27 12:38:21', '2023-06-27 12:38:21', 'literatura', 1, 1),
(97, 'a', '2023-06-27 12:38:23', '2023-06-27 12:38:23', 'literatura', 1, 1),
(98, 'a', '2023-06-27 12:38:25', '2023-06-27 12:38:25', 'literatura', 1, 1),
(99, 'a', '2023-06-27 12:38:26', '2023-06-27 12:38:26', 'literatura', 1, 1),
(100, 'a', '2023-06-27 12:38:27', '2023-06-27 12:38:27', 'literatura', 1, 1),
(101, 'a', '2023-06-27 12:38:28', '2023-06-27 12:38:28', 'literatura', 1, 1),
(102, 'a', '2023-06-27 12:38:28', '2023-06-27 12:38:28', 'literatura', 1, 1),
(103, 'a', '2023-06-27 12:38:29', '2023-06-27 12:38:29', 'literatura', 1, 1),
(104, 'fsd', '2023-06-27 12:38:44', '2023-06-27 12:38:44', 'literatura', 1, 1),
(105, 'fsd', '2023-06-27 12:38:46', '2023-06-27 12:38:46', 'literatura', 1, 1),
(106, 'fsd', '2023-06-27 12:38:48', '2023-06-27 12:38:48', 'literatura', 1, 1),
(107, 'd', '2023-06-27 12:39:01', '2023-06-27 12:39:01', 'literatura', 1, 1),
(108, 'fds', '2023-06-27 12:39:22', '2023-06-27 12:39:22', 'literatura', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `role` varchar(20) NOT NULL,
  `creation_data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `role`, `creation_data`) VALUES
(1, 'admin', 'admin', 'admin@interia.pl', 'admin', '2023-05-21 13:00:28'),
(2, 'Krisent', '123', 'krisent@gmail.com', 'user', '2023-05-21 13:01:37'),
(3, 'Wilbur Redpot', '1234567890', 'will@gmail.com', 'user', '0000-00-00 00:00:00'),
(4, 'Fannybaws', 'on1therun(form', 'yarharhar@interia.pl', 'user', '0000-00-00 00:00:00'),
(5, 'sus69', '1234567890', 'sus@gmail.com', 'user', '2023-06-19 15:32:07'),
(26, 'kolejny', '1234567890/sus\\', 'kolejny@gmail.com', 'user', '0000-00-00 00:00:00'),
(30, 'dsadsa', '2132123131231', 'assdmin@interia.pl', 'user', '2023-06-19 15:15:08'),
(31, 'sdasadsadsa', '13222222222CXZXCZXCZ', 'sa@ds.pl', 'user', '2023-06-19 15:28:23'),
(33, 'Sir Roland The Wise', 'in3searchofthegrail!', 'roland@onet.pl', 'user', '2023-06-22 17:06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD KEY `fk_bookmark_user1_idx` (`user_id`),
  ADD KEY `fk_bookmark_message1_idx` (`message_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_thread1_idx` (`thread_id`),
  ADD KEY `fk_message_user1_idx` (`user_id`);

--
-- Indexes for table `private_message`
--
ALTER TABLE `private_message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_user1_idx` (`sender_id`),
  ADD KEY `fk_private_message_user1_idx` (`receiver_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`idthread`),
  ADD KEY `fk_thread_category1_idx` (`category_id`),
  ADD KEY `fk_thread_user1_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `private_message`
--
ALTER TABLE `private_message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `idthread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `fk_bookmark_message1` FOREIGN KEY (`message_id`) REFERENCES `message` (`idmessage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bookmark_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_thread1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`idthread`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_message_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `private_message`
--
ALTER TABLE `private_message`
  ADD CONSTRAINT `fk_message_user10` FOREIGN KEY (`sender_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_private_message_user1` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `fk_thread_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thread_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
