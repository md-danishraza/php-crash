<?php




// Defining constants for database connection
define("DB_HOST", "localhost");
define("DB_USER", "danish");  // XAMPP default user
define("DB_PASS", "md.danish");      // XAMPP default has no password for 'root'
define("DB_NAME", "php-dev"); // Replace with your database name
define("DB_PORT", 3307);  

// Creating a connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// echo "Connected successfully";




?>


