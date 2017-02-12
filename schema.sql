DROP TABLE users;

CREATE TABLE users(
	user_id integer primary key,
	username varchar(30),
	name varchar(30),
	email varchar(50),
	password varchar(256),
	salt varchar(256)
);

DROP TABLE lists;

CREATE TABLE lists(
	user_id integer,
	list_id integer primary key,
	title varchar(50),
	date_created date,
	last_modified datetime,
	active integer
);

DROP TABLE list_items;

CREATE TABLE list_items(
	list_id integer,
	item_id integer primary key,
	content varchar(100),
	state integer
);

DROP TABLE settings;

CREATE TABLE settings(
	user_id integer,
	font integer,
	size integer,
	email_notification integer,
	time_deletion integer
);
