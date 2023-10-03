create database Nail_dtbase;
use Nail_dtbase;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(100),
    phone VARCHAR(10),
    username VARCHAR(50),
    password VARCHAR(100)
);

insert into users(firstname,lastname,email,phone,username,password) values
('Anh','Hoang','anhltvp2003@gmail.com','0915192289','nghanh1805','nghanh180503');

select*from users;

CREATE TABLE nail_care_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nameProduct VARCHAR(100),
    price DECIMAL(10, 2),
    quantity INT
);

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);


