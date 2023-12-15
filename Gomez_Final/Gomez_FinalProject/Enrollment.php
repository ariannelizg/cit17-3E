<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>Student Information System</title>
    
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid pink;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border: none; 
            text-align: center;
        }

        button a {
            color: pink;
            text-decoration: none; 
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Course Id</th>
            <th>Course Name</th>
        </tr>
    
        <?php
            $conn = new mysqli('localhost', 'root', '', 'Gomez_StudentInfoSystem');
            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            } else {
                $query = "SELECT users.userID, users.firstName, course.courseID, course.courseName FROM users, course;";
                $result = $conn->query($query);
    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["userID"] . "</td>";
                        echo "<td>" . $row["firstName"] . "</td>";
                        echo "<td>" . $row["courseID"] . "</td>";
                        echo "<td>" . $row["courseName"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>NO ENROLLMENT AS OF THE MOMENT</td></tr>";
                }
            }
        ?>
    </table>
    <button><a href="Dashboard.html">Return to homepage</a></button>
</body>
</html>