-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Sty 2022, 20:03
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `hogwart`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kroniki`
--

CREATE TABLE `kroniki` (
  `id` int(11) NOT NULL,
  `nazwa_kroniki` text NOT NULL,
  `Gryffindor` int(11) NOT NULL,
  `Slytherin` int(11) NOT NULL,
  `Ravenclaw` int(11) NOT NULL,
  `Hufflepuff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kroniki`
--

INSERT INTO `kroniki` (`id`, `nazwa_kroniki`, `Gryffindor`, `Slytherin`, `Ravenclaw`, `Hufflepuff`) VALUES
(1, '2021', 325, 200, 125, 300),
(18, '2021 test1', 253, 0, 65, -15),
(19, 'reset', 40, 111, 20, 70);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kroniki`
--
ALTER TABLE `kroniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kroniki`
--
ALTER TABLE `kroniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
