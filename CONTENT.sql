-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 02. Sep 2014 um 13:22
-- Server Version: 5.5.38-0ubuntu0.14.04.1
-- PHP-Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `CONTENT`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Articles`
--

CREATE TABLE IF NOT EXISTS `Articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` text CHARACTER SET latin1 NOT NULL,
  `teaser` text CHARACTER SET latin1 NOT NULL,
  `article` text CHARACTER SET latin1 NOT NULL,
  `release` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `Articles`
--

INSERT INTO `Articles` (`id`, `heading`, `teaser`, `article`, `release`) VALUES
(1, 'Das hier stellt den ersten Testartikel dar', 'In diesem Artikel gehe ich auf nichts ein. Er existiert nur, um gut auszugucken.In diesem Artikel gehe ich auf nichts ein. Er existiert nur, um gut auszugucken.In diesem Artikel gehe ich auf nichts ein.\r\n\r\nEr existiert nur, um gut auszugucken.In diesem Artikel gehe ich auf nichts ein. Er existiert nur, um gut auszugucken.', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. \r\n\r\nUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. \r\n\r\nNam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. \r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. \r\n\r\nAt vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit ame', '2014-08-19 13:36:26'),
(2, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elit', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elit', '2014-08-19 14:22:54');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
  `articleID` int(5) NOT NULL,
  `pseudonym` varchar(20) CHARACTER SET latin1 NOT NULL,
  `heading` text CHARACTER SET latin1 NOT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `release` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `Comments`
--

INSERT INTO `Comments` (`articleID`, `pseudonym`, `heading`, `comment`, `release`) VALUES
(1, 'V4PH3N', 'Kommentar zum 1. Testartikel', 'Das hier stellt einen ersten Kommentar eines 1. Testartikels dar.', '2014-08-22 10:36:05'),
(2, 'V4PH3N', 'Kommentar zum 2. Testartikel (Lorem Ipsum)', 'Das hier stellt einen Kommentar zum 2. Testartikel (Lorem ipsum) dar.', '2014-08-22 13:13:18'),
(2, 'V4PH3N', '2. Kommentar zum 2. Testartikel (Lorem Ipsum)', 'Das hier stellt den zweiten Kommentar zum 2. Testartikel (Lorem ipsum) dar.', '2014-08-22 13:14:46'),
(1, 'V4PH3N', '2. Kommentar zum 1. Testartikel', 'Das hier stellt den zweiten Kommentar zum 1. Testartikel dar.', '2014-08-22 13:22:08'),
(1, 'V4PH3N', 'Ein weiterer kleiner Testartikel', 'Ich habe keine Ahnung, was ich hier noch reinschreiben soll....', '2014-08-22 13:34:21'),
(1, 'V4PH3N', 'Ein weiterer kleiner Testartikel', 'Ich habe keine Ahnung, was ich hier noch reinschreiben soll....', '2014-08-22 13:34:59'),
(1, 'V4PH3N', 'Hier ein kleiner weiterer Test', 'Hallo, ich habe keine eigene Meinung, wie 99% der Deutschen.', '2014-08-22 15:59:39'),
(1, 'V4PH3N', 'Hier eine kleine Heading', 'Ich bin Meinungslos... Leider... Vlt aendert sich das ja bald.', '2014-08-24 12:43:02'),
(1, 'V4PH3N', 'Hier eine kleine Heading', 'Ich bin Meinungslos... Leider... Vlt aendert sich das ja bald.', '2014-08-24 12:45:38'),
(1, 'V4PH3N', 'Das hier ist eine kleine Heading', 'Meinungslos gluecklich... Meinungslos gluecklich... Meinungslos gluecklich... ', '2014-08-24 12:46:13'),
(1, 'fsdlkfj', 'fsdfasdfsdfdsf', 'ssldfh;asldfjs;lfjsljflsfjssldfh;asldfjs;lfjsljflsfjssldfh;asldfjs;lfjsljflsfjssldfh;asldfjs;lfjsljflsfj', '2014-08-24 12:48:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
