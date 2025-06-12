SHOW DATABASES;
USE blog;
SHOW TABLES;

CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    body TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts(title, body) VALUES ('Post One', 'This is post one');
INSERT INTO posts(title, body) VALUES ('Post two', 'This is post two');
INSERT INTO posts(title, body) VALUES ('Post three', 'This is post three');

SELECT title FROM posts;
SELECT * FROM posts;
SELECT * FROM posts WHERE id = 2;

UPDATE posts SET body = 'This is an updated text' WHERE id = 2;
UPDATE posts SET body = 'This is post one' WHERE id = 1;
UPDATE posts SET body = 'This is post three' WHERE id = 3;

INSERT INTO posts(title, body) VALUES ('Post four', 'This is post four');
DELETE FROM posts WHERE id = 2;

INSERT INTO posts(title, body) VALUES ('Post four', 'This is post four'), ('Post five', 'This is post five');

DROP DATABASE blog;