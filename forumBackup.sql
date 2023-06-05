-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Cze 2023, 12:11
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `forum`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bookmark`
--

CREATE TABLE `bookmark` (
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category`
--

CREATE TABLE `category` (
  `idcategory` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `category`
--

INSERT INTO `category` (`idcategory`, `name`, `description`) VALUES
('adssda---s---s', 'adssda   s   s', 's&#13;&#10;&#13;&#10;&#13;&#10;s'),
('muzyka-i-sztuka-itp', 'Muzyka i Sztuka itp', 'Tutaj może porozmawiać z innymi o wszelkich utworach i dziełachs&#13;&#10;s&#13;&#10;'),
('sa23', 'sa23', '\\x26sdad');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `message`
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
-- Struktura tabeli dla tabeli `private_message`
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
-- Struktura tabeli dla tabeli `thread`
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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
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
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `role`, `creation_data`) VALUES
(1, 'admin', 'admin', 'admin@interia.pl', 'admin', '2023-05-21 13:00:28'),
(2, 'Krisent', '123', 'krisent@gmail.com', 'user', '2023-05-21 13:01:37');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bookmark`
--
ALTER TABLE `bookmark`
  ADD KEY `fk_bookmark_user1_idx` (`user_id`),
  ADD KEY `fk_bookmark_message1_idx` (`message_id`);

--
-- Indeksy dla tabeli `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indeksy dla tabeli `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_thread1_idx` (`thread_id`),
  ADD KEY `fk_message_user1_idx` (`user_id`);

--
-- Indeksy dla tabeli `private_message`
--
ALTER TABLE `private_message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_user1_idx` (`sender_id`),
  ADD KEY `fk_private_message_user1_idx` (`receiver_id`);

--
-- Indeksy dla tabeli `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`idthread`),
  ADD KEY `fk_thread_category1_idx` (`category_id`),
  ADD KEY `fk_thread_user1_idx` (`user_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `private_message`
--
ALTER TABLE `private_message`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `thread`
--
ALTER TABLE `thread`
  MODIFY `idthread` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `fk_bookmark_message1` FOREIGN KEY (`message_id`) REFERENCES `message` (`idmessage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_bookmark_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_thread1` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`idthread`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_message_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `private_message`
--
ALTER TABLE `private_message`
  ADD CONSTRAINT `fk_message_user10` FOREIGN KEY (`sender_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_private_message_user1` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `thread`
--
ALTER TABLE `thread`
  ADD CONSTRAINT `fk_thread_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thread_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
