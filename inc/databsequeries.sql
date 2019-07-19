CREATE TABLE users (
    user_id int NOT NULL AUTO_INCREMENT,
    firstName varchar(155),
    lastName varchar(155),
    email varchar (155),
    pass VARCHAR (255),
    privilege int(1),
    PRIMARY KEY (user_id)
);

CREATE TABLE locations (
    loc_id int NOT NULL AUTO_INCREMENT,
    city varchar(155),
    zip_code varchar(155),
    addr varchar (155),
    images VARCHAR (255),
    PRIMARY KEY (loc_id)
);

CREATE TABLE restaurant (
    rest_id int NOT NULL AUTO_INCREMENT,
    fk_loc_id int,
    rest_name VARCHAR(100),
    phone VARCHAR (100),
    rest_type VARCHAR(150),
    rest_descript text,
    rest_url VARCHAR (255),
    PRIMARY KEY (rest_id),
    FOREIGN KEY (fk_loc_id) REFERENCES locations(loc_id)
);

CREATE TABLE concert (
    con_id int NOT NULL AUTO_INCREMENT,
    fk_loc_id int,
    con_name VARCHAR(100),
    con_datetime datetime,
    price VARCHAR (80),
    PRIMARY KEY (con_id),
    FOREIGN KEY (fk_loc_id) REFERENCES locations(loc_id)
);

CREATE TABLE events (
    ev_id int NOT NULL AUTO_INCREMENT,
    fk_loc_id int,
    ev_name VARCHAR (100),
    ev_type VARCHAR (80),
    ev_descript text,
    ev_url VARCHAR(255),
    PRIMARY KEY (ev_id),
    FOREIGN KEY (fk_loc_id) REFERENCES locations(loc_id)
);

-- ////////////////////////////////////////////insert into db/////////////////////////////////////

INSERT INTO locations (city, zip_code, addr)
VALUES
('Vienna', '1220', 'Biberhaufenweg 168'),
('Vienna', '1020', 'Schmelzgasse 3'),
('Vienna', '1220', 'Aspernstraße 117'),
('Vienna', '1030', 'Am Heumarkt 2A');

