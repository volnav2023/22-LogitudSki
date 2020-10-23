CREATE TABLE `22-logitudski`.`Epreuve`
(
    `lieu` TEXT NOT NULL,
    `date` DATE NOT NULL
) ENGINE = MyISAM;

CREATE TABLE `22-logitudski`.`Categorie`
(
    `nom` TEXT NOT NULL
) ENGINE = MyISAM;

CREATE TABLE `22-logitudski`.`Profil`
(
    `nom` TEXT NOT NULL
) ENGINE = MyISAM;

CREATE TABLE `22-logitudski`.`Participant`
(
    `nom`           TEXT NOT NULL,
    `prenom`        TEXT NOT NULL,
    `dateNaissance` DATE NOT NULL
) ENGINE = MyISAM;

CREATE TABLE `22-logitudski`.`Passage`
(
    `lieuEpreuve`              TEXT NOT NULL,
    `dateEpreuve`              DATE NOT NULL,
    `nomParticipant`           TEXT NOT NULL,
    `prenomParticipant`        TEXT NOT NULL,
    `dateNaissanceParticipant` DATE NOT NULL,
    `numeroDePassage`          INT  NOT NULL,
    `temps`                    INT  NOT NULL
) ENGINE = MyISAM;
