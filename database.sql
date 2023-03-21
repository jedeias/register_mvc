
CREATE DATABASE register_mvc;

use register_mvc;

CREATE TABLE user(
id INT NOT NULL auto_increment PRIMARY KEY,
name VARCHAR(60) NOT NULL,
nick_name VARCHAR(60) NOT NULL,
sex enum ('M','F') NOT NULL,
date_birth date NOT NULL,
email VARCHAR(120) NOT NULL,
password VARCHAR(12) NOT NULL,
UNIQUE KEY (email)
);

desc user;

INSERT INTO user VALUES (DEFAULT, "demo", "demo_nick", "M", "1994-04-03", "demo@demo.com", "123456789");
INSERT INTO user VALUES (DEFAULT, "user", " user_name", "F", "19940403", "teste@teste.com", "123456789");

-- DROP DATABASE register_mvc;
