CREATE DATABASE traveling_project;

CREATE TABLE users (
    id int PRIMARY KEY AUTO_INCREMENT,
    emri VARCHAR(225) NOT null,
    username VARCHAR(225) NOT null,
    email VARCHAR(225) NOT null,
    password VARCHAR(225) NOT null,
    roli VARCHAR(225) NOT null
    );
    
    CREATE TABLE destination (
        id int PRIMARY KEY AUTO_INCREMENT,
        emri_destinacionit VARCHAR(225) NOT null,
        shteti VARCHAR(225) NOT null,
        cmimi DECIMAL(10,2)
        );
        
        CREATE TABLE booking (
          id int PRIMARY KEY AUTO_INCREMENT,
            data VARCHAR(225) NOT null,
            destinationID INT,
            FOREIGN KEY (destinationID) REFERENCES destination(id),
            userID INT,
            FOREIGN KEY (userID) REFERENCES users(id),
            statusi VARCHAR(225) NOT null,
            nr_personave INT NOT null
            );
    