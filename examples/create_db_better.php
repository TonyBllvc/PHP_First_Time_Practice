<?php
// Database connection parameters
$servername = "localhost"; // Usually 'localhost' for local development
$username = "root";        // Default MySQL username, change if necessary
$password = "";            // Default password, often empty for local setup; change for security

// Step 1: Create a connection to the MySQL server (without specifying a database yet)
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Create the database
$dbName = "my_database"; // Change this to your desired database name
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbName";

if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Step 3: Now connect to the newly created database
$conn->select_db($dbName); // Or you can close and reconnect with the DB name

// Alternatively, close the connection and reconnect with the database
// $conn->close();
// $conn = new mysqli($servername, $username, $password, $dbName);

// Check connection again
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 4: Create a table in the database
$tableName = "my_table"; // Change this to your desired table name
$sqlCreateTable = "
CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>