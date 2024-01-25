CREATE DATABASE Site_FSTT;
USE Site_FSTT;

CREATE TABLE Etudiant (
    ID INT PRIMARY KEY,
    Nom VARCHAR(255),
    Programme VARCHAR(50),
    Email VARCHAR(255),
    Password VARCHAR(255),
    Genre BOOLEAN
);

CREATE TABLE Responsable (
    ID INT PRIMARY KEY,
    Nom VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255)
);

CREATE TABLE Prof (
    ID INT PRIMARY KEY,
    Nom VARCHAR(255),
    Programme VARCHAR(50),
    Email VARCHAR(255),
    Password VARCHAR(255)
);

CREATE TABLE Note (
    ID INT PRIMARY KEY,
    Etudiant_ID INT,
    Note INT,
    Session VARCHAR(50),
    Statut VARCHAR(50),
    FOREIGN KEY (Etudiant_ID) REFERENCES Etudiant(ID)
);

CREATE TABLE Statistique (
    ID INT PRIMARY KEY,
    Type VARCHAR(50),
    Nombre INT
);

INSERT INTO Etudiant (ID, Nom, Programme, Email, Password, Genre) VALUES
(1, 'Fatima Alaoui', 'Deust', 'fatima@email.com', 'motdepasse123', 0),
(2, 'Karim Alaoui', 'Licence', 'karim@email.com', 'secret456', 1),
(3, 'Youssef Hichou', 'Licence', 'youssef@email.com', 'mypassword789', 0),
(4, 'Nissrin Karim', 'Deust', 'nissrin@email.com', 'securepassword', 1);

INSERT INTO Prof (ID, Nom, Programme, Email, Password) VALUES 
(1, 'Mhammed Ait Kbir', 'Deust', 'mhammedaitkbir@email.com', 'password123'),
(2, 'Abdellah Azmani', 'Licence', 'abdellahazmani@email.com', 'motdepasse456'),
(3, 'Yassin El Yussufi', 'Master', 'yassinelyussufi@email.com', 'mdp789');

INSERT INTO Statistique (ID, Type, Nombre) VALUES
(1, 'Etudiants', 4200),
(2, 'Enseignants', 200),
(3, 'Formations Continues & Initiales', 49),
(4, 'Département', 4);

INSERT INTO Note (ID, Etudiant_ID, Note, Session, Statut) VALUES
(1, 1, 15, 'Normal', 'Valider'),
(2, 2, 7, 'Normal', 'Rattrapage'),
(3, 3, 2, 'Rattrapage', 'Non Valider'),
(4, 4, 8, 'Rattrapage', 'AC'),
(5, 1, 15, 'Normal', 'Valider'),
(6, 2, 7, 'Normal', 'Rattrapage'),
(7, 3, 2, 'Rattrapage', 'Non Valider'),
(8, 4, 8, 'Rattrapage', 'AC');

INSERT INTO Responsable (ID, Nom, Email, Password) 
VALUES 
(1, 'Abdellah Allaoui', 'abdellahalaoui@email.com', 'motdepasse123'),
(2, 'Nada Qarin', 'nadaqarin@email.com', 'motdepasse456' ), 
(3, 'Nouh Anne', 'nouhanne@email.com', 'motdepasse789');


INSERT INTO prof (Nom, Programme, Email, Password) VALUES ('Karim', 'Programme', 'karim@email.com', 'secret456');

