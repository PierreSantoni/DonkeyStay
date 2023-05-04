DROP DATABASE DonkeyStay;
CREATE DATABASE IF NOT EXISTS DonkeyStay;
USE DonkeyStay;
CREATE TABLE IF NOT EXISTS `user` (
    `userID` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `userFirst` VARCHAR(50) NOT NULL,
    `userLast`VARCHAR(50) NOT NULL,
    `userEmail`VARCHAR(50) NOT NULL,
    `userAdmin` BOOLEAN NOT NULL,
    `userLogin` VARCHAR(255) NOT NULL,
    `userPass`VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS `hotel` (
    `hotelID` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `hotelStars` INT,
    `hotelName` VARCHAR(50) NOT NULL,
    `hotelAdress` VARCHAR(50) NOT NULL,
    `hotelCity` VARCHAR(50) NOT NULL,
    `hotelCountry` VARCHAR(50) NOT NULL
);
CREATE TABLE IF NOT EXISTS `room` (
    `roomID` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `hotelID` INT NOT NULL,
    `roomNumber` INT NOT NULL,
    `roomNightPrice` DECIMAL NOT NULL,
    `roomDescription` VARCHAR(255),
    `roomPic` VARCHAR(255),
    CONSTRAINT hotel
        FOREIGN KEY (hotelID) REFERENCES hotel(hotelID)
        ON DELETE CASCADE
);
CREATE TABLE IF NOT EXISTS `reservation` (
    `reservationID` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `userID` INT NOT NULL,
    `roomID` INT NOT NULL,
    `reservationDebut` DATE NOT NULL,
    `reservationFin` DATE NOT NULL,
    CONSTRAINT roomsINhotels
        FOREIGN KEY (userID) REFERENCES user(userID)
        ON DELETE CASCADE,
        FOREIGN KEY (roomID) REFERENCES room(roomID)
        ON DELETE CASCADE
);