<?php
    if (isset($_POST['Delete'])) {
        $conn = new mysqli('localhost', 'root', '', 'Gomez_StudentInfoSystem');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $courseId = $_POST['courseID'];

    $queryDelete = "DELETE FROM course WHERE courseID='$courseId'";
    
    $resultDelete = mysqli_query($conn, $queryDelete);

    if ($resultDelete) {
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Course Information</title>
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
    <h1>The course has been Deleted!</h1>
    <button ><a href="CourseView.php">VIEW DETAILS</button></a>
   
</body>
</html>