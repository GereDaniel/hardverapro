-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Jan 13. 08:06
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `database`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hirdetesek`
--

CREATE TABLE `hirdetesek` (
  `id` int(11) NOT NULL,
  `cim` varchar(255) NOT NULL,
  `kategoria` varchar(100) NOT NULL,
  `leiras` text DEFAULT NULL,
  `kep_url` varchar(255) DEFAULT NULL,
  `feltoltes_datum` datetime DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `hirdetesek`
--

INSERT INTO `hirdetesek` (`id`, `cim`, `kategoria`, `leiras`, `kep_url`, `feltoltes_datum`, `email`) VALUES
(1, 'aadssda', 'sddsadsa', 'dsasdaads', 'feltoltott_kepek/weidian1477481876-3bcb00000189a2eff1230a8133ca_1536_1536.jpg', '2024-12-12 21:55:19', ''),
(2, 'sadfdsaf', 'sadfsdff', 'asdfsadfdsaf', 'feltoltott_kepek/ytlogo.png', '2024-12-12 21:56:42', ''),
(3, 'safdgfdgsafdgsafdsvafgsva', 'afdgsfdsafdsaggfgadfgda', 'gfdagdafgdsgdf', 'feltoltott_kepek/weidian1477481876-3bcb00000189a2eff1230a8133ca_1536_1536.jpg', '2024-12-12 22:31:31', ''),
(4, 'SASDASD', 'SDAADSADS', 'ADSSADASD', 'feltoltott_kepek/Youtube_logo.png', '2024-12-22 14:25:16', ''),
(5, 'sadsadsa', 'sadsaddasdas', 'saddsaadsfdsafdsd', '../feltoltott_kepek/CSGOCASES.COM.png', '2025-01-05 21:09:26', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1, 1532769979, 'asddas'),
(2, 1, 1532769979, 'sdadasd');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `unique_id`, `username`, `email`, `password`, `img`, `status`) VALUES
(1, 0, 'macska', 'asdsadsa', 'macska', '', 'Offline now'),
(6, 0, 'nigga', 'niggamail@mail.com', '$2y$10$IGJBrzdJFbWARswFFh4fj..CAoJtmKBRFrsCpJ1Ov5Rp9nSViq8zy', '', 'Offline now'),
(7, 1532769979, 'asddsa', 'saddsfadf@asd.acp', 'b173bc8223f3b8a819599449aa1fd53e', '1734464960Youtube_logo-removebg-preview.png', 'Offline now'),
(8, 0, 'asdasdasdasd', 'asdasdasd@gmail.com', '$2y$10$3SRXah9PvWHK.2icn/gK7eYMYyLF/TnSUuwgyIxLcdrQ5LD9UhrfK', '', ''),
(9, 0, 'ASDASD', 'ASDASD@ASDAS.C', '$2y$10$.HMay8tx1DOt2NLnjXo8M.5KejpUYkszOngH3r7jvHWAsPQ3SZVzu', '', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `hirdetesek`
--
ALTER TABLE `hirdetesek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `hirdetesek`
--
ALTER TABLE `hirdetesek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
