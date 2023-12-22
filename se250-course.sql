CREATE DATABASE  IF NOT EXISTS se250;
USE se250;

DROP TABLE IF EXISTS course;

CREATE TABLE course (
  Department varchar(30) DEFAULT NULL,
  Semester varchar(20) DEFAULT NULL,
  ID varchar(10) NOT NULL,
  ClassName varchar(90) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO course 
VALUES 
('Software Engineering','Fall23','SE250','Introduction To Software Engineering'),
('Software Engineering','Spring24','SE350','SE and Human Computer Interaction'),
('Software Engineering','Spring24','SE470','Software Quality'),
('Software Engineering','Spring24','SE475','Software Construction');

INSERT INTO course
VALUES ('Math', 'Spring24', 'MATH312', 'Linear Algebra');

INSERT INTO course
VALUES ('MATH', 'Fall23', 'MATH221', 'Calculus 1'), 
		('English', 'Fall23', 'ENGL332', 'Writing for the Professions')
        ('English', 'Spring24', 'ENGL191', 'Intro to Rhetorical Writing');