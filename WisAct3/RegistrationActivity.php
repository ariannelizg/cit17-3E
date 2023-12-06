<!DOCTYPE html>
<html lang="en">
    <html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <title>REGISTRATION</title>
       <style>
        table, th, td {
        border:1px solid black;
        }
        .button{
            color: pink;
            text-decoration: none;
        }
        
        </style>
    </head>
    
    <body>
        <h1>STUDENT REGISTRATION</h1>
        <table>
            <tr>
                <th>UserName </th>
                <th>Email </th>    
            </tr>
            <?php
                $UserName = $_POST['UserName'];
                $Email = $_POST['Email'];

                $conn = new mysqli('localhost', 'root','','login');
                    if($conn->connect_error){
                        die('Connection Failed :' .$conn->connect_error);

                    }else{

                        $stmt = $conn->prepare("insert into users(UserName,Email)values(?, ?)");
                        $stmt->bind_param("ss", $UserName, $Email);
                        $stmt->execute();
                  
                        $query = "SELECT * FROM users;"; 
                        $result = $conn->query($query); 
                
                            if ($result->num_rows > 0)  
                                { 
                                    while($row = $result->fetch_assoc()) 
                                        { 
                                            echo  "<tr><td>". $row["username"] ."</td>
                                                   <td>". $row["email"]."</td></tr>";
                                        }
                                }   
                            else { 
                                echo "NO REGISTRATION AS OF THE MOMENT".
                                     "<tr><td>". "N/A" .
                                     "</td><td>". "N/A". "</td></tr>";
                                }
                            $conn->close(); 
                        }
            ?>
        </table>
        <br>
        <button ><a href="RegistrationActivity.html">CREATE</button></a>
    </body>
</html>