DROP TABLE IF EXISTS utilisateurs;

CREATE TABLE utilisateurs (
    idUtilisateurs INT(4) AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT  NULL,
    mdp VARCHAR(30) NOT NULL,
    CONSTRAINT pk_utilisateurs PRIMARY KEY (idUtilisateurs),
);
