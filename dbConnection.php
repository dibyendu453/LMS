	<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "hms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$database);

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	//echo "HMS database Connected successfully";
	?>