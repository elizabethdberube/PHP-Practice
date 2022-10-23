INSERT INTO users (user_email, user_password)
VALUES ("fakeuser@gmail.com", "areallygreatpassword");

INSERT INTO admins (admin_email, admin_password)
VALUES ("admin@librarystop.com", "areallygreatpassword"),
       ("liz@librarystop.com", "areallygreatpassword");
       
INSERT INTO categories (category_name, category_status, category_created_on, category_updated_on)
VALUES ("Programming", "Enable",  "2022-09-22", "2022-09-23"),
       ("Database", "Enable",  "2022-09-22", "2022-09-23"),
       ("Web Design", "Enable",  "2022-09-22", "2022-09-23"),
       ("Web Development", "Enable",  "2022-09-22", "2022-09-23");

INSERT INTO books (category_id, book_author, book_name, book_isbn, book_no_of_copies, book_status, book_added_on, book_updated_on)
VALUES (1, "Alan Forbes", "The Joy of PHP Programming", "978152279214", 4, "Available", "2022-09-22", "2022-09-23" ),
       (2, "Laura Thompson", "PHP and MySQL Web Development", "753951852123",  3, "Available", "2022-09-22", "2022-09-23" ),
       (3, "Mark Myers", "A Smarter Way to Learn JavaScript", "852369753951",  5, "Available", "2022-09-22", "2022-09-23" ),
       (4, "Jennifer Robbins", "Learning Web Design: A Beginners Guide", "1449319270", 4, "Available", "2022-09-22", "2022-09-23" );
   
INSERT INTO book_checkouts (user_id, book_id, checkout_date, expected_return_date, return_date, book_fines, book_issue_status  )
VALUES (1, 1, '2022-09-22', '2023-08-22', NULL, NULL, 'Issue' );

