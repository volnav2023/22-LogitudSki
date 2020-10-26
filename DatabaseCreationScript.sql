DROP TABLE `22-logitudski`.`epreuve`;
DROP TABLE `22-logitudski`.`categorie`;
DROP TABLE `22-logitudski`.`profil`;
DROP TABLE `22-logitudski`.`participant`;
DROP TABLE `22-logitudski`.`passage`;


CREATE TABLE `22-logitudski`.`epreuve`
(
    `lieu` TEXT NOT NULL,
    `date` DATE NOT NULL
);

CREATE TABLE `22-logitudski`.`categorie`
(
    `nom` TEXT NOT NULL
);

CREATE TABLE `22-logitudski`.`profil`
(
    `nom` TEXT NOT NULL
);

CREATE TABLE `22-logitudski`.`participant`
(
    `nom`           TEXT NOT NULL,
    `prenom`        TEXT NOT NULL,
    `dateNaissance` DATE NOT NULL,
    `email`         TEXT NOT NULL,
    `photo`         TEXT NOT NULL,
    `nomProfil`     TEXT NOT NULL
);

CREATE TABLE `22-logitudski`.`passage`
(
    `lieuEpreuve`              TEXT NOT NULL,
    `dateEpreuve`              DATE NOT NULL,
    `nomParticipant`           TEXT NOT NULL,
    `prenomParticipant`        TEXT NOT NULL,
    `dateNaissanceParticipant` DATE NOT NULL,
    `numeroDePassage`          INT  NOT NULL,
    `temps`                    INT  NOT NULL,
    `nomCategorie`             TEXT NOT NULL
);

insert into epreuve (lieu, date)
VALUES ('Pampelone', '2025-04-01');
insert into epreuve (lieu, date)
VALUES ('CherchezLeBug', '2025-04-01');
insert into epreuve (lieu, date)
VALUES ('YaPlusdNeige', '2030-04-01');

insert into profil (nom)
values ('ASVP : ex-pervenches');
INSERT INTO profil (nom)
values ('Open: conjoints et/ou enfants');
INSERT INTO profil (nom)
VALUES ('Gardes-champêtres');

INSERT INTO categorie (nom)
VALUES ('M1');
INSERT INTO categorie (nom)
VALUES ('M2');
INSERT INTO categorie (nom)
VALUES ('M3');
INSERT INTO categorie (nom)
VALUES ('Sénior');
INSERT INTO categorie (nom)
VALUES ('V');
INSERT INTO categorie (nom)
VALUES ('Snow');
INSERT INTO categorie (nom)
VALUES ('Nouvelle Glisse(NG)');

INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar1','Madeleine1','1934-11-01','mad1.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic1.jpg','ASVP');
INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar2','Madeleine2','1935-11-01','mad2.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic2.jpg','Gardes-champêtres');
INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar3','Madeleine3','1936-11-01','mad3.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic1.jpg','ASVP');
INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar4','Madeleine4','1937-11-01','mad4.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic1.jpg','Open: conjoints et/ou enfants');
INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar5','Madeleine5','1938-11-01','mad5.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic1.jpg','Gardes-champêtres');
INSERT INTO participant (nom, prenom, dateNaissance, email, photo, nomProfil)
VALUES ('Dynastar6','Madeleine6','1939-11-01','mad6.dyn@fdlo.com',
        'C:\wamp64\www\22-LogitudSki\public\assets\img\pic1.jpg','ASVP');

INSERT INTO passage (lieuEpreuve, dateEpreuve, nomParticipant, prenomParticipant, dateNaissanceParticipant, numeroDePassage, temps, nomCategorie)
VALUES ('Pampelone','2025-04-01','Dynastar2','Madeleine2','1935-11-01',0,0,'Sénior');
INSERT INTO passage (lieuEpreuve, dateEpreuve, nomParticipant, prenomParticipant, dateNaissanceParticipant, numeroDePassage, temps, nomCategorie)
VALUES ('Pampelone','2025-04-01','Dynastar6','Madeleine6','1939-11-01',0,0,'Snow');
