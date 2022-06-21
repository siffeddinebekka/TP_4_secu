drop database if exists tp4_user;
create database tp4_user;

use tp4_user;
create table user (
    iduser int(3) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    email varchar (100),
    mdp varchar (255),
    role enum ("admin","user"),
    nbTentatives int(10) default 0,
    primary key (iduser)
);

insert into user values (null,"mamar","lassana","a@gmail.com","123","admin",0);