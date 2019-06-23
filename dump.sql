CREATE TABLE category (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    short_content TEXT NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    images TEXT NOT NULL,
    author INT(11) NOT NULL,
    create_at INT(11) NOT NULL,
    update_at INT(11) NOT NULL,
PRIMARY KEY (id)
 );

 CREATE TABLE movie (
	id INT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	category_ids TEXT NOT NULL,
	year int(11),
	actor TEXT NOT NULL,
	trailer text(255) NOT NULL,
	film text(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    short_content TEXT NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    images TEXT NOT NULL,
    author INT(11) NOT NULL,
    create_at INT(11) NOT NULL,
    update_at INT(11) NOT NULL,
PRIMARY KEY (id)
 );

CREATE TABLE setting(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR (255) DEFAULT NULL,
    value VARCHAR (255) DEFAULT NULL,
    PRIMARY KEY (id)
);