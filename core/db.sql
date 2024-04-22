CREATE DATABASE auth_bramanis;
USE auth_bramanis;
 
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password)
VALUES
('beate@ckc.lv', 'Parole123');