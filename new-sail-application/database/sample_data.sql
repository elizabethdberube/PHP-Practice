DELETE FROM book_checkouts; 
DELETE FROM books;
DELETE FROM categories;
DELETE FROM users;

INSERT INTO users (id, name, email, password, updated_at,created_at)
VALUES (2, "liz", "fakeuser@gmail.com", "$2y$10$IPZL4D1tBjbe3lyio4dULe4E3IOnlMlEbcCNdm.UEWabPnGD8IiDe","2022-09-22", "2022-09-23" ),
      (3, "elizabeth", "user@librarystop.com", "$2y$10$IPZL4D1tBjbe3lyio4dULe4E3IOnlMlEbcCNdm.UEWabPnGD8IiDe","2022-09-22", "2022-09-23" );

INSERT INTO categories (id, category_name, category_status, category_created_on, category_updated_on)
VALUES (1, "Programming", "Enable",  "2022-09-22", "2022-09-23"),
       (2, "Database", "Enable",  "2022-09-22", "2022-09-23"),
       (3, "Web Design", "Enable",  "2022-09-22", "2022-09-23"),
       (4, "Web Development", "Enable",  "2022-09-22", "2022-09-23");
       
INSERT INTO books (id, category_id, book_author, book_name, book_isbn, book_no_of_copies, book_status, book_added_on, updated_at)
VALUES (1, 1, "Alan Forbes", "The Joy of PHP Programming", "978152279214", 4, "Available", "2022-09-22", "2022-09-23" ),
       (2, 2, "Laura Thompson", "PHP and MySQL Web Development", "753951852123",  3, "Available", "2022-09-22", "2022-09-23" ),
       (3, 3, "Mark Myers", "A Smarter Way to Learn JavaScript", "852369753951",  5, "Available", "2022-09-22", "2022-09-23" ),
       (4, 4, "Jennifer Robbins", "Learning Web Design: A Beginners Guide", "1449319270", 4, "Available", "2022-09-22", "2022-09-23" ),
       (5, 1, "Donald Knuth", "Art of Computer Programming", "0201038064",  3, "Available", "2022-11-10", "2022-11-11" ),
       (6, 2, "Jon Duckett", "PHP & MySQL: Server-side Web Development", "1119149215",  5, "Available", "2022-09-22", "2022-09-23" ),
       (7, 2, "Chris Fehily", "SQL Database Programming", "1937842479",  5, "Available", "2022-09-22", "2022-09-23" ),
       (8, 2, "Magige Robi", "MongoDB MADE EASY", "NULL",  5, "Available", "2022-09-22", "2022-09-23" ),
       (9, 3, "Brian D. Miller", "Principles of Web Design", "9781621537878",  5, "Available", "2022-09-22", "2022-09-23" ),
       (10, 3, "Jennifer Robbins", "Learning Web Design", "1491960205",  5, "Available", "2022-09-22", "2022-09-23" ),
       (11, 4, "Semmy Purewal", "Learning Web App Development", "9781449370190",  5, "Available", "2022-09-22", "2022-09-23" ),
       (12, 4, "Ivo Balbaert and Arian Salceanu", "Web Development with Julia and Genie", "180181113X",  5, "Available", "2022-09-22", "2022-09-23" );
    
INSERT INTO bookcheckouts (user_id, book_id, checkout_date, expected_return_date, return_date, book_fines, book_issue_status, updated_at,created_at )
VALUES (1, 1, '2022-09-22', '2023-08-22', NULL, NULL, 'Issue',"2022-09-22", "2022-09-23" );





