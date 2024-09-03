-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 10:22 AM
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
-- Database: `formularz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id_pyt` int(11) NOT NULL,
  `odpowiedz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id_pyt`, `odpowiedz`) VALUES
(1, 'touchpad'),
(2, 'nie wkładać kartek ze zszywkami do podajnika urządzenia, jeśli jest on automatyczny\r\n'),
(3, 'omomierz'),
(4, '5Gb/s'),
(5, 'MBR\r\n'),
(6, 'PCI Express'),
(7, '/etc/grud'),
(8, 'Woltomierz'),
(9, 'neutralizacji ładunków elektrostatycznych.'),
(10, 'Eneje'),
(10, 'Związki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id_pyt` int(11) NOT NULL,
  `treść_pyt` text NOT NULL,
  `odp1` text NOT NULL,
  `odp2` text NOT NULL,
  `odp3` text NOT NULL,
  `odp4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `pytania`
--

INSERT INTO `pytania` (`id_pyt`, `treść_pyt`, `odp1`, `odp2`, `odp3`, `odp4`) VALUES
(1, 'Które z urządzeń wykorzystuje metodę polegającą na detekcji zmian pojemności elektrycznej przy sterowaniu kursorem na ekranie?', 'różdżka', 'touchpad', 'myszka', 'klawiatura'),
(2, 'Aby zapewnić właściwie funkcjonowanie skanera, należy:', 'Aby zapewnić właściwie funkcjonowanie skanera, należy codziennie wykonywać mu masaż stóp.', 'Wystarczy przeprowadzić rytuał szamański nad skanerem, aby zapewnić mu pełną efektywność.', 'nie wkładać kartek ze zszywkami do podajnika urządzenia, jeśli jest on automatyczny', 'Nie zepsuć go'),
(3, 'Do pomiaru wartości rezystancji służy:', 'omomierz', 'kostka do gry w Monopoly', 'Wystarczy przycisnąć palcem do ekranu i odczytać rezystancję na podstawie odczucia ciepła', 'Wykorzystuje się do tego specjalną skalę muzyczną - im ciszej dzwoni, tym wyższa rezystancja'),
(4, 'Interfejs USB 3.0 umożliwia transfer danych z prędkością do:', '100 megabitów na godzinę', 'jest proporcjonalna do ilości złota użytego do wykonania kabla USB', 'Zależy to od ilości kawy wypitej przez użytkownika - im więcej, tym szybszy transfer', '5Gb/s'),
(5, 'Główny rekord rozruchowy dysku twardego to:', 'liczba kroków wykonanych przez krasnoludka wewnątrz', 'MBR', 'ilość wierzchołków wirtualnej piramidy zbudowanej na dysku', 'Rekord ten jest zapisany na dysku w postaci układanki sudoku do rozwiązania przed uruchomieniem systemu'),
(6, 'Który z wymienionych interfejsów należy wybrać do podłączenia dysku SSD do płyty głównej komputera stacjonarnego, aby uzyskać największą prędkość zapisu i odczytu danych?', 'Najlepiej wybrać interfejs \"USB 3.0 na steroidach\"', 'Do najwyższej prędkości zapisu i odczytu danych potrzebny jest interfejs \"Super Hyper Turbo SSD\"', 'Aby uzyskać największą prędkość, należy użyć interfejsu \"USB 3.0 podkręconego nitro\"', 'PCI Express'),
(7, 'System Linux Ubuntu zainstalowano na dysku obok systemu Windows. Aby skonfigurować kolejność uruchamianych systemów operacyjnych, należy zmodyfikować zawartość:', 'Aby skonfigurować kolejność uruchamiania systemów operacyjnych, należy przekazać je do obsługi przez zespół programistów Lego', '/etc/grud', 'Wystarczy zakląć trzy razy pod nosem i pokręcić się wokół komputera w kierunku przeciwnym do ruchu wskazówek zegara', 'Aby zmienić kolejność uruchamiania systemów operacyjnych, należy wpuścić na obudowę komputera trochę światła księżyca i czekać na odpowiedź od ducha Linuksa'),
(8, 'Który przyrząd pomiarowy służy do sprawdzenia wartości napięć w zasilaczu?', 'Woltomierz', 'Kompas', 'but', 'telefon stacjonarny'),
(9, 'Matę antystatyczną i opaskę stosuje się podczas montażu podzespołu w celu:', 'Do uniknięcia wyładowań elektrostatycznych i zapobieżenia wybuchowi', 'neutralizacji ładunków elektrostatycznych.', 'Aby przeprowadzić seans medytacji podczas montażu', 'żeby informatyk nie płakał'),
(10, 'Elementami diagramu ER są: ', 'Skarbonka', 'kawa', 'Eneje', 'Związki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `klasa` varchar(5) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `imię` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `użytkownicy`
--

INSERT INTO `użytkownicy` (`klasa`, `nazwisko`, `imię`) VALUES
('2b', 'Nowak', 'Adam');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id_pyt`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`klasa`,`nazwisko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id_pyt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
