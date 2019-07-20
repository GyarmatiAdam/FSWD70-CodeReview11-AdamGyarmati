-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 04:01 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_adam_gyarmati_travelmatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `concert`
--

CREATE TABLE `concert` (
  `con_id` int(11) NOT NULL,
  `fk_loc_id` int(11) DEFAULT NULL,
  `con_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `con_datetime` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `concert`
--

INSERT INTO `concert` (`con_id`, `fk_loc_id`, `con_name`, `con_datetime`, `price`) VALUES
(1, 5, 'Vienna Mozart Orchestra', '2020-02-19 18:00:00', '89,90'),
(2, 6, 'Die Fledermaus', '2019-10-16 15:00:00', '59,901'),
(3, 7, 'Summer time in Vienna ', '2019-11-20 17:30:00', '64,90'),
(4, 8, 'Calexico', '2020-01-12 16:45:00', '39,90');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ev_id` int(11) NOT NULL,
  `fk_loc_id` int(11) DEFAULT NULL,
  `ev_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ev_type` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ev_descript` text COLLATE utf8_unicode_ci,
  `ev_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ev_id`, `fk_loc_id`, `ev_name`, `ev_type`, `ev_descript`, `ev_url`, `images`) VALUES
(1, 9, 'BEETHOVEN MUSEUM', 'Museum', 'Das Wien Museum am Karlsplatz wird in den kommenden Jahren saniert und erweitert. Das 1959 eröffnete, von Oswald Haerdtl geplante Gebäude soll zu einem zukunftsweisenden Stadtmuseum ausgebaut werden, mit mehr Platz für Ausstellungen, adäquaten Flächen für Vermittlung und Schulklassen, funktionalen Räumen für Veranstaltungen und ansprechender Kulinarik', 'https://www.wienmuseum.at/de/standorte/beethoven-museum.html', NULL),
(2, 10, 'HERMESVILLA', 'Exhibition', 'Die Virgilkapelle wurde 1973 im Zuge des U-Bahnbaues entdeckt und als Standort des Museums in die U-Bahn-Station Stephansplatz integriert. Die unterirdische Kapelle ist einer der besterhaltenen gotischen Innenräume in Wien. Sie entstand um 1220/30 als Unterbau für einen geplanten Kapellenbau in frühgotischem Stil. Um 1246 stattete man die Kapelle mit Fugenmalereien und Radkreuzen in den Nischen aus.  Darüber errichtete man hier später die Maria-Magdalena-Kapelle (der Grundriss dieses Kirchleins ist im Straßenpflaster des Stephansplatzes heute noch sichtbar).\r\n\r\nNach dem Einbau eines halb unter der Erde befindlichen Zwischengeschoßes standen die Kapelle und die tiefer liegenden Räumlichkeiten ab dem frühen 14. Jahrhundert für ganz unterschiedliche Nutzungen bereit. Der ursprüngliche Bau, die heute sichtbare Virgilkapelle, diente einer reichen Wiener Kaufmannsfamilie als Andachtskapelle, unter anderem wurde sie mit einem Altar für den hl. Virgil ausgestattet. Für das Zwischengeschoss ist eine Nutzung als „Neuer Karner“ (Beinhaus) belegt. Die Maria-Magdalena-Kapelle selbst wurde als Friedhofskapelle genutzt, während ihre Empore Versammlungen der „Schreiberzeche“ (der Bruderschaft aller Schreiber) Raum bot.\r\n\r\nAus konservatorischen Gründen musste die Außenstelle des Wien Museums vor einigen Jahren geschlossen werden. Nach umfassenden Restaurierungsmaßnahmen wurde die Virgilkapelle Ende 2015 wieder eröffnet. Ein neu gestalteter, besucherfreundlicher Eingang auf Ebene der U-Bahn-Passage erschließt diesen faszinierenden Sakralraum nun adäquat, eine kompakte Ausstellung bietet einen historischen Abriss zum mittelalterlichen Wien. Seit der Wiedereröffnung der Virgilkapelle ist das Wien Museum wieder mitten im Herzen der Stadt präsent.', 'https://www.wienmuseum.at/de/standorte/hermesvilla.html', NULL),
(3, 11, 'VIRGILKAPELLE', 'Exhibition', '                    Inmitten des ehemaligen kaiserlichen Jagdgebietes Lainzer Tiergarten liegt idyllisch eingebettet das                 ', 'https://www.wienmuseum.at/de/standorte/virgilkapelle.html', NULL),
(4, 12, 'WIEN MUSEUM KARLSPLATZ', 'Museum', 'Das Leben und Werk Ludwig van Beethovens ist untrennbar mit Wien verbunden. 1787 kam der Komponist erstmals in die Stadt, um bei Mozart zu studieren, ab 1792 lebte er permanent hier. Das Beethoven Museum in Heiligenstadt beleuchtet Leben und Werk des Klassikers auf dem neuesten wissenschaftlichen Stand.\r\n\r\nDer Ort hat unmittelbar mit Beethovens Schicksal zu tun, denn hier suchte er Heilung oder zumindest Besserung seines Gehörleidens. Heiligenstadt war im frühen 19. Jahrhundert eine selbständige Weinhauer-Ortschaft. Ihren wirtschaftlichen Aufschwung verdankte sie einer Badeanstalt, die sich auf dem Gelände des heutigen Heiligenstädter Parks befand. Das Bad wurde von einer mineralhaltigen Quelle gespeist, welche wegen ihrer Heilkraft zahlreiche Kurgäste anlockte, darunter auch die Prominenz des Wiener Kulturlebens.\r\n\r\nDas Haus in der Probusgasse 6 ist der Überlieferung nach mit einem erschütternden Zeugnis Beethovens verbunden. Hier verfasste er 1802 das „Heiligenstädter Testament“, jenen an seine Brüder gerichteten, jedoch nie abgesandten Brief, in welchem er seiner Verzweiflung über seine fortschreitende Taubheit Ausdruck verlieh. Gleichzeitig arbeitete er in der Probusgasse an einigen seiner wichtigsten Werke, darunter die sogenannte „Sturm“-Sonate, op. 31 Nr. 2, die „Prometheus“-Variationen, op. 35, und erste Skizzen zur späteren 3. Symphonie („Eroica“).', 'https://www.wienmuseum.at/de/standorte/wien-museum-karlsplatz.html', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loc_id` int(11) NOT NULL,
  `city` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addr` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc_id`, `city`, `zip_code`, `addr`) VALUES
