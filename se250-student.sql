USE se250;
DROP TABLE IF EXISTS student;

CREATE TABLE student (
  ID INT NOT NULL AUTO_INCREMENT,
  Adress varchar(50) DEFAULT NULL,
  Pass varchar(20) DEFAULT NULL,
  FName varchar(20) DEFAULT NULL,
  LName varchar(20) DEFAULT NULL,
  Login VARCHAR(10),
  PRIMARY KEY (`ID`)
);

INSERT INTO student VALUES (1,'123 Green St. St. Cloud MN 56301','123','Jonah','Deschenes','JDES'),
(2,'456 Blue Rd. St. Cloud MN 56301','123','Zachery','Groenewold','ZGRO'),
(3,'789 Orange Ct. St. Cloud MN 56301','password','Sundus','Mahamud', 'SMA'),
(4,'123 Road St. Everytown MA 55555','secret','John','Doe', 'JODO'),
(5,'456 Street Rd. Everytown MA 55555','qwerty','Jane','Doe', 'JADO');
