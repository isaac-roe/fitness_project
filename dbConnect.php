<!DOCTYPE html>

<html>
	<?php

	$servername = "fitnessappdb";
	$username = "admin";
	$password = "fitnessfreaks";

	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";


	$sql = "CREATE DATABASE test";

	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$conn->close();
	?>
</html>