(1, 'Vienna', '1220', 'Biberhaufenweg 168'),
(2, 'Vienna', '1020', 'Schmelzgasse 3'),
(3, 'Vienna', '1220', 'Aspernstraße 117'),
(4, 'Vienna', '1030', 'Am Heumarkt 2A'),
(5, 'Vienna', '1010', 'Operngasse 6 / 1C'),
(6, 'Vienna', '1090', 'Währingerstrasse 78'),
(7, 'Vienna', '1010', 'Musikverein, Great Hall, Bösendorferstraße 12'),
(8, 'Vienna', '1030', 'Konzerthaus, Great Hall, Lothringerstrasse 20'),
(9, 'Vienna', '1190', 'Probusgasse 6'),
(10, 'Vienna', '1130', 'Lainzer Tiergarten'),
(11, 'Vienna', '1010', 'Stephansplatz (U-Bahn-Station)'),
(12, 'Vienna', '1040', 'Karlsplatz 8');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rest_id` int(11) NOT NULL,
  `fk_loc_id` int(11) DEFAULT NULL,
  `rest_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rest_type` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rest_descript` text COLLATE utf8_unicode_ci,
  `rest_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rest_id`, `fk_loc_id`, `rest_name`, `phone`, `rest_type`, `rest_descript`, `rest_url`) VALUES
