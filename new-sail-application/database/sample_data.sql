INSERT INTO admins (id, admin_email, admin_password)
VALUES (001, 'admin@librarystop.com', 'areallygreatpassword'),
       (002, 'liz@librarystop.com', 'areallygreatpassword');
       
INSERT INTO books (id, category_id, book_author, book_name, book_isbn, book_no_of_copies, book_status, book_added_on, book_updated_on)
VALUES (001, 001, 'Alan Forbes', 'The Joy of PHP Programming', '978152279214', 4, 'Available', '2022-09-22', '2022-09-23' ),
       (002, 002, 'Laura Thompson', 'PHP and MySQL Web Development', '753951852123',  3, 'Available', '2022-09-22', '2022-09-23' ),
       (003, 004, 'Mark Myers', 'A Smarter Way to Learn JavaScript', '852369753951',  5, 'Available', '2022-09-22', '2022-09-23' ),
       (004, 003, 'Jennifer Robbins', 'Learning Web Design: A Beginners Guide', '1449319270', 4, '2022-09-22', '2022-09-23' );
   
INSERT INTO categories (id, category_name, category_status, category_created_on, updated_updated_on)
VALUES (001, "Programming", 'Enable',  '2022-09-22', '2022-09-23'),
       (002, "Database", 'Enable',  '2022-09-22', '2022-09-23'),
       (003, "Web Design", 'Enable',  '2022-09-22', '2022-09-23'),
       (004, "Web Development", 'Enable',  '2022-09-22', '2022-09-23');


