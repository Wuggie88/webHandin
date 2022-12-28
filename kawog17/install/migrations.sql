-- The migrations file exists so that everyone can run the script and get the same database
-- on their local machine.

DROP DATABASE IF EXISTS mvc;
CREATE DATABASE mvc;
USE mvc;

CREATE TABLE user (
    user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(126) UNIQUE NOT NULL,
    name VARCHAR(126) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(126) NOT NULL
);

CREATE TABLE image (
	id INT(11) UNSIGNED AUTO_INCREMENT UNIQUE,
    username VARCHAR(30),
    title VARCHAR(30) NOT NULL,
    description VARCHAR(126) NOT NULL,
    imagename VARCHAR(126) NOT NULL PRIMARY KEY,
    image blob
);