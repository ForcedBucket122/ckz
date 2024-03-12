-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 10:15 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2pb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klasy`
--

CREATE TABLE `klasy` (
  `klasa` varchar(4) NOT NULL,
  `imie_wychowawcy` varchar(50) NOT NULL,
  `nazwisko_wychowawcy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klasy`
--

INSERT INTO `klasy` (`klasa`, `imie_wychowawcy`, `nazwisko_wychowawcy`) VALUES
('2a', 'Emilia', 'Podsiadło'),
('4c', 'Adam', 'Bartoszek'),
('3b', 'Helena', 'Nowak'),
('2in', 'Andrzej', 'Lasak'),
('2c', 'Bartłomiej', 'Psikuta'),
('2a', 'Wiesław', 'Baczyński'),
('5b', 'Andrzej', 'Ptaszny'),
('4el', 'Wiktoria', 'Brykło'),
('1a', 'Edyta', 'Gari'),
('2h', 'Stanisława', 'Dziwnówna'),
('3r', 'Josh', 'Lanos'),
('2pb', 'Wacław', 'Gardziejewski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `ulica` varchar(70) NOT NULL,
  `numer_domu` varchar(10) NOT NULL,
  `numer_lokalu` int(11) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `miejscowosc` varchar(50) NOT NULL,
  `klasa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `ulica`, `numer_domu`, `numer_lokalu`, `kod_pocztowy`, `miejscowosc`, `klasa`) VALUES
(16, 'Andrzej', 'Duda', ' Krakowskie Przedmieście ', '46/48', 12, '00-071', 'Warszawa', '4c'),
(17, 'Danuta', 'Baczynska', 'Kiedrzynska', '8', 12, '43-135', 'Poznań', '2a'),
(18, 'Anna', 'Berdysowa', 'Wyzwolenia', '162', 2, '05-125', 'Poznań', '3n'),
(19, 'Ewa', 'Cygan', 'Ludowa', '12', 2, '65-632', 'Pułtusk', '5b'),
(20, 'Magdalena', 'Cygan', 'Sportowa', '24', 12, '74-125', 'Poznań', '2in'),
(21, 'Bartosz', 'Derda', 'Sejmowa', '215', 6, '24-531', 'Gdańsk', '4el'),
(22, 'Barbara', 'Czarnoleska', 'Kiedrzynska', '5', 55, '74-125', 'Poznań', '2c'),
(23, 'Beata', 'Luft', 'Sportowa', '6', 1, '67-812', 'Katowice', '1a'),
(24, 'Adam', 'Frukacz', 'PCK', '56', 12, '63-212', 'Poznań', '2h'),
(25, 'Krystyna', 'Kedzierska', 'Kopernika', '62', 2, '54-125', 'Bydgoszcz', '4c'),
(26, 'Karolina', 'Kasperczyk', 'Fieldorfa', '25', 4, '74-125', 'Jelenia Góra', '3r'),
(27, 'Krystyna', 'Gnutek', 'Mickiewicza', '27', 5, '65-412', 'Lublin', '3b'),
(28, 'Zbigniewa', 'Konieczna', 'Broniewskiego', '125', 56, '64-231', 'Kraków', '1in'),
(29, 'Dorota', 'Jeziak', 'Porajska', '84b', 2, '73-421', 'Rybnik', '3a'),
(30, 'Monika', 'Kamil', 'Starzynskiego', '125c', 5, '43-410', 'Kielce', '2c'),
(43, 'Adam', 'Zozworek', 'Januszowa', '122', 0, '44-420', 'Jastrzebie Zdroj', '2pb'),
(57, 'michal', 'zbikowski', 'szkolna', '12', 42, '44-444', 'marcinkowo', '2pb');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