(1, 1, 'Trattoria Pizzeria DA SALVATORE', '01 2801260', 'Pizzeria', 'Seit ich vor ï¿½ber 20 Jahren von Sizilien nach ï¿½sterreich gekommen bin, konnte ich vielfï¿½ltige Erfahrungen in der italienischen Gastronomie sammeln. Insbesondere aus dem legendï¿½ren Piccini am Naschmarkt, in dem ich viele Jahre tï¿½tig war, konnte ich wertvolle Kenntnisse mitnehmen. Es ist mir eine besondere Freude, Sie nun in meinem eigenen Lokal begrï¿½ï¿½en zu kï¿½nnen.', 'http://www.dasalvatore.at/'),
(2, 2, 'Mea Shearim Kosher', '01 3999595', 'Restaurant', 'At MEA SHEARIM you will experience a great ambience with pleasant background music and a well equipped bar with an exquisite selection of kosher wines, homemade summer spritzer, lemonades and cocktails.\r\n\r\nWe are also happy to deliver to you via our partners Mjam (Foodora) and Lieferservice.at\r\n\r\nIn addition to that, MEA SHEARIM offers a catering service for up to 200 people.\r\n\r\nFor private events such as birthday celebrations, business events etc. we gladly provide you with our premises for 30 to 60 people. In order to offer the best possible service our rooms are also equipped with a projector. Our team will gladly assist and advise you personally to ensure your event meets your expectations.', 'https://www.mea-shearim.at/en/'),
(3, 3, 'Restaurant Lahodny', '01 2822219', 'Restaurant', 'Wir freuen uns sehr Sie auf unserer neuen Homepage begrüßen zu dürfen!	\r\n\r\nNach nur 16tägiger Umbauphase im Juli 2018 präsentiert sich „Der Lahodny“ im frischen, modernen Look, in perfekter Symbiose mit rustikal-beständiger Tradition. \r\n\r\nGanz nach unserem Motto: Tradition trifft Moderne! \r\n\r\nIn diesem Sinne wünschen wir Ihnen viele genussreiche Stunden in unserem Restaurant. Verwöhnen Sie sich und Ihre Seele mit unseren frisch zubereiteten Gerichten sowie einen guten Tropfen Wein aus unserer „Wirtshausvinothek“. ', 'https://www.lahodny.at/'),
(4, 4, 'Steirereck', '01 7133168', 'Restaurant', 'Die Meierei ist ein Ort des Genusses und der Entspannung an einem der vielleicht schönsten Plätze der Stadt – inmitten des zentral gelegenen Stadtparkes. Frühstücken Sie entspannt am Wienfluss. Lassen Sie sich am Nachmittag von ofen-frischen Strudeln verführen. Entdecken Sie die vielfältige Welt der Käse & Weine und genießen Sie ganztägig feinste Wiener Küche.', 'https://www.steirereck.at/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privilege` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `pass`, `privilege`) VALUES
(1, 'Adam', 'Adam', 'agyarmati123@gmail.com', 'bda7436a4bdbb1d9aeb6f3fa517225fbab0d94982e2c1260a0a4d2ef4c28f177', 1),
(2, 'admin', 'admin', 'admin@gmail.com', '0250af8294d28ac88338a61f40510538c91d126cceedf749596026f27eda438a', 1),
(3, 'hello', 'hello', 'hello@gmail.com', '0250af8294d28ac88338a61f40510538c91d126cceedf749596026f27eda438a', 0),
(5, 'Adam', 'Gyarmati', 'agyarmati123@gmail.com', '873d60b9625e9a1773abbecb782b7764c2ffc6653d617fe5eb855d787b717044', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `fk_loc_id` (`fk_loc_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ev_id`),
  ADD KEY `fk_loc_id` (`fk_loc_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rest_id`),
  ADD KEY `fk_loc_id` (`fk_loc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concert`
--
ALTER TABLE `concert`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `concert_ibfk_1` FOREIGN KEY (`fk_loc_id`) REFERENCES `locations` (`loc_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`fk_loc_id`) REFERENCES `locations` (`loc_id`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`fk_loc_id`) REFERENCES `locations` (`loc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
