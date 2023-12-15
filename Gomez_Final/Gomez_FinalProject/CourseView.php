<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
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
            background-color: pink;
            color: white;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            border: none; 
            text-align: center;
        }

        button a {
            color: white;
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
                <th>Course Id </th>
                <th>Course Name </th>
                <th>Course Code </th>
                <th>Course Description </th>
               
            </tr>
        
            <?php
                $conn = new mysqli('localhost', 'root','','Gomez_StudentInfoSystem');
                    if($conn->connect_error){
                        die('Connection Failed :' .$conn->connect_error);

                    }else{
                        $query = "SELECT * FROM course;"; 
                        $result = $conn->query($query); 
                
                            if ($result->num_rows > 0)  
                                { 
                                    while($row = $result->fetch_assoc()) 
                                        { 
                                            echo  "<tr><td>". $row["courseID"] ."</td>
                                                   <td>". $row["courseName"]."</td>
                                                   <td>". $row["courseCode"]."</td>
                                                   <td>". $row["courseDescription"]."</td></tr>";
                                        }
                                }   
                            else { 
                                echo "NO COURSE AS OF THE MOMENT".
                                     "<tr><td>". "N/A" .
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". "</td></tr>";
                                }
                            $conn->close(); 
                        }
            ?>
        </table>
        <button ><a href="CourseUpdate.html">Update your course</button></a>
        <button ><a href="CourseDelete.html">Delete Course</button></a>
        <button ><a href="Course.html">Register another course</button></a>
        <button><a href="Dashboard.html">Return to homepage</a></button>
    </body>
</html>