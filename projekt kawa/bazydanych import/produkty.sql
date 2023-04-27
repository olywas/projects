-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lis 2021, 16:10
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
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `url` longtext NOT NULL,
  `nazwa` text NOT NULL,
  `cena` int(11) NOT NULL,
  `rodzaj` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `url`, `nazwa`, `cena`, `rodzaj`, `info`) VALUES
(25, 'https://www.carrefour.pl/images/product/org/inka-rozpuszczalna-kawa-zbozowa-200-g-nrtsoa.jpg', 'Kawa inka', 123, 'kawa', 'kawa inka 1kg'),
(26, 'https://www.carrefour.pl/images/product/org/jacobs-kronung-kawa-mielona-500-g-55er6l.jpg', 'Kawa JACOBS', 200, 'kawa', 'Jacobs Krönung Kawa mielona 500g'),
(27, 'https://a.allegroimg.com/original/03ea9d/a61ddb6d41d0b43adc34ba584652/Kawa-ziarnista-Tchibo-Caffe-Crema-Intense-1kg', 'Kawa ziarnista', 100, 'kawa', 'Kawa ziarnista Tchibo Caffé Crema Intense 1kg'),
(28, 'https://image.ceneostatic.pl/data/article_picture/79/24/c8f6-e6d9-4df0-9537-b3737d44628d_large.png', 'Kawa Mielona', 89, 'kawa', 'Kawa Prima Finezja Kawa Mielona 500g'),
(32, 'https://image.ceneostatic.pl/data/products/17174526/i-skawina-cafea-kawa-rozpuszczalna-250g.jpg', 'kawa rozpuszczalna', 30, 'kawa', 'Skawina Cafea kawa rozpuszczalna 250g'),
(33, 'https://www.carrefour.pl/images/product/org/inka-rozpuszczalna-kawa-zbozowa-z-karmelem-200-g-936fv0.jpg', 'Rozpuszczalna kawa zbożowa z karmelem', 30, 'kawa', 'Inka Rozpuszczalna kawa zbożowa z karmelem 200 g1'),
(34, 'https://www.carrefour.pl/images/product/org/carrefour-bio-kawa-ziarnista-500-g-ur7r5t.jpg', 'Kawa ziarnista', 45, 'kawa', 'Bio Kawa ziarnista 500 g'),
(35, 'https://selgros24.pl/images/prodImages/Nescafe_NESCAFE_Gold_Espresso_Original_Kawa_rozpuszczalna_95g_61106126_0_1000_1000.jpg', 'KAWA ROZPUSZCZALNA', 95, 'kawa', 'NESCAFÉ GOLD ESPRESSO ORIGINAL KAWA ROZPUSZCZALNA 95G'),
(36, 'https://image.ceneostatic.pl/data/products/10894314/i-nescafe-kawa-rozpuszczalna-classic-200g.jpg', 'Kawa rozpuszczalna', 32, 'kawa', 'Nescafe Kawa rozpuszczalna Classic 200G'),
(40, 'https://dlabiura24.pl/i/cms/herbata-zielona.jpg', 'Herbata zielona', 30, 'herbata', 'Herbata ekspresowa HERBAPOL Zielona 20szt.'),
(42, 'https://www.carrefour.pl/images/product/org/saga-herbata-czarna-140-g-100-torebek-od2otn.jpg', 'Saga Herbata czarna', 35, 'herbata', 'Saga Herbata czarna 140 g (100 torebek)');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
