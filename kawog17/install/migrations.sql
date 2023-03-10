DROP DATABASE IF EXISTS kawog17;
CREATE DATABASE kawog17;
USE kawog17;

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
    image longblob
);