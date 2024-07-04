/*
DATA TYPES IN SQL
1. INT(10) -2333378889 - 2333378889, the parameter in the bracket means the number of character will show on the database, characters after 10, will be hidden, but they are there, just that they will not be shown. INT can store 4bytes of data
NOTE:
INT(10) UNSIGNED means: this can only store positive  number i.e 0 - 2345111239;
INT(10) SIGNED means: this can store both -ve and +ve numbers i.e -2333378889 - 2333378889

BIGINT: stores more data(number) than INT. it stores 4bytes of data

FLOAT: use to store decimal number such as -12.18, 12.34555, it stores 4bytes of data
DOUBLE: use to store more decimal number than FLOAT
VARCHAR(30): use to store combination of text,number and special xters that are not much such as password, username
TEXT: use to store data that are much such comments from customers with many paragraph
DATE: use to store date in the format 2024-10-24(Y-m-d)
DATETIME: use to store in the format 2024-10-24 17:30:00(Y-m-d H:m:s)
*/
/*
creating table named users with columns id, name, username, email, pwd(password), created_at
*/
CREATE TABLE users(
	id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    pwd VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIME,
    PRIMARY KEY (id) -- This makes sure unque id is assigned to one user
)
//To insert data into the table

INSERT INTO users (name, username, email, pwd) VALUES ("Adeniji", "mayorsky", "adenijimayokun@gmail.com", "admin")
INSERT INTO comments (username, user_comment, users_id) VALUES ("mayor167", "This is is a comment!", 1)

// To update data in the database

UPDATE users SET username= "mayor167", pwd = "oye" WHERE pwd ="admin" AND username = "mayorsky"

// To delete data from the database
DELETE FROM users WHERE id =2;

