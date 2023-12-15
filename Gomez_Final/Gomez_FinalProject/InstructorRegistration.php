<?php
$conn = new mysqli('localhost', 'root', '', 'Gomez_StudentInfoSystem');
if ($conn->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli->connect_error);
    exit();
} else {
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $middleName = $_POST['middlename'];
    $lastName = $_POST['lastname'];
    $age = $_POST['age'];
    $contact  = $_POST['contact'];
    $address  = $_POST['address'];

    $sql = "INSERT INTO instructors (email, firstname, middlename, lastname, age, contact, address) VALUES ('$email', '$firstName', '$middleName', '$lastName', '$age', '$contact', '$address')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Successfully added your record!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER INSTRUCTOR</title>

    <style>
        body {
            font-family: Georgia ,serif;
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
    <h1>Instructor's information has been Registered</h1>
    <button><a href="InstructorView.php" style="text-decoration: none; color: #fff;">View Details</a></button>
</body>

</html>