-- Publication de l'annonce

CREATE TABLE annonces_publiees (
   Id INT,
   Id_1 INT,
   PRIMARY KEY (Id, Id_1),
   FOREIGN KEY (Id) REFERENCES utilisateurs(Id),
   FOREIGN KEY (Id_1) REFERENCES annonces(Id)
);
INSERT INTO annonces_publiees (Id, Id_1) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),

-- Création de l'annonce

CREATE TABLE annonces (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   titre VARCHAR(50),
   date_publication DATETIME,
   Id_1 INT NOT NULL,
   FOREIGN KEY (Id_1) REFERENCES voitures(Id)
);
INSERT INTO annonces (Id, titre, date_publication) VALUES
(1,'Mc Laren', '2023-08-24 10:00:00'),
(2,'Lamborghini', '2023-08-24 10:00:00'),
(3,'Ford', '2023-08-24 10:00:00'),
(4,'Dodge', '2023-08-24 10:00:00'),
(5,'Ferrari', '2023-08-24 10:00:00'),

-- Création de la voiture
-- Marque

CREATE TABLE marque (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   Id_1 INT NOT NULL,
   FOREIGN KEY (Id_1) REFERENCES modele(Id)
);
INSERT INTO marque (Id, nom) VALUES
(1, 'Mc Laren'),
(2, 'Lamborghini'),
(3, 'Ford'),
(4, 'Dodge'),
(5, 'Ferrari'),

-- Modèle

CREATE TABLE modele (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   cylindre TINYINT,
   chevaux SMALLINT
);

INSERT INTO modele (Id, nom, cylindre, chevaux) VALUES
(1, 'Mansory', '8', '950'),
(2, 'Aventador LP-700', '10', '700'),
(3, 'F150 SVT-Raptor', '12', '420'),
(4, 'Charger SRT HellCat', '5', '717'),
(5, 'LaFerrari', '12', '800'),

-- Infos

CREATE TABLE voitures (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   kilometrage INT,
   année DATE,
   prix DECIMAL(7,2),
   photo VARCHAR(255),
   Id_1 INT NOT NULL,
   FOREIGN KEY (Id_1) REFERENCES marque(Id)
);
INSERT INTO voitures (Id, kilometrage, année, prix, photo) VALUES
(1, '16 000', '2014', '129 000 €', 'McLaren Mansory.jpg'),
(2, '21 542', '2011', '13 842 €', 'Lamborghini Aventador.jpg'),
(3, '38 952', '2015', '13 842 €', 'Ford Raptor.jpg'),
(4, '24 157', '2020', '13 842 €', 'Dodge Charger SRT.jpg'),
(5, '19 354', '2020', '37 416 €', 'Ferrari Laferrari.jpg'),

-- Photos

CREATE TABLE photos (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   photo VARCHAR(255),
   Id_1 INT NOT NULL,
   FOREIGN KEY (Id_1) REFERENCES voitures(Id)
);

-- Liaison vers la table equipements_options

CREATE TABLE possede (
   Id INT,
   Id_1 INT,
   PRIMARY KEY (Id, Id_1),
   FOREIGN KEY (Id) REFERENCES voitures(Id),
   FOREIGN KEY (Id_1) REFERENCES equipements_options(Id)
);
INSERT INTO possede (Id, Id_1) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),

-- Description des Options et Equipements

CREATE TABLE equipements_options (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   transmission VARCHAR(50)
);
INSERT INTO equipements_options (Id, nom, transmission) VALUES
(1,'Climatisation', 'Automatique'),
(2,'Sièges chauffants', 'Manuelle'),
(3,'Toit ouvrant', 'Automatique'),
(4,'Système de navigation', 'Automatique'),
(5,'Direction assistée', 'Automatique'),

-- CREATE TABLE messages (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom_client VARCHAR(50),
--    prenom_client VARCHAR(50),
--    email VARCHAR(50),
--    telephone VARCHAR(20),
--    motif VARCHAR(50),
--    message VARCHAR(255)
-- );

-- CREATE TABLE avis (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom_client VARCHAR(50),
--    prenom_client VARCHAR(50),
--    commentaire VARCHAR(255),
--    note TINYINT,
--    valider BOOLEAN
-- );

-- CREATE TABLE roles (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom VARCHAR(50)
-- );



-- CREATE TABLE utilisateurs (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom VARCHAR(50),
--    prenom VARCHAR(50),
--    email VARCHAR(50),
--    mot_de_passe VARCHAR(50),
--    Id_1 INT NOT NULL,
--    Id_2 INT NOT NULL,
--    FOREIGN KEY (Id_1) REFERENCES roles(Id),
--    FOREIGN KEY (Id_2) REFERENCES messages(Id)
-- );


-- CREATE TABLE jours (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom VARCHAR(50),
--    Id_1 INT NOT NULL,
--    FOREIGN KEY (Id_1) REFERENCES utilisateurs(Id)
-- );

-- CREATE TABLE horaires (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    ouverture VARCHAR(50),
--    fermeture VARCHAR(50),
--    Id_1 INT NOT NULL,
--    FOREIGN KEY (Id_1) REFERENCES jours(Id)
-- );

-- CREATE TABLE services (
--    Id INT AUTO_INCREMENT PRIMARY KEY,
--    nom VARCHAR(50),
--    Id_1 INT NOT NULL,
--    FOREIGN KEY (Id_1) REFERENCES utilisateurs(Id)
-- );


-- CREATE TABLE avis_valider (
--    Id INT,
--    Id_1 INT,
--    PRIMARY KEY (Id, Id_1),
--    FOREIGN KEY (Id) REFERENCES utilisateurs(Id),
--    FOREIGN KEY (Id_1) REFERENCES avis(Id)
-- );