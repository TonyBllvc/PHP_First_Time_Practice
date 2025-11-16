<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Alter table to add UNIQUE constraint on email
$tableName = "my_table";
$sqlAlterTable = "ALTER TABLE $tableName ADD UNIQUE (email)";

if ($conn->query($sqlAlterTable) === TRUE) {
    echo "Unique constraint added to email column successfully.<br>";
} else {
    echo "Error adding unique constraint: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>