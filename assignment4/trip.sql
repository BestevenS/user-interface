DROP DATABASE IF EXISTS `trip`;

CREATE DATABASE `trip`;

USE `trip`;

CREATE TABLE `user` (

    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    street VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    postalCode VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    phoneNumber VARCHAR(255) NOT NULL,
    birthDate DATE NOT NULL,
    sex VARCHAR(255) NOT NULL,

    PRIMARY KEY (id)

);

CREATE TABLE `tripEntity` (
    
    tripID INT NOT NULL AUTO_INCREMENT,
    fromCity VARCHAR(255) NOT NULL,
    toCity VARCHAR(255) NOT NULL,
    fromDate DATE NOT NULL,
    toDate DATE NOT NULL,

    PRIMARY KEY (tripID)
    
);