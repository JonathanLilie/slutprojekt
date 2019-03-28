CREATE DATABASE Login;

USE Login;

CREATE TABLE register(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    mail varchar(32) unique,
    address varchar(32),
    postnummer varchar(32),
    ort varchar(32),
    password varchar(32)
);
