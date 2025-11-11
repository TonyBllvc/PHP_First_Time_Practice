<?php

/** 
 Yes, you can absolutely create a MySQL database, tables, and manage data entirely through your PHP codebase, rather than relying on phpMyAdmin. phpMyAdmin is a graphical user interface (GUI) tool that simplifies database administration, but it performs the same underlying SQL queries that you can execute directly within your PHP scripts.
  
 To achieve this in PHP, you would follow these general steps:
 Establish a Database Connection: Use PHP's mysqli or PDO (PHP Data Objects) extension to connect to your MySQL server.
 Code
 **/

   $servername = "localhost";
   $username = "your_username";
   $password = "your_password";

   // Create connection
   $conn = new mysqli($servername, $username, $password);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
   
    //   Create a Database: Execute a CREATE DATABASE SQL query using your established connection. 
    //  Code 
    // ... (database connection code) ... 

   $sql = "CREATE DATABASE my_new_database";
   if ($conn->query($sql) === TRUE) {
       echo "Database created successfully";
   } else {
       echo "Error creating database: " . $conn->error;
   }
    /**  
     Select the Database: After creating the database, you'll need to select it for subsequent operations like creating tables. You can either specify it in the initial connection or use mysqli_select_db(). 
     Create Tables: Execute CREATE TABLE SQL queries to define the structure of your tables within the newly created database. 
    **/
     //  Code 
   
     // ... (database connection and selection code) ... 

   $sql = "CREATE TABLE Users (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(30) NOT NULL,
       last_name VARCHAR(30) NOT NULL,
       email VARCHAR(50),
       reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";

   if ($conn->query($sql) === TRUE) {
       echo "Table Users created successfully";
   } else {
       echo "Error creating table: " . $conn->error;
   }

// Perform Data Operations: Use INSERT, SELECT, UPDATE, and DELETE SQL queries within your PHP code to manage the data in your tables.
// Close the Connection: Always close the database connection when you are finished to release resources.
// Code
   // ... (database operations) ...
   $conn->close();

// This approach allows for greater automation and integration within your application's logic, especially useful for dynamic database creation, migrations, or setup scripts.


?>