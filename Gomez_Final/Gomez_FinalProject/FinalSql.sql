CREATE TABLE users (
    UserId INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    MiddleName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    PhoneNum VARCHAR(11) NOT NULL,
    PRIMARY KEY (UserId)
);

ALTER TABLE users AUTO_INCREMENT=401;
INSERT INTO users (FirstName,MiddleName, LastName, Email, PhoneNum)
VALUES ('Arianne','Gomez','aigomez@gmail.com','09665295925'),
SELECT * FROM users;

CREATE TABLE students (
    StudentId INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Age INT NOT NULL,
    Email VARCHAR(255) NOT NULL,
    PhoneNum VARCHAR(11) NOT NULL,
    Address VARCHAR (255) NOT NULL,
    PRIMARY KEY (StudentId)
);

ALTER TABLE students AUTO_INCREMENT=301;
INSERT INTO students (FirstName, MiddleName, LastName, Age, Email, PhoneNum, Address)
VALUES ('Gian','Pascua','Bernardino','egbernardino@gmail.com','09734124732','Baguio City'),
('Raphaell','Ramos','Ridao','rrridao@gmail.com','09173418592', 'Baguio City'),
('Gabriel','Viste','Caluza','gvcaluza@gmail.com','09662836152', 'Baguio City');
SELECT * FROM students;

CREATE TABLE instructors (
    InstructorId INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Age INT NOT NULL,
    Email VARCHAR(255) NOT NULL,
    PhoneNum VARCHAR(11) NOT NULL,
    PRIMARY KEY(InstructorId)
);
ALTER TABLE instructors AUTO_INCREMENT=201;
INSERT INTO instructors (FirstName, LastName, Age, Email, PhoneNum)
VALUES ('Clint', 'Fernandez', 'cfernandez@gmail.com', '09172341845'),
('Raphael', 'Severino', 'rseverino@gmail.com', '09663496732'),
('Vixen', 'Gareza', 'vgareza@gmail.com', '09175396021 ');
SELECT * FROM instructor;

CREATE TABLE courses (
    CourseId INT NOT NULL AUTO_INCREMENT,
    CourseName VARCHAR(255) NOT NULL,
    CourseCode INT NOT NULL,
    CourseDescription VARCHAR (255) NOT NULL,
    PRIMARY KEY (CourseID),
);

ALTER TABLE courses AUTO_INCREMENT=101;
    INSERT INTO courses (CourseId, CourseName, CourseCode, CourseDescription)
    VALUES (201,'Web Development','CIT17', 'Web Designing' ),
    (202'Mobile Development','3.0', 'Mobile Designing'),
    (203'Accounting Fundamentals','3.0', 'Accounting Sheet');
SELECT * FROM courses;

CREATE TABLE enrollments (
    EnrollmentId INT NOT NULL AUTO_INCREMENT,
    UserId INT NOT NULL,
    CourseId INT NOT NULL,
    PRIMARY KEY(EnrollmentId),
    FOREIGN KEY(StudentId) REFERENCES students(StudentId),
    FOREIGN KEY(CourseId) REFERENCES courses(CourseId)
);

INSERT INTO enrollments (EnrollmentId, StudentId, CourseId)
VALUES (301,'21-2844-561', 201),
(301, '21-1234-567', 92),
(301, '21-1287-324', 75),
(302, '21-6785-444', 99),
(302, '21-1268-555', 98),
(302, '21-1265-789', 86),
(303, '21-3456-780', 92),
(303, '21-4321-123', 91),
(303, '21-8753-752', 77);
SELECT * FROM enrollments;