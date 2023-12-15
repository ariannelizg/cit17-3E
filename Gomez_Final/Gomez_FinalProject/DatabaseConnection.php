<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Gomez_StudentInfoSystem";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_errno ) {
		printf("Connect failed: %s<br />", $mysqli->connect_error);
		exit();
		}
	printf('Connected successfully.<br />');
?>