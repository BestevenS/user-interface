DROP DATABASE IF EXISTS `trip`;

CREATE DATABASE `trip`;

USE `trip`;

CREATE TABLE `users` (

    userId INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    postalCode VARCHAR(255) NOT NULL,
    mobilephone VARCHAR(255) NOT NULL,

    PRIMARY KEY (userId)

);

CREATE TABLE `trips` (
    
    tripID INT NOT NULL AUTO_INCREMENT,
    fromCity VARCHAR(255) NOT NULL,
    toCity VARCHAR(255) NOT NULL,
    fromDate DATE NOT NULL,
    toDate DATE NOT NULL,

    PRIMARY KEY (tripID)
    
);