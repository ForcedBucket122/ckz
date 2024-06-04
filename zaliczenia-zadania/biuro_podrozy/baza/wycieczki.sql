-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 04, 2024 at 07:47 AM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wycieczki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(60) NOT NULL,
  `miejscowosc_zamieszkania` varchar(60) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `adres` varchar(40) NOT NULL,
  `numer_telefonu` int(12) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `miejscowosc_zamieszkania`, `kod_pocztowy`, `adres`, `numer_telefonu`, `email`) VALUES
(1, 'Adam', 'Nowak', 'Warszawa', '00-000', 'Gołębia7', 2147483647, 'wardziejewskigaclaw@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci_logowanie`
--

CREATE TABLE `klienci_logowanie` (
  `id_klienta` int(11) NOT NULL,
  `uzytkownik` varchar(30) NOT NULL,
  `haslo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `klienci_logowanie`
--

INSERT INTO `klienci_logowanie` (`id_klienta`, `uzytkownik`, `haslo`) VALUES
(1, 'ZoziTotalneL', 'jdjd123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wycieczki`
--

CREATE TABLE `wycieczki` (
  `id_wycieczki` int(11) NOT NULL,
  `kraj` varchar(99) NOT NULL,
  `miejscowosc` varchar(99) NOT NULL,
  `hotel` varchar(99) NOT NULL,
  `opis` varchar(1000) NOT NULL,
  `zdjecia` text NOT NULL,
  `data_wyjazdu` date NOT NULL,
  `data_przyjazdu` date NOT NULL,
  `ilosc_miejsc` int(11) NOT NULL,
  `cena` double(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wycieczki`
--

INSERT INTO `wycieczki` (`id_wycieczki`, `kraj`, `miejscowosc`, `hotel`, `opis`, `zdjecia`, `data_wyjazdu`, `data_przyjazdu`, `ilosc_miejsc`, `cena`) VALUES
(1, 'Hiszpania', 'Costa del Sol', 'Hotel THB San Fermin', 'Położony w zadbanym ogrodzie, blisko centrum Benalmadeny ze sklepami i barami, niedaleko piaszczystej plaży i mariny jest idealnym wyborem na udane wakacje na hiszpańskim „wybrzeżu słońca”.', 'https://wr.content4travel.com/itk-pl/img/agpferm_0.jpg?version=20240119-1448&source=lib&width=768&imgTag=1', '2024-06-03', '2024-06-11', 40, 2499.99),
(2, 'Turcja', 'Marmaris', 'Hotel Marmaris Bay Resort', 'Położony na malowniczym półwyspie, z którego podziwiać można przepiękne widoki na morze i góry, oraz cieszyć się bliskością pięknej plaży z bezpłatnym serwisem i barem.', 'https://wr.content4travel.com/itk-pl/img/dlmimpg_0.jpg?version=20231031-1056&source=lib&width=576&imgTag=1', '2024-09-16', '2024-09-23', 33, 4359.00),
(3, 'Grecja', 'Kreta', 'Hotel Kakkos Terra Blu', 'Zapraszamy na cudowny wypoczynek na Krecie – największej z greckich wysp w hotelu tylko dla dorosłych! Kameralny hotel Kakkos Terra Blue dołącza do grona elitarnych hoteli Kakkos Collection, które szczycą się wysoką jakością świadczonch usług i znakomitym serwisem.', 'https://wr.content4travel.com/itk-pl/img/herterr_0.jpg?version=20240527-1457&source=lib&width=576&imgTag=1', '2024-06-02', '2024-06-06', 64, 1699.69),
(4, 'Bułgaria', 'Złote Piaski', 'Hotel Azalia', 'Rewelacyjne położenie hotelu – bezpośrednio przy plaży, duży basen i zjeżdżalnie wodne, atrakcyjne zaplecze sportowo-rekreacyjne oraz oferta ultra all inclusive sprawiają, że ten komfortowy hotel jest świetnym miejscem wypoczynku.', 'https://wr.content4travel.com/itk-pl/img/varazal_0.jpg?version=20231031-1045&source=lib&width=576&imgTag=1', '2024-06-08', '2024-06-12', 20, 2137.69),
(5, 'Egipt', 'Marsa Alam', 'Hotel Casa Blue Luxury Resort', 'Hotel tylko dla Gości powyżej 12. roku życia w znanym kurorcie Marsa Alam, jest doskonałą opcją dla wszystkich, którzy cenią sobie komfortowy wypoczynek. Na miejscu 2 restauracje, 3 bary, 3 baseny, a także taras z zapierającym dech widokiem na morze.', 'https://wr.content4travel.com/itk-pl/img/rmfcasa_0.jpg?version=20240517-0914&source=lib&width=576&imgTag=1', '2024-06-01', '2024-06-08', 69, 5356.99);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `klienci_logowanie`
--
ALTER TABLE `klienci_logowanie`
  ADD PRIMARY KEY (`id_klienta`);

--
-- Indeksy dla tabeli `wycieczki`
--
ALTER TABLE `wycieczki`
  ADD PRIMARY KEY (`id_wycieczki`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `klienci_logowanie`
--
ALTER TABLE `klienci_logowanie`
  MODIFY `id_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wycieczki`
--
ALTER TABLE `wycieczki`
  MODIFY `id_wycieczki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
