USE se250;

DROP TABLE IF EXISTS courseregistration;

CREATE TABLE courseregistration (
  StudentID int NOT NULL,
  CourseID varchar(10) NOT NULL,
  PRIMARY KEY (StudentID,CourseID),
  FOREIGN KEY (StudentID) 
	REFERENCES student(ID),
    FOREIGN KEY (CourseID)
		REFERENCES course(ID)
); 

INSERT INTO courseregistration
VALUES (1,'SE250'),
(1,'SE350'),
(1,'SE470'),
(2,'SE250'),
(2,'SE470'),
(3,'SE250'),
(3,'SE470'),
(4,'SE350'),
(5,'SE350');
