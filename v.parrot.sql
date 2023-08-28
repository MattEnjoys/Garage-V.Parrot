-- CREATION DES TABLES
CREATE TABLE equipements_options (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   transmission VARCHAR(50)
);

CREATE TABLE modeles (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   cylindre TINYINT,
   chevaux SMALLINT
);

CREATE TABLE roles (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(20)
);

CREATE TABLE messages (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom_client VARCHAR(50),
   prenom_client VARCHAR(50),
   email VARCHAR(50),
   telephone VARCHAR(20),
   motif VARCHAR(50),
   message TEXT
);

CREATE TABLE avis (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom_client VARCHAR(50),
   prenom_client VARCHAR(50),
   commentaire VARCHAR(255),
   note TINYINT,
   valider BOOLEAN
);

CREATE TABLE marque (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(40),
   Id_modele INT NOT NULL,
   FOREIGN KEY (Id_modele) REFERENCES modeles(Id)
);

CREATE TABLE voitures (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   kilometrage INT,
   annee DATE,
   prix DECIMAL(10, 2),
   photo VARCHAR(255),
   Id_marque INT NOT NULL,
   FOREIGN KEY (Id_marque) REFERENCES marque(Id)
);

CREATE TABLE photos (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(40),
   photo VARCHAR(255),
   Id_1 INT NOT NULL,
   FOREIGN KEY (Id_1) REFERENCES voitures(Id)
);

CREATE TABLE possede (
   Id INT,
   Id_1 INT,
   PRIMARY KEY (Id, Id_1),
   FOREIGN KEY (Id) REFERENCES voitures(Id),
   FOREIGN KEY (Id_1) REFERENCES equipements_options(Id)
);

CREATE TABLE utilisateurs (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   email VARCHAR(50),
   mot_de_passe VARCHAR(50),
   Id_role INT NOT NULL,
   Id_message INT NOT NULL,
   FOREIGN KEY (Id_role) REFERENCES roles(Id),
   FOREIGN KEY (Id_message) REFERENCES messages(Id)
);

CREATE TABLE jours (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   Id_utilisateur INT NOT NULL,
   FOREIGN KEY (Id_utilisateur) REFERENCES utilisateurs(Id)
);

CREATE TABLE horaires (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   ouverture VARCHAR(50),
   fermeture VARCHAR(50),
   Id_jour INT NOT NULL,
   FOREIGN KEY (Id_jour) REFERENCES jours(Id)
);

CREATE TABLE services (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   nom VARCHAR(50),
   Id_utilisateur INT NOT NULL,
   content TEXT,
   photo VARCHAR(255),
   FOREIGN KEY (Id_utilisateur) REFERENCES utilisateurs(Id)
);

CREATE TABLE avis_valider (
   Id_utilisateur INT,
   Id_avis INT,
   PRIMARY KEY (Id_utilisateur, Id_avis),
   FOREIGN KEY (Id_utilisateur) REFERENCES utilisateurs(Id),
   FOREIGN KEY (Id_avis) REFERENCES avis(Id)
);

CREATE TABLE annonces (
   Id INT AUTO_INCREMENT PRIMARY KEY,
   titre VARCHAR(50),
   date_publication DATETIME,
   Id_voiture INT NOT NULL,
   content TEXT,
   UNIQUE (Id_voiture),
   FOREIGN KEY (Id_voiture) REFERENCES voitures(Id)
);


CREATE TABLE annonces_publiees (
   Id_utilisateur INT,
   Id_annonce INT,
   PRIMARY KEY (Id_utilisateur, Id_annonce),
   FOREIGN KEY (Id_utilisateur) REFERENCES utilisateurs(Id),
   FOREIGN KEY (Id_annonce) REFERENCES annonces(Id)
);

-- CREATION DES INSERT INTO
INSERT INTO equipements_options (Id, nom, transmission) VALUES
(1,'Climatisation', 'Automatique'),
(2,'Sièges chauffants', 'Manuelle'),
(3,'Toit ouvrant', 'Automatique'),
(4,'Système de navigation', 'Automatique'),
(5,'Direction assistée', 'Automatique');

INSERT INTO modeles (Id, nom, cylindre, chevaux) VALUES
(1, 'Mansory', 8, 950),
(2, 'Aventador LP-700', 10, 700),
(3, 'F150 SVT-Raptor', 12, 420),
(4, 'Charger SRT HellCat', 5, 717),
(5, 'LaFerrari', 12, 800);

INSERT INTO roles (Id, nom) VALUES
(1, 'SuperAdmin'),
(2, 'Admin'),
(3, 'Employé');

INSERT INTO messages (nom_client, prenom_client, email, telephone, motif, message) VALUES
('Nom1', 'Prénom1', 'email1@example.com', '1234567890', 'Question', 'This is a question.'),
('Nom2', 'Prénom2', 'email2@example.com', '9876543210', 'Inquiry', 'This is an inquiry.'),
('Nom3', 'Prénom3', 'email3@example.com', '5555555555', 'Feedback', 'This is some feedback.');

INSERT INTO marque (Id, nom, Id_modele) VALUES
(1, 'Mc Laren', 1),
(2, 'Lamborghini', 2),
(3, 'Ford', 3),
(4, 'Dodge', 4),
(5, 'Ferrari', 5);

INSERT INTO voitures (Id, kilometrage, annee, prix, photo, Id_marque) VALUES
(1, '16 000', '2014', '129 000 €', 'McLaren Mansory.jpg', 1),
(2, '21 542', '2011', '13 842 €', 'Lamborghini Aventador.jpg', 2),
(3, '38 952', '2015', '13 842 €', 'Ford Raptor.jpg', 3),
(4, '24 157', '2020', '13 842 €', 'Dodge Charger SRT.jpg', 4),
(5, '19 354', '2020', '37 416 €', 'Ferrari Laferrari.jpg', 5);

INSERT INTO photos (Id, nom, photo, Id_1) VALUES
(1, 'Image McLaren', NULL, 1),
(2, 'Image Lamborghini', NULL, 2),
(3, 'Image Ford', NULL, 3),
(4, 'Image Dodge', NULL, 4),
(5, 'Image Ferrari', NULL, 5);

INSERT INTO possede (Id, Id_1) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

INSERT INTO utilisateurs (Id_message, Id_role, nom, prenom, email, mot_de_passe) VALUES
(1, 1, 'Nom1', 'Prénom1', 'email1@example.com', 'motdepasse1'),
(2, 2, 'Nom2', 'Prénom2', 'email2@example.com', 'motdepasse2'),
(3, 3, 'Nom3', 'Prénom3', 'email3@example.com', 'motdepasse3');

INSERT INTO annonces (Id, titre, date_publication, Id_voiture,content) VALUES
(1,'Mc Laren', '2023-08-24 10:00:00', 1, 'annonce 1'),
(2,'Lamborghini', '2023-08-24 10:00:00', 2, 'annonce 2'),
(3,'Ford', '2023-08-24 10:00:00', 3, 'annonce 3'),
(4,'Dodge', '2023-08-24 10:00:00', 4, 'annonce 4'),
(5,'Ferrari', '2023-08-24 10:00:00', 5, 'annonce 5');

INSERT INTO services (Id, nom, Id_utilisateur,content,photo) VALUES
(1,'Carrosserie', 1,'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at','Carrosserie.jpg'),
(2,'Mécanique', 1,'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at','Mécanique.jpg'),
(3,'Entretien', 1,'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at','Entretien.jpg');