
CREATE TABLE IF NOT EXISTS filme 
(
	id INTEGER(20) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	titel VARCHAR(50) NOT NULL,
	regie VARCHAR(50) NOT NULL,
	schauspieler VARCHAR(50) NOT NULL,
	genre VARCHAR(50) NOT NULL,
	beschreibung VARCHAR(800) NOT NULL,
	land VARCHAR(50) NOT NULL,
	jahr INT(20) NOT NULL,
	laufzeit INT(20) NOT NULL,
	bild varchar(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS benutzer (
	id INTEGER(20) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	pname VARCHAR (50) NOT NULL,
	ppasswort VARCHAR (50)
);



START TRANSACTION;

INSERT INTO benutzer (id, pname,ppasswort) VALUES (1, 'berlin', 'abc');

INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (1, 'A Clockwork Orange','Stanley Kubrick','Malcolm McDowell, Patrick Magee','Crime, Drama, Sci-Fi','In future Britain, charismatic delinquent Alex DeLarge is jailed...','UK, USA','1971','136 min','a clockwork.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (2, 'Eyes Wide Shut','Stanley Kubrick','Tom Cruise, Nicole Kidman','Drama, Mystery, Romance','A New York City doctor, who is married to an art curator, pushes himself on a harrowing and dangerous night-long odyssey of sexual...','UK, USA','1999','159 min','eyes wide shut.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (3, 'Dr. Strangelove','Stanley Kubrick','Peter Sellers, George C. Scott','Comedy, War','An insane general triggers a path to nuclear holocaust that a war room full of politicians and generals frantically try to stop','USA, UK','1964','95 min','dr. strangelove.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (4, 'The Shining','Stanley Kubrick','Jack Nicholson, Shelley Duvall','Horror','A family heads to an isolated hotel for the winter where an evil and spiritual presence influences the father into violence...','USA, UK','1980','144 min','the shining.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (5, 'Blue Velvet','David Lynch','Isabella Rossellini, Kyle MacLachlan','Crime, Drama, Mystery','The discovery of a severed human ear found in a field leads a young man on an investigation related to a beautiful, mysterious nightclub singer...','USA','1986','120 min','blue velvet.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (6, 'The Elephant Man','David Lynch','Anthony Hopkins, John Hurt','Biography, Drama','A Victorian surgeon rescues a heavily disfigured man who is mistreated while scraping a living as a side-show freak...','USA, UK','1980','124 min','elephant man.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (7, 'Dune','David Lynch','Francesca Annis, Leonardo Cimino','Action, Adventure, Sci-Fi','A Duke s son leads desert warriors against the galactic emperor and his father s evil nemesis when they assassinate his father...','USA','1984','137 min','dune.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (8, 'Twin Peaks: Fire Walk with Me','David Lynch','Sheryl Lee, Ray Wise','Mystery, Thriller','A young FBI agent disappears while investigating a murder miles from Twin Peaks that may be related to the future murder of Laura Palmer...','France, USA','1992','135 min','twin peaks.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (9, 'Pulp Fiction','Quentin Tarantino','John Travolta, Uma Thurman, Samuel L. Jackson, Bruce Willis','Krimi, Drama, Thriller','Über 2 Mafia Killer, einen Boxer und die Frau des Mafiabosses.','USA','1994','154 min','pulp fiction.jpg');
INSERT INTO filme (id, titel, regie, schauspieler, genre, beschreibung, land, jahr, laufzeit, bild) VALUES (10, 'Das erstaunliche Leben des Walter Mitty','Ben Stiller','Ben Stiller, Kristen Wiig,Sean Penn,Adam Scott','Komödie, Abenteuerfilm, Drama, Fantasyfilm','In Das erstaunliche Leben des Walter Mitty inszeniert sich Ben Stiller selbst als Titelheld...','USA','2013','115 min','mitty.jpg');

COMMIT;
