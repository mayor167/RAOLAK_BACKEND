HOW TO SELECT FROM DATABASE

SELECT name,username, email FROM users where id = 1
SELECT username, user_comment FROM comments WHERE users_id =3
SELECT * FROM comments WHERE users_id =3; / select all context within the row where users_id =3

SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id; // This joins two tables today

