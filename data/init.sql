CREATE DATABASE sessions_lab;

USE sessions_lab;

CREATE TABLE users (
                       id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(30) NOT NULL,
                       password VARCHAR(30) NOT NULL
);