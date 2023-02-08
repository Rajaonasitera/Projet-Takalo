CREATE DATABASE takalo;
USE takalo;

CREATE TABLE user(
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    admin INT 
);

CREATE TABLE categorie(
    idCategorie INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(100)
);

CREATE TABLE produit(
    idProduit INT AUTO_INCREMENT PRIMARY KEY,
    idCategorie INT,
    nom VARCHAR(100),
    description TEXT,
    prixEstimatif DECIMAL,
    idUser INT,
    FOREIGN KEY (idCategorie) REFERENCES categorie(idCategorie),
    FOREIGN KEY (idUser) REFERENCES user(idUser)  
);

CREATE TABLE echange(
    idEchange INT AUTO_INCREMENT PRIMARY KEY,
    idUserDemande INT,
    idProduit1 INT,
    idUser INT,
    idProduit2 INT,
    dateDemande DATE,
    dateDecision DATE,
    etat INT,
    FOREIGN KEY (idUserDemande) REFERENCES user(idUser),
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idProduit1) REFERENCES produit(idProduit),
    FOREIGN KEY (idProduit2) REFERENCES produit(idProduit)
);

CREATE TABLE image(
    idImage INT AUTO_INCREMENT PRIMARY KEY,
    idProduit INT,
    path VARCHAR(255),
    FOREIGN KEY (idProduit) REFERENCES produit(idProduit)
);

INSERT INTO user VALUES(1,'Tatiana','tatiana@gmail.com','12345',1);
INSERT INTO user VALUES(0,'Danny','danny@gmail.com','67890',1);
INSERT INTO user VALUES(0,'Tiavina','tiavina@gmail.com','01234',0);

INSERT INTO categorie VALUES(1,'Vetements');
INSERT INTO categorie VALUES(0,'Chaussures');
INSERT INTO categorie VALUES(0,'Accessoirs');

INSERT INTO produit VALUES(1,'1','Tee-shirt','100% coton',5000,2);
INSERT INTO produit VALUES(0,'1','Short','Taille M pour moin 1m75',5000,3);
-- INSERT INTO produit VALUES(0,'1','Tee-shirt','100% coton',5000,2);

-- INSERT INTO image VALUES(1,1,'');

INSERT INTO image VALUES(1,1,'blackwatch.jpg');
INSERT INTO image VALUES(2,2,'bracelet.jpg');
INSERT INTO image VALUES(3,3,'casquette.jpg');
INSERT INTO image VALUES(4,3,'chapeau.jpg');
INSERT INTO image VALUES(5,4,'chaussure.jpg');
INSERT INTO image VALUES(6,5,'comp.jpg');
INSERT INTO image VALUES(7,6,'lunette.jpg');
INSERT INTO image VALUES(8,4,'nike.jpg');
INSERT INTO image VALUES(9,6,'glass.jpg');
INSERT INTO image VALUES(10,4,'tennis.jpg');
INSERT INTO image VALUES(11,5,'pantalon.jpg');
INSERT INTO image VALUES(12,7,'pmoney.jpg');
INSERT INTO image VALUES(13,8,'sacamain.jpg');
INSERT INTO image VALUES(14,8,'sacamain2.jpg');
INSERT INTO image VALUES(15,1,'watch.jpg');

INSERT INTO produit VALUES(1,3,'montre','montre pour hommr',30,1);
INSERT INTO produit VALUES(2,3,'bracelet','bracelet mixte',16,3);
INSERT INTO produit VALUES(3,1,'chapeau','chapeau ',12,2);
INSERT INTO produit VALUES(4,2,'chaussure','chaussure',23,1);
INSERT INTO produit VALUES(5,1,'vetement','vetement',20,2);
INSERT INTO produit VALUES(6,3,'lunette','lunette pour femme',15,3);
INSERT INTO produit VALUES(7,3,'portefeuille','porte feuille',8,3);
INSERT INTO produit VALUES(8,3,'sac','sac a main',14,1);