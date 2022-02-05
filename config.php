<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "root", "", "complete-blog-php");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
       // coming soon...

// define global constants
	define ('ROOT_PATH', realpath(dirname("C:\xampp\htdocs\complete-blog-php")));
	define('BASE_URL', 'http://localhost/complete-blog-php/');
?>