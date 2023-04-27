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
-- Struktura tabeli dla tabeli `dom`
--

CREATE TABLE `dom` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `opis` text NOT NULL,
  `nagrody` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `dom`
--

INSERT INTO `dom` (`id`, `nazwa`, `opis`, `nagrody`, `logo`) VALUES
(1, 'Gryffindor', 'odwaga, męstwo, szczerość i szlachetność', 'brak', '1.png'),
(2, 'Slytherin', 'ambicja, spryt, przebiegłość i braterstwo', 'brak', '2.png'),
(3, 'Ravenclaw', 'inteligencja, mądrość, kreatywność i oryginalność', 'brak', '3.png'),
(4, 'Hufflepuff', 'sprawiedliwość, wierność, uprzejmość i pracowitość', 'brak', '4.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dom`
--
ALTER TABLE `dom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dom`
--
ALTER TABLE `dom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
