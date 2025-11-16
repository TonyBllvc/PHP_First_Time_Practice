<?php
/**
 * Automatic database and table setup.
 * This script:
 *  1. Connects to MySQL (without selecting a DB)
 *  2. Creates the database if missing
 *  3. Reconnects to the created DB
 *  4. Creates all required tables
 *
 * Adjust credentials and table schemas as needed.
 */

$host   = "localhost";
$user   = "root";
$pass   = "";
$dbName = "my_app_db";

/**
 * Step 1: Connect without selecting a database.
 * Reason: Database may not exist yet.
 */
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/**
 * Step 2: Create database (if missing).
 * Specifying utf8mb4 ensures full Unicode support.
 * Collation defines sorting + comparison rules.
 */
$sqlCreateDB = "
    CREATE DATABASE IF NOT EXISTS `$dbName`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci
";

if (!$conn->query($sqlCreateDB)) {
    die("Database creation error: " . $conn->error);
}

$conn->close();

/**
 * Step 3: Reconnect selecting the database.
 */
$conn = new mysqli($host, $user, $pass, $dbName);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}

/**
 * Step 4: Create tables.
 * Use IF NOT EXISTS to allow re-running safely.
 */

$tables = [];

/* Users table */
$tables[] = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
";

/* Posts table */
$tables[] = "
    CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        body TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    )
";

/**
 * Execute all table creation queries.
 */
foreach ($tables as $sql) {
    if (!$conn->query($sql)) {
        die("Table creation error: " . $conn->error);
    }
}

echo "Database and tables initialized.";
$conn->close();
?>
