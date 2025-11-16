<?php
// Database connection parameters (shared across files – consider moving to a config file)
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "user_db"; // database name
$tableName = "users"; // table name

// Function to set up DB and table if needed
function setupDatabase() {
    global $servername, $username, $password, $dbName, $tableName;

    // Step 1: Connect to MySQL server
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Step 2: Check if database exists
    $dbExists = $conn->query("SHOW DATABASES LIKE '$dbName'")->num_rows > 0;

    if (!$dbExists) {
        // Create database if not exists
        $sqlCreateDB = "CREATE DATABASE $dbName CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
        if ($conn->query($sqlCreateDB) === TRUE) {
            echo "Database created successfully.<br>"; // Optional: Remove in production
        } else {
            die("Error creating database: " . $conn->error);
        }
    } else {
        // echo "Database already exists.<br>"; // Optional debug
    }

    // Step 3: Select the database
    if (!$conn->select_db($dbName)) {
        die("Failed to select database: " . $conn->error);
    }

    // Step 4: Check if table exists
    $tableExists = $conn->query("SHOW TABLES LIKE '$tableName'")->num_rows > 0;

    if (!$tableExists) {
        // Create table if not exists
        $sqlCreateTable = "
        CREATE TABLE $tableName (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            role ENUM('user', 'admin') NOT NULL DEFAULT 'user', 
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($conn->query($sqlCreateTable) === TRUE) {
            echo "Table created successfully.<br>"; // Optional: Remove in production
        } else {
            die("Error creating table: " . $conn->error);
        }
    } else {
        // echo "Table already exists.<br>"; // Optional debug
    }

    // Return the connection for use in the including script
    return $conn;
}

// Call the function (runs setup if needed)
$conn = setupDatabase(); // Now $conn is ready for queries in the main script
// Note: In production, you might not echo messages – log them instead.
?>