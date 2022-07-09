-- Active: 1657008843378@@127.0.0.1@3306
CREATE DATABASE hw2_laravel;
    DEFAULT CHARACTER SET = 'utf8mb4';

    use hw2_laravel;
    CREATE DATABASE hw2;

use hw2;
    

CREATE TABLE users(
id INTEGER AUTO_INCREMENT,
username VARCHAR(255),
password VARCHAR(255),
name VARCHAR(255),
surname VARCHAR(255),
email VARCHAR(255), 

PRIMARY KEY(id)
);

SELECT * from users;

   
CREATE table sections(

title TEXT,
id integer PRIMARY KEY,
immagine TEXT
);
/*drop TABLE sections*/



INSERT INTO sections VALUES("Friends", 1,
"/images/Friends.jpg"
);

INSERT INTO sections VALUES("How i met your mother",2,
"/images/HMYM.jpg"

);
INSERT INTO sections VALUES("Glee",3,
"/images/Glee.jpg"
);

INSERT INTO sections VALUES("Breaking Bad",4,
"/images/BreakingBad.jpg"

);
INSERT INTO sections VALUES("Stranger Things",5,
"/images/StrangerThings.jpg"
);
/*DROP TABLE preferiti*/

CREATE table preferitis(
/*'id','title','user_id','immagine'*/

id integer PRIMARY KEY,
user_id INTEGER,
title TEXT,
immagine TEXT,
FOREIGN KEY(user_id) REFERENCES users(id)

);

/*DROP TABLE salvati*/

CREATE table salvatis(

id integer PRIMARY KEY,
user_id INTEGER,
title TEXT,
immagine TEXT,
FOREIGN KEY(user_id) REFERENCES users(id)

);



