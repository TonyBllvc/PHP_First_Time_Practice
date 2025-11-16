<?php
include 'db_setup.php'; // This runs the checks and creates if needed; $conn is now available

// Now use $conn for your queries, e.g., inserting a user
// $stmt = $conn->prepare("INSERT INTO users (name, password, email) VALUES (?, ?, ?)");
// etc.

// Close connection at the end if not needed
$conn->close();
?>