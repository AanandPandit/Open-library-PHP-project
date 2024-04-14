-- Create database manually
CREATE DATABASE ebook;


-- Create table for books and books details
CREATE TABLE pdf_files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    file_name VARCHAR(255) NOT NULL,
    file_data LONGBLOB NOT NULL,
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author VARCHAR(255),
    title VARCHAR(255),
    publisher VARCHAR(255),
    published_year INT,
    genre VARCHAR(255)
);

-- Create table for useraccount
CREATE TABLE useraccount (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY (email)
);
