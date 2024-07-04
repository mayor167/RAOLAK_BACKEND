
//To insert data into the table

INSERT INTO users (name, username, email, pwd) VALUES ("Adeniji", "mayorsky", "adenijimayokun@gmail.com", "admin")
INSERT INTO comments (username, user_comment, users_id) VALUES ("mayor167", "This is is a comment!", 1)

// To update data in the database

UPDATE users SET username= "mayor167", pwd = "oye" WHERE pwd ="admin" AND username = "mayorsky"

// To delete data from the database
DELETE FROM users WHERE id =2;