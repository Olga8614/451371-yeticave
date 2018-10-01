CREATE DATABASE 451371-yeticave
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
USE 451371-yeticave;
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category CHAR(128)
);
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email CHAR(128) NOT NULL,
    pass VARCHAR(15) NOT NULL,
    username CHAR(50) NOT NULL,
    useradres CHAR(128) NOT NULL,
    avatar CHAR(256),
    registration DATETIME NOT NULL
);
CREATE TABLE lots (
   lot_id INT AUTO_INCREMENT PRIMARY KEY,
   lot_name CHAR(128) NOT NULL,
   lot_description CHAR(256) NOT NULL,
   lot_picture CHAR(256) NOT NULL,
   lot_category INT NOT NULL,
   init_price CHAR(15) NOT NULL,
   current_price CHAR(15) NOT NULL,
   end_date CHAR(15) NOT NULL,
   step CHAR(15) NOT NULL,
   lot_seller INT NOT NULL,
   lot_buyer INT NOT NULL
);
CREATE TABLE rates (
    rate_date DATETIME NOT NULL,
    rate_sum INT NOT NULL,
    rate_buyer INT NOT NULL,
    lot_id INT NOT NULL
);
CREATE UNIQUE INDEX categ ON categories(category);
CREATE UNIQUE INDEX username ON users(username);
CREATE UNIQUE INDEX email ON users(email);
CREATE INDEX email ON users(email);
CREATE INDEX username ON users(username);
CREATE INDEX lot ON lots(lot_name);
CREATE INDEX lot ON lots(lot_description);