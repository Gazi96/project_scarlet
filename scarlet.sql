-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2017, 20:42
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `scarlet`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `counters`
--

CREATE TABLE `counters` (
  `countid` int(10) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `counters`
--

INSERT INTO `counters` (`countid`, `name`, `count`) VALUES
(1, 'countViewers', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `courses`
--

CREATE TABLE `courses` (
  `couid` int(10) NOT NULL,
  `woid` int(10) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `day` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `hour` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `room` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `coursdescribe` varchar(512) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `courses`
--

INSERT INTO `courses` (`couid`, `woid`, `name`, `day`, `hour`, `room`, `coursdescribe`) VALUES
(3, 1, 'Kurs salsa', 'thursday', '18:00 - 20:00', 'sala 412 D-11', 'Taki sobie kurs'),
(4, 5, 'Kurs kubana', 'saturday', '11:00 - 13:00', 'sala 412 D-11', 'Taki sobie kurs'),
(5, 4, 'Jeszcze inny', 'tuesday', '18:00 - 20:00', 'sala 412 D-11', 'Taki sobie kurs'),
(6, 1, 'Nowiutki kurs', 'PoniedziaÅ‚ek', '22:00 - 23:00', 'sala 300 D-13', 'Taki sobie kurs');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `newsid` int(10) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `content` varchar(512) COLLATE utf8_polish_ci DEFAULT NULL,
  `date` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`newsid`, `name`, `content`, `date`) VALUES
(1, 'Nowa WiadomoÅ›Ä‡', 'TreÅ›Ä‡ nowej wiadomoÅ›ci to: LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM, LOREM,', '11.05.2017 15:43'),
(2, 'Nowa', 'Nowa', '11.05.2017 15:52'),
(3, 'Mamy nowy kurs', 'DostÄ™pne Å›Ä… nowe kursy zapraszamy do zapoznania siÄ™!', '13.05.2017 13:15');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timetable`
--

CREATE TABLE `timetable` (
  `timid` int(10) NOT NULL,
  `couid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `week` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `timetable`
--

INSERT INTO `timetable` (`timid`, `couid`, `userid`, `week`) VALUES
(5, 4, 9, 19),
(8, 5, 8, 20),
(10, 3, 9, 20);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userdetails`
--

CREATE TABLE `userdetails` (
  `detid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `name` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `surname` varchar(64) COLLATE utf8_polish_ci DEFAULT NULL,
  `course` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `userdetails`
--

INSERT INTO `userdetails` (`detid`, `userid`, `name`, `surname`, `course`) VALUES
(7, 8, 'Sebastian', 'Dziula', 0),
(8, 9, 'Sebastian', 'Dziula', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `login` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `activation` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `role` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userid`, `login`, `password`, `activation`, `role`) VALUES
(8, 'sebastian.dziula@gmail.com', '5a8f2b7478215377ba6a55c043a8b910', 'done', 'admin'),
(9, 'sebastian.dzula@gmail.com', '8838b5c94ba8d730aeccc2cdce8189fb', 'fa3ef07f16811d8b291fa29adc8bec7a5b03bf38dd09b0fa3b2bf33578919fd7', 'user');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workers`
--

CREATE TABLE `workers` (
  `woid` int(11) NOT NULL,
  `firstname` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `lastname` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `workerdescribe` varchar(512) COLLATE utf8_polish_ci DEFAULT NULL,
  `img` varchar(64) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `workers`
--

INSERT INTO `workers` (`woid`, `firstname`, `lastname`, `email`, `phone`, `workerdescribe`, `img`) VALUES
(1, 'Sebastian', 'Dziula', 'sebastian.dziula@gmail.com', 500500500, NULL, 'bear1.jpg'),
(4, 'Default', 'Worker', 'default@email.com', 222000222, 'This is a default user.', 'default.png'),
(5, 'Default', 'Seba', 'se@dziula.pl', 300300300, 'Second default worker in family.', 'default.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `workerscores`
--

CREATE TABLE `workerscores` (
  `scoid` int(10) NOT NULL,
  `woid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `workerscores`
--

INSERT INTO `workerscores` (`scoid`, `woid`, `userid`, `score`) VALUES
(8, 4, 9, 3),
(10, 5, 9, 5),
(11, 1, 9, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`countid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`couid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`detid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`woid`);

--
-- Indexes for table `workerscores`
--
ALTER TABLE `workerscores`
  ADD PRIMARY KEY (`scoid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `counters`
--
ALTER TABLE `counters`
  MODIFY `countid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `courses`
--
ALTER TABLE `courses`
  MODIFY `couid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `detid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `workers`
--
ALTER TABLE `workers`
  MODIFY `woid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `workerscores`
--
ALTER TABLE `workerscores`
  MODIFY `scoid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
