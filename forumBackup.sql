-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 08:25 PM
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
('filmy-i-seriale', 'Filmy i Seriale', '\\x26sdad'),
('kuchnia', 'Kuchnia', 'mniam mniam mniam'),
('literatura', 'Literatura', 'bla bla bla'),
('muzyka-i-sztuka-itp', 'Muzyka i Sztuka itp', 'Tutaj może porozmawiać z innymi o wszelkich utworach i dziełachs&#13;&#10;s&#13;&#10;'),
('nauka-i-technologia', 'Nauka i Technologia', 'bla bla bla'),
('podroze', 'Podróże', 's&#13;&#10;&#13;&#10;s');

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
(6, 'Najlepsze miejsca do zwiedzania w Paryżu', '2023-06-20 09:23:14', '2023-06-20 09:23:14', 'podroze', 0, 2),
(7, 'Filmowe premiery tego miesiąca', '2023-06-20 14:45:29', '2023-06-20 14:45:29', 'filmy-i-seriale', 0, 1),
(8, 'Co sądzicie o teatrze eksperymentalnym?', '2023-06-21 11:36:08', '2023-06-21 11:36:08', 'muzyka-i-sztuka-itp', 0, 3),
(9, 'Najlepsze książki fantasy ostatnich lat', '2023-06-21 18:09:52', '2023-06-21 18:09:52', 'literatura', 0, 4),
(10, 'Najnowszy album Ed Sheeran', '2023-06-22 15:28:07', '2023-06-22 15:28:07', 'muzyka-i-sztuka-itp', 0, 5),
(11, 'Najlepsze plaże na Costa Brava', '2023-06-23 10:55:41', '2023-06-23 10:55:41', 'podroze', 0, 2),
(12, 'Nowy sezon serialu \"The Witcher\"', '2023-06-23 16:40:19', '2023-06-23 16:40:19', 'filmy-i-seriale', 0, 1),
(13, 'Sztuka uliczna w Nowym Jorku', '2023-06-24 13:15:56', '2023-06-24 13:15:56', 'muzyka-i-sztuka-itp', 0, 3),
(14, 'Najlepsze powieści kryminalne', '2023-06-24 19:57:34', '2023-06-24 19:57:34', 'literatura', 0, 4),
(15, 'Koncert Beyoncé w Madison Square Garden', '2023-06-25 17:30:21', '2023-06-25 17:30:21', 'muzyka-i-sztuka-itp', 0, 5),
(16, 'Najpiękniejsze zamki w Europie', '2023-06-26 12:48:56', '2023-06-26 12:48:56', 'podroze', 0, 2),
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
(30, 'Koncert Metallica w Berlinie', '2023-07-04 19:36:22', '2023-07-04 19:36:22', 'muzyka-i-sztuka-itp', 0, 5),
(31, 'Najpiękniejsze plaże na Hawajach', '2023-07-05 16:28:47', '2023-07-05 16:28:47', 'podróże', 0, 2),
(32, 'Nowy sezon serialu \"Friends\"', '2023-07-05 22:13:14', '2023-07-05 22:13:14', 'filmy-i-seriale', 0, 1),
(33, 'Wystawa rzeźby współczesnej w Tate Modern', '2023-07-06 18:55:39', '2023-07-06 18:55:39', 'muzyka-i-sztuka-itp', 0, 3),
(34, 'Najlepsze powieści detektywistyczne', '2023-07-06 23:40:17', '2023-07-06 23:40:17', 'literatura', 0, 4),
(35, 'Koncert Adele w Sydney Opera House', '2023-07-07 20:33:41', '2023-07-07 20:33:41', 'muzyka', 0, 5);
(36, 'Najlepsze miejsca na kemping', '2023-07-02 15:40:55', '2023-07-02 15:40:55', 'podroze', 0, 2),
(37, 'Najlepsze filmy komediowe', '2023-07-02 21:17:33', '2023-07-02 21:17:33', 'filmy-i-seriale', 0, 1),
(38, 'Nowa wystawa w Muzeum Historii Naturalnej', '2023-07-03 18:30:41', '2023-07-03 18:30:41', 'nauka-i-technologia', 0, 3),
(39, 'Najlepsze powieści romantyczne', '2023-07-03 23:59:16', '2023-07-03 23:59:16', 'literatura', 0, 4),
(40, 'Koncert Queen + Adam Lambert', '2023-07-04 20:45:29', '2023-07-04 20:45:29', 'muzyka-i-sztuka-itp', 0, 5),
(41, 'Najlepsze miejsca na nurkowanie', '2023-07-05 17:30:52', '2023-07-05 17:30:52', 'podroze', 0, 2),
(42, 'Najlepsze seriale fantasy', '2023-07-05 23:08:14', '2023-07-05 23:08:14', 'filmy-i-seriale', 0, 1),
(43, 'Nowe odkrycia w dziedzinie kosmologii', '2023-07-06 19:56:27', '2023-07-06 19:56:27', 'nauka-i-technologia', 0, 3),
(44, 'Najlepsze powieści historyczne', '2023-07-06 22:43:51', '2023-07-06 22:43:51', 'literatura', 0, 4),
(45, 'Koncert Bruno Mars w MGM Grand Garden Arena', '2023-07-07 20:15:34', '2023-07-07 20:15:34', 'muzyka-i-sztuka-itp', 0, 5),
(46, 'Najlepsze restauracje w Rzymie', '2023-07-02 16:53:15', '2023-07-02 16:53:15', 'kuchnia', 0, 2),
(47, 'Ranking najlepszych filmów komediowych', '2023-07-02 22:41:09', '2023-07-02 22:41:09', 'filmy-i-seriale', 0, 1),
(48, 'Wystawa rzeźby nowoczesnej w Tate Modern', '2023-07-03 18:29:56', '2023-07-03 18:29:56', 'muzyka-i-sztuka-itp', 0, 3),
(49, 'Najlepsze powieści romantyczne', '2023-07-03 23:57:41', '2023-07-03 23:57:41', 'literatura', 0, 4),
(50, 'Koncert Metallica w Madison Square Garden', '2023-07-04 20:14:32', '2023-07-04 20:14:32', 'muzyka-i-sztuka-itp', 0, 5),
(51, 'Najlepsze miejsca do nurkowania na Karaibach', '2023-07-05 17:48:19', '2023-07-05 17:48:19', 'podroze', 0, 2),
(52, 'Nowy sezon serialu "Friends"', '2023-07-05 23:35:06', '2023-07-05 23:35:06', 'filmy-i-seriale', 0, 1),
(53, 'Wystawa malarstwa impresjonistycznego', '2023-07-06 19:22:53', '2023-07-06 19:22:53', 'muzyka-i-sztuka-itp', 0, 3),
(54, 'Najlepsze powieści historyczne', '2023-07-06 23:59:38', '2023-07-06 23:59:38', 'literatura', 0, 4),
(55, 'Koncert Beyoncé w Wembley Stadium', '2023-07-07 20:08:25', '2023-07-07 20:08:25', 'muzyka-i-sztuka-itp', 0, 5);

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
(31, 'sdasadsadsa', '13222222222CXZXCZXCZ', 'sa@ds.pl', 'user', '2023-06-19 15:28:23');

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
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_message`
--
ALTER TABLE `private_message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `idthread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
