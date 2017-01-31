INSERT INTO users values(NULL, "adam", "adamfeuer@adamisbest.net", "");
INSERT INTO users values(NULL, "alex", "alexmotoc@alexsucks.net", "");
INSERT INTO users values(NULL, "steve", "steve@steve.net", "");

INSERT INTO settings values("1", "Arial", "12", "1","10");
INSERT INTO settings values("2", "Roboto", "12", "0","10");
INSERT INTO settings values("3", "Times New Roman", "20", "1","15");

INSERT INTO lists values("1",NULL, "Shopping", "2017-01-31","2017-01-31 18:00", "1");
INSERT INTO list_items values("1",NULL,  "Apples", "1");
INSERT INTO list_items values("1", NULL, "Eggs", "0");
INSERT INTO list_items values("1", NULL, "Grapes", "1");


INSERT INTO lists values("1", NULL, "Christmas Presents", "2016-12-10","2016-12-24 12:00", "0");
INSERT INTO list_items values("2", NULL, "Football", "1");
INSERT INTO list_items values("2", NULL, "Xbox", "0");
INSERT INTO list_items values("2", NULL, "TV", "0");


INSERT INTO lists values("2",NULL, "to do list", "2017-01-29","2017-01-29 02:02", "1");
INSERT INTO list_items values("3", NULL, "cs140", "1");
INSERT INTO list_items values("3", NULL, "cs139", "0");


INSERT INTO lists values("3", NULL, "chores", "2015-01-01","2017-01-27 19:00", "1");
INSERT INTO list_items values("4", NULL, "clean garden", "0");
INSERT INTO list_items values("4", NULL, "take out bins", "1");