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
-- Struktura tabeli dla tabeli `punkty_historia`
--

CREATE TABLE `punkty_historia` (
  `id` int(11) NOT NULL,
  `kategoria` text NOT NULL,
  `ilosc_punktow` int(11) NOT NULL,
  `dom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `punkty_historia`
--

INSERT INTO `punkty_historia` (`id`, `kategoria`, `ilosc_punktow`, `dom`) VALUES
(64, 'Kartkówka', 20, 'Gryffindor'),
(65, 'Kartkówka', 15, 'Slytherin'),
(66, 'Konkurs', 111, 'Gryffindor'),
(67, 'bo tak', 1111, 'Hufflepuff'),
(68, 'Kartkówka', 111, 'Ravenclaw'),
(69, 'bo tak', 1000, 'Gryffindor'),
(70, 'Konkurs', 20, 'Gryffindor'),
(71, 'Kartkówka', 25, 'Gryffindor'),
(72, 'Sprawdzian', 15, 'Gryffindor'),
(73, 'Sprawdzian', 20, 'Gryffindor'),
(74, 'Sprawdzian', 30, 'Gryffindor'),
(75, 'Sprawdzian', 25, 'Gryffindor'),
(76, 'Sprawdzian', 30, 'Gryffindor');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `punkty_historia`
--
ALTER TABLE `punkty_historia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `punkty_historia`
--
ALTER TABLE `punkty_historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
