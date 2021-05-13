<?php

	// Create and establish database connection
	$conn = mysqli_connect(DB_HOST, DB_HOST_USER, DB_HOST_PASS, DB_USER, DB_PASS, DB_NAME); // Host, Phpmyadmin Username, Password, Database Name

	// Check the connection
	if(mysqli_connect_errno()) {
		// Connection failed
		echo "Failed to connect to MySQL";
	}

?>