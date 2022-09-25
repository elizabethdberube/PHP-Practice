DROP DATABASE IF EXISTS book_db;

CREATE DATABASE book_db;

USE book_db;

DROP TABLE IF EXISTS users;

DROP TABLE IF EXISTS admins;
CREATE TABLE admins (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
admin_password TEXT NULL,
created_at DATETIME,
);

DROP TABLE IF EXISTS books;
CREATE TABLE book_lists (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
category_id TEXT NULL,
book_author TEXT NULL,
book_name TEXT NULL, 
book_isbn TEXT NULL,
book_no_of_copies TEXT NULL,
book_status enum ('Available', 'Unavailable'),
book_added_on DATETIME,
book_updated_on DATETIME,
FOREIGN KEY (book_id),
REFERENCES books(id),
ON DELETE SET NULL
);

DROP TABLE IF EXISTS categories;
CREATE TABLE categories (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
category_name TEXT NULL,
category_status enum ('Enable', 'Disable'),
category_created_on DATETIME,
updated_updated_on DATETIME,
FOREIGN KEY (category_id)
REFERENCES categories(id)
ON DELETE SET NULL
);

DROP TABLE IF EXISTS  book_checkouts;
CREATE TABLE  book_checkouts (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
user_id INT NULL,
book_id INT NULL,
checkout_date_time DATETIME,
expected_return_date INT NULL,
return_date_time DATETIME,
book_fines INT NULL,
book_issue_status enum('Issue','Return','Not Return'),
FOREIGN KEY ( book_checkout_id)
REFERENCES  book_checkouts(id)
ON DELETE SET NULL
);



