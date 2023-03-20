
CREATE DATABASE register_mvc;

use register_mvc;

CREATE TABLE user(
id INT NOT NULL auto_increment,
name VARCHAR(60) NOT NULL,
nick_name VARCHAR(60) NOT NULL,
sex enum ('M','F') NOT NULL,
date_birth date NOT NULL,
email VARCHAR(120) NOT NULL,
password VARCHAR(12) NOT NULL,
PRIMARY KEY (id)
);

desc user;

INNER JOIN

