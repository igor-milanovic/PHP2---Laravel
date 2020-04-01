-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 09:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stanovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `brsoba`
--

CREATE TABLE `brsoba` (
  `id` int(11) NOT NULL,
  `naziv` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brsoba`
--

INSERT INTO `brsoba` (`id`, `naziv`) VALUES
(1, '0.5'),
(2, '1'),
(3, '1.5'),
(4, '2'),
(5, '2.5'),
(6, '3'),
(7, '3.5'),
(8, '4'),
(9, '4.5'),
(10, '5'),
(11, '5+');

-- --------------------------------------------------------

--
-- Table structure for table `dodatno`
--

CREATE TABLE `dodatno` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dodatno`
--

INSERT INTO `dodatno` (`id`, `naziv`) VALUES
(1, 'Odmah useljiv'),
(2, 'Uknjižen'),
(3, 'Nije poslednji sprat'),
(4, 'Nije stan u kući'),
(5, 'Povraćaj PDV-a'),
(6, 'Salonski'),
(7, 'Duplex'),
(8, 'Penthouse'),
(9, 'Pod hipotekom'),
(10, 'Potkrovlje'),
(11, 'Dodatno novo');

-- --------------------------------------------------------

--
-- Table structure for table `grejanje`
--

CREATE TABLE `grejanje` (
  `id` int(11) NOT NULL,
  `naziv` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grejanje`
--

INSERT INTO `grejanje` (`id`, `naziv`) VALUES
(1, 'CG'),
(2, 'EG'),
(3, 'TA'),
(4, 'Gas'),
(5, 'Podno');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opstina`
--

CREATE TABLE `opstina` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `opstina`
--

INSERT INTO `opstina` (`id`, `naziv`) VALUES
(1, 'Vračar'),
(2, 'Zvezdara'),
(3, 'Palilula'),
(4, 'Mirijevo'),
(5, 'Zemun'),
(6, 'Vrčin'),
(7, 'Miljakovac'),
(8, 'Rakovica');

-- --------------------------------------------------------

--
-- Table structure for table `ostalo`
--

CREATE TABLE `ostalo` (
  `id` int(11) NOT NULL,
  `naziv` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ostalo`
--

INSERT INTO `ostalo` (`id`, `naziv`) VALUES
(1, 'Terasa'),
(2, 'Francuski balkon'),
(3, 'Lođa'),
(4, 'Klima'),
(5, 'Lift'),
(6, 'Podrum'),
(7, 'Topla voda'),
(8, 'Telefon'),
(9, 'KATV'),
(10, 'Internet'),
(11, 'Interfon'),
(12, 'Video nadzor'),
(13, 'Kamin'),
(14, 'Garaža'),
(15, 'Parking');

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `id` int(11) NOT NULL,
  `putanja` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `stanID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sprat`
--

CREATE TABLE `sprat` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sprat`
--

INSERT INTO `sprat` (`id`, `naziv`) VALUES
(1, 'SUT'),
(2, 'PSUT'),
(3, 'PR'),
(4, 'VPR'),
(5, 'Potkrovlje'),
(6, '2'),
(8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `stan`
--

CREATE TABLE `stan` (
  `id` int(11) NOT NULL,
  `tipNekretnineID` int(11) NOT NULL,
  `tipObjektaID` int(11) NOT NULL,
  `tipUslugeID` int(11) NOT NULL,
  `brSobaID` int(11) NOT NULL,
  `spratID` int(11) NOT NULL,
  `vlasnikID` int(11) NOT NULL,
  `opstinaID` int(11) NOT NULL,
  `ulicaID` int(11) NOT NULL,
  `broj` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brKvadrata` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cena` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stanjeID` int(11) NOT NULL,
  `naslov` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opis` text COLLATE utf8_unicode_ci,
  `slika` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ukupnaSpratnost` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prikazi` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stan`
--

INSERT INTO `stan` (`id`, `tipNekretnineID`, `tipObjektaID`, `tipUslugeID`, `brSobaID`, `spratID`, `vlasnikID`, `opstinaID`, `ulicaID`, `broj`, `brKvadrata`, `cena`, `stanjeID`, `naslov`, `opis`, `slika`, `ukupnaSpratnost`, `prikazi`) VALUES
(21, 2, 2, 1, 9, 4, 3, 1, 5, 'bb', '75', '15000', 1, 'Stan je na super mestu i jako je sredjen', '/', '1585327573_stan1.jpg', '2', 1),
(24, 1, 1, 2, 2, 6, 5, 7, 15, '250', '5', '350', 4, 'Izdajem sobu za studenta', 'Soba je taman za jednog coveka, jer dva ne mogu da stanu', '1585327877_soba1.jpg', '15', 1),
(25, 2, 1, 3, 5, 4, 1, 3, 11, '15', '60', '75800', 2, 'Renoviran stan idealan za par', '/', '1585327957_stan2.jpg', '12', 1),
(26, 2, 2, 1, 6, 5, 5, 4, 14, '80', '150', '250000', 3, 'Luksuzan stan za luksuzan zivot', '/', '1585328048_stan4.jpg', '12', 1),
(27, 2, 3, 1, 4, 6, 5, 5, 10, '140', '55', '76000', 1, 'Useljivo u novembru', '/', '1585328150_stan3.jpg', '6', 1),
(28, 3, 1, 1, 6, 1, 1, 6, 13, 'bb', '250', '55000', 1, 'U kuci vise nema ko da zivi, svi otisli van', NULL, '1585328237_kuca1.jpg', '2', 2),
(29, 6, 2, 2, 8, 1, 5, 7, 13, '585', '50', '450', 1, 'Lokal idealan za prodavnicu', 'Opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis', '1585328335_lokal2.JPG', '/', 2),
(30, 5, 1, 2, 2, 3, 3, 2, 5, '/', '20', '450', 1, 'Garaza ima video nadzor', 'Garaza ima video nadzor', '1585339937_garaza2.jpg', '/', 2),
(31, 5, 1, 1, 2, 6, 1, 7, 11, '15', '20', '1500', 1, 'Prodajem garazu i samom centru', NULL, '1585328480_garaza1.jpg', '/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stanje_objekta`
--

CREATE TABLE `stanje_objekta` (
  `id` int(11) NOT NULL,
  `naziv` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stanje_objekta`
--

INSERT INTO `stanje_objekta` (`id`, `naziv`) VALUES
(1, 'Izvorno stanje'),
(2, 'Renovirano'),
(3, 'Lux'),
(4, 'Za renoviranje');

-- --------------------------------------------------------

--
-- Table structure for table `stan_dodatno`
--

CREATE TABLE `stan_dodatno` (
  `id` int(11) NOT NULL,
  `stanID` int(11) NOT NULL,
  `dodatnoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stan_dodatno`
--

INSERT INTO `stan_dodatno` (`id`, `stanID`, `dodatnoID`) VALUES
(17, 21, 3),
(18, 24, 1),
(19, 25, 1),
(20, 25, 6),
(21, 26, 1),
(22, 26, 2),
(23, 26, 9),
(24, 27, 3),
(25, 27, 4),
(26, 27, 5),
(27, 28, 1),
(28, 29, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stan_grejanje`
--

CREATE TABLE `stan_grejanje` (
  `id` int(11) NOT NULL,
  `stanID` int(11) NOT NULL,
  `grejanjeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stan_grejanje`
--

INSERT INTO `stan_grejanje` (`id`, `stanID`, `grejanjeID`) VALUES
(22, 21, 1),
(23, 21, 3),
(24, 25, 1),
(25, 26, 1),
(26, 26, 5),
(27, 27, 1),
(28, 28, 3),
(29, 29, 3),
(30, 29, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stan_ostalo`
--

CREATE TABLE `stan_ostalo` (
  `id` int(11) NOT NULL,
  `stanID` int(11) NOT NULL,
  `ostaloID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stan_ostalo`
--

INSERT INTO `stan_ostalo` (`id`, `stanID`, `ostaloID`) VALUES
(20, 21, 3),
(21, 21, 7),
(22, 21, 9),
(23, 21, 12),
(24, 25, 2),
(25, 25, 4),
(26, 25, 8),
(27, 25, 10),
(28, 26, 2),
(29, 26, 3),
(30, 26, 9),
(31, 26, 12),
(32, 26, 14),
(33, 27, 1),
(34, 27, 5),
(35, 27, 6),
(36, 28, 7),
(37, 28, 9),
(42, 30, 12),
(43, 30, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tip_nekretnine`
--

CREATE TABLE `tip_nekretnine` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tip_nekretnine`
--

INSERT INTO `tip_nekretnine` (`id`, `naziv`) VALUES
(1, 'Soba'),
(2, 'Stan'),
(3, 'Kuća'),
(4, 'Zemljište'),
(5, 'Garaža'),
(6, 'Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `tip_objekta`
--

CREATE TABLE `tip_objekta` (
  `id` int(11) NOT NULL,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tip_objekta`
--

INSERT INTO `tip_objekta` (`id`, `naziv`) VALUES
(1, 'Stara gradnja'),
(2, 'Novogradnja'),
(3, 'U izgradnji'),
(4, 'qwerwdwdwd'),
(5, 'noboo'),
(6, 'nesto novo');

-- --------------------------------------------------------

--
-- Table structure for table `tip_usluge`
--

CREATE TABLE `tip_usluge` (
  `id` int(11) NOT NULL,
  `naziv` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tip_usluge`
--

INSERT INTO `tip_usluge` (`id`, `naziv`) VALUES
(1, 'Prodaja'),
(2, 'Izdavanje'),
(3, 'Ostalo');

-- --------------------------------------------------------

--
-- Table structure for table `ulica`
--

CREATE TABLE `ulica` (
  `id` int(11) NOT NULL,
  `opstinaID` int(11) NOT NULL,
  `naziv` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ulica`
--

INSERT INTO `ulica` (`id`, `opstinaID`, `naziv`) VALUES
(5, 2, 'Kod Hrama'),
(8, 1, 'Ulica'),
(9, 2, 'Hramska'),
(10, 5, 'Glavna'),
(11, 5, 'Sporedna'),
(12, 3, 'Slepa'),
(13, 6, 'Daleka'),
(14, 4, 'Mirijevski bulevar'),
(15, 8, 'Još dalja');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `id` int(11) NOT NULL,
  `naziv` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`id`, `naziv`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ulogaID` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `ulogaID`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(3, 'a', 'a', 'a', 2),
(5, 'hardcodovano', 'user', 'novi', 2),
(6, 'hardcodovano', 'nopvi', 'imejl', 2),
(8, 'hardcodovano', '21232f297a57a5a743894a0e4a801fc3', 'novix', 2),
(9, 'hardcodovano', '68ac73c4879868be0eb71a75a82c16c3', 'as@asdw.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vlasnik`
--

CREATE TABLE `vlasnik` (
  `id` int(11) NOT NULL,
  `Ime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Prezime` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `brTelefona` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ostalo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vlasnik`
--

INSERT INTO `vlasnik` (`id`, `Ime`, `Prezime`, `brTelefona`, `ostalo`) VALUES
(1, 'Pera', 'Perić', '064/225-5555', 'pokusavam'),
(3, 'Igor', 'Milanovic', '165161651', 'asdwasd'),
(5, 'Mika', 'Mikic', '064/1111111', '123dsa\"'),
(7, 'Marij', 'Nikolic', '064/68959858', 'Agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brsoba`
--
ALTER TABLE `brsoba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dodatno`
--
ALTER TABLE `dodatno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grejanje`
--
ALTER TABLE `grejanje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opstina`
--
ALTER TABLE `opstina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ostalo`
--
ALTER TABLE `ostalo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stanID` (`stanID`);

--
-- Indexes for table `sprat`
--
ALTER TABLE `sprat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stan`
--
ALTER TABLE `stan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipNekretnineID` (`tipNekretnineID`),
  ADD KEY `tipObjektaID` (`tipObjektaID`),
  ADD KEY `tipUslugeID` (`tipUslugeID`),
  ADD KEY `brSobaID` (`brSobaID`),
  ADD KEY `spratID` (`spratID`),
  ADD KEY `vlasnikID` (`vlasnikID`),
  ADD KEY `opstinaID` (`opstinaID`),
  ADD KEY `ulicaID` (`ulicaID`),
  ADD KEY `stanjeID` (`stanjeID`);

--
-- Indexes for table `stanje_objekta`
--
ALTER TABLE `stanje_objekta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stan_dodatno`
--
ALTER TABLE `stan_dodatno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stanID` (`stanID`),
  ADD KEY `dodatnoID` (`dodatnoID`);

--
-- Indexes for table `stan_grejanje`
--
ALTER TABLE `stan_grejanje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stanID` (`stanID`),
  ADD KEY `grejanjeID` (`grejanjeID`);

--
-- Indexes for table `stan_ostalo`
--
ALTER TABLE `stan_ostalo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stanID` (`stanID`),
  ADD KEY `ostaloID` (`ostaloID`);

--
-- Indexes for table `tip_nekretnine`
--
ALTER TABLE `tip_nekretnine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_objekta`
--
ALTER TABLE `tip_objekta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_usluge`
--
ALTER TABLE `tip_usluge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulica`
--
ALTER TABLE `ulica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opstinaID` (`opstinaID`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD KEY `ulogaID` (`ulogaID`);

--
-- Indexes for table `vlasnik`
--
ALTER TABLE `vlasnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brsoba`
--
ALTER TABLE `brsoba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dodatno`
--
ALTER TABLE `dodatno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `grejanje`
--
ALTER TABLE `grejanje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opstina`
--
ALTER TABLE `opstina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ostalo`
--
ALTER TABLE `ostalo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sprat`
--
ALTER TABLE `sprat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stan`
--
ALTER TABLE `stan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `stanje_objekta`
--
ALTER TABLE `stanje_objekta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stan_dodatno`
--
ALTER TABLE `stan_dodatno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `stan_grejanje`
--
ALTER TABLE `stan_grejanje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stan_ostalo`
--
ALTER TABLE `stan_ostalo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tip_nekretnine`
--
ALTER TABLE `tip_nekretnine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tip_objekta`
--
ALTER TABLE `tip_objekta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tip_usluge`
--
ALTER TABLE `tip_usluge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ulica`
--
ALTER TABLE `ulica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vlasnik`
--
ALTER TABLE `vlasnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slika`
--
ALTER TABLE `slika`
  ADD CONSTRAINT `slika_ibfk_1` FOREIGN KEY (`stanID`) REFERENCES `stan` (`id`);

--
-- Constraints for table `stan`
--
ALTER TABLE `stan`
  ADD CONSTRAINT `stan_ibfk_1` FOREIGN KEY (`vlasnikID`) REFERENCES `vlasnik` (`id`),
  ADD CONSTRAINT `stan_ibfk_2` FOREIGN KEY (`opstinaID`) REFERENCES `opstina` (`id`),
  ADD CONSTRAINT `stan_ibfk_3` FOREIGN KEY (`ulicaID`) REFERENCES `ulica` (`id`),
  ADD CONSTRAINT `stan_ibfk_4` FOREIGN KEY (`stanjeID`) REFERENCES `stanje_objekta` (`id`),
  ADD CONSTRAINT `stan_ibfk_5` FOREIGN KEY (`tipObjektaID`) REFERENCES `tip_objekta` (`id`),
  ADD CONSTRAINT `stan_ibfk_6` FOREIGN KEY (`tipNekretnineID`) REFERENCES `tip_nekretnine` (`id`),
  ADD CONSTRAINT `stan_ibfk_7` FOREIGN KEY (`tipUslugeID`) REFERENCES `tip_usluge` (`id`),
  ADD CONSTRAINT `stan_ibfk_8` FOREIGN KEY (`spratID`) REFERENCES `sprat` (`id`),
  ADD CONSTRAINT `stan_ibfk_9` FOREIGN KEY (`brSobaID`) REFERENCES `brsoba` (`id`);

--
-- Constraints for table `stan_dodatno`
--
ALTER TABLE `stan_dodatno`
  ADD CONSTRAINT `stan_dodatno_ibfk_1` FOREIGN KEY (`dodatnoID`) REFERENCES `dodatno` (`id`),
  ADD CONSTRAINT `stan_dodatno_ibfk_2` FOREIGN KEY (`stanID`) REFERENCES `stan` (`id`);

--
-- Constraints for table `stan_grejanje`
--
ALTER TABLE `stan_grejanje`
  ADD CONSTRAINT `stan_grejanje_ibfk_1` FOREIGN KEY (`stanID`) REFERENCES `stan` (`id`),
  ADD CONSTRAINT `stan_grejanje_ibfk_2` FOREIGN KEY (`grejanjeID`) REFERENCES `grejanje` (`id`);

--
-- Constraints for table `stan_ostalo`
--
ALTER TABLE `stan_ostalo`
  ADD CONSTRAINT `stan_ostalo_ibfk_1` FOREIGN KEY (`ostaloID`) REFERENCES `ostalo` (`id`),
  ADD CONSTRAINT `stan_ostalo_ibfk_2` FOREIGN KEY (`stanID`) REFERENCES `stan` (`id`);

--
-- Constraints for table `ulica`
--
ALTER TABLE `ulica`
  ADD CONSTRAINT `ulica_ibfk_1` FOREIGN KEY (`opstinaID`) REFERENCES `opstina` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ulogaID`) REFERENCES `uloga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
