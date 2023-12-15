<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>INSTRUCTOR REGISTRATION</title>
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
            background-color: #4caf50;
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
                <th>User Id </th>
                <th>Email </th>
                <th>First Name </th>
                <th>Middle Name </th>
                <th>Last Name </th>
                <th>Age </th>
                <th>Contact </th>
                <th>Address</th>
            </tr>
        
            <?php
                $conn = new mysqli('localhost', 'root','','Gomez_StudentInfoSystem');
                    if($conn->connect_error){
                        die('Connection Failed :' .$conn->connect_error);

                    }else{
                        $query = "SELECT * FROM users;"; 
                        $result = $conn->query($query); 
                
                            if ($result->num_rows > 0)  
                                { 
                                    while($row = $result->fetch_assoc()) 
                                        { 
                                            echo  "<tr><td>". $row["userID"] ."</td>
                                                   <td>". $row["email"]."</td>
                                                   <td>". $row["firstName"]."</td>
                                                   <td>". $row["middleName"]."</td>
                                                   <td>". $row["lastName"]."</td>
                                                   <td>". $row["age"]."</td>
                                                   <td>". $row["contact"]."</td>
                                                   <td>". $row["address"]."</td></tr>";
                                        }
                                }   
                            else { 
                                echo "NO REGISTRATION AS OF THE MOMENT".
                                     "<tr><td>". "N/A" .
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". "</td></tr>";
                                }
                            $conn->close(); 
                        }
            ?>
        </table>
        <button ><a href="InstructorUpdate.html">Update your details</button></a>
        <button ><a href="InstructorDelete.html">Delete your account</button></a>
        <button ><a href="InstructorRegistration.html">Register another account</button></a>
        <button><a href="Dashboard.html">Return to homepage</a></button>
    </body>
</html>