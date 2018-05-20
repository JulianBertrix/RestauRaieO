/*Suppression de la base de données*/
drop database if exists resto_db_bwb;
/*creation de la base de données resto_db_bwb*/
create database if not exists resto_db_bwb;
/*checkout sur la base de données*/
use resto_db_bwb;

/*Table users de la base de données */
create table if not exists users(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(20),
    password VARCHAR(1024),
    email VARCHAR(320)
);

/*Table restaurants de la base de données */
create table if not exists restaurants(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20),
    adresse VARCHAR(1024),
    tel VARCHAR(10),
    email VARCHAR(320)
);

/*Table cartes de la base de données */
create table if not exists cartes(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_restaurant INT,
    nom VARCHAR(1024),
    description VARCHAR(2048)
);

/*Table menus de la base de données */
create table if not exists menus(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_carte INT,
    nom VARCHAR(1024),
    description VARCHAR(2048),
    url_image VARCHAR(2048)
);

/*Table plats de la base de données */
create table if not exists plats(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_menus INT,
    id_type INT,
    nom VARCHAR(1024),
    prix VARCHAR(5)
);

/*Table types_de_plat de la base de données */
create table if not exists types_de_plat(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20)
);

/*Insertion des données - jeu de test*/

/*Ajout des entrée dans la table des types de plats*/
insert into types_de_plat (nom) values('entree');
insert into types_de_plat (nom) values('plat');
insert into types_de_plat (nom) values('dessert');

/*creation des plats*/
insert into plats (id_type, nom, prix) values(1, 'salade', '5,60');
insert into plats (id_type, nom, prix) values(1, 'dolma', '15,60');
insert into plats (id_type, nom, prix) values(1, 'salade de fruits', '9,40');

/*creation d'un menu*/
insert into menus (nom, description) values('les romains', "les jeux");

/*mise a jour des plats avec l'id du menu*/
/*on a ajouter les plat au menu*/
update plats set id_menus = 1 where id = 1;
update plats set id_menus = 1 where id = 2;
update plats set id_menus = 1 where id = 3;

/*Ajout d'un restaurant*/
insert into restaurants (nom, adresse, tel, email) values('RestauRaieO', 'dtc', '0836656565', 'd@t.c');

/*creation d'une carte*/
insert into cartes (nom, description) values('annule un gus', 'foreach(giturl){$entry;} pour parcourir un dossier et savourer un repas hors de prix');

/*mise a jour des cartes avec l'id du restaurant*/
/*on a ajouter les cartes au restaurant*/
update cartes set id_restaurant = 1 where id = 1;

/*mise a jour des menus avec l'id de la carte*/
/*on a ajouter les menus aux cartes*/
update menus set id_carte = 1 where id = 1;

/*Ajout des utilisateurs*/
insert into users (username, password, email) values('god', 'michet', 's.toy@yp.x');
insert into users (username, password, email) values('jaquie', 'michel', 's@jm.x');
insert into users (username, password, email) values('a', 'b', 'c@d.e');
insert into users (username, password, email) values('test', 'test', 'test@test.test');
