<?php
    if (isset($_POST['Update'])) {
        $conn = new mysqli('localhost', 'root', '', 'Gomez_StudentInfoSystem');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        $courseId = $_POST['courseId'];
        $coursename = $_POST['courseName'];
        $coursecode = $_POST['courseCode'];
        $coursedescription = $_POST['courseDescription'];

        $query = "UPDATE course SET courseName='$coursename', courseCode='$coursecode', courseDescription='$coursedescription' WHERE courseId='$courseId'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '';
        } else {
            echo '' . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <style>
        body {
            font-family: Georgia, serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>The course data has been successfully updated!</h1>
    <button ><a href="CourseView.php">VIEW DETAILS</button></a>
   
</body>
</html>