<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = "";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);

if($mysqli->connect_errno ) {
    printf("Connection failed: %s<br />", $mysqli->connect_error);
    exit();
}
    printf('Connected successfully.<br />');


if ($mysqli->query("CREATE DATABASE Gomez_StudentInfoSystem")) {
    printf("Database Gomez_StudentInfoSystem created successfully.<br />");
 }

$retval = mysqli_select_db( $mysqli, 'Gomez_StudentInfoSystem' );

if(! $retval ) {
    die('Could not select database: ' . mysqli_error($mysqli));
 }
    echo "Database Gomez_StudentInfoSystem selected successfully <br />";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, 'Gomez_StudentInfoSystem');
 
$sqlUsers = "CREATE TABLE students (
     userID INT PRIMARY KEY AUTO_INCREMENT,
     email VARCHAR(255) NOT NULL,
     firstName VARCHAR(255) NOT NULL,
     middleName VARCHAR(255) NOT NULL,
     lastName VARCHAR(255) NOT NULL,
     age INT NOT NULL, 
     contact VARCHAR(255) NOT NULL,
     address VARCHAR(255) NOT NULL
 )";
 
 if ($mysqli->query($sqlUsers) === TRUE) 
     echo "Table students created successfully.<br />";
 
 $sqlCourse = "CREATE TABLE Course (
     courseID INT PRIMARY KEY AUTO_INCREMENT,
     courseName VARCHAR(255) NOT NULL,
     courseCode VARCHAR(255) NOT NULL,
     courseDescription VARCHAR(255) NOT NULL
 )";
 
 if ($mysqli->query($sqlCourse) === TRUE) 
     echo "Table Course created successfully.<br />";
 
 $sqlEnrollment = "CREATE TABLE Enrollment (
     enrollmentID INT PRIMARY KEY,
     userID INT,
     courseID INT,
     FOREIGN KEY (userID) REFERENCES Users(userID),
     FOREIGN KEY (courseID) REFERENCES Course(courseID)
 )";
 
 if ($mysqli->query($sqlEnrollment) === TRUE) 
     echo "Table Enrollment created successfully.<br />";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    </style>
</head>
<body>   
    <button ><a href="./Gomez_Final/Dashboard.html">Start Registration</button></a>
</body>
</html>