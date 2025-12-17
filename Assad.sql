CREATE DATABASE assad_zoo;
USE assad_zoo;

CREATE TABLE utilisateurs (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nom VARCHAR(100),
 email VARCHAR(100),
 role VARCHAR(20),
 motpasse_hash VARCHAR(255),
 statut INT,
 pays VARCHAR(100)
);

CREATE TABLE habitats (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nom VARCHAR(100),
 typeclimat VARCHAR(100),
 description TEXT,
 zonezoo VARCHAR(100)
);

CREATE TABLE animaux (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nom VARCHAR(100),
 espece VARCHAR(100),
 alimentation VARCHAR(100),
 image VARCHAR(255),
 paysorigine VARCHAR(100),
 descriptioncourte TEXT,
 id_habitat INT
);

CREATE TABLE visitesguidees (
 id INT AUTO_INCREMENT PRIMARY KEY,
 titre VARCHAR(100),
 description TEXT,
 dateheure DATETIME,
 langue VARCHAR(50),
 capacite_max INT,
 duree INT,
 prix FLOAT,
 statut VARCHAR(20),
 id_guide INT
);

CREATE TABLE etapesvisite (
 id INT AUTO_INCREMENT PRIMARY KEY,
 titreetape VARCHAR(100),
 descriptionetape TEXT,
 ordreetape INT,
 id_visite INT
);

CREATE TABLE reservations (
 id INT AUTO_INCREMENT PRIMARY KEY,
 idvisite INT,
 idutilisateur INT,
 nbpersonnes INT,
 datereservation DATETIME
);

CREATE TABLE commentaires (
 id INT AUTO_INCREMENT PRIMARY KEY,
 idvisitesguides INT,
 idutilisateur INT,
 note INT,
 texte TEXT,
 date_commentaire DATETIME
);

-- ADMIN UNIQUE
INSERT INTO utilisateurs (nom,email,role,motpasse_hash,statut)
VALUES ('Admin','admin@assad.ma','admin','$2y$10$ADMINHASH',1);
