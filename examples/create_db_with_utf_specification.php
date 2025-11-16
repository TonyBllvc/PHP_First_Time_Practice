<?php
/**
 * Essential: Handles DB creation + table creation automatically.
 * Only modify DB credentials + table schemas.
 */

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "my_app_db";

/* Connect without selecting DB */
$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* Create database */
/**
 * Specifying utf8mb4 ensures full Unicode support.
 * Collation defines sorting + comparison rules.
 */
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS `$dbName` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
if (!$conn->query($sqlCreateDB)) {
    die("DB creation failed: " . $conn->error);
}

$conn->close();

/* Reconnect using the new DB */
$conn = new mysqli($host, $user, $pass, $dbName);
if ($conn->connect_error) {
    die("DB connection failed: " . $conn->connect_error);
}

/* Example table: users */
$sqlUsers = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        password_hash VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )
";
if (!$conn->query($sqlUsers)) {
    die("Table creation failed (users): " . $conn->error);
}

/* Example table: posts */
$sqlPosts = "
    CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        body TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id)
    )
";
if (!$conn->query($sqlPosts)) {
    die("Table creation failed (posts): " . $conn->error);
}

echo "Database and tables ready.";
$conn->close();
?>