INSERT INTO restaurant (fk_loc_id, rest_name, phone, rest_type, rest_descript, rest_url)
VALUES
(1, 'Trattoria Pizzeria DA SALVATORE', '01 2801260', 'Pizzeria', 'Seit ich vor über 20 Jahren von Sizilien nach Österreich gekommen bin, konnte ich vielfältige Erfahrungen in der italienischen Gastronomie sammeln. Insbesondere aus dem legendären Piccini am Naschmarkt, in dem ich viele Jahre tätig war, konnte ich wertvolle Kenntnisse mitnehmen. Es ist mir eine besondere Freude, Sie nun in meinem eigenen Lokal begrüßen zu können.', 'http://www.dasalvatore.at/'),
(2, 'Mea Shearim Kosher', '01 3999595', 'Restaurant', 'At MEA SHEARIM you will experience a great ambience with pleasant background music and a well equipped bar with an exquisite selection of kosher wines, homemade summer spritzer, lemonades and cocktails.

We are also happy to deliver to you via our partners Mjam (Foodora) and Lieferservice.at

In addition to that, MEA SHEARIM offers a catering service for up to 200 people.

For private events such as birthday celebrations, business events etc. we gladly provide you with our premises for 30 to 60 people. In order to offer the best possible service our rooms are also equipped with a projector. Our team will gladly assist and advise you personally to ensure your event meets your expectations.', 'https://www.mea-shearim.at/en/'),
(3, 'Restaurant Lahodny', '01 2822219', 'Restaurant', 'Wir freuen uns sehr Sie auf unserer neuen Homepage begrüßen zu dürfen!	

Nach nur 16tägiger Umbauphase im Juli 2018 präsentiert sich „Der Lahodny“ im frischen, modernen Look, in perfekter Symbiose mit rustikal-beständiger Tradition. 

Ganz nach unserem Motto: Tradition trifft Moderne! 

In diesem Sinne wünschen wir Ihnen viele genussreiche Stunden in unserem Restaurant. Verwöhnen Sie sich und Ihre Seele mit unseren frisch zubereiteten Gerichten sowie einen guten Tropfen Wein aus unserer „Wirtshausvinothek“. ', 'https://www.lahodny.at/'),
(4, 'Steirereck', '01 7133168', 'Restaurant', 'Die Meierei ist ein Ort des Genusses und der Entspannung an einem der vielleicht schönsten Plätze der Stadt – inmitten des zentral gelegenen Stadtparkes. Frühstücken Sie entspannt am Wienfluss. Lassen Sie sich am Nachmittag von ofen-frischen Strudeln verführen. Entdecken Sie die vielfältige Welt der Käse & Weine und genießen Sie ganztägig feinste Wiener Küche.', 'https://www.steirereck.at/');

INSERT INTO locations (city, zip_code, addr)
VALUES
('Vienna', '1010', 'Operngasse 6 / 1C'),
('Vienna', '1090', 'Währingerstrasse 78'),
('Vienna', '1010', 'Musikverein, Great Hall, Bösendorferstraße 12'),
('Vienna', '1030', 'Konzerthaus, Great Hall, Lothringerstrasse 20');

INSERT INTO concert (fk_loc_id, con_name, con_datetime, price)
VALUES
(5, 'Vienna Mozart Orchestra', '2020-02-19 18:00:00', '89,90'),
(6, 'Die Fledermaus', '2019-10-16 15:00:00', '59,90'),
(7, 'Summer time in Vienna ', '2019-11-20 17:30:00', '64,90'),
(8, 'Calexico', '2020-01-12 16:45:00', '39,90');

INSERT INTO locations (city, zip_code, addr)
VALUES
('Vienna', '1190', 'Probusgasse 6'),
('Vienna', '1130', 'Lainzer Tiergarten'),
('Vienna', '1010', 'Stephansplatz (U-Bahn-Station)'),
('Vienna', '1040', 'Karlsplatz 8');

INSERT INTO events (fk_loc_id, ev_name, ev_type, ev_descript, ev_url)
VALUES
(9, 'BEETHOVEN MUSEUM', 'Museum', 'Das Wien Museum am Karlsplatz wird in den kommenden Jahren saniert und erweitert. Das 1959 eröffnete, von Oswald Haerdtl geplante Gebäude soll zu einem zukunftsweisenden Stadtmuseum ausgebaut werden, mit mehr Platz für Ausstellungen, adäquaten Flächen für Vermittlung und Schulklassen, funktionalen Räumen für Veranstaltungen und ansprechender Kulinarik', 'https://www.wienmuseum.at/de/standorte/beethoven-museum.html'),
(10, 'HERMESVILLA', 'Exhibition', 'Die Virgilkapelle wurde 1973 im Zuge des U-Bahnbaues entdeckt und als Standort des Museums in die U-Bahn-Station Stephansplatz integriert. Die unterirdische Kapelle ist einer der besterhaltenen gotischen Innenräume in Wien. Sie entstand um 1220/30 als Unterbau für einen geplanten Kapellenbau in frühgotischem Stil. Um 1246 stattete man die Kapelle mit Fugenmalereien und Radkreuzen in den Nischen aus.  Darüber errichtete man hier später die Maria-Magdalena-Kapelle (der Grundriss dieses Kirchleins ist im Straßenpflaster des Stephansplatzes heute noch sichtbar).

Nach dem Einbau eines halb unter der Erde befindlichen Zwischengeschoßes standen die Kapelle und die tiefer liegenden Räumlichkeiten ab dem frühen 14. Jahrhundert für ganz unterschiedliche Nutzungen bereit. Der ursprüngliche Bau, die heute sichtbare Virgilkapelle, diente einer reichen Wiener Kaufmannsfamilie als Andachtskapelle, unter anderem wurde sie mit einem Altar für den hl. Virgil ausgestattet. Für das Zwischengeschoss ist eine Nutzung als „Neuer Karner“ (Beinhaus) belegt. Die Maria-Magdalena-Kapelle selbst wurde als Friedhofskapelle genutzt, während ihre Empore Versammlungen der „Schreiberzeche“ (der Bruderschaft aller Schreiber) Raum bot.

Aus konservatorischen Gründen musste die Außenstelle des Wien Museums vor einigen Jahren geschlossen werden. Nach umfassenden Restaurierungsmaßnahmen wurde die Virgilkapelle Ende 2015 wieder eröffnet. Ein neu gestalteter, besucherfreundlicher Eingang auf Ebene der U-Bahn-Passage erschließt diesen faszinierenden Sakralraum nun adäquat, eine kompakte Ausstellung bietet einen historischen Abriss zum mittelalterlichen Wien. Seit der Wiedereröffnung der Virgilkapelle ist das Wien Museum wieder mitten im Herzen der Stadt präsent.', 'https://www.wienmuseum.at/de/standorte/hermesvilla.html'),
(11, 'VIRGILKAPELLE', 'Exhibition', 'Inmitten des ehemaligen kaiserlichen Jagdgebietes Lainzer Tiergarten liegt idyllisch eingebettet das "Schloss der Träume", wie Kaiserin Elisabeth ihre Villa einmal nannte. Kaiser Franz Joseph machte sie ihr zum Geschenk, in der Hoffnung, seine reisefreudige Frau damit öfter in Wien halten zu können. In fünfjähriger Bauzeit schuf der bekannte Ringstraßen-Architekt Carl von Hasenauer diesen für viele romantische Landhäuser des Großbürgertums beispielgebenden Bau. Ihren Namen gab der Villa die im Garten stehende Statue "Hermes als Wächter".', 'https://www.wienmuseum.at/de/standorte/virgilkapelle.html'),
(12, 'WIEN MUSEUM KARLSPLATZ', 'Museum', 'Das Leben und Werk Ludwig van Beethovens ist untrennbar mit Wien verbunden. 1787 kam der Komponist erstmals in die Stadt, um bei Mozart zu studieren, ab 1792 lebte er permanent hier. Das Beethoven Museum in Heiligenstadt beleuchtet Leben und Werk des Klassikers auf dem neuesten wissenschaftlichen Stand.

Der Ort hat unmittelbar mit Beethovens Schicksal zu tun, denn hier suchte er Heilung oder zumindest Besserung seines Gehörleidens. Heiligenstadt war im frühen 19. Jahrhundert eine selbständige Weinhauer-Ortschaft. Ihren wirtschaftlichen Aufschwung verdankte sie einer Badeanstalt, die sich auf dem Gelände des heutigen Heiligenstädter Parks befand. Das Bad wurde von einer mineralhaltigen Quelle gespeist, welche wegen ihrer Heilkraft zahlreiche Kurgäste anlockte, darunter auch die Prominenz des Wiener Kulturlebens.

Das Haus in der Probusgasse 6 ist der Überlieferung nach mit einem erschütternden Zeugnis Beethovens verbunden. Hier verfasste er 1802 das „Heiligenstädter Testament“, jenen an seine Brüder gerichteten, jedoch nie abgesandten Brief, in welchem er seiner Verzweiflung über seine fortschreitende Taubheit Ausdruck verlieh. Gleichzeitig arbeitete er in der Probusgasse an einigen seiner wichtigsten Werke, darunter die sogenannte „Sturm“-Sonate, op. 31 Nr. 2, die „Prometheus“-Variationen, op. 35, und erste Skizzen zur späteren 3. Symphonie („Eroica“).', 'https://www.wienmuseum.at/de/standorte/wien-museum-karlsplatz.html');